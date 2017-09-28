<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="css/dropmenu.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/all-news.css" />

	<title>ข่าวทั้งหมด</title>
</head>

<body>
	<nav>
		<?php
		require_once("scriptmenu.php");
		?>
	</nav>

	<img src="images/DocaBanner.png" />
	<div id="content" class="container">
		<div class="page-header">
			<h1>ข่าวทั้งหมด</h1>
		</div>

		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#activity">ข่าวกิจกรรม</a></li>
			<li><a data-toggle="tab" href="#announcement">ข่าวประชาสัมพันธ์</a></li>
		</ul>

		<div class="tab-content">
			<div id="activity" class="tab-pane fade in active">
				<?php include("all-activity.php"); ?>
			</div>

			<div id="announcement" class="tab-pane fade">
				<?php include("all-announcement.php"); ?>
			</div>
		</div>

	</div>

	<footer class="footer">
		<div>
			© 2560 กรมกิจการพลเรือนทหารบก
		</div>
	</footer>
</body>

</html>
