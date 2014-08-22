/*
Navicat MySQL Data Transfer

Source Server         : MOLWA_BCC
Source Server Version : 50152
Source Host           : 123.49.59.154:3306
Source Database       : doctor

Target Server Type    : MYSQL
Target Server Version : 50152
File Encoding         : 65001

Date: 2014-04-05 16:56:26
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for add_doctor
-- ----------------------------
DROP TABLE IF EXISTS `add_doctor`;
CREATE TABLE `add_doctor` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `dr_id` varchar(50) DEFAULT NULL,
  `dr_name` varchar(100) DEFAULT NULL,
  `s_area` varchar(150) DEFAULT NULL,
  `department` varchar(100) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of add_doctor
-- ----------------------------
INSERT INTO `add_doctor` VALUES ('1', '0001', 'Rajesh Ghosh', 'Hole Body', 'MEDICINE', '1');
INSERT INTO `add_doctor` VALUES ('2', '0002', 'Shafiul Karim', 'Hole Body', 'MEDICINE', '1');
INSERT INTO `add_doctor` VALUES ('3', '0003', 'Homayn Kabir', 'No', 'CARDIO THORACIC and VASCULAR SURGERY', '1');
INSERT INTO `add_doctor` VALUES ('4', '0004', 'Mamun', 'No', 'DENTAL', '1');
INSERT INTO `add_doctor` VALUES ('5', '0007', 'Abul Kalam', 'Not Mention', 'ENDOCRINOLOGY', '1');

-- ----------------------------
-- Table structure for patients
-- ----------------------------
DROP TABLE IF EXISTS `patients`;
CREATE TABLE `patients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mr` varchar(10) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `father` varchar(100) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `age` int(5) DEFAULT NULL,
  `nationality` varchar(50) DEFAULT NULL,
  `religion` varchar(50) DEFAULT NULL,
  `occupation` varchar(50) DEFAULT NULL,
  `parmanent_address` varchar(200) DEFAULT NULL,
  `street` varchar(50) DEFAULT NULL,
  `pincode` varchar(20) DEFAULT NULL,
  `district` varchar(50) DEFAULT NULL,
  `taluk_name` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `landline` varchar(20) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `department` varchar(50) DEFAULT NULL,
  `person_name` varchar(50) DEFAULT NULL,
  `relationship` varchar(50) DEFAULT NULL,
  `dis_department` varchar(300) DEFAULT NULL,
  `drName` varchar(300) DEFAULT NULL,
  `ap_date` date DEFAULT NULL,
  `ap_time` varchar(20) DEFAULT NULL,
  `dr_id` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of patients
-- ----------------------------
INSERT INTO `patients` VALUES ('5', 'MR.', 'Rajesh Ghosh', 'Ranajit Ghosh', 'Male', '1990-02-10', '25', 'AFGHANISTAN', 'BUDDHIST', 'Service', 'Dhaka', 'X-6', '9343', 'Gulbarga', 'Lakhiipur', 'Sikkim', 'INDIA', '01714905039', '000001111', 'rajeshghosh10@yahoo.com', 'Medicine ', 'NO need', 'No need', 'MEDICINE', 'Rajesh Ghosh', '2014-04-04', '08:00 PM', '0001');
INSERT INTO `patients` VALUES ('7', 'MR.', 'Rohit Shetty', 'Shunil Shetty', 'Male', '1985-02-10', '30', 'INDIA', 'HINDU', 'Service', 'Mumbai', 'X-11', '9343', 'Bagalkot', 'Ambikapur', 'ANDHRA PRADESH', 'INDIA', '01841905039', '1111111', 'rajeshghosh10@yahoo.com', 'no', 'no', 'no', 'MEDICINE', 'Shafiul Karim', '2014-04-04', '10:00 PM', '0002');

-- ----------------------------
-- Table structure for time_table
-- ----------------------------
DROP TABLE IF EXISTS `time_table`;
CREATE TABLE `time_table` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `dr_id` varchar(50) DEFAULT NULL,
  `avail_date` date DEFAULT NULL,
  `mr_hour` varchar(4) DEFAULT NULL,
  `mr_min` varchar(4) DEFAULT NULL,
  `mr_ap` varchar(4) DEFAULT NULL,
  `dy_hour` varchar(4) DEFAULT NULL,
  `dy_min` varchar(4) DEFAULT NULL,
  `dy_ap` varchar(4) DEFAULT NULL,
  `ev_hour` varchar(4) DEFAULT NULL,
  `ev_min` varchar(4) DEFAULT NULL,
  `ev_ap` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of time_table
-- ----------------------------
INSERT INTO `time_table` VALUES ('1', '0001', '2014-04-04', '08', '00', 'AM', '02', '00', 'PM', '08', '00', 'PM');
INSERT INTO `time_table` VALUES ('2', '0001', '2014-04-05', '08', '00', 'AM', '04', '00', 'PM', '00', '00', 'AM');
INSERT INTO `time_table` VALUES ('3', '0002', '2014-04-04', '09', '00', 'AM', '05', '00', 'PM', '10', '00', 'PM');
INSERT INTO `time_table` VALUES ('4', '0003', '2014-04-04', '09', '00', 'AM', '03', '00', 'PM', '08', '00', 'PM');
INSERT INTO `time_table` VALUES ('5', '0004', '2014-04-04', '07', '00', 'AM', '04', '00', 'PM', '10', '00', 'PM');
INSERT INTO `time_table` VALUES ('6', '0007', '2014-04-13', '09', '00', 'AM', '03', '00', 'PM', '08', '00', 'PM');
