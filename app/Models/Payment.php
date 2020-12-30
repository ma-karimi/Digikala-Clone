<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = ['order_id', 'tracking_code', 'total_price', 'status'];

    public function order()
    {
        $this->hasOne(Order::class);
    }
}
