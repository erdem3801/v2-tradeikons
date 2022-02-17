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
        return view('cart/CartView',$this->viewData);
        //
    }
}
