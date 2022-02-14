<?php

namespace App\Validation;

use Exception;
use PhpParser\Node\Stmt\Return_;

class UserRules
{

    public function validateUser(string $str, string $fields, array $data): bool
    {

        try {
            $model = model('ClientModel');
            $user = $model->findUserByEmailAddress($data['email']);
            return  password_verify($data['password'], $user['kullanici_sifre']);
        } catch (Exception $e) {
            return false;
        }
    }
    public function hasPermission(string $key, string $field, array $data): bool
    {
        try {
            $model = model('ClientModel');
            $user = $model->findUserByEmailAddress($data['email']);
            if (!$user['kullanici_durum']) {
                return false;
            }
            return true;
        } catch (\Throwable $th) {

            return false;
        }
    }
}
