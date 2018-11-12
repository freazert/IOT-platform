<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sensors extends Model
{
    //has different types
    public function values()
    {
    	return $this->hasMany('App\SensorsValues');
    }
    //has one type
    public function type()
    {
        return $this->belongsTo('App\SensorKinds');
    }
}
