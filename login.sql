-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2016 at 01:50 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `level`) VALUES
('adminku', 'adminku', 'SuperAdmin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `iduser` int(5) NOT NULL,
  `nama` varchar(125) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(125) NOT NULL,
  `total_login` int(11) NOT NULL,
  `terdaftar` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=82593 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `nama`, `email`, `password`, `total_login`, `terdaftar`) VALUES
(20665, 'User4', 'user4@formlogin.com', '425497e698550848c496050e3f00ceb3', 1, 1477798706),
(35044, 'Dimas Kanjenk', 'dimaskanjeng@padepokandimaskanjeng.com', '59ae03d481af901e68d2eddc212f5e83', 1, 1479081383),
(40312, 'User3', 'user3@formlogin.com', '1626b89232ea74fb8e195f5a8617966f', 0, 1477798674),
(42111, 'User2', 'user2@formlogin.com', '6ce92f3afd02dd0e263f0b78b6b7af4e', 1, 1477798655),
(66121, 'User1', 'user1@formlogin.com', 'a029d0df84eb5549c641e04a9ef389e5', 0, 1477798611),
(82592, 'Riyan Satria', 'riyan@kancaku.net', 'b422f2c6bb63f2faac56e1362e0df208', 1, 1477982187);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=82593;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
