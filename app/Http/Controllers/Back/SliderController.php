<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;


use App\Models\Slider;



class SliderController extends Controller
{
// Start: Private Functions
    private function delete_image($id){
        $slider = Slider::find($id);

        if($slider->img){
            $img_path = public_path('\storage\images\slider'."\\".$slider->img); 
            if(File::exists($img_path)){
                unlink($img_path);
            } 
        }
    }
// End: Private Functions

// Method: GET
    public function index(){
        $data['sliders'] = Slider::all();
        return view('back.slider',$data);
    }
// Method: GET


// Method: POST
    public function add(Request $request){
        // ვალიდაციები
        $this->validate($request,[
            'img'=>'required',
            'header' => 'required',
            'text' => 'required'
        ]);
        
        // სურათის დამუშავება
        if(Input::hasFile('img')){
            $file = Input::file('img');
            $file->move('storage/images/slider',$file->getClientOriginalName());
        }

        // ბაზაში ატვირთვა
        $slider = new Slider;
        $slider->header = $request->Input('header');
        $slider->text=$request->Input('text');
        $slider->img= $file->getClientOriginalName();
        $slider->save();

        return redirect($_SERVER['HTTP_REFERER']);
    }


    public function edit($id, Request $request){
        //ვალიდაციები
        $this->validate($request,[
            'header' => 'required',
            'text' => 'required'
        ]);
        
        //იპოვე სლაიდერი id-ით
        $slider = Slider::find($id);
        $slider->header = $request->Input('header');
        $slider->text = $request->Input('text');

        // სურათის დამუშავება 
        if(Input::hasFile('img')){
            //წაშალე ძველი
            self::delete_image($id);
            // დაამატე ახალი
            $name = time();
            $file = Input::file('img');
            $file->move('storage/images/slider',$name);

            $slider->img = $name;
        }

        $slider->save();
        return redirect($_SERVER['HTTP_REFERER']);
    }


    public function delete($id){
        $slider=Slider::find($id);
        self::delete_image($id);

        $slider->delete();
        return redirect($_SERVER['HTTP_REFERER']);
    }
// Method: POST
}