<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['parent_id', 'title'];
    #todo: add category self join

    public function products()
    {
        $this->belongsToMany(Product::class);
    }
}
