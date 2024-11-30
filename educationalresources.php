<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Remix Icon Link -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>

    <!-- CSS Link -->
    <link rel="stylesheet" href="./style.css">

    <title>Culinary Resources</title>
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


    <!-- Educational Resources -->
     <div class="educaional">
        <div class="container">
            <div class="eheader">
                <h2>Educational Resources</h2>
                <p>
                    Check out the resources, infographics and tutorial videos.
                </p>
            </div> 

            <div class="ebooks">
                <div class="book">
                    <img src="./images/book01.jpg" alt="">
                    <div class="book-content">
                        <h3>Veggie</h3>
                        <h5>By Obooko</h5>
                        <p>
                            This free edition is published by Obooko Publishing, with immense respect.
                        </p>
                        <a href="./pdf/veggie-vegetarian-recipes-obooko.pdf" download>Download here </a>
                    </div>
                </div>

                <div class="book">
                    <img src="./images/book3.jpg" alt="">
                    <div class="book-content">
                        <h3>Homemade Cajun Recipes</h3>
                        <h5>By Obooko</h5>
                        <p>
                            Happy with the results? Contact us and we will happily add
                            your comments to a recipe.
                        </p>
                        <a href="./pdf/homemade-cajun-recipes-obooko.pdf">Download Here</a>
                    </div>
                </div>

                <div class="book">
                    <img src="./images/book4.jpg" alt="">
                    <div class="book-content">
                        <h3>Wicca Kitchen Witchery</h3>
                        <h5>By Lisa Chamberlain</h5>
                        <p>
                            A Beginner's Guide to Magical Cooking, with Simple Spells and Recipes
                        </p>
                        <a href="./pdf/Wicca Kitchen Witchery_ A Beginner_s Guide to Magical Cooking, With Simple Spells and Recipes - PDF Room.pdf">Download Here</a>
                    </div>
                </div>

                <div class="book">
                    <img src="./images/book6.jpg" alt="">
                    <div class="book-content">
                        <h3>Creative Cooking</h3>
                        <h5>By Lisa Chamberlain</h5>
                        <p>
                            A Beginner's Guide to Magical Cooking, with Simple Spells and Recipes
                        </p>
                        <a href="./pdf/Creative Cooking 2005 - PDF Room.pdf">Download Here</a>
                    </div>
                </div>
            </div>

            <!-- Tutorial Videos -->
            <h3 class="tutorial">Cooking Tutorial Videos</h3>
            <div class="evideos">
                <div class="video">
                    <video controls>
                        <source src="./videos/ed01.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <h3>Cooking with Wood Fire</h3>
                </div>

                <div class="video">
                    <video controls>
                        <source src="./videos/ed02.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <h3>Camping Cooking</h3>
                </div>

                <div class="video">
                    <video controls>
                        <source src="./videos/ed03.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <h3>Cooking with Gas Stove</h3>
                </div>

                <div class="video">
                    <video controls>
                        <source src="./videos/ed04.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <h3>Zero Waste Cooking</h3>
                </div>
            </div>
            <!-- Tutorial Videos End -->

        </div>
     </div>
    <!-- Educational Resources Ends -->


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