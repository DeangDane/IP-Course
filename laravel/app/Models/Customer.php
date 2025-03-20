<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Customer extends Model {
    use SoftDeletes;

    protected $table = 'customer';
    protected $fillable = ['name', 'email', 'phone'];

    public function cart() {
        return $this->hasMany(Cart::class);
        //This defines a one-to-many relationship between Customer and Cart.
        //A customer can have many carts, and each cart belongs to a single customer.
    }

    public function wishlist() {
        return $this->hasMany(Wishlist::class);
    }

    public function order() {
        return $this->hasMany(Order::class);
    }

    public function payment() {
        return $this->hasMany(Payment::class);
    }
}
