<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('categories')->insert([
            [
                'title' => 'Все про игры',
                'slag' => 'allgames',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Линукс',
                'slag' => 'linux',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Музыка',
                'slag' => 'music',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Фильмы',
                'slag' => 'cinema',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Технологии',
                'slag' => 'technologies',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Наука',
                'slag' => 'science',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }

}
