<html>
<head>
<title></title>
</head>
<body>

<table width="200" border="0" align="center" cellspacing="0">
  <tr height="50">
    <th scope="col">
    <?php
		require_once("callconnectionimproved.php");

    $deleteActivityImgSQL = "DELETE FROM image ";
		$deleteActivityImgSQL .="WHERE act_id = '".$_GET["Sendid"]."' ";
    mysqli_query($conn, $deleteActivityImgSQL);

		$deleteActivitySQL = "DELETE FROM activity ";
		$deleteActivitySQL .="WHERE act_id = '".$_GET["Sendid"]."' ";
		$objQuery = mysqli_query($conn, $deleteActivitySQL);
		if($objQuery)
		{
			echo "Record Deleted.";
		}
		else
		{
			echo "Error Delete [".$deleteActivitySQL."]";
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
