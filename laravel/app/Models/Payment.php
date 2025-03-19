<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['order_id', 'payment_method', 'status','customer_id', 'product_id', 'quantity', 'amount'];
    protected $table = 'payment';

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
