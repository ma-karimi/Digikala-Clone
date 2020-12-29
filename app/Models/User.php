<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'mobile',
        'status',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function locations()
    {
        $this->hasMany(Location::class, 'user_id');
    }

    public function favorites()
    {
        $this->hasMany(Location::class, 'user_id');
    }

    public function orders()
    {
        $this->hasMany(Order::class, 'user_id');
    }

    public function rates()
    {
        $this->hasMany(Rate::class, 'user_id');
    }

    public function comments()
    {
    $this->hasMany(Comment::class, 'user_id');
    }
}
