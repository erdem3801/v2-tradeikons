<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoriesModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'category';
    protected $primaryKey       = 'category_id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'category_id',
        'category_title',
        'category_slug',
        'category_image',
        'category_parent'
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
    public function getCategoryTree($elements, $parentID = 0)
    {

        // foreach ($elements as $key => &$value) {
        //     $output[$value["category_id"]] = &$value;
        // }
        // foreach ($elements as $key => &$value) {
        //     if ($value["category_parent"] && isset($output[$value["category_parent"]])) {
        //         $output[$value["category_parent"]]["category_nodes"][] = &$value;
        //     }
        // }
        // foreach ($elements as $key => &$value) {
        //     if ($value["category_id"] && isset($output[$value["category_id"]])) { 
        //         unset($elements[$key]);
        //     }
        // }
        $result = array();
        foreach($elements as $cat){
            if($cat['category_parent'] && array_key_exists($cat['category_parent'], $result)){
                $result[$cat['category_parent']]['sub_categories'][] = $cat;
            }
            else{
                $result[$cat['category_id']] = $cat;
            }
        }
 
        print_d($result); 
    }


    // Menu builder function, parentId 0 is the root
    function build_category_menu($parentID, $menu)
    {
    }
}
