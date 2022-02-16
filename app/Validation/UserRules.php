<?php

namespace App\Validation;

use Exception;
use PhpParser\Node\Stmt\Return_;

class UserRules
{

    public function validateUser(string $str, string $fields, array $data): bool
    {

        try {
            $model = model('UserModel');
            $user = $model->findUserByEmailAddress($data['email']);
            return  password_verify($data['password'], $user['user_pass']);
        } catch (Exception $e) {
            return false;
        }
    }
    public function hasPermission(string $key, string $field, array $data): bool
    {
        try {
            $model = model('UserModel');
            $user = $model->findUserByEmailAddress($data['email']);
            if (!$user['user_status']) {
                return false;
            }
            return true;
        } catch (\Throwable $th) {

            return false;
        }
    }
}
