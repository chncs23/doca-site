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
<link rel="stylesheet" type="text/css" href="css/dropmenu.css" />

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


<!-- ------------------------------------------------------Tab Menu-->
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

<title>ประชารัฐ</title>
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
	<td><img src="/images/banner-pracharat.png" width="1120" height="100%"/></td>
</tr>
</table>

<table width="1120" border="0" align="center" cellpadding="0" cellspacing="10">
<tr>
  <td width="250" height="300" align="center" valign="top" background="/images/baseBG.png">
    <img src="/images/banner-pracharat250.png" width="250" /><br />
    <p>
   <iframe width="250" height="150" src="https://www.youtube.com/embed/083PDJXqOfM" frameborder="0" allowfullscreen></iframe>
   <p>
    <iframe width="250" height="150" src="https://www.youtube.com/embed/biIgriFpjbs" frameborder="0" allowfullscreen></iframe>
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
      <a class="css_menu<?=active_menu("/labdownload2.php?menu=1",1)?>" href="">ข่าวสาร</a>
     <p>
    <iframe width="850" height="480" src="https://www.youtube.com/embed/uoKF3tNyfKw?list=PLNgxVZwie3t-x9KEm6OrFDdUPWvKix7vx" frameborder="0" allowfullscreen></iframe>
    <span class="style18">***คำแนะนำการใช้งาน*** </span></p>
     <p><span class="style18">กด <img src="/images/Iconplaylist.png" alt="" /> เพื่อแสดงรายการทั้งหมด</span></p>
    <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 850px;
        height: 400px; background: #191919; overflow: hidden;" >
      <!-- Loading Screen -->
      <div u="loading" style="position: absolute; top: 0px; left: 0px;">
        <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;"></div>
        <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;"></div>
      </div>
      <!-- Slides Container -->
      <div u="slides" style="cursor: move; position: absolute; left: 240px; top: 0px; width: 610px; height: 400px; overflow: hidden;">
        <?php  // Script แสดง Gallery ภาพ
		require_once("callconnection.php");

			  $strSQL = "SELECT * FROM image WHERE act_id like '10001'";
			  $objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
			  $total=mysql_num_rows($objQuery);

				if($total>0)
				{
				$count;
				while ($objResult=mysql_fetch_array($objQuery))
					{
						echo '<div>';
						echo '<img u="image" src="'.$objResult["image_path"].'" />';
						echo '<img u="thumb" src="'.$objResult["image_path"].'" />';
						echo '</div>';
					}
					$count+=1;
				}
?>
      </div>
      <style>

            .jssora05l, .jssora05r {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: 40px;
                height: 40px;
                cursor: pointer;
                background: url(../img/a17.png) no-repeat;
                overflow: hidden;
            }
            .jssora05l { background-position: -10px -40px; }
            .jssora05r { background-position: -70px -40px; }
            .jssora05l:hover { background-position: -130px -40px; }
            .jssora05r:hover { background-position: -190px -40px; }
            .jssora05l.jssora05ldn { background-position: -250px -40px; }
            .jssora05r.jssora05rdn { background-position: -310px -40px; }
        </style>
      <!-- Arrow Left -->
      <span u="arrowleft" class="jssora05l" style="top: 158px; left: 248px;"> </span>
      <!-- Arrow Right -->
      <span u="arrowright" class="jssora05r" style="top: 158px; right: 8px"> </span>
      <!--#endregion Arrow Navigator Skin End -->
      <style>
            .jssort02 {
                position: absolute;
                /* size of thumbnail navigator container */
                width: 240px;
                height: 400px;
            }

                .jssort02 .p {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 99px;
                    height: 66px;
                }

                .jssort02 .t {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    border: none;
                }

                .jssort02 .w {
                    position: absolute;
                    top: 0px;
                    left: 0px;
                    width: 100%;
                    height: 100%;
                }

                .jssort02 .c {
                    position: absolute;
                    top: 0px;
                    left: 0px;
                    width: 95px;
                    height: 62px;
                    border: #000 2px solid;
                    box-sizing: content-box;
                    background: url(../img/t01.png) -800px -800px no-repeat;
                    _background: none;
                }

                .jssort02 .pav .c {
                    top: 2px;
                    _top: 0px;
                    left: 2px;
                    _left: 0px;
                    width: 95px;
                    height: 62px;
                    border: #000 0px solid;
                    _border: #fff 2px solid;
                    background-position: 50% 50%;
                }

                .jssort02 .p:hover .c {
                    top: 0px;
                    left: 0px;
                    width: 97px;
                    height: 64px;
                    border: #fff 1px solid;
                    background-position: 50% 50%;
                }

                .jssort02 .p.pdn .c {
                    background-position: 50% 50%;
                    width: 95px;
                    height: 62px;
                    border: #000 2px solid;
                }

                * html .jssort02 .c, * html .jssort02 .pdn .c, * html .jssort02 .pav .c {
                    /* ie quirks mode adjust */
                    width /**/: 99px;
                    height /**/: 66px;
                }
        </style>
      <!-- thumbnail navigator container -->
      <div u="thumbnavigator" class="jssort02" style="left: 0px; bottom: 0px;">
        <!-- Thumbnail Item Skin Begin -->
        <div u="slides" style="cursor: default;">
          <div u="prototype" class="p">
            <div class="w">
              <div u="thumbnailtemplate" class="t"></div>
            </div>
            <div class="c"></div>
          </div>
        </div>
        <!-- Thumbnail Item Skin End -->
      </div>
      <!--#endregion Thumbnail Navigator Skin End -->
      <a style="display: none" href="http://www.jssor.com">Bootstrap Slider</a></div>
    <p>&nbsp;</p>
    <p><br />
    </p>
    <div align="left"></div>
  </td>
  </tr>
</table>

</body>
</html>
