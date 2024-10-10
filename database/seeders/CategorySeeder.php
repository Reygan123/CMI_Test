<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['name' => 'Kanker'],
            ['name' => 'Diabetes'],
            ['name' => 'Jantung'],
            ['name' => 'Ginjal'],
        ];

        // Insert categories into the database
        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
