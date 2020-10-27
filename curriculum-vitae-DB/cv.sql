-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2020 at 05:33 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `about_me` text NOT NULL,
  `basic_information` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`about_me`, `basic_information`) VALUES
('Hello, my name is Dwiki Aditama Supangkat. I\'m usually called Diki, born in Jombang, May 1, 1999. I\'m an Informatics student at a university in Surabaya. I am very interested in the IT world. That\'s why I\'m majoring in Informatics at this time. Besides being interested in IT world, I\'m also interested in the automotive.', 'Age : 21 Years <br>\r\nEmail : dwikiaditamasupangkat@gmail.com <br>\r\nPhone : +6285804555646 <br>\r\nAdress : Kesamben, Kab. Jombang, Jawa Timur');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `primary_school` text NOT NULL,
  `junior_school` text NOT NULL,
  `senior_school` text NOT NULL,
  `university` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`primary_school`, `junior_school`, `senior_school`, `university`) VALUES
('Primary School in : <br>\r\nSDN Podoroto 1 <br> \r\n2005 until 2011', 'Junior High School in : <br>\r\nSMPN 1 Kesamben <br>\r\n2011 until 2014', 'Senior High School in : <br>\r\nSMAN 3 Jombang <br>\r\n2014 until 2017', 'University in : <br>\r\nUPN \"Veteran\" Jawa Timur <br>\r\nInformatics, 2018 until now');

-- --------------------------------------------------------

--
-- Table structure for table `hobby`
--

CREATE TABLE `hobby` (
  `hobby_1` text NOT NULL,
  `hobby_2` text NOT NULL,
  `hobby_3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hobby`
--

INSERT INTO `hobby` (`hobby_1`, `hobby_2`, `hobby_3`) VALUES
('Travelling', 'Swimming', 'Football');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `skill_1` text NOT NULL,
  `skill_2` text NOT NULL,
  `skill_3` text NOT NULL,
  `skill_4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`skill_1`, `skill_2`, `skill_3`, `skill_4`) VALUES
('C Programming', 'Java Programming', 'Adobe XD', 'Database');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
