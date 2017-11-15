<style>
.pink-bg {
  background-color: #aa699e;
}

/* Mobile */
@media (max-width: 767px) {
    .slider-size {
        height: auto;
    }
    .slider-size > img {
         width: 80%;
    }
}

/* tablets */
@media (max-width: 991px) and (min-width: 768px) {
    .slider-size {
        height: auto;
    }
    .slider-size > img {
        width: 80%;
    }
}

/* laptops */
@media (max-width: 1023px) and (min-width: 992px) {
    .slider-size {
         height: 200px;
    }
    .slider-size > img {
        width: 80%;
    }
}

/* desktops */
@media (min-width: 1024px) {
    .slider-size {
        height: 300px;
    }
    .slider-size > img {
        width: 60%;
    }
}
</style>

<div id="carousel" class="carousel slide pink-bg" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <?php
    // Query News Feeds Image
    require_once("callconnectionimproved.php");

    $strSQL = "SELECT * FROM activity WHERE act_id !='' and act_enable ='y' order by act_id desc limit 10";
    $objQuery = mysqli_query($conn, $strSQL) or die ("Error Query [".$strSQL."]");
    $total=mysqli_num_rows($objQuery);
    $count = 0;
    while ($objResult=mysqli_fetch_array($objQuery)) {
      if($count == 0){ ?>
        <div class="item active">
    <?php }else{?>
        <div class="item">
    <?php  }?>
        <img class="img-responsive center-block" src="<?php echo $objResult["act_imagetitle"]; ?>" alt="<?php echo $objResult["act_detail"]; ?>" width="100%">
        <a href="gallerys.php?Rid=<?php echo $objResult["act_id"]; ?>">
          <div class="carousel-caption">
            <p><?php echo $objResult["act_topic"]; ?></p>
          </div>
        </a>
      </div>
      <?php
      $count++;
    }
    ?>
    </div>

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <?php
    for ($i=0; $i<$count; $i++) {?>
      <li data-target="#carousel" data-slide-to="<?php echo $i; ?>"></li>
    <?php
  }
  ?>
  </ol>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#carousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
