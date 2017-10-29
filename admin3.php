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
    <link rel="stylesheet" type="text/css" href="css/admin3-2.css">
    <link rel="stylesheet" type="text/css" href="css/admin3-3.css">
    <link rel="stylesheet" type="text/css" href="css/admin3-4.css">

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
    <header>
        <img src="images/FIBO_logo.jpg" width="55" height="62" style="margin-top: 10px; margin-left: 10px">
        <div style="font-size: 1.8em; margin-top: -50px; margin-left: 80px">
        <b>Classroom Schedule</b>
        </div><br>
        </header>
        <div style="margin-top: -30px; margin-left: 500px">
            <a href="admin1.php" class="btn1"><b>Home</b></a>
            <a href="#" class="btn1"><b>User Info</b></a>
            <a href="admin3.php" class="btn1" style=" color: #79a2ff"><b>Class Info</b></a>
            <a href="admin4.php" class="btn1"><b>Class Management</b></a>
            <a href="#" class="btn1"><b>Summary</b></a>
            <a href="admin6.php" class="btn1"><b>User status</b></a>
            <a href="admin7.php" class="btn1"><b>Complete</b></a>
        </div>
        <div style="margin-top: -84px; margin-left: 1160px">
            <a href="index.php" class="btn"><b>logout</b></a>
        </div>
        <div style="margin-top: 50px;">
            <br><b class="topics">Calss Information</b><br><br>
            <a href="#" class="btn2"><b>Bachelor</b></a><br><br>
            <a href="#" class="btn2"><b>Master</b></a><br><br>
            <a href="#" class="btn2"><b>PhD</b></a><br><br>
        </div>
        <div style="margin-top: -150px; margin-left: 400px">
          
          <b style="font-family: 'Work Sans', sans-serif; font-size: 24px">Subject Code  </b>
          <br><br>

          <b style="font-family: 'Work Sans', sans-serif; font-size: 24px">Subject  </b>
          <br><br>
          
          <b style="font-family: 'Work Sans', sans-serif; font-size: 24px">Lecturer  </b>
          <br><br>
          
          <b style="font-family: 'Work Sans', sans-serif; font-size: 24px">Hours/week  </b>
          <br><br>
          
          <b style="font-family: 'Work Sans', sans-serif; font-size: 24px">centre Subject</b>
          <br><br>
          <div style="margin-top: -250px;margin-left:200px">
            <input class="whitetab" style= "margin-left: 20px"><br><br>
            <input class="whitetab" style= "margin-left: 20px"><br><br>
            <input class="whitetab" style= "margin-left: 20px"><br><br> 
            <input class="whitetab" style= "margin-left: 20px"><br><br>
          </div>
          
          
            </br> </br> </br> 
                
            <ul id="navbar2">
                <li><a href="#"style ="background: url(images/arrow.png); 
                    background-repeat: no-repeat; 
                    background-size: 25px;
                    background-position: right center;
                    background-color:#ffffff">Day</a>
                    <ul class="item">
                        <li><a href="#">monday </a></li>
                        <li><a href="#">tuesday </a></li>
                        <li><a href="#">wednesday </a></li>
                        <li><a href="#">thursday </a></li>
                        <li><a href="#">friday </a></li>
                        <li><a href="#">saturday </a></li>
                        
                    </ul>
                </li>
                <li><a href="#" style ="background: url(images/arrow.png); 
                    background-repeat: no-repeat; 
                    background-size: 25px;
                    background-position: right center;
                    background-color:#ffffff">Start</a>
                    <ul class="item">
                            <li><a href="#">8.30</a></li>
                            <li><a href="#">9.30</a></li>
                            <li><a href="#">10.30</a></li>
                            <li><a href="#">11.30</a></li>
                            <li><a href="#">12.30</a></li>
                            <li><a href="#">13.30</a></li>
                            <li><a href="#">14.30</a></li>
                            <li><a href="#">15.30</a></li>
                            <li><a href="#">16.30</a></li>
                            <li><a href="#">17.30</a></li>
                    
                        </ul>
                </li>
                <li><a href="#"style ="background: url(images/arrow.png); 
                    background-repeat: no-repeat; 
                    background-size: 25px;
                    background-position: right center;
                    background-color:#ffffff">End</a>
                    <ul class="item">
                        <li><a href="#">9.20</a></li>
                        <li><a href="#">10.20</a></li>
                        <li><a href="#">11.20 </a></li>
                        <li><a href="#">12.20 </a></li>
                        <li><a href="#">13.20 </a></li>
                        <li><a href="#">14.20 </a></li>
                        <li><a href="#">15.20 </a></li>
                        <li><a href="#">16.20 </a></li>
                        <li><a href="#">17.20 </a></li>
                        <li><a href="#">18.20 </a></li>
                        
                            
                        </li>
                    </ul>
                </li>
            </ul>
            <a href="#" style=" margin-left: 720px ; margin-top: -230px"class = "button4">
                <span class = "content"><b>+</b></span>
            </a>
            <a href="#" style=" font-size: 40px ;margin-left: 720px ; margin-top: 30px"class = "buttonsave">
                <span class = "content"><b>save</b></span>
                <a href="#" style="margin-left: 650px ; margin-top: -60px"class = "button5">
                    <span class = "content"><b>+</b></span>
                </a>
            </a>
        </div>

  </body>
</html>