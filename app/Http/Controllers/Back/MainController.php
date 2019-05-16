<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //Constructor
        public function __construct()
        {
            $this->middleware('auth');
        }
    //Constructor
    
    public function index(){
        return view('back.main');
    }
}
