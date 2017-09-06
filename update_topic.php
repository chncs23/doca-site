<?php

require_once("callconnectionimproved.php");

if(filesize($_FILES["coverPhoto"]["tmp_name"]) > 0) {
	uploadCoverImage($_FILES["coverPhoto"]);
}else{
	$coverPhotoFileName = NULL;
}

$title = $_POST["title"] ?? '';
$message = $_POST["editor1"] ?? '';

if(empty($_FILES["galleryImage"]["tmp_name"][0])){
	updateNews($conn);
}else{
	$galleryFolder = "images/".$_POST["topic-id"]."/";
	updateNews($conn);
	uploadMultipleImage($conn, $galleryFolder, $_FILES["galleryImage"], $_POST["topic-id"]);
}
mysqli_close($conn);
alert("แก้ไขข่าวสำเร็จ !!!");
echo "<script>self.close();</script>";

function alert($msg) {
	echo "<script type='text/javascript'>alert('$msg');</script>";
}

function uploadCoverImage($image){
	$target_dir = "Slideimages/";
	$coverPhotoPath = $target_dir . basename($image["name"]);
	$imageFileType = pathinfo($coverPhotoPath, PATHINFO_EXTENSION);

	if (!file_exists("Slideimages")) {
		mkdir("Slideimages", 0777, true);
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

function uploadMultipleImage($sqlConnection, $galleryFolder, $imgFiles, $actId) {
	if (!file_exists($galleryFolder)) {
		mkdir($galleryFolder, 0777, true);
	}

	$deleteGalleryPath = "DELETE FROM image WHERE act_id = '$actId'";
	if($sqlConnection->query($deleteGalleryPath) === TRUE) {

		for($i=0;$i<count($imgFiles["name"]);$i++) {
			checkImageFormat($imgFiles["tmp_name"][$i]);

			$fileName = basename($imgFiles["name"][$i]);
			$insertGalleryPath = "INSERT INTO image (act_id, image_path)
			VALUES ('$actId', '/$galleryFolder$fileName')";


			if (!$sqlConnection->query($insertGalleryPath) === TRUE) {
				echo "Error: " . $insertGalleryPath . "<br>" . $sqlConnection->error;
				exit();
			}
			move_uploaded_file($imgFiles["tmp_name"][$i], "$galleryFolder".$imgFiles["name"][$i]);

		}} else{
			echo "Error: " . $insertGalleryPath . "<br>" . $sqlConnection->error;
			exit();
		}
	}

	function checkImageFormat($file) {
		$info = getimagesize($file);

		if (($info[2] !== IMAGETYPE_GIF) && ($info[2] !== IMAGETYPE_JPEG) && ($info[2] !== IMAGETYPE_PNG)) {
			alert("ต้องเป็นไฟล์รูปเท่านั้น");
			exit();
		}
	}

	function updateNews($conn) {
		if($_POST) {
			$strSQL = "UPDATE activity SET ";
			$strSQL .="act_topic = '".$_POST["topic"]."' ";
			$strSQL .=",act_details = '".$_POST["editor1"]."' ";
			if(!empty($_FILES["coverPhoto"]["tmp_name"])){
				$strSQL .=",act_imagetitle = '/Slideimages/".$_FILES["coverPhoto"]["name"]."' ";
			}
			$strSQL .=",act_imagedir = '/images/".$_POST["topic-id"]."' ";
			$strSQL .=",act_vdopath = '".$_POST["vdo_path"]."' ";
			$strSQL .=",act_filepath = '".$_POST["file_path"]."' ";
			$strSQL .=",act_enable = '".$_POST["act_status"]."' ";

			$strSQL .="WHERE act_id like '%".$_POST["topic-id"]."%'";
			$objQuery1 = mysqli_query($conn, $strSQL);
		}
	}
	?>
