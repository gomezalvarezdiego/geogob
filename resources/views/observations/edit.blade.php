@extends('layout')

@section('header')

@stop
        
@section('content')


   <div class="row">
       
       <div class="col-md-6 col-md-offset-3">

            <h1>Modificar observación</h1>
            
            
            <form method="POST" action="/observations/{{$observation->id}}/update">
                
                {{method_field('PATCH')}}
                
                <div class="form-group">
                    <textarea name="body" class="form-control">{{$observation->body}} </textarea>
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn-primary">Modificar</button>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
            
        </div>
    </div>
   
@stop

@section('footer')

@stop