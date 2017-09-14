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
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link href="themes/blue/style.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Taviraj" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/backoffice-style.css" />
  <script type="text/javascript">
  $(document).ready(function() {
    $("#myTable").tablesorter();
  });
  </script>

<title>จัดการวิดีโอ</title>
</head>
<body topmargin="">
<table width="1120" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr valign="top">
    <td colspan="4">
   <?php
	require_once("scriptmenu.php");
	?>
 <!-- End Menu ----------------------------------->
    </td>
</table>
</table>
<table width="1120" border="0" align="center" cellpadding="0" cellspacing="10">
<tr>
  <td width="250" valign="top" background="images/baseBG.png">
		<?php require_once"scriptmenueditor.php"?>
  </td>

  <td align="left" valign="top" background="images/baseBG.png"><h2>จัดการวิดีโอ</h2>
    <div align="right">
      <button
      type="button"
      class="btn btn-primary"
      onClick="window.open('channel-add.php','','width=1366,height=700'); return false;"
      title="เพิ่มวิดีโอ"><span class="glyphicon glyphicon-plus"></span> เพิ่มวิดีโอ</button>
    </div>
  </div>

  <?php
  function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
  }

  require_once("callconnectionimproved.php");
  $strSQL = "SELECT * FROM channel WHERE channel_id != '' order by channel_id desc";
  $objQuery = mysqli_query($conn, $strSQL) or die ("Error Query [".$strSQL."]");

  if (mysqli_num_rows($objQuery) == 0) {
    alert("ไม่มีอะไรเลยยยยย");
  }else{
    $tablehead = <<<HTML
        <table id="myTable" class="table table-bordered tablesorter ">
        <thead>
        <tr>
            <th width="50"><span>รหัส</span></th>
            <th width=""><span>วิดีโอ</span></th>
            <th width="60"><span>สถานะ</span></th>
            <th width="50"><span>แก้ไข</span></th>
            <th width="50"><span>ลบ</span></th>

        </tr>
        </thead>
        <tbody>
HTML;
  echo $tablehead;
  while($objResult = mysqli_fetch_array($objQuery)) {
      $channel_id 	 = $objResult['channel_id'];
      $channel_content = $objResult['channel_content'];
      $channel_status  = $objResult['channel_status'];
$tablerow = <<<HTML
<tr>
      <td><span class="style16">$channel_id</span></td>
      <td><span class="style16">$channel_content</span></td>
      <td><span class="style16">$channel_status</span></td>
      <td><span class="style16">
          <a href="channel-edit.php?Sendid=$channel_id" onClick="window.open('channel-edit.php?Sendid=$channel_id','','width=650,height=400'); return false;" title="แก้ไขข้อมูล">แก้ไข</a></span></td>
      <td>
          <span>
          <a href="channel-delete.php?Sendid=$channel_id?" onClick="window.open('channel-delete.php?Sendid=$channel_id?','','width=250,height=150'); return false;" title="ลบข้อมูล">ลบ</a>
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
