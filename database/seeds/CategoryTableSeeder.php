<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categories = ['Laravel Developer','Web Developer','E-Commerce Developer'];

        foreach($categories as $category){
            Category::create([
                'name' => $category,
                'slug' => str_slug($category),
                'description' => str_random(120),
                ]);
        }
    }
}
