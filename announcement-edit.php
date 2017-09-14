<?php

require_once("callconnectionimproved.php");
$receiveid = $_GET['Sendid'];

$strSQL = "SELECT * FROM announcement WHERE ann_id like '%".$receiveid."%'";
$objQuery = mysqli_query($conn, $strSQL) or die ("Error Query [".$strSQL."]");

$Rows = mysqli_fetch_array($objQuery);

$ann_id 	 = $Rows['ann_id'];
$ann_topic   = $Rows['ann_topic'];
$ann_doc	 = $Rows['ann_doc'];
$ann_subtopic 	 = $Rows['ann_subtopic'];
$ann_doc2   	= $Rows['ann_doc2'];
$ann_status  	= $Rows['ann_status'];
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
	<title>แก้ไขข่าวประชาสัมพันธ์</title>
</head>

<body>
	<div class="container">
		<p class="style22">แก้ไขข่าวประชาสัมพันธ์</p>
		<form action="update-announcement.php" method="post" enctype="multipart/form-data">

			<input type="hidden" name="ann_id" value=<?php echo $receiveid;?>>

			<div class="form-group">
				<label for="title" class="tavirajFont">ข้อความประชาสัมพันธ์</label>
				<input type="text" class="form-control" name="ann_topic" id="ann_topic" placeholder="ระบุข้อความ" value=<?php echo $ann_topic;?> required>
			</div>

			<div class="form-group">
				<label for="title" class="tavirajFont">ไฟล์แนบ</label>
				<input type="text" class="form-control" name="ann_doc" id="ann_doc" placeholder="ระบุไฟล์แนบ" value=<?php echo $ann_doc;?>>
			</div>

			<div class="form-group">
				<label for="title" class="tavirajFont">หัวข้อย่อย</label>
				<input type="text" class="form-control" name="ann_subtopic" id="ann_subtopic" placeholder="ระบุข้อความ" value=<?php echo $ann_subtopic;?>>
			</div>

			<div class="form-group">
				<label for="title" class="tavirajFont">ไฟล์แนบหัวข้อย่อย</label>
				<input type="text" class="form-control" name="ann_doc2" id="ann_doc2" placeholder="ระบุไฟล์แนบ" value=<?php echo $ann_doc2;?>>
			</div>

			<div class="form-group">
				<label for="showAsCover">สถานะ</label>
				<select name="ann_status">
					<option value="n" <?php if ($ann_status == 'n') echo 'selected="selected"'?>>ไม่แสดง</option>
					<option value="y" <?php if ($ann_status == 'y') echo 'selected="selected"'?>>แสดง</option>
				</select></td>
			</div>
			<input type="submit" name="submit"value="แก้ไขข้อมูล">
			<input type="submit" value="ปิด" onClick="self.close()">
		</form>
	</div>
</body>
</html>
