-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2022 at 02:35 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `church_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `ID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`ID`, `username`, `password`) VALUES
(100, 'admin', 'admin12');

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `ID` int(255) NOT NULL,
  `announcement` varchar(1000) NOT NULL,
  `announce_2` varchar(1000) NOT NULL,
  `announce_3` varchar(1000) NOT NULL,
  `announce_4` varchar(1000) NOT NULL,
  `announce_5` varchar(1000) NOT NULL,
  `announce_6` varchar(1000) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`ID`, `announcement`, `announce_2`, `announce_3`, `announce_4`, `announce_5`, `announce_6`, `date`) VALUES
(1, 'There will be no prayer day tomorrow.', 'Deacons are to show up on Tuesday for an emergency meeting.', 'All weddings this coming Saturday will go on as scheduled.', 'Baptism fees for adults have been waived for the next 3 months.', 'We are having a special fundraiser dinner for the poor on Wednesday, all are welcome after paying the required fee.', 'We are currently re-registering all groups and associations within the church, groups that will not have done so (and paid their fees) by 25th September 2022 will be suspended and won\'t be authorized to continue operating.', '2022-09-03 17:35:56'),
(2, 'This is a sample announcement, carry on with your day.', '', '', '', '', '', '2022-09-14 13:40:49'),
(3, 'We will not pay dowry for any couples going forward.', '', '', '', '', '', '2022-09-14 13:41:08'),
(9, 'This is for everyone to know the system works.', 'I work here nowadays.', '', '', '', '', '2022-09-14 14:05:54');

-- --------------------------------------------------------

--
-- Table structure for table `contributions`
--

CREATE TABLE `contributions` (
  `ID` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `moneycode` varchar(50) NOT NULL,
  `amount` int(255) NOT NULL,
  `date` date NOT NULL,
  `comment` varchar(14000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contributions`
--

INSERT INTO `contributions` (`ID`, `name`, `moneycode`, `amount`, `date`, `comment`) VALUES
(1, 'Albert Rackley', 'Q43455345', 1200, '2022-09-09', 'I\'m doing this for the new construction project.'),
(2, 'Albert Vance', 'Q4375394', 1500, '2022-09-11', 'I have nothing to comment, I\'m just testing this module.'),
(4, 'Michael Oluoch', 'Q9539453', 9800, '2022-09-15', '');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `ID` int(255) NOT NULL,
  `eventname` varchar(150) NOT NULL,
  `time` time(6) NOT NULL,
  `date` date NOT NULL,
  `location` varchar(250) NOT NULL,
  `description` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`ID`, `eventname`, `time`, `date`, `location`, `description`) VALUES
(1, 'Men\'s Gala', '17:30:00.000000', '2022-09-07', 'Main Hall.', 'This will be a conference for young men to talk about the pressures of manhood in today\'s world and how to avoid off toxic behaviour in the name of expressing masculinity. We will also talk about how to live for and grow in Christ as a man.\r\n\r\nThis is a men\'s only conference open to young men from ages 18-30.\r\nThe fee will be KES 250 for walk-ins and KES 200 for those who register beforehand on the user portal.\r\n\r\nNon-members of the church are welcome.'),
(2, 'Fundraiser Dinner', '20:00:00.000000', '2022-09-09', 'Raddison at Rosebank Union.', 'This will be a special fundraiser dinner for the needy of society. It will be KES 5000 a plate and all are welcome');

-- --------------------------------------------------------

--
-- Table structure for table `event_register`
--

CREATE TABLE `event_register` (
  `ID` int(100) NOT NULL,
  `eventname` varchar(500) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_register`
--

INSERT INTO `event_register` (`ID`, `eventname`, `name`, `contact`) VALUES
(1, 'Fundraiser Dinner', 'Albert Vance', '123@try.com'),
(2, 'Fundraiser Dinner', 'Mark Awour', '0734355999'),
(3, 'Men\'s Gala', 'Peter Chotara', '0734324900');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `number` int(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(450) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`ID`, `name`, `number`, `email`, `message`, `date`) VALUES
(1, 'Frank Hailey', 745000000, 'frank@try.com', 'Hello Pastor, I Just wanted to say that the sermon you gave last week was beyond amazing. Thank you for it, I will be forever loyal to your church.', '2022-09-02 15:15:48'),
(2, 'Frank Hailey', 745000000, 'frank@try.com', 'Hello Pastor, I Just wanted to say that the sermon you gave last week was beyond amazing. Thank you for it, I will be forever loyal to your church.', '2022-09-02 15:15:48'),
(3, 'Rachel', 4564, '', 'Where do I drop off contributions', '2022-09-02 15:15:48'),
(5, 'Rachel', 4564, '', 'Where is your church', '2022-09-02 15:15:48'),
(6, 'Michael', 716000000, 'mike@gmail.com', 'Hello Pastor, I hope you\'re doing well. This is a sample message to test that the messaging system is working as intended.', '2022-09-05 16:24:14'),
(10, 'Jordan', 777000000, 'jordan@gaza.com', 'This is part of the final test for this system pastor.\r\n Good luck on future ventures.', '2022-09-14 22:41:17');

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `ID` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` int(30) NOT NULL,
  `gender` enum('m','f','o') NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`ID`, `firstName`, `lastName`, `email`, `number`, `gender`, `password`) VALUES
(1, 'Albert', 'Rackley', 'rack@rack.com', 11122234, 'm', '456'),
(2, 'Rackley', 'Stevenson', 'rackley2@bottomav.com', 330400, 'f', '1234'),
(3, 'Mike', 'E.', '123@try.com', 788999, 'm', '1234'),
(4, 'Albert', 'vance', 'vance@try.com', 459865645, 'm', 'vancer'),
(6, 'Rackley', 'Stevenson', 'racker@try.com', 722000000, 'o', 'rackley'),
(7, 'Change', 'O.', 'trial@try.com', 930850934, 'f', 'change');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contributions`
--
ALTER TABLE `contributions`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `event_register`
--
ALTER TABLE `event_register`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contributions`
--
ALTER TABLE `contributions`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `event_register`
--
ALTER TABLE `event_register`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_register`
--
ALTER TABLE `user_register`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
