<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

// ბლოგის მოდელის შექმნა დამვიწყებია, მერე გავაკეთებ ამას

use App\Models\Blog;

class BlogController extends Controller
{
//Constructor
    public function __construct()
    {
        $this->middleware('auth');
    }
//Constructor
// Start: Private Functions
    private function delete_image($id){
        $blog = Blog::find($id);

        if($blog->img){
            $img_path = public_path('\storage\images\blogs'."\\".$blog->img); 
            if(File::exists($img_path)){
                unlink($img_path);
            } 
        }
    }
// End: Private Functions

//GET
    public function index(){
        $data['blogs'] = Blog::all();
        return view('back.blogs',$data);
    }
//GET

//POST
    public function add(Request $request){
        // ვალიდაციები
        $this->validate($request,[
            'name'=>'required',
            'img' => 'required',
            'text' => 'required'
        ]);
        
        // სურათის დამუშავება
        if(Input::hasFile('img')){
            $file = Input::file('img');
            $file->move('storage/images/blogs',$file->getClientOriginalName());
        }

        // ბაზაში ატვირთვა
        $blog = new Blog;
        $blog->name = $request->Input('name');
        $blog->text=$request->Input('text');
        $blog->img= $file->getClientOriginalName();
        $blog->save();

        return redirect($_SERVER['HTTP_REFERER']);
    }
    public function edit($id, Request $request){
        // ვალიდაციები
        $this->validate($request,[
            'name'=>'required',
            'text' => 'required'
        ]);

    
        //იპოვე სლაიდერი id-ით
        $blog = Blog::find($id);
        $blog->name = $request->Input('name');
        $blog->text=$request->Input('text');

        // სურათის დამუშავება 
        if(Input::hasFile('img')){
            //წაშალე ძველი
            self::delete_image($id);
            // დაამატე ახალი
            $name = time();
            $file = Input::file('img');
            $file->move('storage/images/blogs',$name);
            $blog->img = $name;
        }

        $blog->save();
        return redirect($_SERVER['HTTP_REFERER']);        

    }
    public function delete($id){
        $blog=Blog::find($id);
        self::delete_image($id);

        $blog->delete();
        return redirect($_SERVER['HTTP_REFERER']);
    }
//POST
}
