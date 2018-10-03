-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 03, 2018 at 07:20 PM
-- Server version: 5.7.23-0ubuntu0.18.04.1
-- PHP Version: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeigniter`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_aicte`
--

CREATE TABLE `about_aicte` (
  `id` int(11) NOT NULL,
  `link` varchar(300) NOT NULL,
  `text` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_aicte`
--

INSERT INTO `about_aicte` (`id`, `link`, `text`) VALUES
(1, 'pdf/about_institute/aicte/EOA_Report_2004-05.pdf', 'Approval for academic year 2004-05'),
(2, 'pdf/about_institute/aicte/EOA_Report_2005-06.pdf', 'Approval for academic year 2005-06'),
(3, 'pdf/about_institute/aicte/EOA_Report_2004-05.pdf', 'Approval for academic year 2004-05'),
(4, 'pdf/about_institute/aicte/EOA_Report_2005-06.pdf', 'Approval for academic year 2005-06'),
(5, 'pdf/about_institute/aicte/EOA_Report_2006-07.pdf', 'Approval for academic year 2006-07'),
(6, 'pdf/about_institute/aicte/EOA_Report_2007-08.pdf', 'Approval for academic year 2007-08'),
(7, 'pdf/about_institute/aicte/EOA_Report_2008-09.pdf', 'Approval for academic year 2008-09'),
(8, 'pdf/about_institute/aicte/EOA_Report_2009-10.pdf', 'Approval for academic year 2009-10'),
(9, 'pdf/about_institute/aicte/EOA_Report_2010-11.pdf', 'Approval for academic year 2010-11'),
(10, 'pdf/about_institute/aicte/EOA_Report_2011-12.pdf', 'Approval for academic year 2011-12'),
(11, 'pdf/about_institute/aicte/EOA_Report_2012-13.pdf', 'Approval for academic year 2012-13'),
(12, 'pdf/about_institute/aicte/EOA_Report_2013-14.pdf', 'Approval for academic year 2013-14'),
(13, 'pdf/about_institute/aicte/EOA_Report_2014-15.pdf', 'Approval for academic year 2014-15'),
(14, 'pdf/about_institute/aicte/EOA_Report_2015-16.pdf', 'Approval for academic year 2015-16'),
(15, 'pdf/about_institute/aicte/EOA_Report_2016-17.pdf', 'Approval for academic year 2016-17'),
(16, 'pdf/about_institute/aicte/EOA_Report_2017-18.pdf', 'Approval for academic year 2017-18'),
(17, 'pdf/about_institute/aicte/EOA_Report_2018-19.pdf', 'Approval for academic year 2018-19');

-- --------------------------------------------------------

--
-- Table structure for table `about_director`
--

CREATE TABLE `about_director` (
  `id` int(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  `name` varchar(300) NOT NULL,
  `paragraph` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_director`
--

INSERT INTO `about_director` (`id`, `image`, `name`, `paragraph`) VALUES
(1, 'image/about_institute/director/IMAG0575.jpg', 'Dr. Sandeep Tiwari', 'Krishna Engineering College, in its fourteen years of existence, has always shown a positive graph of growth in all areas of functionality. The institution has always endeavored to provide a value based academic curriculum to all the enrolled students through well experienced, motivated and highly qualified faculties.<br>\r\n\r\nAs India moves progressively towards becoming a ‘knowledge economy’ it becomes increasingly important that Professionals/Engineers focus on advancement of skills. Gone are the days when a B.Tech degree from the university with a traditional prescribed curriculum was sufficient to get a job. In the present day knowledge economy and fast changing technical contours, university curriculum coupled with re-added programs & certified add on course are need of the hour to bridge the gap between industry and the academia. To succeed in an era of globalization, rapid changes and fierce competition, engineers must therefore possess a diversity of skills and must meet the market’s requirements.<br>\r\n\r\nWe, at KEC, focus on cutting edge technology, innovations and creativity, hands on learning with an objective to impart a unique global exposure so as to empower youth to face the brave new world.');

-- --------------------------------------------------------

--
-- Table structure for table `about_management`
--

CREATE TABLE `about_management` (
  `id` int(11) NOT NULL,
  `heading` varchar(300) NOT NULL,
  `paragraph` text NOT NULL,
  `chairman_name` varchar(300) NOT NULL,
  `chairman_position` text NOT NULL,
  `vice_chairman_name` varchar(300) NOT NULL,
  `vice_chairman_position` text NOT NULL,
  `secretary_name` varchar(300) NOT NULL,
  `secretary_position` text NOT NULL,
  `treasurer_name` varchar(300) NOT NULL,
  `treasurer_position` text NOT NULL,
  `advisor_name` varchar(300) NOT NULL,
  `advisor_position` text NOT NULL,
  `director_name` varchar(300) NOT NULL,
  `director_position` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_management`
--

INSERT INTO `about_management` (`id`, `heading`, `paragraph`, `chairman_name`, `chairman_position`, `vice_chairman_name`, `vice_chairman_position`, `secretary_name`, `secretary_position`, `treasurer_name`, `treasurer_position`, `advisor_name`, `advisor_position`, `director_name`, `director_position`) VALUES
(1, 'About Management', 'Krishna Engineering College was launched under a charitable society “Friends Charitable Society (FCS)\" -by a group of eminent industrialist & Professionals of Ghaziabad with vast experience in educational system. The members of the society are experienced in running educational institutions, being already associated with other reputed institutions like KIET, AKGEC, IPEC in the region.', 'Shri Rakesh Garg', 'Secretary Ajay Kumar Garg Engg College, Ghaziabad', 'Shri Atul Garg', 'Secretary Inderprastha Engg College and Treasurer Krishna Institute of Engineering & Technology, Ghaziabad', 'Shri Sarish Chaudhary', 'Vice Chairman Krishna Institute of Engineering & Technology, Ghaziabad', 'Shri Sunil P Gupta', 'Secretary Krishna Institute of Engineering & Technology, Ghaziabad', 'Dr. Ajay Sharma', 'Ex-Director Krishna Institute of Engineering & Technology, Ghaziabad', 'Dr. Sandeep Tiwari', 'Director Krishna Engg College, Ghaziabad');

-- --------------------------------------------------------

--
-- Table structure for table `about_overview`
--

CREATE TABLE `about_overview` (
  `id` int(11) NOT NULL,
  `heading` varchar(300) NOT NULL,
  `paragraph` text NOT NULL,
  `brochur` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_overview`
--

INSERT INTO `about_overview` (`id`, `heading`, `paragraph`, `brochur`) VALUES
(1, 'About Krishna Engineering College', 'Krishna Engineering College (KEC, Ghaziabad) was established in 2004 by Friends Charitable Society (FCS) Ghaziabad. FCS has eminent Businessmen, Industrialists and Professionals as its members. FCS members are also associated with other leading Educational Institutions in NCR and other region of UP like Krishna Institute of Engineering & Technology (KIET), Inderprastha Engineering College (IPEC), and Krishna Dental College (KDC), Krishna Institute of Technology (KIOT), Krishna Girls Engineering College (KGEC), Krishna Institute of Management & Technology (KIMT). KEC has been established as an institution for the millennium with a vision to turn out scholars who will be Global Players when they leave the portals of KEC. With this vision in the background, the college endeavours to impart core technical knowledge, help students develop requisite soft skills, instil an adaptability for change and builds cross cultural compatibility to its students. The college is approved by AICTE (Ministry of HRD, Government of India) and is affiliated to AKTU, Lucknow. Starting with four programmes in B.Tech.,the college currently offers six programmes in B.Tech.(Computer Science & Engineering, Information Technology, Electronics & Communication Engineering, Electrical & Electronics Engineering, Mechanical Engineering and Civil Engineering) with an approved intake of 720 students/year. Within a span of 13 years, the college has established its credentials as an institution of repute by figuring among top 20 colleges of over 400 Engineering & Technology Institutions of AKTU in session 2016-17. The college infrastructure is a planned endeavour built over a period with care and concern keeping all the needs of a premier Engineering Institution. The campus is located in Mohan Nagar, Ghaziabad, next to IAF Station Hindon and is strategically located vis-a-vis Delhi (5 Km from border), Ghaziabad (6 Km), 12 km from Noida and other areas like Vasundhara, Vaishali & Kaushambi. The campus is spread over an area of 11 acres with plans for 3 academic blocks covering over 25000 Sq. meter of built up area, 3 Hostels (2 for boys and 1 for Girls) roughly with a capacity of 1000, an Auditorium, workshops, play grounds and quarters for the employees.', 'pdf/about_institute/KEC Brochure_13.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `scroller`
--

CREATE TABLE `scroller` (
  `id` int(11) NOT NULL,
  `pic` varchar(300) NOT NULL,
  `text` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scroller`
--

INSERT INTO `scroller` (`id`, `pic`, `text`) VALUES
(1, 'image/home/scroller/1518674612college.JPG', 'building'),
(2, 'image/home/scroller/college_top.jpg', 'top company');

-- --------------------------------------------------------

--
-- Table structure for table `training_overview`
--

CREATE TABLE `training_overview` (
  `id` int(11) NOT NULL,
  `image` varchar(300) NOT NULL,
  `heading` varchar(300) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training_overview`
--

INSERT INTO `training_overview` (`id`, `image`, `heading`, `text`) VALUES
(1, 'image/training_placement/overview/renu gautam.jpg', 'Ms. Renu Gautam (Placement Head)', '“The Sole aim of Training & Placement Cell is to make KEC the center of excellence in the region and nodal centre for the placement activities in this part of the country and beyond”. The students of Campus Recruitment process for the B.Tech final year students are eagerly awaiting to take their final step into a world that holds promises for them. We deem it our pleasure to invite your esteemed organization for participation in the Campus Recruitment Programme of this Institute. I take this opportunity to mention that the placement level achieved for the previous batches has been above 70%. Needless to say that the visiting team will be provided all assistance to accomplish the goal of quality selection of personnel for your Company. The Institute provides excellent infrastructure to support placement process”.');

-- --------------------------------------------------------

--
-- Table structure for table `training_team`
--

CREATE TABLE `training_team` (
  `id` int(11) NOT NULL,
  `image` varchar(300) NOT NULL,
  `name` varchar(300) NOT NULL,
  `designation` varchar(300) NOT NULL,
  `qualification` varchar(300) NOT NULL,
  `exp` varchar(300) NOT NULL,
  `contact` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `finishing_school_team` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training_team`
--

INSERT INTO `training_team` (`id`, `image`, `name`, `designation`, `qualification`, `exp`, `contact`, `email`, `finishing_school_team`) VALUES
(1, 'image/training_placement/team/renu gautam.jpg', 'Ms. Renu Gautam (Placement Head)', 'Head - Placement Department', 'MBA (Marketing)', '14.5 Years', '9999110882, 0120-2657731/32(Ext-137)', 'kecplacementcell@gmail.com', 1),
(2, 'image/training_placement/team/Manisha Photo.JPG', 'Ms. Manisha', 'Chief Training Coordinator', 'M. Psychology & HRDM', '7.5 Years', '', 'manisha.me@krishnacollege.ac.in', 0),
(3, 'image/training_placement/team/gurmeet.png', 'Mr. Gurmeet Singh Bedi', 'Coprporate Relations Officer', 'MBA (HR/IT),MCA', '11+ Years', '9997981259', 'gurmeet.singh@krishnacollege.ac.in', 1),
(4, 'image/training_placement/team/Ms Shilpi.JPG', 'Ms. Shilpi Vaish', 'Soft Skills Trainer', 'PGDBM, B. Tech(IT)', '8 Years', '', 'shilpirana27@gmail.com', 0),
(5, 'image/training_placement/team/PRASHANT.jpg', 'MR. Prashant Malik', 'Aptitude Trainer', 'B.Tech(ECE 2012)', '4.5 Years', '', 'prashantmalik22@gmail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_aicte`
--
ALTER TABLE `about_aicte`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_director`
--
ALTER TABLE `about_director`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_management`
--
ALTER TABLE `about_management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_overview`
--
ALTER TABLE `about_overview`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scroller`
--
ALTER TABLE `scroller`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `training_overview`
--
ALTER TABLE `training_overview`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `training_team`
--
ALTER TABLE `training_team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_aicte`
--
ALTER TABLE `about_aicte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `about_director`
--
ALTER TABLE `about_director`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `about_management`
--
ALTER TABLE `about_management`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `about_overview`
--
ALTER TABLE `about_overview`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `scroller`
--
ALTER TABLE `scroller`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `training_overview`
--
ALTER TABLE `training_overview`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `training_team`
--
ALTER TABLE `training_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
