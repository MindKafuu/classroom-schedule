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
        document.getElementById("green").style.visibility="hidden";
    }
        function showt(){
        document.getElementById("green").style.visibility="visible";//show dropdown

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
        </div><br><br>
        </header>
        <form action="admin3.php" method="post">
        <div style="margin-top: -94px; margin-left:87.7%">
        <a href="index.php" class="btn"><b>?</b></a>
        <a href="index.php" class="btn"><b>Log out</b></a>
    </div>
    <div style="margin-top: 20px; margin-left:33.3%">
        <a href="admin1.php" class="btn1"><b>Home</b></a>
        <a href="admin2.php" class="btn1"><b>User Info</b></a>
        <a href="admin3.php" class="btn1"style=" color: #79a2ff"><b>Class Info</b></a>
        <a href="admin4.php" class="btn1"><b>Class Management</b></a>
        <a href="admin5.php" class="btn1"><b>Summary</b></a>
        <a href="admin6.php" class="btn1"><b>User status</b></a>
        <a href="admin7.php" class="btn1"><b>Complete</b></a>
    </div>
        <div style="margin-top:25px;">
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
            <input type="text" class="whitetab" style= "margin-left: 20px; margin-top:22px" name="code" required><br><br><br>
            <input type="text" name="subject_name"  class="whitetab" style= "margin-left: 20px" required><br><br><br>
            <input type="text" name="lecturer"      class="whitetab" style= "margin-left: 20px"><br><br><br>
            <input type="text" name="hours_per_week"class="whitetab" style= "margin-left: 20px" required><br><br><br>
          </div>


          <button class="fundamental" onclick="showt()">Fundamental Subject</button>

          <br><br><br>
          <div style="margin-top: -250px;margin-left:130px">
          <div style="margin-left: -180px;margin-top: 28px">
          </a>
          <button name="save_data" class = "buttonsave">
              <span class = "content"><b>SAVE</b></span>
      </button>
          <a href="#" style="margin-left: 620px ; margin-top:-33px"class = "button5">
                <span class = "content"><b>+</b></span>
            </a>
        </div>
        </div>

            </br> </br> </br>
            <div style= "margin-top:90px" id="green">      
            <select name="subject_sec1">
            <option value="SEC">Sec</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="AB">A+B</option>
          </select>
          <select name="seven_day1">
            <li><option>Day</option></li>
            <li><option >Monday </option></li>
            <li><option >Tuesday </option></li>
            <li><option >Wednesday </option></li>
            <li><option >Thursday </option></li>
            <li><option >Friday </option></li>
            <li><option >Saturday </option></li>
          </select>
          <select name="start_time1" >
           <li><option>start</option></li>
           <li><option >8.30</option></li>
           <li><option >9.30</option></li>
           <li><option >10.30</option></li>
           <li><option >11.30</option></li>
           <li><option >12.30</option></li>
           <li><option >13.30</option></li>
           <li><option >14.30</option></li>
           <li><option >15.30</option></li>
           <li><option >16.30</option></li>
           <li><option >17.30</option></li>
          </select>
          <select name="end_time1">
            <li><option>End</option></li>
            <li><option >9.20  </option></li>
            <li><option >10.20 </option></li>
            <li><option >11.20 </option></li>
            <li><option >12.20 </option></li>
            <li><option >13.20 </option></li>
            <li><option >14.20 </option></li>
            <li><option >15.20 </option></li>
            <li><option >16.20 </option></li>
            <li><option >17.20 </option></li>
            <li><option >18.20 </option></li>
          </select>
          <br><br> <!-- part2-->
          <select name="subject_sec2">
            <option value="SEC">Sec</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="AB">A+B</option>
          </select>
          <select name="seven_day2">
            <li><option>Day</option></li>
            <li><option >Monday </option></li>
            <li><option >Tuesday </option></li>
            <li><option >Wednesday </option></li>
            <li><option >Thursday </option></li>
            <li><option >Friday </option></li>
            <li><option >Saturday </option></li>
          </select>
          <select name="start_time2" >
           <li><option>start</option></li>
           <li><option >8.30</option></li>
           <li><option >9.30</option></li>
           <li><option >10.30</option></li>
           <li><option >11.30</option></li>
           <li><option >12.30</option></li>
           <li><option >13.30</option></li>
           <li><option >14.30</option></li>
           <li><option >15.30</option></li>
           <li><option >16.30</option></li>
           <li><option >17.30</option></li>
          </select>
          <select name="end_time2">
            <li><option>End</option></li>
            <li><option >9.20  </option></li>
            <li><option >10.20 </option></li>
            <li><option >11.20 </option></li>
            <li><option >12.20 </option></li>
            <li><option >13.20 </option></li>
            <li><option >14.20 </option></li>
            <li><option >15.20 </option></li>
            <li><option >16.20 </option></li>
            <li><option >17.20 </option></li>
            <li><option >18.20 </option></li>
          </select>
          <br><br><!-- part3-->
          <select name="subject_sec3">
            <option value="SEC">Sec</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="AB">A+B</option>
          </select>
          <select name="seven_day3">
            <li><option>Day</option></li>
            <li><option >Monday </option></li>
            <li><option >Tuesday </option></li>
            <li><option >Wednesday </option></li>
            <li><option >Thursday </option></li>
            <li><option >Friday </option></li>
            <li><option >Saturday </option></li>
          </select>
          <select name="start_time3" >
           <li><option>start</option></li>
           <li><option >8.30</option></li>
           <li><option >9.30</option></li>
           <li><option >10.30</option></li>
           <li><option >11.30</option></li>
           <li><option >12.30</option></li>
           <li><option >13.30</option></li>
           <li><option >14.30</option></li>
           <li><option >15.30</option></li>
           <li><option >16.30</option></li>
           <li><option >17.30</option></li>
          </select>
          <select name="end_time3">
            <li><option>End</option></li>
            <li><option >9.20  </option></li>
            <li><option >10.20 </option></li>
            <li><option >11.20 </option></li>
            <li><option >12.20 </option></li>
            <li><option >13.20 </option></li>
            <li><option >14.20 </option></li>
            <li><option >15.20 </option></li>
            <li><option >16.20 </option></li>
            <li><option >17.20 </option></li>
            <li><option >18.20 </option></li>
          </select>
          <br><br> <!-- part4-->
          <select name="subject_sec4">
            <option value="SEC">Sec</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="AB">A+B</option>
          </select>
          <select name="seven_day4">
            <li><option>Day</option></li>
            <li><option >Monday </option></li>
            <li><option >Tuesday </option></li>
            <li><option >Wednesday </option></li>
            <li><option >Thursday </option></li>
            <li><option >Friday </option></li>
            <li><option >Saturday </option></li>
          </select>
          <select name="start_time4" >
           <li><option>start</option></li>
           <li><option >8.30</option></li>
           <li><option >9.30</option></li>
           <li><option >10.30</option></li>
           <li><option >11.30</option></li>
           <li><option >12.30</option></li>
           <li><option >13.30</option></li>
           <li><option >14.30</option></li>
           <li><option >15.30</option></li>
           <li><option >16.30</option></li>
           <li><option >17.30</option></li>
          </select>
          <select name="end_time4">
            <li><option>End</option></li>
            <li><option >9.20  </option></li>
            <li><option >10.20 </option></li>
            <li><option >11.20 </option></li>
            <li><option >12.20 </option></li>
            <li><option >13.20 </option></li>
            <li><option >14.20 </option></li>
            <li><option >15.20 </option></li>
            <li><option >16.20 </option></li>
            <li><option >17.20 </option></li>
            <li><option >18.20 </option></li>
          </select>
            </div><br><br><br><br><br><br>
            <div style="margin-top:20px;margin-right:100px;margin-bottom:40px;">
            <button id="green" name="Fundametal_save" class = "buttonsave">
                <span class = "content"><b>FundamentalSave</b></span>
            </button>
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
              $sql ="SELECT * FROM table_subject_description_input_admin";
              $smyData = mysqli_query($con,$sql);
          while($row = $smyData->fetch_assoc()) {
              $count = $row['No'] + 1 ;
            }
              $subject_level = 'B1';
              $subject_code  = $_POST['code'];
              $subject_name  = $_POST['subject_name'];
              $subject_hour_per_week = $_POST['hours_per_week'];
              $query = "INSERT INTO table_subject_description_input_admin(No,subject_level,subject_code,subject_name,subject_hour_per_week)
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
      if(isset($_POST['Fundametal_save'])){
        $sql ="SELECT * FROM table_fundamental_subjects";
        $smyData = mysqli_query($con,$sql);
    while($row = $smyData->fetch_assoc()) {
        $count = $row['No'] + 1 ;
      }
        $____ = $_POST[''];
        echo '<script type="text/javascript"> alert("Input data successful!") </script>';
      }
      //$('#notification-event li').click(function () {
          //var eid = $(this).attr("data-id");
          //var $frm = $('#event-notify-form');
          //set the value of the hidden element
          //$frm.find('input[name="myId"]').val(eid);
          //submit the form
          ///$frm.submit();
      //});
?>