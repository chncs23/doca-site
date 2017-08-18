<?php

	require_once("callconnection.php");	
	$receiveid = $_GET['Sendid'];
	
		$strSQL = "SELECT * FROM fft WHERE fft_id like '%".$receiveid."%'";
		$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
  
	$Rows = mysql_fetch_array($objQuery);	
		  
		$FFT_id 	 = $Rows['fft_id'];
		$FFT_details = $Rows['fft_details'];
		$FFT_status  = $Rows['fft_status'];
	
?>

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
<table align="center" cellpadding="0" cellspacing="0" background="../images/BG8.png">
    <tr>
        <td width="100%" align="center"><p><span class="style22">ข่าวด่วน</span></p>
          <form action="" method="post">
            <table width="100%" border="0" cellspacing="10" cellpadding="0" >  
          <tr>
            <td width="150" align="right"><span class="style18">ข้อความ</span></td>
            <td width="400"><textarea name="fft_details" cols="50" id="fft_details"><?php echo $FFT_details;?></textarea></td>
          </tr>
          <tr>
            <td width="150" align="right"><span class="style18">สถานะ</span></td> 
            <td width="400">
                             
            <p>
            <select name="fft_status">
                <option value="n">Disabled</option>
                <option value="y">Enabled</option>
            </select>
            </p>
          	</td>
          </tr>
          
          <br />
          <tr>
            <td colspan="2" align="center" >
        	<input type="submit" name="submit" style="width:100px; height:50px;" value="Update ข้อมูล">
            <input type="submit" name="cancelvalue" style="width:150px; height:50px;" class="style18" value="ปิด" onClick="self.close()">
            </td>
            </tr>
        </table>
    </form>

   <?
		require_once("callconnection.php");
		
		if($_POST)
		{
			$strSQL = "UPDATE fft SET ";
			$strSQL .="fft_details = '".$_POST["fft_details"]."' ";
			$strSQL .=",fft_status = '".$_POST["fft_status"]."' ";
			$strSQL .="WHERE fft_id like '%".$receiveid."%'";
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