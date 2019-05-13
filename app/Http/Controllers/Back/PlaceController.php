<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;


use App\Models\Place;

class PlaceController extends Controller
{
// Start: Private Functions
    private function delete_image($id){
        $model = Place::find($id);

        if($model->img){
            $img_path = public_path('\storage\images\places'."\\".$model->img); 
            if(File::exists($img_path)){
                unlink($img_path);
            } 
        }
    }
// End: Private Functions

//GET
    public function index(){
        $data['places'] = Place::all();
        return view('back.places',$data);
    }
//GET

//POST
    public function add(Request $request){
        // ვალიდაციები
        $this->validate($request,[
            'img'=>'required',
            'name' => 'required',
            'text' => 'required',
            'category_id' => 'required'
        ]);
        
        // სურათის დამუშავება
        if(Input::hasFile('img')){
            $file = Input::file('img');
            $file->move('storage/images/places',$file->getClientOriginalName());
        }

        // ბაზაში ატვირთვა
        $place = new Place;
        $place->category_id = $request->Input('category_id');
        $place->name = $request->Input('header');
        $place->text=$request->Input('text');
        $place->img= $file->getClientOriginalName();
        $place->save();

        return redirect($_SERVER['HTTP_REFERER']);
    }


    public function edit($id, Request $request){
        // ვალიდაციები
        $this->validate($request,[
            'img'=>'required',
            'name' => 'required',
            'text' => 'required',
            'category_id' => 'required'
        ]);
        
        //იპოვე სლაიდერი id-ით
        $place = Place::find($id);
        $place->category_id = $request->Input('category_id');
        $place->name = $request->Input('header');
        $place->text=$request->Input('text');

        // სურათის დამუშავება 
        if(Input::hasFile('img')){
            //წაშალე ძველი
            self::delete_image($id);
            // დაამატე ახალი
            $name = time();
            $file = Input::file('img');
            $file->move('storage/images/places',$name);
            $place->img = $name;
        }

        $place->save();
        return redirect($_SERVER['HTTP_REFERER']);
    }

    
    public function delete($id){
        $place=Place::find($id);
        self::delete_image($id);

        $place->delete();
        return redirect($_SERVER['HTTP_REFERER']);
    }
//POST
}
