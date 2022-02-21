<?php

namespace App\Models\Product;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'product';
    protected $primaryKey       = 'product_id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'product_id',
        'slug',
        'price',
        'quantity',
        'gtin',
        'market_place_id',
        'barcode_id',
        'seller_code',
        'seller_link',
        'model',
        'stock_status_id',
        'image',
        'manufacturer_id',
        'shipping',
        'points',
        'tax_class_id',
        'date_available',
        'subtract',
        'minimum',
        'sort_order',
        'status',
        'viewed',
        'date_added',
        'date_modified'
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

    public function getProductByIDs($IDs,$limit , $offset, $order = array())
    {
        $this->join('product_description', 'product_description.product_id = product.product_id' );
        $this->join('category_to_product', 'category_to_product.product_id = product.product_id');
        $this->where('category_id',$IDs);
        if ($order)
            $this->orderBy($order['orderBy'], $order['order']);
        $results = $this->findAll($limit, $offset);

        return $results;
    }
    public function getProductBySlug($slug)
    {
        $results = $this
            ->join('product_description', 'product_description.product_id = product.product_id', 'right')
            ->where('slug', $slug)
            ->first();

        return $results;
    }


    public function getProducts()
    {
        $results = $this
            ->where('slug', null)
            ->join('product_description', 'product_description.product_id = product.product_id', 'right')
            ->findAll();
        return $results;
    }
}
