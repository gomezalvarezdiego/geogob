<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use \App\Observation;
use \App\Visit;
class ObservationsController extends Controller
{
    //
    public function store(Request $request, Visit $visit){
    
        $this->validate($request, ['body'=>'required|min:10']);
        
        $observation=new Observation($request->all());
        
        
        $visit->addObservation($observation, 1);
        
  
        return redirect('/visits/'.$visit->id);
        
        
        
    }
    
    public function edit(Observation $observation){
        return view('observations.edit', compact('observation'));
    }
    
    public function update(Request $request, Observation $observation){
        $observation->update($request->all());
        
        return back();
    }
}
