-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2020 at 01:50 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multiplex`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `TotalOrders` ()  NO SQL
BEGIN
  SELECT 'Number of orders:', COUNT(*) FROM mysql.user;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `Book_id` int(11) NOT NULL,
  `Name` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `No_of_seats` int(11) NOT NULL,
  `Class` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Time` time NOT NULL,
  `Movie_id` int(11) DEFAULT NULL,
  `Total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`Book_id`, `Name`, `No_of_seats`, `Class`, `Time`, `Movie_id`, `Total`) VALUES
(176, 'Alice in Wonderland', 6, 'Gold', '18:00:00', 1, 2100),
(177, 'Ichhishta', 2, 'Premium', '15:00:00', 3, 900),
(178, 'Alice in Wonderland', 10, 'Gold', '15:00:00', 1, 3500),
(179, 'Alice in Wonderland', 2, 'Gold', '18:00:00', 1, 700);

--
-- Triggers `booking`
--
DELIMITER $$
CREATE TRIGGER `CalculateTotal` AFTER UPDATE ON `booking` FOR EACH ROW BEGIN
DECLARE tot int;
SET tot = (case when new.Class="Premium" then new.No_of_seats*450 when new.Class="Gold" then new.No_of_seats*350 when new.Class="Silver" THEN new.No_of_seats*270 end) ;

UPDATE booking b SET b.Total=tot WHERE b.Book_id=new.Book_id;

END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `InvalidSeats` BEFORE INSERT ON `booking` FOR EACH ROW BEGIN
 IF NEW.No_of_seats < 1 THEN
  INSERT INTO booking(Time)VALUES(NULL);
 END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `InvalidTime` BEFORE INSERT ON `booking` FOR EACH ROW BEGIN
 IF NEW.Time < CURRENT_TIME THEN
  INSERT INTO booking(Time)VALUES(NULL);
 END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `SeatsUnavailable` BEFORE INSERT ON `booking` FOR EACH ROW BEGIN

IF new.Class='Gold'
THEN
	IF New.No_of_seats >(SELECT Gold FROM seats s WHERE New.Movie_id=s.Movie_id AND New.Time= s.Time)
    	THEN 
        	INSERT INTO booking (No_of_seats) VALUES(NULL);
     END IF;
END IF;

IF new.Class='Silver'
THEN
	IF new.No_of_seats >(SELECT Silver FROM seats s WHERE New.Movie_id=s.Movie_id AND New.Time= s.Time)
    	THEN 
        	INSERT INTO booking (No_of_seats) VALUES(NULL);
     END IF;
END IF;

IF new.Class='Premium'
THEN
	IF new.No_of_seats >(SELECT Premium FROM seats s WHERE New.Movie_id=s.Movie_id AND New.Time= s.Time)
    	THEN 
        	INSERT INTO booking (No_of_seats) VALUES(NULL);
     END IF;
END IF;

END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `UpdateSeats` AFTER INSERT ON `booking` FOR EACH ROW BEGIN
IF New.Class="Silver"
THEN
 	UPDATE seats s SET s.Silver= s.Silver - NEW.No_of_seats WHERE New.Movie_id=s.Movie_id AND New.Time =s.Time; 
END IF;
IF New.Class="Gold"
THEN
	UPDATE seats s SET s.Gold= s.Gold - NEW.No_of_seats WHERE New.Movie_id=s.Movie_id AND New.Time =s.Time  ;
END IF;
IF NEW.Class="Premium"
THEN
	UPDATE seats s SET s.Premium=s.Premium - NEW.No_of_seats WHERE New.Movie_id=s.Movie_id AND New.Time =s.Time;  
END IF;

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `Product_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Description` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`Product_id`, `Description`, `Price`) VALUES
('FC001', 'Combo 1', 600),
('FC002', 'Combo 2', 450),
('FC003', 'Combo 3', 300),
('FC004', 'Combo 4', 150);

-- --------------------------------------------------------

--
-- Table structure for table `food_booking`
--

CREATE TABLE `food_booking` (
  `Book_id` int(11) NOT NULL,
  `Product_Id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `food_booking`
--

INSERT INTO `food_booking` (`Book_id`, `Product_Id`, `Quantity`, `Total`) VALUES
(177, '0', 0, 0),
(178, 'FC001', 2, 1200),
(179, 'FC001', 2, 1200);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `userid` int(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userid`, `uname`, `pass`, `email_id`) VALUES
(3, 'test', 'test', 'test@123'),
(4, 'admin', 'admin', 'admin123@gmail.com'),
(5, 'newadmin', '1234', 'admin123@mail.com');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `Movie_id` int(10) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Audi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`Movie_id`, `name`, `Audi`) VALUES
(1, 'Alice in Wonderland', 1),
(2, 'Premchand', 2),
(3, 'Ichhishta', 3);

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `Movie_id` int(11) NOT NULL,
  `Silver` int(11) NOT NULL DEFAULT 20,
  `Gold` int(11) NOT NULL DEFAULT 20,
  `Premium` int(11) NOT NULL DEFAULT 20,
  `Time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`Movie_id`, `Silver`, `Gold`, `Premium`, `Time`) VALUES
(1, 2, 9, 20, '15:00:00'),
(1, 20, 10, 20, '18:00:00'),
(1, 20, 20, 20, '21:00:00'),
(2, 20, 20, 20, '15:00:00'),
(2, 20, 18, 20, '18:00:00'),
(2, 20, 20, 20, '21:00:00'),
(3, 20, 20, 18, '15:00:00'),
(3, 20, 20, 20, '18:00:00'),
(3, 20, 20, 20, '21:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`Book_id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`Product_id`);

--
-- Indexes for table `food_booking`
--
ALTER TABLE `food_booking`
  ADD KEY `Book_id` (`Book_id`),
  ADD KEY `Product_id` (`Product_Id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`Movie_id`);

--
-- Indexes for table `seats`
--
ALTER TABLE `seats`
  ADD KEY `Movie_id` (`Movie_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `Book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `userid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
