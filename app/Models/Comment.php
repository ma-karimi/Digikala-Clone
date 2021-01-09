<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $with = ['replies'];

    protected $fillable = ['user_id', 'product_id', 'text', 'date', 'status'];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function product()
    {
        return $this->hasOne(Product::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class, 'comment_id');
    }

    public function replies()
    {
        return $this->hasMany(self::class, 'parent_id')->distinct();
    }
}
