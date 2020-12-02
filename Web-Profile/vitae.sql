-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2020 at 02:52 PM
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
-- Database: `vitae`
--

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` int(11) NOT NULL,
  `tahun` text NOT NULL,
  `jenis` text NOT NULL,
  `nama_pendidikan` text NOT NULL,
  `tipe` text NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `tahun`, `jenis`, `nama_pendidikan`, `tipe`, `deskripsi`) VALUES
(28, '2005 until 2011', 'Primary School', 'SDN PODOROTO 1', 'Primary School', 'Primary School is the most basic level of formal education in Indonesia. Primary school is taken within 6 years, starting from grade 1 to grade 6. Primary school graduates can continue their education to Junior High School (or equivalent).  Primary school students are generally aged 7-12 years. In Indonesia, every citizen aged 7-15 years is obliged to attend basic education'),
(32, '2011 until 2014', 'Junior High School', 'SMPN 1 KESAMBEN', 'Junior High School', 'junior high school is the level of basic education in formal education in Indonesia which is taken after graduating from primary school (or the equivalent). Junior high school is taken within 3 years, starting from grade 7 to grade 9. Junior high school students are generally 13-15 years old. In Indonesia, every citizen aged 7-15 years is required to attend basic education, namely 6 years of primary school (or equivalent) and junior high school (or equivalent) 3 years.'),
(33, '2014 until 2017', 'Senior High School', 'SMAN 3 JOMBANG', 'Natural Sciences', 'Senior High School is a secondary education level in formal education in Indonesia after graduating from Junior High School (or equivalent). Senior high school takes 3 years, starting from grade 10 to grade 12. Students can choose any major they are interested in. Senior high school graduates can continue their education to university or work.'),
(34, '2018 until now', 'University', 'UPN &quot;Veteran&quot; JAWA TIMUR', 'Informatics  student in faculty of computer science', 'Informatics is a computer science discipline. In general, informatics studies the structure, properties and interactions of several systems used to collect data, process and store data processing results, and display them in the form of information.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
