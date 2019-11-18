<?php

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO `images` (`id`, `name`, `file`,`enable`) VALUES
        (1, 'Asus Vivobox 360', 'asus.jpg', true),
        (2, 'FlashDisk Sandisk 128 GB','sandisk_128.jpg', true);");
    }
}
