<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['id','content_id','operator_id','Published_Date','Published','Free','user_id','post_image'];
    protected $table = "posts" ;
    
    public function operator()
    {
        return $this->belongsTo('App\Operator');
    }
    
    public function content()
    {
        return $this->belongsTo('App\Content');
    }
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
