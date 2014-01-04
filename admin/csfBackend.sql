-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Host: csf.db
-- Generation Time: Jan 04, 2014 at 07:15 AM
-- Server version: 5.3.12-MariaDB
-- PHP Version: 5.3.27-nfsn1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `csfBackend`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE IF NOT EXISTS `activities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `date` text NOT NULL,
  `desc` text NOT NULL,
  `users` text NOT NULL,
  `limit` int(11) NOT NULL DEFAULT '0',
  `close` tinyint(1) NOT NULL DEFAULT '0',
  `curr` int(11) NOT NULL DEFAULT '0',
  `complete` int(11) NOT NULL,
  `time` text NOT NULL,
  `location` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `name`, `date`, `desc`, `users`, `limit`, `close`, `curr`, `complete`, `time`, `location`) VALUES
(4, 'Garden Volunteering', '1379741081', 'Officer in Charge: Ria \r\n\r\nthe entrance closest to Norman Way and two blocks west on Dunford Way from our main gates.  If you drive, then park on Dunford Way, enter the farm through the open gate, and proceed north towards Peterson Middle School about 200 ft. to the garden shed. \r\n\r\nYou will be helping with a variety of gardening tasks. Gloves will be provided but please bring your own if you would like.\r\n\r\nBring this: http://www.fullcirclesunnyvale.org/get-involved/volunteer-waiver/', ',5120784,5112409,5101775,5101777', 10, 0, 4, 1, '10am - 1pm', '955 Dunford Way, Sunnyvale, CA.'),
(5, 'Vibha Table Tennis Tournament', '1380382224', 'Officer for a Day: Priyanka \r\n \r\nThe second annual table tennis tournament is one of the many events Vibha organizes. At this event, you will be helping with registrations, the bake sale, and even MC-ing the event. Vibha is a non-profit organization that works towards providing an education for underprivileged children all around the world.', ',5121652,5120633,5120248,5112058,5111961', 5, 0, 5, 1, '3:30PM-6:00PM (3 hrs will be given)', '525 Los Coches St, Milpitas, CA &#8206;'),
(3, 'Collective Roots Gardening: Palo Alto Charter School', '1379732400', 'Officer in Charge: Alice\r\n\r\nWe''ll spend the morning doing a range of seasonal tasks, as needed: weeding, mulching, harvesting, planting, greenhouse chores, compost turning, chicken care, etc. \r\n\r\nWe have tools and gloves for you to use.\r\n\r\nPlease bring a water bottle & a snack and dress in comfortable clothes you don''t mind getting dirty and wear closed-toed shoes. We also always suggest wearing a hat & sunscreen. \r\n\r\nPlease bring this waiver: https://docs.google.com/file/d/0Bwt7yGdjjWniNnZaMUoyVk5oWE0/edit?usp=sharing', ',5111961,5112158', 5, 1, 2, 1, '9AM - 12PM', 'East Palo Alto Charter School, 1286 Runnymede Street, East Palo Alto, CA 94303. '),
(11, 'Halloween Haunt: Family Party', '1382850000', 'Officer in charge: Ramana\r\n\r\nHelp young families pick out their pumpkin, stuff scarecrows and find their way around the farm - this is a very small, laid back pumpkin patch event for toddlers, very mellow! \r\nPlease arrive promptly at 12 noon for CHECK-IN at the Wolken Education Center. Bring your signed Liability Release Form: https://docs.google.com/document/d/1Gw-5fzOqvJb_ntTmw0cV_8EPH5dKB9PuOcbj_72pTRU/edit \r\n\r\nALL VOLUNTEERS, for both events, MUST BRING:\r\n- Signed Liability Release Form. Form is below. Print out and have your guardian sign.\r\n-  A flash light for evening events. Wearing a wristwatch is also helpful, cell phones not reliable here.\r\n- Dress warm and in layers!!  It gets chilly on the farm after the sun goes down. \r\n- This is a rain or shine event – if it’s raining we still need you to come! Bring a raincoat or poncho if rain predicted.\r\n- Please dress up in costume or a funny hat (nothing too scary or gory, as we have kids as little as 1-3 years old).  Arrive in your costume ready to go.\r\nIMPORTANT:\r\n- If you are being driven, let your rides know that drop off and pickup is at the same location:\r\nDrop off and Pickup both are at the Wolken Education Center.\r\n- Cell phones DON’T WORK out here. Don’t rely on calling someone for a ride.\r\n- If you are driving yourself, please arrive a little earlier and park at the Dana Center Parking Lot and walk to the Wolken Education Center for Check-in. It is a ten minute walk.', ',5101378,5101756,5101406,5112205,5112720,5121696,5120623,5121901,5122613,', 10, 0, 10, 1, '12:00 PM - 4:30 PM Rounds to 5 hours', 'Hidden Villa Farm 26870 Moody Road Los Altos Hills, CA 94022'),
(7, 'Breath of Life Walk 2013', '1380357024', 'Officer in Charge: Emily\r\n\r\nBreathe California''s Breath of Life Walk is an annual event to raise funds for their many programs and services on lung disease and lung health.\r\nYou will be helping out with different tasks such as registration, course set-up, course marking, food stand, and course monitor. There will be coffee and snacks provided for all volunteers!\r\n', ',5112025,5121799,5121961,5120743,5101775,5122876,5122938,5112065,5120713,5121676,5121957,5101504,5101748,5112223,5120581,5101789,5101495,5120728,5120791,5102795,5112476', 21, 0, 21, 1, '8:30AM-11:30AM', 'West Valley College @ 14000 Fruitvale Avenue Saratoga, CA 95070'),
(8, 'McClellan Ranch Park Helping Hands', '1380967217', 'Officer in Charge: Emily\r\n\r\nWe will be tending the park grounds in various ways such as community garden assistance, trail maintenance, creek cleanup, and invasive plant removal. If you haven''t volunteered with Helping Hands before, make sure to fill out this waiver before coming! http://www.cupertino.org/index.aspx?page=1034', ',5101810,5121836,5111961,5121901,5112303,5112084,5122607,5112546,5112365,5121962', 10, 0, 10, 1, '10AM-12PM', 'McClellan Ranch Park @ 22221 McClellan Rd, Cupertino, CA &#8206;'),
(9, 'Halloween Haunt', '1382813558', 'Officer in Charge: Ria\r\n\r\nGuides lead groups through the farm on a "Pumpkin Walk" to trick or treat.  You will stop at each “pumpkin” station and receive a treat (we give out toys, not candy) from one of our intern characters.  At the end of the trail there is party with a popcorn machine, games, treats and hot cider.   They will provide you all training and dinner. \r\nPlease arrive promptly at 4:45pm for CHECK-IN at the Wolken Education Center. Bring your signed Liability Release Form: https://docs.google.com/document/d/1Gw-5fzOqvJb_ntTmw0cV_8EPH5dKB9PuOcbj_72pTRU/edit\r\n\r\nALL VOLUNTEERS, for both events, MUST BRING:\r\n- Signed Liability Release Form. Form is below. Print out and have your guardian sign.\r\n-  A flash light for evening events. Wearing a wristwatch is also helpful, cell phones not reliable here.\r\n- Dress warm and in layers!!  It gets chilly on the farm after the sun goes down. \r\n- This is a rain or shine event – if it’s raining we still need you to come! Bring a raincoat or poncho if rain predicted.\r\n- Please dress up in costume or a funny hat (nothing too scary or gory, as we have kids as little as 1-3 years old).  Arrive in your costume ready to go.\r\nIMPORTANT:\r\n- If you are being driven, let your rides know that drop off and pickup is at the same location:\r\n                       Drop off and Pickup both are at the Wolken Education Center.\r\n- Cell phones DON’T WORK out here. Don’t rely on calling someone for a ride.\r\n- If you are driving yourself, please arrive a little earlier and park at the Dana Center Parking Lot and walk to the Wolken Education Center for Check-in. It is a ten minute walk.', ',5121696,5120830,5101777,5120623,5101786,5101732,5112080,5121676,5120713,5121957,5101748,5112058,5120581,5101841,5101495,5112122,5101426,5101437,5101433,5112303,5121901,5101465,5121678,5112628,5112466,5101682', 30, 0, 26, 1, '5pm-9pm', 'Hidden Villa Farm 26870 Moody Road Los Altos Hills, CA 94022'),
(10, 'Halloween Haunt', '1382717377', 'Officer in Charge: Emily\r\n\r\nGuides lead groups through the farm on a Pumpkin Walk to trick or treat. You will stop at each pumpkin station and receive a treat (we give out toys, not candy) from one of our intern characters. At the end of the trail there is party with a popcorn machine, games, treats and hot cider. They will provide you all training and dinner. \r\nPlease arrive promptly at 4:45pm for CHECK-IN at the Wolken Education Center. Bring your signed Liability Release Form: https://docs.google.com/document/d/1Gw-5fzOqvJb_ntTmw0cV_8EPH5dKB9PuOcbj_72pTRU/edit \r\n\r\nALL VOLUNTEERS MUST BRING: \r\n- Signed Liability Release Form. Form is linked above. Print out and have your guardian sign. \r\n- A flash light for evening events. Wearing a wristwatch is also helpful, cell phones not reliable here. \r\n- Dress warm and in layers!! It gets chilly on the farm after the sun goes down. \r\n- This is a rain or shine event. If it is raining we still need you to come! Bring a raincoat or poncho if rain predicted. \r\n- Please dress up in costume or a funny hat (nothing too scary or gory, as we have kids as little as 1-3 years old). Arrive in your costume ready to go. \r\n\r\nIMPORTANT: \r\n- If you are being driven, let your rides know that drop off and pickup is at the same location: \r\nDrop off and Pickup both are at the Wolken Education Center. \r\n- Cell phones do NOT work out here. Do not rely on calling someone for a ride. \r\n- If you are driving yourself, please arrive a little earlier and park at the Dana Center Parking Lot and walk to the Wolken Education Center for Check-in. It is a ten minute walk.', ',5121811,5112021,5112483,5112200,5112065,5112042,5112291,5112536,5112351,5101784,5101347,5101389,5121901,5112323,5121666,5121690,5120765,5122892,5121744,5122715,5112376,5112365,5112285,5112114,5120768,5120680,5120636,5121781,5121911,5112628', 30, 0, 30, 1, '5:00PM-9:00PM', 'Hidden Villa Farm 26870 Moody Road Los Altos Hills, CA 94022'),
(12, 'Audubon Society Envelope Stuffing Shift 1', '1384140483 ', 'Officer in Charge: Linda\r\n\r\n<b>***Just a reminder that this is on Veteran''s Day, so no school! </b>\r\nCome help stuff, seal, and stamp envelopes for Santa Clara Audubon Society''s annual fundraiser mailing party! This is an important effort as the funds generated from this mailing are one of Santa Clara Valley Audubon''s primary sources of financial support. This project is simple but absolutely crucial to the fundraising effort.\r\n\r\nIt''ll be a fun, low-key afternoon with free snacks and sweets. Participants can socialize all they want as they work on the mailing. There will be a raffle for participants at the end of the event, too! So come and stuff envelopes for a good cause :)\r\n', ',5120784,5112409,5121971,5121696,5120623,5112310,5121780,5121836,5112536,5112483,5101670,5112291,5101811,5112546', 14, 0, 14, 1, '1PM-3:45PM (rounds to 3 hours)', '22221 McClellan Rd. Cupertino, CA  95014 (McClellan Ranch Park)'),
(13, 'Audubon Society Envelope Stuffing Shift 2', '1384140483', 'Officers for a Day: Sarah Lim & Shivangi Sharma \r\n\r\n<b>***Just a reminder that this is on Veteran''s Day, so no school! </b>\r\n\r\nCome help stuff, seal, and stamp envelopes for Santa Clara Audubon Society''s annual fundraiser mailing party! This is an important effort as the funds generated from this mailing are one of Santa Clara Valley Audubon''s primary sources of financial support. This project is simple but absolutely crucial to the fundraising effort. \r\n\r\nIt''ll be a fun, low-key afternoon with free snacks and sweets. Participants can socialize all they want as they work on the mailing. There will be a raffle for participants at the end of the event, too! \r\nSo come and stuff envelopes for a good cause :) ', ',5101869,5121836,5112412,5101789,5120673,5121901,5112418,5101898,5101800,5112122,5101748,5101504,5121822,5112628', 14, 0, 14, 1, '3:30PM-6:15PM (rounds to 3 hours)', '22221 McClellan Rd. Cupertino, CA  95014 (McClellan Ranch Park)'),
(14, 'Wildlife Education Day (Shift 1) ', '1382746239', 'Officer in Charge: Linda \r\n\r\n<b> Please make sure you can attend this event before signing up. </b>\r\n\r\nCome help out at the 22nd annual SCVAS Wildlife Education Day at Blackberry Farm! \r\n\r\nThis large event hosts 25-30 environmental organizations from around the Bay Area, has live animal presentations and demonstrations, and attracts up to 700 participants each year. \r\n\r\nVolunteers will help with various tasks including: setting up and cleaning up tables/chairs/canopies, helping out at the nature arts/crafts table (pine cone bird feeders, button making, "Make your own Binoculars"), as well as assisting with registration and traffic control. \r\n\r\nLight snacks will be provided for volunteers. \r\n', ',5121825,5112412,5112026,5121901,5112030,5101898,5101800,5122860,5120728,5112011,5122938,5121856,5101437,5112187,5121836', 15, 0, 15, 1, '9:15AM-12:15PM', '21979 San Fernando Avenue, Cupertino, CA 95014 (Blackberry Farm)'),
(15, 'Wildlife Education Day (Shift 2) ', '1382746239', 'Officer in Charge: Linda \r\n\r\n<b> Please make sure you can attend this event before signing up. </b>\r\n\r\nCome help out at the 22nd annual SCVAS Wildlife Education Day at Blackberry Farm! \r\n\r\nThis large event hosts 25-30 environmental organizations from around the Bay Area, has live animal presentations and demonstrations, and attracts up to 700 participants each year. \r\n\r\nVolunteers will help with various tasks including: setting up and cleaning up tables/chairs/canopies, helping out at the nature arts/crafts table (pine cone bird feeders, button making, "Make your own Binoculars"), as well as assisting with registration and traffic control. \r\n\r\nLight snacks will be provided for volunteers. \r\n', ',5101869,5112351,5122607,5112066,5112187,5101570,5120768,5120656,5121901,5111961,5121825,5112389,5112098', 15, 0, 13, 1, '12:15PM-3:15PM', '21979 San Fernando Avenue, Cupertino, CA 95014'),
(16, 'Out of Darkness Community Walk', '1382918195', 'Officer in Charge: Dipsikha\r\nEach year, the American Foundation for Suicide Prevention hosts walks across the country to raise awareness for suicide. Come help set up and support! More details will be emailed out as the event date approaches (Rounds to 3 hours)', ',5121969,5121822,5121980,5121872,5101791', 5, 0, 5, 1, '7:30-10am', 'De Anza Community College  Cupertino, CA'),
(17, 'Halloween Monster Bash', '1382755097', 'Officer in Charge: Michelle\r\n\r\nCome celebrate Halloween with your family, friends and neighbors at the Mountain View Monster Bash!  An outdoor movie will be featured along with Halloween games, music and light refreshments. \r\n\r\nAll volunteers must bring the following liability form: \r\nhttps://docs.google.com/file/d/0BwPLxq-xOhdCbFBtdXBmRDl6WGM/edit?usp=drive_web&pli=1', ',5112065,5112066,5101827,5101791,5121856', 5, 0, 5, 1, '5:00 pm to 6:30 pm', '201 S Rengstorff Ave, Mountain View, CA 94040'),
(18, '2013 Purple Light Silicon Valley', '1382843135', 'Officer in Charge: Emily\r\nDetails will be emailed out soon!', ',5101791,5121872,5101851,5121969,5112026,5121901,5121836', 6, 0, 7, 1, '5pm-7pm', 'Cali Mill Park Stevens Creek and De Anz Blvd Cupertino, CA 95014'),
(19, 'Walk to End Alzheimer''s Shift 2', '1381600746', 'Officer in Charge: Linda \r\n\r\nWalk to End Alzheimer''s is the Alzheimer''s Association''s annual signature event to educate, advocate, raise public awareness and funds for Alzheimer''s disease research and support services. We attract 4,000 walkers and need volunteers to help with final breakdown and clean up of the event. We have to leave the park as clean as we found it!\r\n\r\n', ',5121901,5112418,5122860', 5, 0, 3, 1, '12:00PM-3:00PM', 'Arena Green Park (W Santa Clara St (at N Autumn St) San Jose, CA 95113)'),
(21, 'Making Strides Walk', '1382800748', 'Officer in Charge: Ria \r\n\r\nWe will be be stationed along the route, cheering on walkers!\r\n\r\nAll volunteers must submit a Release Waiver of Liability to me the morning of the walk at the Volunteer Hospitality Tent where you will check in. https://docs.google.com/file/d/1_LDhD2JjVvwkhz5q6onW7pQbcADILvh4w03Phi-vxjv77fd1ZmszUW81pkAG/edit?usp=drive_web', ',5101888,5112158', 15, 0, 2, 1, '8:45am-11:30am', ' Arena Green, Guadalupe River Trail                    N Autumn St. San Jose, CA  95113'),
(20, 'Walk to End Alzheimer''s Shift 1', '1381546800', 'Officer in charge: Alice\r\n\r\nWalk to End Alzheimer''s is the Alzheimer''s Association''s annual signature event to educate, advocate, raise public awareness and funds for Alzheimer''s disease research and support services. We attract 4,000 walkers and need volunteers to help with final breakdown and clean up of the event. We have to leave the park as clean as we found it! \r\n', ',5112343,5112223,5112259,5112525,5121901', 5, 0, 5, 1, '9:00AM-11:30AM', 'Arena Green Park (W Santa Clara St (at N Autumn St) San Jose, CA 95113)'),
(22, 'Making Strides Walk', '1382800748', 'Officer in Charge: Ria\r\n\r\nWe will be helping as the clean up crew by taking down the event once it is over. \r\n\r\nAll volunteers must submit a Release Waiver of Liability to me the morning of the walk at the Volunteer Hospitality Tent where you will check in. For all under the age of 18, their forms must be signed by a legal guardian prior to volunteering. https://docs.google.com/file/d/1_LDhD2JjVvwkhz5q6onW7pQbcADILvh4w03Phi-vxjv77fd1ZmszUW81pkAG/edit?usp=drive_web', ',5101888', 15, 0, 1, 1, '11:45am - 2:30pm', 'Arena Green, Guadalupe River Trail N Autumn St. San Jose, CA 95113'),
(23, 'Pancake Breakfast', '1381551637', 'Officer in Charge: Michelle\r\n\r\nPLEASE SIGN UP AS SOON AS POSSIBLE! \r\n\r\nAs part of the Music Booster''s fundraising efforts, Abraham Lincoln High School will be hosting their annual pancake breakfast. Please plan to arrive about 15 minutes early, head toward the Gym, and report to the Volunteer Check-In table.', ',5112025,5121744,5121666', 5, 0, 3, 1, '8:30 am to 10:30 am', 'Lincoln High School, 555 Dana Ave, San Jose, CA 95126'),
(24, 'Harvest Night Shift 1', '1383199227', 'Officer in Charge: Emily\r\nEvery year Home of Christ Church in Cupertino has a Harvest Night at their church. Come help facilitate and set up their stations!', ',5112476,5101570,5101841,5112530,5121706,5121971,5101590,5101660,5120743,5111973,5112084,5101786,5121799,5120816,5121979', 16, 0, 15, 1, '6PM-8PM', 'HOC5 @ 10340 Bubb Rd., Cupertino CA, 95014'),
(25, 'Harvest Night Shift 2', '1383206427', 'Officer in Charge: Emily\r\nEvery year Home of Christ Church in Cupertino has a Harvest Night at their church. Come help facilitate and clean up their stations!\r\n', ',5112476,5112530,5101489,5120620,5101590,5101660,5121811,5101786,5120816', 16, 0, 9, 1, '8PM-10PM', 'HOC5 @ 10340 Bubb Rd., Cupertino CA, 95014'),
(27, 'Zoom Turkey Trot', '1385609670', 'Officer in Charge: Michelle\r\n\r\nPlease make sure you can attend before signing up! \r\n\r\nHelp out Thanksgiving morning at the Zoom Turkey Trot! We''ll be helping at the finish line (taking pictures of finishers and handing out finisher''s medals) and the finish area aid station (keeping the food stocked and the runners fed).\r\n\r\nParking is $5, but if you''re getting dropped off, ask the parking attendant if you can drive in without paying.\r\n\r\nPlease meet me, Wendell or Steve at the Start/Finish area at the parking lot by the Buena Vista Group Area in Hellyer Park (in the south part of the park by Cottonwood Lake) for instructions at 7:30 a.m.  Here is a map of Hellyer Park: http://www.sccgov.org/sites/parks/parkfinder/Documents/332560hellyer.pdf\r\n\r\n', ',5121961,5121971,5112471,5112343,5111996,5112030,5121865,5120765,5121811,5112628', 10, 0, 10, 1, '7:30am-11:30am', 'Hellyer County Park: 985 Hellyer Ave., San Jose, CA 95111.'),
(26, 'Breakfast with Santa', '1386389211', 'Officer in Charge: Michelle\r\n\r\nVolunteers will be helping at the crafts table during this annual Christmas event! More details to come!\r\n', ',5112351,5112550,5112298,5112187,5122613,5101579,5121865,5121856,5112080,5121897,5120743,5101810,5121836,5101791,5112200', 15, 0, 15, 1, '8:00 am to 11:00 am', 'Quinlan Community Center  10185 N. Stelling Road  Cupertino, CA, 95014'),
(29, 'Thanksgiving Dinner', '1384581690', 'Officer in Charge: Ria\r\n\r\nWe could be doing any of the following :)\r\nSet up of tables, table coverings, place center pieces on table, place program, donation & applications on tables, set up chairs\r\n\r\nDecorations, set up desert place, and drink station\r\n\r\nSet up silent auction, raffle table and put ticket under chair for drawing for the center piece.\r\n\r\nServers, at buffet and or serve the tables..this is a very important spot to be on their toes, we need to get the food served as quick we can since we are on a time limit, I would like everyone eating at the same time. we will have entertainment during the performance\r\n\r\nGathering of the donation & applications forms\r\n\r\nClean up. kitchen, tear down tables, chairs & sweep', ',5112475,5112011,5112062,5101846,5112058,5112550,5112298,5112471,5112215,5112351,5101560,5101811,5112628,5121865,5120673', 15, 0, 15, 1, '1pm - 4pm', 'Alum Rock United Methodist Church 30 Kirk Ave San Jose, CA 95127'),
(30, 'Thanksgiving Dinner', '1384581690', 'Officer in Charge: Ria\r\n\r\nWe could be doing any of the following :)\r\nSet up of tables, table coverings, place center pieces on table, place program, donation & applications on tables, set up chairs\r\n\r\nDecorations, set up desert place, and drink station\r\n\r\nSet up silent auction, raffle table and put ticket under chair for drawing for the center piece.\r\n\r\nServers, at buffet and or serve the tables..this is a very important spot to be on their toes, we need to get the food served as quick we can since we are on a time limit, I would like everyone eating at the same time. we will have entertainment during the performance\r\n\r\nGathering of the donation & applications forms\r\n\r\nClean up. kitchen, tear down tables, chairs & sweep', ',5112011,5101446,5101626,5112388,5101374,5101389,5101347,5111961,5101818,5121911,5101777,5120636,5120680,5122715,5120665', 15, 0, 15, 1, '4pm - 7pm', 'Alum Rock United Methodist Church 30 Kirk Ave San Jose, CA 95127'),
(32, 'Salvation Army Food Box Maker', '1386402081', 'Officer for a Day: Aarohi Palkar\r\n\r\nPlease sign up ASAP (by Nov. 25) and make sure you can attend! \r\n\r\n Volunteers will follow a few instructions to make a flat pre-cut cardboard into a box. Food will be put in boxes the following week and distributed  to 1700 families for Christmas.\r\n\r\nAll volunteers must bring the following forms with them:\r\nFor adult volunteers (18 years and above): https://docs.google.com/file/d/1LzxGkVr9CFBA-KltLidh7KdA9KUSThAnClNq922hoxL0RhrOzekfoRWHQ8rx/edit\r\nFor minors (17 and younger): https://docs.google.com/file/d/1pPHLWOtu7dHvFDqnEn449GagpDRVf6G458fATRZrHRJgsScgyywECpLApI3C/edit\r\nFor all: https://docs.google.com/file/d/1mwgLdHx7HaTI80gaZD_cRL7BXXEBkuR_AbIFCn56S4IELbX_TIq4isKlYXi9/edit\r\n(You will need to bring 2 forms, depending on your age)\r\n', ',5121827,5120656,5112462,5112475,5112310,5122938', 9, 0, 6, 1, '9 am-11:30 am', 'Santa Clara County Fairgrounds: Gateway Hall, 344 Tully Road, San Jose, CA 95113 *Actual event is not at the fairgrounds, it is at a nearby building; this is only the meeting point. Meet me at the flagpole by the blue arch and entrance to the fairgrounds.'),
(31, 'Our City Forest', '1385166296', 'Officer in Charge: Dipsikha\r\nCome help plant trees with Our City Forest!! More details will be emailed out shortly', ',5101560,5101846,5101694,5101618,5101888', 5, 0, 5, 1, '9:00 AM - 12:00 PM', 'Las Plumas Ave, San Jose, CA 95133'),
(33, 'Wreath Making at Shinn Park', '1385780400', 'Officer in Charge: Alice\r\n\r\nFor anyone who wants fun, comraderie, and wants to learn how to make a wreath...come to our wreath making at Shinn Park and Arboretum! Every year we have classes and make wreaths to adorn the Shinn House windows for the Christmas holidays. We use real greenery and can give lessons for those that need it. It''s fun, you are in great company, and you are at one of the oldest Historical parks in Fremont. For $5.00 you can take one of the wreaths you make home!\r\nPLEASE bring a pruners and gloves if you have them! \r\nYou will be give 3 hours for this event.', ',5112237,5121962,5112310,5112628,5121901', 5, 0, 5, 1, '10:30 AM - 1 PM', '1251 Peralta Blvd. Fremont, CA  94536'),
(34, 'Holiday Food Box Distribution', '1387773820', 'Officer for a Day: Amy Liu\r\n\r\nHelp distribute Holiday Food Boxes to disadvantaged families. You will distribute food boxes, bread, and a frozen turkey or chicken in the assembly line team method.\r\n\r\nIt''s going to be cold, so make sure that you dress up in multiple layers! Gloves are recommended. Please make sure that you can make it to the event.', ',5112462,5112516,5121825,5112388,5120753', 5, 0, 5, 1, '8:30AM-1:30PM', 'Santa Clara County Fairgrounds: Gateway Hall, 344 Tully Road, San Jose, CA 95113 '),
(35, 'RAFT', '1390014000', 'Officer for a Day: Yamini Kukreja and Malini Pathakota\r\nRAFT is a warehouse store where teachers can buy discounted supplies for their classroom like stationery, paper, science kits and craft supplies, all donated from other businesses. We will be sorting donations, assembling kits and doing other similar tasks.', ',5112058,5101374,5111996,5112200,5101791,5112483,5112536,5121901,5112043,5121146,5111973,5101821,5112966', 13, 0, 13, 0, '1:00PM - 4:00PM', '1355 Ridder Park Dr, San Jose, CA 95131'),
(36, 'Holiday Tree Lighting ', '1386575628', 'Officer for a Day: Evan Zhang\r\nWe''ll be needing 10 volunteers to come help with the setting up of the tree in Mountain View. This is a really fun event and I hope you guys can make it. Though the event is on a Monday night, it will not take too long. All volunteers must be at least 14 years of age. Bring the following forms with you:\r\nhttps://docs.google.com/file/d/0BwPLxq-xOhdCWk53cmh3cjRBLW1VSHNOdGJFOUx2TmJlcTJR/edit\r\n\r\nhttps://docs.google.com/file/d/0BwPLxq-xOhdCblRYNW9BZGpjc1gxWHNfZVAzSk9zQUZzWHkw/edit\r\n', ',5121146,5101791,5121901,5112043,5120765,5112466,5112042', 10, 0, 7, 1, '5pm - 8pm', 'Mountain View City Hall Plaza, 500 Casto Street Mountain View,CA 94041'),
(37, 'Run Turkey Run', '1385682039', 'Officer in Charge: Emily \r\n\r\nCome help out at Run Turkey Run! We will be helping out with course safety. :)', ',5121146,5121836,5120665,5112026,5112538,5121911,5113007,5121901', 10, 0, 8, 1, '7:45AM-9:45AM (2 hours, but some members who stay after received 3!)', 'Leland High School, : 6777 Camden Ave, San Jose, CA 95120'),
(38, 'Distribute Christmas gifts!', '1386989942', 'Officer for a day: Oindril Dutta and Ananya Trivedi \r\n\r\nHelp pass out toys and Christmas gifts to families in need. We will also be dressing up as elves, so bring any santa hats/festive clothing that you have!', ',5112628,5121865,5112058,5112065', 15, 0, 4, 0, '1-6 PM', 'Alum United Methodist Church (30 Kirk Avenue, San Jose 95217)'),
(39, 'Veggielution Gardening', '1386398298', 'Officer for a Day: Royce Yang and Eric Peng\r\nYou guys will be assisting with tasks such as pulling weeds, turning compost, planting in the greenhouse, transplanting in the fields, maintaining crops, harvesting, and much more. There is a potluck lunch from 12:30p-1:30p, during which all of the volunteers will gather together to share a meal. You are welcome and encouraged to bring a healthy side or dish or snack to share. \r\n(If you''re under 18 you will need to bring this signed waiver: bit.ly/IsMIr7)', ',5121872', 10, 0, 1, 0, '10am-3pm', '647 South King Road  San Jose, CA 95116'),
(41, 'McClellan Ranch Park Helping Hands', '1388826053', 'Officers for a Day: Ashley Chien and Priyanka Agarwal\r\n\r\nWe will be focusing on invasive plant removal, native plant propagation, litter removal, trail restoration, and community garden assistance.  We will meet by the Nature museum, which is right in front of the parking lot. Sign and bring this waiver https://docs.google.com/document/d/170Z9vC1l4q8pzOEgrTFCnKhwc070cJ3GPYNGpwuPY-E/edit#heading=h.gjdgxs\r\n. There is no need to fill out anything besides the main signatures and emergency contacts.', ',5120768,5101818,5112408,5112291,5112536,5101433,5120599,5121791,5120784', 9, 0, 9, 0, '9AM-12PM', 'McClellan Ranch Park @ 22221 McClellan Rd, Cupertino, CA &#8206;'),
(42, 'Our City Forest Neighborhood Planting', '1387595677', 'Officers for a Day: Matthew Li and Isabella Teng\r\nThis will be a neighborhood tree planting event. We will be planting 32 trees and 30+ shrubs in the N 17th-20th st. area, from Saint James St. to Empire St. If you would like to volunteer, your help would be greatly appreciated.  Youth ages 14-17 need to have either a signed permission slip from their parent/guardian. (This will be sent out a few days before the event)\r\n', ',5122892,5121676,5121957,5121901,5101626,5112388,5112389,5112310', 10, 0, 8, 0, ' 9 am - 12 pm', '328 N 19th St. San Jose, CA 95112'),
(43, 'Second Harvest Food Bank Food Sorting ', '1390680410', 'Officer for a Day: May Cui \r\n\r\nHelp Second Harvest Food Bank this year by volunteering to help sort food at their warehouse! \r\n\r\n\r\n\r\n', ',5121961,5121799,5120765,5121971', 4, 0, 4, 0, '9AM-12PM (3 hours) ', 'San Jose Cypress Center, 4001 N. First Street, San Jose CA 95134'),
(44, 'Make A Birthday Wish December Party', '1388402384', 'Officers in Charge: Natasha and Anya\r\n\r\nWe need volunteers to be there to celebrate with children for their birthday! We will be setting up, serving food, talking to the children, and creating games to play with them! ', ',5112044,5101791,5100682,5121901,5112058', 4, 0, 5, 0, '3:30 - 6:30', '10104 Vista Dr, Cupertino, CA 95014');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `index` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `date` text NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`index`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`index`, `title`, `date`, `content`) VALUES
(1, 'FALL APPLICATION!', '1378659698', 'Hello CSFers! \r\n\r\nHere is the application for fall. Remember you must re-apply each semester! \r\n\r\nhttps://docs.google.com/forms/d/1qa9DdUPJvueOaGOn0fzTY6EnmTroujp__e326Ka9v7E/viewform \r\n\r\nThe application period is from Sunday, September 1st to Tuesday, September 17th. \r\n\r\nThanks, \r\nMVCSF Officer Team'),
(2, 'Contact Us!', '1378659735', 'Please email montavistacsf@gmail.com with any questions/comments/concerns.'),
(3, 'Study Buddies Partnership', '1378659809', 'MVCSF is proud to say we have partnered with MV Study Buddies! The hours you gain from peer tutoring can now be counted as CSF hours.'),
(4, 'Officer for a Day', '1382927090', 'Sign up here:\r\nhttps://docs.google.com/spreadsheet/viewform?usp=drive_web&formkey=dFNYTlZuMWFtRVBSMUtLakZCT2RVcnc6MA#gid=0\r\n\r\nYou will receive 5 hours no matter how long your event is if you wish to participate!');

-- --------------------------------------------------------

--
-- Table structure for table `suggestedEvents`
--

CREATE TABLE IF NOT EXISTS `suggestedEvents` (
  `user` text NOT NULL,
  `newEvents` text NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suggestedEvents`
--

INSERT INTO `suggestedEvents` (`user`, `newEvents`, `time`) VALUES
('Rosalind Ball', 'RAFT - Resource Area for Teachers volunteer day!', 1381125446),
('Sanjana Murthy', 'san jose rock n roll marathon', 1380413553),
('Joey Wilson', 'Stevens Creek Pumpkin Panic', 1379222060),
('Mingbo Gu', 'Welcome! Here, you guys can just throw out suggestions for events.', 1376464678),
('Priyanka Agarwal', 'Viva table tennis tournament help with set up and concession', 1376500961);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `studentid` varchar(15) NOT NULL,
  `name` text NOT NULL,
  `lastName` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `hours` int(11) NOT NULL DEFAULT '0',
  `grade` int(11) NOT NULL,
  `admin` text NOT NULL,
  `phone` text NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`studentid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`studentid`, `name`, `lastName`, `email`, `password`, `hours`, `grade`, `admin`, `phone`, `image`) VALUES
('5101767', 'Ria', 'Bhatt', '', '517bf0b00efbcbf6849a290c81bb037ddace2576', 0, 0, 'enable', '', ''),
('5101813', 'Dipsikha', 'Halder', '', '9b3d867b0c900506f84b838f6036c3eeab1a187e', 0, 0, 'enable', '', ''),
('5101661', 'Ramana', 'Keerthi', '', '2908125dd52dd710980c9fbaafa124c012fe94ef', 0, 0, 'enable', '', ''),
('5101487', 'Amy', 'Tsai', '', '192d1ab51f0871c1d74aa734c9c638bc9baeffa2', 0, 0, 'enable', '', ''),
('5112591', 'Michelle', 'Li', '', '41db30f8022117ed68b26c86ad29aaaf5618f1d9', 0, 0, 'enable', '', ''),
('5112526', 'Linda', 'Xia', '', '2767e9e44195f7282a2d8350cb92793a191b7ea4', 0, 0, 'enable', '', ''),
('5112138', 'Emily', 'Hong', '', '0b3307686866342c46008b0805da3549c5788939', 0, 0, 'enable', '', ''),
('5112244', 'Alice', 'Lee', '', 'cdedbaf433217656e9df940dd535438abed9f74c', 0, 0, 'enable', '', ''),
('5101715', 'Kai-Li ', 'Yen', 'kellyyen85@gmail.com', '765125f7138479ba92aaea94785229fd53de90da', 0, 12, '', '4088596730', ''),
('5101799', 'Grace', 'Wang', 'gracewang1996@gmail.com', '571c20610ad0d12d14ad9ab162346bf9950826f0', 0, 12, '', '14087715294', ''),
('5101790', 'Ashley', 'Wang', 'ashleyevoljm@gmail.com', '89605f2796873b1b518a36294e277f2dce89024e', 0, 12, '', '(408) 583-7552', ''),
('5101732', 'Kitty ', 'Liu', 'kitty.r.liu@gmail.com', 'b16398a583f8a7bf472ebdeb8d27a5a4df6b77ab', 4, 12, '', '408-718-0500', ''),
('5101678', 'Connie', 'Guan', 'connieguan123@gmail.com', '52502f04201729fb520db54c3505e4d433db2a35', 22, 12, '', '408-838-7198', ''),
('5101504', 'Kelly', 'Hong', 'kellyhong21@gmail.com', '22ef325b9649da98f61767495a2c273470fa40cb', 6, 12, '', '4085182978', ''),
('5101821', 'Manasa', 'Sanka', 'manasa.sanka@gmail.com', '17a9ea8b894751f6e1f2566bb71b3962212547d3', 0, 12, '', '408 796 9827', ''),
('5101433', 'Leon', 'Chen', 'fastsalmon@gmail.com', '7739325c3adbf846fc72389ceb236d9e72531497', 4, 12, '', '4086562803', ''),
('5101489', 'Christine', 'Ataee', 'cataee1@gmail.com', '43ccb81ee53bfa7d5f97059d5148d5d778bd0c55', 7, 12, '', '4083161715', ''),
('5100682', 'Molly', 'Vora', 'mollymvora@gmail.com', 'd775e7bbbadd7887ac9ef9af8b55b8e2144d6d79', 4, 12, '', '4085053000', ''),
('5101851', 'Henry', 'Yu', 'henryyu.yu@gmail.com', 'fff4264b783d59f0e344970d80e8bb9601309194', 5, 12, '', '408-418-4581', ''),
('5101777', 'Mukund ', 'Sridhar', 'muk.sridh@gmail.com', '478f82338e5c7824f8f2511372066b7f83a69221', -1, 12, '', '408 439 4532', ''),
('5101553', 'Vignesh', 'Palaniappan', 'vignesh.palani96@gmail.com', 'b1126a862ad69cbb20f2b0344262cd6bf77c6b0c', 3, 12, '', '4088877165', ''),
('5101446', 'Elaine', 'Tai', 'elaine.iat95014@yahoo.com', '8a11ef7a4482cdda1deffea82b868976494d034b', 3, 12, '', '4088239871', ''),
('5101378', 'Ellicia', 'Wong', 'elliciaewong@gmail.com', 'ddf80ffb50b8d3bbdfa4535adcbd2843d791bf59', 5, 12, '', '4083290644', ''),
('5101579', 'Michelle', 'Swedek', 'misia.swedek@gmail.com', '73df42048bf7f7dd43f3acc0eda5449f287dd454', 5, 12, '', '(408)-693-8383', ''),
('5101465', 'Ellen', 'Kulla', 'ellenkulla@hotmail.com', '26fd10aa205e71adf73a0cdbcbc2cdf60a451578', 4, 12, '', '6508625833', ''),
('5101626', 'Meenu', 'Krishnasamy', 'm.meenu.k@gmail.com', '666559f403a7f9154d62259f3b2d60db806b99aa', 3, 12, '', '(408)718-2811', ''),
('5101869', 'Soundarya', 'Kumaravelu', 'soundarya@sbcglobal.net', 'bf7d6ed86d8af86b4fccf266c9a286e6497f8ab2', 6, 12, '', '(408) 865 0244', ''),
('5101800', 'Sakshi', 'Srivastava', 'srivsaks96@gmail.com', 'a5376ba6f996d57e50e85a2efd6f3aaba7f79afa', 6, 12, '', '(408) 931-3633', ''),
('5101437', 'Kyuhee', 'Im', 'sim.firepower@gmail.com', '14b6da858c7712d0db86f567eeea872120c6a434', 7, 12, '', '(408) 318-7873', '522989_10101637280433693_1500055945_n.jpg'),
('5101794', 'Navneeth', 'Pillai', 'navneeth.pillai@gmail.com', '1b993dac63a3438491254ad7f0506db0b271832e', 4, 12, '', '408 973 8182', ''),
('5101888', 'Aishwarya', 'Karnik', 'aishwarya.ark@gmail.com', 'a4799d0bbffd0581fcaebe713c3c3e57f355f105', 8, 12, '', '(408)335-8772', ''),
('5101521', 'Madeline', 'Wu', 'mutantgreenblobs@gmail.com', 'e259e2f14b15b5f424a4753959d096f8a778b67b', 2, 12, '', '(408) 507-0185', ''),
('5101680', 'Diane', 'Chong', 'apeachyworld@gmail.com', '8d2cbe09c760e5eab1db4e88b1da751824a4fa7e', 5, 12, '', '4084388850', ''),
('5101618', 'Pranav', 'Mayuram', 'miniboots@gmail.com', '6306d5f565ba0b1002787dda14ad0cb5d8fb3d3e', 10, 12, '', '4087504043', ''),
('5101827', 'Allison', 'Ji', 'animewolf167@gmail.com', 'a4301353778a079bcffc4c395129ccbfd4403b91', 3, 12, '', '408-873-7016 ', ''),
('5101374', 'Jody', 'Tai', 'chubbywubby978@gmail.com', 'd6b800f366d30a0625664c525e37b39b4e9e0e2b', 3, 12, '', '(408) 865-0956', ''),
('5103303', 'Ashutosh', 'Jindal', 'ashjindal96@gmail.com', '6b5137dc7ab5a71f481969e4a0febb2b7f0fb98b', 0, 12, '', '858-444-6861', '868Q.jpg'),
('5101495', 'Brian', 'Chen', 'legopirate.chen@gmail.com', 'b0b86bf1ca003684a501c2565b394420542cd70e', 7, 12, '', '1408-255-2810', ''),
('5101775', 'Priyanka', 'Bhoj', 'priyanka.n.bhoj@gmail.com', 'f9f4bf68f55fd961d8273117b326b2dab62f0554', 11, 12, '', '4082282045', ''),
('5101590', 'Casey', 'Darmawan', 'casey.darmawan@gmail.com', '5b8d9cfa5524e82d5ff15706411ed8332887bee9', 6, 12, '', '(408) 582-4675', ''),
('5101786', 'Kimberly', 'Zhong', 'kimberly.zhong@gmail.com', 'd4381a6e882f2a576684cede173628880ba916a0', 10, 12, '', '4089308818', ''),
('5101810', 'Sahana', 'Mundewadi', 'mundewadi.sahana@gmail.com', 'e11c64f84f5352957602890aa3c1ca4dfea94f15', 8, 12, '', '(408)780-6034', ''),
('5101748', 'Tiffany', 'Tsai', 'tiffany.tsai01@gmail.com', 'c6355438614234950c94fb1343f0fcf610c58f10', 5, 12, '', '408-838-6931', ''),
('5101681', 'Keertana', 'Chandar', 'keertana.chandar@gmail.com', 'dc65128ec3ccea80665cdfad3ad3b72ccca82e36', 14, 12, '', '4082199726', ''),
('5101347', 'Meghan', 'Mahalawat', 'MnM.12310@gmail.com', '7436a804ff4d382558290d362537a746de9c7b73', 7, 12, '', '408-797-4152', ''),
('5101406', 'Susan', 'Kwon', 'skwon14@gmail.com', '7406bf55130a7bf4a23af400a14e0396adee9f98', 5, 12, '', '(408) 489-4070', ''),
('5102795', 'Melissa', 'Wang', 'sakura2217@gmail.com', 'c37e6429c08646fda9d477e5d9c5a76ac972fe65', 5, 12, '', '408-480-0319', ''),
('5101789', 'Meena', 'Vemuri', 'meena.h.vemuri@gmail.com', 'efeb463bd82bc3f1091dd74a53abbe9238980b7b', 6, 12, '', '(408) 314-1234', ''),
('5101756', 'Humza', 'Ali', 'hali96@gmail.com', '029e260d9456ad0540a2f27dec64843f125be02a', 8, 12, '', '4083909780', ''),
('5101694', 'Samir', 'Akre', 'samir.akre@gmail.com', '3fa3a4999e18f1876341d166de36a5472126d1ba', 3, 12, '', '4084641272', ''),
('5101660', 'Michael', 'Trinh', 'michael1996t@gmail.com', '040228d794b98a4afac0e67433679d8c391ae92d', 6, 12, '', '408-655-6981', ''),
('5101818', 'Sanjana', 'Gehlot', 'sanjana.gehlot@gmail.com', '5a5f366490519e94c8333856191a873cde5ec667', 3, 12, '', '4086884711', ''),
('5101613', 'Aditya', 'Raju', 'rajuaditya@gmail.com', 'c891ea40d6ef7f390b16503ba7250aadfe8c9d69', 0, 12, '', '4082557116', ''),
('5112483', 'Ananya', 'Trivedi', 'ananya.t123@gmail.com', '300ad5a1d70efd36a65b9e92110f35497cbe693d', 6, 11, '', '(408) 850-0073', ''),
('5112215', 'Yamini', 'Kukreja', 'goyamini@gmail.com', 'f4ee1e7bbfd1cbedd7bba72e9ebd59797829bd8e', 3, 11, '', '14086801141', ''),
('5112200', 'Grace', 'Kim', 'gracekim0407@gmail.com', 'a85dd9db92ba6f40fc453f20842b547b4e526f76', 7, 11, '', '4084831075', ''),
('5112407', 'Sheira', 'Sarfaty', 'hulamonkey3@gmail.com', '80b5eb1b06c24324b6a39f51d0befd3649c4be4b', 5, 11, '', '408-221-3697', ''),
('5112223', 'Joanne', 'Lai', 'joannellai@gmail.com', 'cc71d1c10600500335c055341de434a3c120b1c9', 6, 11, '', '408 718 8823', ''),
('5112310', 'Abinaya', 'Muthusamy', 'abby.moosams@gmail.com', '7cb18fda11afe6ac821c393d651522eed2e00a2f', 2, 11, '', '4086238232', ''),
('5112237', 'Quimby ', 'Lee', 'quimster.lee@gmail.com', '43c4c4fc32d1aceacba1cbd464a020a722ad277d', 5, 11, '', '(408)239-9711', ''),
('5112408', 'Ramya', 'Satish', 'ramyasatish1997@gmail.com', '9b9871792ca271f5f11f7bf60cf83912b8f14033', 6, 11, '', '(408)-257-4840', ''),
('5112351', 'Malini', 'Pathakota', 'dinodomo17@gmail.com', 'c9b6034720552edb6f9ac3f76df7f2e9cad9b628', 14, 11, '', '4087079273', ''),
('5112365', 'Hannah', 'Pollek', 'han13banan@gmail.com', '5cccb11a0bb08a0e7436c92a5a462390024999f5', 6, 11, '', '(408) 807-4961', '5112365 (170x143).jpg'),
('5112051', 'Kylie', 'Constant', 'kylie.constant@gmail.com', '4fc540f3dea324415990994ed4aa5c4bc589d778', 5, 11, '', '(408) 515-7387', ''),
('5112753', 'Ray', 'Zhang', 'peifeng2005@gmail.com', 'daceb6cddb50a2e64f25493a639d8b6c5ed543d0', -1, 11, '', '4088397906', ''),
('5112298', 'Greg', 'Moe', 'greg97moe@gmail.com', '945ddebca252762e58f6420f78def70b991d4f2f', 5, 11, '', '(408) 253 6403', ''),
('5112153', 'Kaylene', 'Hung', 'kaylenehung@gmail.com', 'b4f7c599e556786fa6d11392def658f80cda3047', -2, 11, '', '408-888-3919', ''),
('5112966', 'Emily', 'Lee', 'emilylee1107@gmail.com', 'eb0836a6e10cb72f2705f98f54c29b40a8a30187', 3, 11, '', '(408)921-3952', ''),
('5112066', 'Nicholas', 'Egan', 'nsmegan@gmail.com', '29ac0a97e612664cad8734b20c7e7c32a73af313', 5, 11, '', '4084827337', ''),
('5112349', 'Sonal', 'Patel', 'spunkysonal@gmail.com', 'f83f08961dc4d906350e0a2f9a8315890e2cab7e', 8, 11, '', '4089605519', ''),
('5112058', 'Srikavya', 'Dindu', 'siridindu@gmail.com', '1a9cb4f10b07ddec911bc9a6f8b85427b1d79c01', -2, 11, '', '(408)-921-4448', ''),
('5112021', 'Elia', 'Chen', 'elia.g.chen@gmail.com', '8081b9079ba499eb72b11780953db00b7332f3ca', 5, 11, '', '4088731506', ''),
('5112011', 'Justin', 'Chang', 'chang.justin217@gmail.com', 'e24a3ab993f42ee782b0c41c50c68a2ea267946b', 7, 11, '', '408-253-6779', ''),
('51112', 'Prathyusha', 'Charagondla', 'prathyushasai@gmail.com', 'c4d24fc3fbaae17a97648e316d735ecb1207e73f', 6, 11, '', '4086606250', ''),
('5112303', 'Victoria', 'Morris', 'victoriahmorris@gmail.com', '340ad2e757a7aaca342ca94ce64c589f86b32759', 5, 11, '', '(650) 938 3441', ''),
('5112114', 'Alyssa', 'Hada', 'alyssa.hada@gmail.com', 'eedfcf587a1e0e3cf682610ca5f4b323c6e4c341', 2, 11, '', '(408)202-2527', ''),
('5112409', 'Kekoa', 'Sato', 'koa_sato@yahoo.com', '6caa6557cd838637b6fad78089feca28b44c538a', 6, 11, '', '(650) 938-6747', ''),
('5112388', 'Sameer', 'Rao', 'rao.sameer6@gmail.com', '972ed8c092c26e0c90d4b985ad4ae6053da66224', 5, 11, '', '408-239-6190', ''),
('5112030', 'Christina', 'Cheng', 'chengstah@gmail.com', 'e6ca45d7dbeea361e5cb14cc404e7d85acf71ed2', 7, 11, '', '408-316-0568', ''),
('5112412', 'Tanaya', 'Sawant', 'sawant.tanaya@gmail.com', '56167b79f38c9e2c0b0cb6c7c71bb2f1f276e962', 6, 11, '', '4088932491', ''),
('5112025', 'Miranda', 'Chen', 'lemirandachen@gmail.com', '34c56cbb6bde45ac02a675df5bd67908d6f813e2', 5, 11, '', '4083180228', ''),
('5112122', 'Young Jean', 'Han', 'yjhan96@gmail.com', 'defca6437668a2921065fd57a256157bcaffd73b', 7, 11, '', '(408)702-0487', ''),
('5112475', 'Akshay', 'Thontakudi', 'akshay.thontakudi@gmail.com', '223a1cf34e933862e4365d086bf90317857bb5a1', 6, 11, '', '(408)-722-7381', ''),
('5111996', 'Megan', 'Bui', '410.megan@gmail.com', '1d7c834f6f2e827b8d67869f1ea35c2fa0a9de7b', 3, 11, '', '408-892-6980', ''),
('5112476', 'Perry', 'Ting', 'yayperry@gmail.com', 'd3713336a681ac37a345c0accd6d68cd7ecf1de0', 10, 11, '', '4089819127', ''),
('5112242', 'Chris', 'Lee', 'sjclee97@gmail.com', '1d595aeaa8cc2042d223b63c04db511a15b3dfec', 5, 11, '', '(408)569-1280', ''),
('5112343', 'Qian Yi', 'Pang', 'qianyi.pang@gmail.com', '5ab878b278d9439175064bcd919d8f496ad430a9', 5, 11, '', '4087181963', ''),
('5112217', 'Eshan', 'Kumar', 'ekumar@gmail.com', 'ac3a8d69fd3179194fb866280b17fc7cbcbe7384', -1, 11, '', '4085007448', ''),
('5112259', 'Jonathan', 'Lin', 'jolituba@gmail.com', '8dc456cea75cd7063f964ef3a219e1e763317181', 5, 11, '', '408 873 8186', ''),
('5112525', 'Kevin', 'Xia', 'kevinmxia@gmail.com', 'e8f5024ad4537569bd8d7ad469ce864b5783c250', 5, 11, '', '(408) 921-4485', ''),
('5112129', 'Andrew', 'He', 'he.andrew.mail@gmail.com', 'be4af227a8e37ab658c9f38c3874f742e003b565', -1, 11, '', '(408)-621-4371', ''),
('5112466', 'Rei', 'Takahashi', 'reitaka@comcast.net', '8a57fd5be70b58481c124b1ad87be637b036b828', 7, 11, '', '408-332-6281', ''),
('5112628', 'Roshini', 'Malempati', 'smile4roshini@gmail.com', 'fc65e71ce6bad0e8ac4e3c603eaa003df17221e3', 9, 11, '', '510-315-7000', ''),
('5112720', 'Liwen', 'Xu', 'xu.wendy@yahoo.com', 'ecfd808a9cff6445d7e3d254c92655fafe98ec0d', 5, 11, '', '(408) 476 - 8561', ''),
('5112418', 'Gregory', 'Sehr', 'gregorysehr@gmail.com', '2fcbf41c3ef3401fcf8b894a14dc118c70ad0b80', 5, 11, '', '(408) 253 7874', ''),
('5112389', 'Vinay', 'Reddy', 'vinreddy007@gmail.com', '957abac521d0c607e5e2cf81152343a9b8a92a95', 3, 11, '', '4083078689', ''),
('5112187', 'Aashish', 'Kapur', 'aashish97@gmail.com', 'c39e5387d2f0fab58c3d5a3dcc9cf0d0abfac28c', 6, 11, '', '408-832-8411', ''),
('5112516', 'Joey', 'Wilson', 'jwilsoniv@me.com', 'dcd3308a044aa7562f81761f01b9d66e60daef02', 5, 11, '', '(408)-739-7792', ''),
('5112387', 'Krithika', 'Rao', 'krithikarao96@gmail.com', '16c2640cd699eeefa79493ffc9dbc878ee1f4e5d', 0, 11, '', '408 497 7853', ''),
('5112205', 'Erin Keiko', 'Kobayashi', 'ekk097@yahoo.com', '7aecdd235d084ef1202376e75aed1a89d1e0f1a1', 5, 11, '', '4082530371', ''),
('5112084', 'Ronit', 'Gavaskar', 'ronitgavaskar@gmail.com', '4a3a2d0eeced4505512339e2d932c735596a93f5', 6, 11, '', '4084315430', ''),
('5112026', 'Zhenyi', 'Chen', 'tommy.chen.flash@gmail.com', 'd2947cfe324f2c9c4cf2afd1e6659dd8f9efc307', 5, 11, '', '14086272120', ''),
('5112546', 'Cameron', 'Yu', 'camyu.us@gmail.com', 'da9e8fdce0aed54cff2ca4087253e37b7bd69691', 5, 11, '', '(650) 962-0964', ''),
('5112080', 'Ramani', 'Gadde', 'ramanigadde@gmail.com', '0bf3b9c3e78d58d4e96d41d3f0d2d69490a75e8a', 6, 11, '', '(408)-564-6680', ''),
('5112452', 'Kirtana', 'Sripathi', 'kirtanasripathi@gmail.com', '369cee1b9dd5a1aecb44c4a2c8d45688ef85f737', -2, 11, '', '4088215270', ''),
('5112240', 'Sonia', 'Lee', 'jihyun.lalalee@gmail.com', '8a699a061946f637f6c88c3a0dbcca4c359ced76', -2, 11, '', '4084555876', ''),
('5112044', 'Christian', 'Choy', 'christian.t.choy@gmail.com', '45f397300e7d2308b730560f0fb3334fa318e478', -2, 11, '', '1(408)826-9548', ''),
('5112065', 'Oindril', 'Dutta', 'duttaoindril@gmail.com', 'e6e8c156064480d9a78935cdaa90c1f717b205be', 3, 11, '', '408-470-8974', ''),
('5112323', 'Kristie', 'Nguyen', 'kristie.nguyen97@gmail.com', '3cbcdfefc5c35421017fbfee37db807b9b9e1ed8', 12, 11, '', '(408) 310 - 3729', ''),
('5112083', 'Sachandhan', 'Ganesh', 'sachan.ganesh@gmail.com', 'e9fa48e8a6a496b2e792935ceb69808cef9f34ed', -2, 11, '', '4085070070', ''),
('5111989', 'Rutvij', 'Bhise', 'rutvij.bhise@live,com', '418e750d02e34509bacfe76f73fad63ad251ea7a', -1, 11, '', '4083597889', ''),
('5112530', 'Jenny', 'Xu', 'chickenloverjx@gmail.com', '0fe0d824a0f54659339d469da3475c5c23f42bf8', 6, 11, '', '4082191709', ''),
('5112062', 'Richard', 'Du', 'rriicchhaarrdddduu@gmail.com', 'f7ba535f38e5dc03d24b34746eab1012ce2870e9', 5, 11, '', '408-813-9793', ''),
('5112034', 'Divya', 'Cherukuru', '45.divya@gmail.com', '02ac31df23951e45542d78a2bff406babc94a30b', 5, 11, '', '408-257-7628', ''),
('5112454', 'Nicole', 'Stomakhin', 'monkeykid53@gmail.com', '244444e96d6f43b90c6f3344758f4854bfd8854c', -2, 11, '', '4084833506', ''),
('5120596', 'Alina', 'Abidi', 'alinafabidi@gmail.com', 'df6b9bb6b39be0c7d3c1ff34e2eeb05b21d9e956', 0, 10, '', '408 464 9755', ''),
('5121799', 'Scott', 'Lee', 'scott.lee.3898@gmail.com', '9cb8f16e579bfb8792fd4ff3989fdd9d8f985043', 7, 10, '', '4086019539', ''),
('5120633', 'Radhika', 'Dhomse', 'radhika.dhomse@gmail.com', 'adb8716282d8eb477dab879c8a7950a022b56949', 34, 10, '', '4085987009', ''),
('5121827', 'Julianna', 'Liu', 'julianna.liu@gmail.com', 'af0b0f75ea977c48faa8b948dd7b9f90b3ef5645', -3, 10, '', '408-212-9802', ''),
('5121696', 'Ashley', 'Chien', 'lilystarthefroggy06@gmail.com', 'f60ec80a7fe48e9f68437400392792030836dae9', 16, 10, '', '14082521933', ''),
('5121969', 'Royce', 'Yang', 'royce1998@gmail.com', 'bac3b46a31a9fd0d7a002f4ef7bd64bf63cea276', 4, 10, '', '4089305593', ''),
('5121690', 'Jennifer', 'Chen', 'jennychen98@gmail.com', '780c6995cba6009d21b48c85586cd7fb1d19a570', 11, 10, '', '1(408) 873-8260', ''),
('5121652', 'Priyanka', 'Agarwal', 'pragarwal.agarwal@gmail.com', 'a5d6c10f034cbd46901c5c45e61098fbd66915c1', 5, 10, '', '4086157325', ''),
('5120676', 'Rasika', 'Iyer', 'rasikaiyer98@gmail.com', '279ffaa68023025ace83088202f859ffc9b1fd91', -1, 10, '', '(408) 891-1281', ''),
('5121825', 'Amy', 'Liu', 'lollypopsareevil@gmail.com', 'aebfd758de035ad3b34f746fce7d4c2a7edb93a7', 10, 10, '', '408-839-7361', ''),
('5120581', 'Isabella ', 'Teng', 'isabellateng98@gmail.com', '3b27f3fec4d1998097d305658017d5f59b40c525', 9, 10, '', '(408)8381853', ''),
('5122613', 'Meghal', 'Gupta', 'meghal.gupta@gmail.com', '1a832a71d00779adca99caccc85440c9a887de91', 7, 10, '', '650-722-6389', ''),
('5122860', 'Nirupama', 'Chandrasekhar', 'nirupama.chandrasekhar@gmail.com', '35ca25462564db02c6e27892df86201a306a69f1', 5, 10, '', '408-663-7741', ''),
('5121844', 'Tal', 'Marom', 'tmarom1997@gmail.com', 'a45a6f54aac838209d83d8dd3e2c7e8fd6708b1f', -1, 10, '', '4089663001', ''),
('5121856', 'Riddhima', 'Narravula', 'riddhima25@gmail.com', '023d5517f84b8c6dbc8ede810e2abaa5d7eec88b', 8, 10, '', '408 718 5262', ''),
('5120768', 'Malini', 'Ramaiyer', 'malini_ramaiyer@yahoo.com', '9137f8f57af9c59f3aba6d9bd9ceb0038b15ea14', 24, 10, '', '4083981244', ''),
('5121872', 'Eric', 'Peng', 'pengeric11@gmail.com', '0e60b2b728153c56c8e7a2b1b384d51b55e2c346', 6, 10, '', '4087088145', ''),
('5121980', 'Evan', 'Zhang', 'evantigerzhang@gmail.com', '96cb11ebbda9fd05c939173def85e6cf4e2c5067', 4, 10, '', '(408)-725 -8526', 'dog sled.jpg'),
('5121927', 'Rachel', 'Tham', 'rachel.w.tham@gmail.com', 'fb1a790efd0236d0783a21d3ba4092059c9bf54d', -1, 10, '', '1(408)585-8094', ''),
('5121916', 'Namrata', 'Subramanian', 'namrata@zooglr.com', '60067b13331cd0259c7dacd0c2dceb6655da59d2', 7, 10, '', '4083348477', ''),
('5121666', 'Praxis', 'Bays', 'praxisbays@gmail.com', '8cf4cf4bd5b1186fbb2016922c14774be5074f36', 5, 10, '', '(408) 204-5256', ''),
('5120784', 'Kaleo', 'Sato', 'kaleo_sato@yahoo.com', 'e33b62808fac6478d9d4fe9acad99455b90e2ff9', 6, 10, '', '(650) 938-6747', ''),
('5121811', 'Ming Yuan', 'Li', 'mingyli34@gmail.com', '960321f4b4a5d00b3c347f3b5a0b6047715aad75', 6, 10, '', '4082073020', ''),
('5120667', 'Joseph', 'Hsiung', 'josephhsiung1@gmail.com', '69698a6f84115c85ffd777e7931fb6b4fc583352', 0, 10, '', '4089638538', ''),
('5121678', 'Allison', 'Chang', 'allison2000@gmail.com', 'a3d4f0fb71ab22067c19c92f86b565ddb8ab7488', 8, 10, '', '(408)8592269', ''),
('5120665', 'Felicia', 'Hou', 'felicia.hou27@gmail.com', '5d1d77c414826f8c168621311a74b9ef3f1d858d', 6, 10, '', '4083004212', ''),
('5120623', 'Stephanie', 'Chou', 'sturphs@gmail.com', '78b870bdf20df0af6d174a5e63d7977d150eff0b', 12, 10, '', '408-343-1016', ''),
('5120743', 'Sanjana', 'Murthy', 'sanjanamurthy1@gmail.com', 'adcfe6f580b6fbd0725b228e98c1b88aa3b34d00', -2, 10, '', '(408) 821-9222', ''),
('5120715', 'Sarah', 'Lim', 'sarahhlim@yahoo.com', 'c0e3ef13c33625a88bdb839038cc97f8bd5ec961', 2, 10, '', '408 334 3436', ''),
('5120671', 'Emma', 'Huie', 'lavenderrgoons@gmail.com', 'a337c090cd884aea74f723425fd572c96dd7872d', 6, 10, '', '(408)-892-2961', ''),
('5121979', 'Eric', 'Zhang', 'eric.z.car@gmail.com', '9e7e7582df90ac3f6f22ca029aeedaec05ba02b2', 4, 10, '', '4083685438', ''),
('5120713', 'Matthew', 'Li', 'li.matt3@gmail.com', 'c9c843fc8dfff959c0ff41f6404851bb9eddfb23', 10, 10, '', '4082197979', ''),
('5121897', 'Kinnari', 'Shah', 'kinnari62@gmail.com', '98638c0d8bdef9238c8fdc7957dc87c91d106e43', 5, 10, '', '4089738980', ''),
('5120816', 'Daniel', 'Vu', 'daniel.k.vu@gmail.com', '45e3936d1a3c86689e91fb32e647fa78a19a5e16', 5, 10, '', '4083735252', ''),
('5121961', 'Jill', 'Wu', 'gena168@gmail.com', 'd979254b93b5fa41a9e5c94a50bfa11566cb9088', 7, 10, '', '(408) 887-5221', ''),
('5122715', 'Rohan', 'Mathur', 'Mathurr97@gmail.com', '0f77d7011b427549c813227bd4193b4af240b7b3', 7, 10, '', '4086585092', ''),
('5121681', 'Kristin', 'Chang', 'kristinlaurenchang@gmail.com', 'f88ba78c724be9c31e2c4015de3a88ba4a3cbe37', -1, 10, '', '(408) 891-3578', ''),
('5120826', 'David', 'Wu', 'wu_david@icloud.com', '5058843e139ea735d80583436e2d9762bad1a1ec', 1, 10, '', '(408) 507-3168', ''),
('5120599', 'Hannah', 'Allegakoen', 'hallegakoen@gmail.com', 'e0458c1ec41ba99b3c200cc3fd9a1d4a61113474', 2, 10, '', '(408)6585581', ''),
('5121921', 'Iris', 'Sun', 'huskyx367@gmail.com', '68208f950813e26f214e2cfaf7c63e24cd5548de', 0, 10, '', '(408) 996 7151', ''),
('5120722', 'Nathan', 'Mallipeddi', 'mallipeddi.nathan@gmail.com', 'ce4374904608805d714cecd1050607ca0d2ba7c8', -1, 10, '', '4084069796', ''),
('5120728', 'Anya', 'Mathur', 'anyamathur13@gmail.com ', '9016c2831fcf2c35fd9c40474d6604e15393e033', 5, 10, '', '408-393-2374', ''),
('5121813', 'Vivian', 'Li', 'vivili950@gmail.com', 'f3e36d32d3ef6e05bea8071643df39f6d3138722', -1, 10, '', '4084767782', ''),
('5122938', 'Aarohi', 'Palkar', 'aarohi.palkar@gmail.com', 'e90fd7c1ccb25d25a33d8cc88c6b436f108acc3b', 22, 10, '', '408-784-0416', ''),
('5121965', 'Cody', 'Xu', 'codyxu98@gmail.com', '0fab33f7c1f1a3032658b4e1272f42d9c58d6450', -1, 10, '', '(408)510-0065', ''),
('5120636', 'Peter', 'Enescu', 'peter.enescu@gmail.com', 'bc35cd0d057c5e71dbee6cd52a4e68d7d2ec3891', 7, 10, '', '650-823-4212', 'DSCN1170.jpg'),
('5121676', 'Austin', 'Chan', 'austin.ot.chan@gmail.com', 'b8a9c84770d2f894675baa08aab9006d24111278', 10, 10, '', '(408)605-9014', ''),
('5121911', 'Janani', 'Sridhar', 'janani.sridhar@yahoo.com', '982e53719e7a67ca4ac5e16fcfd497ef906fea5c', 6, 10, '', '(408) 873-8534', ''),
('5120791', 'Natasha', 'Shetty', 'tashu348@gmail.com', '3a0454088c1cb1afb68add105abcec8dbc810069', -1, 10, '', '4083485649', ''),
('5121898', 'Keven', 'Shang', 'k.shang131@gmail.com', '5053fb7ded0663c42a0c2a6d648460a0ccb96918', 0, 10, '', '(408)209-8144', ''),
('5121957', 'Naomi', 'Wang', 'naomioowang@gmail.com', '3cd77970e145356fb0cd987d4c98ee5741f1b489', 9, 10, '', '408-839-4008', ''),
('5122607', 'Aishwarya ', 'Natarajan', 'ashwarya.natarajan@gmail.com', 'f411bd79310fd161add0c2ce8e11a967654f4cdc', 5, 10, '', '408-480-4564', ''),
('5121971', 'Madeleine ', 'Yip', 'parsley789@gmail.com', 'cad37df1901d1b44c43b06d51a4075dec0bdc6a5', 13, 10, '', '(408)366-1693', ''),
('5120789', 'Shivangi', 'Sharma', 'iceblueshiv@gmail.com', 'd3cc9966e6e1e87c73e90fa6c9b3ec3daf4eb0f3', -1, 10, '', '(408)887-9785', ''),
('5120639', 'Allana', 'Evans', 'allana.a.evans@gmail.com', 'a134222925f8385335a0af99e66216efa400c04f', 0, 10, '', '408-996-7514', ''),
('5121791', 'Crystal', 'Kwong', 'kwong_crystal@yahoo.com', '1ddbd64032edcea1a134171d71b1b1d6154a7677', 0, 10, '', '1408-253-7565', ''),
('5120680', 'Kartik', 'Jain', 'kjrocks123@yahoo.com', '60e500f5a6f422b035202f5d177edccba6f91e6f', 7, 10, '', '4084892142', ''),
('5120830', 'Meredith', 'Young-Ng', 'mewsic314@aol.com', '7e96dad0d5f9c0b505e197e456a278d692de5c87', 4, 10, '', '4082557550', ''),
('5121780', 'Taylor', 'Kim', 'kim.taylor667@gmail.com', 'e84b47ac7b2028c3c1dc3195dd0ea98b604779a1', 3, 10, '', '(408) 858-7500', ''),
('5121941', 'Anushka', 'Tyagi', 'tyagianushka@gmail.com', 'd5761ac7b48ce9683e630283979e5c987a8bcb8c', 0, 10, '', '408-219-1285', ''),
('5121865', 'Bhavana', 'Pabbisetti', 'bhavanapabbi@gmail.com', 'ad13bbb37edf6ec4f4ccfbfb456827b9c36a0a0b', 9, 10, '', '408-896-6258', ''),
('5120765', 'Clarissa', 'Qian', 'qianclarissa.lily@gmail.com', '4970a1e85f459d31451b6c6bdec73960c3d77a81', 4, 10, '', '1 (408) 703-2086', ''),
('5121146', 'Daniel ', 'Zhu', 'danielzhu777@gmail.com', '8b740989140fea014cd7611402d42c4534a7aa03', 6, 10, '', '(408) 832-8217', ''),
('5122876', 'Shannon', 'Yu', 'shannon.for.yu@gmail.com', '81fa446f217bfabb2219400bd718339410b954a7', 2, 10, '', '4088248502', '5122876.jpg'),
('5101670', 'Yuri', 'Kawaharada', 'yurika.99@gmail.com', 'c4c792d8206fd6ffd34b49cf5f59f5e985b9f508', 4, 12, '', '(408) - 833 - 2210', ''),
('5121962', 'Nanette', 'Wu', 'nanette.wu@gmail.com', '3eadc33227732fe953ff76462ad552d2f920c0cf', 2, 10, '', '408-338-8501', ''),
('5120673', 'Jaclyn', 'Hwang', 'jhwang330@gmail.com', '7e18382791e13536ba5692ae8a0e209664c5b4b6', 5, 10, '', '650-862-5500', ''),
('5112462', 'Sumeetha ', 'Swaminathan', 'kuttan.sumi@gmail.com', 'ca1c63ecf230ca50195238142ff40e5d0804d092', 7, 11, '', '(408)504-3900', ''),
('5111961', 'Shagun', 'Agrawal', 'shagun.agrawal1996@gmail.com', '0aafffbfa4152956760c29bbf27319208bc55668', 7, 11, '', '4089312054', ''),
('5120620', 'Matthew', 'Chen', 'thematthewchen@gmail.com', 'a0e2fd323cba8ef63020556bb28430887295f3d6', 6, 10, '', '(408)255-4133', ''),
('5101614', 'Andrew', 'Gu', '', '549256ac36af9cb4a13135effc31772557be59f2', 0, 0, 'enable', '', ''),
('5101811', 'Yashashree', 'Pisolkar ', 'yashpisolkar@gmail.com', 'f08fab7df307f6068d72da7dbbeeca47549ef4ec', 6, 12, '', '408-431-0422', ''),
('5113007', 'Tyler Pennebaker', 'Pennebaker', 'tyler@pennebaker.net', 'a8a31e56a321d3afb94639c2f09a53523051a831', 2, 11, '', '4087588687', ''),
('5121706', 'May', 'Cui', 'mayc.tdmf@gmail.com', '5bb75df4fd537eb3270852daf20fe3db5bd4e5cb', 5, 10, '', '4086744169', ''),
('5101560', 'Anush', 'Velmurugan', 'anush35@gmail.com', '1562030f346ab37520904ad56fafe1bed4194203', 6, 12, '', '4087189031', ''),
('5120753', 'Neha', 'Patchipala', 'nehasp@gmail.com', 'b3cff785ca5bf275bee6aae77d3ab5d46fcdf60f', 7, 11, '', '(408) 891-4525', ''),
('5112471', 'Anna', 'Tedijanto', 'sportschip2@gmail.com', '23fbe6214d9b3393f2199f7114706344987445da', 7, 11, '', '(408) 476-3523', ''),
('5101841', 'Angelina', 'Tong', 'angieetongg@gmail.com', 'f2a8b4e8f0175d41fe3dc7f33d1083bbcc396be1', 8, 12, '', '4085687172', ''),
('5112285', 'Michaela', 'Mavroudis', 'punkypeace@gmail.com', '929fd0c3599af03f2c3ddb0d98a40b1b0c4ce527', 3, 11, '', '408-329-3247', ''),
('5112347', 'Casey', 'Parsay', 'cparsay@gmail.com', 'e8a4451af3ef5ab6ee2a24ccad702bbd03c34878', -2, 20, '', '(408)-257-3380', ''),
('5121836', 'Julia', 'Lu', 'pjulial@gmail.com', 'd47293db9a5c55744f50eaa6d785acd7dcb7ffd9', 6, 10, '', '4083986212', ''),
('5120656', 'Hannah', 'Haensel', 'happytappys@gmail.com', '71110e52596ec50ad7f1ae773b737c9b02bfb058', 6, 10, '', '4086568218', ''),
('5121744', 'Louis', 'Hong', 'hhs8931@gmail.com', 'cdf4a1536f28a239a47f1adaef1805db2ccc68d9', 6, 10, '', '14083323172', ''),
('5112042', 'Rhea', 'Choudhury', 'rcgymstar181@gmail.com', '446fabef74a82b3fb4e422cbb00956180c08878d', 5, 11, '', '4084218897', ''),
('5112158', 'Timothy', 'Iwamoto', 'iwamoto.timothy@gmail.com', '859b72c8d4ed897a5d590cb57a17e309ca6aef50', 5, 11, '', '14088589014', ''),
('5112246', 'Michelle', 'Lentfer', 'mbookworm10@gmail.com', '4f68cd08a8211a48e958770c1291439f2a042665', 0, 11, '', '4086428878', ''),
('5111973', 'Rosalind', 'Ball', 'rosalind.a.ball@gmail.com', 'a7b0f53e6e2640399a6d880eba63b4e859014677', 7, 11, '', '4087250839', ''),
('5100367', 'Suprith', 'Ramanan', 'mailsuprith@yahoo.com', 'fcf7429828cf5da0a0c4c990089423c0b8c98d91', 0, 12, '', '408-689-2302', ''),
('5112098', 'Pramukh', 'Govindaraju', 'pramukhy@yahoo.com', '10f76d47e4a4c33b48b805e9397a4044bad5549a', 3, 11, '', '4087680607', ''),
('5112376', 'Samantha', 'Quevedo', 'samantha.k.quevedo@gmail.com', '5a9aaab27ef96c02294b223d27b1a3191166cf50', 4, 11, '', '14088239589', ''),
('5121922', 'Victor', 'Sun', 'victor7sun@gmail.com', '92de5ee49869fb9ed365dccd9a9caca726fdbace', -1, 10, '', '408-255-1685', ''),
('5101846', 'Mihir', 'Joshi', 'mformihir@gmail.com', '6c9e232c2131fe4883f1fa0e68586ce1d9cd205c', 6, 12, '', '4088812057', ''),
('5121984', 'Emily', 'Zhao', 'emilysmokey01@gmail.com', '55d67299817faf36ccbd9c0cfa70e773fca681e5', -1, 10, '', '4088588909', ''),
('5102678', 'Justin', 'Zheng', 'jzheng1996@gmail.com', '1f7da2f5582984a0f70a02b064e1da132ba8e712', 0, 12, '', '(408)-813-9238', ''),
('5112550', 'Ryan', 'Yue', 'yue.ryan123@gmail.com', '758751d1f80ea21d89ac05e015264a869800946c', 5, 11, '', '(408)7685589', ''),
('5121905', 'Yoav', 'Shmariahu', 'yoav.shmariahu@gmail.com', 'e137fc89b666ca3ed0738f8fb28976752df61c76', -1, 10, '', '4085980191', ''),
('5120703', 'Alexa', 'Kwang', 'saltyangel.alexa@gmail.com', '73b5682dc846c83506fe2fc7222fb69acf86d1ff', -1, 10, '', '(408)425-0488', ''),
('5112022', 'Jessica', 'Chen', 'jessica123532@gmail.com', '22f2b038b51af415bacd0cff4fa03a85db61dd06', -2, 11, '', '408-833-5560', ''),
('5101570', 'Jim', 'Ho', 'jimho128@yahoo.com', '8e834ed45201807b0aec7cb43f37563b99013bc7', 7, 12, '', '408-212-0924', ''),
('5101791', 'Jenny', 'Lu', 'jenny888lu@gmail.com', '8d24c32c3cd35ff01116b4f3d5c434ba3965f1a2', 13, 12, '', '1408-981-2091', ''),
('5121822', 'Michael', 'Lin', 'dumplingsftw@gmail.com', '06767872ef111c0c322ad44e5af06649e0a0ab14', 6, 10, '', '408-255-4725', ''),
('5101796', 'Disha', 'Bendre', 'musiclvr312@gmail.com', 'fc419bfbcce6b62852f6c826e66f1f522799b969', 0, 12, '', '4082423086', ''),
('5101389', 'Sigal', 'Shaul', 'siggythepiggy@gmail.com', '1664eba9089ecf5283378dd7fcf401e58ff7f982', 7, 12, '', '(408)873-1167', ''),
('5120248', 'Ajay', 'Merchia', 'ajaymerchia@gmail.com', '195ef116c95f944f263930d9c7217ad61363df8e', 21, 10, '', '(408)-916-6134', ''),
('5112538', 'Nicholas', 'Yee', 'nickyeeee@gmail.com', '3fd890e30cbde9ad3cfc857014093ac7a4d9198d', 6, 11, '', '(408)-802-5424', ''),
('5101426', 'Amanda', 'Fong', 'amandafong@yahoo.com', 'e898c025979c93fb884a12d7f8126de6c481e87f', 4, 12, '', '4082199611', ''),
('5102607', 'Bridget', 'Gottlieb', 'bri.aviv@gmail.com', 'c44ffc58ebab6ce38623d3533ed14b4f6cdf38b7', 0, 12, '', '6509194577', ''),
('5112536', 'Yunqing', 'Ye', 'sara.ye.27@gmail.com', 'db364738fe966dd51b7b981577b326208b7e55c1', 6, 11, '', '(510)456-5600', ''),
('5122892', 'Tanuja', 'Gobbur', 'tanujagobbur@gmail.com', '911a5c47e4f077889b0bcd0d39cbd04e7c909a6f', 4, 10, '', '408-970-9434', ''),
('5112291', 'Jahnavi', 'Meka', 'janu.meka@gmail.com', '18d2a9af514b4d6113b42dc0b3b0d02da11aa425', 5, 11, '', '(408) 564-6104', ''),
('5122829', 'Sunaya', 'Krishnapura', 'sunaya.krishnapura@gmail.com', 'b940db353517e6fb2c5d20fa48a9e683640943b3', -1, 10, '', '650-969-3076', ''),
('5101804', 'Zhuorui (Max)', 'Zhang', 'dotdotdot333@gmail.com', 'a9edb7ef486ec3421bf5c84cace5d0a15eff392b', 0, 12, '', '(408) 657-7976', ''),
('5101898', 'Priya', 'Nyayapati', 'pnyayapati@gmail.com', 'cdcd07541a346687a2658bb89a48e96cb4eb0dd7', 6, 12, '', '9164750025', ''),
('5101784', 'Ashish', 'Samaddar', 'ashish.samaddar@gmail.com', '22d82ca87b845d2adbf658d55a2e98c9aaa7d1d1', 4, 12, '', '408-253-9042', ''),
('5121901', 'Yuci', 'Shen', 'shen.yuci1@gmail.com', '88be776b45cde270e4aef5e55ebab33dbd0c5783', 28, 10, '', '408-316-7173', ''),
('5101682', 'Anita', 'Gunaseelan', 'anita.gunaseelan@gmail.com', 'a422715315b7d6b7b24206055cb66253d705c5af', 4, 12, '', '408-476-3590', ''),
('5112043', 'Rohan', 'Choudhury', 'duckster7@gmail.com', '22f2e07300455437456d4df70931d43571ae95d8', 1, 11, '', '4084218527', ''),
('5121781', 'Woochul', 'Kim', 'nonameleftover@gmail.com', '71b6c9494ddb99889e36b08bf7039924365c531d', -1, 10, '', '(408)206-7505', '988286_309619482513323_536196824_n.jpg'),
('5111975', 'Nupur', 'Banerjee', 'nupurb@gmail.com', '680623effb73814db962495226c330b1f2d5862d', 4, 11, '', '408-722-5886', ''),
('5121735', 'Di', 'Guo', 'deeguo.dg@gmail.com', '6021f6c21bf83723919cb2cf8686abd4605b0f54', 0, 10, '', '(408) 366-1280', ''),
('5112103', 'Iraa', 'Guleria', 'guleria.iraa@gmail.com', 'b3c71c964f97216de669aa831bc04380b31cd147', 0, 11, '', '4088324411', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
