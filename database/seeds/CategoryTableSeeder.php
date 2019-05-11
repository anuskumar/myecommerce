<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     *
     */

    public function run()
    {

        // $categories = ['Laravel Developer','Web Developer','E-Commerce Developer'];

        // foreach($categories as $category){
        //     Category::create([
        //         'name' => $category,
        //         'slug' => str_slug($category),

        //         ]);
        // }

        // No Need This Code

        factory(Category::class, 10)->create();
    }
}

// 'description' => str_random(120),
// 10 is How much type data I want to input
