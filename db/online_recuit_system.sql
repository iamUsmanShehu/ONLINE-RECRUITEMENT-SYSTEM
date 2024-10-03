-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2022 at 01:27 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_recuit_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicants_tbl`
--

CREATE TABLE `applicants_tbl` (
  `id` int(11) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `surname` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `maritalstatus` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `score` int(50) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicants_tbl`
--

INSERT INTO `applicants_tbl` (`id`, `fname`, `surname`, `email`, `password`, `gender`, `maritalstatus`, `contact`, `address`, `score`, `image`) VALUES
(6, 'Usman', 'Shehu', 'usmanshehuayuba@gmail.com', '12345N', 'Male', 'Single', '09040306788', 'Block Y.C 5, Gida-Dubu, Yadi, Dutse, Jigawa State.', 0, 'IMG_2399.jpg'),
(7, 'Maryam', 'Abubakar', 'ma@gmail.com', '12345', 'Female', 'Single', '+123456789', 'Jigawa State, Polytechnic,Dutse.', 0, 'ruky.png');

-- --------------------------------------------------------

--
-- Table structure for table `application_tbl`
--

CREATE TABLE `application_tbl` (
  `id` int(11) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `position` varchar(30) NOT NULL,
  `surname` varchar(40) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `coverlatter` text NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application_tbl`
--

INSERT INTO `application_tbl` (`id`, `applicant_id`, `position`, `surname`, `fname`, `gender`, `email`, `contact`, `address`, `coverlatter`, `status`) VALUES
(1, 1, 'Security', 'Usman', 'Shehu', 'Male', 'usman@gmail.com', '32442455343', 'fnmfsvsfsf ndfhef hjaefheaf akdfnakf', 'mzbabfdafudajdffhbjf\r\nkabfajfbabhjafjjfaj\r\nadlkfakfakfkhff\r\nakfankfakfafhfhshfshjf\r\nfhfjfhsfjs.', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `users_tbl`
--

CREATE TABLE `users_tbl` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `maritalstatus` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_tbl`
--

INSERT INTO `users_tbl` (`id`, `fname`, `surname`, `email`, `password`, `gender`, `maritalstatus`, `image`, `contact`, `address`) VALUES
(2, 'deo', 'Mr White', 'usmanshehuayuba@gmail.com', '12345', 'Male', 'Single', 'IMG_2399.jpg', '09040306788', 'This is Just for testing....');

-- --------------------------------------------------------

--
-- Table structure for table `vacancy_tbl`
--

CREATE TABLE `vacancy_tbl` (
  `id` int(11) NOT NULL,
  `positionname` varchar(30) NOT NULL,
  `availablity` int(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vacancy_tbl`
--

INSERT INTO `vacancy_tbl` (`id`, `positionname`, `availablity`, `status`, `description`) VALUES
(1, 'Lecturer', 23, 'Active', 'fsfsrgsrgsgss'),
(2, 'Sinior Lecturer', 1, 'Closed', 'bshfifkbmcvn '),
(3, 'Security', 40, 'Closed', 'khdfdskfsdfifsdfsdfsdfsfhhkbhkd'),
(4, 'Lecturer', 23, 'Active', 'dasdadadad'),
(5, 'Lab Attendant', 5, 'Active', 'The Lab Attendant is responsible for adfchgvjhkfljbgf.bnfsjgvsdgscgjdsmbhjgvmn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicants_tbl`
--
ALTER TABLE `applicants_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `application_tbl`
--
ALTER TABLE `application_tbl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applicant_id` (`applicant_id`);

--
-- Indexes for table `users_tbl`
--
ALTER TABLE `users_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vacancy_tbl`
--
ALTER TABLE `vacancy_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicants_tbl`
--
ALTER TABLE `applicants_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `application_tbl`
--
ALTER TABLE `application_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users_tbl`
--
ALTER TABLE `users_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `vacancy_tbl`
--
ALTER TABLE `vacancy_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
