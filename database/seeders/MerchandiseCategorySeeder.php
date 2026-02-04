<?php

namespace Database\Seeders;

use App\Models\MerchandiseCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MerchandiseCategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = ['Apparel', 'Sticker', 'Poster', 'Keychain'];

        foreach ($categories as $cat) {
            MerchandiseCategory::firstOrCreate(
                ['name' => $cat],
                ['slug' => Str::slug($cat)]
            );
        }
    }
}
