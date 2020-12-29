<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'en_title', 'slug', 'brand', 'status', 'json'];

    public function orders()
    {
        $this->belongsToMany(Order::class);
    }

    public function categories()
    {
        $this->belongsToMany(Category::class);
    }
}
