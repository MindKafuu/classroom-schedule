<!DOCTYPE html>
<html>
  <head>
    <!--meta-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>

    <!--shortcut-->
    <link rel="shortcut icon" href="images/icon.png" title="Favicon"/>

    <!--style-->
    <link rel="stylesheet" type="text/css" href="css/user3-1.css">
    <link rel="stylesheet" type="text/css" href="css/user3-2.css">
    <link rel="stylesheet" type="text/css" href="css/user3-3.css">

    <!--font-->
    <link href="https://fonts.googleapis.com/css?family=Anonymous+Pro|Work+Sans" rel="stylesheet">

    <title>Classroom Schedule</title>

    <script>
            function myFunction(){
                var x = document.getElementById("mySelect").value;
                    if(x==1){
                        document.getElementById("roomA").style.visibility="visible";
                        document.getElementById("roomB").style.visibility="hidden";
                }
                    if(x==2){
                        document.getElementById("roomA").style.visibility="hidden";
                        document.getElementById("roomB").style.visibility="visible";
                }
                    if(x==3){
                        document.getElementById("roomA").style.visibility="visible";
                        document.getElementById("roomB").style.visibility="visible";
                }
            }
var y;
            function hideA(){
                document.getElementById("roomA").style.visibility="visible";
                document.getElementById("roomB").style.visibility="hidden";
                y = document.getElementById("labelfn");
    }

             function labelfng(){
                y = document.getElementById("labelfn").value;
                    if(y==1){
                        var green = '<select name="period" ><option value="1">1</option>';
                        document.getElementById("gB").innerHTML=green;
                    }
                    if(y==2){
                        var green = '<select name="period" ><option value="2">2</option><option value="1/1">1/1</option>';
                        document.getElementById("gB").innerHTML=green;
                    }
                    if(y==3){
                        var green = '<select name="period" ><option value="3">3</option><option value="1/2">1/2</option>';
                        document.getElementById("gB").innerHTML=green;
                    }
                    if(y==4){
                        var green = '<select name="period" ><option value="4">4</option><option value="1/3">1/3</option><option value="2/2">2/2</option>';
                        document.getElementById("gB").innerHTML=green;
                    }
                    if(y==5){
                        var green = '<select name="period" ><option value="5">5</option><option value="1/4">1/4</option><option value="2/3">2/3</option>';
                        document.getElementById("gB").innerHTML=green;
                    }
                    if(y==6){
                        var green = '<select name="period" ><option value="6">6</option><option value="1/5">1/5</option><option value="2/4">2/4</option><option value="3/3">3/3</option>';
                        document.getElementById("gB").innerHTML=green;
                    }
                    if(y==7){
                        var green = '<select name="period" ><option value="7">7</option><option value="1/6">1/6</option><option value="2/5">2/5</option><option value="3/4">3/4</option>';
                        document.getElementById("gB").innerHTML=green;
                    }
                    if(y==8){
                        var green = '<select name="period" ><option value="8">8</option><option value="1/7">1/7</option><option value="2/6">2/6</option><option value="3/5">3/5</option><option value="4/4">4/4</option>';
                        document.getElementById("gB").innerHTML=green;
                    }
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
  <body onload="hideA()">
  <header>
  <img src="images/FIBO_logo.jpg" width="55" height="62" style="margin-top: 10px; margin-left: 10px">
      <div style="font-size: 1.8em; margin-top: -50px; margin-left: 80px">
          <b>Classroom Schedule</b>
      </div><br><br>
  </header>
  
  <form action="admin2.php" method="post">
  <div style="margin-top: -94px; margin-left:87.7%">
  <a href="index.php" class="btn"><b>?</b></a>
  <a href="index.php" class="btn"><b>Log out</b></a>
  </div>
  
  <div style="margin-top: 20px; margin-left:60.3%">
  <a href="user1.php" class="btn1"><b>Profile</b></a>
  <a href="user2.php" class="btn1"><b>Inconvenient Time</b></a>
  <a href="user3.php" class="btn1"style=" color: #79a2ff"><b>Classroom</b></a>
  <a href="user4.php" class="btn1"><b>Schedule</b></a>
  </div>
  <div style="margin-top: 25px;">
    <br><b class="topics">Inconvenient Time</b><br><br>
  </div>
      <div style="margin-top:0px; margin-left: 400px">
      <p style =" font-family: 'Work Sans', sans-serif; font-size: 24px;"><b> Subject code  </b> </p><br>
      <p style ="margin-top:3px; font-family: 'Work Sans', sans-serif; font-size: 24px"><b>  Subject name  </b></p><br>
      <p style ="margin-top:5px; font-family: 'Work Sans', sans-serif; font-size: 24px"> <b> Lecturer </b></p><br>
      <p style ="margin-top:2px; font-family: 'Work Sans', sans-serif; font-size: 24px"> <b> Hour/week </b></p><br>
      
      <div style="margin-top:-200px; margin-left:170px"> 
      <input class = "whitetab"><br><br>
      <input class = "whitetab"><br><br>
      <input class = "whitetab"><br><br>
      <input  id="labelfn" class = "whitetab"><br><br>
      </div><br><br>

<!--แต่งCSS-->        <input type="button" value="click" onclick="labelfng();"/>


        <p style =" font-family: 'Work Sans', sans-serif; font-size: 24px"> <b> Sec:  </b> </p>
        
        <div style="margin-top:-33px; margin-left:25px"> 

        <select name="SEC" id="mySelect">
            <option value="1">A</option>
            <option value="2">B</option>
            <option value="3">A+B</option>
          </select>

        <div style =" margin-left:700px; margin-top: 10px; font-size: 24px; font-family: 'Work Sans', sans-serif"
        <button onclick="myFunction()"  class = "buttonsave">
            <span class = "content">SAVE</span>   <!--ปุ่มซับมิท-->
        </div>

        </div>




<div id="gB"></div>




        <div style="margin-top:-108px; margin-left:230px">
        <p style =" font-family: 'Work Sans', sans-serif; font-size: 24px"> <b> Split period:   </b>   </p>

                
        <c><select id="roomA" name="roomA" >
            <option value="comA">computer</option>
            <option value="classroomA">classroom</option>
            <option value="studioA">studio</option>
          </select></c>
             
        <g><select id="roomB" name="roomB" >
            <option value="comB">computer</option>
            <option value="classroomB">classroom</option>
            <option value="studioB">studio</option>
        </select> </g>
    </div>
          </b>
          <div onclick="myFunction()" style =" margin-left:700px; margin-top: 100px; font-size: 24px; font-family: 'Work Sans', sans-serif">
          <a href="#" class = "buttoncomplete">
            <span class = "content">Complete</span> 
        </a></div>
        
  </body>
</html>
