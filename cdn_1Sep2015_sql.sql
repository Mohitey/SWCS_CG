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
-- Table structure for table `cdn_documents`
--

CREATE TABLE IF NOT EXISTS `cdn_documents` (
  `doc_id` int(10) unsigned NOT NULL,
  `parent_doc_id` int(11) unsigned DEFAULT NULL,
  `document_name` varchar(128) NOT NULL,
  `document` blob NOT NULL,
  `document_version` float NOT NULL DEFAULT '1',
  `document_mime_type` enum('image/png','image/jpeg','image/jpg','image/gif','image/gif','application/pdf','text/html','application/msword','application/excel','text/plain','text/javascript','text/css','application/powerpoint','application/mspowerpoint','application/octet-stream') NOT NULL DEFAULT 'application/octet-stream',
  `is_document_active` enum('N','Y') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cdn_documents_metainfo`
--

CREATE TABLE IF NOT EXISTS `cdn_documents_metainfo` (
  `info_id` int(10) unsigned NOT NULL,
  `doc_id` int(10) unsigned NOT NULL,
  `uploaded_by` int(10) unsigned NOT NULL,
  `department_id` int(10) unsigned NOT NULL,
  `application_id` int(10) unsigned NOT NULL,
  `uploaded_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cdn_documents`
--
ALTER TABLE `cdn_documents`
  ADD PRIMARY KEY (`doc_id`), ADD KEY `parent_doc_id` (`parent_doc_id`);

--
-- Indexes for table `cdn_documents_metainfo`
--
ALTER TABLE `cdn_documents_metainfo`
  ADD PRIMARY KEY (`info_id`), ADD KEY `doc_id` (`doc_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cdn_documents`
--
ALTER TABLE `cdn_documents`
  MODIFY `doc_id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cdn_documents_metainfo`
--
ALTER TABLE `cdn_documents_metainfo`
  MODIFY `info_id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cdn_documents_metainfo`
--
ALTER TABLE `cdn_documents_metainfo`
ADD CONSTRAINT `cdn_documents_metainfo_ibfk_1` FOREIGN KEY (`doc_id`) REFERENCES `cdn_documents` (`doc_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
