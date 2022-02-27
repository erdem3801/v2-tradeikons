<?php

namespace App\Models\Product;

use CodeIgniter\Model;

class ProductOptionModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'product_option';
    protected $primaryKey       = 'product_option_id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'product_option_id',
        'product_id',
        'product_stock_id',
        'name',
        'value'
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

    
    public function getOptions($prodcutID){
        $options = $this->select('name')->groupBy('name')->where(['product_id'=>$prodcutID])->whereNotIn('value',['Tek Renk' ,'Standart'])->findAll();
        $optionValues = array();
        foreach($options as $option){
            $values = $this->select('value')->groupBy('value')->where(['product_id' => $prodcutID,'name' => $option['name']])->whereNotIn('value',['Tek Renk' ,'Standart'])->findAll();
            $optionValues[$option['name']] = $values;
        }
        return $optionValues;
    }
}
