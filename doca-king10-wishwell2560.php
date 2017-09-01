<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" type="text/css" href="css/layout.css" />
<link rel="stylesheet" type="text/css" href="css/style2.css" />
<link rel="stylesheet" type="text/css" href="css/dropmenu.css" />

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
  <td align="left" valign="top" background="images/baseBG.png"><p>&nbsp;</p>
    <p><img src="images/doca-king10-wishwell2560/rama10.png"></p>
    <p><span class="style18">สมเด็จพระเจ้าอยู่หัวมหาวชิราลงกรณ บดินทรเทพยวรางกูร</span></p>
    <p><span class="style18">พระราชทานพรปีใหม่แก่ประชาชนชาวไทย ในโอกาสขึ้นปีใหม่ พุทธศักราช 2560</span></p>
    <p><iframe width="560" height="315" src="https://www.youtube.com/embed/F2Hrc0f1bdM" frameborder="0" allowfullscreen></iframe></p>
    <p><span class="style16">&quot;ประชาชนชาวไทยทั้งหลาย บัดนี้ ถึงวาระจะขึ้นปีใหม่ ข้าพเจ้าขอส่งความปรารถนาดีเพื่ออำนวยพรแด่ท่านทั้งหลายทั่วกัน </span></p>
    <p><span class="style16">และขอขอบใจท่านเป็นอย่างมาก ที่มีไมตรีจิตสนับสนุนข้าพเจ้าในภารกิจทุกอย่างเสมอมา
    ในปีที่แล้ว บ้านเมืองของเรามีเหตุการณ์สำคัญเกิดขึ้น </span></p>
    <p><span class="style16">คือ พระบาทสมเด็จพระปรมินทรมหาภูมิพลอดุลยเดช บรมนาถบพิตร เสด็จสวรรคต เมื่อเดือนตุลาคม </span></p>
    <p><span class="style16">กล่าวได้ว่านำความโศกเศร้าอาดูร และนับเป็นความสูญเสียครั้งยิ่งใหญ่ของชาวไทยทั้งประเทศ </span></p>
    <p><span class="style16">ข้าพเจ้ารู้สึกตื้นตันและประทับใจที่ได้เห็นประชาชนทุกเพศ ทุกวัย ถ้วนหน้า มีจิตจงรักภักดี และซาบซึ้งในพระมหากรุณาธิคุณ </span></p>
    <p><span class="style16">พรั่งพร้อมกันมาถวายสักการะพระบรมศพอย่างต่อเนื่อง
      ขอขอบใจทุกท่านที่ร่วมมือ ร่วมใจ ช่วยงานพระบรมศพอย่างพร้อมเพรียง </span></p>
    <p><span class="style16">ทำให้ทุกสิ่ง ทุกอย่าง เป็นไปด้วยความเรียบร้อย ข้อนี้น่าจะเป็นเครื่องยืนยันได้ว่า คนไทยนั้นมีจิตใจดี มีความกตัญญูกตเวที มีความเอื้ออารีต่อกัน </span></p>
    <p><span class="style16">มีความรักชาติ รักแผ่นดิน เป็นคุณสมบัติประจำชาติ และมีความรู้ ความสามารถ ไม่แพ้ชนชาติอื่นใด </span></p>
    <p><span class="style16">ดังนั้น ไม่ว่าจะมีอุปสรรค ปัญหา หรือเหตุไม่ปรกติใดๆ เกิดขึ้นในบ้านเมืองของเรา ก็เชื่อได้ว่า ถ้าเราจะร่วมกันคิดอ่าน </span></p>
    <p><span class="style16">และช่วยกันปฏิบัติแก้ไข ทุกสิ่ง ทุกอย่าง จะสามารถคลี่คลายลุล่วงไปได้ด้วยดีอย่างแน่นอน
      ในปีใหม่นี้ </span></p>
    <p><span class="style16">ขอให้ชาวไทยทุกคนตั้งใจให้แน่วแน่ที่จะรักษาคุณสมบัตินี้ให้เหนียวแน่น และทำความคิด จิตใจ ให้แจ่มใส ด้วยปัญญาที่กระจ่าง </span></p>
    <p><span class="style16">พิจารณาทุกสิ่งที่เกิดมีขึ้นตามความเป็นจริง โดยปราศจากอคติ ให้มีความมุ่งมั่น มีกำลังใจ ในอันที่จะร่วมกันปฏิบัติสรรพกิจน้อยใหญ่ในภาระหน้าที่</span></p>
    <p><span class="style16"> ตามแนวพระบรมราโชบายที่พระบาทสมเด็จพระปรมินทรมหาภูมิพลอดุลยเดช บรมนาถบพิตร ได้พระราชทานไว้ </span></p>
    <p><span class="style16">ให้งานทุกอย่างสำเร็จผล เป็นความดี ความเจริญ ทั้งแก่ตนเอง แก่ส่วนรวม และประเทศชาติ เป็นการรำลึกถึงพระมหากรุณาธิคุณ
      </span></p>
    <p><span class="style16">ในการนี้ ข้าพเจ้าขอปฏิบัติหน้าที่ร่วมกับประชาชนชาวไทยโดยเต็มกำลังความสามารถ เพื่อสืบสานพระราชปณิธานเช่นกัน</span></p>
    <p><span class="style16"> ขออานุภาพแห่งคุณพระศรีรัตนตรัยและสิ่งศักดิ์สิทธิ์อันเป็นที่เคารพเลื่อมใสของชาวไทย อีกทั้งพระบารมีแห่งสมเด็จพระมหากษัตริย์ไทยในอดีต</span></p>
    <p><span class="style16"> มีพระบาทสมเด็จพระปรมินทรมหาภูมิพลอดุลยเดช บรมนาถบพิตร เป็นอาทิ จงคุ้มครอง รักษาท่านทุกคน ให้ปราศจากทุกข์ ปราศจากภัย ให้มีความสุขกาย สุขใจ</span></p>
    <p><span class="style16"> และประสบแต่สิ่งที่พึงปรารถนาตลอดศกหน้านี้ โดยทั่วกัน &quot; </span></p>
    <p><span class="style16">ทั้งนี้ สมเด็จพระเจ้าอยู่หัว พระราชทานบัตรอวยพรปีพุทธศักราช 2560</span></p>
    <p><img src="images/doca-king10-wishwell2560/kingcard_2560-1.jpg"></p>
    <p><span class="style16">ด้านหน้าของบัตรอวยพรพระราชทาน มีตราประจำพระราชวงศ์จักรีอยู่ตรงกลาง ด้านล่าง เป็นพระปรมาภิไธย ภ.ป.ร. และพระนามาภิไธย ส.ก.</span></p>
    <p><img src="images/doca-king10-wishwell2560/kingcard_2560-2.jpg"></p>
    <p><span class="style16">ภายในบัตรอวยพร ทางซ้ายมีข้อความ B.E.2560 (2017)  Seasons Greetings and Best Wishes for the New Year</span></p>
<p><span class="style16">จากนั้นเป็นลายพระหัตถ์พระปรมาภิไธยสมเด็จพระเจ้าอยู่หัว ที่ด้านล่างของบัตรอวยพร มีข้อความ Her Majesty Queen Sirikit and the Royal Family of Thailand</span></p>
    <p><span class="style16">ทางด้านขวาของบัตรอวยพร มีพระปรมาภิไธย ภ.ป.ร. อยู่ด้านบน ตรงกลางภาพ ขนาบด้วยพระนามาภิไธย ส.ก. และพระปรมาภิไธย ว.ป.ร.</span></p>
    <p><span class="style16">ด้านล่าง เป็นพระบรมฉายาลักษณ์ พระบาทสมเด็จพระปรมินทรมหาภูมิพลอดุลยเดช ทรงฉายคู่กับสมเด็จพระนางเจ้าสิริกิติ์ พระบรมราชินีนาถ </span></p>
    <p><span class="style16">ในพระบาทสมเด็จพระปรมินทรมหาภูมิพลอดุลยเดช อยู่ในกรอบวงกลม</span></p>
    <p><span class="style16">ด้านล่างพระบรมฉายาลักษณ์ของทั้งสองพระองค์ เป็นพระบรมฉายาลักษณ์ของสมเด็จพระเจ้าอยู่หัว พระฉายาลักษณ์สมเด็จพระเทพรัตนราชสุดาฯ สยามบรมราชกุมารี</span></p>
    <p><span class="style16">พระรูปสมเด็จพระเจ้าลูกเธอเจ้าฟ้าจุฬาภรณวลัยลักษณ์อัครราชกุมารี และพระรูปทูลกระหม่อมหญิงอุบลรัตนราชกัญญา สิริวัฒนาพรรณวดี</span></p>
    <p><br />
    </p></td>
    
</tr>
</table>

</body>
</html>