<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Func extends Model
{
    use HasFactory;

    public function lang()
    {
        return $this->belongsTo(Lang::class);
    }
}
