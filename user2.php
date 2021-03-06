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
    <link rel="stylesheet" type="text/css" href="css/user2-1.css">

    <!--font-->
    <link href="https://fonts.googleapis.com/css?family=Anonymous+Pro|Work+Sans" rel="stylesheet">

    <!--javascript-->
    <script src="http://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

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
                <th><button type="button" name="time1" class = "b-tn">
                    <span class = "content"> 8.30 - 9.20 </span>
                </button></th>
                <th><button type="button" name="time2" class = "b-tn">
                    <span class = "content"> 9.30 - 10.20 </span>
                </button></th>
                <th><button type="button" name="time3" class = "b-tn">
                    <span class = "content"> 10.30 - 11.20 </span>
                </button></th>
                <th><button type="button" name="time4" class = "b-tn">
                    <span class = "content"> 11.30 - 12.20 </span>
                </button></th>
                <th><button type="button" name="time5" class = "b-tn">
                    <span class = "content"> 12.30 - 13.20 </span>
                </button></th>
                <th><button type="button" name="time6" class = "b-tn">
                    <span class = "content"> 13.30 - 14.20 </span>
                </button></th>
                <th><button type="button" name="time7" class = "b-tn">
                    <span class = "content"> 14.30 - 15.20 </span>
                </button></th>
                <th><button type="button" name="time8" class = "b-tn">
                    <span class = "content"> 15.30 - 16.20 </span>
                </button></th>
                <th><button type="button" name="time9" class = "b-tn">
                    <span class = "content"> 16.30 - 17.20 </span>
                </button></th>
                <th><button type="button" name="time10" class = "b-tn">
                    <span class = "content"> 17.30 - 18.20 </span>
                </button></th>
            </tr>
            <tr>
            <?php
                echo "<td><button type='button' name='day1' class = 'b-tn'>
                <span class = 'content'> Monday </span>
                </button></td>";
                for ($x = 0; $x <= 9; $x++) {
                    echo " <td><button type='button' name='day1_$x' class='b-tn2'>
                    <span class = 'content'> </span>
                    </button></td>";
                }
            ?>
            </tr>
            <tr>
            <?php
                echo "<td><button type='button' name='day2' class = 'b-tn'>
                <span class = 'content'> Tuesday </span>
                </button></td>";
                for ($x = 0; $x <= 9; $x++) {
                    echo " <td><button type='button' name='day2_$x' class='b-tn2'>
                    <span class = 'content'> </span>
                    </button></td>";
                }
            ?>
            </tr>
            <tr>
            <?php
            echo "<td><button type='button' name='day3' class = 'b-tn'>
            <span class = 'content'> Wednesday </span>
            </button></td>";
            for ($x = 0; $x <= 9; $x++) {
                echo " <td><button type='button' name='day3_$x' class='b-tn2'>
                <span class = 'content'> </span>
                </button></td>";
            }
        ?>
            </tr>
            <tr>
            <?php
            echo "<td><button type='button' name='day4' class = 'b-tn'>
            <span class = 'content'> Thursday </span>
            </button></td>";
            for ($x = 0; $x <= 9; $x++) {
                echo " <td><button type='button' name='day4_$x' class='b-tn2'>
                <span class = 'content'> </span>
                </button></td>";
            }
        ?>
            </tr>
            <tr>
            <?php
            echo "<td><button type='button' name='day5' class = 'b-tn'>
            <span class = 'content'> Friday </span>
            </button></td>";
            for ($x = 0; $x <= 9; $x++) {
                echo " <td><button type='button' name='day5_$x' class='b-tn2'>
                <span class = 'content'> </span>
                </button></td>";
            }
        ?>
            </tr>
            <tr>
                <?php
                    echo "<td><button type='button' name='day6' class = 'b-tn'>
                    <span class = 'content'> Saturday </span>
                    </button></td>";
                    for ($x = 0; $x <= 9; $x++) {
                        echo " <td><button type='button' name='day6_$x' class='b-tn2'>
                        <span class = 'content'> </span>
                        </button></td>";
                    }
                ?>
            </tr>
            </table></b>
        </div>
        <div style ="font-size: 24px; font-family:'Work Sans', sans-serif">

        <a href="#" class = "buttonsave">
                <span class = "content"><b>save</b></span>
            </a>
    </div>
    </form>
    <script> 
        $('.b-tn').click(function() {
            $(this).addClass("b-tn-click");
        });
        $('.b-tn2').click(function() {
            $(this).addClass("b-tn2-click");
        });
    </script>    
  </body>
</html>