-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 14, 2023 at 12:06 AM
-- Server version: 5.6.51
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalz`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` int(150) NOT NULL,
  `gender` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `purpose` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `telephone`, `gender`, `country`, `purpose`, `subject`, `comment`) VALUES
('joseph abj', 'joeabj@email.com', 3277267, '0', 'Armenia', 'question', 'any business idea?', 'i\'m intrested in your website\r\n'),
('marven younes', 'mfyounes@ndu.edu.lb', 81271865, '0', 'Lebanon', 'bug', 'you have a bug', 'you have a bug in your website'),
('efwfw', 'mfyounes@ndu.edu.lb', 10924781, 'Female', 'Albania', 'comments', 'ffewfwf', 'nice website');

-- --------------------------------------------------------

--
-- Table structure for table `credentials`
--

CREATE TABLE `credentials` (
  `username` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `credentials`
--

INSERT INTO `credentials` (`username`, `password`, `email`) VALUES
('myadmin', 'bd9a07b48444ee194da91421c03bb627bffc12dcae04201b947f61787fc928ea', 'myadmin@admin.com'),
('myounes', '7bba4ac8b0caceee298c5654fb18977e559e2683b1cd26d6b7482eb154cb626b', 'mfyounes@ndu.edu.lb\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `img` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `img`) VALUES
(1, '\"The Government\'s Ambitious Infrastructure Revitalization Plan\"', '1- The government\'s unveiling of an ambitious infrastructure plan has set in motion a comprehensive strategy aimed at revitalizing the nation\'s economy. Through strategic investments in various transportation and communication networks, the plan seeks to not only stimulate economic growth but also address long-standing infrastructural gaps. With a focus on enhancing connectivity and promoting efficient movement of goods and services, the initiative represents a crucial step toward fostering a more interconnected and competitive economy, poised to meet the demands of a rapidly evolving global marketplace.\r\n\r\n', ''),
(2, '\"The recent launch of a cutting-edge AI-powered virtual assistant\"', '2- The recent launch of a cutting-edge AI-powered virtual assistant by a prominent tech giant has generated significant excitement within the technology community. Designed to streamline and optimize daily tasks, the virtual assistant boasts a sophisticated interface that integrates seamlessly with various devices and platforms. Leveraging advanced AI algorithms, the assistant offers users a personalized and intuitive experience, revolutionizing the way individuals interact with technology and transforming the landscape of digital assistance and support services.', ''),
(3, '\"The release of a recent cancer study has sparked\"', '3- The release of a recent cancer study has sparked renewed hope and optimism in the fight against the devastating disease. Offering a fresh perspective on potential treatment methods, the study\'s findings have underscored the importance of continued research and innovation in the field of oncology. With its emphasis on exploring novel approaches to combating cancer, the study has positioned itself as a cornerstone in the ongoing efforts to improve patient outcomes and advance the understanding of cancer\'s complex nature and behavior.', ''),
(4, '\"The announcement of a celebrity engagement has set social media abuzz\"', '4 - The announcement of a celebrity engagement has set social media abuzz, with fans and followers expressing their heartfelt congratulations to the beloved couple. The joyous news, shared across various online platforms, has captured the public\'s attention, eliciting an outpouring of support and well-wishes for the couple\'s future together. As the couple embarks on this new chapter in their lives, their love story serves as a source of inspiration and joy for countless admirers around the world.', ''),
(5, '\" A sense of jubilation and triumph permeated the atmosphere\"', '5- A sense of jubilation and triumph permeated the atmosphere as the local sports team secured a dramatic win in a highly anticipated championship game. The team\'s unwavering determination and perseverance were on full display as they navigated a challenging and fiercely competitive match, ultimately emerging victorious in an exhilarating overtime showdown. The win not only solidified their status as formidable competitors but also served as a testament to the power of teamwork and resilience in the face of adversity.', ''),
(6, '\"global leaders at a high-stakes summit\"', '6- The recent convening of global leaders at a high-stakes summit underscored the critical importance of international cooperation in addressing pressing security challenges. Against a backdrop of complex geopolitical tensions and emerging threats, the summit provided a platform for constructive dialogue and strategic negotiations, emphasizing the need for collaborative efforts in promoting peace, stability, and diplomatic relations on a global scale. With its focus on fostering unity and understanding, the summit highlighted the significance of collective action in navigating an increasingly interconnected and interdependent world.', ''),
(7, '\"Environmental experts have issued urgent warnings about the deteriorating air quality in urban areas\"', '7- Environmental experts have issued urgent warnings about the deteriorating air quality in urban areas, citing the detrimental impact of rapid industrialization and urban development on public health and the environment. With pollution levels reaching alarming heights, experts have stressed the pressing need for comprehensive and sustainable solutions to curb further environmental degradation and mitigate the adverse effects of air pollution. By advocating for stricter regulations and proactive measures, experts hope to raise awareness and mobilize efforts to safeguard the well-being of communities and preserve the natural environment for future generations.', ''),
(8, '\"Educational institutions are embracing innovative learning approaches\"', '8- Educational institutions are embracing innovative learning approaches and programs aimed at fostering holistic development and personalized learning experiences for students. By prioritizing interactive and student-centered teaching methods, schools are aiming to cultivate critical thinking skills, creativity, and a lifelong passion for learning among students of all ages and backgrounds. With a focus on empowering students to become adaptable and forward-thinking individuals, the education sector is evolving to meet the demands of a rapidly changing global landscape and preparing students for success in the 21st century.', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD KEY `contact` (`name`) USING BTREE;

--
-- Indexes for table `credentials`
--
ALTER TABLE `credentials`
  ADD UNIQUE KEY `username_idx` (`username`),
  ADD UNIQUE KEY `email_idx` (`email`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
