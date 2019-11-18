<?php

use Illuminate\Database\Seeder;

class Product_ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO `product_images` (`product_id`, `image_id`) VALUES
        (1,1),
        (2,2);");
    }
}
