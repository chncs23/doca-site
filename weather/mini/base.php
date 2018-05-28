
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
                $province_data_today = $province_data[$index]["SevenDaysForecast"][$province_index];
                echo $index." ".$province_index;

              echo ($province_index == 0) ? "<div class=\"carousel-item active\">" : "<div class=\"carousel-item\">";
              ?>

              <div class="col-md-12 padding">
                <h2 class="center"><?php echo $province_name; ?></h3>
                <img class="iconsize center-img padding"
                src=<?php echo get_weather_icon($province_data_today["WeatherDescriptionEn"]); ?>
                alt=<?php echo $province_data_today["WeatherDescription"] ?>>
                <h1 class="temperature_txt center"><?php echo get_current_temperature($string_temperature, $province_name); ?>°C</h1>
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
                    </div>
          <?php  }
          }
        }
        ?>
