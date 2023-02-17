-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2023 at 12:04 PM
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
-- Database: `curios`
--

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `people_id` int(11) NOT NULL,
  `proj_title` text NOT NULL,
  `proponents` text NOT NULL,
  `fund_source` text NOT NULL,
  `proj_duration` text NOT NULL,
  `funds_alloc` text NOT NULL,
  `sector` text NOT NULL,
  `contact` text NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`people_id`, `proj_title`, `proponents`, `fund_source`, `proj_duration`, `funds_alloc`, `sector`, `contact`, `comment`) VALUES
(1, 'Development of Data Analytics and Information System: Support on Social Welfare Services for Senior Citizens of Butuan City (Project #9100)', 'Data Science and Analytics Center (Dr. Eltimar T. Castro Jr.)', 'DOST-PCIEERD', '24 months (approved December 18, 2020 - December, 2022 On-going)', '4,999,050.00', 'IEET', '9090909', ''),
(4, 'FSUU Biodiversity  Informatics and Research Center', 'Biodiversity and Informatics Center', 'CHED-K to 12 Transition Program-IDIG', 'Still Operating', '10,624,000.00', 'NIBRA', '40000', ''),
(5, 'Factors Associated with Acceptability of Mass Drug Administration for Morbidity Control of Schistosomiasis in Butuan City, Philippines', 'Ms. Nathalie M. Fat, Ms. Olivia L.  Asendente, Nursing Program', 'DOST-PCHRDC', 'August 2018 - present', '448,920.00', 'Health', 'Ms. Nathalie M. Fat', ''),
(8, 'Human-Induced Disasters and Conflict Development: Policy Options for Mining Communities in Caraga Region', 'Community Involvement and Advocacy (Mr. Jeffrey A. Carin)', 'Bantay Kita-USAID', 'July 2021-March 2022', '700,000.00', 'DRR-CCA', '', ''),
(11, 'Sustainable Livelihood Guide for Indigenous People Mining Communities', 'Community Involvement and Advocacy', 'Bantay Kita-USAID', 'July 2021 - March 2022', '(part of the 700,000.00)', 'NIBRA', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `username`, `email`, `phone`, `password`) VALUES
(2, 'Oscar Kim', 'Oca', 'oscarkim.oca', 'ocaoscar56@gmail.com', '09071962701', 'helloworld');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`people_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `people_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
