<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class User extends Seeder
{
    public function run()
    {
        $fake = Factory::create();

        for ($i = 1; $i < 100; $i++) {
            $data = [
                'firstName' => $fake->firstName(),
                'lastName' => $fake->lastName(),
                'image' => 'https://randomuser.me/api/portraits/men/' . rand(1, 90) . '.jpg',
                'email' => $fake->email(),
                'password' => password_hash('123', PASSWORD_DEFAULT)
            ];
            $this->db->table('users')->insert($data);
        }
    }
}
