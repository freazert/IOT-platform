<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class SensorResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'sensor_name' => $this->sensor_name,
            'type' => $this->type,
            'description' => $this->description,
        ];
    }
}