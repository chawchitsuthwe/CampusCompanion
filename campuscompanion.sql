-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3310
-- Generation Time: Nov 14, 2020 at 07:33 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `campuscompanion`
--

-- --------------------------------------------------------

--
-- Table structure for table `clubs`
--

CREATE TABLE `clubs` (
  `club_id` int(11) NOT NULL,
  `club_name` varchar(100) DEFAULT NULL,
  `club_logo` varchar(50) DEFAULT NULL,
  `president` varchar(50) DEFAULT NULL,
  `facebook_link` varchar(150) DEFAULT NULL,
  `time` varchar(50) DEFAULT NULL,
  `aim` text DEFAULT NULL,
  `activities` text DEFAULT NULL,
  `phno` varchar(50) DEFAULT NULL,
  `mail` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clubs`
--

INSERT INTO `clubs` (`club_id`, `club_name`, `club_logo`, `president`, `facebook_link`, `time`, `aim`, `activities`, `phno`, `mail`) VALUES
(1, 'Photography Club', 'ytuphotographyclub2.jpg', 'Hlaing Min Aung', '#', '1 PM - 3 PM (Every Wednesday)', 'We aim to encourage the students who are interested in photography to get better and better and increase creativity.', 'In Photography Club,we share information about Photography Knowledge, Lighting Techniques, Editing Skills, How to Use a DSLR/Mirrorless Camera Properly and go outdoor photo shootings.\r\nBy the way, you don\'t need to own a Camera to join this club.', '0912345689', 'hlaingminaung@gmail.com'),
(2, 'Art Club', 'ytuartclublogo.jpg', NULL, '', '1pm-4pm (Every Wednesday)', 'For those who are attending in a Engineering university but still have an interest in Art to cultivate one\'s own hobby & skills to find Inner peace through Art.Last but not least, if one has the decision to live on as an Artist after graduation, for him to have had in touch with those who already started a step in the Art field.', 'YTU Art Club for those students who are interested in Art especially in the fields of drawing & painting.', NULL, NULL),
(3, 'Badminton Club', 'ytubadmintonclublogo.jpg', NULL, '', '1pm-4pm (Every Wednesday)', 'To be a fun, addordable , social and competitive Badminton Club for all YTUers.', 'Badminton is inclusive to all genders and levels of experience.There is also an annual university badminton tournament.The club welcomes members from YTU.', NULL, NULL),
(4, 'Basketball Club', 'ytubballclublogo.jpg', NULL, '', '3:30-5pm(on Mon & Fri),2-4pm(on Wed)', 'To help improve the students\' unity and the strength of both body and mind.To hand down Basketball to younger generations and make the team grow bigger and stronger.', 'Anyone who are interested in sports can join.For those who love basketball is a must! Basic basketball skills will be taught to beginners and players who already know basketball will have trainings to make them stronger and more skillful.\r\nThe seniors are really friendly and it is really fun to learn baskerball with friends.\r\nSo don\'t hesitate to join!\r\n#YTU_Basketaball\r\n#Stronger_everyday', NULL, NULL),
(5, 'Chess Club', 'ytuchessclublogo.jpg', NULL, '', '1-4pm (on Wed)', 'The Club intended to gather,unite and make environment to play Chess for the students in YTU and later on, to improve their Chess.', 'The Club normally opens in every Wednesday from 1 to 4 pm. There can be other extra activity times.\r\nStudents who are not only interested in Chess but also want to have fun and make friends by playing Chess should come and join YTU Chess Club.', NULL, NULL),
(6, 'Dance Club', 'ytudclogo.jpg', NULL, '', '1-5pm (on Wed)', 'To encourage students with talent and passion for dance and to let students have fun experience while giving out outstanding performances.', 'Every Wednesday 1pm - 5pm (occasional dance lessons from professional dancers)\r\nEvery YTUian who is curious enough to know how it is like to dance not only as individuals but also as a team.\r\nHave Fun!!!', NULL, NULL),
(7, 'Literature Association', 'ytuliteratureassociationlogo.jpg', NULL, '', '1-3pm (on Wed)', 'YTULA aims students to install a habit of knowing literature as an institution.', 'YTU Literature Association(YTULA) is an association consists a group of YTU students who are passionate about literature.YTULA is recently holding many poetry/literature workshops, literature talks, discussion and open mics. YTULA has published Mechanics,Mechan 2 and M3CHANICS poem books in which writings of YTU students can be seen.', NULL, NULL),
(8, 'Swimming Club', 'ytuswimmingclublogo.jpg', NULL, '', '7:30-9am (on Sat & Sun)', 'We aim for participating in Interuniversity Swimming Competition. We also have our own annual competition in YTU.', 'In this club, we teach you how to swim starting from the basics.If you already know how to swim, we train you to become faster and have the correct swimming style(such as ButterFly).\r\nAnyone who likes to swim are welcomed.\r\nSat Sun 7:30am - 9 am at Sein Lan So Pyay Swimming Pool', NULL, NULL),
(9, 'Tennis Club', 'ytutennisclublogo.jpg', NULL, '', 'On Wed,Thur,Sat,Sun', 'To help students with an interest in tennis develop their tennis skills.', 'A club for tennis beginners and enthusiasts.\r\nStudents who are interested to pick up a new sport and keen to know more about tennis.', NULL, NULL),
(10, 'YTU Women Football Club', 'ytuwomenfootballteamlogo.jpg', NULL, '', '4-5:30pm(on Wed,Thur,Fri)', 'To represent as YTU in Inter University Football matches and invitational cup.To prove that we are students with balance physical and mental wellness.', 'YTU WFC was founded on June,2017.Now, we participated in many invitational tournaments and we do friendly matches with other universities frequently.', NULL, NULL),
(11, 'Boat Club', 'ytuboatclub.jpg', NULL, '', NULL, NULL, NULL, NULL, NULL),
(12, 'English Club', 'ytuenglishclublogo.jpg', NULL, '', NULL, NULL, NULL, NULL, NULL),
(13, 'Hiking Club', 'ytuhikingclub.jpg', NULL, '', NULL, NULL, NULL, NULL, NULL),
(14, 'History Club', 'ytuhistoryclublogo.jpg', NULL, '', NULL, NULL, NULL, NULL, NULL),
(15, 'Music Club', 'ytumusicclublogo.jpg', NULL, '', NULL, NULL, NULL, NULL, NULL),
(16, 'YTU Performance Club', 'ytupclublogo.jpg', NULL, '', NULL, NULL, NULL, NULL, NULL),
(17, 'Science and Technology Association', 'cst2.jpg', NULL, '', NULL, NULL, NULL, NULL, NULL),
(18, 'YTU Men Football Club', 'ytumenfootballteamlogo.jpg', NULL, '', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `photo_storage`
--

CREATE TABLE `photo_storage` (
  `club_id` int(11) DEFAULT NULL,
  `photo_file` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rating_data`
--

CREATE TABLE `rating_data` (
  `club_id` int(11) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating_data`
--

INSERT INTO `rating_data` (`club_id`, `rating`) VALUES
(1, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clubs`
--
ALTER TABLE `clubs`
  ADD PRIMARY KEY (`club_id`);

--
-- Indexes for table `photo_storage`
--
ALTER TABLE `photo_storage`
  ADD KEY `photo_storage_ibfk_1` (`club_id`);

--
-- Indexes for table `rating_data`
--
ALTER TABLE `rating_data`
  ADD KEY `rating_data_ibfk_1` (`club_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clubs`
--
ALTER TABLE `clubs`
  MODIFY `club_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `photo_storage`
--
ALTER TABLE `photo_storage`
  ADD CONSTRAINT `photo_storage_ibfk_1` FOREIGN KEY (`club_id`) REFERENCES `clubs` (`club_id`);

--
-- Constraints for table `rating_data`
--
ALTER TABLE `rating_data`
  ADD CONSTRAINT `rating_data_ibfk_1` FOREIGN KEY (`club_id`) REFERENCES `clubs` (`club_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
