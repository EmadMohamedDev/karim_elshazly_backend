<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable = ['id','title','path','type_id','user_id','prev_img','content_type'];
    protected $table = "contents" ;
    
    public function type()
    {
        return $this->belongsTo('App\Type');
    }
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
    
}
