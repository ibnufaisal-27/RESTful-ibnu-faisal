<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO `categories` (`id`, `name`, `enable`) VALUES
        (1, 'Laptop', true),
        (2, 'Aksesoris Komputer', true);");
    }
}
