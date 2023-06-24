-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2017 at 01:46 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arisankelas`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_arisan`
--

CREATE TABLE `tbl_arisan` (
  `npm` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `pertemuan` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `Bayar` int(11) NOT NULL,
  `STATUS` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_arisan`
--

INSERT INTO `tbl_arisan` (`npm`, `nama`, `pertemuan`, `tanggal`, `Bayar`, `STATUS`) VALUES
('06115542', 'ROBERT', 4, '2017-11-14', 5000, ''),
('065115113', 'josua', 6, '2017-11-14', 5000, ''),
('065115114', 'andi ', 2, '2017-11-14', 5000, ''),
('065115115', 'aprea', 0, '2017-11-02', 5000, ''),
('06511514', 'abet', 0, '2017-10-28', 5000, ''),
('065115231', 'adji', 1, '2017-11-14', 5000, ''),
('065115235', 'bule', 2, '2017-11-14', 5000, ''),
('06511527', 'Gunawan', 2, '2017-11-14', 5000, ''),
('06511567', 'GERRY', 0, '2017-10-31', 5000, ''),
('06511578', 'GEMBRUY', 2, '2017-11-14', 5000, ''),
('065115XXX', 'ramdani', 2, '2017-11-14', 5000, 'MENANG'),
('06511U', 'SELVI', 1, '2017-11-14', 5000, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_arisan`
--
ALTER TABLE `tbl_arisan`
  ADD PRIMARY KEY (`npm`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
