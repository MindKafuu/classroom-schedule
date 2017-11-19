<?php
  require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!--meta-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>

    <!--style-->
    <link rel="stylesheet" type="text/css" href="css/index.css">

    <!--font-->
    <link href="https://fonts.googleapis.com/css?family=Anonymous+Pro|Work+Sans" rel="stylesheet">

    <!--shortcut-->
    <link rel="shortcut icon" href="images/icon.png" title="Favicon"/>

    <title>Classroom Schedule</title>
  </head>
  <body>
    <br><br><br><img src="images/FIBO_logo.jpg" width="150" height="170">
    <br><br><br><b style="font-size: 3em;">Classroom Schedule</b>
    <br><br><br>
    <form action="index.php" method="post">
      <input name="username" class="input user" type="text" placeholder="Email address" required/>
      <br><br>
      <input name="password" class="input password" type="password" placeholder="Password" required/>
      <br><a class="forget" href="page2.php">
      <b>forgot your password</b></a>
      <br><br><br><button name="login" class="btn"><b>login</b></button>
    </form>

    <!--check username and password-->
    <?php
      if(isset($_POST['login']))
      {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM table_account WHERE teacher_email = '$username'";

        $query_run = mysqli_query($con, $query);
        if(mysqli_num_rows($query_run) > 0)
        {
          $query = "SELECT * FROM table_account WHERE teacher_password = '$password'";

          $query_run = mysqli_query($con, $query);
          if(mysqli_num_rows($query_run) > 0)
          {
            $sql = "SELECT * FROM table_account";
            $smyData = mysqli_query($con, $sql);
            while($row = mysqli_fetch_array($smyData)) {
              if($row['teacher_email'] == $username){
                if($row['teacher_status'] == "T") {
                  header('location:user2.php');
                }
                else if($row['teacher_status']  == "A") {
                  header('location:admin1.php');
                }
              }
              
            }
          }
          else
          {
            echo '<script type="text/javascript"> alert("Invalid password. Try again plase!!") </script>';
          }
        }
        else
        {
          echo '<script type="text/javascript"> alert("Invalid username. Try again plase!!") </script>';
        }
      }
    ?>
  </body>
</html>