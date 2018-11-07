-- MySQL dump 10.13  Distrib 5.7.21, for Linux (x86_64)
--
-- Host: localhost    Database: hpb
-- ------------------------------------------------------
-- Server version	5.7.21-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `menu_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Heels','2012-08-18 10:12:14','2012-08-20 21:20:42',1),(2,'Flats','2012-08-18 10:12:29','2012-08-20 21:20:48',1),(3,'Sandals & Slippers','2012-08-18 10:12:49','2012-08-20 21:20:51',1),(5,'Shoes','2012-08-25 06:41:20','2012-08-25 06:41:20',2),(7,'Shorts','2012-08-25 06:53:42','2012-08-25 06:53:42',2),(8,'Shoes','2012-08-25 06:53:58','2012-08-25 06:53:58',3),(9,'Bags','2012-11-09 10:03:23','2012-11-09 10:03:23',1),(10,'Accessories','2012-11-09 10:05:09','2012-11-09 10:05:09',1),(11,'Clothes','2012-11-09 10:27:18','2012-11-09 10:27:18',1);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `events` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` VALUES (1,'Most Wanted Items','2012-08-21 20:23:48','2012-08-22 09:19:19'),(2,'What\'s Hot','2012-08-21 20:24:01','2012-08-21 20:24:11'),(3,'On Sale','2012-08-27 15:16:49','2012-08-27 15:16:49'),(4,'Featured Brands','2012-08-27 15:16:58','2012-08-27 15:16:58');
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events_items`
--

DROP TABLE IF EXISTS `events_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `events_items` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `event_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events_items`
--

LOCK TABLES `events_items` WRITE;
/*!40000 ALTER TABLE `events_items` DISABLE KEYS */;
INSERT INTO `events_items` VALUES (6,1,1),(7,2,1),(10,3,6),(11,4,6),(12,3,5),(13,4,5),(14,1,2),(15,4,2),(16,3,7),(17,3,8),(18,3,9),(19,3,10),(20,3,11),(21,3,15),(22,3,16),(24,3,18),(31,3,17),(39,3,25),(40,2,24),(41,2,22),(43,3,21),(44,2,19),(45,2,20),(46,2,23),(47,1,26),(48,1,27),(49,1,28),(50,1,29),(51,1,30),(52,1,31),(53,1,32),(54,2,33),(55,3,33),(56,2,34),(57,3,34),(58,2,35),(59,3,35),(60,2,36),(61,3,36),(62,1,37),(63,1,38),(64,1,39),(65,1,40);
/*!40000 ALTER TABLE `events_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `galleries`
--

DROP TABLE IF EXISTS `galleries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `galleries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galleries`
--

LOCK TABLES `galleries` WRITE;
/*!40000 ALTER TABLE `galleries` DISABLE KEYS */;
INSERT INTO `galleries` VALUES (9,'Items');
/*!40000 ALTER TABLE `galleries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groups`
--

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` VALUES (1,'Admin','2012-08-16 12:50:33','2012-08-16 12:50:33'),(2,'Merchant','2012-08-16 13:57:35','2012-08-16 13:57:35'),(3,'Member','2012-08-16 13:58:51','2012-08-16 13:58:51');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `gallery_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img_file` varchar(255) NOT NULL,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=79 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (77,24,9,'Red Bandage Dress','DSC04979.JPG',1352723737,1352723737),(76,23,9,'Blue Bandage Dress','DSC05047.JPG',1352723724,1352723724),(75,22,9,'Jane Black Bandage Dress','Jane_Black_Bandage_Dress.JPG',1352723634,1352723634),(74,21,9,'Jane Royal Blue Bandage Dress','Jane_Royal_Blue_Bandage_Dress.JPG',1352723622,1352723622),(73,20,9,'Moss Green Lace Crop Top','Moss_Green_Lace_Crop_Top.JPG',1352723586,1352723586),(72,19,9,'Pink Bandage Dress','DSC05048.JPG',1352723585,1352723585),(71,18,9,'White Loose Top with Lace accent','White_Loose_Top_with_Lace_accent.jpg',1352723549,1352723549),(70,17,9,'Travel Shoe Bag','travel_shoe_bag.jpg',1352723518,1352723518),(69,16,9,'Laundry Bag','pink_label_catalogue_april_2012.jpg',1352723506,1352723506),(68,15,9,'Flip and Fold','makeuplayout_b.jpg',1352723472,1352723472),(67,14,9,'Jewelry Roll','jewelry_roll.jpg',1352723251,1352723251),(66,13,9,'Home Fragrance','home_fragrance.jpg',1352723237,1352723237),(65,12,9,'Hanging Organizer','hanging_organizer_damask.jpg',1352723213,1352723213),(64,9,9,'Brights Bolds Holds','brights_bolds_holds.jpg',1352723201,1352723201),(63,10,9,'Brush Kit Layout','brush_kit_layout.jpg',1352723133,1352723133),(62,11,9,'Carry All','Carry_all_black_metallic_accent.jpg',1352723126,1352723126),(78,25,9,'Grey Bandage Dress','DSC05046.JPG',1352784784,1352784784);
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `instant_payment_notifications`
--

DROP TABLE IF EXISTS `instant_payment_notifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `instant_payment_notifications` (
  `id` char(36) NOT NULL,
  `notify_version` varchar(64) DEFAULT NULL COMMENT 'IPN Version Number',
  `verify_sign` varchar(127) DEFAULT NULL COMMENT 'Encrypted string used to verify the authenticityof the tansaction',
  `test_ipn` int(11) DEFAULT NULL,
  `address_city` varchar(40) DEFAULT NULL COMMENT 'City of customers address',
  `address_country` varchar(64) DEFAULT NULL COMMENT 'Country of customers address',
  `address_country_code` varchar(2) DEFAULT NULL COMMENT 'Two character ISO 3166 country code',
  `address_name` varchar(128) DEFAULT NULL COMMENT 'Name used with address (included when customer provides a Gift address)',
  `address_state` varchar(40) DEFAULT NULL COMMENT 'State of customer address',
  `address_status` varchar(20) DEFAULT NULL COMMENT 'confirmed/unconfirmed',
  `address_street` varchar(200) DEFAULT NULL COMMENT 'Customer''s street address',
  `address_zip` varchar(20) DEFAULT NULL COMMENT 'Zip code of customer''s address',
  `first_name` varchar(64) DEFAULT NULL COMMENT 'Customer''s first name',
  `last_name` varchar(64) DEFAULT NULL COMMENT 'Customer''s last name',
  `payer_business_name` varchar(127) DEFAULT NULL COMMENT 'Customer''s company name, if customer represents a business',
  `payer_email` varchar(127) DEFAULT NULL COMMENT 'Customer''s primary email address. Use this email to provide any credits',
  `payer_id` varchar(13) DEFAULT NULL COMMENT 'Unique customer ID.',
  `payer_status` varchar(20) DEFAULT NULL COMMENT 'verified/unverified',
  `contact_phone` varchar(20) DEFAULT NULL COMMENT 'Customer''s telephone number.',
  `residence_country` varchar(2) DEFAULT NULL COMMENT 'Two-Character ISO 3166 country code',
  `business` varchar(127) DEFAULT NULL COMMENT 'Email address or account ID of the payment recipient (that is, the merchant). Equivalent to the values of receiver_email (If payment is sent to primary account) and business set in the Website Payment HTML.',
  `item_name` varchar(127) DEFAULT NULL COMMENT 'Item name as passed by you, the merchant. Or, if not passed by you, as entered by your customer. If this is a shopping cart transaction, Paypal will append the number of the item (e.g., item_name_1,item_name_2, and so forth).',
  `item_number` varchar(127) DEFAULT NULL COMMENT 'Pass-through variable for you to track purchases. It will get passed back to you at the completion of the payment. If omitted, no variable will be passed back to you.',
  `quantity` varchar(127) DEFAULT NULL COMMENT 'Quantity as entered by your customer or as passed by you, the merchant. If this is a shopping cart transaction, PayPal appends the number of the item (e.g., quantity1,quantity2).',
  `receiver_email` varchar(127) DEFAULT NULL COMMENT 'Primary email address of the payment recipient (that is, the merchant). If the payment is sent to a non-primary email address on your PayPal account, the receiver_email is still your primary email.',
  `receiver_id` varchar(13) DEFAULT NULL COMMENT 'Unique account ID of the payment recipient (i.e., the merchant). This is the same as the recipients referral ID.',
  `custom` varchar(255) DEFAULT NULL COMMENT 'Custom value as passed by you, the merchant. These are pass-through variables that are never presented to your customer.',
  `invoice` varchar(127) DEFAULT NULL COMMENT 'Pass through variable you can use to identify your invoice number for this purchase. If omitted, no variable is passed back.',
  `memo` varchar(255) DEFAULT NULL COMMENT 'Memo as entered by your customer in PayPal Website Payments note field.',
  `option_name1` varchar(64) DEFAULT NULL COMMENT 'Option name 1 as requested by you',
  `option_name2` varchar(64) DEFAULT NULL COMMENT 'Option 2 name as requested by you',
  `option_selection1` varchar(200) DEFAULT NULL COMMENT 'Option 1 choice as entered by your customer',
  `option_selection2` varchar(200) DEFAULT NULL COMMENT 'Option 2 choice as entered by your customer',
  `tax` decimal(10,2) DEFAULT NULL COMMENT 'Amount of tax charged on payment',
  `auth_id` varchar(19) DEFAULT NULL COMMENT 'Authorization identification number',
  `auth_exp` varchar(28) DEFAULT NULL COMMENT 'Authorization expiration date and time, in the following format: HH:MM:SS DD Mmm YY, YYYY PST',
  `auth_amount` int(11) DEFAULT NULL COMMENT 'Authorization amount',
  `auth_status` varchar(20) DEFAULT NULL COMMENT 'Status of authorization',
  `num_cart_items` int(11) DEFAULT NULL COMMENT 'If this is a PayPal shopping cart transaction, number of items in the cart',
  `parent_txn_id` varchar(19) DEFAULT NULL COMMENT 'In the case of a refund, reversal, or cancelled reversal, this variable contains the txn_id of the original transaction, while txn_id contains a new ID for the new transaction.',
  `payment_date` varchar(28) DEFAULT NULL COMMENT 'Time/date stamp generated by PayPal, in the following format: HH:MM:SS DD Mmm YY, YYYY PST',
  `payment_status` varchar(20) DEFAULT NULL COMMENT 'Payment status of the payment',
  `payment_type` varchar(10) DEFAULT NULL COMMENT 'echeck/instant',
  `pending_reason` varchar(20) DEFAULT NULL COMMENT 'This variable is only set if payment_status=pending',
  `reason_code` varchar(20) DEFAULT NULL COMMENT 'This variable is only set if payment_status=reversed',
  `remaining_settle` int(11) DEFAULT NULL COMMENT 'Remaining amount that can be captured with Authorization and Capture',
  `shipping_method` varchar(64) DEFAULT NULL COMMENT 'The name of a shipping method from the shipping calculations section of the merchants account profile. The buyer selected the named shipping method for this transaction',
  `shipping` decimal(10,2) DEFAULT NULL COMMENT 'Shipping charges associated with this transaction. Format unsigned, no currency symbol, two decimal places',
  `transaction_entity` varchar(20) DEFAULT NULL COMMENT 'Authorization and capture transaction entity',
  `txn_id` varchar(19) DEFAULT '' COMMENT 'A unique transaction ID generated by PayPal',
  `txn_type` varchar(20) DEFAULT NULL COMMENT 'cart/express_checkout/send-money/virtual-terminal/web-accept',
  `exchange_rate` decimal(10,2) DEFAULT NULL COMMENT 'Exchange rate used if a currency conversion occured',
  `mc_currency` varchar(3) DEFAULT NULL COMMENT 'Three character country code. For payment IPN notifications, this is the currency of the payment, for non-payment subscription IPN notifications, this is the currency of the subscription.',
  `mc_fee` decimal(10,2) DEFAULT NULL COMMENT 'Transaction fee associated with the payment, mc_gross minus mc_fee equals the amount deposited into the receiver_email account. Equivalent to payment_fee for USD payments. If this amount is negative, it signifies a refund or reversal, and either ofthose p',
  `mc_gross` decimal(10,2) DEFAULT NULL COMMENT 'Full amount of the customer''s payment',
  `mc_handling` decimal(10,2) DEFAULT NULL COMMENT 'Total handling charge associated with the transaction',
  `mc_shipping` decimal(10,2) DEFAULT NULL COMMENT 'Total shipping amount associated with the transaction',
  `payment_fee` decimal(10,2) DEFAULT NULL COMMENT 'USD transaction fee associated with the payment',
  `payment_gross` decimal(10,2) DEFAULT NULL COMMENT 'Full USD amount of the customers payment transaction, before payment_fee is subtracted',
  `settle_amount` decimal(10,2) DEFAULT NULL COMMENT 'Amount that is deposited into the account''s primary balance after a currency conversion',
  `settle_currency` varchar(3) DEFAULT NULL COMMENT 'Currency of settle amount. Three digit currency code',
  `auction_buyer_id` varchar(64) DEFAULT NULL COMMENT 'The customer''s auction ID.',
  `auction_closing_date` varchar(28) DEFAULT NULL COMMENT 'The auction''s close date. In the format: HH:MM:SS DD Mmm YY, YYYY PSD',
  `auction_multi_item` int(11) DEFAULT NULL COMMENT 'The number of items purchased in multi-item auction payments',
  `for_auction` varchar(10) DEFAULT NULL COMMENT 'This is an auction payment - payments made using Pay for eBay Items or Smart Logos - as well as send money/money request payments with the type eBay items or Auction Goods(non-eBay)',
  `subscr_date` varchar(28) DEFAULT NULL COMMENT 'Start date or cancellation date depending on whether txn_type is subcr_signup or subscr_cancel',
  `subscr_effective` varchar(28) DEFAULT NULL COMMENT 'Date when a subscription modification becomes effective',
  `period1` varchar(10) DEFAULT NULL COMMENT '(Optional) Trial subscription interval in days, weeks, months, years (example a 4 day interval is 4 D',
  `period2` varchar(10) DEFAULT NULL COMMENT '(Optional) Trial period',
  `period3` varchar(10) DEFAULT NULL COMMENT 'Regular subscription interval in days, weeks, months, years',
  `amount1` decimal(10,2) DEFAULT NULL COMMENT 'Amount of payment for Trial period 1 for USD',
  `amount2` decimal(10,2) DEFAULT NULL COMMENT 'Amount of payment for Trial period 2 for USD',
  `amount3` decimal(10,2) DEFAULT NULL COMMENT 'Amount of payment for regular subscription  period 1 for USD',
  `mc_amount1` decimal(10,2) DEFAULT NULL COMMENT 'Amount of payment for trial period 1 regardless of currency',
  `mc_amount2` decimal(10,2) DEFAULT NULL COMMENT 'Amount of payment for trial period 2 regardless of currency',
  `mc_amount3` decimal(10,2) DEFAULT NULL COMMENT 'Amount of payment for regular subscription period regardless of currency',
  `recurring` varchar(1) DEFAULT NULL COMMENT 'Indicates whether rate recurs (1 is yes, blank is no)',
  `reattempt` varchar(1) DEFAULT NULL COMMENT 'Indicates whether reattempts should occur on payment failure (1 is yes, blank is no)',
  `retry_at` varchar(28) DEFAULT NULL COMMENT 'Date PayPal will retry a failed subscription payment',
  `recur_times` int(11) DEFAULT NULL COMMENT 'The number of payment installations that will occur at the regular rate',
  `username` varchar(64) DEFAULT NULL COMMENT '(Optional) Username generated by PayPal and given to subscriber to access the subscription',
  `password` varchar(24) DEFAULT NULL COMMENT '(Optional) Password generated by PayPal and given to subscriber to access the subscription (Encrypted)',
  `subscr_id` varchar(19) DEFAULT NULL COMMENT 'ID generated by PayPal for the subscriber',
  `case_id` varchar(28) DEFAULT NULL COMMENT 'Case identification number',
  `case_type` varchar(28) DEFAULT NULL COMMENT 'complaint/chargeback',
  `case_creation_date` varchar(28) DEFAULT NULL COMMENT 'Date/Time the case was registered',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `instant_payment_notifications`
--

LOCK TABLES `instant_payment_notifications` WRITE;
/*!40000 ALTER TABLE `instant_payment_notifications` DISABLE KEYS */;
/*!40000 ALTER TABLE `instant_payment_notifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `merchant_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `price` decimal(19,2) NOT NULL,
  `description` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `product_code` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `items`
--

LOCK TABLES `items` WRITE;
/*!40000 ALTER TABLE `items` DISABLE KEYS */;
INSERT INTO `items` VALUES (9,8,10,1,'Brights Bolds Holds','Brights Bolds Holds',324.00,'Brights Bolds Holds','2012-11-09 10:07:12','2018-10-07 15:25:07','ewfdsfesffsdfse'),(10,8,10,1,'Brush Kit Layout','brush kit layout',210.98,'brush kit layout','2012-11-09 10:09:38','2018-10-07 15:26:57','bkl-3949'),(11,8,10,1,'Carry All','Carry All',0.00,'Carry All','2012-11-09 10:10:57','2012-11-09 10:10:57',''),(12,8,10,1,'Hanging Organizer','Hanging Organizer',0.00,'Hanging Organizer','2012-11-09 10:12:24','2012-11-09 10:12:24',''),(13,8,1,1,'Home Fragrance','Home Fragrance',0.00,'Home Fragrance','2012-11-09 10:13:19','2012-11-09 10:13:19',''),(14,8,10,1,'Jewelry Roll','Jewelry Roll',0.00,'Jewelry Roll','2012-11-09 10:14:05','2012-11-09 10:14:05',''),(15,8,10,1,'Flip and Fold','Flip and Fold',0.00,'Flip and Fold','2012-11-09 10:17:14','2012-11-09 10:17:14',''),(16,8,10,1,'Laundry Bag','Laundry Bag',0.00,'Laundry Bag','2012-11-09 10:17:55','2012-11-09 10:17:55',''),(17,8,10,1,'Travel Shoe Bag','Travel Shoe Bag',0.00,'Travel Shoe Bag','2012-11-09 10:18:46','2012-11-12 07:53:39',''),(18,1,11,1,'White Loose Top with Lace accent','White Loose Top with Lace accent',0.00,'White Loose Top with Lace accent','2012-11-09 10:27:44','2012-11-09 10:27:44',''),(19,9,11,1,'Pink Bandage Dress','Pink Bandage Dress',440.00,'Pink Bandage Dress','2012-11-09 10:29:32','2012-11-12 15:01:33',''),(20,9,11,1,'Moss Green Lace Cropped Top','Moss Green Lace Cropped Top',360.00,'Moss Green Lace Cropped Top','2012-11-09 10:52:25','2012-11-19 05:48:13',''),(21,9,11,1,'Jane Royal Blue Bandage Dress','Jane Royal Blue Bandage Dress',440.00,'Jane Royal Blue Bandage Dress','2012-11-09 10:53:08','2012-11-12 15:01:27',''),(22,9,11,1,'Jane Black Bandage Dress','Jane Black Bandage Dress',440.00,'Jane Black Bandage Dress','2012-11-09 10:53:57','2012-11-12 15:01:17',''),(23,9,11,1,'Blue Bandage Dress','Blue Bandage Dress',440.00,'Blue Bandage Dress','2012-11-09 10:56:36','2012-11-19 05:48:30',''),(24,9,11,1,'Red Bandage Dress','Red Bandage Dress',440.00,'Red Bandage Dress','2012-11-09 11:00:17','2012-11-12 15:01:04',''),(25,9,11,1,'Grey Bandage Dress','Grey Bandage Dress',440.00,'Grey Bandage Dress','2012-11-12 12:41:08','2012-11-12 15:00:54','');
/*!40000 ALTER TABLE `items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `items_images`
--

DROP TABLE IF EXISTS `items_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `items_images` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `img_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `items_images`
--

LOCK TABLES `items_images` WRITE;
/*!40000 ALTER TABLE `items_images` DISABLE KEYS */;
/*!40000 ALTER TABLE `items_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `items_sizes`
--

DROP TABLE IF EXISTS `items_sizes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `items_sizes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `stocks` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `items_sizes`
--

LOCK TABLES `items_sizes` WRITE;
/*!40000 ALTER TABLE `items_sizes` DISABLE KEYS */;
INSERT INTO `items_sizes` VALUES (1,9,1,29,'2013-01-08 04:39:45','2013-01-08 04:39:45'),(2,10,2,6,'2013-01-08 04:39:59','2013-01-08 04:39:59'),(3,23,1,32,'2013-01-08 04:40:55','2013-01-08 04:40:55'),(4,9,1,6,'2013-01-08 04:41:10','2013-01-08 04:41:10'),(5,23,3,6,'2013-01-08 04:47:04','2013-01-08 04:47:04');
/*!40000 ALTER TABLE `items_sizes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lotto`
--

DROP TABLE IF EXISTS `lotto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lotto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `GAME` varchar(50) NOT NULL,
  `COMBINATIONS` varchar(20) NOT NULL,
  `DATE` date NOT NULL,
  `JACKPOT` int(9) NOT NULL,
  `WINNERS` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=312 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lotto`
--

LOCK TABLES `lotto` WRITE;
/*!40000 ALTER TABLE `lotto` DISABLE KEYS */;
INSERT INTO `lotto` VALUES (1,'Lotto 6/42','08-07-27-19-05-36','2017-10-10',6000000,0),(2,'Lotto 6/42','33-39-21-16-37-06','2017-10-12',7543144,0),(3,'Lotto 6/42','01-11-04-13-19-36','2017-10-14',10171332,2),(4,'Lotto 6/42','24-16-20-28-09-07','2017-10-17',5940000,0),(5,'Lotto 6/42','11-38-28-32-15-16','2017-10-19',5940000,0),(6,'Lotto 6/42','34-19-07-31-03-26','2017-10-21',7308533,0),(7,'Lotto 6/42','07-30-23-01-12-28','2017-10-24',9682208,1),(8,'Lotto 6/42','13-36-16-30-37-11','2017-10-26',5940000,0),(9,'Lotto 6/42','22-02-15-11-20-31','2017-10-28',5940000,0),(10,'Lotto 6/42','20-42-08-14-25-15','2017-10-31',7104985,0),(11,'Lotto 6/42','18-31-11-19-03-42','2017-11-02',9479092,0),(12,'Lotto 6/42','10-08-19-25-42-26','2017-11-04',12293266,0),(13,'Lotto 6/42','33-15-30-36-09-34','2017-11-07',14904185,1),(14,'Lotto 6/42','27-17-37-07-12-06','2017-11-09',5940000,0),(15,'Lotto 6/42','23-30-03-06-09-25','2017-11-11',5940000,2),(16,'Lotto 6/42','28-21-04-23-27-10','2017-11-14',5940000,0),(17,'Lotto 6/42','08-38-28-42-17-30','2017-11-16',5940000,0),(18,'Lotto 6/42','02-15-37-20-12-38','2017-11-18',7274936,0),(19,'Lotto 6/42','32-26-38-07-24-31','2017-11-21',9578837,0),(20,'Lotto 6/42','34-24-40-01-16-28','2017-11-23',12075058,0),(21,'Lotto 6/42','01-11-35-22-29-07','2017-11-25',14992766,0),(22,'Lotto 6/42','01-16-28-39-17-07','2017-11-28',17517706,0),(23,'Lotto 6/42','27-03-33-31-26-09','2017-11-30',20246526,0),(24,'Lotto 6/42','27-04-33-30-39-21','2017-12-02',23643062,0),(25,'Lotto 6/42','30-11-23-15-14-21','2017-12-05',26855390,1),(26,'Lotto 6/42','21-24-10-37-27-09','2017-12-07',5940000,0),(27,'Lotto 6/42','25-04-12-27-30-11','2017-12-09',5940000,0),(28,'Lotto 6/42','40-17-20-18-24-15','2017-12-12',7902953,1),(29,'Lotto 6/42','14-05-16-28-23-01','2017-12-14',5940000,0),(30,'Lotto 6/42','08-03-13-22-26-19','2017-12-16',5940000,0),(31,'Lotto 6/42','17-02-34-28-18-04','2017-12-19',7324428,0),(32,'Lotto 6/42','03-36-26-39-27-19','2017-12-21',9929364,0),(33,'Lotto 6/42','31-39-18-16-29-41','2017-12-23',13012450,0),(34,'Lotto 6/42','39-34-33-14-41-02','2017-12-26',15374463,0),(35,'Lotto 6/42','38-17-10-30-06-16','2017-12-28',18426082,0),(36,'Lotto 6/42','41-11-05-10-38-28','2017-12-30',22088168,0),(37,'Lotto 6/42','17-16-19-29-04-14','2018-01-02',24824813,1),(38,'Lotto 6/42','26-16-30-19-05-11','2018-01-04',5940000,0),(39,'Lotto 6/42','40-28-15-13-11-24','2018-01-06',5940000,0),(40,'Lotto 6/42','07-11-27-28-42-34','2018-01-09',7893045,1),(41,'Lotto 6/42','01-38-41-24-03-11','2018-01-11',5940000,0),(42,'Lotto 6/42','02-25-32-12-08-31','2018-01-13',5940000,0),(43,'Lotto 6/42','04-38-12-08-32-07','2018-01-16',7438457,0),(44,'Lotto 6/42','01-40-35-37-17-05','2018-01-18',9968299,0),(45,'Lotto 6/42','06-25-29-30-38-16','2018-01-20',12816247,0),(46,'Lotto 6/42','05-11-31-42-24-33','2018-01-23',15392948,0),(47,'Lotto 6/42','24-10-05-02-16-26','2018-01-25',18616103,0),(48,'Lotto 6/42','07-12-06-30-04-24','2018-01-27',21791029,0),(49,'Lotto 6/42','02-06-11-20-12-35','2018-01-30',25066080,0),(50,'Lotto 6/42','13-30-34-06-18-14','2018-02-01',29049008,0),(51,'Lotto 6/42','22-14-19-03-21-29','2018-02-03',32800352,0),(52,'Lotto 6/42','29-09-01-04-36-21','2018-02-06',36628789,0),(53,'Lotto 6/42','07-32-08-30-11-19','2018-02-08',41154966,0),(54,'Lotto 6/42','30-23-41-06-08-18','2018-02-10',45379007,0),(55,'Lotto 6/42','19-31-21-22-07-35','2018-02-13',49659101,1),(56,'Lotto 6/42','24-21-01-39-22-28','2018-02-15',5940000,0),(57,'Lotto 6/42','22-40-41-33-19-05','2018-02-17',5940000,0),(58,'Lotto 6/42','40-02-35-21-25-34','2018-02-20',8331793,0),(59,'Lotto 6/42','18-30-41-27-35-25','2018-02-22',10947436,0),(60,'Lotto 6/42','12-25-09-34-17-32','2018-02-24',13982931,0),(61,'Lotto 6/42','19-12-36-26-10-28','2018-02-27',16665447,0),(62,'Lotto 6/42','14-42-40-07-34-25','2018-03-01',19610051,0),(63,'Lotto 6/42','35-24-08-30-19-39','2018-03-03',23084523,0),(64,'Lotto 6/42','05-39-37-30-04-23','2018-03-06',26070597,1),(65,'Lotto 6/42','38-25-27-14-24-36','2018-03-08',5940000,0),(66,'Lotto 6/42','26-41-42-03-39-38','2018-03-10',5940000,0),(67,'Lotto 6/42','41-02-36-32-03-28','2018-03-13',7722606,0),(68,'Lotto 6/42','27-17-02-37-42-09','2018-03-15',10203847,1),(69,'Lotto 6/42','24-23-12-31-08-09','2018-03-17',5940000,0),(70,'Lotto 6/42','34-11-30-26-38-05','2018-03-20',5940000,0),(71,'Lotto 6/42','42-20-39-06-04-15','2018-03-22',7205379,0),(72,'Lotto 6/42','17-08-04-21-32-31','2018-03-24',9869227,0),(73,'Lotto 6/42','38-08-01-05-34-22','2018-03-27',12433949,1),(74,'Lotto 6/42','27-38-36-29-07-19','2018-04-03',5940000,0),(75,'Lotto 6/42','08-40-22-20-31-03','2018-04-05',5940000,0),(76,'Lotto 6/42','36-26-30-11-18-16','2018-04-07',7229978,0),(77,'Lotto 6/42','31-39-02-25-34-11','2018-04-10',9492326,0),(78,'Lotto 6/42','33-09-12-32-29-27','2018-04-12',12035229,0),(79,'Lotto 6/42','18-41-29-10-35-03','2018-04-14',14841578,0),(80,'Lotto 6/42','06-41-42-04-30-39','2018-04-17',17417300,0),(81,'Lotto 6/42','31-29-11-14-23-16','2018-04-19',20206095,0),(82,'Lotto 6/42','04-11-33-14-12-39','2018-04-21',23421607,0),(83,'Lotto 6/42','03-23-41-12-08-25','2018-04-24',26172092,0),(84,'Lotto 6/42','32-04-13-22-23-41','2018-04-26',29185264,0),(85,'Lotto 6/42','37-42-03-22-35-02','2018-04-28',32304512,0),(86,'Lotto 6/42','31-14-12-17-36-28','2018-05-01',35114651,0),(87,'Lotto 6/42','23-22-25-26-12-01','2018-05-03',38357000,0),(88,'Lotto 6/42','15-05-39-24-01-12','2018-05-05',41751734,0),(89,'Lotto 6/42','04-26-23-38-17-07','2018-05-08',45042129,0),(90,'Lotto 6/42','03-09-18-37-10-41','2018-05-10',48921540,1),(91,'Lotto 6/42','15-40-24-25-16-39','2018-05-12',5940000,0),(92,'Lotto 6/42','42-38-10-13-40-03','2018-05-15',5940000,0),(93,'Lotto 6/42','18-05-33-14-30-06','2018-05-17',7004765,0),(94,'Lotto 6/42','16-38-18-08-04-29','2018-05-19',9451202,0),(95,'Lotto 6/42','11-30-26-33-29-08','2018-05-22',11772839,0),(96,'Lotto 6/42','30-29-15-02-37-27','2018-05-24',14420602,0),(97,'Lotto 6/42','16-13-38-34-21-23','2018-05-26',17308376,0),(98,'Lotto 6/42','14-33-01-13-28-40','2018-05-29',19845521,1),(99,'Lotto 6/42','31-03-36-15-24-30','2018-05-31',5940000,0),(100,'Lotto 6/42','23-35-24-25-29-17','2018-06-02',5940000,0),(101,'Lotto 6/42','26-24-01-17-41-30','2018-06-05',6943916,0),(102,'Lotto 6/42','11-29-36-33-35-27','2018-06-07',9270020,0),(103,'Lotto 6/42','21-22-30-37-40-12','2018-06-09',11671427,0),(104,'Lotto 6/42','36-20-35-30-05-14','2018-06-12',13911366,0),(105,'Lotto 6/42','03-02-21-10-36-24','2018-06-14',16562542,0),(106,'Lotto 6/42','08-41-23-38-02-29','2018-06-16',19553914,0),(107,'Lotto 6/42','30-32-34-24-39-11','2018-06-19',22363847,0),(108,'Lotto 6/42','30-01-23-39-16-08','2018-06-21',25485111,0),(109,'Lotto 6/42','08-27-32-20-40-42','2018-06-23',28804106,0),(110,'Lotto 6/42','27-15-07-39-26-19','2018-06-26',31885774,1),(111,'Lotto 6/42','30-16-35-01-23-34','2018-06-28',5940000,0),(112,'Lotto 6/42','06-38-42-39-20-27','2018-06-30',5940000,0),(113,'Lotto 6/42','21-32-19-13-42-41','2018-07-03',7504509,0),(114,'Lotto 6/42','04-15-34-27-29-30','2018-07-05',10034668,0),(115,'Lotto 6/42','36-02-11-07-39-33','2018-07-07',12745288,0),(116,'Lotto 6/42','16-32-27-40-31-24','2018-07-10',15218205,0),(117,'Lotto 6/42','39-22-13-30-12-35','2018-07-12',18254444,0),(118,'Lotto 6/42','08-33-35-26-12-31','2018-07-14',21416964,0),(119,'Lotto 6/42','31-30-12-37-34-28','2018-07-17',24106611,0),(120,'Lotto 6/42','41-09-13-36-39-30','2018-07-19',27589764,0),(121,'Lotto 6/42','31-33-29-17-06-39','2018-07-21',30870489,0),(122,'Lotto 6/42','34-07-01-04-32-14','2018-07-24',33955630,1),(123,'Lotto 6/42','08-22-02-35-33-12','2018-07-26',5940000,0),(124,'Lotto 6/42','28-13-09-33-37-42','2018-07-28',5940000,0),(125,'Lotto 6/42','38-40-05-23-32-02','2018-07-31',6687993,0),(126,'Lotto 6/42','14-39-08-36-26-16','2018-08-02',8814671,0),(127,'Lotto 6/42','40-01-11-28-05-22','2018-08-04',11101211,0),(128,'Lotto 6/42','19-22-01-32-13-24','2018-08-07',13242688,0),(129,'Lotto 6/42','02-16-18-41-29-35','2018-08-09',15646337,0),(130,'Lotto 6/42','27-29-39-37-07-20','2018-08-11',17830368,0),(131,'Lotto 6/42','36-08-39-26-30-32','2018-08-14',20124819,0),(132,'Lotto 6/42','23-30-10-36-18-15','2018-08-16',22741821,2),(133,'Lotto 6/42','34-06-25-38-14-01','2018-08-18',5940000,0),(134,'Lotto 6/42','16-08-09-20-38-28','2018-08-21',5940000,0),(135,'Lotto 6/42','15-13-16-01-36-22','2018-08-23',6438172,1),(136,'Lotto 6/42','26-35-28-22-23-30','2018-08-25',5940000,0),(137,'Lotto 6/42','22-04-07-13-24-18','2018-08-28',5940000,0),(138,'Lotto 6/42','09-14-29-38-16-34','2018-08-30',6839027,1),(139,'Lotto 6/42','36-13-10-06-03-14','2018-09-01',5940000,0),(140,'Lotto 6/42','15-36-02-30-24-42','2018-09-04',5940000,0),(141,'Lotto 6/42','37-15-13-01-06-04','2018-09-06',7459619,0),(142,'Lotto 6/42','13-21-23-26-10-35','2018-09-08',10399883,0),(143,'Lotto 6/42','17-31-14-02-38-21','2018-09-11',13193719,0),(144,'Lotto 6/42','30-14-05-35-03-09','2018-09-13',16361271,0),(145,'Lotto 6/42','17-38-39-37-42-24','2018-09-15',19073835,0),(146,'Lotto 6/42','05-41-16-07-35-11','2018-09-18',22309033,0),(147,'Lotto 6/42','15-32-16-07-09-24','2018-09-20',25703869,0),(148,'Lotto 6/42','11-01-28-34-33-22','2018-09-22',29101344,0),(149,'Lotto 6/42','19-42-14-08-22-09','2018-09-25',32714804,0),(150,'Lotto 6/42','20-25-10-17-42-18','2018-09-27',36922993,0),(151,'Lotto 6/42','37-03-24-09-02-12','2018-09-29',41754431,0),(152,'Lotto 6/42','21-34-19-22-04-32','2018-10-02',46598259,0),(153,'Lotto 6/42','26-28-02-29-35-27','2018-10-04',52052082,0),(154,'Lotto 6/42','31-17-21-11-29-01','2018-10-06',58521550,0),(155,'Lotto 6/42','33-11-32-29-12-18','2018-10-09',65017023,0),(156,'Lotto 6/42','20-33-22-07-14-11','2018-10-11',74387638,0),(157,'Ultra Lotto 6/58','56-11-14-46-58-47','2017-10-10',50000000,0),(158,'Ultra Lotto 6/58','54-37-53-29-41-50','2017-10-13',50000000,0),(159,'Ultra Lotto 6/58','14-02-04-57-05-17','2017-10-15',49500000,0),(160,'Ultra Lotto 6/58','07-41-34-12-10-36','2017-10-17',49655263,0),(161,'Ultra Lotto 6/58','26-43-24-35-14-57','2017-10-20',52510527,0),(162,'Ultra Lotto 6/58','11-10-03-29-02-25','2017-10-22',55309079,0),(163,'Ultra Lotto 6/58','08-34-02-38-30-57','2017-10-24',57644065,0),(164,'Ultra Lotto 6/58','23-46-54-29-24-07','2017-10-27',60873267,0),(165,'Ultra Lotto 6/58','04-21-12-47-09-42','2017-10-29',63897792,0),(166,'Ultra Lotto 6/58','19-54-28-06-32-26','2017-10-31',66296107,0),(167,'Ultra Lotto 6/58','46-25-58-44-41-19','2017-11-03',69801348,0),(168,'Ultra Lotto 6/58','55-48-54-51-45-50','2017-11-05',73123832,0),(169,'Ultra Lotto 6/58','57-04-02-38-21-44','2017-11-07',75927563,0),(170,'Ultra Lotto 6/58','35-47-43-40-10-14','2017-11-10',79533318,0),(171,'Ultra Lotto 6/58','12-44-14-18-31-16','2017-11-12',83125200,0),(172,'Ultra Lotto 6/58','11-18-23-10-41-34','2017-11-14',86106664,0),(173,'Ultra Lotto 6/58','17-12-51-26-21-08','2017-11-17',90031527,0),(174,'Ultra Lotto 6/58','14-51-49-27-24-22','2017-11-19',93635004,0),(175,'Ultra Lotto 6/58','22-58-54-51-10-27','2017-11-21',96845032,0),(176,'Ultra Lotto 6/58','45-08-33-12-17-58','2017-11-24',100801652,0),(177,'Ultra Lotto 6/58','10-52-30-41-12-06','2017-11-26',104836868,0),(178,'Ultra Lotto 6/58','12-42-09-52-55-06','2017-11-28',108398216,0),(179,'Ultra Lotto 6/58','03-52-30-17-08-01','2017-12-01',113013024,0),(180,'Ultra Lotto 6/58','15-40-43-14-47-23','2017-12-03',117578112,0),(181,'Ultra Lotto 6/58','39-57-01-20-40-22','2017-12-05',121795296,0),(182,'Ultra Lotto 6/58','13-51-28-05-44-04','2017-12-08',126633300,0),(183,'Ultra Lotto 6/58','45-53-22-24-47-05','2017-12-10',131543388,0),(184,'Ultra Lotto 6/58','26-49-22-03-41-44','2017-12-12',136296836,0),(185,'Ultra Lotto 6/58','51-39-38-43-25-02','2017-12-15',141572552,0),(186,'Ultra Lotto 6/58','22-35-45-40-37-26','2017-12-17',146793404,0),(187,'Ultra Lotto 6/58','13-50-08-45-07-16','2017-12-19',151515956,0),(188,'Ultra Lotto 6/58','51-22-32-43-19-02','2017-12-22',157641372,0),(189,'Ultra Lotto 6/58','57-37-35-05-49-36','2017-12-24',160850876,0),(190,'Ultra Lotto 6/58','22-41-09-44-35-46','2017-12-26',165205844,0),(191,'Ultra Lotto 6/58','15-57-01-12-24-09','2017-12-29',171894552,0),(192,'Ultra Lotto 6/58','43-06-14-24-15-25','2017-12-31',175912360,0),(193,'Ultra Lotto 6/58','33-39-10-26-07-32','2018-01-02',180473296,0),(194,'Ultra Lotto 6/58','21-57-26-29-16-04','2018-01-05',187556992,0),(195,'Ultra Lotto 6/58','56-45-39-35-42-14','2018-01-07',193694784,0),(196,'Ultra Lotto 6/58','39-12-31-16-29-17','2018-01-09',199439260,0),(197,'Ultra Lotto 6/58','24-10-18-40-33-01','2018-01-12',207009728,0),(198,'Ultra Lotto 6/58','15-53-55-12-34-14','2018-01-14',213639956,0),(199,'Ultra Lotto 6/58','01-41-31-13-29-24','2018-01-16',219845372,0),(200,'Ultra Lotto 6/58','50-32-15-53-29-52','2018-01-19',227832524,0),(201,'Ultra Lotto 6/58','12-40-21-44-57-28','2018-01-21',234720908,0),(202,'Ultra Lotto 6/58','19-17-13-53-56-15','2018-01-23',241347228,0),(203,'Ultra Lotto 6/58','07-57-51-08-53-16','2018-01-26',249644180,0),(204,'Ultra Lotto 6/58','09-49-47-43-16-42','2018-01-28',257261016,0),(205,'Ultra Lotto 6/58','07-10-13-15-03-55','2018-01-30',264810720,0),(206,'Ultra Lotto 6/58','56-34-53-01-28-46','2018-02-02',274007004,0),(207,'Ultra Lotto 6/58','48-57-13-51-02-15','2018-02-04',282395352,0),(208,'Ultra Lotto 6/58','57-53-39-50-35-18','2018-02-06',290871392,0),(209,'Ultra Lotto 6/58','46-07-17-01-41-34','2018-02-09',300925144,0),(210,'Ultra Lotto 6/58','28-49-46-32-29-54','2018-02-11',310632972,0),(211,'Ultra Lotto 6/58','33-05-38-51-52-10','2018-02-13',320056960,0),(212,'Ultra Lotto 6/58','15-31-28-25-42-11','2018-02-16',331971464,2),(213,'Ultra Lotto 6/58','05-20-43-25-48-35','2018-02-18',49500000,0),(214,'Ultra Lotto 6/58','32-18-33-08-01-29','2018-02-20',49500000,0),(215,'Ultra Lotto 6/58','17-01-08-24-39-07','2018-02-23',49500000,0),(216,'Ultra Lotto 6/58','53-30-47-54-02-35','2018-02-25',49500000,0),(217,'Ultra Lotto 6/58','19-17-23-06-54-27','2018-02-27',49500000,0),(218,'Ultra Lotto 6/58','28-39-46-22-25-26','2018-03-02',49500000,0),(219,'Ultra Lotto 6/58','58-26-11-51-43-39','2018-03-04',49500000,0),(220,'Ultra Lotto 6/58','57-56-17-36-18-07','2018-03-06',49500000,0),(221,'Ultra Lotto 6/58','44-06-01-53-45-27','2018-03-09',49500000,0),(222,'Ultra Lotto 6/58','13-11-16-40-55-25','2018-03-11',49500000,0),(223,'Ultra Lotto 6/58','49-09-30-50-33-04','2018-03-13',49500000,0),(224,'Ultra Lotto 6/58','42-55-46-30-02-58','2018-03-16',49500000,0),(225,'Ultra Lotto 6/58','15-39-38-13-34-51','2018-03-18',49500000,0),(226,'Ultra Lotto 6/58','31-18-06-48-15-58','2018-03-20',49500000,0),(227,'Ultra Lotto 6/58','16-54-41-06-29-46','2018-03-23',49500000,0),(228,'Ultra Lotto 6/58','49-25-01-22-34-08','2018-03-25',49500000,0),(229,'Ultra Lotto 6/58','21-38-24-16-22-50','2018-03-27',49500000,0),(230,'Ultra Lotto 6/58','14-46-17-05-06-26','2018-04-03',50297077,0),(231,'Ultra Lotto 6/58','18-48-36-07-20-16','2018-04-06',53421169,0),(232,'Ultra Lotto 6/58','14-25-35-31-48-08','2018-04-08',56344330,0),(233,'Ultra Lotto 6/58','31-15-30-13-53-04','2018-04-10',58876540,0),(234,'Ultra Lotto 6/58','47-20-08-15-34-50','2018-04-13',62306981,0),(235,'Ultra Lotto 6/58','24-37-15-53-05-49','2018-04-15',65380254,0),(236,'Ultra Lotto 6/58','15-18-27-40-37-42','2018-04-17',67994400,0),(237,'Ultra Lotto 6/58','53-04-45-30-12-29','2018-04-20',71388699,0),(238,'Ultra Lotto 6/58','24-18-37-11-02-51','2018-04-22',74480381,0),(239,'Ultra Lotto 6/58','04-54-51-55-30-06','2018-04-24',77114934,0),(240,'Ultra Lotto 6/58','11-03-30-37-38-41','2018-04-27',80558154,0),(241,'Ultra Lotto 6/58','58-15-37-46-01-44','2018-04-29',83695951,0),(242,'Ultra Lotto 6/58','48-28-51-15-39-42','2018-05-01',86323181,0),(243,'Ultra Lotto 6/58','11-15-56-38-53-45','2018-05-04',89830023,0),(244,'Ultra Lotto 6/58','07-34-51-06-10-21','2018-05-06',93059561,0),(245,'Ultra Lotto 6/58','19-27-07-46-18-53','2018-05-08',95877129,0),(246,'Ultra Lotto 6/58','51-31-22-19-02-32','2018-05-11',99542140,0),(247,'Ultra Lotto 6/58','46-11-21-24-19-57','2018-05-13',103138604,0),(248,'Ultra Lotto 6/58','32-15-23-10-18-22','2018-05-15',106590252,0),(249,'Ultra Lotto 6/58','25-26-36-03-33-56','2018-05-18',111122872,0),(250,'Ultra Lotto 6/58','09-23-07-37-32-40','2018-05-20',115266992,0),(251,'Ultra Lotto 6/58','32-57-01-49-09-19','2018-05-22',119378952,0),(252,'Ultra Lotto 6/58','34-14-19-22-10-43','2018-05-25',124321564,0),(253,'Ultra Lotto 6/58','34-45-14-40-01-13','2018-05-27',128900984,0),(254,'Ultra Lotto 6/58','25-49-10-37-26-06','2018-05-29',133174580,0),(255,'Ultra Lotto 6/58','26-08-43-22-27-12','2018-06-01',138783220,0),(256,'Ultra Lotto 6/58','01-53-27-11-43-18','2018-06-03',143924112,0),(257,'Ultra Lotto 6/58','44-35-39-34-03-50','2018-06-05',148609676,0),(258,'Ultra Lotto 6/58','49-31-39-05-41-43','2018-06-08',154272556,0),(259,'Ultra Lotto 6/58','54-22-17-08-48-05','2018-06-10',159440596,0),(260,'Ultra Lotto 6/58','48-18-57-09-28-53','2018-06-12',164144492,0),(261,'Ultra Lotto 6/58','07-56-37-17-49-11','2018-06-15',170217528,0),(262,'Ultra Lotto 6/58','46-01-05-11-07-21','2018-06-17',176027440,0),(263,'Ultra Lotto 6/58','49-57-52-28-03-06','2018-06-19',181477292,0),(264,'Ultra Lotto 6/58','03-22-52-50-47-44','2018-06-22',187796520,0),(265,'Ultra Lotto 6/58','17-24-10-58-25-11','2018-06-24',193938284,0),(266,'Ultra Lotto 6/58','55-34-16-31-40-23','2018-06-26',199715276,0),(267,'Ultra Lotto 6/58','01-19-13-29-51-04','2018-06-29',207237172,0),(268,'Ultra Lotto 6/58','31-24-45-19-34-52','2018-07-01',214636668,0),(269,'Ultra Lotto 6/58','07-57-50-01-10-02','2018-07-03',221446600,0),(270,'Ultra Lotto 6/58','56-26-04-51-49-18','2018-07-06',229442300,0),(271,'Ultra Lotto 6/58','35-17-28-33-22-25','2018-07-08',236748668,0),(272,'Ultra Lotto 6/58','47-15-48-03-35-56','2018-07-10',243951112,0),(273,'Ultra Lotto 6/58','02-51-32-47-17-24','2018-07-13',252096984,0),(274,'Ultra Lotto 6/58','55-29-31-57-14-20','2018-07-15',259793448,0),(275,'Ultra Lotto 6/58','22-03-57-58-54-14','2018-07-17',266418692,0),(276,'Ultra Lotto 6/58','24-06-55-03-28-27','2018-07-20',274982724,0),(277,'Ultra Lotto 6/58','45-50-34-02-43-11','2018-07-22',282442304,0),(278,'Ultra Lotto 6/58','51-37-40-07-29-05','2018-07-24',289617284,0),(279,'Ultra Lotto 6/58','43-24-06-25-28-40','2018-07-27',298136492,0),(280,'Ultra Lotto 6/58','39-09-56-26-29-34','2018-07-29',306110404,0),(281,'Ultra Lotto 6/58','14-03-51-32-21-48','2018-07-31',314131888,0),(282,'Ultra Lotto 6/58','53-26-15-45-46-03','2018-08-03',324670212,0),(283,'Ultra Lotto 6/58','47-16-29-51-18-54','2018-08-05',334328944,0),(284,'Ultra Lotto 6/58','31-07-34-14-39-50','2018-08-07',343538300,0),(285,'Ultra Lotto 6/58','38-35-37-15-56-45','2018-08-10',354665384,0),(286,'Ultra Lotto 6/58','01-13-42-24-53-56','2018-08-12',363917684,0),(287,'Ultra Lotto 6/58','16-43-31-44-18-37','2018-08-14',373545444,0),(288,'Ultra Lotto 6/58','43-19-36-17-07-44','2018-08-17',385209020,0),(289,'Ultra Lotto 6/58','16-17-15-05-23-54','2018-08-19',395659120,0),(290,'Ultra Lotto 6/58','53-10-52-19-08-58','2018-08-21',406162932,0),(291,'Ultra Lotto 6/58','04-27-49-16-47-41','2018-08-24',420202552,0),(292,'Ultra Lotto 6/58','43-54-39-14-46-36','2018-08-26',432811540,0),(293,'Ultra Lotto 6/58','28-29-08-40-33-04','2018-08-28',446795172,0),(294,'Ultra Lotto 6/58','03-30-38-19-54-07','2018-08-31',467068348,0),(295,'Ultra Lotto 6/58','41-51-28-30-54-24','2018-09-02',485363060,0),(296,'Ultra Lotto 6/58','07-08-41-25-13-30','2018-09-04',503330392,0),(297,'Ultra Lotto 6/58','17-06-55-54-20-27','2018-09-07',528487576,0),(298,'Ultra Lotto 6/58','24-35-56-38-28-42','2018-09-09',551720748,0),(299,'Ultra Lotto 6/58','33-30-03-43-18-19','2018-09-11',574579336,0),(300,'Ultra Lotto 6/58','52-32-55-17-07-40','2018-09-14',601502936,0),(301,'Ultra Lotto 6/58','34-15-39-53-36-43','2018-09-16',625503012,0),(302,'Ultra Lotto 6/58','04-35-50-08-47-44','2018-09-18',650886268,0),(303,'Ultra Lotto 6/58','06-47-41-55-28-10','2018-09-21',679409304,0),(304,'Ultra Lotto 6/58','58-08-34-29-35-38','2018-09-23',704720320,0),(305,'Ultra Lotto 6/58','50-21-51-19-53-48','2018-09-25',734038468,0),(306,'Ultra Lotto 6/58','46-25-55-26-50-57','2018-09-28',774030800,0),(307,'Ultra Lotto 6/58','34-30-32-20-03-23','2018-09-30',809365820,0),(308,'Ultra Lotto 6/58','30-41-53-04-02-54','2018-10-02',849578320,0),(309,'Ultra Lotto 6/58','01-30-27-36-49-12','2018-10-05',903290152,0),(310,'Ultra Lotto 6/58','45-21-02-30-07-10','2018-10-07',954503164,0),(311,'Ultra Lotto 6/58','12-16-46-03-38-36','2018-10-09',1026264340,0);
/*!40000 ALTER TABLE `lotto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menus` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,'Womens','2012-08-20 09:47:27','2012-08-20 09:47:27'),(2,'Mens','2012-08-20 09:47:35','2012-08-20 09:47:35'),(3,'Kids','2012-08-20 09:47:40','2012-08-20 09:47:40');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `merchants`
--

DROP TABLE IF EXISTS `merchants`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `merchants` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `theme_id` int(11) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `about` text NOT NULL,
  `interests` text NOT NULL,
  `likes` text NOT NULL,
  `contact` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `merchants`
--

LOCK TABLES `merchants` WRITE;
/*!40000 ALTER TABLE `merchants` DISABLE KEYS */;
INSERT INTO `merchants` VALUES (8,9,1,1,'Pink_label.JPG','Pink Label','All about Pink Label','','','Tel: (02)1234567 Cel: (0912)3456789','2012-11-09 09:47:48','2018-11-05 11:57:53'),(9,10,2,3,'mc.jpg','Maria\'s Closet','Maria\'s Closet','','','','2012-11-09 10:22:48','2018-11-05 08:01:05');
/*!40000 ALTER TABLE `merchants` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `monthlymerchants`
--

DROP TABLE IF EXISTS `monthlymerchants`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `monthlymerchants` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `merchant_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `monthlymerchants`
--

LOCK TABLES `monthlymerchants` WRITE;
/*!40000 ALTER TABLE `monthlymerchants` DISABLE KEYS */;
/*!40000 ALTER TABLE `monthlymerchants` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `transaction_id` int(11) DEFAULT NULL,
  `total_price` decimal(19,2) NOT NULL,
  `size` varchar(50) NOT NULL,
  `quantity` int(6) NOT NULL,
  `status` varchar(20) NOT NULL,
  `modified` datetime NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (29,19,2,53,880.00,'Small',2,'pending','2012-12-19 09:46:05','2012-12-19 09:46:05'),(30,19,2,53,2640.00,'Small',6,'pending','2012-12-19 10:01:10','2012-12-19 10:01:10'),(31,23,2,54,2200.00,'Small',5,'Processing','2013-01-08 05:03:19','2013-01-08 05:03:19'),(32,9,2,55,0.00,'Small',1,'Processing','2018-10-27 18:06:08','2018-10-27 18:06:08'),(33,9,2,56,324.00,'Small',1,'Processing','2018-10-27 18:06:58','2018-10-27 18:06:58'),(34,9,2,57,324.00,'Small',1,'Processing','2018-10-27 18:08:28','2018-10-27 18:08:28'),(35,9,2,58,324.00,'Small',1,'Processing','2018-10-27 18:09:00','2018-10-27 18:09:00'),(36,9,2,59,324.00,'Small',1,'Processing','2018-10-27 18:41:39','2018-10-27 18:41:39'),(37,9,2,60,324.00,'Small',1,'Processing','2018-10-27 18:47:04','2018-10-27 18:47:04'),(38,9,2,61,324.00,'Small',1,'Processing','2018-10-27 18:48:52','2018-10-27 18:48:52'),(39,9,2,62,324.00,'Small',1,'Processing','2018-10-27 18:49:45','2018-10-27 18:49:45'),(40,10,2,63,210.98,'Small',1,'Processing','2018-10-27 19:27:52','2018-10-27 19:27:52'),(41,23,32,NULL,3520.00,'Small',8,'Pending','2018-10-28 06:21:55','2018-10-28 06:21:55'),(42,10,9,67,843.92,'Small',4,'Processing','2018-10-29 12:32:29','2018-10-29 12:32:29'),(43,10,9,67,210.98,'Small',1,'Processing','2018-10-29 12:33:38','2018-10-29 12:33:38');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paypal_items`
--

DROP TABLE IF EXISTS `paypal_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paypal_items` (
  `id` varchar(36) NOT NULL,
  `instant_payment_notification_id` varchar(36) NOT NULL,
  `item_name` varchar(127) DEFAULT NULL,
  `item_number` varchar(127) DEFAULT NULL,
  `quantity` varchar(127) DEFAULT NULL,
  `mc_gross` float(10,2) DEFAULT NULL,
  `mc_shipping` float(10,2) DEFAULT NULL,
  `mc_handling` float(10,2) DEFAULT NULL,
  `tax` float(10,2) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paypal_items`
--

LOCK TABLES `paypal_items` WRITE;
/*!40000 ALTER TABLE `paypal_items` DISABLE KEYS */;
/*!40000 ALTER TABLE `paypal_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `photos`
--

DROP TABLE IF EXISTS `photos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `photos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `merchant_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img_file` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `photos`
--

LOCK TABLES `photos` WRITE;
/*!40000 ALTER TABLE `photos` DISABLE KEYS */;
INSERT INTO `photos` VALUES (1,2,'Rexlogo','merchant1.jpg','2012-08-28 11:21:01','2012-08-28 11:21:01'),(2,1,'JDClogo','merchant2.jpg','2012-08-28 11:21:24','2012-08-28 11:21:24');
/*!40000 ALTER TABLE `photos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sizes`
--

DROP TABLE IF EXISTS `sizes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sizes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sizes`
--

LOCK TABLES `sizes` WRITE;
/*!40000 ALTER TABLE `sizes` DISABLE KEYS */;
INSERT INTO `sizes` VALUES (1,'Small','2012-12-11 09:05:47','2012-12-11 09:05:47'),(2,'Medium','2012-12-11 09:06:08','2012-12-11 09:06:08'),(3,'Large','2012-12-11 09:06:21','2012-12-11 09:06:21'),(4,'XL','2012-12-11 09:06:49','2012-12-11 09:06:49'),(5,'XXL','2012-12-11 09:07:08','2012-12-11 09:07:08'),(6,'XXXL','2012-12-11 09:07:21','2012-12-11 09:07:21');
/*!40000 ALTER TABLE `sizes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `themes`
--

DROP TABLE IF EXISTS `themes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `themes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `filename` varchar(20) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `type_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `themes`
--

LOCK TABLES `themes` WRITE;
/*!40000 ALTER TABLE `themes` DISABLE KEYS */;
INSERT INTO `themes` VALUES (1,'Basic 1','basic/basic1','2013-01-08 05:52:14','2013-01-10 04:46:27',1),(2,'Basic 2','basic/basic2','2013-01-08 05:52:22','2013-01-10 04:48:40',1),(3,'Premium 1','premium/premium1','2013-01-10 04:49:55','2013-01-10 04:49:55',2);
/*!40000 ALTER TABLE `themes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transactions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `transaction_code` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total_price` decimal(19,2) NOT NULL,
  `status` varchar(20) NOT NULL,
  `vat` decimal(19,2) NOT NULL,
  `web_fee` decimal(19,2) NOT NULL,
  `shipping` decimal(19,2) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transactions`
--

LOCK TABLES `transactions` WRITE;
/*!40000 ALTER TABLE `transactions` DISABLE KEYS */;
INSERT INTO `transactions` VALUES (27,'VVU-227',2,100.00,'Pending',0.00,0.00,100.00,'2012-12-19 08:35:07','2012-12-19 08:35:07'),(28,'TJ0-228',2,100.00,'Pending',0.00,0.00,100.00,'2012-12-19 08:59:44','2012-12-19 08:59:44'),(29,'6FP-229',2,100.00,'Pending',0.00,0.00,100.00,'2012-12-19 09:00:47','2012-12-19 09:00:47'),(30,'DEV-230',2,100.00,'Pending',0.00,0.00,100.00,'2012-12-19 09:01:36','2012-12-19 09:01:36'),(31,'DWE-231',2,100.00,'Pending',0.00,0.00,100.00,'2012-12-19 09:04:01','2012-12-19 09:04:01'),(32,'E12-232',2,100.00,'Pending',0.00,0.00,100.00,'2012-12-19 09:06:32','2012-12-19 09:06:32'),(33,'W4U-233',2,100.00,'Pending',0.00,0.00,100.00,'2012-12-19 09:06:45','2012-12-19 09:06:45'),(34,'0ZA-234',2,100.00,'Pending',0.00,0.00,100.00,'2012-12-19 09:17:10','2012-12-19 09:17:10'),(35,'CAP-235',2,100.00,'Pending',0.00,0.00,100.00,'2012-12-19 09:17:39','2012-12-19 09:17:39'),(36,'XHE-236',2,100.00,'Pending',0.00,0.00,100.00,'2012-12-19 09:19:15','2012-12-19 09:19:15'),(37,'NCX-237',2,100.00,'Pending',0.00,0.00,100.00,'2012-12-19 09:21:13','2012-12-19 09:21:13'),(38,'KL4-238',2,100.00,'Pending',0.00,0.00,100.00,'2012-12-19 09:22:28','2012-12-19 09:22:28'),(39,'B4N-239',2,100.00,'Pending',0.00,0.00,100.00,'2012-12-19 09:24:20','2012-12-19 09:24:20'),(40,'9OZ-240',2,100.00,'Pending',0.00,0.00,100.00,'2012-12-19 09:24:58','2012-12-19 09:24:58'),(41,'HRV-241',2,100.00,'Pending',0.00,0.00,100.00,'2012-12-19 09:27:04','2012-12-19 09:27:04'),(42,'DJP-242',2,100.00,'Pending',0.00,0.00,100.00,'2012-12-19 09:27:44','2012-12-19 09:27:44'),(43,'C4N-243',2,100.00,'Pending',0.00,0.00,100.00,'2012-12-19 09:31:32','2012-12-19 09:31:32'),(44,'D1O-244',2,100.00,'Pending',0.00,0.00,100.00,'2012-12-19 09:35:46','2012-12-19 09:35:46'),(45,'JT9-245',2,100.00,'Pending',0.00,0.00,100.00,'2012-12-19 09:36:01','2012-12-19 09:36:01'),(46,'AVV-246',2,100.00,'Pending',0.00,0.00,100.00,'2012-12-19 09:36:10','2012-12-19 09:36:10'),(47,'QI2-247',2,100.00,'Pending',0.00,0.00,100.00,'2012-12-19 09:37:25','2012-12-19 09:37:25'),(48,'HB4-248',2,100.00,'Pending',0.00,0.00,100.00,'2012-12-19 09:39:29','2012-12-19 09:39:29'),(49,'TXW-249',2,100.00,'Pending',0.00,0.00,100.00,'2012-12-19 09:39:59','2012-12-19 09:39:59'),(50,'VCD-250',2,100.00,'Pending',0.00,0.00,100.00,'2012-12-19 09:41:16','2012-12-19 09:41:16'),(51,'VON-251',2,614.80,'Pending',52.80,22.00,100.00,'2012-12-19 09:45:10','2012-12-19 09:45:10'),(52,'KGN-252',2,614.80,'Pending',52.80,22.00,100.00,'2012-12-19 09:46:05','2012-12-19 09:46:05'),(53,'EWH-253',2,614.80,'Pending',52.80,22.00,100.00,'2012-12-19 10:01:10','2012-12-19 10:01:10'),(54,'5FX-22354',2,2574.00,'Pending',264.00,110.00,0.00,'2013-01-08 05:03:19','2013-01-08 05:03:19'),(55,'JL2-2',2,100.00,'Pending',0.00,0.00,100.00,'2018-10-27 18:06:08','2018-10-27 18:06:08'),(56,'8R5-2',2,440.20,'Pending',38.88,16.20,100.00,'2018-10-27 18:06:58','2018-10-27 18:06:58'),(57,'PBN-2',2,440.20,'Pending',38.88,16.20,100.00,'2018-10-27 18:08:28','2018-10-27 18:08:28'),(58,'2U2-2',2,440.20,'Pending',38.88,16.20,100.00,'2018-10-27 18:09:00','2018-10-27 18:09:00'),(59,'S7N-2',2,440.20,'Pending',38.88,16.20,100.00,'2018-10-27 18:41:39','2018-10-27 18:41:39'),(60,'VU7-2',2,440.20,'Pending',38.88,16.20,100.00,'2018-10-27 18:47:04','2018-10-27 18:47:04'),(61,'11U-2',2,440.20,'Pending',38.88,16.20,100.00,'2018-10-27 18:48:52','2018-10-27 18:48:52'),(62,'5IO-2962',2,440.20,'Pending',38.88,16.20,100.00,'2018-10-27 18:49:45','2018-10-27 18:49:45'),(63,'W3C-21063',2,321.53,'Pending',25.32,10.55,100.00,'2018-10-27 19:27:52','2018-10-27 19:27:52'),(64,'OLY-964',9,1107.65,'Processing',126.59,52.75,0.00,'2018-11-01 18:15:58','2018-11-01 18:15:58'),(65,'06L-965',9,1107.65,'Processing',126.59,52.75,0.00,'2018-11-01 18:17:51','2018-11-01 18:17:51'),(66,'J02-966',9,1107.65,'Processing',126.59,52.75,0.00,'2018-11-01 18:18:34','2018-11-01 18:18:34'),(67,'SNA-967',9,1107.65,'Processing',126.59,52.75,0.00,'2018-11-01 18:19:50','2018-11-01 18:19:50');
/*!40000 ALTER TABLE `transactions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `types`
--

DROP TABLE IF EXISTS `types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `types` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(11) NOT NULL,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `types`
--

LOCK TABLES `types` WRITE;
/*!40000 ALTER TABLE `types` DISABLE KEYS */;
INSERT INTO `types` VALUES (1,'Basic',1357627805,1357627805),(2,'Premium',1357627815,1357627815);
/*!40000 ALTER TABLE `types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` tinyint(1) NOT NULL,
  `activation` varchar(16) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `group_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (2,1,'','admin','admin','HPB Admin','admin','$2y$10$VFYjDha9GT55iHb4OdPaxOvzEd15Jl9ZAh96dXMxWDNpOEvffpIR2','rapidcyber@yahoo.com',1,'2012-08-17 22:33:54','2018-11-06 17:31:38'),(7,0,'','Jhames','Santiago','123456','jhamessantiago','060ab94738d16da41dd2b6bee29caf4bee3d353c','jhamessantiago@gmail.com',2,'2012-09-06 05:02:34','2012-09-06 05:02:34'),(9,1,'','Pink','Label','N/A','PinkLabel','$2y$10$kygRZOpa2KIZt6PXqeKnjOx/EEziS.q86YZk2BSIyi7LQ9C5xD0YS','pmsantiagojr@yahoo.com',2,'2012-11-09 09:47:11','2018-10-05 17:00:58'),(10,1,'','Maria','Closet','N/A','Maria\'s Closet','ddf715eeb83fffdc25579b41f0cb46efb58fb50f','mariascloset@hpbazaars.com',2,'2012-11-09 10:20:29','2012-11-09 10:20:29'),(11,1,'','jun','bar','sample address','jun','e8f2473a1b8cce5f1779afe48157f2e2ac684773','rapidcyber@gmail.com',3,'2012-11-12 06:01:13','2012-11-12 06:01:13'),(12,0,'','testbazaar','testbazaar','testbazaar','testbazaar','ddf715eeb83fffdc25579b41f0cb46efb58fb50f','testbazaar@hpb.com',3,'2012-11-12 08:19:33','2012-11-12 08:19:33'),(30,0,'','fwefwe','adsfwe','wafewa','rapiodcyber6','e8f2473a1b8cce5f1779afe48157f2e2ac684773','rapidcyber@gmail.com',3,'2012-11-29 11:58:42','2012-11-29 11:58:42'),(32,1,'OF3DCVCFDHJYS71X','jun2','BARCELLANO JR.','sdfwefd','jun2','$2y$10$AgnWCFCpLPmVTT45/F272u1KredA3U11sQ4LQVTen/h3oVTgc3osq','jun.barcellano@gmail.com',1,'2018-10-04 17:48:26','2018-10-04 17:48:26');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-11-07  1:35:23
