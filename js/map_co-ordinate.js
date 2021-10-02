var map = L.map('map').setView([23.7806, 90.4257], 18);

	var tile = L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
})
	tile.addTo(map);


	// L.marker([23.7806, 90.4257]).addTo(mymap)
	// 	.bindPopup("<b>Hello world!</b><br />I am a popup.").openPopup();

	//map er upor right click korle location id te co-ordinate cole jabe
	L.control.locate().addTo(map);
	map.on("contextmenu", function (event) {
  	console.log("user right-clicked on map coordinates: " + event.latlng.toString());
    //   var cordinate = event.latlng.toString()
  		$("#location").val(event.latlng.toString());
		  L.marker(event.latlng).addTo(map);
});
// cordinate.slice(7, -1)