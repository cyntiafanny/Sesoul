-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2020 at 09:32 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sesoul`
--

-- --------------------------------------------------------

--
-- Table structure for table `matched`
--

CREATE TABLE matched (
  id varchar(5) NOT NULL primary key,
  user1 varchar(5) NOT NULL,
  user2 varchar(5) NOT NULL,
  chat int(3) NOT NULL
  FOREIGN KEY (user1) REFERENCES user(id);
  FOREIGN KEY (user2) REFERENCES user(id);
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE user (
  id varchar(5) NOT NULL primary key,
  username varchar(100) DEFAULT NULL,
  password varchar(18) DEFAULT NULL,
  nama varchar(100) DEFAULT NULL,
  umur int(3) DEFAULT NULL,
  lokasi varchar(100) DEFAULT NULL
  foto varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO user (id, username, password, nama, umur, lokasi) VALUES
('usr01', 'abcabc', '123', 'Layla', 18, 'Moonton','sample.png'),
('usr02', 'aa', '123', 'Miya', 29, 'Moonton','sample.png'),
('usr03', 'aaa', '123', 'Nana', 29, 'Moonton','sample.png'),
('usr04', 'aaaaa', '123', 'Bruno', 30, 'Moonton','sample.png'),
('usr05', 'aaaaaaa', '123', 'Tigreal', 33, 'Moonton','sample.png'),
('usr06', 'abab', '123', 'Zilong', 35, 'Moonton','sample.png'),
('usr07', 'acac', '123', 'Natalia', 31, 'Moonton','sample.png'),
('usr08', 'adad', '123', 'Freya', 30, 'Moonton','sample.png'),
('usr09', 'aeae', '123', 'Karina', 35, 'Moonton','sample.png'),
('usr10', 'afaf', '123', 'Johnson', 32, 'Moonton','sample.png'),
('usr11', 'agag', '123', 'Harley', 33, 'Moonton','sample.png'),
('usr12', 'ahah', '123', 'Saber', 20, 'Moonton','sample.png'),
('usr13', 'aiai', '123', 'Franco', 19, 'Moonton','sample.png'),
('usr14', 'ajaj', '123', 'Kinatsu', 23, 'Jakarta','sample.png'),
('usr15', 'akak', '123', 'Zeda', 24, 'Jakarta','sample.png'),
('usr16', 'alal', '123', 'Galax', 25, 'Jakarta','sample.png'),
('usr17', 'amam', '123', 'Graphie', 26, 'Jakarta','sample.png'),
('usr18', 'anan', '123', 'Raffi', 27, 'Jakarta','sample.png'),
('usr19', 'aoao', '123', 'Panpun', 22, 'Jakarta','sample.png'),
('usr20', 'apap', '123', 'Cort', 20, 'Tangerang','sample.png'),
('usr21', 'aqaq', '123', 'Axiu', 19, 'Tangerang','sample.png'),
('usr22', 'arar', '123', 'Nince', 18, 'Tangerang','sample.png'),
('usr23', 'asas', '123', 'Blafri', 20, 'Tangerang','sample.png'),
('usr24', 'atat', '123', 'Arem', 21, 'Tangerang','sample.png'),
('usr25', 'auau', '123', 'Aaron', 21, 'Tangerang','sample.png'),
('usr26', 'avav', '123', 'Sanggal', 22, 'Semarang','sample.png'),
('usr27', 'awaw', '123', 'Natre', 22, 'Semarang','sample.png'),
('usr28', 'axax', '123', 'Remen', 21, 'Surabaya','sample.png'),
('usr29', 'ayay', '123', 'Estee', 20, 'Surabaya','sample.png'),
('usr30', 'azaz', '123', 'Fanov', 19, 'Surabaya','sample.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
