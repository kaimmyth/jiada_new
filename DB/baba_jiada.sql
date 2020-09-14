-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2019 at 05:53 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baba_jiada`
--

-- --------------------------------------------------------

--
-- Table structure for table `its_category`
--

CREATE TABLE `its_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(50) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `pos_id` int(11) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `is_default` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_date` date DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_category`
--

INSERT INTO `its_category` (`id`, `category_name`, `description`, `pos_id`, `is_active`, `is_default`, `created_by`, `deleted_by`, `deleted_date`, `created_at`, `updated_at`) VALUES
(1, 'Mobile', 'desc', 8, NULL, NULL, NULL, NULL, NULL, '2019-10-21', NULL),
(2, 'Laptop', 'desc', 8, NULL, NULL, NULL, NULL, NULL, '2019-10-21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `its_cities`
--

CREATE TABLE `its_cities` (
  `id` int(10) UNSIGNED NOT NULL,
  `org_id` int(11) DEFAULT NULL,
  `country_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0 COMMENT '1 ="Delete"',
  `ip_address` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` decimal(10,0) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `its_cities`
--

INSERT INTO `its_cities` (`id`, `org_id`, `country_id`, `state_id`, `city`, `state`, `status`, `is_deleted`, `ip_address`, `modified_date`, `created_at`) VALUES
(1, NULL, 0, 0, 'Mumbai', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(2, NULL, 0, 0, 'Delhi', 'Delhi', 0, 0, '', '2019-08-27 07:37:26', NULL),
(3, NULL, 0, 0, 'Bengaluru', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(4, NULL, 0, 0, 'Ahmedabad', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(5, NULL, 0, 0, 'Hyderabad', 'Telangana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(6, NULL, 0, 0, 'Chennai', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(7, NULL, 0, 0, 'Kolkata', 'West Bengal', 0, 0, '', '2019-08-27 07:37:26', NULL),
(8, NULL, 0, 0, 'Pune', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(9, NULL, 0, 0, 'Jaipur', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(10, NULL, 0, 0, 'Surat', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(11, NULL, 0, 0, 'Lucknow', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(12, NULL, 0, 0, 'Kanpur', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(13, NULL, 0, 0, 'Nagpur', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(14, NULL, 0, 0, 'Patna', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(15, NULL, 0, 0, 'Indore', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(16, NULL, 0, 0, 'Thane', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(17, NULL, 0, 0, 'Bhopal', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(18, NULL, 0, 0, 'Visakhapatnam', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(19, NULL, 0, 0, 'Vadodara', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(20, NULL, 0, 0, 'Firozabad', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(21, NULL, 0, 0, 'Ludhiana', 'Punjab', 0, 0, '', '2019-08-27 07:37:26', NULL),
(22, NULL, 0, 0, 'Rajkot', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(23, NULL, 0, 0, 'Agra', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(24, NULL, 0, 0, 'Siliguri', 'West Bengal', 0, 0, '', '2019-08-27 07:37:26', NULL),
(25, NULL, 0, 0, 'Nashik', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(26, NULL, 0, 0, 'Faridabad', 'Haryana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(27, NULL, 0, 0, 'Patiala', 'Punjab', 0, 0, '', '2019-08-27 07:37:26', NULL),
(28, NULL, 0, 0, 'Meerut', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(29, NULL, 0, 0, 'Kalyan-Dombivali', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(30, NULL, 0, 0, 'Vasai-Virar', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(31, NULL, 0, 0, 'Varanasi', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(32, NULL, 0, 0, 'Srinagar', 'Jammu and Kashmir', 0, 0, '', '2019-08-27 07:37:26', NULL),
(33, NULL, 0, 0, 'Dhanbad', 'Jharkhand', 0, 0, '', '2019-08-27 07:37:26', NULL),
(34, NULL, 0, 0, 'Jodhpur', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(35, NULL, 0, 0, 'Amritsar', 'Punjab', 0, 0, '', '2019-08-27 07:37:26', NULL),
(36, NULL, 0, 0, 'Raipur', 'Chhattisgarh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(37, NULL, 0, 0, 'Allahabad', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(38, NULL, 0, 0, 'Coimbatore', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(39, NULL, 0, 0, 'Jabalpur', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(40, NULL, 0, 0, 'Gwalior', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(41, NULL, 0, 0, 'Vijayawada', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(42, NULL, 0, 0, 'Madurai', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(43, NULL, 0, 0, 'Guwahati', 'Assam', 0, 0, '', '2019-08-27 07:37:26', NULL),
(44, NULL, 0, 0, 'Chandigarh', 'Chandigarh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(45, NULL, 0, 0, 'Hubli-Dharwad', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(46, NULL, 0, 0, 'Amroha', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(47, NULL, 0, 0, 'Moradabad', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(48, NULL, 0, 0, 'Gurgaon', 'Haryana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(49, NULL, 0, 0, 'Aligarh', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(50, NULL, 0, 0, 'Solapur', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(51, NULL, 0, 0, 'Ranchi', 'Jharkhand', 0, 0, '', '2019-08-27 07:37:26', NULL),
(52, NULL, 0, 0, 'Jalandhar', 'Punjab', 0, 0, '', '2019-08-27 07:37:26', NULL),
(53, NULL, 0, 0, 'Tiruchirappalli', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(54, NULL, 0, 0, 'Bhubaneswar', 'Odisha', 0, 0, '', '2019-08-27 07:37:26', NULL),
(55, NULL, 0, 0, 'Salem', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(56, NULL, 0, 0, 'Warangal', 'Telangana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(57, NULL, 0, 0, 'Mira-Bhayandar', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(58, NULL, 0, 0, 'Thiruvananthapuram', 'Kerala', 0, 0, '', '2019-08-27 07:37:26', NULL),
(59, NULL, 0, 0, 'Bhiwandi', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(60, NULL, 0, 0, 'Saharanpur', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(61, NULL, 0, 0, 'Guntur', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(62, NULL, 0, 0, 'Amravati', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(63, NULL, 0, 0, 'Bikaner', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(64, NULL, 0, 0, 'Noida', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(65, NULL, 0, 0, 'Jamshedpur', 'Jharkhand', 0, 0, '', '2019-08-27 07:37:26', NULL),
(66, NULL, 0, 0, 'Bhilai Nagar', 'Chhattisgarh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(67, NULL, 0, 0, 'Cuttack', 'Odisha', 0, 0, '', '2019-08-27 07:37:26', NULL),
(68, NULL, 0, 0, 'Kochi', 'Kerala', 0, 0, '', '2019-08-27 07:37:26', NULL),
(69, NULL, 0, 0, 'Udaipur', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(70, NULL, 0, 0, 'Bhavnagar', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(71, NULL, 0, 0, 'Dehradun', 'Uttarakhand', 0, 0, '', '2019-08-27 07:37:26', NULL),
(72, NULL, 0, 0, 'Asansol', 'West Bengal', 0, 0, '', '2019-08-27 07:37:26', NULL),
(73, NULL, 0, 0, 'Nanded-Waghala', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(74, NULL, 0, 0, 'Ajmer', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(75, NULL, 0, 0, 'Jamnagar', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(76, NULL, 0, 0, 'Ujjain', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(77, NULL, 0, 0, 'Sangli', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(78, NULL, 0, 0, 'Loni', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(79, NULL, 0, 0, 'Jhansi', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(80, NULL, 0, 0, 'Pondicherry', 'Puducherry', 0, 0, '', '2019-08-27 07:37:26', NULL),
(81, NULL, 0, 0, 'Nellore', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(82, NULL, 0, 0, 'Jammu', 'Jammu and Kashmir', 0, 0, '', '2019-08-27 07:37:26', NULL),
(83, NULL, 0, 0, 'Belagavi', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(84, NULL, 0, 0, 'Raurkela', 'Odisha', 0, 0, '', '2019-08-27 07:37:26', NULL),
(85, NULL, 0, 0, 'Mangaluru', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(86, NULL, 0, 0, 'Tirunelveli', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(87, NULL, 0, 0, 'Malegaon', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(88, NULL, 0, 0, 'Gaya', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(89, NULL, 0, 0, 'Tiruppur', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(90, NULL, 0, 0, 'Davanagere', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(91, NULL, 0, 0, 'Kozhikode', 'Kerala', 0, 0, '', '2019-08-27 07:37:26', NULL),
(92, NULL, 0, 0, 'Akola', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(93, NULL, 0, 0, 'Kurnool', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(94, NULL, 0, 0, 'Bokaro Steel City', 'Jharkhand', 0, 0, '', '2019-08-27 07:37:26', NULL),
(95, NULL, 0, 0, 'Rajahmundry', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(96, NULL, 0, 0, 'Ballari', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(97, NULL, 0, 0, 'Agartala', 'Tripura', 0, 0, '', '2019-08-27 07:37:26', NULL),
(98, NULL, 0, 0, 'Bhagalpur', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(99, NULL, 0, 0, 'Latur', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(100, NULL, 0, 0, 'Dhule', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(101, NULL, 0, 0, 'Korba', 'Chhattisgarh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(102, NULL, 0, 0, 'Bhilwara', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(103, NULL, 0, 0, 'Brahmapur', 'Odisha', 0, 0, '', '2019-08-27 07:37:26', NULL),
(104, NULL, 0, 0, 'Mysore', 'Karnatka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(105, NULL, 0, 0, 'Muzaffarpur', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(106, NULL, 0, 0, 'Ahmednagar', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(107, NULL, 0, 0, 'Kollam', 'Kerala', 0, 0, '', '2019-08-27 07:37:26', NULL),
(108, NULL, 0, 0, 'Raghunathganj', 'West Bengal', 0, 0, '', '2019-08-27 07:37:26', NULL),
(109, NULL, 0, 0, 'Bilaspur', 'Chhattisgarh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(110, NULL, 0, 0, 'Shahjahanpur', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(111, NULL, 0, 0, 'Thrissur', 'Kerala', 0, 0, '', '2019-08-27 07:37:26', NULL),
(112, NULL, 0, 0, 'Alwar', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(113, NULL, 0, 0, 'Kakinada', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(114, NULL, 0, 0, 'Nizamabad', 'Telangana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(115, NULL, 0, 0, 'Sagar', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(116, NULL, 0, 0, 'Tumkur', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(117, NULL, 0, 0, 'Hisar', 'Haryana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(118, NULL, 0, 0, 'Rohtak', 'Haryana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(119, NULL, 0, 0, 'Panipat', 'Haryana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(120, NULL, 0, 0, 'Darbhanga', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(121, NULL, 0, 0, 'Kharagpur', 'West Bengal', 0, 0, '', '2019-08-27 07:37:26', NULL),
(122, NULL, 0, 0, 'Aizawl', 'Mizoram', 0, 0, '', '2019-08-27 07:37:26', NULL),
(123, NULL, 0, 0, 'Ichalkaranji', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(124, NULL, 0, 0, 'Tirupati', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(125, NULL, 0, 0, 'Karnal', 'Haryana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(126, NULL, 0, 0, 'Bathinda', 'Punjab', 0, 0, '', '2019-08-27 07:37:26', NULL),
(127, NULL, 0, 0, 'Rampur', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(128, NULL, 0, 0, 'Shivamogga', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(129, NULL, 0, 0, 'Ratlam', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(130, NULL, 0, 0, 'Modinagar', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(131, NULL, 0, 0, 'Durg', 'Chhattisgarh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(132, NULL, 0, 0, 'Shillong', 'Meghalaya', 0, 0, '', '2019-08-27 07:37:26', NULL),
(133, NULL, 0, 0, 'Imphal', 'Manipur', 0, 0, '', '2019-08-27 07:37:26', NULL),
(134, NULL, 0, 0, 'Hapur', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(135, NULL, 0, 0, 'Ranipet', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(136, NULL, 0, 0, 'Anantapur', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(137, NULL, 0, 0, 'Arrah', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(138, NULL, 0, 0, 'Karimnagar', 'Telangana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(139, NULL, 0, 0, 'Parbhani', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(140, NULL, 0, 0, 'Etawah', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(141, NULL, 0, 0, 'Bharatpur', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(142, NULL, 0, 0, 'Begusarai', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(143, NULL, 0, 0, 'New Delhi', 'Delhi', 0, 0, '', '2019-08-27 07:37:26', NULL),
(144, NULL, 0, 0, 'Chhapra', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(145, NULL, 0, 0, 'Kadapa', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(146, NULL, 0, 0, 'Ramagundam', 'Telangana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(147, NULL, 0, 0, 'Pali', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(148, NULL, 0, 0, 'Satna', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(149, NULL, 0, 0, 'Vizianagaram', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(150, NULL, 0, 0, 'Katihar', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(151, NULL, 0, 0, 'Hardwar', 'Uttarakhand', 0, 0, '', '2019-08-27 07:37:26', NULL),
(152, NULL, 0, 0, 'Sonipat', 'Haryana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(153, NULL, 0, 0, 'Nagercoil', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(154, NULL, 0, 0, 'Thanjavur', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(155, NULL, 0, 0, 'Murwara (Katni)', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(156, NULL, 0, 0, 'Naihati', 'West Bengal', 0, 0, '', '2019-08-27 07:37:26', NULL),
(157, NULL, 0, 0, 'Sambhal', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(158, NULL, 0, 0, 'Nadiad', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(159, NULL, 0, 0, 'Yamunanagar', 'Haryana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(160, NULL, 0, 0, 'English Bazar', 'West Bengal', 0, 0, '', '2019-08-27 07:37:26', NULL),
(161, NULL, 0, 0, 'Eluru', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(162, NULL, 0, 0, 'Munger', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(163, NULL, 0, 0, 'Panchkula', 'Haryana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(164, NULL, 0, 0, 'Raayachuru', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(165, NULL, 0, 0, 'Panvel', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(166, NULL, 0, 0, 'Deoghar', 'Jharkhand', 0, 0, '', '2019-08-27 07:37:26', NULL),
(167, NULL, 0, 0, 'Ongole', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(168, NULL, 0, 0, 'Nandyal', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(169, NULL, 0, 0, 'Morena', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(170, NULL, 0, 0, 'Bhiwani', 'Haryana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(171, NULL, 0, 0, 'Porbandar', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(172, NULL, 0, 0, 'Palakkad', 'Kerala', 0, 0, '', '2019-08-27 07:37:26', NULL),
(173, NULL, 0, 0, 'Anand', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(174, NULL, 0, 0, 'Purnia', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(175, NULL, 0, 0, 'Baharampur', 'West Bengal', 0, 0, '', '2019-08-27 07:37:26', NULL),
(176, NULL, 0, 0, 'Barmer', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(177, NULL, 0, 0, 'Morvi', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(178, NULL, 0, 0, 'Orai', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(179, NULL, 0, 0, 'Bahraich', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(180, NULL, 0, 0, 'Sikar', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(181, NULL, 0, 0, 'Vellore', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(182, NULL, 0, 0, 'Singrauli', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(183, NULL, 0, 0, 'Khammam', 'Telangana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(184, NULL, 0, 0, 'Mahesana', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(185, NULL, 0, 0, 'Silchar', 'Assam', 0, 0, '', '2019-08-27 07:37:26', NULL),
(186, NULL, 0, 0, 'Sambalpur', 'Odisha', 0, 0, '', '2019-08-27 07:37:26', NULL),
(187, NULL, 0, 0, 'Rewa', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(188, NULL, 0, 0, 'Unnao', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(189, NULL, 0, 0, 'Hugli-Chinsurah', 'West Bengal', 0, 0, '', '2019-08-27 07:37:26', NULL),
(190, NULL, 0, 0, 'Raiganj', 'West Bengal', 0, 0, '', '2019-08-27 07:37:26', NULL),
(191, NULL, 0, 0, 'Phusro', 'Jharkhand', 0, 0, '', '2019-08-27 07:37:26', NULL),
(192, NULL, 0, 0, 'Adityapur', 'Jharkhand', 0, 0, '', '2019-08-27 07:37:26', NULL),
(193, NULL, 0, 0, 'Alappuzha', 'Kerala', 0, 0, '', '2019-08-27 07:37:26', NULL),
(194, NULL, 0, 0, 'Bahadurgarh', 'Haryana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(195, NULL, 0, 0, 'Machilipatnam', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(196, NULL, 0, 0, 'Rae Bareli', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(197, NULL, 0, 0, 'Jalpaiguri', 'West Bengal', 0, 0, '', '2019-08-27 07:37:26', NULL),
(198, NULL, 0, 0, 'Bharuch', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(199, NULL, 0, 0, 'Pathankot', 'Punjab', 0, 0, '', '2019-08-27 07:37:26', NULL),
(200, NULL, 0, 0, 'Hoshiarpur', 'Punjab', 0, 0, '', '2019-08-27 07:37:26', NULL),
(201, NULL, 0, 0, 'Baramula', 'Jammu and Kashmir', 0, 0, '', '2019-08-27 07:37:26', NULL),
(202, NULL, 0, 0, 'Adoni', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(203, NULL, 0, 0, 'Jind', 'Haryana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(204, NULL, 0, 0, 'Tonk', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(205, NULL, 0, 0, 'Tenali', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(206, NULL, 0, 0, 'Kancheepuram', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(207, NULL, 0, 0, 'Vapi', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(208, NULL, 0, 0, 'Sirsa', 'Haryana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(209, NULL, 0, 0, 'Navsari', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(210, NULL, 0, 0, 'Mahbubnagar', 'Telangana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(211, NULL, 0, 0, 'Puri', 'Odisha', 0, 0, '', '2019-08-27 07:37:26', NULL),
(212, NULL, 0, 0, 'Robertson Pet', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(213, NULL, 0, 0, 'Erode', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(214, NULL, 0, 0, 'Batala', 'Punjab', 0, 0, '', '2019-08-27 07:37:26', NULL),
(215, NULL, 0, 0, 'Haldwani-cum-Kathgodam', 'Uttarakhand', 0, 0, '', '2019-08-27 07:37:26', NULL),
(216, NULL, 0, 0, 'Vidisha', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(217, NULL, 0, 0, 'Saharsa', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(218, NULL, 0, 0, 'Thanesar', 'Haryana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(219, NULL, 0, 0, 'Chittoor', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(220, NULL, 0, 0, 'Veraval', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(221, NULL, 0, 0, 'Lakhimpur', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(222, NULL, 0, 0, 'Sitapur', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(223, NULL, 0, 0, 'Hindupur', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(224, NULL, 0, 0, 'Santipur', 'West Bengal', 0, 0, '', '2019-08-27 07:37:26', NULL),
(225, NULL, 0, 0, 'Balurghat', 'West Bengal', 0, 0, '', '2019-08-27 07:37:26', NULL),
(226, NULL, 0, 0, 'Ganjbasoda', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(227, NULL, 0, 0, 'Moga', 'Punjab', 0, 0, '', '2019-08-27 07:37:26', NULL),
(228, NULL, 0, 0, 'Proddatur', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(229, NULL, 0, 0, 'Srinagar', 'Uttarakhand', 0, 0, '', '2019-08-27 07:37:26', NULL),
(230, NULL, 0, 0, 'Medinipur', 'West Bengal', 0, 0, '', '2019-08-27 07:37:26', NULL),
(231, NULL, 0, 0, 'Habra', 'West Bengal', 0, 0, '', '2019-08-27 07:37:26', NULL),
(232, NULL, 0, 0, 'Sasaram', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(233, NULL, 0, 0, 'Hajipur', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(234, NULL, 0, 0, 'Bhuj', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(235, NULL, 0, 0, 'Shivpuri', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(236, NULL, 0, 0, 'Ranaghat', 'West Bengal', 0, 0, '', '2019-08-27 07:37:26', NULL),
(237, NULL, 0, 0, 'Shimla', 'Himachal Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(238, NULL, 0, 0, 'Tiruvannamalai', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(239, NULL, 0, 0, 'Kaithal', 'Haryana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(240, NULL, 0, 0, 'Rajnandgaon', 'Chhattisgarh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(241, NULL, 0, 0, 'Godhra', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(242, NULL, 0, 0, 'Hazaribag', 'Jharkhand', 0, 0, '', '2019-08-27 07:37:26', NULL),
(243, NULL, 0, 0, 'Bhimavaram', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(244, NULL, 0, 0, 'Mandsaur', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(245, NULL, 0, 0, 'Dibrugarh', 'Assam', 0, 0, '', '2019-08-27 07:37:26', NULL),
(246, NULL, 0, 0, 'Kolar', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(247, NULL, 0, 0, 'Bankura', 'West Bengal', 0, 0, '', '2019-08-27 07:37:26', NULL),
(248, NULL, 0, 0, 'Mandya', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(249, NULL, 0, 0, 'Dehri-on-Sone', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(250, NULL, 0, 0, 'Madanapalle', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(251, NULL, 0, 0, 'Malerkotla', 'Punjab', 0, 0, '', '2019-08-27 07:37:26', NULL),
(252, NULL, 0, 0, 'Lalitpur', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(253, NULL, 0, 0, 'Bettiah', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(254, NULL, 0, 0, 'Pollachi', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(255, NULL, 0, 0, 'Khanna', 'Punjab', 0, 0, '', '2019-08-27 07:37:26', NULL),
(256, NULL, 0, 0, 'Neemuch', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(257, NULL, 0, 0, 'Palwal', 'Haryana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(258, NULL, 0, 0, 'Palanpur', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(259, NULL, 0, 0, 'Guntakal', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(260, NULL, 0, 0, 'Nabadwip', 'West Bengal', 0, 0, '', '2019-08-27 07:37:26', NULL),
(261, NULL, 0, 0, 'Udupi', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(262, NULL, 0, 0, 'Jagdalpur', 'Chhattisgarh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(263, NULL, 0, 0, 'Motihari', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(264, NULL, 0, 0, 'Pilibhit', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(265, NULL, 0, 0, 'Dimapur', 'Nagaland', 0, 0, '', '2019-08-27 07:37:26', NULL),
(266, NULL, 0, 0, 'Mohali', 'Punjab', 0, 0, '', '2019-08-27 07:37:26', NULL),
(267, NULL, 0, 0, 'Sadulpur', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(268, NULL, 0, 0, 'Rajapalayam', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(269, NULL, 0, 0, 'Dharmavaram', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(270, NULL, 0, 0, 'Kashipur', 'Uttarakhand', 0, 0, '', '2019-08-27 07:37:26', NULL),
(271, NULL, 0, 0, 'Sivakasi', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(272, NULL, 0, 0, 'Darjiling', 'West Bengal', 0, 0, '', '2019-08-27 07:37:26', NULL),
(273, NULL, 0, 0, 'Chikkamagaluru', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(274, NULL, 0, 0, 'Gudivada', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(275, NULL, 0, 0, 'Baleshwar Town', 'Odisha', 0, 0, '', '2019-08-27 07:37:26', NULL),
(276, NULL, 0, 0, 'Mancherial', 'Telangana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(277, NULL, 0, 0, 'Srikakulam', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(278, NULL, 0, 0, 'Adilabad', 'Telangana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(279, NULL, 0, 0, 'Yavatmal', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(280, NULL, 0, 0, 'Barnala', 'Punjab', 0, 0, '', '2019-08-27 07:37:26', NULL),
(281, NULL, 0, 0, 'Nagaon', 'Assam', 0, 0, '', '2019-08-27 07:37:26', NULL),
(282, NULL, 0, 0, 'Narasaraopet', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(283, NULL, 0, 0, 'Raigarh', 'Chhattisgarh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(284, NULL, 0, 0, 'Roorkee', 'Uttarakhand', 0, 0, '', '2019-08-27 07:37:26', NULL),
(285, NULL, 0, 0, 'Valsad', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(286, NULL, 0, 0, 'Ambikapur', 'Chhattisgarh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(287, NULL, 0, 0, 'Giridih', 'Jharkhand', 0, 0, '', '2019-08-27 07:37:26', NULL),
(288, NULL, 0, 0, 'Chandausi', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(289, NULL, 0, 0, 'Purulia', 'West Bengal', 0, 0, '', '2019-08-27 07:37:26', NULL),
(290, NULL, 0, 0, 'Patan', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(291, NULL, 0, 0, 'Bagaha', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(292, NULL, 0, 0, 'Hardoi ', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(293, NULL, 0, 0, 'Achalpur', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(294, NULL, 0, 0, 'Osmanabad', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(295, NULL, 0, 0, 'Deesa', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(296, NULL, 0, 0, 'Nandurbar', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(297, NULL, 0, 0, 'Azamgarh', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(298, NULL, 0, 0, 'Ramgarh', 'Jharkhand', 0, 0, '', '2019-08-27 07:37:26', NULL),
(299, NULL, 0, 0, 'Firozpur', 'Punjab', 0, 0, '', '2019-08-27 07:37:26', NULL),
(300, NULL, 0, 0, 'Baripada Town', 'Odisha', 0, 0, '', '2019-08-27 07:37:26', NULL),
(301, NULL, 0, 0, 'Karwar', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(302, NULL, 0, 0, 'Siwan', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(303, NULL, 0, 0, 'Rajampet', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(304, NULL, 0, 0, 'Pudukkottai', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(305, NULL, 0, 0, 'Anantnag', 'Jammu and Kashmir', 0, 0, '', '2019-08-27 07:37:26', NULL),
(306, NULL, 0, 0, 'Tadpatri', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(307, NULL, 0, 0, 'Satara', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(308, NULL, 0, 0, 'Bhadrak', 'Odisha', 0, 0, '', '2019-08-27 07:37:26', NULL),
(309, NULL, 0, 0, 'Kishanganj', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(310, NULL, 0, 0, 'Suryapet', 'Telangana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(311, NULL, 0, 0, 'Wardha', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(312, NULL, 0, 0, 'Ranebennuru', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(313, NULL, 0, 0, 'Amreli', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(314, NULL, 0, 0, 'Neyveli (TS)', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(315, NULL, 0, 0, 'Jamalpur', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(316, NULL, 0, 0, 'Marmagao', 'Goa', 0, 0, '', '2019-08-27 07:37:26', NULL),
(317, NULL, 0, 0, 'Udgir', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(318, NULL, 0, 0, 'Tadepalligudem', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(319, NULL, 0, 0, 'Nagapattinam', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(320, NULL, 0, 0, 'Buxar', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(321, NULL, 0, 0, 'Aurangabad', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(322, NULL, 0, 0, 'Jehanabad', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(323, NULL, 0, 0, 'Phagwara', 'Punjab', 0, 0, '', '2019-08-27 07:37:26', NULL),
(324, NULL, 0, 0, 'Khair', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(325, NULL, 0, 0, 'Sawai Madhopur', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(326, NULL, 0, 0, 'Kapurthala', 'Punjab', 0, 0, '', '2019-08-27 07:37:26', NULL),
(327, NULL, 0, 0, 'Chilakaluripet', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(328, NULL, 0, 0, 'Aurangabad', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(329, NULL, 0, 0, 'Malappuram', 'Kerala', 0, 0, '', '2019-08-27 07:37:26', NULL),
(330, NULL, 0, 0, 'Rewari', 'Haryana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(331, NULL, 0, 0, 'Nagaur', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(332, NULL, 0, 0, 'Sultanpur', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(333, NULL, 0, 0, 'Nagda', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(334, NULL, 0, 0, 'Port Blair', 'Andaman and Nicobar Islands', 0, 0, '', '2019-08-27 07:37:26', NULL),
(335, NULL, 0, 0, 'Lakhisarai', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(336, NULL, 0, 0, 'Panaji', 'Goa', 0, 0, '', '2019-08-27 07:37:26', NULL),
(337, NULL, 0, 0, 'Tinsukia', 'Assam', 0, 0, '', '2019-08-27 07:37:26', NULL),
(338, NULL, 0, 0, 'Itarsi', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(339, NULL, 0, 0, 'Kohima', 'Nagaland', 0, 0, '', '2019-08-27 07:37:26', NULL),
(340, NULL, 0, 0, 'Balangir', 'Odisha', 0, 0, '', '2019-08-27 07:37:26', NULL),
(341, NULL, 0, 0, 'Nawada', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(342, NULL, 0, 0, 'Jharsuguda', 'Odisha', 0, 0, '', '2019-08-27 07:37:26', NULL),
(343, NULL, 0, 0, 'Jagtial', 'Telangana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(344, NULL, 0, 0, 'Viluppuram', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(345, NULL, 0, 0, 'Amalner', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(346, NULL, 0, 0, 'Zirakpur', 'Punjab', 0, 0, '', '2019-08-27 07:37:26', NULL),
(347, NULL, 0, 0, 'Tanda', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(348, NULL, 0, 0, 'Tiruchengode', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(349, NULL, 0, 0, 'Nagina', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(350, NULL, 0, 0, 'Yemmiganur', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(351, NULL, 0, 0, 'Vaniyambadi', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(352, NULL, 0, 0, 'Sarni', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(353, NULL, 0, 0, 'Theni Allinagaram', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(354, NULL, 0, 0, 'Margao', 'Goa', 0, 0, '', '2019-08-27 07:37:26', NULL),
(355, NULL, 0, 0, 'Akot', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(356, NULL, 0, 0, 'Sehore', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(357, NULL, 0, 0, 'Mhow Cantonment', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(358, NULL, 0, 0, 'Kot Kapura', 'Punjab', 0, 0, '', '2019-08-27 07:37:26', NULL),
(359, NULL, 0, 0, 'Makrana', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(360, NULL, 0, 0, 'Pandharpur', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(361, NULL, 0, 0, 'Miryalaguda', 'Telangana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(362, NULL, 0, 0, 'Shamli', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(363, NULL, 0, 0, 'Seoni', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(364, NULL, 0, 0, 'Ranibennur', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(365, NULL, 0, 0, 'Kadiri', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(366, NULL, 0, 0, 'Shrirampur', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(367, NULL, 0, 0, 'Rudrapur', 'Uttarakhand', 0, 0, '', '2019-08-27 07:37:26', NULL),
(368, NULL, 0, 0, 'Parli', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(369, NULL, 0, 0, 'Najibabad', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(370, NULL, 0, 0, 'Nirmal', 'Telangana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(371, NULL, 0, 0, 'Udhagamandalam', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(372, NULL, 0, 0, 'Shikohabad', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(373, NULL, 0, 0, 'Jhumri Tilaiya', 'Jharkhand', 0, 0, '', '2019-08-27 07:37:26', NULL),
(374, NULL, 0, 0, 'Aruppukkottai', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(375, NULL, 0, 0, 'Ponnani', 'Kerala', 0, 0, '', '2019-08-27 07:37:26', NULL),
(376, NULL, 0, 0, 'Jamui', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(377, NULL, 0, 0, 'Sitamarhi', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(378, NULL, 0, 0, 'Chirala', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(379, NULL, 0, 0, 'Anjar', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(380, NULL, 0, 0, 'Karaikal', 'Puducherry', 0, 0, '', '2019-08-27 07:37:26', NULL),
(381, NULL, 0, 0, 'Hansi', 'Haryana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(382, NULL, 0, 0, 'Anakapalle', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(383, NULL, 0, 0, 'Mahasamund', 'Chhattisgarh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(384, NULL, 0, 0, 'Faridkot', 'Punjab', 0, 0, '', '2019-08-27 07:37:26', NULL),
(385, NULL, 0, 0, 'Saunda', 'Jharkhand', 0, 0, '', '2019-08-27 07:37:26', NULL),
(386, NULL, 0, 0, 'Dhoraji', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(387, NULL, 0, 0, 'Paramakudi', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(388, NULL, 0, 0, 'Balaghat', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(389, NULL, 0, 0, 'Sujangarh', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(390, NULL, 0, 0, 'Khambhat', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(391, NULL, 0, 0, 'Muktsar', 'Punjab', 0, 0, '', '2019-08-27 07:37:26', NULL),
(392, NULL, 0, 0, 'Rajpura', 'Punjab', 0, 0, '', '2019-08-27 07:37:26', NULL),
(393, NULL, 0, 0, 'Kavali', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(394, NULL, 0, 0, 'Dhamtari', 'Chhattisgarh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(395, NULL, 0, 0, 'Ashok Nagar', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(396, NULL, 0, 0, 'Sardarshahar', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(397, NULL, 0, 0, 'Mahuva', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(398, NULL, 0, 0, 'Bargarh', 'Odisha', 0, 0, '', '2019-08-27 07:37:26', NULL),
(399, NULL, 0, 0, 'Kamareddy', 'Telangana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(400, NULL, 0, 0, 'Sahibganj', 'Jharkhand', 0, 0, '', '2019-08-27 07:37:26', NULL),
(401, NULL, 0, 0, 'Kothagudem', 'Telangana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(402, NULL, 0, 0, 'Ramanagaram', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(403, NULL, 0, 0, 'Gokak', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(404, NULL, 0, 0, 'Tikamgarh', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(405, NULL, 0, 0, 'Araria', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(406, NULL, 0, 0, 'Rishikesh', 'Uttarakhand', 0, 0, '', '2019-08-27 07:37:26', NULL),
(407, NULL, 0, 0, 'Shahdol', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(408, NULL, 0, 0, 'Medininagar (Daltonganj)', 'Jharkhand', 0, 0, '', '2019-08-27 07:37:26', NULL),
(409, NULL, 0, 0, 'Arakkonam', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(410, NULL, 0, 0, 'Washim', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(411, NULL, 0, 0, 'Sangrur', 'Punjab', 0, 0, '', '2019-08-27 07:37:26', NULL),
(412, NULL, 0, 0, 'Bodhan', 'Telangana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(413, NULL, 0, 0, 'Fazilka', 'Punjab', 0, 0, '', '2019-08-27 07:37:26', NULL),
(414, NULL, 0, 0, 'Palacole', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(415, NULL, 0, 0, 'Keshod', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(416, NULL, 0, 0, 'Sullurpeta', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(417, NULL, 0, 0, 'Wadhwan', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(418, NULL, 0, 0, 'Gurdaspur', 'Punjab', 0, 0, '', '2019-08-27 07:37:26', NULL),
(419, NULL, 0, 0, 'Vatakara', 'Kerala', 0, 0, '', '2019-08-27 07:37:26', NULL),
(420, NULL, 0, 0, 'Tura', 'Meghalaya', 0, 0, '', '2019-08-27 07:37:26', NULL),
(421, NULL, 0, 0, 'Narnaul', 'Haryana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(422, NULL, 0, 0, 'Kharar', 'Punjab', 0, 0, '', '2019-08-27 07:37:26', NULL),
(423, NULL, 0, 0, 'Yadgir', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(424, NULL, 0, 0, 'Ambejogai', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(425, NULL, 0, 0, 'Ankleshwar', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(426, NULL, 0, 0, 'Savarkundla', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(427, NULL, 0, 0, 'Paradip', 'Odisha', 0, 0, '', '2019-08-27 07:37:26', NULL),
(428, NULL, 0, 0, 'Virudhachalam', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(429, NULL, 0, 0, 'Kanhangad', 'Kerala', 0, 0, '', '2019-08-27 07:37:26', NULL),
(430, NULL, 0, 0, 'Kadi', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(431, NULL, 0, 0, 'Srivilliputhur', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(432, NULL, 0, 0, 'Gobindgarh', 'Punjab', 0, 0, '', '2019-08-27 07:37:26', NULL),
(433, NULL, 0, 0, 'Tindivanam', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(434, NULL, 0, 0, 'Mansa', 'Punjab', 0, 0, '', '2019-08-27 07:37:26', NULL),
(435, NULL, 0, 0, 'Taliparamba', 'Kerala', 0, 0, '', '2019-08-27 07:37:26', NULL),
(436, NULL, 0, 0, 'Manmad', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(437, NULL, 0, 0, 'Tanuku', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(438, NULL, 0, 0, 'Rayachoti', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(439, NULL, 0, 0, 'Virudhunagar', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(440, NULL, 0, 0, 'Koyilandy', 'Kerala', 0, 0, '', '2019-08-27 07:37:26', NULL),
(441, NULL, 0, 0, 'Jorhat', 'Assam', 0, 0, '', '2019-08-27 07:37:26', NULL),
(442, NULL, 0, 0, 'Karur', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(443, NULL, 0, 0, 'Valparai', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(444, NULL, 0, 0, 'Srikalahasti', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(445, NULL, 0, 0, 'Neyyattinkara', 'Kerala', 0, 0, '', '2019-08-27 07:37:26', NULL),
(446, NULL, 0, 0, 'Bapatla', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(447, NULL, 0, 0, 'Fatehabad', 'Haryana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(448, NULL, 0, 0, 'Malout', 'Punjab', 0, 0, '', '2019-08-27 07:37:26', NULL),
(449, NULL, 0, 0, 'Sankarankovil', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(450, NULL, 0, 0, 'Tenkasi', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(451, NULL, 0, 0, 'Ratnagiri', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(452, NULL, 0, 0, 'Rabkavi Banhatti', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(453, NULL, 0, 0, 'Sikandrabad', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(454, NULL, 0, 0, 'Chaibasa', 'Jharkhand', 0, 0, '', '2019-08-27 07:37:26', NULL),
(455, NULL, 0, 0, 'Chirmiri', 'Chhattisgarh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(456, NULL, 0, 0, 'Palwancha', 'Telangana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(457, NULL, 0, 0, 'Bhawanipatna', 'Odisha', 0, 0, '', '2019-08-27 07:37:26', NULL),
(458, NULL, 0, 0, 'Kayamkulam', 'Kerala', 0, 0, '', '2019-08-27 07:37:26', NULL),
(459, NULL, 0, 0, 'Pithampur', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(460, NULL, 0, 0, 'Nabha', 'Punjab', 0, 0, '', '2019-08-27 07:37:26', NULL),
(461, NULL, 0, 0, 'Shahabad, Hardoi', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(462, NULL, 0, 0, 'Dhenkanal', 'Odisha', 0, 0, '', '2019-08-27 07:37:26', NULL),
(463, NULL, 0, 0, 'Uran Islampur', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(464, NULL, 0, 0, 'Gopalganj', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(465, NULL, 0, 0, 'Bongaigaon City', 'Assam', 0, 0, '', '2019-08-27 07:37:26', NULL),
(466, NULL, 0, 0, 'Palani', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(467, NULL, 0, 0, 'Pusad', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(468, NULL, 0, 0, 'Sopore', 'Jammu and Kashmir', 0, 0, '', '2019-08-27 07:37:26', NULL),
(469, NULL, 0, 0, 'Pilkhuwa', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(470, NULL, 0, 0, 'Tarn Taran', 'Punjab', 0, 0, '', '2019-08-27 07:37:26', NULL),
(471, NULL, 0, 0, 'Renukoot', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(472, NULL, 0, 0, 'Mandamarri', 'Telangana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(473, NULL, 0, 0, 'Shahabad', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(474, NULL, 0, 0, 'Barbil', 'Odisha', 0, 0, '', '2019-08-27 07:37:26', NULL),
(475, NULL, 0, 0, 'Koratla', 'Telangana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(476, NULL, 0, 0, 'Madhubani', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(477, NULL, 0, 0, 'Arambagh', 'West Bengal', 0, 0, '', '2019-08-27 07:37:26', NULL),
(478, NULL, 0, 0, 'Gohana', 'Haryana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(479, NULL, 0, 0, 'Ladnu', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(480, NULL, 0, 0, 'Pattukkottai', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(481, NULL, 0, 0, 'Sirsi', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(482, NULL, 0, 0, 'Sircilla', 'Telangana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(483, NULL, 0, 0, 'Tamluk', 'West Bengal', 0, 0, '', '2019-08-27 07:37:26', NULL),
(484, NULL, 0, 0, 'Jagraon', 'Punjab', 0, 0, '', '2019-08-27 07:37:26', NULL),
(485, NULL, 0, 0, 'AlipurdUrban Agglomerationr', 'West Bengal', 0, 0, '', '2019-08-27 07:37:26', NULL),
(486, NULL, 0, 0, 'Alirajpur', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(487, NULL, 0, 0, 'Tandur', 'Telangana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(488, NULL, 0, 0, 'Naidupet', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(489, NULL, 0, 0, 'Tirupathur', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(490, NULL, 0, 0, 'Tohana', 'Haryana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(491, NULL, 0, 0, 'Ratangarh', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(492, NULL, 0, 0, 'Dhubri', 'Assam', 0, 0, '', '2019-08-27 07:37:26', NULL),
(493, NULL, 0, 0, 'Masaurhi', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(494, NULL, 0, 0, 'Visnagar', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(495, NULL, 0, 0, 'Vrindavan', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(496, NULL, 0, 0, 'Nokha', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(497, NULL, 0, 0, 'Nagari', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(498, NULL, 0, 0, 'Narwana', 'Haryana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(499, NULL, 0, 0, 'Ramanathapuram', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(500, NULL, 0, 0, 'Ujhani', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(501, NULL, 0, 0, 'Samastipur', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(502, NULL, 0, 0, 'Laharpur', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(503, NULL, 0, 0, 'Sangamner', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(504, NULL, 0, 0, 'Nimbahera', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(505, NULL, 0, 0, 'Siddipet', 'Telangana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(506, NULL, 0, 0, 'Suri', 'West Bengal', 0, 0, '', '2019-08-27 07:37:26', NULL),
(507, NULL, 0, 0, 'Diphu', 'Assam', 0, 0, '', '2019-08-27 07:37:26', NULL),
(508, NULL, 0, 0, 'Jhargram', 'West Bengal', 0, 0, '', '2019-08-27 07:37:26', NULL),
(509, NULL, 0, 0, 'Shirpur-Warwade', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(510, NULL, 0, 0, 'Tilhar', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(511, NULL, 0, 0, 'Sindhnur', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(512, NULL, 0, 0, 'Udumalaipettai', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(513, NULL, 0, 0, 'Malkapur', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(514, NULL, 0, 0, 'Wanaparthy', 'Telangana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(515, NULL, 0, 0, 'Gudur', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(516, NULL, 0, 0, 'Kendujhar', 'Odisha', 0, 0, '', '2019-08-27 07:37:26', NULL),
(517, NULL, 0, 0, 'Mandla', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(518, NULL, 0, 0, 'Mandi', 'Himachal Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(519, NULL, 0, 0, 'Nedumangad', 'Kerala', 0, 0, '', '2019-08-27 07:37:26', NULL),
(520, NULL, 0, 0, 'North Lakhimpur', 'Assam', 0, 0, '', '2019-08-27 07:37:26', NULL),
(521, NULL, 0, 0, 'Vinukonda', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(522, NULL, 0, 0, 'Tiptur', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(523, NULL, 0, 0, 'Gobichettipalayam', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(524, NULL, 0, 0, 'Sunabeda', 'Odisha', 0, 0, '', '2019-08-27 07:37:26', NULL),
(525, NULL, 0, 0, 'Wani', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(526, NULL, 0, 0, 'Upleta', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(527, NULL, 0, 0, 'Narasapuram', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(528, NULL, 0, 0, 'Nuzvid', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(529, NULL, 0, 0, 'Tezpur', 'Assam', 0, 0, '', '2019-08-27 07:37:26', NULL),
(530, NULL, 0, 0, 'Una', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(531, NULL, 0, 0, 'Markapur', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(532, NULL, 0, 0, 'Sheopur', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(533, NULL, 0, 0, 'Thiruvarur', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(534, NULL, 0, 0, 'Sidhpur', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(535, NULL, 0, 0, 'Sahaswan', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(536, NULL, 0, 0, 'Suratgarh', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(537, NULL, 0, 0, 'Shajapur', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(538, NULL, 0, 0, 'Rayagada', 'Odisha', 0, 0, '', '2019-08-27 07:37:26', NULL),
(539, NULL, 0, 0, 'Lonavla', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(540, NULL, 0, 0, 'Ponnur', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(541, NULL, 0, 0, 'Kagaznagar', 'Telangana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(542, NULL, 0, 0, 'Gadwal', 'Telangana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(543, NULL, 0, 0, 'Bhatapara', 'Chhattisgarh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(544, NULL, 0, 0, 'Kandukur', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(545, NULL, 0, 0, 'Sangareddy', 'Telangana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(546, NULL, 0, 0, 'Unjha', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(547, NULL, 0, 0, 'Lunglei', 'Mizoram', 0, 0, '', '2019-08-27 07:37:26', NULL),
(548, NULL, 0, 0, 'Karimganj', 'Assam', 0, 0, '', '2019-08-27 07:37:26', NULL),
(549, NULL, 0, 0, 'Kannur', 'Kerala', 0, 0, '', '2019-08-27 07:37:26', NULL),
(550, NULL, 0, 0, 'Bobbili', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(551, NULL, 0, 0, 'Mokameh', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(552, NULL, 0, 0, 'Talegaon Dabhade', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(553, NULL, 0, 0, 'Anjangaon', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(554, NULL, 0, 0, 'Mangrol', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(555, NULL, 0, 0, 'Sunam', 'Punjab', 0, 0, '', '2019-08-27 07:37:26', NULL),
(556, NULL, 0, 0, 'Gangarampur', 'West Bengal', 0, 0, '', '2019-08-27 07:37:26', NULL),
(557, NULL, 0, 0, 'Thiruvallur', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(558, NULL, 0, 0, 'Tirur', 'Kerala', 0, 0, '', '2019-08-27 07:37:26', NULL),
(559, NULL, 0, 0, 'Rath', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(560, NULL, 0, 0, 'Jatani', 'Odisha', 0, 0, '', '2019-08-27 07:37:26', NULL),
(561, NULL, 0, 0, 'Viramgam', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(562, NULL, 0, 0, 'Rajsamand', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(563, NULL, 0, 0, 'Yanam', 'Puducherry', 0, 0, '', '2019-08-27 07:37:26', NULL),
(564, NULL, 0, 0, 'Kottayam', 'Kerala', 0, 0, '', '2019-08-27 07:37:26', NULL),
(565, NULL, 0, 0, 'Panruti', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(566, NULL, 0, 0, 'Dhuri', 'Punjab', 0, 0, '', '2019-08-27 07:37:26', NULL),
(567, NULL, 0, 0, 'Namakkal', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(568, NULL, 0, 0, 'Kasaragod', 'Kerala', 0, 0, '', '2019-08-27 07:37:26', NULL),
(569, NULL, 0, 0, 'Modasa', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(570, NULL, 0, 0, 'Rayadurg', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(571, NULL, 0, 0, 'Supaul', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(572, NULL, 0, 0, 'Kunnamkulam', 'Kerala', 0, 0, '', '2019-08-27 07:37:26', NULL),
(573, NULL, 0, 0, 'Umred', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(574, NULL, 0, 0, 'Bellampalle', 'Telangana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(575, NULL, 0, 0, 'Sibsagar', 'Assam', 0, 0, '', '2019-08-27 07:37:26', NULL),
(576, NULL, 0, 0, 'Mandi Dabwali', 'Haryana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(577, NULL, 0, 0, 'Ottappalam', 'Kerala', 0, 0, '', '2019-08-27 07:37:26', NULL),
(578, NULL, 0, 0, 'Dumraon', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(579, NULL, 0, 0, 'Samalkot', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(580, NULL, 0, 0, 'Jaggaiahpet', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(581, NULL, 0, 0, 'Goalpara', 'Assam', 0, 0, '', '2019-08-27 07:37:26', NULL),
(582, NULL, 0, 0, 'Tuni', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(583, NULL, 0, 0, 'Lachhmangarh', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(584, NULL, 0, 0, 'Bhongir', 'Telangana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(585, NULL, 0, 0, 'Amalapuram', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(586, NULL, 0, 0, 'Firozpur Cantt.', 'Punjab', 0, 0, '', '2019-08-27 07:37:26', NULL),
(587, NULL, 0, 0, 'Vikarabad', 'Telangana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(588, NULL, 0, 0, 'Thiruvalla', 'Kerala', 0, 0, '', '2019-08-27 07:37:26', NULL),
(589, NULL, 0, 0, 'Sherkot', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(590, NULL, 0, 0, 'Palghar', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(591, NULL, 0, 0, 'Shegaon', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(592, NULL, 0, 0, 'Jangaon', 'Telangana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(593, NULL, 0, 0, 'Bheemunipatnam', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(594, NULL, 0, 0, 'Panna', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(595, NULL, 0, 0, 'Thodupuzha', 'Kerala', 0, 0, '', '2019-08-27 07:37:26', NULL),
(596, NULL, 0, 0, 'KathUrban Agglomeration', 'Jammu and Kashmir', 0, 0, '', '2019-08-27 07:37:26', NULL),
(597, NULL, 0, 0, 'Palitana', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(598, NULL, 0, 0, 'Arwal', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(599, NULL, 0, 0, 'Venkatagiri', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(600, NULL, 0, 0, 'Kalpi', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(601, NULL, 0, 0, 'Rajgarh (Churu)', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(602, NULL, 0, 0, 'Sattenapalle', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(603, NULL, 0, 0, 'Arsikere', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(604, NULL, 0, 0, 'Ozar', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(605, NULL, 0, 0, 'Thirumangalam', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(606, NULL, 0, 0, 'Petlad', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(607, NULL, 0, 0, 'Nasirabad', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(608, NULL, 0, 0, 'Phaltan', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(609, NULL, 0, 0, 'Rampurhat', 'West Bengal', 0, 0, '', '2019-08-27 07:37:26', NULL),
(610, NULL, 0, 0, 'Nanjangud', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL);
INSERT INTO `its_cities` (`id`, `org_id`, `country_id`, `state_id`, `city`, `state`, `status`, `is_deleted`, `ip_address`, `modified_date`, `created_at`) VALUES
(611, NULL, 0, 0, 'Forbesganj', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(612, NULL, 0, 0, 'Tundla', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(613, NULL, 0, 0, 'BhabUrban Agglomeration', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(614, NULL, 0, 0, 'Sagara', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(615, NULL, 0, 0, 'Pithapuram', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(616, NULL, 0, 0, 'Sira', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(617, NULL, 0, 0, 'Bhadrachalam', 'Telangana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(618, NULL, 0, 0, 'Charkhi Dadri', 'Haryana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(619, NULL, 0, 0, 'Chatra', 'Jharkhand', 0, 0, '', '2019-08-27 07:37:26', NULL),
(620, NULL, 0, 0, 'Palasa Kasibugga', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(621, NULL, 0, 0, 'Nohar', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(622, NULL, 0, 0, 'Yevla', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(623, NULL, 0, 0, 'Sirhind Fatehgarh Sahib', 'Punjab', 0, 0, '', '2019-08-27 07:37:26', NULL),
(624, NULL, 0, 0, 'Bhainsa', 'Telangana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(625, NULL, 0, 0, 'Parvathipuram', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(626, NULL, 0, 0, 'Shahade', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(627, NULL, 0, 0, 'Chalakudy', 'Kerala', 0, 0, '', '2019-08-27 07:37:26', NULL),
(628, NULL, 0, 0, 'Narkatiaganj', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(629, NULL, 0, 0, 'Kapadvanj', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(630, NULL, 0, 0, 'Macherla', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(631, NULL, 0, 0, 'Raghogarh-Vijaypur', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(632, NULL, 0, 0, 'Rupnagar', 'Punjab', 0, 0, '', '2019-08-27 07:37:26', NULL),
(633, NULL, 0, 0, 'Naugachhia', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(634, NULL, 0, 0, 'Sendhwa', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(635, NULL, 0, 0, 'Byasanagar', 'Odisha', 0, 0, '', '2019-08-27 07:37:26', NULL),
(636, NULL, 0, 0, 'Sandila', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(637, NULL, 0, 0, 'Gooty', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(638, NULL, 0, 0, 'Salur', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(639, NULL, 0, 0, 'Nanpara', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(640, NULL, 0, 0, 'Sardhana', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(641, NULL, 0, 0, 'Vita', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(642, NULL, 0, 0, 'Gumia', 'Jharkhand', 0, 0, '', '2019-08-27 07:37:26', NULL),
(643, NULL, 0, 0, 'Puttur', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(644, NULL, 0, 0, 'Jalandhar Cantt.', 'Punjab', 0, 0, '', '2019-08-27 07:37:26', NULL),
(645, NULL, 0, 0, 'Nehtaur', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(646, NULL, 0, 0, 'Changanassery', 'Kerala', 0, 0, '', '2019-08-27 07:37:26', NULL),
(647, NULL, 0, 0, 'Mandapeta', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(648, NULL, 0, 0, 'Dumka', 'Jharkhand', 0, 0, '', '2019-08-27 07:37:26', NULL),
(649, NULL, 0, 0, 'Seohara', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(650, NULL, 0, 0, 'Umarkhed', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(651, NULL, 0, 0, 'Madhupur', 'Jharkhand', 0, 0, '', '2019-08-27 07:37:26', NULL),
(652, NULL, 0, 0, 'Vikramasingapuram', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(653, NULL, 0, 0, 'Punalur', 'Kerala', 0, 0, '', '2019-08-27 07:37:26', NULL),
(654, NULL, 0, 0, 'Kendrapara', 'Odisha', 0, 0, '', '2019-08-27 07:37:26', NULL),
(655, NULL, 0, 0, 'Sihor', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(656, NULL, 0, 0, 'Nellikuppam', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(657, NULL, 0, 0, 'Samana', 'Punjab', 0, 0, '', '2019-08-27 07:37:26', NULL),
(658, NULL, 0, 0, 'Warora', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(659, NULL, 0, 0, 'Nilambur', 'Kerala', 0, 0, '', '2019-08-27 07:37:26', NULL),
(660, NULL, 0, 0, 'Rasipuram', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(661, NULL, 0, 0, 'Ramnagar', 'Uttarakhand', 0, 0, '', '2019-08-27 07:37:26', NULL),
(662, NULL, 0, 0, 'Jammalamadugu', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(663, NULL, 0, 0, 'Nawanshahr', 'Punjab', 0, 0, '', '2019-08-27 07:37:26', NULL),
(664, NULL, 0, 0, 'Thoubal', 'Manipur', 0, 0, '', '2019-08-27 07:37:26', NULL),
(665, NULL, 0, 0, 'Athni', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(666, NULL, 0, 0, 'Cherthala', 'Kerala', 0, 0, '', '2019-08-27 07:37:26', NULL),
(667, NULL, 0, 0, 'Sidhi', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(668, NULL, 0, 0, 'Farooqnagar', 'Telangana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(669, NULL, 0, 0, 'Peddapuram', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(670, NULL, 0, 0, 'Chirkunda', 'Jharkhand', 0, 0, '', '2019-08-27 07:37:26', NULL),
(671, NULL, 0, 0, 'Pachora', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(672, NULL, 0, 0, 'Madhepura', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(673, NULL, 0, 0, 'Pithoragarh', 'Uttarakhand', 0, 0, '', '2019-08-27 07:37:26', NULL),
(674, NULL, 0, 0, 'Tumsar', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(675, NULL, 0, 0, 'Phalodi', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(676, NULL, 0, 0, 'Tiruttani', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(677, NULL, 0, 0, 'Rampura Phul', 'Punjab', 0, 0, '', '2019-08-27 07:37:26', NULL),
(678, NULL, 0, 0, 'Perinthalmanna', 'Kerala', 0, 0, '', '2019-08-27 07:37:26', NULL),
(679, NULL, 0, 0, 'Padrauna', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(680, NULL, 0, 0, 'Pipariya', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(681, NULL, 0, 0, 'Dalli-Rajhara', 'Chhattisgarh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(682, NULL, 0, 0, 'Punganur', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(683, NULL, 0, 0, 'Mattannur', 'Kerala', 0, 0, '', '2019-08-27 07:37:26', NULL),
(684, NULL, 0, 0, 'Mathura', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(685, NULL, 0, 0, 'Thakurdwara', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(686, NULL, 0, 0, 'Nandivaram-Guduvancheri', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(687, NULL, 0, 0, 'Mulbagal', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(688, NULL, 0, 0, 'Manjlegaon', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(689, NULL, 0, 0, 'Wankaner', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(690, NULL, 0, 0, 'Sillod', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(691, NULL, 0, 0, 'Nidadavole', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(692, NULL, 0, 0, 'Surapura', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(693, NULL, 0, 0, 'Rajagangapur', 'Odisha', 0, 0, '', '2019-08-27 07:37:26', NULL),
(694, NULL, 0, 0, 'Sheikhpura', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(695, NULL, 0, 0, 'Parlakhemundi', 'Odisha', 0, 0, '', '2019-08-27 07:37:26', NULL),
(696, NULL, 0, 0, 'Kalimpong', 'West Bengal', 0, 0, '', '2019-08-27 07:37:26', NULL),
(697, NULL, 0, 0, 'Siruguppa', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(698, NULL, 0, 0, 'Arvi', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(699, NULL, 0, 0, 'Limbdi', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(700, NULL, 0, 0, 'Barpeta', 'Assam', 0, 0, '', '2019-08-27 07:37:26', NULL),
(701, NULL, 0, 0, 'Manglaur', 'Uttarakhand', 0, 0, '', '2019-08-27 07:37:26', NULL),
(702, NULL, 0, 0, 'Repalle', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(703, NULL, 0, 0, 'Mudhol', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(704, NULL, 0, 0, 'Shujalpur', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(705, NULL, 0, 0, 'Mandvi', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(706, NULL, 0, 0, 'Thangadh', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(707, NULL, 0, 0, 'Sironj', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(708, NULL, 0, 0, 'Nandura', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(709, NULL, 0, 0, 'Shoranur', 'Kerala', 0, 0, '', '2019-08-27 07:37:26', NULL),
(710, NULL, 0, 0, 'Nathdwara', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(711, NULL, 0, 0, 'Periyakulam', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(712, NULL, 0, 0, 'Sultanganj', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(713, NULL, 0, 0, 'Medak', 'Telangana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(714, NULL, 0, 0, 'Narayanpet', 'Telangana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(715, NULL, 0, 0, 'Raxaul Bazar', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(716, NULL, 0, 0, 'Rajauri', 'Jammu and Kashmir', 0, 0, '', '2019-08-27 07:37:26', NULL),
(717, NULL, 0, 0, 'Pernampattu', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(718, NULL, 0, 0, 'Nainital', 'Uttarakhand', 0, 0, '', '2019-08-27 07:37:26', NULL),
(719, NULL, 0, 0, 'Ramachandrapuram', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(720, NULL, 0, 0, 'Vaijapur', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(721, NULL, 0, 0, 'Nangal', 'Punjab', 0, 0, '', '2019-08-27 07:37:26', NULL),
(722, NULL, 0, 0, 'Sidlaghatta', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(723, NULL, 0, 0, 'Punch', 'Jammu and Kashmir', 0, 0, '', '2019-08-27 07:37:26', NULL),
(724, NULL, 0, 0, 'Pandhurna', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(725, NULL, 0, 0, 'Wadgaon Road', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(726, NULL, 0, 0, 'Talcher', 'Odisha', 0, 0, '', '2019-08-27 07:37:26', NULL),
(727, NULL, 0, 0, 'Varkala', 'Kerala', 0, 0, '', '2019-08-27 07:37:26', NULL),
(728, NULL, 0, 0, 'Pilani', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(729, NULL, 0, 0, 'Nowgong', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(730, NULL, 0, 0, 'Naila Janjgir', 'Chhattisgarh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(731, NULL, 0, 0, 'Mapusa', 'Goa', 0, 0, '', '2019-08-27 07:37:26', NULL),
(732, NULL, 0, 0, 'Vellakoil', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(733, NULL, 0, 0, 'Merta City', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(734, NULL, 0, 0, 'Sivaganga', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(735, NULL, 0, 0, 'Mandideep', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(736, NULL, 0, 0, 'Sailu', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(737, NULL, 0, 0, 'Vyara', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(738, NULL, 0, 0, 'Kovvur', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(739, NULL, 0, 0, 'Vadalur', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(740, NULL, 0, 0, 'Nawabganj', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(741, NULL, 0, 0, 'Padra', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(742, NULL, 0, 0, 'Sainthia', 'West Bengal', 0, 0, '', '2019-08-27 07:37:26', NULL),
(743, NULL, 0, 0, 'Siana', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(744, NULL, 0, 0, 'Shahpur', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(745, NULL, 0, 0, 'Sojat', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(746, NULL, 0, 0, 'Noorpur', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(747, NULL, 0, 0, 'Paravoor', 'Kerala', 0, 0, '', '2019-08-27 07:37:26', NULL),
(748, NULL, 0, 0, 'Murtijapur', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(749, NULL, 0, 0, 'Ramnagar', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(750, NULL, 0, 0, 'Sundargarh', 'Odisha', 0, 0, '', '2019-08-27 07:37:26', NULL),
(751, NULL, 0, 0, 'Taki', 'West Bengal', 0, 0, '', '2019-08-27 07:37:26', NULL),
(752, NULL, 0, 0, 'Saundatti-Yellamma', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(753, NULL, 0, 0, 'Pathanamthitta', 'Kerala', 0, 0, '', '2019-08-27 07:37:26', NULL),
(754, NULL, 0, 0, 'Wadi', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(755, NULL, 0, 0, 'Rameshwaram', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(756, NULL, 0, 0, 'Tasgaon', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(757, NULL, 0, 0, 'Sikandra Rao', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(758, NULL, 0, 0, 'Sihora', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(759, NULL, 0, 0, 'Tiruvethipuram', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(760, NULL, 0, 0, 'Tiruvuru', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(761, NULL, 0, 0, 'Mehkar', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(762, NULL, 0, 0, 'Peringathur', 'Kerala', 0, 0, '', '2019-08-27 07:37:26', NULL),
(763, NULL, 0, 0, 'Perambalur', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(764, NULL, 0, 0, 'Manvi', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(765, NULL, 0, 0, 'Zunheboto', 'Nagaland', 0, 0, '', '2019-08-27 07:37:26', NULL),
(766, NULL, 0, 0, 'Mahnar Bazar', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(767, NULL, 0, 0, 'Attingal', 'Kerala', 0, 0, '', '2019-08-27 07:37:26', NULL),
(768, NULL, 0, 0, 'Shahbad', 'Haryana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(769, NULL, 0, 0, 'Puranpur', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(770, NULL, 0, 0, 'Nelamangala', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(771, NULL, 0, 0, 'Nakodar', 'Punjab', 0, 0, '', '2019-08-27 07:37:26', NULL),
(772, NULL, 0, 0, 'Lunawada', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(773, NULL, 0, 0, 'Murshidabad', 'West Bengal', 0, 0, '', '2019-08-27 07:37:26', NULL),
(774, NULL, 0, 0, 'Mahe', 'Puducherry', 0, 0, '', '2019-08-27 07:37:26', NULL),
(775, NULL, 0, 0, 'Lanka', 'Assam', 0, 0, '', '2019-08-27 07:37:26', NULL),
(776, NULL, 0, 0, 'Rudauli', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(777, NULL, 0, 0, 'Tuensang', 'Nagaland', 0, 0, '', '2019-08-27 07:37:26', NULL),
(778, NULL, 0, 0, 'Lakshmeshwar', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(779, NULL, 0, 0, 'Zira', 'Punjab', 0, 0, '', '2019-08-27 07:37:26', NULL),
(780, NULL, 0, 0, 'Yawal', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(781, NULL, 0, 0, 'Thana Bhawan', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(782, NULL, 0, 0, 'Ramdurg', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(783, NULL, 0, 0, 'Pulgaon', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(784, NULL, 0, 0, 'Sadasivpet', 'Telangana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(785, NULL, 0, 0, 'Nargund', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(786, NULL, 0, 0, 'Neem-Ka-Thana', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(787, NULL, 0, 0, 'Memari', 'West Bengal', 0, 0, '', '2019-08-27 07:37:26', NULL),
(788, NULL, 0, 0, 'Nilanga', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(789, NULL, 0, 0, 'Naharlagun', 'Arunachal Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(790, NULL, 0, 0, 'Pakaur', 'Jharkhand', 0, 0, '', '2019-08-27 07:37:26', NULL),
(791, NULL, 0, 0, 'Wai', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(792, NULL, 0, 0, 'Tarikere', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(793, NULL, 0, 0, 'Malavalli', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(794, NULL, 0, 0, 'Raisen', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(795, NULL, 0, 0, 'Lahar', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(796, NULL, 0, 0, 'Uravakonda', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(797, NULL, 0, 0, 'Savanur', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(798, NULL, 0, 0, 'Sirohi', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(799, NULL, 0, 0, 'Udhampur', 'Jammu and Kashmir', 0, 0, '', '2019-08-27 07:37:26', NULL),
(800, NULL, 0, 0, 'Umarga', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(801, NULL, 0, 0, 'Pratapgarh', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(802, NULL, 0, 0, 'Lingsugur', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(803, NULL, 0, 0, 'Usilampatti', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(804, NULL, 0, 0, 'Palia Kalan', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(805, NULL, 0, 0, 'Wokha', 'Nagaland', 0, 0, '', '2019-08-27 07:37:26', NULL),
(806, NULL, 0, 0, 'Rajpipla', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(807, NULL, 0, 0, 'Vijayapura', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(808, NULL, 0, 0, 'Rawatbhata', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(809, NULL, 0, 0, 'Sangaria', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(810, NULL, 0, 0, 'Paithan', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(811, NULL, 0, 0, 'Rahuri', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(812, NULL, 0, 0, 'Patti', 'Punjab', 0, 0, '', '2019-08-27 07:37:26', NULL),
(813, NULL, 0, 0, 'Zaidpur', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(814, NULL, 0, 0, 'Lalsot', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(815, NULL, 0, 0, 'Maihar', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(816, NULL, 0, 0, 'Vedaranyam', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(817, NULL, 0, 0, 'Nawapur', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(818, NULL, 0, 0, 'Solan', 'Himachal Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(819, NULL, 0, 0, 'Vapi', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(820, NULL, 0, 0, 'Sanawad', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(821, NULL, 0, 0, 'Warisaliganj', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(822, NULL, 0, 0, 'Revelganj', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(823, NULL, 0, 0, 'Sabalgarh', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(824, NULL, 0, 0, 'Tuljapur', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(825, NULL, 0, 0, 'Simdega', 'Jharkhand', 0, 0, '', '2019-08-27 07:37:26', NULL),
(826, NULL, 0, 0, 'Musabani', 'Jharkhand', 0, 0, '', '2019-08-27 07:37:26', NULL),
(827, NULL, 0, 0, 'Kodungallur', 'Kerala', 0, 0, '', '2019-08-27 07:37:26', NULL),
(828, NULL, 0, 0, 'Phulabani', 'Odisha', 0, 0, '', '2019-08-27 07:37:26', NULL),
(829, NULL, 0, 0, 'Umreth', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(830, NULL, 0, 0, 'Narsipatnam', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(831, NULL, 0, 0, 'Nautanwa', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(832, NULL, 0, 0, 'Rajgir', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(833, NULL, 0, 0, 'Yellandu', 'Telangana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(834, NULL, 0, 0, 'Sathyamangalam', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(835, NULL, 0, 0, 'Pilibanga', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(836, NULL, 0, 0, 'Morshi', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(837, NULL, 0, 0, 'Pehowa', 'Haryana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(838, NULL, 0, 0, 'Sonepur', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(839, NULL, 0, 0, 'Pappinisseri', 'Kerala', 0, 0, '', '2019-08-27 07:37:26', NULL),
(840, NULL, 0, 0, 'Zamania', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(841, NULL, 0, 0, 'Mihijam', 'Jharkhand', 0, 0, '', '2019-08-27 07:37:26', NULL),
(842, NULL, 0, 0, 'Purna', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(843, NULL, 0, 0, 'Puliyankudi', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(844, NULL, 0, 0, 'Shikarpur, Bulandshahr', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(845, NULL, 0, 0, 'Umaria', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(846, NULL, 0, 0, 'Porsa', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(847, NULL, 0, 0, 'Naugawan Sadat', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(848, NULL, 0, 0, 'Fatehpur Sikri', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(849, NULL, 0, 0, 'Manuguru', 'Telangana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(850, NULL, 0, 0, 'Udaipur', 'Tripura', 0, 0, '', '2019-08-27 07:37:26', NULL),
(851, NULL, 0, 0, 'Pipar City', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(852, NULL, 0, 0, 'Pattamundai', 'Odisha', 0, 0, '', '2019-08-27 07:37:26', NULL),
(853, NULL, 0, 0, 'Nanjikottai', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(854, NULL, 0, 0, 'Taranagar', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(855, NULL, 0, 0, 'Yerraguntla', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(856, NULL, 0, 0, 'Satana', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(857, NULL, 0, 0, 'Sherghati', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(858, NULL, 0, 0, 'Sankeshwara', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(859, NULL, 0, 0, 'Madikeri', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(860, NULL, 0, 0, 'Thuraiyur', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(861, NULL, 0, 0, 'Sanand', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(862, NULL, 0, 0, 'Rajula', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(863, NULL, 0, 0, 'Kyathampalle', 'Telangana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(864, NULL, 0, 0, 'Shahabad, Rampur', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(865, NULL, 0, 0, 'Tilda Newra', 'Chhattisgarh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(866, NULL, 0, 0, 'Narsinghgarh', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(867, NULL, 0, 0, 'Chittur-Thathamangalam', 'Kerala', 0, 0, '', '2019-08-27 07:37:26', NULL),
(868, NULL, 0, 0, 'Malaj Khand', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(869, NULL, 0, 0, 'Sarangpur', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(870, NULL, 0, 0, 'Robertsganj', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(871, NULL, 0, 0, 'Sirkali', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(872, NULL, 0, 0, 'Radhanpur', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(873, NULL, 0, 0, 'Tiruchendur', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(874, NULL, 0, 0, 'Utraula', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(875, NULL, 0, 0, 'Patratu', 'Jharkhand', 0, 0, '', '2019-08-27 07:37:26', NULL),
(876, NULL, 0, 0, 'Vijainagar, Ajmer', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(877, NULL, 0, 0, 'Periyasemur', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(878, NULL, 0, 0, 'Pathri', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(879, NULL, 0, 0, 'Sadabad', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(880, NULL, 0, 0, 'Talikota', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(881, NULL, 0, 0, 'Sinnar', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(882, NULL, 0, 0, 'Mungeli', 'Chhattisgarh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(883, NULL, 0, 0, 'Sedam', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(884, NULL, 0, 0, 'Shikaripur', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(885, NULL, 0, 0, 'Sumerpur', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(886, NULL, 0, 0, 'Sattur', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(887, NULL, 0, 0, 'Sugauli', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(888, NULL, 0, 0, 'Lumding', 'Assam', 0, 0, '', '2019-08-27 07:37:26', NULL),
(889, NULL, 0, 0, 'Vandavasi', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(890, NULL, 0, 0, 'Titlagarh', 'Odisha', 0, 0, '', '2019-08-27 07:37:26', NULL),
(891, NULL, 0, 0, 'Uchgaon', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(892, NULL, 0, 0, 'Mokokchung', 'Nagaland', 0, 0, '', '2019-08-27 07:37:26', NULL),
(893, NULL, 0, 0, 'Paschim Punropara', 'West Bengal', 0, 0, '', '2019-08-27 07:37:26', NULL),
(894, NULL, 0, 0, 'Sagwara', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(895, NULL, 0, 0, 'Ramganj Mandi', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(896, NULL, 0, 0, 'Tarakeswar', 'West Bengal', 0, 0, '', '2019-08-27 07:37:26', NULL),
(897, NULL, 0, 0, 'Mahalingapura', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(898, NULL, 0, 0, 'Dharmanagar', 'Tripura', 0, 0, '', '2019-08-27 07:37:26', NULL),
(899, NULL, 0, 0, 'Mahemdabad', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(900, NULL, 0, 0, 'Manendragarh', 'Chhattisgarh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(901, NULL, 0, 0, 'Uran', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(902, NULL, 0, 0, 'Tharamangalam', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(903, NULL, 0, 0, 'Tirukkoyilur', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(904, NULL, 0, 0, 'Pen', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(905, NULL, 0, 0, 'Makhdumpur', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(906, NULL, 0, 0, 'Maner', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(907, NULL, 0, 0, 'Oddanchatram', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(908, NULL, 0, 0, 'Palladam', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(909, NULL, 0, 0, 'Mundi', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(910, NULL, 0, 0, 'Nabarangapur', 'Odisha', 0, 0, '', '2019-08-27 07:37:26', NULL),
(911, NULL, 0, 0, 'Mudalagi', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(912, NULL, 0, 0, 'Samalkha', 'Haryana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(913, NULL, 0, 0, 'Nepanagar', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(914, NULL, 0, 0, 'Karjat', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(915, NULL, 0, 0, 'Ranavav', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(916, NULL, 0, 0, 'Pedana', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(917, NULL, 0, 0, 'Pinjore', 'Haryana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(918, NULL, 0, 0, 'Lakheri', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(919, NULL, 0, 0, 'Pasan', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(920, NULL, 0, 0, 'Puttur', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(921, NULL, 0, 0, 'Vadakkuvalliyur', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(922, NULL, 0, 0, 'Tirukalukundram', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(923, NULL, 0, 0, 'Mahidpur', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(924, NULL, 0, 0, 'Mussoorie', 'Uttarakhand', 0, 0, '', '2019-08-27 07:37:26', NULL),
(925, NULL, 0, 0, 'Muvattupuzha', 'Kerala', 0, 0, '', '2019-08-27 07:37:26', NULL),
(926, NULL, 0, 0, 'Rasra', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(927, NULL, 0, 0, 'Udaipurwati', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(928, NULL, 0, 0, 'Manwath', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(929, NULL, 0, 0, 'Adoor', 'Kerala', 0, 0, '', '2019-08-27 07:37:26', NULL),
(930, NULL, 0, 0, 'Uthamapalayam', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(931, NULL, 0, 0, 'Partur', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(932, NULL, 0, 0, 'Nahan', 'Himachal Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(933, NULL, 0, 0, 'Ladwa', 'Haryana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(934, NULL, 0, 0, 'Mankachar', 'Assam', 0, 0, '', '2019-08-27 07:37:26', NULL),
(935, NULL, 0, 0, 'Nongstoin', 'Meghalaya', 0, 0, '', '2019-08-27 07:37:26', NULL),
(936, NULL, 0, 0, 'Losal', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(937, NULL, 0, 0, 'Sri Madhopur', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(938, NULL, 0, 0, 'Ramngarh', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(939, NULL, 0, 0, 'Mavelikkara', 'Kerala', 0, 0, '', '2019-08-27 07:37:26', NULL),
(940, NULL, 0, 0, 'Rawatsar', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(941, NULL, 0, 0, 'Rajakhera', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(942, NULL, 0, 0, 'Lar', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(943, NULL, 0, 0, 'Lal Gopalganj Nindaura', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(944, NULL, 0, 0, 'Muddebihal', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(945, NULL, 0, 0, 'Sirsaganj', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(946, NULL, 0, 0, 'Shahpura', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(947, NULL, 0, 0, 'Surandai', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(948, NULL, 0, 0, 'Sangole', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(949, NULL, 0, 0, 'Pavagada', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(950, NULL, 0, 0, 'Tharad', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(951, NULL, 0, 0, 'Mansa', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(952, NULL, 0, 0, 'Umbergaon', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(953, NULL, 0, 0, 'Mavoor', 'Kerala', 0, 0, '', '2019-08-27 07:37:26', NULL),
(954, NULL, 0, 0, 'Nalbari', 'Assam', 0, 0, '', '2019-08-27 07:37:26', NULL),
(955, NULL, 0, 0, 'Talaja', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(956, NULL, 0, 0, 'Malur', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(957, NULL, 0, 0, 'Mangrulpir', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(958, NULL, 0, 0, 'Soro', 'Odisha', 0, 0, '', '2019-08-27 07:37:26', NULL),
(959, NULL, 0, 0, 'Shahpura', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(960, NULL, 0, 0, 'Vadnagar', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(961, NULL, 0, 0, 'Raisinghnagar', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(962, NULL, 0, 0, 'Sindhagi', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(963, NULL, 0, 0, 'Sanduru', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(964, NULL, 0, 0, 'Sohna', 'Haryana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(965, NULL, 0, 0, 'Manavadar', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(966, NULL, 0, 0, 'Pihani', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(967, NULL, 0, 0, 'Safidon', 'Haryana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(968, NULL, 0, 0, 'Risod', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(969, NULL, 0, 0, 'Rosera', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(970, NULL, 0, 0, 'Sankari', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(971, NULL, 0, 0, 'Malpura', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(972, NULL, 0, 0, 'Sonamukhi', 'West Bengal', 0, 0, '', '2019-08-27 07:37:26', NULL),
(973, NULL, 0, 0, 'Shamsabad, Agra', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(974, NULL, 0, 0, 'Nokha', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(975, NULL, 0, 0, 'PandUrban Agglomeration', 'West Bengal', 0, 0, '', '2019-08-27 07:37:26', NULL),
(976, NULL, 0, 0, 'Mainaguri', 'West Bengal', 0, 0, '', '2019-08-27 07:37:26', NULL),
(977, NULL, 0, 0, 'Afzalpur', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(978, NULL, 0, 0, 'Shirur', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(979, NULL, 0, 0, 'Salaya', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(980, NULL, 0, 0, 'Shenkottai', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(981, NULL, 0, 0, 'Pratapgarh', 'Tripura', 0, 0, '', '2019-08-27 07:37:26', NULL),
(982, NULL, 0, 0, 'Vadipatti', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(983, NULL, 0, 0, 'Nagarkurnool', 'Telangana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(984, NULL, 0, 0, 'Savner', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(985, NULL, 0, 0, 'Sasvad', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(986, NULL, 0, 0, 'Rudrapur', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(987, NULL, 0, 0, 'Soron', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(988, NULL, 0, 0, 'Sholingur', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(989, NULL, 0, 0, 'Pandharkaoda', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(990, NULL, 0, 0, 'Perumbavoor', 'Kerala', 0, 0, '', '2019-08-27 07:37:26', NULL),
(991, NULL, 0, 0, 'Maddur', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(992, NULL, 0, 0, 'Nadbai', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(993, NULL, 0, 0, 'Talode', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(994, NULL, 0, 0, 'Shrigonda', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(995, NULL, 0, 0, 'Madhugiri', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(996, NULL, 0, 0, 'Tekkalakote', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(997, NULL, 0, 0, 'Seoni-Malwa', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(998, NULL, 0, 0, 'Shirdi', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(999, NULL, 0, 0, 'SUrban Agglomerationr', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1000, NULL, 0, 0, 'Terdal', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1001, NULL, 0, 0, 'Raver', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1002, NULL, 0, 0, 'Tirupathur', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1003, NULL, 0, 0, 'Taraori', 'Haryana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1004, NULL, 0, 0, 'Mukhed', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1005, NULL, 0, 0, 'Manachanallur', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1006, NULL, 0, 0, 'Rehli', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1007, NULL, 0, 0, 'Sanchore', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1008, NULL, 0, 0, 'Rajura', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1009, NULL, 0, 0, 'Piro', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1010, NULL, 0, 0, 'Mudabidri', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1011, NULL, 0, 0, 'Vadgaon Kasba', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1012, NULL, 0, 0, 'Nagar', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1013, NULL, 0, 0, 'Vijapur', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1014, NULL, 0, 0, 'Viswanatham', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1015, NULL, 0, 0, 'Polur', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1016, NULL, 0, 0, 'Panagudi', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1017, NULL, 0, 0, 'Manawar', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1018, NULL, 0, 0, 'Tehri', 'Uttarakhand', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1019, NULL, 0, 0, 'Samdhan', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1020, NULL, 0, 0, 'Pardi', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1021, NULL, 0, 0, 'Rahatgarh', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1022, NULL, 0, 0, 'Panagar', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1023, NULL, 0, 0, 'Uthiramerur', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1024, NULL, 0, 0, 'Tirora', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1025, NULL, 0, 0, 'Rangia', 'Assam', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1026, NULL, 0, 0, 'Sahjanwa', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1027, NULL, 0, 0, 'Wara Seoni', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1028, NULL, 0, 0, 'Magadi', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1029, NULL, 0, 0, 'Rajgarh (Alwar)', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1030, NULL, 0, 0, 'Rafiganj', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1031, NULL, 0, 0, 'Tarana', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1032, NULL, 0, 0, 'Rampur Maniharan', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1033, NULL, 0, 0, 'Sheoganj', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1034, NULL, 0, 0, 'Raikot', 'Punjab', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1035, NULL, 0, 0, 'Pauri', 'Uttarakhand', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1036, NULL, 0, 0, 'Sumerpur', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1037, NULL, 0, 0, 'Navalgund', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1038, NULL, 0, 0, 'Shahganj', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1039, NULL, 0, 0, 'Marhaura', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1040, NULL, 0, 0, 'Tulsipur', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1041, NULL, 0, 0, 'Sadri', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1042, NULL, 0, 0, 'Thiruthuraipoondi', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1043, NULL, 0, 0, 'Shiggaon', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1044, NULL, 0, 0, 'Pallapatti', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1045, NULL, 0, 0, 'Mahendragarh', 'Haryana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1046, NULL, 0, 0, 'Sausar', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1047, NULL, 0, 0, 'Ponneri', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1048, NULL, 0, 0, 'Mahad', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1049, NULL, 0, 0, 'Lohardaga', 'Jharkhand', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1050, NULL, 0, 0, 'Tirwaganj', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1051, NULL, 0, 0, 'Margherita', 'Assam', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1052, NULL, 0, 0, 'Sundarnagar', 'Himachal Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1053, NULL, 0, 0, 'Rajgarh', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1054, NULL, 0, 0, 'Mangaldoi', 'Assam', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1055, NULL, 0, 0, 'Renigunta', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1056, NULL, 0, 0, 'Longowal', 'Punjab', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1057, NULL, 0, 0, 'Ratia', 'Haryana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1058, NULL, 0, 0, 'Lalgudi', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1059, NULL, 0, 0, 'Shrirangapattana', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1060, NULL, 0, 0, 'Niwari', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1061, NULL, 0, 0, 'Natham', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1062, NULL, 0, 0, 'Unnamalaikadai', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1063, NULL, 0, 0, 'PurqUrban Agglomerationzi', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1064, NULL, 0, 0, 'Shamsabad, Farrukhabad', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1065, NULL, 0, 0, 'Mirganj', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1066, NULL, 0, 0, 'Todaraisingh', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1067, NULL, 0, 0, 'Warhapur', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1068, NULL, 0, 0, 'Rajam', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1069, NULL, 0, 0, 'Urmar Tanda', 'Punjab', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1070, NULL, 0, 0, 'Lonar', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1071, NULL, 0, 0, 'Powayan', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1072, NULL, 0, 0, 'P.N.Patti', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1073, NULL, 0, 0, 'Palampur', 'Himachal Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1074, NULL, 0, 0, 'Srisailam Project (Right Flank Colony) Township', 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1075, NULL, 0, 0, 'Sindagi', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1076, NULL, 0, 0, 'Sandi', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1077, NULL, 0, 0, 'Vaikom', 'Kerala', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1078, NULL, 0, 0, 'Malda', 'West Bengal', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1079, NULL, 0, 0, 'Tharangambadi', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1080, NULL, 0, 0, 'Sakaleshapura', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1081, NULL, 0, 0, 'Lalganj', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1082, NULL, 0, 0, 'Malkangiri', 'Odisha', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1083, NULL, 0, 0, 'Rapar', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1084, NULL, 0, 0, 'Mauganj', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1085, NULL, 0, 0, 'Todabhim', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1086, NULL, 0, 0, 'Srinivaspur', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1087, NULL, 0, 0, 'Murliganj', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1088, NULL, 0, 0, 'Reengus', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1089, NULL, 0, 0, 'Sawantwadi', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1090, NULL, 0, 0, 'Tittakudi', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1091, NULL, 0, 0, 'Lilong', 'Manipur', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1092, NULL, 0, 0, 'Rajaldesar', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1093, NULL, 0, 0, 'Pathardi', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1094, NULL, 0, 0, 'Achhnera', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1095, NULL, 0, 0, 'Pacode', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1096, NULL, 0, 0, 'Naraura', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1097, NULL, 0, 0, 'Nakur', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1098, NULL, 0, 0, 'Palai', 'Kerala', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1099, NULL, 0, 0, 'Morinda, India', 'Punjab', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1100, NULL, 0, 0, 'Manasa', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1101, NULL, 0, 0, 'Nainpur', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1102, NULL, 0, 0, 'Sahaspur', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1103, NULL, 0, 0, 'Pauni', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1104, NULL, 0, 0, 'Prithvipur', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1105, NULL, 0, 0, 'Ramtek', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1106, NULL, 0, 0, 'Silapathar', 'Assam', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1107, NULL, 0, 0, 'Songadh', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1108, NULL, 0, 0, 'Safipur', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1109, NULL, 0, 0, 'Sohagpur', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1110, NULL, 0, 0, 'Mul', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1111, NULL, 0, 0, 'Sadulshahar', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1112, NULL, 0, 0, 'Phillaur', 'Punjab', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1113, NULL, 0, 0, 'Sambhar', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1114, NULL, 0, 0, 'Prantij', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1115, NULL, 0, 0, 'Nagla', 'Uttarakhand', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1116, NULL, 0, 0, 'Pattran', 'Punjab', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1117, NULL, 0, 0, 'Mount Abu', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1118, NULL, 0, 0, 'Reoti', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1119, NULL, 0, 0, 'Tenu dam-cum-Kathhara', 'Jharkhand', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1120, NULL, 0, 0, 'Panchla', 'West Bengal', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1121, NULL, 0, 0, 'Sitarganj', 'Uttarakhand', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1122, NULL, 0, 0, 'Pasighat', 'Arunachal Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1123, NULL, 0, 0, 'Motipur', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1124, NULL, 0, 0, 'O\' Valley', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1125, NULL, 0, 0, 'Raghunathpur', 'West Bengal', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1126, NULL, 0, 0, 'Suriyampalayam', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1127, NULL, 0, 0, 'Qadian', 'Punjab', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1128, NULL, 0, 0, 'Rairangpur', 'Odisha', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1129, NULL, 0, 0, 'Silvassa', 'Dadra and Nagar Haveli', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1130, NULL, 0, 0, 'Nowrozabad (Khodargama)', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1131, NULL, 0, 0, 'Mangrol', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1132, NULL, 0, 0, 'Soyagaon', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1133, NULL, 0, 0, 'Sujanpur', 'Punjab', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1134, NULL, 0, 0, 'Manihari', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1135, NULL, 0, 0, 'Sikanderpur', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1136, NULL, 0, 0, 'Mangalvedhe', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1137, NULL, 0, 0, 'Phulera', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1138, NULL, 0, 0, 'Ron', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1139, NULL, 0, 0, 'Sholavandan', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1140, NULL, 0, 0, 'Saidpur', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1141, NULL, 0, 0, 'Shamgarh', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1142, NULL, 0, 0, 'Thammampatti', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1143, NULL, 0, 0, 'Maharajpur', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1144, NULL, 0, 0, 'Multai', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1145, NULL, 0, 0, 'Mukerian', 'Punjab', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1146, NULL, 0, 0, 'Sirsi', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1147, NULL, 0, 0, 'Purwa', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1148, NULL, 0, 0, 'Sheohar', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1149, NULL, 0, 0, 'Namagiripettai', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1150, NULL, 0, 0, 'Parasi', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1151, NULL, 0, 0, 'Lathi', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1152, NULL, 0, 0, 'Lalganj', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1153, NULL, 0, 0, 'Narkhed', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1154, NULL, 0, 0, 'Mathabhanga', 'West Bengal', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1155, NULL, 0, 0, 'Shendurjana', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1156, NULL, 0, 0, 'Peravurani', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1157, NULL, 0, 0, 'Mariani', 'Assam', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1158, NULL, 0, 0, 'Phulpur', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1159, NULL, 0, 0, 'Rania', 'Haryana', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1160, NULL, 0, 0, 'Pali', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1161, NULL, 0, 0, 'Pachore', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1162, NULL, 0, 0, 'Parangipettai', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1163, NULL, 0, 0, 'Pudupattinam', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1164, NULL, 0, 0, 'Panniyannur', 'Kerala', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1165, NULL, 0, 0, 'Maharajganj', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1166, NULL, 0, 0, 'Rau', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1167, NULL, 0, 0, 'Monoharpur', 'West Bengal', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1168, NULL, 0, 0, 'Mandawa', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1169, NULL, 0, 0, 'Marigaon', 'Assam', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1170, NULL, 0, 0, 'Pallikonda', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1171, NULL, 0, 0, 'Pindwara', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1172, NULL, 0, 0, 'Shishgarh', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1173, NULL, 0, 0, 'Patur', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1174, NULL, 0, 0, 'Mayang Imphal', 'Manipur', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1175, NULL, 0, 0, 'Mhowgaon', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1176, NULL, 0, 0, 'Guruvayoor', 'Kerala', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1177, NULL, 0, 0, 'Mhaswad', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1178, NULL, 0, 0, 'Sahawar', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1179, NULL, 0, 0, 'Sivagiri', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1180, NULL, 0, 0, 'Mundargi', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1181, NULL, 0, 0, 'Punjaipugalur', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1182, NULL, 0, 0, 'Kailasahar', 'Tripura', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1183, NULL, 0, 0, 'Samthar', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1184, NULL, 0, 0, 'Sakti', 'Chhattisgarh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1185, NULL, 0, 0, 'Sadalagi', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1186, NULL, 0, 0, 'Silao', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1187, NULL, 0, 0, 'Mandalgarh', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1188, NULL, 0, 0, 'Loha', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1189, NULL, 0, 0, 'Pukhrayan', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1190, NULL, 0, 0, 'Padmanabhapuram', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1191, NULL, 0, 0, 'Belonia', 'Tripura', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1192, NULL, 0, 0, 'Saiha', 'Mizoram', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1193, NULL, 0, 0, 'Srirampore', 'West Bengal', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1194, NULL, 0, 0, 'Talwara', 'Punjab', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1195, NULL, 0, 0, 'Puthuppally', 'Kerala', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1196, NULL, 0, 0, 'Khowai', 'Tripura', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1197, NULL, 0, 0, 'Vijaypur', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1198, NULL, 0, 0, 'Takhatgarh', 'Rajasthan', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1199, NULL, 0, 0, 'Thirupuvanam', 'Tamil Nadu', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1200, NULL, 0, 0, 'Adra', 'West Bengal', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1201, NULL, 0, 0, 'Piriyapatna', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1202, NULL, 0, 0, 'Obra', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1203, NULL, 0, 0, 'Adalaj', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1204, NULL, 0, 0, 'Nandgaon', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1205, NULL, 0, 0, 'Barh', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1206, NULL, 0, 0, 'Chhapra', 'Gujarat', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1207, NULL, 0, 0, 'Panamattom', 'Kerala', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1208, NULL, 0, 0, 'Niwai', 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1209, NULL, 0, 0, 'Bageshwar', 'Uttarakhand', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1210, NULL, 0, 0, 'Tarbha', 'Odisha', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1211, NULL, 0, 0, 'Adyar', 'Karnataka', 0, 0, '', '2019-08-27 07:37:26', NULL);
INSERT INTO `its_cities` (`id`, `org_id`, `country_id`, `state_id`, `city`, `state`, `status`, `is_deleted`, `ip_address`, `modified_date`, `created_at`) VALUES
(1212, NULL, 0, 0, 'Narsinghgarh', 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1213, NULL, 0, 0, 'Warud', 'Maharashtra', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1214, NULL, 0, 0, 'Asarganj', 'Bihar', 0, 0, '', '2019-08-27 07:37:26', NULL),
(1215, NULL, 0, 0, 'Sarsod', 'Haryana', 0, 0, '', '2019-08-27 07:37:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `its_countries`
--

CREATE TABLE `its_countries` (
  `id` int(11) NOT NULL,
  `org_id` int(11) DEFAULT NULL,
  `code` varchar(2) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `country` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `phone_code` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0 COMMENT '1 =''Delete''',
  `ip_address` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `its_countries`
--

INSERT INTO `its_countries` (`id`, `org_id`, `code`, `country`, `phone_code`, `status`, `is_deleted`, `ip_address`, `modified_date`, `created_date`) VALUES
(1, NULL, '', 'India', 91, 1, 0, '::1', '2019-10-07 23:30:00', '2019-10-15 00:00:00'),
(2, NULL, '', 'UK', 22, 1, 0, '::1', '2019-10-14 23:30:00', '2019-10-15 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `its_customers`
--

CREATE TABLE `its_customers` (
  `id` int(11) NOT NULL,
  `org_id` int(11) DEFAULT NULL,
  `land_id` int(11) DEFAULT NULL,
  `party_types` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f_name` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `l_name` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `location_types` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location_uses` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `party_relationships` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_points` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `occupation` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_type` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location_type` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mailing_address` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mailing_city` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mailing_state` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mailing_country` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mailing_pin` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mailing_landmark` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mailing_phone` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mailing_email` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shiping_address` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shiping_city` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shiping_state` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shiping_country` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shiping_pin` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shiping_landmark` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shiping_phone` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `dob` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_type` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shiping_email` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `description` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `its_customers`
--

INSERT INTO `its_customers` (`id`, `org_id`, `land_id`, `party_types`, `f_name`, `l_name`, `location`, `location_types`, `location_uses`, `party_relationships`, `contact_points`, `phone`, `email`, `gender`, `occupation`, `contact_type`, `location_type`, `mailing_address`, `mailing_city`, `mailing_state`, `mailing_country`, `mailing_pin`, `mailing_landmark`, `mailing_phone`, `mailing_email`, `shiping_address`, `shiping_city`, `shiping_state`, `shiping_country`, `shiping_pin`, `shiping_landmark`, `shiping_phone`, `mobile`, `dob`, `company`, `company_type`, `shiping_email`, `state_id`, `country_id`, `description`, `address`, `created_at`, `updated_at`, `created_by`, `status`) VALUES
(2, NULL, NULL, NULL, 'Amit', 'Rajput', NULL, NULL, NULL, NULL, NULL, NULL, 'amitrajput@gmail.com', 'male', 'jobs', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7409969352, '23-10-2019', 'TCS Group', 'llp', NULL, NULL, NULL, NULL, 'Moradabad,Pin-244002', '2019-10-22 00:00:00', '2019-10-23 00:00:00', NULL, 1),
(5, NULL, NULL, NULL, 'Sumit', 'Choudhary', NULL, NULL, NULL, NULL, NULL, NULL, 'sumit@gmail.com', 'male', 'Student', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7409969352, '08-11-2019', 'HLK', 'ltd', NULL, NULL, NULL, NULL, 'Karol Bagh, Delhi -110008', '2019-11-08 00:00:00', NULL, NULL, 1),
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dempalrajput@gmail.in', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 9748578548, '11-11-2019', 'Amazon1', 'ltd', NULL, NULL, NULL, NULL, 'Jatt bazar Amroha', '2019-11-11 00:00:00', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `its_departments`
--

CREATE TABLE `its_departments` (
  `id` int(11) NOT NULL,
  `department_name` varchar(100) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `pos_id` int(11) DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT NULL,
  `is_default` tinyint(4) DEFAULT NULL,
  `ip_address` varchar(50) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_date` date DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_departments`
--

INSERT INTO `its_departments` (`id`, `department_name`, `description`, `pos_id`, `is_active`, `is_default`, `ip_address`, `created_by`, `deleted_by`, `deleted_date`, `created_at`, `updated_at`) VALUES
(1, 'It Department', 'This is it itdepartment Dep', 5, 1, 1, '::11', 1, NULL, '2019-10-11', '2019-10-11', '2019-10-11'),
(2, 'HR Department', 'Test description', 6, 1, NULL, NULL, NULL, NULL, NULL, '2019-10-17', NULL),
(3, 'Sales Department', 'Sales department', 7, 1, NULL, NULL, NULL, NULL, NULL, '2019-10-11', NULL),
(4, 'It Department', 'This is it itdepartment', 2, 1, NULL, NULL, NULL, NULL, NULL, '2019-10-14', NULL),
(5, 'Sales Department', 'This is it itdepartment', 2, 1, NULL, NULL, NULL, NULL, NULL, '2019-10-14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `its_lands`
--

CREATE TABLE `its_lands` (
  `id` int(11) NOT NULL,
  `cust_id` int(11) DEFAULT NULL,
  `area` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sector` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `block` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `land_name` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `plot_no` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `plot_size` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `uom` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pincode` bigint(20) DEFAULT NULL,
  `country` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address1` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `address2` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `latitute` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `longitute` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `documents` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `its_lands`
--

INSERT INTO `its_lands` (`id`, `cust_id`, `area`, `sector`, `block`, `land_name`, `plot_no`, `plot_size`, `uom`, `city`, `state`, `pincode`, `country`, `address1`, `address2`, `latitute`, `longitute`, `documents`, `created_at`, `updated_at`, `status`) VALUES
(1, NULL, 'Noida', '63', 'A-40', 'Ithum Tower', '4544', '1000', 'sq.mtr', 'Jamshedpur', 'Jharkhand', 201301, 'india', 'noida', NULL, '3424242', '324342423', NULL, '2019-10-22', '2019-10-23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `its_leasedata`
--

CREATE TABLE `its_leasedata` (
  `id` int(11) NOT NULL,
  `org_id` int(11) DEFAULT NULL,
  `land_id` int(11) DEFAULT NULL,
  `cust_id` int(11) DEFAULT NULL,
  `trans_cust_id` int(11) DEFAULT NULL,
  `application_no` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `application_date` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `allotment_no` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `allotment_date` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `registration_no` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `registration_date` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `position_date` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `based_rent` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tax` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `insurance` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `maintanance` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `additional_charge` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `net_payable` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `net_pay` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lease_duration` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lease_time` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `start_date` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `end_date` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_transfer` int(11) NOT NULL DEFAULT 0,
  `transfer_date` date DEFAULT NULL,
  `is_cancelled` int(11) DEFAULT 0,
  `created_at` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_pcc` tinyint(1) DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `its_leasedata`
--

INSERT INTO `its_leasedata` (`id`, `org_id`, `land_id`, `cust_id`, `trans_cust_id`, `application_no`, `application_date`, `allotment_no`, `allotment_date`, `registration_no`, `registration_date`, `position_date`, `based_rent`, `tax`, `insurance`, `maintanance`, `additional_charge`, `net_payable`, `net_pay`, `lease_duration`, `lease_time`, `start_date`, `end_date`, `is_transfer`, `transfer_date`, `is_cancelled`, `created_at`, `updated_at`, `is_pcc`, `status`) VALUES
(1, NULL, 1, 5, 2, '8888', '22-10-2019', '99999', '22-10-2019', '45454', NULL, NULL, '9', '7', '8', '8', '8', 'yearly', '40', NULL, '1', '22-10-2019', NULL, 1, '2019-11-08', 0, '2019-10-22', NULL, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `its_location_block`
--

CREATE TABLE `its_location_block` (
  `id` int(11) NOT NULL,
  `phase_id` int(11) DEFAULT NULL,
  `block` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `its_location_block`
--

INSERT INTO `its_location_block` (`id`, `phase_id`, `block`, `created_at`, `updated_at`, `status`) VALUES
(1, 1, 'A-40', '2019-10-22', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `its_location_phase`
--

CREATE TABLE `its_location_phase` (
  `id` int(11) NOT NULL,
  `zone_id` int(11) DEFAULT NULL,
  `phase` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `its_location_phase`
--

INSERT INTO `its_location_phase` (`id`, `zone_id`, `phase`, `created_at`, `updated_at`, `status`) VALUES
(1, 1, '63', '2019-10-22', NULL, NULL),
(2, 2, 'Karol Bagh', '2019-11-12', NULL, NULL),
(3, 3, 'AK Shop', '2019-11-12', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `its_location_zone`
--

CREATE TABLE `its_location_zone` (
  `id` int(11) NOT NULL,
  `sector_zone` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `its_location_zone`
--

INSERT INTO `its_location_zone` (`id`, `sector_zone`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Noida', '2019-10-22', '2019-11-12', NULL),
(2, 'Delhi', '2019-11-12', NULL, NULL),
(3, 'Moradabad', '2019-11-12', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `its_org`
--

CREATE TABLE `its_org` (
  `id` int(11) NOT NULL,
  `org_id` int(11) DEFAULT NULL,
  `users_id` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `org_code` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `org_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_no` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_person` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `zipcode` int(11) DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `org_type` int(11) DEFAULT 0 COMMENT '1=''Live'' , 0=''Demo''',
  `pf_no` bigint(11) DEFAULT NULL,
  `esic_no` bigint(11) DEFAULT NULL,
  `tax_no` bigint(11) DEFAULT NULL,
  `policy_no` bigint(11) NOT NULL,
  `gratuity_no` bigint(11) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `is_deleted` int(11) DEFAULT 0 COMMENT '1 = ''Delete''',
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_date` timestamp NULL DEFAULT NULL,
  `login_status` int(11) DEFAULT 0 COMMENT '1=''Active'' ,0=''Inactive''',
  `status` int(11) DEFAULT 0 COMMENT '1=''Active'' , 0=''Inactive''',
  `ip_address` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `its_org`
--

INSERT INTO `its_org` (`id`, `org_id`, `users_id`, `parent_id`, `org_code`, `org_name`, `contact_no`, `contact_person`, `email`, `address`, `website`, `city_id`, `state_id`, `country_id`, `zipcode`, `photo`, `org_type`, `pf_no`, `esic_no`, `tax_no`, `policy_no`, `gratuity_no`, `start_date`, `end_date`, `is_deleted`, `deleted_by`, `deleted_date`, `login_status`, `status`, `ip_address`, `created_by`, `modified_by`, `modified_date`, `created_at`, `deleted_at`, `updated_at`) VALUES
(1, NULL, 5, NULL, 'ITS2132', 'IT SCIENT', '885559998', NULL, 'itscient@gmail.com', 'Noida sec-63 , Pin - 201301', 'www.itscient.in', 64, 26, 1, 201301, '1567778233.jpg', 0, 454544, 5454, 111111, 22222, 3333333, NULL, NULL, 0, NULL, NULL, 1, 0, '::1', NULL, NULL, '2019-09-24 04:53:43', '2019-09-24 04:53:43', NULL, '2019-09-24 04:53:43');

-- --------------------------------------------------------

--
-- Table structure for table `its_password_resets`
--

CREATE TABLE `its_password_resets` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `its_password_resets`
--

INSERT INTO `its_password_resets` (`id`, `email`, `token`, `created_at`) VALUES
(2, 'amitrajput270@gmail.com', '$2y$10$B9kDQTY2ZtVgywawZO/nle1n4xYXIsYdXGIM0R8oXBLaBJO8HMY7i', '2019-10-05 07:05:58');

-- --------------------------------------------------------

--
-- Table structure for table `its_pccdata`
--

CREATE TABLE `its_pccdata` (
  `id` int(11) NOT NULL,
  `org_id` int(11) DEFAULT NULL,
  `land_id` int(11) DEFAULT NULL,
  `cust_id` int(11) DEFAULT NULL,
  `trans_cust_id` int(11) DEFAULT NULL,
  `application_no` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `application_date` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `allotment_no` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `allotment_date` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `registration_no` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `registration_date` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `position_date` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `based_rent` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tax` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `insurance` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `maintanance` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `additional_charge` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `net_payable` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `net_pay` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lease_duration` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lease_time` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `start_date` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `end_date` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_transfer` int(11) NOT NULL DEFAULT 0,
  `transfer_date` date DEFAULT NULL,
  `is_cancelled` int(11) DEFAULT 0,
  `created_at` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_pcc` tinyint(1) DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `its_priority_levels`
--

CREATE TABLE `its_priority_levels` (
  `id` int(11) NOT NULL,
  `priority_name` varchar(50) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT NULL,
  `is_default` tinyint(4) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_date` date DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_priority_levels`
--

INSERT INTO `its_priority_levels` (`id`, `priority_name`, `description`, `is_active`, `is_default`, `deleted_by`, `deleted_date`, `created_at`, `updated_at`, `created_by`) VALUES
(1, 'low', NULL, 1, NULL, NULL, NULL, '2019-10-21', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `its_product`
--

CREATE TABLE `its_product` (
  `id` int(11) NOT NULL,
  `org_id` int(11) DEFAULT NULL,
  `cust_id` int(11) DEFAULT NULL,
  `land_id` int(11) DEFAULT NULL,
  `product_code` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_name` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_category_id` varchar(50) COLLATE utf8_unicode_ci DEFAULT 'NULL',
  `product_sub_category_id` int(11) DEFAULT NULL,
  `product_type` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `serial_number` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `product_condition` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `quantity_type` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `unit_name` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `installed_location_id` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location_id` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_type_id` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_1` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_2` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `state1` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city1` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pin1` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `area_square_fit` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `landmark1` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `long_lat1` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city2` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country1` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state2` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country2` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pin2` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `unit_of_measure_type_id` int(11) DEFAULT NULL,
  `unit_of_measure_name_id` int(11) DEFAULT NULL,
  `unit_of_measure` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `landmark2` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `long_lat2` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `created_by` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modify_by` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_serviceable_item` varchar(111) COLLATE utf8_unicode_ci DEFAULT '0',
  `is_service_item` varchar(111) COLLATE utf8_unicode_ci DEFAULT '0',
  `is_serialized` varchar(111) COLLATE utf8_unicode_ci DEFAULT '0',
  `is_leasable` int(11) DEFAULT 1,
  `num_column1` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `txt_column_value1` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `txt_column_value2` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `txt_column_value3` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `txt_column_value4` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `txt_column3` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `its_state`
--

CREATE TABLE `its_state` (
  `id` int(10) UNSIGNED NOT NULL,
  `org_id` int(11) DEFAULT NULL,
  `state` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0 COMMENT '1 = ''delete''',
  `ip_address` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `its_state`
--

INSERT INTO `its_state` (`id`, `org_id`, `state`, `status`, `is_deleted`, `ip_address`, `modified_date`, `created_at`) VALUES
(1, NULL, 'Andhra Pradesh', 0, 0, '', '2019-08-27 07:25:22', NULL),
(2, NULL, 'Arunachal Pradesh', 0, 0, '', '2019-08-27 07:25:22', NULL),
(3, NULL, 'Assam', 0, 0, '', '2019-08-27 07:25:22', NULL),
(4, NULL, 'Bihar', 0, 0, '', '2019-08-27 07:25:22', NULL),
(5, NULL, 'Chhattisgarh', 0, 0, '', '2019-08-27 07:25:22', NULL),
(6, NULL, 'Goa', 0, 0, '', '2019-08-27 07:25:22', NULL),
(7, NULL, 'Gujarat', 0, 0, '', '2019-08-27 07:25:22', NULL),
(8, NULL, 'Haryana', 0, 0, '', '2019-08-27 07:25:22', NULL),
(9, NULL, 'Himachal Pradesh', 0, 0, '', '2019-08-27 07:25:22', NULL),
(10, NULL, 'Jammu and Kashmir', 0, 0, '', '2019-08-27 07:25:22', NULL),
(11, NULL, 'Jharkhand', 0, 0, '', '2019-08-27 07:25:22', NULL),
(12, NULL, 'Karnataka', 0, 0, '', '2019-08-27 07:25:22', NULL),
(13, NULL, 'Kerala', 0, 0, '', '2019-08-27 07:25:22', NULL),
(14, NULL, 'Madhya Pradesh', 0, 0, '', '2019-08-27 07:25:22', NULL),
(15, NULL, 'Maharashtra', 0, 0, '', '2019-08-27 07:25:22', NULL),
(16, NULL, 'Manipur', 0, 0, '', '2019-08-27 07:25:22', NULL),
(17, NULL, 'Meghalaya', 0, 0, '', '2019-08-27 07:25:22', NULL),
(18, NULL, 'Mizoram', 0, 0, '', '2019-08-27 07:25:22', NULL),
(19, NULL, 'Nagaland', 0, 0, '', '2019-08-27 07:25:22', NULL),
(20, NULL, 'Odisha', 0, 0, '', '2019-08-27 07:25:22', NULL),
(21, NULL, 'Punjab', 0, 0, '', '2019-08-27 07:25:22', NULL),
(22, NULL, 'Rajasthan', 0, 0, '', '2019-08-27 07:25:22', NULL),
(23, NULL, 'Sikkim', 0, 0, '', '2019-08-27 07:25:22', NULL),
(24, NULL, 'Tamil Nadu', 0, 0, '', '2019-08-27 07:25:22', NULL),
(25, NULL, 'Tripura', 0, 0, '', '2019-08-27 07:25:22', NULL),
(26, NULL, 'Uttar Pradesh', 0, 0, '', '2019-08-27 07:25:22', NULL),
(27, NULL, 'Uttarakhand', 0, 0, '', '2019-08-27 07:25:22', NULL),
(28, NULL, 'West Bengal', 0, 0, '', '2019-08-27 07:25:22', NULL),
(29, NULL, 'Telangana', 0, 0, '', '2019-08-27 07:25:22', NULL),
(30, NULL, 'Andaman and Nicobar', 0, 0, '', '2019-08-27 07:25:22', NULL),
(31, NULL, 'Chandigarh', 0, 0, '', '2019-08-27 07:25:22', NULL),
(32, NULL, 'Dadra and Nagar Haveli', 0, 0, '', '2019-08-27 07:25:22', NULL),
(33, NULL, 'Daman and Diu', 0, 0, '', '2019-08-27 07:25:22', NULL),
(34, NULL, 'Lakshadweep', 0, 0, '', '2019-08-27 07:25:22', NULL),
(35, NULL, 'NCT Delhi', 0, 0, '', '2019-08-27 07:25:22', NULL),
(36, NULL, 'Puducherry', 0, 0, '', '2019-08-27 07:25:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `its_subcategory`
--

CREATE TABLE `its_subcategory` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `subcategory_name` varchar(50) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `pos_id` int(11) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `is_default` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_date` date DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_subcategory`
--

INSERT INTO `its_subcategory` (`id`, `category_id`, `subcategory_name`, `description`, `pos_id`, `is_active`, `is_default`, `created_by`, `deleted_by`, `deleted_date`, `created_at`, `updated_at`) VALUES
(1, 1, 'redmi', 'desc', 8, NULL, NULL, NULL, NULL, NULL, '2019-10-21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `its_ticket`
--

CREATE TABLE `its_ticket` (
  `id` int(11) NOT NULL,
  `request_id` int(11) DEFAULT NULL,
  `technician_id` int(11) DEFAULT NULL,
  `request_type` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `ticket_mode` int(11) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `requester_name` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `item` int(11) DEFAULT NULL,
  `impact` int(11) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  `urgency` int(11) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `poc_id` int(11) DEFAULT NULL,
  `location` int(11) DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `attachment` varchar(50) DEFAULT NULL,
  `resolution` varchar(1000) DEFAULT NULL,
  `ip_address` varchar(50) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `deleted_by` varchar(50) DEFAULT NULL,
  `deleted_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_ticket`
--

INSERT INTO `its_ticket` (`id`, `request_id`, `technician_id`, `request_type`, `status`, `ticket_mode`, `level`, `category`, `requester_name`, `email`, `phone`, `subcategory_id`, `item`, `impact`, `priority`, `urgency`, `department_id`, `poc_id`, `location`, `due_date`, `subject`, `description`, `attachment`, `resolution`, `ip_address`, `created_by`, `deleted_by`, `deleted_date`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 2, 3, 1, 3, 1, 'Neeraj Rawat', 'amitrajput@gmail.com', '7409969352', 1, NULL, 2, 1, NULL, 2, 8, NULL, '2019-10-31', 'testing', 'desc', NULL, 'resolutuion', '122.161.199.193', 1, NULL, NULL, '2019-10-21 16:54:43', '2019-10-21 17:25:47'),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Amit Rajput', 'amit7@gmail.com', '7409969352', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dasadad', NULL, NULL, '::1', NULL, NULL, NULL, '2019-10-22 09:09:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `its_uom_table`
--

CREATE TABLE `its_uom_table` (
  `id` int(11) NOT NULL,
  `org_id` int(11) DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  `uom_type` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `unit_name` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `unit_short_name` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `unit_plural_name` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `unit_plural_shortname` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stauts` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modified_by` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `its_uom_table`
--

INSERT INTO `its_uom_table` (`id`, `org_id`, `type_id`, `uom_type`, `unit_name`, `unit_short_name`, `unit_plural_name`, `unit_plural_shortname`, `stauts`, `description`, `created_at`, `updated_at`, `modified_by`, `created_by`) VALUES
(1, 1, 1, 'number', 'unit', 'mt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 1, 1, 'number', 'piece', 'mt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 1, 2, 'length', 'meter', 'mt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 1, 2, 'length', 'inch', 'inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 1, 6, 'time', 'days', 'd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 1, 6, 'time', 'month', 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 1, 6, 'time', 'week', 'w', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 1, 6, 'time', 'yaer', 'y', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 1, 3, 'Area', 'Square Meter', 'am', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 1, 3, 'Area', 'Square Inch', 'si', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 1, 3, 'Area', 'Square feet', 'sf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 1, 3, 'Area', 'Acre', 'ar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 1, 3, 'Area', 'Hectare', 'ar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 1, 5, 'weight', 'Gram', 'g', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 1, 5, 'weight', 'Pound', 'p', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 1, 5, 'weight', 'Quintol', 'q', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 1, 5, 'weight', 'Tonne', 't', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 1, 4, 'volume', 'Litre', 'lt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 1, 4, 'volume', 'Gallon', 'gl', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 1, 4, 'volume', 'Cubic Feet', 'cf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 1, 4, 'volume', 'Cubic Meter', 'cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 1, 1, 'number', 'Dozen', 'dz', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 1, 1, 'number', 'Gross', 'gr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 1, 2, 'length', 'foot', 'ft', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 1, 2, 'length', 'yard', 'yd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `its_uom_type`
--

CREATE TABLE `its_uom_type` (
  `id` int(11) NOT NULL,
  `uom_type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL,
  `created_by` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `modified_by` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `its_uom_type`
--

INSERT INTO `its_uom_type` (`id`, `uom_type`, `created_at`, `status`, `created_by`, `modified_by`) VALUES
(1, 'number', '2019-08-16 17:37:18', 0, '', ''),
(2, 'length', '2019-08-16 17:37:18', 0, '', ''),
(3, 'area', '2019-08-16 17:37:18', 0, '', ''),
(4, 'volume', '2019-08-16 17:37:18', 0, '', ''),
(5, 'weight', '2019-08-16 17:37:18', 0, '', ''),
(6, 'time', '2019-08-16 17:37:18', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `its_users`
--

CREATE TABLE `its_users` (
  `id` int(11) NOT NULL,
  `users_role` int(11) DEFAULT NULL,
  `users_type` int(11) DEFAULT NULL COMMENT '''1'' Employee',
  `parent_id` int(11) DEFAULT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `username` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` bigint(111) DEFAULT NULL,
  `address` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `token_expire` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL COMMENT '''0'' Inactive , ''1'' Active',
  `user_image` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_deleted` int(11) DEFAULT 0 COMMENT '''1'' =>delete',
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_date` timestamp NULL DEFAULT NULL,
  `ip_address` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `created_date` datetime DEFAULT NULL,
  `last_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `its_users`
--

INSERT INTO `its_users` (`id`, `users_role`, `users_type`, `parent_id`, `emp_id`, `username`, `name`, `password`, `email`, `phone`, `address`, `email_verified_at`, `remember_token`, `token_expire`, `status`, `user_image`, `is_deleted`, `deleted_by`, `deleted_date`, `ip_address`, `modified_date`, `created_at`, `updated_at`, `created_date`, `last_login`) VALUES
(1, 1, 0, 0, 0, 'admin', 'Neha Arora', '$2a$08$TnLUue010iZQcUVL.b0bPeCaFvVqa221s0MmNopcnzeIg4q4jjxQa', 'amitrajput270@gmail.com', 7409969352, 'Noida 63', NULL, '8uqPNoXVtNCX0pPszc4B2zVbDWIIUybnnN2r3pRxA4TtmuUAntNld8K4X21o', NULL, 0, 'neha.jpg', 0, 0, NULL, '', '2019-11-12 13:25:34', '2019-06-28 09:27:00', '2019-06-28 09:27:00', NULL, NULL),
(8, 2, NULL, NULL, NULL, 'amit', 'Amit Rajput', '$2y$10$nJTU590NnqpgvsUXimlP0ezHypLoNNlU6nl3.PaytWlLZyrykKA5u', 'amitrajput@gmail.com', 7409969352, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, '2019-10-21 05:17:16', '2019-10-21 15:47:16', '2019-10-21 05:17:16', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `its_category`
--
ALTER TABLE `its_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_cities`
--
ALTER TABLE `its_cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_countries`
--
ALTER TABLE `its_countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_customers`
--
ALTER TABLE `its_customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_departments`
--
ALTER TABLE `its_departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_lands`
--
ALTER TABLE `its_lands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_leasedata`
--
ALTER TABLE `its_leasedata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_location_block`
--
ALTER TABLE `its_location_block`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_location_phase`
--
ALTER TABLE `its_location_phase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_location_zone`
--
ALTER TABLE `its_location_zone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_org`
--
ALTER TABLE `its_org`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_password_resets`
--
ALTER TABLE `its_password_resets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `its_password_resets_email_index` (`email`);

--
-- Indexes for table `its_pccdata`
--
ALTER TABLE `its_pccdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_priority_levels`
--
ALTER TABLE `its_priority_levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_product`
--
ALTER TABLE `its_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_state`
--
ALTER TABLE `its_state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_subcategory`
--
ALTER TABLE `its_subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_ticket`
--
ALTER TABLE `its_ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_uom_table`
--
ALTER TABLE `its_uom_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_uom_type`
--
ALTER TABLE `its_uom_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_users`
--
ALTER TABLE `its_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `its_category`
--
ALTER TABLE `its_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `its_countries`
--
ALTER TABLE `its_countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `its_customers`
--
ALTER TABLE `its_customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `its_departments`
--
ALTER TABLE `its_departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `its_lands`
--
ALTER TABLE `its_lands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `its_leasedata`
--
ALTER TABLE `its_leasedata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `its_location_block`
--
ALTER TABLE `its_location_block`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `its_location_phase`
--
ALTER TABLE `its_location_phase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `its_location_zone`
--
ALTER TABLE `its_location_zone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `its_org`
--
ALTER TABLE `its_org`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `its_password_resets`
--
ALTER TABLE `its_password_resets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `its_pccdata`
--
ALTER TABLE `its_pccdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `its_priority_levels`
--
ALTER TABLE `its_priority_levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `its_product`
--
ALTER TABLE `its_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `its_state`
--
ALTER TABLE `its_state`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `its_subcategory`
--
ALTER TABLE `its_subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `its_ticket`
--
ALTER TABLE `its_ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `its_uom_table`
--
ALTER TABLE `its_uom_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `its_uom_type`
--
ALTER TABLE `its_uom_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `its_users`
--
ALTER TABLE `its_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
