<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class Reply extends Seeder
{
    public function run()
    {
        $faker = Factory::create();

        for ($i = 1; $i <= 10000; $i++) {

            $data = [
                'user_id' => $faker->numberBetween(1, 99),
                'comment_id' => $faker->numberBetween(1, 10000),
                'comment' => $faker->paragraph()
            ];

            $this->db->table('replies')->insert($data);
        }
    }
}
