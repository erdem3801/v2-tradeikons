<?php

namespace App\Controllers\Api;

use App\Models\CartModel;
use App\Models\Product\ProductModel;
use App\Models\Product\ProductOptionModel;
use CodeIgniter\RESTful\ResourceController;
use PHPUnit\Util\Json;

class CartResource extends ResourceController
{
    private $productModel;
    private $productOptionModel;
    private $cartModel;
    public function __construct()
    {
        $this->cartModel = new CartModel();
        $this->productOptionModel = new ProductOptionModel();
        $this->productModel = new ProductModel();
    }
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $sessionID = getSessionID();
        $whereData = array(
            "api_id" =>   0,
            "customer_id" =>  session()->get('user.user.user_id') ?? 0,
            "session_id" =>  $sessionID,
            "recurring_id" => $recurringID ?? 0,
        );
        $basket = $this->cartModel->where($whereData)
            ->select('*,cart.quantity as cart_quantity')
            ->join('product', 'product.product_id = cart.product_id')
            ->join('product_description', 'product_description.product_id = cart.product_id')
            ->findAll();
        $count = $this->cartModel->select('COUNT(product_id) as basket_count')->where($whereData)->findAll();
        $sum = $this->cartModel->select('SUM(price * cart.quantity) as basket_sum')
            ->join('product', 'product.product_id = cart.product_id')
            ->where($whereData)->findAll();
        $view = view('temp/components/cartContent', ['cartData' => $basket, 'totalPrice' => $sum[0]['basket_sum']]);
        return $this->respond(['view' => $view, 'count' => $count[0]['basket_count'], 'sum' => $sum[0]['basket_sum']], 200);
        //
    }
    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
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
        helper(['array']);
        $item = $this->request->getPost();
        $productID = $item['productID'] ?? 0;
        $productInfo = $this->productModel->find($productID);
        if ($productInfo) {
            $quantity = $item['quantity'] ?? 1;
            $option = $item['option'] ?? array();
            //Todo ürün varyasyon seçimi sepete eklenecek
            $sessionID = getSessionID();
            $whereData = array(
                "api_id" =>   0,
                "customer_id" =>  session()->get('user.user.user_id') ?? 0,
                "session_id" =>  $sessionID,
                "product_id" =>  $productID,
                "recurring_id" => $recurringID ?? 0,
                "option" => json_encode($option)
            );
            $issetBasket = $this->cartModel->where($whereData)->first();
            if (!$issetBasket) {
                $insertData = array(
                    "api_id" =>   0,
                    "customer_id" => session()->get('user.user.user_id') ?? 0,
                    "session_id" =>  $sessionID,
                    "product_id" =>  $productID,
                    "recurring_id" => $recurring_id ?? 0,
                    "option" =>  json_encode($option),
                    "quantity" =>  $quantity,
                );
                $this->cartModel->insert($insertData);
            } else {
                $this->cartModel->update($issetBasket['cart_id'], ['quantity' => ++$issetBasket['quantity']]);
            }
        }
        return $this->respondCreated();
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
    public function update($productID = null)
    {
        helper(['array']);
        $item = $this->request->getPost();
        $productInfo = $this->productModel->find($productID);
        if ($productInfo) {
            $quantity = $item['quantity'] ?? 1;
            $option = $item['option'] ?? array();
            //Todo ürün varyasyon seçimi sepete eklenecek
            $sessionID = getSessionID();
            $whereData = array(
                "api_id" =>   0,
                "customer_id" =>  session()->get('user.user.user_id') ?? 0,
                "session_id" =>  $sessionID,
                "product_id" =>  $productID,
                "recurring_id" => $recurringID ?? 0,
                "option" => json_encode($option)
            );
            $issetBasket = $this->cartModel->where($whereData)->first();
            if (!$issetBasket) {
                $insertData = array(
                    "api_id" =>   0,
                    "customer_id" => session()->get('user.user.user_id') ?? 0,
                    "session_id" =>  $sessionID,
                    "product_id" =>  $productID,
                    "recurring_id" => $recurring_id ?? 0,
                    "option" =>  json_encode($option),
                    "quantity" =>  $quantity,
                );
                $this->cartModel->insert($insertData);
            } else {
                $this->cartModel->update($issetBasket['cart_id'], ['quantity' => $quantity]);
            }
        }
        return $this->respondUpdated();
        //
    }
    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function remove($productID = null)
    {
        helper(['array']);
        $sessionID = getSessionID();
        $whereData = array(
            "api_id" =>   0,
            "customer_id" =>  session()->get('user.user.user_id') ?? 0,
            "session_id" =>  $sessionID,
            "product_id" =>  $productID,
            "recurring_id" => $recurringID ?? 0, 
        );
        $issetBasket = $this->cartModel->where($whereData)->first();

        if ($issetBasket) {
            $this->cartModel->delete($issetBasket['cart_id']);
            return $this->respondDeleted();
        }
        return $this->failForbidden();
        //
    }
}
