<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Remix Icon Link -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>

    <!-- CSS Link -->
    <link rel="stylesheet" href="./style.css">
    
    <title>Contact Us</title>
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
    

    <!-- Contact Us -->
     <div class="contactus">
        <div class="container">
            <h2>Contact Us</h2>
            <div class="contactus-form">
                <div class="form1">
                    <input type="text" name="firstname" placeholder="First Name">
                    <input type="text" name="lastname" placeholder="Last Name">
                    <input type="email" name="email" placeholder="Email">
                    <input type="phone" name="phone" placeholder="Phone">
                    <textarea name="message" id="message" placeholder="Write Your Text(Enquiries, Recipe Request or Feedback)"></textarea>
                    <input type="submit" value="Submit" class="contact-submit">
                </div>

                <div class="form2">
                    <h3 class="getintouch">Get In Touch With Us</h3>
                    <p class="form2-intro">
                        Questions, request for recipes, and feedback should be directed to the following channel. 
                        We'd love to hear from you! Contact FoodFusion team through the form below and 
                        we will respond as soon as possible. Whether you’ve been cooking in your kitchen for years, 
                        or simply have a passion for learning about cooking, we are here for you.
                    </p>

                    <div class="form2-div">
                        <button><i class="ri-map-pin-line"></i></button>
                        <p>2nd Floor, MDL Tower, 23 x 71 street, Mandalay</p>
                    </div>

                    <div class="form2-div">
                        <button><i class="ri-phone-line"></i></button>
                        <p>02-379-129-898</p>
                    </div>

                    <div class="form2-div">
                        <button><i class="ri-mail-line"></i></button>
                        <p>foodfusion@business.com</p>
                    </div>

                    <div class="form2-socialmedia">
                        <a href=""><i class="ri-facebook-fill"></i></i></a>
                        <a href=""><i class="ri-twitter-x-line"></i></a>
                        <a href=""><i class="ri-instagram-line"></i></a>
                        <a href=""><i class="ri-pinterest-fill"></i></a>
                        <a href=""><i class="ri-tumblr-fill"></i></a>
                    </div>
                </div> 
            </div>
        </div>
     </div>
    <!-- Contact Us Ends -->


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