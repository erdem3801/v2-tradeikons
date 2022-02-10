<?php

namespace App\Controllers;

use App\Models\CategoriesModel;
use App\Models\ProductModel;
use CodeIgniter\RESTful\ResourceController;
use App\Libraries\Slug;   // use the Slug Library
class ApiController extends ResourceController
{
    protected $model;
    private $viewData;
    private $categoryModel;
    private $ctpModel;

    public function __construct()
    {

        $cache = \Config\Services::cache();
        $this->settingsModel = model('SettingsModel');
        $this->categoryModel = model('CategoriesModel');
        $this->ctpModel = model('CategoryToproduct');

        // if (!$categories = $cache->get('categories')) {
        $categories = $this->settingsModel->getCategories();
        // Save into the cache for 5 minutes
        //     $cache->save('categories', $categories, 3000);
        // }
        $this->viewData['categories'] =    $categories;
        // if (!$product = $cache->get('product')) {
        //     $product = $this->settingsModel->getProduct();
        //     // Save into the cache for 5 minutes
        //     $cache->save('product', $product, 3000);
        // }
        // print_d($product[0]);
        // $this->viewData['product'] =    $product;

    }
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {

        echo '<pre>';
        //print_r($this->viewData['categories'][0]);
        foreach ($this->viewData['categories'] as $key => $main) {
            echo 'main =>';
            $mainID = $this->convertCategoriesData($main);
            if (isset($main['listelenecek_urunler']))
                $this->categoriesToproduct($main['listelenecek_urunler'], $mainID);
            foreach ($main['listelenecek_kategoriler'] as $key => $sub) {
                echo 'sub =>';
                $subID =  $this->convertCategoriesData($sub, $mainID);
                if (isset($sub['listelenecek_urunler']))
                    $this->categoriesToproduct($sub['listelenecek_urunler'], $subID);

                foreach ($sub['listelenecek_kategoriler'] as $key => $cat) {
                    echo 'cat =>';
                    $catID = $this->convertCategoriesData($cat, $subID);
                    if (isset($cat['listelenecek_urunler']))
                        $this->categoriesToproduct($cat['listelenecek_urunler'], $catID);
                }
            }
        }

        //   return view('welcome_message');
        // return $this->respond(['message' => 'api geldi' , 'data' => $this->viewData['categories']]);
    }
    public function create()
    {
    }
    public function convertCategoriesData($data, $parentID = '')
    {
        $Slug = new Slug([
            'field' => 'category_slug',
            'title' => 'category_title',
            'table' => 'category',
            'id'     => 'category_id',
        ]);
        // get the new slug 
        $queryData = [
            'category_title' => $data['ad'] ?? '',
            'category_slug' =>  $Slug->create_uri(['category_title' => $data['ad']]) ?? '',
            'category_image' => $data['gorsel'] ?? '',
            'category_parent' => $parentID
        ];
        print_r($queryData);
        $insertID = $this->categoryModel->insert($queryData);
        return $insertID;
    }
    public function categoriesToproduct($data, $categoryId)
    {

        foreach ($data as  $productID) {
            # code...
            $queryData = [
                'category_id' => $categoryId ?? '',
                'product_id' =>  $productID,
            ];
            print_r($queryData);
            $this->ctpModel->insert($queryData);
        }
    }
}
