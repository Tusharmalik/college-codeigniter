-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 09, 2018 at 01:31 AM
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
-- Table structure for table `department_hod`
--

CREATE TABLE `department_hod` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `qualification` varchar(500) NOT NULL,
  `message` text NOT NULL,
  `image` varchar(500) NOT NULL,
  `department` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department_hod`
--

INSERT INTO `department_hod` (`id`, `name`, `qualification`, `message`, `image`, `department`) VALUES
(1, 'Dr. Pramod Kumar', 'Ph.D in Computer Science & Engineering\r\n', 'Welcome to the Department of Computer Science and Engineering. In this department we create future computer engineers and responsible citizens.As Head of Department, I feel privileged to be leading a talented group of devoted faculty members. Our faculty, staff and students consistently show a strong commitment to excellence in research, teaching and service. Our students are the best of the best. A very friendly and congenial atmosphere exists for fostering a healthy teacher-student relationship.Here, students get the opportunity to excel in his academic activities. In our departments undergraduate students publish papers in international journals. At the same time, a student wishing to achieve some recognition in extra-curricular or co-curricular activities will also find the atmosphere helpful. We hold firm belief in our ability to succeed, and we nurture an attitude of self-reliance, confidence, commitment and responsibility to the motherland that we are to serve. Such is the psychology behind the department in effect. Department of Computer Science & Engineering believes in building career, enriching minds and provides a remarkable experience that lasts a life time. I am confident that the students of the department justify the credibility of the department by showing a high level of professional competence. Have a nice stay here and please achieve the best.', 'image/department/Cse/hod/pramod.jpg', 'computer_science'),
(2, 'Dr. Pramod Kumar', 'Ph.D in Computer Science & Engineering\r\n', 'Welcome to the Department of Computer Science and Engineering. In this department we create future computer engineers and responsible citizens.As Head of Department, I feel privileged to be leading a talented group of devoted faculty members. Our faculty, staff and students consistently show a strong commitment to excellence in research, teaching and service. Our students are the best of the best. A very friendly and congenial atmosphere exists for fostering a healthy teacher-student relationship.Here, students get the opportunity to excel in his academic activities. In our departments undergraduate students publish papers in international journals. At the same time, a student wishing to achieve some recognition in extra-curricular or co-curricular activities will also find the atmosphere helpful. We hold firm belief in our ability to succeed, and we nurture an attitude of self-reliance, confidence, commitment and responsibility to the motherland that we are to serve. Such is the psychology behind the department in effect. Department of Computer Science & Engineering believes in building career, enriching minds and provides a remarkable experience that lasts a life time. I am confident that the students of the department justify the credibility of the department by showing a high level of professional competence. Have a nice stay here and please achieve the best.', 'image/department/It/hod/pramod.jpg', 'information_technology'),
(3, 'Dr. Rashid Ali', 'Ph.D in Mathematics\r\n', '\"Krishna Engineering College, Ghaziabad is a centre of erudition where we nurture young talents in different fields of Engineering. Our major emphasis of imparting technical training to encourage curiosity and innovativeness among our students and lay a foundation from where they can acquire quick learning ability and adaptively with the fast changing needs of the industry. Our faculty members are experts in the areas they teach. Not only do they provide a solid grounding in the academic theories and concepts of their specialty, they also provide the students challenges facing their discipline. They provide the students the right balance of theory and practice. We emphasize team work to give opportunity to each student to benefit from the ideas and intelligence of their classmates. We continue to strive to meet our mission to mould youth into world-class technocrats of tomorrow who would endeavor to increase the quality of life for human kind. I am confident that our students would be asset to your organization through their technical and managerial capabilities. My aim is to actively assist you in attracting and identifying the individuals best suited to your needs and developing a successful recruitment relationship.\"', 'image/department/As/hod/photo_Rashid_Sir.JPG', 'applied_science'),
(4, 'Dr. A.N. Mishra ', 'Ph.D in Electronics and Communication Engineering\r\n', 'The fast advancing world expects a student to be aware of latest technologies in the world. An engineer not only should be able to write and speak well but should also possess ability to work with own hands and guide his juniors. He should be a leader and need to lead by actions. These qualities are possible only if students start feeling like an engineer and a responsible person and performs all roles expected of them to the best of their abilities. Students should sincerely attend extra classes like PDP, concept clearing etc. apart from regular classes, to be able to prepare team for outside world.', 'image/department/Ece/hod/Mishra_sir_xtnFQU9.jpg', 'electronic_communication'),
(5, 'Dr. A.N. Mishra', 'Ph.D in Electronics and Communication Engineering', 'Electricity is a form of energy and it occurs in nature. Benjamin Franklin, English Physician William Gilbert and Michael Faraday contributed in various measures to make vital use of electricity in technology.This, combined with discovery of Thomas Edison to produce the first practical filament lamp to eliminate New York electricity street lamps in 1882, were the starting steps for use of electricity impacting human lives. This process progressed by leaps and bounds and electricity as on date has become an essential requirement for all activities related to all spheres of human life. Electricity combined with Electronics has invaded in all activity of the world.The major contribution in improving the quality of life in the past and present century has been made by electricity and electronics. Electrical & Electronics Engineering department of KEC is having on its rolls the IITan faculty and researchers of repute.Students of EN department have performed exceptionally well in academics and brought laurels to the college by participating in various competitions in India and abroad. For example two students of EN department Ms. Chinki Kumari & Mr. Ish Ghai participated in NASA’ 17th Annual Great Moonbuggy Race held at the U.S. Space & Rocket Center in Huntsville, Alabama on 9th & 10th April 2010 and bagged prize in the category of “Best performance by an International Team”. I wish that the department with contribution of faculty grows strong with each passing day and students become global players by acquiring academic qualifications and other skills.', 'image/department/Ee/hod/Mishra_sir_eJOg113.jpg', 'electrical'),
(6, 'Prof. (Dr.) Sanjeev Kumar', 'Ph.D in Mechanical Engineering', 'I feel proud to introduce you to Department of Mechanical Engineering at Krishna Engineering College. Our Department provides a quality learning environment, in terms of academic standards and practical knowledge. The department has good infrastructure and is equipped with state of the art laboratories. The department has faculty members who have vast experience in their field. The faculty has succeeded in keeping a lively atmosphere among the students, with timely up gradations in the curriculum and innovative teaching techniques. Emphasis is also laid on making student innovative and acquires requisite skills to be successful entrepreneurs. Our goal is to provide students with a balance of intellectual and practical experiences that enable them to serve a variety of societal needs. We are highly ambitious, hopeful and optimistic about the future placement scenario of our students. Many of our Alumni are well-placed in reputed organizations. Pursuing cutting-edge and impactful research and development is also an essential feature of the department’s focus to search for realistic solutions. With our distinct student centered teaching-learning methodology, our students will be able to face challenges of life. Students are encouraged to indulge in extracurricular activities to shape them as leaders of tomorrow. All these efforts are followed ambitiously to develop the overall personality of the students so as to equip to face the challenges of the competitive world. I would like to conclude by saying “It doesn’t take a majority to make a rebellion; it takes only a few determined leaders and a sound cause”. I wish best of luck to all the students.', 'image/department/Mechanical/hod/sanjeev_Kumar.jpg', 'mechanical'),
(7, 'Dr. Archana Pandey', 'Ph.D in Environmental Science', 'Welcome all to the Department of civil engineering. Civil engineering is the oldest and broadest engineering discipline among all the engineering fields i.e. mother of all engineering branches. In today’s scenario a civil engineer should strive to provide a sustainable solution for infrastructural development and build environment. In the Department we have been creating knowledge resources to educate and train youths in the latest technologies in civil engineering, to inculcate in them human values, self confidence and independent thinking in solving different problems in the field of civil engineering so that they can serve the country and the human society at large. To achieve this we are working in different fields of civil engineering like hydraulics & water resources engineering, structural engineering & building construction, environmental engineering, transportation engineering and construction technology & management. Along with academic activities we have been organizing technical events, literally events and cultural events to develop soft skills i.e. interpersonal skills, communication skills and team work in students. So I invite you to fulfill your dreams of being successful and a very fruitful, happening and learning experience of life.', 'image/department/Civil/hod/archanapandey_rDAD3G7.jpg', 'civil'),
(8, 'Prof Pradip Kr Pathak', 'phd', 'Humanities department deals with the subjects that are mainly concerned with human beings whose behavior is highly unpredictable. The subjects taught by Humanities department are highly interactive, experiential and engaging, designed to empower the learner toward the process of analyzing one\'s life in relationship to the community in which one lives and works. This helps them achieve the expected results quickly and economically in terms of effective and efficient Management in the business dynamics.\r\n\r\nHumanities as a unique field of study are a synergy of economics, political science, human psychology, operations research and statistics as well as sociology. It is therefore, to be understood from all these perspectives. The study becomes more dynamic since it is applicable in a vibrant, ever changing and complex environment. The principles, rules and guidelines covered under the curriculum are so versatile that we find its pervasiveness everywhere. They guide probably in all situations, but their interpretations keep on changing in every such situation and from person to person. The department of Humanities is committed to impart adequate knowledge through interactive sessions, role plays, Management by objective (MBO) and case studies apart from regular lectures on different concepts/theories pertaining to Industrial psychology, Industrial sociology, Industrial Management, Engineering economics, Entrepreneurship development and more importantly Human values & professional ethics. In addition, we inculcate among the students, the habit of learning creative skills through active participation in annual literary fest and publication of college magazine “Impression”. I feel proud to lead an intellectual group of faculties. I am also confident that our students would continue to prove their mettle in professional arena and bring laurels to the Institution as a routine.\r\n\r\nAll the best! May God bless!!!!', 'image/department/Humanities/hod/PK_Pathak1.jpg', 'humanities');

-- --------------------------------------------------------

--
-- Table structure for table `department_new`
--

CREATE TABLE `department_new` (
  `id` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `link` varchar(300) NOT NULL,
  `pdf` varchar(300) NOT NULL,
  `department` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department_new`
--

INSERT INTO `department_new` (`id`, `title`, `link`, `pdf`, `department`) VALUES
(1, 'new', '', '', 'applied_science');

-- --------------------------------------------------------

--
-- Table structure for table `department_notice`
--

CREATE TABLE `department_notice` (
  `id` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `link` varchar(300) NOT NULL,
  `pdf` varchar(300) NOT NULL,
  `department` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department_notice`
--

INSERT INTO `department_notice` (`id`, `title`, `link`, `pdf`, `department`) VALUES
(1, 'notice', '', '', 'applied_science');

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
-- Indexes for table `department_hod`
--
ALTER TABLE `department_hod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department_new`
--
ALTER TABLE `department_new`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department_notice`
--
ALTER TABLE `department_notice`
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
-- AUTO_INCREMENT for table `department_hod`
--
ALTER TABLE `department_hod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `department_new`
--
ALTER TABLE `department_new`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `department_notice`
--
ALTER TABLE `department_notice`
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
