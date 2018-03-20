<?php


function get_day_color($time){
  $day_color_arr=array("#ff4a4a","#f7f536","#fe7ad8","#28d690","#ff9a39","#06aff7","#830efb");
  return $day_color_arr[date("w",$time)];
}
?>
