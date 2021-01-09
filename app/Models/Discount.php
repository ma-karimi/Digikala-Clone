<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;

    protected $fillable = ['value', 'count', 'expire_time', 'max_price', 'status'];

    public function orders()
    {
        return $this->hasMany(Order::class,'discount_id');
    }
}
