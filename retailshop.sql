-- phpMyAdmin SQL Dump
-- version 2.11.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 30, 2014 at 09:45 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `retailshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessory`
--

CREATE TABLE `accessory` (
  `ACCESSORY_ID` varchar(10) NOT NULL default '',
  `NAME` varchar(20) default NULL,
  `AMOUNT` float default NULL,
  PRIMARY KEY  (`ACCESSORY_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accessory`
--

INSERT INTO `accessory` (`ACCESSORY_ID`, `NAME`, `AMOUNT`) VALUES
('accessory', 'Test', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CUSTOMER_ID` varchar(10) NOT NULL default '',
  `NAME` varchar(20) default NULL,
  `ADDRESS` varchar(20) default NULL,
  `PHONE_NO` varchar(10) default NULL,
  `EMAIL_ID` varchar(40) default NULL,
  PRIMARY KEY  (`CUSTOMER_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CUSTOMER_ID`, `NAME`, `ADDRESS`, `PHONE_NO`, `EMAIL_ID`) VALUES
('customer', 'Karthik', 'Hubli', '8971793093', 'skkarthikbjc@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `order_info`
--

CREATE TABLE `order_info` (
  `ORDER_ID` varchar(10) NOT NULL default '',
  `PRODUCT_ID` varchar(10) default NULL,
  `WORKER_ID` varchar(10) default NULL,
  `CUSTOMER_ID` varchar(10) default NULL,
  `QUANTITY` int(11) default NULL,
  `ORDER_DATE` date default NULL,
  `STATUS` varchar(10) default NULL,
  `TOTAL_AMT` float default NULL,
  `ADVANCE` float default NULL,
  `DISCOUNT` float default NULL,
  PRIMARY KEY  (`ORDER_ID`),
  KEY `PRODUCT_ID` (`PRODUCT_ID`),
  KEY `WORKER_ID` (`WORKER_ID`),
  KEY `CUSTOMER_ID` (`CUSTOMER_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_info`
--

INSERT INTO `order_info` (`ORDER_ID`, `PRODUCT_ID`, `WORKER_ID`, `CUSTOMER_ID`, `QUANTITY`, `ORDER_DATE`, `STATUS`, `TOTAL_AMT`, `ADVANCE`, `DISCOUNT`) VALUES
('order', 'product', 'worker', 'customer', 10, '2013-01-01', 'Testing', 1000, 300, 50);

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `OWNER_ID` varchar(10) NOT NULL default '',
  `NAME` varchar(20) default NULL,
  `PASS` varchar(10) default NULL,
  `EXPENDITURE` float default NULL,
  PRIMARY KEY  (`OWNER_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`OWNER_ID`, `NAME`, `PASS`, `EXPENDITURE`) VALUES
('owner', 'Karthik', 'owner', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `PRODUCT_ID` varchar(10) NOT NULL default '',
  `NAME` varchar(20) default NULL,
  `DATE_IN` date default NULL,
  `EXPIRY_DATE` date default NULL,
  `DEALER_NAME` varchar(20) default NULL,
  `QUANTITY` int(11) default NULL,
  `TOTAL_COST` float default NULL,
  `COST_EACH` float default NULL,
  PRIMARY KEY  (`PRODUCT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`PRODUCT_ID`, `NAME`, `DATE_IN`, `EXPIRY_DATE`, `DEALER_NAME`, `QUANTITY`, `TOTAL_COST`, `COST_EACH`) VALUES
('product', 'Dummy', '2012-12-01', '2013-12-01', 'Ajay', 10, 1000, 100);

-- --------------------------------------------------------

--
-- Table structure for table `worker`
--

CREATE TABLE `worker` (
  `WORKER_ID` varchar(10) NOT NULL default '',
  `NAME` varchar(20) default NULL,
  `PASS` varchar(10) default NULL,
  `JOIN_DATE` date default NULL,
  `DEBITS` float default NULL,
  PRIMARY KEY  (`WORKER_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `worker`
--

INSERT INTO `worker` (`WORKER_ID`, `NAME`, `PASS`, `JOIN_DATE`, `DEBITS`) VALUES
('worker', 'Kiran', 'worker', '2012-01-01', 1000);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_info`
--
ALTER TABLE `order_info`
  ADD CONSTRAINT `order_info_ibfk_1` FOREIGN KEY (`PRODUCT_ID`) REFERENCES `product` (`PRODUCT_ID`),
  ADD CONSTRAINT `order_info_ibfk_2` FOREIGN KEY (`WORKER_ID`) REFERENCES `worker` (`WORKER_ID`),
  ADD CONSTRAINT `order_info_ibfk_3` FOREIGN KEY (`CUSTOMER_ID`) REFERENCES `customer` (`CUSTOMER_ID`);
