-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2022 at 06:35 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nba seat seeker`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerID` int(11) NOT NULL,
  `LastName` varchar(25) DEFAULT NULL,
  `FirstName` varchar(25) DEFAULT NULL,
  `PhoneNumber` int(11) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerID`, `LastName`, `FirstName`, `PhoneNumber`, `Age`) VALUES
(1, 'Papadakis', 'Panagiotis', 1111111, 20),
(2, 'Volasimakis', 'Nikolas', 4444444, 7),
(3, 'Fountoulakos', 'Xarhs', 2222222, 13),
(4, 'Papadakis', 'Giwrgos', 8888888, 69),
(5, 'Antwniou', 'Andreas', 5555555, 45),
(6, 'Karameta', 'Alexandros', 6666666, 10),
(7, 'Panagiotopoulos', 'Spyros', 3333333, 35);

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `DiscountID` int(11) NOT NULL,
  `DiscountName` varchar(25) DEFAULT NULL,
  `DiscountPrice` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `discount`
--

INSERT INTO `discount` (`DiscountID`, `DiscountName`, `DiscountPrice`) VALUES
(1, 'PAIDIKO', 30),
(2, 'HLIKIOMENOI', 20),
(3, 'KANONIKO', 0);

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `MatchID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`MatchID`) VALUES
(1),
(2),
(3),
(4),
(5);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `StartTime` varchar(20) DEFAULT NULL,
  `EndTime` varchar(20) DEFAULT NULL,
  `MatchID` int(11) NOT NULL,
  `TeamsID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`StartTime`, `EndTime`, `MatchID`, `TeamsID`) VALUES
('18:00', '20:00', 1, 1),
('15:00', '17:00', 2, 2),
('12:00', '14:00', 3, 3),
('18:30', '20:30', 4, 4),
('18:00', '20:00', 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `SeatNumber` int(11) NOT NULL,
  `Availability` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`SeatNumber`, `Availability`) VALUES
(1, 'Yes'),
(2, 'Yes'),
(3, 'No'),
(4, 'Yes'),
(5, 'Yes'),
(6, 'No');

-- --------------------------------------------------------

--
-- Table structure for table `seat_type`
--

CREATE TABLE `seat_type` (
  `TypeID` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `TypeName` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seat_type`
--

INSERT INTO `seat_type` (`TypeID`, `Price`, `TypeName`) VALUES
(1, 60, 'ECONOMY'),
(2, 80, 'STANDARD'),
(3, 120, 'VIP');

-- --------------------------------------------------------

--
-- Table structure for table `stadium`
--

CREATE TABLE `stadium` (
  `StadiumID` int(11) NOT NULL,
  `City` varchar(25) DEFAULT NULL,
  `Name` varchar(25) DEFAULT NULL,
  `Number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stadium`
--

INSERT INTO `stadium` (`StadiumID`, `City`, `Name`, `Number`) VALUES
(1, 'LOS ANGELES', 'Crypto.comArena', 12121212),
(2, 'NEW YORK', 'MADISON SQUARE GARDEN', 13131313),
(3, 'MILWAUKEE', 'FISERV FORUM', 14141414),
(4, 'CHICAGO', 'UNITED CENTER', 15151515),
(5, 'BROOKLYN', 'BARCLAYS CENTER', 16161616),
(6, 'BOSTON', 'TD GARDEN', 17171717);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `TeamsID` int(11) NOT NULL,
  `TeamName` varchar(25) DEFAULT NULL,
  `Coaches` varchar(25) DEFAULT NULL,
  `PlayerNames` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`TeamsID`, `TeamName`, `Coaches`, `PlayerNames`) VALUES
(1, 'LAKERS', 'Ty Lue', 'LeBron James, Russel West'),
(2, 'KNICKS', 'Tom Thibodeau', 'Ryan Arcidiacono, RJ Barr'),
(3, 'BUCKS', 'Mike Budenholzer', 'Giannis Antetokounmpo, Th'),
(4, 'BULLS', 'Billy Donovan', 'Michael Jordan, Lonzo Bal'),
(5, 'NETS', 'Steve Nash', 'Nic Claxton, Seth Curry, '),
(6, 'CELTICS', 'Joe Mashulla', 'Jayson Tatum, Marcus Smar');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `TicketID` int(11) NOT NULL,
  `CustomerID` int(11) NOT NULL,
  `StadiumID` int(11) NOT NULL,
  `DiscountID` int(11) DEFAULT NULL,
  `MatchID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`TicketID`, `CustomerID`, `StadiumID`, `DiscountID`, `MatchID`) VALUES
(1, 1, 1, 3, 1),
(2, 2, 2, 1, 2),
(3, 3, 3, 1, 3),
(4, 4, 5, 2, 4),
(5, 5, 4, 3, 2),
(6, 6, 4, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`DiscountID`);

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`MatchID`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD KEY `MatchID` (`MatchID`),
  ADD KEY `TeamsID` (`TeamsID`);

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`SeatNumber`);

--
-- Indexes for table `seat_type`
--
ALTER TABLE `seat_type`
  ADD PRIMARY KEY (`TypeID`);

--
-- Indexes for table `stadium`
--
ALTER TABLE `stadium`
  ADD PRIMARY KEY (`StadiumID`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`TeamsID`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`TicketID`),
  ADD KEY `StadiumID` (`StadiumID`),
  ADD KEY `DiscountID` (`DiscountID`),
  ADD KEY `MatchID` (`MatchID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
  MODIFY `MatchID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `SeatNumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `stadium`
--
ALTER TABLE `stadium`
  MODIFY `StadiumID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `TeamsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`MatchID`) REFERENCES `matches` (`MatchID`),
  ADD CONSTRAINT `schedule_ibfk_2` FOREIGN KEY (`TeamsID`) REFERENCES `teams` (`TeamsID`);

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`StadiumID`) REFERENCES `stadium` (`StadiumID`),
  ADD CONSTRAINT `ticket_ibfk_2` FOREIGN KEY (`DiscountID`) REFERENCES `discount` (`DiscountID`),
  ADD CONSTRAINT `ticket_ibfk_3` FOREIGN KEY (`MatchID`) REFERENCES `matches` (`MatchID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
