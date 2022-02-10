<?php

namespace App\Validation;

use Exception; 

class UserRules
{ 

    public function validateUser(string $str, string $fields, array $data): bool
    {
        try {
            $model = model('UserModel');

            $user = $model->findUserByEmailAddress($data['user']);

            if (!$user)
                $user = $model->findUserByUserName($data['user']);
            if (!$user)
                throw new Exception('User does not exist for specified ' . $data['user']);

            return (sha1($user['salt'] . sha1($user['salt'] . sha1($data['password']))) == $user['password']);
        } catch (Exception $e) {
            return false;
        }
    }
    public function hasPermission(string $key, string $field, array $data): bool
    { 
        try {  
            $model = model('UserGroupModel');
            $user_group_query = $model
                ->select('permission')
                ->where('user_group_id', $data['auth']['user_group_id'])
                ->first();

            $fields = explode(',', $field);
            $permissions = json_decode($user_group_query['permission'], true);
            if (isset($permissions[$fields[0]])) {
                return in_array($fields[1], $permissions[$fields[0]]);
            } else {
                return false;
            }
        } catch (\Throwable $th) {

            return false;
        }
    }
}
