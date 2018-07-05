      <div class="region-title">
        <h2 class="center padding-top"><?php echo $region; ?></h2>
      </div>

      <div class="row">
        <?php
            $forecast_decode = json_decode($string_forecast, true);
            $province_data = $forecast_decode["Provinces"];
            $forecast_count = count($province_data);
            $select_province_count = count($province_list);

            for ($province_index=0 ; $province_index<$select_province_count ; $province_index++) {
            for ($index=0 ; $index<$forecast_count ; $index++) {

              $province_name = $province_data[$index]["ProvinceNameTh"];
              if($province_name==$province_list[$province_index]) {
                $province_data_today = $province_data[$index]["SevenDaysForecast"][0];
              ?>

              <div class="col-md-6 padding">
                <h3 class="heading center"><?php echo $province_name; ?></h3>
                <img class="iconsize center-img padding"
                src=<?php echo get_weather_icon($province_data_today["WeatherDescriptionEn"]); ?>
                alt=<?php echo $province_data_today["WeatherDescription"] ?>>
                <p class="sub-temperature-txt high center"><?php echo $province_data_today["MaxTemperature"]["Value"]; ?>°C</p>
                <p class="sub-temperature-txt low center"><?php echo $province_data_today["MinTemperature"]["Value"]; ?>°C</p>
              </div>
          <?php  }
          }
        }
        ?>

      </div>
