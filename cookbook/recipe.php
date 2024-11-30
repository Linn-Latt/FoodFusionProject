<?php

    include("../connect.php");
    // $reciperesult = mysqli_query($conn,"SELECT * FROM cookbook");

    // Search by cuisine_id
    if (isset($_GET['cuisine'])){
        $cui = $_GET['cuisine'];
        $searchcui = "SELECT * FROM cookbook WHERE cuisine_id = $cui";
        $reciperesult = mysqli_query($conn, $searchcui);
        unset($_GET['cuisine']);
    }
    // Search by difficulty_id
    else if (isset($_GET['difficulty'])){
        $diff = $_GET['difficulty'];
        $searchdiff = "SELECT * FROM cookbook WHERE difficulty_id = $diff";
        $reciperesult = mysqli_query($conn, $searchdiff);
        unset($_GET['difficulty']);
    }
    // Search by dietary_id
    else if (isset($_GET['dietary'])){
        $diet = $_GET['dietary'];
        $searchdiet = "SELECT * FROM cookbook WHERE dietary_id = $diet";
        $reciperesult = mysqli_query($conn, $searchdiet);
        unset($_GET['dietary']);
    }
    else{
        $reciperesult = mysqli_query($conn,"SELECT * FROM cookbook");
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
    <link rel="stylesheet" href="../style.css">

    <title>Show Recipe</title>
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


    <!-- Show Recipes -->
    <div class="recipe">
        <h1>Check Out the Recipes</h1>
        <div class="container">
            <div class="show-recipe">
                <ul class="list">
                    <div id="searchby">
                    <h3>Search Recipes by Categories</h3>

                        <div class="search-menu">
                            <?php 
                                include("../connect.php");
                                $result = mysqli_query($conn, "SELECT cuisine_id, cuisine_name FROM cuisine");
                                while($row = mysqli_fetch_assoc($result)){
                            ?>
                            <a href="./recipe.php?cuisine=<?php echo $row['cuisine_id'] ?>">
                                <?php echo $row['cuisine_name']; ?>
                            </a>
                            <?php } ?>
                        
                            <?php 
                                include("../connect.php");
                                $result = mysqli_query($conn, "SELECT difficulty_id, difficulty_name FROM difficulty");
                                while($row = mysqli_fetch_assoc($result)){
                            ?>
                            <a href="./recipe.php?difficulty=<?php echo $row['difficulty_id'] ?>">
                                <?php echo $row['difficulty_name']; ?>
                            </a>
                            <?php } ?>

                            <?php 
                                include("../connect.php");
                                $result = mysqli_query($conn, "SELECT dietary_id, dietary_name FROM dietary");
                                while($row = mysqli_fetch_assoc($result)){
                            ?>
                            <a href="./recipe.php?dietary=<?php echo $row['dietary_id'] ?>">
                                <?php echo $row['dietary_name']; ?>
                            </a>
                            <?php } ?>
                        </div>
                    </div>

                    <?php while($row = mysqli_fetch_assoc($reciperesult)){?>
                    <li id="recipe-list">
                        <div>

                            <div class="img">
                                <img src="./tempimages/<?php echo $row['recipe_pic']?>" alt="" height="140">
                            </div>

                            <div class="txt">
                                <div class="recipename"><?php echo $row['recipe_name'] ?></div> 
                                <!-- <i>by <?php echo $row['name'] ?></i> <br> -->
                                <div class="full-recipe"><?php echo "Full Recipe" . $row['description'] ?></div>
                            </div>

                        </div>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
    <!-- Show Recipes Ends -->


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