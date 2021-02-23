<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
   
    protected $fillable = ['id','title','country_id'];
    public function country(){
        return $this->belongsTo('App\Models\Country');
    }
}
