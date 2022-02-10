<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\HTTP\ResponseInterface;

use CodeIgniter\Validation\Exceptions\ValidationException;
use Config\Services;
use Exception;

class UserController extends ResourceController
{
    protected $model;
    public function __construct()
    {
        $this->model = model('UserModel');
    }
    /**
     * Return an array of resource objects, themselves in array format
     * Return JWT token for user
     * @return mixed
     */
    public function auth()
    {

        $rules = [
            'user' => 'required|min_length[3]|max_length[50]',
            'password' => 'required|min_length[4]|max_length[20]|validateUser[email, password]',
        ];

        $errors = [
            'password' => [
                'validateUser' => 'Invalid login credentials provided'
            ]
        ];

        $data = $this->request->getPost();
        $data = empty($data) ? json_decode($data, true) : $data;
        $authenticationHeader = $this->request->getServer('HTTP_AUTHORIZATION');

        if (!$this->validateRequest($data, $rules, $errors, $authenticationHeader)) {
            return $this->respond(
                $this->validator->getErrors(),
                ResponseInterface::HTTP_BAD_REQUEST
            );
        }
        return $this->getJWTForUser($data['user']);
        return $this->respond(['error' => false], ResponseInterface::HTTP_OK);
        //
    }



    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $rules = [
            'username' => 'required|min_length[3]|max_length[20]',
            'firstname' => 'required|min_length[1]|max_length[32]',
            'lastname' => 'required|min_length[1]|max_length[32]',
            'email' => 'required|min_length[6]|max_length[50]|valid_email',
            'password' => 'required|min_length[4]|max_length[20]',
            'user_group_id' => 'required|hasPermission[modify,user/user]'
        ];

        $errors = [
            'user_group_id' => [
                'hasPermission' => 'out of authority'
            ]
        ];

        $data = $this->request->getPost();
        $data = empty($data) ? json_decode($data, true) : $data;
        $authenticationHeader = $this->request->getServer('HTTP_AUTHORIZATION');


        if (!$this->validateRequest($data, $rules, $errors, $authenticationHeader)) {
            return $this->respond(
                $this->validator->getErrors(),
                ResponseInterface::HTTP_BAD_REQUEST
            );
        }

        $this->model->insert([
            'username' => $data['username'],
            'user_group_id' => (int)$data['user_group_id'] ?? 1,
            'password' => $data['password'],
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'image' => $data['image'],
            'status' => (int)$data['status'],
            'date_added' => date("Y-m-d H:i:s")
        ]);
        unset($data['auth']);
        return $this->respondCreated($data);
        //
    }


    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $rules = [
            'username' => 'required|min_length[3]|max_length[20]',
            'firstname' => 'required|min_length[1]|max_length[32]',
            'lastname' => 'required|min_length[1]|max_length[32]',
            'email' => 'required|unique|min_length[6]|max_length[50]|valid_email',
            'password' => 'required|min_length[4]|max_length[20]',
            'user_group_id' => 'required|hasPermission[modify,user/user]'
        ];

        $errors = [
            'user_group_id' => [
                'hasPermission' => 'out of authority'
            ]
        ];
        $data = $this->request->getPost();
        $data = empty($data) ? json_decode($data, true) : $data;
        $authenticationHeader = $this->request->getServer('HTTP_AUTHORIZATION');


        if (!$this->validateRequest($data, $rules, $errors, $authenticationHeader)) {
            return $this->fail(
                $this->validator->getErrors(),
                ResponseInterface::HTTP_BAD_REQUEST
            );
        }

        $this->model->update($id, [
            'username' => $data['username'],
            'user_group_id' => (int)$data['user_group_id'] ?? 0,
            'password' => $data['password'],
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'image' => $data['image'],
            'status' => (int)$data['status'],
            'date_added' => date("Y-m-d H:i:s")
        ]);
        return $this->respondUpdated($data);
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->model->delete($id);
        //
    }


    private function validateRequest($input, array $rules, array $messages = [], $authenticationHeader)
    {

        helper('jwt');
        $encodedToken = getJWTFromRequest($authenticationHeader);
        $input['auth'] = validateJWTFromRequest($encodedToken);


        $this->validator = Services::Validation()->setRules($rules);
        // If you replace the $rules array with the name of the group
        if (is_string($rules)) {
            $validation = config('Validation');

            // If the rule wasn't found in the \Config\Validation, we
            // should throw an exception so the developer can find it.
            if (!isset($validation->$rules)) {
                throw ValidationException::forRuleNotFound($rules);
            }

            // If no error message is defined, use the error message in the Config\Validation file
            if (!$messages) {
                $errorName = $rules . '_errors';
                $messages = $validation->$errorName ?? [];
            }

            $rules = $validation->$rules;
        }
        return $this->validator->setRules($rules, $messages)->run($input);
    }
    private function getJWTForUser(string $user, int $responseCode = ResponseInterface::HTTP_OK)
    {
        try {

            $user_query = $this->model->findUserByEmailAddress($user);
            if (!$user_query)
                $user_query = $this->model->findUserByUserName($user);
            unset($user_query['password']);
            helper('jwt');

            return $this
                ->respond(
                    [
                        'message' => 'User authenticated successfully',
                        'user' => $user_query,
                        'access_token' => getSignedJWTForUser($user)
                    ]
                );
        } catch (Exception $exception) {
            return $this
                ->respond(
                    [
                        'error' => $exception->getMessage(),
                    ],
                    $responseCode
                );
        }
    }
}
