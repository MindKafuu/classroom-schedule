<?php
    session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <!--meta-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>

    <!--shortcut-->
    <link rel="shortcut icon" href="images/icon.png" title="Favicon"/>

    <!--style-->
    <link rel="stylesheet" type="text/css" href="css/user1.css">
    <link rel="stylesheet" type="text/css" href="css/user2.css">

    <!--font-->
    <link href="https://fonts.googleapis.com/css?family=Anonymous+Pro|Work+Sans" rel="stylesheet">

    <title>Classroom Schedule</title>
  </head>
  <style>
    body {
    background-color: #ececec;
    color: #ff6c00 ;
    font-family: 'Work Sans', sans-serif;
    font-size: 1em;
    text-align: left;}
    header {
       background: #ff6c00 none repeat-x 0 0;
       color: #FFFFFF;
       margin-top: 0px;
       padding: 0 5px;
       text-align: left;}
  </style>
  <body>
    <form action="user2.php" method="POST">
    <header>
        <img src="images/FIBO_logo.jpg" width="55" height="62" style="margin-top: 10px; margin-left: 10px">
        <div style="font-size: 1.8em; margin-top: -50px; margin-left: 80px">
        <b>Classroom Schedule</b>
        </div><br>
        </header>
        <div style="margin-top: -30px; margin-left: 500px">
            <a href="#" class="btn1"><b>Profile</b></a>
            <a href="user2.php" class="btn1" style=" color: #79a2ff"><b>Inconvenient time</b></a>
            <a href="user3.php" class="btn1"><b>Classroom</b></a>
            <a href="user4.php" class="btn1"><b>Schedule</b></a>   
        </div>
        <div style="margin-top: -84px; margin-left: 1200px">
            <a href="index.php" class="btn"><b>Log out</b></a>
        </div>
        <div style="margin-top: 50px;">
            <br><b class="topics">Inconvenient Time</b><br><br>
            
        </div>
        <div style="margin-top: 20px; margin-left: 250px">
          <b><table>
            <tr>
                <th><a href="#" class = "button1">
                    <span class = "content"> Date/Time </span>
                </a></th>
                <th><button name="time1" class = "button">
                    <span class = "content"> 8.30 - 9.20 </span>
                </button></th>
                <th><button name="time2" class = "button">
                    <span class = "content"> 9.30 - 10.20 </span>
                </button></th>
                <th><button name="time3" class = "button name="time1"">
                    <span class = "content"> 10.30 - 11.20 </span>
                </button></th>
                <th><button name="time4" class = "button">
                    <span class = "content"> 11.30 - 12.20 </span>
                </button></th>
                <th><button name="time5" class = "button">
                    <span class = "content"> 12.30 - 13.20 </span>
                </button></th>
                <th><button name="time6" class = "button">
                    <span class = "content"> 13.30 - 14.20 </span>
                </button></th>
                <th><button name="time7" class = "button">
                    <span class = "content"> 14.30 - 15.20 </span>
                </button></th>
                <th><button name="time8" class = "button">
                    <span class = "content"> 15.30 - 16.20 </span>
                </button></th>
                <th><button name="time9" class = "button">
                    <span class = "content"> 16.30 - 17.20 </span>
                </button></th>
                <th><button name="time10" class = "button">
                    <span class = "content"> 17.30 - 18.20 </span>
                </button></th>
            </tr>
            <tr>
                <td><button name="day1" class = "button">
                    <span class = "content"> Monday </span>
                </button></td>
                <td><button name="day1_1" class = "button2">
                    <span class = "content">  </span>
                </button></td>
                <td><button name="day1_2" class = "button2">
                    <span class = "content">  </span>
                </button></td>
                <td><button name="day1_3" class = "button2">
                    <span class = "content">  </span>
                </button></td>
                <td><button name="day1_4" class = "button2">
                    <span class = "content">  </span>
                </button></td>
                <td><button name="day1_5" class = "button2">
                    <span class = "content">  </span>
                </button></td>
                <td><button name="day1_6" class = "button2">
                    <span class = "content">  </span>
                </button></td>
                <td><button name="day1_7" class = "button2">
                    <span class = "content"> </span>
                </button></td>
                <td><button name="day1_8" class = "button2">
                    <span class = "content">  </span>
                </button></td>
                <td><button name="day1_9" class = "button2">
                    <span class = "content">  </span>
                </button></td>
                <td><button name="day1_10" class = "button2">
                    <span class = "content">  </span>
                </button></td>
            </tr>
            <tr>
                <td><button name="day2" class = "button">
                    <span class = "content"> Tuesday </span>
                </button></td>
                <td><button name="day2_1" class = "button2">
                <span class = "content">  </span>
                </button></td>
                <td><button name="day2_2" class = "button2">
                    <span class = "content">  </span>
                </button></td>
                <td><button name="day2_3" class = "button2">
                    <span class = "content">  </span>
                </button></td>
                <td><button name="day2_4" class = "button2">
                    <span class = "content">  </span>
                </button></td>
                <td><button name="day2_5" class = "button2">
                    <span class = "content">  </span>
                </button></td>
                <td><button name="day2_6" class = "button2">
                    <span class = "content">  </span>
                </button></td>
                <td><button name="day2_7" class = "button2">
                    <span class = "content"> </span>
                </button></td>
                <td><button name="day2_8" class = "button2">
                    <span class = "content">  </span>
                </button></td>
                <td><button name="day2_9" class = "button2">
                    <span class = "content">  </span>
                </button></td>
                <td><button name="day2_10" class = "button2">
                    <span class = "content">  </span>
                </button></td>
            </tr>
            <tr>
                <td><button name="day3" class = "button">
                    <span class = "content"> Wednesday </span>
                </button></td>
                <td><button name="day3_1" class = "button2">
                <span class = "content">  </span>
                </button></td>
                <td><button name="day3_2" class = "button2">
                    <span class = "content">  </span>
                </button></td>
                <td><button name="day3_3" class = "button2">
                    <span class = "content">  </span>
                </button></td>
                <td><button name="day3_4" class = "button2">
                    <span class = "content">  </span>
                </button></td>
                <td><button name="day3_5" class = "button2">
                    <span class = "content">  </span>
                </button></td>
                <td><button name="day3_6" class = "button2">
                    <span class = "content">  </span>
                </button></td>
                <td><button name="day3_7" class = "button2">
                    <span class = "content"> </span>
                </button></td>
                <td><button name="day3_8" class = "button2">
                    <span class = "content">  </span>
                </button></td>
                <td><button name="day3_9" class = "button2">
                    <span class = "content">  </span>
                </button></td>
                <td><button name="day3_10" class = "button2">
                    <span class = "content">  </span>
                </button></td>
            </tr>
            <tr>
                <td><button name="day4" class = "button">
                    <span class = "content"> Thursday </span>
                </button></td>
                <td><button name="day4_1" class = "button2">
                <span class = "content">  </span>
                </button></td>
                <td><button name="day4_2" class = "button2">
                    <span class = "content">  </span>
                </button></td>
                <td><button name="day4_3" class = "button2">
                    <span class = "content">  </span>
                </button></td>
                <td><button name="day4_4" class = "button2">
                    <span class = "content">  </span>
                </button></td>
                <td><button name="day4_5" class = "button2">
                    <span class = "content">  </span>
                </button></td>
                <td><button name="day4_6" class = "button2">
                    <span class = "content">  </span>
                </button></td>
                <td><button name="day4_7" class = "button2">
                    <span class = "content"> </span>
                </button></td>
                <td><button name="day4_8" class = "button2">
                    <span class = "content">  </span>
                </button></td>
                <td><button name="day4_9" class = "button2">
                    <span class = "content">  </span>
                </button></td>
                <td><button name="day4_10" class = "button2">
                    <span class = "content">  </span>
                </button></td>
            </tr>
            <tr>
                <td><button name="day5" class = "button">
                    <span class = "content"> Friday </span>
                </button></td>
                <td><button name="day5_1" class = "button2">
                <span class = "content">  </span>
                </button></td>
                <td><button name="day5_2" class = "button2">
                    <span class = "content">  </span>
                </button></td>
                <td><button name="day5_3" class = "button2">
                    <span class = "content">  </span>
                </button></td>
                <td><button name="day5_4" class = "button2">
                    <span class = "content">  </span>
                </button></td>
                <td><button name="day5_5" class = "button2">
                    <span class = "content">  </span>
                </button></td>
                <td><button name="day5_6" class = "button2">
                    <span class = "content">  </span>
                </button></td>
                <td><button name="day5_7" class = "button2">
                    <span class = "content"> </span>
                </button></td>
                <td><button name="day5_8" class = "button2">
                    <span class = "content">  </span>
                </button></td>
                <td><button name="day5_9" class = "button2">
                    <span class = "content">  </span>
                </button></td>
                <td><button name="day5_10" class = "button2">
                    <span class = "content">  </span>
                </button></td>
            </tr>
            <tr>
                <td><button name="day6" class = "button">
                    <span class = "content"> Saturday </span>
                </button></td>
                <td><button name="day6_1" class = "button2">
                <span class = "content">  </span>
                </button></td>
                <td><button name="day6_2" class = "button2">
                    <span class = "content">  </span>
                </button></td>
                <td><button name="day6_3" class = "button2">
                    <span class = "content">  </span>
                </button></td>
                <td><button name="day6_4" class = "button2">
                    <span class = "content">  </span>
                </button></td>
                <td><button name="day6_5" class = "button2">
                    <span class = "content">  </span>
                </button></td>
                <td><button name="day6_6" class = "button2">
                    <span class = "content">  </span>
                </button></td>
                <td><button name="day6_7" class = "button2">
                    <span class = "content"> </span>
                </button></td>
                <td><button name="day6_8" class = "button2">
                    <span class = "content">  </span>
                </button></td>
                <td><button name="day6_9" class = "button2">
                    <span class = "content">  </span>
                </button></td>
                <td><button name="day6_10" class = "button2">
                    <span class = "content">  </span>
                </button></td>
            </tr>
            </table></b>
        </div>
        <div style ="font-size: 24px; font-family:'Work Sans', sans-serif">

        <a href="#" class = "buttonsave">
                <span class = "content"><b>save</b></span>
            </a>
    </div>
    </form>
        <?php
            $time1 = 0;
            $time2 = 0;
            $time3 = 0;
            $time4 = 0;
            $time5 = 0;
            $time6 = 0;
            $time7 = 0;
            $time8 = 0;
            $time9 = 0;
            $time10 = 0;
            if(isset($_POST['time1'])){$time1 = 5; $_SESSION['time1'] = $time1;}
            if(isset($_POST['time2'])){$time2 = 5; $_SESSION['time2'] = $time2;}
            if(isset($_POST['time3'])){$time3 = 5; $_SESSION['time3'] = $time3;}
            if(isset($_POST['time4'])){$time4 = 5; $_SESSION['time4'] = $time4;}
            if(isset($_POST['time5'])){$time5 = 5; $_SESSION['time5'] = $time5;}
            if(isset($_POST['time6'])){$time6 = 5; $_SESSION['time6'] = $time6;}
            if(isset($_POST['time7'])){$time7 = 5; $_SESSION['time7'] = $time7;}
            if(isset($_POST['time8'])){$time8 = 5; $_SESSION['time8'] = $time8;}
            if(isset($_POST['time9'])){$time9 = 5; $_SESSION['time9'] = $time9;}
            if(isset($_POST['time10'])){$time10 = 5; $_SESSION['time10'] = $time10;}
            $day1 = 0;
            $day2 = 0;
            $day3 = 0;
            $day4 = 0;
            $day5 = 0;
            $day6 = 0;
            if(isset($_POST['day1'])){$day1 = 10; $_SESSION['day1'] = $day1;}
            if(isset($_POST['day2'])){$day2 = 10; $_SESSION['day2'] = $day2;}
            if(isset($_POST['day3'])){$day3 = 10; $_SESSION['day3'] = $day3;}
            if(isset($_POST['day4'])){$day4 = 10; $_SESSION['day4'] = $day4;}
            if(isset($_POST['day5'])){$day5 = 10; $_SESSION['day5'] = $day5;}
            if(isset($_POST['day6'])){$day6 = 10; $_SESSION['day6'] = $day6;}
            $day1_1 = 0;
            $day1_2 = 0;
            $day1_3 = 0;
            $day1_4 = 0;
            $day1_5 = 0;
            $day1_6 = 0;
            $day1_7 = 0;
            $day1_8 = 0;
            $day1_9 = 0;
            $day1_10 = 0;
            if(isset($_POST['day1_1'])){$day1_1 = 1; $_SESSION['day1_1'] = $day1_1;}
            if(isset($_POST['day1_2'])){$day1_2 = 1; $_SESSION['day1_2'] = $day1_2;}
            if(isset($_POST['day1_3'])){$day1_3 = 1; $_SESSION['day1_3'] = $day1_3;}
            if(isset($_POST['day1_4'])){$day1_4 = 1; $_SESSION['day1_4'] = $day1_4;}
            if(isset($_POST['day1_5'])){$day1_5 = 1; $_SESSION['day1_5'] = $day1_5;}
            if(isset($_POST['day1_6'])){$day1_6 = 1; $_SESSION['day1_6'] = $day1_6;}
            if(isset($_POST['day1_7'])){$day1_7 = 1; $_SESSION['day1_7'] = $day1_7;}
            if(isset($_POST['day1_8'])){$day1_8 = 1; $_SESSION['day1_8'] = $day1_8;}
            if(isset($_POST['day1_9'])){$day1_9 = 1; $_SESSION['day1_9'] = $day1_9;}
            if(isset($_POST['day1_10'])){$day1_10 = 1; $_SESSION['day1_10'] = $day1_10;}
            $day2_1 = 0;
            $day2_2 = 0;
            $day2_3 = 0;
            $day2_4 = 0;
            $day2_5 = 0;
            $day2_6 = 0;
            $day2_7 = 0;
            $day2_8 = 0;
            $day2_9 = 0;
            $day2_10 = 0;
            if(isset($_POST['day2_1'])){$day2_1 = 1; $_SESSION['day2_1'] = $day2_1;}
            if(isset($_POST['day2_2'])){$day2_2 = 1; $_SESSION['day2_2'] = $day2_2;}
            if(isset($_POST['day2_3'])){$day2_3 = 1; $_SESSION['day2_3'] = $day2_3;}
            if(isset($_POST['day2_4'])){$day2_4 = 1; $_SESSION['day2_4'] = $day2_4;}
            if(isset($_POST['day2_5'])){$day2_5 = 1; $_SESSION['day2_5'] = $day2_5;}
            if(isset($_POST['day2_6'])){$day2_6 = 1; $_SESSION['day2_6'] = $day2_6;}
            if(isset($_POST['day2_7'])){$day2_7 = 1; $_SESSION['day2_7'] = $day2_7;}
            if(isset($_POST['day2_8'])){$day2_8 = 1; $_SESSION['day2_8'] = $day2_8;}
            if(isset($_POST['day2_9'])){$day2_9 = 1; $_SESSION['day2_9'] = $day2_9;}
            if(isset($_POST['day2_10'])){$day2_10 = 1; $_SESSION['day2_10'] = $day2_10;}
            $day3_1 = 0;
            $day3_2 = 0;
            $day3_3 = 0;
            $day3_4 = 0;
            $day3_5 = 0;
            $day3_6 = 0;
            $day3_7 = 0;
            $day3_8 = 0;
            $day3_9 = 0;
            $day3_10 = 0;
            if(isset($_POST['day3_1'])){$day3_1 = 1; $_SESSION['day3_1'] = $day3_1;}
            if(isset($_POST['day3_2'])){$day3_2 = 1; $_SESSION['day3_2'] = $day3_2;}
            if(isset($_POST['day3_3'])){$day3_3 = 1; $_SESSION['day3_3'] = $day3_3;}
            if(isset($_POST['day3_4'])){$day3_4 = 1; $_SESSION['day3_4'] = $day3_4;}
            if(isset($_POST['day3_5'])){$day3_5 = 1; $_SESSION['day3_5'] = $day3_5;}
            if(isset($_POST['day3_6'])){$day3_6 = 1; $_SESSION['day3_6'] = $day3_6;}
            if(isset($_POST['day3_7'])){$day3_7 = 1; $_SESSION['day3_7'] = $day3_7;}
            if(isset($_POST['day3_8'])){$day3_8 = 1; $_SESSION['day3_8'] = $day3_8;}
            if(isset($_POST['day3_9'])){$day3_9 = 1; $_SESSION['day3_9'] = $day3_9;}
            if(isset($_POST['day3_10'])){$day3_10 = 1; $_SESSION['day3_10'] = $day3_10;}
            $day4_1 = 0;
            $day4_2 = 0;
            $day4_3 = 0;
            $day4_4 = 0;
            $day4_5 = 0;
            $day4_6 = 0;
            $day4_7 = 0;
            $day4_8 = 0;
            $day4_9 = 0;
            $day4_10 = 0;
            if(isset($_POST['day4_1'])){$day4_1 = 1; $_SESSION['day4_1'] = $day4_1;}
            if(isset($_POST['day4_2'])){$day4_2 = 1; $_SESSION['day4_2'] = $day4_2;}
            if(isset($_POST['day4_3'])){$day4_3 = 1; $_SESSION['day4_3'] = $day4_3;}
            if(isset($_POST['day4_4'])){$day4_4 = 1; $_SESSION['day4_4'] = $day4_4;}
            if(isset($_POST['day4_5'])){$day4_5 = 1; $_SESSION['day4_5'] = $day4_5;}
            if(isset($_POST['day4_6'])){$day4_6 = 1; $_SESSION['day4_6'] = $day4_6;}
            if(isset($_POST['day4_7'])){$day4_7 = 1; $_SESSION['day4_7'] = $day4_7;}
            if(isset($_POST['day4_8'])){$day4_8 = 1; $_SESSION['day4_8'] = $day4_8;}
            if(isset($_POST['day4_9'])){$day4_9 = 1; $_SESSION['day4_9'] = $day4_9;}
            if(isset($_POST['day4_10'])){$day4_10 = 1; $_SESSION['day4_10'] = $day4_10;}
            $day5_1 = 0;
            $day5_2 = 0;
            $day5_3 = 0;
            $day5_4 = 0;
            $day5_5 = 0;
            $day5_6 = 0;
            $day5_7 = 0;
            $day5_8 = 0;
            $day5_9 = 0;
            $day5_10 = 0;
            if(isset($_POST['day5_1'])){$day5_1 = 1; $_SESSION['day5_1'] = $day5_1;}
            if(isset($_POST['day5_2'])){$day5_2 = 1; $_SESSION['day5_2'] = $day5_2;}
            if(isset($_POST['day5_3'])){$day5_3 = 1; $_SESSION['day5_3'] = $day5_3;}
            if(isset($_POST['day5_4'])){$day5_4 = 1; $_SESSION['day5_4'] = $day5_4;}
            if(isset($_POST['day5_5'])){$day5_5 = 1; $_SESSION['day5_5'] = $day5_5;}
            if(isset($_POST['day5_6'])){$day5_6 = 1; $_SESSION['day5_6'] = $day5_6;}
            if(isset($_POST['day5_7'])){$day5_7 = 1; $_SESSION['day5_7'] = $day5_7;}
            if(isset($_POST['day5_8'])){$day5_8 = 1; $_SESSION['day5_8'] = $day5_8;}
            if(isset($_POST['day5_9'])){$day5_9 = 1; $_SESSION['day5_9'] = $day5_9;}
            if(isset($_POST['day5_10'])){$day5_10 = 1; $_SESSION['day5_10'] = $day5_10;}
            $day6_1 = 0;
            $day6_2 = 0;
            $day6_3 = 0;
            $day6_4 = 0;
            $day6_5 = 0;
            $day6_6 = 0;
            $day6_7 = 0;
            $day6_8 = 0;
            $day6_9 = 0;
            $day6_10 = 0;
            if(isset($_POST['day6_1'])){$day6_1 = 1; $_SESSION['day6_1'] = $day6_1;}
            if(isset($_POST['day6_2'])){$day6_2 = 1; $_SESSION['day6_2'] = $day6_2;}
            if(isset($_POST['day6_3'])){$day6_3 = 1; $_SESSION['day6_3'] = $day6_3;}
            if(isset($_POST['day6_4'])){$day6_4 = 1; $_SESSION['day6_4'] = $day6_4;}
            if(isset($_POST['day6_5'])){$day6_5 = 1; $_SESSION['day6_5'] = $day6_5;}
            if(isset($_POST['day6_6'])){$day6_6 = 1; $_SESSION['day6_6'] = $day6_6;}
            if(isset($_POST['day6_7'])){$day6_7 = 1; $_SESSION['day6_7'] = $day6_7;}
            if(isset($_POST['day6_8'])){$day6_8 = 1; $_SESSION['day6_8'] = $day6_8;}
            if(isset($_POST['day6_9'])){$day6_9 = 1; $_SESSION['day6_9'] = $day6_9;}
            if(isset($_POST['day6_10'])){$day6_10 = 1; $_SESSION['day6_10'] = $day6_10;}

            if($_SESSION['time1'] != 0 || $_SESSION['time2'] != 0 || $_SESSION['time3'] != 0 || $_SESSION['time4'] != 0 || $_SESSION['time5'] != 0 || $_SESSION['time6'] != 0 || $_SESSION['time7'] != 0 || $_SESSION['time8'] != 0 || $_SESSION['time9'] != 0 || $_SESSION['time10'] != 0 || $_SESSION['day1'] != 0 || $_SESSION['day2'] != 0 || $_SESSION['day3'] != 0 || $_SESSION['day4'] != 0 || $_SESSION['day5'] != 0 || $_SESSION['day6'] != 0 || $_SESSION['day1_1'] != 0 || $_SESSION['day1_2'] != 0 || $_SESSION['day1_3'] != 0 || $_SESSION['day1_4'] != 0 || $_SESSION['day1_5'] != 0 || $_SESSION['day1_6'] != 0 || $_SESSION['day1_7'] != 0 || $_SESSION['day1_8'] != 0 || $_SESSION['day1_9'] != 0 || $_SESSION['day1_10'] != 0 || $_SESSION['day2_1'] != 0 || $_SESSION['day2_2'] != 0 || $_SESSION['day2_3'] != 0 || $_SESSION['day2_4'] != 0 || $_SESSION['day2_5'] != 0 || $_SESSION['day2_6'] != 0 || $_SESSION['day2_7'] != 0 || $_SESSION['day2_8'] != 0 || $_SESSION['day2_9'] != 0 || $_SESSION['day2_10'] != 0 || $_SESSION['day3_1'] != 0 || $_SESSION['day3_2'] != 0 || $_SESSION['day3_3'] != 0 || $_SESSION['day3_4'] != 0 || $_SESSION['day3_5'] != 0 || $_SESSION['day3_7'] != 0 || $_SESSION['day3_8'] != 0 || $_SESSION['day3_9'] != 0 || $_SESSION['day3_10'] != 0 || $_SESSION['day4_1'] != 0 || $_SESSION['day4_2'] != 0 || $_SESSION['day4_3'] != 0 || $_SESSION['day4_4'] != 0 || $_SESSION['day4_5'] != 0 || $_SESSION['day4_6'] != 0 || $_SESSION['day4_7'] != 0 || $_SESSION['day4_8'] != 0 || $_SESSION['day4_9'] != 0 || $_SESSION['day4_10'] != 0 || $_SESSION['day5_1'] != 0 || $_SESSION['day5_2'] != 0 || $_SESSION['day5_3'] != 0 || $_SESSION['day5_4'] != 0 || $_SESSION['day5_5'] != 0 || $_SESSION['day5_6'] != 0 || $_SESSION['day5_7'] != 0 || $_SESSION['day5_8'] != 0 || $_SESSION['day5_9'] != 0 || $_SESSION['day6_1'] != 0 || $_SESSION['day6_2'] != 0 || $_SESSION['day6_3'] != 0 || $_SESSION['day6_4'] != 0 || $_SESSION['day6_5'] != 0 || $_SESSION['day6_6'] != 0 || $_SESSION['day6_7'] != 0 || $_SESSION['day6_8'] != 0 || $_SESSION['day6_9'] != 0 || $_SESSION['day6_10'] != 0) {
            $total = $_SESSION['time1'] + $_SESSION['time2'] + $_SESSION['time3'] + $_SESSION['time4'] + $_SESSION['time5'] + $_SESSION['time6'] + $_SESSION['time7'] + $_SESSION['time8'] + $_SESSION['time9'] + $_SESSION['time10'] + $_SESSION['day1'] + $_SESSION['day2'] + $_SESSION['day3'] + $_SESSION['day4'] + $_SESSION['day5'] + $_SESSION['day6'] + $_SESSION['day1_1'] + $_SESSION['day1_2'] + $_SESSION['day1_3'] + $_SESSION['day1_4'] + $_SESSION['day1_5'] + $_SESSION['day1_6'] + $_SESSION['day1_7'] + $_SESSION['day1_8'] + $_SESSION['day1_9'] + $_SESSION['day1_10'] + $_SESSION['day2_1'] + $_SESSION['day2_2'] + $_SESSION['day2_3'] + $_SESSION['day2_4'] + $_SESSION['day2_5'] + $_SESSION['day2_6'] + $_SESSION['day2_7'] + $_SESSION['day2_8'] + $_SESSION['day2_9'] + $_SESSION['day2_10'] + $_SESSION['day3_1'] + $_SESSION['day3_2'] + $_SESSION['day3_3'] + $_SESSION['day3_4'] + $_SESSION['day3_5'] + $_SESSION['day3_7'] + $_SESSION['day3_8'] + $_SESSION['day3_9'] + $_SESSION['day3_10'] + $_SESSION['day4_1'] + $_SESSION['day4_2'] + $_SESSION['day4_3'] + $_SESSION['day4_4'] + $_SESSION['day4_5'] + $_SESSION['day4_6'] + $_SESSION['day4_7'] + $_SESSION['day4_8'] + $_SESSION['day4_9'] + $_SESSION['day4_10'] + $_SESSION['day5_1'] + $_SESSION['day5_2'] + $_SESSION['day5_3'] + $_SESSION['day5_4'] + $_SESSION['day5_5'] + $_SESSION['day5_6'] + $_SESSION['day5_7'] + $_SESSION['day5_8'] + $_SESSION['day5_9'] + $_SESSION['day6_1'] + $_SESSION['day6_2'] + $_SESSION['day6_3'] + $_SESSION['day6_4'] + $_SESSION['day6_5'] + $_SESSION['day6_6'] + $_SESSION['day6_7'] + $_SESSION['day6_8'] + $_SESSION['day6_9'] + $_SESSION['day6_10'];
            echo "<p style = 'margin-left: 600px; margin-top: -50px; font-size: 30px'>total : ".$total."</br></br></br></p>";
            }
        ?>
        
  </body>
</html>
<?php

// Turn off all error reporting
error_reporting(0);

// Report simple running errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);

// Reporting E_NOTICE can be good too (to report uninitialized
// variables or catch variable name misspellings ...)
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);

// Report all PHP errors (see changelog)
error_reporting(E_ALL);

// Report all PHP errors
error_reporting(-1);

// Same as error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);

?>