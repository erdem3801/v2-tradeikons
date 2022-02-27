<?php

namespace App\Controllers;
 
use CodeIgniter\RESTful\ResourceController;
use App\Libraries\Slug;   // use the Slug Library
use App\Models\Product\ProdcutPriceModel;
use App\Models\Product\ProdcutStockModel;
use App\Models\Product\ProductModel;

class ApiController extends ResourceController
{
    protected $model;
    private $viewData;
    private $categoryModel;
    private $ctpModel;

    public function __construct()
    {

 

    }
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {

        $priceModel = new ProdcutPriceModel();
        $stockModel = new  ProdcutStockModel();
        $productModel = new ProductModel();

        $price = $priceModel->select('product_id')->distinct()->select('price_sell')->findAll();
    
        foreach ($price as $key => $stock) {
            $queryData = [
                'price' => $stock['price_sell'],
            ];
            $productModel->update( $stock['product_id'],$queryData);
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
