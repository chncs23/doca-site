<?php

	require_once("callconnectionimproved.php");
	$receiveid = $_GET['Sendid'];

		$strSQL = "SELECT * FROM channel WHERE channel_id like '%".$receiveid."%'";
		$objQuery = mysqli_query($conn, $strSQL) or die ("Error Query [".$strSQL."]");

	$Rows = mysqli_fetch_array($objQuery);
	$channel_id 	 = $Rows['channel_id'];
	$channel_content = $Rows['channel_content'];
	$channel_status  = $Rows['channel_status'];

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
	<title>แก้ไขวิดีโอ</title>
</head>

<body>
	<div class="container">
		<p class="style22">แก้ไขวิดีโอ</p>
		<form action="update-channel.php" method="post" enctype="multipart/form-data">

			<input type="hidden" name="channel_id" value=<?php echo $receiveid;?>>

			<div class="form-group">
				<label for="channel_content" class="tavirajFont">URL วิดีโอ</label>
				<input type="text" class="form-control" name="channel_content" id="channel_content" placeholder="ระบุวิดีโอ" value="<?php echo $channel_content;?>" required>
			</div>

			<div class="form-group">
				<label for="channel_status">สถานะ</label>
				<select name="channel_status">
					<option value="n" <?php if ($channel_status == 'n') echo 'selected="selected"'?>>ไม่แสดง</option>
					<option value="y" <?php if ($channel_status == 'y') echo 'selected="selected"'?>>แสดง</option>
				</select></td>
			</div>
			<input type="submit" name="submit"value="แก้ไขข้อมูล">
			<input type="submit" value="ปิด" onClick="self.close()">
		</form>
	</div>
</body>
</html>
