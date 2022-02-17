<?php

namespace App\Controllers;

use App\Models\CategoriesModel; 
use CodeIgniter\RESTful\ResourceController;
use App\Libraries\Slug;   // use the Slug Library
use App\Models\Product\ProductModel ; 

class ApiController extends ResourceController
{
    protected $model;
    private $viewData;
    private $categoryModel;
    private $ctpModel;

    public function __construct()
    {



        // if (!$categories = $cache->get('categories')) {
        //$categories = $this->settingsModel->getCategories();
        // Save into the cache for 5 minutes
        //     $cache->save('categories', $categories, 3000);
        // }
        //$this->viewData['categories'] =    $categories;
        // if (!$product = $cache->get('product')) {
        //     $product = $this->settingsModel->getProduct();
        //     // Save into the cache for 5 minutes
        //     $cache->save('product', $product, 3000);
        // }
        // print_d($product[0]);
        // $this->viewData['product'] =    $product;

    }
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {

        $productModel = new ProductModel();
        $categoryModel = model('CategoryToproduct');
        $products =  $productModel->getProducts();
        foreach ($products as $key => $product) {
            $Slug = new Slug([
                'field' => 'slug',
                'title' => 'name',
                'table' => 'product',
                'id'     => 'product_id',
            ]);
            // get the new slug 
            $queryData = [
                'slug' =>  $Slug->create_uri(['name' => $product['name']]) ?? '',

            ];
          
            $productModel->update($product['product_id'],$queryData);
        }
    }
    public function create()
    {
    }
    public function convertCategoriesData($data, $parentID = '')
    {
        $Slug = new Slug([
            'field' => 'category_slug',
            'title' => 'category_title',
            'table' => 'category',
            'id'     => 'category_id',
        ]);
        // get the new slug 
        $queryData = [
            'category_title' => $data['ad'] ?? '',
            'category_slug' =>  $Slug->create_uri(['category_title' => $data['ad']]) ?? '',
            'category_image' => $data['gorsel'] ?? '',
            'category_parent' => $parentID
        ];
        print_r($queryData);
        $insertID = $this->categoryModel->insert($queryData);
        return $insertID;
    }
    public function categoriesToproduct($data, $categoryId)
    {

        foreach ($data as  $productID) {
            # code...
            $queryData = [
                'category_id' => $categoryId ?? '',
                'product_id' =>  $productID,
            ];
            print_r($queryData);
            $this->ctpModel->insert($queryData);
        }
    }
}
