
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script language="javascript">
function checksubmit()
{
	if(document.frm-add-menu.filUpload.value == "")
	{
		alert('Please input Input 1');
		document.frm-add-menu.filUpload.focus();
		return false;
	}	
	if(document.frm-add-menu.menu_url.value == "")
	{
		alert('Please input Input 1');
		document.frm-add-menu.menu_url.focus();
		return false;
	}	
	document.frm-add-menu.submit();
}

</script>
<title>Untitled Document</title>
</head>
<body>
          <form action="" method="post" enctype="multipart/form-data" name="frm-add-menu" >
            <table width="100%" border="0" cellspacing="10" cellpadding="0" >  
          <tr>
            <td width="150" align="right"><span class="style18">ภาพ Banner</span></td>
            <td width="400"><input type="file" name="filUpload"></td>
          </tr>
          <tr>
            <td width="150" align="right"><span class="style18">BannerPath</span></td>
            <td width="400"><textarea name="menu_url" cols="50" rows="5" id="menu_url"></textarea></td>
          </tr>
          <tr>
            <td width="150" align="right"><span class="style18">สถานะ</span></td> 
            <td width="400">
            <p>
            <select name="menu_status">
                <option value="n">Disabled</option>
                <option value="y">Enabled</option>
            </select>
            </p>
          	</td>
          </tr>
          
          <br />
          <tr>
            <td colspan="2" align="center" >
        	<input type="submit" name="submit" style="width:100px; height:50px;" value="บันทึกข้อมูล">
            <input type="submit" name="cancelvalue" style="width:150px; height:50px;" class="style18" value="ปิด" onClick="self.close()">

            </td>
            </tr>
        </table>
    </form>

<?php 

if($_POST)
		{
		
		if ($_FILES["filUpload"]["name"]=="") 
	{
		?>
<script language="javascript">alert("กรุณาเลือกภาพ... "); location.href="";</script>
		<?
		exit;
	}
	else if ($_POST["menu_url"]=="") 
	{
		?>
<script language="javascript">alert("กรุณากรอก URL... "); location.href="";</script>
		<?
		exit;
	}	
	
	if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"myfile/".$_FILES["filUpload"]["name"]))
	{
		echo "Copy/Upload Complete<br>";

		//*** Insert Record ***//
		$objConnect = mysql_connect("localhost","root","12345678") or die("Error Connect to Database");
		$objDB = mysql_select_db("itdoca_web");
		
		$strSQL = "INSERT INTO leftmenu ";
		$strSQL .="(menu_banner,menu_url,menu_status) VALUES ('".$_FILES["filUpload"]["name"]."','".$_POST["menu_url"]."','".$_POST["menu_status"]."')";
		$objQuery = mysql_query($strSQL);	
		
	}
		}
?>
</body>
</html>

<?php /*?>
<?php
        require_once("callconnection.php");
		
		if($_POST)
            {
                $strSQL = "INSERT INTO leftmenu";
                $strSQL .="(menu_banner,menu_url,menu_status)";
                $strSQL .="VALUES";
                $strSQL .="('".$_POST["file"]."','".$_POST["menu_url"]."','".$_POST["menu_status"]."')";
                $objQuery = mysql_query($strSQL);
                    
                if($objQuery)
                    { // Message Box.
                      ?>
                        <script language="javascript">alert("..Saved.."); location.href="?";</script>
                      <?
                    } 
					
					          
            }
?>
<?php */?>