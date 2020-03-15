<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;   

class SubscrabeController extends Controller
{
    public function create(Request $request)
    {
       
        $validator = Validator::make($request->all(),
        [
            'email' => 'required|unique:subscrabes|max:255'
        ]
        );     
        
        if($validator->fails()){
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }
        

        $subscrabe = new \App\subscrabe;
        $subscrabe->email = $request->email;
      
        $subscrabe->save();

        return redirect('/');

    }
    
    
     public function update(Request $request, $id)
    {
        $task = App\Task::find($id);
        $task->completed = $request->completed;
        $task->save();

        return redirect('/tasks');
    }
}
