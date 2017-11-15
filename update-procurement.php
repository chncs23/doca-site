<?php
 require_once("callconnectionimproved.php");

 if(isset($_POST['pcm_edit_submit'])) {
	 $strSQL = "UPDATE procurement SET ";
	 $strSQL .="pcm_topic = '".$_POST["pcm_topic"]."' ";
	 $strSQL .=",pcm_doc = '".$_POST["pcm_doc"]."' ";
	 $strSQL .=",pcm_status = '".$_POST["pcm_status"]."' ";
	 $strSQL .="WHERE pcm_id = '".$_POST["pcm_id"]."'";
	 $objQuery = mysqli_query($conn, $strSQL);
	 if($objQuery)
		 {
			 alert("แก้ไขกิจกรรมสำเร็จ !!!");
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
