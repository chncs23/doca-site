<?php
		require_once("callconnection.php");

		$receiveid = $_GET['Sendid'];
		$strSQL = "SELECT * FROM activity WHERE act_id like '%".$receiveid."%'";
			$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
			$Rows = mysql_fetch_array($objQuery);	
			  
			$act_topic 	 = $Rows['act_topic'];
			$act_details = $Rows['act_details'];
			$act_imagetitle 	 = $Rows['act_imagetitle'];
			$act_imagedir  = $Rows['act_imagedir'];
			$act_vdopath 	 = $Rows['act_vdopath'];
			$act_filepath = $Rows['act_filepath'];
			$act_status  = $Rows['act_status'];
		
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>

<style>	
.style16 {font-size: 16pt; font-weight: bold; font-family: "TH SarabunPSK", sans-serif; }
.style18 {font-size: 18pt; font-weight: bold; font-family: "TH SarabunPSK", sans-serif; }
.style22 {font-size: 22pt; font-weight: bold; font-family: "TH SarabunPSK", sans-serif; }
body {
	background-image: url(..images/BG7.jpg);
	background-repeat: repeat;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
	

</style>


<title></title>
</head>
<table align="center" cellpadding="0" cellspacing="0" background="../images/BG8.png">
    <tr>
    <td width="100%" align="center"><p><span class="style22">แก้ไขข่าวกิจกรรม</span></p>
    <form action="topic-edit.php" method="post">
    <table width="100%" border="0" cellspacing="10" cellpadding="0" >  
    <tr>
            <td width="150" align="right"><span class="style18">หัวข้อข่าว :</span></td>
            <td width="400">
            <input type="hidden" id="topic-id" name="topic-id" value="<?php echo $receiveid;?>">
            <input type="text" id="topic" name="topic" size="50" value="<?php echo $act_topic;?>"></td>
      </tr>
          <tr>
            <td width="150" align="right"><span class="style18">เนื้อหาข่าว :</span></td>
            <td width=""><textarea class="ckeditor" id="editor1" name="editor1" ><?php echo $act_details;?></textarea></td>
          </tr>
          <tr>
            <td width="150" align="right"><span class="style18">ภาพปก :</span></td> 
            <td width=""><input type="text" name="imagetitle" id="imagetitle" size="25" value="<?php echo $act_imagetitle;?>"></td>
          </tr>
           <tr>
            <td width="150" align="right"><span class="style18">โฟลกเดอภาพ :</span></td>
            <td width=""><input type="text" id="imagedir" name="imagedir" size="50" value="<?php echo $act_imagedir;?>"></td>
          </tr>
           <tr>
            <td width="150" align="right"><span class="style18">URL VDO :</span></td>
            <td width=""><input type="text" id="vdopath" name="vdopath"  size="50" value="<?php echo $act_vdopath;?>"></td>
          </tr>
            <tr>
            <td width="150" align="right"><span class="style18">ไฟล์ :</span></td>
            <td width=""><input type="text" id="filepath" name="filepath" size="50" value="<?php echo $act_filepath;?>"></td>
          </tr>
          <tr>
            <td width="150" align="right"><span class="style18">แสดงเป็นภาพสไลด์ :</span></td>
            <td width="">
            <p>
            	<select name="act_status">
                  	<option value="n">ไม่ใช่</option>
                    <option value="y">ใช่</option>
                </select>
            </p>
            </td>
          </tr>      
			<script>
                CKEDITOR.replace( 'editor1', 
                {
                    filebrowserBrowseUrl : './ckfinder/ckfinder.html',
                    filebrowserImageBrowseUrl : './ckfinder/ckfinder.html?Type=Images',
                    filebrowserFlashBrowseUrl : './ckfinder/ckfinder.html?Type=Flash',
                    filebrowserUploadUrl : './ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                    filebrowserImageUploadUrl : './ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                    filebrowserFlashUploadUrl : './ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                } );
</script>
        	<tr>
            <td></td>
            <td><p>
            <input type="submit" style="width:150px; height:50px;" class="style18" value="บันทึก" />
            <input type="submit" name="cancelvalue" style="width:150px; height:50px;" class="style18" value="ปิด" onClick="self.close()">
            </td>
            </tr>
        </table>
    </form>
   <?
		
		if($_POST)
		{
			$strSQL = "UPDATE activity SET ";
			$strSQL .="act_topic = '".$_POST["topic"]."' ";
			$strSQL .=",act_details = '".$_POST["editor1"]."' ";
			
			$strSQL .=",act_imagetitle = '".$_POST["imagetitle"]."' ";
			$strSQL .=",act_imagedir = '".$_POST["imagedir"]."' ";
			$strSQL .=",act_vdopath = '".$_POST["vdopath"]."' ";
			$strSQL .=",act_filepath = '".$_POST["filepath"]."' ";
			$strSQL .=",act_enable = '".$_POST["act_status"]."' ";
			
			$strSQL .="WHERE act_id like '%".$_POST["topic-id"]."%'";
			$objQuery = mysql_query($strSQL);
			
			if($objQuery)
				{ // Message Box.
				  ?>
	 				 <script language="javascript">alert("..แก้ไขเรียบร้อย!.."); location.href="?" ;</script>
				  <?
				  exit;
	 			} 
			//{
				//echo "ส่งข้อความสำเร็จ";	
			//}
			else
			{
				echo "Error Save ";	
			}	
		}
		?>
      </td>
    </tr>  
    </table>
<body>
</body>
</html>