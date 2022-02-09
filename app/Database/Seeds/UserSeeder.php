<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class UserSeeder extends Seeder
{

    public function run()
    {
        $faker = Factory::create();

        $users = [
            [
                'name' => $faker->name(),
                'email' => 'admin@gmail.com', //$faker->email,
                'type' => 'admin',
                'password' => password_hash('123456789', PASSWORD_BCRYPT)
            ],
            [
                'name' => $faker->name(),
                'email' => 'seller@gmail.com', //$faker->email,
                'type' => 'seller',
                'password' => password_hash('123456789', PASSWORD_BCRYPT)
            ]
        ];
        foreach ($users as $user) {
            $this->db->table('user')->insert($user);
        }
    }

    private function generateClient($user): array
    {
     
        return [
            'name' => $user['name'],
            'email' => 'deneme@hotmail.com', //$faker->email,
            'type' => 'admin',
            'password' => password_hash('123456789', PASSWORD_BCRYPT)
        ];
    }
}
