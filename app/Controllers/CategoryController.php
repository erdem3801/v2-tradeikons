<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CategoriesModel;
use App\Models\SettingsModel;

class CategoryController extends BaseController
{
    protected $model;
    private $viewData; 


    public function __construct()
    {
        $this->model = model('CategoriesModel');
          $this->viewData = $this->getDefaults();
    }

    public function list($main = '', $submain = '', $category = '')
    {
       
        $mainData = $this->model->where('category_slug', $main)->first();
        $submainData = $this->model->where('category_slug', $submain)->first();
        $categoryData = $this->model->where('category_slug', $category)->first();

        $filter_sort = $this->request->getVar('sort');
     
        
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
        $this->viewData['bannerImg'] = $submainData['category_image'];
        $this->viewData['mainbannerImg'] = $mainData['category_image'];
        $this->viewData['baslik'] = $breadcrump;
    


        return view('categories/categoriesView', $this->viewData);
        //
    }
}
