-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2023 at 10:29 AM
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
-- Database: `be18_cr4_nazila-azabdaftar_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `be18_cr4_nazila-azabdaftar_biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `be18_cr4_nazila-azabdaftar_biglibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `image` varchar(250) NOT NULL,
  `ISBN` varchar(13) NOT NULL,
  `short_description` varchar(250) NOT NULL,
  `type` varchar(5) NOT NULL,
  `author_ first_name` varchar(50) NOT NULL,
  `author_last_name` varchar(50) NOT NULL,
  `publisher_ name` varchar(50) NOT NULL,
  `publisher_address` varchar(150) NOT NULL,
  `publish_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `title`, `image`, `ISBN`, `short_description`, `type`, `author_ first_name`, `author_last_name`, `publisher_ name`, `publisher_address`, `publish_date`) VALUES
(1, 'Pit and the Pendulum, The', 'https://cdn.pixabay.com/photo/2014/10/14/20/14/library-488672__340.jpg', '764589196-3', 'Traumatic amputation at level between knee and ankle', 'CD', 'Alister', 'Dummigan', 'Roberts, Roob and Kautzer', '29 Mccormick Crossing', '2022-07-06'),
(2, 'Bunker, The', 'https://cdn.pixabay.com/photo/2014/09/09/20/37/movies-440361__340.jpg', '175784689-1', 'Unsp disp fx of fifth cervical vertebra, init for clos fx', 'DVD', 'Casandra', 'Kyneton', 'Farrell-Price', '15 Arrowood Center', '2020-11-28'),
(3, 'Night Train Murders', 'https://img.freepik.com/free-psd/book-hardcover-mockup_125540-225.jpg?size=626&ext=jpg&uid=R68135291&ga=GA1.1.1556330073.1677068126&semt=sph', '934738777-0', 'Displaced unsp fx left great toe, subs for fx w nonunion', 'Book', 'Olympia', 'Lilion', 'Zieme and Sons', '9582 Esch Crossing', '2022-04-29'),
(4, 'Mothra (Mosura)', 'https://img.freepik.com/free-psd/realistic-book-cover-presentation_1310-24.jpg?size=338&ext=jpg&uid=R68135291&ga=GA1.1.1556330073.1677068126&semt=sph', '043521114-5', 'Chronic atticoantral suppurative otitis media, left ear', 'Book', 'Kirstyn', 'Howton', 'Johnson-Glover', '9089 Eliot Center', '2021-07-17'),
(5, 'Encounters at the End of the World', 'https://img.freepik.com/free-vector/electro-music-album_53876-67221.jpg?size=626&ext=jpg&uid=R68135291&ga=GA1.1.1556330073.1677068126&semt=sph', '313737218-6', 'Poisoning by methylphenidate, undetermined, subs encntr', 'DVD', 'Annelise', 'Andrichak', 'Abernathy Inc', '8284 Annamark Drive', '2021-03-02'),
(6, 'Frenchmen 2', 'https://img.freepik.com/free-psd/software-box-mockup_308775-18.jpg?size=626&ext=jpg&uid=R68135291&ga=GA1.1.1556330073.1677068126&semt=sph', '064420579-2', 'Pasngr in pk-up/van injured in clsn w unsp mv nontraf, subs', 'CD', 'Tobin', 'Yackiminie', 'Harvey, Wiegand and Doyle', '9315 Judy Parkway', '2022-10-10'),
(7, 'Kings of the Sun', 'https://img.freepik.com/premium-psd/book-cover-mockup_125540-572.jpg?size=626&ext=jpg&uid=R68135291&ga=GA1.1.1556330073.1677068126&semt=sph', '048856668-1', 'Type 2 diabetes w proliferative diabetic retinopathy', 'Book', 'Briney', 'Jeannenet', 'Corwin, Will and Rosenbaum', '5 Pearson Parkway', '2022-03-26'),
(8, 'Walk Among the Tombstones, A', 'https://img.freepik.com/free-psd/magazine-cover-mockup-psd-with-nature-image_53876-116363.jpg?size=626&ext=jpg&uid=R68135291&ga=GA1.2.1556330073.1677068126&semt=sph', '479103981-5', 'Medial dislocation of unspecified ulnohumeral joint, sequela', 'Book', 'Jen', 'Soggee', 'Halvorson-Tremblay', '8 Barby Park', '2020-04-02'),
(9, 'Don', 'https://img.freepik.com/premium-psd/book-cover-mockup_190445-688.jpg?size=626&ext=jpg&uid=R68135291&ga=GA1.2.1556330073.1677068126&semt=sph', '062207290-0', 'Primary ovarian failure', 'Book', 'Hadlee', 'Fencott', 'Thiel-Prosacco', '3 Burrows Court', '2022-06-02'),
(10, 'Gandhi', 'https://img.freepik.com/free-vector/white-cardboard-software-box_3446-339.jpg?size=338&ext=jpg&uid=R68135291&ga=GA1.1.1556330073.1677068126&semt=sph', '545216685-8', 'Sltr-haris Type IV physeal fracture of left metatarsal, 7thB', 'DVD', 'Phillipe', 'Conneau', 'Green LLC', '42245 Independence Alley', '2021-03-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
