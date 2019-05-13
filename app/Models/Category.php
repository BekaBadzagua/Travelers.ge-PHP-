<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function Place(){
        return $this->hasMany('App\Models\Place');
    }
}
