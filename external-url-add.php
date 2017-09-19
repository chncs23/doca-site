<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Taviraj" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/backoffice-form-style.css" />

	<title>เพิ่ม URL หน่วยงานอื่น</title>
</head>

<script>
function preview_banner() {
	var total_file=document.getElementById("menu-img").files.length;
	$('#banner-preview').empty();
	$('#banner-preview').append("<div class=\"col-md-2\"> <img src='"+URL.createObjectURL(event.target.files[0])+"' width=\"304\" height=\"236\" class=\"img-thumbnail\"> </div>");
}
</script>

<body>

<body>
	<div class="container">
		<p class="style22">เพิ่ม URL หน่วยงานอื่น</p>
		<form action="" method="post" enctype="multipart/form-data">

			<div class="form-group">
				<label for="menu-url" class="tavirajFont">URL</label>
				<input type="text" class="form-control" name="menu-url" id="menu-url" placeholder="ระบุ URL" required>
			</div>

			<div class="form-group">
				<label for="menu-img" class="tavirajFont">ภาพ URL</label>
				<input type="file" name="menu-img" id="menu-img" onchange="preview_banner();">
				<div id="banner-preview" class="row"></div>
			</div>

			<div class="form-group">
				<label for="channel_content" class="tavirajFont">รายละเอียด URL</label>
				<input type="text" class="form-control" name="menu-description" id="menu-description" placeholder="รายละเอียด URL">
			</div>

			<div class="form-group">
				<label for="menu-status">สถานะ</label>
				<select name="menu-status">
					<option value="n">ไม่แสดง</option>
					<option value="y">แสดง</option>
				</select></td>
			</div>
			<input type="submit" name="submit"value="บันทึก">
			<input type="submit" value="ปิด" onClick="self.close()">
		</form>
	</div>
</body>

<?php
require_once("callconnectionimproved.php");

if($_POST) {

	if(filesize($_FILES["menu-img"]["tmp_name"]) > 0) {
		uploadBannerImage($_FILES["menu-img"]);
	}

  $strSQL = "INSERT INTO external_url";
  $strSQL .="(menu_url, menu_img, menu_description, menu_status)";
  $strSQL .="VALUES";
  $strSQL .="('".$_POST["menu-url"]."','"."menu_img/".$_FILES["menu-img"]["name"]."','".$_POST["menu-description"]."','".$_POST["menu-status"]."')";
	$objQuery = mysqli_query($conn, $strSQL);
	if($objQuery) { // Message Box.
		$conn->close();
		flush();
		alert("เพิ่ม URL เรียบร้อยแล้ว");
		echo "<script>self.close();</script>";
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
    </td>
    </tr>
    </table>
<body>
</body>
</html>
