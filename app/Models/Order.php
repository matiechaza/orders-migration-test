<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'store_id',
        'subtotal',
        'total',
        'customer_firstname',
        'customer_lastname',
        'customer_phone',
        'payment_status',
        'payment_method',
        'payment_credit_card_company',
        'payment_installments',
    ];
}
