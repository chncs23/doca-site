<?php
	require_once("callconnectionimproved.php");
	$receiveid = $_GET['Sendid'];
		$strSQL = "SELECT * FROM journal WHERE journal_id like '%".$receiveid."%'";
		$objQuery = mysqli_query($conn, $strSQL) or die ("Error Query [".$strSQL."]");
		$Rows = mysqli_fetch_array($objQuery);
		$journal_topic 	 = $Rows['journal_topic'];
		$journal_path    = $Rows['journal_path'];
		$journal_img	   = $Rows['journal_img'];
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
	<title>แก้ไขบทความ</title>
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
		<form action="update-journal.php" method="post" enctype="multipart/form-data">

			<input type="hidden" name="journal_id" value=<?php echo $receiveid;?>>

			<div class="form-group">
				<label for="journal_topic" class="tavirajFont">หัวข้อบทความ</label>
				<input type="text" class="form-control" name="journal_topic" id="journal_topic" placeholder="ระบุบทความ" value='<?php echo $journal_topic;?>' required>
			</div>

			<?php if($journal_img != '') {?>
				<div class="form-group">
					<label>ภาพปกหนังสือ</label>
					<div class="row">
						<div class="col-md-2"> <img src='<?php echo $journal_img; ?>' width="304" height="236" class="img-thumbnail"> </div>
					</div>
				</div>
			<?php } ?>

			<div class="form-group">
				<label for="journal_img" class="tavirajFont">เปลี่ยนภาพปกหนังสือ</label>
				<input type="file" name="journal_img" id="journal_img" onchange="preview_cover();">
				<div id="cover-preview" class="row"></div>
			</div>


			<div class="form-group">
				<label for="journal_path" class="tavirajFont">ไฟล์แนบ</label>
				<input type="text" class="form-control" name="journal_path" id="journal_path" placeholder="ระบุไฟล์แนบ" value='<?php echo $journal_path;?>'>
			</div>

			<input type="submit" name="submit"value="แก้ไขข้อมูล">
			<input type="submit" value="ปิด" onClick="self.close()">
		</form>
	</div>
</body>
</html>
