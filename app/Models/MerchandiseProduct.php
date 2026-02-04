<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MerchandiseProduct extends Model
{
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(MerchandiseCategory::class, 'merchandise_category_id');
    }
}
