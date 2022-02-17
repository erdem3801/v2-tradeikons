<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CheckoutController extends BaseController
{
    private $checkoutModel;
    
    private $viewData;


    public function __construct()
    {
        
        $this->viewData = $this->getDefaults();
    }
    public function Checkout()
    {
        return view('checkout/CheckoutView',$this->viewData);
        //
    }
}
