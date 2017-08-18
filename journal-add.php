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

<title>Add Journal</title>
</head>
<table align="center" cellpadding="0" cellspacing="0" background="../images/BG8.png">
    <tr>
        <td width="100%" align="center"><p><span class="style22">เพิ่มบทความ</span></p>
         <form action="" method="post">
            <table width="100%" border="0" cellspacing="10" cellpadding="0" >  
          <tr>
            <td width="150" align="right"><span class="style18">หัวข้อบทความ</span></td>
            <td width="400"><input type="text" name="journal_topic" cols="50" id="journal_topic"></td>
          </tr>
          <tr>
            <td width="150" align="right"><span class="style18">ไฟล์แนบ</span></td>
            <td width="400"><input type="text" name="journal_path" cols="50" id="journal_path"></td>
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
        	<input type="submit" name="submit" style="width:100px; height:50px;" value="บันทึกข้อมูล">
            <input type="submit" name="cancelvalue" style="width:150px; height:50px;" class="style18" value="ปิด" onClick="self.close()">
            </td>
            </tr>
        </table>
    </form>

    <?php
require_once("callconnection.php");
            
if($_POST)
{
	if ($_POST["journal_topic"]=="") 
	{
	?>
	<script language="javascript">alert("กรุณากรอก หัวข้อ... "); location.href="";</script>
	<?
	exit;
	}
		else if ($_POST["journal_path"]=="") 
		{
		?>
		<script language="javascript">alert("กรุณากรอก กำหนดไฟล์... "); location.href="";</script>
		<?
		exit;
		}			                                
                $strSQL = "INSERT INTO journal";
                $strSQL .="(journal_topic,journal_path)";
                $strSQL .="VALUES";
                $strSQL .="('".$_POST["journal_topic"]."','".$_POST["journal_path"]."')";
				
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