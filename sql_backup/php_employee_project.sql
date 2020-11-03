-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2020 at 05:27 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_employee_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `story1` varchar(255) DEFAULT NULL,
  `story2` varchar(255) DEFAULT NULL,
  `story3` varchar(255) DEFAULT NULL,
  `youtubeURL` varchar(255) DEFAULT NULL,
  `youtubeDesc` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `story1`, `story2`, `story3`, `youtubeURL`, `youtubeDesc`) VALUES
(1, 'DDL ASSOCIATES SDN. BHD. is a company registered with Suruhanjaya Syarikat Malaysia and and is issued with the registration number 196256-V for its business operation.', 'Ddl Associates Sdn Bhd is based in Petaling Jaya, Selangor and offers Company Secretary, payroll and more.', 'DDL ASSOCIATES SDN BHD. Company Registration Number. 199001004689 (196256-V). Company Registration Date. 06/04/1990. ', 'https://www.youtube.com/embed/H109-P1PgE8', 'How to Start a Bookkeeping, Payroll, Tax and Accounting Company that Makes Big Money');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idAdmin` int(11) NOT NULL,
  `uidAdmin` tinytext NOT NULL,
  `emailAdmin` tinytext NOT NULL,
  `pwdAdmin` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idAdmin`, `uidAdmin`, `emailAdmin`, `pwdAdmin`) VALUES
(2, 'test', 'test@test.com', '$2y$10$S.h5la2qjeJim4dAzCL7oOEeOZFjWPOm9T52xXTwjp9QHFiNhvira'),
(3, 'admin', 'admin@gmail.com', '$2y$10$jld.ke7eBohZHTgTt0QLnOKLjdU04WF8oNX2dE4ekXVeR8td.IH8m'),
(4, 'yanyao1999', 'yanyao1999@gmail.com', '$2y$10$r.CjW/WSsLue4rgBJHPdn.j26Br1EFt.t9HtQ8LfVydGDtzxXWCb2'),
(5, 'jeremy', 'jeremy@gmail.com', '$2y$10$oCDzauRt17dKhHgKJIZPHOBxL5nlBiWThiqLq2BfNbzwrH25VCbgK'),
(6, 'fatma', 'fatma@gmail.com', '$2y$10$QuG9FLPiEG9ZB28x7.q2LOKHNP4PXAdWly/vJIhd.rFWYTJOTuG9C'),
(7, 'walid', 'walid@gmail.com', '$2y$10$YEN8F0pW.49EEjEfzsoEWOkG9WPC1um3HRvVMqj/yrFNGBSZeKyVC'),
(8, 'yeehan', 'yeehan@gmail.com', '$2y$10$kmalF0ZBG.ecmlzkRYx4nuUNq9LgvVAYy4ZlvEAXK9ZLizW5DCbWG');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `location` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `phone`, `email`, `location`) VALUES
(1, '03-7727 2531', 'ddl@ddlassociates.com', 'No. 4, Jalan SS 21/39, Damansara Utama, 47400 Petaling Jaya, Selangor');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(11) NOT NULL,
  `service_name` tinytext NOT NULL,
  `service_desc` mediumtext NOT NULL,
  `line1` tinytext DEFAULT NULL,
  `line2` tinytext DEFAULT NULL,
  `line3` tinytext DEFAULT NULL,
  `line4` tinytext DEFAULT NULL,
  `line5` tinytext DEFAULT NULL,
  `line6` tinytext DEFAULT NULL,
  `img1` varchar(255) DEFAULT NULL,
  `img2` varchar(255) DEFAULT NULL,
  `img3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `service_name`, `service_desc`, `line1`, `line2`, `line3`, `line4`, `line5`, `line6`, `img1`, `img2`, `img3`) VALUES
(1, 'Accounting', 'We provide organizations with a range of accounting services to keep the business operating as efficiently and as cost effectively as possible, so all that the organizations need to concentrate on, is their core business. Our highly dedicated skilled members together with our team provide a wide range of accounting services tailored to suit each individual client. We work closely with our clients to help them to develop sound financial control processes, provide constructive solutions to problems and develop strategies for improving profitability', 'Monthly or yearly bookkeeping services', 'Set up of accounting system', 'Preparation of full sets of accounts for audit purposes', 'Preparation of customized management account and report', 'Payroll services', 'General accounting advisory', '', '', ''),
(2, 'Company Secretarial', 'Every company incorporated in Malaysia must appoint a Company Secretary within 30 days from Incorporation.  Failure to do so would entail penalty from Companies Commission of Malaysia.  We are qualified professionals to be appointed as Company Secretary pursuant to the Companies Act 2016. We provide services of Company formation / Company incorporation in Malaysia. The most common type of company used is a company limited by shares; it may be incorporated as a private limited company or public limited company. You can count on our expertise for your business setting-up needs', 'Company Searches and Bankruptcy Searches', 'Striking off and winding up Company', 'Company Secretarial Services', 'Company incorporation or incorporation of Shelf Company', 'Company formation ', 'Company Secretarial Consultants', NULL, NULL, NULL),
(5, 'ER YAN YAO111', 'eeee', '1111111', '11111111', '', '111', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
