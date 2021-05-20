<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    // relacion 1 a 1 inversa
    public function user()
    {
        $this->belongsTo('App\Models\User');
    }

    
}
