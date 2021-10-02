var map = L.map('map').setView([23.7806, 90.4257], 10);

var tile = L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
})
tile.addTo(map);
L.control.locate().addTo(map);
// L.marker([51.5, -0.09]).addTo(map)
// 		.bindPopup("<b>Hello world!</b><br />I am a popup.").openPopup();

// L.marker([23.7806, 90.4257]).addTo(mymap)
// 	.bindPopup("<b>Hello world!</b><br />I am a popup.").openPopup();

//map er upor right click korle location id te co-ordinate cole jabe
var marker;
map.on("contextmenu", function (event) {
   
    // console.log("user right-clicked on map coordinates: " + event.latlng.toString());
    var cordinate = event.latlng.toString()
    $("#location").val(cordinate.slice(7, - 1));

    if (marker) { // check
        map.removeLayer(marker); // remove
    }
    marker = new L.Marker(event.latlng);
    marker.addTo(map);
});
var layergroup = L.layerGroup().addTo(map);
function location_find (data) {
    // console.log(data);
    layergroup.clearLayers();
    map.closePopup();
    var coordinate = data;
    coordinate = coordinate.trim();
    var first = coordinate.split(",")
    console.log(first);
    L.marker([first[0],first[1]]).addTo(layergroup)
		.openPopup()
        
        //L.Marker(kam).addTo(map);  
// 	.bindPopup("<b>Hello world!</b><br />I am a popup.").openPopup();
  }
