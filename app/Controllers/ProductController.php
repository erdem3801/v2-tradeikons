<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CategoryToProduct;

class ProductController extends BaseController
{
    private $viewData;
    private $productModel;
    private $categoryToProductModel;
    private $imageModel;
    public function __construct()
    {
        $this->imageModel = model('product/ProductToImageModel');
        $this->productModel = model('product/ProductModel');
        $this->categoryToProductModel = model('CategoryToProduct');
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
        $productCategory = $this->categoryToProductModel->where('product_id',$product['product_id'])->first();
        $productList = $this->categoryToProductModel->getProductList($productCategory['category_id'],4);
        $similarProduct = $this->productModel->getProductByIDs($productList);

        $this->viewData['product'] = $product;
        $this->viewData['similarProduct'] = $similarProduct;
        $this->viewData['images'] = $images;
        $this->viewData['baslik'] = $breadcrump;

        return view('product/ProductView', $this->viewData);
    }
}
