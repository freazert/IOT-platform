<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\SensorResource;
use App\Sensors;

class SensorController extends Controller
{
    public function index()
    {
        //
        $sensors = Sensors::latest()->paginate(20);
        return SensorResource::collection($sensors);
    }
}
