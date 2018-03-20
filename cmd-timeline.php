<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>ตารางผู้บังคับบัญชา</title>
  <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Trirong" rel="stylesheet">
  <?php
  include('thaidate.php');
  include('daycolor.php');
  ?>

  <style>
  <?php $bgcolor=get_day_color(time()); ?>

  .container-fluid {
    padding: 0;
  }

  .title {
    padding: 25px;
    background-color:<?php echo $bgcolor; ?>;
  }

  .center {
    text-align: center;
  }

  body {
    font-family: 'cschatthai', serif;
  }

  .table {
    font-size: 150%;
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
        <h2 class="center"><?php echo thai_date(time()); ?></h2>
      </div>


    <table class="table">
      <tr>
        <th style="width: 20">ผู้ปฏิบัติ</th>
        <th style="width: 5%">เวลา</th>
        <th style="width: 50%">รายการปฏิบัติ</th>
        <th style="width: 25%">สถานที่</th>
      </tr>

      <tr>
        <td>จก.กร.ทบ.</td>
        <td>0700</td>
        <td>ร่วมคณะ พล.อ.ธีรชัยฯ ตรวจเยี่ยมโครงการอันเนื่องมาจากพระราชดำริพื้นที่ภาคใต้</td>
        <td>จว.น.ศ.</td>
      </tr>

      <tr>
        <td>รอง จก.กร.ทบ.</td>
        <td>0800</td>
        <td>ร่วมพิธีเปิดฝึกอบรมโครงการจิตอาสาฯ หลักสูตรหลักประจำ รุ่นที่ 1</td>
        <td>ร.1 รอ.</td>
      </tr>

      <tr>
        <td>ผอ.สกร.กร.ทบ.</td>
        <td>0830</td>
        <td>Morning Brief</td>
        <td>ห้องปฏิบัติการ ศปก.ทบ.</td>
      </tr>

      <tr>
        <td>ผอ.สจว.กร.ทบ.</td>
        <td>-</td>
        <td>ดูกิจการและศึกษาดูงานภูมิประเทศ ณ ต่างประเทศ (10-26 มี.ค. 61)</td>
        <td></td>
      </tr>

      <tr>
        <td>ที่ปรึกษา จก.ฯ<br>(พล.ต.ประดิษฐ์ฯ)</td>
        <td>-</td>
        <td>ปฏิบัติภารกิจ กร.ทบ.</td>
        <td></td>
      </tr>

      <tr>
        <td>รอง ผบ.รร.กร.ฯ</td>
        <td>-</td>
        <td>ดูกิจการและศึกษาดูงานภูมิประเทศ ณ ต่างประเทศ (10-26 มี.ค. 61)</td>
        <td></td>
      </tr>

    </table>
  </div>
</body>

</html>
