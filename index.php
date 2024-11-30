<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Remix Icon Link -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>

    <!-- CSS Link -->
    <link rel="stylesheet" href="./style.css">

    <title>Food Fusion</title>
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
                            <a href="#home" class="nav-link">Home</a>
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
                            <a href="#" class="nav-link" onClick="drop()">Resources</a>
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
                            <a href="" class="nav-link">LogIn<i class="ri-user-3-line"></i></a>
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

    <!-- Hero Section -->
    <section id="home">
        <div class="container">
            <div class="hero-content">
                <div class="content">
                    <h1>FoodFusion</h1>
                    <h5>
                        "Discover delicious recipes that bring flavors from around 
                        the world to your kitchen."
                    </h5>
                </div>
                <button type="submit" class="btnreg">Register Here</button> <br>
            </div>

            <!-- Register -->
            <div class="register" id="popup">

                <h1>Register</h1> 
                <i class="ri-close-line reg-close"></i>

                <form action="register.php" method="post" enctype="multipart/form-data">
                    <input type="text" name="firstname" id="firstname" placeholder="First Name" required> <br><br>

                    <input type="text" name="lastname" id="lastname" placeholder="Last Name" required> <br><br>

                    <input type="email" name="email" id="email" placeholder="Email" required> <br><br>

                    <div class="reg-password">
                        <input type="password" name="password" id="password" placeholder="Password" required>
                        <i class="ri-eye-off-line closed-eye" id="eclose"></i> 
                    </div> <br>

                    <div class="reg-repassword">
                        <input type="password" name="repassword" id="repassword" placeholder="Retype Password" required>
                        <i class="ri-eye-off-line closed-eye" id="reclose"></i>
                    </div> <br>

                    <input type="submit" value="Register" id="submit">
                </form>
                <a href="./login.php">Already have an account? LogIn</a>
            </div>
            <!-- Register End-->

        </div>
    </section>
    <!-- Hero Section Ends -->

    <!-- About Us -->
    <div id="about">
        <div class="container">
            <div class="about-div">
                <div class="about-us">
                    <h2>About Us</h2>
                    <p>
                        Welcome to FoodFusion! - A colourful blog designed for home chefs and lovers of good cuisine around the globe. 
                        We believe that culinary skills does not have to be a hereditary inheritance but instead 
                        one can learn to be a great cook openly or even if you just starting out you can still have 
                        fun in the kitchen. It represents a space of access to thousands of creative recipes, 
                        professional recommendations, and novelties in the food industry.
                    </p>
                </div>

                <div class="mission">
                    <h2>Our Mission</h2>
                    <p>
                        Welcome to FoodFusion, where our mission is to inspire a love for home cooking and 
                        culinary creativity. At FoodFusion, we believe that cooking is more than just preparing 
                        meals—it's an art form that brings people together and celebrates diverse flavors and 
                        cultures. Our goal is to empower food enthusiasts from all backgrounds to explore new 
                        recipes, share their culinary adventures, and connect with a vibrant community that 
                        shares their passion for food. Whether you're a seasoned chef or a home cook, FoodFusion 
                        is here to help you ignite your creativity and bring excitement to your kitchen. 
                        Join us on this delicious journey, and let’s create something amazing together!
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Ends -->


    <!-- Showcase -->
     <div class="showcase">
        <div class="container">

            <h3>Featured</h3>
            <div class="featured">
                <div class="global-recipe">
                    <img src="./images/global.jpg" alt="">
                    <a href="#">Check Out 10 Different Flavors Around the World</a>
                </div>

                <div class="easiest">
                    <img src="./images/easiest.jpg" alt="">
                    <a href="#">Top 10 Easiest Recipes For Every Food Lovers</a>
                </div>

                <div class="healthy">
                    <img src="./images/healthy.jpg" alt="">
                    <a href="#">7 Healthy Dishes For Your Daily Life</a>
                </div>
            </div>

            <h3 class="popularh3">Popular</h3>
            <div class="popular">
                <div class="smoothie">
                    <img src="./images/smoothie.jpg" alt="">
                    <div><a href="#">Fruity Smoothie Healthy Body</a></div>
                </div>

                <div class="vegan">
                    <img src="./images/vegan.jpg" alt="">
                    <div><a href="#">High Protein Quick Vegan Meal</a></div>
                </div>

                <div class="steak">
                    <img src="./images/steak.jpg" alt="">
                    <div><a href="#">Easy Steak Recipe</a></div>
                </div>

                <div class="dairy">
                    <img src="./images/dairyfree.jpg" alt="">
                    <div><a href="#">Dairy Free Bread</a></div>
                </div>
            </div>

            <div class="more-recipe">
                <a href="./cookbook/recipe.php">Click to See More Recipes</a>
            </div>
        </div>
     </div>
    <!-- Showcase Ends -->


    <!-- Carousel -->
    <div class="carousel">
        <div class="container">
            <div class="slide">
                <h2>Upcoming Cooking Events</h2>

                <div class="events">
                    <input type="radio" name="slide" id="event1" checked>
                    <input type="radio" name="slide" id="event2">
                    <input type="radio" name="slide" id="event3">
                    <input type="radio" name="slide" id="event4">
                    <input type="radio" name="slide" id="event5">
                    <input type="radio" name="slide" id="event6">

                    <div class="event-slides s1">
                        <img src="./images/cookingEvents.png" alt="Zero-Waste Cooking">
                    </div>

                    <div class="event-slides s2">
                        <img src="./images/cookingclass.jpg" alt="Cooking Course for Beginners">
                        <h3 class="s2">Cooking Course for Beginner</h3>
                        <p class="s2">Introduction to culinary skills and techniques.</p>
                    </div>

                    <div class="event-slides s3">
                        <img src="./images/celebrity.jpg" alt="Cooking with Celebrity Chef">
                        <h3 class="s3">Cooking with Celebrity Chef</h3>
                        <p class="s3">Learn exclusive recipes from top chefs.</p>
                    </div>

                    <div class="event-slides s4">
                        <img src="./images/dessert.jpg" alt="Creating the Best Dessert">
                        <h3 class="s4">Creating the Best Dessert</h3>
                        <p class="s4">Master the art of making delicious desserts.</p>
                    </div>

                    <div class="event-slides s5">
                        <img src="./images/kid.jpg" alt="Cooking with Kids">
                        <h3 class="s5">Cooking with Kids</h3>
                        <p class="s5">Fun and easy recipes for young chefs.</p>
                    </div>

                    <div class="event-slides s6">
                        <img src="./images/streetfood.jpg" alt="Street Food at Home">
                        <h3 class="s6">Street Food at Home</h3>
                        <p class="s6">Bring the flavors of street food to your kitchen.</p>
                    </div>
                </div>

                <div class="dots">
                    <label for="event1"></label>
                    <label for="event2"></label>
                    <label for="event3"></label>
                    <label for="event4"></label>
                    <label for="event5"></label>
                    <label for="event6"></label>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel Ends -->

    <!-- Cookie Pop-up -->
    <div class="cookie-popup" id="cookiePopup">
        <p>We use cookies to improve your experience on FoodFusion. 
        By continuing, you accept our <a href="">Privacy Policy</a>.</p>
        <button onclick="acceptCookies()">Accept</button>
    </div>
    <!-- Cookie Pop-up End -->

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