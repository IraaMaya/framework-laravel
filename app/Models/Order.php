<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'customer_name',
        'total_price',
    ];

    public $timestamps = true;

    public function getTotalPriceAttribute($value)
    {
        return number_format($value, 2);
    }
}
