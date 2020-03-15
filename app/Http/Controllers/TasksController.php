<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class TasksController extends Controller
{
    public function index(){
         $tasks = App\Task::all();
         return view('tasks.index', compact('tasks'));
    }
    
    public function show($id){
         $task = App\Task::find($id);
         return view('tasks.show', compact('task'));
    }
    
    public function update(Request $request, $id)
    {
        $task = App\Task::find($id);
        $task->completed = $request->completed;
        $task->save();

        return redirect('/tasks');
    }
    
}