<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class template_index extends Controller
{
    //
    public function home(){
       return view('index');
    }
    

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('content');
    }    
}
