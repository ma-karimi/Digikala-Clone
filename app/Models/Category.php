<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['parent_id', 'title'];

    public function products()
    {
        $this->belongsToMany(Product::class);
    }

    public function slider()
    {
        $this->hasOne(Category::class);
    }

    public function incridible()
    {
        $this->hasOne(Category::class);
    }
}
