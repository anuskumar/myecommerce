<?php

use Illuminate\Database\Seeder;
use App\Product;
use Carbon\Carbon;

class ProductTableSeeder extends Seeder
{

    public function run()
    {
        // $products= ['Hotel Management','School Management'];
        for ($i = 1; $i <= 100; $i++) {
            Product::create([
                'category_id' => rand(52, 54),
                'name' => 'Product' . $i,
                'slug' => str_slug('Product' . $i),
                'description' => str_random(120),
                'quantity' => rand(1, 10),
                'price' => rand(100, 5000),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
