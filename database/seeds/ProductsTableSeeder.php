<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO `products` (`id`, `name`, `description`,`enable`) VALUES
        (1, 'Asus Vivobox 360', 'Laptop Asus Vivobok, RAM 8GB, Intel Core i7', true),
        (2, 'FlashDisk Sandisk 128 GB','Flashdisk Sandisk kapasitas 128 GB up to 90 MBps', true);");
    }
}
