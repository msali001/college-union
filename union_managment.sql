-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 10, 2021 at 04:23 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `union_managment`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `article_id` int(50) NOT NULL,
  `union_id` varchar(50) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `docfile` varchar(500) NOT NULL,
  `textfile` varchar(1000) NOT NULL,
  `privacy` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`article_id`, `union_id`, `student_id`, `type`, `docfile`, `textfile`, `privacy`, `status`) VALUES
(19, '8000', '8001', 'Story', '~/files/11-110247_wolf-png-logo-download-wolf-sticker.png', 'One there is a lion. ', 'Public', 'Published');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `complaint_id` int(50) NOT NULL,
  `complaint` varchar(500) NOT NULL,
  `std_id` varchar(50) NOT NULL,
  `union_id` varchar(50) NOT NULL,
  `reply` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`complaint_id`, `complaint`, `std_id`, `union_id`, `reply`) VALUES
(1, 'Good', '1', '8001', 'pending'),
(2, 'Very Good App', '8001', '8000', 'Future devolopment\r\n '),
(3, 'Hang', '1', '8000', 'Sorry ');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(50) NOT NULL,
  `program_id` varchar(50) NOT NULL,
  `event` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `program_id`, `event`) VALUES
(1, '2000', 'Oppana'),
(2, '2000', 'Kathakali'),
(3, '2000', 'kolkkali'),
(4, '2001', 'Inaguration'),
(5, '2002', 'item1'),
(6, '2002', 'item2'),
(7, '2000', 'fgfgg');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `feedback_id` int(50) NOT NULL,
  `union_id` varchar(50) NOT NULL,
  `std_id` varchar(50) NOT NULL,
  `feedback` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`feedback_id`, `union_id`, `std_id`, `feedback`) VALUES
(1, '8000', '8001', 'Nice App'),
(2, '8000', '1', 'Good');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int(50) NOT NULL,
  `union_id` varchar(50) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `union_id`, `file`) VALUES
(2, '8000', '2018-09-28-15-03-06-709.jpg'),
(4, '8000', '2018-09-28-14-36-15-511.jpg'),
(11, '8000', 'IMG-20190228-WA0189.jpg'),
(12, '8000', 'Screenshot_20190312-202058.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `group_id` int(50) NOT NULL,
  `groupname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`group_id`, `groupname`) VALUES
(1, 'solo'),
(2, 'leoo'),
(3, 'sro'),
(4, 'hyt');

-- --------------------------------------------------------

--
-- Table structure for table `instruction`
--

CREATE TABLE `instruction` (
  `instruction_id` int(50) NOT NULL,
  `instruction` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instruction`
--

INSERT INTO `instruction` (`instruction_id`, `instruction`) VALUES
(1, 'Every one should obey the rules of the college.');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `user_name`, `password`, `type`) VALUES
(1, 'SAFI', '123', 'student'),
(100, 'admin@gmail.com', 'admin123', 'admin'),
(8000, 'union', '1234', 'union'),
(8001, 'MIN123', '123456', 'student'),
(8002, 'SIAQSCS009', '051403', 'student'),
(8003, 'SIAQSCS020', 'fahizfaz', 'student'),
(8004, 'ssf', 'sdfsd', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `magazine`
--

CREATE TABLE `magazine` (
  `magazine_id` int(50) NOT NULL,
  `union_id` varchar(50) NOT NULL,
  `m_name` varchar(50) NOT NULL,
  `file` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `magazine`
--

INSERT INTO `magazine` (`magazine_id`, `union_id`, `m_name`, `file`, `status`) VALUES
(1, '8000', 'ThanaL', 'SIAQSCS015.pdf', 'Granded'),
(2, '8000', 'Armaz', 'nn.pdf', 'Granded');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `members_id` int(50) NOT NULL,
  `union_id` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `register` varchar(50) NOT NULL,
  `mem_name` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `mobile_number` varchar(50) NOT NULL,
  `dp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`members_id`, `union_id`, `position`, `register`, `mem_name`, `department`, `mobile_number`, `dp`) VALUES
(1, '8000', 'vicechairman', '684', 'azff', 'select', '2564854', 'Screenshot from 2021-01-30 22-52-04.png'),
(2, '8000', 'chairman ', '654', 'sunanana', 'M.A.Islamic Studies	', '355', 'index.png');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `notification_id` int(50) NOT NULL,
  `notification` varchar(500) NOT NULL,
  `date` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`notification_id`, `notification`, `date`, `type`) VALUES
(1, 'No class ', '10-12-1396', 'students'),
(2, 'Holiday Starts on 4th April  ', '2019-04-04', 'students');

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `program_id` int(50) NOT NULL,
  `union_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `conducted` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `venue` varchar(50) NOT NULL,
  `guest` varchar(50) NOT NULL,
  `events` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`program_id`, `union_id`, `name`, `conducted`, `date`, `time`, `venue`, `guest`, `events`, `status`) VALUES
(2000, '8000', 'union inaguration', 'Union', '2019-04-08', '05:55', 'Hall', 'Fasil', 'yes', 'Posted'),
(2001, '8000', 'College Day', 'Union', '2019-04-26', '12:00', 'Seminar Hall', 'Fahadh Fazil', 'yes', 'Posted'),
(2002, '8000', 'arts', 'Union', '2019-04-18', '02:03', 'hall', 'shh', 'yes', 'Granded');

-- --------------------------------------------------------

--
-- Table structure for table `program_applyer`
--

CREATE TABLE `program_applyer` (
  `program_applyer_id` int(50) NOT NULL,
  `program_id` varchar(50) NOT NULL,
  `event_id` varchar(50) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program_applyer`
--

INSERT INTO `program_applyer` (`program_applyer_id`, `program_id`, `event_id`, `student_id`, `status`) VALUES
(7, '2000', '3', '1', 'Applied'),
(8, '2000', '1', '1', 'Applied');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `result_id` int(50) NOT NULL,
  `event_id` varchar(50) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `std_group` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`result_id`, `event_id`, `student_id`, `status`, `std_group`) VALUES
(1, '4', '8001', 'first', 'solo'),
(2, '4', '8002', 'second', 'leoo'),
(3, '4', '8003', 'third', 'hyt');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(50) NOT NULL,
  `register` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `register`, `name`, `department`, `year`, `gender`, `dob`, `email`, `dp`) VALUES
(1, 'SAFI123', 'Shibil pk', 'B.Sc.Food Science and Technology', '1st Year', 'male', '16-4-2019', 'shibilpk@hotmail.com', ''),
(8001, 'MIN123', 'Minhas', 'B.Com with Finance', '2nd Year', 'female', '15-4-2019', 'shibilpk@hotmail.com', ''),
(8002, 'SIAQSCS009', 'Fariz Mohammed', 'BSc.Computer Science', '3rd Year', 'male', '12-10-1998', 'farizmohmd@gmail.com', ''),
(8003, 'SIAQSCS020', 'Shobika', 'BSc.Computer Science', '3rd Year', 'female', '8-4-1997', 'fahizfaz@gmail.com', ''),
(8004, 'dsfsf', 'asfadf', 'sfsdfs', 'firstsfsd', 'sdfsdf', '1997-12-12', 'sdfsdf', 'sdfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `union`
--

CREATE TABLE `union` (
  `union_id` int(50) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `adviser` varchar(50) NOT NULL,
  `chairman` varchar(50) NOT NULL,
  `vice_chairman` varchar(50) NOT NULL,
  `secretary` varchar(50) NOT NULL,
  `join_secretary` varchar(50) NOT NULL,
  `uuc_1` varchar(50) NOT NULL,
  `uuc_2` varchar(50) NOT NULL,
  `finearts` varchar(50) NOT NULL,
  `editor` varchar(50) NOT NULL,
  `general_captain` varchar(50) NOT NULL,
  `1_dc` varchar(50) NOT NULL,
  `2_dc` varchar(50) NOT NULL,
  `3_dc` varchar(50) NOT NULL,
  `pg_rep` varchar(50) NOT NULL,
  `biotech` varchar(50) NOT NULL,
  `foodtech` varchar(50) NOT NULL,
  `micro` varchar(50) NOT NULL,
  `commerce` varchar(50) NOT NULL,
  `management` varchar(50) NOT NULL,
  `cs` varchar(50) NOT NULL,
  `mcj` varchar(50) NOT NULL,
  `economics` varchar(50) NOT NULL,
  `i_s` varchar(50) NOT NULL,
  `i_f` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `union`
--

INSERT INTO `union` (`union_id`, `u_name`, `year`, `adviser`, `chairman`, `vice_chairman`, `secretary`, `join_secretary`, `uuc_1`, `uuc_2`, `finearts`, `editor`, `general_captain`, `1_dc`, `2_dc`, `3_dc`, `pg_rep`, `biotech`, `foodtech`, `micro`, `commerce`, `management`, `cs`, `mcj`, `economics`, `i_s`, `i_f`) VALUES
(8000, 'union2', '2021-04-23', 'jamseel', 'fariz', 'dfdfs', 'g', 'yguy', 'uygguyg', 'yttuy', 'uyuyu', 'uyffu', 'uyf', 'yf', 'yuuy', 'yu', 'fy', 'yuff', 'yfy', 'uygg', 'uyfyf', 'uyuyff', 'yufy', 'uyf', 'yf', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`complaint_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `instruction`
--
ALTER TABLE `instruction`
  ADD PRIMARY KEY (`instruction_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `magazine`
--
ALTER TABLE `magazine`
  ADD PRIMARY KEY (`magazine_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`members_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`program_id`);

--
-- Indexes for table `program_applyer`
--
ALTER TABLE `program_applyer`
  ADD PRIMARY KEY (`program_applyer_id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`result_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `union`
--
ALTER TABLE `union`
  ADD PRIMARY KEY (`union_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `article_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `complaint_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `feedback_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `magazine`
--
ALTER TABLE `magazine`
  MODIFY `magazine_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `members_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `notification_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `program_applyer`
--
ALTER TABLE `program_applyer`
  MODIFY `program_applyer_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `result_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8005;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
