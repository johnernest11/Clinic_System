-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2021 at 08:57 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `Id` int(11) NOT NULL,
  `lastname` varchar(225) NOT NULL,
  `firstname` varchar(225) NOT NULL,
  `middlename` varchar(225) NOT NULL,
  `role` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `Position` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`Id`, `lastname`, `firstname`, `middlename`, `role`, `username`, `password`, `Position`) VALUES
(1, 'Catungal', 'John Ernest', 'R', 'User', 'Nurse', 'Nurse', 'Nurse'),
(2, 'Alicante', 'Ivan Arjhay', 'S', 'User', 'Doctor', 'Doctor', 'Doctor'),
(3, 'Dental', 'Dental', 'D', 'User', 'Dental', 'Dental', 'Dental');

-- --------------------------------------------------------

--
-- Table structure for table `dental_examination`
--

CREATE TABLE `dental_examination` (
  `dd_id` int(11) NOT NULL,
  `Gingivitis` varchar(255) DEFAULT NULL,
  `Early_Periodontitis` varchar(255) DEFAULT NULL,
  `Moderate_Periodontitis` varchar(255) DEFAULT NULL,
  `Advance_Periodontitis` varchar(255) DEFAULT NULL,
  `Class_Molar` varchar(255) DEFAULT NULL,
  `Overjet` varchar(255) DEFAULT NULL,
  `Overbite` varchar(255) DEFAULT NULL,
  `Midline_Deviation` varchar(255) DEFAULT NULL,
  `Orthodontic` varchar(255) DEFAULT NULL,
  `Stayplate` varchar(255) DEFAULT NULL,
  `Others` varchar(255) DEFAULT NULL,
  `Others_Specify` varchar(255) DEFAULT NULL,
  `Clenching` varchar(255) DEFAULT NULL,
  `Clicking` varchar(255) DEFAULT NULL,
  `Trismus` varchar(255) DEFAULT NULL,
  `Muscle_Spasm` varchar(255) DEFAULT NULL,
  `REMARKS` varchar(255) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL,
  `date_examined` varchar(255) DEFAULT NULL,
  `Dentist` varchar(255) DEFAULT NULL,
  `Dentist_lastname` varchar(255) DEFAULT NULL,
  `Dentist_middlename` varchar(255) DEFAULT NULL,
  `op_id` varchar(255) DEFAULT NULL,
  `id_no` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dental_examination`
--

INSERT INTO `dental_examination` (`dd_id`, `Gingivitis`, `Early_Periodontitis`, `Moderate_Periodontitis`, `Advance_Periodontitis`, `Class_Molar`, `Overjet`, `Overbite`, `Midline_Deviation`, `Orthodontic`, `Stayplate`, `Others`, `Others_Specify`, `Clenching`, `Clicking`, `Trismus`, `Muscle_Spasm`, `REMARKS`, `Status`, `date_examined`, `Dentist`, `Dentist_lastname`, `Dentist_middlename`, `op_id`, `id_no`) VALUES
(1, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', '', 'Yes', 'Yes', 'Yes', 'Yes', 'asdasdasd', 'COMPLETED', '09-10-2021', 'Dental', 'Dental', 'D', NULL, '211-1332-2'),
(2, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'asdasd', 'Yes', 'Yes', 'Yes', 'Yes', 'asdasd', NULL, '2021-09-10', 'Dental', 'Dental', 'D', NULL, '211-1455-2');

-- --------------------------------------------------------

--
-- Table structure for table `out_patient_profile`
--

CREATE TABLE `out_patient_profile` (
  `op_id` int(11) NOT NULL,
  `lastname` varchar(225) NOT NULL,
  `firstname` varchar(225) NOT NULL,
  `middlename` varchar(225) NOT NULL,
  `birth_date` varchar(225) NOT NULL,
  `sex` varchar(225) NOT NULL,
  `civilstatus` varchar(225) NOT NULL,
  `coursedepartment` varchar(225) NOT NULL,
  `religious` varchar(225) NOT NULL,
  `presentaddress` varchar(225) NOT NULL,
  `contactno` varchar(225) NOT NULL,
  `guardian` varchar(225) NOT NULL,
  `guardno` varchar(225) NOT NULL,
  `permanentaddress` varchar(225) NOT NULL,
  `peraddno` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `out_patient_profile`
--

INSERT INTO `out_patient_profile` (`op_id`, `lastname`, `firstname`, `middlename`, `birth_date`, `sex`, `civilstatus`, `coursedepartment`, `religious`, `presentaddress`, `contactno`, `guardian`, `guardno`, `permanentaddress`, `peraddno`) VALUES
(1, 'SAMPLE', 'SAMPLE', 'SAMPLE', '2021-08-20', 'SAMPLE', 'SAMPLE', 'SAMPLE', 'SAMPLE', 'SAMPLE', 'SAMPLE', 'SAMPLE', 'SAMPLE', 'SAMPLE', 'SAMPLE'),
(2, 'N/A', 'N/A', 'N/A', '2021-08-20', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A'),
(3, 'SAMPLE', 'SAMPLE', 'SAMPLE', '2021-08-20', 'SAMPLE', 'SAMPLE', 'SAMPLE', 'SAMPLE', 'sample', 'SAMPLE', 'SAMPLE', 'SAMPLE', 'SAMPLE', 'SAMPLE'),
(4, 'asdas', 'dasd', 'asdasd', '2021-08-20', 'asd', 'asdasd', 'asdasdasd', 'asdasd', 'sdfsdfsdf', 'sdfsdf', 'sdfsdf', 'sdfsd', 'fsdf', 'fdsf'),
(5, 'asdasd', 'dasda', 'asdas', '2021-08-20', 'sdas', 'dasd', 'asdas', 'dasdasdas', 'asdasd', 'asdas', 'asdasd', 'dasdas', 'asd', 'asdas'),
(6, 'Catungal ', 'John Ernest ', 'Rilloraza', '1997-11-04', 'Male', 'Filipino', '', 'Catholic', 'Poblacion Sur  Caba La Union', '09056222231', 'Ernesto B. Catungal', '09056222231', 'Poblacion Sur Caba La Union', '09056222231'),
(7, 'Macaraeg', 'Mary Jane', 'D', '1996-12-15', 'Female', 'Single', 'Bannawag Bank', 'Catholic', 'Salcedo Luna La Union', '000000000', 'Joselito Macaraeg Sr', '00000000', 'Salcedo Luna La Union', '00000000'),
(8, 'a', 'a', 'a', '123213-12-13', 'a', 'a', 'a', 'a', 'wq', 'qq', 'q', 'qq', 'q', 'sdasd');

-- --------------------------------------------------------

--
-- Table structure for table `past_medical_history`
--

CREATE TABLE `past_medical_history` (
  `mh_id` int(11) NOT NULL,
  `Allergies` varchar(225) DEFAULT NULL,
  `Allergies_specify` varchar(225) DEFAULT NULL,
  `Bronchial_Asthma` varchar(225) DEFAULT NULL,
  `Heart_Disease` varchar(225) DEFAULT NULL,
  `Heart_Disease_specify` varchar(225) DEFAULT NULL,
  `Diabetes_Mellitus` varchar(225) DEFAULT NULL,
  `Seizure_Disorder` varchar(225) DEFAULT NULL,
  `Hypertension` varchar(225) DEFAULT NULL,
  `Bleeding_Disorder` varchar(225) DEFAULT NULL,
  `Bleeding_Disorder_specify` varchar(225) DEFAULT NULL,
  `Mumps` varchar(225) DEFAULT NULL,
  `Measles` varchar(225) DEFAULT NULL,
  `Chicken_Pox` varchar(225) DEFAULT NULL,
  `Tuberculosis` varchar(225) DEFAULT NULL,
  `Other` varchar(225) DEFAULT NULL,
  `Other_specify` varchar(225) DEFAULT NULL,
  `Accident_operation` varchar(225) DEFAULT NULL,
  `Accident_operationyes` varchar(225) DEFAULT NULL,
  `Vaccines` varchar(225) DEFAULT NULL,
  `Vaccinesyes` varchar(225) DEFAULT NULL,
  `Medication` varchar(225) DEFAULT NULL,
  `Medicationyes` varchar(225) DEFAULT NULL,
  `Mental_illness` varchar(225) DEFAULT NULL,
  `date_examined` varchar(225) DEFAULT NULL,
  `id_no` varchar(225) DEFAULT NULL,
  `op_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `past_medical_history`
--

INSERT INTO `past_medical_history` (`mh_id`, `Allergies`, `Allergies_specify`, `Bronchial_Asthma`, `Heart_Disease`, `Heart_Disease_specify`, `Diabetes_Mellitus`, `Seizure_Disorder`, `Hypertension`, `Bleeding_Disorder`, `Bleeding_Disorder_specify`, `Mumps`, `Measles`, `Chicken_Pox`, `Tuberculosis`, `Other`, `Other_specify`, `Accident_operation`, `Accident_operationyes`, `Vaccines`, `Vaccinesyes`, `Medication`, `Medicationyes`, `Mental_illness`, `date_examined`, `id_no`, `op_id`) VALUES
(1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'No', '', '', '', '', '', '', '', ' 211-1455-2', 0),
(2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'No', '', '', '', '', '', '', '', ' 211-1455-2', 0),
(3, '', '', 'Yes', '', '', '', '', 'Yes', '', '', '', '', '', '', '', '', 'Yes', 'Yes', 'SAMPLE', '', '', '', 'SAMPLE', '', '', 1),
(4, '', '', 'Yes', '', '', '', '', '', '', '', '', '', '', 'Yes', '', '', 'No', '', '', '', '', '', '', '', ' 211-1637-2', 0),
(5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'No', '', '', '', '', '', '', '', '', 2),
(6, '', '', '', '', '', '', '', 'Yes', 'Yes', '', '', '', '', '', '', '', 'No', 'dasdasdas', 'asdas', '', '', 'asd', 'dasd', '2021-08-20', ' 211-0360-2', 0),
(7, '', '', '', '', '', '', '', '', 'Yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-08-20', '', 4),
(8, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-08-20', ' ', 0),
(9, 'Yes', '', 'Yes', '', '', 'Yes', '', 'Yes', '', '', 'Yes', '', '', 'Yes', 'Yes', '', 'No', 's', '', '', '', 'asd', '', '2021-08-20', ' ', 0),
(10, '', '', 'Yes', '', '', '', '', 'Yes', 'Yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-08-20', ' ', 0),
(11, 'Yes', '', '', 'Yes', '', '', '', '', '', '', '', '', '', 'Yes', '', '', '', '', '', '', '', '', '', '2021-08-20', ' 211-1447-2', 0),
(12, '', '', '', '', '', 'Yes', '', 'Yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-08-20', '', 5),
(13, 'Yes', '', '', '', '', '', '', '', 'Yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-08-20', ' 211-0366-2', 0),
(14, '', '', '', '', '', '', '', '', '', '', 'Yes', '', '', 'Yes', '', '', '', '', '', '', '', '', '', '2021-08-31', ' 211-1445-2', NULL),
(15, 'Yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'No', '', '', '', '', '', '', '2021-09-01', NULL, 6),
(16, 'Yes', 'Medicine', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'No', '', 'Yes', 'Jansen', '', '', '', '2021-09-06', NULL, 7),
(17, NULL, '', NULL, NULL, '', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, ' ', 'No', ' ', ' Yes', 'Sinovac', ' ', ' ', ' ', '2021-09-06', '211-1455-2', NULL),
(18, NULL, '', NULL, NULL, '', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, ' ', 'No', ' ', ' ', ' ', ' ', ' ', ' ', '2021-09-08', '211-1402-2', NULL),
(19, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'No', 'sdasd', 'asd', '', '', '', '', '2021-09-08', NULL, 8),
(20, NULL, '', NULL, NULL, '', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, ' ', 'No', ' ', ' ', ' ', ' ', ' ', ' ', '2021-09-08', '211-1332-2', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `physical_examination`
--

CREATE TABLE `physical_examination` (
  `pe_id` int(11) NOT NULL,
  `Height` varchar(225) DEFAULT NULL,
  `BP` varchar(225) DEFAULT NULL,
  `RR` varchar(225) DEFAULT NULL,
  `General_Survey` varchar(225) DEFAULT NULL,
  `Skin` varchar(225) DEFAULT NULL,
  `HEENT` varchar(225) DEFAULT NULL,
  `Chest_Lungs` varchar(225) DEFAULT NULL,
  `Weight` varchar(225) DEFAULT NULL,
  `CR` varchar(225) DEFAULT NULL,
  `Temperature` varchar(225) DEFAULT NULL,
  `Heart` varchar(225) DEFAULT NULL,
  `Abdomen` varchar(225) DEFAULT NULL,
  `Genito_Urinary_System` varchar(225) DEFAULT NULL,
  `Extremities` varchar(225) DEFAULT NULL,
  `REMARKS` varchar(225) DEFAULT NULL,
  `Status` varchar(225) DEFAULT NULL,
  `Doctor` varchar(225) DEFAULT NULL,
  `Doctor_lastname` varchar(225) DEFAULT NULL,
  `Doctor_middlename` varchar(225) DEFAULT NULL,
  `id_no` varchar(225) DEFAULT NULL,
  `date_examined` varchar(225) DEFAULT NULL,
  `mh_id` int(11) DEFAULT NULL,
  `op_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `physical_examination`
--

INSERT INTO `physical_examination` (`pe_id`, `Height`, `BP`, `RR`, `General_Survey`, `Skin`, `HEENT`, `Chest_Lungs`, `Weight`, `CR`, `Temperature`, `Heart`, `Abdomen`, `Genito_Urinary_System`, `Extremities`, `REMARKS`, `Status`, `Doctor`, `Doctor_lastname`, `Doctor_middlename`, `id_no`, `date_examined`, `mh_id`, `op_id`) VALUES
(1, '5.5', '90/100', 'N/A', 'N/A', 'BROWN', 'N/A', 'N/A', '88', 'N/A', '30.5', ' 100', 'N/A', 'N/A', 'N/A', 'OVERWIEIGHT', 'COMPLETED', 'Ivan Arjhay', 'Alicante', 'S', '211-1455-2', '08-20-2021', 1, 0),
(2, '5.5', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '87', 'N/A', '36.5', ' 100', 'N/A', 'N/A', 'N/A', ' NO FINDINGSasdasdas', 'COMPLETED', 'Ivan Arjhay', 'Alicante', 'S', '211-1455-2', '2021-08-20', 2, 0),
(3, 'SAMPLE', 'SAMPLE', '', 'SAMPLE', 'SAMPLE', 'SAMPLE', 'SAMPLE', 'SAMPLE', 'SAMPLE', 'SAMPLE', ' SAMPLE', 'SAMPLE', 'SAMPLE', 'SAMPLE', 'SAMPLE', 'COMPLETED', 'Ivan Arjhay', 'Alicante', 'S', '', '2021-08-20', 0, 1),
(4, 'N/A', 'N/A', '', '', 'N/A', '', '', 'N/A', '', 'N/A', ' ', '', '', '', 'N/A', 'COMPLETED', 'John Ernest', 'Catungal', 'R', '211-1637-2', '2021-08-20', 4, 0),
(5, '', 'N/A', '', '', '', 'N/A', '', 'N/A', '', '', ' N/A', 'N/A', '', '', '', 'ONGOING', 'John Ernest', 'Catungal', 'R', '', '2021-08-20', 0, 2),
(6, 'dasd', 'asda', 'asdas', 'asd', 'asdasd', '', '', 'dsadas', 'asd', '', ' asdasd', 'dasd', '', 'asdas', 'asdasd', 'COMPLETED', 'Ivan Arjhay', 'Alicante', 'S', '211-0360-2', '2021-08-20', 6, 0),
(7, 'sdfs', 'fsdfdsf', '', 'sdfsd', '', '', '', 'dfsdfsd', '', 'sdfsdf', ' ', '', '', '', ' sdfsdfasdasdasdasd', 'COMPLETED', 'Ivan Arjhay', 'Alicante', 'S', '', '2021-08-20', 0, 4),
(8, '', '', '5454', '', '', '', '445', '', '', '', ' ', '', '', '', '', 'COMPLETED', 'Ivan Arjhay', 'Alicante', 'S', '', '2021-08-20', 8, 0),
(9, '', '', '5454', '', '', '', '445', '', '', '', ' ', 's', '', 'ASD', 'asdasdasd', 'COMPLETED', 'Ivan Arjhay', 'Alicante', 'S', '', '2021-08-20', 9, 0),
(10, '', 'aadasd', '', '', 'dasd', 'dasdas', '', '', 'asdasdasdas', '', ' ', '', '', 'asdasd', '', 'COMPLETED', 'Ivan Arjhay', 'Alicante', 'S', '', '2021-08-20', 10, 0),
(11, '', 'asdasd', '', 'dasd', 'asd', 'asd', 'dasd', 'asd', 'asdasddasd', '', ' asdasdas', '', '', 'asdasdas', 'asdasdasd', 'COMPLETED', 'Ivan Arjhay', 'Alicante', 'S', '211-1447-2', '2021-08-20', 11, 0),
(12, 'asdasdasd', '', '', 'dasdas', '', 'as', '', '', '', '', ' dasd', '', '', 'dasd', 'dasdasd', 'COMPLETED', 'Ivan Arjhay', 'Alicante', 'S', '', '2021-08-20', 0, 5),
(13, '', '', '', '', '', '', '', 's', '', 's', ' ', '', '', '', 'aaaa', 'COMPLETED', 'Ivan Arjhay', 'Alicante', 'S', '211-0366-2', '2021-08-20', 13, 0),
(14, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', '', 'aaaaaa', 'COMPLETED', 'Ivan Arjhay', 'Alicante', 'S', '211-1445-2', '2021-08-31', 14, NULL),
(15, 'a', '', '', 'a', '', '', 'a', 'a', '', 'a', ' a', '', '', '', 'a', 'COMPLETED', 'Ivan Arjhay', 'Alicante', 'S', NULL, '2021-09-01', NULL, 6),
(16, '5`0', '90/120', '', '', '', '', '', '', '', '', ' ', '', '', '', ' Normal Over All', 'COMPLETED', 'Ivan Arjhay', 'Alicante', 'S', NULL, '2021-09-06', NULL, 7),
(17, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' Normal Over All', 'COMPLETED', 'Ivan Arjhay', 'Alicante', 'S', '211-1455-2', '2021-09-06', 17, NULL),
(18, ' 5`5', ' 100/140', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 'asdasdasdasdasdasd', 'COMPLETED', 'Ivan Arjhay', 'Alicante', 'S', '211-1402-2', '2021-09-08', 18, NULL),
(19, 'asd', '', '', '', '', '', '', '', '', '', ' asd', '', '', '', ' dasdasdasdasdsadasd', 'COMPLETED', 'Ivan Arjhay', 'Alicante', 'S', NULL, '2021-09-08', NULL, 8),
(20, ' q', ' q', ' qq', ' ', ' qq', ' q', ' ', ' q', ' q', ' q', ' q', ' q', ' q', ' q', ' Normal', 'ONGOING', 'John Ernest', 'Catungal', 'R', '211-1332-2', '2021-09-05', 20, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `dental_examination`
--
ALTER TABLE `dental_examination`
  ADD PRIMARY KEY (`dd_id`);

--
-- Indexes for table `out_patient_profile`
--
ALTER TABLE `out_patient_profile`
  ADD PRIMARY KEY (`op_id`);

--
-- Indexes for table `past_medical_history`
--
ALTER TABLE `past_medical_history`
  ADD PRIMARY KEY (`mh_id`);

--
-- Indexes for table `physical_examination`
--
ALTER TABLE `physical_examination`
  ADD PRIMARY KEY (`pe_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dental_examination`
--
ALTER TABLE `dental_examination`
  MODIFY `dd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `out_patient_profile`
--
ALTER TABLE `out_patient_profile`
  MODIFY `op_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `past_medical_history`
--
ALTER TABLE `past_medical_history`
  MODIFY `mh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `physical_examination`
--
ALTER TABLE `physical_examination`
  MODIFY `pe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
