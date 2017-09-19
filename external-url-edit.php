<?php

	require_once("callconnectionimproved.php");
	$receiveid = $_GET['Sendid'];

		$strSQL = "SELECT * FROM external_url WHERE menu_id like '%".$receiveid."%'";
		$objQuery = mysqli_query($conn, $strSQL) or die ("Error Query [".$strSQL."]");

	$Rows = mysqli_fetch_array($objQuery);
	$menu_url 	 = $Rows['menu_url'];
	$menu_img = $Rows['menu_img'];
	$menu_description = $Rows['menu_description'];
	$menu_status  = $Rows['menu_status'];

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="ckeditor/ckeditor.js"></script>
	<script src="ckfinder/ckfinder.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link href="https://fonts.googleapis.com/css?family=Taviraj" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/backoffice-form-style.css" />
	<title>แก้ไข URL หน่วยงานอื่น</title>
</head>

<script>
function preview_banner() {
	var total_file=document.getElementById("menu-img").files.length;
	$('#banner-preview').empty();
	$('#banner-preview').append("<div class=\"col-md-2\"> <img src='"+URL.createObjectURL(event.target.files[0])+"' width=\"304\" height=\"236\" class=\"img-thumbnail\"> </div>");
}
</script>

<body>
	<div class="container">
		<p class="style22">แก้ไข URL หน่วยงานอื่น</p>
		<form action="update-external-url.php" method="post" enctype="multipart/form-data">

			<input type="hidden" name="menu_id" value=<?php echo $receiveid;?>>

			<div class="form-group">
				<label for="channel_content" class="tavirajFont">URL</label>
				<input type="text" class="form-control" name="menu-url" id="menu-url" placeholder="ระบุ URL" value="<?php echo $menu_url;?>" required>
			</div>

			<?php if($menu_img != '') {?>
				<div class="form-group">
					<label>ภาพ URL</label>
					<div class="row">
						<div class="col-md-2"> <img src='<?php echo $menu_img; ?>' width="304" height="236" class="img-thumbnail"> </div>
					</div>
				</div>
			<?php } ?>

			<div class="form-group">
				<label for="menu-img" class="tavirajFont">เปลี่ยนภาพ URL</label>
				<input type="file" name="menu-img" id="menu-img" onchange="preview_banner();">
				<div id="banner-preview" class="row"></div>
			</div>


			<div class="form-group">
				<label for="channel_content" class="tavirajFont">รายละเอียด URL</label>
				<input type="text" class="form-control" name="menu-description" id="menu-description" placeholder="รายละเอียด URL" value="<?php echo $menu_description;?>">
			</div>

			<div class="form-group">
				<label for="menu-status">สถานะ</label>
				<select name="menu-status">
					<option value="n" <?php if ($menu_status == 'n') echo 'selected="selected"'?>>ไม่แสดง</option>
					<option value="y" <?php if ($menu_status == 'y') echo 'selected="selected"'?>>แสดง</option>
				</select></td>
			</div>
			<input type="submit" name="submit"value="แก้ไขข้อมูล">
			<input type="submit" value="ปิด" onClick="self.close()">
		</form>
	</div>
</body>
</html>
