<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
    <table align="center" cellpadding="0" cellspacing="0" background="../images/BG8.png">
    <tr>
        <td width="100%" align="center"><p><span class="shadowH1" style='font-size:20.0pt;line-height:100%'>เพิ่มทะเบียนส่ง</span></p><br>
          <form action="" method="post">
            <table width="100%" border="0" cellspacing="10" cellpadding="0" >  
    
          <tr>
            <td width="150" align="right">ann_topic:</td>
            <td width="400"><input type="text" name="ann_topic" id="ann_topic" size="25">
            *</td>
          </tr>
          <tr>
            <td width="150" align="right">ann_doc:</td>
            <td width="400"><input type="text" name="ann_doc" id="ann_doc" size="25"></td>
          </tr>
          <tr>
            <td width="150" align="right">ann_doc2:</td>
            <td width="400"><textarea name="ann_doc2" cols="50" id="ann_doc2"></textarea></td>
          </tr>
          <tr>
            <td width="150" align="right">ann_subtopic:</td>
            <td width="400"><textarea name="ann_subtopic" cols="50" id="ann_subtopic"></textarea></td>
          </tr>
          <tr>
            <td colspan="2" align="center">
            <input type="submit" name="submit" style="width:100px; height:50px;" value="Save">
            <input type="submit" name="cancelvalue" style="width:100px; height:50px;" value="Close" onClick="self.close()">
            </td>
            </tr>
        </table>
    </form>
    <?php
    
            require_once("callconnection.php");
            
            if($_POST)
            {
                                
                $strSQL = "INSERT INTO announcement";
                $strSQL .="(ann_topic,ann_doc,ann_doc2,ann_subtopic)";
                $strSQL .="VALUES";
                $strSQL .="('".$_POST["ann_topic"]."','".$_POST["ann_doc"]."','".$_POST["ann_doc2"]."','".$_POST["ann_subtopic"]."')";
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