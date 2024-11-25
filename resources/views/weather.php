<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ob havo malumotlari</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<?php
require 'src/Weather.php';
$weather=new Weather();
?>
<div class="container text-center">
    <h1 class="MY-4">Weather in <span id="city-name"> Toshkent</span></h1>
    <div class="weather-card text-center">
    <div class="mb-3">
        <img id="weather-icon" src="<?php echo 'https://openweathermap.org/img/wn/' ?>" alt="Weather Icon" class="weather-icon">
    </div>
    <h2 class="mb-3" id="temperature">5°C</h2>
    <p id="description"> Clear Sky</p>

    <div class="d-flex justify-content-around">
        <div>
            <h5>Namlik</h5>
            <p id="feels-like"> <?php echo $weather->getWeather()->main->temp; ?></p>
        </div>
        <div>
            <h5>Bosim</h5>
            <p id="humidity">61%</p>
        </div>
        <div>
            <h5>Shamol</h5>
            <p id="wind-spead">3 m/s</p>
        </div>
    </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>