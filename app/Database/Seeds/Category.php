<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class Category extends Seeder
{
    public function run()
    {
        $faker = Factory::create('fr_FR');
        $data = [
            'name' => 'Culture',
            'slug' => 'culture'
        ];

        $this->db->table('categories')->insert($data);

        $data = [
            'name' => 'Business',
            'slug' => 'business'
        ];

        $this->db->table('categories')->insert($data);
        $data = [
            'name' => 'Lifestyle',
            'slug' => 'lifestyle'
        ];

        $this->db->table('categories')->insert($data);

        for ($i = 1; $i <= 10; $i++) {
            $department = $faker->departmentName;
            $data = [
                'name' => $department,
                'slug' => strtolower(str_replace('', '-', $department))
            ];

            $this->db->table('categories')->insert($data);
        }
    }
}
