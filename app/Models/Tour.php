<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    public function Place(){
        return $this->belongsTo('App\Models\Place');
    }
}
