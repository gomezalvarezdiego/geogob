<?php

namespace App\Http\Controllers;


class PagesController extends Controller
{
    //
    public function index(){
        
        echo 'hola';
    }
    
    public function about(){
        $builders=array('Diego','Javier');
        return view('about')->withBuilders($builders);
    }
}
