<?php

	require_once("callconnection.php");	
	$receiveid = $_GET['Sendid'];
	
		$strSQL = "SELECT * FROM announcement WHERE ann_id like '%".$receiveid."%'";
		$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
  
	$Rows = mysql_fetch_array($objQuery);	
		  
		$ann_id 	 = $Rows['ann_id'];
		$ann_topic   = $Rows['ann_topic'];
		$ann_doc	 = $Rows['ann_doc'];
		$ann_subtopic 	 = $Rows['ann_subtopic'];
		$ann_doc2   	= $Rows['ann_doc2'];
		$ann_status  	= $Rows['ann_status'];
	
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
        <td width="100%" align="center"><p><span class="style22">ข่าวประชาสัมพันธ์</span></p>
          <form action="" method="post">
            <table width="100%" border="0" cellspacing="10" cellpadding="0" >  
          <tr>
            <td width="150" align="right"><span class="style18">ข้อความประชาสัมพันธ์</span></td>
            <td width="400"><textarea name="ann_topic" cols="50" id="ann_topic"><?php echo $ann_topic;?></textarea></td>
          </tr>
          <tr>
            <td width="150" align="right"><span class="style18">ไฟล์แนบ</span></td>
            <td width="400"><textarea name="ann_doc" cols="50" id="ann_topic"><?php echo $ann_doc;?></textarea></td>
          </tr>
          <tr>
            <td width="150" align="right"><span class="style18">หัวข้อย่อย</span></td>
            <td width="400"><textarea name="ann_subtopic" cols="50" id="ann_topic"><?php echo $ann_subtopic;?></textarea></td>
          </tr>
            <tr>
            <td width="150" align="right"><span class="style18">ไฟล์แนบหัวข้อย่อย</span></td>
            <td width="400"><textarea name="ann_doc2" cols="50" id="ann_topic"><?php echo $ann_doc2;?></textarea></td>
          </tr>
          <tr>
            <td width="150" align="right"><span class="style18">สถานะ</span></td> 
            <td width="400">
                             
            <p>
            <select name="ann_status">
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
			$strSQL = "UPDATE announcement SET ";
			$strSQL .="ann_topic = '".$_POST["ann_topic"]."' ";
			$strSQL .=",ann_doc = '".$_POST["ann_doc"]."' ";
			$strSQL .=",ann_subtopic = '".$_POST["ann_subtopic"]."' ";
			$strSQL .=",ann_doc2 = '".$_POST["ann_doc2"]."' ";
			$strSQL .=",ann_status = '".$_POST["ann_status"]."' ";
			$strSQL .="WHERE ann_id like '%".$receiveid."%'";
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