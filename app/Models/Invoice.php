<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $table = 'invoices';

    protected $fillable = [
        'client_name',
        'total_amount',
    ];

    public function getTotalAmountAttribute($value)
    {
        return number_format($value, 2);
    }
}
