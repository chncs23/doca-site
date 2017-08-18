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

<title>Add Announcement</title>
</head>
<table align="center" cellpadding="0" cellspacing="0" background="../images/BG8.png">
    <tr>
        <td width="100%" align="center"><p><span class="style22">เพิ่มข่าวประชสัมพันธ์</span></p>
         <form action="" method="post">
            <table width="100%" border="0" cellspacing="10" cellpadding="0" >  
          <tr>
            <td width="150" align="right"><span class="style18">ข้อความประชาสัมพันธ์</span></td>
            <td width="400"><input type="text" name="ann_topic" cols="50" id="ann_topic"></td>
          </tr>
          <tr>
            <td width="150" align="right"><span class="style18">ไฟล์แนบ</span></td>
            <td width="400"><input type="text" name="ann_doc" cols="50" id="ann_topic"></td>
          </tr>
          <tr>
            <td width="150" align="right"><span class="style18">หัวข้อย่อย</span></td>
            <td width="400"><input type="text" name="ann_subtopic" cols="50" id="ann_topic"></td>
          </tr>
            <tr>
            <td width="150" align="right"><span class="style18">ไฟล์แนบหัวข้อย่อย</span></td>
            <td width="400"><input type="text" name="ann_doc2" cols="50" id="ann_topic"></td>
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

    <?php
            require_once("callconnection.php");
            
if($_POST)
{
	if ($_POST["ann_topic"]=="") 
	{
	?>
	<script language="javascript">alert("กรุณากรอก หัวข้อข่าว... "); location.href="";</script>
	<?
	exit;
	}
		else if ($_POST["ann_status"]=="") 
		{
		?>
		<script language="javascript">alert("กรุณากรอก สถานะข่าวว... "); location.href="";</script>
		<?
		exit;
		}
                                
                $strSQL = "INSERT INTO announcement";
                $strSQL .="(ann_topic,ann_doc,ann_subtopic,ann_doc2,ann_status)";
                $strSQL .="VALUES";
                $strSQL .="('".$_POST["ann_topic"]."',
									  '".$_POST["ann_doc"]."',
									  '".$_POST["ann_subtopic"]."',
									  '".$_POST["ann_doc2"]."',
									  '".$_POST["ann_status"]."')";
				
                $objQuery = mysql_query($strSQL);

                if($objQuery)
				
				
                    { // Message Box.
                      ?>
                        <script language="javascript">alert("..Saved.."); location.href="?";</script>
                      <?
                    } 
					          
}
    ?>
      </td>
    </tr>  
    </table>
<body>
</body>
</html>