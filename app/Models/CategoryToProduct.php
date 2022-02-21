<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryToProduct extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'category_to_product';
    protected $primaryKey       = 'category_id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'category_id',
        'product_id'
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

    public function getProductList($categoryID, $limit = 0,  $offset = 0 ){
        $result = $this->select('product_id')->where('category_id', $categoryID)->orderBy('product_id','ASC')->findAll($limit,$offset);
        $result = array_column($result , "product_id");
        return $result;
    }
}
