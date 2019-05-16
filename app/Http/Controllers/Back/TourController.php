<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;


use App\Models\Tour;

class TourController extends Controller
{
    //Constructor
        public function __construct()
        {
            $this->middleware('auth');
        }
    //Constructor



// Start: Private Functions
    private function delete_image($id){
        $model = Tour::find($id);

        if($model->img){
            $img_path = public_path('\storage\images\tours'."\\".$model->img); 
            if(File::exists($img_path)){
                unlink($img_path);
            } 
        }
    }
// End: Private Functions

//GET
    public function index(){
        $data['tours'] = Tour::all();

        return view('back.tours',$data);
    }
//GET

//POST
    public function add(Request $request){
        // ვალიდაციები
        $this->validate($request,[
            'name'=>'required',
            'img' => 'required',
            'text' => 'required',
            'price' => 'required',
            'days' => 'required',
            'difficulty' => 'required',
            'map' => 'required',
            'place_id' => 'required'
        ]);
        

        // სურათის დამუშავება
        if(Input::hasFile('img')){
            $file = Input::file('img');
            $file->move('storage/images/tours',$file->getClientOriginalName());
        }

        // ბაზაში ატვირთვა
        $tour = new Tour;
        $tour->name = $request->Input("name");
        $tour->img = $request->Input("img");
        $tour->text = $request->Input("text");
        $tour->price = $request->Input("price");
        $tour->smallprice = $request->Input("smallprice");
        $tour->days = $request->Input("days");
        $tour->difficulty = $request->Input("difficulty");
        $tour->map = $request->Input("map");
        $tour->place_id = $request->Input("place_id");
        $tour->img= $file->getClientOriginalName();
        $tour->save();

        return redirect($_SERVER['HTTP_REFERER']);
    }


    public function edit($id, Request $request){
        // ვალიდაციები
        $this->validate($request,[
            'name'=>'required',
            'text' => 'required',
            'price' => 'required',
            'days' => 'required',
            'difficulty' => 'required',
            'place_id' => 'required',
            'map' => 'required'
        ]);

        $tour = Tour::find($id);
        $tour->name = $request->Input("name");
        $tour->text = $request->Input("text");
        $tour->price = $request->Input("price");
        $tour->smallprice = $request->Input("smallprice");
        $tour->days = $request->Input("days");
        $tour->difficulty = $request->Input("difficulty");
        $tour->map = $request->Input("map");
        $tour->place_id = $request->Input("place_id");

        // სურათის დამუშავება 
        if(Input::hasFile('img')){
            //წაშალე ძველი
            self::delete_image($id);
            // დაამატე ახალი
            $name = time();
            $file = Input::file('img');
            $file->move('storage/images/tours',$name);
            $tour->img = $name;
        }

        $tour->save();
        return redirect($_SERVER['HTTP_REFERER']);

    }


    public function delete($id){
        $tour = Tour::find($id);
        self::delete_image($id);

        $tour->delete();
        return redirect($_SERVER['HTTP_REFERER']);
    }
//POST
}
