<?php

require_once("callconnectionimproved.php");
$receiveid = $_POST['Sendid'];

$strSQL = "SELECT * FROM procurement WHERE pcm_id like '%".$receiveid."%'";
$objQuery = mysqli_query($conn, $strSQL) or die ("Error Query [".$strSQL."]");

$Rows = mysqli_fetch_array($objQuery);

$pcm_id 	 = $Rows['pcm_id'];
$pcm_topic   = $Rows['pcm_topic'];
$pcm_doc	 = $Rows['pcm_doc'];
$pcm_status  	= $Rows['pcm_status'];
?>

<input type="hidden" name="pcm_id" value="<?php echo $pcm_id;?>">

<div class="form-group">
  <label for="title" class="tavirajFont">เรื่อง</label>
  <input type="text" class="form-control" name="pcm_topic" id="pcm_topic" placeholder="ระบุข้อความ" value="<?php echo $pcm_topic;?>" required>
</div>

<div class="form-group">
  <label for="title" class="tavirajFont">ไฟล์แนบ</label>
  <input type="text" class="form-control" name="pcm_doc" id="pcm_doc" placeholder="ระบุไฟล์แนบ" value=<?php echo $pcm_doc;?>>
</div>

<div class="form-group">
  <label for="showAsCover">สถานะ</label>
  <select name="pcm_status">
    <option value="n" <?php if ($pcm_status == 'n') echo 'selected="selected"'?>>ไม่แสดง</option>
    <option value="y" <?php if ($pcm_status == 'y') echo 'selected="selected"'?>>แสดง</option>
  </select></td>
</div>
