<?php
define("DB_SERVER","localhost");
define("DB_USER","root");
define("DB_PASSWD","");
define("DB_CURRENT","itdoca_web");
$db = mysql_connect(DB_SERVER,DB_USER,DB_PASSWD);
$objDB = mysql_select_db("itdoca_web");
mysql_query("SET NAMES utf8");
?>
