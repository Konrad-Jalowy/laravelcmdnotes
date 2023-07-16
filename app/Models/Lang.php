<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lang extends Model
{
    use HasFactory;


    public function frameworks()
    {
        return $this->hasMany(Framework::class);
    }

    public function functions()
    {
        return $this->hasMany(Func::class);
    }
}
