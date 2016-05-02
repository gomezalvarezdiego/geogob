@extends('layout')

@section('header')

@stop
        
@section('content')

   <h1>Todas las visitas</h1>
   
   @foreach ($visits as $visit)
       <div>
       <a href="{{$visit->path()}}">{{$visit->title}}</a>
       </div>
   @endforeach
   
@stop

@section('footer')

@stop