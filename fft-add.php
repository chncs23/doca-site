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
		<p class="style22">เพิ่มข้อความด่วน</p>
		<form action="" method="post" enctype="multipart/form-data">

			<div class="form-group">
				<label for="fft_details" class="tavirajFont">ข้อความ</label>
				<input type="text" class="form-control" name="fft_details" id="fft_details" placeholder="ระบุข้อความ" required>
			</div>

			<div class="form-group">
				<label for="fft_status">สถานะ</label>
				<select name="fft_status">
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

                $strSQL = "INSERT INTO fft";
                $strSQL .="(fft_details,fft_status)";
                $strSQL .="VALUES";
                $strSQL .="('".$_POST["fft_details"]."','".$_POST["fft_status"]."')";

                $objQuery = mysqli_query($conn, $strSQL);

                if($objQuery) { // Message Box.
									$conn->close();
									flush();
									alert("เพิ่มข้อความด่วนเรียบร้อยแล้ว");
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
