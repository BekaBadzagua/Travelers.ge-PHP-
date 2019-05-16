<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Information;

class AboutController extends Controller
{
    public function index()
    {
        $data['about'] = Information::where('name','=','smallinfo')->first();
        $data['person1'] = Information::where('name','=','person1')->first();
        $data['person2'] = Information::where('name','=','person2')->first();
        $data['person3'] = Information::where('name','=','person3')->first();
        return view("Front.about",$data);
    }
}
