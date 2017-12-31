<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rbt extends Model
{
    protected $fillable = ['content_id','category_id','operator_id','free','published','rbt_code'];
    protected $table = "rbts" ;
    
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    
    public function content()
    {
        return $this->belongsTo('App\Content');
    }
    
    public function operator()
    {
        return $this->belongsTo('App\Operator');
    }
}
