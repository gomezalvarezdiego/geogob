@extends('layout')

@section('header')

@stop
        
@section('content')

    <div class="container">
            <div class="content">
                <div class="title">GeoGob by EcoBits</div>
                </br>
                Team:
                </br>
                @foreach ($builders as $builder)
                    <li>{{$builder}}</li>
                @endforeach
                
                    
            </div>
        </div>
@stop

@section('footer')

@stop

   
