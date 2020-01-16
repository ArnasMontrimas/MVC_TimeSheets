-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2019 at 02:43 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mytimesheets`
--
CREATE DATABASE IF NOT EXISTS `mytimesheets` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mytimesheets`;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `firstName`, `lastName`) VALUES
(1, 'Brianan', 'Johnson'),
(2, 'Caoimhe', 'Mc Kiverigan'),
(3, 'Eoghan', 'Fletcher'),
(4, 'Fintan', ' Kelly'),
(5, 'Jake', 'Kilburn'),
(6, 'Kyle', 'Carey'),
(7, 'Margaret', ' Buckley'),
(8, 'Martin', 'Mullen'),
(9, 'Michael', 'Duffy'),
(10, 'Seainin', ' Keenan'),
(11, 'Thomas', 'Monk'),
(12, 'Arnas', 'Mortrimas'),
(13, 'Conor', 'Mc Loughlin'),
(14, 'Denis', 'Mooney'),
(15, 'Emmet', 'O\'Neill'),
(16, 'Gavin', 'Taylor'),
(17, 'Jia', 'Jun Tan'),
(18, 'Leigh', 'Fitzpatrick Briody'),
(19, 'Melanie', 'Uamai'),
(20, 'Nathan', ' Mc Aleer'),
(21, 'Oisin', 'Gallagher'),
(22, 'Osama', 'Kheirddine'),
(23, 'Ryan', 'Mc Grattan'),
(24, 'Sam', 'O\'Neill'),
(25, 'Sam', 'Ponik'),
(26, 'Waseema', 'Parhiar');

-- --------------------------------------------------------

--
-- Table structure for table `joborders`
--

DROP TABLE IF EXISTS `joborders`;
CREATE TABLE `joborders` (
  `id` int(11) NOT NULL,
  `jobOrderNo` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `joborders`
--

INSERT INTO `joborders` (`id`, `jobOrderNo`, `name`) VALUES
(1, '1048', 'Customer_1048'),
(2, '1097', 'Customer_1097'),
(3, '1126', 'Customer_1126'),
(4, '1149', 'Customer_1149'),
(5, '1169', 'Customer_1169'),
(6, '1174', 'Customer_1174'),
(7, '1178', 'Customer_1178'),
(8, '1180', 'Customer_1180'),
(9, '1183', 'Customer_1183'),
(10, '1208', 'Customer_1208'),
(11, '1217', 'Customer_1217'),
(12, '1219', 'Customer_1219'),
(13, '1229', 'Customer_1229'),
(14, '1241', 'Customer_1241'),
(15, '1246', 'Customer_1246'),
(16, '1256', 'Customer_1256'),
(17, '1265', 'Customer_1265'),
(18, '1307', 'Customer_1307'),
(19, '1336', 'Customer_1336'),
(20, '1376', 'Customer_1376'),
(21, '1436', 'Customer_1436'),
(22, '1448', 'Customer_1448'),
(23, '1482', 'Customer_1482'),
(24, '1531', 'Customer_1531'),
(25, '1533', 'Customer_1533'),
(26, '1549', 'Customer_1549'),
(27, '1551', 'Customer_1551'),
(28, '1554', 'Customer_1554'),
(29, '1559', 'Customer_1559'),
(30, '1579', 'Customer_1579'),
(31, '1583', 'Customer_1583'),
(32, '1606', 'Customer_1606'),
(33, '1633', 'Customer_1633'),
(34, '1639', 'Customer_1639'),
(35, '1654', 'Customer_1654'),
(36, '1668', 'Customer_1668'),
(37, '1694', 'Customer_1694'),
(38, '1736', 'Customer_1736'),
(39, '1738', 'Customer_1738'),
(40, '1750', 'Customer_1750'),
(41, '1754', 'Customer_1754'),
(42, '1771', 'Customer_1771'),
(43, '1777', 'Customer_1777'),
(44, '1799', 'Customer_1799'),
(45, '1801', 'Customer_1801'),
(46, '1836', 'Customer_1836'),
(47, '1857', 'Customer_1857'),
(48, '1877', 'Customer_1877'),
(49, '1909', 'Customer_1909'),
(50, '1912', 'Customer_1912'),
(51, '1936', 'Customer_1936'),
(52, '1943', 'Customer_1943'),
(53, '1948', 'Customer_1948'),
(54, '1950', 'Customer_1950'),
(55, '1975', 'Customer_1975'),
(56, '1986', 'Customer_1986'),
(57, '1992', 'Customer_1992'),
(58, '2004', 'Customer_2004'),
(59, '2011', 'Customer_2011'),
(60, '2013', 'Customer_2013'),
(61, '2021', 'Customer_2021'),
(62, '2023', 'Customer_2023'),
(63, '2042', 'Customer_2042'),
(64, '2142', 'Customer_2142'),
(65, '2146', 'Customer_2146'),
(66, '2186', 'Customer_2186'),
(67, '2195', 'Customer_2195'),
(68, '2232', 'Customer_2232'),
(69, '2238', 'Customer_2238'),
(70, '2277', 'Customer_2277'),
(71, '2295', 'Customer_2295'),
(72, '2304', 'Customer_2304'),
(73, '2338', 'Customer_2338'),
(74, '2373', 'Customer_2373'),
(75, '2385', 'Customer_2385'),
(76, '2431', 'Customer_2431'),
(77, '2466', 'Customer_2466'),
(78, '2471', 'Customer_2471'),
(79, '2508', 'Customer_2508'),
(80, '2524', 'Customer_2524'),
(81, '2525', 'Customer_2525'),
(82, '2588', 'Customer_2588'),
(83, '2589', 'Customer_2589'),
(84, '2637', 'Customer_2637'),
(85, '2642', 'Customer_2642'),
(86, '2678', 'Customer_2678'),
(87, '2680', 'Customer_2680'),
(88, '2691', 'Customer_2691'),
(89, '2695', 'Customer_2695'),
(90, '2727', 'Customer_2727'),
(91, '2738', 'Customer_2738'),
(92, '2767', 'Customer_2767'),
(93, '2775', 'Customer_2775'),
(94, '2815', 'Customer_2815'),
(95, '2830', 'Customer_2830'),
(96, '2845', 'Customer_2845'),
(97, '2858', 'Customer_2858'),
(98, '2867', 'Customer_2867'),
(99, '2873', 'Customer_2873'),
(100, '2880', 'Customer_2880'),
(101, '2908', 'Customer_2908'),
(102, '2920', 'Customer_2920'),
(103, '2931', 'Customer_2931'),
(104, '2948', 'Customer_2948'),
(105, '2994', 'Customer_2994'),
(106, '3005', 'Customer_3005'),
(107, '3026', 'Customer_3026'),
(108, '3030', 'Customer_3030'),
(109, '3044', 'Customer_3044'),
(110, '3051', 'Customer_3051'),
(111, '3077', 'Customer_3077'),
(112, '3115', 'Customer_3115'),
(113, '3120', 'Customer_3120'),
(114, '3147', 'Customer_3147'),
(115, '3167', 'Customer_3167'),
(116, '3173', 'Customer_3173'),
(117, '3186', 'Customer_3186'),
(118, '3190', 'Customer_3190'),
(119, '3192', 'Customer_3192'),
(120, '3226', 'Customer_3226'),
(121, '3252', 'Customer_3252'),
(122, '3253', 'Customer_3253'),
(123, '3279', 'Customer_3279'),
(124, '3288', 'Customer_3288'),
(125, '3308', 'Customer_3308'),
(126, '3311', 'Customer_3311'),
(127, '3328', 'Customer_3328'),
(128, '3342', 'Customer_3342'),
(129, '3365', 'Customer_3365'),
(130, '3420', 'Customer_3420'),
(131, '3483', 'Customer_3483'),
(132, '3582', 'Customer_3582'),
(133, '3617', 'Customer_3617'),
(134, '3631', 'Customer_3631'),
(135, '3637', 'Customer_3637'),
(136, '3644', 'Customer_3644'),
(137, '3655', 'Customer_3655'),
(138, '3666', 'Customer_3666'),
(139, '3670', 'Customer_3670'),
(140, '3728', 'Customer_3728'),
(141, '3745', 'Customer_3745'),
(142, '3759', 'Customer_3759'),
(143, '3763', 'Customer_3763'),
(144, '3788', 'Customer_3788'),
(145, '3794', 'Customer_3794'),
(146, '3806', 'Customer_3806'),
(147, '3830', 'Customer_3830'),
(148, '3842', 'Customer_3842'),
(149, '3843', 'Customer_3843'),
(150, '3852', 'Customer_3852'),
(151, '3874', 'Customer_3874'),
(152, '3882', 'Customer_3882'),
(153, '3920', 'Customer_3920'),
(154, '3925', 'Customer_3925'),
(155, '3955', 'Customer_3955'),
(156, '3964', 'Customer_3964'),
(157, '3984', 'Customer_3984');

-- --------------------------------------------------------

--
-- Table structure for table `timesheets`
--

DROP TABLE IF EXISTS `timesheets`;
CREATE TABLE `timesheets` (
  `id` int(11) NOT NULL,
  `empId` varchar(11) NOT NULL,
  `jobSheet` varchar(11) NOT NULL,
  `weekEnding` varchar(30) NOT NULL,
  `monday` float(5,2) NOT NULL,
  `tuesday` float(5,2) NOT NULL,
  `wednesday` float(5,2) NOT NULL,
  `thursday` float(5,2) NOT NULL,
  `friday` float(5,2) NOT NULL,
  `saturday` float(5,2) NOT NULL,
  `sunday` float(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `joborders`
--
ALTER TABLE `joborders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timesheets`
--
ALTER TABLE `timesheets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `joborders`
--
ALTER TABLE `joborders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT for table `timesheets`
--
ALTER TABLE `timesheets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
