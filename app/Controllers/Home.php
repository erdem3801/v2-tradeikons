<?php

namespace App\Controllers;

use App\Models\CategoriesModel;
use App\Models\SettingsModel;

class Home extends BaseController
{
    private $settingsModel;
    private $categoryModel;
    private $viewData;

    public function __construct()
    {
        $cache = \Config\Services::cache();
        $this->settingsModel = model('SettingsModel');
        $this->categoryModel = model('CategoriesModel');
        if (!$categories = $cache->get('categories')) {
            $category = $this->categoryModel->orderBy('category_parent', 'ASC')->findAll();
            $categoriesTree = $this->categoryModel->getCategoryTree($category);
            $cache->save('categories', $categoriesTree, 3000);
        }
        if (!$settings = $cache->get('settings')) {
            $settings = $this->settingsModel->first();
            // Save into the cache for 5 minutes
            $cache->save('settings', $settings, 3000);
        }
        $this->viewData['settings'] =    $settings;
        $this->viewData['categories'] =  $categories;  
    }
    public function index()
    {
        echo '<pre>';
        foreach ($this->viewData['categories'] as $key => $value) {
            print_r($value['category_title']);
            echo '<br>';
          
            # code...
        }
        print_d($this->viewData['categories']);
        die();
        return view('home/homeView', $this->viewData);
    }
}
