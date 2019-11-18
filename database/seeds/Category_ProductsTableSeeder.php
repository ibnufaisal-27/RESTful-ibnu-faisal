<?php

use Illuminate\Database\Seeder;

class Category_ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO `category_products` (`product_id`, `category_id`) VALUES
        (1,1),
        (2,2);");
    }
}
