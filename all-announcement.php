<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/all-news-content.css" />

<table class="table">
  <thead>
    <tr>
      <th class="col-xs-1">ลำดับที่</th>
      <th class="col-xs-7">เรื่อง</th>
      <th class="col-xs-1"></th>
      <th class="col-xs-1"></th>
      <th class="col-xs-2">วันที่ประกาศ</th>
    </tr>
  </thead>

  <?php
  require_once("callconnectionimproved.php");
  require_once("utils.php");
  $perpage = 20; //จำนวนเนื้อหาต่อหน้า
  if (isset($_GET['page'])) {
    $page = $_GET['page'];
  } else {
    $page = 1;
  }

  $start = ($page - 1) * $perpage;

  $strSQL = "SELECT * FROM announcement WHERE ann_id != '' ORDER BY ann_id DESC LIMIT {$start} , {$perpage}";
  $objQuery = mysqli_query($conn, $strSQL) or die ("Error Query [".$strSQL."]");
  $total=mysqli_num_rows($objQuery);

  if($total>0) {
    $count = 0;

    while ($objResult=mysqli_fetch_array($objQuery)) {?>
      <tr>
        <td><?php echo $objResult["ann_id"];?></td>
        <td><?php echo $objResult["ann_topic"];?></td>
        <td><a href=<?php echo $objResult["ann_doc"];?>>รายละเอียด</a></td>
        <td><a href=<?php echo $objResult["ann_doc2"];?>><?php echo $objResult["ann_subtopic"];?></a></td>
        <td><?php echo $objResult["ann_date"];?></td>
      </tr>
      <?php
      $count++;
    }
  }
  ?>
</table>

<?php
$sql2 = "SELECT * FROM announcement WHERE ann_id != '' ORDER BY ann_id DESC";
$query2 = mysqli_query($conn, $sql2);
$total_record = mysqli_num_rows($query2);
$total_page = ceil($total_record / $perpage);
?>

<nav>
  <ul class="pagination">
    <li>
      <a onclick="gotoAnnPage(1)" aria-label="หน้าแรก">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <?php for($i=1;$i<=$total_page;$i++){ ?>
      <li <?php if($i == $page) echo 'class="page-item active"'; else echo 'class="page-item"';?>>
        <a onclick="gotoAnnPage(<?php echo $i; ?>)"><?php echo $i; ?></a>
      </li>
    <?php } ?>
    <li>
      <a onclick="gotoAnnPage(<?php echo $total_page; ?>)" aria-label="หน้าสุดท้าย">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>

<script>
function gotoAnnPage(str) {
  var xhttp;
  if (str == "") {
    document.getElementById("announcement").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("announcement").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "all-announcement.php?page="+str, true);
  xhttp.send();
}
</script>
