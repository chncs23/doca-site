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

<body>
	<div class="container">
		<p class="style22">เพิ่มบทความ</p>
		<form action="" method="post" enctype="multipart/form-data">

			<div class="form-group">
				<label for="journal_topic" class="tavirajFont">หัวข้อบทความ</label>
				<input type="text" class="form-control" name="journal_topic" id="journal_topic" placeholder="ระบุบทความ" required>
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
		$strSQL = "INSERT INTO journal";
		$strSQL .="(journal_topic,journal_path)";
		$strSQL .="VALUES";
		$strSQL .="('".$_POST["journal_topic"]."','".$_POST["journal_path"]."')";

		$objQuery = mysqli_query($conn, $strSQL);

		if($objQuery) { // Message Box.
			?>
			<script language="javascript">alert("บันทึกเรียบร้อย"); location.href="?";</script>
			<?php
		}
	}
	?>
<body>
</body>
</html>
