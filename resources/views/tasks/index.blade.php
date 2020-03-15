@extends('layout')



@section('content')
       
<div class="container">
       
        @include('errors')
        
        <div class="new_task_wrap">
        <form action="{{url('task')}}" method="POST" class="form-horizontal">
            {{csrf_field()}}
            
            <div class="">
                <div class="form-group">
                    <label for="new_task_input">Новое задание</label>
                     <input type="text" name="name" id='new_task_input' class="form-control"> 
                     <input type="hidden" name='completed' value="0">
                    <button style='margin-top:15px;' class="btn btn-success" type="submit">Создать задание</button>
                    
                    
                    
                </div>
            </div>
            
        </form>
        </div>
        
        
        <div class="tasks_list">
            @if(count($tasks) > 0 )
            
              @foreach ($tasks as $task)
                   @if(!$task->completed)
                    <div class="row">
                        <div class="col-md-8">{{$task->name}}</div>
                        <div class="col-md-4">
                           <div class="row">
                           <div class="col-md-6">
                            <form action="{{url('task/'.$task->id)}}" method="post">
                                   {{csrf_field()}}
                                     {{method_field('DELETE')}}
                                     
                                     <button class="btn btn-danger">Удалить</button>
                                     
                            </form>
                           </div> 
                           <div class="col-md-6">
                            <form action="{{url('task/'.$task->id)}}" method="post">
                                   {{csrf_field()}}
                                     {{ method_field('put') }}
                                     <input type="hidden" name='completed' value="1">
                                     <button class="btn btn-success">Выполнено</button>
                                     
                            </form>
                            </div>
                            </div>
                        </div>
                    </div>
                    @endif
               @endforeach
            
            
            @endif
        </div>
        
        
        
        <div class="completed_task">
            @if(count($tasks) > 0 )
            
              @foreach ($tasks as $task)
                   @if($task->completed)
                    <div class="row">
                        <div class="col-md-8">{{$task->name}}</div>
                        <div class="col-md-4">
                            <form action="{{url('task/'.$task->id)}}" method="post">
                                   {{csrf_field()}}
                                     {{method_field('UPDATE')}}
                                     
                                     <button class="btn btn-danger">Удалить</button>
                                     
                            </form>
                        </div>
                    </div>
                    @endif
               @endforeach
            
            
            @endif
        </div>
        
        
        
       </div> 
       
@endsection      