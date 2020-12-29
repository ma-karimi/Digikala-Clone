<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'product_id', 'rate'];

    public function user()
    {
        $this->hasOne(User::class);
    }

    public function product()
    {
        $this->hasOne(Product::class);
    }
}
