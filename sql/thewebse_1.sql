-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 26, 2018 at 04:44 AM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `thewebse_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user`, `pass`) VALUES
('mohsin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `f_name` varchar(200) NOT NULL,
  `f_tags` varchar(200) NOT NULL,
  `file_name` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `file_path` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`f_name`, `f_tags`, `file_name`, `type`, `file_path`) VALUES
('Java banner program', 'banner, java, javaprogram, javabannerprogram,  program', 'banner.java', 'application/octet-stream', 'files/banner.java'),
('PHP string program', 'php, phpstringprogram, string, phpstring, program', 'index.php', 'text/php', 'files/index.php'),
('Random', 'Random, file, favicon', 'favicon.ico', 'image/vnd.microsoft.icon', 'files/favicon.ico'),
('Random', 'Random, file, favicon', 'favicon.ico', 'image/vnd.microsoft.icon', 'files/favicon.ico');

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `p_name` varchar(200) NOT NULL,
  `p_tags` varchar(200) NOT NULL,
  `image_name` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `file_path` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`p_name`, `p_tags`, `image_name`, `type`, `file_path`) VALUES
('Cheese Pizza', 'cheesepizza, pizza, cheese', '_0004_pizza_focaccia.jpg', 'image/jpeg', 'images/_0004_pizza_focaccia.jpg'),
('Margaretha Pizza', 'margarethapizza, pizza', 'comer-con-las-manos3 (1).jpg', 'image/jpeg', 'images/comer-con-las-manos3 (1).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tws`
--

CREATE TABLE `tws` (
  `tws_name` varchar(200) NOT NULL,
  `tws_mobile` varchar(200) NOT NULL,
  `tws_email` varchar(200) NOT NULL,
  `tws_website` varchar(200) NOT NULL,
  `tws_address` varchar(200) NOT NULL,
  `tws_tags` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tws`
--

INSERT INTO `tws` (`tws_name`, `tws_mobile`, `tws_email`, `tws_website`, `tws_address`, `tws_tags`) VALUES
('Pizza Hut', '98989898', 'pizzahut@email.com', 'pizzahut.com', 'City Point, Vapi', 'pizzahut, pizza, garlicbread, coke, restaurant, hotel '),
('Neo Politan', '8587587', 'neo@gmail.com', 'neo.com', 'Tithal road, Valsad', 'neopolitan, neo, pizza, garlicbread, coke, restaurant, hotel ');
