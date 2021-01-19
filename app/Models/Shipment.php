<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    use HasFactory;

    protected $fillable = ['order_id', 'carier_name', 'received_time'];

    public function order()
    {
        return $this->hasOne(Order::class);
    }
}
