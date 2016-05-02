@extends('layout')

@section('header')

@stop
        
@section('content')


   <div class="row">
       
       <div class="col-md-6 col-md-offset-3">
           <h1>
           {{$visit->title}}
           </h1>
           
           <ul class="list-group">
           @foreach ($visit->observations as $observation)
               <li class="list-group-item">{{$observation->body}}
                   <a href="#" class="pull-right">{{$observation->user->username}}</a>
               </li>
            @endforeach
            </ul>
            
            <hr> 
            <h3>Agregar nueva observación</h3>
            
            
            <form method="POST" action="/visits/{{$visit->id}}/observations">
                <div class="form-group">
                    <textarea name="body" class="form-control">{{old('body')}} </textarea>
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn-primary">Agregar</button>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
            
            @if(count($errors))
            
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
            @endif
            
        </div>
    </div>
   
@stop

@section('footer')

@stop