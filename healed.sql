-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 21, 2022 at 01:13 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healed`
--

-- --------------------------------------------------------

--
-- Table structure for table `AboutUs`
--

CREATE TABLE `AboutUs` (
  `AboutId` int(11) NOT NULL,
  `AboutDescription` text NOT NULL,
  `CardDescription_1` text NOT NULL,
  `CardPic_1` varchar(500) NOT NULL,
  `CardDescription_2` text NOT NULL,
  `CardPic_2` varchar(500) NOT NULL,
  `CardDescription_3` text NOT NULL,
  `CardPic_3` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `AboutUs`
--

INSERT INTO `AboutUs` (`AboutId`, `AboutDescription`, `CardDescription_1`, `CardPic_1`, `CardDescription_2`, `CardPic_2`, `CardDescription_3`, `CardPic_3`) VALUES
(1, 'We are a full-service animal hospital that offers a wide selection of comprehensive veterinary services to maintain your pets health from, routine exams and vaccinations to dental care , geriatric care ,surgery, and internal medicine.', 'We understand that great veterinary care begins with taking the time to get to know your pet and talking with you. We value your relationship with us and are happy to have you join our veterinary family.', 'doctorM.svg', 'You will love our highly skilled compassionate veterinarians,We offer a comprehensive range of services in one spot And We prioritize your pets long-term health by focusing on preventive services.', '1651973785_clinic2.svg', 'District Unit No.1، Prince Muhammad Ibn Saad Ibn Abdulaziz Rd, Al Aqiq, Riyadh 13511 -8255 Al Imam Saud Ibn Abdul Aziz Branch Rd, King Fahd, 2993 , Riyadh 12274', 'locationAboutus.svg');

-- --------------------------------------------------------

--
-- Table structure for table `Appointment`
--

CREATE TABLE `Appointment` (
  `Appointmentid` int(11) NOT NULL,
  `Pet_name` varchar(50) NOT NULL,
  `Service` varchar(100) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `Note` varchar(10000) NOT NULL,
  `Time` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `PETid` int(11) NOT NULL,
  `SERVICEID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Appointment`
--

INSERT INTO `Appointment` (`Appointmentid`, `Pet_name`, `Service`, `Date`, `Note`, `Time`, `Status`, `PETid`, `SERVICEID`) VALUES
(17, 'Lola', 'Spa', '2022-04-30', ' Be Carful please', '10:10', 'Complete', 2, 4),
(19, 'Lulu', 'Spa', '2022-05-18', ' So Important', '15:30', 'yes', 16, 4),
(20, 'Simon', 'Spa', '2022-05-18', ' Getting ready', '15:30', '', 17, 4),
(25, 'Loci', 'Boarding', '2022-05-31', ' so Important', '23:05', 'Complete', 18, 5),
(26, 'Kewiiiii', 'vaccination', '2022-05-31', ' Important', '23:05', 'Done', 34, 4),
(27, 'Sosi', 'vaccination', '2022-05-31', ' so harry', '23:05', 'Done', 35, 4),
(28, 'Peter', 'Boarding', '2022-07-10', ' Important', '23:05', 'yes', 36, 5),
(32, 'Kiwi', 'Boarding', '2022-05-15', ' boarding needed for two days', '23:05', 'No', 43, 5),
(33, 'Buffy', 'Dentistry', '2022-05-15', ' has gum disease', '19:52', 'Done', 42, 4),
(34, 'Simon', 'bathing', '2022-05-21', ' can be fussy', '15:00', '', 44, 6),
(35, 'Lily', 'Dentistry', '2022-05-31', ' Damaged tooth', '23:05', 'yes', 45, 4);

-- --------------------------------------------------------

--
-- Table structure for table `Feedback`
--

CREATE TABLE `Feedback` (
  `Feedbackid` int(11) NOT NULL,
  `FEEDBACK` varchar(1000) NOT NULL,
  `Service_rate` varchar(30) NOT NULL,
  `Visit_rate` varchar(30) NOT NULL,
  `APPid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Feedback`
--

INSERT INTO `Feedback` (`Feedbackid`, `FEEDBACK`, `Service_rate`, `Visit_rate`, `APPid`) VALUES
(9, 'Soo Happy!!', '3', '3', 17),
(11, 'good services , but bad visit', '5', '2', 25),
(12, 'Happyyyy!!!', '3', '5', 27),
(13, 'All is amazing!!', '5', '5', 26),
(16, 'Happy to visit you guys!!!', '5', '4', 33);

-- --------------------------------------------------------

--
-- Table structure for table `Manager`
--

CREATE TABLE `Manager` (
  `Managerid` int(11) NOT NULL,
  `Fname` varchar(30) NOT NULL,
  `Lname` varchar(30) NOT NULL,
  `Pnum` varchar(300) NOT NULL,
  `Email` varchar(300) NOT NULL,
  `Gend` varchar(300) NOT NULL,
  `Pass` varchar(300) NOT NULL,
  `Profile_Pic` varchar(300) NOT NULL,
  `code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Manager`
--

INSERT INTO `Manager` (`Managerid`, `Fname`, `Lname`, `Pnum`, `Email`, `Gend`, `Pass`, `Profile_Pic`, `code`) VALUES
(1, 'Boba', 'Jems', '0541998205', 'EmilyKevin@example.com', 'Male', '654d72eed5f5776644d96240e13e01bd', 'Emailicon.svg', 0),
(3, 'Loca', 'Jemmy', '0519882018', 'Loca2@outlook.com', 'Male', 'e681bb2a079a5f608210b6aff2e9d9b8', 'image (3).svg', 0),
(8, 'Fahda', 'Mohammed', '0541220407', 'Fahad2@outlook.com', 'Male', 'aa2de286ff58861349dbbb13a2f12442', 'CONTACTUSS.svg', 0),
(9, 'Richard', 'McKinsey', '0544952199', 'Richard@hotmail.com', 'Male', '61a97e5bdc2667996b3a79c43a50fb15', 'vecteezy_big-bundle-of-business-people-avatars-set-of-male-and_-ai (1).svg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `Manager_Services`
--

CREATE TABLE `Manager_Services` (
  `MServicesid` int(11) NOT NULL,
  `Service_NAME` varchar(100) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Price` int(100) NOT NULL,
  `Picture` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Manager_Services`
--

INSERT INTO `Manager_Services` (`MServicesid`, `Service_NAME`, `Description`, `Price`, `Picture`) VALUES
(4, 'Dentistry', 'Our dental services include teeth cleaning and polishing, digital dental x-rays, tooth extractions and oral surgery.', 50, 'Dentistry.svg'),
(5, 'Boarding', 'We provide pet boarding as a service to our clients. All boarders receive personal attention from our caring staff.', 25, 'Boarding.svg'),
(6, 'bathing', 'Bathing :  Routine and therapeutic bathing services are available. We also have a groomer available for all your pets beauty needs', 22, 'Grooming&Bathing.svg');

-- --------------------------------------------------------

--
-- Table structure for table `PETT`
--

CREATE TABLE `PETT` (
  `Petid` int(11) NOT NULL,
  `Pet_Name` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Breed` varchar(50) NOT NULL,
  `Spayed` varchar(200) NOT NULL,
  `Medical_History` varchar(1000) NOT NULL,
  `DOB` varchar(500) NOT NULL,
  `Content` varchar(3000) NOT NULL,
  `Profile_Pic` varchar(3000) NOT NULL,
  `Userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `PETT`
--

INSERT INTO `PETT` (`Petid`, `Pet_Name`, `Gender`, `Breed`, `Spayed`, `Medical_History`, `DOB`, `Content`, `Profile_Pic`, `Userid`) VALUES
(1, 'Broc', 'Female', 'Ragdoll', 'Not Spayed/Neutered', 'sick Health', '2014-07-30', '', '20201125p1_generated.jpg', 1),
(2, 'Lole', 'Female', 'Schnoodle', 'hid', 'Good_Health', '2012-10-23', '', '20210331p1_generated.jpg', 1),
(16, 'Lulu', 'Female', 'Chow Chow', 'hid', 'Good health', '2020-11-25', 'IMG_1787.jpg', '20210331p1_generated.jpg', 2),
(17, 'Simon', 'Male', 'Chow Chow', 'Spayed/Neutered ', 'No history', '2018-08-19', 'Tutorial#11 - GUI Modelling 2.pdf', 'dog&cat.svg', 3),
(18, 'Loci', 'Female', 'Schnoodle', 'Spayed/Neutered ', 'Sick', '2018-09-14', 'IMG_1787.jpg', '20201125p1_generated.jpg', 4),
(31, 'Bobe', 'Male', 'Ragdoll', 'Not Spayed/Neutered', 'Good health', '2022-05-08', 'pet profile photo new.svg', '20210331p1_generated.jpg', 5),
(34, 'Kewiiiii', 'Male', 'Chow Chow', 'Spayed/Neutered Status', 'Good health', '2015-05-10', 'Emailicon.svg', '20201125p1_generated.jpg', 11),
(35, 'Sosi', 'Female', 'Ragdoll', 'hid', 'New borni', '2014-01-30', 'Emailicon.svg', 'Animal Faces Set_Vector_RON_03-ai (1).svg', 11),
(36, 'Kewii', 'Male', 'Monkey', 'hid', 'Good health', '2017-10-15', 'back1.svg', 'Animal Faces Set_Vector_RON_03-ai.svg', 11),
(37, 'Panda', 'Female', 'Schnoodle', 'Spayed/Neutered Status', 'nothing...', '2018-12-25', 'Emailicon.svg', 'Animal Faces Set_Vector_RON_03-ai (3).svg', 11),
(42, 'Buffy', 'Male', 'Brown', 'Spayed/Neutered Status', 'skin allergy', '2017-08-19', 'Pet Vaccination List.pdf', 'Animal Faces Set_Vector_RON_03-ai (1).svg', 18),
(43, 'Kiwi', 'Male', 'Drill', 'hid', 'Removed stone from bladder', '2016-09-17', 'Pet Vaccination List.pdf', 'Animal Faces Set_Vector_RON_03-ai.svg', 18),
(44, 'Simon', 'Male', 'malayan', 'Spayed/Neutered Status', 'back leg weakness ', '2020-12-31', 'Pet Vaccination List.pdf', 'Animal Faces Set_Vector_RON_03-ai (4).svg', 18),
(45, 'Lily', 'Female', 'Red', 'hid', 'SunStroke', '2016-05-14', 'Pet Vaccination List.pdf', 'Animal Faces Set_Vector_RON_03-ai (3).svg', 18);

-- --------------------------------------------------------

--
-- Table structure for table `Services`
--

CREATE TABLE `Services` (
  `Serviceid` int(11) NOT NULL,
  `Service_name` varchar(200) NOT NULL,
  `Date` varchar(50) NOT NULL,
  `Time` varchar(50) NOT NULL,
  `Picture_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Services`
--

INSERT INTO `Services` (`Serviceid`, `Service_name`, `Date`, `Time`, `Picture_id`) VALUES
(7, 'Boarding', '2022-05-21', '15:00', 5),
(8, 'bathing', '2022-05-15', '23:05', 6),
(9, 'Dentistry', '2022-05-31', '19:52', 4),
(13, 'Boarding', '2022-05-31', '19:52', 5),
(14, 'bathing', '2022-05-31', '19:52', 6),
(15, 'bathing', '2022-05-21', '15:00', 6),
(16, 'Dentistry', '2022-05-21', '15:00', 4),
(17, 'Dentistry', '2022-05-15', '23:05', 4),
(18, 'Boarding', '2022-05-15', '23:05', 5);

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `userid` int(11) NOT NULL,
  `Fname` varchar(30) NOT NULL,
  `Lname` varchar(30) NOT NULL,
  `Pnum` varchar(400) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Gend` varchar(200) NOT NULL,
  `Pass` varchar(200) NOT NULL,
  `Profile_Pic` varchar(400) NOT NULL,
  `code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`userid`, `Fname`, `Lname`, `Pnum`, `Email`, `Gend`, `Pass`, `Profile_Pic`, `code`) VALUES
(1, 'Sam', 'Amber', '0531220603', 'Sam22@hotmail.com', 'Male', 'aec7a53251b6ca1c61d326117c3714a1', 'image (3).svg', 0),
(2, 'Jes', 'Jemmy', '0529117492', 'Jes21@hotmail.com', 'Female', '0683e8c37220885bc5f04306325ae31f', 'CONTACTUSS.svg', 0),
(3, 'Alic', 'Kevin', '0541997267', 'Alic32@hotmail.com', 'Female', '5eb07fb962ef341cba1aa0c22f11e387', 'dog&cat.svg', 0),
(4, 'Marco', 'Jems', '0531990406', 'Marco0202@outlook.com', 'Male', '65ca4a4cf47df5496e603153e69f2c86', 'Boarding.svg', 0),
(5, 'Mice', 'Jems', '0529881692', 'Mice00@gmail.com', 'Male', '8899dc99244812841efcd02fc87dd96b', 'Dentistry.svg', 0),
(11, 'Maha  ', 'Fahad', '0531220304', 'Maha2@hotmail.com', 'Female', '9332b999053593bc52266808aea54365', 'CONTACTUSS.svg', 0),
(18, 'Danah', 'John', '0519002803', 'Danah@hotmail.com', 'Female', '9031a34e2dea95ccf6cecd10341487d4', 'vecteezy_big-bundle-of-business-people-avatars-set-of-male-and_-ai.svg', 0),
(19, 'Maha', 'Jems', '0539920402', 'nourahgr2@outlook.com', 'Female', 'bee69ae190b7e90b40e332a20d7e1fbc', 'Animal Faces Set_Vector_RON_03-ai (2).svg', 0),
(20, 'noha', 'Jemmy', '0541220507', 'mahaalbab10@gmail.com', 'Female', '657d5621d1b6e324c641cfd5e6b79d38', '20210331p1_generated.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `AboutUs`
--
ALTER TABLE `AboutUs`
  ADD PRIMARY KEY (`AboutId`);

--
-- Indexes for table `Appointment`
--
ALTER TABLE `Appointment`
  ADD PRIMARY KEY (`Appointmentid`),
  ADD KEY `petid` (`PETid`),
  ADD KEY `serviceiddddd` (`SERVICEID`);

--
-- Indexes for table `Feedback`
--
ALTER TABLE `Feedback`
  ADD PRIMARY KEY (`Feedbackid`),
  ADD KEY `feedback_ibfk_1` (`APPid`);

--
-- Indexes for table `Manager`
--
ALTER TABLE `Manager`
  ADD PRIMARY KEY (`Managerid`);

--
-- Indexes for table `Manager_Services`
--
ALTER TABLE `Manager_Services`
  ADD PRIMARY KEY (`MServicesid`);

--
-- Indexes for table `PETT`
--
ALTER TABLE `PETT`
  ADD PRIMARY KEY (`Petid`),
  ADD KEY `petOwner` (`Userid`);

--
-- Indexes for table `Services`
--
ALTER TABLE `Services`
  ADD PRIMARY KEY (`Serviceid`),
  ADD KEY `service` (`Picture_id`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `AboutUs`
--
ALTER TABLE `AboutUs`
  MODIFY `AboutId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Appointment`
--
ALTER TABLE `Appointment`
  MODIFY `Appointmentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `Feedback`
--
ALTER TABLE `Feedback`
  MODIFY `Feedbackid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `Manager`
--
ALTER TABLE `Manager`
  MODIFY `Managerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `Manager_Services`
--
ALTER TABLE `Manager_Services`
  MODIFY `MServicesid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `PETT`
--
ALTER TABLE `PETT`
  MODIFY `Petid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `Services`
--
ALTER TABLE `Services`
  MODIFY `Serviceid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Appointment`
--
ALTER TABLE `Appointment`
  ADD CONSTRAINT `petid` FOREIGN KEY (`PETid`) REFERENCES `PETT` (`Petid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `serviceiddddd` FOREIGN KEY (`SERVICEID`) REFERENCES `Manager_Services` (`MServicesid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Feedback`
--
ALTER TABLE `Feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`APPid`) REFERENCES `Appointment` (`Appointmentid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `PETT`
--
ALTER TABLE `PETT`
  ADD CONSTRAINT `petOwner` FOREIGN KEY (`Userid`) REFERENCES `Users` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Services`
--
ALTER TABLE `Services`
  ADD CONSTRAINT `service` FOREIGN KEY (`Picture_id`) REFERENCES `Manager_Services` (`MServicesid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
