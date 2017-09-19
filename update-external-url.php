<?php
 require_once("callconnectionimproved.php");

 if($_POST){

   if(filesize($_FILES["menu-img"]["tmp_name"]) > 0) {
     uploadBannerImage($_FILES["menu-img"]);
   }

	 $strSQL = "UPDATE external_url SET ";
	 $strSQL .="menu_url = '".$_POST["menu-url"]."' ";
   if(!empty($_FILES["menu-img"]["tmp_name"])){
     	 $strSQL .=",menu_img = 'menu_img/".$_FILES["menu-img"]["name"]."' ";
   }
	 $strSQL .=",menu_description = '".$_POST["menu-description"]."' ";
	 $strSQL .=",menu_status = '".$_POST["menu-status"]."' ";
	 $strSQL .="WHERE menu_id like '%".$_POST["menu_id"]."%'";
	 $objQuery = mysqli_query($conn, $strSQL);
	 if($objQuery)
		 {
			 alert("แก้ไข URL สำเร็จ !!!");
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

 function uploadBannerImage($image){
 	$target_dir = "menu_img/";
 	$coverPhotoPath = $target_dir . basename($image["name"]);
 	$imageFileType = pathinfo($coverPhotoPath, PATHINFO_EXTENSION);

 	if (!file_exists("menu_img")) {
 		mkdir("menu_img", 0777, true);
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
