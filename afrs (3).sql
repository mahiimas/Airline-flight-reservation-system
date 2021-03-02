-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2021 at 01:16 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `afrs`
--

-- --------------------------------------------------------

--
-- Table structure for table `airport`
--

CREATE TABLE `airport` (
  `a_id` int(11) NOT NULL,
  `aname` varchar(20) NOT NULL,
  `abbrevation` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `pincode` int(11) NOT NULL,
  `timezone` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `airport`
--

INSERT INTO `airport` (`a_id`, `aname`, `abbrevation`, `city`, `state`, `pincode`, `timezone`) VALUES
(1, 'kochi', 'KIA', 'eranakulam', 'kerala', 691505, '00:00:10');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `b_id` int(11) NOT NULL,
  `seating` varchar(20) NOT NULL,
  `utype` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email` varchar(32) NOT NULL,
  `bookingid` varchar(30) NOT NULL,
  `fli_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`b_id`, `seating`, `utype`, `name`, `phone`, `email`, `bookingid`, `fli_id`, `amount`, `uid`) VALUES
(1, 'economy', 'adult', 'Athulya B', '9633509888', 'athulyab1997@gmail.com', '$b', 0, 0, 0),
(2, 'business', 'seniour', 'Gopalakrishnan', '9876545678', 'gopal@gmail.com', 'bW5MTxBKadkGfEV', 0, 0, 0),
(3, 'economy', 'seniour', 'Nikhila Malu', '07012864212', 'nikhilashibu5@gmail.com', 'FiXVrNksM3mhZLR', 0, 0, 0),
(4, 'economy', 'adult', 'Varsha', '9866679078', 'varsha@gmail.com', 'U8JZM3yQbr4O2DI', 0, 0, 0),
(5, 'economy', 'adult', 'mahima', '9876544567', 'mahi@gmail.com', '3F9LU82yMlkNaG4', 2, 0, 0),
(6, 'economy', 'adult', 'fhdjk', '345678900', 'gjkkk@gmail.com', '3DhlGZWuTCL1td9', 2, 0, 0),
(7, 'economy', 'adult', 'Athulya B', '4567890', 'athulyab1997@gmail.com', 'L3yioIt0lGfFDnX', 2, 0, 0),
(8, 'business', 'adult', 'ghjkl', '456789000', 'm@gmail.com', 'tr3DYOdJ6yWL18S', 2, 0, 0),
(9, 'first', 'adult', 'cghjk', '23456789', 'varsha@gmail.com', 'ZcY1A2NTB9KI50g', 2, 0, 0),
(10, 'first', 'adult', 'tyui', '345678', 'athulyab1997@gmail.com', 'eIEfdiJ6KQqkMZC', 2, 0, 0),
(11, 'business', 'seniour', 'dfghjk', '3456789', 'athulyab1997@gmail.com', '1dBJ4rGhHuP6aQq', 2, 600, 0),
(12, 'business', 'adult', 'Athulya B', '2345678', 'athulyab1997@gmail.com', 'G3eYBZ82tJ7Nc5s', 2, 1000, 0),
(13, 'business', 'seniour', 'neethu', '3456789', 'neethu@gmail.com', 'B4DeaWCS75yoh9u', 6, 6552, 0),
(14, 'business', 'infant', 'Athulya B', '23456789', 'athulyab1997@gmail.com', 'JV345MbsvXHhdxq', 6, 6152, 0),
(16, 'economy', 'seniour', 'arsha', '1234567877', 'arsha@gmail.com', 'icJ0WryUDOYnxA6', 6, 4701, 4),
(20, 'business', 'seniour', 'remya', '78945691230', 'remya@gmail.com', 'tVI75xweyblZTzd', 6, 6552, 4),
(21, 'business', 'seniour', 'remya', '78945691230', 'remya@gmail.com', 'gEYhupkLxF51fsi', 6, 6552, 4),
(22, 'business', 'seniour', 'Nakulan', '9855757656', 'neha@gmail.com', 'Q6eVk8pJrm4Xzxd', 6, 6552, 5),
(23, 'first', 'adult', 'neha', '7896541230', 'neha@gmail.com', 'E952i1D7zjft4Qo', 6, 6000, 5),
(24, 'economy', 'adult', 'Nithya', '8086210970', 'nithya@gmail.com', 'NC9UjybsHDcqdtw', 8, 500, 5),
(25, 'business', 'seniour', 'Lavanya', '8686521245', 'lavanya@gmail.com', 'e5pdaFqNIzbOBjG', 8, 800, 5),
(26, 'business', 'seniour', 'Vinayakan', '7452561245', 'vinayakan@gmail.com', 'LHmDl12AcfhRa3C', 8, 800, 6),
(27, 'first', 'seniour', 'appu', '7896325410', 'appu@gmail.com', 'l6eMDObFmJot4nx', 8, 600, 5);

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `f_id` int(11) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `flightid` varchar(20) NOT NULL,
  `flyfrom` varchar(20) NOT NULL,
  `flyto` varchar(20) NOT NULL,
  `dtime` time NOT NULL,
  `atime` time NOT NULL,
  `eseat` int(11) NOT NULL,
  `bseat` int(11) NOT NULL,
  `fseat` int(11) NOT NULL,
  `date` date NOT NULL,
  `ecost` int(11) NOT NULL,
  `bcost` int(11) NOT NULL,
  `fcost` int(11) NOT NULL,
  `seat_f` varchar(10) NOT NULL,
  `seat_s` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`f_id`, `cname`, `flightid`, `flyfrom`, `flyto`, `dtime`, `atime`, `eseat`, `bseat`, `fseat`, `date`, `ecost`, `bcost`, `fcost`, `seat_f`, `seat_s`) VALUES
(2, 'spicejet', 'A143', 'Mumbai', 'kochi', '10:00:00', '15:00:00', 25, 15, 10, '2021-05-02', 5245, 1000, 8225, 'A', 12),
(6, 'Indigo', 'ID345', 'Trivandrum ', 'Bangalore', '08:45:00', '11:00:00', 11, 4, 11, '2021-04-21', 5201, 6952, 6000, 'B', 12),
(7, 'Indigo', 'IDG678', 'Delhi ', 'Ernakulam', '07:00:00', '09:00:00', 25, 25, 15, '2021-03-04', 800, 1200, 1800, '', 0),
(8, 'AirGo', 'EM345', 'Kozhikode', 'Trivandrum', '11:00:00', '12:45:00', 19, 20, 29, '2021-03-06', 500, 1200, 800, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `usertype` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`, `usertype`) VALUES
(2, 'mahima@gmail.com', '$2y$10$MBYPn7A3v1GlbsPP4ddH8eDteQM1ccBf3pQQp7jaLmNvR3rSjMWX.', '1'),
(3, 'varsha@gmail.com', '$2y$10$5HciaPd1IXAUhCOoIVXhaOvhJ.v.15ok5pZFH7L0HP/b.nkPq5.zy', '0'),
(4, 'm@gmail.com', '$2y$10$meJGqn3XfsvnV.AvwmCkfe4nNVoc4iyptLr9gMTKK6jn0GeSVTwhC', '1'),
(5, 'neha@gmail.com', '$2y$10$bM.zurEEgaYDAbm06d2ZLu7aCRjw8ZOCAoJDJLWtrsR3lx7EXgP9u', '1'),
(6, 'rahul@gmail.com', '$2y$10$IjfBNPf4KaQ.hAjAZfna2..pwmxPNDm5RyQVV6pwN5lZlRb8oJyFa', '1');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `n_id` int(11) NOT NULL,
  `notification` varchar(30) NOT NULL,
  `flight` varchar(30) NOT NULL,
  `currentdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`n_id`, `notification`, `flight`, `currentdate`) VALUES
(2, 'Delayed for 5 hrs.', '8', '2021-03-01');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `txn_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payment_gross` float(10,2) NOT NULL,
  `currency_code` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `payer_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` float(10,2) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `status`) VALUES
(1, 'New Apple iPhone 12 Pro (256GB) - Graphite', 65.00, 1);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `r_id` int(11) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `loginid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`r_id`, `fname`, `lname`, `age`, `gender`, `address`, `phone`, `loginid`) VALUES
(1, 'mahima', 'S', 23, 'female', 'koijhgfcv', '9887654567', 2),
(2, 'Varsha', 'S', 23, 'female', 'kollam', '9876567895', 3),
(3, 'mahima', 'S', 23, 'female', 'madannada', '9876666789', 4),
(4, 'Neha', 'K', 21, 'female', 'Honey villa, second street,Delhi', '7920345800', 5),
(5, 'Rahul', 'R', 25, 'male', 'Rk Bhavan', '8086210970', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airport`
--
ALTER TABLE `airport`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`n_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`r_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `airport`
--
ALTER TABLE `airport`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `flight`
--
ALTER TABLE `flight`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `n_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
