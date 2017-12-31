<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    protected $fillable = ['title','operator_code','operator_image','country_id'];
    protected $table = "operators" ;
    
    
    
    public function rbts()
    {
        return $this->hasMany('App\Rbt');
    }
    
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
    
    public function country()
    {
        return $this->belongsTo('App\Country');
    }
}
