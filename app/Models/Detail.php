<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

    protected $fillable = ['value' , 'specification_id'];

    public function specification()
    {
        return $this->belongsTo(Specification::class,'specification_id');
    }
}
