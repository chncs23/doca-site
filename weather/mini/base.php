
<?php
$province_list = array("กรุงเทพมหานคร", "สุพรรณบุรี", "นครสวรรค์", "กาญจนบุรี", "ลำปาง", "พะเยา", "เชียงใหม่", "เชียงราย", "นครราชสีมา", "ขอนแก่น", "อุบลราชธานี", "หนองคาย", "ฉะเชิงเทรา", "สระแก้ว", "ระยอง", "ตราด", "ประจวบคีรีขันธ์", "สุราษฎร์ธานี", "สงขลา", "นราธิวาส", "ระนอง", "พังงา", "ภูเก็ต", "สตูล");

$forecast_decode = json_decode($string_forecast, true);
$province_data = $forecast_decode["Provinces"];
$forecast_count = count($province_data);
$select_province_count = count($province_list);

for ($province_index=0 ; $province_index<$select_province_count ; $province_index++) {

  for ($index=0 ; $index<$forecast_count ; $index++) {
    $province_name = $province_data[$index]["ProvinceNameTh"];
    if($province_name==$province_list[$province_index]) {
      $province_data_today = $province_data[$index]["SevenDaysForecast"][0];

      echo ($province_index == 0) ? "<div class=\"carousel-item active\">" : "<div class=\"carousel-item\">";
      ?>


        <h2 class="center heading current-box"><?php echo $province_name; ?></h2>
        <div class="trans-box">

          <img class="iconsize center-img padding"
          src=<?php echo get_weather_icon($province_data_today["WeatherDescriptionEn"]); ?>
          alt=<?php echo $province_data_today["WeatherDescription"] ?>>

          <p class="heading-title center">อุณหภูมิปัจจุบัน</p>
          <h1 class="temperature_txt center"><?php echo get_current_temperature($string_temperature, $province_name); ?>°C</h1>

          <div class="high-box">
            <p class="heading-title center">อุณหภูมิสูงสุด</p>
            <p class="sub-temperature-txt center"><?php echo $province_data_today["MaxTemperature"]["Value"]; ?>°C</p>
          </div>

          <div class="low-box">
            <p class="heading-title center">อุณหภูมิต่ำสุด</p>
            <p class="sub-temperature-txt center"><?php echo $province_data_today["MinTemperature"]["Value"]; ?>°C</p>
          </div>

        </div>

    </div>
  </div>
<?php  }
}
}
?>
