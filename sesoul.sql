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


CREATE TABLE users (
  id varchar(5) AS CONCAT('usr','',PID) STORED, PID INT auto_increment) NOT NULL primary key,
  username varchar(100) DEFAULT NULL,
  password varchar(18) DEFAULT NULL,
  nama varchar(100) DEFAULT NULL,
  umur int(3) DEFAULT NULL,
  lokasi varchar(100) DEFAULT NULL,
  foto varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `matched`
--

CREATE TABLE matched (
  id varchar(5) NOT NULL primary key,
  user1 varchar(5) NOT NULL,
  user2 varchar(5) NOT NULL,
  chat int(3) NOT NULL,
  FOREIGN KEY (user1) REFERENCES users(id),
  FOREIGN KEY (user2) REFERENCES users(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE liked (
  id varchar(5) NOT NULL primary key,
  yangLike varchar(5) NOT NULL,
  dilike varchar(5) NOT NULL,
  FOREIGN KEY (yangLike) REFERENCES users(id),
  FOREIGN KEY (dilike) REFERENCES users(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE chat(
chatid varchar(5) NOT NULL primary key,
  matchedid varchar(5) NOT NULL,
  nama varchar(100) NOT NULL,
  isi varchar (100) NOT NULL,
  FOREIGN KEY (matchedid) REFERENCES matched(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--



INSERT INTO users (id, username, password, nama, umur, lokasi, foto) VALUES
('usr01', 'abcabc', '123', 'Bruno', 18, 'Moonton','1.jpg'),
('usr02', 'aa', '123', 'Miya', 29, 'Moonton','2.jpg'),
('usr03', 'aaa', '123', 'Nana', 29, 'Moonton','3.jpg'),
('usr04', 'aaaaa', '123', 'Layla', 30, 'Moonton','4.jpg'),
('usr05', 'aaaaaaa', '123', 'Tigreal', 33, 'Moonton','1.jpg'),
('usr06', 'abab', '123', 'Zilong', 35, 'Moonton','sample.png'),
('usr07', 'acac', '123', 'Natalia', 31, 'Moonton','sample.png'),
('usr08', 'adad', '123', 'Fanov', 30, 'Moonton','sample.png'),
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
('usr30', 'azaz', '123', 'Freya', 19, 'Surabaya','sample.png');


INSERT INTO matched VALUES
('mtc01', 'usr30', 'usr28', 1),
('mtc02', 'usr22', 'usr08', 2),
('mtc03', 'usr01', 'usr30', 3);

INSERT INTO liked VALUES
('lke01', 'usr30', 'usr28'),
('lke02', 'usr28', 'usr30'),
('lke03', 'usr22', 'usr08'),
('lke04', 'usr08', 'usr22'),
('lke05', 'usr30', 'usr01'),
('lke06', 'usr01', 'usr30'),
('lke07', 'usr01', 'usr28');

INSERT INTO chat VALUES
('cht01','mtc01','Freya','Hai, boleh kenalan?'),
('cht02','mtc01','Remen','Boleh, aku remen, kamu siapa?'),
('cht03','mtc01','Freya','Aku Freya, boleh minta no wa?'),
('cht04','mtc01','Remen','Ini yaa, 087878162871929'),
('cht05','mtc02','Fanov','Hai, boleh kenalan?'),
('cht06','mtc02','Fanov','P'),
('cht07','mtc02','Fanov','P'),
('cht08','mtc02','Fanov','Kalo gabales dajjal'),
('cht09','mtc02','Fanov','Yah beneran gadibales :('),
('cht10','mtc03','Bruno','Hei, kangen deh'),
('cht11','mtc03','Freya','?'),
('cht12','mtc03','Bruno','Judes amat :(');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
