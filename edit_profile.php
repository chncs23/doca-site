<?php
	session_start();
	if($_SESSION['UserID'] == "")
		{
		echo "Please Login!";
		exit();
		}
		if($_SESSION['Status'] != "ADMIN")
		{
		echo "This page for Admin only!";
		exit();
		}   
	$serverName = "localhost";
	$userName = "thaiarmy_doca";
	$userPassword = "9eUDTuxP";
	$dbName = "test";
	$objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
	$strSQL = "SELECT * FROM user WHERE UserID = '".$_SESSION['UserID']."' ";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>
<form name="form1" method="post" action="script-editprofile.php"> Edit Profile! <br>
    <table width="400" border="1" style="width: 400px">
        <tbody>
            	<tr>
                <td width="125">UserID</td> <td width="180"><?php echo $objResult["UserID"];?> </td>
                </tr>
                <tr>
                	<td>Username</td><td><?php echo $objResult["Username"];?></td>
                </tr>
                <tr>
                	<td>Pass</td><td><input name="txtPassword" type="password" id="txtPassword" value="<?php echo $objResult["Password"];?>"></td>
                </tr>
                <tr>
                	<td>Confirm Pass</td><td><input name="txtConPassword" type="password" id="txtConPassword" value="<?php echo $objResult["Password"];?>"></td>
                </tr>
                <tr>
                	<td>Name</td><td><input name="txtName" type="text" id="txtName" value="<?php echo $objResult["Name"];?>"></td>
                </tr>
                <tr>
                	<td>Status</td><td><?php echo $objResult["Status"];?></td>
            	</tr>
        </tbody>
    </table>
    <br>
    <input type="submit" name="Submit" value="Save">
</form>
</body>
</html>
<?php mysqli_close($objCon); ?>