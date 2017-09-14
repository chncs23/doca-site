<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Taviraj" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/backoffice-form-style.css" />

	<title>เพิ่มข้อความด่วน</title>
</head>

<body>
	<div class="container">
		<p class="style22">เพิ่มวิดีโอ</p>
		<form action="" method="post" enctype="multipart/form-data">

			<div class="form-group">
				<label for="channel_content" class="tavirajFont">URL วิดีโอ</label>
				<input type="text" class="form-control" name="channel_content" id="channel_content" placeholder="ระบุวิดีโอ" required>
			</div>

			<div class="form-group">
				<label for="channel_status">สถานะ</label>
				<select name="channel_status">
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

                $strSQL = "INSERT INTO channel";
                $strSQL .="(channel_content, channel_status)";
                $strSQL .="VALUES";
                $strSQL .="('".$_POST["channel_content"]."','".$_POST["channel_status"]."')";

                $objQuery = mysqli_query($conn, $strSQL);

                if($objQuery) { // Message Box.
									$conn->close();
									flush();
									alert("เพิ่มวิดีโอเรียบร้อยแล้ว");
									echo "<script>self.close();</script>";
									}
}

function alert($msg) {
	echo "<script type='text/javascript'>alert('$msg');</script>";
}
    ?>
    </td>
    </tr>
    </table>
<body>
</body>
</html>
