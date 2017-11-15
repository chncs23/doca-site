<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/all-news-content.css" />

<div class="row">
  <?php
  require_once("callconnectionimproved.php");
  require_once("utils.php");
  $perpage = 9; //จำนวนเนื้อหาต่อหน้า
  if (isset($_GET['page'])) {
    $page = $_GET['page'];
  } else {
    $page = 1;
  }

  $start = ($page - 1) * $perpage;

  $strSQL = "SELECT * FROM activity WHERE act_id != '' ORDER BY act_id DESC LIMIT {$start} , {$perpage}";
  $objQuery = mysqli_query($conn, $strSQL) or die ("Error Query [".$strSQL."]");
  $total=mysqli_num_rows($objQuery);

  if($total>0) {
    $count = 0;

    while ($objResult=mysqli_fetch_array($objQuery)) {?>

      <div class="col-md-4">
        <div class="single-blog-item">
          <div class="blog-thumbnail">
            <?php if($objResult["act_imagetitle"] == ''){
              echo '<a href="gallerys.php?Rid='.$objResult["act_id"].'"><img src="images/gallery-tmp.png" alt="blog-img"></a>';
            }  else {
              echo '<a href="gallerys.php?Rid='.$objResult["act_id"].'"><img src="'.$objResult["act_imagetitle"].'" alt="blog-img"></a>';
            }?>

          </div>
          <div class="blog-content">
            <a href="gallerys.php?Rid=<?php echo $objResult["act_id"];?>" target="_top">
              <?php echo $objResult["act_topic"];?>
            </a>
            &nbsp;&nbsp;
            <?php if(time_diff_today($objResult["create_time"], time()) <= 3) {
              echo '<span class="label label-danger">new</span>';
            }?>
          </div>
          <span class="blog-date"><?php echo $objResult["create_time"];?></span>
        </div>
      </div>


      <?php
      $count++;
    }
  }
  ?>
</div>

<?php
$sql2 = "SELECT * FROM activity WHERE act_id != '' ORDER BY act_id DESC";
$query2 = mysqli_query($conn, $sql2);
$total_record = mysqli_num_rows($query2);
$total_page = ceil($total_record / $perpage);
?>

<nav>
  <ul class="pagination">
    <li>
      <a onclick="gotoPage(1)" aria-label="หน้าแรก">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <?php for($i=1;$i<=$total_page;$i++){ ?>
      <li <?php if($i == $page) echo 'class="page-item active"'; else echo 'class="page-item"';?>>
        <a onclick="gotoPage(<?php echo $i; ?>)"><?php echo $i; ?></a>
      </li>
    <?php } ?>
    <li>
      <a onclick="gotoPage(<?php echo $total_page; ?>)" aria-label="หน้าสุดท้าย">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>

<script>
function gotoPage(str) {
  var xhttp;
  if (str == "") {
    document.getElementById("activity").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("activity").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "all-activity.php?page="+str, true);
  xhttp.send();
}
</script>
