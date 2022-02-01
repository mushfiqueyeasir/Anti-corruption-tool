-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2021 at 09:06 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anti_corruption`
--

-- --------------------------------------------------------

--
-- Table structure for table `bkash`
--

CREATE TABLE `bkash` (
  `Name` varchar(40) NOT NULL,
  `NID` varchar(20) NOT NULL,
  `MobilelNumber` varchar(20) NOT NULL,
  `Current_Balance` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bkash`
--

INSERT INTO `bkash` (`Name`, `NID`, `MobilelNumber`, `Current_Balance`) VALUES
('Faysal Ahmed', '8000000001', '01710000001', 5000),
('Younuse Hossain', '8000000002', '01810000002', 3000);

-- --------------------------------------------------------

--
-- Table structure for table `cardtransactions`
--

CREATE TABLE `cardtransactions` (
  `CardNumber` varchar(20) NOT NULL,
  `Receiver` varchar(40) NOT NULL,
  `Amount` double NOT NULL,
  `ReceiptNumber` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cardtransactions`
--

INSERT INTO `cardtransactions` (`CardNumber`, `Receiver`, `Amount`, `ReceiptNumber`) VALUES
('987654001', 'Mina Bazar', 3500, '10001'),
('987654002', 'Shopno', 2500, '10002');

-- --------------------------------------------------------

--
-- Table structure for table `creditcard`
--

CREATE TABLE `creditcard` (
  `Name` varchar(40) NOT NULL,
  `NID` varchar(20) NOT NULL,
  `CardNumber` varchar(20) NOT NULL,
  `CardClient` varchar(40) NOT NULL,
  `Current_Balance` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `creditcard`
--

INSERT INTO `creditcard` (`Name`, `NID`, `CardNumber`, `CardClient`, `Current_Balance`) VALUES
('Faysal Ahmed', '8000000001', '987654001', 'Janata Bank', 5000),
('Younuse Hossain', '8000000002', '987654002', 'Sonali Bank', 9000),
('Shahana Begum', '8000000003', '987654003', 'DBBL', 4000),
('Khadija Akhtar', '8000000004', '987654004', 'Sonali Bank', 7000);

-- --------------------------------------------------------

--
-- Table structure for table `dutchbangla_bank`
--

CREATE TABLE `dutchbangla_bank` (
  `Name` varchar(40) NOT NULL,
  `NID` varchar(20) NOT NULL,
  `Account_Number` varchar(20) NOT NULL,
  `Current_Balance` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dutchbangla_bank`
--

INSERT INTO `dutchbangla_bank` (`Name`, `NID`, `Account_Number`, `Current_Balance`) VALUES
('Younuse Hossain', '8000000002', '1000000001', 5000),
('Faysal Ahmed', '8000000001', '1000000002', 6000);

-- --------------------------------------------------------

--
-- Table structure for table `electricitybilll`
--

CREATE TABLE `electricitybilll` (
  `Name` varchar(40) NOT NULL,
  `NID` varchar(20) NOT NULL,
  `ElectricityBillingID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `electricitybilll`
--

INSERT INTO `electricitybilll` (`Name`, `NID`, `ElectricityBillingID`) VALUES
('Faysal Ahmed', '8000000001', '987001'),
('Younuse Hossain', '8000000002', '987002');

-- --------------------------------------------------------

--
-- Table structure for table `electricitybilllhitory`
--

CREATE TABLE `electricitybilllhitory` (
  `No` int(11) NOT NULL,
  `ElectricityBillingID` varchar(20) NOT NULL,
  `Year` int(11) NOT NULL,
  `Month` varchar(20) NOT NULL,
  `Amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `electricitybilllhitory`
--

INSERT INTO `electricitybilllhitory` (`No`, `ElectricityBillingID`, `Year`, `Month`, `Amount`) VALUES
(1, '987001', 2021, 'January', 1200),
(2, '987002', 2021, 'January', 1500);

-- --------------------------------------------------------

--
-- Table structure for table `janata_bank`
--

CREATE TABLE `janata_bank` (
  `Name` varchar(40) NOT NULL,
  `NID` varchar(40) NOT NULL,
  `Account_Number` varchar(20) NOT NULL,
  `Current_Balance` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `janata_bank`
--

INSERT INTO `janata_bank` (`Name`, `NID`, `Account_Number`, `Current_Balance`) VALUES
('Shahana Begum', '8000000003', '3000000001', 5000),
('Khadija Akhtar', '8000000004', '3000000002', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `landproperties`
--

CREATE TABLE `landproperties` (
  `NID` varchar(40) NOT NULL,
  `LandRegistration` varchar(20) NOT NULL,
  `RegistrationOffice` varchar(40) NOT NULL,
  `EstimatedPrice` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `landproperties`
--

INSERT INTO `landproperties` (`NID`, `LandRegistration`, `RegistrationOffice`, `EstimatedPrice`) VALUES
('8000000001', '987456001', 'Mirpur', 12000000),
('8000000002', '987456002', 'Aftabnagar', 19000000);

-- --------------------------------------------------------

--
-- Table structure for table `mobieoperator`
--

CREATE TABLE `mobieoperator` (
  `Name` varchar(40) NOT NULL,
  `NID` varchar(20) NOT NULL,
  `MobilelNumber` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mobieoperator`
--

INSERT INTO `mobieoperator` (`Name`, `NID`, `MobilelNumber`) VALUES
('Faysal Ahmed', '8000000001', '01710000001'),
('Shahana Begum', '8000000003', '01710000002'),
('Younuse Hossain', '8000000002', '01810000002'),
('Khadija Akhtar', '8000000004', '01810000003');

-- --------------------------------------------------------

--
-- Table structure for table `mobilebankingtransactions`
--

CREATE TABLE `mobilebankingtransactions` (
  `Client` varchar(20) NOT NULL,
  `SenderMobileNumber` varchar(20) NOT NULL,
  `ReciverMobileNumber` varchar(20) NOT NULL,
  `Amount` double NOT NULL,
  `MobileTransactionID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mobilebankingtransactions`
--

INSERT INTO `mobilebankingtransactions` (`Client`, `SenderMobileNumber`, `ReciverMobileNumber`, `Amount`, `MobileTransactionID`) VALUES
('bKash', '01710000001', '01810000002', 6000, '654001'),
('Nagad', '01710000002', '01810000003', 2500, '654002');

-- --------------------------------------------------------

--
-- Table structure for table `nid`
--

CREATE TABLE `nid` (
  `Name` varchar(100) NOT NULL,
  `Father_Name` varchar(100) NOT NULL,
  `Mother_Name` varchar(100) NOT NULL,
  `HusbandOrWife_Name` varchar(40) NOT NULL,
  `Dob` date NOT NULL,
  `NID` varchar(20) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Occupation` varchar(20) NOT NULL,
  `Relationship` varchar(20) NOT NULL,
  `Income` double NOT NULL,
  `Alive` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nid`
--

INSERT INTO `nid` (`Name`, `Father_Name`, `Mother_Name`, `HusbandOrWife_Name`, `Dob`, `NID`, `Address`, `Occupation`, `Relationship`, `Income`, `Alive`) VALUES
('Faysal Ahmed', 'Md. Imran Hossain', 'Afsana Shirin', 'Shahana Begum', '1985-04-23', '8000000001', 'address ', 'Government Employee', 'Married', 550, 'Yes'),
('Younuse Hossain', 'Md. Ismail Hossain', 'Shikhanur Begum', 'Khadija Akhtar', '1986-05-19', '8000000002', 'address ', 'Banker', 'Married', 37000, 'Yes'),
('Shahana Begum', 'Mohammad Faysal', 'Shirin Akhtar', 'Faysal Ahmed', '1990-05-05', '8000000003', 'address ', 'House Wife', 'Married', 0, 'Yes'),
('Khadija Akhtar', 'Ishtiaq Ahmed', 'Nusrat Jahan', 'Younuse Hossain', '1990-05-25', '8000000004', 'address ', 'House Wife', 'Married', 0, 'Yes'),
('Md. Imran Hossain', 'MD. Hasan Kabir', 'Rehana Begum', 'Afsana Shirin', '1925-04-23', '8000000005', 'address ', 'Farmer', 'Married', 0, 'No'),
('Afsana Shirin', 'MD. Kabir', 'Shirin Akhter', 'Md. Imran Hossain', '1935-05-05', '8000000006', 'address ', 'House Wife', 'Married', 0, 'No'),
('Raghib Bhuiyan', 'Faysal Ahmed', 'Shahana Begum', '', '1996-04-19', '8000000007', 'address ', 'Student', 'Single', 0, 'Yes'),
('Anika Tabassum', 'Md. Imran Hossain', 'Afsana Shirin', 'Kuddus Ali', '1995-04-23', '8000000008', 'address ', 'House Wife', 'Married', 0, 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `nogod`
--

CREATE TABLE `nogod` (
  `Name` varchar(40) NOT NULL,
  `NID` varchar(20) NOT NULL,
  `MobilelNumber` varchar(20) NOT NULL,
  `Current_Balance` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nogod`
--

INSERT INTO `nogod` (`Name`, `NID`, `MobilelNumber`, `Current_Balance`) VALUES
('Shahana Begum', '8000000003', '01710000002', 5000),
('Khadija Akhtar', '8000000004', '01810000003', 3000);

-- --------------------------------------------------------

--
-- Table structure for table `sonali_bank`
--

CREATE TABLE `sonali_bank` (
  `Name` varchar(40) NOT NULL,
  `NID` varchar(40) NOT NULL,
  `Account_Number` varchar(20) NOT NULL,
  `Current_Balance` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sonali_bank`
--

INSERT INTO `sonali_bank` (`Name`, `NID`, `Account_Number`, `Current_Balance`) VALUES
('Faysal Ahmed', '8000000001', '2000000001', 5000),
('Younuse Hossain', '8000000002', '2000000002', 3000);

-- --------------------------------------------------------

--
-- Table structure for table `tax`
--

CREATE TABLE `tax` (
  `Name` varchar(40) NOT NULL,
  `NID` varchar(20) NOT NULL,
  `TaxID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tax`
--

INSERT INTO `tax` (`Name`, `NID`, `TaxID`) VALUES
('Faysal Ahmed', '8000000001', '321001'),
('Younuse Hossain', '8000000002', '321002'),
('Shahana Begum', '8000000003', '321003'),
('Khadija Akhtar', '8000000004', '321004');

-- --------------------------------------------------------

--
-- Table structure for table `taxtransactionshistory`
--

CREATE TABLE `taxtransactionshistory` (
  `No` int(11) NOT NULL,
  `TaxID` varchar(20) NOT NULL,
  `Year` int(11) NOT NULL,
  `Amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `taxtransactionshistory`
--

INSERT INTO `taxtransactionshistory` (`No`, `TaxID`, `Year`, `Amount`) VALUES
(1, '321001', 2021, 6000),
(2, '321002', 2021, 9000);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `SenderAccountNUmber` varchar(20) NOT NULL,
  `ReciverAccountNUmber` varchar(20) NOT NULL,
  `Amount` double NOT NULL,
  `TransactionID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`SenderAccountNUmber`, `ReciverAccountNUmber`, `Amount`, `TransactionID`) VALUES
('1000000001', '1000000002', 6000, 'ABCDEFGHI001'),
('2000000001', '3000000001', 9000, 'ABCDEFGHI002'),
('3000000002', '1000000001', 7000, 'ABCDEFGHI003'),
('3000000002', '2000000002', 9000, 'ABCDEFGHI004');

-- --------------------------------------------------------

--
-- Table structure for table `waterbilll`
--

CREATE TABLE `waterbilll` (
  `Name` varchar(40) NOT NULL,
  `NID` varchar(20) NOT NULL,
  `WaterBillingID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `waterbilll`
--

INSERT INTO `waterbilll` (`Name`, `NID`, `WaterBillingID`) VALUES
('Faysal Ahmed', '8000000001', '456001'),
('Younuse Hossain', '8000000002', '456002');

-- --------------------------------------------------------

--
-- Table structure for table `waterbilllhistory`
--

CREATE TABLE `waterbilllhistory` (
  `No` int(11) NOT NULL,
  `WaterBillingID` varchar(20) NOT NULL,
  `Year` varchar(10) NOT NULL,
  `Month` varchar(10) NOT NULL,
  `Amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `waterbilllhistory`
--

INSERT INTO `waterbilllhistory` (`No`, `WaterBillingID`, `Year`, `Month`, `Amount`) VALUES
(1, '456001', '2021', 'January', 600),
(2, '456002', '2021', 'January', 700);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bkash`
--
ALTER TABLE `bkash`
  ADD PRIMARY KEY (`MobilelNumber`);

--
-- Indexes for table `cardtransactions`
--
ALTER TABLE `cardtransactions`
  ADD PRIMARY KEY (`ReceiptNumber`);

--
-- Indexes for table `creditcard`
--
ALTER TABLE `creditcard`
  ADD PRIMARY KEY (`CardNumber`);

--
-- Indexes for table `dutchbangla_bank`
--
ALTER TABLE `dutchbangla_bank`
  ADD PRIMARY KEY (`Account_Number`),
  ADD UNIQUE KEY `NID` (`NID`);

--
-- Indexes for table `electricitybilll`
--
ALTER TABLE `electricitybilll`
  ADD PRIMARY KEY (`ElectricityBillingID`);

--
-- Indexes for table `electricitybilllhitory`
--
ALTER TABLE `electricitybilllhitory`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `janata_bank`
--
ALTER TABLE `janata_bank`
  ADD PRIMARY KEY (`NID`);

--
-- Indexes for table `landproperties`
--
ALTER TABLE `landproperties`
  ADD PRIMARY KEY (`LandRegistration`);

--
-- Indexes for table `mobieoperator`
--
ALTER TABLE `mobieoperator`
  ADD PRIMARY KEY (`MobilelNumber`);

--
-- Indexes for table `mobilebankingtransactions`
--
ALTER TABLE `mobilebankingtransactions`
  ADD PRIMARY KEY (`MobileTransactionID`);

--
-- Indexes for table `nid`
--
ALTER TABLE `nid`
  ADD PRIMARY KEY (`NID`);

--
-- Indexes for table `nogod`
--
ALTER TABLE `nogod`
  ADD PRIMARY KEY (`MobilelNumber`);

--
-- Indexes for table `sonali_bank`
--
ALTER TABLE `sonali_bank`
  ADD PRIMARY KEY (`NID`);

--
-- Indexes for table `tax`
--
ALTER TABLE `tax`
  ADD PRIMARY KEY (`TaxID`);

--
-- Indexes for table `taxtransactionshistory`
--
ALTER TABLE `taxtransactionshistory`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`TransactionID`);

--
-- Indexes for table `waterbilll`
--
ALTER TABLE `waterbilll`
  ADD PRIMARY KEY (`WaterBillingID`);

--
-- Indexes for table `waterbilllhistory`
--
ALTER TABLE `waterbilllhistory`
  ADD PRIMARY KEY (`No`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
