<?php
      require 'dbconfig/config.php';         //page9-2.php
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!--meta-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
    
    <!--shortcut-->
    <link rel="shortcut icon" href="images/icon.png" title="Favicon"/>
    
    <!--style-->
    <link rel="stylesheet" type="text/css" href="css/admin7-1.css">
    <link rel="stylesheet" type="text/css" href="css/admin7-2.css">

    <!--font-->
    <link href="https://fonts.googleapis.com/css?family=Anonymous+Pro|Work+Sans" rel="stylesheet">

    <title>Classroom Schedule</title>
  </head>
  <body >
    <header>
        <img src="images/FIBO_logo.jpg" width="55" height="62" style="margin-top: 10px; margin-left: 10px">
        <div style="font-size: 1.8em; margin-top: -50px; margin-left: 80px">
        <b>Classroom Schedule</b>
        </div><br>
        </header>
        <div style="margin-top: -30px; margin-left: 450px">
            <a href="admin1.php" class="btn1"><b>Home</b></a>
            <a href="#" class="btn1"><b>User Info</b></a>
            <a href="admin3.php" class="btn1"><b>Class Info</b></a>
            <a href="admin4.php" class="btn1"><b>Class Management</b></a>
            <a href="#" class="btn1"><b>Summary</b></a>
            <a href="admin6.php" class="btn1"><b>User status</b></a>
            <a href="admin7.php" class="btn1" style=" color: #79a2ff"><b>Complete</b></a>
        </div>
        <div style="margin-top: -84px; margin-left: 1160px">
            <a href="index.php" class="btn"><b>logout</b></a>
        </div>
        <div style="margin-top: 50px;">
            <br><b class="topics">Complete Schedule</b><br><br>
            <a href="admin7.php" class="btn2"><b>ALL Schedule</b></a>
            <br><br>
            <a href="admin7-1.php" class="btn2"><b>Years Schedule</b></a>
            <br><br>
            <a href="admin7-2.php" class="btn2"><b>Name list</b></a>
        </div>
        <div  style="margin-top: -230px; margin-left: 320px" class="show">
        <h1>TEACHER</h1>
        <table>
            <tr class="head">
                <th rowspan="1">
                    Number
                </th>
                <th colspan="1">
                    Name List
                </th>

            </tr>
            
            <tr>
                <td style="background-color: yellow">
                    1
                </td>
                <td style="background-color: green">
                    <a href="admin7-3.php"><b>ดร.ชวิศร สัมฤทธิ์</b></a>
                </td>
                <?php
                   ?>
            </table>
        </div>

  </body>
</html>