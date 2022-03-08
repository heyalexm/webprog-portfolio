-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2022 at 03:56 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `fullname` varchar(220) NOT NULL,
  `nickname` varchar(220) NOT NULL,
  `birthdate` date NOT NULL,
  `emailfrom` varchar(220) NOT NULL,
  `hobbies` longtext NOT NULL,
  `comments` longtext NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `fullname`, `nickname`, `birthdate`, `emailfrom`, `hobbies`, `comments`, `reg_date`) VALUES
(1, 'Adrian T. Martin', 'Adrian', '2012-04-10', 'adrianmartinves10@gmail.com', 'Playing Chess and Uno cards.', 'Nice website kuya :)', '2022-03-04 16:08:31'),
(2, 'Baifern Pimchanok', 'Fern', '1992-09-30', 'baifernp@yahoo.com', 'Acting, dancing, singing and vlogging.', 'Nice layout of website :>', '2022-03-04 16:11:37'),
(3, 'Will Smith', 'Will', '1968-09-25', 'willsmith@gmail.com', 'Acting, rapping, and playing chess.', 'Nice website', '2022-03-08 02:05:47'),
(4, 'Jason Statham', 'Jason', '1967-07-26', 'jasonstatham@yahoo.com', 'Chinese martial arts, kickboxing, karate, and acting.', 'Good looking website.', '2022-03-08 02:07:56'),
(5, 'Angelina Jolie', 'Angelina', '1975-06-04', 'angelinajolie@gmail.com', 'Acting, dancing, traveling, blogging, modeling, and many more.', 'This is a unique and cool website.', '2022-03-08 02:09:28'),
(6, 'Anne Hathaway', 'Annie', '1982-11-12', 'annehathaway@yahoo.com', 'Listening to Music, Fashion, Acting, Watching Movies, Hanging with Friends.', 'This is a cool website. I liked your color combination.', '2022-03-08 02:20:44');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `info` longtext NOT NULL,
  `image` varchar(220) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `title`, `info`, `image`, `reg_date`) VALUES
(1, 'My SHS Family', 'My solid 5-year friendships with the people in the picture.  This is my Junior and Senior high school tropa which I am proud to be a part of. ATIST', 'images/IMG_20210329_082452_476.jpg', '2022-03-04 10:45:01'),
(2, 'Scenery Image', 'This is one of my favorite pictures that I have taken during my vacation in our province. I have edited it right now with photoshop to enhance the quality it shows. The trees seem calm and I think anyone can enjoy hearing the gentle rustling of leaves.  Just seeing the picture takes me back to my younger years and makes me reminisce the good old memories I have with my grandparents and childhood friends. ', 'images/trees.jpeg', '2022-03-05 10:33:32'),
(3, 'New York', 'I think this is one of my favorite desktop wallpaper of all time. It is a simple yet overwhelming view that shouts a thousand different ideas and stories. I believe this is where many idealistic yet unique people thrived making a name for themselves. Well, I hope someday I can visit this famous place, maybe a decade later.', 'images/jonas-elia-x6HHgq2zDvI-unsplash.jpg', '2022-03-08 02:27:06'),
(4, 'Cars', 'I manifest that I will be able to buy this same type of car, an AUDI AWD A6 in the future when I achieve my lifelong dreams and managed my finances and budget wisely.', 'images/audi-a6-e-tron-3840x2160_785488-mm-90.jpg', '2022-03-08 02:30:45'),
(5, 'Family Picture [Elementary]', 'I was just browsing the gallery of my first laptop when I saw this picture, it made me look back on the day when I was graduating elementary as the class Valedictorian. This picture was taken back in the year 2013 after I delivered my graduation speech. Looking at myself now, I believe I made my younger self prouder of what I am right now working towards the things that I want in life.', 'images/fampic.jpg', '2022-03-08 02:36:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
