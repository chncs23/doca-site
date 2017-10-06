<?php
require_once("callconnectionimproved.php");
$Rid = $_GET['Rid'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/layout.css" />
	<link rel="stylesheet" type="text/css" href="css/style2.css" />
  <link href="https://fonts.googleapis.com/css?family=Taviraj:300,500" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link type="text/css" rel="stylesheet" href="lightslider/css/lightslider.css" />
	<script src="lightslider/js/lightslider.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">

	<title>ข่าวกิจกรรม</title>
</head>

<script>
$(document).ready(function() {
	$('#image-gallery').lightSlider({
		gallery:true,
		item:1,
		thumbItem:5,
		slideMargin: 1,
		speed:500,
		auto:true,
		loop:true,
		keyPress:true,
		pause: 2000,
		adaptiveHeight:false,
		onSliderLoad: function() {
			$('#image-gallery').removeClass('cS-hidden');
		}
	});
});
</script>

<style >
	p {
		font-size: 18px;
	}
</style>

<body>

	<?php
	require_once("scriptmenu.php");
	?>

	<div class="container nopadding-horizontal">
		<img src="images/DocaBanner.png" width="100%"/>
	</div>

	<div class="container">
		<?php // Script แสดงเนื้อหากิจกรรม
		$strSQL = "SELECT * FROM activity WHERE act_id like '%".$Rid."%'";
		$objQuery = mysqli_query($conn, $strSQL) or die ("Error Query [".$strSQL."]");
		$total=mysqli_num_rows($objQuery);

		while ($objResult=mysqli_fetch_array($objQuery))
		{?>

			<div class="page-header">
				<h3><?php echo $objResult["act_topic"]; ?></h3>
				<p><b>วันที่เผยแพร่ :</b> <?php echo $objResult["act_date"]; ?></p>
			</div>

			<p><?php echo $objResult["act_details"]; ?></p>

		<?php } ?>


		<div class="well">

				<div class="clearfix center" style="max-width:80%;">
					<ul id="image-gallery" class="gallery list-unstyled cS-hidden">
						<?php  // Script แสดง Gallery ภาพ
						require_once("callconnectionimproved.php");

						$strSQL = "SELECT * FROM image WHERE act_id like '%".$Rid."%'";
						$objQuery = mysqli_query($conn, $strSQL) or die ("Error Query [".$strSQL."]");
						$total=mysqli_num_rows($objQuery);

						if($total>0) {
							while ($objResult=mysqli_fetch_array($objQuery)) {?>
								<li data-thumb='<?php echo $objResult["image_path"]; ?>'>
									<img src='<?php echo $objResult["image_path"];?>' width="100%" height="50%">
								</li>
							<?php  }
						}?>
					</ul>
				</div>

</div>
	</div>
</body>
</html>
