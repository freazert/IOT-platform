<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Sensors extends Model implements HasMedia
{
    use HasMediaTrait;

    protected $fillable = ['sensor_name', 'type', 'description'];

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
