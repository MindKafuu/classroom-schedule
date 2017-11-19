<?php
      require 'dbconfig/config.php';
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
    <link rel="stylesheet" type="text/css" href="css/admin1.css">
    <link rel="stylesheet" type="text/css" href="css/admin3-1.css">
    <link rel="stylesheet" type="text/css" href="css/admin3-2.css">
    <link rel="stylesheet" type="text/css" href="css/admin3-3.css">
    <link rel="stylesheet" type="text/css" href="css/admin3-4.css">
  	<link rel="stylesheet" type="text/css" href="page3.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="ddstyle.css">
    <link rel="stylesheet" type="text/css" href="theme.css">

    <!--font-->
    <link href="https://fonts.googleapis.com/css?family=Anonymous+Pro|Work+Sans" rel="stylesheet">

    <title>Classroom Schedule</title>
  </head>
  <script>
		  function hideadd(){
                document.getElementById("green").style.visibility="hidden";
                document.getElementById("green1").style.visibility="hidden";
    }
    	function showadd(){
                document.getElementById("green").style.visibility="visible";
                document.getElementById("green1").style.visibility="visible";
    }
    </script>
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
  <body onload="hideadd()">
    <header>
        <img src="images/FIBO_logo.jpg" width="55" height="62" style="margin-top: 10px; margin-left: 10px">
        <div style="font-size: 1.8em; margin-top: -50px; margin-left: 80px">
        <b>Classroom Schedule</b>
        </div><br>
        </header>
        <div style="margin-top: -30px; margin-left: 500px">
            <a href="admin1.php" class="btn1"><b>Home</b></a>
            <a href="admin2.php" class="btn1" style=" color: #79a2ff"><b>User Info</b></a>
            <a href="admin3.php" class="btn1"><b>Class Info</b></a>
            <a href="admin4.php" class="btn1"><b>Class Management</b></a>
            <a href="#" class="btn1"><b>Summary</b></a>
            <a href="admin6.php" class="btn1"><b>User status</b></a>
            <a href="admin7.php" class="btn1"><b>Complete</b></a>
        </div>
        <div style="margin-top: -84px; margin-left: 1200px">
            <a href="index.php" class="btn"><b>Log out</b></a>
        </div>
        <div style="margin-top: 50px;">
            <br><b class="topics">User Info</b><br><br>
        </div>
<!-- ปุ่มsave-->
        <button onclick="hideadd()" id="green1" style=" margin-left: 1200px ; margin-top: 0px " class = "buttonsave">
                <span class = "content"><b>save</b></span>
        </button>
<!-- link data base -->
        <center>
        <div id="green" style='margin-top:0px; margin-left:100px;border-radius: 6px; background-color:white; height: 130px ; width: 550px'>
                
                <b style =" margin-left:70px; font-family: 'Work Sans', sans-serif; font-size: 16px ">Name</b>
                <input style ="width:350px; height:23px; margin-left:55px" name="name" type="text" placeholder="Name"><!-- link data base -->
                <br>

                <img src='images/user.png' ALIGN = "MIDDLE" width="60" height="70" >

                <b style ="font-family: 'Work Sans', sans-serif; font-size: 16px" >Username</b>
                <input style ="width:350px; height:23px; margin-left:25px" name="username" type="text" placeholder="E-mail"><!-- link data base -->
                <br>
                <b style ="margin-left:70px; font-family: 'Work Sans', sans-serif; font-size: 16px ">Password</b>
                <input style ="width:350px; height:23px; margin-left:25px" name="password" type="text" placeholder="Password"><!-- link data base -->


        </div>
        </center>
        <br><br>
        
        <?php
                $sql = "SELECT * FROM table_account";
                $smyData = mysqli_query($con, $sql);
                $save = "";
                while($row = mysqli_fetch_array($smyData)){
                    echo "<div style='margin-top:0px; margin-left:450px'class='statuskru'>";
                    echo "<p class='text-head'><b> Name: </b>".$row["teacher_name"]."</p><br>";
                    echo "<p class='text'><b>Email: </b>".$row["teacher_email"]."</p><br>";
                    echo "<p class='text'><b>Password: </b>".$row["teacher_password"]."</p><br>";
                    echo "<img style='width: 28%; height: auto; margin-top: -107px; margin-left: 288px;' src='images/user.png'>";
                    echo "</div>";
                    echo "<br>";
                    echo "<br>";
                }

                // while($row = mysqli_fetch_array($smyData2)){
                //     $check = $row['Subjects'];
                //     echo "<div style='margin-top:0px; margin-left:450px'class='statuskru'>";
                //     echo "<p class='text-head'> <b>".$row["Subjects"]."</b></p><br>";
                //     if($save != "") {
                //         echo "<p class='text'>".$save."</p><br>";
                //     }
                //     while($row = mysqli_fetch_array($smyData)) {
                        
                //         if($check == $row['subject_code'])
                //         {
                //             echo "<p class='text'>".$row['teacher_name']."</p><br>";
                //         }
                //         else if($check != $row['subject_code']) {
                            
                //             $save = $row['teacher_name'];
                //             break;
                //         }
                //     }
                //     echo "<img src='images/tick.png'>";
                //     echo "</div>";
                //     echo "<br>";
                //     echo "<br>";
                // }
            ?>
            

        
        </div>
        <div >
                <a href="#" style=" margin-left: 1200px ; margin-top: -50px " class = "button4" onclick="showadd()" >
                <span class = "content"><b>+</b></span></a>

                
        <div style="margin-left:30px;margin-top:350px">
                <button class="howto">?</button>     
        </div>            
        <div style="margin-top:-575px;margin-left:890px">
            <i class="fa fa-close" style="font-size:48px;color:red"></i>
            <br><br><br><br><br><br><br><br><br><br>
            <i class="fa fa-close" style="font-size:48px;color:red"></i>
            <br><br><br><br><br><br><br><br><br><br>
            <i class="fa fa-check-square" style="font-size:48px;color:green"></i>

        </div>
        
        
  </body>
</html>