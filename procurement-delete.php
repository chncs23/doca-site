<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>ลบประกาศจัดซื้อจัดจ้าง</title>
</head>
<body>

<table width="200" border="0" align="center" cellspacing="0">
  <tr height="50">
    <th scope="col">
    <?php
		require_once("callconnectionimproved.php");
		$strSQL = "DELETE FROM procurement ";
		$strSQL .="WHERE pcm_id = '".$_GET["Sendid"]."' ";
		$objQuery = mysqli_query($conn, $strSQL);
		if($objQuery)
		{
			echo "Record Deleted.";
		}
		else
		{
			echo "Error Delete [".$strSQL."]";
		}
	?>
    </th>
  </tr>
  <tr>
    <th scope="col"><input type="submit" name="Close" style="width:150px; height:50px;" class="style18" value="ปิด" onClick="self.close()">
   	</th>
  </tr>
</table>

</body>
</html>