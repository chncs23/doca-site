<div id="carousel" class="carousel slide" data-ride="carousel" width=50%>
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <?php
    // Query News Feeds Image
    require_once("callconnectionimproved.php");

    $strSQL = "SELECT * FROM activity WHERE act_id !='' and act_enable ='y' order by act_id desc";
    $objQuery = mysqli_query($conn, $strSQL) or die ("Error Query [".$strSQL."]");
    $total=mysqli_num_rows($objQuery);
    $count = 0;
    while ($objResult=mysqli_fetch_array($objQuery)) {?>
      <div class="item active">
        <img class="img-responsive center-block" src="<?php echo $objResult["act_imagetitle"]; ?>" width="100%" alt="<?php echo $objResult["act_detail"]; ?>">
        <a href="gallerys.php?Rid=<?php echo $objResult["act_id"]; ?>">
          <div class="carousel-caption">
            <p href=""><?php echo $objResult["act_topic"]; ?></p>
          </div>
        </div>
      </a>
      <?php
      $count++;
    }
    ?>
  </div>

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <?php
    for ($i=0; $i<$count; $i++) {?>
      <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>"></li>
      <?php
    }
    ?>
  </ol>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
