<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorites extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','product_id'];

    public $timestamps = false;

    public function user()
    {
        $this->hasOne(User::class);
    }
}
