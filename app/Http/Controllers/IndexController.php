<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Sensor;
use App\Models\SensorValue;

class IndexController extends Controller
{
	public function index()
	{
	    dd('index saatana');
	    $sensor1 = Sensor::find(1);
	    $sensor2 = Sensor::find(2);
	    $sensor3 = Sensor::find(3);

	}

}
