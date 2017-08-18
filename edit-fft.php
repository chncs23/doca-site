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

<title>..กองกิจการพลเรือน..</title>
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
</table>
<!-- Script Table Soter-->   
<script type="text/javascript" src="js/jquery-latest.js"></script> 
<script type="text/javascript" src="js/jquery.tablesorter.js"></script> 
<link href="themes/blue/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
	$(document).ready(function() { 
		$("#myTable").tablesorter(); 
	}); 
</script>
<table width="1120" border="0" align="center" cellpadding="0" cellspacing="10">
<tr>
  <td width="250" valign="top" background="images/baseBG.png">
		<?php require_once"scriptmenueditor.php"?>
  </td>
    
  <td align="left" valign="top" background="images/baseBG.png">
   <div align="right">
   <a href="#" onClick="window.open('fft-add.php','','width=650,height=400'); return false;" title="Add fft"> 
   <img src="/images/btn-new.png" width="75" height="75"/>
   </a>
   </div>
            
        <table id="myTable" class="tablesorter"> 
        <thead> 
        <tr> 
            <th width="50"><span class="style18">รหัส</span></th> 
            <th width=""><span class="style18">ข้อความ</span></th> 
            <th width="50"><span class="style18">สถานะ</span></th> 
            <th width="50"><span class="style18">แก้ไข</span></th>
            <th width="50"><span class="style18">ลบ</span></th>
        
        </tr> 
        </thead> 
        <tbody> 
                <?php 
                require_once("callconnection.php");
                    
                      $strSQL = "SELECT * FROM fft WHERE fft_id != '' order by fft_id desc";
                      $objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
        ?>
        <?
                    while($objResult = mysql_fetch_array($objQuery))
                    {
                                    $FFT_id 	 = $objResult['fft_id'];
                                    $FFT_details = $objResult['fft_details'];
                                    $FFT_status  = $objResult['fft_status'];
        //<input name="fftdetails" type="text" value="" size="100" maxlength="100">
                                    
        ?>		
        
                    <tr >
                        <td ><span class="style16"><?=$FFT_id?></span></td>
                        <td ><span class="style16"><?=$FFT_details?></span></td>
                        <td ><span class="style16"><?=$FFT_status?></span></td>
                        <td ><span class="style16">
                        <a href="fft-edit.php?Sendid=<?=$FFT_id?>" onClick="window.open('fft-edit.php?Sendid=<?=$FFT_id?>','','width=650,height=400'); return false;" title="Add receive">แก้ไข</a></span></td>
                        <td>
                        <span class="style16">
                        
                        <a href="fft-delete.php?Sendid=<?=$FFT_id?>" onClick="window.open('fft-delete.php?Sendid=<?=$FFT_id?>','','width=250,height=150'); return false;" title="confirm delete">delete
                        </a>             

                        </span>
                        </td>
                    </tr>
         <?			}
        ?>
         
        </tbody> 
        </table>          
            
  </td>
  </tr>
</table>

</body>
</html>