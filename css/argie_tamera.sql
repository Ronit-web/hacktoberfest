-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 07, 2011 at 09:56 PM
-- Server version: 5.1.56
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


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

CREATE TABLE IF NOT EXISTS `amenities` (
  `amenities_id` int(11) NOT NULL AUTO_INCREMENT,
  `pic` varchar(100) NOT NULL,
  `des` text NOT NULL,
  PRIMARY KEY (`amenities_id`)
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

CREATE TABLE IF NOT EXISTS `comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `email` varchar(100) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`comment_id`)
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

CREATE TABLE IF NOT EXISTS `reservation` (
  `reservation_id` int(11) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`reservation_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=101 ;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reservation_id`, `firstname`, `lastname`, `city`, `zip`, `province`, `country`, `email`, `contact`, `username`, `password`, `arrival`, `departure`, `adults`, `child`, `result`, `room_id`, `no_room`, `payable`, `status`, `confirmation`) VALUES
(90, 'v', 'v', 'v', 1, 'v', 'v', 'policarpio.argie@yahoo.com', 1, '', 'v', '10/11/2011', '16/11/2011', 3, 2, 6, 9, 2, 13200, 'out', 'z03vvt6o'),
(91, 'M', 'M', 'M', 8, 'M', 'M', 'policarpio.argie@yahoo.com', 8, '', 'M', '10/11/2011', '16/11/2011', 3, 2, 6, 9, 2, 13200, 'out', 'zs8ip55n'),
(92, 'v', 'v', 'v', 5, 'v', 'v', 'policarpio.argie@yahoo.com', 6, '', 'v', '', '', 0, 0, 0, 0, 0, 0, 'out', 'utzrdhdp'),
(93, 'd', 'c', 'c', 8, 'c', 'c', 'policarpio.argie@yahoo.com', 5, '', 'v', '', '', 0, 0, 0, 0, 0, 0, 'out', 'v7ej0ezm'),
(94, 'b', 'b', 'b', 6, 'b', 'b', 'policarpio.argie@yahoo.com', 5, '', 'h', '10/11/2011', '16/11/2011', 3, 2, 6, 9, 2, 13200, 'out', 'o5okcenb'),
(95, 'b', 'b', 'b', 9, 'b', 'b', 'policarpio.argie@yahoo.com', 9, '', 'b', '10/11/2011', '16/11/2011', 3, 2, 6, 6, 2, 180000, 'out', '67yq3v2r'),
(96, 'bB', 'b', 'b', 9, 'b', 'b', 'policarpio.argie@yahoo.com', 8, '', 'n', '10/11/2011', '16/11/2011', 3, 2, 6, 6, 2, 180000, 'out', 'mt77rkfi'),
(97, 'b', 'b', 'b', 8, 'b', 'b', 'policarpio.argie@yahoo.com', 8, '', 'k', '10/11/2011', '16/11/2011', 3, 2, 6, 6, 2, 180000, 'out', 'a6d00o4w'),
(98, 'x', 'x', 'x', 1, 'x', 'x', 'policarpio.argie@yahoo.com', 1, '', 'X', '10/11/2011', '16/11/2011', 3, 2, 6, 6, 2, 180000, 'out', '4vyt50oi'),
(99, 'x', 'x', 'x', 1, 'x', 'x', 'policarpio.argie@yahoo.com', 1, '', 'X', '10/11/2011', '16/11/2011', 3, 2, 6, 6, 2, 180000, 'out', 'ygugmqu0'),
(89, 'dfdfrde', 'fd', 'dfd', 434, 'dfdf', 'dfdf', 'argiepolicarpio@gmail.com', 343434, '', 'dfdf', '30/10/2011', '31/10/2011', 1, 0, 1, 6, 4, 60000, '', 'b37tfcaj'),
(77, 'argie', 'policarpio', 'talisay', 6115, 'brgy. zone 15', 'philippines', 'policarpio.argie@yahoo.com', 65656, '', 'argie', '21/10/2011', '28/10/2011', 1, 2, 7, 6, 1, 105000, 'out', 'iqtiyxvg'),
(78, 'argie', 'policarpio', 'talisay', 6115, 'brgy. zone 15', 'philippines', 'policarpio.argie@yahoo.com', 65656, '', 'argie', '21/10/2011', '28/10/2011', 1, 2, 7, 6, 1, 105000, 'out', 'jqh8yvak'),
(79, '', '', '', 0, '', '', '', 0, '', '', '', '', 0, 0, 0, 0, 0, 0, 'out', ''),
(80, 'fv', 'fcfc', 'cff', 545, 'cf', 'fcf', 'argiepolicarpio@gmail.com', 45554, '', 'rt', '26/10/2011', '27/10/2011', 1, 0, 1, 7, 1, 1300, '', 'rhnegn4d'),
(81, 'hjg', 'khkjh', 'hj', 454, 'hjk', 'uuj', 'mecile_26oligo@yahoo.com', 56678, '', 'jhg', '29/10/2011', '30/10/2011', 1, 0, 1, 1, 1, 0, 'out', 'a467x7cf'),
(82, '', '', '', 0, '', '', 'mbn', 0, '', '', '', '30/10/2011', 1, 1, 1, 0, 0, 0, 'out', ''),
(83, '', '', '', 0, '', '', 'mecile_26oligo@yahoo.com', 0, '', '', '', '30/10/2011', 1, 1, 1, 0, 0, 0, 'out', ''),
(84, '', '', '', 0, '', '', 'ji', 0, '', '', '', '05/11/2011', 1, 1, 5, 0, 0, 0, 'out', ''),
(85, 'yutu', 'kjhk', 'jhkjh', 5657, 'ytuy', 'ytuy', 'jag_720@yahoo.com', 5668, '', 'gjhgkj', '30/10/2011', '05/11/2011', 1, 0, 5, 1, 1, 0, 'out', '8zda2ddw'),
(86, 'arlene', 'pasigado', 'bacolod', 6100, 'bacolod', 'philippines', 'arlenepasigado@yahoo.com', 123456, '', 'akolangkabalo', '30/10/2011', '05/11/2011', 2, 0, 5, 1, 1, 0, 'out', '0bkibbeo'),
(87, '', '', '', 0, '', '', 'arlenepasigado@yahoo.com', 0, '', '123456', '28/10/2011', '29/10/2011', 1, 0, 1, 6, 1, 15000, 'out', ''),
(88, 'dsfd', 'dgfdgf', 'fgdf', 34534, 'fds', 'fdsf', 'arlenepasigado@yahoo.com', 453654, '', 'gfhfhgf', '28/10/2011', '29/10/2011', 1, 0, 1, 6, 1, 15000, '', 'pnafpn8a'),
(76, 'argie', 'policarpio', 'talisay', 6115, 'brgy. zone 15', 'philippines', 'policarpio.argie@yahoo.com', 65656, '', 'argie', '21/10/2011', '28/10/2011', 1, 2, 7, 6, 1, 105000, '', 'hkpgcfms'),
(73, 'argie', 'policarpio', 'talisay', 6115, 'brgy. zone 15', 'philippines', 'policarpio.argie@yahoo.com', 65656, '', 'argie', '21/10/2011', '28/10/2011', 1, 2, 7, 6, 1, 105000, '', 'fddis6jo'),
(74, 'argie', 'policarpio', 'talisay', 6115, 'brgy. zone 15', 'philippines', 'policarpio.argie@yahoo.com', 65656, '', 'argie', '21/10/2011', '28/10/2011', 1, 2, 7, 6, 1, 105000, '', 'azyqw4iw'),
(75, 'argie', 'policarpio', 'talisay', 6115, 'brgy. zone 15', 'philippines', 'policarpio.argie@yahoo.com', 65656, '', 'argie', '21/10/2011', '28/10/2011', 1, 2, 7, 6, 1, 105000, '', 'xgtu40so'),
(72, 'argie', 'policarpio', 'talisay', 6115, 'brgy. zone 15', 'philippines', 'policarpio.argie@yahoo.com', 65656, '', 'argie', '21/10/2011', '28/10/2011', 1, 2, 7, 6, 1, 105000, '', '5akgeu6k'),
(70, 's', 's', 's', 2, 's', 's', 'policarpio.argie@yahoo.com', 2, '', 's', '21/10/2011', '28/10/2011', 1, 2, 7, 7, 1, 9100, '', 'rcaw4ek0'),
(71, 'd', 'd', 'd', 4, 'd', 'd', 'policarpio.argie@yahoo.com', 4, '', 'd', '21/10/2011', '28/10/2011', 1, 2, 7, 7, 1, 9100, '', 'zsindcyp');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `room_id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(30) NOT NULL,
  `rate` int(11) NOT NULL,
  `description` varchar(300) NOT NULL,
  `image` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `max_adult` int(11) NOT NULL,
  `max_child` int(11) NOT NULL,
  PRIMARY KEY (`room_id`)
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

CREATE TABLE IF NOT EXISTS `roominventory` (
  `roominventory_id` int(11) NOT NULL AUTO_INCREMENT,
  `arrival` varchar(30) NOT NULL,
  `departure` varchar(30) NOT NULL,
  `qty_reserve` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `confirmation` varchar(10) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`roominventory_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=108 ;

--
-- Dumping data for table `roominventory`
--

INSERT INTO `roominventory` (`roominventory_id`, `arrival`, `departure`, `qty_reserve`, `room_id`, `confirmation`, `status`) VALUES
(58, '19/10/2011', '26/10/2011', 1, 6, 'wvube7sg', ''),
(59, '19/10/2011', '26/10/2011', 1, 6, 'rg0sucq0', ''),
(60, '20/10/2011', '28/10/2011', 1, 6, 'uqvat5bj', 'Active'),
(61, '23/10/2011', '29/10/2011', 1, 6, 'kuhm82vx', ''),
(62, '23/10/2011', '29/10/2011', 1, 6, 'cosifzmt', ''),
(63, '23/10/2011', '29/10/2011', 1, 6, '7osmezho', ''),
(64, '01/11/2011', '07/12/2011', 1, 6, '8zfx2hzy', ''),
(65, '01/11/2011', '07/12/2011', 1, 6, 'j05rneka', ''),
(66, '29/10/2011', '30/10/2011', 1, 6, 'kzc05hkx', ''),
(67, '29/10/2011', '30/10/2011', 1, 6, 'msj0ek2z', ''),
(68, '29/10/2011', '30/10/2011', 1, 6, 'h3g036ik', ''),
(69, '', '', 0, 0, '0nkwbriz', ''),
(70, '29/10/2011', '30/10/2011', 2, 1, 'iyorhry6', ''),
(71, '23/10/2011', '30/10/2011', 1, 6, '', 'out'),
(72, '23/10/2011', '30/10/2011', 1, 6, 'ptfj4i0t', 'Active'),
(73, '29/10/2011', '30/10/2011', 1, 1, '8hpandad', ''),
(74, '29/10/2011', '30/10/2011', 1, 1, 'hf6bgogv', ''),
(75, '20/10/2011', '26/10/2011', 1, 1, 'c7sh5xab', ''),
(76, '20/10/2011', '31/10/2011', 5, 6, '8wpns86e', 'Active'),
(77, '21/10/2011', '28/10/2011', 1, 7, 'rcaw4ek0', 'Active'),
(78, '21/10/2011', '28/10/2011', 1, 7, 'zsindcyp', 'Active'),
(79, '21/10/2011', '28/10/2011', 1, 6, '5akgeu6k', 'Active'),
(80, '21/10/2011', '28/10/2011', 1, 6, 'fddis6jo', 'Active'),
(81, '21/10/2011', '28/10/2011', 1, 6, 'azyqw4iw', 'Active'),
(82, '21/10/2011', '28/10/2011', 1, 6, 'xgtu40so', 'Active'),
(83, '21/10/2011', '28/10/2011', 1, 6, 'hkpgcfms', 'Active'),
(84, '21/10/2011', '28/10/2011', 1, 6, 'iqtiyxvg', 'Active'),
(85, '21/10/2011', '28/10/2011', 1, 6, 'jqh8yvak', 'Active'),
(86, '', '', 0, 0, '', 'out'),
(87, '26/10/2011', '27/10/2011', 1, 7, 'rhnegn4d', 'Active'),
(88, '29/10/2011', '30/10/2011', 1, 1, 'a467x7cf', ''),
(89, '', '30/10/2011', 0, 0, '', ''),
(90, '', '30/10/2011', 0, 0, '', ''),
(91, '', '05/11/2011', 0, 0, '', ''),
(92, '30/10/2011', '05/11/2011', 1, 1, '8zda2ddw', ''),
(93, '30/10/2011', '05/11/2011', 1, 1, '0bkibbeo', ''),
(94, '28/10/2011', '29/10/2011', 1, 6, '', ''),
(95, '28/10/2011', '29/10/2011', 1, 6, 'pnafpn8a', 'Active'),
(96, '30/10/2011', '31/10/2011', 4, 6, 'b37tfcaj', 'Active'),
(97, '10/11/2011', '16/11/2011', 2, 9, 'z03vvt6o', 'Active'),
(98, '10/11/2011', '16/11/2011', 2, 9, 'zs8ip55n', 'Active'),
(99, '', '', 0, 0, 'utzrdhdp', 'Active'),
(100, '', '', 0, 0, 'v7ej0ezm', 'Active'),
(101, '10/11/2011', '16/11/2011', 2, 9, 'o5okcenb', 'Active'),
(102, '10/11/2011', '16/11/2011', 2, 6, '67yq3v2r', 'Active'),
(103, '10/11/2011', '16/11/2011', 2, 6, 'mt77rkfi', 'Active'),
(104, '10/11/2011', '16/11/2011', 2, 6, 'a6d00o4w', 'Active'),
(105, '10/11/2011', '16/11/2011', 2, 6, '4vyt50oi', 'Active'),
(106, '10/11/2011', '16/11/2011', 2, 6, 'ygugmqu0', 'Active'),
(107, '06/11/2011', '19/11/2011', 1, 1, 'no20ogdw', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `position` varchar(45) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `position`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'argie', 'argie', 'frontdesk');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
