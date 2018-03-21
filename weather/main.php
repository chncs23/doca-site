<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>พยากรณ์อากาศ</title>
  <link rel="stylesheet" href="../bootstrap4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="../bootstrap4/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Trirong" rel="stylesheet">
  <?php
  include('../thaidate.php');
  include('../daycolor.php');
  ?>

  <style>
  <?php $bgcolor=get_day_color(time()); ?>

  .alt-grid [class*="col-"] {padding-left:15;padding-right:15}
  .alt-grid .row {margin-left:0;margin-right:0}

  /* container adjusted */
  .alt-grid .container-fluid {width:100%;max-width:none;padding:0;}

  .title {
    padding: 25px;
    background-color:<?php echo $bgcolor; ?>;
  }

  .region-title {
    background-color: #ededed;
  }

  .padding {
    padding: 15px;
  }

  .padding-top {
    padding: 15px;
  }

  .center {
    text-align: center;
  }

  .center-img {
    display: block;
    margin: auto auto;
  }

  .iconsize{
    width: 50%;
    height: : 75%;
  }

  body {
    font-family: 'cschatthai', serif;
  }

  .table {
    font-size: 120%;
  }

  @font-face {
    font-family: cschatthai;
    src: local(cschatthai), url('../fonts/CSChatThaiUI.ttf') format('truetype');
  }

  </style>
</head>

<?php
function get_current_temperature($json_temperature, $province){
  $temperature_decode = json_decode($json_temperature, true);
  $temperature_data = $temperature_decode["Stations"];
  $count = count($temperature_data);

  for ($index=0 ; $index<$count ; $index++) {

    $current_province = $temperature_data[$index]["StationNameTh"];
    if($current_province==$province) {
      return $temperature_data[$index]["Observe"]["Temperature"]["Value"];
    }
   }
 }

 function get_weather_icon($description){
   if($description == "Clear"){
     return "img/clear.png";
   }else if($description == "Partly Cloudy"){
     return "img/partlycloudy.png";
   }else if($description == "Cloudy"){
     return "img/cloudy.png";
   }else if($description == "Overcast"){
     return "img/overcast.png";
   }else if($description == "Light Rain"){
     return "img/lightrain.png";
   }else if($description == "Moderate rain"){
     return "img/moderaterain.png";
   }else if($description == "Heavy Rain"){
     return "img/heavyrain.png";
   }else if($description == "Thunder Storm"){
     return "img/thunderstorm.png";
   }else if($description == "Very cold"){
     return "img/cool.png";
   }else if($description == "Cold"){
     return "img/cool.png";
   }else if($description == "Cool"){
     return "img/cool.png";
   }else if($description == "Very hot"){
     return "img/veryhot.png";
   }else{
     return "img/clear.png";
   }
 }

 $string_temperature = file_get_contents("http://data.tmd.go.th/api/Weather3Hours/V1/?type=json");
 $string_forecast = file_get_contents("http://data.tmd.go.th/api/WeatherForecast7Days/V1?uid=u61ch.n.17699&ukey=1e642bed25188f211f9a61c52d87c28f&format=json");
 ?>

<body class="alt-grid">

  <div class="container-fluid">

      <div class="title">
        <h1 class="center">พยากรณ์อากาศประจำ<?php echo thai_date(time()); ?></h1>
      </div>

      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="15000">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <?php include('center.php');  ?>
          </div>
          <div class="carousel-item">
            <?php include('north.php');  ?>
          </div>
          <div class="carousel-item">
            <?php include('northeast.php');  ?>
          </div>
          <div class="carousel-item">
            <?php include('east.php');  ?>
          </div>
          <div class="carousel-item">
            <?php include('south-east.php');  ?>
          </div>
          <div class="carousel-item">
            <?php include('south-west.php');  ?>
          </div>
        </div>
      </div>


  </div>
</body>

</html>
