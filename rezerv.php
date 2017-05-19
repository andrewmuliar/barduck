<?php
 if(isset($_POST['Name']) && 
 	isset($_POST['Count']) && 
 	isset($_POST['Time']) &&
 	isset($_POST['Day']) &&
 	isset($_POST['Tel']))
 {
  $Name  = $_POST['Name'];
  $Count = $_POST['Count'];
  $Time  = $_POST['Time'];
  $Day   = $_POST['Day'];
  $Tel   = $_POST['Tel'];
  $to = "rezerv@barduck.com.ua";
  $subject = 'Резерв столику з сайту Barduck';
  $headers = "From: Barduck.com.ua\r\n";
  $headers .= "Reply-To: Admin\r\n";
  $headers .= "CC: rezerv@barduck.com.ua\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=utf-8\r\n";
  $msg = "<html>
  <head>
   <title>Barduck резерв столику</title>
  </head>
  <body>
   <p>Замовлення здійснене <b>".date("d-m-Y h:i:sa")."</b></p>
   <table style='border:1px solid black;
    width:100%;
    font-size:18px;
    font-family: 'Times New Roman';'>
   <tr>
    <th>На ім'я</th>
    <th>Кількість осіб</th>
    <th>Телефон</th>
    <th>На дату і час</th>
   </tr>
   <tr>
    <td style='text-align: center;'>".$Name."</td>
    <td style='text-align: center;'>".$Count."</td>
    <td style='text-align: center;'>".$Tel."</td>
    <td style='text-align:center;'>".$Time." - ".$Day."</td>
   </tr>
   </table>
  </body>
 </html>";
 mail($to,$subject, $msg, $headers);
 echo '200';
 }
?>