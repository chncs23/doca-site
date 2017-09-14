<?php
require_once("callconnectionimproved.php");

$receiveid = $_GET['Sendid'];


$strSQL = "SELECT * FROM activity WHERE act_id like '%".$receiveid."%'";
$objQuery = mysqli_query($conn, $strSQL) or die ("Error Query [".$strSQL."]");
$Rows = mysqli_fetch_array($objQuery);

$act_topic 	 = $Rows['act_topic'];
$act_details = $Rows['act_details'];
$act_imagetitle 	 = $Rows['act_imagetitle'];
$act_imagedir  = $Rows['act_imagedir'];
$act_vdopath 	 = $Rows['act_vdopath'];
$act_filepath = $Rows['act_filepath'];
$act_status  = $Rows['act_enable'];

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
	<title></title>
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
		<p><span class="style22">แก้ไขข่าวกิจกรรม</span></p>
		<form action="update-topic.php" method="post" enctype="multipart/form-data">

			<input type="hidden" name="topic-id" value=<?php echo $receiveid;?>>

			<div class="form-group">
				<label for="title">หัวข้อข่าว</label>
				<input type="text" class="form-control" name="topic" id="topic" placeholder="ระบุชื่อเรื่อง" value="<?php echo $act_topic;?>" required >
			</div>

			<div class="form-group">
				<label for="editor1">เนื้อหาข่าว</label>
				<textarea class="form-control" placeholder="ระบุเนื้อหา" id="editor1" name="editor1" required><?php echo $act_details;?></textarea>
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

			<?php if($act_imagetitle != '') {?>
				<div class="form-group">
					<label for="coverPhoto">ภาพหน้าปก</label>
					<div class="row">
						<div class="col-md-2"> <img src='<?php echo $act_imagetitle; ?>' width="304" height="236" class="img-thumbnail"> </div>
					</div>
				</div>
			<?php } ?>

			<div class="form-group">
				<label for="coverPhoto">เปลี่ยนภาพหน้าปก</label>
				<input type="file" name="coverPhoto" id="coverPhoto" onchange="preview_cover();">
				<div id="coverPreview" class="row"></div>
			</div>


			<?php
			$strImgSQL = "SELECT * FROM image WHERE act_id = '$receiveid'";
			$objImgQuery = mysqli_query($conn, $strImgSQL) or die ("Error Query [".$strImgSQL."]");
			if(mysqli_num_rows ($objImgQuery) > 0) { ?>
				<div class="form-group">
					<label for="galleryImage">ภาพข่าวเพิ่มเติม</label>
					<div class="row">
						<?php
						while($objImgResult = mysqli_fetch_assoc($objImgQuery)) {
							?>
							<div class="col-md-2"> <img src='<?php echo $objImgResult['image_path']; ?>' width="304" height="236" class="img-thumbnail"> </div>
							<?php
						}
						?>
					</div>
				</div>
			<?php } ?>

			<div class="form-group">
				<label for="galleryImage">เปลี่ยนภาพข่าวเพิ่มเติม</label>
				<input type="file" id="galleryImage" name="galleryImage[]" onchange="preview_gallery();" multiple/>
				<div id="imagePreview" class="row"></div>
			</div>

			<div class="form-group">
				<label for="file_path">URL ไฟล์</label>
				<input type="text" class="form-control" name="file_path" id="file_path" placeholder="ระบุ URL ไฟล์" value=<?php echo $act_filepath;?>>
			</div>

			<div class="form-group">
				<label for="vdo_path">URL วีดิโอ</label>
				<input type="text" class="form-control" name="vdo_path" id="vdo_path" placeholder="ระบุ URL วีดิโอ" value=<?php echo $act_vdopath;?>>
			</div>

			<div class="form-group">
				<label for="showAsCover">แสดงเป็นภาพสไลด์</label>
				<select name="act_status">
					<option value="n" <?php if ($act_status == 'n') echo 'selected="selected"'; ?>>ไม่ใช่</option>
					<option value="y" <?php if ($act_status == 'y') echo 'selected="selected"'; ?>>ใช่</option>
				</select></td>

			</div>
			<input type="submit" value="บันทึก" />
			<input type="submit" name="cancelvalue" value="ปิด" onClick="self.close()">
		</div>

	</form>
</td>
</tr>
</table>
</div>
</body>
</html>
