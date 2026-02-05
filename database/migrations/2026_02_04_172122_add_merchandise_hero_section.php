<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('hero_sections')->insert([
            'page_name' => 'merchandise',
            'title' => 'Official Store',
            'heading' => 'KOLEKSI <br><span class="text-bk-orange">EKSKLUSIF.</span>',
            'description' => 'Bawa pulang semangat kreatif kami. Merchandise berkualitas tinggi dengan sentuhan desain rasa jeruk yang khas.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('hero_sections')->where('page_name', 'merchandise')->delete();
    }
};
