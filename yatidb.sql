-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 29, 2020 at 09:04 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `yatidb`
--

-- --------------------------------------------------------

--
-- Table structure for table `addnews`
--

CREATE TABLE IF NOT EXISTS `addnews` (
  `title` varchar(120) NOT NULL,
  `pics` varchar(200) NOT NULL,
  `descr` varchar(500) NOT NULL,
  `ndt` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addnews`
--

INSERT INTO `addnews` (`title`, `pics`, `descr`, `ndt`) VALUES
('Regarding Food', 'a.jpg', 'kjhsife asfeaiorgae vwakfihwarvwa wivewarvheav wjdh9wevw wjfiwav wfhwaeivawr vawervwargiwaheivuaevavwv vwhveiuves', '29/08/2020'),
('Latest News', 'c.jpg', 'kjhihdfe', '29/08/2020');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `name` varchar(80) NOT NULL,
  `email` varchar(120) NOT NULL,
  `msg` varchar(400) NOT NULL,
  `cdt` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--


-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE IF NOT EXISTS `donate` (
  `name` varchar(80) NOT NULL,
  `email` varchar(120) NOT NULL,
  `mob` varchar(40) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `pdonation` varchar(300) NOT NULL,
  `address` varchar(200) NOT NULL,
  `ddt` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donate`
--


-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `userid` varchar(120) NOT NULL,
  `passwd` varchar(50) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userid`, `passwd`) VALUES
('admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE IF NOT EXISTS `volunteer` (
  `name` varchar(80) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mob` varchar(50) NOT NULL,
  `profile` varchar(150) NOT NULL,
  `address` varchar(200) NOT NULL,
  `vdt` varchar(40) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteer`
--

