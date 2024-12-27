<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'title' => 'Material Dasar',
            'subtitle' => 'Seng / Semen / Batu Batako / Lainnya',
            'image_path' => 'images/screenshot-2024-12-19.png',
            'detail_url' => null
        ]);
        Product::create([
            'title' => 'Alat Berat',
            'subtitle' => 'Motor Grader / Whell Loader / Excavator / Lainnya',
            'image_path' => 'images/screenshot-2024-12-18.png',
            'detail_url' => null
        ]);
        Product::create([
            'title' => 'Truck',
            'subtitle' => 'Canter HD-X / Canter 125 HD / Hino Ranger Dump FM 260 / Lainnya',
            'image_path' => 'images/-Mzsid3RJrUwW8b1Knty.jpg',
            'detail_url' => null
        ]);
        Product::create([
            'title' => 'Pengaspalan',
            'subtitle' => 'Aspal Bakar / Aspal Penetrasi / Base B / Lainnya',
            'image_path' => 'images/Asphalt_Concrete.jpg',
            'detail_url' => null
        ]);
    }
}
