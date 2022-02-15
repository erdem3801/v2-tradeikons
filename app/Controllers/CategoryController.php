<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CategoryToProduct;
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
        $this->productModel = model('Product/ProductModel');
        $this->viewData = $this->getDefaults();
        
    }

    public function list($main = '', $submain = '', $category = '')
    {

      
        $mainData = $this->model->where('category_slug', $main)->first();
        $submainData = $this->model->where('category_slug', $submain)->first();
        $categoryData = $this->model->where('category_slug', $category)->first();


        $category_id = 0;

        $breadcrump = array();
        if ($mainData) {
            $breadcrump[] =   [
                'url' => '#',
                'title' => $mainData['category_title']
            ];
            $category_id = $mainData['category_id'];
        }
        if ($submainData) {
            $breadcrump[] =   [

                'url' => $mainData['category_slug'] . '/' . $submainData['category_slug'],
                'title' => $submainData['category_title']
            ];
            $category_id = $submainData['category_id'];
        }
        if ($categoryData) {
            $breadcrump[] =   [
                'url' => $mainData['category_slug'] . '/' . $submainData['category_slug'] . '/' . $categoryData['category_slug'],
                'title' => $categoryData['category_title']
            ];
            $category_id = $categoryData['category_id'];
        }


        $productList = $this->categoryToProductModel->select('product_id')->where('category_id', $category_id)->orderBy('product_id','ASC')->findAll();
        $productList = array_column($productList , "product_id");


        $this->viewData['products'] = $this->productModel
        ->join('product_stock', 'product_stock.product_id = product.product_id','right')
        ->join('product_description', 'product_description.product_id = product.product_id','right')
        ->find($productList);
        $this->viewData['filters'] = $this->productModel->select('manufacturer_id')->distinct()->find($productList);


        $this->viewData['baslik'] = $breadcrump;
        $this->viewData['mainbannerImg'] = $mainData['category_image'] ?? '';
        $this->viewData['bannerImg'] = $submainData['category_image'] ?? '';



        return view('categories/categoriesView', $this->viewData);
        //
    }
}
