-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2015 at 09:05 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `attending`
--

CREATE TABLE IF NOT EXISTS `attending` (
  `cid` int(11) NOT NULL,
  `sid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attending`
--

INSERT INTO `attending` (`cid`, `sid`) VALUES
(4, '123'),
(1, '777');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE IF NOT EXISTS `class` (
  `name` varchar(15) NOT NULL,
  `time` time NOT NULL,
`id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`name`, `time`, `id`) VALUES
('Maths', '10:30:00', 1),
('electronics', '10:30:00', 2),
('biology', '10:30:00', 3),
('Economics', '12:30:00', 4);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `name` varchar(20) NOT NULL,
  `id` varchar(10) NOT NULL,
  `uname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `id`, `uname`) VALUES
('ABC', '123', 'abc'),
('Dips', '143', 'dips'),
('YSV', '777', '10153339012944718');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `usertype` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `usertype`) VALUES
('10153339012944718', 'Sreedhara Murthy', 2),
('716312645179047', 'Deepika Poovaiah', 2),
('988373914546697', 'à²µà²¿à²·à³à²£à³ à²µà³ˆ à²Žà', 1),
('abc', 'abc', 2),
('dips', 'dips', 2),
('tea', 'tea', 1),
('ysv', 'ysv', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attending`
--
ALTER TABLE `attending`
 ADD PRIMARY KEY (`cid`,`sid`), ADD KEY `sid` (`sid`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `uname_2` (`uname`), ADD KEY `uname` (`uname`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`username`), ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `attending`
--
ALTER TABLE `attending`
ADD CONSTRAINT `attending_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `class` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `attending_ibfk_2` FOREIGN KEY (`sid`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`uname`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
