<?php
namespace App\Controllers;
use App\Controllers\BaseController;
 
use Exception; 

class UserController extends BaseController
{
    /**
     * @var Codeigniter/HTTP/IncomingRequest
     */
    protected $request;
    protected $model;
    private $viewData;
    public function __construct()
    {
        $this->model = model('UserModel');
        $this->viewData = $this->getDefaults();
    }
    /**
     * Return an array of resource objects, themselves in array format
     * Return JWT token for user
     * @return mixed
     */
    public function auth()
    {
        helper(['form']);
        if($this->request->getMethod()== 'post'){
            $rules = [
                'email' => 'required|min_length[3]|max_length[50]|valid_email',
                'password' => 'required|min_length[4]|max_length[50]|validateUser[email, password]|hasPermission[mail,password]',
            ];
            $errors = [
                'password' => [
                    'validateUser' => 'Hesap bulunamadı! Lütfen tekrar deneyiniz.',
                    'required' => 'Şifrenizi girin.',
                    'min_length' => 'Şifre alanını 4 karakterden fazla olacak şekilde doldurun.',
                    'min_length' => 'Şifre alanını 50 karakterden az olacak şekilde doldurun.',
                    'hasPermission' => 'Mail onayınız yok'
                ]
            ];
            $data = $this->request->getPost();
            if ($this->validateRequest($data, $rules, $errors)) {
                $token = $this->getJWTForUser($data['email']);
                session()->set('userData',$token);
                return redirect()->to(base_url()."?token={$token['access_token']}");
            }
            $this->viewData['errors'] = $this->validator->getErrors(); 
        }
        return view('user/login', $this->viewData);
    }
    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function Register()
    {
        helper(['form','genarator']); 
        if ($this->request->getMethod(true) == 'POST') {
            $rules = [ 
                'firstname' => 'required|min_length[3]|max_length[32]',
                'lastname' => 'required|min_length[3]|max_length[32]',
                'email' => 'required|min_length[6]|max_length[50]|valid_email',
                'password' => 'required|min_length[4]|max_length[20]',
                'phonenumber' => 'required',
            ];
            $errors = [
                'firstname' => [
                    'required' => 'Ad  bilginizi girin',
                    'min_length' => 'Ad alanı en az 3 karakter olmalı',
                    'max_length' => 'Ad alanı en fazla 32 karakter olmalı',
                ],
                'lastname' => [
                    'required' => 'Soyad  bilginizi girin',
                    'min_length' => 'Soyad alanı en az 3 karakter olmalı',
                    'max_length' => 'Soyad alanı en fazla 32 karakter olmalı',
                ],
                'email' => [
                    'required' => 'Email bilgisini girin',
                    'min_length' => 'Email alanı en az 9 karakter olmalı',
                    'max_length' => 'Email alanı en fazla 32 karakter olmalı',
                    'valid_email' => 'Email alanı formatı doğru değil',
                ],
                'phonenumber' => 'Telefon numarası zorunlu'
            ];
            $data = $this->request->getPost();
            if (!$this->validateRequest($data, $rules, $errors,)) {
                $this->viewData['errors'] = $this->validator->getErrors();
            }
            else{
                $activationCode = activationCode();
                $queryData = [ 
                    'user_business_name' => $data['firstname'],
                    'user_name_surname' => $data['lastname'],
                    'user_mail' => $data['email'],
                    'user_phone' => $data['phonenumber'],
                    'user_adress' => $data['ec_select_city'] ?? '',
                    'user_county' => $data['ec_select_country'] ?? '', 
                    'user_reference_code' => $data['postalcode'] ?? '',
                    'user_activation_code' => $activationCode,
                    'user_pass' => $data['password'],
                ];
                $this->model->insert($queryData);
                // TODO kullanıcı kaydı başarılı biryere yönledir
                die('kullanıcı kayıt edildi');
            }
        }
        return view('user/register', $this->viewData);
        //
    }
    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url());
    }
    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->model->delete($id);
    }
   
    private function getJWTForUser(string $user)
    {
        try {
            $user_query = $this->model->findUserByEmailAddress($user);
            if (!$user_query)
                $user_query = $this->model->findUserByUserName($user);
            unset($user_query['password']);
            helper('jwt');
            return  [
                'message' => 'User authenticated successfully',
                'user' => $user_query,
                'access_token' => getSignedJWTForUser($user)
            ];
        } catch (Exception $exception) {
            return  [
                'error' => $exception->getMessage(),
            ];
        }
    }
}
