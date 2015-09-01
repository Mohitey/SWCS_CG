-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 31, 2015 at 11:52 PM
-- Server version: 5.5.42-37.1
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jlabs_swcs`
--

-- --------------------------------------------------------

--
-- Table structure for table `bo_accesss_log`
--

CREATE TABLE IF NOT EXISTS `bo_accesss_log` (
  `log_id` bigint(20) unsigned NOT NULL,
  `unique_key` varchar(32) NOT NULL,
  `user_agent` varchar(512) DEFAULT NULL,
  `requester_ip` varchar(32) DEFAULT NULL,
  `requested_url` varchar(512) DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `referer` varchar(512) DEFAULT NULL,
  `url` varchar(1024) DEFAULT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bo_applications`
--

CREATE TABLE IF NOT EXISTS `bo_applications` (
  `application_id` int(10) unsigned NOT NULL,
  `application_name` varchar(128) NOT NULL,
  `application_desc` varchar(512) NOT NULL,
  `dept_id` int(11) unsigned NOT NULL,
  `is_application_active` enum('N','Y') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bo_applications_fields_mapping`
--

CREATE TABLE IF NOT EXISTS `bo_applications_fields_mapping` (
  `app_mapping_id` int(11) NOT NULL,
  `application_id` int(10) unsigned NOT NULL,
  `field_id` int(10) unsigned NOT NULL,
  `is_mapping_active` enum('N','Y') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bo_applications_submittions`
--

CREATE TABLE IF NOT EXISTS `bo_applications_submittions` (
  `submission_id` int(10) unsigned NOT NULL,
  `application_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `field_id` int(10) unsigned NOT NULL,
  `field_value` varchar(512) NOT NULL,
  `application_status` enum('N','Y','P') NOT NULL DEFAULT 'P'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bo_departments`
--

CREATE TABLE IF NOT EXISTS `bo_departments` (
  `dept_id` int(11) unsigned NOT NULL,
  `department_name` varchar(512) NOT NULL,
  `department_unique_code` varchar(128) NOT NULL,
  `department_link` varchar(128) NOT NULL,
  `department_img` varchar(128) NOT NULL,
  `added_on` datetime NOT NULL,
  `dept_order` int(3) NOT NULL,
  `updated_on` date NOT NULL,
  `is_department_active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bo_departments`
--

INSERT INTO `bo_departments` (`dept_id`, `department_name`, `department_unique_code`, `department_link`, `department_img`, `added_on`, `dept_order`, `updated_on`, `is_department_active`) VALUES
(5, 'Upportdash', '123', 'http://www.chips.gov.in/', '01.png', '2015-08-22 05:12:10', 1, '2015-08-22', 1),
(6, 'Upportdash', '121', 'http://nayaraipur.gov.in/', '2.jpg', '2015-08-22 05:14:41', 2, '2015-08-22', 1),
(8, 'Upportdash', '121', 'http://www.csidc.in/', '6.png', '2015-08-22 05:14:41', 3, '2015-08-22', 1),
(9, 'Upportdash', '121', 'http://cspdcl.co.in/', '03.png', '2015-08-22 05:14:41', 4, '2015-08-22', 1),
(11, 'Upportdash', '121', 'http://www.cgwrd.in/', '04.png', '2015-08-22 05:14:41', 5, '2015-08-22', 0),
(12, 'Upportdash', '121', 'http://comtax.cg.nic.in/', '5.png', '2015-08-22 05:14:41', 6, '2015-08-22', 0),
(13, 'Upportdash', '121', 'http://nayaraipur.gov.in/', '2.jpg', '2015-08-22 05:14:41', 7, '2015-08-22', 0),
(14, 'Upportdash', '121', 'http://www.chips.gov.in/', '01.png', '2015-08-22 05:14:41', 8, '2015-08-22', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bo_filelds`
--

CREATE TABLE IF NOT EXISTS `bo_filelds` (
  `field_id` int(10) unsigned NOT NULL,
  `field_name` varchar(64) NOT NULL,
  `field_desc` varchar(512) NOT NULL,
  `filed_type` enum('text','select','multiselect','radio','textarea','hidden','password','fileuploader','document') NOT NULL,
  `is_field_active` enum('N','Y') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bo_forgot_password`
--

CREATE TABLE IF NOT EXISTS `bo_forgot_password` (
  `fp_id` int(10) unsigned NOT NULL,
  `uid` int(10) unsigned NOT NULL,
  `pass_code` varchar(32) NOT NULL,
  `time_stamp` int(11) NOT NULL,
  `is_active` char(1) NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bo_landregion`
--

CREATE TABLE IF NOT EXISTS `bo_landregion` (
  `lr_id` int(10) unsigned NOT NULL,
  `lr_name` varchar(90) NOT NULL,
  `lr_type` enum('country','state','district','tehsil','city') NOT NULL,
  `hadbast_number` varchar(10) DEFAULT NULL,
  `vtc_code` varchar(10) DEFAULT NULL,
  `is_lr_active` enum('N','Y') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bo_languages`
--

CREATE TABLE IF NOT EXISTS `bo_languages` (
  `lang_id` int(10) unsigned NOT NULL,
  `lang_code` char(3) NOT NULL COMMENT 'Language Code',
  `lang_name` varchar(16) NOT NULL COMMENT 'Language',
  `is_active` char(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bo_login_access_log`
--

CREATE TABLE IF NOT EXISTS `bo_login_access_log` (
  `log_id` bigint(20) unsigned NOT NULL,
  `uid` int(10) unsigned NOT NULL,
  `time_stamp` int(11) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bo_login_access_log`
--

INSERT INTO `bo_login_access_log` (`log_id`, `uid`, `time_stamp`, `date_time`) VALUES
(1, 1, 1440156443, '2015-08-21 06:27:23'),
(2, 1, 1440156495, '2015-08-21 06:28:15'),
(3, 1, 1440156547, '2015-08-21 06:29:07'),
(4, 1, 1440156780, '2015-08-21 06:33:00'),
(5, 1, 1440156995, '2015-08-21 06:36:35'),
(6, 1, 1440157531, '2015-08-21 06:45:31'),
(7, 1, 1440164001, '2015-08-21 08:33:21'),
(8, 1, 1440219156, '2015-08-21 23:52:36'),
(9, 1, 1440222841, '2015-08-22 00:54:01'),
(10, 1, 1440228710, '2015-08-22 02:31:50'),
(11, 1, 1440228803, '2015-08-22 02:33:23'),
(12, 1, 1440245279, '2015-08-22 07:07:59'),
(13, 1, 1440245393, '2015-08-22 07:09:53'),
(14, 1, 1440245428, '2015-08-22 07:10:28'),
(15, 1, 1440245520, '2015-08-22 07:12:00'),
(16, 1, 1440245570, '2015-08-22 07:12:50'),
(17, 1, 1440247616, '2015-08-22 07:46:56'),
(18, 1, 1440249044, '2015-08-22 08:10:44'),
(19, 1, 1440249853, '2015-08-22 08:24:13'),
(20, 1, 1440433907, '2015-08-24 11:31:47'),
(21, 1, 1440434047, '2015-08-24 11:34:07'),
(22, 1, 1440434495, '2015-08-24 11:41:35'),
(23, 1, 1440480666, '2015-08-25 00:31:06'),
(24, 1, 1440481682, '2015-08-25 00:48:02'),
(25, 1, 1440481818, '2015-08-25 00:50:18'),
(26, 1, 1440484578, '2015-08-25 01:36:18'),
(27, 1, 1440496327, '2015-08-25 04:52:07'),
(28, 1, 1440650086, '2015-08-26 23:34:46'),
(29, 1, 1440650484, '2015-08-26 23:41:24'),
(30, 1, 1440654998, '2015-08-27 00:56:38'),
(31, 1, 1440655075, '2015-08-27 00:57:55'),
(32, 1, 1440658208, '2015-08-27 01:50:08'),
(33, 1, 1440672214, '2015-08-27 05:43:34'),
(34, 1, 1440673484, '2015-08-27 06:04:44'),
(35, 1, 1440762001, '2015-08-28 06:40:01'),
(36, 1, 1440999319, '2015-08-31 00:35:19'),
(37, 1, 1441006258, '2015-08-31 02:30:58'),
(38, 1, 1441007963, '2015-08-31 02:59:23'),
(39, 1, 1441014843, '2015-08-31 04:54:03'),
(40, 1, 1441018608, '2015-08-31 05:56:48'),
(41, 1, 1441020535, '2015-08-31 06:28:55'),
(42, 1, 1441027802, '2015-08-31 08:30:02');

-- --------------------------------------------------------

--
-- Table structure for table `bo_manage_accordion_block`
--

CREATE TABLE IF NOT EXISTS `bo_manage_accordion_block` (
  `acc_id` int(11) NOT NULL,
  `acc_title` varchar(254) COLLATE utf8_unicode_ci NOT NULL,
  `acc_descr` longtext COLLATE utf8_unicode_ci NOT NULL,
  `added_by` int(2) NOT NULL,
  `acc_order` int(3) NOT NULL,
  `updated_date` date NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bo_manage_accordion_block`
--

INSERT INTO `bo_manage_accordion_block` (`acc_id`, `acc_title`, `acc_descr`, `added_by`, `acc_order`, `updated_date`, `is_active`) VALUES
(1, 'Naya Raipur–1 Smart City of the country & upcoming I.T Hub', 'Naya Raipur is the 1st Smart City of India with an area of 237 sq. k.m in which an investment of Rs.5 thousand crores is already done and a further investment of Rs. 10 thousand crores is in the pipeline', 1, 1, '2015-08-22', 1),
(2, 'High Return on Investment', 'The investors are expected to reap in high returns on Investment in short time due to incentives for fixed and working capital on investment including setting up and operational costs and low cost of living in the cities of Chhattisgarh compared to other cities of the country. ', 1, 2, '2015-08-22', 1),
(3, 'Talent Pool and Educational Infrastructure', '<li align="justify"><b>Indian Institute of Technology (IIT):</b> MHRD has announced to set up  a new  IIT in the state of chhattisgarh.</li>   \r\n											 <li align="justify"><b>Indian Institute of Management(IIM) Raipur:</b> premier national institute in Management Education/specialized research established in 2010</li>\r\n											 <li align="justify"><b>National Institute of Technology(NIT):</b> premier institute in Engineering,IT and Technical Education offering graduate PG courses established in 2005</li>\r\n											 <li align="justify"><b>All India Institute of Medical Science(AIIMS):</b> A premier institue for medical  science and research in Raipur established in 2012</li> \r\n											 <li align="justify"><b>Hidayatullah National Law University (HNLU)</b> operation in Naya Raipur</li>\r\n											 <li align="justify">New Campus of <b>Indian Institute of Information Technology (IIIT)</b> will start  from academic session 2015-16. Centre of Excellence set up by Siemens</li>', 1, 3, '2015-08-22', 1),
(4, 'Electricity', 'Chhattisgarh State is a power surplus state with current generating capacity of 21000 MW which is targeted to increase to 41000 MW by the end of 12th Five Year Plan. The State''s electrical tariff is 35% cheaper than all India average. Availability of uninterrupted quality power supply at a very competitive rate will reduce the operational cost for Electronics Manufacturing Clusters and IT/ITeS industries thereby leading to cost effective production. ', 1, 4, '2015-08-22', 1),
(5, 'Central Location & Excellent Connectivity', '<li align="justify">Direct physical access to markets of 7 states: Telangana,Andhra Pradesh, Uttar Pradesh,Madhya Pradesh, Maharashtra,Bihar and Odisha</li>  \r\n										   <li align="justify">Total road length 35,411 Km including 12 National Highways</li>\r\n										   <li align="justify">1187 km of Rail network</li>\r\n										   <li align="justify">Heights freight loading capacity and Railway operations in Chhattisgarh alone generates 1/6th of Railway''s revenues.</li>\r\n										    <li align="justify">Existing Airport with new  and modern  terminal in Naya Raipur- ''National Tourism Award 2012-13'' for best airport in India in non-metro category. <b>International flights</b> to commence operations from Raipur soon. Airports proposed  at Raigarh and Bilaspur. </li>\r\n											 <li align="justify">Vizag Port at a distance of 548 km  from Raipur.</li>\r\n											  <li align="justify">Cargo complex is under development by AAI</li>', 1, 5, '2015-08-22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bo_manage_accordion_block2`
--

CREATE TABLE IF NOT EXISTS `bo_manage_accordion_block2` (
  `inv_id` int(11) NOT NULL,
  `inv_title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `inv_val_percentage` int(3) NOT NULL,
  `inv_backgroud_color` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `inv_title_backgroud_color` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `inv_order` int(3) NOT NULL,
  `update_on` date NOT NULL,
  `is_active` int(11) NOT NULL,
  `added_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bo_manage_accordion_block2`
--

INSERT INTO `bo_manage_accordion_block2` (`inv_id`, `inv_title`, `inv_val_percentage`, `inv_backgroud_color`, `inv_title_backgroud_color`, `inv_order`, `update_on`, `is_active`, `added_date`) VALUES
(1, 'Fixed Capital ', 50, '#e67e22', '#d35400', 1, '2015-08-22', 1, '2015-08-22'),
(2, 'Interest Subsidy', 80, '#3498db', '#2980b9', 2, '2015-08-22', 1, '2015-08-22'),
(3, 'Land Premium', 50, '#2c3e50', '#2c3e50', 3, '2015-08-22', 1, '2015-08-22'),
(4, 'Lease/Rental Space', 75, '#5a68a5', '#46465e', 4, '2015-08-22', 1, '2015-08-22'),
(5, 'Stamp Duty', 50, '#525245', '#333333', 6, '2015-08-22', 1, '2015-08-22'),
(6, 'CST  and  Entry  Tax', 75, '#2ecc71', '#27ae60', 7, '2015-08-22', 1, '2015-08-22'),
(7, 'Electricity  Duty', 50, '#F7FE2E', '#FFBF00', 8, '2015-08-22', 1, '2015-08-22');

-- --------------------------------------------------------

--
-- Table structure for table `bo_manage_contact`
--

CREATE TABLE IF NOT EXISTS `bo_manage_contact` (
  `id` int(11) NOT NULL,
  `contact_addr` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `contact_mobile` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `contact_email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `about_you` text COLLATE utf8_unicode_ci NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT '1',
  `added_by` int(11) NOT NULL,
  `added_date` date NOT NULL,
  `updated_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bo_manage_contact`
--

INSERT INTO `bo_manage_contact` (`id`, `contact_addr`, `contact_mobile`, `contact_email`, `about_you`, `is_active`, `added_by`, `added_date`, `updated_date`) VALUES
(1, 'Chhattisgarh Infotech & Biotech Promotion Society (CHiPS), 3rd Floor, State Data Centre Building, Opp. New Circuit House, Civil Lines, Raipur-492001 Chhattisgarh', '(0771) 4014158 /4023123(0771) 4066205 ', 'support@cg.SWCS.gov.in', 'Dummy Text', 1, 1, '2015-08-22', '2015-08-22');

-- --------------------------------------------------------

--
-- Table structure for table `bo_manage_homepage`
--

CREATE TABLE IF NOT EXISTS `bo_manage_homepage` (
  `content_id` int(10) unsigned NOT NULL,
  `block1_after_slider_heading` varchar(255) NOT NULL,
  `block1_after_slider_desc` longtext,
  `block1_after_slider_read_more_link` varchar(255) DEFAULT NULL,
  `block2_after_slider_heading` varchar(255) DEFAULT NULL,
  `block2_after_slider_desc` longtext,
  `block2_after_slider_read_more_link` varchar(255) NOT NULL,
  `block3_after_slider_heading` varchar(255) DEFAULT NULL,
  `block3_after_slider_desc` longtext,
  `block3_after_slider_read_more_link` varchar(255) DEFAULT NULL,
  `block_after_slider_main_heading` varchar(255) DEFAULT NULL,
  `homepage_minitster_image` varchar(512) NOT NULL COMMENT 'Image of Minister',
  `homepage_minister_name` varchar(512) DEFAULT NULL COMMENT 'Name of Minister',
  `homepage_minister_name2` varchar(512) DEFAULT NULL COMMENT 'other Language',
  `homepage_minister_name3` varchar(512) DEFAULT NULL COMMENT 'other Language',
  `homepage_minister_name4` varchar(512) DEFAULT NULL COMMENT 'other Language',
  `homepage_minister_designation4` varchar(512) DEFAULT NULL,
  `homepage_minister_name5` varchar(512) DEFAULT NULL COMMENT 'other Language',
  `homepage_minister_designation` varchar(512) DEFAULT NULL,
  `homepage_minister_designation2` varchar(512) DEFAULT NULL,
  `homepage_minister_designation3` varchar(512) DEFAULT NULL,
  `homepage_minister_designation5` varchar(512) DEFAULT NULL,
  `homepage_minsiter_message` longtext NOT NULL COMMENT 'Minister Message',
  `homepage_minsiter_message2` longtext COMMENT 'other Language',
  `homepage_minsiter_message3` longtext COMMENT 'other Language',
  `homepage_minsiter_message4` longtext COMMENT 'other Language',
  `homepage_minsiter_message5` longtext COMMENT 'other Language',
  `homepage_minister_readmore_link` varchar(255) DEFAULT NULL COMMENT '#',
  `home` varchar(99) DEFAULT NULL,
  `homepage_footer_aboutus` longtext,
  `contact_us_email` varchar(255) DEFAULT NULL,
  `contact_us_phone` varchar(255) DEFAULT NULL,
  `contact_us_address` text,
  `homepage_text` varchar(255) DEFAULT NULL,
  `homepage_text1` varchar(255) DEFAULT NULL,
  `homepage_text2` varchar(255) DEFAULT NULL,
  `homepage_text3` varchar(255) DEFAULT NULL,
  `homepage_text4` varchar(255) DEFAULT NULL,
  `last_updated_on` datetime NOT NULL,
  `updated_by` int(10) unsigned NOT NULL,
  `is_active` char(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bo_manage_homepage`
--

INSERT INTO `bo_manage_homepage` (`content_id`, `block1_after_slider_heading`, `block1_after_slider_desc`, `block1_after_slider_read_more_link`, `block2_after_slider_heading`, `block2_after_slider_desc`, `block2_after_slider_read_more_link`, `block3_after_slider_heading`, `block3_after_slider_desc`, `block3_after_slider_read_more_link`, `block_after_slider_main_heading`, `homepage_minitster_image`, `homepage_minister_name`, `homepage_minister_name2`, `homepage_minister_name3`, `homepage_minister_name4`, `homepage_minister_designation4`, `homepage_minister_name5`, `homepage_minister_designation`, `homepage_minister_designation2`, `homepage_minister_designation3`, `homepage_minister_designation5`, `homepage_minsiter_message`, `homepage_minsiter_message2`, `homepage_minsiter_message3`, `homepage_minsiter_message4`, `homepage_minsiter_message5`, `homepage_minister_readmore_link`, `home`, `homepage_footer_aboutus`, `contact_us_email`, `contact_us_phone`, `contact_us_address`, `homepage_text`, `homepage_text1`, `homepage_text2`, `homepage_text3`, `homepage_text4`, `last_updated_on`, `updated_by`, `is_active`) VALUES
(2, 'Start a New Business', 'A step by step guide to help you in starting a new business and expand business in Electronics, IT & ITeS Sector in Chhattisgarh. ', '#', 'When to Apply', 'Apply for Approvals for setting up Business: Details of necessary approvals and processes to be obtained for establishment of business. ', '#', 'What Incentives', 'Bouquet of fiscal and non-fiscal incentives for investors under “Chhattisgarh State Electronics, IT & ITeS Investment Policy 2014-19”. ', '#', 'Website Under Construction Get Back to Very Soon', 'cm3.jpg', 'Dr. Raman Singh', NULL, NULL, NULL, NULL, NULL, 'Honorable Chief Minister', NULL, NULL, NULL, 'The State of Chhattisgarh is fast emerging as the next big story of India. State has maintained a robust State GDP growth rate averaging more then 11% in the last three years. The State has been consistently ranked first amongst new states and second overall on Investment Intent in the country. This Electronics, IT and ITeS Policy is designed to make Chhattisgarh an attractive destination for investment by Electronics, IT and ITeS investors', NULL, NULL, NULL, NULL, '', NULL, 'Paste Text here ......', 'support@cg.SWCS.gov.in', '(0771) 4014158 /4023123(0771) 4066205 ', 'Chhattisgarh Infotech & Biotech Promotion Society (CHiPS), 3rd Floor, State Data Centre Building, Opp. New Circuit House, Civil Lines, Raipur-492001 Chhattisgarh', NULL, NULL, NULL, NULL, NULL, '2015-08-31 06:02:53', 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `bo_manage_homepage_slider`
--

CREATE TABLE IF NOT EXISTS `bo_manage_homepage_slider` (
  `image_id` int(11) NOT NULL,
  `image_caption` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_path` varchar(99) COLLATE utf8_unicode_ci NOT NULL,
  `Image_order` int(2) NOT NULL,
  `larger_heading` varchar(254) COLLATE utf8_unicode_ci NOT NULL,
  `medium_red_bg_heading` varchar(254) COLLATE utf8_unicode_ci NOT NULL,
  `black_bg_h1` varchar(254) COLLATE utf8_unicode_ci NOT NULL,
  `black_bg_h2` varchar(254) COLLATE utf8_unicode_ci NOT NULL,
  `black_bg_h3` varchar(254) COLLATE utf8_unicode_ci NOT NULL,
  `added_date` datetime NOT NULL,
  `updated_date` datetime DEFAULT NULL,
  `is_active` char(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bo_manage_homepage_slider`
--

INSERT INTO `bo_manage_homepage_slider` (`image_id`, `image_caption`, `image_path`, `Image_order`, `larger_heading`, `medium_red_bg_heading`, `black_bg_h1`, `black_bg_h2`, `black_bg_h3`, `added_date`, `updated_date`, `is_active`) VALUES
(1, 'SWSC', 'slider-bg-1.jpg', 1, 'Single Window Clearance System', 'Chhattisgarh', 'Ease of doing business', 'First mover advantage', 'Time Bound Approva', '0000-00-00 00:00:00', '2015-08-31 06:09:41', '1'),
(2, 'SWSC', 'cm.jpg', 2, 'Single Window Clearance System', 'Chhattisgarh', 'Ease', 'First mover ', 'Time Bound ', '0000-00-00 00:00:00', '2015-08-22 01:27:26', '1');

-- --------------------------------------------------------

--
-- Table structure for table `bo_manage_services_block`
--

CREATE TABLE IF NOT EXISTS `bo_manage_services_block` (
  `id` int(11) NOT NULL,
  `block1_heading` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `block1_desc` longtext COLLATE utf8_unicode_ci NOT NULL,
  `block1_read_more_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `block2_heading` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `block2_desc` longtext COLLATE utf8_unicode_ci NOT NULL,
  `block2_read_more_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `block3_heading` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `block3_desc` longtext COLLATE utf8_unicode_ci NOT NULL,
  `block3_read_more_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `added_on` date NOT NULL,
  `updated_on` date NOT NULL,
  `added_by` int(11) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bo_manage_services_block`
--

INSERT INTO `bo_manage_services_block` (`id`, `block1_heading`, `block1_desc`, `block1_read_more_link`, `block2_heading`, `block2_desc`, `block2_read_more_link`, `block3_heading`, `block3_desc`, `block3_read_more_link`, `added_on`, `updated_on`, `added_by`, `is_active`) VALUES
(1, 'Start a New Business', 'A step by step guide to help you in starting a new business and expand business in Electronics, IT & ITeS Sector in Chhattisgarh. ', '#', 'When to Apply', 'Apply for Approvals for setting up Business: Details of necessary approvals and processes to be obtained for establishment of business. ', '#', 'What Incentives', 'Bouquet of fiscal and non-fiscal incentives for investors under “Chhattisgarh State Electronics, IT & ITeS Investment Policy 2014-19”. ', '#', '2015-08-22', '2015-08-22', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `bo_map_roles_pages`
--

CREATE TABLE IF NOT EXISTS `bo_map_roles_pages` (
  `map_id` int(11) NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `parent_page_id` int(11) NOT NULL,
  `is_active` char(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bo_page_categories`
--

CREATE TABLE IF NOT EXISTS `bo_page_categories` (
  `pcat_id` int(10) unsigned NOT NULL COMMENT 'Cat ID',
  `pcat_name` varchar(60) NOT NULL COMMENT 'Category Name',
  `pcal_desc` varchar(512) NOT NULL COMMENT 'Category Description',
  `is_active` char(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bo_page_categories`
--

INSERT INTO `bo_page_categories` (`pcat_id`, `pcat_name`, `pcal_desc`, `is_active`) VALUES
(1, 'Top Menu', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `bo_page_category_relation`
--

CREATE TABLE IF NOT EXISTS `bo_page_category_relation` (
  `relation_id` int(10) unsigned NOT NULL,
  `page_id` int(11) NOT NULL COMMENT 'Page ID',
  `cat_id` int(11) NOT NULL COMMENT 'Category ID',
  `page_order` tinyint(3) NOT NULL COMMENT 'Page Order',
  `is_active` char(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bo_page_category_relation`
--

INSERT INTO `bo_page_category_relation` (`relation_id`, `page_id`, `cat_id`, `page_order`, `is_active`) VALUES
(1, 4, 1, 1, '1'),
(2, 5, 1, 2, '1'),
(3, 6, 1, 3, '1'),
(4, 7, 1, 4, '1'),
(5, 8, 1, 5, '1'),
(6, 9, 1, 6, '1'),
(7, 10, 1, 7, '1'),
(8, 11, 1, 8, '1'),
(9, 12, 1, 9, '1');

-- --------------------------------------------------------

--
-- Table structure for table `bo_page_info`
--

CREATE TABLE IF NOT EXISTS `bo_page_info` (
  `page_id` int(10) unsigned NOT NULL COMMENT 'Page ID',
  `page_stub` varchar(60) NOT NULL COMMENT 'Stub',
  `page_name` varchar(60) NOT NULL COMMENT 'Page Name',
  `page_name1` varchar(60) DEFAULT NULL,
  `page_name2` varchar(60) DEFAULT NULL,
  `page_name3` varchar(60) DEFAULT NULL,
  `page_name4` varchar(60) DEFAULT NULL,
  `page_keywords` varchar(128) NOT NULL COMMENT 'Keywords',
  `page_desc` varchar(512) NOT NULL COMMENT 'Description',
  `is_direct_link` enum('Y','N') NOT NULL,
  `link_address` varchar(250) DEFAULT NULL,
  `page_content` longtext NOT NULL COMMENT 'Content',
  `page_content1` longtext,
  `page_content2` longtext,
  `page_content3` longtext,
  `page_content4` longtext,
  `parent_id` int(11) NOT NULL DEFAULT '0' COMMENT 'Parent',
  `pcat_id` int(10) unsigned NOT NULL COMMENT 'Category',
  `is_active` char(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bo_page_info`
--

INSERT INTO `bo_page_info` (`page_id`, `page_stub`, `page_name`, `page_name1`, `page_name2`, `page_name3`, `page_name4`, `page_keywords`, `page_desc`, `is_direct_link`, `link_address`, `page_content`, `page_content1`, `page_content2`, `page_content3`, `page_content4`, `parent_id`, `pcat_id`, `is_active`) VALUES
(4, 'aboutus', 'About Us', NULL, NULL, NULL, NULL, 'about us', 'about us', 'N', NULL, '<div class="content margin-top60 margin-bottom60">\r\n<div class="container">\r\n<p>Lorem ipsum dolor sit amet, odio vitae urna ipsum quis taciti. Eu ut, massa et vestibulum convallis scelerisque, wisi commodo cras ut tincidunt ante, suspendisse at nisl leo mollis non. Tincidunt pretium inceptos torquent netus in, ipsum donec cursus vitae lobortis, egestas placerat mauris. Iaculis at, sapien facilisi nulla, purus neque. Pharetra massa in nunc pharetra tempor enim, morbi vitae, cursus amet ac, nec amet platea. Viverra consectetuer interdum metus in dolor. Tortor egestas ac, mi non. Id fugiat primis in sagittis egestas, faucibus nibh nunc vel placerat nec. Sed nascetur vestibulum arcu. Vestibulum lorem dui dolor amet, bibendum elementum eu orci, massa fames. Luctus nunc egestas maecenas, quis justo urna duis tempus, in ad lacus varius fringilla, venenatis nonummy eu ullamcorper rhoncus tristique pellentesque, lorem id. Nibh tristique molestie vestibulum etiam felis consectetuer, faucibus odio.</p>\r\n\r\n<p>Eu ridiculus sapien vitae rerum lectus, quam cursus. Tempus eu non aliquet nulla vel urna, vel tellus sed morbi sit, magna a ut luctus, nec ligula diam purus diam, dapibus in porro a. Omnis vel tellus cum dolor, ut fusce nam bibendum sapien iaculis, condimentum at sem eu vestibulum, mauris in, et a et dignissim natoque. Lacus nec metus dapibus ut ante. Quam nec fringilla dignissim mus iaculis ut, sem eget ut est, neque erat odio est suspendisse lobortis, platea justo vestibulum non sociis, ut at. Et dolor duis tristique facilisis blandit, quis gravida, wisi arcu odio sodales class. Gravida consectetuer a amet, magna placerat maecenas pretium, imperdiet rem donec, elementum elit hac at montes viverra tellus. Litora tempus maecenas pede eget adipiscing fermentum, sem velit lorem fermentum etiam, amet nibh justo tellus, id lorem viverra.</p>\r\n\r\n<p>Felis do, fringilla quis a dictumst odio quis, nunc augue. Sociis rutrum molestie laoreet congue elit, cum aliquam nec duis lacus ullamcorper. Erat magna aenean et est faucibus non, sit a tempus urna nisl, diam ac cras pellentesque, elementum risus, fringilla pellentesque lacus ac facilisis. Id lacinia mus gravida dui. Eu molestie quis sed amet consectetuer donec, duis praesent in autem justo, accumsan mauris interdum in, sed sollicitudin lorem tristique. Diam pulvinar, at quis erat orci lorem sollicitudin enim, sed mauris risus, nec nibh et fringilla neque, nisl adipiscing amet. Vestibulum vivamus, a sed vel tristique sed lacus massa, aenean massa dignissim. Et cras velit ut, leo ante quam. Vitae libero mi mauris sodales vestibulum dui, quis blandit nunc feugiat congue scelerisque. Eget imperdiet mauris enim faucibus. Sed dolor urna pellentesque fusce dapibus gravida, erat parturient ut mi libero, lacus arcu, non elementum, malesuada sed a penatibus imperdiet in. Fermentum ut, aptent et non, tincidunt eu.</p>\r\n</div>\r\n</div>\r\n', NULL, NULL, NULL, NULL, 0, 1, '1'),
(5, 'chhattisgarh-state-profile', 'Chhattisgarh State Profile', NULL, NULL, NULL, NULL, 'Chhattisgarh State Profile', 'Chhattisgarh State Profile', 'N', NULL, '\r\n<div class="content margin-top60 margin-bottom60">\r\n<div class="container">\r\n<p style="text-align: justify;"><strong><u>State Profile of Chhatti</u></strong><strong><u>sgarh:</u></strong></p>\r\n\r\n<p style="text-align: justify;"><strong><img alt="" dir="ltr" height="389" src="http://clients.jumbolabs.com/SWCS/frontoffice/themes/backend/uploads/2.jpg" style="margin: 10px; float: right;" width="404" />Overview:</strong> The State of Chhattisgarh has been created as a new state through a restructuring in November 2000 as per the State Reorganisation Act by partitioning 16 Chhattisgarhi-speaking districts of south-eastern districts of Madhya Pradesh.&nbsp; It is the 10<sup>th</sup> largest state in India in terms of total geographical area and 16<sup>th</sup> largest state in terms of population. Administrative structure of the state is with 27 Revenue Districts and 149 tehsils &amp; 146 Blocks.</p>\r\n\r\n<p style="text-align: justify;"><strong>Geography:</strong> The state is located in central part of India. &nbsp;The state shares the border with 6 Indian states i.e. Madhya Pradesh in the northwest,&nbsp;<a href="https://en.wikipedia.org/wiki/Maharastra" target="_blank" title="Maharastra">Maharashtra</a>&nbsp;in the southwest,&nbsp;<a href="https://en.wikipedia.org/wiki/Telangana" target="_blank" title="Telangana">Telangana</a>&nbsp;and&nbsp;<a href="https://en.wikipedia.org/wiki/Andhra_Pradesh" target="_blank" title="Andhra Pradesh">Andhra Pradesh</a>&nbsp;in the south,&nbsp;<a href="https://en.wikipedia.org/wiki/Odisha" target="_blank" title="Odisha">Odisha</a>&nbsp;in the east,&nbsp;<a href="https://en.wikipedia.org/wiki/Jharkhand" target="_blank" title="Jharkhand">Jharkhand</a>&nbsp;in the northeast and&nbsp;<a href="https://en.wikipedia.org/wiki/Uttar_Pradesh" target="_blank" title="Uttar Pradesh">Uttar Pradesh</a>&nbsp;in the North.</p>\r\n\r\n<p style="text-align: justify;"><strong>Climate:</strong> The&nbsp;<a href="https://en.wikipedia.org/wiki/Climate" target="_blank" title="Climate">climate</a>&nbsp;of Chhattisgarh is&nbsp;<a href="https://en.wikipedia.org/wiki/Tropical" target="_blank" title="Tropical">tropical</a>. It is hot and humid because of its proximity to the&nbsp;<a href="https://en.wikipedia.org/wiki/Tropic_of_Cancer" target="_blank" title="Tropic of Cancer">Tropic of Cancer</a>. The state gets its rainfall through&nbsp;monsoons. The monsoon season is from late June to October. May is the hottest month and December-January is the coldest month. &nbsp;The state receives an average of 1,292 millimetres (50.9&nbsp;in) of rain.&nbsp;The state witnesses a wide range of temperature from 0 to 50 degree Celsius.</p>\r\n\r\n<p style="text-align: justify;"><strong>Demography:</strong> It is 16<sup>th</sup> largest state in terms of population. As per the 2011 census, total population of Chhattisgarh is approx. 2.56 cr with a male population of 1.28 Cr against female population of 1.27 cr. The Sex ratio of Chhattisgarh has improved in 2011 to 991 from 989 in 2001.&nbsp;The population density per sq. km of the state has increased from 154 in 2001 to 189 in 2011. The state has been improving in terms of overall Literacy rate i.e 70.28% at present. The male literacy is pegged at 80.27% &amp; that of female in the state is 60.24%, as per the 2011 census.</p>\r\n\r\n<p style="text-align: justify;"><strong>Central Location and Excellent Connectivity:&nbsp; </strong></p>\r\n\r\n<p style="text-align: justify;"><img alt="" height="271" src="http://clients.jumbolabs.com/SWCS/frontoffice/themes/backend/uploads/5.png" style="float: right; margin: 10px;" width="360" />The state has direct physical access to markets of 7 bordering states: Telangana, Andhra Pradesh, Uttar Pradesh, Madhya Pradesh, Maharashtra, Bihar and Odisha</p>\r\n\r\n<p style="text-align: justify;"><strong>Road: </strong>The Surface connectivity through Road is the prime connectivity infrastructure in Chhattisgarh with a total road length of 35,411 km including 12 National Highways.</p>\r\n\r\n<p style="text-align: justify;"><strong>Rail:</strong> The state has a rail network of 1187 km. The Bilaspur division of Railway has the highest freight loading capacity in the country. This division of Indian Railways only generates 1/6th of total Indian Railway&rsquo;s revenues.</p>\r\n\r\n<p style="text-align: justify;"><strong>Air:</strong> The major airport in the state is the modern Terminal in naya Raipur. The airport will soon commence International operations from Raipur. There are two more airports proposed at Raigarh &amp; Bilaspur. The state also has 6 airstrips at various parts of the state. Cargo complex is under development by AAI.</p>\r\n\r\n<p style="text-align: justify;"><strong>Water:</strong> The nearest port to the state is Vizag port in Andhra Pradesh which is at a distance of 548 km from Raipur. Container Corporation of India (CONCOR) is developing a Logistics Hub over 100 acres in Naya Raipur.</p>\r\n\r\n<p style="text-align: justify;"><span style="font-size:24px;"><strong>Major Attraction for Electronics, IT &amp; ITeS sector in Chhattisgarh:</strong></span></p>\r\n\r\n<p style="text-align: center;"><img alt="" src="/SWCS/frontoffice/themes/backend/uploads/8.png" style="height: 500px; width: 733px; float: left;" /></p>\r\n</div>\r\n</div>\r\n', NULL, NULL, NULL, NULL, 4, 1, '1'),
(6, 'esdm-sector-profile', 'ESDM Sector Profile', NULL, NULL, NULL, NULL, 'ESDM Sector Profile', 'ESDM Sector Profile', 'Y', 'Chhattisgarh - ESDM Sector Profile (2015)_07_05_5pm.pdf', '<div class="content margin-top60 margin-bottom60">\r\n<div class="container">\r\n<p>Lorem ipsum dolor sit amet, odio vitae urna ipsum quis taciti. Eu ut, massa et vestibulum convallis scelerisque, wisi commodo cras ut tincidunt ante, suspendisse at nisl leo mollis non. Tincidunt pretium inceptos torquent netus in, ipsum donec cursus vitae lobortis, egestas placerat mauris. Iaculis at, sapien facilisi nulla, purus neque. Pharetra massa in nunc pharetra tempor enim, morbi vitae, cursus amet ac, nec amet platea. Viverra consectetuer interdum metus in dolor. Tortor egestas ac, mi non. Id fugiat primis in sagittis egestas, faucibus nibh nunc vel placerat nec. Sed nascetur vestibulum arcu. Vestibulum lorem dui dolor amet, bibendum elementum eu orci, massa fames. Luctus nunc egestas maecenas, quis justo urna duis tempus, in ad lacus varius fringilla, venenatis nonummy eu ullamcorper rhoncus tristique pellentesque, lorem id. Nibh tristique molestie vestibulum etiam felis consectetuer, faucibus odio.</p>\r\n\r\n<p>Eu ridiculus sapien vitae rerum lectus, quam cursus. Tempus eu non aliquet nulla vel urna, vel tellus sed morbi sit, magna a ut luctus, nec ligula diam purus diam, dapibus in porro a. Omnis vel tellus cum dolor, ut fusce nam bibendum sapien iaculis, condimentum at sem eu vestibulum, mauris in, et a et dignissim natoque. Lacus nec metus dapibus ut ante. Quam nec fringilla dignissim mus iaculis ut, sem eget ut est, neque erat odio est suspendisse lobortis, platea justo vestibulum non sociis, ut at. Et dolor duis tristique facilisis blandit, quis gravida, wisi arcu odio sodales class. Gravida consectetuer a amet, magna placerat maecenas pretium, imperdiet rem donec, elementum elit hac at montes viverra tellus. Litora tempus maecenas pede eget adipiscing fermentum, sem velit lorem fermentum etiam, amet nibh justo tellus, id lorem viverra.</p>\r\n\r\n<p>Felis do, fringilla quis a dictumst odio quis, nunc augue. Sociis rutrum molestie laoreet congue elit, cum aliquam nec duis lacus ullamcorper. Erat magna aenean et est faucibus non, sit a tempus urna nisl, diam ac cras pellentesque, elementum risus, fringilla pellentesque lacus ac facilisis. Id lacinia mus gravida dui. Eu molestie quis sed amet consectetuer donec, duis praesent in autem justo, accumsan mauris interdum in, sed sollicitudin lorem tristique. Diam pulvinar, at quis erat orci lorem sollicitudin enim, sed mauris risus, nec nibh et fringilla neque, nisl adipiscing amet. Vestibulum vivamus, a sed vel tristique sed lacus massa, aenean massa dignissim. Et cras velit ut, leo ante quam. Vitae libero mi mauris sodales vestibulum dui, quis blandit nunc feugiat congue scelerisque. Eget imperdiet mauris enim faucibus. Sed dolor urna pellentesque fusce dapibus gravida, erat parturient ut mi libero, lacus arcu, non elementum, malesuada sed a penatibus imperdiet in. Fermentum ut, aptent et non, tincidunt eu.</p>\r\n</div>\r\n</div>\r\n', NULL, NULL, NULL, NULL, 4, 1, '1'),
(7, 'it-&-ites-sector-profile', 'IT & ITeS Sector Profile', NULL, NULL, NULL, NULL, 'IT & ITeS Sector Profile', 'IT & ITeS Sector Profile', 'N', NULL, '\r\n<div class="content margin-top60 margin-bottom60">\r\n<div class="container">\r\n<p>Lorem ipsum dolor sit amet, odio vitae urna ipsum quis taciti. Eu ut, massa et vestibulum convallis scelerisque, wisi commodo cras ut tincidunt ante, suspendisse at nisl leo mollis non. Tincidunt pretium inceptos torquent netus in, ipsum donec cursus vitae lobortis, egestas placerat mauris. Iaculis at, sapien facilisi nulla, purus neque. Pharetra massa in nunc pharetra tempor enim, morbi vitae, cursus amet ac, nec amet platea. Viverra consectetuer interdum metus in dolor. Tortor egestas ac, mi non. Id fugiat primis in sagittis egestas, faucibus nibh nunc vel placerat nec. Sed nascetur vestibulum arcu. Vestibulum lorem dui dolor amet, bibendum elementum eu orci, massa fames. Luctus nunc egestas maecenas, quis justo urna duis tempus, in ad lacus varius fringilla, venenatis nonummy eu ullamcorper rhoncus tristique pellentesque, lorem id. Nibh tristique molestie vestibulum etiam felis consectetuer, faucibus odio.</p>\r\n\r\n<p>Eu ridiculus sapien vitae rerum lectus, quam cursus. Tempus eu non aliquet nulla vel urna, vel tellus sed morbi sit, magna a ut luctus, nec ligula diam purus diam, dapibus in porro a. Omnis vel tellus cum dolor, ut fusce nam bibendum sapien iaculis, condimentum at sem eu vestibulum, mauris in, et a et dignissim natoque. Lacus nec metus dapibus ut ante. Quam nec fringilla dignissim mus iaculis ut, sem eget ut est, neque erat odio est suspendisse lobortis, platea justo vestibulum non sociis, ut at. Et dolor duis tristique facilisis blandit, quis gravida, wisi arcu odio sodales class. Gravida consectetuer a amet, magna placerat maecenas pretium, imperdiet rem donec, elementum elit hac at montes viverra tellus. Litora tempus maecenas pede eget adipiscing fermentum, sem velit lorem fermentum etiam, amet nibh justo tellus, id lorem viverra.</p>\r\n\r\n<p>Felis do, fringilla quis a dictumst odio quis, nunc augue. Sociis rutrum molestie laoreet congue elit, cum aliquam nec duis lacus ullamcorper. Erat magna aenean et est faucibus non, sit a tempus urna nisl, diam ac cras pellentesque, elementum risus, fringilla pellentesque lacus ac facilisis. Id lacinia mus gravida dui. Eu molestie quis sed amet consectetuer donec, duis praesent in autem justo, accumsan mauris interdum in, sed sollicitudin lorem tristique. Diam pulvinar, at quis erat orci lorem sollicitudin enim, sed mauris risus, nec nibh et fringilla neque, nisl adipiscing amet. Vestibulum vivamus, a sed vel tristique sed lacus massa, aenean massa dignissim. Et cras velit ut, leo ante quam. Vitae libero mi mauris sodales vestibulum dui, quis blandit nunc feugiat congue scelerisque. Eget imperdiet mauris enim faucibus. Sed dolor urna pellentesque fusce dapibus gravida, erat parturient ut mi libero, lacus arcu, non elementum, malesuada sed a penatibus imperdiet in. Fermentum ut, aptent et non, tincidunt eu.</p>\r\n</div>\r\n</div>\r\n', NULL, NULL, NULL, NULL, 4, 1, '1'),
(8, 'single-window-services', 'Single Window Services', NULL, NULL, NULL, NULL, 'Single Window Services', 'Single Window Services', 'N', NULL, '\r\n<div class="content margin-top60 margin-bottom60">\r\n<div class="container">\r\n<p>Lorem ipsum dolor sit amet, odio vitae urna ipsum quis taciti. Eu ut, massa et vestibulum convallis scelerisque, wisi commodo cras ut tincidunt ante, suspendisse at nisl leo mollis non. Tincidunt pretium inceptos torquent netus in, ipsum donec cursus vitae lobortis, egestas placerat mauris. Iaculis at, sapien facilisi nulla, purus neque. Pharetra massa in nunc pharetra tempor enim, morbi vitae, cursus amet ac, nec amet platea. Viverra consectetuer interdum metus in dolor. Tortor egestas ac, mi non. Id fugiat primis in sagittis egestas, faucibus nibh nunc vel placerat nec. Sed nascetur vestibulum arcu. Vestibulum lorem dui dolor amet, bibendum elementum eu orci, massa fames. Luctus nunc egestas maecenas, quis justo urna duis tempus, in ad lacus varius fringilla, venenatis nonummy eu ullamcorper rhoncus tristique pellentesque, lorem id. Nibh tristique molestie vestibulum etiam felis consectetuer, faucibus odio.</p>\r\n\r\n<p>Eu ridiculus sapien vitae rerum lectus, quam cursus. Tempus eu non aliquet nulla vel urna, vel tellus sed morbi sit, magna a ut luctus, nec ligula diam purus diam, dapibus in porro a. Omnis vel tellus cum dolor, ut fusce nam bibendum sapien iaculis, condimentum at sem eu vestibulum, mauris in, et a et dignissim natoque. Lacus nec metus dapibus ut ante. Quam nec fringilla dignissim mus iaculis ut, sem eget ut est, neque erat odio est suspendisse lobortis, platea justo vestibulum non sociis, ut at. Et dolor duis tristique facilisis blandit, quis gravida, wisi arcu odio sodales class. Gravida consectetuer a amet, magna placerat maecenas pretium, imperdiet rem donec, elementum elit hac at montes viverra tellus. Litora tempus maecenas pede eget adipiscing fermentum, sem velit lorem fermentum etiam, amet nibh justo tellus, id lorem viverra.</p>\r\n\r\n<p>Felis do, fringilla quis a dictumst odio quis, nunc augue. Sociis rutrum molestie laoreet congue elit, cum aliquam nec duis lacus ullamcorper. Erat magna aenean et est faucibus non, sit a tempus urna nisl, diam ac cras pellentesque, elementum risus, fringilla pellentesque lacus ac facilisis. Id lacinia mus gravida dui. Eu molestie quis sed amet consectetuer donec, duis praesent in autem justo, accumsan mauris interdum in, sed sollicitudin lorem tristique. Diam pulvinar, at quis erat orci lorem sollicitudin enim, sed mauris risus, nec nibh et fringilla neque, nisl adipiscing amet. Vestibulum vivamus, a sed vel tristique sed lacus massa, aenean massa dignissim. Et cras velit ut, leo ante quam. Vitae libero mi mauris sodales vestibulum dui, quis blandit nunc feugiat congue scelerisque. Eget imperdiet mauris enim faucibus. Sed dolor urna pellentesque fusce dapibus gravida, erat parturient ut mi libero, lacus arcu, non elementum, malesuada sed a penatibus imperdiet in. Fermentum ut, aptent et non, tincidunt eu.</p>\r\n</div>\r\n</div>\r\n', NULL, NULL, NULL, NULL, 4, 1, '1'),
(9, 'services', 'Services', NULL, NULL, NULL, NULL, 'Services', 'services', 'N', NULL, '\r\n<p>services</p>\r\n', NULL, NULL, NULL, NULL, 0, 1, '1'),
(10, 'start-new-enterprise', 'Start New Enterprise', NULL, NULL, NULL, NULL, 'Start New Enterprise', 'Start New Enterprise', 'N', NULL, '\r\n<p>Start New Enterprise</p>\r\n', NULL, NULL, NULL, NULL, 9, 1, '1'),
(11, 'google', 'Google', NULL, NULL, NULL, NULL, 'google', 'google', 'N', NULL, '\r\n<p>ahsdfhas kjhgkahhgsdgaksgdkagksud</p>\r\n', NULL, NULL, NULL, NULL, 0, 1, '1');
INSERT INTO `bo_page_info` (`page_id`, `page_stub`, `page_name`, `page_name1`, `page_name2`, `page_name3`, `page_name4`, `page_keywords`, `page_desc`, `is_direct_link`, `link_address`, `page_content`, `page_content1`, `page_content2`, `page_content3`, `page_content4`, `parent_id`, `pcat_id`, `is_active`) VALUES
(12, 'state-profile', 'State Profile', NULL, NULL, NULL, NULL, 'State Profile', 'State Profile', 'N', NULL, '\r\n<p align="center" class="western" style="margin-bottom: 0.35cm; line-height: 115%"><font face="EYInterstate Light, serif"><font style="font-size: 31pt"><span lang="en-US"><u><b>State Profile of Chhatt<img alt="" src="http://clients.jumbolabs.com/SWCS/frontoffice/themes/backend/uploads/state.jpg" style="width: 23px; height: 35px;" />sgarh:</b></u></span></font></font></p>\r\n\r\n<p class="western" style="margin-bottom: 0.35cm; line-height: 115%;"><font face="EYInterstate Light, serif"><font style="font-size: 14pt"><span lang="en-US"><b>Overview:</b></span></font></font><font face="EYInterstate Light, serif"><font style="font-size: 14pt"><span lang="en-US"> </span></font></font><span style="display: inline-block; border: none; padding: 0cm"><font style="font-size: 12pt"><font face="EYInterstate Light, serif">The State of Chhattisgarh has been created as a new state through a restructuring in November 2000 as per the State Reorganisation Act by partitioning 16 Chhattisgarhi-speaking districts of south-eastern districts of Madhya Pradesh. It is the 10</font></font><font face="EYInterstate Light, serif"><font style="font-size: 12pt"><sup>th</sup></font></font><font style="font-size: 12pt"><font face="EYInterstate Light, serif"> largest state in India in terms of total geographical area and 16</font></font><font face="EYInterstate Light, serif"><font style="font-size: 12pt"><sup>th</sup></font></font><font style="font-size: 12pt"><font face="EYInterstate Light, serif"> largest state in terms of population. Administrative structure of the state is with 27 Revenue Districts and 149 tehsils &amp; 146 Block</font></font></span></p>\r\n\r\n<p class="western" style="margin-bottom: 0.35cm; line-height: 115%; text-align: center;"><span style="display: inline-block; border: none; padding: 0cm"><font style="font-size: 12pt"><font face="EYInterstate Light, serif">s.&nbsp;<input alt="" src="http://clients.jumbolabs.com/SWCS/frontoffice/themes/backend/uploads/2.jpg" style="width: 322px; height: 399px;" type="image" /></font></font></span></p>\r\n\r\n<p class="western" style="margin-bottom: 0.35cm; line-height: 115%"><font face="EYInterstate Light, serif"><font style="font-size: 14pt"><span lang="en-US"><b>Geography:</b></span></font></font><span style="display: inline-block; border: none; padding: 0cm"><font style="font-size: 12pt"><font face="EYInterstate Light, serif"> The state is located in central part of India. The state shares the border with 6 Indian states i.e. Madhya Pradesh in the northwest,&nbsp;<a href="https://en.wikipedia.org/wiki/Maharastra">Maharashtra</a>&nbsp;in the southwest,&nbsp;<a href="https://en.wikipedia.org/wiki/Telangana">Telangana</a>&nbsp;and&nbsp;<a href="https://en.wikipedia.org/wiki/Andhra_Pradesh">Andhra Pradesh</a>&nbsp;in the south,&nbsp;<a href="https://en.wikipedia.org/wiki/Odisha">Odisha</a>&nbsp;in the east,&nbsp;<a href="https://en.wikipedia.org/wiki/Jharkhand">Jharkhand</a>&nbsp;in the northeast and&nbsp;<a href="https://en.wikipedia.org/wiki/Uttar_Pradesh">Uttar Pradesh</a>&nbsp;in the North. </font></font></span></p>\r\n\r\n<p align="justify" class="western" style="margin-bottom: 0.35cm; line-height: 115%"><font face="EYInterstate Light, serif"><font style="font-size: 14pt"><span lang="en-US"><b>Climate:</b></span></font></font><font color="#252525"><font face="Arial, serif"><font style="font-size: 10pt"><span style="background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;"> </span></font></font></font><span style="display: inline-block; border: none; padding: 0cm"><font style="font-size: 12pt"><font face="EYInterstate Light, serif">The&nbsp;<a href="https://en.wikipedia.org/wiki/Climate">climate</a>&nbsp;of Chhattisgarh is&nbsp;<a href="https://en.wikipedia.org/wiki/Tropical">tropical</a>. It is hot and humid because of its proximity to the&nbsp;<a href="https://en.wikipedia.org/wiki/Tropic_of_Cancer">Tropic of Cancer</a>. The state gets its rainfall through&nbsp;monsoons. The monsoon season is from late June to October. May is the hottest month and December-January is the coldest month. The state receives an average of 1,292 millimetres (50.9&nbsp;in) of rain.&nbsp;The state witnesses a wide range of temperature from 0 to 50 degree Celsius. </font></font></span></p>\r\n\r\n<p align="justify" class="western" style="margin-bottom: 0cm; line-height: 0.54cm"><font face="EYInterstate Light, serif"><font style="font-size: 14pt"><span lang="en-US"><b>Demography:</b></span></font></font><span style="display: inline-block; border: none; padding: 0cm"><font style="font-size: 12pt"><font face="EYInterstate Light, serif"> It is 16</font></font><font face="EYInterstate Light, serif"><font style="font-size: 12pt"><sup>th</sup></font></font><font style="font-size: 12pt"><font face="EYInterstate Light, serif"> largest state in terms of population. As per the 2011 census, total population of Chhattisgarh is approx. 2.56 cr with a male population of 1.28 Cr against female population of 1.27 cr. The Sex ratio of Chhattisgarh has improved in 2011 to 991 from 989 in 2001.&nbsp;The population density per sq. km of the state has increased from 154 in 2001 to 189 in 2011. The state has been improving in terms of overall Literacy rate i.e 70.28% at present. The male literacy is pegged at 80.27% &amp; that of female in the state is 60.24%, as per the 2011 census.&nbsp;</font></font></span></p>\r\n\r\n<p align="justify" class="western" style="margin-bottom: 0cm; line-height: 0.54cm">&nbsp;</p>\r\n\r\n<p align="justify" class="western" style="margin-bottom: 0cm; line-height: 0.54cm"><font face="EYInterstate Light, serif"><font style="font-size: 14pt"><span lang="en-US"><b>Central Location and Excellent Connectivity: </b></span></font></font></p>\r\n\r\n<p align="justify" class="western" lang="en-US" style="margin-bottom: 0cm; line-height: 0.54cm">&nbsp;</p>\r\n\r\n<p align="justify" class="western" style="margin-bottom: 0cm; line-height: 0.54cm"><span style="display: inline-block; border: none; padding: 0cm"><font style="font-size: 12pt"><font face="EYInterstate Light, serif">The state has direct physical access to markets of 7 bordering states: Telangana, Andhra Pradesh, Uttar Pradesh, Madhya Pradesh, Maharashtra, Bihar and Odisha</font></font></span><img align="left" border="0" height="371" hspace="12" name="Picture 1" src="data:image/png;base64,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" width="369" /></p>\r\n\r\n<p align="justify" class="western" style="margin-bottom: 0cm; line-height: 0.54cm">&nbsp;</p>\r\n\r\n<p align="justify" class="western" style="margin-bottom: 0cm; line-height: 0.54cm">&nbsp;</p>\r\n\r\n<p align="justify" class="western" style="margin-bottom: 0cm; line-height: 0.54cm">&nbsp;</p>\r\n\r\n<p align="justify" class="western" style="margin-bottom: 0cm; line-height: 0.54cm">&nbsp;</p>\r\n\r\n<p align="justify" class="western" style="margin-bottom: 0cm; line-height: 0.54cm">&nbsp;</p>\r\n\r\n<p align="justify" class="western" style="margin-bottom: 0cm; line-height: 0.54cm">&nbsp;</p>\r\n\r\n<p align="justify" class="western" style="margin-bottom: 0cm; line-height: 0.54cm">&nbsp;</p>\r\n\r\n<p align="justify" class="western" style="margin-bottom: 0cm; line-height: 0.54cm">&nbsp;</p>\r\n\r\n<p align="justify" class="western" style="margin-bottom: 0cm; line-height: 0.54cm">&nbsp;</p>\r\n\r\n<p align="justify" class="western" style="margin-bottom: 0cm; line-height: 0.54cm">&nbsp;</p>\r\n\r\n<p align="justify" class="western" style="margin-bottom: 0cm; line-height: 0.54cm">&nbsp;</p>\r\n\r\n<p align="justify" class="western" style="margin-bottom: 0cm; line-height: 0.54cm">&nbsp;</p>\r\n\r\n<p align="justify" class="western" style="margin-bottom: 0cm; line-height: 0.54cm">&nbsp;</p>\r\n\r\n<p align="justify" class="western" style="margin-bottom: 0cm; line-height: 0.54cm">&nbsp;</p>\r\n\r\n<p align="justify" class="western" style="margin-bottom: 0cm; line-height: 0.54cm">&nbsp;</p>\r\n\r\n<p align="justify" class="western" style="margin-bottom: 0cm; line-height: 0.54cm">&nbsp;</p>\r\n\r\n<p align="justify" class="western" style="margin-bottom: 0cm; line-height: 0.54cm">&nbsp;</p>\r\n\r\n<p align="justify" class="western" style="margin-bottom: 0cm; line-height: 0.54cm">&nbsp;</p>\r\n\r\n<p align="justify" class="western" style="margin-bottom: 0cm; line-height: 0.54cm">&nbsp;</p>\r\n\r\n<p align="justify" class="western" style="margin-bottom: 0cm; line-height: 0.54cm"><font face="EYInterstate Light, serif" style="line-height: 0.54cm;"><font style="font-size: 14pt"><span lang="en-US"><b>Road: </b></span></font></font><span style="line-height: 0.54cm; display: inline-block; border: none; padding: 0cm;"><font style="font-size: 12pt"><font face="EYInterstate Light, serif">The Surface connectivity through Road is the prime connectivity infrastructure in Chhattisgarh with a total road length of 35,411 km including 12 National Highways.</font></font></span></p>\r\n\r\n<p align="justify" class="western" style="margin-bottom: 0cm; line-height: 0.54cm">&nbsp;</p>\r\n\r\n<p align="justify" class="western" style="margin-bottom: 0cm; line-height: 0.54cm"><font face="EYInterstate Light, serif"><font style="font-size: 14pt"><span lang="en-US"><b>Rail:</b></span></font></font><span style="display: inline-block; border: none; padding: 0cm"><font style="font-size: 12pt"><font face="EYInterstate Light, serif"> The state has a rail network of 1187 km. The Bilaspur division of Railway has the highest freight loading capacity in the country. This division of Indian Railways only generates 1/6th of total Indian Railway&rsquo;s revenues. </font></font></span></p>\r\n\r\n<p align="justify" class="western" style="margin-bottom: 0cm; line-height: 0.54cm">&nbsp;</p>\r\n\r\n<p align="justify" class="western" style="margin-bottom: 0cm; line-height: 0.54cm"><font face="EYInterstate Light, serif"><font style="font-size: 14pt"><span lang="en-US"><b>Air:</b></span></font></font><span style="display: inline-block; border: none; padding: 0cm"><font style="font-size: 12pt"><font face="EYInterstate Light, serif"> The major airport in the state is the modern Terminal in naya Raipur. The airport will soon commence International operations from Raipur. There are two more airports proposed at Raigarh &amp; Bilaspur. The state also has 6 airstrips at various parts of the state. Cargo complex is under development by AAI.</font></font></span></p>\r\n\r\n<p align="justify" class="western" style="margin-bottom: 0cm; line-height: 0.54cm">&nbsp;</p>\r\n\r\n<p align="justify" class="western" style="margin-bottom: 0cm; line-height: 0.54cm"><font face="EYInterstate Light, serif"><font style="font-size: 14pt"><span lang="en-US"><b>Water:</b></span></font></font><span style="display: inline-block; border: none; padding: 0cm"><font style="font-size: 12pt"><font face="EYInterstate Light, serif"> The nearest port to the state is Vizag port in Andhra Pradesh which is at a distance of 548 km from Raipur. Container Corporation of India (CONCOR) is developing a Logistics Hub over 100 acres in Naya Raipur.</font></font></span></p>\r\n\r\n<p align="justify" class="western" style="margin-bottom: 0cm; line-height: 0.54cm"><font face="EYInterstate Light, serif"><font style="font-size: 14pt"><span lang="en-US"><b>Major Attraction for Electronics, IT &amp; ITeS sector in Chhattisgarh:</b></span></font></font></p>\r\n\r\n<p class="western" style="margin-bottom: 0cm; line-height: 0.54cm; text-align: center;">&nbsp;</p>\r\n\r\n<p style="text-align: center;">&nbsp;</p>\r\n\r\n<table cellpadding="7" cellspacing="1" width="628">\r\n	<colgroup>\r\n		<col style="text-align: center;" width="611" />\r\n	</colgroup>\r\n	<tbody>\r\n		<tr>\r\n			<td bgcolor="#f2f2f2" height="11" style="border-top: 1.50pt double #00000a; border-bottom: none; border-left: 1.50pt double #00000a; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.22cm; padding-right: 0cm" valign="top" width="611">\r\n			<p class="western" style="text-align: center;"><span style="display: inline-block; border: none; padding: 0cm"><font style="font-size: 12pt"><font face="EYInterstate Light, serif">CHiPS, a dedicated Agency for Electronics, IT &amp; ITeS sector in C.G</font></font></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td bgcolor="#d9d9d9" height="14" style="border-top: none; border-bottom: none; border-left: 1.50pt double #00000a; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.22cm; padding-right: 0cm" valign="top" width="611">\r\n			<p class="western" style="text-align: center;"><span style="display: inline-block; border: none; padding: 0cm"><font style="font-size: 12pt"><font face="EYInterstate Light, serif">Dedicated Electronics, IT &amp; ITeS Investment Policy 2014-19</font></font></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td bgcolor="#bfbfbf" height="13" style="border-top: none; border-bottom: none; border-left: 1.50pt double #00000a; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.22cm; padding-right: 0cm" valign="top" width="611">\r\n			<p class="western" style="text-align: center;"><span style="display: inline-block; border: none; padding: 0cm"><font style="font-size: 12pt"><font face="EYInterstate Light, serif">Proposed IT investment Region for Naya Raipur</font></font></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td bgcolor="#a6a6a6" height="14" style="border-top: none; border-bottom: none; border-left: 1.50pt double #00000a; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.22cm; padding-right: 0cm" valign="top" width="611">\r\n			<p class="western" style="text-align: center;"><span style="display: inline-block; border: none; padding: 0cm"><font style="font-size: 12pt"><font face="EYInterstate Light, serif">Notified IT Areas for developing Naya Raipur as an IT Hub in India</font></font></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td bgcolor="#808080" height="13" style="border-top: none; border-bottom: none; border-left: 1.50pt double #00000a; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.22cm; padding-right: 0cm" valign="top" width="611">\r\n			<p class="western" style="text-align: center;"><span style="display: inline-block; border: none; padding: 0cm"><font style="font-size: 12pt"><font face="EYInterstate Light, serif">Reduced land &amp; Construction cost</font></font></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td bgcolor="#595959" height="13" style="border-top: none; border-bottom: 1.50pt double #00000a; border-left: 1.50pt double #00000a; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.22cm; padding-right: 0cm" valign="top" width="611">\r\n			<p class="western" style="text-align: center;"><span style="display: inline-block; border: none; padding: 0cm"><font style="font-size: 12pt"><font face="EYInterstate Light, serif">Excellent talent pool &amp; Education infrastructure</font></font></span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p align="justify" class="western" style="margin-bottom: 0cm; line-height: 0.54cm">&nbsp;</p>\r\n', NULL, NULL, NULL, NULL, 4, 1, '1');
INSERT INTO `bo_page_info` (`page_id`, `page_stub`, `page_name`, `page_name1`, `page_name2`, `page_name3`, `page_name4`, `page_keywords`, `page_desc`, `is_direct_link`, `link_address`, `page_content`, `page_content1`, `page_content2`, `page_content3`, `page_content4`, `parent_id`, `pcat_id`, `is_active`) VALUES
(13, 'single-window-system', 'Single Window System', NULL, NULL, NULL, NULL, ' Single Window System', 'About Single Window System', 'Y', NULL, '\r\n<p>About Single Window System</p>\r\n', NULL, NULL, NULL, NULL, 8, 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `bo_roles`
--

CREATE TABLE IF NOT EXISTS `bo_roles` (
  `role_id` int(10) unsigned NOT NULL,
  `role_name` varchar(64) NOT NULL,
  `rele_desc` tinytext NOT NULL,
  `is_role_active` enum('N','Y') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bo_roles`
--

INSERT INTO `bo_roles` (`role_id`, `role_name`, `rele_desc`, `is_role_active`) VALUES
(1, 'Administrator', '', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `bo_users`
--

CREATE TABLE IF NOT EXISTS `bo_users` (
  `uid` int(10) unsigned NOT NULL COMMENT 'user id',
  `full_name` varchar(60) NOT NULL COMMENT 'Full Name',
  `email` varchar(128) NOT NULL COMMENT 'E-mail',
  `mobile` varchar(16) DEFAULT NULL,
  `password` varchar(128) NOT NULL COMMENT 'password',
  `created_datetime` datetime NOT NULL COMMENT 'created on',
  `role_id` int(10) unsigned NOT NULL COMMENT 'Role',
  `activation_code` varchar(16) DEFAULT NULL,
  `is_active` char(1) NOT NULL DEFAULT '1' COMMENT 'Is Active'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bo_users`
--

INSERT INTO `bo_users` (`uid`, `full_name`, `email`, `mobile`, `password`, `created_datetime`, `role_id`, `activation_code`, `is_active`) VALUES
(1, 'Admin', 'admin@localhost.com', NULL, 'd9609f0c7ff8bee460d1f4542cc6c361f4c589b6', '2014-06-23 17:56:45', 1, NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `bo_user_role_mapping`
--

CREATE TABLE IF NOT EXISTS `bo_user_role_mapping` (
  `mapping_id` int(10) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `department_id` int(11) unsigned NOT NULL,
  `lr_id` int(10) unsigned DEFAULT NULL,
  `created_time` datetime NOT NULL,
  `modified_time` datetime DEFAULT NULL,
  `is_mapping_active` enum('N','Y') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `map_roles_pages`
--

CREATE TABLE IF NOT EXISTS `map_roles_pages` (
  `map_id` int(11) NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `parent_page_id` int(11) NOT NULL,
  `is_active` char(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bo_accesss_log`
--
ALTER TABLE `bo_accesss_log`
  ADD PRIMARY KEY (`log_id`), ADD UNIQUE KEY `unique_key` (`unique_key`), ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `bo_applications`
--
ALTER TABLE `bo_applications`
  ADD PRIMARY KEY (`application_id`), ADD KEY `dept_id` (`dept_id`);

--
-- Indexes for table `bo_applications_fields_mapping`
--
ALTER TABLE `bo_applications_fields_mapping`
  ADD PRIMARY KEY (`app_mapping_id`), ADD KEY `application_id` (`application_id`), ADD KEY `field_id` (`field_id`);

--
-- Indexes for table `bo_applications_submittions`
--
ALTER TABLE `bo_applications_submittions`
  ADD PRIMARY KEY (`submission_id`), ADD KEY `application_id` (`application_id`), ADD KEY `field_id` (`field_id`), ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `bo_departments`
--
ALTER TABLE `bo_departments`
  ADD PRIMARY KEY (`dept_id`), ADD UNIQUE KEY `dept_order` (`dept_order`);

--
-- Indexes for table `bo_filelds`
--
ALTER TABLE `bo_filelds`
  ADD PRIMARY KEY (`field_id`);

--
-- Indexes for table `bo_forgot_password`
--
ALTER TABLE `bo_forgot_password`
  ADD PRIMARY KEY (`fp_id`), ADD KEY `uid` (`uid`);

--
-- Indexes for table `bo_landregion`
--
ALTER TABLE `bo_landregion`
  ADD PRIMARY KEY (`lr_id`);

--
-- Indexes for table `bo_languages`
--
ALTER TABLE `bo_languages`
  ADD PRIMARY KEY (`lang_id`);

--
-- Indexes for table `bo_login_access_log`
--
ALTER TABLE `bo_login_access_log`
  ADD PRIMARY KEY (`log_id`), ADD KEY `uid` (`uid`);

--
-- Indexes for table `bo_manage_accordion_block`
--
ALTER TABLE `bo_manage_accordion_block`
  ADD PRIMARY KEY (`acc_id`);

--
-- Indexes for table `bo_manage_accordion_block2`
--
ALTER TABLE `bo_manage_accordion_block2`
  ADD PRIMARY KEY (`inv_id`);

--
-- Indexes for table `bo_manage_contact`
--
ALTER TABLE `bo_manage_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bo_manage_homepage`
--
ALTER TABLE `bo_manage_homepage`
  ADD PRIMARY KEY (`content_id`), ADD KEY `updated_by` (`updated_by`);

--
-- Indexes for table `bo_manage_homepage_slider`
--
ALTER TABLE `bo_manage_homepage_slider`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `bo_manage_services_block`
--
ALTER TABLE `bo_manage_services_block`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bo_map_roles_pages`
--
ALTER TABLE `bo_map_roles_pages`
  ADD PRIMARY KEY (`map_id`), ADD UNIQUE KEY `role_id_cat_id_is_active` (`role_id`,`parent_page_id`,`is_active`), ADD KEY `role_id` (`role_id`), ADD KEY `cat_id` (`parent_page_id`);

--
-- Indexes for table `bo_page_categories`
--
ALTER TABLE `bo_page_categories`
  ADD PRIMARY KEY (`pcat_id`);

--
-- Indexes for table `bo_page_category_relation`
--
ALTER TABLE `bo_page_category_relation`
  ADD PRIMARY KEY (`relation_id`), ADD UNIQUE KEY `page_id_cat_id_page_order_is_active` (`page_id`,`cat_id`,`page_order`,`is_active`);

--
-- Indexes for table `bo_page_info`
--
ALTER TABLE `bo_page_info`
  ADD PRIMARY KEY (`page_id`), ADD UNIQUE KEY `page_stub` (`page_stub`), ADD KEY `pcat_id` (`pcat_id`);

--
-- Indexes for table `bo_roles`
--
ALTER TABLE `bo_roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `bo_users`
--
ALTER TABLE `bo_users`
  ADD PRIMARY KEY (`uid`), ADD UNIQUE KEY `email` (`email`), ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `bo_user_role_mapping`
--
ALTER TABLE `bo_user_role_mapping`
  ADD PRIMARY KEY (`mapping_id`), ADD KEY `role_id` (`role_id`), ADD KEY `department_id` (`department_id`), ADD KEY `lr_id` (`lr_id`);

--
-- Indexes for table `map_roles_pages`
--
ALTER TABLE `map_roles_pages`
  ADD PRIMARY KEY (`map_id`), ADD UNIQUE KEY `role_id_cat_id_is_active` (`role_id`,`parent_page_id`,`is_active`), ADD KEY `role_id` (`role_id`), ADD KEY `cat_id` (`parent_page_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bo_accesss_log`
--
ALTER TABLE `bo_accesss_log`
  MODIFY `log_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bo_applications`
--
ALTER TABLE `bo_applications`
  MODIFY `application_id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bo_applications_fields_mapping`
--
ALTER TABLE `bo_applications_fields_mapping`
  MODIFY `app_mapping_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bo_applications_submittions`
--
ALTER TABLE `bo_applications_submittions`
  MODIFY `submission_id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bo_departments`
--
ALTER TABLE `bo_departments`
  MODIFY `dept_id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `bo_filelds`
--
ALTER TABLE `bo_filelds`
  MODIFY `field_id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bo_forgot_password`
--
ALTER TABLE `bo_forgot_password`
  MODIFY `fp_id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bo_landregion`
--
ALTER TABLE `bo_landregion`
  MODIFY `lr_id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bo_languages`
--
ALTER TABLE `bo_languages`
  MODIFY `lang_id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bo_login_access_log`
--
ALTER TABLE `bo_login_access_log`
  MODIFY `log_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `bo_manage_accordion_block`
--
ALTER TABLE `bo_manage_accordion_block`
  MODIFY `acc_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `bo_manage_accordion_block2`
--
ALTER TABLE `bo_manage_accordion_block2`
  MODIFY `inv_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `bo_manage_contact`
--
ALTER TABLE `bo_manage_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bo_manage_homepage`
--
ALTER TABLE `bo_manage_homepage`
  MODIFY `content_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `bo_manage_homepage_slider`
--
ALTER TABLE `bo_manage_homepage_slider`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `bo_manage_services_block`
--
ALTER TABLE `bo_manage_services_block`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bo_map_roles_pages`
--
ALTER TABLE `bo_map_roles_pages`
  MODIFY `map_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bo_page_categories`
--
ALTER TABLE `bo_page_categories`
  MODIFY `pcat_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Cat ID',AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bo_page_category_relation`
--
ALTER TABLE `bo_page_category_relation`
  MODIFY `relation_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `bo_page_info`
--
ALTER TABLE `bo_page_info`
  MODIFY `page_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Page ID',AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `bo_roles`
--
ALTER TABLE `bo_roles`
  MODIFY `role_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bo_users`
--
ALTER TABLE `bo_users`
  MODIFY `uid` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'user id',AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bo_user_role_mapping`
--
ALTER TABLE `bo_user_role_mapping`
  MODIFY `mapping_id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `map_roles_pages`
--
ALTER TABLE `map_roles_pages`
  MODIFY `map_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bo_applications`
--
ALTER TABLE `bo_applications`
ADD CONSTRAINT `bo_applications_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `bo_departments` (`dept_id`);

--
-- Constraints for table `bo_applications_fields_mapping`
--
ALTER TABLE `bo_applications_fields_mapping`
ADD CONSTRAINT `bo_applications_fields_mapping_ibfk_1` FOREIGN KEY (`application_id`) REFERENCES `bo_applications` (`application_id`),
ADD CONSTRAINT `bo_applications_fields_mapping_ibfk_2` FOREIGN KEY (`field_id`) REFERENCES `bo_filelds` (`field_id`);

--
-- Constraints for table `bo_applications_submittions`
--
ALTER TABLE `bo_applications_submittions`
ADD CONSTRAINT `bo_applications_submittions_ibfk_1` FOREIGN KEY (`application_id`) REFERENCES `bo_applications` (`application_id`),
ADD CONSTRAINT `bo_applications_submittions_ibfk_2` FOREIGN KEY (`field_id`) REFERENCES `bo_filelds` (`field_id`);

--
-- Constraints for table `bo_forgot_password`
--
ALTER TABLE `bo_forgot_password`
ADD CONSTRAINT `bo_forgot_password_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `bo_users` (`uid`);

--
-- Constraints for table `bo_login_access_log`
--
ALTER TABLE `bo_login_access_log`
ADD CONSTRAINT `login_access_log_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `bo_users` (`uid`);

--
-- Constraints for table `bo_manage_homepage`
--
ALTER TABLE `bo_manage_homepage`
ADD CONSTRAINT `bo_manage_homepage_ibfk_1` FOREIGN KEY (`updated_by`) REFERENCES `bo_users` (`uid`);

--
-- Constraints for table `bo_page_info`
--
ALTER TABLE `bo_page_info`
ADD CONSTRAINT `bo_page_info_ibfk_2` FOREIGN KEY (`pcat_id`) REFERENCES `bo_page_categories` (`pcat_id`) ON UPDATE CASCADE;

--
-- Constraints for table `bo_users`
--
ALTER TABLE `bo_users`
ADD CONSTRAINT `bo_users_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `bo_roles` (`role_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `bo_user_role_mapping`
--
ALTER TABLE `bo_user_role_mapping`
ADD CONSTRAINT `bo_user_role_mapping_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `bo_roles` (`role_id`),
ADD CONSTRAINT `bo_user_role_mapping_ibfk_2` FOREIGN KEY (`department_id`) REFERENCES `bo_departments` (`dept_id`),
ADD CONSTRAINT `bo_user_role_mapping_ibfk_3` FOREIGN KEY (`lr_id`) REFERENCES `bo_landregion` (`lr_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
