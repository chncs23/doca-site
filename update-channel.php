<?php
 require_once("callconnectionimproved.php");

 if($_POST){
	 $strSQL = "UPDATE channel SET ";
	 $strSQL .="channel_content = '".$_POST["channel_content"]."' ";
	 $strSQL .=",channel_status = '".$_POST["channel_status"]."' ";
	 $strSQL .="WHERE channel_id like '%".$receiveid."%'";
	 $objQuery = mysqli_query($conn, $strSQL);
	 if($objQuery)
		 {
			 alert("แก้ไขวิดีโอสำเร็จ !!!");
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
