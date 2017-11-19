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
                    if(x==11){
                        document.getElementById("roomA").style.visibility="visible";
                        document.getElementById("roomB").style.visibility="hidden";
                }
                    if(x==22){
                        document.getElementById("roomA").style.visibility="hidden";
                        document.getElementById("roomB").style.visibility="visible";
                }
                    if(x==33){
                        document.getElementById("roomA").style.visibility="visible";
                        document.getElementById("roomB").style.visibility="visible";
                }
            }
            function hideA(){
                document.getElementById("roomA").style.visibility="visible";
                document.getElementById("roomB").style.visibility="hidden";
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
  <body onload="hidetA()">
    <header>
        <img src="images/FIBO_logo.jpg" width="55" height="62" style="margin-top: 10px; margin-left: 10px">
        <div style="font-size: 1.8em; margin-top: -50px; margin-left: 80px">
        <b>Classroom Schedule</b>
        </div><br>
        </header>
        <div style="margin-top: -30px; margin-left: 500px">
        <a href="#" class="btn1"><b>Profile</b></a>
        <a href="user2.php" class="btn1"><b>Inconvenient time</b></a>
        <a href="user3.php" class="btn1" style=" color: #79a2ff"><b>Classroom</b></a>
        <a href="user4.php" class="btn1"><b>Schedule</b></a>  
        </div>
        <div style="margin-top: -84px; margin-left: 1200px">
            <a href="index.php" class="btn"><b>Log out</b></a>
        </div>
        <div style="margin-top: 50px;">
            <br><b class="topics">Classroom</b><br><br>
            
        </div>
        <div style="margin-top:0px; margin-left: 400px">
        <p style =" font-family: 'Work Sans', sans-serif; font-size: 24px;"><b> Subject code&#160  </b><input class = "whitetab"> </p> </br>
        <p style =" font-family: 'Work Sans', sans-serif; font-size: 24px"><b>  Subject name  </b><input class = "whitetab"></p></br>
        <p style =" font-family: 'Work Sans', sans-serif; font-size: 24px"> <b> Lecturer&#160&#160&#160&#160&#160&#160&#160 </b><input class = "whitetab"></p></br>
        <p style =" font-family: 'Work Sans', sans-serif; font-size: 24px"> <b> Hour/week &#160&#160&#160&#160     </b><input class = "whitetab"></p></br><br><br>
        <p style =" font-family: 'Work Sans', sans-serif; font-size: 24px"> <b> Sec:  </b> </p>
        
        <div style="margin-top:-33px; margin-left:25px"> 

        <select name="SEC" id="mySelect">
            <option value="11">A</option>
            <option value="22">B</option>
            <option value="33">A+B</option>
          </select>





<button onclick="myFunction()">SUBMIT</button>   <!--ปุ่มซับมิท-->





        </div>
        <div style="margin-top:-45px; margin-left:230px">
        <p style =" font-family: 'Work Sans', sans-serif; font-size: 24px"> <b> Split period:   </b>   </p>
        
        <select name="periodA" >
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
          </select>

          <select name="periodB">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            </select>
                
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
          <div style =" margin-left:700px; margin-top: 100px; font-size: 24px; font-family: 'Work Sans', sans-serif">
          <a href="#" class = "buttonsave">
            <span class = "content">SAVE</span> 
        </a></div>
  </body>
</html>