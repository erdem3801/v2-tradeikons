<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ProductController extends BaseController
{
    public function GetFilteredProduct()
    {
        $order = $this->request->getVar('order');
        
        //
    }
}
