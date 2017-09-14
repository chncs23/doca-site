<?php
 require_once("callconnectionimproved.php");

 if($_POST)
 {
   $strSQL = "UPDATE journal SET ";
   $strSQL .="journal_topic = '".$_POST["journal_topic"]."' ";
   $strSQL .=",journal_path = '".$_POST["journal_path"]."' ";
   $strSQL .="WHERE journal_id like '%".$_POST["่journal_id"]."%'";
	 $objQuery = mysqli_query($conn, $strSQL);
	 if($objQuery)
		 {
			 alert("แก้ไขบทความสำเร็จ !!!");
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
