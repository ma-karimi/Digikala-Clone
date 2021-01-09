<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'location', 'state', 'city',
        'address', 'number', 'unit', 'zip_code'];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
