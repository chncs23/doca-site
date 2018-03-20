<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<html>
<body>


<h3>ข่าวเตือนภัยสภาพอากาศ ข่าวสารภูมิอากาศ ข่าวการติดตามสภาพอากาศร้าย</h3>

<?php
$json = file_get_contents("http://data.tmd.go.th/api/WeatherWarningNews/v1/?uid=u61ch.n.17699&ukey=1e642bed25188f211f9a61c52d87c28f&format=json");
$json = json_decode($json);
$message = $json->WarningNews->DescriptionThai;
$documentfile = $json->WarningNews->DocumentFile;
echo str_replace(['ෳ', '෴'],"\"",$message); //message bug from api
echo 'ท่านสามารถดาวน์โหลดเอกสารได้ <a href='.$documentfile.'>ที่นี่</a>';
?>



</body>
</html>
