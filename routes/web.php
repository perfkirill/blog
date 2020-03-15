<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Http\Request;

Route::get('/tasks','TasksController@index');
//Route::get('/tasks/{task}','TasksController@show');

Route::post('/task', function(Request $request){
   
    $validator = Validator::make($request->all(),
    [
        'name' => 'required|max:255'
    ]
    );
    
    if($validator->fails()){
        return redirect('/tasks')
            ->withInput()
            ->withErrors($validator);
    }
    
    $task = new \App\Task;
    $task->name = $request->name;
    $task->body = " ";
    $task->completed = $request->completed;
    $task->save();
    
    return redirect('/tasks');
    
    
});

Route::Delete('/task/{task}', function(\App\Task $task){
   $task->delete();
   
    
    return redirect('/tasks');
    
    
});

Route::put('/task/{id}', 'TasksController@update');

Route::get('/', 'TestController@index');  
Route::get('/articals/{artical}','TestController@artical');


Route::post('/subscrabe', 'SubscrabeController@create');  







/*
Route::get('/', function()
{
    return view('welcome');
});
/*
Route::get('foo', function () {
    return 'Hello World';
});

*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');