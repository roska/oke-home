<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sensor;

class SensorValue extends Model
{
    use HasFactory;

    public function sensor()
    {
    	return $this->belongsTo(Sensor::class);

    }

    public static function getLatestBySensor(Sensor $sensor)
    {
    	return $this->where('sensor_id', $sensor_id)->orderBy('id', 'desc')->first();
    }
}
