<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    const Borrador = 1;
    const Revision = 2;
    const Publicado = 3;

public function requirements() {
        return $this->hasMany('App\Models\Requirements');
    }
 
public function goals() {
        return $this->hasMany('App\Models\Goal');
    }

public function audiences() {
        return $this->hasMany('App\Models\Audience');
    }

    public function sections() {
        return $this->hasMany('App\Models\Section');
    }

public function teacher() {
    return $this->belongsTo('App\Models\User','user_id');
}

public function students() {
    return $this->belongsToMany('App\Models\User');
}
//Relacion uno a muchos
public function reviews() {
    return $this->hasMany('App\Models\Review');
}

public function level() {
    return $this->belongsTo('App\Models\Level');
}

public function category() {
    return $this->belongsTo('App\Models\Category');
}

public function price() {
    return $this->belongsTo('App\Models\Price');
}

}

