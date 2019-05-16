<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Place;

class PlaceController extends Controller
{
    public function index()
    {
        $data['places'] = Place::where('id','>',0)->paginate(6);

        return view("Front.places",$data);
    }

    public function show($id){
        $data['place'] = Place::find($id);

        return view("Front.Show.place",$data);
    }
}
