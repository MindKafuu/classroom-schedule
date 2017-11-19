<?php
    $con = mysqli_connect("localhost", "root", "") or die("Unable to connect");
    mysqli_select_db($con, 'schedule');
    mysqli_set_charset($con, "utf8");

?>
