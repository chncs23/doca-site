<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/layout.css" />
<link rel="stylesheet" type="text/css" href="css/style2.css" />
<link rel="stylesheet" type="text/css" href="css/dropmenu.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
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

<!-- Script Silde Image-->
<script language="javascript" type="text/javascript" src="js/jquery.js"></script>
<script language="javascript" type="text/javascript" src="js/jquery.easing.js"></script>  <!--JS for Slide Image -->
<script language="javascript" type="text/javascript" src="js/script.js"></script>
<script type="text/javascript">
 $(document).ready( function(){
		var buttons = { previous:$('#jslidernews2 .button-previous') ,
						next:$('#jslidernews2 .button-next') };
		$('#jslidernews2').lofJSidernews( { interval:5000,
											 	easing:'easeInOutQuad',
												duration:1200,
												auto:true,
												mainWidth:870,
												mainHeight:300,
												navigatorHeight		: 60,
												navigatorWidth		: 250,
												maxItemDisplay:5,
												buttons:buttons } );
	});

</script>

<style>

	ul.lof-main-wapper li {
		position:relative;
	}
	.style18 {font-size: 16pt; font-weight: ; font-family: "TH SarabunPSK", sans-serif; }

body {
	background-image: url(images/BG8.png);
	background-repeat: repeat;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;

}

p.left {
  text-align: left;
}

p.center {
  text-align: center;
}


/*Class Fix Header, Footer*/
 .pageheader
       {
          width:100%;
          height:50px;
          background-color:#282828;
          position:fixed;
          top:0;
          z-index:99;
       }
      .pagefooter
      {
          width:100%;
          height:50px;
          background-color:#282828;
          position:fixed;
          bottom:0;
       }
</style>

<title>กรมกิจการพลเรือนทหารบก</title>

</head>
<body topmargin="" onLoad="goforit()">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<body>
<table width="1120" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr valign="top">
    <td colspan="4">
  <?php
	require_once("scriptmenu.php");
	?>
 <!-- End Menu ----------------------------------->
    </td>
</table>

<table width="1120" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="150" colspan="4"><img src="images/DocaBanner.png" width="1120" height="150" border="0" /></td>
  </tr>

  <tr>
  	<!-- Left Panel-->
    <td width="250" rowspan="2" height="300" valign="center">
    <div align="center">
    <a href="http://doca.rta.mi.th/doca_king.php" target="_blank"><img src="images/king10.jpg" width="250" height="320" border="0" /></a>
    </div>
    </td>
	<!-- Center Panel-->
	<!-- <td width="200" bordercolor="#666666" bgcolor="#CCCCCC" align="left">Hotnews :</td> -->
    <td width="100" height="10" align="center" background="images/hotnews_100x10.jpg"><span class="shadow">Hotnews >></span></td>

	<td width="770" height="10" colspan="2" background="images/hotnews_770x10.jpg">
<!---- Free Text script ----->
<marquee  behavior="scroll" direction="left" scrollamount="10" class="style1" onmouseover="this.stop();" onmouseout="this.start();">
    <span class="shadow">
<?php
	require_once("callconnectionimproved.php");

			  $strSQL = "SELECT * FROM fft WHERE fft_id != '' and fft_status ='y' order by fft_id desc";
			  $objQuery = mysqli_query($conn, $strSQL) or die ("Error Query [".$strSQL."]");
			  $total=mysqli_num_rows($objQuery);

				if($total>0)
				{
				$count=0;
				while ($objResult=mysqli_fetch_array($objQuery))
					{
					echo $objResult["fft_details"];
					}
					$count+=1;
				}
 ?>
    </span>
</marquee>
    </td>
  </tr>
  <tr>
  <td height="300" colspan="3" bgcolor="#999999" valign="top"> <!-- Free Txt Feed Panel-->
  <!------------------------------------- Main Feed content ------------------------------------------------->

<div id="jslidernews2" class="lof-slidecontent" style="width:870px; height:300px;">
  <div  class="button-previous"></div>

 <?php
 // Query News Feeds Image
require_once("callconnectionimproved.php");

	$strSQL = "SELECT * FROM activity WHERE act_id !='' and act_enable ='y' order by act_id desc";
	$objQuery = mysqli_query($conn, $strSQL) or die ("Error Query [".$strSQL."]");
	$total=mysqli_num_rows($objQuery);

		  echo '<div class="main-slider-content" style="width:870px; height:300px;" align="left">';
			echo '<ul class="sliders-wrap-inner">';
			if($total>0)
				{
				$count=0;
				while ($objResult=mysqli_fetch_array($objQuery))
					{
					echo '<li>';
					echo '<img src="/doca/'.$objResult["act_imagetitle"].'">';
					echo '</li>';
					}
					$count+=1;
				}
			echo '</ul>';
		  echo '</div>';
// Query News Feeds  Navigator
		  echo '<div class="navigator-content">';
			echo '<div class="navigator-wrapper">';
				echo '<ul class="navigator-wrap-inner">';

					require_once("callconnectionimproved.php");

					$strSQL = "SELECT * FROM activity WHERE act_id !=''and act_enable ='y' order by act_id desc";
					$objQuery = mysqli_query($conn, $strSQL) or die ("Error Query [".$strSQL."]");
					$total=mysqli_num_rows($objQuery);

					if($total>0)
					{
					$count;
					while ($objResult=mysqli_fetch_array($objQuery))
						{
						echo '<li>'.'<div class="shadow">';
						echo $objResult["act_topic"];
						echo '</div>'.'</li>';
						}
						$count+=1;
					}
				echo '</ul>';
			echo '</div>';
		  echo '</div>';
?>
<!----------------- End Navigator --------------------->
<div class="button-next"></div>
<!-- Btn Start/Stop ------>
<div class="button-control"><span></span></div>
<!-- END Btn Start/Stop -->
</div>
    </td>
<!----------------- End Main Feed content ------------->
  </tr>

 </table>


<table width="1120" border="0" align="center" cellpadding="0" cellspacing="0">
<tr valign="top" >
    <td width="250" height="300" align="center" background="images/baseBG.png">
    <div align="center">

      <?php
      require_once("callconnectionimproved.php");
      $strLeftMenuSQL = "SELECT * FROM custom_menu WHERE menu_id != '' and menu_status ='y' order by menu_id ASC";
      $objLeftMenuQuery = mysqli_query($conn, $strLeftMenuSQL) or die ("Error Query [".$strImgSQL."]");
      while($objLeftMenuResult = mysqli_fetch_assoc($objLeftMenuQuery)) {?>
        <a href='<?php echo $objLeftMenuResult['menu_url']; ?>' target="_blank"><img src='<?php echo $objLeftMenuResult['menu_img'];?>' vspace="0" border="0"  alt='<?php echo $objLeftMenuResult['menu_description'];?>'/></a><br>
      <?php } ?>

      <p class="center">หน่วยงานอื่น ๆ</p>

      <a href="http://www.mod.go.th/Home.aspx" target="_blank">
      <img src="images/banner_defence.png" width="250" height="75" vspace="2" border="0" /></a><br>

      <a href="http://rtarf.mi.th" target="_blank">
      <img src="images/banner_rtarf.jpg" width="250" height="55" vspace="2" border="0" /></a><br>

      <a href="http://www.rta.mi.th/" target="_blank">
      <img src="images/banner-army.png" width="250" height="75" vspace="2" border="0" /></a><br>

      <a href="http://www3.navy.mi.th/" target="_blank">
      <img src="images/banner-navy.png" width="250" height="75" vspace="2" border="0" /></a><br>

      <a href="http://www.rtaf.mi.th/" target="_blank">
      <img src="images/banner-airforce.png" width="250" height="75" vspace="2" border="0" /></a><br>
    </div>


    </td>
    <td width="635" align="left" background="images/baseBG.png">

        <!-- <a href="http://doca.rta.mi.th/doca-king10-wishwell2560.php" target="_blank"> <img src="images/doca-king10-wishwell2560/Banner-KingBlessing.png"></a> -->
        <a href="http://doca.rta.mi.th/doca_king-9.php" target="_blank"> <iframe width="635" height="315" src="https://www.youtube.com/embed/videoseries?list=PLNgxVZwie3t_4Sjki1Gr2BUt6wWPCsV4G" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
        <img src="images/song-of-king9.png" /></a>
        <a href="document/computer-law59.pdf" target="_blank"><img src="images/computer-law59.jpg" /></a>

<div align="center" padding-top="10px"><img src="images/splitter.jpg" alt="" width="630" height="1"/> </div>

      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#activity">ข่าวกิจกรรม</a></li>
        <li><a data-toggle="tab" href="#announcement">ข่าวประชาสัมพันธ์</a></li>
        <li><a data-toggle="tab" href="#procurement">ข่าวจัดซื้อจัดจ้าง</a></li>
      </ul>

      <div class="tab-content">
      <div id="activity" class="tab-pane fade in active">
        <?php
        	require_once("callconnectionimproved.php");

        			  $strSQL = "SELECT * FROM activity WHERE act_id != '' ORDER BY act_id DESC LIMIT 10";
        			  $objQuery = mysqli_query($conn, $strSQL) or die ("Error Query [".$strSQL."]");
        			  $total=mysqli_num_rows($objQuery);
        			  //$sendRID  = $objResult["act_id"];

        				if($total>0)
        				{
        				$count = 0;
        				while ($objResult=mysqli_fetch_array($objQuery))
        					{
        					echo '<p class="left">';
        					echo '<img src="images/bullet.jpg" alt="" width="10" height="10" border="0" class="style18" />';
                  echo '&nbsp;&nbsp;';
        					echo '<a href="gallerys.php?Rid='.$objResult["act_id"].'" target="_blank">';
        					echo $objResult["act_topic"];
        					echo '</a>';
                  echo '&nbsp;&nbsp;';

                if(time_diff_today($objResult["act_date"]) <= 3){
                  echo '<span class="label label-danger">new</span>';
                }

        					echo '</p>';
        					}
        					$count++;
        				}
         ?>
         <a class="btn btn-default" href="view-all-news.php">ดูข่าวทั้งหมด</a>
      </div>

      <div id="announcement" class="tab-pane fade">
        <?php
        require_once("callconnectionimproved.php");

        			  $strSQL = "SELECT * FROM announcement WHERE ann_id != '' and 	ann_status='y' order by ann_id desc";
        			  $objQuery = mysqli_query($conn, $strSQL) or die ("Error Query [".$strSQL."]");
        			  $total=mysqli_num_rows($objQuery);

        				if($total>0)
        				{
        				$count;
        				while ($objResult=mysqli_fetch_array($objQuery))
        					{
                  echo '<p class="left">';
        					echo '<img src="images/bullet.jpg" alt="" width="10" height="10" border="0" class="style18" />';
                  echo "&nbsp;&nbsp;";
        					echo '<a href="'.$objResult["ann_doc"].'" target="_blank">';
        					echo $objResult["ann_topic"];
        					echo '</a>';
        					echo "&nbsp;&nbsp;";
        					echo '<a href="'.$objResult["ann_doc2"].'" target="_blank">';
        					echo $objResult["ann_subtopic"];
        					echo '</a>';
                  echo "&nbsp;&nbsp;";
                  if(time_diff_today($objResult["ann_date"]) <= 3){
                    echo '<span class="label label-danger">new</span>';
                  }

          					echo '</p>';
        					}
        					$count+=1;
        				}
         ?>
        <a class="btn btn-default" href="view-all-news.php">ดูประกาศทั้งหมด</a>
      </div>
    </div>

    <?php
    function time_diff_today($start_time) {
      $from_time = strtotime($start_time);
      $diff = abs(time() - $from_time);
      $years = floor($diff / (365*60*60*24));
      $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
      $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
      return ($days < 0 ? 0 : abs($days));
    }
    ?>

 <br>
 <div align="center"><img src="images/splitter.jpg" alt="" width="630" height="1"/> </div>
  <br>
    <a href="https://www.etda.or.th/iup/" target="_blank"><img src="images/leftmenu/Template_Size_iup2017_728x90.jpg" width="630" height="80" vspace="0" border="0" /></a><br />

    <a href="https://docs.google.com/forms/d/1K9XBBFVd8wNulsyuOMhdmGhJS4JI-gQOK5uDUxR1XUE/viewform?c=0&w=1" target="_blank">
    <img src="images/banner-G-News.png" /></a>
  <br />
    </td>
    <td width="235" colspan="0" valign="top" background="images/baseBG.png">
    <div class="fb-page" data-href="https://www.facebook.com/%E0%B8%81%E0%B8%A3%E0%B8%A1%E0%B8%81%E0%B8%B4%E0%B8%88%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%9E%E0%B8%A5%E0%B9%80%E0%B8%A3%E0%B8%B7%E0%B8%AD%E0%B8%99%E0%B8%97%E0%B8%AB%E0%B8%B2%E0%B8%A3%E0%B8%9A%E0%B8%81-1698452767103143/" data-tabs="timeline" data-width="235" data-height="675" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
  </td>
</tr>
</table>
<table width="1120" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
	<td width="1120" height="25" colspan="5" background="images/main_splitter1120x25_civil_info.jpg"></td>
</tr>
<tr background="images/baseBG.png">

    <td width="1120" height="75"><div align="center">
    <a href="http://tiwrm.haii.or.th//TyphoonTracking/wc.php?imgwc=lastest_wc.jpg" target="_blank">
    <img src="http://flood.gistda.or.th/buttons/flood-weather.png" width="224" height="75" vspace="2" border="0" /></a>
    </div></td>

    <td width="224" height="75"><div align="center">
    <a href="http://live1.haii.or.th/wrf_image/show_rain_forecast_wrf.php?domain=domain03&home=n" target="_blank">
    <img src="http://flood.gistda.or.th/buttons/flood-rain.png" width="224" height="75" vspace="2" border="0" /></a>
    </div></td>

    <td width="224" height="75"><div align="center">
    <a href="http://www.thaiwater.net/web/" target="_blank">
    <img src="http://flood.gistda.or.th/buttons/flood-thaiwater.png" width="224" height="75" vspace="2" border="0" /></a>
    </div></td>

    <td width="224" height="75"><div align="center">
    <a href="http://earth.nullschool.net/" target="_blank">
    <img src="http://flood.gistda.or.th/buttons/wind.png" width="224" height="75" vspace="2" border="0" /></a>
    </div></td>

    <td width="224" height="75"><div align="center">
    <a href="http://fms2.drr.go.th/" target="_blank">
    <img src="http://flood.gistda.or.th/buttons/flood-drr.png" width="224" height="75" vspace="2" border="0" /></a>
    </div></td>
  </tr>

<tr>
	<td width="1120" height="25" colspan="5" background="images/main_splitter1120x25_Interesting.jpg"></td>
</tr>
<tr background="images/baseBG.png">
    <td width="1120" height="75" colspan="2" valign="top"><div align="left">
   <?php
	require_once("callconnectionimproved.php");

			  $strSQL = "SELECT * FROM journal WHERE journal_id != '' AND journal_img = '' order by journal_id DESC LIMIT 12";
			  $objQuery = mysqli_query($conn, $strSQL) or die ("Error Query [".$strSQL."]");
			  $total=mysqli_num_rows($objQuery);

				if($total>0)
				{
				$count;
				while ($objResult=mysqli_fetch_array($objQuery))
					{

					//echo '<li>';
					echo '<img src="images/bullet.jpg" alt="" width="10" height="10" border="0" class="style18" />';
					echo '<a href="'.$objResult["journal_path"].'" target="_blank">';
					echo $objResult["journal_topic"];
					echo '</a>';
					//echo '<img src="images/icon_new2.gif" alt="" width="22" height="15" border="0" />';
					echo '</br>';
					//echo '</li>';

					}
					$count+=1;
				}
 ?>
    </div></td>
<td width="224" height="75" colspan="3" valign="middle"><div align="right">
    <?php
   require_once("callconnectionimproved.php");

         $strSQL = "SELECT * FROM journal WHERE journal_id != '' AND journal_img != '' order by journal_id DESC LIMIT 3";
         $objQuery = mysqli_query($conn, $strSQL) or die ("Error Query [".$strSQL."]");
         $total=mysqli_num_rows($objQuery);

         if($total>0)
         {
         $count;
         while ($objResult=mysqli_fetch_array($objQuery))
           {?>

          <a href='<?php echo $objResult["journal_path"];?>'  target="_blank">
         	<img src='<?php echo $objResult["journal_img"];?>' alt="<?php echo $objResult["journal_topic"];?>" width="175" height="235" border="0" /></a>
          <?php
           }
           $count+=1;
         }
  ?>


</div>
    </td>
  </tr>

  <tr>
	<td width="1120" height="25" colspan="5" background=""><span class="style18">Doca Channel</span></td>
  </tr>
  <tr background="images/baseBG.png">
	<td width="1120" colspan="5" align="center">
    <?php
    require_once("callconnectionimproved.php");
    $strChannelSQL = "SELECT * FROM channel WHERE channel_id != '' and channel_status ='y' order by channel_id asc";
    $objChannelQuery = mysqli_query($conn, $strChannelSQL) or die ("Error Query [".$strChannelSQL."]");
    while($objChannelResult = mysqli_fetch_assoc($objChannelQuery)) {?>
      <iframe width="370" height="200" src='<?php echo $objChannelResult['channel_content']; ?>' frameborder="0" allowfullscreen></iframe>
    <?php } ?>
    </td>


  </tr>

<tr>
	<td width="1120" height="25" colspan="5" background="images/main_splitter1120x25_Other.jpg"></td>
</tr>

<?php
require_once("callconnectionimproved.php");
$strExternalUrlSQL = "SELECT * FROM external_url WHERE menu_id != '' and menu_status ='y' order by menu_id asc";
$objExternalUrlQuery = mysqli_query($conn, $strExternalUrlSQL) or die ("Error Query [".$strExternalUrlSQL."]");
$columncount = 0;
while($objExternalUrlResult = mysqli_fetch_assoc($objExternalUrlQuery)) {?>
  <?php if($columncount%5 == 0) {?><tr><?php } $columncount++; ?>
    <td><a href='<?php echo $objExternalUrlResult['menu_url']; ?>' target="_blank"><img src='<?php echo $objExternalUrlResult['menu_img'];?>' width="224" height="75" vspace="2" border="0"  alt='<?php echo $objExternalUrlResult['menu_description'];?>'/></a></td>
  <?php if($columncount%5 == 0) {?></tr><?php }
  ?>

<?php } ?>

</table>


</body>
</html>
