-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 04, 2013 at 02:03 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `loginphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `inscr`
--

CREATE TABLE IF NOT EXISTS `inscr` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ncin` int(8) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `section` varchar(50) NOT NULL,
  `niveau` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `inscr`
--

INSERT INTO `inscr` (`id`, `ncin`, `nom`, `prenom`, `pass`, `mail`, `section`, `niveau`) VALUES
(14, 12343211, 'hasnaoui', 'aaaa', '594f803b380a41396ed63dca39503542', 'ahmd@grervgsz', 'Informatique', '2ème'),
(15, 12345678, 'issam', 'issam', 'ed311374b13fdedb3d2b206127180e35', 'issam', 'Informatique', '2ème'),
(16, 12345687, 'ahmed', 'ahmed', '827ccb0eea8a706c4c34a16891f84e7b', 'issam@gmail.com', 'Informatique', '2ème'),
(18, 12233234, 'mirawI', 'amin', '30ae43ad1aa0a416699051b73a3dfcf6', 'zefzfzefz', 'Informatique', '2ème');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
