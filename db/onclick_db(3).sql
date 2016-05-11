-- phpMyAdmin SQL Dump
-- version 4.5.3.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2016 at 12:54 PM
-- Server version: 5.7.10
-- PHP Version: 5.6.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onclick_db`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `Proc_willdetails` (IN `USERID` INT, IN `WILLID` INT, IN `STARTPOSITION` INT)  BEGIN
	
SET @POSITION =  STARTPOSITION;
SET @PAGESIZE = 5;
SET @USERID = USERID;
SET @WillID = WILLID;


PREPARE GetUser FROM
'SELECT * from user_register where user_id = ? order by user_id LIMIT ?,?';
EXECUTE GetUser USING @USERID,@POSITION, @PAGESIZE;

PREPARE GetFamily FROM
'SELECT * from tbl_family where will_id = ? order by will_id LIMIT ?,?';
EXECUTE GetFamily USING @WILLID,@POSITION, @PAGESIZE;

PREPARE GetProp FROM
'SELECT * from immovable_propertys where will_id = ? order by will_id LIMIT ?,?';
EXECUTE GetProp USING @WILLID,@POSITION, @PAGESIZE;

PREPARE GetmovProp FROM
'SELECT * from movable_propertys where will_id = ? order by will_id LIMIT ?,?';
EXECUTE GetProp USING @WILLID,@POSITION, @PAGESIZE;

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin_category`
--

CREATE TABLE `admin_category` (
  `cat_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_category`
--

INSERT INTO `admin_category` (`cat_id`, `name`) VALUES
(1, 'Family'),
(2, 'Property'),
(3, 'Lawyer'),
(4, 'Doctor'),
(5, 'Witness');

-- --------------------------------------------------------

--
-- Table structure for table `admin_faq`
--

CREATE TABLE `admin_faq` (
  `faq_id` int(11) NOT NULL,
  `cat_type_name` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_faq`
--

INSERT INTO `admin_faq` (`faq_id`, `cat_type_name`, `question`, `answer`) VALUES
(1, 1, 'aaaaaaaaa', 'aaaaaaaaaaaaa'),
(2, 2, 'bbbbbbbbb', 'bbbbbbbbbbbbbbbbbb'),
(3, 3, 'ljdajngkwarnss', 'lasdnfaoaobhg'),
(4, 1, 'dfsfd', 'fdsf'),
(5, 3, 'lksngielsf;x', 's,d hz;kfdx;l');

-- --------------------------------------------------------

--
-- Table structure for table `admin_messages`
--

CREATE TABLE `admin_messages` (
  `id` int(255) NOT NULL COMMENT 'id auto increment',
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `address` longtext NOT NULL,
  `date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_messages`
--

INSERT INTO `admin_messages` (`id`, `email`, `password`, `contact`, `name`, `phone_number`, `address`, `date`, `modified_date`, `message`) VALUES
(2, 'vin@gmail.com', 'vin', '', 'VINAY', '9876543210', 'bangalore', '2016-03-22 11:25:41', '2016-03-22 11:25:41', ''),
(11, 'adel@gmail.com', 'adel', '', 'adel', '9876543211', 'Testing123', '2016-04-09 11:22:36', '2016-04-09 11:22:36', ''),
(15, 'ram@gmail.com', 'aaa', '', 'Praveen', '9876543211', 'trgf', '2016-04-14 10:31:04', '2016-04-14 10:31:04', ''),
(16, 'thiru@gmail.com', 'thiru', '', 'Thiru', '9999999999', 'Testing Address', '2016-04-15 06:09:14', '2016-04-15 06:09:14', ''),
(36, 'fdf@ff.kjh', 'jyfyj', '', 'jcjgj', '9853214752', 'kvkydfyflglugougougou', '2016-04-16 06:03:06', '2016-04-16 11:33:06', '');

-- --------------------------------------------------------

--
-- Table structure for table `admin_movprop`
--

CREATE TABLE `admin_movprop` (
  `mov_id` int(11) NOT NULL,
  `mov_name` varchar(30) NOT NULL,
  `date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_movprop`
--

INSERT INTO `admin_movprop` (`mov_id`, `mov_name`, `date`, `modified_date`) VALUES
(1, 'Jewellery', '2016-04-13 00:00:00', '2016-04-13 00:00:00'),
(2, 'Car', '2016-04-13 00:00:00', '2016-04-13 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `admin_ownership`
--

CREATE TABLE `admin_ownership` (
  `own_id` int(11) NOT NULL,
  `own_name` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_ownership`
--

INSERT INTO `admin_ownership` (`own_id`, `own_name`, `date`, `modified_date`) VALUES
(2, 'Self Acquired', '2016-04-12 07:24:41', '2016-04-12 07:24:41'),
(3, 'Inherited', '2016-04-03 00:00:00', '2016-04-04 00:00:00'),
(4, 'Partitioned of family', '2016-04-13 00:00:00', '2016-04-20 00:00:00'),
(5, 'Gifted', '2016-04-13 00:00:00', '2016-04-20 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `admin_property`
--

CREATE TABLE `admin_property` (
  `prop_id` int(11) NOT NULL,
  `prop_name` varchar(255) NOT NULL,
  `type` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_property`
--

INSERT INTO `admin_property` (`prop_id`, `prop_name`, `type`, `date`, `modified_date`) VALUES
(3, 'Flat', 1, '2016-04-14 12:12:31', '2016-04-14 12:12:31'),
(4, 'House', 1, '2016-04-12 06:34:29', '2016-04-12 06:34:29'),
(5, 'Car', 2, '2016-04-11 00:00:00', '2016-04-14 00:00:00'),
(6, 'Jewellery', 2, '2016-04-11 00:00:00', '2016-04-14 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `admin_registrations`
--

CREATE TABLE `admin_registrations` (
  `admin_id` int(11) NOT NULL COMMENT 'primary key',
  `email_address` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_registrations`
--

INSERT INTO `admin_registrations` (`admin_id`, `email_address`, `password`) VALUES
(1, 'admin@oneclick.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `admin_relations`
--

CREATE TABLE `admin_relations` (
  `rel_id` int(255) NOT NULL COMMENT 'id auto increment',
  `name` varchar(255) NOT NULL,
  `date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_relations`
--

INSERT INTO `admin_relations` (`rel_id`, `name`, `date`, `modified_date`) VALUES
(1, 'Father', '2016-04-06 00:00:00', '2016-04-20 00:00:00'),
(2, 'Mother', '2016-04-03 00:00:00', '2016-04-20 00:00:00'),
(3, 'Son', '2016-04-13 00:00:00', '2016-04-13 00:00:00'),
(4, 'Daughter', '2016-04-20 00:00:00', '2016-04-14 00:00:00'),
(15, 'Husband', '2016-04-16 01:12:57', '2016-04-16 01:12:57'),
(16, 'Others', '2016-04-20 00:00:00', '2016-04-21 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `admin_video`
--

CREATE TABLE `admin_video` (
  `vid_id` int(11) NOT NULL,
  `cat_type_id` int(11) NOT NULL,
  `vedio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `familys`
--

CREATE TABLE `familys` (
  `member_id` int(11) NOT NULL COMMENT 'primary key',
  `user_id` int(11) NOT NULL COMMENT 'Foriegn key of users table',
  `member_name` varchar(255) NOT NULL,
  `relation_id` varchar(11) NOT NULL COMMENT 'foriegn key of relations table',
  `martial_status` varchar(255) NOT NULL,
  `age` varchar(100) NOT NULL,
  `family_rel_id` int(11) NOT NULL COMMENT 'foriegn key',
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `familys`
--

INSERT INTO `familys` (`member_id`, `user_id`, `member_name`, `relation_id`, `martial_status`, `age`, `family_rel_id`, `created_date`, `modified_date`) VALUES
(1, 3, 'ewqeq', '3', 'eqwe', 'eqwe', 2323, '2016-03-29 13:57:04', '2016-03-29 13:57:09');

-- --------------------------------------------------------

--
-- Table structure for table `grant_immovable`
--

CREATE TABLE `grant_immovable` (
  `grant_im_id` int(11) NOT NULL COMMENT 'user_id auto increment',
  `property_id` int(11) NOT NULL,
  `fam_id` int(11) NOT NULL,
  `rel_id` int(11) NOT NULL,
  `percent` varchar(255) NOT NULL,
  `will_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `grant_immovable`
--

INSERT INTO `grant_immovable` (`grant_im_id`, `property_id`, `fam_id`, `rel_id`, `percent`, `will_id`, `status`) VALUES
(113, 29, 112, 1, '10', 49, 0),
(114, 29, 113, 3, '90', 49, 1);

-- --------------------------------------------------------

--
-- Table structure for table `grant_movable`
--

CREATE TABLE `grant_movable` (
  `grant_mov_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `fam_id` int(11) NOT NULL,
  `rel_id` int(11) NOT NULL,
  `percent` int(11) NOT NULL,
  `will_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grant_movable`
--

INSERT INTO `grant_movable` (`grant_mov_id`, `property_id`, `fam_id`, `rel_id`, `percent`, `will_id`) VALUES
(1, 2, 92, 4, 40, 8),
(2, 1, 92, 4, 40, 8);

-- --------------------------------------------------------

--
-- Table structure for table `immovable_propertys`
--

CREATE TABLE `immovable_propertys` (
  `Immovable_id` int(11) NOT NULL COMMENT 'primary key',
  `will_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `municipal_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `year_of_purchase` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `area` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nature_of_ownership` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `comments` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `immovable_propertys`
--

INSERT INTO `immovable_propertys` (`Immovable_id`, `will_id`, `name`, `address`, `municipal_number`, `year_of_purchase`, `area`, `nature_of_ownership`, `created_date`, `modified_date`, `comments`, `type`) VALUES
(29, 49, '4', 'dasda', 'dsad', '2016-05-09', 'dasdad', '2', '2016-05-11 12:11:08', '2016-05-11 12:11:08', NULL, 1),
(30, 49, '6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'zZX', 2);

-- --------------------------------------------------------

--
-- Table structure for table `movable_propertys`
--

CREATE TABLE `movable_propertys` (
  `movable_id` int(11) NOT NULL COMMENT 'primary key',
  `will_id` int(11) NOT NULL COMMENT 'Foriegn key of users table',
  `name` int(11) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `not_allocated_details`
--

CREATE TABLE `not_allocated_details` (
  `id` int(11) NOT NULL COMMENT 'primary key',
  `member_id` int(11) NOT NULL COMMENT 'foreign key of family table',
  `will_id` int(11) NOT NULL COMMENT 'foriegn key of user_register table',
  `reason` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_doctor`
--

CREATE TABLE `tbl_doctor` (
  `d_id` int(11) NOT NULL COMMENT 'primary key',
  `d_name` varchar(255) NOT NULL,
  `will_id` int(11) NOT NULL COMMENT 'primary key',
  `d_address` text,
  `d_mobile` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_executor`
--

CREATE TABLE `tbl_executor` (
  `e_id` int(11) NOT NULL COMMENT 'primary key',
  `e_name` varchar(255) NOT NULL,
  `e_mobile` bigint(10) NOT NULL,
  `e_about` text NOT NULL,
  `e_address` text NOT NULL,
  `city_name` varchar(100) NOT NULL,
  `state_name` varchar(100) NOT NULL,
  `will_id` int(11) NOT NULL COMMENT 'primary key'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_family`
--

CREATE TABLE `tbl_family` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `relationship` int(11) NOT NULL,
  `dob` datetime DEFAULT NULL,
  `will_id` int(11) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `marital_status` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `comments` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_family`
--

INSERT INTO `tbl_family` (`id`, `name`, `relationship`, `dob`, `will_id`, `gender`, `marital_status`, `status`, `comments`) VALUES
(112, 'aaaa', 1, '2016-05-03 00:00:00', 49, 'Male', 'Married', 'Alive', NULL),
(113, 'dsad', 3, '2016-05-03 00:00:00', 49, 'Male', 'Married', 'Alive', NULL),
(114, 'dddd', 16, NULL, 49, NULL, NULL, 'Alive', 'adsada');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gender`
--

CREATE TABLE `tbl_gender` (
  `id` int(11) NOT NULL,
  `gender_type` varchar(100) NOT NULL,
  `id_value` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gender`
--

INSERT INTO `tbl_gender` (`id`, `gender_type`, `id_value`) VALUES
(1, 'Male', 'male'),
(2, 'Female', 'female');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_marital_status`
--

CREATE TABLE `tbl_marital_status` (
  `id` int(11) NOT NULL,
  `status_type` varchar(100) NOT NULL,
  `id_value` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_marital_status`
--

INSERT INTO `tbl_marital_status` (`id`, `status_type`, `id_value`) VALUES
(1, 'Married', 'married'),
(2, 'Unmarried', 'unmarried'),
(3, 'Widow', 'widow');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_progress`
--

CREATE TABLE `tbl_progress` (
  `progress_id` int(11) NOT NULL,
  `will_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_progress`
--

INSERT INTO `tbl_progress` (`progress_id`, `will_id`, `cat_id`, `status`) VALUES
(18, 49, 1, 1),
(19, 49, 2, 1),
(20, 49, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

CREATE TABLE `tbl_status` (
  `id` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `id_value` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_status`
--

INSERT INTO `tbl_status` (`id`, `status`, `id_value`) VALUES
(1, 'Alive', 'alive'),
(2, 'Dead', 'dead');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_will`
--

CREATE TABLE `tbl_will` (
  `will_id` int(11) NOT NULL,
  `will_name` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` tinyint(2) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_will`
--

INSERT INTO `tbl_will` (`will_id`, `will_name`, `user_id`, `status`, `created_date`, `modified_date`) VALUES
(49, 'Default Will', 61, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_witness`
--

CREATE TABLE `tbl_witness` (
  `w_id` int(11) NOT NULL COMMENT 'primary key',
  `w_name` varchar(255) NOT NULL,
  `w_mobile` bigint(10) NOT NULL,
  `permanent_address` text NOT NULL,
  `present_address` text NOT NULL,
  `w_landmark` varchar(255) NOT NULL,
  `w_pincode` int(10) NOT NULL,
  `w_locality` varchar(255) NOT NULL,
  `w_city` varchar(255) NOT NULL,
  `will_id` int(11) DEFAULT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `user_id` int(11) NOT NULL COMMENT 'primary key',
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` enum('Male','Female','Others') NOT NULL,
  `marital_status` varchar(100) DEFAULT NULL,
  `address` text NOT NULL,
  `city` varchar(255) DEFAULT NULL,
  `mobile` bigint(11) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`user_id`, `fname`, `mname`, `surname`, `email`, `password`, `gender`, `marital_status`, `address`, `city`, `mobile`, `dob`) VALUES
(61, 'vinay', 'dsad', 'dasdad', 'vinay@gmail.com', '4786f3282f04de5b5c7317c490c6d922', 'Male', NULL, 'dsad', NULL, 9999999999, '2016-05-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_category`
--
ALTER TABLE `admin_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `admin_faq`
--
ALTER TABLE `admin_faq`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `admin_messages`
--
ALTER TABLE `admin_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_movprop`
--
ALTER TABLE `admin_movprop`
  ADD PRIMARY KEY (`mov_id`);

--
-- Indexes for table `admin_ownership`
--
ALTER TABLE `admin_ownership`
  ADD PRIMARY KEY (`own_id`);

--
-- Indexes for table `admin_property`
--
ALTER TABLE `admin_property`
  ADD PRIMARY KEY (`prop_id`);

--
-- Indexes for table `admin_registrations`
--
ALTER TABLE `admin_registrations`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `admin_relations`
--
ALTER TABLE `admin_relations`
  ADD PRIMARY KEY (`rel_id`);

--
-- Indexes for table `admin_video`
--
ALTER TABLE `admin_video`
  ADD PRIMARY KEY (`vid_id`);

--
-- Indexes for table `familys`
--
ALTER TABLE `familys`
  ADD PRIMARY KEY (`member_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `grant_immovable`
--
ALTER TABLE `grant_immovable`
  ADD PRIMARY KEY (`grant_im_id`),
  ADD KEY `user_id_tree` (`grant_im_id`),
  ADD KEY `grant_immovable_ibfk_2` (`rel_id`),
  ADD KEY `will_id` (`will_id`),
  ADD KEY `rel_id` (`rel_id`);

--
-- Indexes for table `grant_movable`
--
ALTER TABLE `grant_movable`
  ADD PRIMARY KEY (`grant_mov_id`);

--
-- Indexes for table `immovable_propertys`
--
ALTER TABLE `immovable_propertys`
  ADD PRIMARY KEY (`Immovable_id`),
  ADD KEY `immovable_propertys_ibfk_1` (`will_id`);

--
-- Indexes for table `movable_propertys`
--
ALTER TABLE `movable_propertys`
  ADD PRIMARY KEY (`movable_id`),
  ADD KEY `user_fk` (`will_id`);

--
-- Indexes for table `not_allocated_details`
--
ALTER TABLE `not_allocated_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Membor_id` (`member_id`),
  ADD KEY `user_id` (`will_id`);

--
-- Indexes for table `tbl_doctor`
--
ALTER TABLE `tbl_doctor`
  ADD PRIMARY KEY (`d_id`),
  ADD KEY `tbl_doctor_ibfk_1` (`will_id`);

--
-- Indexes for table `tbl_executor`
--
ALTER TABLE `tbl_executor`
  ADD PRIMARY KEY (`e_id`),
  ADD KEY `tbl_lawyer_ibfk_1` (`will_id`);

--
-- Indexes for table `tbl_family`
--
ALTER TABLE `tbl_family`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fam_will_id` (`will_id`);

--
-- Indexes for table `tbl_gender`
--
ALTER TABLE `tbl_gender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_marital_status`
--
ALTER TABLE `tbl_marital_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_progress`
--
ALTER TABLE `tbl_progress`
  ADD PRIMARY KEY (`progress_id`);

--
-- Indexes for table `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_will`
--
ALTER TABLE `tbl_will`
  ADD PRIMARY KEY (`will_id`),
  ADD KEY `user_will` (`user_id`);

--
-- Indexes for table `tbl_witness`
--
ALTER TABLE `tbl_witness`
  ADD PRIMARY KEY (`w_id`),
  ADD KEY `will_wit_id` (`will_id`);

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_category`
--
ALTER TABLE `admin_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `admin_faq`
--
ALTER TABLE `admin_faq`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `admin_messages`
--
ALTER TABLE `admin_messages`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT COMMENT 'id auto increment', AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `admin_movprop`
--
ALTER TABLE `admin_movprop`
  MODIFY `mov_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `admin_ownership`
--
ALTER TABLE `admin_ownership`
  MODIFY `own_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `admin_property`
--
ALTER TABLE `admin_property`
  MODIFY `prop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `admin_registrations`
--
ALTER TABLE `admin_registrations`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key', AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `admin_relations`
--
ALTER TABLE `admin_relations`
  MODIFY `rel_id` int(255) NOT NULL AUTO_INCREMENT COMMENT 'id auto increment', AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `admin_video`
--
ALTER TABLE `admin_video`
  MODIFY `vid_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `familys`
--
ALTER TABLE `familys`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key', AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `grant_immovable`
--
ALTER TABLE `grant_immovable`
  MODIFY `grant_im_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'user_id auto increment', AUTO_INCREMENT=115;
--
-- AUTO_INCREMENT for table `grant_movable`
--
ALTER TABLE `grant_movable`
  MODIFY `grant_mov_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `immovable_propertys`
--
ALTER TABLE `immovable_propertys`
  MODIFY `Immovable_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key', AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `movable_propertys`
--
ALTER TABLE `movable_propertys`
  MODIFY `movable_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key', AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `not_allocated_details`
--
ALTER TABLE `not_allocated_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key', AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `tbl_doctor`
--
ALTER TABLE `tbl_doctor`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key';
--
-- AUTO_INCREMENT for table `tbl_executor`
--
ALTER TABLE `tbl_executor`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key';
--
-- AUTO_INCREMENT for table `tbl_family`
--
ALTER TABLE `tbl_family`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
--
-- AUTO_INCREMENT for table `tbl_gender`
--
ALTER TABLE `tbl_gender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_marital_status`
--
ALTER TABLE `tbl_marital_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_progress`
--
ALTER TABLE `tbl_progress`
  MODIFY `progress_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_will`
--
ALTER TABLE `tbl_will`
  MODIFY `will_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `tbl_witness`
--
ALTER TABLE `tbl_witness`
  MODIFY `w_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key';
--
-- AUTO_INCREMENT for table `user_register`
--
ALTER TABLE `user_register`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key', AUTO_INCREMENT=62;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `familys`
--
ALTER TABLE `familys`
  ADD CONSTRAINT `familys_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_register` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `immovable_propertys`
--
ALTER TABLE `immovable_propertys`
  ADD CONSTRAINT `immovable_propertys_ibfk_1` FOREIGN KEY (`will_id`) REFERENCES `tbl_will` (`will_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `movable_propertys`
--
ALTER TABLE `movable_propertys`
  ADD CONSTRAINT `movable_propertys_ibfk_1` FOREIGN KEY (`will_id`) REFERENCES `tbl_will` (`will_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `not_allocated_details`
--
ALTER TABLE `not_allocated_details`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`will_id`) REFERENCES `tbl_will` (`will_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_doctor`
--
ALTER TABLE `tbl_doctor`
  ADD CONSTRAINT `tbl_doctor_ibfk_1` FOREIGN KEY (`will_id`) REFERENCES `tbl_will` (`will_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_executor`
--
ALTER TABLE `tbl_executor`
  ADD CONSTRAINT `tbl_executor_ibfk_1` FOREIGN KEY (`will_id`) REFERENCES `tbl_will` (`will_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_family`
--
ALTER TABLE `tbl_family`
  ADD CONSTRAINT `fam_will_id` FOREIGN KEY (`will_id`) REFERENCES `tbl_will` (`will_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_will`
--
ALTER TABLE `tbl_will`
  ADD CONSTRAINT `user_will` FOREIGN KEY (`user_id`) REFERENCES `user_register` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_witness`
--
ALTER TABLE `tbl_witness`
  ADD CONSTRAINT `will_wit_id` FOREIGN KEY (`will_id`) REFERENCES `tbl_will` (`will_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
