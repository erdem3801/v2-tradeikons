<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use Exception;

class CartController extends BaseController
{  
    private $viewData;


    public function __construct()
    {

        $this->userModel = new UserModel();
        $this->viewData = $this->getDefaults();
    }
    public function Cart()
    {
        helper(['form', 'array', 'genarator']);
        if ($this->request->getMethod() == 'post') {
            $data = array();
            try {
                $userID = session()->get('user.user.user_id');
                if (!$userID) {
                    $userController = new UserController();
                    $data = $this->request->getPost();
                    $userID = $userController->register_user($data);
                } 
                $checoutController = new CheckoutController();
                $userModel = new UserModel();
                $user = $userModel->find($userID);
              
                if(!$user)
                    throw new Exception('user not found');
                $data = [
                    'user' => $user,
                    'basketTotal' => 10,
                    'delivartPrice' => 10,
                    'oid' => 1,
                    'basket' => array()
                ];
                $this->viewData['paytr_token'] = $checoutController->paytr($data);
            } catch (\Throwable $th) {
                print_d($th->getMessage());
            }
           
        }
        return view('cart/CartView', $this->viewData);
        //
    }
}
