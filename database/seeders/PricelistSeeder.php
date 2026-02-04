<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PricelistCategory;
use App\Models\Pricelist;

class PricelistSeeder extends Seeder
{
    public function run(): void
    {
        // Ya Desain Category
        $yaDesain = PricelistCategory::where('slug', 'ya-desain')->first();
        if ($yaDesain) {
            Pricelist::create([
                'pricelist_category_id' => $yaDesain->id,
                'name' => 'Logo & Brand Identity',
                'description' => 'Desain logo profesional dengan brand guideline lengkap',
                'price' => 500000,
                'features' => ['Logo design', 'Brand guideline', '3x revisi', 'File source'],
                'order' => 1
            ]);

            Pricelist::create([
                'pricelist_category_id' => $yaDesain->id,
                'name' => 'UI/UX Design',
                'description' => 'Desain antarmuka aplikasi atau website yang user-friendly',
                'price' => 1500000,
                'features' => ['Wireframe', 'High-fidelity mockup', 'Prototype', 'Design system'],
                'order' => 2
            ]);

            Pricelist::create([
                'pricelist_category_id' => $yaDesain->id,
                'name' => 'Social Media Design',
                'description' => 'Desain konten untuk Instagram, Facebook, dan platform lainnya',
                'price' => 300000,
                'features' => ['10 feed posts', '5 story templates', 'Editable files'],
                'order' => 3
            ]);
        }

        // Ya Ngegambar Category
        $yaNgegambar = PricelistCategory::where('slug', 'ya-ngegambar')->first();
        if ($yaNgegambar) {
            Pricelist::create([
                'pricelist_category_id' => $yaNgegambar->id,
                'name' => 'Character Design',
                'description' => 'Desain karakter custom sesuai kebutuhan Anda',
                'price' => 750000,
                'features' => ['Full body design', '3 poses', 'Color variations', 'High-res files'],
                'order' => 1
            ]);

            Pricelist::create([
                'pricelist_category_id' => $yaNgegambar->id,
                'name' => 'Digital Illustration',
                'description' => 'Ilustrasi digital untuk berbagai keperluan',
                'price' => 600000,
                'features' => ['Custom illustration', 'Unlimited revisi', 'Commercial use'],
                'order' => 2
            ]);

            Pricelist::create([
                'pricelist_category_id' => $yaNgegambar->id,
                'name' => 'Custom Artwork',
                'description' => 'Karya seni digital yang unik dan personal',
                'price' => 850000,
                'features' => ['Unique artwork', 'Print ready', 'Full ownership'],
                'order' => 3
            ]);
        }

        // Ya Merch Category
        $yaMerch = PricelistCategory::where('slug', 'ya-merch')->first();
        if ($yaMerch) {
            Pricelist::create([
                'pricelist_category_id' => $yaMerch->id,
                'name' => 'Custom Stickers',
                'description' => 'Stiker custom dengan berbagai ukuran dan bahan',
                'price' => 150000,
                'features' => ['50pcs minimum', 'Vinyl/paper', 'Custom shape', 'Free design'],
                'order' => 1
            ]);

            Pricelist::create([
                'pricelist_category_id' => $yaMerch->id,
                'name' => 'T-Shirt Design',
                'description' => 'Desain dan produksi kaos custom',
                'price' => 120000,
                'features' => ['Sablon/DTF', 'Premium cotton', 'All sizes', 'Free mockup'],
                'order' => 2
            ]);

            Pricelist::create([
                'pricelist_category_id' => $yaMerch->id,
                'name' => 'Keychains & More',
                'description' => 'Gantungan kunci dan merchandise lainnya',
                'price' => 80000,
                'features' => ['Acrylic/metal', 'Custom design', '20pcs minimum'],
                'order' => 3
            ]);
        }
    }
}
