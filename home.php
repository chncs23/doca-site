<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Taviraj" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/layout.css" />
  <link rel="stylesheet" type="text/css" href="css/style2.css" />
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <title>กรมกิจการพลเรือนทหารบก</title>
</head>

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<body>
  <?php include("scriptmenu.php") ?>

  <div class="container-fluid" id="doca-header">
    <div class="row">
      <div class="col-md-3 center">
        <img id="doca-logo" src="images/doca-with-name.png" alt="กรมกิจการพลเรือนทหารบก" padding="10px">
      </div>
      <div class="col-md-6">
        <!-- carousel -->
        <?php include("home-carousel.php") ?>
      </div>
      <div class="col-md-3 center">
        <img id="motto" src="images/motto-with-quote.png" alt="รู้ความต้องการทางทหาร ชำนาญประสานพลเรือน" padding="10px">
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-3 nopadding-right">
        <div class="center">
          <img id="commander" src="images/doca_commander/commander2_Thanes-250px.png" alt="กรมกิจการพลเรือนทหารบก" width="100%">
          <h4 align="center">พล.ท.ธเนศ กาลพฤกษ์</h4>
          <p align="center">เจ้ากรมกิจการพลเรือนทหารบก</p>
        </div>

        <div class="panel panel-default">
          <div class="fb-page" data-href="https://www.facebook.com/%E0%B8%81%E0%B8%A3%E0%B8%A1%E0%B8%81%E0%B8%B4%E0%B8%88%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%9E%E0%B8%A5%E0%B9%80%E0%B8%A3%E0%B8%B7%E0%B8%AD%E0%B8%99%E0%B8%97%E0%B8%AB%E0%B8%B2%E0%B8%A3%E0%B8%9A%E0%B8%81-1698452767103143/" data-tabs="timeline,events,messages" data-height="450" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
        </div>

        <div class="panel panel-default">
          <div class="panel-body">
            <?php
            require_once("callconnectionimproved.php");
            $strLeftMenuSQL = "SELECT * FROM custom_menu WHERE menu_id != '' and menu_status ='y' order by menu_id ASC";
            $objLeftMenuQuery = mysqli_query($conn, $strLeftMenuSQL) or die ("Error Query [".$strImgSQL."]");
            while($objLeftMenuResult = mysqli_fetch_assoc($objLeftMenuQuery)) {?>
              <a href='<?php echo $objLeftMenuResult['menu_url']; ?>' target="_blank"><img src='<?php echo $objLeftMenuResult['menu_img'];?>' vspace="2" border="0" alt='
                <?php echo $objLeftMenuResult['menu_description'];?>' width="100%"/>
              </a><br>
            <?php } ?>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-bank"></i> หน่วยงานที่เกี่ยวข้อง</h3>
          </div>
          <div class="panel-body">
            <a href="http://www.mod.go.th/Home.aspx" target="_blank">
              <img src="images/banner_defence.png" width="100%" vspace="2" border="0" />
            </a><br>

            <a href="http://rtarf.mi.th" target="_blank">
              <img src="images/banner_rtarf.jpg" width="100%" vspace="2" border="0" />
            </a><br>

            <a href="http://www.rta.mi.th/" target="_blank">
              <img src="images/banner-army.png" width="100%" vspace="2" border="0" />
            </a><br>

            <a href="http://www3.navy.mi.th/" target="_blank">
              <img src="images/banner-navy.png" width="100%" vspace="2" border="0" />
            </a><br>

            <a href="http://www.rtaf.mi.th/" target="_blank">
              <img src="images/banner-airforce.png" width="100%" vspace="2" border="0" />
            </a><br>
          </div>
        </div>


      </div>

      <article>
        <div class="col-md-9">
          <!-- marquee -->
          <marquee  behavior="scroll" direction="left" scrollamount="10" class="marquee" onmouseover="this.stop();" onmouseout="this.start();">
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


          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title"><i class="fa fa-newspaper-o"></i> ข่าวสารกรมกิจการพลเรือนทหารบก</h3>
            </div>
            <div class="panel-body">
              <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#activity">ข่าวกิจกรรม</a></li>
                <li><a data-toggle="tab" href="#announcement">ข่าวประชาสัมพันธ์</a></li>
              </ul>

              <div class="tab-content">
                <div id="activity" class="tab-pane fade in active">
                  <div class="panel-body">
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
                  </div>
                  <a class="btn btn-default button-right" href="view-all-news.php">ดูข่าวทั้งหมด</a>
                </div>

                <div id="announcement" class="tab-pane fade">
                  <div class="panel-body">
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
                    <a class="btn btn-default button-right" href="view-all-news.php">ดูประกาศทั้งหมด</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title"><i class="fa fa-users"></i> ข้อมูลบริการประชาชน</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-4" align="center">
                  <a href="http://tiwrm.haii.or.th//TyphoonTracking/wc.php?imgwc=lastest_wc.jpg" target="_blank">
                    <img src="http://flood.gistda.or.th/buttons/flood-weather.png" width="90%"/>
                  </a>
                </div>

                <div class="col-md-4" align="center">
                  <a href="http://live1.haii.or.th/wrf_image/show_rain_forecast_wrf.php?domain=domain03&home=n" target="_blank">
                    <img src="http://flood.gistda.or.th/buttons/flood-rain.png" width="90%"/>
                  </a>
                </div>

                <div class="col-md-4" align="center">
                  <a href="http://www.thaiwater.net/web/" target="_blank">
                    <img src="http://flood.gistda.or.th/buttons/flood-thaiwater.png" width="90%"/>
                  </a>
                </div>
              </div>

              <div class="row">
                <div class="col-md-4" align="center">
                  <a href="http://earth.nullschool.net/" target="_blank">
                    <img src="http://flood.gistda.or.th/buttons/wind.png" width="90%"/>
                  </a>
                </div>

                <div class="col-md-4" align="center">
                  <a href="http://fms2.drr.go.th/" target="_blank">
                    <img src="http://flood.gistda.or.th/buttons/flood-drr.png" width="90%"/>
                  </a>
                </div>
              </div>
            </div>
          </div>


          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title"><i class="fa fa-book"></i> บทความน่าสนใจ</h3>
            </div>
            <div class="panel-body">
              <div align="left">
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
                    echo '&nbsp;&nbsp;';
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
              </div>

              <div class="row margin-top" align="center">
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
                    <div class="col-md-4">
                      <a href='<?php echo $objResult["journal_path"];?>'  target="_blank">
                        <img src='<?php echo $objResult["journal_img"];?>' alt="<?php echo $objResult["journal_topic"];?>" width="175" height="235" border="0" />
                      </a>
                    </div>
                    <?php
                  }
                  $count+=1;
                }
                ?>
              </div>
            </div>
          </div>

          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title"><i class="fa fa-film"></i> DOCA Channel</h3>
            </div>
            <div class="panel-body">
              <?php
              require_once("callconnectionimproved.php");
              $strChannelSQL = "SELECT * FROM channel WHERE channel_id != '' and channel_status ='y' order by channel_id asc";
              $objChannelQuery = mysqli_query($conn, $strChannelSQL) or die ("Error Query [".$strChannelSQL."]");
              $columncount = 0;
              while($objChannelResult = mysqli_fetch_assoc($objChannelQuery)) {?>
                <?php if($columncount%2 == 0) {?><div class="row"><?php } $columncount++; ?>
                  <?php if($columncount%2 == 0) {?><div class="col-md-6 col-half-padding-left col-padding-bottom"><?php }
                  else {?><div class="col-md-6 col-half-padding-rigft col-padding-bottom"><?php }  ?>
                    <div class="embed-responsive embed-responsive-16by9">
                      <iframe src='<?php echo $objChannelResult['channel_content']; ?>' frameborder="0" allowfullscreen></iframe>
                    </div>
                  </div>
                  <?php if($columncount%2 == 0) {?></div><?php }?>
                <?php } ?>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-info-circle"></i> ข้อมูลอื่น ๆ</h3>
              </div>
              <div class="panel-body">
                <?php
                require_once("callconnectionimproved.php");
                $strExternalUrlSQL = "SELECT * FROM external_url WHERE menu_id != '' and menu_status ='y' order by menu_id asc";
                $objExternalUrlQuery = mysqli_query($conn, $strExternalUrlSQL) or die ("Error Query [".$strExternalUrlSQL."]");
                $columncount = 0;
                while($objExternalUrlResult = mysqli_fetch_assoc($objExternalUrlQuery)) {?>
                  <?php if($columncount%3 == 0) {?><div class="row"><?php } $columncount++; ?>
                    <?php if($columncount%3 == 0) {?><div class="col-md-4 col-half-padding-left col-padding-bottom"><?php }
                    else {?><div class="col-md-4 col-half-padding-rigft col-padding-bottom"><?php }  ?>
                      <a href='<?php echo $objExternalUrlResult['menu_url']; ?>' target="_blank">
                        <img src='<?php echo $objExternalUrlResult['menu_img'];?>' width="100%" border="0"  alt='<?php echo $objExternalUrlResult['menu_description'];?>'/></a>
                      </div>
                      <?php if($columncount%3 == 0) {?></div><?php }?>

                    <?php } ?>
                  </div>
                </div>
              </div>
            </article>
          </div>
        </div>
        <footer class="footer">
          <?php include("footer.html") ?>
        </footer>

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
      </body>
      </html>
