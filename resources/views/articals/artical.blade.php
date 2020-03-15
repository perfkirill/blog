@extends('layout')

@section('content')

 <div class="container">
     
     <br><br>
     <h1>{{$artical->news_title}}</h1>
     
     
     <div class="content">
         {{$artical->news_text}}
     </div>
     
 </div>

@endsection