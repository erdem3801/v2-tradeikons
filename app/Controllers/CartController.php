<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use Exception;
use Faker\Core\Number;

class CartController extends BaseController
{
    /**
     * @var Codeigniter/HTTP/InterfaceRequest
     */
    protected $request;
    private $viewData;


    public function __construct()
    {

        $this->userModel = new UserModel();
        $this->viewData = $this->getDefaults();
    }
    public function Cart()
    {
        helper(['form', 'array', 'genarator']);
        $deliveryPrice =  ($this->sum) > 300 ? 0 : 22.75;
        $this->viewData['deliveryPrice'] = number_format($deliveryPrice,2);
        $this->viewData['sum'] = $this->sum ;
        if ($this->request->getMethod() == 'post') {
            $this->viewData['ec_select_country'] = $this->request->getPost('ec_select_country');
            $data = array();
            try {
                $userID = session()->get('user.user.user_id');
                if (!$userID) {
                    $userController = new UserController();
                    $data = $this->request->getPost();
                    $data['password'] = rand(9999, 10000);
                    $userID = $userController->register_user($data);
                }
                $checoutController = new CheckoutController();
                $userModel = new UserModel();
                $user = $userModel->find($userID);

                if (!$user)
                    throw new Exception('user not found');
               
                $data = [
                    'user' => $user,
                    'basketTotal' => $this->sum,
                    'delivartPrice' => $deliveryPrice,
                    'oid' => 1,
                    'basket' => $this->basket
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
