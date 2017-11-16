<?php
  require 'dbconfig/config.php';
  /*  หน้า input Bachelor's degree ข้อมูลวิชา/อาจารย์ ปัจจุบันรับค่าจาก textbox ได้
      Bachelor's degree,Subject Code,Subject name,Lecturer,Hours/week */
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
    <link rel="stylesheet" type="text/css" href="css/admin3-1.css">
    <link rel="stylesheet" type="text/css" href="css/admin3-2.css">
    <link rel="stylesheet" type="text/css" href="css/admin3-3.css">

    <!--font-->
    <link href="https://fonts.googleapis.com/css?family=Anonymous+Pro|Work+Sans" rel="stylesheet">

    <title>Classroom Schedule</title>
    <script >
    	function hidet(){
        document.getElementById("navbar2").style.visibility="hidden";
        document.getElementById("navbar3").style.visibility="hidden";
        document.getElementById("navbar4").style.visibility="hidden";
        document.getElementById("navbar5").style.visibility="hidden";
 
    }
        function showt(){
        document.getElementById("navbar2").style.visibility="visible";//show dropdown
        document.getElementById("navbar3").style.visibility="visible";
        document.getElementById("navbar4").style.visibility="visible";
        document.getElementById("navbar5").style.visibility="visible";
        
    }
    function secA(){
        document.getElementById("sec").innerHTML="A";
    }
    function secB(){
        document.getElementById("sec").innerHTML="B";
    }
    function secAB(){
        document.getElementById("sec").innerHTML="A+B";    
    }
    function secA1(){
        document.getElementById("sec1").innerHTML="A";
    }
    function secB1(){
        document.getElementById("sec1").innerHTML="B";
    }
    function secAB1(){
        document.getElementById("sec1").innerHTML="A+B";
        
    }
    function secA2(){
        document.getElementById("sec2").innerHTML="A";
    }
    function secB2(){
        document.getElementById("sec2").innerHTML="B";
    }
    function secAB2(){
        document.getElementById("sec2").innerHTML="A+B";
        
    }
    function secA3(){
        document.getElementById("sec3").innerHTML="A";
    }
    function secB3(){
        document.getElementById("sec3").innerHTML="B";
    }
    function secAB3(){
        document.getElementById("sec3").innerHTML="A+B";
        
    }
    function monday(){
        document.getElementById("day").innerHTML="Monday";
    }
    function tuesday(){
        document.getElementById("day").innerHTML="Tuesday";
    }
    function wednesday(){
        document.getElementById("day").innerHTML="Wednesday";    
    }
    function thursday(){
        document.getElementById("day").innerHTML="Thursday";
    }
    function friday(){
        document.getElementById("day").innerHTML="Friday";
    }
    function saturday(){
        document.getElementById("day").innerHTML="Saturday";
        
    }
     function monday1(){
        document.getElementById("day1").innerHTML="Monday";
    }
    function tuesday1(){
        document.getElementById("day1").innerHTML="Tuesday";
    }
    function wednesday1(){
        document.getElementById("day1").innerHTML="Wednesday";    
    }
    function thursday1(){
        document.getElementById("day1").innerHTML="Thursday";
    }
    function friday1(){
        document.getElementById("day1").innerHTML="Friday";
    }
    function saturday1(){
        document.getElementById("day1").innerHTML="Saturday";
        
    }
     function monday2(){
        document.getElementById("day2").innerHTML="Monday";
    }
    function tuesday2(){
        document.getElementById("day2").innerHTML="Tuesday";
    }
    function wednesday2(){
        document.getElementById("day2").innerHTML="Wednesday";    
    }
    function thursday2(){
        document.getElementById("day2").innerHTML="Thursday";
    }
    function friday2(){
        document.getElementById("day2").innerHTML="Friday";
    }
    function saturday2(){
        document.getElementById("day2").innerHTML="Saturday";
        
    }
     function monday3(){
        document.getElementById("day3").innerHTML="Monday";
    }
    function tuesday3(){
        document.getElementById("day3").innerHTML="Tuesday";
    }
    function wednesday3(){
        document.getElementById("day3").innerHTML="Wednesday";    
    }
    function thursday3(){
        document.getElementById("day3").innerHTML="Thursday";
    }
    function friday3(){
        document.getElementById("day3").innerHTML="Friday";
    }
    function saturday3(){
        document.getElementById("day3").innerHTML="Saturday";
        
    }
    function t1(){
        document.getElementById("time").innerHTML="8.30";
    }
    function t2(){
        document.getElementById("time").innerHTML="9.30";   
    }
     function t3(){
        document.getElementById("time").innerHTML="10.30";
    }
    function t4(){
        document.getElementById("time").innerHTML="11.30";
    }
    function t5(){
        document.getElementById("time").innerHTML="12.30";    
    }
    function t6(){
        document.getElementById("time").innerHTML="13.30";
    }
    function t7(){
        document.getElementById("time").innerHTML="14.30";
    }
    function t8(){
        document.getElementById("time").innerHTML="15.30";
    }
    function t9(){
        document.getElementById("time").innerHTML="16.30";
    }
    function t10(){
        document.getElementById("time").innerHTML="17.30";   
    }
    function t11(){
        document.getElementById("time1").innerHTML="8.30";
    }
    function t21(){
        document.getElementById("time1").innerHTML="9.30";   
    }
     function t31(){
        document.getElementById("time1").innerHTML="10.30";
    }
    function t41(){
        document.getElementById("time1").innerHTML="11.30";
    }
    function t51(){
        document.getElementById("time1").innerHTML="12.30";    
    }
    function t61(){
        document.getElementById("time1").innerHTML="13.30";
    }
    function t71(){
        document.getElementById("time1").innerHTML="14.30";
    }
    function t81(){
        document.getElementById("time1").innerHTML="15.30";
    }
    function t91(){
        document.getElementById("time1").innerHTML="16.30";
    }
    function t101(){
        document.getElementById("time1").innerHTML="17.30";   
    }
    function t12(){
        document.getElementById("time2").innerHTML="8.30";
    }
    function t22(){
        document.getElementById("time2").innerHTML="9.30";   
    }
     function t32(){
        document.getElementById("time2").innerHTML="10.30";
    }
    function t42(){
        document.getElementById("time2").innerHTML="11.30";
    }
    function t52(){
        document.getElementById("time2").innerHTML="12.30";    
    }
    function t62(){
        document.getElementById("time2").innerHTML="13.30";
    }
    function t72(){
        document.getElementById("time2").innerHTML="14.30";
    }
    function t82(){
        document.getElementById("time2").innerHTML="15.30";
    }
    function t92(){
        document.getElementById("time2").innerHTML="16.30";
    }
    function t102(){
        document.getElementById("time2").innerHTML="17.30";   
    }
    function t13(){
        document.getElementById("time3").innerHTML="8.30";
    }
    function t23(){
        document.getElementById("time3").innerHTML="9.30";   
    }
     function t33(){
        document.getElementById("time3").innerHTML="10.30";
    }
    function t43(){
        document.getElementById("time3").innerHTML="11.30";
    }
    function t53(){
        document.getElementById("time3").innerHTML="12.30";    
    }
    function t63(){
        document.getElementById("time3").innerHTML="13.30";
    }
    function t73(){
        document.getElementById("time3").innerHTML="14.30";
    }
    function t83(){
        document.getElementById("time3").innerHTML="15.30";
    }
    function t93(){
        document.getElementById("time3").innerHTML="16.30";
    }
    function t103(){
        document.getElementById("time3").innerHTML="17.30";   
    }
    function ts1(){
        document.getElementById("times").innerHTML="9.20";
    }
    function ts2(){
        document.getElementById("times").innerHTML="10.20";   
    }
     function ts3(){
        document.getElementById("times").innerHTML="11.20";
    }
    function ts4(){
        document.getElementById("times").innerHTML="12.20";
    }
    function ts5(){
        document.getElementById("times").innerHTML="13.20";    
    }
    function ts6(){
        document.getElementById("times").innerHTML="14.20";
    }
    function ts7(){
        document.getElementById("times").innerHTML="15.20";
    }
    function ts8(){
        document.getElementById("times").innerHTML="16.20";
    }
    function ts9(){
        document.getElementById("times").innerHTML="17.20";
    }
    function ts10(){
        document.getElementById("times").innerHTML="18.20";   
    }
    function ts11(){
        document.getElementById("times1").innerHTML="9.20";
    }
    function ts21(){
        document.getElementById("times1").innerHTML="10.20";   
    }
     function ts31(){
        document.getElementById("times1").innerHTML="11.20";
    }
    function ts41(){
        document.getElementById("times1").innerHTML="12.20";
    }
    function ts51(){
        document.getElementById("times1").innerHTML="13.20";    
    }
    function ts61(){
        document.getElementById("times1").innerHTML="14.20";
    }
    function ts71(){
        document.getElementById("times1").innerHTML="15.20";
    }
    function ts81(){
        document.getElementById("times1").innerHTML="16.20";
    }
    function ts91(){
        document.getElementById("times1").innerHTML="17.20";
    }
    function ts101(){
        document.getElementById("times1").innerHTML="18.20";   
    }
    function ts12(){
        document.getElementById("times2").innerHTML="9.20";
    }
    function ts22(){
        document.getElementById("times2").innerHTML="10.20";   
    }
     function ts32(){
        document.getElementById("times2").innerHTML="11.20";
    }
    function ts42(){
        document.getElementById("times2").innerHTML="12.20";
    }
    function ts52(){
        document.getElementById("times2").innerHTML="13.20";    
    }
    function ts62(){
        document.getElementById("times2").innerHTML="14.20";
    }
    function ts72(){
        document.getElementById("times2").innerHTML="15.20";
    }
    function ts82(){
        document.getElementById("times2").innerHTML="16.20";
    }
    function ts92(){
        document.getElementById("times2").innerHTML="17.20";
    }
    function ts102(){
        document.getElementById("times2").innerHTML="18.20";   
    }
    function ts13(){
        document.getElementById("times3").innerHTML="9.20";
    }
    function ts23(){
        document.getElementById("times1").innerHTML="10.20";   
    }
     function ts33(){
        document.getElementById("times3").innerHTML="11.20";
    }
    function ts43(){
        document.getElementById("times3").innerHTML="12.20";
    }
    function ts53(){
        document.getElementById("times3").innerHTML="13.20";    
    }
    function ts63(){
        document.getElementById("times3").innerHTML="14.20";
    }
    function ts73(){
        document.getElementById("times3").innerHTML="15.20";
    }
    function ts83(){
        document.getElementById("times3").innerHTML="16.20";
    }
    function ts93(){
        document.getElementById("times3").innerHTML="17.20";
    }
    function ts103(){
        document.getElementById("times3").innerHTML="18.20";   
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
        <form action="admin3.php" method="post">
        <div style="margin-top: -30px; margin-left: 500px">
            <a href="admin1.php" class="btn1"><b>Home</b></a>
            <a href="#" class="btn1"><b>User Info</b></a>
            <a href="admin3.php" class="btn1" style=" color: #79a2ff"><b>Class Info</b></a>
            <a href="admin4.php" class="btn1"><b>Class Management</b></a>
            <a href="#" class="btn1"><b>Summary</b></a>
            <a href="admin6.php" class="btn1"><b>User status</b></a>
            <a href="admin7.php" class="btn1"><b>Complete</b></a>
        </div>
        <div style="margin-top: -84px; margin-left: 1200px">
            <a href="index.php" class="btn"><b>Log out</b></a>
        </div>
        <div style="margin-top: 50px;">
            <br><b class="topics">Class Information</b><br><br><br>
            <a href="admin3.php" class="btn2"style="background-color:#79a2ff"><b>Bachelor's degree</b></a><br><br>
            <a href="admin3-M.php" class="btn2"><b>Master's degree</b></a><br><br>
            <a href="admin3-D.php" class="btn2"><b>Doctor's degree</b></a><br><br>
        </div>
        <div style="margin-top: -200px; margin-left: 400px">
          
          <b style="font-family: 'Work Sans', sans-serif; font-size: 24px">Subject Code  </b>
          <br><br><br>

          <b style="font-family: 'Work Sans', sans-serif; font-size: 24px">Subject name </b>
          <br><br><br>
          
          <b style="font-family: 'Work Sans', sans-serif; font-size: 24px">Lecturer  </b>
          <br><br><br>
          
          <b style="font-family: 'Work Sans', sans-serif; font-size: 24px">Hours/week  </b>
          <br><br><br><br>
          
          <br><br>
          <div style="margin-top: -340px;margin-left:175px; line-height:1;">
            <input type="text"           class="whitetab" style= "margin-left: 20px; margin-top:22px" name="code" required><br><br><br>
            <input type="text" name="subject_name"  class="whitetab" style= "margin-left: 20px" required><br><br><br>
            <input type="text" name="lecturer"      class="whitetab" style= "margin-left: 20px"><br><br><br>
            <input type="text" name="hours_per_week"class="whitetab" style= "margin-left: 20px" required><br><br><br>
          </div>
          
          
          <button class="fundamental" onclick="showt()">Fundamental Subject</button>
          <br><br><br>
          <div style="margin-top: -250px;margin-left:130px">
        <div style="margin-left: -180px;margin-top: 28px">
            <a href="#" style=" margin-left: 720px ; margin-top: -230px"class = "button4">
                <span class = "content"><b>+</b></span>
            </a>
            <button name="save_data" class = "buttonsave">
                <span class = "content"><b>save</b></span>
        </button>
            <a href="#" style="margin-left: 650px ; margin-top: -55px"class = "button5">
                <span class = "content"><b>+</b></span>
            </a>
        </div>
        </div>
 
            </br> </br> </br> 
        <div style= "margin-top: 60px">      
            <ul id="navbar2" >
                <li><a id="sec" href="#"style ="background: url(images/arrow.png); 
                    background-repeat: no-repeat; 
                    background-size: 25px;
                    background-position: right center;
                    background-color:#ffffff">Sec</a>
                    <ul class="item" >
                        <li><a onclick="secA()" href="#">A</a></li>
                        <li><a onclick="secB()" href="#">B</a></li>
                        <li><a onclick="secAB()" href="#">A+B</a></li>
                    </ul>
                </li>
                <li><a id="day" href="#"style ="background: url(images/arrow.png); 
                    background-repeat: no-repeat; 
                    background-size: 25px;
                    background-position: right center;
                    background-color:#ffffff">Day</a>
                    <ul class="item">
                        <li><a onclick="monday()" href="#">Monday </a></li>
                        <li><a onclick="tuesday()" href="#">Tuesday </a></li>
                        <li><a onclick="wednesday()" href="#">Wednesday </a></li>
                        <li><a onclick="thursday()" href="#">Thursday </a></li>
                        <li><a onclick="friday()" href="#">Friday </a></li>
                        <li><a onclick="saturday()" href="#">Saturday </a></li>
                        
                    </ul>
                </li>
                <li><a id="time" href="#" style ="background: url(images/arrow.png); 
                    background-repeat: no-repeat; 
                    background-size: 25px;
                    background-position: right center;
                    background-color:#ffffff">Start</a>
                    <ul class="item">
                            <li><a onclick="t1()" href="#">8.30</a></li>
                            <li><a onclick="t2()" href="#">9.30</a></li>
                            <li><a onclick="t3()" href="#">10.30</a></li>
                            <li><a onclick="t4()" href="#">11.30</a></li>
                            <li><a onclick="t5()" href="#">12.30</a></li>
                            <li><a onclick="t6()" href="#">13.30</a></li>
                            <li><a onclick="t7()" href="#">14.30</a></li>
                            <li><a onclick="t8()" href="#">15.30</a></li>
                            <li><a onclick="t9()" href="#">16.30</a></li>
                            <li><a onclick="t10()" href="#">17.30</a></li>
                    
                        </ul>
                </li>
                <li><a id="times" href="#"style ="background: url(images/arrow.png); 
                    background-repeat: no-repeat; 
                    background-size: 25px;
                    background-position: right center;
                    background-color:#ffffff">End</a>
                    <ul class="item">
                        <li><a onclick="ts1()" href="#">9.20</a></li>
                        <li><a onclick="ts2()" href="#">10.20</a></li>
                        <li><a onclick="ts3()" href="#">11.20 </a></li>
                        <li><a onclick="ts4()" href="#">12.20 </a></li>
                        <li><a onclick="ts5()" href="#">13.20 </a></li>
                        <li><a onclick="ts6()" href="#">14.20 </a></li>
                        <li><a onclick="ts7()" href="#">15.20 </a></li>
                        <li><a onclick="ts8()" href="#">16.20 </a></li>
                        <li><a onclick="ts9()" href="#">17.20 </a></li>
                        <li><a onclick="t10()" href="#">18.20 </a></li>
                        
                            
                        </li>
                    </ul>
                </li>
                
            </ul>
        
            
        </div> 
        <div style= "margin-top: 120px" >      
                <ul  id="navbar3">
                    <li ><a id="sec1" href="#"style ="background: url(images/arrow.png); 
                        background-repeat: no-repeat; 
                        background-size: 25px;
                        background-position: right center;
                        background-color:#ffffff">Sec</a>
                        <ul class="item">
                            <li><a onclick="secA1()" href="#">A</a></li>
                        	<li><a onclick="secB1()" href="#">B</a></li>
                        	<li><a onclick="secAB1()" href="#">A+B</a></li>
                        </ul>
                    </li>
                    <li><a id="day1" href="#"style ="background: url(images/arrow.png); 
                        background-repeat: no-repeat; 
                        background-size: 25px;
                        background-position: right center;
                        background-color:#ffffff">Day</a>
                        <ul class="item">
                            <li><a onclick="monday1()" href="#">Monday </a></li>
                        	<li><a onclick="tuesday1()" href="#">Tuesday </a></li>
                        	<li><a onclick="wednesday1()" href="#">Wednesday </a></li>
                        	<li><a onclick="thursday1()" href="#">Thursday </a></li>
                        	<li><a onclick="friday1()" href="#">Friday </a></li>
                        	<li><a onclick="saturday1()" href="#">Saturday </a></li>
                            
                        </ul>
                    </li>
                    <li><a id="time1" href="#" style ="background: url(images/arrow.png); 
                        background-repeat: no-repeat; 
                        background-size: 25px;
                        background-position: right center;
                        background-color:#ffffff">Start</a>
                        <ul class="item">
                            <li><a onclick="t11()" href="#">8.30</a></li>
                            <li><a onclick="t21()" href="#">9.30</a></li>
                            <li><a onclick="t31()" href="#">10.30</a></li>
                            <li><a onclick="t41()" href="#">11.30</a></li>
                            <li><a onclick="t51()" href="#">12.30</a></li>
                            <li><a onclick="t61()" href="#">13.30</a></li>
                            <li><a onclick="t71()" href="#">14.30</a></li>
                            <li><a onclick="t81()" href="#">15.30</a></li>
                            <li><a onclick="t91()" href="#">16.30</a></li>
                            <li><a onclick="t101()" href="#">17.30</a></li>
                        
                            </ul>
                    </li>
                    <li><a id="times1" href="#"style ="background: url(images/arrow.png); 
                        background-repeat: no-repeat; 
                        background-size: 25px;
                        background-position: right center;
                        background-color:#ffffff">End</a>
                        <ul class="item">
                            	<li><a onclick="ts11()" href="#">9.20</a></li>
                        		<li><a onclick="ts21()" href="#">10.20</a></li>
                        		<li><a onclick="ts31()" href="#">11.20 </a></li>
                        		<li><a onclick="ts41()" href="#">12.20 </a></li>
                        		<li><a onclick="ts51()" href="#">13.20 </a></li>
                        		<li><a onclick="ts61()" href="#">14.20 </a></li>
                        		<li><a onclick="ts71()" href="#">15.20 </a></li>
                        		<li><a onclick="ts81()" href="#">16.20 </a></li>
                        		<li><a onclick="ts91()" href="#">17.20 </a></li>
                        		<li><a onclick="t101()" href="#">18.20 </a></li>
                            
                                
                            </li>
                        </ul>
                    </li>
                    
                </ul>
            
                
            </div> 
            <div style= "margin-top: 180px">      
            <ul  id="navbar4">
                    <li><a id="sec2" href="#"style ="background: url(images/arrow.png); 
                    	background-repeat: no-repeat; 
                    	background-size: 25px;
                    	background-position: right center;
                    	background-color:#ffffff">Sec</a>
                    <ul class="item" >
                        <li><a onclick="secA2()" href="#">A</a></li>
                        <li><a onclick="secB2()" href="#">B</a></li>
                        <li><a onclick="secAB2()" href="#">A+B</a></li>
                    </ul>
                    </li>
                    <li><a id="day2" href="#"style ="background: url(images/arrow.png); 
                        background-repeat: no-repeat; 
                        background-size: 25px;
                        background-position: right center;
                        background-color:#ffffff">Day</a>
                        <ul class="item">
                            <li><a onclick="monday2()" href="#">Monday </a></li>
                        	<li><a onclick="tuesday2()" href="#">Tuesday </a></li>
                        	<li><a onclick="wednesday2()" href="#">Wednesday </a></li>
                        	<li><a onclick="thursday2()" href="#">Thursday </a></li>
                        	<li><a onclick="friday2()" href="#">Friday </a></li>
                        	<li><a onclick="saturday2()" href="#">Saturday </a></li>
                            
                        </ul>
                    </li>
                    <li><a id="time2" href="#" style ="background: url(images/arrow.png); 
                        background-repeat: no-repeat; 
                        background-size: 25px;
                        background-position: right center;
                        background-color:#ffffff">Start</a>
                        <ul class="item">
                            <li><a onclick="t12()" href="#">8.30</a></li>
                            <li><a onclick="t22()" href="#">9.30</a></li>
                            <li><a onclick="t32()" href="#">10.30</a></li>
                            <li><a onclick="t42()" href="#">11.30</a></li>
                            <li><a onclick="t52()" href="#">12.30</a></li>
                            <li><a onclick="t62()" href="#">13.30</a></li>
                            <li><a onclick="t72()" href="#">14.30</a></li>
                            <li><a onclick="t82()" href="#">15.30</a></li>
                            <li><a onclick="t92()" href="#">16.30</a></li>
                            <li><a onclick="t102()" href="#">17.30</a></li>
                            </ul>
                    </li>
                    <li><a id="times2" href="#"style ="background: url(images/arrow.png); 
                        background-repeat: no-repeat; 
                        background-size: 25px;
                        background-position: right center;
                        background-color:#ffffff">End</a>
                        <ul class="item">
                            	<li><a onclick="ts12()" href="#">9.20</a></li>
                        		<li><a onclick="ts22()" href="#">10.20</a></li>
                        		<li><a onclick="ts32()" href="#">11.20 </a></li>
                        		<li><a onclick="ts42()" href="#">12.20 </a></li>
                        		<li><a onclick="ts52()" href="#">13.20 </a></li>
                        		<li><a onclick="ts62()" href="#">14.20 </a></li>
                        		<li><a onclick="ts72()" href="#">15.20 </a></li>
                        		<li><a onclick="ts82()" href="#">16.20 </a></li>
                        		<li><a onclick="ts92()" href="#">17.20 </a></li>
                        		<li><a onclick="t102()" href="#">18.20 </a></li>
                            
                                
                            </li>
                        </ul>
                    </li>
                    
                </ul>
            
                
            </div>
            <div style= "margin-top: 240px">      
                <ul id="navbar5">
                    <li><a id="sec3" href="#"style ="background: url(images/arrow.png); 
                    	background-repeat: no-repeat; 
                    	background-size: 25px;
                    	background-position: right center;
                    	background-color:#ffffff">Sec</a>
                    <ul class="item" >
                        <li><a onclick="secA3()" href="#">A</a></li>
                        <li><a onclick="secB3()" href="#">B</a></li>
                        <li><a onclick="secAB3()" href="#">A+B</a></li>
                    </ul>
                    </li>
                    <li><a id="day3" href="#"style ="background: url(images/arrow.png); 
                        background-repeat: no-repeat; 
                        background-size: 25px;
                        background-position: right center;
                        background-color:#ffffff">Day</a>
                        <ul class="item">
                            <li><a onclick="monday3()" href="#">Monday </a></li>
                        	<li><a onclick="tuesday3()" href="#">Tuesday </a></li>
                        	<li><a onclick="wednesday3()" href="#">Wednesday </a></li>
                        	<li><a onclick="thursday3()" href="#">Thursday </a></li>
                        	<li><a onclick="friday3()" href="#">Friday </a></li>
                        	<li><a onclick="saturday3()" href="#">Saturday </a></li>
                            
                        </ul>
                    </li>
                    <li><a id="time3" href="#" style ="background: url(images/arrow.png); 
                        background-repeat: no-repeat; 
                        background-size: 25px;
                        background-position: right center;
                        background-color:#ffffff">Start</a>
                        <ul class="item">
                            <li><a onclick="t13()" href="#">8.30</a></li>
                            <li><a onclick="t23()" href="#">9.30</a></li>
                            <li><a onclick="t33()" href="#">10.30</a></li>
                            <li><a onclick="t43()" href="#">11.30</a></li>
                            <li><a onclick="t53()" href="#">12.30</a></li>
                            <li><a onclick="t63()" href="#">13.30</a></li>
                            <li><a onclick="t73()" href="#">14.30</a></li>
                            <li><a onclick="t83()" href="#">15.30</a></li>
                            <li><a onclick="t93()" href="#">16.30</a></li>
                            <li><a onclick="t103()" href="#">17.30</a></li>
                        
                            </ul>
                    </li>
                    <li><a id="times3" href="#"style ="background: url(images/arrow.png); 
                        background-repeat: no-repeat; 
                        background-size: 25px;
                        background-position: right center;
                        background-color:#ffffff">End</a>
                        <ul class="item">
                            	<li><a onclick="ts13()" href="#">9.20</a></li>
                        		<li><a onclick="ts23()" href="#">10.20</a></li>
                        		<li><a onclick="ts33()" href="#">11.20 </a></li>
                        		<li><a onclick="ts43()" href="#">12.20 </a></li>
                        		<li><a onclick="ts53()" href="#">13.20 </a></li>
                        		<li><a onclick="ts63()" href="#">14.20 </a></li>
                        		<li><a onclick="ts73()" href="#">15.20 </a></li>
                        		<li><a onclick="ts83()" href="#">16.20 </a></li>
                        		<li><a onclick="ts93()" href="#">17.20 </a></li>
                        		<li><a onclick="t103()" href="#">18.20 </a></li>
                            
                                
                            </li>
                        </ul>
                    </li>
                    
                </ul>
            
                
            </div>
    </form>
  </body>
</html>
<?php
  /*  font-end หน้านี้
    Bachelor's degree, Subject Code, Subject name,Hours/week เก็บไว้ที่ตาราง table_subject_description_input
    Lecturer, Subject Code    เก็บไว้ที่ตาราง table_teacher_subject

    *** ของ Bachelor's degree ปี1 2 3 4 ยังไม่แยก ปัจจุบันส่ง 1***
    ***Centre Subject  เก็บอีกตารางแยก drop down ยังไม่ได้ทำ***
    ***การ Refresh หน้า จะส่งข้อมูลเดิมซ้ำ ต้องเปลี่ยนหน้า ถึงจะ clear ข้อมูล***
    **subject_sec_teacher_want ใน	table_subject_description_input ต้องรอรับจาก user*** */

        if(isset($_POST['save_data'])){
              /*    เก็บ ข้อมูลวิชาโดยแอดมิน                    */
              $sql ="SELECT * FROM table_subject_description_input";
              $smyData = mysqli_query($con,$sql);
          while($row = $smyData->fetch_assoc()) {
              $count = $row['No'] + 1 ;
            }
              $subject_level = 'B1';
              $subject_code  = $_POST['code'];
              $subject_name  = $_POST['subject_name'];
              $subject_hour_per_week = $_POST['hours_per_week'];
              $query = "INSERT INTO table_subject_description_input(No,subject_level,subject_code,subject_name,subject_hour_per_week)
                                    VALUES ('$count','$subject_level','$subject_code','$subject_name','$subject_hour_per_week')";
              $query_run = mysqli_query($con,$query);

              /*    เก็บ การเชื่อมอาจารย์กับวิชาอีกตาราง         */
              $sql ="SELECT * FROM table_teacher_subject";
              $smyData = mysqli_query($con,$sql);
          while($row = $smyData->fetch_assoc()) {
              $count = $row['No'] + 1 ;
            }
              $teacher_name  = $_POST['lecturer'];
              $subject_code  = $_POST['code'];
            //  $subject_name  = $_POST['subject_name'];
              $query = "INSERT INTO table_teacher_subject(No,teacher_name,subject_code)
                                      VALUES ('$count','$teacher_name','$subject_code')";
              $query_run = mysqli_query($con,$query);
      echo '<script type="text/javascript"> alert("Input data successful!") </script>';

      }
?>