/*
SQLyog Enterprise - MySQL GUI v7.02 
MySQL - 5.0.51b-community-nt : Database - ezzone
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`ezzone` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `ezzone`;

/*Table structure for table `comment123` */

DROP TABLE IF EXISTS `comment123`;

CREATE TABLE `comment123` (
  `comment` text,
  `mail` varchar(30) default NULL,
  `date` varchar(10) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `comment123` */

insert  into `comment123`(`comment`,`mail`,`date`) values ('fine','ram','2010-07-10'),('i am fine','aaaa','2010-08-29'),('easf ds fds fdas fdas das das fds ds das das das fdas fdas fdas fdas dasf dasf dsf dsf das fdas dasf fdas dfs dsf sdf ds ds ds das  dsa das das as das das asd das ds dasds das fsd f\r\n','aaaa','2010-09-01'),('easf ds fds fdas fdas das das fds ds das das das fdas fdas fdas fdas dasf dasf dsf dsf das fdas dasf fdas dfs dsf sdf ds ds ds das  dsa das das as das das asd das ds dasds das fsd f\r\n','aaaa','2010-09-01'),('easf ds fds fdas fdas das das fds ds das das das fdas fdas fdas fdas dasf dasf dsf dsf das fdas dasf fdas dfs dsf sdf ds ds ds das  dsa das das as das das asd das ds dasds das fsd f\r\n','','2010-09-01'),('easf ds fds fdas fdas das das fds ds das das das fdas fdas fdas fdas dasf dasf dsf dsf das fdas dasf fdas dfs dsf sdf ds ds ds das  dsa das das as das das asd das ds dasds das fsd f\r\n','','2010-09-01');

/*Table structure for table `movie` */

DROP TABLE IF EXISTS `movie`;

CREATE TABLE `movie` (
  `mhall` varchar(50) default NULL,
  `mname` varchar(50) default NULL,
  `mshow` varchar(50) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `movie` */

insert  into `movie`(`mhall`,`mname`,`mshow`) values ('Cathay Causeway Point','The Expendables','12:00pm 2:05pm 10:00'),('Cathay Amk Hub','The Last Airbender','9:00pm 7:05pm '),('Cathay Downtown East','Grown Ups','12:50pm 3:00pm 5:10pm 7:20pm '),('Cathay Orchard','Inception','3:00pm 5:50pm 8:40pm'),('Cathay The Cathay Cineplex','The Last Airbender','5:00pm'),('Cathay The Picturehouse','Salt','6:20pm'),('Eng Wah Jubilee','Phua Chu Kang The Movie','4:50pm'),('Eng Wah Suntec','City Under Siege','10:05am 12:20pm 4:50pm 7:05pm'),('Eng Wah Toa Payoh','The Expendables','10:35am 12:45pm 2:55pm '),('Eng Wah West Mall','Jade And The Pearl','10:00am 12:15pm 9:25pm'),('Filmgarde Iluma, Bugis','Stool Pigeon',' 12:05pm 2:30pm 5:05pm 7:25pm '),('Filmgarde Leisure Park Kallang','The Expendables','12:00pm 2:10pm 4:30pm 7:10pm '),('Jade Jade Theatre','Aisha','3:35pm');

/*Table structure for table `reg` */

DROP TABLE IF EXISTS `reg`;

CREATE TABLE `reg` (
  `uname` char(20) default NULL,
  `pass` varchar(20) default NULL,
  `email` varchar(30) default NULL,
  `address` text,
  `phone` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `reg` */

insert  into `reg`(`uname`,`pass`,`email`,`address`,`phone`) values ('bala','asdf','ram','asdfdas','asdfdasf'),('ravi','aaaa','aaaa','aaa','aaa');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
