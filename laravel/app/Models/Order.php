<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    protected $table = 'order';
    protected $fillable = ['order_date', 'customer_id', 'total_price'];
    protected $casts = ['deleted_at' => 'datetime']; //Ensures deleted_at is automatically cast as a DateTime.

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function orderProducts()
    {
        return $this->hasMany(OrderProduct::class);
    }
    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

    protected function orderDate(): Attribute
    {
        return Attribute::make(
            // Mutator: Convert user input format to MySQL format before saving
            set: function ($value) {
                if (!$value) return null; // Handle null values safely
                try {
                    return Carbon::createFromFormat('d/m/Y H:i:s', $value)->format('Y-m-d H:i:s');
                } catch (\Exception $e) {
                    return $value; // Prevent crash on invalid format
                }
            },

            // Accessor: Convert MySQL format back to user-friendly format
            get: function ($value) {
                return $value ? Carbon::parse($value)->format('d/m/Y H:i:s') : null;
            }
        );
    }
}
