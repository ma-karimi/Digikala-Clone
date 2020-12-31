<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factor extends Model
{
    use HasFactory;

    protected $fillable = ['order_id', 'factor'];

    public function order()
    {
        $this->hasOne(Order::class);
    }
}
