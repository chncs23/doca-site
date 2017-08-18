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
<link href="themes/blue/style.css" rel="stylesheet" type="text/css">
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

<title>..แก้ไขกิจกรรม..</title>
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
  <td align="left" valign="top" background="images/baseBG.png"><p><span class="style18">หน้าแก้ไขข่าวกิจกรรม</span></p>
  <div align="right">
   <a href="#" onClick="window.open('topic-add.php','','width=1366,height=650'); return false;" title="Add fft"> 
   <img src="/images/btn-new.png" width="75" height="75"/>
   </a>
   </div>
   </div>
            
        <table id="myTable" class="tablesorter"> 
        <thead> 
        <tr> 
            <th width="50"><span class="style18">รหัส</span></th> 
            <th width="100"><span class="style18">วันที่</span></th> 
            <th width=""><span class="style18">หัวข้อข่าว</span></th> 
            <th width="50"><span class="style18">สถานะ</span></th> 
            <th width="50"><span class="style18">แก้ไข</span></th>
            <th width="50"><span class="style18">ลบ</span></th>
        
        </tr> 
        </thead> 
        <tbody> 
                <?php 
                require_once("callconnection.php");
                    
                      $strSQL = "SELECT * FROM activity WHERE act_id != '' order by act_id desc LIMIT 20";
                      $objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
        ?>
        <?
                    while($objResult = mysql_fetch_array($objQuery))  
                    {
                                    $act_id 	 = $objResult['act_id'];
									$act_date 	 = $objResult['act_date'];
                                    $act_topic = $objResult['act_topic'];
                                    $act_status  = $objResult['act_enable'];
        //<input name="fftdetails" type="text" value="" size="100" maxlength="100">
                                    
        ?>		
        
                    <tr >
                        <td ><span class="style16"><?=$act_id?></span></td>
                        <td ><span class="style16"><?=$act_date?></span></td>
                        <td ><span class="style16"><?=$act_topic?></span></td>
                        <td ><span class="style16"><?=$act_status?></span></td>
                        <td ><span class="style16">
                        <a href="topic-edit.php?Sendid=<?=$act_id?>" onClick="window.open('topic-edit.php?Sendid=<?=$act_id?>','','width=1366,height=650'); return false;" title="Add receive">แก้ไข</a></span></td>
                        <td>
                        <span class="style16">
                        
         <!-- แบบที่ 1 คลิกคำว่า ลบ แล้ว ไปหน้า delete-->    
                        <a href="topic-delete.php?Sendid=<?=$act_id?>" onClick="window.open('topic-delete.php?Sendid=<?=$act_id?>','','width=250,height=150'); return false;" title="confirm delete">delete
                        </a>             
        <!-- แบบที่ 2 คลิกปุ่ม แล้วมียืนยัน คืนหน้าเดิม-->  
         
                        <!--<script type="text/javascript">
                          function ConfirmDelete()
                          {
                                if (confirm("Delete Account?"))
                                     location.href='fft-delete.php?Sendid=<?php /*?><?=$FFT_id?><?php */?>';
                          }
                         </script>
                        <input type="button" onclick="ConfirmDelete()" value="delete">';-->
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