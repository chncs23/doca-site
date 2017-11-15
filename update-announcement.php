<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<?php
 require_once("callconnectionimproved.php");

 if($_POST)
 {
	 $strSQL = "UPDATE announcement SET ";
	 $strSQL .="ann_topic = '".$_POST["ann_topic"]."' ";
	 $strSQL .=",ann_doc = '".$_POST["ann_doc"]."' ";
	 $strSQL .=",ann_subtopic = '".$_POST["ann_subtopic"]."' ";
	 $strSQL .=",ann_doc2 = '".$_POST["ann_doc2"]."' ";
	 $strSQL .=",ann_status = '".$_POST["ann_status"]."' ";
	 $strSQL .="WHERE ann_id = '".$_POST["ann_id"]."'";
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
</html>
