<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\blog;

class BlogController extends Controller
{
    public function index()
    {
        $data['blogs'] = Blog::where('id','>',0)->paginate(6);

        return view("Front.blogs",$data);
    }

    public function show($id){
        $data['blog'] = Blog::find($id);

        return view("Front.Show.blog",$data);
    }
}
