-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2023 at 05:11 PM
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
  `author_first_name` varchar(50) NOT NULL,
  `author_last_name` varchar(50) NOT NULL,
  `publisher_name` varchar(150) NOT NULL,
  `publisher_address` varchar(150) NOT NULL,
  `publish_date` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `title`, `image`, `ISBN`, `short_description`, `type`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`, `status`) VALUES
(1, 'Pit and the Pendulum, The', 'https://m.media-amazon.com/images/I/41zYEiiw4OL._SX300_SY300_QL70_ML2_.jpg', '764589196-3', 'Traumatic amputation at level between knee and ankle', 'CD', 'Alister', 'Dummigan', 'Roberts', '29 Mccormick Crossing', '2022-07-06', 1),
(2, 'Bunker, The', 'https://cdn.pixabay.com/photo/2014/09/09/20/37/movies-440361__340.jpg', '175784689-1', 'Unsp disp fx of fifth cervical vertebra, init for clos fx', 'DVD', 'Casandra', 'Kyneton', 'Farrell-Price', '15 Arrowood Center', '2020-11-28', 1),
(6, 'Frenchmen 2', 'https://m.media-amazon.com/images/I/51l4FDBj22S._SY445_.jpg', '064420579-2', 'Pasngr in pk-up/van injured in clsn w unsp mv nontraf, subs', 'CD', 'Tobin', 'Yackiminie', 'Harvey, Wiegand and Doyle', '9315 Judy Parkway', '2022-10-10', 1),
(7, 'Kings of the Sun', 'https://img.freepik.com/premium-psd/book-cover-mockup_125540-572.jpg?size=626&ext=jpg&uid=R68135291&ga=GA1.1.1556330073.1677068126&semt=sph', '048856668-1', 'Type 2 diabetes w proliferative diabetic retinopathy', 'Book', 'Briney', 'Jeannenet', 'Corwin', '5 Pearson Parkway', '2022-03-26', 1),
(10, 'Gandhi', 'https://img.freepik.com/free-vector/white-cardboard-software-box_3446-339.jpg?size=338&ext=jpg&uid=R68135291&ga=GA1.1.1556330073.1677068126&semt=sph', '545216685-8', 'Sltr-haris Type IV physeal fracture of left metatarsal, 7thB', 'DVD', 'Phillipe', 'Conneau', 'Green LLC', '42245 Independence Alley', '2021-03-13', 1),
(12, 'Aute deserunt suscip', 'https://cdn.pixabay.com/photo/2010/12/13/09/51/book-1798__340.jpg', '12354895-6522', 'Quae commodo dolore ', 'DVD', 'Dominic', 'Mcfarland', 'Veda Baldwin', 'Consequuntur volupta', '2020-02-04', 1),
(13, 'Aute deserunt suscip', 'https://m.media-amazon.com/images/I/518h9zyCooL._SX300_SY300_QL70_ML2_.jpg', '12354895-6522', 'Quae commodo dolore ', 'DVD', 'Dominic', 'Mcfarland', 'Veda Baldwin', 'Consequuntur volupta', '2020-02-04', 1),
(14, 'Aute deserunt suscip', 'https://cdn.pixabay.com/photo/2016/07/30/21/37/mario-1558062__340.jpg', '12354895-6522', 'Quae commodo dolore ', 'CD', 'Dominic', 'Mcfarland', 'Veda Baldwin', 'Consequuntur volupta', '2020-02-04', 0),
(16, 'Aute deserunt suscip', 'https://m.media-amazon.com/images/I/81weyssqOIL._SY445_.jpg', '12354895-6522', 'Quae commodo dolore ', 'DVD', 'Dominic', 'Mcfarland', 'Veda Baldwin', 'Consequuntur volupta', '2020-02-04', 1),
(18, 'Sit aut minima rem ', 'https://cdn.pixabay.com/photo/2020/01/09/18/04/books-4753506__340.jpg', 'Lorem corrupt', 'Amet eos quis volup', 'Book', 'Keiko', 'Dixon', 'Lenore Burnett', 'Iste dolorem et sunt', '1990-06-26', 1),
(19, 'Sit aut minima rem ', 'https://images.thalia.media/-/BF2000-2000/9ba066a7ae2f4aab944e374a8649832b/das-einzige-buch-das-du-ueber-finanzen-lesen-solltest-taschenbuch-thomas-kehl.jpeg', 'Lorem corrupt', 'Amet eos quis volup', 'Book', 'Keiko', 'Dixon', 'Lenore Burnett', 'Iste dolorem et sunt', '1990-06-26', 1),
(20, 'Sit aut minima rem ', 'https://m.media-amazon.com/images/I/510SMih4fCL._SX198_BO1,204,203,200_QL40_ML2_.jpg', 'Lorem corrupt', 'Amet eos quis volup', 'Book', 'Keiko', 'Dixon', 'Lenore Burnett', 'Iste dolorem et sunt', '1990-06-26', 1),
(21, 'Eveniet possimus d', 'https://cdn.pixabay.com/photo/2017/08/06/03/07/cd-2588173__340.jpg', 'Modi necessit', 'Labore nulla qui sit', 'CD', 'Keely', 'Dunn', 'Kaye Oneil', 'Consequatur laudanti', '1976-10-27', 1),
(24, 'Eligendi veniam dol', 'https://cdn.pixabay.com/photo/2018/05/26/18/36/cd-cover-3431970__340.jpg', 'Quaerat aut q', 'Ad libero vel sed pr', 'CD', 'Shelley', 'Lindsay', 'Kendall Bates', 'Adipisci suscipit ne', '2008-05-28', 1),
(29, 'Iure fugit tempora ', 'https://img.freepik.com/free-photo/colorful-books-with-pink-background_23-2148898319.jpg?size=626&ext=jpg&uid=R68135291&ga=GA1.1.1556330073.1677068126&semt=sph', 'Qui laborum q', 'Nostrud voluptatem e', 'Book', 'Anthony', 'Palmer', 'Kay Finley', 'Nostrud porro qui al', '1987-06-29', 0),
(44, 'Eveniet minima repr', 'https://cdn.pixabay.com/photo/2019/03/08/14/57/tinker-4042483__340.jpg', 'Et consequatu', 'Voluptas anim animi', 'DVD', 'Lucy', 'Todd', 'Kathleen Kramer', 'Est excepturi laboru', '1982-11-26', 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
