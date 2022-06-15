<html>
  <head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script
      defer
      src="https://maps.googleapis.com/maps/api/js?libraries=places&language=en&key=AIzaSyBzQGVlSBUfu48Db575mcO0PGUDh4D-TL0"
      type="text/javascript"
    ></script>
    <link
      href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"
      id="bootstrap-css"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="jumbotron">
          <h1>Calculate the Distance Between two Addresses demo</h1>
        </div>

        <div class="col-md-6">
          <form id="distance_form">
            <div class="form-group">
              <label>Origin: </label>
              <input
                class="form-control"
                id="from_places"
                placeholder="Enter a location"
              />
              <input id="origin" name="origin" required="" type="hidden" />
            </div>

            <div class="form-group">
              <label>Destination: </label>
              <input
                class="form-control"
                id="to_places"
                placeholder="Enter a location"
              />
              <input
                id="destination"
                name="destination"
                required=""
                type="hidden"
              />
            </div>
            <input class="btn btn-primary" type="submit" value="Calculate" />
          </form>

          <div id="result">
            <ul class="list-group">
              <li
                id="mile"
                class="
                  list-group-item
                  d-flex
                  justify-content-between
                  align-items-center
                "
              >
                Distance In Mile :
              </li>
              <li
                id="kilo"
                class="
                  list-group-item
                  d-flex
                  justify-content-between
                  align-items-center
                "
              >
                Distance is Kilo:
              </li>
              <li
                id="text"
                class="
                  list-group-item
                  d-flex
                  justify-content-between
                  align-items-center
                "
              >
                IN TEXT:
              </li>
              <li
                id="minute"
                class="
                  list-group-item
                  d-flex
                  justify-content-between
                  align-items-center
                "
              >
                IN MINUTES:
              </li>
              <li
                id="from"
                class="
                  list-group-item
                  d-flex
                  justify-content-between
                  align-items-center
                "
              >
                FROM:
              </li>
              <li
                id="to"
                class="
                  list-group-item
                  d-flex
                  justify-content-between
                  align-items-center
                "
              >
                TO:
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <script src="{{ url('frontend/scripts/ref.js') }}"></script>
  </body>
</html>