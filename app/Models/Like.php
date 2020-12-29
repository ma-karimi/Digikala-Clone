<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'comment_id', 'status'];

    public function comment()
    {
        $this->hasOne(Comment::class);
    }

    public function comment()
    {
        $this->hasOne(User::class);
    }
}
