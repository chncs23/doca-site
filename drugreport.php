<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" type="text/css" href="css/layout.css" />
<link rel="stylesheet" type="text/css" href="css/style2.css" />
<link rel="stylesheet" type="text/css" href="css/dropmenu.css" />



<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript">
    $(function() {
      if ($.browser.msie && $.browser.version.substr(0,1)<7)
      {
        $('li').has('ul').mouseover(function(){
            $(this).children('ul').show();
            }).mouseout(function(){
            $(this).children('ul').hide();
            })
      }
    });        
</script>  


<style>
	
	ul.lof-main-wapper li {
		position:relative;	
	}
body {
	background-image: url(../images/BG7.jpg);
	background-repeat: repeat;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
	
</style>
<style type="text/ccs">
	.video-container
	{
		position:relative;
		padding-bottom:50%;
		padding-top:30px;
		height:0;
		overflow:hidden;
	}
		.vider-container iframe,
		.vider-container object,
		.vider-container embed
		{
		position:absolute;
		top:0;
		left:0;
		width:100%;
		height:100%;	
		}
.shadowH1 {text-shadow: 0 0 0.2em #113ae9, 0 0 0.2em #F87}
</style>
<style type="text/ccs">
.shadowH1 {text-shadow: 0 0 0.2em #113ae9, 0 0 0.2em #F87}
</style>
<title>..แจ้งเบาะแสยาเสพติดในหน่วยงานทหาร..</title>
</head>
<body topmargin="">

<table width="1120" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr valign="top">
    <td colspan="4">
<table width="1120" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr valign="top">
    <td colspan="4">
   	<?php 
	require_once("scriptmenu.php");
	?>   
    </td>
</table>  
 <!-- End Menu ----------------------------------->
    </td>
</table>
<table width="1120" height="450" border="1" align="center" cellpadding="0" cellspacing="0" background="../images/BG8.png">
<tr>
    <td width="870" align="center"><p><span class="shadowH1" style='font-size:20.0pt;line-height:100%'>.....ศูนย์รับแจ้งเบาะแสยาเสพติด กรมกิจการพลเรือนทหารบก..... </span></p><br>
      <form action="" method="post">
        <table width="600" border="0" cellspacing="10" cellpadding="0" bgcolor="#6699FF">  

      <tr>
        <td width="150" align="right">ชื่อผู้แจ้ง:</td>
        <td width="400"><input type="text" name="reporter_name" id="reporter_name" size="25">
        *</td>
      </tr>
      <tr>
        <td width="150" align="right">ข้อมูลติดต่อกลับ:</td>
        <td width="400"><input type="text" name="contact_reporter" id="contact_reporter" size="25"></td>
      </tr>
      <tr>
        <td width="150" align="right">รายละเอียดที่ต้องการแจ้ง:</td>
        <td width="400"><textarea name="drugreport" cols="50" id="drugreport"></textarea></td>
      </tr>
      <tr>
        <td colspan="2" align="center">
        <input type="submit" name="submit" style="width:100px; height:50px;" value="ส่งข้อมูล">
        </td>
        </tr>
    </table>
</form>
<?php

		require_once("callconnection.php");
		
		if($_POST)
		{
							
			$strSQL = "INSERT INTO drug_report";
			$strSQL .="(dr_details,dr_source,dr_contact)";
			$strSQL .="VALUES";
			$strSQL .="('".$_POST["drugreport"]."','".$_POST["reporter_name"]."','".$_POST["contact_reporter"]."')";
			$objQuery = mysql_query($strSQL);
				
			if($objQuery)
				{ // Message Box.
				  ?>
	  				<script language="javascript">alert("..กรมกิจการพลเรือนขอขอบคุณสำหรับการแจ้งข่าวสาร.."); location.href="?";</script>
				  <?
	 			} 
	  
		}
?>
  </td>
</tr>  
</table>
</body>
</html>