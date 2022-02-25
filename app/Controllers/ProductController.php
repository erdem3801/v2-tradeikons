<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CategoryToProduct;
use App\Models\Product\ProductModel;
use App\Models\Product\ProductOptionModel;
use App\Models\Product\ProductToImageModel;

class ProductController extends BaseController
{
    private $viewData;
    private $productModel;
    private $categoryToProductModel;
    private $imageModel;
    private $productOptionModel;
    public function __construct()
    {
        $this->imageModel = new ProductToImageModel();
        $this->productModel = new ProductModel();
        $this->categoryToProductModel = new CategoryToProduct();
        $this->productOptionModel = new ProductOptionModel();
        $this->viewData = $this->getDefaults();
    }
    public function detail($slug = null)
    {
        $product = $this->productModel->getProductBySlug($slug);
        if (!$product)
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        $breadcrump[] =   [
            'url' => base_url($product['slug']),
            'title' => $product['name']
        ];

        $images =  $this->imageModel->where('product_id', $product['product_id'])->findAll();


        $options = $this->productOptionModel->select('name')->groupBy('name')->where(['product_id'=>$product['product_id'],'value !=' => 'Standart'])->findAll();
        $optionValues = array();
        foreach($options as $key => $option){
            $values = $this->productOptionModel->select('value')->groupBy('value')->where(['product_id' => $product['product_id'],'name' => $option['name'],'value !=' => 'Standart' ])->findAll();
            $optionValues[$option['name']] = $values;
        }

        $productCategory = $this->categoryToProductModel->where('product_id', $product['product_id'])->first();
        if ($productCategory)
            $similarProduct = $this->productModel->getProductByIDs(['categoryID' => $productCategory['category_id']], 4, 0);
        $this->viewData['options'] = $optionValues;
        $this->viewData['product'] = $product;
        $this->viewData['similarProduct'] = $similarProduct ?? array();
        $this->viewData['images'] = $images;
        $this->viewData['baslik'] = $breadcrump;



        return view('product/ProductView', $this->viewData);
    }

   
}
