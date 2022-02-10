<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CategoriesModel;
use App\Models\SettingsModel;

class CategoriesController extends BaseController
{
    private $CategoriesModel;
    private $viewData;
    private $settingsModel;


    public function __construct()
    {

        $cache = \Config\Services::cache();

        $this->settingsModel = model('SettingsModel');
        $this->CategoriesModel = model('CategoriesModel');

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
        $mainData = $this->CategoriesModel->where('category_slug', $main)->first();
        $submainData = $this->CategoriesModel->where('category_slug', $submain)->first();
        $categoryData = $this->CategoriesModel->where('category_slug', $category)->first();
        
        $breadcrump = array();
        if ($mainData) {
            $breadcrump[] =   [
                'url' => '',
                'title' => $mainData['category_title']
            ];
        }
        if ($submainData) {
            $breadcrump[] =   [

                'url' => $mainData['category_slug'].'/'.$submainData['category_slug'],
                'title' => $submainData['category_title']
            ];
        }
        if ($categoryData) {
            $breadcrump[] =   [
                'url' => $mainData['category_slug'].'/'.$submainData['category_slug'].'/'.$categoryData['category_slug'],
                'title' => $categoryData['category_title']
            ];
        }
        $this->viewData['baslik'] = $breadcrump;


        return view('categories/categoriesView', $this->viewData);
        //
    }
}
