<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
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
.style16 {font-size: 16pt; font-weight: bold; font-family: "TH SarabunPSK", sans-serif; }
.style18 {font-size: 18pt; font-weight: bold; font-family: "TH SarabunPSK", sans-serif; }
.style22 {font-size: 22pt; font-weight: bold; font-family: "TH SarabunPSK", sans-serif; }
body {
	background-image: url(..images/BG7.jpg);
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

<title>ระบบทะเบียน รับส่ง</title>
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


<?php
$thai_day_arr=array("อาทิตย์","จันทร์","อังคาร","พุธ","พฤหัสบดี","ศุกร์","เสาร์");   
$thai_month_arr=array(   
    "0"=>"",   
    "1"=>"มกราคม",   
    "2"=>"กุมภาพันธ์",   
    "3"=>"มีนาคม",   
    "4"=>"เมษายน",   
    "5"=>"พฤษภาคม",   
    "6"=>"มิถุนายน",    
    "7"=>"กรกฎาคม",   
    "8"=>"สิงหาคม",   
    "9"=>"กันยายน",   
    "10"=>"ตุลาคม",   
    "11"=>"พฤศจิกายน",   
    "12"=>"ธันวาคม"                    
);   
$thai_month_arr_short=array(   
    "0"=>"",   
    "1"=>"ม.ค.",   
    "2"=>"ก.พ.",   
    "3"=>"มี.ค.",   
    "4"=>"เม.ย.",   
    "5"=>"พ.ค.",   
    "6"=>"มิ.ย.",    
    "7"=>"ก.ค.",   
    "8"=>"ส.ค.",   
    "9"=>"ก.ย.",   
    "10"=>"ต.ค.",   
    "11"=>"พ.ย.",   
    "12"=>"ธ.ค."                    
);   
function thai_date_and_time($time){   // 19 ธันวาคม 2556 เวลา 10:10:43
    global $thai_day_arr,$thai_month_arr;   
    $thai_date_return.=date("j",$time);   
    $thai_date_return.=" ".$thai_month_arr[date("n",$time)];   
    $thai_date_return.= " ".(date("Y",$time)+543);   
    $thai_date_return.= " เวลา ".date("H:i:s",$time);
    return $thai_date_return;   
} 
function thai_date_and_time_short($time){   // 19  ธ.ค. 2556 10:10:4
    global $thai_day_arr,$thai_month_arr_short;   
    $thai_date_return.=date("j",$time);   
    $thai_date_return.="&nbsp;&nbsp;".$thai_month_arr_short[date("n",$time)];   
    $thai_date_return.= " ".(date("Y",$time)+543);   
    $thai_date_return.= " ".date("H:i:s",$time);
    return $thai_date_return;   
} 
function thai_date_short($time){   // 19  ธ.ค. 2556
    global $thai_day_arr,$thai_month_arr_short;   
    $thai_date_return.=date("j",$time);   
    $thai_date_return.="&nbsp;&nbsp;".$thai_month_arr_short[date("n",$time)];   
    $thai_date_return.= " ".(date("Y",$time)+543);   
    return $thai_date_return;   
} 
function thai_date_fullmonth($time){   // 19 ธันวาคม 2556
    global $thai_day_arr,$thai_month_arr;   
    $thai_date_return.=date("j",$time);   
    $thai_date_return.=" ".$thai_month_arr[date("n",$time)];   
    $thai_date_return.= " ".(date("Y",$time)+543);   
    return $thai_date_return;   
} 
function thai_date_short_number($time){   // 19-12-56
    global $thai_day_arr,$thai_month_arr;   
    $thai_date_return.=date("d",$time);   
    $thai_date_return.="-".date("m",$time);   
    $thai_date_return.= "-".substr((date("Y",$time)+543),-2);   
    return $thai_date_return;   
} 
?>
<br />
<?=time()?><br />
<?=thai_date_and_time(time())?><br />
<?=thai_date_and_time_short(time())?><br />
<?=thai_date_short(time())?><br />
<?=thai_date_fullmonth(time())?><br />
<?=thai_date_short_number(time())?><br />
 
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
        <a class="css_menu<?=active_menu("/send.php?menu=1",1)?>" href="receive.php"><span class="style22">ทะเบียนรับ</span></a> 
        <a class="css_menu<?=active_menu("/send.php?menu=2")?>" href="send.php"><span class="style22">ทะเบียนส่ง</span></a>
        <br />
            <div align="right">
                <a href="#" onClick="window.open('receive-add.php','','width=650,height=400'); return false;" title="Add receive"> 
                    <img src="/images/btn-new.png" width="75" height="75"/>
                </a>
            </div>
<table id="myTable" class="tablesorter"> 
<thead> 
<tr> 
    <th width="150"><span class="style18">วันที่รับ</span></th> 
    <th width="100"><span class="style18">เลขที่หนังสือ</span></th> 
    <th width="75"><span class="style18">ลงวันที่</span></th> 
    <th width="50"><span class="style18">จาก</span></th> 
    <th><span class="style18">เรื่อง</span></th> 
    <th width="100"><span class="style18">การปฏิบัติ</span></th> 
    <th width="100"><span class="style18">หมายเหตุ</span></th> 
</tr> 
</thead> 
<tbody> 
		<?php
            function DateThai($strDate)
            {
                $strYear = date("Y",strtotime($strDate))+543;
                $strMonth= date("n",strtotime($strDate));
                $strDay= date("j",strtotime($strDate));
                $strHour= date("H",strtotime($strDate));
                $strMinute= date("i",strtotime($strDate));
                $strSeconds= date("s",strtotime($strDate));
                $strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
                $strMonthThai=$strMonthCut[$strMonth];
                return "$strDay $strMonthThai $strYear, $strHour:$strMinute";
            }
        ?>
        <?php 
		require_once("callconnection.php");
		
			
			  $strSQL = "SELECT * FROM record_receive WHERE receive_id != '' order by receive_id desc";
			  $objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
			  $total=mysql_num_rows($objQuery);

				if($total>0)
				{
				$count;
				while ($objResult=mysql_fetch_array($objQuery))
				$strDate = $objResult["receive_date"];
					{
					echo '<tr>'; 
						echo '<td>'; echo '<span class="style16">'; echo DateThai($strDate); echo '</span>'; echo '</td>';
						echo '<td>'; echo '<span class="style16">'; echo $objResult["receive_number"]; echo '</span>'; echo '</td>';
						echo '<td>'; echo '<span class="style16">'; echo $objResult["receive_recdate"]; echo '</span>'; echo '</td>'; 
						echo '<td>'; echo '<span class="style16">'; echo $objResult["receive_from"]; echo '</span>'; echo '</td>'; 
						echo '<td>'; echo '<span class="style16">'; echo $objResult["receive_topic"]; echo '</span>'; echo '</td>'; 
						echo '<td>'; echo '<span class="style16">'; echo $objResult["receive_action"]; echo '</span>'; echo '</td>';
						echo '<td>'; echo '<span class="style16">'; echo $objResult["receive_remark"]; echo '</span>'; echo '</td>';
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