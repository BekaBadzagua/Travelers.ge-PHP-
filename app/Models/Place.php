<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    public function Category(){
        return $this->belongsTo('App\Models\Category');
    }
    public function Tour(){
        return $this->hasMany('App\Models\Tour');
    }
}
