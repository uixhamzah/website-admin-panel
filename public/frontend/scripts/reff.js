// AIzaSyC6SBYyFZItqh-p0a0695QOqhD_88xe94s


var origin1 = new google.maps.LatLng(1.7147752283194853, 124.97864748329529);
var origin2 = new google.maps.LatLng(1.4411574208248836, 125.1461164897947);
var destinationA = new google.maps.LatLng(1.4949835884182823, 124.88265019705992);
var destinationB = new google.maps.LatLng(0.5598581346962125, 123.05036476040041);
// var origin1 = new google.maps.LatLng(55.930385, -3.118425);
// var origin2 = 'Greenwich, England';
// var destinationA = 'Stockholm, Sweden';
// var destinationB = new google.maps.LatLng(50.087692, 14.421150);

var service = new google.maps.DistanceMatrixService();
service.getDistanceMatrix(
  {
    // origins: [origin1, origin2],
    // destinations: [destinationA, destinationB],
    origins: [origin1],
    destinations: [destinationA, destinationB],
    travelMode: 'DRIVING',
    // transitOptions: TransitOptions,
    // drivingOptions: DrivingOptions,
    // unitSystem: UnitSystem,
    // avoidHighways: Boolean,
    // avoidTolls: Boolean,
  }, callback);

function callback(response, status) {
  if (status == 'OK') {
    var origins = response.originAddresses;
    var destinations = response.destinationAddresses;

    for (var i = 0; i < origins.length; i++) {
      var results = response.rows[i].elements;
      for (var j = 0; j < results.length; j++) {
        var element = results[j];
        var distance = element.distance.text;
        var duration = element.duration.text;
        var from = origins[i];
        var to = destinations[j];
      }
    }
    console.log(service);
  }
}