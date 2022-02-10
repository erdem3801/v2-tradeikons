<?php

namespace App\Models;

use CodeIgniter\Model;

class SettingsModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'settings';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id',
        'site_url',
        'kategori_url',
        'urun_kategori_url',
        'urun_url',
        'urun_gorsel_url',
        'site_baslik',
        'site_title',
        'site_keywords',
        'site_description',
        'facebook',
        'instagram',
        'twitter',
        'linkedin',
        'ust_aciklama',
        'copyright',
        'iletisim_telefon',
        'iletisim_mail',
        'iletisim_adres',
        'iletisim_harita',
        'whatsapp'
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

    public function getCategories()
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://www.pazarfin.com/pazarfin/urunler/veri/kategori_veri_bilsevpazarlama_515.json',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));
        $response = json_decode(curl_exec($curl), true);
        curl_close($curl);
        return $response;
    }
    public function getCategoriesTree()
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://www.pazarfin.com/pazarfin/urunler/veri/kategori_veri_bilsevpazarlama_515.json',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));
        $response = json_decode(curl_exec($curl), true);
        curl_close($curl);
        return $response;
    }
    public function getProduct()
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://www.pazarfin.com/pazarfin/urunler/veri/urun_veri_bilsevpazarlama_515.json',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));
        $response = json_decode(curl_exec($curl), true);
        curl_close($curl);
      

        return $response;
    }
}
