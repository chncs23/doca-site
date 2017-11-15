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
        <td width="100%" align="center"><p><span class="style22">ทะเบียนส่ง</span></p>
          <form action="" method="post">
            <table width="100%" border="0" cellspacing="10" cellpadding="0" >
          <tr>
            <td width="150" align="right"><span class="style18">ที่หนังสือ:</span></td>
            <td width="400"><input type="text" value="0405.4/" name="send_number" id="send_number" size="25"></td>
          </tr>
          <tr>
            <td width="150" align="right"><span class="style18">ลงวันที่ :</span></td>
            <td width="400"><input type="text" name="send_recdate" id="send_recdate" size="25"></td>
          </tr>
          <tr>
            <td width="150" align="right"><span class="style18">ถึง :</span></td>
            <td width="400"><input type="text" name="send_to" id="send_to" size="25"></td>
          </tr>
           <tr>
            <td width="150" align="right"><span class="style18">เรื่อง :</span></td>
            <td width="400"><input type="text" name="send_topic" id="send_topic" size="50"></td>
          </tr>
           <tr>
            <td width="150" align="right"><span class="style18">การปฏิบัติ :</span></td>
            <td width="400"><input type="text" name="send_action" id="send_action" size="50"></td>
          </tr>
            <tr>
            <td width="150" align="right"><span class="style18">หมายเหตุ :</span></td>
            <td width="400"><input type="text" name="send_remark" id="send_remark" size="50"></td>
          </tr>
          <br />
          <tr>
            <td colspan="2" align="center" >
            <input type="submit" name="submit" style="width:150px; height:50px;" class="style18" value="บันทึก">
            <input type="submit" name="cancelvalue" style="width:150px; height:50px;" class="style18" value="ปิด" onClick="self.close()">
            </td>
            </tr>
        </table>
    </form>
    <?php
            require_once("callconnectionimproved.php");

            if($_POST)
            {

                $strSQL = "INSERT INTO record_send";
                $strSQL .="(send_number,send_recdate,send_to,send_topic,send_action,send_remark)";
                $strSQL .="VALUES";
                $strSQL .="('".$_POST["send_number"]."','".$_POST["send_recdate"]."','".$_POST["send_to"]."','".$_POST["send_topic"]."','".$_POST["send_action"]."','".$_POST["send_remark"]."')";

                $objQuery = mysqli_query($conn, $strSQL);

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
