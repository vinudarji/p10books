-- phpMyAdmin SQL Dump
-- version 3.3.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 01, 2011 at 09:47 PM
-- Server version: 5.1.49
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `p10books_func`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) DEFAULT NULL,
  `description` text,
  `isbn` varchar(500) DEFAULT NULL,
  `author` varchar(500) DEFAULT NULL,
  `subject` varchar(500) DEFAULT NULL,
  `semester` varchar(10) DEFAULT NULL,
  `bookcover` varchar(500) DEFAULT NULL,
  `bookcoverthumb` varchar(500) DEFAULT NULL,
  `department` varchar(500) DEFAULT NULL,
  `sellprice` varchar(20) DEFAULT NULL,
  `mrp` varchar(20) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=72 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `description`, `isbn`, `author`, `subject`, `semester`, `bookcover`, `bookcoverthumb`, `department`, `sellprice`, `mrp`, `created_at`, `updated_at`) VALUES
(55, 'Computer Networks (5th Edition)', 'Computer Networks (5th Edition)', '0132126958', 'Andrew S. Tanenbaum', 'Computer Networks', '5', '979d2976fa9cc5a18547d4b0252cf2d0.jpg', 'd3e450626bab03eeafb43974c48e1881.jpg', 'IT', '400', '500', NULL, NULL),
(59, 'Computer Networks, Fifth Edition: A Systems Approach (The Morgan Kaufmann Series in Networking) [Hardcover]', 'Computer Networks, Fifth Edition: A Systems Approach (The Morgan Kaufmann Series in Networking) [Hardcover]', '0123850592', 'Larry L. Peterson', 'Computer Networks', '5', '9acdeb6573dd470abfedbd1c73c5b9c7.jpg', '497c8d29c07dc2fc535a6933d4fd3be7.jpg', 'IT', '200', '600', NULL, NULL),
(57, 'Data Communications and Computer Networks: A Business User''s Approach [Hardcover]', 'Data Communications and Computer Networks: A Business User''s Approach [Hardcover]', '0538452617', 'Curt (Curt White) White ', 'Computer Networks', '5', '6f350d264aa20597a155a9b1a5fc6859.jpg', 'c4fa1151a5d5de4a02a4c60bc46919bd.jpg', 'IT', '200', '500', NULL, NULL),
(58, 'Computer Networks and Internets (5th Edition) [Hardcover]', 'Computer Networks and Internets (5th Edition) [Hardcover]', '9780136061274', 'Douglas E. Comer', 'Computer Networks', '5', '20aa59a0761307b2649716b07ced21dd.jpg', 'f8e45249410393b5dd6cab2e5e4c6419.jpg', 'IT', '400', '500', NULL, NULL),
(60, 'Designing and Supporting Computer Networks, CCNA Discovery Learning Guide [Paperback]', 'Designing and Supporting Computer Networks, CCNA Discovery Learning Guide [Paperback]', '9781587132124', 'Kenneth Stewart ', 'Computer Networks', '5', '2ea34d8839e56d01480da430b8535c25.jpg', '33717cd4e51e8aaa0820c7239486d8ea.jpg', 'IT', '300', '400', NULL, NULL),
(61, 'Computer Networks and Systems [Hardcover]', 'Computer Networks and Systems [Hardcover]', '0387950370', 'Thomas G. Robertazzi', 'Computer Networks', '5', '4fc521fca7d145c0e34cc200fb80d7e4.jpg', 'f6516a1f14765a4f251143f1da4bd43d.jpg', 'IT', '200', '600', NULL, NULL),
(62, 'Corporate Computer and Network Security (2nd Edition) [Hardcover] ', 'Corporate Computer and Network Security (2nd Edition) [Hardcover]\r\n', '0131854755', 'Raymond Panko', 'Computer Networks', '5', 'cb6b0dba886feb168a89129af6960386.jpg', 'dd2399fa10c71e4915ba9b11973f84e6.jpg', 'IT', '400', '600', NULL, NULL),
(63, 'Computer Networks: Principles, Technologies and Protocols for Network Design [Hardcover]', 'Computer Networks: Principles, Technologies and Protocols for Network Design [Hardcover]', '9780470869826', 'Natalia Olifer', 'Computer Networks', '5', 'eb8ad59efde2b1bacef6582f218f43d3.jpg', 'd91616076fda4d06dac3bd863509d880.jpg', 'IT', '600', '700', NULL, NULL),
(64, 'Network Experiments Manual for Peterson/Davie Computer Networks 4/e [Paperback]', 'Network Experiments Manual for Peterson/Davie Computer Networks 4/e [Paperback]', '0123739748', 'Emad Aboelela', 'Computer Networks', '5', '14090c6d70013bdaef804ef4785a0d65.jpg', 'fc378d22bcee718ec98c1d3d930ad3dc.jpg', 'IT', '500', '700', NULL, NULL),
(65, 'Data Communications and Computer Networks: A Business User''s Approach, Third Edition [Hardcover]', 'Data Communications and Computer Networks: A Business User''s Approach, Third Edition [Hardcover]', '0619160357', 'Curt M. White', 'Computer Networks', '5', 'b4b7f1824190d457674919f2d83895fb.jpg', '77672744c033ac93e6d7f90fa4588213.jpg', 'IT', '600', '700', NULL, NULL),
(66, 'How to Stop E-Mail Spam, Spyware, Malware, Computer Viruses, and Hackers from Ruining Your Computer or Network: The Complete Guide for Your Home and Work [Paperback]', 'How to Stop E-Mail Spam, Spyware, Malware, Computer Viruses, and Hackers from Ruining Your Computer or Network: The Complete Guide for Your Home and Work [Paperback]', '1601383037', 'Bruce C Brown', 'Computer Networks', '5', 'c85867df23ce39c2633a668cece53ac5.jpg', '007375188d424a84520ff259c4ea60c8.jpg', 'IT', '800', '900', NULL, NULL),
(67, 'Guide to Computer Network Security (Computer Communications and Networks) [Paperback]', 'Guide to Computer Network Security (Computer Communications and Networks) [Paperback]', '9781849968065', 'Joseph Migga Kizza', 'Computer Networks', '5', '932e9947f498636dc2a7ba19c6c4958b.jpg', '0efa168547b5da7781eb0093d85943c6.jpg', 'IT', '500', '800', NULL, NULL),
(68, 'Computer Network Time Synchronization: The Network Time Protocol on Earth and in Space, Second Edition [Hardcover]', 'Computer Network Time Synchronization: The Network Time Protocol on Earth and in Space, Second Edition [Hardcover]', '1439814635', 'David L. Mills ', 'Computer Networks', '5', '8caeb8efac6af89d6f619f50acc82052.jpg', 'c5a96590cce2a12be260b730341835a1.jpg', 'IT', '700', '800', NULL, NULL),
(69, 'Computer Network Security [Paperback]', 'Computer Network Security [Paperback]', '3642147070', 'Igor Kotenko', 'Computer Networks', '5', '3be1290e420beed7bee24516b5c27ea6.jpg', '0681abd55a131d401b4d5006ea3b8866.jpg', 'IT', '700', '800', NULL, NULL),
(70, 'Computer Networks: An Open Source Approach [Hardcover]', 'Computer Networks: An Open Source Approach [Hardcover]', '0073376248', ' Ying-Dar Lin', 'Computer Networks', '5', '8e552affac807a002f7486991beafdd6.jpg', '5a8e428436d18686cf472b048799184a.jpg', 'IT', '600', '700', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `shippingaddress` text,
  `contactno` varchar(20) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `book_id`, `qty`, `price`, `shippingaddress`, `contactno`, `created_at`, `updated_at`) VALUES
(1, 17, 55, 1, 400, 'A/20 Bhuvneshvarinagar, Shashtri Road', '9913719765', NULL, NULL),
(2, 17, 55, 1, 400, 'A/20 Bhuvneshvarinagar, Shashtri Road 1', '9913719765', NULL, NULL),
(3, 17, 58, 1, 400, 'A/20 Bhuvneshvarinagar, Shashtri Road', '9913719765', NULL, NULL),
(4, 17, 55, 1, 400, '', '', NULL, NULL),
(5, 17, 57, 1, 400, 'A/20 Bhuvneshvarinagar, Shashtri Road', '9913719765', NULL, NULL),
(6, 17, 58, 1, 400, 'A/20 Bhuvneshvarinagar, Shashtri Road', '9913719765', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sellorders`
--

CREATE TABLE IF NOT EXISTS `sellorders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `edition` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sellorders`
--

INSERT INTO `sellorders` (`id`, `user_id`, `book_id`, `edition`, `created_at`, `updated_at`) VALUES
(1, 17, 55, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 17, 59, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(20) DEFAULT NULL,
  `fullname` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `address2` text,
  `pincode` varchar(20) DEFAULT NULL,
  `address1` text,
  `mobile` varchar(20) DEFAULT NULL,
  `rollno` varchar(500) DEFAULT NULL,
  `semester` varchar(50) DEFAULT NULL,
  `branch` varchar(500) DEFAULT NULL,
  `college` varchar(500) DEFAULT NULL,
  `university` varchar(500) DEFAULT NULL,
  `passwordresetrequested` int(11) DEFAULT NULL,
  `passwordresetcode` varchar(500) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `fullname`, `email`, `password`, `birthdate`, `address2`, `pincode`, `address1`, `mobile`, `rollno`, `semester`, `branch`, `college`, `university`, `passwordresetrequested`, `passwordresetcode`, `created_at`, `updated_at`) VALUES
(17, 'user', 'Kunal K Chaudhari', 'kunalchaudhari@gmail.com', '5e5db0414ba20bd6487709dbd16147a05e0c5939', '1999-10-01', 'Shashtri Road', '394602', 'A/20 Bhuvneshvarinagar', '9913719765', '00IT004', 'Semester', 'IT', 'Nirma Institure Of Technology', 'Nirma University', NULL, NULL, NULL, NULL);
