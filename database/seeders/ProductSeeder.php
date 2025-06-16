<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $timeZone = now('Asia/Jakarta');

        $products = [
            ['name' => 'Lavender Bliss', 'description' => 'Aroma bunga lavender yang menenangkan.', 'price' => 125000, 'created_at' => $timeZone],
            ['name' => 'Ocean Breeze', 'description' => 'Kesegaran laut untuk hari aktifmu.', 'price' => 99000, 'created_at' => $timeZone],
            ['name' => 'Citrus Spark', 'description' => 'Wangi jeruk segar dan energik.', 'price' => 105000, 'created_at' => $timeZone],
            ['name' => 'Midnight Oud', 'description' => 'Aroma elegan khas malam hari.', 'price' => 159000, 'created_at' => $timeZone],
            ['name' => 'Rose Romance', 'description' => 'Wangi mawar yang menggoda dan lembut.', 'price' => 139000, 'created_at' => $timeZone],
            ['name' => 'Vanilla Dream', 'description' => 'Keharuman vanilla yang manis dan hangat.', 'price' => 115000, 'created_at' => $timeZone],
            ['name' => 'Forest Whisper', 'description' => 'Campuran kayu dan daun segar dari hutan.', 'price' => 99000, 'created_at' => $timeZone],
            ['name' => 'Amber Flame', 'description' => 'Wewangian hangat dengan sentuhan amber.', 'price' => 149000, 'created_at' => $timeZone],
            ['name' => 'Berry Splash', 'description' => 'Campuran buah berry yang menyegarkan.', 'price' => 97000, 'created_at' => $timeZone],
            ['name' => 'Coffee Rush', 'description' => 'Aroma kopi yang kuat dan membangkitkan semangat.', 'price' => 109000, 'created_at' => $timeZone],
        ];

        foreach ($products as $item) {
            Product::create($item);
        }
    }
}
