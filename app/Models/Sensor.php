<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    use HasFactory;

    // public function getLatestTemperature()
    // {
    // 	$temperatureQuantityId = 1;
    // 	return $this->hasMany('App\Models\SensorValue')->where('quantity_type_id', $temperatureQuantityId)->orderBy('id', 'desc')->first();
    // }

    public function sensorValues()
    {
    	return $this->hasMany('App\Models\SensorValue');
    }

    public function location()
    {
    	return $this->belongsTo('App\Models\Location');
    }

}