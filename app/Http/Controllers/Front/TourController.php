<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Tour;

class TourController extends Controller
{
    public function index()
    {
        $data['tours'] = Tour::where('smallprice','=',null)->paginate(6);
        $data['sales'] = Tour::where('smallprice','!=',null)->get();

        return view("Front.tours",$data);
    }
    
    public function show($id){
        $data['tour'] = Tour::find($id);

        return view("Front.Show.tour",$data);
    }
}
