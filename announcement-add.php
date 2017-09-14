<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Taviraj" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/backoffice-form-style.css" />

	<title>เพิ่มข่าวประชาสัมพันธ์</title>
</head>

<body>
	<div class="container">
		<p class="style22">เพิ่มข่าวประชาสัมพันธ์</p>
		<form action="" method="post" enctype="multipart/form-data">

			<div class="form-group">
				<label for="title" class="tavirajFont">ข้อความประชาสัมพันธ์</label>
				<input type="text" class="form-control" name="ann_topic" id="ann_topic" placeholder="ระบุข้อความ" required>
			</div>

			<div class="form-group">
				<label for="title" class="tavirajFont">ไฟล์แนบ</label>
				<input type="text" class="form-control" name="ann_doc" id="ann_doc" placeholder="ระบุไฟล์แนบ">
			</div>

			<div class="form-group">
				<label for="title" class="tavirajFont">หัวข้อย่อย</label>
				<input type="text" class="form-control" name="ann_subtopic" id="ann_subtopic" placeholder="ระบุข้อความ">
			</div>

			<div class="form-group">
				<label for="title" class="tavirajFont">ไฟล์แนบหัวข้อย่อย</label>
				<input type="text" class="form-control" name="ann_doc2" id="ann_doc2" placeholder="ระบุไฟล์แนบ">
			</div>

			<div class="form-group">
				<label for="showAsCover">สถานะ</label>
				<select name="ann_status">
					<option value="n">ไม่แสดง</option>
					<option value="y">แสดง</option>
				</select></td>
			</div>
			<input type="submit" name="submit"value="เพิ่มข้อมูล">
			<input type="submit" value="ปิด" onClick="self.close()">
		</form>
	</div>

	<?php
	require_once("callconnectionimproved.php");

	if($_POST) {
		$strSQL = "INSERT INTO announcement";
		$strSQL .="(ann_topic,ann_doc,ann_subtopic,ann_doc2,ann_status)";
		$strSQL .="VALUES";
		$strSQL .="('".$_POST["ann_topic"]."',
		'".$_POST["ann_doc"]."',
		'".$_POST["ann_subtopic"]."',
		'".$_POST["ann_doc2"]."',
		'".$_POST["ann_status"]."')";

		$objQuery = mysqli_query($conn, $strSQL);

		if($objQuery) { // Message Box.
			?>
			<script language="javascript">alert("บันทึกเรียบร้อย"); location.href="?";</script>
			<?php
		}
	}
	?>
</td>
</tr>
</table>
</body>
</html>
