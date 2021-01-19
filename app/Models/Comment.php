<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'product_id', 'text', 'date', 'status'];

    public function user()
    {
        return $this->hasOne(User::class,'id');
    }

    public function product()
    {
        return $this->hasOne(Product::class,'id','product_id');
    }

    public function likes()
    {
        return $this->hasMany(Like::class, 'comment_id');
    }
}
