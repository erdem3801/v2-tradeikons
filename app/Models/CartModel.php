<?php

namespace App\Models;

use CodeIgniter\Model;

class CartModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'cart';
    protected $primaryKey       = 'cart_id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'cart_id',
        'api_id',
        'customer_id',
        'session_id',
        'product_id',
        'recurring_id',
        'option',
        'quantity',
        'date_added'

    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function createData($productID, $quantity, $option)
    {
        $sessionID = getSessionID();
        $whereData = array(
            "api_id" =>   0,
            "customer_id" =>  session()->get('user.user.user_id') ?? 0,
            "session_id" =>  $sessionID,
            "product_id" =>  $productID,
            "recurring_id" => $recurringID ?? 0,
            "option" => json_encode($option)
        );
        $issetBasket = $this->where($whereData)->first();
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
            $this->insert($insertData);
        } else {
            $this->update($issetBasket['cart_id'], ['quantity' => $quantity+$issetBasket['quantity']]);
        }
    }
    public function getCart()
    {
        $sessionID = getSessionID();
        $whereData = array(
            "api_id" =>   0,
            "customer_id" =>  session()->get('user.user.user_id') ?? 0,
            "session_id" =>  $sessionID,
            "recurring_id" => $recurringID ?? 0,
        );
        $basket = $this->where($whereData)
            ->select('*,cart.quantity as cart_quantity')
            ->join('product', 'product.product_id = cart.product_id')
            ->join('product_description', 'product_description.product_id = cart.product_id')
            ->findAll();
        return $basket;
    }
    public function getCartCount()
    {
        $sessionID = getSessionID();
        $whereData = array(
            "api_id" =>   0,
            "customer_id" =>  session()->get('user.user.user_id') ?? 0,
            "session_id" =>  $sessionID,
            "recurring_id" => $recurringID ?? 0,
        );
        $count = $this->select('COUNT(product_id) as basket_count')->where($whereData)->findAll();
        return $count[0]['basket_count'];
    }

    public function getCartSum()
    {
        $sessionID = getSessionID();
        $whereData = array(
            "api_id" =>   0,
            "customer_id" =>  session()->get('user.user.user_id') ?? 0,
            "session_id" =>  $sessionID,
            "recurring_id" => $recurringID ?? 0,
        );
        $sum = $this->select('SUM(price * cart.quantity) as basket_sum')
            ->join('product', 'product.product_id = cart.product_id')
            ->where($whereData)->findAll();
        $return =  $sum[0]['basket_sum'] ?? 0;
        return number_format($return, 2,'.','');
    }
}
