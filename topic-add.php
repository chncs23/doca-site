<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script src="ckeditor/ckeditor.js"></script>
	<script src="ckeditor/ckfinder.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Taviraj" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/backoffice-form-style.css" />
	<title>เพิ่มข่าวใหม่</title>
</head>

<script>
function preview_gallery() {
	var total_file=document.getElementById("galleryImage").files.length;
	$('#imagePreview').empty();
	for(var i=0;i<total_file;i++)
	{
		$('#imagePreview').append("<div class=\"col-md-2\"> <img src='"+URL.createObjectURL(event.target.files[i])+"' width=\"304\" height=\"236\" class=\"img-thumbnail\"> </div>");
	}
}

function preview_cover() {
	var total_file=document.getElementById("coverPhoto").files.length;
	$('#coverPreview').empty();
	$('#coverPreview').append("<div class=\"col-md-2\"> <img src='"+URL.createObjectURL(event.target.files[0])+"' width=\"304\" height=\"236\" class=\"img-thumbnail\"> </div>");
}
</script>

<body>

	<div class="container">
		<p><span class="style22">เพิ่มข่าวใหม่</span></p>
		<form action="" method="post" enctype="multipart/form-data">

			<div class="form-group">
				<label for="title" class="tavirajFont">หัวข้อข่าว</label>
				<input type="text" class="form-control" name="topic" id="topic" placeholder="ระบุชื่อเรื่อง" required>
			</div>

			<div class="form-group">
				<label for="editor1" class="tavirajFont">เนื้อหาข่าว</label>
				<textarea class="form-control" placeholder="ระบุเนื้อหา"  id="editor1" name="editor1" required></textarea>
				<script>
				var editor = CKEDITOR.replace( 'editor1', {
					filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
					filebrowserImageBrowseUrl: 'ckfinder/ckfinder.html?type=Images',
					filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
					filebrowserImageUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images'
				});
				CKFinder.setupCKEditor( editor );
				</script>
			</div>

			<div class="form-group">
				<label for="coverPhoto">ภาพหน้าปก</label>
				<input type="file" name="coverPhoto" id="coverPhoto" onchange="preview_cover();">
				<div id="coverPreview" class="row"></div>
			</div>

			<div class="form-group">
				<label for="galleryImage">ภาพข่าวเพิ่มเติม</label>
				<input type="file" id="galleryImage" name="galleryImage[]" onchange="preview_gallery();" multiple/>
				<div id="imagePreview" class="row"></div>
			</div>

			<div class="form-group">
				<label for="file_path">URL ไฟล์</label>
				<input type="text" class="form-control" name="file_path" id="file_path" placeholder="ระบุ URL ไฟล์" >
			</div>

			<div class="form-group">
				<label for="vdo_path">URL วีดิโอ</label>
				<input type="text" class="form-control" name="vdo_path" id="vdo_path" placeholder="ระบุ URL วีดิโอ" >
			</div>

			<div class="form-group">
				<label for="showAsCover">แสดงเป็นภาพสไลด์</label>
				<select name="status">
					<option value="n">ไม่ใช่</option>
					<option value="y">ใช่</option>
				</select></td>
			</div>


			<input type="submit" name="update" value="บันทึก" />
			<input type="submit" name="cancelvalue" value="ปิด" onClick="self.close()">

		</form>
	</div>
</body>
</html>


<?php
require_once("callconnectionimproved.php");

if(isset($_POST["update"])) {
	$lastestActivityId = getLastestActivityId($conn);

	if(filesize($_FILES["coverPhoto"]["tmp_name"]) > 0) {
		uploadCoverImage($_FILES["coverPhoto"]);
	}else{
		$coverPhotoFileName = NULL;
	}

	if(empty($_FILES["galleryImage"]["tmp_name"][0])){
		addNews($conn, $lastestActivityId);
	}else{
		$galleryFolder = "images/".$lastestActivityId."/";
		addNews($conn, $lastestActivityId);
		uploadMultipleImage($conn, $galleryFolder, $_FILES["galleryImage"], $lastestActivityId);
	}

	$conn->close();
	flush();
	alert("เพิ่มข่าวเรียบร้อยแล้ว");
	echo "<script>self.close();</script>";
}

function alert($msg) {
	echo "<script type='text/javascript'>alert('$msg');</script>";
}

function getLastestActivityId($sqlConnection) {
	$getIdQuery = "SHOW TABLE STATUS WHERE `Name` = 'activity'";
	$newsIdResult = $sqlConnection->query($getIdQuery);
	if ($newsIdResult->num_rows > 0) {
		while($row = $newsIdResult->fetch_assoc()) {
			return str_pad($row['Auto_increment'],5,0,STR_PAD_LEFT);
		}
	} else {
		return -1;
	}
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
		try {
			move_uploaded_file($image["tmp_name"], $coverPhotoPath);
		} catch(Exception $e) {
			alert($e->getMessage());
			exit();
		}
	}
	return true;
}

function uploadMultipleImage($sqlConnection, $galleryFolder, $imgFiles, $newsId) {
	if (!file_exists($galleryFolder)) {
		mkdir($galleryFolder, 0777, true);
	}

	for($i=0;$i<count($imgFiles["name"]);$i++) {
		checkImageFormat($imgFiles["tmp_name"][$i]);

		$fileName = basename($imgFiles["name"][$i]);
		$insertGalleryPath = "INSERT INTO image (act_id, image_path)
		VALUES ('$newsId', '$galleryFolder$fileName')";

		if (!$sqlConnection->query($insertGalleryPath) === TRUE) {
			echo "Error: " . $insertGalleryPath . "<br>" . $conn->error;
			exit();
		}

		move_uploaded_file($imgFiles["tmp_name"][$i], "$galleryFolder".$imgFiles["name"][$i]);
	}
}

function checkImageFormat($file) {
	$info = getimagesize($file);

	if (($info[2] !== IMAGETYPE_GIF) && ($info[2] !== IMAGETYPE_JPEG) && ($info[2] !== IMAGETYPE_PNG)) {
		alert("ต้องเป็นไฟล์รูปเท่านั้น");
		exit();
	}
}

function addNews($sqlConnection, $act_id){
	$insertNewsQuery = "INSERT INTO activity";
	$insertNewsQuery .="(act_topic,act_details,act_imagetitle,act_imagedir,act_vdopath,act_filepath,act_enable,create_time)";
	$insertNewsQuery .="VALUES";
	$insertNewsQuery .="('".$_POST["topic"]."',";
	$insertNewsQuery .="'".$_POST["editor1"]."',";
	if(!empty($_FILES["coverPhoto"]["tmp_name"])){
		$insertNewsQuery .="'Slideimages/".$_FILES["coverPhoto"]["name"]."',";
		$insertNewsQuery .="'images/".$act_id."',";
	}else{
		$insertNewsQuery .="NULL, NULL,";
	}
	$insertNewsQuery .="'".$_POST["vdo_path"]."',";
	$insertNewsQuery .="'".$_POST["file_path"]."',";
	$insertNewsQuery .="'".$_POST["status"]."',";
	$insertNewsQuery .="now())";
	if (!$sqlConnection->query($insertNewsQuery) === TRUE) {
		alert("ผิดพลาด: " . $insertNewsQuery . "<br>" . $sqlConnection->error);
		exit();
	}
}

?>
