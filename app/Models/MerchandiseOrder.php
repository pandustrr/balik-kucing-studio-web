<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MerchandiseOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'buyer_name',
        'buyer_location',
        'merchandise_product_id',
        'quantity',
        'total_price',
        'status'
    ];

    public function product()
    {
        return $this->belongsTo(MerchandiseProduct::class, 'merchandise_product_id');
    }
}
