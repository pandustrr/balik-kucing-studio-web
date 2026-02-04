<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('merchandise_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('merchandise_category_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->decimal('price', 15, 2)->nullable();
            $table->integer('stock')->default(0);
            $table->text('description')->nullable();
            $table->string('qris_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('merchandise_products');
    }
};
