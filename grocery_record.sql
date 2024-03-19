-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 19, 2024 at 02:32 PM
-- Server version: 8.0.36-0ubuntu0.22.04.1
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grocery_record`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admin_register`
--

CREATE TABLE `Admin_register` (
  `Id` int NOT NULL,
  `Username` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Email_id` varchar(350) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Password` varchar(350) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Security_Question` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Security_Answer` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Authentication_Code` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Profile_Picture` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Admin_register`
--

INSERT INTO `Admin_register` (`Id`, `Username`, `Email_id`, `Password`, `Security_Question`, `Security_Answer`, `Authentication_Code`, `Profile_Picture`) VALUES
(1, 'sdfsdf', 'abc@gmail.com', '2334', 'what is your fav colour', '234234', '234234', 'http://localhost/Grocery_records/avatar/avatar3.png'),
(2, 'nazish', 'nazishakhtar1998@gmail.com', '1234', 'what is your fav colour', 'white', '134567', 'http://localhost/Grocery_records/avatar/avatar3.png'),
(3, 'nazish', 'nazishakhtar1998@gmail.com', '1234', 'what is your fav colour', 'white', '134567', 'http://localhost/Grocery_records/avatar/avatar1.png'),
(4, 'nazish', 'fdgdg@gmail.com', '1234', 'what is your fav colour', 'white', '1234', 'http://localhost/Grocery_records/avatar/avatar1.png'),
(5, 'nazish', 'nazish1998@gmail.com', '1234', 'what is your fav colour', 'white', '2223', 'http://localhost/Grocery_records/avatar/avatar6.png'),
(6, 'nazish', 'nazishakhtar1998@gmail.com', '1234', 'what is your fav colour', 'white', '1234', 'http://localhost/Grocery_records/avatar/avatar6.png');

-- --------------------------------------------------------

--
-- Table structure for table `grocery_recor`
--

CREATE TABLE `grocery_recor` (
  `Id` int NOT NULL,
  `To_Date` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Name_of_member` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Grocery_items` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Grocery_quantity` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Grocery_unit` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `No_of_member` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Expenses` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Total` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Grand_Total_Today` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `grocery_recor`
--

INSERT INTO `grocery_recor` (`Id`, `To_Date`, `Name_of_member`, `Grocery_items`, `Grocery_quantity`, `Grocery_unit`, `No_of_member`, `Expenses`, `Total`, `Grand_Total_Today`) VALUES
(3, '2024-03-12', 'Shreya', 'chocolate', '1', 'Piece', '1', '12', '12', '12'),
(4, '2024-03-12', 'Shweta', 'chocolate', '1', 'Piece', '1', '132', '132', '132'),
(5, '2024-03-12', 'Nazish', 'Nachos', '2', 'Piece', '2', '150', '150', '23'),
(7, '2024-03-12', 'abc', 'chocolate', '1', 'Piece', '12', '123', '31', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Admin_register`
--
ALTER TABLE `Admin_register`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `grocery_recor`
--
ALTER TABLE `grocery_recor`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Admin_register`
--
ALTER TABLE `Admin_register`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `grocery_recor`
--
ALTER TABLE `grocery_recor`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
