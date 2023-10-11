-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 09, 2011 at 12:29 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `argie_tamera`
--

-- --------------------------------------------------------

--
-- Table structure for table `amenities`
--

CREATE TABLE `amenities` (
  `amenities_id` int(11) NOT NULL auto_increment,
  `pic` varchar(100) NOT NULL,
  `des` text NOT NULL,
  PRIMARY KEY  (`amenities_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `amenities`
--

INSERT INTO `amenities` (`amenities_id`, `pic`, `des`) VALUES
(1, 'amenities/IconAC.jpg', 'Every room in the Tamera Plaza Inn has Air Conditioning. Each room has an easy-to-use remote control to set your comfort level without having to leave the bed.'),
(2, 'amenities/IconBkfst.jpg', 'Upon your arrival, you will recieve a complimentary "Welcome Drink" for your travel here. Also, there is Free Breakfast for all accomodations.'),
(3, 'amenities/IconCocktail.jpg', 'Located in the lobby, we offer a full-service Bar & Coffee Shop with a variety of beverages. '),
(4, 'amenities/IconFunction.jpg', 'Located on the 4th floor, we hold many activities for all occasions here in the Function Room. One can reserve this room for conferences, parties, and more.'),
(5, 'amenities/IconGen.jpg', 'We have generators on standby 24 hours a day, 7 days a week in an event of a "Brown Out", providing uninterrupted electricity service to the building.'),
(6, 'amenities/IconLaundry.jpg', 'Whether on business or pleasure, we provide laundry and pressing service here. We deliver your clothes to your room, or in person to accomodate your schedule.'),
(7, 'amenities/IconLongDist.jpg', 'Need to call home or send documents? We provide Fax services and phones equipped for Long Distance calls to home, the office, or anywhere in between.'),
(8, 'amenities/restaurantLG.jpg', 'Not only a great place to eat, but has great street-side view of Bacolod City. Try the famous "Tamera Chicken", great for the whole family!'),
(9, 'amenities/IconShower.jpg', 'Every room is individualy equipped with personal water heaters in the showers. Fully adjustable, you''ll always have a comfortable shower without burning or freezing yourself.'),
(10, 'amenities/IconTaxi.jpg', 'Have a meeting to go to or just want to go out? You can schedule trips anywhere around Bacolod City by utilizing our transportation service offered here.'),
(11, 'amenities/IconTV.jpg', 'No room would be complete without complimentary Cable TV and telephone service in every room. Channels may vary.'),
(12, 'amenities/SmIconWiFi.png', 'All area of Tamera Plaza Inn is wifi ready');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL auto_increment,
  `name` varchar(60) NOT NULL,
  `email` varchar(100) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY  (`comment_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `name`, `email`, `content`) VALUES
(15, 'mecile', 'mecile_26oligo@yahoo.com', 'bhjkadgasj,dsads'),
(14, 'arlene', 'arlenepasigado@yahoo.com', 'ka gamai ka bed....\r\n\r\n\r\n\r\n\r\n'),
(13, 'qke.weqe', 'hannah@hotmail.com', 'wala ko mai e komment'),
(12, 'jhgjhgjhgjh', 'jhg', 'jhgjhg'),
(11, 'ttuyt', 'tuyt', 'uytuy'),
(10, 'gf', 'hfhgfhgfh', 'gfhgf');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservation_id` int(11) NOT NULL auto_increment,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `zip` int(11) NOT NULL,
  `province` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` int(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `arrival` varchar(30) NOT NULL,
  `departure` varchar(30) NOT NULL,
  `adults` int(11) NOT NULL,
  `child` int(11) NOT NULL,
  `result` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `no_room` int(11) NOT NULL,
  `payable` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `confirmation` varchar(20) NOT NULL,
  PRIMARY KEY  (`reservation_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `reservation`
--


-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(11) NOT NULL auto_increment,
  `type` varchar(30) NOT NULL,
  `rate` int(11) NOT NULL,
  `description` varchar(300) NOT NULL,
  `image` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `max_adult` int(11) NOT NULL,
  `max_child` int(11) NOT NULL,
  PRIMARY KEY  (`room_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `type`, `rate`, `description`, `image`, `qty`, `max_adult`, `max_child`) VALUES
(6, 'Superior', 15000, 'Fully air conditioned', 'photos/addemployee.png', 12, 1, 1),
(7, 'Deluxe', 1300, 'Fully air conditioned', 'photos/DeLuxe.jpg', 5, 1, 1),
(8, 'Standard Single', 950, 'Fully air conditioned', 'photos/Single.jpg', 3, 1, 1),
(9, 'Standard Double', 1100, 'Fully air conditioned', 'photos/images.jpg', 3, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `roominventory`
--

CREATE TABLE `roominventory` (
  `roominventory_id` int(11) NOT NULL auto_increment,
  `arrival` varchar(30) NOT NULL,
  `departure` varchar(30) NOT NULL,
  `qty_reserve` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `confirmation` varchar(10) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY  (`roominventory_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `roominventory`
--


-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL auto_increment,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `position` varchar(45) NOT NULL,
  PRIMARY KEY  (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `position`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'argie', 'argie', 'frontdesk');
