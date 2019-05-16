<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;


use App\Models\Category;

class CategoryController extends Controller
{
//Constructor
    public function __construct()
    {
        $this->middleware('auth');
    }
//Constructor
    //GET
    public function index(){
        $data['categories'] = Category::all();
        return view('back.category',$data);
    }

    //POST
    public function add(Request $request){

        $this->validate($request,['name' => 'required']);

        $categ = new Category;
        $categ->name = $request->Input('name');
        $categ->save();

        return redirect($_SERVER['HTTP_REFERER']);
    }
    
    public function delete($id){
        $categ = Category::find($id);
        $categ->delete();

        return redirect($_SERVER['HTTP_REFERER']);
    }
}
