<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" type="text/css" href="css/layout.css" />
<link rel="stylesheet" type="text/css" href="css/style2.css" />
<link rel="stylesheet" type="text/css" href="css/dropmenu.css" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">   
<!-- Script Silde Image-->
<script language="javascript" type="text/javascript" src="js/jquery.js"></script>
<script language="javascript" type="text/javascript" src="js/jquery.easing.js"></script>
<script language="javascript" type="text/javascript" src="js/script.js"></script>
<style>
	ul.lof-main-wapper li {
		position:relative;
	}
	.style18 {font-size: 16pt; font-weight: ; font-family: "TH SarabunPSK", sans-serif; }
.style22 {font-size: 24pt; font-weight: bold; font-family: "TH SarabunPSK", sans-serif; }
body {
	background-image: url(../images/BG7.jpg);
	background-repeat: repeat;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}


</style>


  <!-- ------------------------------------------------------test Menu-->
<style type="text/css">
/* เมนูปกติ */
.css_menu{
    position:relative;
    display:block;
    float:left;
    width:100px;
    height:25px;
    background-color:#333;
    color: #FFF;
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
    width:100px;
    height:25px;
    background-color:#CCC;
    color:#000;
}
/*  เมนูเมื่อ active*/
.css_menu_active{
    position:relative;
    display:block;
    float:left;
    width:100px;
    height:25px;
    background-color:#CCC;
    color:#000;
    text-align:center;
    text-decoration:underline;
    line-height:25px;
    margin-right:2px;
}
</style>

<title>..กองนโยบายและแผน..</title>
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
  <td width="250" height="300" align="center" background="images/baseBG.png"><p><span class="style18">ผู้บังคับบัญชา</strong><br>
    <img src="images/director_planning.jpg" width="175" height="215" vspace="0" border="0" /><br>
    พ.อ.ชวลิต เอี่ยมแทน<br />
ผอ.กนผ.กร.ทบ. </span></p>
  </td>
  <td width="580" rowspan="2" align="left" valign="top" background="images/baseBG.png">
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
<a class="css_menu<?=active_menu("/dep_planning.php?menu=1",1)?>" href="dep_planning.php">กิจกรรมหน่วย</a>
<a class="css_menu<?=active_menu("/dep_planning.php?menu=2")?>" href="dep_planning_mission.php">ภารกิจหน่วย</a>
<div align="left"><img src="images/dep_planning/planning_staff.jpg" width="100%" height="100%"/></div>
   </td>
  <td width="250" rowspan="2" align="left" valign="top" background="images/baseBG.png">



  </td>
</tr>
<tr>
  <td width="250" align="left" valign="top" background="images/baseBG.png">
  	<p class="style18">Tel : 02-2801084,97570</p>
    <p class="style18">Fax :  02-2801084</p>
    <p class="style18">E-Mail : -</p>
    </td>
</tr>
</table>

</body>
</html>
