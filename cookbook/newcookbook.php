<?php
    include("../connect.php");
    include("../authentication.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Remix Icon Link -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>

    <!-- CSS Link -->
    <link rel="stylesheet" href="../style.css">

    <title>New Recipe</title>
</head>
<body>

    <!-- Header and Navbar -->
    <header>
        <div class="container">
            <nav>
                <!-- Logo -->
                <div class="logo">
                    <img src="../images/logo02.png" alt="logo">
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
                            <a href="../index.php" class="nav-link">Home</a>
                        </li>

                        <li>
                            <a href="../aboutus.php" class="nav-link">About Us</a>
                        </li>

                        <li>
                            <a href="./newcookbook.php" class="nav-link">Cookbook</a>
                        </li>

                        <li>
                            <a href="../contactus.php" class="nav-link">Contact Us</a>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="nav-link">Resources</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="../culinaryresources.php" class="dropdown_link">Culinary Resources</a>
                                </li>
                                <li>
                                    <a href="../educationalresources.php" class="dropdown_link">Educational Resources</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="../login.php" class="nav-link">LogIn<i class="ri-user-3-line"></i></a>
                        </li>

                        <li>
                            <a href="../logout.php" class="nav-link">LogOut<i class="ri-logout-box-r-line"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- Header and Navbar Ends -->

    <div class="newcookbook">
        <div class="container">
            <div class="cookbookform">
                <h1>New Recipe</h1>

                <form action="cookbookadd.php" method="post" enctype="multipart/form-data">

                    <label for="recipename">Recipe Name</label>
                    <input type="text" name="recipename" id="recipename"> <br><br>

                    <label for="description" class="full-recipe">Full Recipe</label>
                    <textarea name="description" id="description" row="12"></textarea> <br><br>

                    <label for="cuisine">Cuisine</label>
                    <select name="cuisine" id="cuisine">
                        <?php 
                            include("../connect.php");
                            $result = mysqli_query($conn, "SELECT cuisine_id, cuisine_name FROM cuisine");
                            while($row = mysqli_fetch_assoc($result)){
                        ?>

                        <option value="<?php echo $row['cuisine_id'] ?>">
                            <?php echo $row['cuisine_name']; ?>
                        </option>

                        <?php } ?>
                    </select> <br><br>

                    <label for="difficulty">Cooking Difficulty</label>
                    <select name="difficulty" id="difficulty">
                        <?php 
                            include("../connect.php");
                            $result = mysqli_query($conn, "SELECT difficulty_id, difficulty_name FROM difficulty");
                            while($row = mysqli_fetch_assoc($result)){
                        ?>

                        <option value="<?php echo $row['difficulty_id'] ?>">
                            <?php echo $row['difficulty_name']; ?>
                        </option>

                        <?php } ?>
                    </select> <br><br>

                    <label for="dietary">Dietary Preferences</label>
                    <select name="dietary" id="dietary">
                        <?php 
                            include("../connect.php");
                            $result = mysqli_query($conn, "SELECT dietary_id, dietary_name FROM dietary");
                            while($row = mysqli_fetch_assoc($result)){
                        ?>

                        <option value="<?php echo $row['dietary_id'] ?>">
                            <?php echo $row['dietary_name']; ?>
                        </option>

                        <?php } ?>
                    </select> <br><br>

                    <label for="recipephoto">Image</label>
                    <input type="file" name="recipephoto" id="recipephoto"> <br><br>

                    <input type="submit" value="Add Recipe" class="add-recipe">
                </form>

            </div>
        </div>
    </div>


    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-section">
                <div class="footer-content">
                    <div class="footer-logo">
                        <img src="../images/logo02.png" alt="logo">
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
    <script src="../main.js"></script>
    
</body>
</html>