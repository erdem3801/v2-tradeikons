<?php

namespace App\Models;

use CodeIgniter\Model;
use Exception;

class ClientModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'client';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'kullanici_id',
        'kullanici_adi',
        'kullanici_soyadi',
        'kullanici_eposta',
        'kullanici_telefon',
        'kullanici_il',
        'kullanici_ilce',
        'kullanici_adres',
        'kullanici_postakodu',
        'kullanici_aktivasyonkodu',
        'kullanici_sifre',
        'kullanici_fatura_il',
        'kullanici_fatura_ilce',
        'kullanici_fatura_vd',
        'kullanici_fatura_vkn',
        'kullanici_fatura_adresi',
        'kullanici_kayittaihi',
        'kullanici_durum'
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
    protected $allowCallbacks       = true;
    protected $beforeInsert         = ['beforeInsert'];
    protected $afterInsert          = [];
    protected $beforeUpdate         = ['beforeUpdate'];
    protected $afterUpdate          = [];
    protected $beforeFind           = [];
    protected $afterFind            = [];
    protected $beforeDelete         = [];
    protected $afterDelete          = [];

    protected function beforeInsert(array $data): array
    {
        return $this->getUpdatedDataWithHashedPassword($data);
    }

    protected function beforeUpdate(array $data): array
    {
        return $this->getUpdatedDataWithHashedPassword($data);
    }
    private function getUpdatedDataWithHashedPassword(array $data): array
    {
        if (isset($data['data']['kullanici_sifre'])) {
            $plaintextPassword = $data['data']['kullanici_sifre'];
            $data['data']['kullanici_sifre'] = $this->hashPassword($plaintextPassword);
       
        }
        return $data;
    }

    private function hashPassword(string $plaintextPassword): string
    {
        return password_hash($plaintextPassword, PASSWORD_BCRYPT);
    }

    public function findUserByEmailAddress(string $emailAddress)
    {
        $user = $this
            ->asArray()
            ->where(['kullanici_eposta' => $emailAddress])
            ->first();

        if (!$user)
            throw new Exception('User does not exist for specified email address');

        return $user;
    }
}
