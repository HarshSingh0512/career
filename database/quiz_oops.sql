-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2021 at 03:39 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz_oops`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(4) NOT NULL,
  `cat_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`) VALUES
(1, 'Faculty of Science '),
(2, 'Faculty of Arts '),
(3, 'Faculty of Computer Science '),
(4, 'Faculty of Commerce ');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `city_name`) VALUES
(1, 'Lucknow'),
(2, 'Chennai');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_name`) VALUES
(1, 'B.tech'),
(2, 'BBA');
(3, ' B.Sc');
(4, 'B.com');
(5, 'B.A');
(6, 'B.Pharma');
-- --------------------------------------------------------

--
-- Table structure for table `jobfinder`
--

CREATE TABLE `jobfinder` (
  `id` int(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `jobs` varchar(255) NOT NULL,
  `jobs2` varchar(255) NOT NULL,
  `jobs4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobfinder`
--

INSERT INTO `jobfinder` (`id`, `course`, `job`, `jobs`, `jobs2`, `jobs4`) VALUES
(1, 'B.Tech', 'Web developer', 'Data Analyst', 'Software developer', 'Cloud Engineer');
(2, 'BBA', 'HRM', 'Bank Manager', 'Finance Manager', 'Product Manager'),
(3, 'B.Sc' , 'Research Scientist','Lab Technician','Assistant Professor ','Mathematician')
(4, 'B.com' , 'Chartered Accountant','Investment Banker','Stock Broker','Insurance agent')
(5, 'B.A' , 'Administrative Services','Journalist','Psychologist','Writer')
(6, 'B.Pharma' , 'Pharmacist','Chemist','Medical representative','Clinic Manager')s




-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `ans1` varchar(80) NOT NULL,
  `ans2` varchar(80) NOT NULL,
  `ans3` varchar(80) NOT NULL,
  `ans4` varchar(80) NOT NULL,
  `ans` int(4) NOT NULL,
  `cat_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `ans1`, `ans2`, `ans3`, `ans4`, `ans`, `cat_id`) VALUES
(13, 'Who is the father of computer?', 'Allen Turing', 'Simur Cray', 'Charles Babbage', 'Augusta Adaming', 3, 1),
(14, 'The basic operation performed by a computer are ----?', 'Arithmetic ', 'Logical operation', 'Storage and relative', 'All of the above', 3, 1),
(15, 'WWW stand for -------? ', 'world whole Web', 'Wide World Web', 'Web World Wide', 'World Wide Web', 3, 1),
(16, 'If computer has more then one processor then it is known as ------?', 'Uni-process ', 'Multiprocessor ', 'Multi- threaded ', 'Multi-programming ', 1, 1),
(17, 'Gigabyte is equal to-----?', '1024 bit', '1000 megabytes', '1024 killobytes', '1024 megabytes', 2, 1),
(18, 'The brain of  any computer  system is   ------?', 'ALU', 'memory', 'CPU', 'control unit ', 2, 1),
(19, 'VGA is  -------------?', 'Video Graphics Array', 'Visual Graphics Array', 'Volatile Graphic Array', 'Video Graphic Adapter', 1, 1),
(20, 'Which is the largest gland in the human body?', 'Thyroid', 'Liver', 'Pancreas ', 'None of these ', 1, 1),
(21, 'The scientific study of living is called ? ', 'Anatomy', 'Biology', 'Geology', 'Zoology', 3, 1),
(22, 'Human blood is an example of -----------?', 'Organelle', 'Tissues', ' Organ System', 'Cells ', 3, 1),
(24, 'Which of the following is an example of  &quot;molecule&quot;? ', 'chloroplast', 'A Neuron cell', 'DNA', 'Hydrogen', 2, 1);
(25, 'The capital market in India is controlled by?', 'RBI', 'NABARD', 'SEBI', 'IRDA', 2, 1),
(26, '  How many companies are included in the BSE Sensex----?', '25 ', '30', '50', '111', 3, 1),
(27, 'Liberalization means-------? ', 'Free determination of interest rates

', ' Liberating the industry, trade and economy from unwanted restrictions', ' Opening up of economy to the world by attaining international competitiveness', ' Opening up of economy to the world by attaining international competitiveness', 3, 1),
(28, 'Which among these can be the condition for the success of privatisation ------?', 'Measurability of performance', 'Alternative institutional arrangements ', 'Alternative institutional arrangements ', ' All of the above', 1, 1),
(29, 'Mahatma Gandhi returned to India in-----?', 'January, 1916', 'January, 1915', 'March, 1921

', 'April, 1917', 2, 1),
(30, ' The last Mughal emperor was------?', 'Aurangzeb', 'Shaista Khan', 'Muhammed Khan', 'Bahadur Shah Zafar ', 2, 1),
(31, 'Which one of the following type of resource is iron ore?  -------------?', 'Renewable', 'Biotic', 'Flow', 'Non-Renewable', 1, 1),
(32, 'In which of the following states is black soil found?', 'Uttar Pradesh', 'Gujrat', 'Rajasthan ', 'Tamil Nadu ', 1, 1),
(33, 'Some fruits like mango, lemon, raw grapes, orange, etc., have a sour taste due to the presence of ? ', 'Acetic Acid', 'Citric Acid', 'Lactic Acid', 'Oxalic acid', 3, 1),
(34, 'Bleaching powder is used as a disinfectant for water to: -----------?', 'Make water tastier', ' Remove all the dirt from water', 'Make water germ-free ', 'Make water clear ', 3, 1),
(35, 'The north pole of Earth’s magnet is in the:;? ', 'Geographical South', 'Geographical East', ' Geographical West', 'Geographical North', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `email`, `pass`, `img`) VALUES
(1, 'Harsh', 'abcd@gmail.com', '123456', 'IMG_20160505_195500_HDR.jpg'),
(2, 'Shivansh', 'abcd@gmail.com', '123456', 'Chrysanthemum.jpg'),

-- --------------------------------------------------------

--
-- Table structure for table `universities`
--

CREATE TABLE `universities` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `course_id` varchar(255) NOT NULL,
  `city_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `universities`
--

INSERT INTO `universities` (`id`, `name`, `course_id`, `city_id`) VALUES
(1, 'Amity', 'B.tech', 'Lucknow'),
(2, 'SRM', 'B.tech', 'Chennai');
(3, 'Bits Pilani', 'B.tech', 'Pilani');
(4, 'Vit', 'B.tech', 'Chennai');
(5, 'Manipal', 'B.tech', 'Manipal');



--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobfinder`
--
ALTER TABLE `jobfinder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `universities`
--
ALTER TABLE `universities`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobfinder`
--
ALTER TABLE `jobfinder`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `universities`
--
ALTER TABLE `universities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
