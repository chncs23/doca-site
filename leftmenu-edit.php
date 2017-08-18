<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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

<title>Untitled Document</title>
</head>
<body>
<?php
	$objConnect = mysql_connect("localhost","root","12345678") or die("Error Connect to Database");
	$objDB = mysql_select_db("itdoca_web");
	$strSQL = "SELECT * FROM leftmenu WHERE menu_id = '".$_GET["Sendid"]."' ";
	$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
	$objResult = mysql_fetch_array($objQuery);
?>
	<form name="form1" method="post" action="leftmenu-edit.php?menu_id=<?php echo $_GET["Sendid"];?>" enctype="multipart/form-data">
    <table width="100%" border="0" cellspacing="10" cellpadding="0" >
    <tr>
            <td width="150" align="right"><span class="style18">ภาพ Banner</span></td>
            <td width="400"><img src="myfile/<?php echo $objResult["menu_banner"];?>"><br /><input type="file" name="filUpload"></td>
          </tr>
          <tr>
            <td width="150" align="right"><span class="style18">Menu URL</span></td>
            <td width="400"><input type="text" name="menu_url" id="menu_url" value="<?php echo $objResult["menu_url"];?>"></td>
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
			$strSQL = "UPDATE leftmenu SET ";
			$strSQL .="menu_url = '".$_POST["menu_url"]."' ";
			$strSQL .=",menu_status = '".$_POST["menu_status"]."' ";
			$strSQL .="WHERE menu_id like '%".$_GET["menu_id"]."%'";
			$objQuery = mysql_query($strSQL);
			
			if($_FILES["filUpload"]["name"] != "")
			{
				if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"myfile/".$_FILES["filUpload"]["name"]))
				{
		
					//*** Delete Old File ***//			
					//@unlink("myfile/".$_POST["hdnOldFile"]);
					
					//*** Update New File ***//
					$strSQL = "UPDATE leftmenu ";
					$strSQL .=" SET menu_banner = '".$_FILES["filUpload"]["name"]."' WHERE menu_id = '".$_GET["menu_id"]."' ";
					$objQuery = mysql_query($strSQL);		
		
					echo "Copy/Upload Complete chaned to <br>";
		
				}
			}
			else 
			{
				echo "Success";
			}
		}
	
?>
<?php

	$strSQL = "SELECT * FROM leftmenu WHERE menu_id = '".$_GET["menu_id"]."' ";
	$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
	$objResult = mysql_fetch_array($objQuery);
	
?>
<div><img src="/WebDoca/myfile/<?php echo $objResult["menu_banner"];?>"></div>


</body>
</html>