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


    <div class="culinary">
        <div class="container">
            <div class="cheader">
                <h2>Culinary Resources</h2>
                <p>
                    Check out recipe cards, cooking tutorials,and instructional videos 
                    on various cooking techniques and kitchen hacks.
                </p>
            </div>    

            <div class="cvideos">
                <div class="video">
                    <video controls>
                        <source src="./videos/01.mp4" type="video/mp4">
                        <!-- <source src="" type="video/ogg"> -->
                        Your browser does not support the video tag.
                    </video>
                    <h3>Quick and Easy Dinner</h3>
                    <!-- <button>
                        Download the Video <i class="ri-arrow-down-line"></i> 
                    </button> -->
                </div>

                <div class="video">
                    <video controls>
                        <source src="./videos/02.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <h3>Delicious Pasta Recipe</h3>
                </div>

                <div class="video">
                    <video controls>
                        <source src="./videos/03.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <h3>Healthy Korean Hot Plate</h3>
                </div>

                <div class="video">
                    <video controls>
                        <source src="./videos/04.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <h3>Trendy Cucumber Salad</h3>
                </div>
            </div>

            <h3 class="h4ccards">Recipe Cards</h3>

            <div class="ccards">
                <div class="recipe-card">
                    <div class="img">
                        <img src="./images/01.jpg" alt="">
                    </div>
                    <h4>Toast</h4>
                    <div class="card-recipe">
                        <ul class="ingredients">
                            <li><h5>Ingredients</h5></li>
                            <li>Bread</li>
                            <li>Preferred Fruit</li>
                            <li>Egg</li>
                            <li>Thyme</li>
                        </ul>
                        <p>
                            Bake the bread slices to the extent that you want them to be crunchy.
                            Take the avocado and peel it, make a cross on the top and twist the two sides to separate them, then remove the pit, and put the pulp in a bowl. This was pureed in a fork until it became creamy (or not very smooth if desired).
                            Stir in a pinch of both salt and pepper to the avocado steadily.
                            Finally, place the mashed avocado flattenly on each of the slices of bread toast.
                            Put down the favorite extras of yours on top! Some classic combinations are:
                            Cherry tomatoes and a little feta cheese cannot stand the tiny specks of red pepper flakes and a drizzle of olive oil
                            You are much better off choosing fresh herbs such as basil or cilantro,
                            Serve and Enjoy!
                        </p>
                    </div>     
                </div>
                
                <div class="recipe-card">
                    <div class="img">
                        <img src="./images/02.jpg" alt="">
                    </div>
                    <h4>Beef Taco</h4>
                    <div class="card-recipe">
                        <ul class="ingredients">
                            <li><h5>Ingredients</h5></li>
                            <li>Beef</li>
                            <li>Onion</li>
                            <li>Tortillas</li>
                            <li>Cheese</li>
                            <li>Toppings</li>
                        </ul>
                        <p>
                            Heat a large skillet over medium high heat and add the ground beef to the skillet. 
                            Add the chopped onion and cook until the ground beef is browned. Drain as much of 
                            the grease from the meat as you can. Add the minced garlic. Next, season with the taco 
                            seasonings. I like to use salt, pepper, cayenne, chili powder, dried cilantro, 
                            and cumin. Once the meat is seasoned, add about 1 1/2 cups of beef broth and 
                            stir well. Bring this to a quick boil, reduce the heat, and cover with a lid. 
                            Lay out a few of the white corn tortillas in the skillet. Add a small handful of 
                            the shredded Monterey Jack cheese to the tortillas. Next, add a spoonful of 
                            the taco meat. As the tacos get finished cooking, I like to set the cooked tacos 
                            on some paper towels to help drain any of the extra grease.
                        </p>
                    </div>     
                </div>

                <div class="recipe-card">
                    <div class="img">
                        <img src="./images/03.jpg" alt="">
                    </div>
                    <h4>Burger</h4>
                    <div class="card-recipe">
                        <ul class="ingredients">
                            <li><h5>Ingredients</h5></li>
                            <li>Bread</li>
                            <li>Sauce</li>
                            <li>Egg</li>
                            <li>Seasonings</li>
                            <li>Vegetables</li>
                        </ul>
                        <p>
                            Heat the olive oil in a heavy-based frying pan over medium–high heat. 
                            Cook the burger patties for 10–12 minutes, turning once halfway through. 
                            Add the water to the pan in the last 2 minutes of cooking. This step is optional, 
                            it allows you to scrape up all of the delicious sticky bits in the base of 
                            the pan and they cling to the outside of the patties = more flavour! 
                            For a delicious chargrilled result, you can cook the patties in a chargrill pan 
                            or cook them on a barbecue plate. Heat the plate to medium–high, spray the plate 
                            with oil just before cooking and cook the patties for 10–12 minutes, 
                            turning once halfway. 
                            
                        </p>
                    </div>     
                </div>

                <div class="recipe-card">
                    <div class="img">
                        <img src="./images/04.jpg" alt="">
                    </div>
                    <h4>Monhinga</h4>
                    <div class="card-recipe">
                        <ul class="ingredients">
                            <li><h5>Ingredients</h5></li>
                            <li>Noodle</li>
                            <li>fish</li>
                            <li>Egg</li>
                            <li>Onion</li>
                            <li>Leaf Celery</li>
                        </ul>
                        <p>
                            Blend onion, garlic, ginger, chili powder, and optional shrimp paste.
                            Sauté the paste in oil, add turmeric, water or fish stock, and lemongrass, then simmer.
                            Stir in flaked poached fish and rice flour (or chickpea flour) to thicken. 
                            Season with fish sauce and salt, then simmer.
                            Pour over rice vermicelli noodles in bowls. 
                            Garnish with boiled eggs, lime wedges, cilantro, spring onions, and crispy onions.
                            Enjoy your flavorful Burmese noodle soup!
                        </p>
                    </div>     
                </div>

                <div class="recipe-card">
                    <div class="img">
                        <img src="./images/05.jpg" alt="">
                    </div>
                    <h4>Victoria Sponge</h4>
                    <div class="card-recipe">
                        <ul class="ingredients">
                            <li><h5>Ingredients</h5></li>
                            <li>Flour</li>
                            <li>Cream</li>
                            <li>Egg</li>
                            <li>Milk</li>
                            <li>Butter</li>
                            <li>Jam</li>
                        </ul>
                        <p>
                            In a medium bowl, sift the flour, baking powder, and salt together.
                            In the mixing bowl of a stand mixer fitted with the paddle attachment, 
                            beat the butter and sugar together on medium-high speed just until smooth and combined.
                            Beat in the eggs one at a time, stopping and scraping down the bowl occasionally. 
                            Then, beat in the milk and 1½ teaspoon of vanilla.
                            Slowly beat in the flour mixture on low speed. Beat just until combined, 
                            and the batter is thick but smooth. Divide the batter between the prepared cake pans 
                            and bake for 25 to 30 minutes. Let the cakes cool in the pans on a wire rack.
                            Place one cake on a serving plate. Spread the strawberry jam on top.
                        </p>
                    </div>     
                </div>

                <div class="recipe-card">
                    <div class="img">
                        <img src="./images/06.jpg" alt="">
                    </div>
                    <h4>Vegan Curry</h4>
                    <div class="card-recipe">
                        <ul class="ingredients">
                            <li><h5>Ingredients</h5></li>
                            <li>Tofu</li>
                            <li>Culiflower</li>
                            <li>Tomato</li>
                            <li>Spinach</li>
                            <li>Milk</li>
                        </ul>
                        <p>
                            Heat the oil in a large sauté pan over medium-high heat. 
                            Add the cumin and black mustard seeds. Shake the pan or stir frequently, 
                            45-60 seconds.Add the garlic, ginger, and serrano peppers. Cook for 90 seconds, 
                            stirring frequently.Add in the ground spices—turmeric, coriander, paprika, 
                            nutmeg, and cinnamon—and curry leaves. Cook for 30 seconds, stirring frequently.
                            Pour in the coconut milk, scraping up any browned bits. Add the tomato sauce and sugar.
                            Stir to combine and rapidly simmer for 3 minutes. Add the cauliflower florets, 
                            salt, and pepper, and spoon the curry over the florets. Simmer, covered, 
                            for 12-13 minutes, stirring occasionally, until cauliflower is fork-tender.
                        </p>
                    </div>     
                </div>
            </div>      
        </div>
    </div>


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