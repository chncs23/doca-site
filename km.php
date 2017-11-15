<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/layout.css" />
<link rel="stylesheet" type="text/css" href="css/style2.css" />
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">


<title>DOCA Knowledge Management</title>
</head>
<body>
  <?php include("scriptmenu.php") ?>

  <div class="container nopadding-horizontal">
    <img src="images/DocaBanner.png" width=100%/>
  </div>
  
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


</table>
<table width="1120" border="0" align="center" cellpadding="0" cellspacing="10">
<tr>
  <td width="250" height="300" align="center" valign="top" background="images/baseBG.png"><p><span class="style18"></strong>ดาวน์โหลด<br>
    <br>
    <a href="https://drive.google.com/folderview?id=0Bw_W-lJh2kjBN0hkeG0wOGUwM1E&usp=sharing" target="_blank" class="style4">คู่มือการใช้งานศูนย์กลางบริการภาครัฐสำหรับประชาชน</a>
    </span></p>
    <p><span class="style18"><a href="https://drive.google.com/folderview?id=0B4unGHFHb5xFeDRXaXhTOUxhQWc&amp;usp=sharing" target="_blank" class="style4">คู่มือการจัดการความรู้ ทบ. </a><br>
    </span></p>
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
  <a class="css_menu<?=active_menu("/dep_it.php?menu=1",1)?>" href="#">บทความน่าสนใจ</a></p>
<br />
<p>
<ul class="style3">
      <li><a href="../document/PPT_Security.pdf" target="_blank" class="style4">การสร้างความตระหนักรู้ด้านความปลอดภัยสารสนเทศ</a><img src="icon_new2.gif" alt="" width="22" height="15" border="0" /></li>
      <li><a href="../document/การจัดการความรู้ ทบ.pdf" target="_blank" class="style4">การจัดการความรู้ ทบ</a></li>
      <li><a href="../document/การอบรม การจัดการความรู้สำหรับกำลังพล กร.ทบ..pdf" target="_blank" class="style4">การอบรม การจัดการความรู้สำหรับกำลังพล กร.ทบ.</a></li>

      <li><a href="http://www.royalthaiembassy.nl/site/files/QA_final.pdf" target="_blank" class="style4">50 ประเด็นคำถาม คำตอบ กรณีประสาทพระวิหาร &nbsp;กต (สกร.ฝกร.)</a></li>
       <li><a href="http://www.senate.go.th/senate/motion_detail.php?motion_id=34" target="_blank" class="style4">นโยบายและแนวทางปฏิบัติในการเปิดจุดผ่านแดนประเภทต่างๆ (สกร.ฝกร.)</a></li>
       <li><a href="http://eeas.europa.eu/delegations/thailand/documents/thailande_eu_coop/migration_management/3_4current_migration_challenges_in_thailand_th.pdf" target="_blank" class="style4">ช่องทางต่างๆและความตกลงที่เกี่ยวข้อง ระหว่าง ไทย กับประเทศเพื่อนบ้าน &nbsp;มท. (สกร.ฝกร.)</a></li>
    </ul>
  </tr>
</p>
<div align="left"></div>
   </td>
</table>

</body>
</html>
