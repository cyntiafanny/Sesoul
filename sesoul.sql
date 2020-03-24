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
  id int(5) NOT NULL auto_increment primary key,
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
  id int(5) NOT NULL auto_increment primary key,
  user1 int(5) NOT NULL,
  user2 int(5) NOT NULL,
  FOREIGN KEY (user1) REFERENCES users(id),
  FOREIGN KEY (user2) REFERENCES users(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE liked (
  id int(5) NOT NULL auto_increment primary key,
  yangLike int(5) NOT NULL,
  dilike int(5) NOT NULL,
  FOREIGN KEY (yangLike) REFERENCES users(id),
  FOREIGN KEY (dilike) REFERENCES users(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE chat(
chatid int(5) NOT NULL auto_increment primary key,
  matchedid int(5) NOT NULL,
  nama varchar(100) NOT NULL,
  isi varchar (100) NOT NULL,
  FOREIGN KEY (matchedid) REFERENCES matched(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--



INSERT INTO users (id, username, password, nama, umur, lokasi, foto) VALUES
(1, 'abcabc', '123', 'Bruno', 18, 'Moonton','3.jpg'),
(2, 'aa', '123', 'Miya', 29, 'Moonton','1.jpg'),
(3, 'aaa', '123', 'Nana', 29, 'Moonton','2.jpg'),
(4, 'aaaaa', '123', 'Layla', 30, 'Moonton','4.jpg'),
(5, 'aaaaaaa', '123', 'Tigreal', 33, 'Moonton','30.jpg'),
(6, 'abab', '123', 'Zilong', 35, 'Moonton','12.jpg'),
(7, 'acac', '123', 'Natalia', 31, 'Moonton','5.jpg'),
(8, 'adad', '123', 'Fanov', 30, 'Moonton','13.jpg'),
(9, 'aeae', '123', 'Karina', 35, 'Moonton','6.jpg'),
(10, 'afaf', '123', 'Johnson', 32, 'Moonton','14.jpg'),
(11, 'agag', '123', 'Harley', 33, 'Moonton','15.jpg'),
(12, 'ahah', '123', 'Saber', 20, 'Moonton','16.jpg'),
(13, 'aiai', '123', 'Franco', 19, 'Moonton','17.jpg'),
(14, 'ajaj', '123', 'Kinatsu', 23, 'Jakarta','7.jpg'),
(15, 'akak', '123', 'Zeda', 24, 'Jakarta','8.jpg'),
(16, 'alal', '123', 'Galax', 25, 'Jakarta','19.jpg'),
(17, 'amam', '123', 'Graphie', 26, 'Jakarta','20.jpg'),
(18, 'anan', '123', 'Raffi', 27, 'Jakarta','21.jpg'),
(19, 'aoao', '123', 'Panpun', 22, 'Jakarta','22.jpg'),
(20, 'apap', '123', 'Cort', 20, 'Tangerang','23.jpg'),
(21, 'aqaq', '123', 'Axiu', 19, 'Tangerang','24.jpg'),
(22, 'arar', '123', 'Nince', 18, 'Tangerang','9.jpg'),
(23, 'asas', '123', 'Blafri', 20, 'Tangerang','25.jpg'),
(24, 'atat', '123', 'Arem', 21, 'Tangerang','26.jpg'),
(25, 'auau', '123', 'Aaron', 21, 'Tangerang','27.jpg'),
(26, 'avav', '123', 'Sanggal', 22, 'Semarang','28.jpg'),
(27, 'awaw', '123', 'Natre', 22, 'Semarang','10.jpg'),
(28, 'axax', '123', 'Remen', 21, 'Surabaya','11.jpg'),
(29, 'ayay', '123', 'Estee', 20, 'Surabaya','29.jpg'),
(30, 'azaz', '123', 'Freya', 19, 'Surabaya','18.jpg');


INSERT INTO matched VALUES
(1, 30, 28),
(2, 22, 8),
(3, 1, 30);

INSERT INTO liked VALUES
(1, 30, 28),
(2, 28, 30),
(3, 22, 8),
(4, 8, 22),
(5, 30, 1),
(6, 1, 30),
(7, 1, 28);

INSERT INTO chat VALUES
(1,1,'Freya','Hai, boleh kenalan?'),
(2,1,'Remen','Boleh, aku remen, kamu siapa?'),
(3,1,'Freya','Aku Freya, boleh minta no wa?'),
(4,1,'Remen','Ini yaa, 087878162871929'),
(5,2,'Fanov','Hai, boleh kenalan?'),
(6,2,'Fanov','P'),
(7,2,'Fanov','P'),
(8,2,'Fanov','Kalo gabales dajjal'),
(9,2,'Fanov','Yah beneran gadibales :('),
(10,3,'Bruno','Hei, kangen deh'),
(11,3,'Freya','?'),
(12,3,'Bruno','Judes amat :(');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
