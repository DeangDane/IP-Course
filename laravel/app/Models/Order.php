<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Attribute;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\SoftDeletes;


class Order extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table = 'order';
    protected $fillable = ['order_date'];
    
    protected function orderDate() : Attribute
    {
        return Attribute::make(
            // Mutator: Convert input format to MYSQL format before saving
            set: fn ($value) => Carbon::createFromFormat('d/m/Y H:i:s', $value)-> format('Y-m-d H:i:s'),

            // Accessor: Convert MYSQL format to output format
            get: fn ($value) => Carbon::parse($value)-> format('d/m/Y H:i:s')
        );
    }
}
