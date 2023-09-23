-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2023 at 11:03 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stream_lining`
--

-- --------------------------------------------------------

--
-- Table structure for table `approval`
--

CREATE TABLE `approval` (
  `approval_firstname` varchar(255) DEFAULT NULL,
  `approval_lastname` varchar(255) DEFAULT NULL,
  `approval_username` varchar(255) DEFAULT NULL,
  `approval_password` varchar(255) DEFAULT NULL,
  `approval_student_number` varchar(255) DEFAULT NULL,
  `approval_user_type` varchar(255) DEFAULT NULL,
  `approval_course` varchar(255) DEFAULT NULL,
  `approval_date_time` varchar(255) DEFAULT NULL,
  `approval_id` int(255) NOT NULL,
  `approval_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `approval`
--

INSERT INTO `approval` (`approval_firstname`, `approval_lastname`, `approval_username`, `approval_password`, `approval_student_number`, `approval_user_type`, `approval_course`, `approval_date_time`, `approval_id`, `approval_img`) VALUES
('Edmarielle', 'Bernaldez', 'elle', 'BSIT', '2020-9140-92974', 'elle', 'Student', '2023-09-22 15:09:23', 17, '../multimedia/uploaded/376386164_174537289001332_7645261166451114755_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `download_date_time` varchar(255) DEFAULT NULL,
  `download_id` int(255) NOT NULL,
  `download_title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `downloads`
--

INSERT INTO `downloads` (`download_date_time`, `download_id`, `download_title`) VALUES
('2023-09-20 11:00:57', 1, NULL),
('2023-09-20 11:04:05', 2, NULL),
('2023-09-20 11:04:28', 3, NULL),
('2023-09-20 11:04:47', 4, NULL),
('2023-09-20 11:04:52', 5, NULL),
('2023-09-20 11:04:55', 6, NULL),
('2023-09-20 11:04:57', 7, NULL),
('2023-09-20 11:04:59', 8, NULL),
('2023-09-20 11:05:31', 9, NULL),
('2023-09-20 11:06:31', 10, NULL),
('2023-09-20 11:08:39', 11, NULL),
('2023-09-20 11:09:22', 12, NULL),
('2023-09-20 11:09:29', 13, NULL),
('2023-09-20 11:10:04', 14, NULL),
('2023-09-20 11:10:34', 15, NULL),
('2023-09-20 11:11:31', 16, NULL),
('2023-09-20 11:15:50', 17, NULL),
('2023-09-20 11:16:06', 18, NULL),
('2023-09-20 11:16:45', 19, NULL),
('2023-09-20 11:17:08', 20, NULL),
('2023-09-20 11:17:08', 21, NULL),
('2023-09-20 11:17:57', 22, NULL),
('2023-09-20 11:17:57', 23, NULL),
('2023-09-20 11:19:24', 24, NULL),
('2023-09-20 11:19:24', 25, NULL),
('2023-09-20 13:54:16', 26, NULL),
('2023-09-20 13:54:16', 27, NULL),
('2023-09-20 14:02:46', 28, NULL),
('2023-09-20 14:03:31', 29, NULL),
('2023-09-20 14:03:35', 30, NULL),
('2023-09-21 20:42:28', 31, NULL),
('2023-09-21 20:46:59', 32, NULL),
('2023-09-21 21:19:58', 33, NULL),
('2023-09-22 01:15:07', 34, NULL),
('2023-09-22 01:16:24', 35, NULL),
('2023-09-22 01:16:24', 36, NULL),
('2023-09-22 01:17:25', 37, NULL),
('2023-09-22 01:17:25', 38, NULL),
('2023-09-22 01:23:57', 39, NULL),
('2023-09-22 01:23:57', 40, NULL),
('2023-09-22 01:24:00', 41, NULL),
('2023-09-22 01:24:00', 42, NULL),
('2023-09-22 02:17:39', 43, NULL),
('2023-09-22 02:17:39', 44, NULL),
('2023-09-22 02:17:51', 45, NULL),
('2023-09-22 02:17:52', 46, NULL),
('2023-09-22 02:17:56', 47, NULL),
('2023-09-22 02:17:56', 48, NULL),
('2023-09-22 02:20:18', 49, NULL),
('2023-09-22 02:20:18', 50, NULL),
('2023-09-22 02:21:46', 51, NULL),
('2023-09-22 02:21:46', 52, NULL),
('2023-09-22 02:34:10', 53, NULL),
('2023-09-22 02:34:11', 54, NULL),
('2023-09-22 02:38:18', 55, NULL),
('2023-09-22 02:38:18', 56, NULL),
('2023-09-22 02:42:41', 57, NULL),
('2023-09-22 02:42:41', 58, NULL),
('2023-09-22 02:42:56', 59, NULL),
('2023-09-22 02:42:56', 60, NULL),
('2023-09-22 02:51:42', 61, NULL),
('2023-09-22 02:51:42', 62, NULL),
('2023-09-22 02:52:17', 63, NULL),
('2023-09-22 02:52:17', 64, NULL),
('2023-09-22 03:08:04', 65, NULL),
('2023-09-22 03:08:04', 66, NULL),
('2023-09-22 03:08:35', 67, NULL),
('2023-09-22 03:08:35', 68, NULL),
('2023-09-22 03:22:27', 69, NULL),
('2023-09-22 03:22:27', 70, NULL),
('2023-09-22 03:22:37', 71, NULL),
('2023-09-22 03:22:37', 72, NULL),
('2023-09-22 03:22:43', 73, NULL),
('2023-09-22 03:22:45', 74, NULL),
('2023-09-22 03:25:52', 75, NULL),
('2023-09-22 03:26:32', 76, NULL),
('2023-09-22 03:26:53', 77, NULL),
('2023-09-22 03:35:34', 78, NULL),
('2023-09-22 03:35:35', 79, NULL),
('2023-09-22 07:03:17', 80, NULL),
('2023-09-22 07:03:17', 81, NULL),
('2023-09-22 07:19:36', 82, NULL),
('2023-09-22 07:19:36', 83, NULL),
('2023-09-22 09:19:06', 84, NULL),
('2023-09-22 09:19:06', 85, NULL),
('2023-09-22 09:20:34', 86, NULL),
('2023-09-22 09:20:34', 87, NULL),
('2023-09-22 10:49:58', 88, NULL),
('2023-09-22 10:49:58', 89, NULL),
('2023-09-22 10:51:45', 90, NULL),
('2023-09-22 10:51:45', 91, NULL),
('2023-09-22 10:53:17', 92, NULL),
('2023-09-22 10:53:18', 93, NULL),
('2023-09-22 10:53:31', 94, NULL),
('2023-09-22 10:53:31', 95, NULL),
('2023-09-22 10:54:28', 96, NULL),
('2023-09-22 10:54:28', 97, NULL),
('2023-09-22 10:54:38', 98, NULL),
('2023-09-22 10:54:38', 99, NULL),
('2023-09-22 10:54:45', 100, NULL),
('2023-09-22 10:54:45', 101, NULL),
('2023-09-22 10:57:55', 102, NULL),
('2023-09-22 10:57:55', 103, NULL),
('2023-09-22 10:59:51', 104, NULL),
('2023-09-22 10:59:52', 105, NULL),
('2023-09-22 10:59:59', 106, NULL),
('2023-09-22 10:59:59', 107, NULL),
('2023-09-22 11:00:06', 108, NULL),
('2023-09-22 11:00:06', 109, NULL),
('2023-09-22 11:46:22', 110, NULL),
('2023-09-22 11:46:22', 111, NULL),
('2023-09-22 11:47:14', 112, NULL),
('2023-09-22 11:47:14', 113, NULL),
('2023-09-22 12:45:47', 114, NULL),
('2023-09-22 12:45:48', 115, NULL),
('2023-09-22 12:45:54', 116, NULL),
('2023-09-22 12:45:54', 117, NULL),
('2023-09-22 12:46:51', 118, NULL),
('2023-09-22 12:46:52', 119, NULL),
('2023-09-22 12:48:34', 120, NULL),
('2023-09-22 12:48:34', 121, NULL),
('2023-09-22 12:48:38', 122, NULL),
('2023-09-22 12:48:38', 123, NULL),
('2023-09-22 12:48:43', 124, NULL),
('2023-09-22 12:48:43', 125, NULL),
('2023-09-22 12:48:51', 126, NULL),
('2023-09-22 12:48:51', 127, NULL),
('2023-09-22 12:48:55', 128, NULL),
('2023-09-22 12:48:55', 129, NULL),
('2023-09-22 12:49:01', 130, NULL),
('2023-09-22 12:49:01', 131, NULL),
('2023-09-22 12:49:16', 132, NULL),
('2023-09-22 12:49:16', 133, NULL),
('2023-09-22 12:49:25', 134, NULL),
('2023-09-22 12:49:25', 135, NULL),
('2023-09-22 13:00:50', 136, NULL),
('2023-09-22 13:01:58', 137, NULL),
('2023-09-22 13:10:59', 138, NULL),
('2023-09-22 13:10:59', 139, NULL),
('2023-09-22 13:11:07', 140, NULL),
('2023-09-22 13:11:08', 141, NULL),
('2023-09-22 13:12:07', 142, NULL),
('2023-09-22 13:12:07', 143, NULL),
('2023-09-22 13:12:18', 144, NULL),
('2023-09-22 13:12:18', 145, NULL),
('2023-09-22 13:12:40', 146, NULL),
('2023-09-22 13:12:41', 147, NULL),
('2023-09-22 13:12:44', 148, NULL),
('2023-09-22 13:12:44', 149, NULL),
('2023-09-22 13:12:48', 150, NULL),
('2023-09-22 13:12:49', 151, NULL),
('2023-09-22 13:13:18', 152, NULL),
('2023-09-22 13:13:18', 153, NULL),
('2023-09-22 13:14:51', 154, NULL),
('2023-09-22 13:14:51', 155, NULL),
('2023-09-22 13:15:05', 156, NULL),
('2023-09-22 13:15:06', 157, NULL),
('2023-09-22 13:19:49', 158, NULL),
('2023-09-22 13:20:25', 159, NULL),
('2023-09-22 13:20:25', 160, NULL),
('2023-09-22 13:20:51', 161, NULL),
('2023-09-22 13:21:05', 162, NULL),
('2023-09-22 13:21:05', 163, NULL),
('2023-09-22 13:21:43', 164, NULL),
('2023-09-22 13:25:11', 165, NULL),
('2023-09-22 13:25:11', 166, NULL),
('2023-09-22 13:26:08', 167, NULL),
('2023-09-22 13:26:08', 168, NULL),
('2023-09-22 13:26:21', 169, NULL),
('2023-09-22 13:26:21', 170, NULL),
('2023-09-22 13:26:29', 171, NULL),
('2023-09-22 13:26:29', 172, NULL),
('2023-09-22 13:26:32', 173, NULL),
('2023-09-22 13:26:33', 174, NULL),
('2023-09-22 13:31:34', 175, NULL),
('2023-09-22 13:31:40', 176, NULL),
('2023-09-22 13:31:44', 177, NULL),
('2023-09-22 13:32:33', 178, NULL),
('2023-09-22 13:32:36', 179, NULL),
('2023-09-22 13:38:51', 180, NULL),
('2023-09-22 13:39:05', 181, NULL),
('2023-09-22 13:40:44', 182, NULL),
('2023-09-22 13:41:37', 183, NULL),
('2023-09-22 13:43:55', 184, NULL),
('2023-09-22 13:44:14', 185, NULL),
('2023-09-22 13:44:14', 186, NULL),
('2023-09-22 13:45:25', 187, NULL),
('2023-09-22 13:45:26', 188, NULL),
('2023-09-22 13:47:16', 189, NULL),
('2023-09-22 13:47:16', 190, NULL),
('2023-09-22 13:48:00', 191, NULL),
('2023-09-22 13:48:00', 192, NULL),
('2023-09-22 13:50:00', 193, NULL),
('2023-09-22 13:50:00', 194, NULL),
('2023-09-22 13:53:58', 195, NULL),
('2023-09-22 13:53:58', 196, NULL),
('2023-09-22 13:54:07', 197, NULL),
('2023-09-22 13:54:07', 198, NULL),
('2023-09-22 17:58:08', 199, NULL),
('2023-09-22 17:58:09', 200, NULL),
('2023-09-22 17:58:15', 201, NULL),
('2023-09-22 17:58:15', 202, NULL),
('2023-09-22 17:58:18', 203, NULL),
('2023-09-22 17:58:18', 204, NULL),
('2023-09-22 17:58:26', 205, NULL),
('2023-09-22 17:58:27', 206, NULL),
('2023-09-22 18:03:11', 207, NULL),
('2023-09-22 18:03:12', 208, NULL),
('2023-09-22 18:07:01', 209, NULL),
('2023-09-22 18:07:01', 210, NULL),
('2023-09-22 18:31:03', 211, NULL),
('2023-09-22 18:31:04', 212, NULL),
('2023-09-22 18:31:14', 213, NULL),
('2023-09-22 18:31:14', 214, NULL),
('2023-09-22 18:33:43', 215, NULL),
('2023-09-22 18:33:43', 216, NULL),
('2023-09-22 18:34:21', 217, NULL),
('2023-09-22 18:34:21', 218, NULL),
('2023-09-22 18:36:54', 219, NULL),
('2023-09-22 18:36:54', 220, NULL),
('2023-09-22 19:41:00', 221, NULL),
('2023-09-22 19:41:00', 222, NULL),
('2023-09-22 19:50:48', 223, NULL),
('2023-09-22 19:50:48', 224, NULL),
('2023-09-22 21:29:53', 225, NULL),
('2023-09-22 21:29:53', 226, NULL),
('2023-09-22 21:31:06', 227, NULL),
('2023-09-22 21:31:06', 228, NULL),
('2023-09-22 21:31:10', 229, NULL),
('2023-09-22 21:31:10', 230, NULL),
('2023-09-22 22:52:29', 231, NULL),
('2023-09-22 22:52:29', 232, NULL),
('2023-09-22 22:52:36', 233, NULL),
('2023-09-22 22:52:37', 234, NULL),
('2023-09-22 22:54:15', 235, NULL),
('2023-09-22 22:54:15', 236, NULL),
('2023-09-23 15:08:33', 237, NULL),
('2023-09-23 15:08:33', 238, NULL),
('2023-09-23 15:14:16', 239, NULL),
('2023-09-23 15:14:17', 240, NULL),
('2023-09-23 15:16:34', 241, NULL),
('2023-09-23 15:16:34', 242, NULL),
('2023-09-23 15:17:01', 243, NULL),
('2023-09-23 15:17:01', 244, NULL),
('2023-09-23 15:18:08', 245, NULL),
('2023-09-23 15:18:08', 246, NULL),
('2023-09-23 15:19:12', 247, NULL),
('2023-09-23 15:19:13', 248, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `login_id` int(255) NOT NULL,
  `login_date_time` varchar(255) DEFAULT NULL,
  `login_username` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`login_id`, `login_date_time`, `login_username`) VALUES
(1, 'now()', NULL),
(2, '2023-09-12 14:27:55', NULL),
(3, '2023-09-12 14:29:47', 'pauld'),
(4, '2023-09-12 20:09:41', 'asd123'),
(5, '2023-09-17 20:45:21', 'darielm'),
(6, '2023-09-19 14:49:47', 'q'),
(7, '2023-09-19 14:53:30', 'demo1'),
(8, '2023-09-19 14:56:34', 'demo1'),
(9, '2023-09-19 14:58:17', 'demo1'),
(10, '2023-09-19 15:08:07', 'demo2'),
(11, '2023-09-19 15:21:38', 'demo2'),
(12, '2023-09-21 20:50:35', 'user1'),
(13, '2023-09-21 21:28:41', 'user1'),
(14, '2023-09-21 21:38:44', 'user1'),
(15, '2023-09-22 01:16:11', 'sofia'),
(16, '2023-09-22 02:11:11', 'sofia'),
(17, '2023-09-22 02:52:01', 'sofia'),
(18, '2023-09-22 07:19:32', 'sofia'),
(19, '2023-09-22 08:07:15', 'sofia'),
(20, '2023-09-22 12:48:30', 'sofia'),
(21, '2023-09-22 13:49:51', 'cheska'),
(22, '2023-09-22 13:53:22', 'tine'),
(23, '2023-09-22 22:54:10', 'sofia');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `record_id` int(255) NOT NULL,
  `record_control_number` varchar(255) DEFAULT NULL,
  `record_accession_number` varchar(255) DEFAULT NULL,
  `record_title` varchar(255) DEFAULT NULL,
  `record_author` varchar(255) DEFAULT NULL,
  `record_pages` varchar(255) DEFAULT NULL,
  `record_course` varchar(255) DEFAULT NULL,
  `record_year` varchar(255) DEFAULT NULL,
  `record_availability` varchar(255) DEFAULT NULL,
  `record_date_added` varchar(255) DEFAULT NULL,
  `record_book_cover` varchar(255) DEFAULT NULL,
  `record_file_upload` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`record_id`, `record_control_number`, `record_accession_number`, `record_title`, `record_author`, `record_pages`, `record_course`, `record_year`, `record_availability`, `record_date_added`, `record_book_cover`, `record_file_upload`) VALUES
(1, '1', '00816', 'E-Gulayan: A Vegetable Delivery System in Oas Albay', 'Rivera, Aljon R., \r\nTanaotanao, Mark Jastin R., \r\nRañada Carmen P.', '146', 'BSIT', '2022', 'In Library', '2023-09-17 18:22:49', '../multimedia/uploaded/To-kill-a-Mockingbird-PDF-by-Harper-Lee.jpeg', '../multimedia/uploaded/TKMFullText.pdf'),
(2, '2', '00604', 'MSWDO Assistance Record Mangement with Barangay Profiling System For the Municipality of Polangui', 'Acio, Mark Jonathan N., Reora, Lea May M., Señadan, Ievo Gielo A.', '115', 'BSIT', '2022', 'In Library', '2023-09-17 18:25:23', '../multimedia/uploaded/kb.jpg', '../multimedia/uploaded/Kill_Bill_417.pdf'),
(3, '3', '0600', 'Web Application: Activity Distribution and Retrieval System', 'Alcantara, Shaina Mae R., \r\nAstillero. Rachelle F., \r\nCapuz, Angel Rose P. ', '138', 'BSIT', '2022', 'In Library', '2023-09-17 18:27:59', '../multimedia/uploaded/TGG.jpg', '../multimedia/uploaded/Gatsby_PDF_FullText.pdf'),
(6, '4', '00602', 'E-Appointment System for the Municipality of Libon', 'Lita, Jean Claude R., \r\nBragais, Rovie Joy L., \r\nSalomon, Jinky S.', '108', 'BSIT', '2022', 'In Library', '2023-09-17 18:34:04', '../multimedia/uploaded/1.jpg', '../multimedia/uploaded/Harry Potter and the Sorcerers Stone.pdf'),
(7, '5', '00601', 'MDRRMO Pioduran Management Sytem', 'Tumulak, Christian John S., \r\nAscutia, Reymond P., Lucena, \r\nVanessa S.', '129', 'BSIT', '2022', 'In Library', '2023-09-17 18:35:34', '../multimedia/uploaded/2.jpg', '../multimedia/uploaded/Harry-Potter-and-the-Chamber-of-Secrets.pdf'),
(8, '1', '02105', 'Barangay Busay, Ligao City Information System', 'Cas, Ma. Eunice Grace C., \r\nBalagtas, Krisha Ann A., Peñaflor, \r\nJanah Rose V.', '92', 'BSIS', '2022', 'In Library', '2023-09-19 15:16:04', '../multimedia/uploaded/1.jpg', '../multimedia/uploaded/Harry-Potter-and-the-Chamber-of-Secrets.pdf'),
(9, '2', '02106', 'Mobile Based Bus Reservation Adaptive Protocol', 'Camaya, Patricia Anne R., Santor, Julie France C., Bitara, Kim Shervin E.', '87', 'BSIS', '2022', 'In Library', '2023-09-22 02:32:29', '../multimedia/uploaded/book.png', '../multimedia/uploaded/StudyGuide-CapstoneProject.pdf'),
(10, '3', '02107', 'Plan B Bogo Milktea Ordering System', 'Gados, Katherine Pauline B., Quimbo, Evangaline C., Digay, Emilou M.', '92', 'BSIS', '2022', 'In Library', '2023-09-22 02:38:10', '../multimedia/uploaded/book.png', '../multimedia/uploaded/StudyGuide-CapstoneProject.pdf'),
(11, '4', '02108', 'Yamaha Motor Polangui Branch Loan Processing System', 'Bordeos, Haina Jean R., Gonzales, Cris Ann C., Regoris, Carla Andrea', '93', 'BSIS', '2022', 'In Library', '2023-09-22 02:41:19', '../multimedia/uploaded/book.png', '../multimedia/uploaded/StudyGuide-CapstoneProject.pdf'),
(12, '5', '02109', 'Irene’s Birthing Home and Lying-in Clinic Record Management System', 'Luste, Catherine B., Sañado, Joann C., Fortes, Crisel B.', '81', 'BSIS', '2022', 'In Library', '2023-09-22 02:42:28', '../multimedia/uploaded/book.png', '../multimedia/uploaded/StudyGuide-CapstoneProject.pdf'),
(13, '8', '00848', 'Android Based Smart Alarm Clock With Voice Recognition', 'Mangete, Mon Carlo A.\r\nFerraris, Rose P.\r\nBonsa, Evelyn B.\r\n', '103', 'BSCS', '2022', 'In Library', '2023-09-22 02:42:37', '../multimedia/uploaded/book.png', '../multimedia/uploaded/StudyGuide-CapstoneProject.pdf'),
(14, '4', ' 02056', ' Speech-To-Sign Language Translation', 'Marras, Josef Karlenin M. Malto, Maria Fe C. Morcoso, Jovil L.', '122', 'BSCS', '2022', 'In Library', '2023-09-22 03:35:15', '../multimedia/uploaded/book.png', '../multimedia/uploaded/StudyGuide-CapstoneProject.pdf'),
(15, '16', ' 02063', 'Medecine Digibox: A Pill I Dentifier Using Image Recognition', 'Sayson, Charlotte Jeanne O.\r\nMedel, Monaliza A.\r\nRefe, Marjory S.\r\n', '121', 'BSCS', '2023', 'In Library', '2023-09-22 03:35:21', '../multimedia/uploaded/book.png', '../multimedia/uploaded/StudyGuide-CapstoneProject.pdf'),
(16, '12', '02060', ' Augmented Reality Kobile Application For Clothing Business', 'Padilla, Elna Pattricia Rayel, Reymond P.', ' 112', '  BSCS', '2023', 'In Library', '2023-09-22 08:04:56', '../multimedia/uploaded/book.png', '../multimedia/uploaded/StudyGuide-CapstoneProject.pdf'),
(17, '12', '02060', ' Augmented Reality Kobile Application For Clothing Business', 'Padilla, Elna Pattricia Rayel, Reymond P.', ' 112', '  BSCS', '2023', 'In Library', '2023-09-22 08:05:22', '../multimedia/uploaded/book.png', '../multimedia/uploaded/StudyGuide-CapstoneProject.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `searches`
--

CREATE TABLE `searches` (
  `search_id` int(255) NOT NULL,
  `search_date_time` varchar(255) DEFAULT NULL,
  `search_text` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `searches`
--

INSERT INTO `searches` (`search_id`, `search_date_time`, `search_text`) VALUES
(1, '2023-09-20 10:56:17', NULL),
(2, '2023-09-20 10:56:17', NULL),
(3, '2023-09-20 10:56:17', NULL),
(4, '2023-09-20 10:56:17', NULL),
(5, '2023-09-20 10:56:17', NULL),
(6, '2023-09-20 10:56:17', NULL),
(7, '2023-09-20 10:56:27', NULL),
(8, '2023-09-20 10:56:27', NULL),
(9, '2023-09-20 10:56:27', NULL),
(10, '2023-09-20 10:56:27', NULL),
(11, '2023-09-20 10:56:27', NULL),
(12, '2023-09-20 10:56:28', NULL),
(13, '2023-09-20 14:02:46', NULL),
(14, '2023-09-20 14:03:31', NULL),
(15, '2023-09-20 14:03:35', NULL),
(16, '2023-09-21 20:46:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `search_history`
--

CREATE TABLE `search_history` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_username` varchar(255) DEFAULT NULL,
  `query` text DEFAULT NULL,
  `thesis_title` varchar(255) DEFAULT NULL,
  `search_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(25) NOT NULL,
  `user_username` varchar(255) DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL,
  `user_firstname` varchar(255) DEFAULT NULL,
  `user_lastname` varchar(255) DEFAULT NULL,
  `user_student_number` varchar(255) DEFAULT NULL,
  `user_user_type` varchar(255) DEFAULT NULL,
  `user_course` varchar(255) DEFAULT NULL,
  `user_date_time` varchar(255) DEFAULT NULL,
  `user_is_approved` varchar(255) DEFAULT NULL,
  `user_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_username`, `user_password`, `user_firstname`, `user_lastname`, `user_student_number`, `user_user_type`, `user_course`, `user_date_time`, `user_is_approved`, `user_img`) VALUES
(1, 'admin', 'admin', 'Ronabeth', 'Loquinario-Fider', '', 'Admin', NULL, '2023-09-15 17:13:59', 'Yes', NULL),
(2, 'sofia', 'sofia', 'Sofia Mae', 'Bibon', '2020-4793-27863', 'Student', 'BSIT', '2023-09-15 17:14:42', 'Yes', NULL),
(3, 'cheska', 'cheska', 'Ma. Francessca', 'De Lumen', '2020-3290-49719', 'Student', 'BSIT', '2023-09-15 17:14:48', 'Yes', NULL),
(4, 'tine', 'tine', 'Kristine', 'Barroso', '2020-5463-43994', 'Student', 'BSIT', '2023-09-17 20:43:57', 'Yes', NULL),
(5, 'kathy', 'kathy', 'Catherine', 'Angeles', '2020-2564-71542', 'Student', 'BSCS', '2023-09-18 00:22:06', 'Yes', NULL),
(7, 'chan', 'chan', 'Rochann', 'Reamucio', '2020-1285-18201', 'Student', 'BSED-Eng', '2023-09-18 00:24:16', 'Yes', NULL),
(13, 'ina', 'ina', 'Ina Mae', 'Buiza', '2020-7521-35684', 'Student', 'BEED', '2023-09-19 14:33:39', 'Yes', ''),
(14, 'demo', 'demo', 'demo', 'user', '2020-0000-00000', 'Student', 'BSIS', '2023-09-19 15:06:51', 'Yes', ''),
(18, 'elle', 'BSIT', 'Edmarielle', 'Bernaldez', '2020-9140-92974', 'elle', 'Student', '2023-09-22 15:09:23', 'No', '../multimedia/uploaded/376386164_174537289001332_7645261166451114755_n.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `approval`
--
ALTER TABLE `approval`
  ADD PRIMARY KEY (`approval_id`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`download_id`);

--
-- Indexes for table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`record_id`);

--
-- Indexes for table `searches`
--
ALTER TABLE `searches`
  ADD PRIMARY KEY (`search_id`);

--
-- Indexes for table `search_history`
--
ALTER TABLE `search_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `approval`
--
ALTER TABLE `approval`
  MODIFY `approval_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `download_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=249;

--
-- AUTO_INCREMENT for table `logins`
--
ALTER TABLE `logins`
  MODIFY `login_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `record_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `searches`
--
ALTER TABLE `searches`
  MODIFY `search_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `search_history`
--
ALTER TABLE `search_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
