<!DOCTYPE html>
<html>

<head>

	<title>Quick Start - Leaflet</title>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />

	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.74.0/dist/L.Control.Locate.min.css" />


	<style>
		.map {
			width: 100%;
			height: 100vh;
		}
	</style>


</head>

<body>



<div id="map" style="width: 500px; height: 600px;"></div>



</body>

</html>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
<script src="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.74.0/dist/L.Control.Locate.min.js" charset="utf-8"></script>

<!-- <script>
	// 23.7806, 90.4257
	var map = L.map('map').setView([23.7806, 90.4257], 18);

	var tile = L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
})
	tile.addTo(map);


	// L.marker([23.7806, 90.4257]).addTo(mymap)
	// 	.bindPopup("<b>Hello world!</b><br />I am a popup.").openPopup();

	
	L.control.locate().addTo(map);
	map.on("contextmenu", function (event) {
  	console.log("user left-clicked on map coordinates: " + event.latlng.toString());
  		$()
});
	// var map = L.map('map').setView([51.505, -0.09], 13);

// function onAccuratePositionProgress (e) {
//     console.log(e.accuracy);
//     console.log(e.latlng);
// }

// function onAccuratePositionFound (e) {
//     console.log(e.accuracy);
//     console.log(e.latlng);
// }

// function onAccuratePositionError (e) {
//     console.log(e.message)
// }

// map.on('accuratepositionprogress', onAccuratePositionProgress);
// map.on('accuratepositionfound', onAccuratePositionFound);
// map.on('accuratepositionerror', onAccuratePositionError);

// map.findAccuratePosition({
//     maxWait: 15000, // defaults to 10000
//     desiredAccuracy: 30 // defaults to 20
// }); -->
<!-- </script> -->