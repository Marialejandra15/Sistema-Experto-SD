<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    public function sections() {
        return $this->belongsTo('App\Models\Section');
    }
    public function plataform() {
        return $this->belongsTo('App\Models\Plataform');
    }
    public function description() {
        return $this->hasOne('App\Models\Description');
    }
    public function users() {
        return $this->belongsToMany('App\Models\User');
    }
    public function resource() {
        return $this->morphOne('App\Models\Resource','resourceable');
    }
    public function comments() {
        return $this->morphOne('App\Models\User','commentable');
    }
    public function reactions() {
        return $this->morphOne('App\Models\Reaction','reactionable');
    }
    
}
