<?php
function time_diff_today($start_time) {
  $from_time = strtotime($start_time);
  $diff = abs(time() - $from_time);
  $years = floor($diff / (365*60*60*24));
  $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
  $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
  return ($days < 0 ? 0 : abs($days));
}
?>
