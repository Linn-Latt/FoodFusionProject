<?php

    session_start();
    include("./connect.php");

    // Check Connection
    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $email = $conn -> real_escape_string($_POST['email']);
        $password = $_POST['password'];

        // Get user data
        $result = $conn->query("SELECT * FROM fusers WHERE email = '$email'");
        $user = $result->fetch_assoc();

        if ($user)
        {
            if ($user['failed_attempts'] >= 3 || strtotime($user['logout_time']) > time() - 180)
            {
                $message = "Account is locked. Please try again later.";
            } 
            else
            {
                if (password_verify($password, $user['password']))
                {
                    // Reset failed attempts and logout_time
                    $conn->query("UPDATE fusers SET failed_attempts = 0, logout_time = NULL WHERE email = '$email'");
                    $_SESSION['email'] = $email;
                    $_SESSION['auth'] = true;
                    header("location: ./index.php");
                }
                else
                {
                    $failed_attempts = $user['failed_attempts'] + 1;
                    if ($failed_attempts >= 3)
                    {
                        $logout_time = date("Y-m-d H:i:s");
                        $conn->query("UPDATE fusers SET failed_attempts = 0, logout_time = '$logout_time' WHERE email = '$email'");
                        $message = "Account is locked due to too many failed attempts.";
                    }
                    else
                    {
                        $conn->query("UPDATE fusers SET failed_attempts = $failed_attempts WHERE email = '$email'");
                        $message = "Invalid credentials. You have " . (3 - $failed_attempts) . " attempts left.";
                    }
                }
            }
        }
        else
        {
            $message = "User not found";
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Remix Icon Link -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>

    <!-- CSS Link -->
    <link rel="stylesheet" href="./style.css">

    <title>Login</title>
</head>
<body>

     <!-- Header and Navbar -->
     <header>
        <div class="container">
            <nav>
                <!-- Logo -->
                <div class="logo">
                    <img src="./images/logo02.png" alt="logo">
                    <h5>FoodFusion</h5>
                </div>

                <!-- Toggle -->
                <div class="toggle" id="nav-toggle">
                    <i class="ri-menu-line burger"></i>
                    <i class="ri-close-line close"></i>
                </div>

                <div class="navbar" id="nav-menu">
                    <ul class="nav-list">
                        <li>
                            <a href="./index.php" class="nav-link">Home</a>
                        </li>

                        <li>
                            <a href="./aboutus.php" class="nav-link">About Us</a>
                        </li>

                        <li>
                            <a href="./cookbook/newcookbook.php" class="nav-link">Cookbook</a>
                        </li>

                        <li>
                            <a href="./contactus.php" class="nav-link">Contact Us</a>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="nav-link">Resources</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="./culinaryresources.php" class="dropdown_link">Culinary Resources</a>
                                </li>
                                <li>
                                    <a href="./educationalresources.php" class="dropdown_link">Educational Resources</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="./login.php" class="nav-link">LogIn<i class="ri-user-3-line"></i></a>
                        </li>

                        <li>
                            <a href="./logout.php" class="nav-link">LogOut<i class="ri-logout-box-r-line"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- Header and Navbar Ends -->

    <!-- Login -->
    <div class="login">
        <div class="container">
            <div class="loginform">
                <h1>LogIn</h1>

                <!-- Displaying Error Messages -->
                <?php if (!empty($message)): ?>
                    <div class="message"><?= $message ?></div>
                <?php endif; ?>

                <form action="login.php" method="post" enctype="multipart/form-data">
                    <input type="email" name="email" id="email" placeholder="Email" required> <br><br>

                    <input type="password" name="password" id="password" placeholder="Password" required> <br><br>

                    <input type="submit" value="LogIn" id="btnlogin">
                </form>
                <a href="./registerform.php">If you don't have an account, Register Here</a> 
            </div>
        </div>
    </div>
    <!-- Login Ends -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-section">
                <div class="footer-content">
                    <div class="footer-logo">
                        <img src="./images/logo02.png" alt="logo">
                        <h2>FoodFusion</h2>
                    </div>

                    <ul class="footer-list1">
                        <li>
                            <h3>Community</h3>
                        </li>

                        <li>
                            <a href="">Join Us</a>
                        </li>

                        <li>
                            <a href="">Share a Recipe</a>
                        </li>

                        <li>
                            <a href="">Cooking Events</a>
                        </li>
                    </ul>

                    <ul class="footer-list2">
                        <li>
                            <h3>About</h3>
                        </li>

                        <li>
                            <a href="">About Us</a>
                        </li>

                        <li>
                            <a href="">Home</a>
                        </li>

                        <li>
                            <a href="">Contact Us</a>
                        </li>
                    </ul>

                    <ul class="footer-list3">
                        <li>
                            <h3>Recipe</h3>
                        </li>

                        <li>
                            <a href="">Recipe Collections</a>
                        </li>

                        <li>
                            <a href="">Community CookBook</a>
                        </li>

                        <li>
                            <a href="">Culinary Resources</a>
                        </li>

                        <li>
                            <a href="">Educational Resources</a>
                        </li>
                    </ul>

                    <ul class="footer-list4">
                        <li>
                            <h3>Support</h3>
                        </li>

                        <li>
                            <a href="">Privacy Policy</a>
                        </li>

                        <li>
                            <a href="">Terms of Srvice</a>
                        </li>

                        <li>
                            <a href="">Cookie Policy</a>
                        </li>

                        <li>
                            <a href="">FAQs</a>
                        </li>
                    </ul>
                    
                </div>

                <div class="socailmedia">
                    <ul class="medialink">
                        <li>
                            <a href=""><i class="ri-facebook-fill"></i></i></a>
                        </li>

                        <li>
                            <a href=""><i class="ri-twitter-x-line"></i></a>
                        </li>

                        <li>
                            <a href=""><i class="ri-instagram-line"></i></a>
                        </li>

                        <li>
                            <a href=""><i class="ri-pinterest-fill"></i></a>
                        </li>

                        <li>
                            <a href=""><i class="ri-tumblr-fill"></i></a>
                        </li>
                    </ul>
                    <p>©Copyright. All right reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Ends -->


   <!-- JavaScript -->
   <script src="./main.js"></script>
    
</body>
</html>