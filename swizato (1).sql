-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2018 at 03:46 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swizato`
--
CREATE DATABASE IF NOT EXISTS `swizato` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `swizato`;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
  `name` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL,
  `mobileno` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`name`, `password`, `mobileno`, `email`) VALUES
('saikiran', 'swizato@123', '9490771432', 'saikiranseepana@gmail.com'),
('admin', 'admin', '0987654321', 'swizato@contactus.com');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE `items` (
  `item_id` varchar(20) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `item_price` int(4) NOT NULL,
  `item_type` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_name`, `item_price`, `item_type`) VALUES
('1', 'mutton haleem', 160, 'ramzan specials'),
('2', 'chicken haleem', 150, 'ramzan specials'),
('3', 'veg haleem', 140, 'ramzan specials'),
('4', 'paneer butter masala', 210, 'veg'),
('5', 'cauliflower 65', 150, 'veg'),
('6', 'potato cutlets', 155, 'veg'),
('7', 'chena masala', 180, 'veg'),
('8', 'stuffed pepper', 230, 'veg'),
('9', 'butter chicken masala', 287, 'non veg'),
('10', 'chicken manchuria', 170, 'non veg'),
('11', 'mutton tika', 295, 'non veg'),
('12', 'fish masala', 190, 'non veg'),
('13', 'prawns special', 280, 'non veg'),
('14', 'chicken biryani', 220, 'biryani'),
('15', 'mutton biryani', 250, 'biryani'),
('16', 'veg biryani', 180, 'biryani'),
('17', 'prawn biryani', 240, 'biryani');

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

DROP TABLE IF EXISTS `restaurants`;
CREATE TABLE `restaurants` (
  `restaurant_id` int(250) NOT NULL,
  `restaurant_name` varchar(50) NOT NULL,
  `rating` varchar(15) NOT NULL,
  `file_id` varchar(50) NOT NULL,
  `file` varchar(30) NOT NULL,
  `file_type` varchar(15) NOT NULL,
  `file_size` varchar(100) NOT NULL,
  `location` varchar(30) NOT NULL,
  `restaurant_address` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`restaurant_id`, `restaurant_name`, `rating`, `file_id`, `file`, `file_type`, `file_size`, `location`, `restaurant_address`) VALUES
(1, 'bawarchi', '4.3', '', 'bawarchi.jpg', 'image/jpeg', '68766', 'Hyderabad', 'Plot No. 44, RTC Cross Road, Beside Sandhya Theatre, Chikkadpally, New Nallakunta, Hyderabad, Telangana 500020'),
(2, 'fire water', '3', '', 'firewater.jpg', 'image/jpeg', '379631', 'Hyderabad', '5th Floor, Phoenix Tower A, Hitech City Road, Madhapur, Hyderabad - 500081, Opposite Trident Hotel '),
(3, 'presidentdabha', '4', '', 'president.jpg', 'image/jpeg', '84654', 'Hyderabad', 'Plot No 36, Image Garden Road, Madhapur, Hyderabad - 500081, Beside HDFC Bank'),
(4, '3b\'s restaurant', '3.9', '', 'abs.jpg', 'image/jpeg', '261404', 'Hyderabad', '1st & 2nd Floor, Apurupa Silpi Building, Indiranagar, Gachibowli, Hyderabad - 500032, Opposite Paradise Restaurant'),
(5, 'paradise', '4.5', '', 'firewater.jpg', 'image/jpeg', '57140', 'Hyderabad', 'Main Road, Hitech City, Hyderabad - 500081, Opposite Cyber Tower, Near KFC, Shilpa Kalavedika'),
(6, 'Seasonal Tastes', '4.2', '33699-seasonal.jpg', 'seasonal.jpg', 'image/jpeg', '67524', 'Hyderabad', 'No. 15, S. No. 64, The Westin Building, Raheja IT Park Mindspace, Hi-Tech City Road, Madhapur, Hyderabad, Telangana 500081'),
(10, 'Bidri', '3.9', '46566-bidri.jpg', 'bidri.jpg', 'image/jpeg', '231957', 'hyderabad', 'Opposite Hussain Sagar Lake, Tank Bund Road, Bhagyalaxmi Nagar, Kavadiguda, Secunderabad, Telangana 500080'),
(11, 'Olive Bistro', '4.1', '14810-olive-bistro.jpg', 'olive-bistro.jpg', 'image/jpeg', '60275', 'hyderabad', 'Road No 46, Jubilee Hills, At Kona\'s Durgam Cheruvu, Hyderabad, Telangana 500033'),
(7, 'Dialogue in the dark', '4.5', '12498-dialouge_in_the_dark.jpg', 'dialouge_in_the_dark.jpg', 'image/jpeg', '41124', 'hyderabad', 'Level 5, Inorbit Mall, Inorbit Mall Road, Software Units Layout, Vittal Rao Nagar, Madhapur, Hyderabad, Telangana 500081'),
(8, 'zega', '4.3', '47056-zega.png', 'zega.png', 'image/png', '1123666', 'hyderabad', '115/1, Nanakramguda, Financial District, Gachibowli, Hyderabad, Telangana 500032'),
(9, 'So The Sky kitchen', '4.7', '40315-so-the-sky-kitchen.jpg', 'so-the-sky-kitchen.jpg', 'image/jpeg', '92966', 'hyderabad', '4th floor, No.550-F, Aryans building, Road Number 92, Jubilee Hills, Hyderabad, Telangana 500033'),
(12, 'Republic of Noodles', '3.5', '31409-republicofnoodles.jpg', 'republicofnoodles.jpg', 'image/jpeg', '85723', 'hyderabad', 'Phase 2, Madhapur, Hyderabad, Telangana 500081'),
(13, 'Hard Rock Cafe', '3.9', '22432-Hardrock_cafe.jpg', 'Hardrock_cafe.jpg', 'image/jpeg', '148747', 'hyderabad', 'GVK One, Road No. 1, Banjara Hills, Hyderabad, Telangana 500034'),
(14, 'Bikanervala', '4.2', '88178-bikanervala.jpg', 'bikanervala.jpg', 'image/jpeg', '96516', 'hyderabad', '6-3-190/2, Rd Number 1, Prem Nagar, Banjara Hills, Hyderabad, Telangana 500034'),
(15, 'Jonathan\'s Kitchen', '3.1', '81090-jonathans_kitchen.jpg', 'jonathans_kitchen.jpg', 'image/jpeg', '160804', 'hyderabad', 'Madhava Reddy Colony, Gachibowli, Hyderabad, Telangana 500032');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`restaurant_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
