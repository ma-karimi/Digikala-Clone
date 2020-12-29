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

    public function rates()
    {
        $this->hasMany(Rate::class, 'product_id');
    }

    public function comments()
    {
        $this->hasMany(Comment::class, 'product_id');
    }
}
