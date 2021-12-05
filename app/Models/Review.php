<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

//Relacion uno a muchos inversa
public function user() {
    return $this->belongsTo('App\Models\User');
}
//Relacion uno a muchos
public function course() {
    return $this->belongsTo('App\Models\Course');
}
}
