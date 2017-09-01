<?php
	require_once("Callconnection.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>Login</title>
<style type="text/css">
<!--
.style13 {font-family: "MS Sans serif";	font-size: 12px;	color: #666666;}
.style14 {font-family: "MS Sans serif";	font-size: 16px;	color: #FFFFFF;	font-weight: bold;	<style type="text/css">}
.style15 {font-family: "MS Sans serif"; font-size: 16px; color: #666666; font-weight: bold; }
</style>

</style>
</head>
<body topmargin="0" leftmargin="0" onload="document.all.username.focus();">

<table width="990" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th align="left" valign="top" scope="col">
	</br>
	</th>
  </tr>
</table>
</br></br></br></br>
<tr></tr>
<table width="480" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="middle"><span class="style15">
	<marquee scrollamount="5" scrolldelay="" height=50  behavior=slide direction="up" loop=1 align="center">
กรมกิจการพลเรือนทหารบก
	</marquee>
	</span></td>
  </tr>
</table>
<tr>
  <form  name=""loginform action="check_login.php" method="POST">
    <table width="296" height="178" border="1" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td valign="middle"><p></p>
            <table width="201" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td colspan="2" bgcolor="#1D3D88"><div align="center"><span class="style14">Please login..  </span></div></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td width="53"><span class="style13">Username:</span></td>
                <td width="148"><input name="username" type="text" size="20" />                </td>
              </tr>
              <tr>
                <td><span class="style13">Password:</span></td>
                <td><input name="passwd" type="password" size="20" /></td>
              </tr>
              <tr>
                <td colspan="2" align="right"  valign="bottom" height="10">
                <input name="submit" type="submit" value="Login" />
                    <input name="reset" type="reset" value="Clear" />               
                     </td>
              </tr>
          </table>
          <p></p></td>
      </tr>
    </table>
  </form>
</tr>
</body>
</html>
