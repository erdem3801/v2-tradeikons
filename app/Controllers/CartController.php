<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CartController extends BaseController
{
    private $CartModel;

    private $viewData;


    public function __construct()
    {


        $this->viewData = $this->getDefaults();
    }
    public function Cart()
    {
        helper(['form','array']);
        if ($this->request->getMethod() == 'post') {
            $userID = session()->get('userData.user');
            print_d( $userID );
            if(!$userID){
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
                        'user_pass' => rand(100000, 999999),
                    ];
                    $userID = $this->model->insert($queryData); 
                   
                }
            }
            // print_d($this->request->getPost());
        }
        return view('cart/CartView', $this->viewData);
        //
    }
}
