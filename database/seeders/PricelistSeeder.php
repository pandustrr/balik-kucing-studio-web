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
                'features' => [
                    ['name' => 'Logo design', 'is_available' => true],
                    ['name' => 'Brand guideline', 'is_available' => true],
                    ['name' => '3x revisi', 'is_available' => true],
                    ['name' => 'File source', 'is_available' => true]
                ],
                'order' => 1
            ]);

            Pricelist::create([
                'pricelist_category_id' => $yaDesain->id,
                'name' => 'UI/UX Design',
                'description' => 'Desain antarmuka aplikasi atau website yang user-friendly',
                'price' => 1500000,
                'features' => [
                    ['name' => 'Wireframe', 'is_available' => true],
                    ['name' => 'High-fidelity mockup', 'is_available' => true],
                    ['name' => 'Prototype', 'is_available' => true],
                    ['name' => 'Design system', 'is_available' => true]
                ],
                'order' => 2
            ]);
        }

        // Social Media Design Category
        $socmedDesign = PricelistCategory::updateOrCreate(
            ['slug' => 'social-media-design'],
            [
                'name' => 'Social Media Design',
                'description' => 'Optimalkan kehadiran brand Anda di media sosial dengan desain konten yang konsisten dan profesional.',
                'order' => 4
            ]
        );

        Pricelist::create([
            'pricelist_category_id' => $socmedDesign->id,
            'name' => 'Bronze',
            'description' => 'Untuk yang baru mulai dan ingin konsisten di sosial media',
            'price' => 540000,
            'features' => [
                ['name' => '9 Feed (3 Carousel)', 'is_available' => true],
                ['name' => 'Konsep Desain & Content Planning', 'is_available' => true],
                ['name' => 'Admin Posting', 'is_available' => true],
                ['name' => 'Copywriting (caption + CTA)', 'is_available' => true],
                ['name' => 'Story Design', 'is_available' => true],
                ['name' => '1 Cover Highlight (bonus)', 'is_available' => true],
                ['name' => 'Editable Canva Link', 'is_available' => true]
            ],
            'order' => 1
        ]);

        Pricelist::create([
            'pricelist_category_id' => $socmedDesign->id,
            'name' => 'Silver',
            'description' => 'Untuk UMKM/mahasiswa yang ingin lebih aktif dan variatif.',
            'price' => 790000,
            'features' => [
                ['name' => '15 Feed (5 Carousel)', 'is_available' => true],
                ['name' => 'Konsep Desain & Content Planning', 'is_available' => true],
                ['name' => 'Admin Posting', 'is_available' => true],
                ['name' => 'Copywriting (caption + CTA)', 'is_available' => true],
                ['name' => 'Story Design', 'is_available' => true],
                ['name' => '3 Cover Highlight (bonus)', 'is_available' => true],
                ['name' => 'Editable Canva Link', 'is_available' => true]
            ],
            'order' => 2
        ]);

        Pricelist::create([
            'pricelist_category_id' => $socmedDesign->id,
            'name' => 'Gold',
            'description' => 'Untuk yang ingin all out dalam usaha profesional & konten lebih banyak.',
            'price' => 1440000,
            'features' => [
                ['name' => '30 Feed (10 Carousel)', 'is_available' => true],
                ['name' => 'Konsep Desain & Content Planning', 'is_available' => true],
                ['name' => 'Admin Posting', 'is_available' => true],
                ['name' => 'Copywriting (caption + CTA)', 'is_available' => true],
                ['name' => '3 Story Design', 'is_available' => true],
                ['name' => '5 Cover Highlight (bonus)', 'is_available' => true],
                ['name' => 'Editable Canva Link', 'is_available' => true]
            ],
            'order' => 3
        ]);

        // Ya Ngegambar Category
        $yaNgegambar = PricelistCategory::where('slug', 'ya-ngegambar')->first();
        if ($yaNgegambar) {
            Pricelist::create([
                'pricelist_category_id' => $yaNgegambar->id,
                'name' => 'Character Design',
                'description' => 'Desain karakter custom sesuai kebutuhan Anda',
                'price' => 750000,
                'features' => [
                    ['name' => 'Full body design', 'is_available' => true],
                    ['name' => '3 poses', 'is_available' => true],
                    ['name' => 'Color variations', 'is_available' => true],
                    ['name' => 'High-res files', 'is_available' => true]
                ],
                'order' => 1
            ]);

            Pricelist::create([
                'pricelist_category_id' => $yaNgegambar->id,
                'name' => 'Digital Illustration',
                'description' => 'Ilustrasi digital untuk berbagai keperluan',
                'price' => 600000,
                'features' => [
                    ['name' => 'Custom illustration', 'is_available' => true],
                    ['name' => 'Unlimited revisi', 'is_available' => true],
                    ['name' => 'Commercial use', 'is_available' => true]
                ],
                'order' => 2
            ]);

            Pricelist::create([
                'pricelist_category_id' => $yaNgegambar->id,
                'name' => 'Custom Artwork',
                'description' => 'Karya seni digital yang unik dan personal',
                'price' => 850000,
                'features' => [
                    ['name' => 'Unique artwork', 'is_available' => true],
                    ['name' => 'Print ready', 'is_available' => true],
                    ['name' => 'Full ownership', 'is_available' => true]
                ],
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
                'features' => [
                    ['name' => '50pcs minimum', 'is_available' => true],
                    ['name' => 'Vinyl/paper', 'is_available' => true],
                    ['name' => 'Custom shape', 'is_available' => true],
                    ['name' => 'Free design', 'is_available' => true]
                ],
                'order' => 1
            ]);

            Pricelist::create([
                'pricelist_category_id' => $yaMerch->id,
                'name' => 'T-Shirt Design',
                'description' => 'Desain dan produksi kaos custom',
                'price' => 120000,
                'features' => [
                    ['name' => 'Sablon/DTF', 'is_available' => true],
                    ['name' => 'Premium cotton', 'is_available' => true],
                    ['name' => 'All sizes', 'is_available' => true],
                    ['name' => 'Free mockup', 'is_available' => true]
                ],
                'order' => 2
            ]);

            Pricelist::create([
                'pricelist_category_id' => $yaMerch->id,
                'name' => 'Keychains & More',
                'description' => 'Gantungan kunci dan merchandise lainnya',
                'price' => 80000,
                'features' => [
                    ['name' => 'Acrylic/metal', 'is_available' => true],
                    ['name' => 'Custom design', 'is_available' => true],
                    ['name' => '20pcs minimum', 'is_available' => true]
                ],
                'order' => 3
            ]);
        }
    }
}
