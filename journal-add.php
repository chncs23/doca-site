<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Taviraj" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/backoffice-form-style.css" />

	<title>เพิ่มบทความ</title>
</head>

<script>
function preview_cover() {
	var total_file=document.getElementById("journal_img").files.length;
	$('#cover-preview').empty();
	$('#cover-preview').append("<div class=\"col-md-2\"> <img src='"+URL.createObjectURL(event.target.files[0])+"' width=\"304\" height=\"236\" class=\"img-thumbnail\"> </div>");
}
</script>


<body>
	<div class="container">
		<p class="style22">เพิ่มบทความ</p>
		<form action="" method="post" enctype="multipart/form-data">

			<div class="form-group">
				<label for="journal_topic" class="tavirajFont">หัวข้อบทความ</label>
				<input type="text" class="form-control" name="journal_topic" id="journal_topic" placeholder="ระบุบทความ" required>
			</div>

			<div class="form-group">
				<label for="journal_img" class="tavirajFont">ภาพปกหนังสือ</label>
				<input type="file" name="journal_img" id="journal_img" onchange="preview_cover();">
				<div id="cover-preview" class="row"></div>
			</div>

			<div class="form-group">
				<label for="journal_path" class="tavirajFont">ไฟล์แนบ</label>
				<input type="text" class="form-control" name="journal_path" id="journal_path" placeholder="ระบุไฟล์แนบ">
			</div>

			<input type="submit" name="submit"value="เพิ่มข้อมูล">
			<input type="submit" value="ปิด" onClick="self.close()">
	</div>

	<?php
	require_once("callconnectionimproved.php");
	if($_POST) {

		$journal_img = null;
		if(filesize($_FILES["journal_img"]["tmp_name"]) > 0) {
			$journal_img = "journal_img/".$_FILES["journal_img"]["name"];
			uploadJournalImage($_FILES["journal_img"]);
		}

		$strSQL = "INSERT INTO journal";
		$strSQL .="(journal_topic,journal_path,journal_img)";
		$strSQL .="VALUES";
		$strSQL .="('".$_POST["journal_topic"]."','".$_POST["journal_path"]."','$journal_img')";

		$objQuery = mysqli_query($conn, $strSQL);

		if($objQuery) { // Message Box.
			?>
			<script language="javascript">alert("บันทึกเรียบร้อย"); location.href="?";</script>
			<?php
		}
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

	function alert($msg) {
		echo "<script type='text/javascript'>alert('$msg');</script>";
	}
	?>
<body>
</body>
</html>
