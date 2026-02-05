<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MerchandiseCategory extends Model
{
    protected $guarded = [];

    public function products()
    {
        return $this->hasMany(MerchandiseProduct::class);
    }
}
