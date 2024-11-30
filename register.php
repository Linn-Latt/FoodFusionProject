<?php

    include("connect.php");
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    $hashpwd = password_hash($password, PASSWORD_DEFAULT);

    if($password != $repassword)
    {
        echo '<script>alert("Retype your Password Correctly!")</script>';
    }
    else
    {
        $sql = "INSERT INTO fusers(first_name, last_name, email, password) 
                VALUES('$firstname', '$lastname', '$email', '$hashpwd' )";
        mysqli_query($conn, $sql);

        header("location: ./login.php");
    }
?>