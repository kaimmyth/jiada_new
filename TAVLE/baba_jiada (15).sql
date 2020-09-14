-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 18, 2019 at 07:26 AM
-- Server version: 5.7.27
-- PHP Version: 7.2.7

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
(6, 'test', 'test', 11, 0, NULL, NULL, NULL, NULL, '2019-11-08', NULL),
(8, 'hardware', 'all hardware requirement', 12, 1, NULL, NULL, NULL, NULL, '2019-11-19', NULL),
(9, 'computer application', 'sw/hw', 13, 0, NULL, NULL, NULL, NULL, '2019-11-19', NULL),
(10, 'anything', 'support', 12, NULL, NULL, NULL, NULL, NULL, '2019-11-19', NULL),
(11, 'Science', 'research', 11, 1, NULL, NULL, NULL, NULL, '2019-11-19', NULL),
(12, 'hardware', 'all hardware requirement', NULL, 1, NULL, NULL, NULL, NULL, '2019-11-20', NULL),
(13, 'cat one', 'cat one', 21, 1, NULL, NULL, NULL, NULL, '2019-12-16', NULL);

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
  `is_deleted` int(11) NOT NULL DEFAULT '0' COMMENT '1 ="Delete"',
  `ip_address` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
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
  `is_deleted` int(11) NOT NULL DEFAULT '0' COMMENT '1 =''Delete''',
  `ip_address` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
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
  `comp_id` int(11) DEFAULT NULL,
  `is_director` int(11) NOT NULL DEFAULT '0',
  `party_types` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f_name` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `l_name` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_proprietor` int(1) NOT NULL DEFAULT '0',
  `location` text COLLATE utf8_unicode_ci,
  `location_types` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location_uses` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `party_relationships` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_points` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `landline_no` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `occupation` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `svalue` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `svalue_percentage` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
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
  `mobile` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dob` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_reg_no` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_type` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shiping_email` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `description` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci,
  `company_addrerss` text COLLATE utf8_unicode_ci,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `its_customers`
--

INSERT INTO `its_customers` (`id`, `org_id`, `land_id`, `comp_id`, `is_director`, `party_types`, `f_name`, `l_name`, `is_proprietor`, `location`, `location_types`, `location_uses`, `party_relationships`, `contact_points`, `phone`, `landline_no`, `email`, `gender`, `occupation`, `svalue`, `svalue_percentage`, `contact_type`, `location_type`, `mailing_address`, `mailing_city`, `mailing_state`, `mailing_country`, `mailing_pin`, `mailing_landmark`, `mailing_phone`, `mailing_email`, `shiping_address`, `shiping_city`, `shiping_state`, `shiping_country`, `shiping_pin`, `shiping_landmark`, `shiping_phone`, `mobile`, `dob`, `company_reg_no`, `company`, `company_type`, `shiping_email`, `state_id`, `country_id`, `description`, `address`, `company_addrerss`, `created_at`, `updated_at`, `created_by`, `status`) VALUES
(1, 1, NULL, 1, 0, NULL, 'Shivani', 'Mahto', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', NULL, NULL, '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '01-12-2019', '78592', 'Mudra', 'ltd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(2, 1, NULL, 2, 0, NULL, 'Abhishek', 'Kumar', 1, 'N/A', NULL, NULL, NULL, NULL, NULL, NULL, 'abhishek@gmail.com', 'male', 'web', NULL, '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8092181759', '01-12-2019', '123', 'SR Industries', 'proprietorship', NULL, NULL, NULL, NULL, 'NA', 'NA', NULL, '2019-12-11 00:00:00', NULL, 1),
(3, 1, NULL, 1, 1, NULL, 'rohit', 'kumar', 0, 'N/A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', NULL, NULL, '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '02-12-2019', '78592', 'Mudra', 'ltd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4, 1, NULL, 1, 1, NULL, 'Abhinav', 'Roy', 0, 'N/A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', NULL, NULL, '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '02-12-2019', '78592', 'Mudra', 'ltd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(5, 1, NULL, 1, 1, NULL, 'Raj', 'Kumar', 0, 'N/A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', NULL, NULL, '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '78592', 'Mudra', 'ltd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(6, 1, NULL, 2, 0, NULL, 'Abhishek', 'Kumar', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'abhishek@gmail.com', 'male', 'web', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8092181759', '01-12-2019', '123', 'SR', 'proprietorship', NULL, NULL, NULL, NULL, 'NA', 'NA', NULL, '2019-12-10 00:00:00', NULL, 1),
(7, 1, NULL, 3, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'U74991UP2007PTC033141', 'IT-SCIENT Consulting Pvt. Ltd', 'ltd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(8, 1, NULL, 4, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'U74991UP2007PTC033141', 'IT-SCIENT Consulting Pvt. Ltd', 'ltd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(9, 1, NULL, 5, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'U74991UP2007PTC033141', 'IT-SCIENT Consulting Pvt. Ltd', 'ltd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(10, 1, NULL, 6, 0, NULL, 'Shivani', 'Singh', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2500', '25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '01-12-2019', '78777878', 'Test', 'ltd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(11, 1, NULL, 6, 1, NULL, 'Rajhdhjdsjdshfdjshf', 'Gupta', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'web Devolper', '2500', '25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '01-12-2019', '78777878', 'Test', 'ltd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(12, 1, NULL, 6, 1, NULL, 'anup', 'Prajapati', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2500', '25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '24-03-2014', '78777878', 'Test', 'ltd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(13, 1, NULL, 6, 1, NULL, 'Nikhil', 'Singh', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Front End', '2500', '25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '01-05-2007', '78777878', 'Test', 'ltd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(14, 1, NULL, 7, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sdfs', 'dsfs', 'ltd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(15, 1, NULL, 7, 1, NULL, 'dsfs', 'sdf', 0, 'fdfd', NULL, NULL, NULL, NULL, NULL, NULL, 'dsds', 'male', 'dsf', NULL, '454', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7575545454', NULL, 'sdfs', 'dsfs', 'ltd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(16, 1, NULL, 14, 0, NULL, 'fgh', 'h', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tulsi@gmail.com', 'female', 'hfg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4354354354', '11-12-2019', 'hfgh', 'gfhf', 'proprietorship', NULL, NULL, NULL, NULL, NULL, 'hfgh', NULL, '2019-12-14 00:00:00', NULL, 1),
(17, 1, NULL, 15, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'reg5', 'Baba Pvt', 'ltd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(18, 1, NULL, 15, 1, NULL, 'director', 'one', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'd1@gmail.com', 'male', 'dir', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9876543212', '01-12-2019', 'reg5', 'Baba Pvt', 'ltd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(19, 1, NULL, 15, 1, NULL, 'diector', 'two', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'd2@gmail.com', 'male', 'dir', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9865123456', '02-12-2019', 'reg5', 'Baba Pvt', 'ltd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(20, 1, NULL, 15, 1, NULL, 'dir3', '3', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'd3@gmail.com', 'male', 'dir', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8765431234', '12-11-2019', 'reg5', 'Baba Pvt', 'ltd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(21, 1, NULL, 16, 0, NULL, 'dir', 'one', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'prop@baba.com', 'male', 'dir', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9876543212', '26-11-2019', 'regprop1', 'Baba Prop', 'proprietorship', NULL, NULL, NULL, NULL, NULL, 'df', NULL, '2019-12-14 00:00:00', NULL, 1),
(22, 1, NULL, 19, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'its', 'its', 'ltd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(23, 1, NULL, 19, 1, NULL, '45', '45', 0, 'bhuiyadih\r\n1306', NULL, NULL, NULL, NULL, NULL, NULL, 'amit@gmail.com', 'male', '45', '12', '12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4545454545', '09-12-2019', 'its', 'its', 'ltd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(24, 1, NULL, 20, 0, NULL, 'amit', 'kumar', 1, NULL, NULL, NULL, NULL, NULL, NULL, 'jharkhand', 'amit@gmail.com', 'male', '45', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8092181759', '02-12-2019', 'its', 'its', 'proprietorship', NULL, NULL, NULL, NULL, '4545', NULL, NULL, '2019-12-16 00:00:00', NULL, 1),
(25, 1, NULL, 21, 0, NULL, 'sh', 'one', 0, 'address', NULL, NULL, NULL, NULL, NULL, NULL, 'sh@gmail.com', 'male', 'sh', '3', '25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8765431234', '02-12-2019', 'Reg1', 'Test pvt', 'ltd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(26, 1, NULL, 21, 1, NULL, 'director', 'one', 0, 'address', NULL, NULL, NULL, NULL, NULL, NULL, 'dir@gmail.com', 'male', 'dir', '1', '25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9876541234', '03-12-2019', 'Reg1', 'Test pvt', 'ltd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `its_customer_company`
--

CREATE TABLE `its_customer_company` (
  `id` int(11) NOT NULL,
  `cust_id` int(11) DEFAULT NULL,
  `org_code` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `established_date` date DEFAULT NULL,
  `company_reg_no` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_no` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `land_line` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_person` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `industry_id` int(11) DEFAULT NULL,
  `sub_industry_id` int(11) DEFAULT NULL,
  `turn_over` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `number_of_employees` int(11) DEFAULT NULL,
  `unit_size` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input_details_id` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `waste_materials_id` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `zipcode` int(11) DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_type` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pf_no` bigint(11) DEFAULT NULL,
  `esic_no` bigint(11) DEFAULT NULL,
  `tax_no` bigint(11) DEFAULT NULL,
  `policy_no` bigint(11) DEFAULT NULL,
  `gratuity_no` bigint(11) DEFAULT NULL,
  `is_deleted` int(11) DEFAULT '0' COMMENT '1 = ''Delete''',
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_date` timestamp NULL DEFAULT NULL,
  `login_status` int(11) DEFAULT '0' COMMENT '1=''Active'' ,0=''Inactive''',
  `status` int(11) DEFAULT '0' COMMENT '1=''Active'' , 0=''Inactive''',
  `ip_address` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `its_customer_company`
--

INSERT INTO `its_customer_company` (`id`, `cust_id`, `org_code`, `company`, `established_date`, `company_reg_no`, `contact_no`, `mobile`, `land_line`, `contact_person`, `email`, `address`, `industry_id`, `sub_industry_id`, `turn_over`, `number_of_employees`, `unit_size`, `input_details_id`, `waste_materials_id`, `website`, `city_id`, `state_id`, `country_id`, `zipcode`, `photo`, `company_type`, `pf_no`, `esic_no`, `tax_no`, `policy_no`, `gratuity_no`, `is_deleted`, `deleted_by`, `deleted_date`, `login_status`, `status`, `ip_address`, `created_by`, `modified_by`, `modified_date`, `created_at`, `deleted_at`, `updated_at`) VALUES
(2, NULL, NULL, 'SR Industries', '0000-00-00', '123', NULL, NULL, NULL, NULL, NULL, 'NA', 0, 0, '0', 0, '', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, 'proprietorship', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, 1, NULL, NULL, NULL, '2019-12-11 15:29:27', '2019-12-10 01:51:53', NULL, '2019-12-12 02:59:27'),
(6, NULL, NULL, 'Test Company', '0000-00-00', '78777878', NULL, NULL, NULL, NULL, NULL, 'Itscient jamshedpur', 0, 0, '0', 0, '', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, 'ltd', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, 1, NULL, NULL, NULL, '2019-12-13 07:23:51', '2019-12-12 23:11:47', NULL, '2019-12-13 18:53:51');

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
(1, 'it sw and hw', 'software and hardware', NULL, 1, NULL, NULL, NULL, NULL, NULL, '2019-11-20', NULL),
(2, 'Sales Department', 'Sales department', 18, 1, NULL, NULL, NULL, NULL, NULL, '2019-12-14', NULL),
(3, 'Land Allotment', 'ghh', 19, 1, NULL, NULL, NULL, NULL, NULL, '2019-12-11', NULL),
(4, 'dept1', 'dept one', 21, 1, NULL, NULL, NULL, NULL, NULL, '2019-12-16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `its_entity_master`
--

CREATE TABLE `its_entity_master` (
  `id` int(11) NOT NULL,
  `entity_name` varchar(255) NOT NULL,
  `entity_description` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_entity_master`
--

INSERT INTO `its_entity_master` (`id`, `entity_name`, `entity_description`, `created_by`, `updated_by`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Land', 'Land', 1, 1, 1, '2019-12-15 04:22:47', '2019-12-14 16:52:47'),
(5, 'Unit', 'Unit', 1, 1, 1, '2019-12-15 04:23:05', '2019-12-14 16:53:05'),
(6, 'Invoice', 'Invoice', 1, 1, 1, '2019-12-18 04:43:56', '2019-12-17 17:13:56'),
(7, 'Misc', 'Misc', 1, 1, 1, '2019-12-18 04:45:17', '2019-12-17 17:15:17');

-- --------------------------------------------------------

--
-- Table structure for table `its_fst`
--

CREATE TABLE `its_fst` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `fst_code` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fst_name` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT '0',
  `deleted_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `its_fst`
--

INSERT INTO `its_fst` (`id`, `user_id`, `fst_code`, `fst_name`, `mobile`, `is_deleted`, `deleted_at`, `created_at`, `updated_at`, `status`) VALUES
(1, 24, 'jk02', 'Avinash', NULL, 1, '2019-11-12', '2019-11-10', NULL, NULL),
(2, 100, 'FST-50-1-A', 'Rajiv Gari', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(3, 101, 'FST-50-1-B', 'Chandra Mahato', NULL, 1, '2019-11-12', '2019-11-10', NULL, NULL),
(4, 102, 'FST-50-1-C', 'Gopal Kumar', NULL, 1, '2019-11-12', '2019-11-10', NULL, NULL),
(5, 103, 'FST-50-2-A', 'Dhiraj Kumar', NULL, 1, '2019-11-12', '2019-11-10', NULL, NULL),
(6, 104, 'FST-50-2-B', 'Kemandra Nath Mahato', NULL, 1, '2019-11-12', '2019-11-10', NULL, NULL),
(7, 105, 'FST-50-2-C', 'Lal Kishore Mahato', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(8, 106, 'FST-50-3-A', 'Amit Kumar', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(9, 107, 'FST-50-3-B', 'Abhay Kumar Himansu', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(10, 108, 'FST-50-3-C', 'Sabtosh Kumar', NULL, 1, '2019-11-12', '2019-11-10', NULL, NULL),
(11, 109, 'FST-51-1-A', 'Gopi Nath Dey', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(12, 110, 'FST-51-1-B', 'Sunil Kumar', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(13, 111, 'FST-51-1-C', 'Ashwani Kumar', NULL, 1, '2019-11-12', '2019-11-10', NULL, NULL),
(14, 112, 'FST-51-2-A', 'Manish Kumar', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(15, 113, 'FST-51-2-B', 'Jayram Prasad Sah', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(16, 114, 'FST-51-2-C', 'Shyam Sundar Prasad', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(17, 115, 'FST-51-3-A', 'Sudhanshu Sekhar', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(18, 116, 'FST-51-3-B', 'ShantiRam Mahato', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(19, 117, 'FST-51-3-C', 'Manoj Kumar Gupta', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(20, 118, 'FST-57-1-A', 'Bhim Chandra Mahato', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(21, 120, 'FST-57-1-C', 'Madan Mohan Kerai', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(22, 121, 'FST-57-2-A', 'Kaushal Kumar', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(23, 122, 'FST-57-2-B', 'Suresh Prasad Varma', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(24, 123, 'FST-57-2-C', 'Anil Kr. Singh', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(25, 124, 'FST-57-3-A', 'Vimal Kr. Karwa', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(26, 125, 'FST-57-3-B', 'Rakesh Kumar', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(28, 119, 'FST-57-1-B', 'Ashwani Kr. Hembrom', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(29, 156, 'FST-57-3-C', 'Kalipad Mahato', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(30, 103, 'FST-50-2-A', 'Padmalochan Mahato', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(31, 102, 'FST-50-1-C', 'Anand Mandal', NULL, 1, '2019-11-12', '2019-11-10', NULL, NULL),
(32, 111, 'FST-51-1-C', 'Ashwani Kr. Mahato', NULL, 1, '2019-11-12', '2019-11-10', NULL, NULL),
(33, 108, 'FST-50-3-C', 'Santosh Kumar', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(34, 101, 'FST-50-1-B', 'SheoChandra Mahato', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(35, 104, 'FST-50-2-B', 'Shiv Charan Mahato', 9934102758, 0, NULL, '2019-11-12', NULL, NULL),
(36, 160, 'FST-51-1-C', 'Ashwani Kr. Mahato', 9431122464, 0, NULL, '2019-11-12', NULL, NULL),
(37, 162, 'FST-50-1-C', 'Anand Mandal', 99341860033, 1, '2019-11-12', '2019-11-12', NULL, NULL),
(38, 163, 'FST-50-1-C', 'Anand Mandal', 9934186033, 0, NULL, '2019-11-12', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `its_industries`
--

CREATE TABLE `its_industries` (
  `id` int(11) NOT NULL,
  `industires_name` varchar(255) NOT NULL,
  `industires_description` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_industries`
--

INSERT INTO `its_industries` (`id`, `industires_name`, `industires_description`, `created_by`, `updated_by`, `status`, `created_at`, `updated_at`) VALUES
(1, 'testing', 'this Is Test', 1, 1, 1, '2019-12-14 15:20:28', '2019-12-14 15:20:28'),
(2, 'Steel', 'Steel Industry', 1, 1, 1, '2019-12-15 05:40:42', '2019-12-14 18:10:42'),
(3, 'Manufacturing', 'Manufacturing', 1, 1, 1, '2019-12-15 05:41:02', '2019-12-14 18:11:02');

-- --------------------------------------------------------

--
-- Table structure for table `its_input_details`
--

CREATE TABLE `its_input_details` (
  `id` int(11) NOT NULL,
  `input_details` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `its_input_details`
--

INSERT INTO `its_input_details` (`id`, `input_details`) VALUES
(1, 'gbgf'),
(2, 'fd');

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
  `address1` text COLLATE utf8_unicode_ci,
  `address2` text COLLATE utf8_unicode_ci,
  `latitute` text COLLATE utf8_unicode_ci,
  `longitute` text COLLATE utf8_unicode_ci,
  `documents` text COLLATE utf8_unicode_ci,
  `is_register` int(11) NOT NULL DEFAULT '0',
  `is_transfer` int(11) NOT NULL DEFAULT '0',
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `its_lands`
--

INSERT INTO `its_lands` (`id`, `cust_id`, `area`, `sector`, `block`, `land_name`, `plot_no`, `plot_size`, `uom`, `city`, `state`, `pincode`, `country`, `address1`, `address2`, `latitute`, `longitute`, `documents`, `is_register`, `is_transfer`, `created_at`, `updated_at`, `status`) VALUES
(1, NULL, 'Jamsedpur', 'Aditiyapur', NULL, 'BS-65', 'NS-65', '5000', 'sq.ft', 'Jamshedpur', 'Jharkhand', 831006, 'india', 'Adityapur', NULL, NULL, NULL, NULL, 1, 0, '2019-12-10', '2019-12-13', 1),
(2, NULL, 'Adityapur', 'Near Phase 7', NULL, 'IT-SCIENT Consulting PVT. LTD', 'IT-6', '3.30', 'acre', 'Saraikela kharsawan', 'Jharkhand', 835401, 'india', 'IT-6, IT Park, Near Phase 7, Adityapur', NULL, NULL, NULL, NULL, 1, 0, '2019-12-12', NULL, 1),
(3, NULL, 'Jamsedpur', 'sector - 62', 'Block - A', 'SS454', '89', '562522', 'sq.ft', 'Bokaro', 'Jharkhand', 831009, 'india', 'fdgfdg', NULL, NULL, NULL, NULL, 0, 0, '2019-12-13', '2019-12-13', 1),
(4, NULL, 'Jamsedpur', 'Aditiyapur', 'Block - A', 'NS-10', '100', '100', 'sq.ft', 'Jamshedpur', 'Jharkhand', 876345, 'india', 'adityapur', NULL, NULL, NULL, NULL, 1, 0, '2019-12-14', NULL, 1),
(5, NULL, 'Jamsedpur', 'a block', 'Block - B', 'NS-90', '90', '890', 'sq.ft', 'Jamshedpur', 'Jharkhand', 987456, 'india', 'address', NULL, NULL, NULL, NULL, 1, 0, '2019-12-16', NULL, 1),
(6, NULL, 'Jamsedpur', 'A/44/456', 'Block - A', 'NS-12', '35', '123', 'sq.ft', 'Jamshedpur', 'Jharkhand', 123457, 'india', 'add', NULL, NULL, NULL, NULL, 1, 0, '2019-12-17', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `its_leasedata`
--

CREATE TABLE `its_leasedata` (
  `id` int(11) NOT NULL,
  `org_id` int(11) DEFAULT NULL,
  `land_id` int(11) DEFAULT NULL,
  `cust_id` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trans_cust_id` int(11) DEFAULT NULL,
  `application_no` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `application_date` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `allotment_no` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `allotment_date` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `registration_no` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `registration_date` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `possession_date` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ssi_reg_no` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dakhal_kabja` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `based_rent` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tax` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `insurance` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `maintanance` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `additional_charge` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `net_payable` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `net_pay` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lease_duration` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lease_time` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `transfer_amount` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `land_price` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `start_date` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `end_date` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_transfer` int(11) NOT NULL DEFAULT '0',
  `transfer_date` date DEFAULT NULL,
  `pcc_date` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_cancelled` int(11) DEFAULT '0',
  `created_at` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_pcc` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `its_leasedata`
--

INSERT INTO `its_leasedata` (`id`, `org_id`, `land_id`, `cust_id`, `trans_cust_id`, `application_no`, `application_date`, `allotment_no`, `allotment_date`, `registration_no`, `registration_date`, `possession_date`, `ssi_reg_no`, `dakhal_kabja`, `based_rent`, `tax`, `insurance`, `maintanance`, `additional_charge`, `net_payable`, `net_pay`, `lease_duration`, `lease_time`, `transfer_amount`, `land_price`, `start_date`, `end_date`, `is_transfer`, `transfer_date`, `pcc_date`, `is_cancelled`, `created_at`, `updated_at`, `is_pcc`, `status`) VALUES
(1, 1, 1, '1', NULL, '777', '10-12-2019', '1225', '10-12-2019', '33', NULL, '10-12-2019', '55', '4500', 'NA', 'NA', 'NA', 'NA', 'NA', 'yearly', 'NaN', NULL, 'NA', NULL, NULL, '10-12-2019', NULL, 0, NULL, NULL, 0, '2019-12-10', NULL, 0, 0),
(2, 1, 1, '2', NULL, '8', '01-12-2019', '6', '05-12-2019', '5', NULL, '10-12-2019', '55', '4500', 'NA', NULL, 'NA', 'NA', 'NA', NULL, NULL, NULL, 'NA', '45545', '75500', '10-12-2019', NULL, 1, '2019-12-10', '2019-10-28', 0, '2019-12-10', NULL, 0, 1),
(3, 1, 2, '6', NULL, '5555555555', '13-12-2019', '999', '13-12-2019', '888', NULL, '13-12-2019', '5555', '3', 'NA', 'NA', 'NA', 'NA', 'Na', 'yearly', 'NaN', NULL, '2', NULL, NULL, '13-12-2019', NULL, 0, NULL, NULL, 0, '2019-12-13', NULL, 0, 0),
(4, 1, 2, '4', NULL, '1000', '01-12-2019', '36', '02-12-2019', '25', NULL, '13-12-2019', '5555', '3', 'NA', NULL, 'NA', 'NA', 'Na', NULL, NULL, NULL, '2', '25000', '75500', '13-12-2019', NULL, 1, '2019-12-13', '2019-12-04', 0, '2019-12-13', NULL, 0, 0),
(5, 1, 2, '6', NULL, '2565', '02-12-2019', '2566', '06-12-2019', '525', NULL, '13-12-2019', '5555', '3', 'NA', NULL, 'NA', 'NA', 'Na', NULL, NULL, NULL, '2', '565656', '56', '13-12-2019', NULL, 1, '2019-12-13', '2019-12-08', 0, '2019-12-13', NULL, 0, 1),
(6, 1, 2, '1', NULL, '6666666', '13-12-2019', '888888888888888', '13-12-2019', '77777777777', NULL, '13-12-2019', '55555555', NULL, '667', '67', '67', '67', '67', 'yearly', '935', NULL, '67', NULL, NULL, '13-12-2019', NULL, 0, NULL, NULL, 0, '2019-12-13', NULL, 0, 0),
(7, 1, 4, '16', NULL, 'app1', '14-12-2019', 'al87', '14-12-2019', '546', NULL, '14-12-2019', '1234', NULL, '100', '100', '100', '100', '100', 'yearly', '500', NULL, '1', NULL, NULL, '14-12-2019', NULL, 0, NULL, NULL, 0, '2019-12-14', NULL, 0, 0),
(8, 1, 4, '6', NULL, 'app9', '09-12-2019', 'all9', '09-12-2019', 'reg9', NULL, '14-12-2019', '1234', NULL, '100', NULL, '100', '100', '100', NULL, NULL, NULL, '1', '11800', '123987', '14-12-2019', NULL, 1, '2019-12-14', '2019-12-10', 0, '2019-12-14', NULL, 0, 1),
(9, 1, 2, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '13-12-2019', '55555555', NULL, '667', NULL, '67', '67', '67', NULL, NULL, NULL, '67', NULL, NULL, '13-12-2019', NULL, 1, '2019-12-16', '1970-01-01', 0, '2019-12-16', NULL, 0, 1),
(10, 1, 5, '21', NULL, 'app90', '16-12-2019', 'all90', '16-12-2019', 'reg90', NULL, '16-12-2019', '123490', '800', '1009', '1009', '1009', '1009', '1009', 'yearly', '5045', NULL, '2', NULL, NULL, '16-12-2019', NULL, 0, NULL, NULL, 0, '2019-12-16', NULL, 0, 0),
(11, 1, 5, '1', NULL, 'app09', '10-12-2019', 'all09', '10-12-2019', 'reg09', NULL, '16-12-2019', '123490', '800', '1008', '1008', '1008', '1008', '1008', 'yearly', '5040', NULL, '2', '50000', '50000', '16-12-2019', NULL, 1, '2019-12-16', '2019-12-04', 0, '2019-12-16', NULL, 0, 1),
(12, 22, 6, '21', NULL, 'app101', '13-12-2019', 'all12', '16-12-2019', 'reg123', NULL, '16-12-2019', 'ssi123', '120', '200', '200', '200', '200', '200', 'yearly', '1000', 'yr', '2', NULL, NULL, '16-12-2019', NULL, 0, NULL, NULL, 0, '2019-12-17', NULL, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `its_lease_invoice`
--

CREATE TABLE `its_lease_invoice` (
  `id` int(11) NOT NULL,
  `lease_data_id` int(11) NOT NULL,
  `org_id` varchar(256) NOT NULL,
  `land_id` int(11) DEFAULT NULL,
  `cust_id` int(11) DEFAULT NULL,
  `trans_cust_id` int(11) DEFAULT NULL,
  `based_rent` int(11) DEFAULT NULL,
  `insurance` int(11) DEFAULT NULL,
  `maintanance` int(11) DEFAULT NULL,
  `additional_charge` int(11) DEFAULT NULL,
  `net_payable` varchar(256) DEFAULT NULL,
  `tax` int(11) DEFAULT NULL,
  `net_pay` int(11) DEFAULT NULL,
  `lease_time` varchar(256) DEFAULT NULL,
  `lease_duration` varchar(256) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_lease_invoice`
--

INSERT INTO `its_lease_invoice` (`id`, `lease_data_id`, `org_id`, `land_id`, `cust_id`, `trans_cust_id`, `based_rent`, `insurance`, `maintanance`, `additional_charge`, `net_payable`, `tax`, `net_pay`, `lease_time`, `lease_duration`, `start_date`, `created_at`, `status`) VALUES
(1, 6, '1', 2, NULL, NULL, 667, 67, 67, 67, NULL, 67, 935, '67', NULL, '2019-12-13', '2019-12-13', 1),
(2, 10, '1', 5, 21, NULL, 1009, 1009, 1009, 1009, 'yearly', 1009, 5045, '2', NULL, '2019-12-16', '2019-12-16', 1),
(3, 11, '1', 5, 1, NULL, 1008, 1008, 1008, 1008, 'yearly', 1008, 5040, '2', NULL, '2019-12-16', '2019-12-16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `its_locationusers`
--

CREATE TABLE `its_locationusers` (
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
  `address` mediumtext COLLATE utf8_unicode_ci,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `token_expire` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL COMMENT '''0'' Inactive , ''1'' Active',
  `user_image` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_deleted` int(11) DEFAULT '0' COMMENT '''1'' =>delete',
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  `ip_address` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `longitude` text COLLATE utf8_unicode_ci,
  `latitude` text COLLATE utf8_unicode_ci,
  `modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_date` datetime DEFAULT NULL,
  `last_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `its_locationusers`
--

INSERT INTO `its_locationusers` (`id`, `users_role`, `users_type`, `parent_id`, `emp_id`, `username`, `name`, `password`, `email`, `phone`, `address`, `email_verified_at`, `remember_token`, `token_expire`, `status`, `user_image`, `is_deleted`, `deleted_by`, `deleted_at`, `ip_address`, `longitude`, `latitude`, `modified_date`, `created_at`, `updated_at`, `created_date`, `last_login`) VALUES
(1, 1, 0, 0, 0, 'admin', 'Shri Anjaneyulu Dodde', '$2a$08$TnLUue010iZQcUVL.b0bPeCaFvVqa221s0MmNopcnzeIg4q4jjxQa', 'amitrajput270@gmail.com', 7409969352, 'Noida 63', NULL, 'eOCqNgRDnPl4SnByI4FZQhWtEpTNUSuCPJBE91IJHunuiE6LmjKQ8InbmVlT', NULL, 0, 'dc.jpg', 0, 0, NULL, '', NULL, NULL, '2019-12-09 12:45:11', '2019-06-28 14:27:00', '2019-12-10 00:15:11', NULL, NULL),
(100, 3, NULL, NULL, NULL, 'Rajiv(RG)', 'Rajiv Gari', '$2y$10$A3tKxV8dptxuS9wC/W8C5eBl1QMgI4aXQUe8nKpfofI2sq2ONP9f6', NULL, 7091775406, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 09:42:35', '2019-11-11 13:50:53', '2019-11-11 08:20:56', NULL, NULL),
(101, 3, NULL, NULL, NULL, 'SCM', 'Sheo Chandra Mahato', '$2y$10$aEj2nCI.6qpjPZJv.HahLevJEDPpibRBOOwQ0j79RySOr4.XvENGK', NULL, 7903689326, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2019-11-12', NULL, NULL, NULL, '2019-11-12 12:08:59', '2019-11-11 13:52:03', '2019-11-12 17:38:58', NULL, NULL),
(102, 3, NULL, NULL, NULL, 'AM', 'Anand Mandal', '$2y$10$nJmeUi6Aq6/XLK9RNe1j2O5RvM9NrEFBwLzXIONIkFVwODUXYKvPq', NULL, 9934186033, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2019-11-12', NULL, NULL, NULL, '2019-11-12 20:05:38', '2019-11-11 13:53:09', '2019-11-13 01:35:37', NULL, NULL),
(103, 3, NULL, NULL, NULL, 'PM', 'Padmalochan Mahato', '$2y$10$pfMPvnzT.SO1QTB49B69Jei00lseY8WqPpj0YbPhr41fwheNDBRhi', NULL, 9931332797, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2019-11-12', NULL, NULL, NULL, '2019-11-12 12:10:47', '2019-11-11 13:54:04', '2019-11-12 17:40:46', NULL, NULL),
(104, 3, NULL, NULL, NULL, 'Shiv (SCM)', 'Shiv Charan Mahato', '$2y$10$R7jUTj14Sg6JHJ2ROLauCOq0OzimElhbfLhL4SC1Xl6WqeA/HPaUm', NULL, 9934102758, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2019-11-12', NULL, NULL, NULL, '2019-11-12 12:13:40', '2019-11-11 13:54:54', '2019-11-12 17:43:39', NULL, NULL),
(105, 3, NULL, NULL, NULL, 'LKM', 'Lal Kishore Mahato', '$2y$10$nL.rZoU8aSP6BESEwxuDS.MFg5utZcp2jYVj8Flm/THj686UfqBlu', NULL, 9608397903, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:25:39', '2019-11-11 13:55:36', '2019-11-11 08:25:39', NULL, NULL),
(106, 3, NULL, NULL, NULL, 'AK', 'Amit Kumar', '$2y$10$/0bgWyP325Zb4LSL/DHMGOl7/pfpqvWM18MkG/gzduIpZZ3QCzCZ.', NULL, 9631854478, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:26:12', '2019-11-11 13:56:09', '2019-11-11 08:26:12', NULL, NULL),
(107, 3, NULL, NULL, NULL, 'AKH', 'Abhay Kumar Himansu', '$2y$10$zsqPUM2ogoKLK.sUQcr7TOltXKeUT1tgCbe3/LUie.80jX36YeBhG', NULL, 7762934464, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:26:49', '2019-11-11 13:56:46', '2019-11-11 08:26:49', NULL, NULL),
(108, 3, NULL, NULL, NULL, 'SK', 'Santosh Kumar', '$2y$10$jL3/ryLsgierHOyU8BlSse2wSDfhZorN2QW86h9tXLGe6MUP7K0VG', NULL, 7903350150, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2019-11-12', NULL, NULL, NULL, '2019-11-12 12:14:04', '2019-11-11 13:57:26', '2019-11-12 17:44:03', NULL, NULL),
(109, 3, NULL, NULL, NULL, 'GND', 'Gopi Nath Dey', '$2y$10$pp/R1Y1u/jRehP8cHtRGWOjagSg4YyQOrG68FEok5wqdO9MaDZNXS', NULL, 8210153790, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:28:11', '2019-11-11 13:58:07', '2019-11-11 08:28:11', NULL, NULL),
(110, 3, NULL, NULL, NULL, 'Sunil(SK)', 'Sunil Kumar', '$2y$10$elO0gt.HISTcUaFIRKfKDu.TAWkI4JHqdYZ7xWcGHu.pGIaSGxElO', NULL, 8709766415, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:28:57', '2019-11-11 13:58:54', '2019-11-11 08:28:57', NULL, NULL),
(111, 3, NULL, NULL, NULL, 'Ashwani(AKM)', 'Ashwani Kumar Mahato', '$2y$10$s5ZOgiUzorHxkTMhk4E16.oQegYAq1Xi3ES/YyU8A8PvB4R/223fC', NULL, 9431122464, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2019-11-12', NULL, NULL, NULL, '2019-11-12 14:08:32', '2019-11-11 13:59:40', '2019-11-12 19:38:31', NULL, NULL),
(112, 3, NULL, NULL, NULL, 'Manish(MK)', 'Manish Kumar', '$2y$10$b2fR.d2Cp9HvCSp0y3cereY7MDz2WIJNu0C4RdgJUu183aF0zJtoa', NULL, 9708682745, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:30:22', '2019-11-11 14:00:19', '2019-11-11 08:30:22', NULL, NULL),
(113, 3, NULL, NULL, NULL, 'Jayram(JPS)', 'Jayram Prasad Sah', '$2y$10$hI4cyTdO2raiITKO.EPCDurCt4FFSMp37l9U1iliMHS3Vnfb4sSpu', NULL, 7992396824, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:31:18', '2019-11-11 14:01:15', '2019-11-11 08:31:18', NULL, NULL),
(114, 3, NULL, NULL, NULL, 'Shyam (SSP)', 'Shyam Sundar Prasad', '$2y$10$xOUku7GJJ2YZlEJXO4nfP.3CWHqesAaIxWsK8wkpelr3FrvTZl9py', NULL, 9934250608, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:32:14', '2019-11-11 14:02:11', '2019-11-11 08:32:14', NULL, NULL),
(115, 3, NULL, NULL, NULL, 'Sudhanshu(SSP)', 'Sudhanshu Sekhar Pradhan', '$2y$10$RcydUprfckclK2vRaKY3H.ckD7QWG6/1foVRUs.bZMHwve1N2Tw8C', NULL, 8298086868, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:33:08', '2019-11-11 14:03:05', '2019-11-11 08:33:08', NULL, NULL),
(116, 3, NULL, NULL, NULL, 'SRM', 'Shanti Ram Mahato', '$2y$10$R2vLfRI/J/n6x63gKdgKyOmaF8.pbbQMo9di.7oH6lv0ZWV7OUI.u', NULL, 7632008070, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:33:46', '2019-11-11 14:03:43', '2019-11-11 08:33:46', NULL, NULL),
(117, 3, NULL, NULL, NULL, 'Manoj(MKG)', 'Manoj Kr. Gupta', '$2y$10$9O4/qdfzPkFxwDR/V5i.4eXwJdsRhXjAJWoxMHKa.Cs0MLwPEgYJ.', NULL, 9523174134, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:34:32', '2019-11-11 14:04:29', '2019-11-11 08:34:32', NULL, NULL),
(118, 3, NULL, NULL, NULL, 'Bhim(BCM)', 'Bhim Chandra Mahato', '$2y$10$ljWzkLq2fmjwk1qwKZ1hzeveyKvdvzeV5pwgCAWsbCEfQm5mZRAza', NULL, 9572654883, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:35:13', '2019-11-11 14:05:10', '2019-11-11 08:35:13', NULL, NULL),
(119, 3, NULL, NULL, NULL, 'AShwani(AKM)', 'Ashwani Kr. Hembrom', '$2y$10$zAIGg7kHWvLB47JSB7bfA.PzDZvu2.vM8Q4WNOqp4Ue4wrdX8rFF.', NULL, 6207899686, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:36:06', '2019-11-11 14:06:03', '2019-11-11 08:36:06', NULL, NULL),
(120, 3, NULL, NULL, NULL, 'MMK', 'Madan Mohan Kerai', '$2y$10$kjtmg8ZNhJ7tOp5Y.8tcN.uo9AIoVTrGq6KUxGOuOGbDc3QXV1O7e', NULL, 9934087249, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:36:54', '2019-11-11 14:06:51', '2019-11-11 08:36:54', NULL, NULL),
(121, 3, NULL, NULL, NULL, 'Kaushal(KK)', 'Kaushal Kumar', '$2y$10$oruN0HDe9sbwW.gHueMsFex/YTTWGDo4lAaVat1IIV4EdpS9Gqj8.', NULL, 8987728988, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:37:41', '2019-11-11 14:07:38', '2019-11-11 08:37:41', NULL, NULL),
(122, 3, NULL, NULL, NULL, 'Suresh(SPV)', 'Suresh Prasad Varma', '$2y$10$MnEx8R4NKDWBdjvG406tTuUYhNWfpSaIDH4CG3iev4xKH.1vsjss.', NULL, 9431302741, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:38:26', '2019-11-11 14:08:23', '2019-11-11 08:38:26', NULL, NULL),
(123, 3, NULL, NULL, NULL, 'AKS', 'Anil Kr. Singh', '$2y$10$NoDrIc4XBxPVuUZesPyfGeGxCKHhqugDeAGC/OPv.bcUwuUScwlgy', NULL, 8294995812, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:39:08', '2019-11-11 14:09:05', '2019-11-11 08:39:08', NULL, NULL),
(124, 3, NULL, NULL, NULL, 'VKK', 'Vimal Kr. Karwa', '$2y$10$YF69n5mPKHt9pXA8s5X9.esPXTN9iZ33umiM2WSao3stEN9prAJzy', NULL, 8210235100, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:39:45', '2019-11-11 14:09:42', '2019-11-11 08:39:45', NULL, NULL),
(125, 3, NULL, NULL, NULL, 'RK', 'Rakesh Kumar', '$2y$10$yumq3IKcxCrGIakCR4mo8.b789f8YqpnrYMjNpy4PTwASTOrRs3Aa', NULL, 9411428278, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:40:15', '2019-11-11 14:10:12', '2019-11-11 08:40:15', NULL, NULL),
(126, 3, NULL, NULL, NULL, 'BS', 'Brajendra Risi', '$2y$10$2VYG2CJm4vOC09KPw.vKGelIzBrYVXmVJUiGIsMoeKSGqQnHoiPIm', NULL, 7209660018, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:41:06', '2019-11-11 14:11:03', '2019-11-11 08:41:06', NULL, NULL),
(127, 3, NULL, NULL, NULL, 'LR', 'Lali Ram', '$2y$10$O7IheE9xFRYVhyoNiI46LussAg2eRCll0FIU3eMoqL01Ac7SVjaQi', NULL, 7209972699, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:41:45', '2019-11-11 14:11:42', '2019-11-11 08:41:45', NULL, NULL),
(128, 3, NULL, NULL, NULL, 'PK', 'Paikash Toppo', '$2y$10$RAbwR5MSz.M4Aho/Ba5KMeDOGIDMVuWUmLmtsltur/mXhotSjUZfq', NULL, 8809314458, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:42:23', '2019-11-11 14:12:21', '2019-11-11 08:42:23', NULL, NULL),
(129, 3, NULL, NULL, NULL, 'GS', 'Gourav Sukla', '$2y$10$Jxmqcd3HiLA0/kXKexoCwOLbj8DeLLpN3/7AAgVvgSZEGkqylDTpa', NULL, 8982932481, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:43:03', '2019-11-11 14:13:00', '2019-11-11 08:43:03', NULL, NULL),
(130, 3, NULL, NULL, NULL, 'SM', 'Sanjay Munda', '$2y$10$JFDKY2jSBXQtof/R1FiRDeWVjUHq32muoPMyXwvSU2XNdGT.kdhpK', NULL, 7903037501, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:43:37', '2019-11-11 14:13:34', '2019-11-11 08:43:37', NULL, NULL),
(131, 3, NULL, NULL, NULL, 'JPB', 'Jai Prakash Barik', '$2y$10$QzHG6VTPcPOlp0r6E6AIAu7Jxygj7evJCdN0M7ndJcqO4dTPG3wVq', NULL, 9431519778, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:44:37', '2019-11-11 14:14:34', '2019-11-11 08:44:37', NULL, NULL),
(132, 3, NULL, NULL, NULL, 'SKD', 'Sunil Kr Das', '$2y$10$E50dBly4nsNEhmZNl4AaBuQsspIK0RYW6MMz3DfTtOoQwXAaA.PFW', NULL, 8789632843, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:45:27', '2019-11-11 14:15:24', '2019-11-11 08:45:27', NULL, NULL),
(133, 3, NULL, NULL, NULL, 'RM', 'Rajesh Hembram', '$2y$10$WL41/7ikt3QIhg/VEOa0neoE0.cDfkwAm3DivKmHy0MvbWmBo4Yfq', NULL, 9608849291, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:46:09', '2019-11-11 14:16:06', '2019-11-11 08:46:09', NULL, NULL),
(134, 3, NULL, NULL, NULL, 'JD', 'John Bodra', '$2y$10$2xBRdvmYHgxWTQybNulRDewsmXK1w0QqKu2vERlLj859IkKUDPAqm', NULL, 9572092053, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:46:43', '2019-11-11 14:16:40', '2019-11-11 08:46:43', NULL, NULL),
(135, 3, NULL, NULL, NULL, 'MB', 'Manai Bari', '$2y$10$CBci7artr9CySgoCzYnrzec26/xGswz4Ra7WMoNdEre9wuYkSXQYC', NULL, 9771845484, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:47:17', '2019-11-11 14:17:14', '2019-11-11 08:47:17', NULL, NULL),
(136, 3, NULL, NULL, NULL, 'Ranglal (RM)', 'Ranglal Mahato', '$2y$10$RFBQcQ48q5uJSVhFe5lVSeQCRM.PEfkL3BD8hC0Cq1K3zIOy0XHQm', NULL, 9123275125, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:48:06', '2019-11-11 14:18:03', '2019-11-11 08:48:06', NULL, NULL),
(137, 3, NULL, NULL, NULL, 'RK', 'Rathin Kumar', '$2y$10$NcDjQsqS4Sg.Z3hsQu/mJ.dDBbzAyNfdNcYlhnTJITe5uuY/wZA.K', NULL, 8084778507, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:48:45', '2019-11-11 14:18:42', '2019-11-11 08:48:45', NULL, NULL),
(138, 3, NULL, NULL, NULL, 'SR', 'Sona Ram', '$2y$10$qmOkjrdhcr4VipseUTFjSOk0qJRyF39DPt2gFIvNEIhFXJ8mWCOG6', NULL, 8709523118, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:49:23', '2019-11-11 14:19:20', '2019-11-11 08:49:23', NULL, NULL),
(139, 3, NULL, NULL, NULL, 'SK', 'Sumit Kumar', '$2y$10$LjMjgoB2juwMUxkFEELwbOAd4zctgbgcTYwqzVX6G4/kIo6xnNv6S', NULL, 7541524824, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:50:08', '2019-11-11 14:20:05', '2019-11-11 08:50:08', NULL, NULL),
(140, 3, NULL, NULL, NULL, 'LD', 'Lopo Deogam', '$2y$10$a.x3Cmww0LBwEkH3fhaXAeYn7WxD/H7pnifEFDMzXO0I/aDrvg8TO', NULL, 8877152854, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:50:45', '2019-11-11 14:20:42', '2019-11-11 08:50:45', NULL, NULL),
(141, 3, NULL, NULL, NULL, 'CKM', 'Chaitanya Kr. Mishra', '$2y$10$3ZfqXZ1pDzygVIxIhC44kOqGAlgzr9c3lG4HPOENQUUo7m6mCB/iW', NULL, 8935916591, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:51:27', '2019-11-11 14:21:24', '2019-11-11 08:51:27', NULL, NULL),
(142, 3, NULL, NULL, NULL, 'NK', 'Nakul Thakur', '$2y$10$.Vu.jpOBvE2MtgDY2D1.quxo27zyLXRIYQjWV0HvKYFoi7PhrvC0S', NULL, 9234685223, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-12 12:52:28', '2019-11-12 18:22:25', '2019-11-11 08:52:03', NULL, NULL),
(143, 3, NULL, NULL, NULL, 'DK', 'Dhananjay Kumar', '$2y$10$.8zngORRnTPJLGtqCxteEufSfmBLO11XR1lgPADyIziOYjOkfzyXW', NULL, 9973511891, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:52:51', '2019-11-11 14:22:48', '2019-11-11 08:52:51', NULL, NULL),
(144, 3, NULL, NULL, NULL, 'Dhirendra(DK)', 'Dhirendra Kumar', '$2y$10$J2S2nYoa1jNuor.1Sx7AdO37mbvJdM4jOua.Egwvt9/de.EErnc06', NULL, 9431327787, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:53:34', '2019-11-11 14:23:31', '2019-11-11 08:53:34', NULL, NULL),
(145, 3, NULL, NULL, NULL, 'PD', 'Pradhan Hansda', '$2y$10$2vy1RhWYQM6q2sEsb6q6H.TURwjc/v52G1Z8b6QET2BE4w5N.fhI.', NULL, 7783839703, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:54:13', '2019-11-11 14:24:10', '2019-11-11 08:54:13', NULL, NULL),
(146, 3, NULL, NULL, NULL, 'KSM', 'Kalicharan Singh Munda', '$2y$10$hC5IcDMZZoq1eQQ4iXwgcesYFN3xZstkqbvXbh4z20cXttXY0MLxy', NULL, 8210150729, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:55:32', '2019-11-11 14:25:29', '2019-11-11 08:55:32', NULL, NULL),
(147, 3, NULL, NULL, NULL, 'KM', 'Kalish Ram', '$2y$10$/55SInMJRTV8dB8uyMO.V.hyg5VahkGZ7YM8UXW5hXd14NBI2PBLi', NULL, 9204220106, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:56:08', '2019-11-11 14:26:05', '2019-11-11 08:56:08', NULL, NULL),
(148, 3, NULL, NULL, NULL, 'RMP', 'Ram Naresh Parswan', '$2y$10$Ex0xTklHlE3Hm3IcedBz0.xfJiWZ0/yE0KJbD7AKQcbQt9TXytn22', NULL, 8986654544, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:56:50', '2019-11-11 14:26:47', '2019-11-11 08:56:50', NULL, NULL),
(149, 3, NULL, NULL, NULL, 'AS', 'Abhishek Shresth', '$2y$10$.f1WAbUhTbT9UyAMxBe5hO3oyfFDwztpQ0yODKJT0wVi1GAa4aDZu', NULL, 9931591351, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:57:29', '2019-11-11 14:27:26', '2019-11-11 08:57:29', NULL, NULL),
(150, 3, NULL, NULL, NULL, 'Ravinder(RM)', 'Ravinder Murmu', '$2y$10$Ykw4VaTTt409dUwL1/nEou1cKaVOUAsFPa85X/HRmPNK2TO36rAUu', NULL, 6207066122, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:58:11', '2019-11-11 14:28:08', '2019-11-11 08:58:11', NULL, NULL),
(151, 3, NULL, NULL, NULL, 'Ramakant(RK)', 'Ramakant Kumar', '$2y$10$0PWTA.V.cAa9ns.OJLj61.hJGIzlotKyPd4oTN0k20tPpLClLljlq', NULL, 9162665006, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:58:58', '2019-11-11 14:28:55', '2019-11-11 08:58:58', NULL, NULL),
(152, 3, NULL, NULL, NULL, 'Ashok(AK)', 'Ashok Kumar', '$2y$10$o5Uqk7qMw4//qGoO2AiMc.cgDw/0YA0Ll01HjR/ImAZk6uLM1STPi', NULL, 8292641598, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 08:59:36', '2019-11-11 14:29:33', '2019-11-11 08:59:36', NULL, NULL),
(153, 3, NULL, NULL, NULL, 'AA', 'Anurag Anand', '$2y$10$PJaOlIHjx4mHH3gDIBCpb.RQqNe5DTvwamHaRtjn2TCgigGrq/MUO', NULL, 6201352097, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 09:00:22', '2019-11-11 14:30:19', '2019-11-11 09:00:22', NULL, NULL),
(154, 3, NULL, NULL, NULL, 'SS', 'Suneel Swaraj', '$2y$10$UqeL5HfiEUvjV6z/2SFiGerBZJmNIF1A/vwPIk9wRVZYlHKluYGeS', NULL, 9334555664, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 09:01:05', '2019-11-11 14:31:02', '2019-11-11 09:01:05', NULL, NULL),
(155, 3, NULL, NULL, NULL, 'Shishir(SK)', 'Shishir Kumar', '$2y$10$eWwbSW9teIakvRzOEGnN9OU1XMT9Nk4n2TmynTwW2vT18IDc9U7Vq', NULL, 9835795810, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 09:01:41', '2019-11-11 14:31:38', '2019-11-11 09:01:41', NULL, NULL),
(156, 3, NULL, NULL, NULL, 'KM', 'Kalipad Mahato', '$2y$10$pYN77q2dQy8lnYYEP/9I/uv8p1MSfjaMX0JwXri4ivG6k4ENKD/Aq', NULL, 8340653603, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-11 09:03:54', '2019-11-11 14:33:51', '2019-11-11 09:03:54', NULL, NULL),
(157, 3, NULL, NULL, NULL, 'rajiv', 'Rajiv', '$2y$10$A3tKxV8dptxuS9wC/W8C5eBl1QMgI4aXQUe8nKpfofI2sq2ONP9f6', NULL, 9716555394, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2019-11-12', NULL, NULL, NULL, '2019-11-12 12:07:22', '2019-11-11 15:10:53', '2019-11-12 17:37:19', NULL, NULL),
(159, 3, NULL, NULL, NULL, 'Shiv(SCM)', 'Shiv Charan Mahato', '$2y$10$cde9Sw0BirGlYcCVJqFG8eBNAQE.pUt6T6DoH3YN6ET2K1dZo3jgu', NULL, 9934102758, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-12 12:12:15', '2019-11-12 17:42:12', '2019-11-12 12:12:15', NULL, NULL),
(160, 3, NULL, NULL, NULL, 'Ashwani(AKM)', 'Ashwani Kr. Mahato', '$2y$10$4i/wJMai1bKunzue5QX0C.QQ8gdx9gAhFWEZYi9IbHytbIafpbFKm', NULL, 9431122464, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-12 13:29:35', '2019-11-12 18:59:32', '2019-11-12 13:28:47', NULL, NULL),
(161, 3, NULL, NULL, NULL, 'DK', 'Devendra Kumar', '$2y$10$bXf4njgpwGNIQ.2G0gdsMu6xed.urDMaiz223.7nKPmDSr0VIJuTm', NULL, 9934138041, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '4545555', '454545454545454', '2019-12-09 06:26:47', '2019-11-12 19:09:10', '2019-12-09 17:56:47', NULL, NULL),
(162, 3, NULL, NULL, NULL, 'AM', 'Anand Mandal', '$2y$10$2yOak2tjNgXGZSaLGG/2nuhJQkdA.fLwJrVWWcnHE0kseRatShGcS', NULL, 99341860033, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2019-11-12', NULL, NULL, NULL, '2019-11-12 20:20:35', '2019-11-13 01:32:27', '2019-11-13 01:50:34', NULL, NULL),
(163, 3, NULL, NULL, NULL, 'AM', 'Anand Mandal', '$2y$10$lDmfD9StsNx3AYTEpM6dv.A1HA1OSHxBIZHoIY8JgAheUS50rK4cu', NULL, 9934186033, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2019-11-12 20:21:53', '2019-11-13 01:51:50', '2019-11-12 20:21:53', NULL, NULL);

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
(1, 1, 'A/44/456', '2019-11-20', '2019-11-20', NULL),
(2, 2, 'a block', '2019-11-20', NULL, NULL),
(4, 3, 'Aditiyapur', '2019-11-28', NULL, NULL),
(5, 4, 'sector - 62', '2019-11-28', NULL, NULL),
(6, 5, 'NS', '2019-12-11', NULL, NULL);

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
(3, 'Jamsedpur', '2019-11-28', NULL, NULL),
(4, 'Noida', '2019-11-28', NULL, NULL),
(5, 'Adityapur', '2019-12-11', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `its_manage_pcc_action`
--

CREATE TABLE `its_manage_pcc_action` (
  `id` int(11) NOT NULL,
  `pcc_date` date NOT NULL,
  `pcc_desc` text,
  `status` tinyint(1) NOT NULL,
  `created_by` varchar(256) DEFAULT NULL,
  `updated_by` varchar(256) DEFAULT NULL,
  `created_at` varchar(256) DEFAULT NULL,
  `updated_at` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_manage_pcc_action`
--

INSERT INTO `its_manage_pcc_action` (`id`, `pcc_date`, `pcc_desc`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, '2019-12-16', 'dfsd', 1, NULL, NULL, NULL, NULL),
(2, '2019-12-16', 'gfdgfdgdfgdf', 1, NULL, NULL, NULL, NULL),
(3, '2019-12-25', 'PCC desc', 1, NULL, NULL, NULL, NULL),
(4, '2019-12-03', 'test Desc', 1, NULL, NULL, NULL, NULL),
(5, '2019-12-16', 'This Is Under test', 1, NULL, NULL, NULL, NULL),
(6, '2019-12-20', 'pcc desc', 1, NULL, NULL, NULL, NULL),
(7, '2019-12-28', '28 dec', 2, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `its_materials`
--

CREATE TABLE `its_materials` (
  `id` int(11) NOT NULL,
  `material_name` varchar(255) NOT NULL,
  `material_description` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_materials`
--

INSERT INTO `its_materials` (`id`, `material_name`, `material_description`, `created_by`, `updated_by`, `status`, `created_at`, `updated_at`) VALUES
(1, 'added new material', 'iron or fines', 1, 1, 1, '2019-12-16 05:04:43', '2019-12-16 05:04:43'),
(2, 'any thing', 'new material added', 1, 1, 1, '2019-12-16 05:05:20', '2019-12-16 05:05:20');

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
  `org_type` int(11) DEFAULT '0' COMMENT '1=''Live'' , 0=''Demo''',
  `pf_no` bigint(11) DEFAULT NULL,
  `esic_no` bigint(11) DEFAULT NULL,
  `tax_no` bigint(11) DEFAULT NULL,
  `policy_no` bigint(11) NOT NULL,
  `gratuity_no` bigint(11) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `is_deleted` int(11) DEFAULT '0' COMMENT '1 = ''Delete''',
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_date` timestamp NULL DEFAULT NULL,
  `login_status` int(11) DEFAULT '0' COMMENT '1=''Active'' ,0=''Inactive''',
  `status` int(11) DEFAULT '0' COMMENT '1=''Active'' , 0=''Inactive''',
  `ip_address` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
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
(3, 'amitrajput270@gmail.com', '$2y$10$76W7f6SQelcX2q3f/qwFbuwXJ2BfJx/puK6/9aMR62xbYdfVRI6KW', '2019-11-01 02:00:50');

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
  `ssi_reg_no` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
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
  `is_transfer` int(11) NOT NULL DEFAULT '0',
  `transfer_date` date DEFAULT NULL,
  `is_cancelled` int(11) DEFAULT '0',
  `created_at` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_pcc` tinyint(1) DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `its_pccdata`
--

INSERT INTO `its_pccdata` (`id`, `org_id`, `land_id`, `cust_id`, `trans_cust_id`, `application_no`, `application_date`, `ssi_reg_no`, `allotment_no`, `allotment_date`, `registration_no`, `registration_date`, `position_date`, `based_rent`, `tax`, `insurance`, `maintanance`, `additional_charge`, `net_payable`, `net_pay`, `lease_duration`, `lease_time`, `start_date`, `end_date`, `is_transfer`, `transfer_date`, `is_cancelled`, `created_at`, `updated_at`, `is_pcc`, `status`) VALUES
(1, 1, 1, 2, NULL, '123456', '2019-11-20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, '2019-11-20', NULL, 0, 1),
(2, 18, 3, 2, NULL, 'gdagdgdfg', '02-08-2019', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, '2019-11-28', NULL, 0, 1),
(3, 22, 6, 6, NULL, 'app100', '12-12-2019', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, '2019-12-17', NULL, 0, 1),
(4, 22, 6, 21, NULL, 'app101', '13-12-2019', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, '2019-12-17', NULL, 0, 1),
(5, 22, 6, 1, NULL, 'app102', '14-12-2019', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, '2019-12-17', NULL, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `its_pcc_enitity_record`
--

CREATE TABLE `its_pcc_enitity_record` (
  `id` int(11) NOT NULL,
  `manage_pcc_id` bigint(22) NOT NULL,
  `pcc_action` varchar(256) DEFAULT NULL,
  `pcc_enitity` varchar(256) DEFAULT NULL,
  `pcc_entity_id` varchar(256) DEFAULT NULL,
  `pcc_Entity_search` varchar(256) DEFAULT NULL,
  `pcc_Entity_name` varchar(256) DEFAULT NULL,
  `pcc_comment` varchar(256) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_pcc_enitity_record`
--

INSERT INTO `its_pcc_enitity_record` (`id`, `manage_pcc_id`, `pcc_action`, `pcc_enitity`, `pcc_entity_id`, `pcc_Entity_search`, `pcc_Entity_name`, `pcc_comment`, `status`) VALUES
(1, 1, '3', '5', '5', 'it', 'IT-SCIENT Consulting Pvt. Ltd', 'dsfs', 1),
(2, 1, '3', '4', '1', 'ns', 'BS-65', 'sdfs', 1),
(3, 2, '2', '2', '', 'fgdf', 'fdgd', 'fdgdf', 1),
(4, 3, '3', '4', NULL, 'fgdfdsfs', 'NS-10', 'add new', 1),
(5, 3, '3', '4', NULL, 'fgdfdfs', 'Mudra', 'Change to Mudra Pvt', 1),
(6, 4, '3', '4', '', 'landvcvcv', 'NS', 'This Is Test', 1),
(7, 4, '3', '4', '', 'Unitvcvc', 'LLP', 'This is Test Company', 1),
(8, 5, '3', '4', '1', 'ns', 'BS-65', 'i Will be Changed name Sr To VR', 1),
(9, 5, '3', '4', '3', 'ss', 'SS454', 'sdfs', 1),
(10, 5, '3', '5', '5', 'it', 'IT-SCIENT Consulting Pvt. Ltd', 'sss', 1),
(11, 6, '3', '4', '1', 'ns', 'BS-65', 'ddfs', 1),
(12, 6, '3', '4', '5', 'it', 'IT-SCIENT Consulting Pvt. Ltd', 'dfsdfsd', 1),
(13, 6, '3', '4', '3', 'ss', 'SS454', 'sss', 1),
(14, 1, '3', '4', '3', 'ss', 'SS454', 'sdsds', 1),
(15, 1, '3', '4', '3', 'ss', 'SS454', 'sdsds', 1),
(16, 5, '3', '5', '6', 'i', 'Test Company', 'dfdfsd', 1),
(17, 6, '3', '5', '2', 'i', 'SR Industries', 'sdfs', 1),
(18, 7, '3', '4', '1', 'ns', 'BS-65', 'This is test', 1),
(19, 7, '4', '4', '3', 'ss', 'SS454', 'A2', 1),
(20, 7, '3', '4', '16', 'i', 'Baba Prop', 'To NS', 1),
(21, 7, '6', '4', '3', 'ss', 'SS454', 'Transfer', 1),
(22, 3, '3', '4', '1', 'ns', 'BS-65', 'nghgh', 1),
(23, 7, '3', '4', '3', 's', 'SS454', 'new land', 1),
(24, 7, '4', '5', '2', 'tes', 'SR Industries', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `its_pcc_master`
--

CREATE TABLE `its_pcc_master` (
  `id` int(11) NOT NULL,
  `entry_pcc_name` varchar(255) NOT NULL,
  `pcc_action_name` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_pcc_master`
--

INSERT INTO `its_pcc_master` (`id`, `entry_pcc_name`, `pcc_action_name`, `created_by`, `updated_by`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Add', 'Add', 1, 1, 1, '2019-12-15 04:21:56', '2019-12-14 16:51:22'),
(4, 'Update', 'Update', 1, 1, 1, '2019-12-15 04:21:39', '2019-12-14 16:51:39'),
(5, 'Register', 'Register', 1, 1, 1, '2019-12-15 05:24:15', '2019-12-14 17:54:15'),
(6, 'Transfer', 'Transfer', 1, 1, 1, '2019-12-15 05:24:30', '2019-12-14 17:54:30');

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
(12, 'active', NULL, 1, NULL, NULL, NULL, '2019-12-16', NULL, NULL);

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
  `quantity` int(11) NOT NULL DEFAULT '0',
  `quantity_type` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `unit_name` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `installed_location_id` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location_id` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_type_id` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_1` mediumtext COLLATE utf8_unicode_ci,
  `address_2` mediumtext COLLATE utf8_unicode_ci,
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
  `description` mediumtext COLLATE utf8_unicode_ci,
  `status` tinyint(1) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `created_by` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modify_by` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_serviceable_item` varchar(111) COLLATE utf8_unicode_ci DEFAULT '0',
  `is_service_item` varchar(111) COLLATE utf8_unicode_ci DEFAULT '0',
  `is_serialized` varchar(111) COLLATE utf8_unicode_ci DEFAULT '0',
  `is_leasable` int(11) DEFAULT '1',
  `num_column1` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `txt_column_value1` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `txt_column_value2` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `txt_column_value3` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `txt_column_value4` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `txt_column3` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `its_shareholders`
--

CREATE TABLE `its_shareholders` (
  `id` int(11) NOT NULL,
  `org_id` int(11) DEFAULT NULL,
  `cust_id` bigint(20) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `p_id` int(11) DEFAULT NULL,
  `f_name` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `l_name` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` text COLLATE utf8_unicode_ci,
  `phone` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `occupation` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dob` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_reg_no` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_type` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_director` tinyint(1) DEFAULT NULL,
  `s_svalue` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `svalue_percentage` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `description` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `its_shareholders`
--

INSERT INTO `its_shareholders` (`id`, `org_id`, `cust_id`, `comp_id`, `p_id`, `f_name`, `l_name`, `location`, `phone`, `email`, `gender`, `occupation`, `mobile`, `dob`, `company_reg_no`, `company`, `company_type`, `is_director`, `s_svalue`, `svalue_percentage`, `state_id`, `country_id`, `description`, `address`, `created_at`, `updated_at`, `created_by`, `status`) VALUES
(1, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, 'on', NULL, NULL, NULL, NULL, 'Mudra Automative Suspension Pvt Ltd', 'ltd', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(2, 1, 1, NULL, 1, 'Anil Kumar', 'Singh', NULL, NULL, NULL, 'option1', NULL, NULL, NULL, NULL, 'Mudra Automative Suspension Pvt Ltd', 'ltd', 1, '2500', '25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(3, 1, 1, NULL, 1, 'Mr Santosh Kumar', 'Singh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Mudra Automative Suspension Pvt Ltd', 'ltd', 1, '2500', '25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4, 1, 1, NULL, 1, 'Mr Arun kumar', 'Singh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Mudra Automative Suspension Pvt Ltd', 'ltd', 1, '2500', '25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(5, 1, 1, NULL, 1, 'Mr . Rakesh Kumar', 'Singh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Mudra Automative Suspension Pvt Ltd', 'ltd', 1, '2500', '25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(6, 1, 1, 1, 1, 'Shivani', 'Mahto', NULL, NULL, NULL, 'male', NULL, NULL, '01-12-2019', '78592', 'Mudra', 'ltd', 0, NULL, '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(7, 1, 1, 1, 1, 'Puja', 'Kumari', 'N/A', NULL, NULL, NULL, NULL, NULL, '08-12-2019', '78592', 'Mudra', 'ltd', 0, NULL, '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(8, 1, 1, NULL, 1, 'rohit', 'kumar', 'N/A', NULL, NULL, 'male', NULL, NULL, '02-12-2019', '78592', 'Mudra', 'ltd', 1, NULL, '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(9, 1, 1, NULL, 1, 'Abhinav', 'Roy', 'N/A', NULL, NULL, 'male', NULL, NULL, '02-12-2019', '78592', 'Mudra', 'ltd', 1, NULL, '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(10, 1, 1, NULL, 1, 'Raj', 'Kumar', 'N/A', NULL, NULL, 'male', NULL, NULL, NULL, '78592', 'Mudra', 'ltd', 1, NULL, '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(11, 1, 3, 3, 3, NULL, NULL, NULL, NULL, NULL, 'male', NULL, NULL, NULL, 'U74991UP2007PTC033141', 'IT-SCIENT Consulting Pvt. Ltd', 'ltd', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(12, 1, 3, NULL, 3, 'Arun', 'Kumar Giri', 'CA,USA', NULL, 'arun.giri@itscient.com', 'male', NULL, '+1 510-516-7811', NULL, 'U74991UP2007PTC033141', 'IT-SCIENT Consulting Pvt. Ltd', 'ltd', 1, '60', '60', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(13, 1, 4, 4, 4, NULL, NULL, NULL, NULL, NULL, 'male', NULL, NULL, NULL, 'U74991UP2007PTC033141', 'IT-SCIENT Consulting Pvt. Ltd', 'ltd', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(14, 1, 4, NULL, 4, 'Arun', 'Kumar Giri', 'CA,USA', NULL, 'arun.giri@itscient.com', 'male', NULL, '+1 510-516-7811', NULL, 'U74991UP2007PTC033141', 'IT-SCIENT Consulting Pvt. Ltd', 'ltd', 1, '60', '60', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(15, 1, 5, 5, 5, NULL, NULL, NULL, NULL, NULL, 'male', NULL, NULL, NULL, 'U74991UP2007PTC033141', 'IT-SCIENT Consulting Pvt. Ltd', 'ltd', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(16, 1, 5, NULL, 5, 'Arun', 'Kumar Giri', 'CA,USA', NULL, 'arun.giri@itscient.com', 'male', NULL, '+1 510-516-7811', NULL, 'U74991UP2007PTC033141', 'IT-SCIENT Consulting Pvt. Ltd', 'ltd', 1, '60', '60', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(17, 1, 6, 6, 6, 'Shivani', 'Singh', NULL, NULL, NULL, 'male', NULL, NULL, '01-12-2019', '78777878', 'Test Company', 'ltd', 0, '2500', '25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(18, 1, 6, NULL, 6, 'Raj', 'Gupta', NULL, NULL, NULL, 'male', 'web Devolper', NULL, '01-12-2019', '78777878', 'Test Company', 'ltd', 1, '2500', '25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(19, 1, 6, NULL, 6, 'Rohit', 'Singh', NULL, NULL, NULL, 'male', NULL, NULL, '24-03-2014', '78777878', 'Test Company', 'ltd', 1, '2500', '25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(20, 1, 6, NULL, 6, 'Nikhil', 'Singh', NULL, NULL, NULL, 'male', 'Front End', NULL, '01-05-2007', '78777878', 'Test Company', 'ltd', 1, '2500', '25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(21, 1, 7, 7, 7, NULL, NULL, NULL, NULL, NULL, 'male', NULL, NULL, NULL, 'sdfs', 'dsfs', 'ltd', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(22, 1, 7, NULL, 7, 'dsfs', 'sdf', 'fdfd', NULL, 'dsds', 'male', 'dsf', '7575545454', NULL, 'sdfs', 'dsfs', 'ltd', 1, NULL, '454', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(23, 1, 15, 15, 15, NULL, NULL, NULL, NULL, NULL, 'male', NULL, NULL, NULL, 'reg5', 'Baba Pvt', 'ltd', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(24, 1, 15, NULL, 15, 'director', 'one', NULL, NULL, 'd1@gmail.com', 'male', 'dir', '9876543212', '01-12-2019', 'reg5', 'Baba Pvt', 'ltd', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(25, 1, 15, NULL, 15, 'diector', 'two', NULL, NULL, 'd2@gmail.com', 'male', 'dir', '9865123456', '02-12-2019', 'reg5', 'Baba Pvt', 'ltd', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(26, 1, 15, NULL, 15, 'dir3', '3', NULL, NULL, 'd3@gmail.com', 'male', 'dir', '8765431234', '12-11-2019', 'reg5', 'Baba Pvt', 'ltd', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(27, 1, 19, 19, 19, NULL, NULL, NULL, NULL, NULL, 'male', NULL, NULL, NULL, 'its', 'its', 'ltd', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(28, 1, 19, NULL, 19, '45', '45', 'bhuiyadih\r\n1306', NULL, 'amit@gmail.com', 'male', '45', '4545454545', '09-12-2019', 'its', 'its', 'ltd', 1, '12', '12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(29, 1, 21, 21, 21, 'sh', 'one', 'address', NULL, 'sh@gmail.com', 'male', 'sh', '8765431234', '02-12-2019', 'Reg1', 'Test pvt', 'ltd', 0, '3', '25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(30, 1, 21, NULL, 21, 'director', 'one', 'address', NULL, 'dir@gmail.com', 'male', 'dir', '9876541234', '03-12-2019', 'Reg1', 'Test pvt', 'ltd', 1, '1', '25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `its_sst`
--

CREATE TABLE `its_sst` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `sst_code` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `sst_name` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT '0',
  `deleted_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `its_sst`
--

INSERT INTO `its_sst` (`id`, `user_id`, `sst_code`, `type`, `sst_name`, `mobile`, `is_deleted`, `deleted_at`, `created_at`, `updated_at`, `status`) VALUES
(2, 127, 'SST-50-1-A', 1, 'Lali Ram', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(4, 128, 'SST-50-1-B', 1, 'Paikash Toppo', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(5, 129, 'SST-50-1-C', 1, 'Gourav Sukla', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(6, 130, 'SST-50-2-A', 1, 'Sanjay Munda', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(7, 131, 'SST-50-2-B', 1, 'JaiParkash Barik', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(8, 132, 'SST-50-2-C', 1, 'Sunil Kumar Das', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(9, 133, 'SST-50-3-A', 1, 'Rajesh Hembram', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(10, 134, 'SST-50-3-B', 1, 'John Bodra', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(11, 135, 'SST-50-3-C', 1, 'Manai Bari', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(12, 137, 'SST-50-4-B', 1, 'Rathin Kumar', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(13, 138, 'SST-50-4-C', 1, 'Sona Ram', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(14, 139, 'SST-51-1-A', 1, 'Sumit Kumar', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(15, 140, 'SST-51-1-B', 1, 'Lopo Deogam', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(16, 141, 'SST-51-1-C', 1, 'Chaitanya Kr. Mishra', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(17, 142, 'SST-51-2-A', 1, 'Nakul Thakur', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(18, 143, 'SST-51-2-B', 1, 'Dhananjay Kumar', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(19, 144, 'SST-51-2-C', 1, 'Dhirendra Kumar', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(20, 145, 'SST-51-3-A', 1, 'Pradhan Hansda', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(21, 146, 'SST-51-3-C', 1, 'Kalicharan Singh Munda', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(22, 147, 'SST-51-4-A', 1, 'Kalish Ram', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(23, 148, 'SST-51-4-B', 1, 'Ram Naresh Parswan', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(24, 149, 'SST-51-4-C', 1, 'Abhishek Shresth', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(25, 150, 'SST-57-1-A', 1, 'Ravindra Murmu', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(26, 151, 'SST-57-1-B', 1, 'Ramakant Kumar', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(27, 152, 'SST-57-1-C', 1, 'Ashok Kumar', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(28, 153, 'SST-57-2-A', 1, 'Anurag Anand', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(29, 154, 'SST-57-2-B', 1, 'Suneel Swaraj', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(30, 155, 'SST-57-2-C', 1, 'Shishir Kumar', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(31, 136, 'SST-50-4-A', 1, 'Ranglal Mahato', NULL, 0, NULL, '2019-11-10', NULL, NULL),
(32, 161, 'SST-51-3-B', 1, 'Devendra Kumar', 9934138041, 0, NULL, '2019-11-12', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `its_state`
--

CREATE TABLE `its_state` (
  `id` int(10) UNSIGNED NOT NULL,
  `org_id` int(11) DEFAULT NULL,
  `state` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT '0' COMMENT '1 = ''delete''',
  `ip_address` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
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
(1, 11, 'sw', 'all sw requirement', NULL, 1, NULL, NULL, NULL, NULL, '2019-11-20', NULL),
(2, 13, 'subcatone', 'sub cat one', 21, 1, NULL, NULL, NULL, NULL, '2019-12-16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `its_subdepartment`
--

CREATE TABLE `its_subdepartment` (
  `id` int(11) NOT NULL,
  `department_id` int(11) DEFAULT NULL,
  `subdepartment_name` varchar(50) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `pos_id` int(11) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_subdepartment`
--

INSERT INTO `its_subdepartment` (`id`, `department_id`, `subdepartment_name`, `description`, `pos_id`, `is_active`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 1, 's/w', 'software desc', 21, 1, NULL, NULL, '2019-12-17 13:21:09', '2019-12-17 13:21:09'),
(2, 1, 'h/w', 'hardware', 21, 1, NULL, NULL, '2019-12-17 13:21:39', '2019-12-17 13:21:39');

-- --------------------------------------------------------

--
-- Table structure for table `its_sub_industries`
--

CREATE TABLE `its_sub_industries` (
  `id` int(11) NOT NULL,
  `sub_industry_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `its_sub_industries`
--

INSERT INTO `its_sub_industries` (`id`, `sub_industry_name`) VALUES
(1, 'gnngf'),
(2, 'gfngf');

-- --------------------------------------------------------

--
-- Table structure for table `its_ticket`
--

CREATE TABLE `its_ticket` (
  `id` int(11) NOT NULL,
  `ticket_id` varchar(50) DEFAULT NULL,
  `request_id` int(11) DEFAULT NULL,
  `technician_id` int(11) DEFAULT NULL,
  `request_type` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `ticket_mode` varchar(50) DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `requester_name` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `item` int(11) DEFAULT NULL,
  `impact` varchar(50) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  `urgency` int(11) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `poc_id` int(11) DEFAULT NULL,
  `assigne_to` int(11) DEFAULT NULL,
  `location` int(11) DEFAULT NULL,
  `file_no` varchar(50) DEFAULT NULL,
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
  `updated_at` timestamp NULL DEFAULT NULL,
  `resolved_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `its_ticket_file`
--

CREATE TABLE `its_ticket_file` (
  `id` int(11) NOT NULL,
  `ticket_id` int(11) DEFAULT NULL,
  `attachment` varchar(50) DEFAULT NULL,
  `file_name` varchar(50) DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `its_ticket_history`
--

CREATE TABLE `its_ticket_history` (
  `id` int(11) NOT NULL,
  `assigned_by` int(11) DEFAULT NULL,
  `assigned_to` int(11) DEFAULT NULL,
  `ticket_id` int(11) NOT NULL,
  `assigned_date` date NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_ticket_history`
--

INSERT INTO `its_ticket_history` (`id`, `assigned_by`, `assigned_to`, `ticket_id`, `assigned_date`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 16, 1, '2019-11-22', NULL, '2019-11-22 12:44:07', NULL),
(2, 1, 23, 2, '2019-12-17', NULL, '2019-12-16 18:57:01', NULL),
(3, 1, 23, 3, '2019-12-17', NULL, '2019-12-16 19:03:19', NULL),
(4, 1, 22, 3, '2019-12-17', NULL, '2019-12-16 19:03:38', NULL),
(5, 1, 23, 4, '2019-12-18', NULL, '2019-12-18 06:34:58', NULL);

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
  `description` mediumtext COLLATE utf8_unicode_ci,
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
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
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
  `address` mediumtext COLLATE utf8_unicode_ci,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `token_expire` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL COMMENT '''0'' Inactive , ''1'' Active',
  `generic_id` int(22) NOT NULL,
  `user_image` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_deleted` int(11) DEFAULT '0' COMMENT '''1'' =>delete',
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_date` timestamp NULL DEFAULT NULL,
  `ip_address` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_date` datetime DEFAULT NULL,
  `last_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `its_users`
--

INSERT INTO `its_users` (`id`, `users_role`, `users_type`, `parent_id`, `emp_id`, `username`, `name`, `password`, `email`, `phone`, `address`, `email_verified_at`, `remember_token`, `token_expire`, `status`, `generic_id`, `user_image`, `is_deleted`, `deleted_by`, `deleted_date`, `ip_address`, `modified_date`, `created_at`, `updated_at`, `created_date`, `last_login`) VALUES
(1, 1, 0, 0, 0, 'admin', 'Neha Arora', '$2a$08$TnLUue010iZQcUVL.b0bPeCaFvVqa221s0MmNopcnzeIg4q4jjxQa', 'amitrajput270@gmail.com', 7409969352, 'Noida 63', NULL, 'tIAYNaxWeyZdVF1Uj5SOkBHlbH9XV0bs6rMo6UuLn3qCpMZ7o3pUsN1HQubG', NULL, 0, 0, 'neha.jpg', 0, 0, NULL, '', '2019-12-18 06:37:55', '2019-06-28 09:27:00', '2019-06-28 09:27:00', NULL, NULL),
(21, 2, NULL, NULL, NULL, 'baba', 'Baba', '$2y$10$8Oy7hbA0Qx/onMRZ6VIIs.2759b7.lQX5ac7Xoqik4XiZdq7fOxQu', 'baba@gmail.com', 9876543210, NULL, NULL, NULL, NULL, 1, 0, NULL, 0, NULL, NULL, NULL, '2019-12-17 14:07:13', '2019-12-15 03:43:06', '2019-12-14 16:13:06', NULL, NULL),
(22, 2, NULL, NULL, NULL, 'sumanth', 'Sumanth', '$2y$10$WO1X3Z7Os3sJ5dmyrFdq8.XFtoicL64q2tmUrDqk3numzGFGAO9Ba', 'sumanth@gmail.com', 9876543212, NULL, NULL, NULL, NULL, 1, 0, NULL, 0, NULL, NULL, NULL, '2019-12-17 17:07:56', '2019-12-17 05:51:47', '2019-12-16 18:21:47', NULL, NULL),
(23, 2, NULL, NULL, NULL, 'arun', 'Arun', '$2y$10$bhkbXBJtigpW2vzY1C1U2O3d6pz2ihRJC2Av4V6mXwneir8mTbigu', 'arun@gmail.com', 8765432123, NULL, NULL, NULL, NULL, 1, 1, NULL, 0, NULL, NULL, NULL, '2019-12-17 17:07:56', '2019-12-17 06:30:07', '2019-12-16 18:22:26', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `its_waste_materials`
--

CREATE TABLE `its_waste_materials` (
  `id` int(11) NOT NULL,
  `waste_materials` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `its_waste_materials`
--

INSERT INTO `its_waste_materials` (`id`, `waste_materials`) VALUES
(1, 'nbvnv'),
(2, 'vcbvc');

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
-- Indexes for table `its_customer_company`
--
ALTER TABLE `its_customer_company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_departments`
--
ALTER TABLE `its_departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_entity_master`
--
ALTER TABLE `its_entity_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_fst`
--
ALTER TABLE `its_fst`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_industries`
--
ALTER TABLE `its_industries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_input_details`
--
ALTER TABLE `its_input_details`
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
-- Indexes for table `its_lease_invoice`
--
ALTER TABLE `its_lease_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_locationusers`
--
ALTER TABLE `its_locationusers`
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
-- Indexes for table `its_manage_pcc_action`
--
ALTER TABLE `its_manage_pcc_action`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_materials`
--
ALTER TABLE `its_materials`
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
-- Indexes for table `its_pcc_enitity_record`
--
ALTER TABLE `its_pcc_enitity_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_pcc_master`
--
ALTER TABLE `its_pcc_master`
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
-- Indexes for table `its_shareholders`
--
ALTER TABLE `its_shareholders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_sst`
--
ALTER TABLE `its_sst`
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
-- Indexes for table `its_subdepartment`
--
ALTER TABLE `its_subdepartment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_sub_industries`
--
ALTER TABLE `its_sub_industries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_ticket`
--
ALTER TABLE `its_ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_ticket_file`
--
ALTER TABLE `its_ticket_file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_ticket_history`
--
ALTER TABLE `its_ticket_history`
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
-- Indexes for table `its_waste_materials`
--
ALTER TABLE `its_waste_materials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `its_category`
--
ALTER TABLE `its_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `its_countries`
--
ALTER TABLE `its_countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `its_customers`
--
ALTER TABLE `its_customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `its_customer_company`
--
ALTER TABLE `its_customer_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `its_departments`
--
ALTER TABLE `its_departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `its_entity_master`
--
ALTER TABLE `its_entity_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `its_fst`
--
ALTER TABLE `its_fst`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `its_industries`
--
ALTER TABLE `its_industries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `its_input_details`
--
ALTER TABLE `its_input_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `its_lands`
--
ALTER TABLE `its_lands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `its_leasedata`
--
ALTER TABLE `its_leasedata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `its_lease_invoice`
--
ALTER TABLE `its_lease_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `its_locationusers`
--
ALTER TABLE `its_locationusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;

--
-- AUTO_INCREMENT for table `its_location_block`
--
ALTER TABLE `its_location_block`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `its_location_phase`
--
ALTER TABLE `its_location_phase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `its_location_zone`
--
ALTER TABLE `its_location_zone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `its_manage_pcc_action`
--
ALTER TABLE `its_manage_pcc_action`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `its_materials`
--
ALTER TABLE `its_materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `its_org`
--
ALTER TABLE `its_org`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `its_password_resets`
--
ALTER TABLE `its_password_resets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `its_pccdata`
--
ALTER TABLE `its_pccdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `its_pcc_enitity_record`
--
ALTER TABLE `its_pcc_enitity_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `its_pcc_master`
--
ALTER TABLE `its_pcc_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `its_priority_levels`
--
ALTER TABLE `its_priority_levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `its_product`
--
ALTER TABLE `its_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `its_shareholders`
--
ALTER TABLE `its_shareholders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `its_sst`
--
ALTER TABLE `its_sst`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `its_state`
--
ALTER TABLE `its_state`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `its_subcategory`
--
ALTER TABLE `its_subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `its_subdepartment`
--
ALTER TABLE `its_subdepartment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `its_sub_industries`
--
ALTER TABLE `its_sub_industries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `its_ticket`
--
ALTER TABLE `its_ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `its_ticket_file`
--
ALTER TABLE `its_ticket_file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `its_ticket_history`
--
ALTER TABLE `its_ticket_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `its_waste_materials`
--
ALTER TABLE `its_waste_materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
