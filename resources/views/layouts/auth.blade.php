<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ url('auth/css/style.css') }}">

</head>
<body>

  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12 col-lg-10">
          <div class="wrap d-md-flex">
            <div class="img" style="background-image: url(frontend/images/bg.jpg);"></div>
            @yield('content')
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="{{ url('auth/js/jquery.min.js') }}"></script>
  <script src="{{ url('auth/js/popper.js') }}"></script>
  <script src="{{ url('auth/js/bootstrap.min.js') }}"></script>
  <script src="{{ url('auth/js/main.js') }}"></script>
  
</body>
</html>