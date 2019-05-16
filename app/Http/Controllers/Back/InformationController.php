<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;


use App\Models\Information;

class InformationController extends Controller
{
//Constructor
    public function __construct()
    {
        $this->middleware('auth');
    }
//Constructor

    public function index(){
        $data['informations'] = Information::all();
        return view('back.info',$data);
    }

    public function add(Request $request){
        // ვალიდაციები
        $this->validate($request,[
            'name'=>'required',
            'text' => 'required'
        ]);
        

        // ბაზაში ატვირთვა
        $info = new Information;
        $info->name = $request->Input('name');
        $info->text=$request->Input('text');
        $info->save();

        return redirect($_SERVER['HTTP_REFERER']);
    }
    
    public function edit($id, Request $request){
        // ვალიდაციები
        $this->validate($request,[
            'name'=>'required',
            'text' => 'required'
        ]);
        
        // ბაზაში ატვირთვა
        $info = Information::find($id);
        $info->name = $request->Input('name');
        $info->text=$request->Input('text');
        $info->save();

        return redirect($_SERVER['HTTP_REFERER']);
    }
    public function delete($id){
        $info = Information::find($id);
        $info->delete();

        return redirect($_SERVER['HTTP_REFERER']);
    }
}
