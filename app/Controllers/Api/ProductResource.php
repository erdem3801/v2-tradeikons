<?php

namespace App\Controllers\Api;

use App\Models\Product\ProductModel;
use CodeIgniter\RESTful\ResourceController;
use Codeigniter\HTTP\ResponseInterface;

class ProductResource extends ResourceController
{
    private $productModel;
    private $imageModel;
    public function __construct()
    {


        $this->productModel = new ProductModel();
    }
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $orderClass = array(
            'enyeni' => ['orderBy' => 'date_added', 'order' => 'DESC'],
            'urunpuani' => ['orderBy' => 'points', 'order' => 'DESC'],
            'adanz' =>  ['orderBy' => 'name', 'order' => 'ASC'],
            'zdena'  =>  ['orderBy' => 'name', 'order' => 'DESC'],
            'azlanfiyat'  =>  ['orderBy' => 'price', 'order' => 'DESC'],
            'artanfiyat'  =>  ['orderBy' => 'price', 'order' => 'ASC'],
        );
        $offset = (int)$this->request->getVar('offset');
        $limit = $this->request->getVar('limit');
        $categoryID = $this->request->getVar('category');
        $order = $this->request->getVar('order') ?? '';
        $manufacturer = $this->request->getVar('manufacturer') ?? '';
        $option = $this->request->getVar('option') ?? '';

        $manufacturer = str_replace('--', '&', $manufacturer);
        $manufacturer = $manufacturer ? explode('|', $manufacturer) : '';
        $option = $option ? explode('|', $option) : '';

        $data = [
            'categoryID' => $categoryID,
        ];
        if ($order && isset($orderClass[$order]))
            $data['order'] = $orderClass[$order];
        if ($manufacturer)
            $data['manufacturer'] = $manufacturer;
        if ($option)
            $data['option'] = $option;

        $product = $this->productModel->getProductByIDs($data, $limit, $offset);

        //
        if ($this->request->isAJAX()) {

            if ($product) {
                $response = array(
                    'status' => true,
                    'product' => $product,
                );
                return $this->respond($response, ResponseInterface::HTTP_OK);
            }
            return $this->failNotFound();
        }
        print_r($product);

        //
    }
    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function search()
    {
        $name =  $this->request->getVar('name');
        $product = array();
        $count = 0;
        if ($name){
            $product = $this->productModel->search($name);
            $count = $this->productModel->searchCount($name);
        }
            
        
        return $this->respond(['data' => $product, 'count' => $count], ResponseInterface::HTTP_OK);
    }
    public function show($id = null)
    {
        $product = $this->productModel
            ->join('product_stock', 'product_stock.product_id = product.product_id', 'right')
            ->join('product_description', 'product_description.product_id = product.product_id', 'right')
            ->find($id);
        //

        if ($product) {

            $response = array(
                'status' => true,
                'product' => $product,
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
