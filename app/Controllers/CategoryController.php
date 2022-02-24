<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CategoryModel;
use App\Models\CategoryToProduct;
use App\Models\Product\ProductModel;
use App\Models\Product\ProductOptionModel;

class CategoryController extends BaseController
{
    protected $model;
    private $categoryToProductModel;
    private $productModel;
    private $productOptionModel;
    private $viewData;


    public function __construct()
    {
        $this->productOptionModel = new ProductOptionModel();
        $this->categoryToProductModel = new CategoryToProduct();
        $this->model = new CategoryModel();
        $this->productModel = new ProductModel();
        $this->viewData = $this->getDefaults();
    }

    public function list($main = '', $submain = '', $category = '')
    {


        $mainData = $this->model->where('category_slug', $main)->first();
        $submainData = $this->model->where('category_slug', $submain)->first();
        $categoryData = $this->model->where('category_slug', $category)->first();

        if (!$mainData && !$submainData && !$categoryData)
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
         
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



        $filters['Marka']  = $this->productModel
            ->select('manufacturer_id as value,COUNT(manufacturer_id) as count')
            ->groupBy('manufacturer_id')
            ->join('category_to_product', 'product.product_id = category_to_product.product_id ', 'left')->where('category_id', $categoryID)
            ->findAll();
        $filter['varyant'] = $this->productOptionModel
            ->select('name')
            ->distinct()
            ->join('category_to_product', 'product_option.product_id = category_to_product.product_id ', 'left')->where('category_id', $categoryID)
            ->findAll();

        foreach ($filter['varyant'] as $key => $filter_val) {
            $filters[$filter_val['name']] = $this->productOptionModel
                ->select('value ,COUNT(value) as count')
                ->groupBy('value')
                ->where('name', $filter_val['name'])
                ->where(['value !=' => 'Standart'])
                ->join('category_to_product', 'product_option.product_id = category_to_product.product_id ', 'left')->where('category_id', $categoryID)
                ->findAll();
        }

        $this->viewData['filters'] = $filters ?? array();
        $this->viewData['categoryID'] = $categoryID;

        $this->viewData['baslik'] = $breadcrump;
        $this->viewData['mainbannerImg'] = $mainData['category_image'] ?? '';
        $this->viewData['bannerImg'] = $submainData['category_image'] ?? '';

        return view('category/CategoryView', $this->viewData);
        //
    }
    public function search(){
        $this->viewData['query'] = $this->request->getVar('q');
        return view('category/SearchView', $this->viewData);
        
    }
}
