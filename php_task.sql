-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2020 at 02:08 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task`
--

-- --------------------------------------------------------

--
-- Table structure for table `php_task`
--

CREATE TABLE `php_task` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `know_tech` varchar(255) NOT NULL,
  `compname` varchar(255) NOT NULL,
  `joining_date` varchar(255) NOT NULL,
  `compcity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `php_task`
--

INSERT INTO `php_task` (`id`, `username`, `qualification`, `know_tech`, `compname`, `joining_date`, `compcity`) VALUES
(1, 'Prem Singh', 'BCA', 'Php ,Java Script', 'kindlbit,tech m', '2008-01-16,2016-10-12', ' chd,mohali'),
(2, 'amit', 'MCA', 'Java,Python', 'cora', '2016-10-18', ' bangloru'),
(3, 'rahul kumar', 'B.Tech', 'Php ,Python', 'data,infosys', '2020-11-04,2020-11-04', ' mumbai,pune'),
(4, 'rohit sharma', 'M.Tech', 'Php ,Java Script,Java,Python,Dot Net', 'mysql,php', '2020-10-27,2020-10-31', ' delhi,noida'),
(5, 'rohit sharma', 'M.Tech', 'Php ,Java Script,Java,Python,Dot Net', 'php', '2020-10-31', ' noida'),
(6, 'ashok mehra', 'M.Tech', 'Php ,Java Script,Java', 'java script,database', '2020-11-26,2020-11-24', ' chd,mohali'),
(7, 'akhil ', 'MCA', 'Php ,Java Script,Java', 'codeigniter', '2020-11-11', ' chd'),
(8, 'anil sharma', 'B.Tech', 'Php,Java Script,Java,Python,Dot Net', 'sriramTech,ustechno,nevitech,', '2020-10-27,2020-10-27,2020-11-14,', ' chd,mohali,pkl,'),
(9, 'ravi thakur', 'MCA', 'Java Script,Java,Python,Dot Net', 'ustechno,', '2020-10-27,', ' chd,'),
(10, 'raj kumar', 'MCA', 'Php', 'ustechno', '', ' mohali');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `php_task`
--
ALTER TABLE `php_task`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `php_task`
--
ALTER TABLE `php_task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
