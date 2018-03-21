<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>พยากรณ์อากาศ</title>
  <link rel="stylesheet" href="../bootstrap4/css/bootstrap.min.css">
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

<body class="alt-grid">

  <div class="container-fluid">

      <div class="title">
        <h1 class="center">พยากรณ์อากาศประจำ<?php echo thai_date(time()); ?></h1>
      </div>
      <div class="region-title">
        <h2 class="center padding-top"><?php echo $region; ?></h2>
      </div>

      <div class="row">
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

            $string_temperature = file_get_contents("http://data.tmd.go.th/api/Weather3Hours/V1/?type=json");
            $string_forecast = file_get_contents("http://data.tmd.go.th/api/WeatherForecast7Days/V1?uid=u61ch.n.17699&ukey=1e642bed25188f211f9a61c52d87c28f&format=json");
            $forecast_decode = json_decode($string_forecast, true);
            $province_data = $forecast_decode["Provinces"];
            $forecast_count = count($province_data);
            $select_province_count = count($province_list);


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

            for ($province_index=0 ; $province_index<$select_province_count ; $province_index++) {
            for ($index=0 ; $index<$forecast_count ; $index++) {

              $province_name = $province_data[$index]["ProvinceNameTh"];
              if($province_name==$province_list[$province_index]) {
                $province_data_today = $province_data[$index]["SevenDaysForecast"][$province_index];
              ?>

              <div class="col-md-3 padding">
                <h3 class="center"><?php echo $province_name; ?></h3>
                <img class="iconsize center-img padding"
                src=<?php echo get_weather_icon($province_data_today["WeatherDescriptionEn"]); ?>
                alt=<?php echo $province_data_today["WeatherDescription"] ?>>
                <h1 class="center"><?php echo get_current_temperature($string_temperature, $province_name); ?>°C</h1>
                <table class="table">
                  <tr>
                    <th>อุณหภูมิสูงสุด</th><td><?php echo $province_data_today["MaxTemperature"]["Value"]; ?>°C</td>
                  </tr>
                  <tr>
                    <th>อุณหภูมิต่ำสุด</th><td><?php echo $province_data_today["MinTemperature"]["Value"]; ?>°C</td>
                  </tr>
                  <tr>
                    <th>ความเร็วลม</th><td><?php echo $province_data_today["WindSpeed"]["Value"]; ?> กม./ชม.</td>
                  </tr>
                  <tr>
                    <th>ปริมาณฝน</th><td><?php echo $province_data_today["Rain"]["Value"]; ?>% ของพื้นที่</td>
                  </tr>
                </table>
              </div>
          <?php  }
          }
        }
        ?>

      </div>


  </div>
</body>

</html>
