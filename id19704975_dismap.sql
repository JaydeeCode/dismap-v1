-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 26, 2022 at 07:18 AM
-- Server version: 10.5.16-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id19704975_dismap`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `fullname` varchar(101) NOT NULL,
  `username` varchar(101) NOT NULL,
  `password` varchar(150) NOT NULL,
  `role_type` varchar(50) NOT NULL,
  `role_no` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `fullname`, `username`, `password`, `role_type`, `role_no`) VALUES
(6, 'Cezar John Encisa', 'cjencisa', '123', 'Admin', 1),
(7, 'Jiro Delfino', 'jiro', 'P@ssw0rd_123', 'Admin', 1),
(8, 'Rose Capistrano', 'Rose', '123', 'Admin', 1),
(9, 'Queenie Ann Sopot', 'Ann', 'P@ssw0rd_123', 'Admin', 1),
(10, 'Christian Aris Guevarra', 'Aris', '123', 'Mdrrmo Head', 1),
(11, 'Barangay Agaas', 'agaas', 'agaas123', 'Barangay_Agaas', 0),
(12, 'Barangay Antolon', 'antolon', 'antolon123', 'Barangay_Antolon', 0),
(13, 'Barangay Bahay', 'bahay', 'bahay123', 'Barangay_Bahay', 0),
(14, 'Barangay Cabacongan', 'cabacongan', 'cabacongan123', 'Barangay_Cabacongan', 0),
(15, 'Barangay Canatuan', 'canatuan', 'canatuan123', 'Barangay_Canatuan', 0),
(16, 'Barangay Colongcogong', 'colongcogong', 'colongcogong123', 'Barangay_Colongcogong', 0),
(17, 'Barangay Gibgos', 'gibgos', 'gibgos123', 'Barangay_Gibgos', 0),
(18, 'Barangay Guijalo', 'guijalo', 'guijalo123', 'Barangay_Guijalo', 0),
(19, 'Barangay Hanopol', 'hanopol', 'hanopol123', 'Barangay_Hanopol', 0),
(20, 'Barangay Haponan', 'haponan', 'haponan123', 'Barangay_Haponan', 0),
(21, 'Barangay Ilawod', 'ilawod', 'ilawod123', 'Barangay_Ilawod', 0),
(22, 'Barangay Lubas', 'lubas', 'Lubas123', 'Barangay_Lubas', 0),
(23, 'Barangay Malabog', 'malabog', 'malabog123', 'Barangay_Malabog', 0),
(24, 'Barangay Mandiclum', 'mandiclum', 'mandiclum123', 'Barangay_Mandiclum', 0),
(25, 'Barangay Maqueda', 'maqueda', 'maqueda123', 'Barangay_Maqueda', 0),
(26, 'Barangay Pili-Centro', 'pili', 'pili123', 'Barangay_Pili-Centro', 0),
(27, 'Barangay San Roque', 'san roque', 'sanroque123', 'Barangay_San Roque', 0),
(28, 'Barangay San Vicente', 'san vicente', 'sanvicente123', 'Barangay_San Vicente', 0),
(29, 'Barangay Tabgon', 'tabgon', 'tabgon123', 'Barangay_Tabgon', 0),
(30, 'Barangay Tabiguian', 'tabiguian', 'tabiguian123', 'Barangay_Tabiguian', 0),
(32, 'Salvador Briones III', 'admin', '123badong', 'Admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `barangay_data`
--

CREATE TABLE `barangay_data` (
  `id` int(10) NOT NULL,
  `barangay_name` varchar(50) NOT NULL,
  `zone` varchar(15) NOT NULL,
  `male` int(11) NOT NULL,
  `female` int(11) NOT NULL,
  `youth` int(11) NOT NULL,
  `senior_citizen` int(11) NOT NULL,
  `pregnant` int(11) NOT NULL,
  `pwd` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `no_evacuations` int(11) NOT NULL,
  `created_date` timestamp NULL DEFAULT current_timestamp(),
  `modified_date` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barangay_data`
--

INSERT INTO `barangay_data` (`id`, `barangay_name`, `zone`, `male`, `female`, `youth`, `senior_citizen`, `pregnant`, `pwd`, `children`, `no_evacuations`, `created_date`, `modified_date`) VALUES
(11, 'Antolon', 'Zone 1', 56, 44, 23, 21, 8, 9, 67, 0, '2022-11-06 15:41:26', NULL),
(15, 'Canatuan', 'Zone 1', 23, 32, 23, 23, 2, 7, 26, 0, '2022-11-06 15:41:26', NULL),
(29, 'Maqueda', 'Zone 1', 23, 32, 23, 32, 23, 32, 23, 0, '2022-11-06 15:41:26', NULL),
(36, 'Tabiguian', 'Zone 1', 23, 32, 23, 32, 5, 3, 54, 0, '2022-11-06 15:41:26', NULL),
(40, 'Antolon', 'Zone 2', 32, 43, 23, 25, 4, 9, 28, 0, '2022-11-06 15:41:26', NULL),
(41, 'Antolon', 'Zone 3', 32, 38, 27, 6, 9, 11, 34, 0, '2022-11-06 15:41:26', NULL),
(42, 'Antolon', 'Zone 4', 43, 34, 43, 34, 12, 9, 34, 0, '2022-11-06 15:41:26', NULL),
(43, 'Bahay', 'Zone 2', 42, 50, 12, 10, 5, 3, 24, 0, '2022-11-06 15:41:26', NULL),
(44, 'Cabacongan', 'Zone 1', 43, 32, 23, 23, 32, 23, 32, 0, '2022-11-06 15:41:26', NULL),
(46, 'Colongcogong', 'Zone 1', 32, 23, 32, 23, 2, 3, 32, 0, '2022-11-06 15:41:26', NULL),
(47, 'Gibgos', 'Zone 5', 23, 32, 23, 2, 23, 32, 23, 0, '2022-11-06 15:41:26', NULL),
(48, 'Guijalo', 'Zone 1', 32, 23, 32, 23, 2, 3, 29, 0, '2022-11-06 15:41:26', NULL),
(49, 'Hanopol', 'Zone 1', 23, 32, 23, 32, 32, 23, 3, 0, '2022-11-06 15:41:26', NULL),
(52, 'Lubas', 'Zone 1', 23, 24, 21, 3, 2, 3, 23, 0, '2022-11-06 15:41:26', NULL),
(53, 'Pili-Centro', 'Zone 1', 23, 24, 32, 23, 32, 3, 4, 0, '2022-11-06 15:41:26', NULL),
(54, 'San Roque', 'Zone 1', 23, 32, 23, 32, 4, 3, 23, 0, '2022-11-06 15:41:26', NULL),
(57, 'Tabgon', 'Zone 1', 43, 53, 23, 43, 3, 5, 44, 0, '2022-11-06 15:41:26', NULL),
(58, 'Tabiguian', 'Zone 2', 23, 32, 23, 32, 5, 3, 32, 0, '2022-11-06 15:41:26', NULL),
(62, 'Haponan', 'Zone 1', 45, 54, 29, 31, 9, 11, 41, 0, '2022-11-06 15:41:26', NULL),
(63, 'Mandiclum', 'Zone 1', 12, 12, 12, 12, 21, 2, 12, 1, '2022-11-06 15:41:26', NULL),
(68, 'San Vicente', 'Zone 1', 51, 23, 43, 3, 3, 5, 32, 0, '2022-11-06 15:41:26', NULL),
(69, 'Lubas', 'Zone 2', 33, 25, 12, 27, 3, 5, 46, 0, '2022-11-06 15:41:26', NULL),
(70, 'Malabog', 'Zone 1', 34, 53, 23, 43, 4, 3, 44, 0, '2022-11-06 15:41:26', NULL),
(71, 'Agaas', 'Zone 1', 53, 44, 30, 20, 6, 4, 21, 0, '2022-11-06 15:41:26', NULL),
(72, 'Haponan', 'Zone 2', 45, 42, 31, 32, 7, 8, 35, 0, '2022-11-06 15:41:26', NULL),
(73, 'Bahay', 'Zone 1', 52, 40, 60, 20, 30, 10, 38, 0, '2022-11-06 15:41:26', NULL),
(74, 'Cabacongan', 'Zone 2', 50, 60, 21, 24, 15, 9, 20, 0, '2022-11-06 15:41:26', NULL),
(75, 'Bahay', 'Zone 3', 45, 45, 30, 15, 10, 8, 15, 0, '2022-11-06 15:41:26', NULL),
(76, 'Agaas', 'Zone 2', 50, 50, 30, 23, 11, 6, 23, 0, '2022-11-06 15:41:26', NULL),
(77, 'Cabacongan', 'Zone 3', 46, 55, 20, 20, 10, 6, 21, 0, '2022-11-06 15:41:26', NULL),
(78, 'Bahay', 'Zone 4', 50, 45, 26, 18, 12, 6, 19, 0, '2022-11-06 15:41:26', NULL),
(79, 'Agaas', 'Zone 3', 49, 50, 25, 23, 12, 3, 23, 0, '2022-11-06 15:41:26', NULL),
(80, 'Cabacongan', 'Zone 4', 50, 50, 30, 20, 10, 8, 12, 0, '2022-11-06 15:41:26', NULL),
(81, 'Agaas', 'Zone 4', 46, 43, 26, 22, 9, 4, 24, 0, '2022-11-06 15:41:26', NULL),
(83, 'Cabacongan', 'Zone 5', 55, 50, 20, 30, 12, 6, 25, 0, '2022-11-06 15:41:26', NULL),
(84, 'Bahay', 'Zone 5', 35, 40, 26, 18, 17, 5, 30, 0, '2022-11-06 15:41:26', NULL),
(85, 'Antolon', 'Zone 5', 32, 34, 23, 22, 2, 6, 23, 0, '2022-11-06 15:41:26', NULL),
(86, 'Canatuan', 'Zone 2', 33, 23, 25, 21, 9, 12, 26, 1, '2022-11-06 15:41:26', NULL),
(87, 'Canatuan', 'Zone 3', 33, 44, 23, 20, 7, 12, 25, 0, '2022-11-06 15:41:26', NULL),
(88, 'Canatuan', 'Zone 4', 33, 43, 23, 32, 23, 7, 28, 0, '2022-11-06 15:41:26', NULL),
(89, 'Canatuan', 'Zone 5', 36, 32, 24, 27, 9, 5, 28, 0, '2022-11-06 15:41:26', NULL),
(90, 'Colongcogong', 'Zone 2', 23, 33, 31, 21, 9, 6, 25, 1, '2022-11-06 15:41:26', NULL),
(91, 'Colongcogong', 'Zone 3', 43, 50, 29, 26, 7, 12, 27, 0, '2022-11-06 15:41:26', NULL),
(92, 'Colongcogong', 'Zone 4', 44, 55, 31, 23, 8, 2, 31, 0, '2022-11-06 15:41:26', NULL),
(93, 'Colongcogong', 'Zone 5', 45, 42, 31, 21, 9, 2, 27, 0, '2022-11-06 15:41:26', NULL),
(94, 'Gibgos', 'Zone 2', 23, 32, 32, 25, 3, 7, 26, 0, '2022-11-06 15:41:26', NULL),
(95, 'Gibgos', 'Zone 3', 56, 52, 32, 20, 5, 3, 32, 1, '2022-11-06 15:41:26', NULL),
(96, 'Gibgos', 'Zone 4', 54, 34, 62, 32, 6, 3, 38, 0, '2022-11-06 15:41:26', NULL),
(97, 'Gibgos', 'Zone 5', 43, 34, 23, 21, 6, 3, 33, 0, '2022-11-06 15:41:26', NULL),
(98, 'Guijalo', 'Zone 2', 33, 43, 23, 44, 9, 7, 23, 0, '2022-11-06 15:41:26', NULL),
(99, 'Guijalo', 'Zone 3', 54, 34, 23, 31, 8, 4, 44, 0, '2022-11-06 15:41:26', NULL),
(100, 'Guijalo', 'Zone 4', 43, 34, 41, 23, 6, 3, 23, 0, '2022-11-06 15:41:26', NULL),
(101, 'Guijalo', 'Zone 5', 53, 45, 49, 34, 3, 6, 36, 0, '2022-11-06 15:41:26', NULL),
(102, 'Hanopol', 'Zone 2', 32, 34, 23, 32, 5, 2, 33, 0, '2022-11-06 15:41:26', NULL),
(103, 'Hanopol', 'Zone 3', 42, 41, 23, 33, 2, 5, 31, 0, '2022-11-06 15:41:26', NULL),
(104, 'Hanopol', 'Zone 4', 43, 41, 23, 31, 8, 4, 33, 0, '2022-11-06 15:41:26', NULL),
(105, 'Hanopol', 'Zone 5', 43, 41, 29, 31, 2, 7, 35, 0, '2022-11-06 15:41:26', NULL),
(106, 'Haponan', 'Zone 3', 45, 40, 27, 38, 4, 8, 35, 1, '2022-11-06 15:41:26', NULL),
(107, 'Haponan', 'Zone 4', 44, 10, 21, 35, 3, 2, 38, 0, '2022-11-06 15:41:26', NULL),
(108, 'Haponan', 'Zone 5', 55, 63, 24, 37, 15, 3, 45, 0, '2022-11-06 15:41:26', NULL),
(111, 'Ilawod', 'Zone 1', 43, 34, 25, 41, 3, 6, 23, 0, '2022-11-06 15:41:26', NULL),
(112, 'Ilawod', 'Zone 2', 43, 53, 24, 35, 5, 6, 24, 0, '2022-11-06 15:41:26', NULL),
(113, 'Ilawod', 'Zone 3', 23, 43, 24, 23, 4, 5, 37, 0, '2022-11-06 15:41:26', NULL),
(114, 'Ilawod', 'Zone 4', 45, 53, 43, 12, 4, 3, 34, 0, '2022-11-06 15:41:26', NULL),
(116, 'Lubas', 'Zone 3', 42, 42, 23, 32, 4, 2, 45, 0, '2022-11-06 15:41:26', NULL),
(117, 'Lubas', 'Zone 4', 43, 34, 53, 23, 4, 5, 34, 0, '2022-11-06 15:41:26', NULL),
(118, 'Lubas', 'Zone 5', 42, 45, 42, 23, 4, 4, 53, 0, '2022-11-06 15:41:26', NULL),
(119, 'Malabog', 'Zone 2', 34, 42, 23, 42, 2, 4, 32, 0, '2022-11-06 15:41:26', NULL),
(120, 'Malabog', 'Zone 3', 42, 23, 42, 1, 3, 1, 32, 0, '2022-11-06 15:41:26', NULL),
(121, 'Malabog', 'Zone 4', 32, 23, 42, 4, 1, 3, 43, 0, '2022-11-06 15:41:26', NULL),
(122, 'Malabog', 'Zone 5', 23, 44, 24, 42, 2, 4, 43, 0, '2022-11-06 15:41:26', NULL),
(123, 'Mandiclum', 'Zone 2', 32, 23, 42, 43, 4, 3, 23, 0, '2022-11-06 15:41:26', NULL),
(124, 'Mandiclum', 'Zone 3', 44, 24, 42, 24, 2, 4, 24, 0, '2022-11-06 15:41:26', NULL),
(125, 'Mandiclum', 'Zone 4', 43, 55, 32, 32, 23, 5, 34, 0, '2022-11-06 15:41:26', NULL),
(126, 'Mandiclum', 'Zone 5', 43, 24, 52, 34, 2, 4, 23, 0, '2022-11-06 15:41:26', NULL),
(127, 'Maqueda', 'Zone 2', 43, 53, 14, 43, 2, 4, 43, 0, '2022-11-06 15:41:26', NULL),
(128, 'Maqueda', 'Zone 3', 43, 23, 42, 21, 3, 3, 34, 0, '2022-11-06 15:41:26', NULL),
(129, 'Maqueda', 'Zone 4', 43, 34, 23, 43, 2, 4, 23, 0, '2022-11-06 15:41:26', NULL),
(130, 'Maqueda', 'Zone 5', 43, 23, 32, 23, 4, 4, 42, 0, '2022-11-06 15:41:26', NULL),
(131, 'Pili-Centro', 'Zone 2', 23, 42, 23, 43, 4, 2, 44, 0, '2022-11-06 15:41:26', NULL),
(132, 'Pili-Centro', 'Zone 2', 34, 34, 24, 22, 4, 4, 2, 0, '2022-11-06 15:41:26', NULL),
(133, 'Pili-Centro', 'Zone 4', 34, 34, 43, 53, 2, 4, 53, 0, '2022-11-06 15:41:26', NULL),
(134, 'Pili-Centro', 'Zone 5', 43, 34, 24, 53, 24, 3, 5, 0, '2022-11-06 15:41:26', NULL),
(135, 'San Roque', 'Zone 2', 43, 23, 43, 23, 4, 5, 43, 0, '2022-11-06 15:41:26', NULL),
(136, 'San Roque', 'Zone 3', 43, 34, 23, 43, 2, 5, 44, 0, '2022-11-06 15:41:26', NULL),
(137, 'San Roque', 'Zone 4', 43, 24, 53, 22, 32, 4, 5, 0, '2022-11-06 15:41:26', NULL),
(139, 'San Vicente', 'Zone 2', 34, 32, 41, 12, 4, 5, 39, 0, '2022-11-06 15:41:26', NULL),
(140, 'San Vicente', 'Zone 3', 23, 43, 34, 23, 4, 2, 52, 0, '2022-11-06 15:41:26', NULL),
(141, 'San Vicente', 'Zone 4', 43, 45, 32, 12, 4, 5, 45, 0, '2022-11-06 15:41:26', NULL),
(142, 'San Vicente', 'Zone 5', 55, 44, 23, 43, 2, 4, 34, 0, '2022-11-06 15:41:26', NULL),
(143, 'Tabgon', 'Zone 2', 43, 53, 23, 32, 3, 5, 36, 1, '2022-11-06 15:41:26', NULL),
(144, 'Tabgon', 'Zone 3', 54, 24, 53, 32, 5, 3, 44, 0, '2022-11-06 15:41:26', NULL),
(145, 'Tabgon', 'Zone 4', 35, 33, 23, 32, 4, 5, 41, 0, '2022-11-06 15:41:26', NULL),
(146, 'Tabgon', 'Zone 5', 43, 53, 34, 34, 5, 3, 53, 0, '2022-11-06 15:41:26', NULL),
(147, 'Tabiguian', 'Zone 3', 43, 34, 43, 23, 4, 2, 43, 0, '2022-11-06 15:41:26', NULL),
(148, 'Tabiguian', 'Zone 4', 43, 34, 23, 42, 13, 5, 33, 0, '2022-11-06 15:41:26', NULL),
(158, 'Agaas', 'Zone 5', 22, 32, 23, 23, 23, 2, 3, 0, '2022-11-07 03:38:41', '2022-11-07 03:38:59'),
(159, 'Agaas', 'Zone 1', 2, 1, 1, 2, 0, 0, 0, 0, '2022-11-23 01:27:33', NULL),
(160, 'Agaas', 'Zone 1', 5, 5, 1, 0, 7, 7, 7, 7, '2022-11-23 01:28:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `disaster_records`
--

CREATE TABLE `disaster_records` (
  `id` int(11) NOT NULL,
  `barangay_name` varchar(100) NOT NULL,
  `zone` varchar(10) NOT NULL,
  `disaster` varchar(30) NOT NULL,
  `number_map` varchar(5) NOT NULL,
  `population_at_risk` varchar(1000) NOT NULL,
  `recommendation` varchar(1000) NOT NULL,
  `remarks` varchar(1000) NOT NULL,
  `created_date` timestamp NULL DEFAULT current_timestamp(),
  `modified_date` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `disaster_records`
--

INSERT INTO `disaster_records` (`id`, `barangay_name`, `zone`, `disaster`, `number_map`, `population_at_risk`, `recommendation`, `remarks`, `created_date`, `modified_date`) VALUES
(5, 'Tabgon', 'zone4', 'floods', '2', ' aoi o asoh oa cn o ahsc aosh co', ' oshd vs dvn osdn vwo d', ' nsodn vown down dov', '2022-11-04 09:29:30', '2022-11-05 04:24:58'),
(6, 'Canatuan', 'Zone 2', 'landslide', '1', 'Resident along creeks', 'Observe for and monitor the presence of ground cracks, incipient landslide, and landslide and report to MDRRMC or MGB. Observe for ground seeps at the base of slopes accompanied by unusual odor and for sunken or displaced roads and report to MDRRMC or MGB. Develop and implement an early warning system for debris flows and flash floods. Identify relocation/evacuation site for assessment of MGB. Relocation of identified residents at risk. If not yet possible, evacuate the residents I times of prolonged heavy rains and typhoons. Constant communication and update with MDRRMC on hazard situation. Discourage further settlement near/within the landslide site Do not use the school site as an evacuation site due to hazardous condition', 'none', '2022-11-04 09:29:30', '2022-11-05 04:24:58'),
(14, 'Antolon', 'Zone 7', 'landslide', '2', 'Residents along the river due to possible debris flows', 'Observe for and monitor the presence of ground cracks, incipient landslide, and landslide and report to MDRRMC or MGB. Observe for ground seeps at the base of slopes accompanied by unusual odor and for sunken or displaced roads and report to MDRRMC or MGB. Develop and implement an early warning system for debris flows and flash floods. Identify relocation/evacuation site for assessment of MGB. Relocation of identified residents at risk. If not yet possible, evacuate the residents I times of prolonged heavy rains and typhoons. Constant communication and update with MDRRMC on hazard situation. Discourage further settlement near/within the landslide site and incipient landslide', 'none', '2022-11-04 10:06:30', '2022-11-05 04:36:58'),
(17, 'Colongcogong', 'Zone 1', 'landslide', '1', 'Families of Salvacion Teoxon; Romeo Balubar; Antonio Busque', 'Observe for and monitor the presence of ground cracks, incipient landslide, and landslide and report to MDRRMC or MGB. Observe for ground seeps at the base of slopes accompanied by unusual odor and for sunken or displaced roads and report to MDRRMC or MGB. Develop and implement an early warning system for debris flows and flash floods. Identify relocation/evacuation site for assessment of MGB. Relocation of identified residents at risk. If not yet possible, evacuate the residents I times of prolonged heavy rains and typhoons. Constant communication and update with MDRRMC on hazard situation. Discourage further settlement near/within the landslide site Observe legal easements along shoreline', 'none', '2022-11-04 09:29:30', '2022-11-08 03:14:20'),
(29, 'Maqueda', 'Zone 1', 'landslide', '2', 'Families of Danilo Friol, Estriton Priol Jr., Beverly Firan, Anabelle Sacil', 'Observe for and monitor the presence of ground cracks, incipient landslide, and landslide and report to MDRRMC or MGB. Observe for ground seeps at the base of slopes accompanied by unusual odor and for sunken or displaced roads and report to MDRRMC or MGB. Develop and implement an early warning system for debris flows and flash floods. Identify relocation/evacuation site for assessment of MGB. Relocation of identified residents at risk. If not yet possible, evacuate the residents I times of prolonged heavy rains and typhoons. Constant communication and update with MDRRMC on hazard situation. Discourage further settlement near/within the landslide site Do not use utilize the barangay hall as evacuation center', 'Provided with Advisory', '2022-11-04 09:29:30', '2022-11-08 03:51:04'),
(35, 'Guijalo', 'Zone 1', 'landslide', '1', 'Families of Nestor Abay  and other adjacent houses', 'Observe for and monitor the presence of ground cracks, incipient landslide, and landslide and report to MDRRMC or MGB. Observe for ground seeps at the base of slopes accompanied by unusual odor and for sunken or displaced roads and report to MDRRMC or MGB. Develop and implement an early warning system for debris flows and flash floods. Identify relocation/evacuation site for assessment of MGB. Relocation of identified residents at risk. If not yet possible, evacuate the residents I times of prolonged heavy rains and typhoons. Constant communication and update with MDRRMC on hazard situation. Discourage further settlement near/within the landslide site Do not use the school site as evacuation site.', 'none', '2022-11-04 09:29:30', '2022-11-08 03:19:13'),
(41, 'Ilawod', 'Zone 2', 'landslide', '2', 'Families of Edwin Tolero, Mercy Ables, Nelson Tolero, Nelson Ables, Rea Tolero', 'Observe for and monitor the presence of ground cracks, incipient landslide, and landslide and report to MDRRMC or MGB. Observe for ground seeps at the base of slopes accompanied by unusual odor and for sunken or displaced roads and report to MDRRMC or MGB. Develop and implement an early warning system for debris flows and flash floods. Identify relocation/evacuation site for assessment of MGB. Relocation of identified residents at risk. If not yet possible, evacuate the residents I times of prolonged heavy rains and typhoons. Constant communication and update with MDRRMC on hazard situation. Discourage further settlement near/within the landslide site and incipient landslides', 'Provided with Advisory', '2022-11-04 09:29:30', '2022-11-08 03:24:39'),
(43, 'Malabog', 'Zone 2', 'landslide', '1', 'Residents on the base of sleep slopes', 'Observe for and monitor the presence of ground cracks, incipient landslide, and landslide and report to MDRRMC or MGB. Observe for ground seeps at the base of slopes accompanied by unusual odor and for sunken or displaced roads and report to MDRRMC or MGB. Develop and implement an early warning system for debris flows and flash floods. Identify relocation/evacuation site for assessment of MGB. Relocation of identified residents at risk. If not yet possible, evacuate the residents I times of prolonged heavy rains and typhoons. Constant communication and update with MDRRMC on hazard situation. Discourage further settlement near/within the landslide site and incipient landslides.', 'Provided with Advisory', '2022-11-04 09:29:30', '2022-11-05 04:24:58'),
(45, 'San Roque', 'Zone 2', 'landslide', '1', 'none', 'Observe for and monitor the presence of ground cracks, incipient landslide, and landslide and report to MDRRMC or MGB. Observe for ground seeps at the base of slopes accompanied by unusual odor and for sunken or displaced roads and report to MDRRMC or MGB. Develop and implement an early warning system for debris flows and flash floods. Identify relocation/evacuation site for assessment of MGB. Relocation of identified residents at risk. If not yet possible, evacuate the residents I times of prolonged heavy rains and typhoons. Constant communication and update with MDRRMC on hazard situation.', 'Provided with Advisory', '2022-11-04 09:29:30', '2022-11-05 04:24:58'),
(46, 'San Vicente', 'Zone 1', 'landslide', '1', 'Families of April Marto, Nidea Aquino, Marlyn Aquino, Rosalie Aquino, Evelyn Sorro', 'Observe for and monitor the presence of ground cracks, incipient landslide, and landslide and report to MDRRMC or MGB. Observe for ground seeps at the base of slopes accompanied by unusual odor and for sunken or displaced roads and report to MDRRMC or MGB. Develop and implement an early warning system for debris flows and flash floods. Identify relocation/evacuation site for assessment of MGB. Relocation of identified residents at risk. If not yet possible, evacuate the residents I times of prolonged heavy rains and typhoons. Constant communication and update with MDRRMC on hazard situation. Discourage further settlement near/within the landslide site Do not use utilize the barangay hall as evacuation site due to hazardous condition.', 'Provided with Advisory', '2022-11-04 09:29:30', '2022-11-08 04:03:30'),
(52, 'Antolon', 'Zone 3', 'flood', '3', 'Residents along the river', 'Develop an early warning system for floods and flashfloods. Identify relocation/ evacuation site for assessment by MGB. Timely evacuation of the residents situated along the rivers affected by floods in times of strong typhoons and severe weather condition. In the long term, families dwelling within the legal easements, salvage zones and other critical to floods should be relocated to safer grounds. Declare areas within legal easements of rivers (20 m. for agricultural/ rural and 40 m. for timberland/ forestland) as “no build zones” and “no dwelling zones” through local ordinances. Strict observance of national and local laws and rules on easements. Observe for rapid increase/decrease in creek/river water levels accompanied by increased turbidity. Observe for sunken or displaced road surfaces.', 'Provided with Advisory', '2022-11-04 09:29:30', '2022-11-09 10:42:46'),
(61, 'Cabacongan', 'Zone 7', 'flood', '5', 'none', 'Develop an early warning system for floods and flashfloods. Identify relocation/ evacuation site for assessment by MGB. Timely evacuation of the residents situated along the rivers affected by floods in times of strong typhoons and severe weather condition. In the long term, families dwelling within the legal easements, salvage zones and other critical to floods should be relocated to safer grounds. Declare areas within legal easements of rivers (20 m. for agricultural/ rural and 40 m. for timberland/ forestland) as “no build zones” and “no dwelling zones” through local ordinances. Strict observance of national and local laws and rules on easements. Observe for rapid increase/decrease in creek/river water levels accompanied by increased turbidity. Observe for sunken or displaced road surfaces.', 'Provided with Advisory', '2022-11-04 09:29:30', '2022-11-05 04:24:58'),
(66, 'Gibgos', 'Zone 1', 'flood', '6', 'none', 'Develop an early warning system for floods and flashfloods. Identify relocation/ evacuation site for assessment by MGB. Timely evacuation of the residents situated along the rivers affected by floods in times of strong typhoons and severe weather condition. In the long term, families dwelling within the legal easements, salvage zones and other critical to floods should be relocated to safer grounds. Declare areas within legal easements of rivers (20 m. for agricultural/ rural and 40 m. for timberland/ forestland) as “no build zones” and “no dwelling zones” through local ordinances. Strict observance of national and local laws and rules on easements. Observe for rapid increase/decrease in creek/river water levels accompanied by increased turbidity. Observe for sunken or displaced road surfaces.', 'Provided with Advisory', '2022-11-04 09:29:30', '2022-11-05 04:24:58'),
(72, 'Malabog', 'Zone 3', 'flood', '3', 'Families of Romel Romasanta, Asuncion Picaso, Vicente Palacio, Marilyn Pacla, Eladio Saja Jr., Silvestre Caballero, Salvador Palaya, Jose Bea, Rene Saja, Roberto Bas, Salve Olejenar, Jay Ojenar and other residents situated on low-lying areas.', 'Develop an early warning system for floods and flashfloods. Identify relocation/ evacuation site for assessment by MGB. Timely evacuation of the residents situated along the rivers affected by floods in times of strong typhoons and severe weather condition. In the long term, families dwelling within the legal easements, salvage zones and other critical to floods should be relocated to safer grounds. Declare areas within legal easements of rivers (20 m. for agricultural/ rural and 40 m. for timberland/ forestland) as “no build zones” and “no dwelling zones” through local ordinances. Strict observance of national and local laws and rules on easements. Observe for rapid increase/decrease in creek/river water levels accompanied by increased turbidity. Observe for sunken or displaced road surfaces.', 'Provided with Advisory', '2022-11-04 09:29:30', '2022-11-05 04:24:58'),
(82, 'Malabog', 'Zone 3', 'Soil Erosion', '5', 'none', 'none', 'none', '2022-11-04 09:29:30', '2022-11-05 04:24:58'),
(110, 'Mandiclum', 'Zone 4', 'flood', '2', 'All residents of the said areas situated along the creek/rivers and adjacent low-lying areas', 'Develop an early warning system for floods and flashfloods. Identify relocation/ evacuation site for assessment by MGB. Timely evacuation of the residents situated along the rivers affected by floods in times of strong typhoons and severe weather condition. In the long term, families dwelling within the legal easements, salvage zones and other critical to floods should be relocated to safer grounds. Declare areas within legal easements of rivers (20 m. for agricultural/ rural and 40 m. for timberland/ forestland) as “no build zones” and “no dwelling zones” through local ordinances. Strict observance of national and local laws and rules on easements. Observe for rapid increase/decrease in creek/river water levels accompanied by increased turbidity. Observe for sunken or displaced road surfaces.', 'Provided with Advisory', '2022-11-04 09:29:30', '2022-11-09 12:20:39'),
(113, 'Lubas', 'Zone 1', 'landslide', '2', 'Residents along creeks', 'Observe for and monitor the presence of ground cracks, incipient landslide, and landslide and report to MDRRMC or MGB. Observe for ground seeps at the base of slopes accompanied by unusual odor and for sunken or displaced roads and report to MDRRMC or MGB. Develop and implement an early warning system for debris flows and flash floods. Identify relocation/evacuation site for assessment of MGB. Relocation of identified residents at risk. If not yet possible, evacuate the residents I times of prolonged heavy rains and typhoons. Constant communication and update with MDRRMC on hazard situation. Discourage further settlement near/within the landslide site Do not use the school site as evacuation site due to hazardous condition. ', 'Provided with Advisory', '2022-11-04 09:29:30', '2022-11-05 04:24:58'),
(120, 'Agaas', 'Zone 5', 'Flood', '1', 'Residents along the rivers', 'Develop an early warning system for floods and flashfloods. Identify relocation/ evacuation site for assessment by MGB. Timely evacuation of the residents situated along the rivers affected by floods in times of strong typhoons and severe weather condition. In the long term, families dwelling within the legal easements, salvage zones and other critical to floods should be relocated to safer grounds. Declare areas within legal easements of rivers (20 m. for agricultural/ rural and 40 m. for timberland/ forestland) as “no build zones” and “no dwelling zones” through local ordinances. Strict observance of national and local laws and rules on easements. Observe for rapid increase/decrease in creek/river water levels accompanied by increased turbidity.', 'Provided with Advisory', '2022-11-04 09:29:30', '2022-11-08 04:31:09'),
(121, 'Hanopol', 'Zone 1', 'Landslide', '1', 'Families of Lannie Redula, Efren Baseho, and other residents in Sitio Tuman gob due to debris flow hazard. Residents on the base of slopes Barangay Proper', 'Observe for and monitor the presence of ground cracks, incipient landslide, and landslide and report to MDRRMC or MGB. Observe for ground seeps at the base of slopes accompanied by unusual odor and for sunken or displaced roads and report to MDRRMC or MGB. Develop and implement an early warning system for debris flows and flash floods. Identify relocation/evacuation site for assessment of MGB. Relocation of identified residents at risk. If not yet possible, evacuate the residents I times of prolonged heavy rains and typhoons. Constant communication and update with MDRRMC on hazard situation. Discourage further settlement near/within the landslide site and incipient landslides', 'none', '2022-11-04 09:29:30', '2022-11-05 04:24:58'),
(123, 'Pili-Centro', 'Zone 3', 'Flood', '2', 'Residents along the creeks/ rivers and low-lying areas', 'Develop an early warning system for floods and flashfloods. Identify relocation/ evacuation site for assessment by MGB. Timely evacuation of the residents situated along the rivers affected by floods in times of strong typhoons and severe weather condition. In the long term, families dwelling within the legal easements, salvage zones and other critical to floods should be relocated to safer grounds. Declare areas within legal easements of rivers (20 m. for agricultural/ rural and 40 m. for timberland/ forestland) as “no build zones” and “no dwelling zones” through local ordinances. Strict observance of national and local laws and rules on easements. Observe for rapid increase/decrease in creek/river water levels accompanied by increased turbidity. Observe for sunken or displaced road surfaces.', 'Provided with Advisory', '2022-11-04 09:29:30', '2022-11-09 12:25:19'),
(124, 'Haponan', 'Zone 1', 'Landslide', '0', 'none', 'Observe for and monitor the presence of ground cracks, incipient landslide, and landslide and report to MDRRMC or MGB. Observe for ground seeps at the base of slopes accompanied by unusual odor and for sunken or displaced roads and report to MDRRMC or MGB. Develop and implement an early warning system for debris flows and flash floods. Identify relocation/evacuation site for assessment of MGB. Relocation of identified residents at risk. If not yet possible, evacuate the residents I times of prolonged heavy rains and typhoons. Constant communication and update with MDRRMC on hazard situation.', 'Provide with advisory', '2022-11-04 09:29:30', '2022-11-05 04:24:58'),
(127, 'San Roque', 'Zone 7', 'Flood', '6', 'Families of Norma Belata, Salvacion Barnuevo, Nestor Hufancia, Nieta Aquino, Jobert Aquino, Joseph Barnuevo, Teodolo Berja, Elena Mitas, Dominga Mendez, and other residents located on low-lying portion. ', 'Develop an early warning system for floods and flashfloods. Identify relocation/ evacuation site for assessment by MGB. Timely evacuation of the residents situated along the rivers affected by floods in times of strong typhoons and severe weather condition. In the long term, families dwelling within the legal easements, salvage zones and other critical to floods should be relocated to safer grounds. Declare areas within legal easements of rivers (20 m. for agricultural/ rural and 40 m. for timberland/ forestland) as “no build zones” and “no dwelling zones” through local ordinances. Strict observance of national and local laws and rules on easements. Observe for rapid increase/decrease in creek/river water levels accompanied by increased turbidity. Observe for sunken or displaced road surfaces.', 'Provided with Advisory', '2022-11-04 09:29:30', '2022-11-05 04:24:58'),
(128, 'Maqueda', 'Zone 1', 'Flood', '1', 'All residents of the said areas situated along the shoreline and coastal plain. ', 'Develop an early warning system for floods and flashfloods. Identify relocation/ evacuation site for assessment by MGB. Timely evacuation of the residents situated along the rivers affected by floods in times of strong typhoons and severe weather condition. In the long term, families dwelling within the legal easements, salvage zones and other critical to floods should be relocated to safer grounds. Declare areas within legal easements of rivers (20 m. for agricultural/ rural and 40 m. for timberland/ forestland) as “no build zones” and “no dwelling zones” through local ordinances. Strict observance of national and local laws and rules on easements. Observe for rapid increase/decrease in creek/river water levels accompanied by increased turbidity. Observe for sunken or displaced road surfaces.', 'Provided with Advisory', '2022-11-04 09:29:30', '2022-11-09 12:22:06'),
(129, 'Agaas', 'Zone 1', 'Landslide', '1', 'Families of Levy Rita and residents situated on the base of steep slopes', 'Observe for and monitor the presence of ground cracks incipient landslides and landslide and report to MDRRMC or MGB. Observe for ground seeps at the base of slopes accompanied by unusual odor and sunken or displaced roads and reports to MDRRMC or MGB. Develop and implement an early warning system for debris flows and flash floods Identify relocations evacuation site for assessment of MGB. Relocation of identified residents at risks If not yet possible evacuate the residents in times of prolonged heavy rains and typhoons. Constant communication and update with MDRRMC on hazard situation. Discourage further settlement near within the landslide site and incipient landslide.', 'Provided with Advisory', '2022-11-05 04:32:09', '2022-11-08 02:43:03'),
(134, 'Bahay', 'Zone 1', 'Landslide', '1', 'none', 'Observe for and monitor the presence of ground cracks, incipient landslide, and landslide and report to MDRRMC or MGB. Observe for ground seeps at the base of slopes accompanied by unusual odor and for sunken or displaced roads and report to MDRRMC or MGB. Develop and implement an early warning system for debris flows and flash floods. Identify relocation/evacuation site for assessment of MGB. Relocation of identified residents at risk. If not yet possible, evacuate the residents I times of prolonged heavy rains and typhoons. Constant communication and update with MDRRMC on hazard situation. Discourage further settlement near/within the landslide site and incipient landslide', 'Provided with advisory', '2022-11-04 09:29:30', '2022-11-05 04:24:58'),
(135, 'Cabacongan', 'Zone 1', 'Landslide', '1', 'Families of Freddie Barquin; Arturo Consejo; Ranel Chavez; Bernie Chavez; Armanda Pacia', 'Observe for and monitor the presence of ground cracks, incipient landslide, and landslide and report to MDRRMC or MGB. Observe for ground seeps at the base of slopes accompanied by unusual odor and for sunken or displaced roads and report to MDRRMC or MGB. Develop and implement an early warning system for debris flows and flash floods. Identify relocation/evacuation site for assessment of MGB. Relocation of identified residents at risk. If not yet possible, evacuate the residents I times of prolonged heavy rains and typhoons. Constant communication and update with MDRRMC on hazard situation.', 'Provided with Advisory', '2022-11-04 09:29:30', '2022-11-08 03:05:06'),
(136, 'Gibgos', 'Zone 1', 'Landslide', '1', 'Families of Jose Alfon; Chito Delos Santos; and other adjacent residents', 'Observe for and monitor the presence of ground cracks, incipient landslide, and landslide and report to MDRRMC or MGB. Observe for ground seeps at the base of slopes accompanied by unusual odor and for sunken or displaced roads and report to MDRRMC or MGB. Develop and implement an early warning system for debris flows and flash floods. Identify relocation/evacuation site for assessment of MGB. Relocation of identified residents at risk. If not yet possible, evacuate the residents I times of prolonged heavy rains and typhoons. Constant communication and update with MDRRMC on hazard situation. Discourage further settlement near/within the landslide site', 'none', '2022-11-04 09:29:30', '2022-11-05 04:24:58'),
(137, 'Mandiclum', 'Zone 2', 'Landslide', '1', 'none', 'Observe for and monitor the presence of ground cracks, incipient landslide, and landslide and report to MDRRMC or MGB. Observe for ground seeps at the base of slopes accompanied by unusual odor and for sunken or displaced roads and report to MDRRMC or MGB. Develop and implement an early warning system for debris flows and flash floods. Identify relocation/evacuation site for assessment of MGB. Relocation of identified residents at risk. If not yet possible, evacuate the residents I times of prolonged heavy rains and typhoons. Constant communication and update with MDRRMC on hazard situation. Discourage further settlement near/within the landslide site and incipient landslides', 'Provided with Advisory', '2022-11-04 09:29:30', '2022-11-05 04:24:58'),
(138, 'Tabgon', 'Zone 5', 'Landslide', '1', 'Families of Jerry Sacil, Julio Sacil Jr., Roy Alentejo ', 'Observe for and monitor the presence of ground cracks, incipient landslide, and landslide and report to MDRRMC or MGB. Observe for ground seeps at the base of slopes accompanied by unusual odor and for sunken or displaced roads and report to MDRRMC or MGB. Develop and implement an early warning system for debris flows and flash floods. Identify relocation/evacuation site for assessment of MGB. Relocation of identified residents at risk. If not yet possible, evacuate the residents I times of prolonged heavy rains and typhoons. Constant communication and update with MDRRMC on hazard situation. Discourage further settlement near/within the landslide site and incipient landslide.', 'Provided with Advisory', '2022-11-04 09:29:30', '2022-11-08 04:18:56'),
(139, 'Tabiguian', 'Zone 4', 'Landslide', '1', 'Residents on the base of slopes Caramoan Birthing Facility ', 'Observe for and monitor the presence of ground cracks, incipient landslide, and landslide and report to MDRRMC or MGB. Observe for ground seeps at the base of slopes accompanied by unusual odor and for sunken or displaced roads and report to MDRRMC or MGB. Develop and implement an early warning system for debris flows and flash floods. Identify relocation/evacuation site for assessment of MGB. Relocation of identified residents at risk. If not yet possible, evacuate the residents I times of prolonged heavy rains and typhoons. Constant communication and update with MDRRMC on hazard situation. Discourage further settlement near/within the landslide site and incipient landslide. Minimize slope modification. If slopes area excavated, appropriate slope protection measure. ', 'Provided with Advisory', '2022-11-04 10:33:25', '2022-11-05 04:24:58'),
(140, 'Bahay', 'Zone 1', 'Flood', '4', 'Families of Gina Alarcon, Tomas Alarcon Sr., Tomas Alarcon Jr., Mark Dianela, Dennis Dianela, Danly Huit, Lester Raygen, Dolores Rita, Jeffrey Alarcon', 'Develop an early warning system for floods and flashfloods. Identify relocation/ evacuation site for assessment by MGB. Timely evacuation of the residents situated along the rivers affected by floods in times of strong typhoons and severe weather condition. In the long term, families dwelling within the legal easements, salvage zones and other critical to floods should be relocated to safer grounds. Declare areas within legal easements of rivers (20 m. for agricultural/ rural and 40 m. for timberland/ forestland) as “no build zones” and “no dwelling zones” through local ordinances. Strict observance of national and local laws and rules on easements. Observe for rapid increase/decrease in creek/river water levels accompanied by increased turbidity. Observe for sunken or displaced road surfaces.', 'Provided with Advisory', '2022-11-04 09:29:30', '2022-11-09 10:52:42'),
(141, 'Colongcogong', 'Zone 1', 'Flood', '3', 'Families of Wilson Teoxon, Arnold Huit, Romeo Busque, Henry Bien, Samuel Villapando', 'Develop an early warning system for floods and flashfloods. Identify relocation/ evacuation site for assessment by MGB. Timely evacuation of the residents situated along the rivers affected by floods in times of strong typhoons and severe weather condition. In the long term, families dwelling within the legal easements, salvage zones and other critical to floods should be relocated to safer grounds. Declare areas within legal easements of rivers (20 m. for agricultural/ rural and 40 m. for timberland/ forestland) as “no build zones” and “no dwelling zones” through local ordinances. Strict observance of national and local laws and rules on easements. Observe for rapid increase/decrease in creek/river water levels accompanied by increased turbidity. Observe for sunken or displaced road surfaces.', 'Provided with Advisory', '2022-11-04 09:29:30', '2022-11-09 11:07:44'),
(142, 'Canatuan', 'Zone 4', 'Flood', '3', 'Families of Ronnel Breis, Rosie Bries, Agustin Moreno, Mary Jane Bondoc, Freddie Moreno, Robilo Palaya, Amelita Arojado, and other adjacent households. ', 'Develop an early warning system for floods and flashfloods. Identify relocation/ evacuation site for assessment by MGB. Timely evacuation of the residents situated along the rivers affected by floods in times of strong typhoons and severe weather condition. In the long term, families dwelling within the legal easements, salvage zones and other critical to floods should be relocated to safer grounds. Declare areas within legal easements of rivers (20 m. for agricultural/ rural and 40 m. for timberland/ forestland) as “no build zones” and “no dwelling zones” through local ordinances. Strict observance of national and local laws and rules on easements. Observe for rapid increase/decrease in creek/river water levels accompanied by increased turbidity. Observe for sunken or displaced road surfaces.', 'Provided with Advisory', '2022-11-04 09:29:30', '2022-11-05 04:24:58'),
(143, 'Guijalo', 'Zone 4', 'Flood', '4', 'Families of Javiier Frodozo, Jonald Teoxon, Jonald Teozon, Agustin Marco, Emilda Breis, Carmen Huit, and other adjacent househoolds', 'Develop an early warning system for floods and flashfloods. Identify relocation/ evacuation site for assessment by MGB. Timely evacuation of the residents situated along the rivers affected by floods in times of strong typhoons and severe weather condition. In the long term, families dwelling within the legal easements, salvage zones and other critical to floods should be relocated to safer grounds. Declare areas within legal easements of rivers (20 m. for agricultural/ rural and 40 m. for timberland/ forestland) as “no build zones” and “no dwelling zones” through local ordinances. Strict observance of national and local laws and rules on easements. Observe for rapid increase/decrease in creek/river water levels accompanied by increased turbidity. Observe for sunken or displaced road surfaces.', 'Provided with Advisory', '2022-11-04 09:29:30', '2022-11-05 04:24:58'),
(144, 'Hanopol', 'Zone 2', 'Flood', '3', 'Residents along river and situated on the floodplain', 'Develop an early warning system for floods and flashfloods. Identify relocation/ evacuation site for assessment by MGB. Timely evacuation of the residents situated along the rivers affected by floods in times of strong typhoons and severe weather condition. In the long term, families dwelling within the legal easements, salvage zones and other critical to floods should be relocated to safer grounds. Declare areas within legal easements of rivers (20 m. for agricultural/ rural and 40 m. for timberland/ forestland) as “no build zones” and “no dwelling zones” through local ordinances. Strict observance of national and local laws and rules on easements. Observe for rapid increase/decrease in creek/river water levels accompanied by increased turbidity. Observe for sunken or displaced road surfaces.', 'Provided with Advisory', '2022-11-04 09:29:30', '2022-11-09 12:10:02'),
(145, 'Haponan', 'Zone 1', 'Flood', '4', 'All residents of the said areas situated along the shoreline and coastal plain ', 'Develop an early warning system for floods and flashfloods. Identify relocation/ evacuation site for assessment by MGB. Timely evacuation of the residents situated along the rivers affected by floods in times of strong typhoons and severe weather condition. In the long term, families dwelling within the legal easements, salvage zones and other critical to floods should be relocated to safer grounds. Declare areas within legal easements of rivers (20 m. for agricultural/ rural and 40 m. for timberland/ forestland) as “no build zones” and “no dwelling zones” through local ordinances. Strict observance of national and local laws and rules on easements. Observe for rapid increase/decrease in creek/river water levels accompanied by increased turbidity. Observe for sunken or displaced road surfaces.', 'Provided with Advisory', '2022-11-04 09:29:30', '2022-11-05 04:24:58'),
(146, 'Ilawod', 'Zone 1', 'Flood', '4', 'All residents of the said areas affected by floods', 'Develop an early warning system for floods and flashfloods. Identify relocation/ evacuation site for assessment by MGB. Timely evacuation of the residents situated along the rivers affected by floods in times of strong typhoons and severe weather condition. In the long term, families dwelling within the legal easements, salvage zones and other critical to floods should be relocated to safer grounds. Declare areas within legal easements of rivers (20 m. for agricultural/ rural and 40 m. for timberland/ forestland) as “no build zones” and “no dwelling zones” through local ordinances. Strict observance of national and local laws and rules on easements. Observe for rapid increase/decrease in creek/river water levels accompanied by increased turbidity. Observe for sunken or displaced road surfaces.', 'Provided with Advisory', '2022-11-04 09:29:30', '2022-11-09 12:12:03'),
(147, 'Lubas', 'Zone 4', 'Flood', '2', 'All residents of the said areas situated along the creek/ rivers and dry creek.', 'Develop an early warning system for floods and flashfloods. Identify relocation/ evacuation site for assessment by MGB. Timely evacuation of the residents situated along the rivers affected by floods in times of strong typhoons and severe weather condition. In the long term, families dwelling within the legal easements, salvage zones and other critical to floods should be relocated to safer grounds. Declare areas within legal easements of rivers (20 m. for agricultural/ rural and 40 m. for timberland/ forestland) as “no build zones” and “no dwelling zones” through local ordinances. Strict observance of national and local laws and rules on easements. Observe for rapid increase/decrease in creek/river water levels accompanied by increased turbidity. Observe for sunken or displaced road surfaces.', 'Provided with Advisory', '2022-11-04 09:29:30', '2022-11-09 12:18:09'),
(148, 'San Vicente', 'Zone 4', 'Flood', '4', 'Families of April Marto, Nidea Aquino, Marlyn Aquino, Rosalie Aquino, Evelyn Sorro, Irvin Aquino, Alfie Aquino, Lino Amaro, Ely Realda, Salilita Bagodo San Vincente Elementary School. ', 'Develop an early warning system for floods and flashfloods. Identify relocation/ evacuation site for assessment by MGB. Timely evacuation of the residents situated along the rivers affected by floods in times of strong typhoons and severe weather condition. In the long term, families dwelling within the legal easements, salvage zones and other critical to floods should be relocated to safer grounds. Declare areas within legal easements of rivers (20 m. for agricultural/ rural and 40 m. for timberland/ forestland) as “no build zones” and “no dwelling zones” through local ordinances. Strict observance of national and local laws and rules on easements. Observe for rapid increase/decrease in creek/river water levels accompanied by increased turbidity. Observe for sunken or displaced road surfaces.', 'Provided with Advisory', '2022-11-04 09:29:30', '2022-11-05 04:24:58'),
(149, 'Tabgon', 'Zone 3', 'Flood', '4', 'Families of Floro Barillo, Baby Amaro, Tessy Teoxon, Nancy Batacao, Sioni Amaro, Roselle Biblia, Mario Amaro, Sherly Vertus, Malyn Vertus, Wilson Berunio, Milagros Alarcon, Dann Singson, Beliver Sancho, Maria Barillo, Ingo Huilt, Jose Dianela, Locito Daku, Henry Huit, Allan Ombao', 'Develop an early warning system for floods and flashfloods. Identify relocation/ evacuation site for assessment by MGB. Timely evacuation of the residents situated along the rivers affected by floods in times of strong typhoons and severe weather condition. In the long term, families dwelling within the legal easements, salvage zones and other critical to floods should be relocated to safer grounds. Declare areas within legal easements of rivers (20 m. for agricultural/ rural and 40 m. for timberland/ forestland) as “no build zones” and “no dwelling zones” through local ordinances. Strict observance of national and local laws and rules on easements. Observe for rapid increase/decrease in creek/river water levels accompanied by increased turbidity. Observe for sunken or displaced road surfaces.', 'Provided with Advisory', '2022-11-04 09:29:30', '2022-11-05 04:24:58'),
(150, 'Tabiguian', 'Zone 7', 'Flood', '4', 'Families of Jaime Villamor, Socorro Villamor, Eloise Villamor, Medin Ruiz, Caloy Villamor, Jobert De Quiroz, Marlo Plropeno, Francis Villamor, Edgar Villamor, Michael Dela Cruz, Jeptie Pacono, Glenda Iglesia, Ronald Plopeno, Rico Dela Cruz, Lilia Ruiz, Jory Ruiz, Glen Ruiz, Maxio Berizo, Joey Pabia', 'Develop an early warning system for floods and flashfloods. Identify relocation/ evacuation site for assessment by MGB. Timely evacuation of the residents situated along the rivers affected by floods in times of strong typhoons and severe weather condition. In the long term, families dwelling within the legal easements, salvage zones and other critical to floods should be relocated to safer grounds. Declare areas within legal easements of rivers (20 m. for agricultural/ rural and 40 m. for timberland/ forestland) as “no build zones” and “no dwelling zones” through local ordinances. Strict observance of national and local laws and rules on easements. Observe for rapid increase/decrease in creek/river water levels accompanied by increased turbidity. Observe for sunken or displaced road surfaces.', 'Provided with Advisory', '2022-11-04 09:29:30', '2022-11-05 04:24:58'),
(151, 'Bahay', 'Zone 1', 'Soil Erosion', '0', 'none', 'none', 'none', '2022-11-04 09:29:30', '2022-11-05 04:24:58'),
(156, 'Pili-Centro', 'Zone 2', 'Landslide', '1', 'Families of Rey Sabawlan, Anacito Velasco, Carlito Cepede, Anatacio Llaman, Manuel Gorobat and other adjacent residents', 'Observe for and monitor the presence of ground cracks, incipient landslide, and landslide and report to MDRRMC or MGB. Observe for ground seeps at the base of slopes accompanied by unusual odor and for sunken or displaced roads and report to MDRRMC or MGB. Develop and implement an early warning system for debris flows and flash floods. Identify relocation/evacuation site for assessment of MGB. Relocation of identified residents at risk. If not yet possible, evacuate the residents in times of prolonged heavy rains and typhoons. Constant communication and update with MDRRMC on hazard situation.', 'Provided with advisory', '2022-11-04 09:29:30', '2022-11-05 04:24:58'),
(172, 'Maqueda', 'Zone 1', 'Tsunami', '1', 'none', 'none', 'none', '2022-11-06 12:20:35', '2022-11-09 12:28:48'),
(174, 'Antolon', 'Zone 7', 'Soil Erosion', '4', 'none', 'none', 'none', '2022-11-06 12:30:52', NULL),
(177, 'Pili-Centro', 'Zone 5', 'Landslide', '4', 'none', 'nonr', 'norn', '2022-11-06 13:02:08', NULL),
(189, 'Cabacongan', 'Zone 2', 'Landslide', '1', 'Merly Llaneta; Joven Pacia; Wilmern Llaneta; Carlos Chavez; Mylene Recto; Limuel Castillo; ', 'Observe for and monitor the presence of ground cracks, incipient landslide, and landslide and report to MDRRMC or MGB. Observe for ground seeps at the base of slopes accompanied by unusual odor and for sunken or displaced roads and report to MDRRMC or MGB. Develop and implement an early warning system for debris flows and flash floods. Identify relocation/evacuation site for assessment of MGB. Relocation of identified residents at risk. If not yet possible, evacuate the residents I times of prolonged heavy rains and typhoons. Constant communication and update with MDRRMC on hazard situation.', 'Provided with Advisory', '2022-11-08 03:04:40', NULL),
(190, 'Cabacongan', 'Zone 7', 'Landslide', '1', 'Ignacio  Clet; Jobert Bajares; Angelina Clet and Noel Ruiz', 'Observe for and monitor the presence of ground cracks, incipient landslide, and landslide and report to MDRRMC or MGB. Observe for ground seeps at the base of slopes accompanied by unusual odor and for sunken or displaced roads and report to MDRRMC or MGB. Develop and implement an early warning system for debris flows and flash floods. Identify relocation/evacuation site for assessment of MGB. Relocation of identified residents at risk. If not yet possible, evacuate the residents I times of prolonged heavy rains and typhoons. Constant communication and update with MDRRMC on hazard situation.', 'Provided with Advisory', '2022-11-08 03:07:46', NULL),
(191, 'Canatuan', 'Zone 4', 'Landslide', '1', 'Resident along creeks', 'Observe for and monitor the presence of ground cracks, incipient landslide, and landslide and report to MDRRMC or MGB. Observe for ground seeps at the base of slopes accompanied by unusual odor and for sunken or displaced roads and report to MDRRMC or MGB. Develop and implement an early warning system for debris flows and flash floods. Identify relocation/evacuation site for assessment of MGB. Relocation of identified residents at risk. If not yet possible, evacuate the residents I times of prolonged heavy rains and typhoons. Constant communication and update with MDRRMC on hazard situation. Discourage further settlement near/within the landslide site Do not use the school site as an evacuation site due to hazardous condition', 'Provided with Advisory', '2022-11-08 03:11:21', NULL),
(192, 'Colongcogong', 'Zone 2', 'Landslide', '1', 'Patrick Vargas; Nenibeth Bosque; Aileen Chavez', 'Observe for and monitor the presence of ground cracks, incipient landslide, and landslide and report to MDRRMC or MGB. Observe for ground seeps at the base of slopes accompanied by unusual odor and for sunken or displaced roads and report to MDRRMC or MGB. Develop and implement an early warning system for debris flows and flash floods. Identify relocation/evacuation site for assessment of MGB. Relocation of identified residents at risk. If not yet possible, evacuate the residents I times of prolonged heavy rains and typhoons. Constant communication and update with MDRRMC on hazard situation. Discourage further settlement near/within the landslide site Observe legal easements along shoreline', 'none', '2022-11-08 03:14:58', NULL),
(193, 'Guijalo', 'Zone 2', 'Landslide', '1', 'Families of Fidel Makatan gay and other adjacent houses', 'Observe for and monitor the presence of ground cracks, incipient landslide, and landslide and report to MDRRMC or MGB. Observe for ground seeps at the base of slopes accompanied by unusual odor and for sunken or displaced roads and report to MDRRMC or MGB. Develop and implement an early warning system for debris flows and flash floods. Identify relocation/evacuation site for assessment of MGB. Relocation of identified residents at risk. If not yet possible, evacuate the residents I times of prolonged heavy rains and typhoons. Constant communication and update with MDRRMC on hazard situation. Discourage further settlement near/within the landslide site Do not use the school site as evacuation site.', 'none', '2022-11-08 03:21:48', NULL),
(194, 'Guijalo', 'Zone 4', 'Landslide', '1', 'Families of Gerome Abay, and other adjacent houses', 'Observe for and monitor the presence of ground cracks, incipient landslide, and landslide and report to MDRRMC or MGB. Observe for ground seeps at the base of slopes accompanied by unusual odor and for sunken or displaced roads and report to MDRRMC or MGB. Develop and implement an early warning system for debris flows and flash floods. Identify relocation/evacuation site for assessment of MGB. Relocation of identified residents at risk. If not yet possible, evacuate the residents I times of prolonged heavy rains and typhoons. Constant communication and update with MDRRMC on hazard situation. Discourage further settlement near/within the landslide site Do not use the school site as evacuation site.', 'none', '2022-11-08 03:22:29', NULL),
(195, 'Ilawod', 'Zone 5', 'Landslide', '1', 'Romeo Macalla, Salome Manzille, and other adjacent households.', 'Observe for and monitor the presence of ground cracks, incipient landslide, and landslide and report to MDRRMC or MGB. Observe for ground seeps at the base of slopes accompanied by unusual odor and for sunken or displaced roads and report to MDRRMC or MGB. Develop and implement an early warning system for debris flows and flash floods. Identify relocation/evacuation site for assessment of MGB. Relocation of identified residents at risk. If not yet possible, evacuate the residents I times of prolonged heavy rains and typhoons. Constant communication and update with MDRRMC on hazard situation. Discourage further settlement near/within the landslide site and incipient landslides', 'Provided with Advisory', '2022-11-08 03:26:48', NULL),
(196, 'Maqueda', 'Zone 2', 'Landslide', '1', 'Jesus Sacil, Amador Belleza, Analiza Belleza, Nelly Azana', 'Observe for and monitor the presence of ground cracks, incipient landslide, and landslide and report to MDRRMC or MGB. Observe for ground seeps at the base of slopes accompanied by unusual odor and for sunken or displaced roads and report to MDRRMC or MGB. Develop and implement an early warning system for debris flows and flash floods. Identify relocation/evacuation site for assessment of MGB. Relocation of identified residents at risk. If not yet possible, evacuate the residents I times of prolonged heavy rains and typhoons. Constant communication and update with MDRRMC on hazard situation. Discourage further settlement near/within the landslide site Do not use utilize the barangay hall as evacuation center', 'Provided with Advisory', '2022-11-08 03:52:50', NULL),
(197, 'Maqueda', 'Zone 3', 'Landslide', '1', 'Eva Sarmiento, Jaime Morada, Joven Friol ', 'Observe for and monitor the presence of ground cracks, incipient landslide, and landslide and report to MDRRMC or MGB. Observe for ground seeps at the base of slopes accompanied by unusual odor and for sunken or displaced roads and report to MDRRMC or MGB. Develop and implement an early warning system for debris flows and flash floods. Identify relocation/evacuation site for assessment of MGB. Relocation of identified residents at risk. If not yet possible, evacuate the residents I times of prolonged heavy rains and typhoons. Constant communication and update with MDRRMC on hazard situation. Discourage further settlement near/within the landslide site Do not use utilize the barangay hall as evacuation center', 'Provided with advisory', '2022-11-08 03:58:35', NULL),
(198, 'San Vicente', 'Zone 2', 'Landslide', '1', 'Irvin Aquino, Alfie Aquino, Lino Amaro, Ely Realda, Salilita Bagodo', 'Observe for and monitor the presence of ground cracks, incipient landslide, and landslide and report to MDRRMC or MGB. Observe for ground seeps at the base of slopes accompanied by unusual odor and for sunken or displaced roads and report to MDRRMC or MGB. Develop and implement an early warning system for debris flows and flash floods. Identify relocation/evacuation site for assessment of MGB. Relocation of identified residents at risk. If not yet possible, evacuate the residents I times of prolonged heavy rains and typhoons. Constant communication and update with MDRRMC on hazard situation. Discourage further settlement near/within the landslide site Do not use utilize the barangay hall as evacuation site due to hazardous condition.', 'Provided with Advisory', '2022-11-08 04:10:30', NULL),
(199, 'San Vicente', 'Zone 7', 'Landslide', '1', 'San Vincente Elementary School', 'Observe for and monitor the presence of ground cracks, incipient landslide, and landslide and report to MDRRMC or MGB. Observe for ground seeps at the base of slopes accompanied by unusual odor and for sunken or displaced roads and report to MDRRMC or MGB. Develop and implement an early warning system for debris flows and flash floods. Identify relocation/evacuation site for assessment of MGB. Relocation of identified residents at risk. If not yet possible, evacuate the residents I times of prolonged heavy rains and typhoons. Constant communication and update with MDRRMC on hazard situation. Discourage further settlement near/within the landslide site Do not use utilize the barangay hall as evacuation site due to hazardous condition.', 'Provided with Advisory', '2022-11-08 04:11:52', NULL),
(200, 'Tabgon', 'Zone 6', 'Landslide', '1', 'Residents on the base of roadcuts and steep slopes', 'Observe for and monitor the presence of ground cracks, incipient landslide, and landslide and report to MDRRMC or MGB. Observe for ground seeps at the base of slopes accompanied by unusual odor and for sunken or displaced roads and report to MDRRMC or MGB. Develop and implement an early warning system for debris flows and flash floods. Identify relocation/evacuation site for assessment of MGB. Relocation of identified residents at risk. If not yet possible, evacuate the residents I times of prolonged heavy rains and typhoons. Constant communication and update with MDRRMC on hazard situation. Discourage further settlement near/within the landslide site and incipient landslide.', 'Provided with Advisory', '2022-11-08 04:20:29', NULL),
(201, 'Agaas', 'Zone 6', 'Flood', '1', 'Residents along the rivers', 'Develop an early warning system for floods and flashfloods. Identify relocation/ evacuation site for assessment by MGB. Timely evacuation of the residents situated along the rivers affected by floods in times of strong typhoons and severe weather condition. In the long term, families dwelling within the legal easements, salvage zones and other critical to floods should be relocated to safer grounds. Declare areas within legal easements of rivers (20 m. for agricultural/ rural and 40 m. for timberland/ forestland) as “no build zones” and “no dwelling zones” through local ordinances. Strict observance of national and local laws and rules on easements. Observe for rapid increase/decrease in creek/river water levels accompanied by increased turbidity. Observe for sunken or displaced road surfaces.', 'Provided with Advisory', '2022-11-08 04:40:33', NULL);
INSERT INTO `disaster_records` (`id`, `barangay_name`, `zone`, `disaster`, `number_map`, `population_at_risk`, `recommendation`, `remarks`, `created_date`, `modified_date`) VALUES
(202, 'Agaas', 'Zone 7', 'Flood', '1', 'Residents along the rivers', 'Develop an early warning system for floods and flashfloods. Identify relocation/ evacuation site for assessment by MGB. Timely evacuation of the residents situated along the rivers affected by floods in times of strong typhoons and severe weather condition. In the long term, families dwelling within the legal easements, salvage zones and other critical to floods should be relocated to safer grounds. Declare areas within legal easements of rivers (20 m. for agricultural/ rural and 40 m. for timberland/ forestland) as “no build zones” and “no dwelling zones” through local ordinances. Strict observance of national and local laws and rules on easements. Observe for rapid increase/decrease in creek/river water levels accompanied by increased turbidity. Observe for sunken or displaced road surfaces.', 'Provided with Advisory', '2022-11-08 05:14:57', '2022-11-08 10:34:08'),
(208, 'Antolon', 'Zone 5', 'Flood', '1', 'Residents along the rivers', 'Develop an early warning system for floods and flashfloods. Identify relocation/ evacuation site for assessment by MGB. Timely evacuation of the residents situated along the rivers affected by floods in times of strong typhoons and severe weather condition. In the long term, families dwelling within the legal easements, salvage zones and other critical to floods should be relocated to safer grounds. Declare areas within legal easements of rivers (20 m. for agricultural/ rural and 40 m. for timberland/ forestland) as “no build zones” and “no dwelling zones” through local ordinances. Strict observance of national and local laws and rules on easements. Observe for rapid increase/decrease in creek/river water levels accompanied by increased turbidity. Observe for sunken or displaced road surfaces.', 'Provided with Advisory', '2022-11-09 10:43:14', NULL),
(209, 'Antolon', 'Zone 6', 'Flood', '1', 'Residents along the rivers', 'Identify relocation/ evacuation site for assessment by MGB. Timely evacuation of the residents situated along the rivers affected by floods in times of strong typhoons and severe weather condition. In the long term, families dwelling within the legal easements, salvage zones and other critical to floods should be relocated to safer grounds. Declare areas within legal easements of rivers (20 m. for agricultural/ rural and 40 m. for timberland/ forestland) as “no build zones” and “no dwelling zones” through local ordinances.', 'Provided with Advisory', '2022-11-09 10:46:43', NULL),
(210, 'Antolon', 'Zone 7', 'Flood', '1', 'Residents along the rivers', 'In the long term, families dwelling within the legal easements, salvage zones and other critical to floods should be relocated to safer grounds. Declare areas within legal easements of rivers (20 m. for agricultural/ rural and 40 m. for timberland/ forestland) as “no build zones” and “no dwelling zones” through local ordinances.', 'Provided with Advisory', '2022-11-09 10:47:42', NULL),
(211, 'Bahay', 'Zone 2', 'Flood', '2', 'Romeo Teoxon, Russel Frondoso, Rey Teoxon, Mercy Barquil, Winnie Teoxon, Rebecca Alarcon, Emily Teoxon, Alex Guinto, Ryan Rodriguez', 'Strict observance of national and local laws and rules on easements. Observe for rapid increase/decrease in creek/river water levels accompanied by increased turbidity. Observe for sunken or displaced road surfaces. Constant communication and update with MDRRMC on hazard situation. Discourage further settlement near/ along creeks/rivers. Appropriate riverbank protection measures to mitigate further erosion of the riverbanks. Do not utilize the school as evacuation center due to hazardous conditions.', 'Provided with Advisory', '2022-11-09 10:55:08', NULL),
(212, 'Bahay', 'Zone 3', 'Flood', '1', 'Salve Dianela, Ricardo De Guzman, Rey Lara, Nani Sorenio, Nancy Orolfo, Marcil Guinto, Eden Lopez, Billy Saureo, Domingo Bernulus, Norman De Mesa', 'Timely evacuation of the residents situated along the rivers affected by floods in times of strong typhoons and severe weather condition. In the long term, families dwelling within the legal easements, salvage zones and other critical to floods should be relocated to safer grounds. Declare areas within legal easements of rivers (20 m. for agricultural/ rural and 40 m. for timberland/ forestland) as “no build zones” and “no dwelling zones” through local ordinances. Strict observance of national and local laws and rules on easements. Observe for rapid increase/decrease in creek/river water levels accompanied by increased turbidity.', 'Provided with Advisory', '2022-11-09 10:56:43', NULL),
(213, 'Bahay', 'Zone 4', 'Flood', '4', 'Jacqueline Clones, Marlone Corporal, Alfonso Marquez, Edwin Amaro, Laura Patinalgo, Gerry Sueno, Richard De Guzman', 'Develop an early warning system for floods and flashfloods. Identify relocation/ evacuation site for assessment by MGB. Timely evacuation of the residents situated along the rivers affected by floods in times of strong typhoons and severe weather condition. In the long term, families dwelling within the legal easements, salvage zones and other critical to floods should be relocated to safer grounds. Declare areas within legal easements of rivers (20 m. for agricultural/ rural and 40 m. for timberland/ forestland) as “no build zones” and “no dwelling zones” through local ordinances. Strict observance of national and local laws and rules on easements. Observe for rapid increase/decrease in creek/river water levels accompanied by increased turbidity. Observe for sunken or displaced road surfaces.', 'Provided with Advisory', '2022-11-09 10:57:34', NULL),
(214, 'Bahay', 'Zone 5', 'Flood', '2', 'Teodora Plopeno, Rosemarie Tonena, Nancy Corporal, Jerry Amano, Marvin Banago.', 'Declare areas within legal easements of rivers (20 m. for agricultural/ rural and 40 m. for timberland/ forestland) as “no build zones” and “no dwelling zones” through local ordinances. Strict observance of national and local laws and rules on easements. Observe for rapid increase/decrease in creek/river water levels accompanied by increased turbidity.', 'Provided with Advisory', '2022-11-09 10:58:14', NULL),
(215, 'Colongcogong', 'Zone 2', 'Flood', '1', 'Vincent Sancha, Ronnie Busque, Marlyn Balubar and other adjacent house', 'Declare areas within legal easements of rivers (20 m. for agricultural/ rural and 40 m. for timberland/ forestland) as “no build zones” and “no dwelling zones” through local ordinances. Strict observance of national and local laws and rules on easements. Observe for rapid increase/decrease in creek/river water levels accompanied by increased turbidity. Observe for sunken or displaced road surfaces.', 'Provide with advisory', '2022-11-09 11:09:19', NULL),
(216, 'Colongcogong', 'Zone 3', 'Flood', '2', 'Nexon Vilegas, Antonio Fernandez, Aida Huit, Aries Huit, Michael Busque', 'Identify relocation/ evacuation site for assessment by MGB. Timely evacuation of the residents situated along the rivers affected by floods in times of strong typhoons and severe weather condition. In the long term, families dwelling within the legal easements, salvage zones and other critical to floods should be relocated to safer grounds. Declare areas within legal easements of rivers (20 m. for agricultural/ rural and 40 m. for timberland/ forestland) as “no build zones” and “no dwelling zones” through local ordinances. Strict observance of national and local laws and rules on easements. Observe for rapid increase/decrease in creek/river water levels accompanied by increased turbidity.', 'Provided with Advisory', '2022-11-09 11:10:04', NULL),
(217, 'Colongcogong', 'Zone 4', 'Flood', '1', 'Arlene Claraianes, Myrna Rawar, Rosalina Amaro', 'Declare areas within legal easements of rivers (20 m. for agricultural/ rural and 40 m. for timberland/ forestland) as “no build zones” and “no dwelling zones” through local ordinances. Strict observance of national and local laws and rules on easements. Observe for rapid increase/decrease in creek/river water levels accompanied by increased turbidity. Observe for sunken or displaced road surfaces.', 'Provided with Advisory', '2022-11-09 11:11:02', NULL),
(218, 'Colongcogong', 'Zone 5', 'Flood', '1', 'Marilyn Clarianes, Barona Clarianes and other adjacent houses', 'Develop an early warning system for floods and flashfloods. Identify relocation/ evacuation site for assessment by MGB. Timely evacuation of the residents situated along the rivers affected by floods in times of strong typhoons and severe weather condition. In the long term, families dwelling within the legal easements, salvage zones and other critical to floods should be relocated to safer grounds. Declare areas within legal easements of rivers (20 m. for agricultural/ rural and 40 m. for timberland/ forestland) as “no build zones” and “no dwelling zones” through local ordinances. Strict observance of national and local laws and rules on easements. Observe for rapid increase/decrease in creek/river water levels accompanied by increased turbidity. Observe for sunken or displaced road surfaces.', 'Provided with Advisory', '2022-11-09 11:12:06', NULL),
(219, 'Colongcogong', 'Zone 6', 'Flood', '2', 'Felix Colina, Liza Laurencio, Nelson Violeta, Lalaine Violeta', 'Timely evacuation of the residents situated along the rivers affected by floods in times of strong typhoons and severe weather condition. In the long term, families dwelling within the legal easements, salvage zones and other critical to floods should be relocated to safer grounds. Declare areas within legal easements of rivers (20 m. for agricultural/ rural and 40 m. for timberland/ forestland) as “no build zones” and “no dwelling zones” through local ordinances. Strict observance of national and local laws and rules on easements. Observe for rapid increase/decrease in creek/river water levels accompanied by increased turbidity.', 'Provided with Advisory', '2022-11-09 11:13:30', NULL),
(220, 'Colongcogong', 'Zone 7', 'Flood', '1', 'Nieves Baynosa and other adjacent houses.', 'Declare areas within legal easements of rivers (20 m. for agricultural/ rural and 40 m. for timberland/ forestland) as “no build zones” and “no dwelling zones” through local ordinances. Strict observance of national and local laws and rules on easements. Observe for rapid increase/decrease in creek/river water levels accompanied by increased turbidity. Observe for sunken or displaced road surfaces.', 'Provided with Advisory', '2022-11-09 11:14:17', NULL),
(221, 'Hanopol', 'Zone 3', 'Flood', '1', 'Residents along river and situated on the floodplain', 'Develop an early warning system for floods and flashfloods. Identify relocation/ evacuation site for assessment by MGB. Timely evacuation of the residents situated along the rivers affected by floods in times of strong typhoons and severe weather condition. In the long term, families dwelling within the legal easements, salvage zones and other critical to floods should be relocated to safer grounds. Declare areas within legal easements of rivers (20 m. for agricultural/ rural and 40 m. for timberland/ forestland) as “no build zones” and “no dwelling zones” through local ordinances. Strict observance of national and local laws and rules on easements. Observe for rapid increase/decrease in creek/river water levels accompanied by increased turbidity. Observe for sunken or displaced road surfaces.', 'Provided with Advisory', '2022-11-09 12:10:41', NULL),
(222, 'Hanopol', 'Zone 4', 'Flood', '1', 'Residents along river and situated on the floodplain', 'Develop an early warning system for floods and flashfloods. Identify relocation/ evacuation site for assessment by MGB. Timely evacuation of the residents situated along the rivers affected by floods in times of strong typhoons and severe weather condition. In the long term, families dwelling within the legal easements, salvage zones and other critical to floods should be relocated to safer grounds. Declare areas within legal easements of rivers (20 m. for agricultural/ rural and 40 m. for timberland/ forestland) as “no build zones” and “no dwelling zones” through local ordinances. Strict observance of national and local laws and rules on easements. Observe for rapid increase/decrease in creek/river water levels accompanied by increased turbidity. Observe for sunken or displaced road surfaces.', 'Provided with Advisory', '2022-11-09 12:11:04', NULL),
(223, 'Hanopol', 'Zone 7', 'Flood', '1', 'Residents along river and situated on the floodplain', 'Develop an early warning system for floods and flashfloods. Identify relocation/ evacuation site for assessment by MGB. Timely evacuation of the residents situated along the rivers affected by floods in times of strong typhoons and severe weather condition. In the long term, families dwelling within the legal easements, salvage zones and other critical to floods should be relocated to safer grounds. Declare areas within legal easements of rivers (20 m. for agricultural/ rural and 40 m. for timberland/ forestland) as “no build zones” and “no dwelling zones” through local ordinances. Strict observance of national and local laws and rules on easements. Observe for rapid increase/decrease in creek/river water levels accompanied by increased turbidity. Observe for sunken or displaced road surfaces.', 'Provided with Advisory', '2022-11-09 12:11:25', NULL),
(224, 'Ilawod', 'Zone 3', 'Flood', '3', 'All residents of the said areas affected by floods', 'Develop an early warning system for floods and flashfloods. Identify relocation/ evacuation site for assessment by MGB. Timely evacuation of the residents situated along the rivers affected by floods in times of strong typhoons and severe weather condition. In the long term, families dwelling within the legal easements, salvage zones and other critical to floods should be relocated to safer grounds. Declare areas within legal easements of rivers (20 m. for agricultural/ rural and 40 m. for timberland/ forestland) as “no build zones” and “no dwelling zones” through local ordinances. Strict observance of national and local laws and rules on easements. Observe for rapid increase/decrease in creek/river water levels accompanied by increased turbidity. Observe for sunken or displaced road surfaces.', 'Provided with Advisory', '2022-11-09 12:12:31', NULL),
(225, 'Ilawod', 'Zone 5', 'Flood', '1', 'All residents of the said areas affected by floods', 'Develop an early warning system for floods and flashfloods. Identify relocation/ evacuation site for assessment by MGB. Timely evacuation of the residents situated along the rivers affected by floods in times of strong typhoons and severe weather condition. In the long term, families dwelling within the legal easements, salvage zones and other critical to floods should be relocated to safer grounds. Declare areas within legal easements of rivers (20 m. for agricultural/ rural and 40 m. for timberland/ forestland) as “no build zones” and “no dwelling zones” through local ordinances. Strict observance of national and local laws and rules on easements. Observe for rapid increase/decrease in creek/river water levels accompanied by increased turbidity. Observe for sunken or displaced road surfaces.', 'Provided with Advisory', '2022-11-09 12:12:52', NULL),
(226, 'Lubas', 'Zone 5', 'Flood', '1', 'All residents of the said areas situated along the creek/ rivers and dry creek.', 'Develop an early warning system for floods and flashfloods. Identify relocation/ evacuation site for assessment by MGB. Timely evacuation of the residents situated along the rivers affected by floods in times of strong typhoons and severe weather condition. In the long term, families dwelling within the legal easements, salvage zones and other critical to floods should be relocated to safer grounds. Declare areas within legal easements of rivers (20 m. for agricultural/ rural and 40 m. for timberland/ forestland) as “no build zones” and “no dwelling zones” through local ordinances. Strict observance of national and local laws and rules on easements. Observe for rapid increase/decrease in creek/river water levels accompanied by increased turbidity. Observe for sunken or displaced road surfaces.', 'Provided with Advisory', '2022-11-09 12:18:01', NULL),
(227, 'Lubas', 'Zone 6', 'Flood', '2', 'All residents of the said areas situated along the creek/ rivers and dry creek.', 'Develop an early warning system for floods and flashfloods. Identify relocation/ evacuation site for assessment by MGB. Timely evacuation of the residents situated along the rivers affected by floods in times of strong typhoons and severe weather condition. In the long term, families dwelling within the legal easements, salvage zones and other critical to floods should be relocated to safer grounds. Declare areas within legal easements of rivers (20 m. for agricultural/ rural and 40 m. for timberland/ forestland) as “no build zones” and “no dwelling zones” through local ordinances. Strict observance of national and local laws and rules on easements. Observe for rapid increase/decrease in creek/river water levels accompanied by increased turbidity. Observe for sunken or displaced road surfaces.', 'Provided with Advisory', '2022-11-09 12:18:49', NULL),
(228, 'Mandiclum', 'Zone 5', 'Flood', '2', 'All residents of the said areas situated along the creek/rivers and adjacent low-lying areas', 'Develop an early warning system for floods and flashfloods. Identify relocation/ evacuation site for assessment by MGB. Timely evacuation of the residents situated along the rivers affected by floods in times of strong typhoons and severe weather condition. In the long term, families dwelling within the legal easements, salvage zones and other critical to floods should be relocated to safer grounds. Declare areas within legal easements of rivers (20 m. for agricultural/ rural and 40 m. for timberland/ forestland) as “no build zones” and “no dwelling zones” through local ordinances. Strict observance of national and local laws and rules on easements. Observe for rapid increase/decrease in creek/river water levels accompanied by increased turbidity. Observe for sunken or displaced road surfaces.', 'Provided with Advisory', '2022-11-09 12:21:01', NULL),
(229, 'Mandiclum', 'Zone 6', 'Flood', '2', 'All residents of the said areas situated along the creek/rivers and adjacent low-lying areas', 'Develop an early warning system for floods and flashfloods. Identify relocation/ evacuation site for assessment by MGB. Timely evacuation of the residents situated along the rivers affected by floods in times of strong typhoons and severe weather condition. In the long term, families dwelling within the legal easements, salvage zones and other critical to floods should be relocated to safer grounds. Declare areas within legal easements of rivers (20 m. for agricultural/ rural and 40 m. for timberland/ forestland) as “no build zones” and “no dwelling zones” through local ordinances. Strict observance of national and local laws and rules on easements. Observe for rapid increase/decrease in creek/river water levels accompanied by increased turbidity. Observe for sunken or displaced road surfaces.', 'Provided with Advisory', '2022-11-09 12:21:29', NULL),
(230, 'Maqueda', 'Zone 2', 'Flood', '2', 'All residents of the said areas situated along the shoreline and coastal plain. ', 'Develop an early warning system for floods and flashfloods. Identify relocation/ evacuation site for assessment by MGB. Timely evacuation of the residents situated along the rivers affected by floods in times of strong typhoons and severe weather condition. In the long term, families dwelling within the legal easements, salvage zones and other critical to floods should be relocated to safer grounds. Declare areas within legal easements of rivers (20 m. for agricultural/ rural and 40 m. for timberland/ forestland) as “no build zones” and “no dwelling zones” through local ordinances. Strict observance of national and local laws and rules on easements. Observe for rapid increase/decrease in creek/river water levels accompanied by increased turbidity. Observe for sunken or displaced road surfaces.', 'Provided with Advisory', '2022-11-09 12:23:58', NULL),
(231, 'Maqueda', 'Zone 3', 'Flood', '1', 'All residents of the said areas situated along the shoreline and coastal plain. ', 'Develop an early warning system for floods and flashfloods. Identify relocation/ evacuation site for assessment by MGB. Timely evacuation of the residents situated along the rivers affected by floods in times of strong typhoons and severe weather condition. In the long term, families dwelling within the legal easements, salvage zones and other critical to floods should be relocated to safer grounds. Declare areas within legal easements of rivers (20 m. for agricultural/ rural and 40 m. for timberland/ forestland) as “no build zones” and “no dwelling zones” through local ordinances. Strict observance of national and local laws and rules on easements. Observe for rapid increase/decrease in creek/river water levels accompanied by increased turbidity. Observe for sunken or displaced road surfaces.', 'Provided with Advisory', '2022-11-09 12:24:22', NULL),
(232, 'Pili-Centro', 'Zone 4', 'Flood', '2', 'Residents along the creeks/ rivers and low-lying areas', 'Develop an early warning system for floods and flashfloods. Identify relocation/ evacuation site for assessment by MGB. Timely evacuation of the residents situated along the rivers affected by floods in times of strong typhoons and severe weather condition. In the long term, families dwelling within the legal easements, salvage zones and other critical to floods should be relocated to safer grounds. Declare areas within legal easements of rivers (20 m. for agricultural/ rural and 40 m. for timberland/ forestland) as “no build zones” and “no dwelling zones” through local ordinances. Strict observance of national and local laws and rules on easements. Observe for rapid increase/decrease in creek/river water levels accompanied by increased turbidity. Observe for sunken or displaced road surfaces.', 'Provided with Advisory', '2022-11-09 12:26:14', NULL),
(233, 'Pili-Centro', 'Zone 6', 'Flood', '3', 'Residents along the creeks/ rivers and low-lying areas', 'Develop an early warning system for floods and flashfloods. Identify relocation/ evacuation site for assessment by MGB. Timely evacuation of the residents situated along the rivers affected by floods in times of strong typhoons and severe weather condition. In the long term, families dwelling within the legal easements, salvage zones and other critical to floods should be relocated to safer grounds. Declare areas within legal easements of rivers (20 m. for agricultural/ rural and 40 m. for timberland/ forestland) as “no build zones” and “no dwelling zones” through local ordinances. Strict observance of national and local laws and rules on easements. Observe for rapid increase/decrease in creek/river water levels accompanied by increased turbidity. Observe for sunken or displaced road surfaces.', 'Provided with Advisory', '2022-11-09 12:26:35', NULL),
(234, 'Cabacongan', 'Zone 3', 'Tsunami', '1', 'none', 'none', 'none', '2022-11-09 12:31:28', '2022-11-09 12:31:38'),
(235, 'Colongcogong', 'Zone 5', 'Tsunami', '1', 'none', 'none', 'none', '2022-11-09 12:36:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `logstbl`
--

CREATE TABLE `logstbl` (
  `id` int(10) NOT NULL,
  `user` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `logdate` datetime NOT NULL,
  `action` varchar(101) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `logstbl`
--

INSERT INTO `logstbl` (`id`, `user`, `logdate`, `action`) VALUES
(1, 'Cezar John Encisa', '0000-00-00 00:00:00', 'UPdated the recommendation'),
(2, 'Cezar John Encisa', '2022-11-05 00:00:00', 'Added Data in Agaas, Zone 3'),
(3, 'Cezar John Encisa', '2022-11-05 00:00:00', 'Added Landslide Data in BarangayAgaas, Zone 6'),
(4, 'Cezar John Encisa', '2022-11-05 18:07:39', 'Update Landslide Data in Barangay Agaas, Zone 7'),
(5, 'Rose Capistrano', '2022-11-05 18:37:20', 'Updated Landslide Data in Barangay Agaas, Zone 6'),
(6, 'Rose Capistrano', '2022-11-05 19:01:50', 'Updated Landslide Data in Barangay Agaas, Zone 7'),
(7, 'Rose Capistrano', '2022-11-05 19:04:45', 'Updated Landslide Data in Barangay Agaas, Zone 1'),
(8, 'Rose Capistrano', '2022-11-05 20:05:48', 'Updated Flood Data in Barangay Pili-Centro, Zone 4'),
(9, 'Rose Capistrano', '2022-11-05 20:06:30', 'Updated Flood Data in Barangay Pili-Centro, Zone 4'),
(10, 'Rose Capistrano', '2022-11-05 20:18:12', 'Updated Erosion Data in Barangay Antolon, Zone 7'),
(11, 'Rose Capistrano', '2022-11-05 20:36:03', 'Updated Tsunami Data in Barangay Cabacongan, Zone 5'),
(12, 'Rose Capistrano', '2022-11-05 22:23:40', 'Added Tsunami Data in Barangay Cabacongan, Zone 3'),
(13, 'Rose Capistrano', '2022-11-05 22:30:03', 'Added Tsunami Data in Barangay Cabacongan, Zone 1'),
(14, 'Rose Capistrano', '2022-11-05 22:31:05', 'Added Tsunami Data in Barangay Cabacongan, Zone 2'),
(15, 'Rose Capistrano', '2022-11-05 22:35:47', 'Added Tsunami Data in Barangay Canatuan, Zone 1'),
(16, 'Rose Capistrano', '2022-11-05 22:41:28', 'Added Tsunami Data in Barangay Colongcogong, Zone 1'),
(17, 'Rose Capistrano', '2022-11-05 22:43:44', 'Added Tsunami Data in Barangay Gibgos, Zone 3'),
(18, 'Rose Capistrano', '2022-11-05 22:46:39', 'Added Tsunami Data in Barangay San Vicente, Zone 2'),
(19, 'Rose Capistrano', '2022-11-05 22:48:33', 'Added Tsunami Data in Barangay Tabiguian, Zone 4'),
(20, 'Rose Capistrano', '2022-11-06 20:20:35', 'Added Tsunami Data in Barangay Maqueda, Zone 1'),
(21, 'Rose Capistrano', '2022-11-06 20:21:09', 'Added Landslide Data in Barangay Maqueda, Zone 1'),
(22, 'Rose Capistrano', '2022-11-06 20:30:52', 'Added Erosion Data in Barangay Antolon, Zone 7'),
(23, 'Rose Capistrano', '2022-11-06 20:45:52', 'Added Erosion Data in Barangay Hanopol, Zone 1'),
(24, 'Rose Capistrano', '2022-11-06 20:49:22', 'Added Erosion Data in Barangay Pili-Centro, Zone 1'),
(25, 'Rose Capistrano', '2022-11-06 21:02:08', 'Added Landslide Data in Barangay Pili-Centro, Zone 5'),
(26, 'Rose Capistrano', '2022-11-06 21:06:38', 'Added Landslide Data in Barangay Tabiguian, Zone 3'),
(27, 'Rose Capistrano', '2022-11-06 21:52:20', 'Added Landslide Data in Barangay Tabiguian, Zone 2'),
(28, 'Rose Capistrano', '2022-11-06 21:52:54', 'Added Landslide Data in Barangay Tabiguian, Zone 4'),
(29, 'Rose Capistrano', '2022-11-06 22:07:34', 'Added Landslide Data in Barangay Tabgon, Zone 2'),
(30, 'Rose Capistrano', '2022-11-06 22:42:46', 'Added Flood Data in Barangay Tabiguian, Zone 6'),
(31, 'Rose Capistrano', '2022-11-06 23:07:28', 'Added Erosion Data in Barangay Pili-Centro, Zone 3'),
(32, 'Rose Capistrano', '2022-11-06 23:15:20', 'Added Tsunami Data in Barangay Gibgos, Zone 2'),
(33, 'Rose Capistrano', '2022-11-07 08:33:59', 'Updated Statistics Data in Barangay Tabiguian, Zone 5'),
(34, 'Rose Capistrano', '2022-11-07 08:37:38', 'Deleted Statistics Data in Barangay , '),
(35, 'Rose Capistrano', '2022-11-07 08:51:13', 'Added Statistics Data in Barangay Agaas, Zone 3'),
(36, 'Rose Capistrano', '2022-11-07 08:51:22', 'Updated Statistics Data in Barangay Agaas, Zone 5'),
(37, 'Rose Capistrano', '2022-11-07 08:55:29', 'Deleted Statistics Data in Barangay Agaas'),
(38, 'Rose Capistrano', '2022-11-07 08:59:38', 'Added Statistics Data in Barangay Agaas, Zone 5'),
(39, 'Rose Capistrano', '2022-11-07 08:59:54', 'Zone was deleted in Barangay Agaas'),
(40, 'Rose Capistrano', '2022-11-07 09:18:33', 'Added Statistics Data in Barangay Tabiguian, Zone 6'),
(41, 'Rose Capistrano', '2022-11-07 09:18:42', 'Updated Statistics Data in Barangay Tabiguian, Zone 5'),
(42, 'Rose Capistrano', '2022-11-07 09:19:25', 'Zone was deleted in Barangay Tabiguian'),
(43, 'Rose Capistrano', '2022-11-07 09:43:39', 'Updated Statistics Data in Barangay Ilawod, Zone 5'),
(44, 'Rose Capistrano', '2022-11-07 09:51:32', 'Zone was deleted in Barangay Ilawod'),
(45, 'Rose Capistrano', '2022-11-07 09:55:33', 'Added Flood Data in Barangay Agaas, Zone 2'),
(46, 'Rose Capistrano', '2022-11-07 09:55:52', 'Zone data was deleted in Barangay Tabiguian'),
(47, 'Rose Capistrano', '2022-11-07 09:57:23', 'Added Flood Data in Barangay Agaas, Zone 2'),
(48, 'Rose Capistrano', '2022-11-07 09:58:32', 'Deleted Flood Zone data in Barangay Agaas'),
(49, 'Rose Capistrano', '2022-11-07 10:48:11', 'Added Flood Data in Barangay Tabiguian, Zone 3'),
(50, 'Rose Capistrano', '2022-11-07 10:49:16', 'Flood zone records was deleted in Barangay Tabiguian'),
(51, 'Barangay Agaas', '2022-11-07 11:38:03', 'Zone statistics was deleted in Barangay Agaas'),
(52, 'Barangay Agaas', '2022-11-07 11:38:41', 'Added Statistics Data in Barangay Agaas, Zone 5'),
(53, 'Barangay Agaas', '2022-11-07 11:38:59', 'Updated Statistics Data in Barangay Agaas, Zone 5'),
(54, 'Queenie Ann Sopot', '2022-11-08 02:42:09', 'Updated Landslide Data in Barangay Agaas, Zone 1'),
(55, 'Queenie Ann Sopot', '2022-11-08 02:43:03', 'Updated Landslide Data in Barangay Agaas, Zone 1'),
(56, 'Queenie Ann Sopot', '2022-11-08 02:43:30', 'Added Landslide Data in Barangay Agaas, Zone 3'),
(57, 'Queenie Ann Sopot', '2022-11-08 02:45:54', 'Landslide zone records was deleted in Barangay Agaas'),
(58, 'Queenie Ann Sopot', '2022-11-08 03:04:40', 'Added Landslide Data in Barangay Cabacongan, Zone 2'),
(59, 'Queenie Ann Sopot', '2022-11-08 03:05:06', 'Updated Landslide Data in Barangay Cabacongan, Zone 1'),
(60, 'Queenie Ann Sopot', '2022-11-08 03:07:46', 'Added Landslide Data in Barangay Cabacongan, Zone 7'),
(61, 'Queenie Ann Sopot', '2022-11-08 03:11:21', 'Added Landslide Data in Barangay Canatuan, Zone 4'),
(62, 'Queenie Ann Sopot', '2022-11-08 03:13:52', 'Updated Landslide Data in Barangay Colongcogong, Zone 1'),
(63, 'Queenie Ann Sopot', '2022-11-08 03:14:20', 'Updated Landslide Data in Barangay Colongcogong, Zone 1'),
(64, 'Queenie Ann Sopot', '2022-11-08 03:14:58', 'Added Landslide Data in Barangay Colongcogong, Zone 2'),
(65, 'Queenie Ann Sopot', '2022-11-08 03:19:13', 'Updated Landslide Data in Barangay Guijalo, Zone 1'),
(66, 'Queenie Ann Sopot', '2022-11-08 03:21:48', 'Added Landslide Data in Barangay Guijalo, Zone 2'),
(67, 'Queenie Ann Sopot', '2022-11-08 03:22:29', 'Added Landslide Data in Barangay Guijalo, Zone 4'),
(68, 'Queenie Ann Sopot', '2022-11-08 03:24:39', 'Updated Landslide Data in Barangay Ilawod, Zone 2'),
(69, 'Queenie Ann Sopot', '2022-11-08 03:26:48', 'Added Landslide Data in Barangay Ilawod, Zone 5'),
(70, 'Queenie Ann Sopot', '2022-11-08 03:51:04', 'Updated Landslide Data in Barangay Maqueda, Zone 1'),
(71, 'Queenie Ann Sopot', '2022-11-08 03:52:50', 'Added Landslide Data in Barangay Maqueda, Zone 2'),
(72, 'Queenie Ann Sopot', '2022-11-08 03:58:35', 'Added Landslide Data in Barangay Maqueda, Zone 3'),
(73, 'Queenie Ann Sopot', '2022-11-08 04:03:30', 'Updated Landslide Data in Barangay San Vicente, Zone 1'),
(74, 'Queenie Ann Sopot', '2022-11-08 04:06:56', 'Updated Landslide Data in Barangay San Vicente, Zone 1'),
(75, 'Queenie Ann Sopot', '2022-11-08 04:10:30', 'Added Landslide Data in Barangay San Vicente, Zone 2'),
(76, 'Queenie Ann Sopot', '2022-11-08 04:11:52', 'Added Landslide Data in Barangay San Vicente, Zone 7'),
(77, 'Queenie Ann Sopot', '2022-11-08 04:18:56', 'Updated Landslide Data in Barangay Tabgon, Zone 5'),
(78, 'Queenie Ann Sopot', '2022-11-08 04:20:29', 'Added Landslide Data in Barangay Tabgon, Zone 6'),
(79, 'Queenie Ann Sopot', '2022-11-08 04:31:09', 'Updated Flood Data in Barangay Agaas, Zone 5'),
(80, 'Queenie Ann Sopot', '2022-11-08 04:34:19', 'Updated Flood Data in Barangay Agaas, Zone 5'),
(81, 'Queenie Ann Sopot', '2022-11-08 04:40:33', 'Added Flood Data in Barangay Agaas, Zone 6'),
(82, 'Queenie Ann Sopot', '2022-11-08 05:14:57', 'Added Flood Data in Barangay Agaas, Zone 6'),
(83, 'Queenie Ann Sopot', '2022-11-08 05:20:30', 'Added Flood Data in Barangay Agaas, Zone 6'),
(84, 'Queenie Ann Sopot', '2022-11-08 05:30:41', 'Added Flood Data in Barangay Agaas, Zone 6'),
(85, 'Queenie Ann Sopot', '2022-11-08 05:38:43', 'Flood zone records was deleted in Barangay Agaas'),
(86, 'Rose Capistrano', '2022-11-08 08:19:47', 'Added Tsunami Data in Barangay Cabacongan, Zone 1'),
(87, 'Rose Capistrano', '2022-11-08 08:20:17', 'Tsunami zone records was deleted in Barangay Cabacongan'),
(88, 'Rose Capistrano', '2022-11-08 08:20:35', 'Added Tsunami Data in Barangay Cabacongan, Zone 1'),
(89, 'Rose Capistrano', '2022-11-08 08:20:56', 'Tsunami zone records was deleted in Barangay Cabacongan'),
(90, 'Rose Capistrano', '2022-11-08 08:21:43', 'Added Landslide Data in Barangay Agaas, Zone 1'),
(91, 'Rose Capistrano', '2022-11-08 08:22:33', 'Landslide zone records was deleted in Barangay Agaas'),
(92, 'Queenie Ann Sopot', '2022-11-08 10:33:54', 'Flood zone records was deleted in Barangay Agaas'),
(93, 'Queenie Ann Sopot', '2022-11-08 10:34:08', 'Updated Flood Data in Barangay Agaas, Zone 7'),
(94, 'Queenie Ann Sopot', '2022-11-09 10:42:46', 'Updated Flood Data in Barangay Antolon, Zone 3'),
(95, 'Queenie Ann Sopot', '2022-11-09 10:43:14', 'Added Flood Data in Barangay Antolon, Zone 5'),
(96, 'Queenie Ann Sopot', '2022-11-09 10:46:43', 'Added Flood Data in Barangay Antolon, Zone 6'),
(97, 'Queenie Ann Sopot', '2022-11-09 10:47:42', 'Added Flood Data in Barangay Antolon, Zone 7'),
(98, 'Queenie Ann Sopot', '2022-11-09 10:52:42', 'Updated Flood Data in Barangay Bahay, Zone 1'),
(99, 'Queenie Ann Sopot', '2022-11-09 10:55:08', 'Added Flood Data in Barangay Bahay, Zone 2'),
(100, 'Queenie Ann Sopot', '2022-11-09 10:56:43', 'Added Flood Data in Barangay Bahay, Zone 3'),
(101, 'Queenie Ann Sopot', '2022-11-09 10:57:34', 'Added Flood Data in Barangay Bahay, Zone 4'),
(102, 'Queenie Ann Sopot', '2022-11-09 10:58:14', 'Added Flood Data in Barangay Bahay, Zone 5'),
(103, 'Queenie Ann Sopot', '2022-11-09 11:07:44', 'Updated Flood Data in Barangay Colongcogong, Zone 1'),
(104, 'Queenie Ann Sopot', '2022-11-09 11:09:19', 'Added Flood Data in Barangay Colongcogong, Zone 2'),
(105, 'Queenie Ann Sopot', '2022-11-09 11:10:04', 'Added Flood Data in Barangay Colongcogong, Zone 3'),
(106, 'Queenie Ann Sopot', '2022-11-09 11:11:02', 'Added Flood Data in Barangay Colongcogong, Zone 4'),
(107, 'Queenie Ann Sopot', '2022-11-09 11:12:06', 'Added Flood Data in Barangay Colongcogong, Zone 5'),
(108, 'Queenie Ann Sopot', '2022-11-09 11:13:30', 'Added Flood Data in Barangay Colongcogong, Zone 6'),
(109, 'Queenie Ann Sopot', '2022-11-09 11:14:17', 'Added Flood Data in Barangay Colongcogong, Zone 7'),
(110, 'Queenie Ann Sopot', '2022-11-09 12:09:52', 'Updated Flood Data in Barangay Hanopol, Zone 1'),
(111, 'Queenie Ann Sopot', '2022-11-09 12:10:02', 'Updated Flood Data in Barangay Hanopol, Zone 2'),
(112, 'Queenie Ann Sopot', '2022-11-09 12:10:41', 'Added Flood Data in Barangay Hanopol, Zone 3'),
(113, 'Queenie Ann Sopot', '2022-11-09 12:11:04', 'Added Flood Data in Barangay Hanopol, Zone 4'),
(114, 'Queenie Ann Sopot', '2022-11-09 12:11:25', 'Added Flood Data in Barangay Hanopol, Zone 7'),
(115, 'Queenie Ann Sopot', '2022-11-09 12:12:03', 'Updated Flood Data in Barangay Ilawod, Zone 1'),
(116, 'Queenie Ann Sopot', '2022-11-09 12:12:31', 'Added Flood Data in Barangay Ilawod, Zone 3'),
(117, 'Queenie Ann Sopot', '2022-11-09 12:12:52', 'Added Flood Data in Barangay Ilawod, Zone 5'),
(118, 'Queenie Ann Sopot', '2022-11-09 12:17:16', 'Updated Flood Data in Barangay Lubas, Zone 4'),
(119, 'Queenie Ann Sopot', '2022-11-09 12:18:01', 'Added Flood Data in Barangay Lubas, Zone 5'),
(120, 'Queenie Ann Sopot', '2022-11-09 12:18:09', 'Updated Flood Data in Barangay Lubas, Zone 4'),
(121, 'Queenie Ann Sopot', '2022-11-09 12:18:49', 'Added Flood Data in Barangay Lubas, Zone 6'),
(122, 'Queenie Ann Sopot', '2022-11-09 12:20:39', 'Updated Flood Data in Barangay Mandiclum, Zone 4'),
(123, 'Queenie Ann Sopot', '2022-11-09 12:21:01', 'Added Flood Data in Barangay Mandiclum, Zone 5'),
(124, 'Queenie Ann Sopot', '2022-11-09 12:21:29', 'Added Flood Data in Barangay Mandiclum, Zone 6'),
(125, 'Queenie Ann Sopot', '2022-11-09 12:22:06', 'Updated Flood Data in Barangay Maqueda, Zone 1'),
(126, 'Queenie Ann Sopot', '2022-11-09 12:23:58', 'Added Flood Data in Barangay Maqueda, Zone 2'),
(127, 'Queenie Ann Sopot', '2022-11-09 12:24:22', 'Added Flood Data in Barangay Maqueda, Zone 3'),
(128, 'Queenie Ann Sopot', '2022-11-09 12:25:19', 'Updated Flood Data in Barangay Pili-Centro, Zone 3'),
(129, 'Queenie Ann Sopot', '2022-11-09 12:26:14', 'Added Flood Data in Barangay Pili-Centro, Zone 4'),
(130, 'Queenie Ann Sopot', '2022-11-09 12:26:35', 'Added Flood Data in Barangay Pili-Centro, Zone 6'),
(131, 'Queenie Ann Sopot', '2022-11-09 12:28:48', 'Updated Tsunami Data in Barangay Maqueda, Zone 1'),
(132, 'Queenie Ann Sopot', '2022-11-09 12:31:28', 'Added Tsunami Data in Barangay Cabacongan, Zone 3'),
(133, 'Queenie Ann Sopot', '2022-11-09 12:31:38', 'Updated Tsunami Data in Barangay Cabacongan, Zone 3'),
(134, 'Queenie Ann Sopot', '2022-11-09 12:36:31', 'Added Tsunami Data in Barangay Colongcogong, Zone 5'),
(135, 'Cezar John Encisa', '2022-11-15 06:46:12', 'Added Flood Data in Barangay Agaas, Zone 1'),
(136, 'Cezar John Encisa', '2022-11-15 06:46:18', 'Flood zone records was deleted in Barangay Agaas'),
(137, 'Cezar John Encisa', '2022-11-23 01:27:33', 'Added Statistics Data in Barangay Agaas, Zone 1'),
(138, 'Cezar John Encisa', '2022-11-23 01:28:26', 'Added Statistics Data in Barangay Agaas, Zone 1');

-- --------------------------------------------------------

--
-- Table structure for table `map_hover`
--

CREATE TABLE `map_hover` (
  `id` int(5) NOT NULL,
  `disaster` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `barangay` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `risk_level` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `affected_zones` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `map_hover`
--

INSERT INTO `map_hover` (`id`, `disaster`, `barangay`, `risk_level`, `affected_zones`) VALUES
(1, 'tsunami', 'maqueda', 'severe', '1,2,3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barangay_data`
--
ALTER TABLE `barangay_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disaster_records`
--
ALTER TABLE `disaster_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logstbl`
--
ALTER TABLE `logstbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `map_hover`
--
ALTER TABLE `map_hover`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `barangay_data`
--
ALTER TABLE `barangay_data`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT for table `disaster_records`
--
ALTER TABLE `disaster_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237;

--
-- AUTO_INCREMENT for table `logstbl`
--
ALTER TABLE `logstbl`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `map_hover`
--
ALTER TABLE `map_hover`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
