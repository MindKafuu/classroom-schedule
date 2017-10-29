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
    <br><br>
    <b>Please enter your E-mail to verify your account,</b><br>
    <b>your password will be sent to your E-mail</b>
    <br><br><br>
    <form action="page2.php" method="post">
      <input name="email" class="input email" type="text" placeholder="Email address" required/>
      <br><br><br><button name="send" class="btn"><b>Submit</b></button>
      <a class="btn" href="index.php">
      <b>Cancel</b></a>
    </form>

    <!--SEND EMAIL-->
    <?php
      if(isset($_POST['send']))
      {
        $sqlget = "SELECT * FROM user";
        $sqldata = mysqli_query($con, $sqlget) or die("error getting");

        while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)) {
          $username = $row['username'];
          $password = $row['password'];
        }

        $query = "SELECT * FROM user WHERE username = '$username'";
        
        $query_run = mysqli_query($con, $query);
        if(mysqli_num_rows($query_run) > 0)
        {
          $to = $_POST['email'];
          $subject = "Classroom Scheduling";
          $txt = "Hello
                      Username: " .$username. "
                      Password: " .$password. "
                  Thank You";
          $headers = "From: chanaganmind@gmail.com";

          mail($to,$subject,$txt,$headers);
          
          header('location:index.php');
        }
        else
        {
          echo '<script type="text/javascript"> alert("Invalid email. Try again plase!!") </script>';
        }
      }
    ?>

  </body>
</html>