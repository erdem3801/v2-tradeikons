<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CategoriesController extends BaseController
{
    public function list($main ,$submain,$category = '' )
    {
        echo $main . '--';
        echo $submain . '--';
        echo $category . '--';
        //
    }
}
