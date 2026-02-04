<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroSection extends Model
{
    protected $fillable = [
        'page_name',
        'title',
        'heading',
        'description',
        'background_image',
    ];
}
