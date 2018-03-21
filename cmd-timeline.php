<html>
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <title>ตารางผู้บังคับบัญชา</title>
  <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Trirong" rel="stylesheet">
  <?
  include('thaidate.php');
  include('daycolor.php');
  ?>

  <style>

  <?
  date_default_timezone_set("Asia/Bangkok");
  $bgcolor=get_day_color(time());
  ?>

  .container-fluid {
    padding: 0px;
  }

  .title {
    padding: 25px;
    background-color:<? echo $bgcolor; ?>;
  }

  .center {
    text-align: center;
  }

  body {
    font-family: 'cschatthai', serif;
  }

  .table {
    font-size: 120%;
  }

  @font-face {
    font-family: cschatthai;
    src: local(cschatthai), url('fonts/CSChatThaiUI.ttf') format('truetype');
}

  </style>
</head>



<body>

  <div class="container-fluid">

      <div class="title">
        <h1 class="center">ตารางการปฏิบัติผู้บังคับบัญชา กร.ทบ.</h1>
        <h2 class="center"><? echo thai_date(time()); ?></h2>
      </div>




    <table class="table">
      <tr>
        <th style="width: 20" class="center">ผู้ปฏิบัติ</th>
        <th style="width: 5%" class="center">เวลา</th>
        <th style="width: 50%" class="center">รายการปฏิบัติ</th>
        <th style="width: 25%" class="center">สถานที่</th>
      </tr>

      <?php
          $string = file_get_contents("http://gsx2json.com/api?id=15LyUbD-vAMDCtUuN6B4WqTqr7BIhrgyJyFNwMn3rnCU&sheet=1&integers=false&columns=false");
          $json_decode = json_decode($string, true);
          $cmd_data = $json_decode["rows"];
          $json_count = count($cmd_data);

          for ($index=0 ; $index<$json_count ; $index++) { ?>
            <tr>
              <td><?php echo $cmd_data[$index]["ผู้ปฏิบัติ"]; ?></td>
              <td class="center"><?php echo $cmd_data[$index]["เวลา"]; ?></td>
              <td><?php echo $cmd_data[$index]["รายการปฏิบัติ"]; ?></td>
              <td><?php echo $cmd_data[$index]["สถานที่"]; ?></td>
            </tr>
        <?php  }
      ?>

    </table>
  </div>
</body>

</html>
