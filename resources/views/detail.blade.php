<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

    <title>Application</title>
    <style>
      #map {
        height: 400px;
        width: 100%;
       }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
        <ul class="navbar-nav">
          <li class="nav-item active">
              <div class="nav-link">Australian Weather Application</div>
          </li>
        </ul>
      </div>
    </nav>
    
    <br />
    <div class="container text-center">
        <?php
        foreach ($data['query'] as $datas) {
        ?>
        <h1>{{ $datas->name }}</h1>
        <br />
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div id="map"></div>
            </div>
            <div class="col-md-3"></div>
        <script>
        function initMap() {
            var uluru = {lat: {{ $datas->latitude }}, lng: {{ $datas->longitude }}};
            var map = new google.maps.Map(
            document.getElementById('map'), {zoom: 4, center: uluru});
            var marker = new google.maps.Marker({position: uluru, map: map});
        }
        </script>
        </div>
        <br />
        <?php
        $request = 'http://api.openweathermap.org/data/2.5/weather?q=' . $datas->name . '&appid=610587cc5d3cb7ca56756c9642308387';
        $response  = file_get_contents($request);
        $json_object  = json_decode($response, true);
        }
        ?>
        <h3>Weather Condition</h3>
        <br />
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="list-group" style="text-align:left">
                    <a href="#" class="list-group-item list-group-item-action">Temperatur          :{{ $json_object['main']['temp'] }}</a>
                    <a href="#" class="list-group-item list-group-item-action">Pressure            :{{ $json_object['main']['pressure'] }}</a>
                    <a href="#" class="list-group-item list-group-item-action">Humidity            :{{ $json_object['main']['humidity'] }}</a>
                    <a href="#" class="list-group-item list-group-item-action">Temperatur Minimum  :{{ $json_object['main']['temp_min'] }}</a>
                    <a href="#" class="list-group-item list-group-item-action">Temperatur Maximum  :{{ $json_object['main']['temp_max'] }}</a>
                    <a href="#" class="list-group-item list-group-item-action">Wind Speed          :{{ $json_object['wind']['speed'] }}</a>
                    <a href="#" class="list-group-item list-group-item-action">Wind Deg          :{{ $json_object['wind']['deg'] }}</a>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD-dZf7nLCB0cCyPh-Xyvg36rbjB1Fom6M&callback=initMap">
    </script>
  </body>
</html>