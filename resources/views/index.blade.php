<!DOCTYPE html>
<html>
<head>
	<title>VITUN SEPPO!</title>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="/css/app.css" rel="stylesheet">
</head>
<body>
	<h1>SEPPO PERKELE!!!!!</h1>

	<div class="bar">
		<div class="bar-row">
			<div class="bar-asdf">{{ $sensor_ulko->location->name }} - {{ $sensor_ulko->name }} </div>
			<div class="bar-asdf">{{ App\Models\SensorValue::where('sensor_id', $sensor_ulko->id)->where('quantity_type_id', 1)->orderBy('id', 'desc')->first()->value }}</div>
			<div class="bar-asdf">
				Lämpötila
			</div>
		</div>
		<div class="bar-row">
			<div class="bar-asdf">{{ $sensor_ulko->location->name }} - {{ $sensor_ulko->name }} </div>
			<div class="bar-asdf">{{ App\Models\SensorValue::where('sensor_id', $sensor_ulko->id)->where('quantity_type_id', 3)->orderBy('id', 'desc')->first()->value }}</div>
			<div class="bar-asdf">
				Kosteus
			</div>
		</div>
		<div class="bar-row">
			<div class="bar-asdf">{{ $sensor_ulko->location->name }} - {{ $sensor_ulko->name }} </div>
			<div class="bar-asdf">{{ App\Models\SensorValue::where('sensor_id', $sensor_ulko->id)->where('quantity_type_id', 2)->orderBy('id', 'desc')->first()->value }}</div>
			<div class="bar-asdf">
				Paine
			</div>
		</div>
		<div class="bar-row">
			<div class="bar-asdf">{{ $sensor_sisä->location->name }} - {{ $sensor_sisä->name }} </div>
			<div class="bar-asdf">{{ App\Models\SensorValue::where('sensor_id', $sensor_sisä->id)->where('quantity_type_id', 1)->orderBy('id', 'desc')->first()->value }}</div>
			<div class="bar-asdf">
				Lämpötila
			</div>
		</div>
		<div class="bar-row">
			<div class="bar-asdf">{{ $sensor_sisä->location->name }} - {{ $sensor_sisä->name }} </div>
			<div class="bar-asdf">{{ App\Models\SensorValue::where('sensor_id', $sensor_sisä->id)->where('quantity_type_id', 3)->orderBy('id', 'desc')->first()->value }}</div>
			<div class="bar-asdf">
				Kosteus
			</div>
		</div>
		<div class="bar-row">
			<div class="bar-asdf">{{ $sensor_mh->location->name }} - {{ $sensor_mh->name }} </div>
			<div class="bar-asdf">{{ App\Models\SensorValue::where('sensor_id', $sensor_mh->id)->where('quantity_type_id', 1)->orderBy('id', 'desc')->first()->value }}</div>
			<div class="bar-asdf">
				Lämpötila
			</div>
		</div>
		<div class="bar-row">
			<div class="bar-asdf">{{ $sensor_mh->location->name }} - {{ $sensor_mh->name }} </div>
			<div class="bar-asdf">{{ App\Models\SensorValue::where('sensor_id', $sensor_mh->id)->where('quantity_type_id', 3)->orderBy('id', 'desc')->first()->value }}</div>
			<div class="bar-asdf">
				Kosteus
			</div>
		</div>
	</div>

</body>
</html>