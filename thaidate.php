<?php

  $thai_day_arr = array("อาทิตย์","จันทร์","อังคาร","พุธ","พฤหัสบดี","ศุกร์","เสาร์");

function thai_date($time){
  global $thai_day_arr;
  $thai_month_arr=array(
    "0"=>"",
    "1"=>"มกราคม",
    "2"=>"กุมภาพันธ์",
    "3"=>"มีนาคม",
    "4"=>"เมษายน",
    "5"=>"พฤษภาคม",
    "6"=>"มิถุนายน",
    "7"=>"กรกฎาคม",
    "8"=>"สิงหาคม",
    "9"=>"กันยายน",
    "10"=>"ตุลาคม",
    "11"=>"พฤศจิกายน",
    "12"=>"ธันวาคม"
  );
  $thai_date_return="วัน".$thai_day_arr[date("w",$time)];
  $thai_date_return.= "ที่ ".date("j",$time);
  $thai_date_return.=" ".$thai_month_arr[date("n",$time)];
  $thai_date_return.= " พ.ศ. ".(date("Y",$time)+543);
  return $thai_date_return;
}

function thai_date_short($time){
  $thai_month_arr=array(
    "0"=>"",
    "1"=>"ม.ค.",
    "2"=>"ก.พ.",
    "3"=>"มี.ค.",
    "4"=>"เม.ย.",
    "5"=>"พ.ค.",
    "6"=>"มิ.ย.",
    "7"=>"ก.ค.",
    "8"=>"ส.ค.",
    "9"=>"ก.ย.",
    "10"=>"ต.ค.",
    "11"=>"พ.ย.",
    "12"=>"ธ.ค."
  );

  $thai_date_return= date("j",$time);
  $thai_date_return.=" ".$thai_month_arr[date("n",$time)];
  $thai_date_return.= " ".(date("Y",$time)+543);
  return $thai_date_return;
}
?>
