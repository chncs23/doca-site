<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<?php
 require_once("callconnectionimproved.php");

 if($_POST)
 {

   if(filesize($_FILES["journal_img"]["tmp_name"]) > 0) {
     uploadJournalImage($_FILES["journal_img"]);
   }

   $strSQL = "UPDATE journal SET ";
   $strSQL .="journal_topic = '".$_POST["journal_topic"]."' ";
   if(!empty($_FILES["journal_img"]["tmp_name"])){
     	 $strSQL .=",journal_img = 'journal_img/".$_FILES["journal_img"]["name"]."' ";
   }
   $strSQL .=",journal_path = '".$_POST["journal_path"]."' ";
   $strSQL .="WHERE journal_id = '".$_POST["journal_id"]."'";
	 $objQuery = mysqli_query($conn, $strSQL);
   echo $_POST["journal_id"];
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

 function uploadJournalImage($image){
   $target_dir = "journal_img/";
   $coverPhotoPath = $target_dir . basename($image["name"]);
   $imageFileType = pathinfo($coverPhotoPath, PATHINFO_EXTENSION);

   if (!file_exists("journal_img")) {
     mkdir("journal_img", 0777, true);
   }

   if (!getimagesize($image["tmp_name"])) {
     alert("Sorry, your file was not uploaded.");
     exit();
   } else {
     if (!move_uploaded_file($image["tmp_name"], $coverPhotoPath)) {
       alert("Sorry, there was an error uploading your file.");
       exit();
     }
   }
   return true;
 }
 ?>
 </html>
