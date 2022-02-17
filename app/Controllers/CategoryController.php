<?php

namespace App\Controllers;

use App\Controllers\BaseController; 
use App\Models\Product\ProductModel;
use CodeIgniter\Commands\Help;
use Faker\Extension\Helper;

class CategoryController extends BaseController
{
    protected $model;
    private $categoryToProductModel;
    private $productModel;
    private $viewData;


    public function __construct()
    {
        $this->categoryToProductModel = model('CategoryToProduct');
        $this->model = model('CategoriesModel');
        $this->productModel = new ProductModel();
        $this->viewData = $this->getDefaults();
    }

    public function list($main = '', $submain = '', $category = '')
    {


        $mainData = $this->model->where('category_slug', $main)->first();
        $submainData = $this->model->where('category_slug', $submain)->first();
        $categoryData = $this->model->where('category_slug', $category)->first();


        $categoryID = 0;

        $breadcrump = array();
        if ($mainData) {
            $breadcrump[] =   [
                'url' => '#',
                'title' => $mainData['category_title']
            ];
            $categoryID = $mainData['category_id'];
        }
        if ($submainData) {
            $breadcrump[] =   [

                'url' => $mainData['category_slug'] . '/' . $submainData['category_slug'],
                'title' => $submainData['category_title']
            ];
            $categoryID = $submainData['category_id'];
        }
        if ($categoryData) {
            $breadcrump[] =   [
                'url' => $mainData['category_slug'] . '/' . $submainData['category_slug'] . '/' . $categoryData['category_slug'],
                'title' => $categoryData['category_title']
            ];
            $categoryID = $categoryData['category_id'];
        }


        $productList = $this->categoryToProductModel->select('product_id')->where('category_id', $categoryID)->orderBy('product_id', 'ASC')->findAll();
        $productList = array_column($productList, "product_id");
        if ($productList)
            $fiters = $this->productModel->select('manufacturer_id')->distinct()->find($productList);

        $this->viewData['filters'] = $fiters ?? array();
            $this->viewData['categoryID'] = $categoryID;

        $this->viewData['baslik'] = $breadcrump;
        $this->viewData['mainbannerImg'] = $mainData['category_image'] ?? '';
        $this->viewData['bannerImg'] = $submainData['category_image'] ?? '';



        return view('category/CategoryView', $this->viewData);
        //
    }
}
