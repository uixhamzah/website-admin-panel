// AIzaSyC6SBYyFZItqh-p0a0695QOqhD_88xe94s

// var user = new google.maps.LatLng(1.4870428730712724, 124.8438550635048);
// var drivers = [
//   {
//     lat: 1.4876308588283509,
//     lng: 124.83760674457933
//   },
//   {
//     lat: 1.4868969767230382,
//     lng: 124.9164488815423
//   },
//   {
//     lat: 1.4535352685095706,
//     lng: 124.808170021948
//   },
// ];

var driver = [];
for (var x = 0; x < drivers.length; x++) {
  driver.push(new google.maps.LatLng(drivers[x].lat, drivers[x].lng));
}

var user = new google.maps.LatLng(pickupLocation[0], pickupLocation[1]);

var service = new google.maps.DistanceMatrixService();
service.getDistanceMatrix(
  {
    origins: [user],
    destinations: driver,
    travelMode: 'DRIVING',
  }, callback);

function callback(response, status) {
  if (status == 'OK') {
    var origins = response.originAddresses;
    var destinations = response.destinationAddresses;
    
    var hasil = []

    for (var i = 0; i < origins.length; i++) {
      var results = response.rows[i].elements;
      for (var j = 0; j < results.length; j++) {
        var element = results[j];
        var distance = element.distance.text;
        var duration = element.duration.text;
        var from = origins[i];
        var to = destinations[j];

        // hasil.push(distance);
        hasil[j] = {
          distance: {
            text: element.distance.text,
            value: element.distance.value,
          },
          duration: {
            text: element.duration.text,
            value: element.duration.value,
          }
        };
      }
    }

    console.log(hasil);
  }
}