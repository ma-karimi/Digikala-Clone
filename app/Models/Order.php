<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'receive_time',
        'status', 'discount', 'payment'];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class,'order_id');
    }

    public function shipments()
    {
        return $this->hasMany(Shipment::class,'order_id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function discount()
    {
        return $this->hasOne(Discount::class);
    }

    public function factor()
    {
        return $this->hasOne(Factor::class);
    }
}
