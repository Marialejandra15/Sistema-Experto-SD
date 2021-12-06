<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $guarded = ['id', 'status'];
    protected $withCount = ['students', 'reviews'];


    use HasFactory;
    const Borrador = 1;
    const Revision = 2;
    const Publicado = 3;


    public function scopeCategory($query, $category_id){
        if($category_id){
            return $query->where('category_id', $category_id);
        }
    }

    public function scopeLevel($query, $level_id){
        if($level_id){
            return $query->where('level_id', $level_id);
        }
    }
    public function getRatingAttribute(){
        if($this->reviews_count){
            return round($this->reviews->avg('rating'), 1);
        }else{
            return 5;
        }
    }

    public function getRouteKeyName()
    {
        return 'slug';
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

    public function sections()
    {
        return $this->hasMany('App\Models\Section');
    }

    public function teacher()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function students()
    {
        return $this->belongsToMany('App\Models\User');
    }
    //Relacion uno a muchos
    public function reviews()
    {
        return $this->hasMany('App\Models\Review');
    }

    public function level()
    {
        return $this->belongsTo('App\Models\Level');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function price()
    {
        return $this->belongsTo('App\Models\Price');
    }
    public function image()
    {
        return $this->morphOne('App\Models\Image', 'imageable');
    }
    public function lessons()
    {
        return $this->hasManyThrough('App\Models\Lesson', 'App\Models\Section');
    }
}
