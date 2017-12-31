<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = ['title'];
    protected $table = "countries" ;
    
    
    public function operators()
    {
        return $this->hasMany('App\Operator');
    }
}
