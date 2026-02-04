<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\HeroSection;

class HeroSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $heroes = [
            [
                'page_name' => 'home',
                'title' => 'Creative Design Agency',
                'heading' => 'YA <span class="text-bk-orange">DESAIN,</span><br>YA <span class="text-bk-orange uppercase">NGEGAMBAR,</span><br>YA <span class="text-bk-orange">MERCH.</span>',
                'description' => 'Affordable design agency for your design needs. <br><span class="text-bk-orange italic underline decoration-bk-orange/50 underline-offset-8">"Desain rasa jeruk."</span>',
                'background_image' => 'images/hero_bg.jpeg',
            ],
            [
                'page_name' => 'layanan',
                'title' => 'Apa yang Kami Lakukan',
                'heading' => 'KATALOG <br><span class="text-bk-orange uppercase">KREATIF.</span>',
                'description' => 'Dari sketsa kasar hingga produk siap pakai. Kami memberikan sentuhan magis di setiap piksel dan garis yang kami buat.',
                'background_image' => null,
            ],
            [
                'page_name' => 'about',
                'title' => 'Tentang Kami',
                'heading' => 'STUDIO <br>DENGAN <br><span class="text-bk-orange uppercase">KARAKTER.</span>',
                'description' => 'Balik Kucing Studio bukan sekadar agensi desain. Kami adalah kolektif kreatif yang percaya bahwa estetika dan fungsi harus berjalan beriringan.',
                'background_image' => null,
            ],
            [
                'page_name' => 'contact',
                'title' => "Let's Talk",
                'heading' => 'MARI <br><span class="text-bk-orange uppercase">KOLABORASI.</span>',
                'description' => 'Punya ide gila atau sekadar ingin menyapa? Pintu kami selalu terbuka untuk diskusi yang hangat. ☕',
                'background_image' => null,
            ],
        ];

        foreach ($heroes as $hero) {
            HeroSection::updateOrCreate(
                ['page_name' => $hero['page_name']],
                $hero
            );
        }
    }
}
