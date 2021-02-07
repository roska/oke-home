<?php

use Illuminate\Support\Facades\Route;
use App\Models\Sensor;
use App\Models\SensorValue;
use App\Http\Controller\IndexController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	$sensor = Sensor::find(3);
	dd('wat', $sensor);
	dd($sensor);
	$value = SensorValue::where('sensor_id', $sensor->id)->orderBy('timestamp', 'desc')->first();

	dd('haista vittu seppo!1', $sensor->name, $value, $value->value);
	dd(SensorValue::query()->latest('id', 'desc')->first());
    return view('index');
});

Route::get('/foo', function() {
	//dd('foo');

		$sensor_ulko = Sensor::find(1);
		$sensor_sisä = Sensor::find(4);
		$sensor_mh = Sensor::find(5);
	    return view('index', [
	    	'sensor_ulko' => $sensor_ulko,
	    	'sensor_sisä' => $sensor_sisä,
	    	'sensor_mh' => $sensor_mh,
	    ]);
});
