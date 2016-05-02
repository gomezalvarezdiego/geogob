<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Observation extends Model
{
    //
    protected $fillable=['body'];
    
    public function visit(){
        return $this->belongsTo(Visit::class);
    }
    
    public function user(){
        return $this->belongsTo(User::class);
    }
}
