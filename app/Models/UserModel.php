<?php

namespace App\Models;

use CodeIgniter\Model;
use Exception;

class UserModel extends Model
{
    protected $table                = 'user';
    protected $primaryKey           = 'user_id';
    protected $useAutoIncrement     = true;
    protected $insertID             = 0;
    protected $returnType           = 'array';
    protected $useSoftDeletes       = false;
    protected $protectFields        = true;
    protected $allowedFields        = [
        'user_id', 
        'user_name', 
        'user_surname', 
        'user_mail', 
        'user_pass', 
        'user_phone',  
        'user_city', 
        'user_county', 
        'user_thumbnail', 
        'user_activation_code', 
        'user_reference_code', 
        'user_adress', 
        'user_status', 
        'user_created_at', 
        'user_updated_at', 
        'user_deleted_at'



    ];

    // Dates
    protected $useTimestamps        = false;
    protected $dateFormat           = 'datetime';
    protected $createdField         = 'created_at';
    protected $updatedField         = 'updated_at';
    protected $deletedField         = 'deleted_at';

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
       if (isset($data['data']['user_pass'])) {
           $plaintextPassword = $data['data']['user_pass'];
           $data['data']['user_pass'] = $this->hashPassword($plaintextPassword);
      
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
           ->where(['user_mail' => $emailAddress])
           ->first();

       if (!$user)
           throw new Exception('User does not exist for specified email address');

       return $user;
   }

   
}
