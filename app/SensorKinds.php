<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*
- Fields to be mass-assigned
- Momentary empty
-@var array
*/


class SensorKinds extends Model
{
    //Has many sensors
    public function sensor()
    {
    	return $this->hasMany('App\Sensors');
    }
}
