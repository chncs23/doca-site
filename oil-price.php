<html>
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
  <?php
  include('../thaidate.php');
  include('../daycolor.php');
  date_default_timezone_set("Asia/Bangkok");
  ?>

  <style>
  <?php $bgcolor=get_day_color(time()); ?>

  .alt-grid [class*="col-"] {padding-left:15;padding-right:15}
  .alt-grid .row {margin-left:0;margin-right:0}

  /* container adjusted */
  .alt-grid .container-fluid {width:100%;max-width:none;padding:0;}

  .title {
    padding: 25px;
    background-color:<?php echo $bgcolor; ?>;
  }

  .region-title {
    background-color: #ededed;
  }

  .padding {
    padding: 15px;
  }

  .padding-top {
    padding: 15px;
  }

  .center {
    text-align: center;
  }

  .center-img {
    display: block;
    margin: auto auto;
  }

  .iconsize{
    width: 50%;
    height: : 75%;
  }

  body {
    font-family: 'cschatthai', serif;
  }

  .table {
    font-size: 120%;
  }

  @font-face {
    font-family: cschatthai;
    src: local(cschatthai), url('../fonts/CSChatThaiUI.ttf') format('truetype');
  }

  </style>
</head>

<body class="alt-grid">

  <div class="container-fluid">

    <?php
    $client = new SoapClient("http://www.pttplc.com/webservice/pttinfo.asmx?WSDL", // URL ของ webservice
    array(
      "trace"      => 1,		// enable trace to view what is happening
      "exceptions" => 0,		// disable exceptions
      "cache_wsdl" => 0) 		// disable any caching on the wsdl, encase you alter the wsdl server
    );

    // ตัวแปลที่ webservice ต้องการสำหรับ GetOilPriceResult เป็นวันเดือนปีและ ภาษา
    $params = array(
      'Language' => "th",
      'DD' => date("j",time()),
      'MM' => date("n",time()),
      'YYYY' => date("Y",time())
    );

    // เรียกใช้ method GetOilPrice และ ใส่ตัวแปลเข้าไป
    $data = $client->GetOilPrice($params);

    //เก็บตัวแปลผลลัพธ์ที่ได้
    $ob = $data->GetOilPriceResult;

    // เนื่องจากข้อมูลที่ได้เป็น string(ในรูปแบบ xml) จึงต้องแปลงเป็น object ให้ง่ายต่อการเข้าถึง
    $xml = new SimpleXMLElement($ob);?>

    // attr  PRICE_DATE , PRODUCT ,PRICE
    //loop เพื่อแสดงผล
    <?php foreach ($xml  as  $key =>$val) {
      ?>


        <table class="table">
          // ถ้าไม่มีราคาก็ไม่ต้องแสดงผล เนื่องจากมีบางรายการไม่มีราคา
              <th><?php echo $val->PRODUCT; ?></th><td><?php echo $val->PRICE.' บาท'; ?></td>
            </tr>
            <?php
          }?>
        </table>


    </div>
  </body>
  </html>
