<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cart extends Model {
    use SoftDeletes;

    protected $fillable = ['customer_id', 'product_id', 'quantity']; //This is important for security, ensuring only specific fields can be filled via user input.
    protected $table = 'cart';

    public function customer() {
        return $this->belongsTo(Customer::class);
    }

    public function product() {
        return $this->belongsTo(Product::class);
    }
}
