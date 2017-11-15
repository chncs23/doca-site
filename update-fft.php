<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<?php
 require_once("callconnectionimproved.php");

 if($_POST){
	 $strSQL = "UPDATE fft SET ";
	 $strSQL .="fft_details = '".$_POST["fft_details"]."' ";
	 $strSQL .=",fft_status = '".$_POST["fft_status"]."' ";
	 $strSQL .="WHERE fft_id like '%".$_POST["fft_id"]."%'";
	 $objQuery = mysqli_query($conn, $strSQL);
	 if($objQuery)
		 {
			 alert("แก้ไขข้อความด่วนสำเร็จ !!!");
			 echo "<script>self.close();</script>";
       $conn->close();
			 exit;
		 }
	 else
	 {
		 echo "Error Save ";
	 }
 }

 function alert($msg) {
 	echo "<script type='text/javascript'>alert('$msg');</script>";
 }

 ?>
 </html>
