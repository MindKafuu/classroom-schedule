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
            function hidet(){
                document.getElementById("A").innerHTML="A";
                document.getElementById("A").style.visibility="visible";
                document.getElementById("A1").style.visibility="visible";
                document.getElementById("B").style.visibility="hidden";
                document.getElementById("B1").style.visibility="hidden";
    }
            function showt(){
                document.getElementById("A").innerHTML="A";
                document.getElementById("A").style.visibility="visible";
                document.getElementById("B").style.visibility="visible";
                document.getElementById("B1").style.visibility="visible";
    }
            function hideta(){
                document.getElementById("A").style.visibility="hidden";
                document.getElementById("A1").style.visibility="hidden";
                document.getElementById("B").style.visibility="visible";
                document.getElementById("B1").style.visibility="visible";
    }
            function sametime(){
                document.getElementById("A").innerHTML="A+B";
                document.getElementById("A").style.visibility="visible";
                document.getElementById("A1").style.visibility="visible";
                document.getElementById("B").style.visibility="hidden";
                document.getElementById("B1").style.visibility="hidden";
    }
            function dif(){
                document.getElementById("A").innerHTML="A";
                document.getElementById("B").style.visibility="visible";
                document.getElementById("B1").style.visibility="visible";
                document.getElementById("A").style.visibility="visible";
                document.getElementById("A1").style.visibility="visible";

    }
            function headtextA1(){
                    document.getElementById("A").innerHTML="computer";
    }
            function headtextA2(){
                    document.getElementById("A").innerHTML="classroom";
    }
            function headtextA3(){
                    document.getElementById("A").innerHTML="studio";
    }
            function headtextB1(){
                    document.getElementById("B").innerHTML="computer";
    }
            function headtextB2(){
                    document.getElementById("B").innerHTML="classroom";
    }
            function headtextB3(){
                    document.getElementById("B").innerHTML="studio";
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
  <body onload="hidet()">
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
        <div style="margin-top: 20px; margin-left: 400px">
        <p style =" font-family: 'Work Sans', sans-serif; font-size: 24px;"><b> Subject code  </b> </p> </br>
        <p style =" font-family: 'Work Sans', sans-serif; font-size: 24px"><b>  Subject namespace   </b>    </p></br>
        <p style =" font-family: 'Work Sans', sans-serif; font-size: 24px"> <b> Lecturer   </b>    </p></br>
        <p style =" font-family: 'Work Sans', sans-serif; font-size: 24px"> <b> Hour/week   </b>   </p></br>
        <p style =" font-family: 'Work Sans', sans-serif; font-size: 24px"> <b> Split period   </b>   </p></br></br>
        <div style = "margin-top: -255px; margin-left: 300px; line-height:1;">
                <input class = "whitetab"></br></br>
                <input class = "whitetab"></br></br>
                <input class = "whitetab"></br></br>
                <input class = "whitetab"></br></br>
        </div>
        <ul id="navbar" style="margin-left: 221px;">
        <li><a href="#" style ="background: url(images/arrow.png)
            background-repeat: no-repeat; 
            background-size: 25px;
            background-position: right center;
            background-color:#ffffff">none</a>
            <ul class="item">
                    <li><a href="#">1 </a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a>
                        
                    </li>
                </ul>
        </li>
        <li><a href="#" style ="background: url(images/arrow.png)
            background-repeat: no-repeat; 
            background-size: 25px;
            background-position: right center;
            background-color:#ffffff">none</a>
            <ul class="item">
                    <li><a href="#">1 </a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a>
                        
                    </li>
                </ul>
        </li>
        </ul>
        
        </p></br>
        </br></br>
          <b>
            <ul id="navbar">
                <li style="margin-left:3px;"><a href="#"style ="background: url(images/arrow.png); 
                    background-repeat: no-repeat; 
                    background-size: 25px;
                    background-position: right center;
                    background-color:#ffffff">Sec</a>
                    <ul class="item">
                        <li><a onclick="hidet()" href="#">A </a></li>
                        <li><a onclick="hideta()" href="#">B </a></li>
                        <li><a href="#" class="forAB">A+B </a>
                            <ul class="sub-item">
                                <li><a  onclick="sametime()" href="#">same time</a></li>
                                <li><a onclick="showt()" href="#">different time</a></li>
                                
                            </ul>
                        </li>
                    </ul>
                </li>
                <li style="margin-left: 149px;">
                    <a id="A" href="#" style ="background: url(images/arrow.png); 
                    background-repeat: no-repeat; 
                    background-size: 25px;
                    background-position: right center;
                    background-color:#ffffff">A</a>
                    <ul id="A1" class="item">
                            <li><a onclick="headtextA1()" href="#">computer </a></li>
                            <li><a onclick="headtextA2()" href="#">classroom</a></li>
                            <li><a onclick="headtextA3()" href="#">studio</a>
                                
                            </li>
                        </ul>
                </li>
                <li><a id="B" href="#"style ="background: url(images/arrow.png); 
                    background-repeat: no-repeat; 
                    background-size: 25px;
                    background-position: right center;
                    background-color:#ffffff">B</a>
                    <ul id="B1" class="item">
                        <li><a onclick="headtextB1()" href="#">computer</a></li>
                        <li><a onclick="headtextB2()" href="#">classroom</a></li>
                        <li><a onclick="headtextB3()" href="#">studio </a></li>
                        
                            
                        </li>
                    </ul>
                </li>
            </ul>
            
          </b>
          <div style =" margin-left:700px; margin-top: 100px; font-size: 24px; font-family: 'Work Sans', sans-serif">
          <a href="#" class = "buttonsave">
            <span class = "content">SAVE</span> 
        </a></div>
  </body>
</html>