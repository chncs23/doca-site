<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<title>Untitled Document</title>
</head>
<body>
    <form action="" method="post">
    <table width="100%" border="0" cellspacing="10" cellpadding="0" >  
    <tr>
            <td width="150" align="right"><span class="style18">หัวข้อข่าว :</span></td>
            <td width="400"><input type="text" id="topic" name="topic" size="50"></td>
      </tr>
          <tr>
            <td width="150" align="right"><span class="style18">เนื้อหาข่าว :</span></td>
            <td width="400"><textarea class="ckeditor" id="editor1" name="editor1" ></textarea></td>
          </tr>
          <tr>
            <td width="150" align="right"><span class="style18">ภาพปก :</span></td> 
            <td width="400"><input type="text" name="imagetitle" id="imagetitle" size="25"></td>
          </tr>
           <tr>
            <td width="150" align="right"><span class="style18">โฟลกเดอภาพ :</span></td>
            <td width="400"><input type="text" id="imagedir" name="imagedir" size="50"></td>
          </tr>
           <tr>
            <td width="150" align="right"><span class="style18">URL VDO :</span></td>
            <td width="400"><input type="text" id="vdopath" name="vdopath"  size="50"></td>
          </tr>
            <tr>
            <td width="150" align="right"><span class="style18">ไฟล์ :</span></td>
            <td width="400"><input type="text" id="filepath" name="filepath" size="50"></td>
          </tr>
          <tr>
            <td width="150" align="right"><span class="style18">แสดงเป็นภาพสไลด์ :</span></td>
            <td width="400">
            	<select name="status">
                  	<option value="n">ไม่ใช่</option>
                    <option value="y">ใช่</option>
                </select></td>
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

</body>
</html>
<?php
        require_once("callconnection.php");
		
		if($_POST)
            {
                $strSQL = "INSERT INTO activity";
                $strSQL .="(act_topic,act_details,act_imagetitle,act_imagedir,act_vdopath,act_filepath,act_enable)";
                $strSQL .="VALUES";
                $strSQL .="('".$_POST["topic"]."',
									  '".$_POST["editor1"]."',
									  '".$_POST["imagetitle"]."',
									  '".$_POST["imagedir"]."',
									  '".$_POST["vdopath"]."',
									  '".$_POST["filepath"]."',
									  '".$_POST["status"]."')";
                $objQuery = mysql_query($strSQL);
                    
                if($objQuery)
                    { // Message Box.
                      ?>
                        <script language="javascript">alert("..Saved.."); location.href="?";</script>
                      <?
                    } 
					
					          
            }
?>

<!-- <?p
//	if(isset($_POST['editor1']))
//	{
//		$text = $_POST['editor1'];	
//		//echo "$text";
//		//connect DB
//		$con = mysqli_connect('localhost','root','12345678','itdoca_web') or Die("Error");
//		$query = mysqli_query($con,"INSERT INTO content (content) VALUES ('$text')");
//		if(query)
//			{
//				echo "ADDED";
//			}
//			else
//				{
//					echo "ERROR";
//				}
//	}
//?>