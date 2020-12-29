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
        $this->hasOne(User::class);
    }

    public function payments()
    {
        $this->hasMany(Payment::class,'order_id');
    }

    public function shipments()
    {
        $this->hasMany(Shipment::class,'order_id');
    }
}
