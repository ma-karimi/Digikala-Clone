<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'en-title', 'slug', 'brand_id', 'status',
        'json','review','detail','price','quantity'];

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function rates()
    {
        return $this->hasMany(Rate::class, 'product_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'product_id');
    }

    public function image()
    {
        return $this->morphOne(Image::class,'imageable');
    }

    public function brand()
    {
        return $this->hasOne(Brand::class);
    }

    public function sliders()
    {
        return $this->belongsToMany(Slider::class);
    }

    public function incridibles()
    {
        return $this->belongsToMany(Incridible::class);
    }
}
