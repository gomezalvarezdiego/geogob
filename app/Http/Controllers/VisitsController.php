<?php

namespace App\Http\Controllers;

use App\Visit;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Observation;

class VisitsController extends Controller
{
    //
    
    public function index(){
        
        $visits=Visit::all();
        
        return view('visits.index', compact('visits'));
    }
    
    public function show(Visit $visit){
        
        
        $visit->load('observations.user');
        
        
        return view('visits.show', compact('visit'));
    }
    
}
