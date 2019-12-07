<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	factory(Category::class)->create();
        factory(Category::class,20)->create();
        factory(Product::class)->create();
        factory(Product::class,20)->create();
    }
}
