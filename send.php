<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/layout.css" />
<link rel="stylesheet" type="text/css" href="css/style2.css" />
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">


<title>ระบบทะเบียนรับส่ง</title>
</head>
<body topmargin="">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Script Table Soter-->
<script type="text/javascript" src="js/jquery-latest.js"></script>
<script type="text/javascript" src="js/jquery.tablesorter.js"></script>
<link href="themes/blue/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
	$(document).ready(function() {
		$("#myTable").tablesorter();
	});
</script>


<table width="1120" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr valign="top">
    <td colspan="4">
   <?php
	require_once("scriptmenu.php");
	?>
 <!-- End Menu ----------------------------------->
    </td>
</table>
<!--

<table width="1120" height="100" border="0" align="center" cellpadding="0" cellspacing="0" >
<tr>
	<td background="..images/bg_splitter.jpg">
    </td>
</tr>
-->

</table>
<table width="1120" border="0" align="center" cellpadding="0" cellspacing="10">
<tr>
  <td align="left" valign="top" background="images/baseBG.png">
    <?php
		// ฟังก์ชั่นอย่างง่ายใช้ทดสอบ หน้าปัจจุบัน
		function active_menu($link_chk,$default_active=0){
			if($default_active==1){
				return ($_SERVER['REQUEST_URI']==$link_chk || $_SERVER['QUERY_STRING']=="")?"_active":"";
			}else{
				return ($_SERVER['REQUEST_URI']==$link_chk)?"_active":"";
			}
		}
	?>
        <a class="css_menu<?=active_menu("/send.php?menu=1")?>" href="receive.php"><span class="style22">ทะเบียนรับ</span></a>
        <a class="css_menu<?=active_menu("/send.php?menu=2",1)?>" href="send.php"><span class="style22">ทะเบียนส่ง</span></a>
        <br />
            <div align="right">
                <a href="#" onClick="window.open('send-add.php','','width=650,height=400'); return false;" title="Add receive">
                    <img src="/images/btn-new.png" width="75" height="75"/>
                </a>
            </div>
<table id="myTable" class="tablesorter">
<thead>
<tr>
    <th width="150"><span class="style18">วันที่ส่ง</span></th>
    <th width="100"><span class="style18">เลขที่หนังสือ</span></th>
    <th width="75"><span class="style18">ลงวันที่</span></th>
    <th width="50"><span class="style18">ถึง</span></th>
    <th><span class="style18">เรื่อง</span></th>
    <th width="100"><span class="style18">การปฏิบัติ</span></th>
    <th width="100"><span class="style18">หมายเหตุ</span></th>
</tr>
</thead>
<tbody>
        <?php
		require_once("callconnectionimproved.php");

			  $strSQL = "SELECT * FROM record_send WHERE send_id != '' order by send_id desc";
			  $objQuery = mysqli_query($conn, $strSQL) or die ("Error Query [".$strSQL."]");
			  $total=mysqli_num_rows($objQuery);
				if($total>0)
				{
				$count;
				while ($objResult=mysqli_fetch_array($objQuery))
					{
					echo '<tr>';
						echo '<td>'; echo '<span class="style16">'; echo $objResult["send_date"]; echo '</span>'; echo '</td>';
						echo '<td>'; echo '<span class="style16">'; echo $objResult["send_number"]; echo '</span>'; echo '</td>';
						echo '<td>'; echo '<span class="style16">'; echo $objResult["send_recdate"]; echo '</span>'; echo '</td>';
						echo '<td>'; echo '<span class="style16">'; echo $objResult["send_to"]; echo '</span>'; echo '</td>';
						echo '<td>'; echo '<span class="style16">'; echo $objResult["send_topic"]; echo '</span>'; echo '</td>';
						echo '<td>'; echo '<span class="style16">'; echo $objResult["send_action"]; echo '</span>'; echo '</td>';
						echo '<td>'; echo '<span class="style16">'; echo $objResult["send_remark"]; echo '</span>'; echo '</td>';
					echo '</tr>';

					}
					$count+=1;
				}
 ?>
</tbody>
</table>

    </td>

</tr>
</table>

</body>
</html>
