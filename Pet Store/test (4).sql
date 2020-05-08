-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2020 at 03:53 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(255) NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `cname` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `status` varchar(255) DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `code`, `name`, `price`, `quantity`, `cname`, `phone`, `address`, `date`, `status`) VALUES
(1, 'BW001', 'Bowls', '15.00', '1', 'M Vishwas Kamath', '9901717377', '\"Shri Damodar\", Near Range Forest Office', '2020-03-20', 'done'),
(2, 'DB001', 'Dog Belts', '10.00', '1', 'M Vishwas Kamath', '9901717377', '\"Shri Damodar\", Near Range Forest Office', '2020-03-20', 'done'),
(3, 'DF0001', 'dog food', '10.00', '1', 'M Vishwas Kamath', '9901717377', '\"Shri Damodar\", Near Range Forest Office', '2020-03-20', 'done'),
(4, 'DS0001', 'dress', '10.00', '1', 'M Vishwas Kamath', '9901717377', '\"Shri Damodar\", Near Range Forest Office', '2020-03-20', 'done'),
(5, 'BD001', 'Bed', '10.00', '1', 'M Vishwas Kamath', '9901717377', '\"Shri Damodar\", Near Range Forest Office', '2020-03-20', 'done');

-- --------------------------------------------------------

--
-- Table structure for table `tblfood`
--

CREATE TABLE `tblfood` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL,
  `des` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblfood`
--

INSERT INTO `tblfood` (`id`, `name`, `code`, `image`, `price`, `des`, `quantity`) VALUES
(5, 'dog food', 'DF0001', '46950-food.png', 10.00, 'With a tough melamine stand, it is made to last. The additional strip of rubber at the bottom keeps your floor from getting scratches. Convenient curves at the base make it easy for you to carry. A removable steel bowl makes cleaning simple.  Deep dish bo', '994');

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL,
  `des` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price`, `des`, `quantity`) VALUES
(1, 'Bed', 'BD001', '9927-beds.jpg', 10.00, '*Pet Type: Dog, Cat, Rabbit, Miniature Pig Bed *Type: Enclosed Material: Polyfil Washable *W x H: 61 cm x 23 cm (2 ft x 9 in) *High quality fabric with high life cycle, soft foam for maximum comfort for the pets, special highly durable material used at th', '992'),
(2, 'Bowls', 'BW001', '51832-bowls.jpg', 15.00, 'With a tough melamine stand, it is made to last. The additional strip of rubber at the bottom keeps your floor from getting scratches. Convenient curves at the base make it easy for you to carry. A removable steel bowl makes cleaning simple.  Deep dish bo', '989'),
(3, 'Dog Belts', 'DB001', '12724-collar.jpg', 10.00, 'The webbing on this collar is strong and comfortable and has integrated reflectivity for visibility in all low-light. The unique design of this collar allows you to position the aluminium V-ring at the top for a quick leash clip-in.', '999'),
(4, 'dress', 'DS0001', '38046-dress.jpeg', 10.00, 'Designed to be warm and snug, the Cosy sweater by Heads Up For Tails is just right for the winter. Its stretchy fabric allows it to fit comfortably and does not hinder movement. So, your doggie can go about his/her day without a fuss. The happy colors are', '999');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblfood`
--
ALTER TABLE `tblfood`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblfood`
--
ALTER TABLE `tblfood`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
