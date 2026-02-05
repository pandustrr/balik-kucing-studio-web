<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pricelist extends Model
{
    use HasFactory;

    protected $fillable = [
        'pricelist_category_id',
        'name',
        'description',
        'price',
        'features',
        'is_featured',
        'order'
    ];

    protected $casts = [
        'features' => 'array',
        'is_featured' => 'boolean',
        'price' => 'decimal:2'
    ];

    // Relationship
    public function category()
    {
        return $this->belongsTo(PricelistCategory::class, 'pricelist_category_id');
    }
}
