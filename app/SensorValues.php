<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SensorValues extends Model
{
    //
    //has one type
    public function sensor()
    {
        return $this->belongsTo('App\Sensors');
    }
}
