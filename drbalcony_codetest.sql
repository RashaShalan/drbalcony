/*
MySQL Backup
Source Server Version: 5.7.33
Source Database: drbalcony_codetest
Date: 6/19/2024 15:32:51
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
--  Table structure for `orders`
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quantity` float(11,2) DEFAULT NULL,
  `price` float(11,2) DEFAULT NULL,
  `total_price` float(11,2) DEFAULT NULL,
  `creation_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creation_date` datetime DEFAULT NULL,
  `modification_date` datetime DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1' COMMENT '1:active ; 0:inactive',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Records 
-- ----------------------------
INSERT INTO `orders` VALUES ('1','2','jacket','1.00','10.00','10.00','2024-06-19 07:17:42'), ('2','2','T-shirt','1.00','1.00','1.00','2024-06-19 07:18:53'), ('3','2','T-shirt','5.00','100.00','500.00','2024-06-19 07:20:27'), ('4','4','jacket','2.00','2000.00','4000.00','2024-06-19 07:21:59'), ('5','4','jacket','5.00','1000.00','5000.00','2024-06-19 07:23:47'), ('6','2','T-shirt','10.00','50.00','500.00','2024-06-19 07:25:17'), ('7','2','jacket','5.00','5000.00','25000.00','2024-06-19 07:27:15');
INSERT INTO `users` VALUES ('1','Rasha','Shalan','arafa.ezzat@gmail.com','password','2024-06-18 07:47:24',NULL,'1'), ('2','Jana','Omar','swaploco@gmail.com','12345678','2024-06-18 08:00:40',NULL,'1'), ('3','Jack','Bosch','Sameh@leaderschools.com','fslhggi@1234','2024-06-18 08:01:21',NULL,'1'), ('4','Hana','Omar','Sameh21@leaderschools.com','fslhggi@1234','2024-06-19 05:53:49',NULL,'1');
