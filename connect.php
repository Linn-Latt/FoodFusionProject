<?php

    $dbhost = "localhost: 3307";
    $dbuser = "root";
    $bdpass = "";
    $dbname = "foodfusion";
    $conn = mysqli_connect($dbhost, $dbuser, $bdpass);
    mysqli_select_db($conn, $dbname);

?>