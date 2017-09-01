<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" type="text/css" href="css/layout.css" />
<link rel="stylesheet" type="text/css" href="css/style2.css" />
<link rel="stylesheet" type="text/css" href="css/dropmenu.css" />
      
</script>  
<!-- Script Silde Image-->   
<script language="javascript" type="text/javascript" src="js/jquery.js"></script>
<script language="javascript" type="text/javascript" src="js/jquery.easing.js"></script>
<script language="javascript" type="text/javascript" src="js/script.js"></script>
<style>	
	ul.lof-main-wapper li {
		position:relative;	
	}
	.style18 {font-size: 16pt; font-weight: ; font-family: "TH SarabunPSK", sans-serif; }
	.style22 {font-size: 20pt; font-weight: bold; font-family: "TH SarabunPSK", sans-serif; }
body {
	background-image: url(../images/BG7.jpg);
	background-repeat: repeat;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}

</style>

<style>
	#content{
	display:none
	}
	</style>
	<script type="text/javascript" src="jquery-1.9.1.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
	$('#link').click(function(){
	$('#content').slideToggle(200);
	});
	});
	</script>
  <!-- ------------------------------------------------------test Menu--> 
<style type="text/css">  
/* เมนูปกติ */  
.css_menu{  
    position:relative;  
    display:block;  
    float:left;  
    width:200px;  
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
    width:200px;  
    height:25px;  
    background-color:#CCC;  
    color:#000;   
}  
/*  เมนูเมื่อ active*/  
.css_menu_active{  
    position:relative;  
    display:block;  
    float:left;  
    width:200px;  
    height:25px;  
    background-color:#CCC;  
    color:#000;   
    text-align:center;  
    text-decoration: underline;  
    line-height:25px;  
    margin-right:2px;  
} 
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
</style>

<title>..ผลงานประกวดคลิบวีดีโอสั้นฯ 58..</title>
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
<table border="0" align="center" cellpadding="0" cellspacing="0" >
<tr>
	<td><img src="/images/doca_king's_header.png" width="1120" height="120"></td>
</tr>
</table>
<table width="1120" border="0" align="center" cellpadding="0" cellspacing="10">
  <tr>
  <td width="250" height="300" align="center" valign="top" background="/images/baseBG.png"><p>  
    <p><span class="style18"><a href="http://doca.rta.mi.th/doca_king.php">สารคดีเทิดพระเกียรติ "บันทึกงานของในหลวง - 32 ตอน"</a></span>    
    <p><span class="style18"><img src="/images/seperater1.png" alt="" width="150" height="10" /></span>    
      <p><span class="style18"><a href="http://doca.rta.mi.th/doca_king-clipvdo59.php">ผลงานประกวดคลิบวีดีโอสั้น และ Infographic เทิดทูนพระบาทสมเด็จพระเจ้าอยู่หัว ประจำปี 2558</a></span>
       <p><span class="style18"><img src="/images/seperater1.png" alt="" width="150" height="10" /></span>    
    <p><span class="style18"><a href="http://doca.rta.mi.th/doca_king-100yr-sansern.php">สรรเสริญพระบารมี ๑๐๐ ปีร่วมร้อยใจไทย</a></span>    
    <p><span class="style18"><img src="/images/seperater1.png" alt="" width="150" height="10" /></span>
    <p><span class="style18"><a href="http://doca.rta.mi.th/doca_king-song.php">บทเพลงเทิดพระเกียรติ</a></span></p>
    <p>    
    </td>
  <td align="left" valign="top" background="/images/baseBG.png">
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
    <a class="css_menu<?=active_menu("/dep_it.php?menu=1",1)?>" href="doca_king-clipvdo59.php">ผลงานประกวดคลิบวีดีโอสั้น</a>
    <a class="css_menu<?=active_menu("/dep_it.php?menu=2")?>" href="doca_king-infographic59.php">ผลงานประกวด Infographic</a>  
    <br>
    <p class="style22"> ผลงานประกวดคลิบวีดีโอสั้นเทิดพระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัวอันดับที่ 1  </p>
    <p class="style22"><span class="style18">ชื่อผลงาน </span>&quot; King of King &quot;</p>
    <p class="style18">โดย ร.ต. จีระวัฒน์ วงษ์จันทร์นา สังกัด กสท.กร.ทบ.</p>
	<iframe width="850" height="480" src="https://www.youtube.com/embed/QufTRutdQkc" frameborder="0" allowfullscreen></iframe>
    <br>
    <p class="style22"> ผลงานประกวดคลิบวีดีโอสั้นเทิดพระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัวอันดับที่ 2  </p>
    <p class="style22"><span class="style18">ชื่อผลงาน </span>&quot; My King &quot;</p>
    <p class="style18">โดย จ.ส.อ.ธีรเทพ   พวงเงิน สังกัด สทบ.</p>
	<iframe width="850" height="480" src="https://www.youtube.com/embed/bwYWqZ1-WDM" frameborder="0" allowfullscreen></iframe>
    <br>
    <p class="style22"> ผลงานประกวดคลิบวีดีโอสั้นเทิดพระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัวอันดับที่ 3  </p>
    <p class="style22"><span class="style18">ชื่อผลงาน </span>&quot; เทิดทูนพระบาทสมเด็จพระเจ้าอยู่หัว &quot;</p>
    <p class="style18">โดย นางสาวฉัตรระวี แสงทวีสุข  สังกัด รร.กร.กร.ทบ. </p>
	<iframe width="850" height="480" src="https://www.youtube.com/embed/9aFFR5TzKB8" frameborder="0" allowfullscreen></iframe>

  </td>
  </tr>
</table>

</body>
</html>