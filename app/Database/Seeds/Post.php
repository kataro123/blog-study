<?php

namespace App\Database\Seeds;

use Bluemmb\Faker\PicsumPhotosProvider;
use CodeIgniter\Database\Seeder;
use Faker\Factory;

class Post extends Seeder
{
    public function run()
    {
        $faker = Factory::create('pt_BR');
        $faker->addProvider(new PicsumPhotosProvider($faker));

        for ($i = 0; $i <= 10000; $i++) {
            $titulo = $faker->sentence;
            $data = [
                'user_id' => $faker->numberBetween(1, 99),
                'category_id' => $faker->numberBetween(1, 13),
                'title' => $titulo,
                'slug' => strtolower(str_replace('.', '', str_replace(' ', '-', $titulo))),
                'visits' => $faker->numberBetween(1, 100),
                'image' => $faker->imageUrl(),
                'description' => $faker->paragraph(5)
            ];

            $this->db->table('posts')->insert($data);
        }
    }
}
