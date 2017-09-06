<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="css/layout.css" />
	<link rel="stylesheet" type="text/css" href="css/style2.css" />
	<link rel="stylesheet" type="text/css" href="css/dropmenu.css" />
	<script type="text/javascript" src="js/jquery-latest.js"></script>
	<script type="text/javascript" src="js/jquery.tablesorter.js"></script>
	<link rel="stylesheet" type="text/css" href="/doca/bootstrap/css/bootstrap.css">
	<link href="themes/blue/style.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Taviraj" rel="stylesheet">
	<script type="text/javascript">
	$(document).ready(function() {
		$("#myTable").tablesorter();
	});
	</script>
	<style>
	ul.lof-main-wapper li {
		position:relative;
	}
	.style18 {font-size: 16pt; font-weight: ; font-family: "TH SarabunPSK", sans-serif; }
	.style22 {font-size: 24pt; font-weight: bold; font-family: "TH SarabunPSK", sans-serif; }
	body {
		font-size: 10pt; font-family: 'Taviraj', serif;
		background-image: url(../images/BG7.jpg);
		background-repeat: repeat;
		margin-left: 0px;
		margin-top: 0px;
		margin-right: 0px;
		margin-bottom: 0px;
	}

	span {font-size: 10pt; font-family: 'Taviraj', serif;}

	</style>
	<!-- ------------------------------------------------------test Menu-->
	<style type="text/css">
	/* เมนูปกติ */
	.css_menu{
		position:relative;
		display:block;
		float:left;
		width:100%;
		height:25px;
		background-color:#333;
		color:#FFF;
		text-align:center;
		text-decoration:none;
		line-height:25px;
		margin-right:2px;
	}
	/*  เมนูเมื่อเมาส์ over*/
	.css_menu:hover{
		position:relative;
		display:block;
		float:left;
		width:100%;
		height:25px;
		background-color:#CCC;
		color:#000;
	}
	/*  เมนูเมื่อ active*/
	.css_menu_active{
		position:relative;
		display:block;
		float:left;
		width:100%;
		height:25px;
		background-color:#CCC;
		color:#000;
		text-align:center;
		text-decoration: underline;
		line-height:25px;
		margin-right:2px;
	}
	</style>

	<title>แก้ไขกิจกรรม</title>
</head>
<body topmargin="">
	<table width="1120" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr valign="top">
			<td colspan="4">
				<?php require_once("scriptmenu.php");?>
				<!-- End Menu ----------------------------------->
			</td>
		</table>
	</table>
	<table width="1120" border="0" align="center" cellpadding="0" cellspacing="10">
		<tr>
			<td width="250" valign="top" background="images/baseBG.png"><?php require_once("scriptmenueditor.php"); ?></td>
			<td align="left" valign="top" background="images/baseBG.png"><h2>หน้าแก้ไขข่าวกิจกรรม</h2>
				<div align="right">
					<button
					type="button"
					class="btn btn-primary"
					onClick="window.open('topic-add.php','','width=1366,height=700'); return false;"
					title="เพิ่มข่าวกิจกรรม"><span class="glyphicon glyphicon-plus"></span> เพิ่มข่าวกิจกรรม</button>
				</div>
			</div>


			<?php
			function alert($msg) {
				echo "<script type='text/javascript'>alert('$msg');</script>";
			}

			require_once("callconnectionimproved.php");

			$strSQL = "SELECT * FROM activity WHERE act_id != '' order by act_id DESC LIMIT 20";
			$objQuery = mysqli_query($conn, $strSQL) or die ("Error Query [".$strSQL."]");
			$act_id 	 = "";
			$act_date 	 = "";
			$act_topic = "";
			$act_status  = "";


			if (mysqli_num_rows($objQuery) == 0) {
				alert("ไม่มีอะไรเลยยยยย");
			}else{
				error_reporting(E_ALL);

				$tablehead = <<<HTML
				<table id="myTable" class="table table-bordered tablesorter ">
					<thead>
						<tr>
							<th width="50"><span>รหัส</span></th>
							<th width="100"><span>วันที่</span></th>
							<th width=""><span>หัวข้อข่าว</span></th>
							<th width="60"><span>สถานะ</span></th>
							<th width="60"><span>แก้ไข</span></th>
							<th width="60"><span>ลบ</span></th>

						</tr>
					</thead>
					<tbody>
HTML;
					echo $tablehead;
					while($objResult = mysqli_fetch_assoc($objQuery)) {
							$act_id 	 = $objResult['act_id'];
							$act_date 	 = $objResult['act_date'];
							$act_topic = $objResult['act_topic'];
							$act_status  = $objResult['act_enable'];
					$tablerow = <<<HTML
					<tr>
								<td ><span>$act_id</span></td>
								<td ><span>$act_date</span></td>
								<td ><span>$act_topic</span></td>
								<td ><span>$act_status</span></td>
								<td ><span>
									<a href="topic-edit.php?Sendid=$act_id" onClick="window.open('topic-edit.php?Sendid=$act_id','','width=1366,height=650'); return false;" title="Add receive">แก้ไข</a></span></td>
									<td>
										<span>

											<!-- แบบที่ 1 คลิกคำว่า ลบ แล้ว ไปหน้า delete-->
											<a href="topic-delete.php?Sendid=$act_id" onClick="window.open('topic-delete.php?Sendid=$act_id','','width=250,height=150'); return false;" title="confirm delete">ลบ
											</a>
								</span>
							</td>
						</tr>

HTML;
echo $tablerow;
}
				}
				?>

			</tbody>
		</table>
	</td>
</tr>
</table>

</body>
</html>
