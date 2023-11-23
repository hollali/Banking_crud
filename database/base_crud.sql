-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2023 at 04:12 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `base_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(1) NOT NULL,
  `username` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `IdNum` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `amount` varchar(9) NOT NULL,
  `tot` enum('Saving','Loan') NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `username`, `mobile`, `gender`, `IdNum`, `email`, `amount`, `tot`, `photo`) VALUES
(1, 'Francis Kobina Kobla', '0555622655', 'male', 'GH-0555622655', 'franciskobina@gmail.com', '1,800', 'Saving', 'WhatsApp Image 2023-02-10 at 23.33.04 (3).jpeg'),
(4, 'Evans Davidson', '0555622655', 'male', 'GH-0555622655', 'evansdavis@gmail.com', '20,000', 'Saving', 'IMG_1514.JPG'),
(5, 'Fredrick Simons', '0243234567', 'male', 'GH-750243234567', 'fredricksimons@gmail.com', '1,550', 'Saving', 'WhatsApp Image 2023-02-10 at 23.32.35 (16).jpeg'),
(6, 'Jerry Adom', '0243234567', 'male', '0243234567', 'jerryadom@gmail.com', '30,000', 'Loan', 'WhatsApp Image 2023-02-10 at 23.31.53 (17).jpeg'),
(8, 'Kelvin Hollali', '0244632677', 'male', 'GH-474787858', 'dheztinykartel@gmail.com', '34,000', 'Saving', 'hollali.jpeg'),
(9, 'Elise Gyan', '0243658652', 'female', 'GH-50243658652', 'cosmosauthur@gmail.com', '4,899', 'Loan', 'WhatsApp Image 2023-02-10 at 23.31.53 (17).jpeg'),
(10, 'Glory Danso', '0542192029', 'female', 'GH-047735784768', 'glorianadanso@gmail.com', '45,000', 'Saving', 'photo_2020-09-30_21-12-47 (2).jpg'),
(11, 'David Ryan', '0244632677', 'male', 'GH-907746807', 'davidryan@gmail.com', '30,000', 'Loan', 'plane2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `address` varchar(100) NOT NULL,
  `amount` varchar(6) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `username`, `email`, `mobile`, `gender`, `address`, `amount`, `photo`) VALUES
(1, 'Francis Kobina Kobla', 'franciskobina@gmail.com', '0555622655', 'male', 'Amasaman', '1,800', 'GMJH2619.JPG'),
(2, 'Kelvin Hollali Quarshie', 'dheztinykartel@gmail.com', '0244632677', 'male', 'Adenta', '2,500', 'hollali.jpeg'),
(3, 'Jane Anne ', 'janeanne@gmail.com', '0506635218', 'female', 'Pokuase', '1,000', ''),
(4, 'Ama Addo', 'amaaddo@gmail.com', '0243234567', 'female', 'Madina', '1,500', ''),
(5, 'John Samson', 'johnsason@gmail.com', '024658789', 'male', 'Taifa', '1,500', ''),
(6, 'Kofi Antwi', 'kofiantwi@gmail.com', '0244654687', 'male', 'Achimota', '2,000', ''),
(7, 'Gloria Twum', 'gloriatwum@gmail.com', '0506523780', 'female', 'Pokuase', '1,200', ''),
(10, 'John Gatey', 'johngatey@gmail.com', '0243567849', 'male', 'Pokuase', '2,100', ''),
(11, 'Gladys James', 'gladysannelee@gmail.com', '0234651209', 'female', 'Achiman', '1,200', ''),
(12, 'Kate Tom', 'katetom@gmail.com', '023458767465', 'female', 'Taifa', '1,340', 'DZZT8008.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
