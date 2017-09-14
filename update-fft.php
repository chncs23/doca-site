<?php
 require_once("callconnectionimproved.php");

 if($_POST){
	 $strSQL = "UPDATE fft SET ";
	 $strSQL .="fft_details = '".$_POST["fft_details"]."' ";
	 $strSQL .=",fft_status = '".$_POST["fft_status"]."' ";
	 $strSQL .="WHERE fft_id like '%".$receiveid."%'";
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
