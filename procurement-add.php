<div id="pcm-add-modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">เพิ่มประกาศจัดซื้อจัดจ้าง</h4>
      </div>
      <form action="" method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="form-group">
            <label for="title" class="tavirajFont">เรื่อง</label>
            <input type="text" class="form-control" name="pcm_topic" id="pcm_topic" placeholder="ระบุข้อความ" required>
          </div>
          <div class="form-group">
            <label for="title" class="tavirajFont">ไฟล์แนบ</label>
            <input type="text" class="form-control" name="pcm_doc" id="pcm_doc" placeholder="ระบุไฟล์แนบ">
          </div>

          <div class="form-group">
            <label for="showAsCover">สถานะ</label>
            <select name="pcm_status">
              <option value="n">ไม่แสดง</option>
              <option value="y">แสดง</option>
            </select></td>
          </div>
        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-success" name="pcm_add_submit"value="เพิ่มข้อมูล">
          <button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button>
        </div>
      </form>
    </div>

  </div>
</div>

<?php
require_once("callconnectionimproved.php");

if(isset($_POST['pcm_add_submit'])) {
  $strSQL = "INSERT INTO procurement";
  $strSQL .="(pcm_topic,pcm_doc,pcm_status)";
  $strSQL .="VALUES";
  $strSQL .="('".$_POST["pcm_topic"]."',
  '".$_POST["pcm_doc"]."',
  '".$_POST["pcm_status"]."')";

  $objQuery = mysqli_query($conn, $strSQL);

  if($objQuery) { // Message Box.
    ?>
    <script language="javascript">alert("บันทึกเรียบร้อย"); location.href="?";</script>
    <?php
  }
}
?>
