<!DOCTYPE html>
<html lang="en">
    <head>
    <!--meta--> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>

    <!--shortcut-->
    <link rel="shortcut icon" href="images/icon.png" title="Favicon"/>

    <!--style-->
    <link rel="stylesheet" type="text/css" href="css/admin3-1.css">
    <link rel="stylesheet" type="text/css" href="css/admin4-1.css">
    <link rel="stylesheet" type="text/css" href="css/admin4-2.css">

    <!--font-->
    <link href="https://fonts.googleapis.com/css?family=Anonymous+Pro|Work+Sans" rel="stylesheet">

    <title>Classroom Schedule</title>
    <script>
    function myFunction1() {
            document.getElementById("green").innerHTML ="40";
        }
    function myFunction2() {
            document.getElementById("green").innerHTML ="80";
        }
        
    </script>
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
  <body >
    <header>
        <img src="images/FIBO_logo.jpg" width="55" height="62" style="margin-top: 10px; margin-left: 10px">
        <div style="font-size: 1.8em; margin-top: -50px; margin-left: 80px">
        <b>Classroom Schedule</b>
        </div><br>
        </header>
        <div style="margin-top: -30px; margin-left: 500px">
            <a href="admin1.php" class="btn1"><b>Home</b></a>
            <a href="#" class="btn1"><b>User Info</b></a>
            <a href="admin3.php" class="btn1"><b>Class Info</b></a>
            <a href="admin4.php" class="btn1" style=" color: #79a2ff"><b>Class Management</b></a>
            <a href="#" class="btn1"><b>Summary</b></a>
            <a href="admin6.php" class="btn1"><b>User status</b></a>
            <a href="admin7.php" class="btn1"><b>Complete</b></a>
        </div>
        <div style="margin-top: -84px; margin-left: 1160px">
            <a href="index.php" class="btn"><b>logout</b></a>
        </div>
        <div style="margin-top: 50px;">
            <br><b class="topics">Calss Management</b><br><br>
            <a href="admin4.php" class="btn2"><b>Computer room</b></a><br><br> <!--แก้ link-->
            <a href="admin4-1.php" class="btn2"><b>Classroom</b></a><br><br>    <!--แก้ link-->
            <a href="admin4-2.php" class="btn2"><b>Studio</b></a><br><br>    <!--แก้ link-->
        </div>
        <div style="margin-top: -150px; margin-left: 400px">
          
          <b>Studio </b>
          <input class="inkuy" name="username" type="text" id="username" style ="width:350px; height:23px; margin-left: 58px" ><br><br>
          

          <b>Capacity </b>
          
          <ul id="navbar" >
            <li><a id="green"  href="#"style ="background: url(images/arrow.png); 
                background-repeat: no-repeat; 
                background-size: 25px;
                background-position: right center;
                background-color:#ffffff">Menu</a>
                <ul class="item">
                    <li id="demo1" onclick="myFunction1()"><a href="#">40</a></li>
                    <li id="demo2" onclick="myFunction2()"><a href="#">80 </a></li>
                    </li>
                </ul>
            </li>


        </div>
        <a href="#" style=" font-size: 40px ;"class = "buttonsave">
            <span class = "content"><b>save</b></span>
        </a>
  </body>
</html>
