<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Distance Matrix</title>
  {{-- <script src="https://maps.googleapis.com/maps/api/js?libraries=places&language=en&key=AIzaSyC6SBYyFZItqh-p0a0695QOqhD_88xe94s"></script> --}}
</head>
<body>
  
  
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC6SBYyFZItqh-p0a0695QOqhD_88xe94s"></script>
  <script>
    var pickupLocation = {!! json_encode($pick) !!};
    var radius = {!! $radius !!};
    var drivers = {!! json_encode($data->toArray()) !!};
  </script>
  <script src="{{ url('frontend/scripts/distance-matrix.js') }}"></script>

</body>
</html>