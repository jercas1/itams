-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.8-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for itams
CREATE DATABASE IF NOT EXISTS `itams` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `itams`;

-- Dumping structure for table itams.tbl_assets
CREATE TABLE IF NOT EXISTS `tbl_assets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `asset_tag` varchar(50) NOT NULL,
  `asset_name` varchar(50) NOT NULL DEFAULT '',
  `descriptions` varchar(255) NOT NULL DEFAULT '',
  `serial_no` varchar(50) NOT NULL DEFAULT '',
  `price` decimal(50,0) NOT NULL,
  `sbu` varchar(50) NOT NULL DEFAULT '',
  `date_purchase` datetime NOT NULL,
  `installed_os` varchar(50) NOT NULL DEFAULT '',
  `ms_office` varchar(50) NOT NULL DEFAULT '',
  `remarks` varchar(255) NOT NULL DEFAULT '',
  `type_of` varchar(50) NOT NULL DEFAULT '',
  `status` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table itams.tbl_assets: ~15 rows (approximately)
/*!40000 ALTER TABLE `tbl_assets` DISABLE KEYS */;
INSERT INTO `tbl_assets` (`id`, `asset_tag`, `asset_name`, `descriptions`, `serial_no`, `price`, `sbu`, `date_purchase`, `installed_os`, `ms_office`, `remarks`, `type_of`, `status`) VALUES
	(1, 'PNKC-WS-00041', 'LENOVO', 'Intel core i5	4gb	NA	on board graphics	Model: G4080,', 'PF0B1XEG', 31000, 'PNKC', '2021-09-16 00:00:00', 'Windows10', '2021', 'Good', 'Laptop', 'In use'),
	(2, 'PNKC-WS-00042', 'ACER', 'Intel core i7	8gb	500GB HDD	on board graphics', 'SPF0UYS1L', 45000, 'AIC', '2021-08-16 00:00:00', 'Windows 11', '2020', 'Good', 'Laptop', 'Available'),
	(3, 'PNKC-WS-00089', 'TOSHIBA', 'Intel core i5	4gb	NA	on board graphics	Model: Satellite L40-B	NA', '7 7 1905', 35000, 'PNKC', '2021-08-07 00:00:00', 'Windows 7', '2013', 'psu deficiency', 'Desktop', 'Available'),
	(4, 'AIC-WS-00211', 'NA', 'Intel core i5	8gb	1TB	on board graphics	NA', 'FVHX7R85J1WK', 45000, 'AIC', '2021-08-01 00:00:00', 'Windows 10', '2013', 'Ready to use', 'NUC', 'In use'),
	(5, 'PNKC-P-00064', 'LG ', '15inches', 'NA', 12000, 'PNKC', '2021-08-19 00:00:00', 'NA', 'sample', 'Working', 'Monitor', 'In use'),
	(6, 'GILI-WS-00141', 'Netbook', 'Tablet Redfox For Wms', 'NA', 10, 'GILI', '2021-08-20 00:00:00', 'None', 'None', 'with issue/ no charger', 'Laptop', 'Available'),
	(7, 'PNKC-P-00050', 'Epson L120 ', 'NA', 'TP3K372157', 5000, 'PNKC', '2021-08-02 00:00:00', 'NA', 'NA', 'Good', 'Printer', 'Available'),
	(8, 'PNKC-WS-00100', 'awdawawdaw', '', '', 0, 'GILI', '2021-08-19 00:00:00', '', '', '', 'awdaw', 'Available'),
	(9, 'gili-ws-00001', 'ROG', 'Item Specs', 'F5S6V8D1', 75000, 'GILI', '2021-08-01 00:00:00', 'Windows 11 64 bit', '2021', 'Good', 'Laptop', 'Available'),
	(10, 'EXERGY-WS-00258', 'Hp', 'RYZEN 3	4gb	1tb	on board graphics	Hp Laptop 14-cm0072AU', '5CG8230V6V', 42000, 'EXERGY', '2021-08-01 00:00:00', 'Windows 10', '2020', 'Ready to use', 'Laptop', 'Available'),
	(11, 'mannvits-WS-00300', 'Hp', 'RYZEN 3	4gb	1tb	on board graphics	Hp Laptop 14-cm0072AU', '5CG8230V6V', 42000, 'MANNVITS', '2021-08-01 00:00:00', 'Windows 10', '2020', 'Good', 'Laptop', 'Available'),
	(12, 'CLDI-WS-00159', 'LENOVO', 'Intel core i7	8gb	256 SSD	on board graphics	Lenovo 510s-13 (80v00030ph/Red', 'MP17BS6M', 49, 'CLDI', '2021-08-08 00:00:00', 'Windows 11', '2021', 'Good', 'Laptop', 'Available'),
	(13, 'SUKIKO-WS-00017', 'HP', 'Intel core i5	8gb	NA	on board graphics	Model:Hp 500-034d', '4CE51006R2', 50000, 'SUKIKO', '2021-08-06 00:00:00', 'Windows 11', '2021', 'Good', 'Desktop', 'Available'),
	(16, 'TEST1', 'test1', '', '', 0, 'EXERGY', '2021-08-23 00:00:00', '', '', '', 'test1', 'Available'),
	(17, 'PNKC-WS-00232', 'LENOVO', 'Intel Atom 1.33ghz	2gb	30gb hdd	on board graphics', 'YB000U3C', 8000, 'PNKC', '2021-08-23 00:00:00', 'Android 11', 'NA', 'Good Condition', 'Tablet', 'Available');
/*!40000 ALTER TABLE `tbl_assets` ENABLE KEYS */;

-- Dumping structure for table itams.tbl_dept
CREATE TABLE IF NOT EXISTS `tbl_dept` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dept_name` varchar(50) NOT NULL,
  `sbu_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_tbl_dept_tbl_sbu` (`sbu_id`),
  CONSTRAINT `FK_tbl_dept_tbl_sbu` FOREIGN KEY (`sbu_id`) REFERENCES `tbl_sbu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table itams.tbl_dept: ~5 rows (approximately)
/*!40000 ALTER TABLE `tbl_dept` DISABLE KEYS */;
INSERT INTO `tbl_dept` (`id`, `dept_name`, `sbu_id`) VALUES
	(1, 'engineering', 1),
	(2, 'accounting', 1),
	(3, 'it', 3),
	(4, 'it', 7),
	(5, 'engineering', 3);
/*!40000 ALTER TABLE `tbl_dept` ENABLE KEYS */;

-- Dumping structure for table itams.tbl_employees
CREATE TABLE IF NOT EXISTS `tbl_employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `password_1` varchar(50) NOT NULL,
  `password_2` varchar(50) NOT NULL,
  `sbu_id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sbu_id` (`sbu_id`),
  KEY `dept_id` (`dept_id`),
  CONSTRAINT `dept_id` FOREIGN KEY (`dept_id`) REFERENCES `tbl_dept` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `sbu_id` FOREIGN KEY (`sbu_id`) REFERENCES `tbl_sbu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table itams.tbl_employees: ~3 rows (approximately)
/*!40000 ALTER TABLE `tbl_employees` DISABLE KEYS */;
INSERT INTO `tbl_employees` (`id`, `first_name`, `last_name`, `email`, `user_name`, `position`, `password_1`, `password_2`, `sbu_id`, `dept_id`) VALUES
	(1, 'john', 'dow', 'john@yahoo.com', 'johndoe', 'engineer', '123123', '123123', 1, 1),
	(2, 'bobby', 'bob', 'bobby@gmail.com', 'bobbybob', 'accountant', '123', '123', 4, 2),
	(3, 'charles', 'darwin', 'charles@gmail.com', 'charles', 'engineer', '1234', '1234', 3, 1);
/*!40000 ALTER TABLE `tbl_employees` ENABLE KEYS */;

-- Dumping structure for table itams.tbl_records
CREATE TABLE IF NOT EXISTS `tbl_records` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_created` datetime NOT NULL,
  `emp_id` int(11) NOT NULL,
  `asset_id` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `emp_fname` varchar(255) NOT NULL,
  `emp_lname` varchar(255) NOT NULL,
  `emp_sbu` varchar(50) NOT NULL,
  `emp_position` varchar(50) NOT NULL,
  `asset_tag` varchar(50) NOT NULL,
  `asset_name` varchar(50) NOT NULL,
  `asset_descriptions` varchar(255) NOT NULL,
  `asset_type_of` varchar(50) NOT NULL,
  `asset_serial_no` varchar(50) NOT NULL,
  `asset_status` varchar(50) NOT NULL,
  `asset_remarks` varchar(255) NOT NULL,
  `record_status` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `emp_id` (`emp_id`),
  KEY `FK_tbl_records_tbl_assets` (`asset_id`),
  CONSTRAINT `FK_tbl_records_tbl_assets` FOREIGN KEY (`asset_id`) REFERENCES `tbl_assets` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `emp_id` FOREIGN KEY (`emp_id`) REFERENCES `tbl_employees` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=95 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table itams.tbl_records: ~47 rows (approximately)
/*!40000 ALTER TABLE `tbl_records` DISABLE KEYS */;
INSERT INTO `tbl_records` (`id`, `date_created`, `emp_id`, `asset_id`, `location`, `emp_fname`, `emp_lname`, `emp_sbu`, `emp_position`, `asset_tag`, `asset_name`, `asset_descriptions`, `asset_type_of`, `asset_serial_no`, `asset_status`, `asset_remarks`, `record_status`) VALUES
	(48, '2021-08-18 00:00:00', 1, 1, 'Room 709', 'john', 'dow', '1', 'engineer', 'PNKC-WS-00041', 'LENOVO', 'Intel core i5	4gb	NA	on board graphics	Model: G4080,', 'Laptop', 'PF0B1XEG', 'In use', 'Good', 1),
	(49, '2021-08-12 00:00:00', 2, 2, 'Room 708', 'bobby', 'bob', '4', 'accountant', 'PNKC-WS-00042', 'ACER', 'Intel core i7	8gb	500GB HDD	on board graphics', 'Laptop', 'SPF0UYS1L', 'In use', 'Good', 1),
	(50, '1970-01-01 01:00:00', 3, 4, 'Room 704', 'charles', 'darwin', '3', 'engineer', 'AIC-WS-00211', 'NA', 'Intel core i5	8gb	1TB	on board graphics	NA', 'NUC', 'FVHX7R85J1WK', 'In use', 'Ready to use', 1),
	(51, '2021-08-18 00:00:00', 3, 5, 'Room 708', 'charles', 'darwin', '3', 'engineer', 'PNKC-P-00064', 'LG ', '15inches', 'Monitor', 'NA', 'In use', 'Working', 1),
	(52, '2021-08-11 00:00:00', 1, 9, 'Room 708', 'john', 'dow', '1', 'engineer', 'gili-ws-00001', 'ROG', 'Item Specs', 'Laptop', 'F5S6V8D1', 'Available', 'Good', 1),
	(53, '2021-08-23 00:00:00', 1, 1, 'Room 709', 'john', 'dow', '1', 'engineer', 'PNKC-WS-00041', 'LENOVO', 'Intel core i5	4gb	NA	on board graphics	Model: G4080,', 'Laptop', 'PF0B1XEG', 'In use', 'Good', 1),
	(54, '2021-08-23 00:00:00', 1, 1, 'Room 704', 'john', 'dow', '1', 'engineer', 'PNKC-WS-00041', 'LENOVO', 'Intel core i5	4gb	NA	on board graphics	Model: G4080,', 'Laptop', 'PF0B1XEG', 'In use', 'Good', 1),
	(55, '2021-08-23 00:00:00', 1, 13, 'Room 709', 'john', 'dow', '1', 'engineer', 'SUKIKO-WS-00017', 'HP', 'Intel core i5	8gb	NA	on board graphics	Model:Hp 500-034d', 'Desktop', '4CE51006R2', 'In use', 'Good', 1),
	(56, '2021-08-30 00:00:00', 1, 13, 'Room 709', 'john', 'dow', '1', 'engineer', 'SUKIKO-WS-00017', 'HP', 'Intel core i5	8gb	NA	on board graphics	Model:Hp 500-034d', 'Desktop', '4CE51006R2', 'In use', 'Good', 1),
	(57, '2021-08-23 00:00:00', 1, 12, 'Room 704', 'john', 'dow', '1', 'engineer', 'CLDI-WS-00159', 'LENOVO', 'Intel core i7	8gb	256 SSD	on board graphics	Lenovo 510s-13 (80v00030ph/Red', 'Laptop', 'MP17BS6M', 'In use', 'Good', 1),
	(58, '2021-08-23 00:00:00', 2, 12, 'Room 709', 'bobby', 'bob', '4', 'accountant', 'CLDI-WS-00159', 'LENOVO', 'Intel core i7	8gb	256 SSD	on board graphics	Lenovo 510s-13 (80v00030ph/Red', 'Laptop', 'MP17BS6M', 'In use', 'Good', 1),
	(59, '2021-08-31 00:00:00', 2, 11, 'Room 708', 'bobby', 'bob', '4', 'accountant', 'mannvits-WS-00300', 'Hp', 'RYZEN 3	4gb	1tb	on board graphics	Hp Laptop 14-cm0072AU', 'Laptop', '5CG8230V6V', 'In use', 'Good', 1),
	(60, '2021-08-26 00:00:00', 1, 1, 'Room 709', 'john', 'dow', '1', 'engineer', 'PNKC-WS-00041', 'LENOVO', 'Intel core i5	4gb	NA	on board graphics	Model: G4080,', 'Laptop', 'PF0B1XEG', 'In use', 'Good', 1),
	(61, '2021-08-23 00:00:00', 2, 2, 'Room 708', 'bobby', 'bob', '4', 'accountant', 'PNKC-WS-00042', 'ACER', 'Intel core i7	8gb	500GB HDD	on board graphics', 'Laptop', 'SPF0UYS1L', 'In use', 'Good', 1),
	(62, '2021-08-23 00:00:00', 1, 3, '1213', 'john', 'dow', '1', 'engineer', 'PNKC-WS-00089', 'TOSHIBA', 'Intel core i5	4gb	NA	on board graphics	Model: Satellite L40-B	NA', 'Desktop', '7 7 1905', 'In use', 'psu deficiency', 1),
	(63, '2021-08-23 00:00:00', 2, 4, 'Room 709', 'bobby', 'bob', '4', 'accountant', 'AIC-WS-00211', 'NA', 'Intel core i5	8gb	1TB	on board graphics	NA', 'NUC', 'FVHX7R85J1WK', 'In use', 'Ready to use', 1),
	(64, '2021-08-24 00:00:00', 2, 11, 'sample', 'bobby', 'bob', '4', 'accountant', 'mannvits-WS-00300', 'Hp', 'RYZEN 3	4gb	1tb	on board graphics	Hp Laptop 14-cm0072AU', 'Laptop', '5CG8230V6V', 'In use', 'Good', 1),
	(65, '2021-08-23 00:00:00', 1, 9, 'Room 704', 'john', 'dow', '1', 'engineer', 'gili-ws-00001', 'ROG', 'Item Specs', 'Laptop', 'F5S6V8D1', 'Available', 'Good', 1),
	(66, '2021-08-23 00:00:00', 2, 8, 'Room 708', 'bobby', 'bob', '4', 'accountant', 'PNKC-WS-00100', 'awdawawdaw', '', 'awdaw', '', 'In use', '', 1),
	(67, '2021-08-23 00:00:00', 1, 9, 'Room 704', 'john', 'dow', '1', 'engineer', 'gili-ws-00001', 'ROG', 'Item Specs', 'Laptop', 'F5S6V8D1', 'Available', 'Good', 1),
	(68, '2021-08-17 00:00:00', 1, 13, 'Room 709', 'john', 'dow', '1', 'engineer', 'SUKIKO-WS-00017', 'HP', 'Intel core i5	8gb	NA	on board graphics	Model:Hp 500-034d', 'Desktop', '4CE51006R2', 'In use', 'Good', 1),
	(69, '2021-08-24 00:00:00', 2, 1, 'Room 708', 'bobby', 'bob', '4', 'accountant', 'PNKC-WS-00041', 'LENOVO', 'Intel core i5	4gb	NA	on board graphics	Model: G4080,', 'Laptop', 'PF0B1XEG', 'In use', 'Good', 1),
	(70, '2021-08-09 00:00:00', 1, 1, 'Room 704', 'john', 'dow', '1', 'engineer', 'PNKC-WS-00041', 'LENOVO', 'Intel core i5	4gb	NA	on board graphics	Model: G4080,', 'Laptop', 'PF0B1XEG', 'In use', 'Good', 1),
	(71, '2021-08-23 00:00:00', 1, 2, 'Room 709', 'john', 'dow', '1', 'engineer', 'PNKC-WS-00042', 'ACER', 'Intel core i7	8gb	500GB HDD	on board graphics', 'Laptop', 'SPF0UYS1L', 'In use', 'Good', 1),
	(72, '2021-08-25 00:00:00', 1, 6, 'Room 704', 'john', 'dow', '1', 'engineer', 'GILI-WS-00141', 'Netbook', 'Tablet Redfox For Wms', 'Laptop', 'NA', 'In use', 'with issue/ no charger', 1),
	(73, '2021-08-01 00:00:00', 2, 7, 'Room 708', 'bobby', 'bob', '4', 'accountant', 'PNKC-P-00050', 'Epson L120 ', 'NA', 'Printer', 'TP3K372157', 'In use', 'Good', 1),
	(74, '2021-08-16 00:00:00', 1, 3, 'Room 708', 'john', 'dow', '1', 'engineer', 'PNKC-WS-00089', 'TOSHIBA', 'Intel core i5	4gb	NA	on board graphics	Model: Satellite L40-B	NA', 'Desktop', '7 7 1905', 'In use', 'psu deficiency', 1),
	(75, '2021-08-26 00:00:00', 3, 4, 'Room 709', 'charles', 'darwin', '3', 'engineer', 'AIC-WS-00211', 'NA', 'Intel core i5	8gb	1TB	on board graphics	NA', 'NUC', 'FVHX7R85J1WK', 'In use', 'Ready to use', 1),
	(76, '2021-08-23 00:00:00', 2, 1, 'Room 708', 'bobby', 'bob', '4', 'accountant', 'PNKC-WS-00041', 'LENOVO', 'Intel core i5	4gb	NA	on board graphics	Model: G4080,', 'Laptop', 'PF0B1XEG', 'In use', 'Good', 1),
	(77, '2021-08-17 00:00:00', 2, 5, 'Room 709', 'bobby', 'bob', '4', 'accountant', 'PNKC-P-00064', 'LG ', '15inches', 'Monitor', 'NA', 'In use', 'Working', 1),
	(78, '2021-08-27 00:00:00', 2, 6, 'sample', 'bobby', 'bob', '4', 'accountant', 'GILI-WS-00141', 'Netbook', 'Tablet Redfox For Wms', 'Laptop', 'NA', 'Available', 'with issue/ no charger', 1),
	(79, '2021-08-23 00:00:00', 1, 7, 'Room 704', 'john', 'dow', '1', 'engineer', 'PNKC-P-00050', 'Epson L120 ', 'NA', 'Printer', 'TP3K372157', 'Available', 'Good', 1),
	(80, '2021-08-23 00:00:00', 1, 13, 'Room 708', 'john', 'dow', '1', 'engineer', 'SUKIKO-WS-00017', 'HP', 'Intel core i5	8gb	NA	on board graphics	Model:Hp 500-034d', 'Desktop', '4CE51006R2', 'Available', 'Corrupted HDD', 1),
	(81, '2021-08-23 00:00:00', 2, 12, 'Room 709', 'bobby', 'bob', '4', 'accountant', 'CLDI-WS-00159', 'LENOVO', 'Intel core i7	8gb	256 SSD	on board graphics	Lenovo 510s-13 (80v00030ph/Red', 'Laptop', 'MP17BS6M', 'In use', 'Good', 1),
	(82, '2021-08-23 00:00:00', 2, 8, 'Room 708', 'bobby', 'bob', '4', 'accountant', 'PNKC-WS-00100', 'awdawawdaw', '', 'awdaw', '', 'Available', '', 1),
	(83, '2021-08-23 00:00:00', 1, 2, 'Room 709', 'john', 'dow', '1', 'engineer', 'PNKC-WS-00042', 'ACER', 'Intel core i7	8gb	500GB HDD	on board graphics', 'Laptop', 'SPF0UYS1L', 'Available', 'Good', 1),
	(84, '2021-08-23 00:00:00', 2, 3, 'Room 704', 'bobby', 'bob', '4', 'accountant', 'PNKC-WS-00089', 'TOSHIBA', 'Intel core i5	4gb	NA	on board graphics	Model: Satellite L40-B	NA', 'Desktop', '7 7 1905', 'Available', 'psu deficiency', 1),
	(85, '2021-08-24 00:00:00', 2, 12, 'Room 709', 'bobby', 'bob', '4', 'accountant', 'CLDI-WS-00159', 'LENOVO', 'Intel core i7	8gb	256 SSD	on board graphics	Lenovo 510s-13 (80v00030ph/Red', 'Laptop', 'MP17BS6M', 'Available', 'Good', 1),
	(86, '2021-08-23 00:00:00', 1, 11, 'Room 709', 'john', 'dow', '1', 'engineer', 'mannvits-WS-00300', 'Hp', 'RYZEN 3	4gb	1tb	on board graphics	Hp Laptop 14-cm0072AU', 'Laptop', '5CG8230V6V', 'Available', 'Good', 1),
	(87, '2021-08-23 00:00:00', 2, 17, 'Room 709', 'bobby', 'bob', '4', 'accountant', 'PNKC-WS-00232', 'LENOVO', 'Intel Atom 1.33ghz	2gb	30gb hdd	on board graphics', 'Tablet', 'YB000U3C', 'Available', 'Minimal Scratch', 1),
	(88, '2021-08-18 00:00:00', 2, 1, 'Room 708', 'bobby', 'bob', '4', 'accountant', 'PNKC-WS-00041', 'LENOVO', 'Intel core i5	4gb	NA	on board graphics	Model: G4080,', 'Laptop', 'PF0B1XEG', 'In use', 'Good', 1),
	(89, '2021-08-23 00:00:00', 2, 5, 'Room 704', 'bobby', 'bob', '4', 'accountant', 'PNKC-P-00064', 'LG ', '15inches', 'Monitor', 'NA', 'In use', 'Working', 1),
	(90, '2021-08-23 00:00:00', 2, 4, '', 'bobby', 'bob', '4', 'accountant', 'AIC-WS-00211', 'NA', 'Intel core i5	8gb	1TB	on board graphics	NA', 'NUC', 'FVHX7R85J1WK', 'In use', 'Ready to use', 1),
	(91, '2021-08-23 00:00:00', 2, 7, 'Room 708', 'bobby', 'bob', '4', 'accountant', 'PNKC-P-00050', 'Epson L120 ', 'NA', 'Printer', 'TP3K372157', 'Available', 'Good', 1),
	(92, '2021-08-24 00:00:00', 1, 1, 'Room 708', 'john', 'dow', '1', 'engineer', 'PNKC-WS-00041', 'LENOVO', 'Intel core i5	4gb	NA	on board graphics	Model: G4080,', 'Laptop', 'PF0B1XEG', 'In use', 'Good', 0),
	(93, '2021-08-24 00:00:00', 3, 5, 'Room 709', 'charles', 'darwin', '3', 'engineer', 'PNKC-P-00064', 'LG ', '15inches', 'Monitor', 'NA', 'In use', 'Working', 0),
	(94, '2021-08-24 00:00:00', 3, 4, 'Room 709', 'charles', 'darwin', '3', 'engineer', 'AIC-WS-00211', 'NA', 'Intel core i5	8gb	1TB	on board graphics	NA', 'NUC', 'FVHX7R85J1WK', 'In use', 'Ready to use', 0);
/*!40000 ALTER TABLE `tbl_records` ENABLE KEYS */;

-- Dumping structure for table itams.tbl_return
CREATE TABLE IF NOT EXISTS `tbl_return` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `return_date` datetime NOT NULL,
  `record_id` int(11) NOT NULL,
  `collected_by` varchar(255) NOT NULL,
  `asset_remarks` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_tbl_return_tbl_records` (`record_id`),
  CONSTRAINT `FK_tbl_return_tbl_records` FOREIGN KEY (`record_id`) REFERENCES `tbl_records` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=150 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table itams.tbl_return: ~48 rows (approximately)
/*!40000 ALTER TABLE `tbl_return` DISABLE KEYS */;
INSERT INTO `tbl_return` (`id`, `return_date`, `record_id`, `collected_by`, `asset_remarks`, `note`) VALUES
	(102, '2021-08-20 16:40:53', 48, '', '', ''),
	(103, '2021-08-23 08:09:44', 49, '', '', ''),
	(104, '2021-08-23 08:17:12', 50, '', '', ''),
	(105, '2021-08-23 08:21:30', 51, '', '', ''),
	(106, '2021-08-23 08:23:42', 52, '', '', ''),
	(107, '2021-08-23 08:26:17', 53, '', '', ''),
	(108, '2021-08-23 08:40:20', 54, '', '', ''),
	(109, '2021-08-23 09:03:09', 55, '', '', ''),
	(110, '2021-08-23 09:18:06', 59, '', '', ''),
	(111, '2021-08-23 09:57:33', 65, '', '', ''),
	(112, '2021-08-23 10:09:53', 66, '', '', ''),
	(113, '2021-08-23 10:39:51', 67, '', '', ''),
	(114, '2021-08-23 10:45:09', 64, '', '', ''),
	(115, '2021-08-23 11:34:21', 63, '', '', ''),
	(116, '2021-08-23 11:34:28', 61, '', '', ''),
	(117, '2021-08-23 11:34:28', 61, '', '', ''),
	(118, '2021-08-23 11:34:31', 62, '', '', ''),
	(119, '2021-08-23 11:34:38', 60, '', '', ''),
	(120, '2021-08-23 11:34:44', 57, '', '', ''),
	(121, '2021-08-23 11:34:53', 58, '', '', ''),
	(122, '2021-08-23 11:34:57', 56, '', '', ''),
	(123, '2021-08-23 11:49:28', 68, '', '', ''),
	(124, '2021-08-23 11:49:35', 68, '', '', ''),
	(125, '2021-08-23 11:50:35', 68, '', '', ''),
	(126, '2021-08-23 11:52:34', 68, '', '', ''),
	(127, '2021-08-23 11:54:47', 69, '', '', ''),
	(128, '2021-08-23 12:14:19', 70, '', '', ''),
	(129, '2021-08-23 13:42:37', 72, '', '', ''),
	(130, '2021-08-23 13:44:28', 73, '', '', ''),
	(131, '2021-08-23 14:12:21', 82, '', '', ''),
	(132, '2021-08-23 14:53:23', 71, 'Jay-ar Revis', 'Available', 'slight scratch'),
	(133, '2021-08-23 15:02:03', 81, 'Venson', 'Defective', 'keyboard misfunction'),
	(134, '2021-08-23 15:47:04', 74, 'Jay-ar Revis', 'Available', 'Ready to use'),
	(135, '2021-08-23 16:06:12', 78, 'Jay-ar Revis', 'Available', 'good'),
	(136, '2021-08-23 16:06:43', 75, 'Jay-ar Revis', 'Available', 'good'),
	(137, '2021-08-23 16:11:08', 76, 'Jay-ar Revis', 'In use', 'good'),
	(138, '2021-08-23 16:23:27', 77, 'Jay-ar Revis', 'Available', 'good\n'),
	(139, '2021-08-23 16:25:23', 79, 'Paolo', 'Available', 'Sligtly Scratch'),
	(140, '2021-08-23 16:42:14', 87, 'Melvin', 'Available', 'Good'),
	(141, '2021-08-24 09:02:51', 80, 'Venson', 'Available', 'Good'),
	(142, '2021-08-24 09:03:00', 83, 'Venson', 'Available', 'Good'),
	(143, '2021-08-24 09:03:09', 84, 'Paolo', 'Available', 'Good'),
	(144, '2021-08-24 09:03:17', 85, 'Jay-ar Revis', 'Available', 'Good'),
	(145, '2021-08-24 09:03:28', 86, 'Melvin', 'Available', 'Good'),
	(146, '2021-08-24 09:03:35', 88, 'Jay-ar Revis', 'Available', 'Good'),
	(147, '2021-08-24 09:03:42', 89, 'Jay-ar Revis', 'Available', 'Good'),
	(148, '2021-08-24 09:03:49', 90, 'Melvin', 'Available', 'Good'),
	(149, '2021-08-24 09:03:57', 91, 'Paolo', 'Available', 'Good');
/*!40000 ALTER TABLE `tbl_return` ENABLE KEYS */;

-- Dumping structure for table itams.tbl_sbu
CREATE TABLE IF NOT EXISTS `tbl_sbu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sbu_name` varchar(50) NOT NULL DEFAULT '',
  `sbu_means` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table itams.tbl_sbu: ~7 rows (approximately)
/*!40000 ALTER TABLE `tbl_sbu` DISABLE KEYS */;
INSERT INTO `tbl_sbu` (`id`, `sbu_name`, `sbu_means`) VALUES
	(1, 'AIC', ''),
	(2, 'EXERGY', ''),
	(3, 'GILI', 'GLACIER INTEGRATED LOGISTICS INC.'),
	(4, 'PNKC', ''),
	(5, 'MANNVITS', ''),
	(6, 'CLDI', ''),
	(7, 'SUKIKO', '');
/*!40000 ALTER TABLE `tbl_sbu` ENABLE KEYS */;

-- Dumping structure for table itams.tbl_users
CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password_1` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table itams.tbl_users: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_users` DISABLE KEYS */;
INSERT INTO `tbl_users` (`id`, `username`, `password_1`) VALUES
	(1, 'test1', '123');
/*!40000 ALTER TABLE `tbl_users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
