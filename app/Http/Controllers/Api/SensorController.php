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

    /*
    Display the GuestBook form page.
 
    @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function create()
    {
        return view('index');
    }

    /*
      Validate and save a new signature to the database.
     
      @param Request $request
      @return SignatureResource
     */
    public function store(Request $request)
    {
        $sensor = $this->validate($request, [
            'sensor_name' => 'required|min:3|max:50',
            'type' => 'required|min:3|max:50',
            'description' => 'required|min:3'
        ]);
        
        $sensor = Sensors::create($sensor);
        if (isset($data['image'])) {
            $user->addMediaFromRequest('image')->toMediaCollection('images');
        }
        
        return new SensorResource($sensor);
    }
}
