<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    //
    public function observations(){
        return $this->hasMany(Observation::class);
    }
    
    public function path(){
        return '/visits/'. $this->id;
    }
    
    public function addObservation(Observation $observation, $userId){
        $observation->user_id=$userId;
        return $this->observations()->save($observation);
    }
}
