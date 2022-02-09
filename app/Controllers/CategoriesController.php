<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SettingsModel;

class CategoriesController extends BaseController
{
    private $model;
    private $viewData;
    private $ozel;
    
    
    public function __construct()
    {
         
        $cache = \Config\Services::cache(); 
        
        $this->settingsModel = model('SettingsModel');
        if (!$categories = $cache->get('categories')) { 
            $categories = $this->settingsModel->getCategories();
            // Save into the cache for 5 minutes
            $cache->save('categories', $categories, 3000);
        } 
        if (!$settings = $cache->get('settings')) { 
            $settings = $this->settingsModel->first();
            // Save into the cache for 5 minutes
            $cache->save('settings', $settings, 3000);
        } 
        // if (!$product = $cache->get('product')) { 
        //     $product = $this->settingsModel->getProduct();
        //     Save into the cache for 5 minutes
        //     $cache->save('product', $product, 3000);
        // } 
        // $this->viewData['product'] =    $product;

        $this->viewData['settings'] =    $settings;
        $this->viewData['categories'] =  $categories; 
     
    }

    public function list($main, $submain, $category = '')
    {  
        foreach ($this->viewData['categories'] as $key => $value) {
            # code...
        }
        $this->viewData['baslik'] = array(
            [
                'url' => $main,
                'title' => $main 
            ],
            [
                'url' => $submain,
                'title' => $submain 
            ],
            [
                'url' => $category,
                'title' => $category
            ],
        );
      
        return view('categories/categoriesView',$this->viewData);
        //
    }
}
