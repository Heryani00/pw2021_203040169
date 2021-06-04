-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2021 at 05:04 AM
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
-- Database: `tubes_203040169`
--

-- --------------------------------------------------------

--
-- Table structure for table `parfum`
--

CREATE TABLE `parfum` (
  `id` int(11) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `description` varchar(900) NOT NULL,
  `category` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parfum`
--

INSERT INTO `parfum` (`id`, `picture`, `name`, `brand`, `description`, `category`, `price`) VALUES
(1, '1.jpg', 'AQUA ALLEGORIA', 'Guerlain', 'Wangi Eau de Toilette ini akan membawa kita berjalan-jalan di kebun Hesperides yang penuh dengan buah pear. Note bergamot dan osmanthus membuat Pera Granita juicy dan cheerful', 'Spray', 'Rp1.500.000'),
(2, '2.jpg', 'SUN di Gioia', 'GIORGIO ARMANI', 'Giorgio Armani Sun di Gioia Parfum EDP Wanita merupakan parfum dengan kesegaran oriental floral, terdiri dari paduan White Floral, Vanilla, Amber, Powdery, Floral yang memberikan aroma khas bagi wanita sehingga cocok untuk digunakan dalam aktifitas sehari-hari.', 'Spray', 'Rp1.380.000'),
(3, '3.jpg', ' Chanel Paris Parfum', 'CHANEL', 'CHANEL No 5 EDP Parfum Wanita merupakan parfum dengan kesegaran Fresh, terdiri dari paduan neroli, ylang-ylang, peach, bergamot, aldehida, melati segar, lily lembah, dan iris yang memberikan aroma khas bagi wanita sehingga cocok untuk digunakan dalam aktifitas sehari-hari', 'Spray', 'Rp2.200.000'),
(4, '4.jpg', 'Eau de Poeme ', 'LAURISSI', 'Parfum segar, tapi disaat yang sama aroma manis yang ringan. Bunga sakura, teh, dupa, kayu, dan nasi putih adalah beberapa bahannya yang lembut', 'Spray', 'Rp2.230.000'),
(5, '5.jpg', 'Narciso Rodriguez Poudree', 'NARCISO RODRIGUEZ', 'Narciso Rodriquez Poudree for Women EDP merupakan parfum dengan kesegaran Floral Musk yang terdiri dari paduan aroma rose dan white jasmine yang memberikan aroma khas bagi wanita sehingga cocok untuk digunakan dalam aktifitas sehari-hari', 'Spray', 'Rp973.685'),
(6, '6.jpg', 'Chanel Coco Mademoiselle ', 'CHANEL', 'Parfum dengan kesegaran oriental woody dalam perpaduan aroma Lemon, Bergamot, Sicilian orange, Fruit notes, Jasmine, Rose yang memberikan aroma khas bagi wanita sehingga cocok untuk digunakan dalam aktifitas sehari-hari.', 'Spray', 'RP1.850.000'),
(7, '7.jpg', 'Lancome Poeme', 'Lancome', 'Lancome Poeme For Women EDP merupakan parfume dengan aroma Floral dari perpaduan Black Currant, Himalayan Poppy, Plum, Green Notes, Mandarin Orange, Narcissus, Bergamot, Peach, Datura yang memberikan keharuman sepanjang hari', 'Spray', 'Rp904.900'),
(8, '8.jpg', 'Lanvin Modern Princess', 'Lanvin', 'Modern Princess dibuka dengan aroma segar dari pink lady apple dan red currant. Jantungnya diisi dengan aroma feminim dari melati dan freesia. Basenya terbuat dari note musk putih, blonde woods dan vanilla orchid.', 'Spray', 'Rp600.000'),
(9, '9.jpg', 'MANDARINA DUCK', 'FRAGRANCES', 'Bebek Mandarina , parfum pedas dan segar, bersemangat, dan energik, yang dapat menemani anda sepanjang hari! Keharuman pertama merek ini dengan sempurna mewujudkan filosofi Mandarina Duck: emosi, warna, gerakan, dan inovasi. Parfum yang sempurna bagi mereka yang membutuhkan dorongan untuk menangani rutinitas sehari-hari!', 'Spray', 'Rp960.000'),
(10, '10.jpg', 'BLEU DE CHANEL', 'CHANEL', 'Bleu De Chanel Man EDP parfum dengan aroma woody aromatic yang terdiri dari aroma Amber, Pink pepper, Lemon, Grapefruit, Patchouli, Cedar, Incense, Jasmine, Sandalwood,Ginger, Mint, Woody notes, Nutmeg, Vetiver, Labdanum sehingga cocok dipakai sehari-hari.', 'Spray', 'Rp850.000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'yani', '$2y$10$XMvt1fgEvWBzqgppZdbThudCb8KBmV46P6AIqGkBBjxxc9NFgGj2m');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `parfum`
--
ALTER TABLE `parfum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `parfum`
--
ALTER TABLE `parfum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
