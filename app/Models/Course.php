<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    const BORRADOR = 1;
    const REVISION = 2;
    const PUBLICADO = 3;
    

    // relaciion uno a muchos inversa
    public function teacher()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
    public function students()
    {
        return $this->belongsToMany('App\Models\User','user_id');
    }
    public function reviews()
    {
        return $this->hasMany('App\Models\Review'); 
    }
    public function level()
    {
        return $this->belongsTo('App\Models\Level'); 
    }
   
    public function price()
    {
        return $this->belongsTo('App\Models\Price'); 
    }
    public function category()
    {
        return $this->belongsTo('App\Models\Category'); 
    }
    public function requirements()
    {
        return $this->hasMany('App\Models\Requirement');
    }
    public function goals()
    {
        return $this->hasMany('App\Models\Goal');
    }
    public function audiences()
    {
        return $this->hasMany('App\Models\Audience');
    }
}
