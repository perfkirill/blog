<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class TestController extends Controller
{
     public function index(){
              
         $tasks = App\test::all();

         return view('articals.index', compact('tasks'));
    
     }
    
    
    public function artical($id){
              
          $artical = App\test::find($id);
         return view('articals.artical', compact('artical'));
    
     }
}
