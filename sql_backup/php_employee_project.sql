-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2020 at 03:11 AM
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
(1, 'PROVISION OF MANAGEMENT CONSULTANCY, SECRETARIAL SERVICES AND ACCOUNTING SERVICES', 'We provide detailed information such as company registry information (SSM, ROC and ROB, including extensive coverage in East Malaysia),', 'banking payment history, litigation and trade reference to help you decide whether to extend credit or conduct business with this company.', 'https://www.youtube.com/embed/Ke90Tje7VS0', 'How to Start a Bookkeeping, Payroll, Tax and Accounting Company that Makes Big Money');

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `dateTime` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`id`, `user_id`, `activity`, `dateTime`, `email`) VALUES
(3, 1, 'login', '25 November 2020 11:59:19pm', 'yanyao1999@gmail.com'),
(4, 10, 'login', '26 November 2020 12:03:29am', 'jeremychi495@gmail.com'),
(5, 10, 'login', '26 November 2020 02:46:29am', 'jeremychi495@gmail.com'),
(6, 10, 'Form Submit', '26 November 2020 02:47:29am', ''),
(7, 3, 'Login', '26 November 2020 03:16:11am', 'darrylj677@gmail.com'),
(8, 2, 'Login', '26 November 2020 07:39:54am', 'yanyao1999@outlook.com'),
(9, 2, 'Form Submit', '26 November 2020 07:42:03am', ''),
(10, 1, 'Login', '26 November 2020 07:45:50am', 'yanyao1999@gmail.com'),
(11, 1, 'Login', '26 November 2020 08:56:49am', 'yanyao1999@gmail.com'),
(12, 1, 'Login', '26 November 2020 09:46:25am', 'yanyao1999@gmail.com'),
(13, 1, 'Login', '26 November 2020 09:51:47am', 'yanyao1999@gmail.com'),
(14, 2, 'Login', '26 November 2020 09:53:02am', 'yanyao1999@outlook.com');

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
(3, 'admin', 'admin@gmail.com', '$2y$10$jld.ke7eBohZHTgTt0QLnOKLjdU04WF8oNX2dE4ekXVeR8td.IH8m'),
(4, 'yanyao1999', 'yanyao1999@gmail.com', '$2y$10$r.CjW/WSsLue4rgBJHPdn.j26Br1EFt.t9HtQ8LfVydGDtzxXWCb2'),
(5, 'jeremy', 'jeremy@gmail.com', '$2y$10$oCDzauRt17dKhHgKJIZPHOBxL5nlBiWThiqLq2BfNbzwrH25VCbgK'),
(6, 'fatma', 'fatma@gmail.com', '$2y$10$QuG9FLPiEG9ZB28x7.q2LOKHNP4PXAdWly/vJIhd.rFWYTJOTuG9C'),
(7, 'walid', 'walid@gmail.com', '$2y$10$YEN8F0pW.49EEjEfzsoEWOkG9WPC1um3HRvVMqj/yrFNGBSZeKyVC');

-- --------------------------------------------------------

--
-- Table structure for table `chatbot`
--

CREATE TABLE `chatbot` (
  `id` int(11) NOT NULL,
  `queries` varchar(300) NOT NULL,
  `replies` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chatbot`
--

INSERT INTO `chatbot` (`id`, `queries`, `replies`) VALUES
(3, 'contact number|what is your contact number', '03-7727 2531'),
(4, 'email|what is your email', 'ddl@ddlassociates.com'),
(5, 'address|what is your address', 'No. 4, Jalan SS 21/39, Damansara Utama, 47400 Petaling Jaya, Selangor'),
(6, 'what does ddl do', 'we provide services for you to register a company'),
(7, 'Hi | Hello | Good Morning | Halo', 'Hi how may i assist you?'),
(8, 'how to register a company', 'Please register an account first'),
(9, 'do i qualify to register a company', 'What is your age?'),
(10, '18', 'Yes your are qualify'),
(11, '15', 'No you need to be at least 18');

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
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `form_id` bigint(20) NOT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `submissionID` bigint(20) NOT NULL,
  `companyName` varchar(255) DEFAULT NULL,
  `capital` varchar(255) DEFAULT NULL,
  `natureofBusiness` varchar(255) DEFAULT NULL,
  `busAdd` text DEFAULT NULL,
  `firstName` varchar(255) DEFAULT NULL,
  `firstNRICPassportNo` varchar(255) DEFAULT NULL,
  `firstexpDate` varchar(255) DEFAULT NULL,
  `firstDoB` varchar(255) DEFAULT NULL,
  `firstGender` varchar(255) DEFAULT NULL,
  `firstRace` varchar(255) DEFAULT NULL,
  `firstNationality` varchar(255) DEFAULT NULL,
  `firstAddress` text DEFAULT NULL,
  `firstEmail` varchar(255) DEFAULT NULL,
  `firstShares` varchar(255) DEFAULT NULL,
  `secondName` varchar(255) DEFAULT NULL,
  `secondNRICPassportNo` varchar(255) DEFAULT NULL,
  `secondexpDate` varchar(255) DEFAULT NULL,
  `secondDoB` varchar(255) DEFAULT NULL,
  `secondGender` varchar(255) DEFAULT NULL,
  `secondRace` varchar(255) DEFAULT NULL,
  `secondNationality` varchar(255) DEFAULT NULL,
  `secondAddress` text DEFAULT NULL,
  `secondEmail` varchar(255) DEFAULT NULL,
  `secondShares` varchar(255) DEFAULT NULL,
  `shareAName` varchar(255) DEFAULT NULL,
  `shareAIC` varchar(255) DEFAULT NULL,
  `shareANationality` varchar(255) DEFAULT NULL,
  `shareARace` varchar(255) DEFAULT NULL,
  `shareAPlace` varchar(255) DEFAULT NULL,
  `shareAAddress` text DEFAULT NULL,
  `shareAEmail` varchar(255) DEFAULT NULL,
  `shareAContact` varchar(255) DEFAULT NULL,
  `shareADesignation` varchar(255) DEFAULT NULL,
  `shareAShares` varchar(255) DEFAULT NULL,
  `shareBName` varchar(255) DEFAULT NULL,
  `shareBIC` varchar(255) DEFAULT NULL,
  `shareBNationality` varchar(255) DEFAULT NULL,
  `shareBRace` varchar(255) DEFAULT NULL,
  `shareBPlace` varchar(255) DEFAULT NULL,
  `shareBAddress` text DEFAULT NULL,
  `shareBEmail` varchar(255) DEFAULT NULL,
  `shareBContact` varchar(255) DEFAULT NULL,
  `shareBShares` varchar(255) DEFAULT NULL,
  `ShareholderBSharestakenup` varchar(255) DEFAULT NULL,
  `kinName` varchar(255) DEFAULT NULL,
  `kinNRIC` varchar(255) DEFAULT NULL,
  `kinNationality` varchar(255) DEFAULT NULL,
  `kinRace` varchar(255) DEFAULT NULL,
  `kinAddress` text DEFAULT NULL,
  `kinEmail` varchar(255) DEFAULT NULL,
  `bankName` varchar(255) DEFAULT NULL,
  `bankBranch` varchar(255) DEFAULT NULL,
  `authorized` varchar(255) DEFAULT NULL,
  `conditions` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `user_id`, `status`, `form_id`, `ip`, `submissionID`, `companyName`, `capital`, `natureofBusiness`, `busAdd`, `firstName`, `firstNRICPassportNo`, `firstexpDate`, `firstDoB`, `firstGender`, `firstRace`, `firstNationality`, `firstAddress`, `firstEmail`, `firstShares`, `secondName`, `secondNRICPassportNo`, `secondexpDate`, `secondDoB`, `secondGender`, `secondRace`, `secondNationality`, `secondAddress`, `secondEmail`, `secondShares`, `shareAName`, `shareAIC`, `shareANationality`, `shareARace`, `shareAPlace`, `shareAAddress`, `shareAEmail`, `shareAContact`, `shareADesignation`, `shareAShares`, `shareBName`, `shareBIC`, `shareBNationality`, `shareBRace`, `shareBPlace`, `shareBAddress`, `shareBEmail`, `shareBContact`, `shareBShares`, `ShareholderBSharestakenup`, `kinName`, `kinNRIC`, `kinNationality`, `kinRace`, `kinAddress`, `kinEmail`, `bankName`, `bankBranch`, `authorized`, `conditions`) VALUES
(1, 2, 'Completed', 203069021056445, '27.125.240.231', 4817608261321352134, 'Lionind Industry', '2000', 'Steel Factory', '51 JALAN NB2 6/4 TAMAN NB2', 'ER YAN YAO', '990131-01-3355', '10/11/2020', '05/05/1999', 'Male', 'chinese', 'Aruba', '51 JALAN NB2 6/4 TAMAN NB2', 'yanyao1999@outlook.com', NULL, 'ER BEE LEE', '13131234124', '03/11/2020', '03/11/2020', 'Male', 'Malay', 'Angola', '51 JALAN NB2 6/4 TAMAN NB2', 'yanyao1999@outlook.com', NULL, '1', '1', 'Belarus', '1', '1', '51 JALAN NB2 6/4 TAMAN NB2', 'yanyao1999@outlook.com', '(016) 700-6978', '111', NULL, '2', '2', 'Australia', '2', '2', '51 JALAN NB2 6/4 TAMAN NB2', 'yanyao1999@outlook.com', '(016) 700-6978', NULL, '2', '3', '2', 'Belarus', '3', '51 JALAN NB2 6/4 TAMAN NB2', 'yanyao1999@outlook.com', 'fsfasf', 'asdfasfsa', 'asfasfasf', 'asfasfasf'),
(2, 2, 'Completed', 203069021056445, '27.125.240.39', 4817626449308119117, 'Homeriz', '10000', 'Furniture', 'JALAN NUSA BESTARI 2 6/4', 'ER YAN YAO', '990131-01-3355', '11/11/2020', '17/11/2020', 'Male', 'chinese', 'Barbados', '51 JALAN NB2 6/4 TAMAN NB2', 'yanyao1999@outlook.com', NULL, 'ER BEE LEE', '13131234124', '17/11/2020', '02/11/2020', 'Male', 'Malay', 'Bahrain', '51 JALAN NB2 6/4 TAMAN NB2', 'yanyao1999@outlook.com', NULL, 'JEREMY CHI', '1', 'Bangladesh', '1', '1', '51 JALAN NB2 6/4 TAMAN NB2', 'yanyao1999@outlook.com', '(016) 700-6978', '111', NULL, '2', '2', 'Aruba', '2', '2', '51 JALAN NB2 6/4 TAMAN NB2', 'yanyao1999@outlook.com', '(016) 700-6978', NULL, '2', '2', '3', 'Bahrain', '4', '51 JALAN NB2 6/4 TAMAN NB2', 'yanyao1999@outlook.com', 'fsfasf', 'asdfasfsa', 'asfasfasf', 'asfasfasf'),
(3, 2, 'In Process', 203069021056445, '27.125.240.87', 4817658897802869326, 'Maybank', '3900', 'Bank', '51 JALAN NB2 6/4 TAMAN NB2', 'ER YAN YAO', '990131-01-3355', '04/11/2020', '03/11/2020', 'Male', 'chinese', 'Bahrain', '51 JALAN NB2 6/4 TAMAN NB2', 'yanyao1999@outlook.com', NULL, 'ER BEE LEE', '13131234124', '03/11/2020', '23/11/2020', 'Male', '24124214', 'Barbados', '51 JALAN NB2 6/4 TAMAN NB2', 'yanyao1999@outlook.com', NULL, 'JEREMY CHI', '1', 'Barbados', '1', '1', 'JALAN NUSA BESTARI 2 6/4', 'yanyao1999@outlook.com', '(016) 700-6978', '111', NULL, '2', '2', 'Bahrain', '2', '2', '51 JALAN NB2 6/4 TAMAN NB2', 'yanyao1999@outlook.com', '(016) 700-6978', NULL, '2', '2', '2', 'Belarus', '3', '51 JALAN NB2 6/4 TAMAN NB2', 'yanyao1999@outlook.com', 'fsfasf', 'asdfasfsa', 'asfasfasf', 'asfasfasf'),
(4, 1, 'Received', 203069021056445, '27.125.240.87', 4817710937804616998, 'Public Bank', '1000', 'Banking', '51 JLN NB2', 'ER YAN YAO', '990131-01-3355', '09/11/2020', '10/11/2020', 'Male', 'Chinese', 'Barbados', 'JALAN NUSA BESTARI 2 6/4', 'yanyao1999@outlook.com', NULL, 'ER BEE LEE', '13131234124', '03/11/2020', '18/11/2020', 'Female', 'Malay', 'Belarus', '51 JALAN NB2 6/4 TAMAN NB2', 'yanyao1999@outlook.com', NULL, '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', 'JEREMEY', '2', 'Afghanistan', '3', 'JALAN NUSA BESTARI 2 6/4', 'yanyao1999@outlook.com', 'fsfasf', 'asdfasfsa', 'asfasfasf', 'asfasfasf'),
(5, 1, 'Received', 203069021056445, '27.125.240.87', 4817877297807418348, 'Top Glove', '3000', 'Manufacturing', 'JALAN NUSA BESTARI 2 6/4', 'ER YAN YAO', '990131-01-3355', '22/12/2020', '01/11/2020', 'Male', 'Chinese', 'Malaysia', '51 JALAN NB2 6/4 TAMAN NB2', 'yanyao1999@outlook.com', NULL, 'ER BEE LEE', '690420-01-5566', '06/02/2021', '01/11/2020', 'Female', 'Malay', 'Australia', '51 JALAN NB2 6/4 TAMAN NB2', 'yanyao1999@outlook.com', NULL, 'JEREMY CHI', '990201-01-5544', 'China', 'Chinese', 'Malaysia', '51 JLN NB2 6/4 TMN NB2', 'yanyao1999@outlook.com', '(016) 700-6978', 'Director', NULL, 'Fatma ', '690433-44-5124', 'Kenya', 'British', '-', '51 JALAN NB2 6/4 TAMAN NB2', 'yanyao1999@outlook.com', '(016) 700-6978', NULL, '-', 'ER YAN YAO', '111111111111', 'Barbados', 'Chinese', '51 JALAN NB2 6/4 TAMAN NB2', 'yanyao1999@outlook.com', 'Maybank', 'Perling', 'maybank', 'Approval'),
(6, 3, 'Received', 203069021056445, '27.125.240.237', 4818364587323068075, 'Dell Industry', '1000', 'IT Industry', 'Cyberjaya', 'ER YAN YAO', '990131-01-3355', '03/11/2020', '02/11/2020', 'Male', 'Chinese', 'Austria', '51 JALAN NB2 6/4 TAMAN NB2', 'yanyao1999@outlook.com', NULL, 'ER BEE LEE', '13131234124', '04/11/2020', '02/11/2020', 'Female', 'Malay', 'Barbados', '51 JALAN NB2 6/4 TAMAN NB2', 'yanyao1999@outlook.com', NULL, 'JEREMY CHI', 'G12314', 'Bahrain', 'Malay', 'I13414', '51 JALAN NB2 6/4 TAMAN NB2', 'yanyao1999@outlook.com', '(016) 700-6978', 'Director', NULL, 'Fatma ', '690433-44-5124', 'Bahrain', 'British', '2', '51 JALAN NB2 6/4 TAMAN NB2', 'yanyao1999@outlook.com', '(016) 700-6978', NULL, 'Manager', 'JEREMEY LIM', 'A13141245', 'Bahrain', 'Chinese', 'JALAN NUSA BESTARI 2 6/4', 'yanyao1999@outlook.com', 'OCBC', 'Johor Jaya', 'ocbc', 'Acceptance '),
(7, 4, 'Completed', 203069021056445, '27.125.245.85', 4819281605853652162, 'JCY', '1000', 'Manufactor', '51 JALAN NB2 6/4 TAMAN NB2', 'ER YAN YAO', '990131-01-3355', '11/11/2020', '03/11/2020', 'Male', 'Chinese', 'Australia', '51 JALAN NB2 6/4 TAMAN NB2', 'yanyao1999@outlook.com', NULL, 'ER BEE LEE', '13131234124', '04/11/2020', '03/11/2020', 'Female', 'Malay', 'Barbados', 'JALAN NUSA BESTARI 2 6/4', 'yanyao1999@outlook.com', NULL, 'JEREMY CHI', 'G12314', 'Bahrain', 'Malay', 'I13414', 'JALAN NUSA BESTARI 2 6/4', 'yanyao1999@outlook.com', '(016) 700-6978', 'Director', NULL, 'Fatma ', '690433-44-5124', 'Barbados', 'British', '-', 'JALAN NUSA BESTARI 2 6/4', 'yanyao1999@outlook.com', '(016) 700-6978', NULL, '-', 'JEREMEY LIM', 'A13141245', 'Afghanistan', 'Chinese', '51 JALAN NB2 6/4 TAMAN NB2', 'yanyao1999@outlook.com', 'Maybank', 'Perling', 'maybank', 'Approval'),
(8, 2, 'Received', 203069021056445, '27.125.241.121', 4821569241212423473, 'Mercury', '1000', 'Car Factory', '51 JALAN NB2 6/4 TAMAN NB2', 'ER YAN YAO', '990131-01-3355', '10/11/2020', '16/11/2020', 'Female', 'Chinese', 'Benin', '51 JALAN NB2 6/4 TAMAN NB2', 'yanyao1999@outlook.com', NULL, 'ER BEE LEE', 'A3414141', '09/11/2020', '03/11/2020', 'Male', 'Malay', 'Barbados', '51 JALAN NB2 6/4 TAMAN NB2', 'yanyao1999@outlook.com', NULL, 'JEREMY CHI', 'G12314', 'Bangladesh', 'Malay', 'I13414', '51 JALAN NB2 6/4 TAMAN NB2', 'yanyao1999@outlook.com', '(016) 700-6978', 'Director', NULL, 'Fatma ', '690433-44-5124', 'Benin', 'British', '-', '51 JALAN NB2 6/4 TAMAN NB2', 'yanyao1999@outlook.com', '(016) 700-6978', NULL, 'Manager', 'JEREMEY LIM', 'A13141245', 'Belize', 'Chinese', '51 JALAN NB2 6/4 TAMAN NB2', 'yanyao1999@outlook.com', 'Maybank', 'Johor Jaya', 'maybank', 'Approval');

-- --------------------------------------------------------

--
-- Table structure for table `norti`
--

CREATE TABLE `norti` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `norti`
--

INSERT INTO `norti` (`id`, `title`, `description`, `date`) VALUES
(2, 'Title of the nortification', 'Description of the nortifiaction. Description of the nortifiaction. Description of the nortifiaction. Description of the nortifiaction', '25 November 2020 09:25:38am'),
(3, 'New system released', 'system information. system information. system information. system information. system information. system information. system information. system information. system information. system information. system information. system information. system informat', '25 November 2020 09:26:47am');

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
(2, 'Company Secretarial', 'Every company incorporated in Malaysia must appoint a Company Secretary within 30 days from Incorporation.  Failure to do so would entail penalty from Companies Commission of Malaysia.  We are qualified professionals to be appointed as Company Secretary pursuant to the Companies Act 2016. We provide services of Company formation / Company incorporation in Malaysia. The most common type of company used is a company limited by shares; it may be incorporated as a private limited company or public limited company. You can count on our expertise for your business setting-up needs', 'Company Searches and Bankruptcy Searches', 'Striking off and winding up Company', 'Company Secretarial Services', 'Company incorporation or incorporation of Shelf Company', 'Company formation ', 'Company Secretarial Consultants', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `form_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `user_id`, `form_id`) VALUES
(1, 2, NULL),
(2, 2, NULL),
(3, 2, NULL),
(4, 2, NULL),
(5, 2, NULL),
(6, 2, NULL),
(7, 2, NULL),
(8, 2, NULL),
(9, 2, NULL),
(10, 2, NULL),
(11, 2, NULL),
(12, 2, NULL),
(13, 2, NULL),
(14, 2, NULL),
(15, 2, NULL),
(16, 2, NULL),
(17, 2, NULL),
(18, 2, NULL),
(19, 2, NULL),
(20, 2, NULL),
(21, 2, NULL),
(22, 2, NULL),
(23, 2, NULL),
(24, 2, NULL),
(25, 2, NULL),
(26, 2, NULL),
(27, 2, NULL),
(28, 2, NULL),
(29, 2, NULL),
(30, 2, NULL),
(31, 2, NULL),
(32, 2, NULL),
(33, 2, NULL),
(34, 2, NULL),
(35, 2, NULL),
(36, 2, NULL),
(37, 2, NULL),
(38, 2, NULL),
(39, 2, NULL),
(40, 2, NULL),
(41, 2, NULL),
(42, 2, NULL),
(43, 2, NULL),
(44, 2, NULL),
(45, 2, NULL),
(46, 2, NULL),
(47, 2, NULL),
(48, 2, NULL),
(49, 2, NULL),
(50, 2, NULL),
(51, 2, NULL),
(52, 2, NULL),
(53, 2, NULL),
(54, 2, NULL),
(55, 2, NULL),
(56, 2, NULL),
(57, 2, NULL),
(58, 2, NULL),
(59, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`) VALUES
(1, 'yanyao1999@gmail.com', '$2y$10$lEusXOlytVIGVSkInuBjPuFyjDJ3A09ZgjJwaDmOs70LMs19nb6li'),
(2, 'yanyao1999@outlook.com', '$2y$10$rM0kC71jtsm.JF2Fq3SA8.KaF9chxispUVjZVCFhQvZU0Rp4zm9MC'),
(3, 'darrylj677@gmail.com', '$2y$10$Bh86qav5Ul7BhihLILY7nuhKV7HkGMRmGil0LJ2Lr5sWKpGmMFY/K'),
(6, 'test@test.com', '$2y$10$iNsn29.YMR5QuS0BBeoS3eEmWVv216obbcOoeqMSYp3dvTmdnM3iK'),
(7, 'eryanyao1@gmail.com', '$2y$10$/vylAHAWLsgPoFD4QwvKYOCGJTlW6dZXSiT6gm4ckb1gNlxmyr6ru'),
(8, 'test11@gmail.com', '$2y$10$CVsOgU0usqk8a78zoOksY.fTvpYsZpu8WSueM.A4sO3my4cYtZpgi'),
(9, 't@t.com', '$2y$10$CHGgV3ZiiV2gC1s0j5X4IOz9EvQtZP2jWJY0/lV3.ZRn4lPYsvoM2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indexes for table `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `norti`
--
ALTER TABLE `norti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `norti`
--
ALTER TABLE `norti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
