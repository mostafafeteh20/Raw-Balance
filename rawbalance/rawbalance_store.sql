-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 27, 2022 at 07:37 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rawbalance_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` text NOT NULL,
  `category_desc` text NOT NULL,
  `category_image` text NOT NULL,
  UNIQUE KEY `a` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_desc`, `category_image`) VALUES
(1, 'Pork', 'Pork', ''),
(2, 'Chicken', 'Chicken', ''),
(3, 'Turkey', 'Turkey', ''),
(4, 'Beef', 'Beef', ''),
(5, 'Rabbit', 'Rabbit', ''),
(6, 'Treats', 'Treats', ''),
(9, 'Bones', 'Bones', ''),
(7, 'Vegetables', 'Vegetables', ''),
(10, 'Fish', 'Fish', ''),
(8, 'Supplements', 'Supplements', '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` text NOT NULL,
  `product_desc` text NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `product_image` text NOT NULL,
  `product_weight` decimal(10,2) NOT NULL,
  `product_category` int(11) NOT NULL,
  `units` text NOT NULL,
  UNIQUE KEY `a` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_desc`, `product_price`, `product_image`, `product_weight`, `product_category`, `units`) VALUES
(1, 'Pork', 'Only natural, hormone free, lean pork loin is ground together with organ meat. Additionally, bones are added to simulate the ideal prey model diet for our furry friends. Picture: Ground beef with EVA and CBD supplements. Available non ground on request.', '5.00', 'pork_1lbs.jpg', '1.00', 1, 'lbs'),
(2, 'Chicken', 'Only natural, whole, pasture raised chickens are used. 100% All Natural meat from local farms. The same chicken that our family eats. Picture: Ground chicken with EVA and CBD supplements. Can also be requested in non-ground form.', '4.00', 'chicken.jpg', '1.00', 2, 'lbs'),
(3, 'Turkey', 'Ground turkey is a great source of protein, riboflavin, and phosphorous which all ensures that your dog\'s immune system will be optimal. Strengthen your dog\'s health today by adding this highly digestible protein to your pet\'s dinner.', '6.00', 'turkey.jpg', '1.00', 3, 'lbs'),
(4, 'Beef', 'Using only pasture raised beef, beef bones, and organ meat, this is an ideal simulation of the prey diet model to feed your canine companion with optimal results. Only grass fed beef is used. We ensure only the highest quality products. Picture: Ground beef with CBD and EVA supplements. Available non-ground on request.', '6.00', 'beef_1lb.jpg', '1.00', 4, 'lbs'),
(5, 'Rabbit', 'Whole ground rabbit, locally sourced! This is the least allergenic meat for your dog. If you are just starting the journey of raw feeding, this is the best start! It is 10$ per LB.', '10.00', 'rabbit_meat_plLrDLN.jpg', '1.00', 5, 'lbs'),
(6, 'Honeycomb Tripe', 'This is clean white honeycomb tripe, made from fresh Ontario beef. As with all of our products, our quality is unmatched.', '6.00', 'honeycomb_tripe.jfif', '1.00', 6, ''),
(7, 'Chicken Feet', 'Half a pound of chicken feet. One of the best way to treat your best friend.', '3.50', 'chicken_feet.jpg', '0.50', 6, 'lbs'),
(8, 'Fresh Vegetables', 'Mix of celery, broccoli, carrots, and spinach. These are the vital nutrients needed to keep your dog performing in top shape.', '3.50', 'fresh_vegetables_1lb', '1.00', 7, 'lbs'),
(9, 'Pet CBD', 'Safe Pet CBD was created to help maintain health and alleviate aches and pains from injury or old age. The tincture is made from the same whole plant extract from premium CBD used in human capsules guaranteeing it\'s quality. The mixture with Organic Alaskan Herring (Omega 3 oil) provides the pet with many crucial health benefits that may be overlooked during feeding time. This tincture can help with phobias, uncontrollable vomiting, nausea, anxiety, seizures, depression, pain relief, and improve skin condition.', '80.00', 'pet_CBD_450mgx.jpg', '450.00', 8, 'Mg'),
(10, 'EVA Supplements', 'A 100g package of EVA, ground and ready for use. This is a natural supplement that promotes the growth and recovery of joints. Containing additional calcium it also helps to promote the absorption of Calcium into the bone.', '95.00', 'EVA_Supplements_100G_Qi9h5BU.jpg', '100.00', 8, 'g'),
(11, 'Pork Bones', 'By serving our raw and girthy pork bone to your beloved canine you will receive nothing but love from your pet. Present your dog with our mineral rich Pork bone to prevent plaque buildup and improve oral health/hygiene.', '5.00', 'pork_bones_2Lb.jpg', '2.00', 9, 'lbs'),
(12, 'Beef Bones', 'By serving our raw and girthy beef bone to your beloved canine you will receive nothing but love from your pet. Present your dog with our mineral rich beef bone to prevent plaque buildup and improve oral health/hygiene.', '5.00', 'beef_bones_2LB.jpg', '2.00', 9, 'lbs'),
(13, 'Salmon', 'Fresh salmon for your best friend.', '9.00', 'salmon_1LB.jpg', '1.00', 10, 'lbs');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
