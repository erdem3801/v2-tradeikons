<?php

namespace App\Controllers\Api;
 
use CodeIgniter\RESTful\ResourceController;
use Codeigniter\HTTP\ResponseInterface;

class ProductResource extends ResourceController
{
    private $productModel;
    private $imageModel;
    public function __construct()
    {
        $this->imageModel = model('Product/ProductToImageModel');
        $this->productModel = model('Product/ProductModel');
    }
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $offset = (int)$this->request->getVar('offset') ;
        $limit = $this->request->getVar('limit');
        $categoryID = $this->request->getVar('category');
        
      

        $categoryToProductModel = model('CategoryToProduct');
        $productList = $categoryToProductModel->select('product_id')->where('category_id', $categoryID)->orderBy('product_id','ASC')->findAll($limit,$offset);
        $productList = array_column($productList , "product_id");

       

        $product = $this->productModel
            ->join('product_stock', 'product_stock.product_id = product.product_id', 'right')
            ->join('product_description', 'product_description.product_id = product.product_id', 'right')
            ->find($productList);
            //
          
            if ($product){ 
                $response = array(
                    'status' => true,
                    'product' => $product, 
                );
                return $this->respond($response, ResponseInterface::HTTP_OK);

            }
        return $this->failNotFound();
        //
    }
    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        $product = $this->productModel
            ->join('product_stock', 'product_stock.product_id = product.product_id', 'right')
            ->join('product_description', 'product_description.product_id = product.product_id', 'right')
            ->find($id);
            //
            
            if ($product){
                $images = $this->imageModel->where('product_id',$id)->findAll(1);
                $response = array(
                    'status' => true,
                    'product' => $product,
                    'images' => $images
                );
                return $this->respond($response, ResponseInterface::HTTP_OK);

            }
        return $this->failNotFound();

    }
    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        //
    }
    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        //
    }
    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
    }
    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        //
    }
    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        //
    }
}
