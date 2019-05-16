<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Slider;
use App\Models\Place;
use App\Models\Blog;
use App\Models\Tour;

class HomeController extends Controller
{
    public function index()
    {
        $data['sliders']=Slider::all();
        $data["three_places"] = Place::all()->sortByDesc("created_at")->take(3);
        $data["six_tours"] = Tour::all()->sortByDesc("created_at")->take(6);
        $data["two_blogs"] = Blog::all()->sortByDesc("created_at")->take(2);
        return view("Front.home",$data);
    }
}
