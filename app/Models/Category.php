<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['parent_id', 'title'];

    protected $with = ['children'];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function slider()
    {
        return $this->hasOne(Slider::class);
    }

    public function incridible()
    {
        return $this->hasOne(Incridible::class);
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id')->distinct('parent_id');
    }
}
