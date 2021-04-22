-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2021 at 04:04 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `bkid` int(11) NOT NULL,
  `isbn` varchar(20) DEFAULT NULL,
  `author` varchar(50) DEFAULT NULL,
  `title` varchar(150) NOT NULL,
  `category` varchar(50) DEFAULT NULL,
  `years` int(11) DEFAULT NULL,
  `arr_date` date DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`bkid`, `isbn`, `author`, `title`, `category`, `years`, `arr_date`, `price`, `Quantity`) VALUES
(1, '9780679783268', 'Jane Austen', 'Pride & Prejudice', NULL, 2013, '2013-04-13', 320, 25),
(2, '9788172344566', ' F. Scott Fitzgerald', 'The Great Gatsby ', NULL, 2014, '2015-04-05', 1450, 12),
(3, '9780521195904', 'dewey-h-hodges', 'introduction to structural dynamics and aeroelasticity', '', 2012, '2015-06-19', 530, 5),
(4, '9789937020190', 'Mani Dixit', 'Over the Mountains: A Story of the Struggles of the Nepalis\r\n', '', 2017, '2021-04-18', 1000, 15);

-- --------------------------------------------------------

--
-- Table structure for table `borrow`
--

CREATE TABLE `borrow` (
  `bkid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `borrow_date` date NOT NULL,
  `Return_date` date NOT NULL,
  `Issued_by` varchar(50) NOT NULL,
  `brid` int(11) NOT NULL,
  `return_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_level` int(11) NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `mobile` varchar(10) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `Active_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `user_level`, `last_login`, `mobile`, `mail`, `Active_status`) VALUES
(1, 'super user', 'me@me', '202cb962ac59075b964b07152d234b70', 1, '2020-08-11 07:03:23', '9876543210', 'me@me', 1),
(2, 'user 1', 'user1', '202cb962ac59075b964b07152d234b70', 0, '0000-00-00 00:00:00', '987654321', 'run@runner', 1),
(3, 'user 2', 'user2', '639bae9ac6b3e1a84cebb7b403297b79', 0, '0000-00-00 00:00:00', '9876543210', 'you@you', 1),
(4, 'user 3', 'user3', '098f6bcd4621d373cade4e832627b4f6', 0, '0000-00-00 00:00:00', '987654321', 'test@test', 1),
(5, 'Super Test', '@test', '098f6bcd4621d373cade4e832627b4f6', 1, '0000-00-00 00:00:00', '9876543210', 'test@test', 1),
(6, '1 1', 'uni', 'c4ca4238a0b923820dcc509a6f75849b', 0, '0000-00-00 00:00:00', '1', '1', 1),
(7, '1 1', '1', 'c4ca4238a0b923820dcc509a6f75849b', 0, '0000-00-00 00:00:00', '1', '1', 1),
(8, 'ma ma', 'ma', 'b74df323e3939b563635a2cba7a7afba', 0, '0000-00-00 00:00:00', '213', 'ma@ma', 0),
(9, 'ma am', '@ma', 'b74df323e3939b563635a2cba7a7afba', 0, '0000-00-00 00:00:00', '12', 's', 0),
(10, '1 1', '1', 'c4ca4238a0b923820dcc509a6f75849b', 0, '0000-00-00 00:00:00', '1', '1', 0),
(11, 'sajan thakuri', 'sajan', '202cb962ac59075b964b07152d234b70', 0, '0000-00-00 00:00:00', '9876543210', 'sajan@thakuri', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`bkid`);

--
-- Indexes for table `borrow`
--
ALTER TABLE `borrow`
  ADD PRIMARY KEY (`brid`),
  ADD KEY `book_fk` (`bkid`),
  ADD KEY `user_fk` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `bkid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `borrow`
--
ALTER TABLE `borrow`
  MODIFY `brid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `borrow`
--
ALTER TABLE `borrow`
  ADD CONSTRAINT `book_fk` FOREIGN KEY (`bkid`) REFERENCES `book` (`bkid`),
  ADD CONSTRAINT `user_fk` FOREIGN KEY (`id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
