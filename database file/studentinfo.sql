-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2022 at 07:03 AM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentinfo`
--

CREATE TABLE `studentinfo` (
  `id` int(11) NOT NULL,
  `fillername` varchar(100) NOT NULL,
  `filleremail` varchar(100) NOT NULL,
  `stname` varchar(100) NOT NULL,
  `stlastname` varchar(100) NOT NULL,
  `stgender` varchar(50) NOT NULL,
  `stschoolname` varchar(100) NOT NULL,
  `ststandard` varchar(100) NOT NULL,
  `stfortake` varchar(100) NOT NULL,
  `stcity` varchar(100) NOT NULL,
  `stphonenumber` varchar(100) NOT NULL,
  `stconversation` mediumtext NOT NULL,
  `stdemail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentinfo`
--

INSERT INTO `studentinfo` (`id`, `fillername`, `filleremail`, `stname`, `stlastname`, `stgender`, `stschoolname`, `ststandard`, `stfortake`, `stcity`, `stphonenumber`, `stconversation`, `stdemail`) VALUES
(1, 'Sir', 'pratham.buddhadev111596@marwadiuniversity.ac.in', 'Pratham', 'Buddhadev', 'male', 'New Era School', '10', 'Diploma', 'Rajkot', '7990974178', 'How are you?', 'pratham.buddhadev@gmail.com'),
(2, 'sir2', 'pratham.buddhadev111596@marwadiuniversity.ac.in', 'Belvin', 'Nadar', 'male', 'Saint Mary School', '12', 'Diploma', 'Gondal', '9106690910', 'for what?', 'belvinraja.nadar111645@marwadiuniversity.ac.in'),
(3, 'Sir3', 'pratham.buddhadev111596@marwadiuniversity.ac.in', 'Yash', 'Ahir', 'male', 'Boomrang School', '10', 'Diploma', 'Kutch', '7990974178', 'greetings............', 'pratham.buddhadev@gmail.com'),
(4, 'Sir4', 'pratham.buddhadev111596@marwadiuniversity.ac.in', 'Dhanraj', 'Parmar', 'male', 'modischool', '10', 'Diploma', 'Rajkot', '7990974178', 'greetings............', 'dhanrajsinh.parmar111609@marwadiuniversity.ac.in'),
(5, 'Pratham', 'pratham.buddhadev111596@marwadiuniversity.ac.in', 'first', 'second', 'male', 'Modi school', '10', 'Diploma', 'Shivanand Society', '7990974178', 'greetings............', 'pratham.buddhadev@gmail.com'),
(6, 'Sir5', 'pratham.buddhadev111596@marwadiuniversity.ac.in', 'Manan', 'Nagda', 'male', 'New Era School', '10', 'Diploma', 'Shivanand Society', '7990974178', 'greetings............', 'pratham.buddhadev@gmail.com'),
(7, 'sir6', 'pratham.buddhadev111596@marwadiuniversity.ac.in', 'first2', 'second3', 'female', 'myschool', '12', 'Degree', 'Shivanand Society', '7990974178', 'greetings............', 'pratham.buddhadev@gmail.com'),
(8, 'Pratham', 'pratham.buddhadev111596@marwadiuniversity.ac.in', 'first', 'second', 'male', 'Modi school', '10', 'Diploma', 'Shivanand Society', '7990974178', 'greetings............', 'pratham.buddhadev@gmail.com'),
(9, 'sample1', 'pratham.buddhadev111596@marwadiuniversity.ac.in', 'first', 'second', 'female', 'myschool', '12', 'Degree', 'Morbi', '7990974178', 'greetings............', 'pratham.buddhadev@gmail.com'),
(10, 'sample1', 'pratham.buddhadev111596@marwadiuniversity.ac.in', 'first', 'second', 'female', 'myschool', '12', 'Degree', 'Morbi', '7990974178', 'greetings............', 'pratham.buddhadev@gmail.com'),
(11, 'Sir', 'pratham.buddhadev111596@marwadiuniversity.ac.in', 'Bhavyesh', 'Makadiya', 'male', 'myschool', '10', 'Diploma', 'surat', '7990974178', 'greetings............', 'pratham.buddhadev@gmail.com'),
(12, 'Sir3', 'pratham.buddhadev111596@marwadiuniversity.ac.in', 'second', 'third', 'female', 'myschool', '12', 'Degree', 'jamnagar', '7990974178', 'greetings............', 'pratham.buddhadev@gmail.com'),
(13, 'Pratham', 'pratham.buddhadev111596@marwadiuniversity.ac.in', 'first', 'second', 'male', 'Modi school', '12', 'Diploma', 'Vapi', '7990974178', 'greetings............', 'pratham.buddhadev@gmail.com'),
(14, 'sir1', 'pratham.buddhadev111596@marwadiuniversity.ac.in', 'Janak', 'Pariya', 'male', 'New Era School', '10', 'Diploma', 'Ahmedabad', '7990974178', 'greetings............', 'pratham.buddhadev@gmail.com'),
(15, 'Pratham', 'pratham.buddhadev@gmail.com', 'first', 'second', 'male', 'Modi school', '10', 'Diploma', 'Rajkot', '7990974178', 'hui\r\n', 'pratham.buddhadev@gmail.com'),
(16, 'Pratham', 'pratham.buddhadev@gmail.com', 'first', 'second', 'male', 'Modi school', '10', 'Diploma', 'Rajkot', '7990974178', 'hui\r\n', 'pratham.buddhadev@gmail.com'),
(17, 'Pratham', 'pratham.buddhadev@gmail.com', 'first', 'second', 'male', 'Modi school', '10', 'Diploma', 'Rajkot', '7990974178', 'hui\r\n', 'pratham.buddhadev@gmail.com'),
(18, 'Sir', 'belvinraja.nadar@gmail.com', 'first', 'second', 'male', 'Modi school', '10', 'Diploma', 'Rajkot', '7990974178', 'greetings', 'pratham.buddhadev@gmail.com'),
(19, 'Sir', 'pratham.buddhadev@gmail.com', 'first', 'second', 'male', 'Modi school', '10', 'Degree', 'godhra', '7990974178', 'greetings...................', 'pratham.buddhadev@gmail.com'),
(20, 'Sir', 'pratham619buddhadev@gmail.com', 'tester', 'testing', 'male', 'New Era School', '12', 'Degree', 'rajkot', '7990974178', 'greetings', 'pratham619buddhadev@gmail.com'),
(21, 'Sir', 'pratham.buddhadev@gmail.com', 'first', 'Nadar', 'male', 'Modi school', '10', 'Diploma', 'jamnagar', '7990974178', 'greetings..........', 'pratham619buddhadev@gmail.com'),
(22, 'Belvin', 'pratham.buddhadev@gmail.com', 'first', 'second', 'male', 'Modi school', '12', 'Degree', 'morvi', '7990974178', 'greetings...........', 'pratham619buddhadev@gmail.com'),
(23, 'Pratham', 'pratham.buddhadev@gmail.com', 'Dhruv ', 'vyas', 'male', 'Saint Mary School', '12', 'Degree', 'rajkot', '9409341794', 'abc', 'www.dhruvvyas224@gmail.com'),
(24, 'Sir3', 'pratham.buddhadev@gmail.com', 'Yenish', 'Radadiya', 'male', 'SOS', '12', 'Degree', 'rapar', '9428580470', 'greetings..............', 'yenishradadiya@gmail.com'),
(25, 'Sir', 'pratham.buddhadev@gmail.com', 'aniket', 'solanki', 'male', 'Brilliant school of science', '12th', 'Degree', 'jamnagar', '6356056120', 'talking about branch knowledge and some facilities.', 'aniket63560@gmail.com'),
(26, 'Pratham', 'pratham.buddhadev@gmail.com', 'first', 'second', 'female', 'Modi school', '12', 'Degree', 'jamnagar', '8799487265', '', 'dharakoriya9@gmail.com'),
(27, 'Rakesh', 'pratham.buddhadev@gmail.com', 'Mansi', 'Gohil', 'female', 'Modi school', '12', 'Degree', 'bhuj', '9925199655', 'hello..', 'mansibagohil1512@gmail.com'),
(28, 'Sir', 'pratham.buddhadev@gmail.com', 'first', 'Parmar', 'male', 'Saint Mary School', '12', 'Diploma', 'vyara', '7990974178', 'greetings..............', 'pratham.buddhadev@gmail.com'),
(29, 'Sir', 'pratham.buddhadev@gmail.com', 'first', 'Parmar', 'male', 'Saint Mary School', '12', 'Diploma', 'vyara', '7990974178', 'greetings..............', 'pratham.buddhadev@gmail.com'),
(30, 'Sir', 'pratham.buddhadev@gmail.com', 'first', 'Parmar', 'male', 'Saint Mary School', '12', 'Diploma', 'vyara', '7990974178', 'greetings..............', 'pratham.buddhadev@gmail.com'),
(31, 'Sir', 'pratham.buddhadev@gmail.com', 'first', 'Parmar', 'male', 'Saint Mary School', '12', 'Diploma', 'vyara', '7990974178', 'greetings..............', 'pratham.buddhadev@gmail.com'),
(32, 'Sir', 'pratham.buddhadev@gmail.com', 'first', 'Parmar', 'male', 'Saint Mary School', '12', 'Diploma', 'vyara', '7990974178', 'greetings..............', 'pratham.buddhadev@gmail.com'),
(33, 'Sir', 'pratham.buddhadev@gmail.com', 'first', 'Parmar', 'male', 'Saint Mary School', '12', 'Diploma', 'vyara', '7990974178', 'greetings..............', 'pratham.buddhadev@gmail.com'),
(34, 'Sir', 'pratham.buddhadev@gmail.com', 'first', 'Parmar', 'male', 'Saint Mary School', '12', 'Diploma', 'vyara', '7990974178', 'greetings..............', 'pratham.buddhadev@gmail.com'),
(35, 'Sir', 'pratham.buddhadev@gmail.com', 'first', 'Parmar', 'male', 'Saint Mary School', '12', 'Diploma', 'vyara', '7990974178', 'greetings..............', 'pratham.buddhadev@gmail.com'),
(36, 'Sir', 'pratham.buddhadev@gmail.com', 'first', 'Parmar', 'male', 'Saint Mary School', '12', 'Diploma', 'vyara', '7990974178', 'greetings..............', 'pratham.buddhadev@gmail.com'),
(37, 'Kapil', 'pratham.buddhadev@gmail.com', 'Manan', 'Nagda', 'male', 'New Era School', '10', 'Diploma', 'rajkot', '7990974178', 'greetings...............', 'pratham619buddhadev@gmail.com'),
(38, 'Sir', 'pratham.buddhadev@gmail.com', 'Devang', 'Gohil', 'male', 'myschool', '10', 'Diploma', 'dahod', '7990974178', 'greetings.......', 'pratham619buddhadev@gmail.com'),
(39, 'Sir', 'pratham.buddhadev@gmail.com', 'Devang', 'Gohil', 'male', 'myschool', '10', 'Diploma', 'dahod', '7990974178', 'greetings.......', 'pratham619buddhadev@gmail.com'),
(40, 'Sir', 'pratham.buddhadev@gmail.com', 'Devang', 'Gohil', 'male', 'myschool', '10', 'Diploma', 'dahod', '7990974178', 'greetings.......', 'pratham619buddhadev@gmail.com'),
(41, 'Sir', 'pratham.buddhadev@gmail.com', 'Devang', 'Gohil', 'male', 'myschool', '10', 'Diploma', 'dahod', '7990974178', 'greetings.......', 'pratham619buddhadev@gmail.com'),
(42, 'Sir', 'pratham.buddhadev@gmail.com', 'Devang', 'Gohil', 'male', 'myschool', '10', 'Diploma', 'dahod', '7990974178', 'greetings.......', 'pratham619buddhadev@gmail.com'),
(43, 'Sir', 'pratham.buddhadev@gmail.com', 'Devang', 'Gohil', 'male', 'myschool', '10', 'Diploma', 'dahod', '7990974178', 'greetings.......', 'pratham619buddhadev@gmail.com'),
(44, 'Sir', 'pratham.buddhadev@gmail.com', 'Devang', 'Gohil', 'male', 'myschool', '10', 'Diploma', 'dahod', '7990974178', 'greetings.......', 'pratham619buddhadev@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentinfo`
--
ALTER TABLE `studentinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studentinfo`
--
ALTER TABLE `studentinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
