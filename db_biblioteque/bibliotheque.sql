-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 07, 2015 at 02:03 PM
-- Server version: 5.5.43
-- PHP Version: 5.5.25-1+deb.sury.org~precise+2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bibliotheque`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE IF NOT EXISTS `authors` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `bio` text NOT NULL,
  `datebirth` date NOT NULL DEFAULT '0000-00-00',
  `datedeath` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`, `photo`, `bio`, `datebirth`, `datedeath`) VALUES
(1, 'James Joyce', 'joyce.jpg', 'James Joyce was born on February 2, 1882 in Dublin, Ireland. He published "Portrait of the Artist" in 1916 and caught the attention of Ezra Pound. With "Ulysses," Joyce perfected his stream-of-consciousness style and became a literary celebrity. The explicit content of his prose brought about landmark legal decisions on obscenity. Joyce battled eye ailments for most of his life. He died in 1941.', '1882-02-02', '1882-01-13'),
(2, 'F. Scott Fitzgerald', 'scott.jpg', 'F. Scott Fitzgerald was born on September 24, 1896, in St. Paul, Minnesota. His first novel''s success made him famous and let him marry the woman he loved, but he later descended into drinking and his wife had a mental breakdown. Following the unsuccessful Tender is the Night, Fitzgerald moved to Hollywood and became a scriptwriter. He died of a heart attack in 1940, at age 44, his final novel only half completed.', '1896-09-24', '1940-12-21');

-- --------------------------------------------------------

--
-- Table structure for table `author_book`
--

CREATE TABLE IF NOT EXISTS `author_book` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int(10) unsigned NOT NULL,
  `book_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `author_book`
--

INSERT INTO `author_book` (`id`, `author_id`, `book_id`) VALUES
(1, 2, 1),
(2, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `front_cover` varchar(255) NOT NULL,
  `summary` text NOT NULL,
  `genre_id` int(10) DEFAULT NULL,
  `editor_id` int(10) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `front_cover`, `summary`, `genre_id`, `editor_id`, `title`) VALUES
(1, 'gatsby.jpg', 'The novel chronicles an era that Fitzgerald himself dubbed the "Jazz Age". Following the shock and chaos of World War I, American society enjoyed unprecedented levels of prosperity during the "roaring" 1920s as the economy soared. At the same time, Prohibition, the ban on the sale and manufacture of alcohol as mandated by the Eighteenth Amendment, made millionaires out of bootleggers and led to an increase in organized crime, for example the Jewish mafia. Although Fitzgerald, like Nick Carraway in his novel, idolized the riches and glamor of the age, he was uncomfortable with the unrestrained materialism and the lack of morality that went with it, a kind of decadence. ', 1, 0, 'The Great Gatsby'),
(2, 'ulysses.jpg', 'Ulysses chronicles the passage of Leopold Bloom through Dublin during an ordinary day, June 16, 1904. The title parallels and alludes to Odysseus (Latinised into Ulysses), the hero of Homer''s Odyssey (e.g., the correspondences between Leopold Bloom and Odysseus, Molly Bloom and Penelope, and Stephen Dedalus and Telemachus). Joyce fans worldwide now celebrate June 16 as Bloomsday. ', 5, NULL, 'Ulysses');

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE IF NOT EXISTS `genres` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `name`, `created_at`) VALUES
(1, 'Horror', '2015-03-16 12:18:48'),
(2, 'Comedy', '2015-03-16 12:18:48'),
(3, 'Fantasy', '2015-03-16 18:23:16'),
(4, 'Mystery & Detective', '2015-03-16 18:23:16'),
(5, 'Nonfiction', '2015-03-16 18:29:44'),
(6, 'Fiction', '2015-03-16 18:30:08');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
