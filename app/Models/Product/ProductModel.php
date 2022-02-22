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

    public function getProductByIDs($data, $limit, $offset)
    {
        if (isset($data['order']))
            $this->orderBy($data['order']['orderBy'], $data['order']['order']);
        if (isset($data['manufacturer'])) {
            $this->whereIn('manufacturer_id', $data['manufacturer']);
        }
        if (isset($data['option']))
            $this->join('product_option', 'product.product_id = product_option.product_id ', 'left')->whereIn('product_option.value', $data['option'])->groupBy('value');

        $this->join('category_to_product', 'product.product_id = category_to_product.product_id ', 'left')->where('category_id', $data['categoryID']);

        $this->join('product_description', 'product.product_id = product_description.product_id', 'left');

        $results = $this->findAll($limit, $offset);
        /*
         SELECT p.product_id, 
         (SELECT AVG(rating) AS total FROM oc_review r1 WHERE r1.product_id = p.product_id AND r1.status = '1' GROUP BY r1.product_id) AS rating, 
         (SELECT price FROM oc_product_discount pd2 
         WHERE pd2.product_id = p.product_id AND pd2.customer_group_id = '1' AND pd2.quantity = '1' AND ((pd2.date_start = '0000-00-00' OR pd2.date_start < NOW()) AND (pd2.date_end = '0000-00-00' OR pd2.date_end > NOW())) 
         ORDER BY pd2.priority ASC, pd2.price ASC LIMIT 1) AS discount, 
         
         (SELECT price FROM oc_product_special ps 
         WHERE ps.product_id = p.product_id AND ps.customer_group_id = '1' AND ((ps.date_start = '0000-00-00' OR ps.date_start < NOW()) AND (ps.date_end = '0000-00-00' OR ps.date_end > NOW())) 
         ORDER BY ps.priority ASC, ps.price ASC LIMIT 1) AS special 
         FROM oc_product_to_category p2c LEFT JOIN oc_product p ON (p2c.product_id = p.product_id) 
         
         LEFT JOIN oc_product_description pd ON (p.product_id = pd.product_id) 
         LEFT JOIN oc_product_to_store p2s ON (p.product_id = p2s.product_id) 
         
         WHERE pd.language_id = '1' AND p.status = '1' AND p.date_available <= NOW() AND p2s.store_id = '0'
         */
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
