<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $fillable = ['location','category_id'];

    public function category()
    {
        $this->hasOne(Category::class);
    }

    public function products()
    {
        $this->belongsToMany(Product::class);
    }
}
