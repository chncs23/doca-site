<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" type="text/css" href="css/layout.css" />
  <link rel="stylesheet" type="text/css" href="css/style2.css" />
  <link rel="stylesheet" type="text/css" href="css/dropmenu.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.tablesorter.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link href="themes/blue/style.css" rel="stylesheet" type="text/css">
  <script src="bootstrap/js/bootstrap.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Taviraj" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/backoffice-style.css" />


  <script type="text/javascript">
  $(document).ready(function() {
    $("#myTable").tablesorter();
  });
  </script>

  <title>แก้ไขข่าวประชาสัมพันธ์</title>
</head>
<body topmargin="">

  <table width="1120" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr valign="top">
      <td colspan="4">
        <?php require_once("scriptmenu.php"); ?>
        <!-- End Menu ----------------------------------->
      </td>
    </table>
  </table>
  <table width="1120" border="0" align="center" cellpadding="0" cellspacing="10">
    <tr>
      <td width="250" valign="top" background="images/baseBG.png"><?php require_once("scriptmenueditor.php"); ?></td>
			<td align="left" valign="top" background="images/baseBG.png"><h2>จัดการประกาศจัดซื้อจัดจ้าง</h2>
				<div align="right">
					<button
					type="button"
					class="btn btn-primary"
					data-toggle="modal" data-target="#pcm-add-modal"
					title="เพิ่มประกาศจัดซื้อจัดจ้าง"><span class="glyphicon glyphicon-plus"></span> เพิ่มประกาศจัดซื้อจัดจ้าง</button>
				</div>
			</div>

        <?php
        function alert($msg) {
          echo "<script type='text/javascript'>alert('$msg');</script>";
        }

        require_once("callconnectionimproved.php");

        $strSQL = "SELECT * FROM procurement WHERE pcm_id != '' order by pcm_id desc";
        $objQuery = mysqli_query($conn, $strSQL) or die ("Error Query [".$strSQL."]");

        if (mysqli_num_rows($objQuery) == 0) {
          alert("ไม่มีอะไรเลยยยยย");
        }else {
            $tablehead = <<<HTML
            <table id="myTable" class="table table-bordered tablesorter">
              <thead>
                <tr>
                  <th width="50"><span>รหัส</span></th>
                  <th width=""><span>เรื่อง</span></th>
                  <th width="60"><span>สถานะ</span></th>
                  <th width="60"><span>แก้ไข</span></th>
                  <th width="60"><span>ลบ</span></th>
                </tr>
              </thead>
              <tbody>
HTML;
              echo $tablehead;
              while($objResult = mysqli_fetch_array($objQuery)) {
                $pcm_id 	  = $objResult['pcm_id'];
                $pcm_topic  = $objResult['pcm_topic'];
                $pcm_status = $objResult['pcm_status'];

                $tablerow = <<<HTML
                <tr>
                  <td><span>$pcm_id</span></td>
                  <td><span>$pcm_topic</span></td>
                  <td><span>$pcm_status</span></td>
                  <td>
                    <span>
                      <a data-toggle="modal" data-target="#pcm-edit-modal" data-id="$pcm_id" title="แก้ไขข้อมูล">แก้ไข</a>
                    </span>
                  </td>
                  <td>
                    <span>
                      <a href="procurement-delete.php?Sendid=$pcm_id" onClick="window.open('procurement-delete.php?Sendid=$pcm_id','','width=250,height=150'); return false;" title="ลบข้อมูล">ลบ
                      </a>
                    </span>
                  </td>
                </tr>
HTML;
                echo $tablerow;
              }
            }
            ?>
          </tbody>
        </table>
      </td>
    </tr>
  </table>

  <?php include("procurement-add.php"); ?>

<!-- Edit modal form -->
  <div id="pcm-edit-modal" class="modal fade" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">แก้ไขประกาศจัดซื้อจัดจ้าง</h4>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="form-data"></div>
            </div>
            <div class="modal-footer">
              <input type="submit" class="btn btn-success" name="pcm_edit_submit"value="แก้ไขข้อมูล">
              <button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button>
            </div>
          </form>
        </div>
    </div>
</div>

<?php
 require_once("callconnectionimproved.php");

 if(isset($_POST['pcm_edit_submit'])) {
	 $strEditSQL = "UPDATE procurement SET ";
	 $strEditSQL .="pcm_topic = '".$_POST["pcm_topic"]."' ";
	 $strEditSQL .=",pcm_doc = '".$_POST["pcm_doc"]."' ";
	 $strEditSQL .=",pcm_status = '".$_POST["pcm_status"]."' ";
	 $strEditSQL .="WHERE pcm_id = '".$_POST["pcm_id"]."'";
	 $objEditQuery = mysqli_query($conn, $strEditSQL);
	 if($objEditQuery)
		 {
			 alert("แก้ไขประกาศจัดซื้อจัดจ้างสำเร็จ !");
       echo "<script>location.href='?'</script>";
       $conn->close();
		 }
	 else
	 {
		 echo "Error Save ";
	 }
 }

 ?>

  <script>

  $( document ).ready(function() {
      $('#pcm-edit-modal').on('show.bs.modal', function (e) { //Modal Event
          var id = $(e.relatedTarget).data('pcm_id'); //Fetch id from modal trigger button
      $.ajax({
        type : 'post',
         url : 'procurement-edit.php', //Here you will fetch records
        data :  'Sendid='+ id, //Pass $id
        success : function(data){
           $('.form-data').html(data);//Show fetched data from database
         }
      });
      });
  });

  </script>
</body>
</html>
