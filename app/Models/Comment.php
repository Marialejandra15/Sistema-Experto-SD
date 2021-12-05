<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    public function commentable() {
        return $this->morphTo();
    }
    public function commets() {
        return $this->morphMany('App\Models\Comment','Comentable');
    }
    public function reactions() {
        return $this->morphMany('App\Models\Comment','reactionable');
    }
    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
