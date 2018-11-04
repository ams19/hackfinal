-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2018 at 10:30 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hack`
--

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE `donate` (
  `id` int(200) NOT NULL,
  `name` varchar(10000) NOT NULL,
  `school` mediumtext NOT NULL,
  `money` int(11) NOT NULL,
  `book` varchar(10000) NOT NULL,
  `sports` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`id`, `name`, `school`, `money`, `book`, `sports`) VALUES
(1, '', 'gdgicbui@gmail.com', 10000, '', ''),
(2, 'aditya', 'gdgicbui@gmail.com', 1000, '', ''),
(3, 'aditya', 'ad@gmail.com', 12234, '', ''),
(4, 'aditya', 'ggsicasr@gmail.com', 0, '', ''),
(5, 'aditya', 'ggsicasr@gmail.com', 0, '', ''),
(6, 'aditya', 'ad@gmail.com', 0, 'jhkkjgkgk', ''),
(7, 'aditya', 'ad@gmail.com', 0, '', ' dggfhfh'),
(8, '', 'ad@gmail.com', 0, '', ''),
(9, '', 'ad@gmail.com', 0, '', ''),
(10, '', 'ad@gmail.com', 0, '', ''),
(11, 'aditya', 'ad@gmail.com', 12222, '', ''),
(12, 'aditya', 'gpsgzb@gmail.com', 1223, '', ''),
(13, 'aditya', 'ad@gmail.com', 2, '', ''),
(14, 'aditya', 'ad@gmail.com', 100000, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `snum` int(11) NOT NULL,
  `id` mediumtext NOT NULL,
  `post` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`snum`, `id`, `post`) VALUES
(1, 'ad@gmail.com', 'aditya\r\n'),
(2, 'ad@gmail.com', 'aditya\r\n'),
(3, 'ad@gmail.com', 'Require Money for infrastructure.'),
(4, 'ad@gmail.com', 'anmol '),
(5, 'nit@gmail.com', '\r\nRequire faculty for OS,material science,vlsi.\r\nrequire replacement for NEETU SOOD'),
(6, 'ad@gmail.com', '\r\n'),
(7, '', '\r\n'),
(8, '', '\r\n'),
(9, 'ad@gmail.com', '\r\nhello');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `Name` text NOT NULL,
  `School_ID` varchar(20) NOT NULL,
  `State` text NOT NULL,
  `District` text NOT NULL,
  `Acc_No` varchar(20) NOT NULL,
  `Phone` bigint(10) NOT NULL,
  `Password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`Name`, `School_ID`, `State`, `District`, `Acc_No`, `Phone`, `Password`) VALUES
('Aditya Nath Jha Government Inter College', 'anjhagicrupc@gmail.c', 'Uttarakhand', 'Rudrapur', '256690908477', 9895928250, '81dc9bdb52d04dc20036dbd8313ed055'),
('Abdul Ramaiya Public School', 'arpsrkr@gmail.com', 'Uttarakhand', 'Roorkee', '756678451212', 9005684555, '202cb962ac59075b964b07152d234b70'),
('Bal Bharti Inter College', 'bbicrupc@gmail.com', 'Uttarakhand', 'Rudrapur', '554469693211', 8267908407, '81dc9bdb52d04dc20036dbd8313ed055'),
('Bholanath Government Inter College', 'bgicalld@gmail.com', 'Uttar Pradesh', 'Allahabad', '210045151233', 7800047430, '827ccb0eea8a706c4c34a16891f84e7b'),
('	\r\nB-K High School', 'bkasr@gmail.com', 'Punjab', 'Amritsar', '243546465750', 9690990580, '202cb962ac59075b964b07152d234b70'),
('B.N Khalsa Senior Secondary School', 'bnkssspta@gmail.com', 'Punjab', 'Patiala', '145565465200', 9340412256, '202cb962ac59075b964b07152d234b70'),
('Central Hindu Girls School', 'chgsbsb@gmail.com', 'Uttar Pradesh', 'Varanasi', '326696964581', 9917360931, '202cb962ac59075b964b07152d234b70'),
('Chandra Shaikhar Public School', 'cspsrkr@gmail.com', 'Uttarakhand', 'Roorkee', '900128786354', 9548463646, '202cb962ac59075b964b07152d234b70'),
('Gulab Devi Girls Inter College', 'gdgicbui@gmail.com', 'Uttar Pradesh', 'Ballia', '210052526565', 9918973949, 'e10adc3949ba59abbe56e057f20f883e'),
('Govt Elementary School Warian Dona', 'geskxh@gmail.com', 'Punjab', 'Kapurthala', '747456129830', 9564812656, '202cb962ac59075b964b07152d234b70'),
('Govt. Girls Inter College', 'ggicntl@gmail.com', 'Uttarakhand', 'Nainital', '201033665498', 9872927002, '202cb962ac59075b964b07152d234b70'),
('Govt Girls Hr Sec School', 'ggsicasr@gmail.com', 'Punjab', 'Amritsar', '245569697800', 9500045211, '827ccb0eea8a706c4c34a16891f84e7b'),
('Govt Girls Hr Sec School', 'ggsicjuc@gmail.com', 'Punjab', 'Jalandhar', '20204482212', 9760001400, '827ccb0eea8a706c4c34a16891f84e7b'),
('Govt. High School, Jamalpur', 'ghsldh@gmail.com', 'Punjab', 'Ludhiana', '245569697800', 9410376365, '81dc9bdb52d04dc20036dbd8313ed055'),
('Govt. High School Lohara', 'ghslldh@gmail.com', 'Punjab', 'Ludhiana', '265665489000', 9918959623, '202cb962ac59075b964b07152d234b70'),
('Government High School Patiala Cantt', 'ghspta@gmail.com', 'Punjab', 'Patiala', '332210101547', 9564812656, '827ccb0eea8a706c4c34a16891f84e7b'),
('Govt Inter College, Dobhalwala', 'gicddn@gmail.com', 'Uttarakhand', 'Dehradun', '190089897265', 9831516366, '202cb962ac59075b964b07152d234b70'),
('	 Govt Middle School Saipur Jalandhar', 'gmsjuc@gmail.com', 'Punjab', 'Jalandhar', '245569697800', 9410376365, '827ccb0eea8a706c4c34a16891f84e7b'),
('Govt Middle School', 'gmskxh@gmail.com', 'Punjab', 'Kapurthala', '456652520000', 8445850961, '202cb962ac59075b964b07152d234b70'),
('	 Govt. Middle School, Noorkherian', 'gmspta@gmail.com', 'Punjab', 'Patiala', '128645451245', 9898665120, '827ccb0eea8a706c4c34a16891f84e7b'),
('Government Primary School', 'gpsgzb@gmail.com', 'Uttar Pradesh', 'Ghaziabad', '456652520000', 8445103030, '827ccb0eea8a706c4c34a16891f84e7b'),
('Govt. Primary School, Kanganwal', 'gpsldh@gmail.com', 'Punjab', 'Ludhiana', '139820220992', 9864621565, '202cb962ac59075b964b07152d234b70'),
('Govt. Primary School, Sadarpur', 'gpspgzb@gmail.com', 'Uttar Pradesh', 'Ghaziabad', '345098007878', 9639650282, '202cb962ac59075b964b07152d234b70'),
('Gyan Peethika School, Ballia', 'gpssbui@gmail.com', 'Uttar Pradesh', 'Ballia', '644646455415456545', 9872927021, '202cb962ac59075b964b07152d234b70'),
('Government Upper Primary School Bhelupur', 'gupsbsb@gmail.com', 'Uttar Pradesh', 'Varanasi', '321063537800', 9927664441, '202cb962ac59075b964b07152d234b70'),
('Hindu Kanya College', 'hkckxh@gmail.com', 'Punjab', 'Kapurthala', '256645458699', 8006597221, '202cb962ac59075b964b07152d234b70'),
('Kendriya Vidyalaya Bhimtal', 'kbntl@gmail.com', 'Uttarakhand', 'Nainital', '799113132949', 9598924590, '202cb962ac59075b964b07152d234b70'),
('Kendriya Vidyalaya Manauri', 'kvalld@gmail.com', 'Uttar Pradesh', 'Allahabad', '230012125858', 8218706503, '81dc9bdb52d04dc20036dbd8313ed055'),
('Kendriya Vidyalaya, Maqsudan', 'kvjuc@gmail.com', 'Punjab', 'Jalandhar', '644646455415', 8445850961, '$2y$10$sTMXXzbbUU0MC'),
('Kavita Vidhya Mandir Public School', 'kvmpsddn@gmail.com', 'Uttarakhand', 'Dehradun', '190027271922', 9006520015, '202cb962ac59075b964b07152d234b70'),
('Manhori Vidya Mandir Government School', 'mvmgsgzb@gmail.com', 'Uttar Pradesh', 'Ghaziabad', '20204583255', 9002563214, 'da4fb5c6e93e74d3df8527599fa62642'),
('Nagaji Saraswati Vidya Mandir Senior Secondary School', 'nsvmbui@gmail.com', 'Uttar Pradesh', 'Ballia', '211054546321', 9919089899, '81dc9bdb52d04dc20036dbd8313ed055'),
('Parwati Prema Jagati Sarswati Vihar Nainital', 'ppjsvntl@gmail.com', 'Uttarakhand', 'Nainital', '262654535987', 9876891544, '202cb962ac59075b964b07152d234b70'),
('Primary School Brahamanwala', 'psbddn@gmail.com', 'Uttarakhand', 'Dehradun', '100988281212', 9045181032, '202cb962ac59075b964b07152d234b70'),
('Primary School Balika Vidhalaya', 'psbvalld@gmail.com', 'Uttar Pradesh', 'Allahabad', '256696967811', 8002354611, '827ccb0eea8a706c4c34a16891f84e7b'),
('Prathamik Vidhalaya Durgakund', 'pvdbsb@gmail.com', 'Uttar Pradesh', 'Varanasi', '290019624321', 9917630852, '827ccb0eea8a706c4c34a16891f84e7b'),
('Shahid Major Rohit Sharma Government Girls Secondary School', 'rgggicjuc@gmail.com', 'Punjab', 'Jalandhar', '20203361515', 9760001400, '827ccb0eea8a706c4c34a16891f84e7b'),
('Rajkiya Prathmik Vidhyaalya', 'rpvrkr@gmail.com', 'Uttarakhand', 'Roorkee', '564498987001', 9760101402, '202cb962ac59075b964b07152d234b70'),
('Saraswati Shishu Mandir Inter College', 'ssmicrupc@gmail.com', 'Uttarakhand', 'Rudrapur', '196255664848', 9897762008, '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `state_dist`
--

CREATE TABLE `state_dist` (
  `State` varchar(30) NOT NULL,
  `District` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state_dist`
--

INSERT INTO `state_dist` (`State`, `District`) VALUES
('Uttar Pradesh', 'Allahabad'),
('Punjab', 'Amritsar'),
('Uttar Pradesh', 'Ballia'),
('Uttarakhand', 'Dehradun'),
('Uttar Pradesh', 'Ghaziabad'),
('Punjab', 'Jalandhar'),
('Punjab', 'Kapurthala'),
('Punjab', 'Ludhiana'),
('Uttarakhand', 'Nainital'),
('Punjab', 'Patiala'),
('Uttarakhand', 'Roorkee'),
('Uttarakhand', 'Rudrapur'),
('Uttar Pradesh', 'Varanasi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Username` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Username`, `Email`, `Password`) VALUES
('aditya', 'aditya@gmail.com', '202cb962ac59075b964b07152d234b70'),
('raju', 'r@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donate`
--
ALTER TABLE `donate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`snum`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`School_ID`);

--
-- Indexes for table `state_dist`
--
ALTER TABLE `state_dist`
  ADD PRIMARY KEY (`District`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donate`
--
ALTER TABLE `donate`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `snum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
