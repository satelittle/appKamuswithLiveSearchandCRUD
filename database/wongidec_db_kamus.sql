-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 10, 2018 at 07:21 AM
-- Server version: 10.0.36-MariaDB-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wongidec_db_kamus`
--

-- --------------------------------------------------------

--
-- Table structure for table `source`
--

CREATE TABLE `source` (
  `id` int(11) NOT NULL,
  `ina` varchar(255) NOT NULL,
  `ing` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `source`
--

INSERT INTO `source` (`id`, `ina`, `ing`) VALUES
(2, 'abjad', 'alphabet'),
(8, 'absent', 'absent'),
(9, 'abstrak', 'abstract'),
(10, 'abu', 'dust'),
(11, 'acak', 'disordered, random'),
(12, 'acara', 'agenda, program'),
(13, 'adab', 'courtesy, culture'),
(14, 'adat', 'custom, tradition'),
(15, 'adegan', 'scane'),
(16, 'adem', 'cool, calm, cold'),
(17, 'adik', 'younger bro or sist'),
(18, 'adil', 'fair'),
(19, 'advocat', 'lawyer'),
(20, 'agak', 'rather'),
(21, 'agama', 'religion'),
(22, 'agen', 'agency, branch, agent'),
(23, 'ahli', 'expert, specialist'),
(24, 'air', 'water,liquid'),
(25, 'ajaib', 'miraculous'),
(26, 'ajang', 'arena, site'),
(27, 'akad', 'contact, agreement'),
(28, 'akal', 'mind'),
(29, 'akar', 'root, source'),
(30, 'akhir', 'end, finish'),
(31, 'akhirat', 'the hereafter, the beyond'),
(32, 'aki', 'storage battery'),
(33, 'akibat', 'result, consequense'),
(34, 'akidah', 'belief, faith'),
(35, 'akrab', 'intimate, chummy'),
(36, 'aksi', 'action, lawsuit'),
(37, 'aktif', 'active, energetic'),
(38, 'aku', 'I'),
(39, 'akur', 'agree to do'),
(40, 'akurate', 'accurate, exact'),
(41, 'akustik', 'accoustics'),
(42, 'alam', 'world,realm, nature'),
(43, 'alamat', 'address, sign'),
(44, 'alat', 'instrument, tool, device'),
(45, 'algojo', 'hangman, executioner'),
(52, 'Tolol', 'Dumb'),
(53, 'Cinta, kasih', 'Love'),
(54, 'Semut', 'Ant'),
(55, 'Singa', 'Lion'),
(56, 'Kodok, katak', 'Frog'),
(57, 'Lebah', 'Bee'),
(58, 'Ular', 'Snake'),
(59, 'Burung ', 'Bird'),
(60, 'Teh ', 'Tea'),
(61, 'Kucing ', 'Cat'),
(62, 'Kucing', 'Cat'),
(63, 'Ikan', 'Fish'),
(64, 'Kambing', 'Goat'),
(65, 'Ayam', 'Chicken'),
(66, 'Bebek', 'Duck'),
(67, 'Pergi', 'Go'),
(68, 'Daun', 'Leaf'),
(69, 'Pohon', 'Tree'),
(70, 'Apel', 'Apple'),
(71, 'Jeruk', 'Orange '),
(72, 'Kita', 'We, us'),
(73, 'Mereka', 'They'),
(74, 'Saya', 'I, me'),
(75, 'Benci', 'Hate '),
(76, 'Meja', 'Table'),
(77, 'Kursi', 'Chair '),
(78, 'Sendok', 'Spoon'),
(79, 'Mangkok', 'Bowl'),
(80, 'Lagi', 'Again'),
(81, 'Damai', 'Peace'),
(82, 'Menang', 'Win'),
(83, 'Kalah', 'Lose'),
(84, 'Cari', 'Find'),
(85, 'Mata', 'Eye'),
(86, 'Rambut', 'Hair'),
(87, 'Kaki', 'Foot'),
(88, 'Jalan', 'Street '),
(89, 'Bersama', 'Together '),
(90, 'Sendiri', 'Alone'),
(91, 'Sepi', 'Quite '),
(92, 'Kabut', 'Fog'),
(93, 'Hujan', 'Rain'),
(94, 'Cerah', 'Sunny'),
(95, 'Mendung', 'Cloudy'),
(96, 'Berjalan', 'Walk'),
(97, 'Bicara', 'Talk'),
(98, 'Lagu', 'Song'),
(99, 'Nyanyi', 'Sing'),
(100, 'Takut', 'Scare '),
(101, 'Hantu', 'Ghost '),
(102, 'Manusia', 'Human'),
(103, 'Hewan', 'Animal'),
(104, 'Lantai', 'Floor'),
(105, 'Cepat ', 'Quick, fast'),
(106, 'Lucu', 'Funny'),
(107, 'Senang', 'Happy, glad'),
(108, 'Bintang', 'Star'),
(109, 'Matahari ', 'Sun'),
(110, 'Bulan', 'Moon, month '),
(111, 'Untung', 'Luck'),
(113, 'Celana', 'Pant'),
(114, 'Baju', 'Clothes'),
(115, 'Atas', 'Above, up'),
(116, 'Kacamata', 'Glasses');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `source`
--
ALTER TABLE `source`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `source`
--
ALTER TABLE `source`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
