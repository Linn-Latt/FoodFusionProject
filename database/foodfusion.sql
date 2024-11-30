-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Nov 13, 2024 at 04:45 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodfusion`
--

-- --------------------------------------------------------

--
-- Table structure for table `cookbook`
--

CREATE TABLE `cookbook` (
  `recipe_id` int(11) NOT NULL,
  `recipe_name` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cuisine_id` int(11) NOT NULL,
  `difficulty_id` int(11) NOT NULL,
  `dietary_id` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL,
  `recipe_pic` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cookbook`
--

INSERT INTO `cookbook` (`recipe_id`, `recipe_name`, `user_id`, `cuisine_id`, `difficulty_id`, `dietary_id`, `created_date`, `modified_date`, `recipe_pic`, `description`) VALUES
(1, 'Ramen Noodle', 0, 1, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '02.jpg', 'Prepare the Broth\r\n\r\nIn a large pot, heat sesame oil over medium heat. Add the garlic, ginger, and green onions, and sauté for 1-2 minutes until fragrant.\r\nAdd chicken or vegetable broth, water, soy sauce, and miso paste. Bring to a simmer and let it cook for 15-20 minutes. Season with salt and pepper as needed.\r\nCook the Noodles\r\n\r\nWhile the broth simmers, cook the noodles according to the package instructions. Drain and set aside.\r\nPrepare Toppings\r\n\r\nSoft-boil the eggs by placing them in boiling water for 6-7 minutes, then transfer them to an ice bath and peel.\r\nIf using mushrooms, spinach, or bok choy, quickly cook them in the broth or a separate pan until tender.\r\nAssemble the Ramen\r\n\r\nDivide the noodles into bowls, pour the broth over them, and add your desired toppings like soft-boiled eggs, mushrooms, spinach, corn, green onions, and nori.\r\nServe hot and enjoy!'),
(2, 'Ramen Noodle', 0, 1, 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '02.jpg', 'Prepare the Broth\r\n\r\nIn a large pot, heat sesame oil over medium heat. Add the garlic, ginger, and green onions, and sauté for 1-2 minutes until fragrant.\r\nAdd chicken or vegetable broth, water, soy sauce, and miso paste. Bring to a simmer and let it cook for 15-20 minutes. Season with salt and pepper as needed.\r\nCook the Noodles\r\n\r\nWhile the broth simmers, cook the noodles according to the package instructions. Drain and set aside.\r\nPrepare Toppings\r\n\r\nSoft-boil the eggs by placing them in boiling water for 6-7 minutes, then transfer them to an ice bath and peel.\r\nIf using mushrooms, spinach, or bok choy, quickly cook them in the broth or a separate pan until tender.\r\nAssemble the Ramen\r\n\r\nDivide the noodles into bowls, pour the broth over them, and add your desired toppings like soft-boiled eggs, mushrooms, spinach, corn, green onions, and nori.\r\nServe hot and enjoy!'),
(3, 'Ramen Noodle', 0, 1, 2, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '02.jpg', 'Prepare the Broth\r\n\r\nIn a large pot, heat sesame oil over medium heat. Add the garlic, ginger, and green onions, and sauté for 1-2 minutes until fragrant.\r\nAdd chicken or vegetable broth, water, soy sauce, and miso paste. Bring to a simmer and let it cook for 15-20 minutes. Season with salt and pepper as needed.\r\nCook the Noodles\r\n\r\nWhile the broth simmers, cook the noodles according to the package instructions. Drain and set aside.\r\nPrepare Toppings\r\n\r\nSoft-boil the eggs by placing them in boiling water for 6-7 minutes, then transfer them to an ice bath and peel.\r\nIf using mushrooms, spinach, or bok choy, quickly cook them in the broth or a separate pan until tender.\r\nAssemble the Ramen\r\n\r\nDivide the noodles into bowls, pour the broth over them, and add your desired toppings like soft-boiled eggs, mushrooms, spinach, corn, green onions, and nori.\r\nServe hot and enjoy!'),
(4, 'Ramen Noodle', 0, 3, 3, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '02.jpg', 'Prepare the Broth\r\n\r\nIn a large pot, heat sesame oil over medium heat. Add the garlic, ginger, and green onions, and sauté for 1-2 minutes until fragrant.\r\nAdd chicken or vegetable broth, water, soy sauce, and miso paste. Bring to a simmer and let it cook for 15-20 minutes. Season with salt and pepper as needed.\r\nCook the Noodles\r\n\r\nWhile the broth simmers, cook the noodles according to the package instructions. Drain and set aside.\r\nPrepare Toppings\r\n\r\nSoft-boil the eggs by placing them in boiling water for 6-7 minutes, then transfer them to an ice bath and peel.\r\nIf using mushrooms, spinach, or bok choy, quickly cook them in the broth or a separate pan until tender.\r\nAssemble the Ramen\r\n\r\nDivide the noodles into bowls, pour the broth over them, and add your desired toppings like soft-boiled eggs, mushrooms, spinach, corn, green onions, and nori.\r\nServe hot and enjoy!'),
(7, 'Taco', 0, 2, 2, 1, '2024-10-30 10:59:05', '0000-00-00 00:00:00', 'westernrecipe1.jpg', 'Ingredients\r\n2 lb ground beef\r\n1 chopped onion\r\n2 TBSP minced garlic\r\n1 tsp each of salt and pepper\r\n1/2 tsp cayenne\r\n4 tsp chili powder\r\n2 tsp each of cumin and dried cilantro\r\n1 1/2 cups of beef broth\r\nWhite corn tortillas\r\n1 tbsp oil\r\nShredded Monterey Jack cheese\r\nTaco Toppings (sour cream, taco sauce, Pico de Gallo, shredded lettuce)\r\nPrep Beef Tacos\r\nThere isn’t a lot of prep work in making beef tacos. Make sure you have a couple of pounds of ground beef thawed. I like to use two pounds of ground beef so we have plently and have leftovers for the next day.\r\n\r\nDuring this time I like to chop the onion and measure out all of the seasonings ahead of time.\r\n\r\nI also prefer to shred Monterey Jack cheese from a block for a creamier consistency.\r\n\r\nMake Beef Tacos\r\nHeat a large skillet over medium high heat and add the ground beef to the skillet. Add the chopped onion and cook until the ground beef is browned. Drain as much of the grease from the meat as you can. Add the minced garlic.\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `cuisine`
--

CREATE TABLE `cuisine` (
  `cuisine_id` int(11) NOT NULL,
  `cuisine_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cuisine`
--

INSERT INTO `cuisine` (`cuisine_id`, `cuisine_name`, `description`) VALUES
(1, 'Asian', ''),
(2, 'Western', ''),
(3, 'Global', '');

-- --------------------------------------------------------

--
-- Table structure for table `dietary`
--

CREATE TABLE `dietary` (
  `dietary_id` int(11) NOT NULL,
  `dietary_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dietary`
--

INSERT INTO `dietary` (`dietary_id`, `dietary_name`, `description`) VALUES
(1, 'Vegan', ''),
(2, 'Vegetarian', ''),
(3, 'High Protein', ''),
(4, 'Dairy Free', ''),
(5, 'Gluten Free', ''),
(6, 'Low Fat', '');

-- --------------------------------------------------------

--
-- Table structure for table `difficulty`
--

CREATE TABLE `difficulty` (
  `difficulty_id` int(11) NOT NULL,
  `difficulty_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `difficulty`
--

INSERT INTO `difficulty` (`difficulty_id`, `difficulty_name`, `description`) VALUES
(1, 'Beginner Friendly', ''),
(2, 'Intermediate', ''),
(3, 'Chef Level', '');

-- --------------------------------------------------------

--
-- Table structure for table `fusers`
--

CREATE TABLE `fusers` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `failed_attempts` int(11) NOT NULL,
  `logout_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fusers`
--

INSERT INTO `fusers` (`user_id`, `first_name`, `last_name`, `email`, `password`, `failed_attempts`, `logout_time`) VALUES
(1, 'GiGi', 'H', 'gigih@gmail.com', '$2y$10$RWMmr', 0, '2024-11-06 14:19:38'),
(2, 'Peter', 'Quill', 'peterq@gmail.com', '$2y$10$GUhuSmHYI/1etduTsyrGzuLUrukSPuPhA2zWon1xIVkb9CuOO/S6m', 0, '0000-00-00 00:00:00'),
(3, 'Barbie', 'Barbie', 'barbie@gmail.com', '$2y$10$VAe59y8C6g/Nhi1Tj874yOjutvgx6lxcKmH0BJQ5vASKD8lANFgGG', 0, '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cookbook`
--
ALTER TABLE `cookbook`
  ADD PRIMARY KEY (`recipe_id`);

--
-- Indexes for table `cuisine`
--
ALTER TABLE `cuisine`
  ADD PRIMARY KEY (`cuisine_id`);

--
-- Indexes for table `dietary`
--
ALTER TABLE `dietary`
  ADD PRIMARY KEY (`dietary_id`);

--
-- Indexes for table `difficulty`
--
ALTER TABLE `difficulty`
  ADD PRIMARY KEY (`difficulty_id`);

--
-- Indexes for table `fusers`
--
ALTER TABLE `fusers`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cookbook`
--
ALTER TABLE `cookbook`
  MODIFY `recipe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cuisine`
--
ALTER TABLE `cuisine`
  MODIFY `cuisine_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dietary`
--
ALTER TABLE `dietary`
  MODIFY `dietary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `difficulty`
--
ALTER TABLE `difficulty`
  MODIFY `difficulty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fusers`
--
ALTER TABLE `fusers`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
