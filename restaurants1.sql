/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : restaurants1

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-03-27 00:40:13
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for comments
-- ----------------------------
DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of comments
-- ----------------------------
INSERT INTO `comments` VALUES ('1', '1', '4', 'this is a new comment', '2017-03-26 21:07:58', '2017-03-26 21:07:58');
INSERT INTO `comments` VALUES ('2', '1', '6', 'test comment', '2017-03-26 21:25:31', '2017-03-26 21:25:31');

-- ----------------------------
-- Table structure for cuisines
-- ----------------------------
DROP TABLE IF EXISTS `cuisines`;
CREATE TABLE `cuisines` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cuisine_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of cuisines
-- ----------------------------
INSERT INTO `cuisines` VALUES ('1', 'English cuisine', '2017-03-26 19:24:51', '2017-03-26 19:24:51');
INSERT INTO `cuisines` VALUES ('2', 'Ukrainian cuisine', '2017-03-26 19:25:03', '2017-03-26 19:25:03');
INSERT INTO `cuisines` VALUES ('3', 'Norwegian cuisine', '2017-03-26 19:25:09', '2017-03-26 19:25:09');
INSERT INTO `cuisines` VALUES ('4', 'Polish cuisine', '2017-03-26 19:25:17', '2017-03-26 19:25:17');

-- ----------------------------
-- Table structure for dishes
-- ----------------------------
DROP TABLE IF EXISTS `dishes`;
CREATE TABLE `dishes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dish_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of dishes
-- ----------------------------
INSERT INTO `dishes` VALUES ('2', 'Biryani', 'images/VbfWj15ueOJhQlgjsWCcuItHjdFow35pLc5vzgsQ.jpeg', 'Main or side dish. Mixed rice dish, optional spices, optional vegetables, meats or seafood. Can be served with plain yogurt.', '2017-03-26 19:28:14', '2017-03-26 19:28:14');
INSERT INTO `dishes` VALUES ('4', 'Chaat', 'images/Y4zBnMUXQgc8SvXRzoRhidAoOw0wEuNfuOkjEu2F.jpeg', 'Street food usually containing a potato patty fried in oil, topped with sweet yogurt, and other sauces, spices', '2017-03-26 19:28:51', '2017-03-26 19:28:51');
INSERT INTO `dishes` VALUES ('6', 'Bangers and mash', 'images/ghaecWvpRRanqG7eKSndcp1jyDGWbQ4WQf1wER0d.jpeg', 'Mashed potatoes and sausages, sometimes served with onion gravy or fried onions. Note that while sausages may date to the time given, potatoes are from the Americas and were not introduced to Europe until the 16th century.', '2017-03-26 19:29:49', '2017-03-26 19:29:49');
INSERT INTO `dishes` VALUES ('9', 'Steak pies', 'images/R1bAqqxch3ZrQdemOe5PoDCKDaADRHWg97groDqq.jpeg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2017-03-26 21:26:24', '2017-03-26 21:26:24');
INSERT INTO `dishes` VALUES ('10', 'Butter chicken', 'images/6aOZz2jIevKJJ2b0rV5ODLP1JTlJcxFfoE7BwLMB.jpeg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2017-03-26 21:26:57', '2017-03-26 21:26:57');
INSERT INTO `dishes` VALUES ('11', 'Biryani', 'images/Dc0E4DVk8k3JPwaP2dQacamMV5UmpXApVVkEBitx.jpeg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2017-03-26 21:27:17', '2017-03-26 21:27:17');
INSERT INTO `dishes` VALUES ('12', 'Full English breakfast', 'images/nGMUrMuHjfsBj6e04QydYr4CmRtmid565yWm55VT.jpeg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2017-03-26 21:27:34', '2017-03-26 21:27:34');

-- ----------------------------
-- Table structure for images
-- ----------------------------
DROP TABLE IF EXISTS `images`;
CREATE TABLE `images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `restaurantId` int(10) unsigned NOT NULL,
  `fileName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `images_restaurantid_foreign` (`restaurantId`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of images
-- ----------------------------
INSERT INTO `images` VALUES ('1', '1', 'images/fkNI96At1rr3GXY65bBs8AmMvtlU8NyXdJagpLSh.jpeg');
INSERT INTO `images` VALUES ('2', '1', 'images/LgGSdoNjGB4RpnEi79DsJxlPq4XSLGQ49CWMpGbT.jpeg');
INSERT INTO `images` VALUES ('11', '5', 'images/kSqeUCePLnakhN69LhluFIZDchy2RzrxcZbFUf0g.jpeg');
INSERT INTO `images` VALUES ('10', '5', 'images/NMCY8P2iq8FSApuyBaYe2GEl7YNhELKnpEHAZxLh.jpeg');
INSERT INTO `images` VALUES ('9', '4', 'images/cUuTBl7CAtRXc46Wj0StrDSgvZQWChsWNuni2O9r.jpeg');
INSERT INTO `images` VALUES ('8', '4', 'images/RzhBwSPv5jY9vkGMjFRpxILSHQKUAYEPM5ujYUK3.jpeg');
INSERT INTO `images` VALUES ('12', '6', 'images/NtgOJEEL6wxX36qrbK0yVAoPtP0OsDHRonx6uKbP.jpeg');
INSERT INTO `images` VALUES ('13', '6', 'images/OHN0799JgFcVAHQgFR6slrLlGGDhpoamY6nDNj8F.jpeg');
INSERT INTO `images` VALUES ('14', '6', 'images/Yr5eQfSzA5ZVwKiDtJpE2bCSXdP9AlTtYoba9ewf.jpeg');
INSERT INTO `images` VALUES ('15', '6', 'images/EyOljEsVfNGfYr7A8lDeGbl15hGv9xoj3j4NkXeS.jpeg');
INSERT INTO `images` VALUES ('16', '6', 'images/Hw9BZWgJZUZ8JfpeepQTy5LXOZHdrLoOXogaoHZB.jpeg');
INSERT INTO `images` VALUES ('17', '6', 'images/JKmOxxeBEBk9BzQaC5ittJOGt4c74iK2ILzaUlb6.jpeg');
INSERT INTO `images` VALUES ('18', '6', 'images/Yoehc5NzTohBhoRxpMa9r9knIA3fycGFwrMJj0Nd.jpeg');
INSERT INTO `images` VALUES ('19', '6', 'images/sVo0QTiTT7GLm6OsteU9sIvl4h50XC04k1bCBao2.jpeg');
INSERT INTO `images` VALUES ('20', '7', 'images/Xpp1iBvztnEKGoWaPRMMiD6hWioow5S5CiHtlhom.jpeg');
INSERT INTO `images` VALUES ('21', '7', 'images/nghnvXOO2jKbMygND8B5JIwu5brRAH5ATgxBu9KU.jpeg');
INSERT INTO `images` VALUES ('22', '8', 'images/EdkkWT7ns06hVR1d7aJWgF0X6M5TLni4LIhsBUYk.jpeg');
INSERT INTO `images` VALUES ('23', '8', 'images/KkBWEWTj0jGFu4t4SjQJFBuMlm6l34tw5f1lb5q0.jpeg');
INSERT INTO `images` VALUES ('24', '8', 'images/555oPfg5memNOKR5WkhTS6nVDmi1CaKB9ptcVXAX.jpeg');

-- ----------------------------
-- Table structure for menus
-- ----------------------------
DROP TABLE IF EXISTS `menus`;
CREATE TABLE `menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `restaurant_id` int(11) NOT NULL,
  `dish_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of menus
-- ----------------------------
INSERT INTO `menus` VALUES ('2', '1', '2', '2017-03-26 19:33:20', '2017-03-26 19:33:20');
INSERT INTO `menus` VALUES ('9', '4', '2', '2017-03-26 20:14:38', '2017-03-26 20:14:38');
INSERT INTO `menus` VALUES ('11', '4', '4', '2017-03-26 20:14:38', '2017-03-26 20:14:38');
INSERT INTO `menus` VALUES ('12', '4', '6', '2017-03-26 20:14:38', '2017-03-26 20:14:38');
INSERT INTO `menus` VALUES ('13', '5', '2', '2017-03-26 21:23:49', '2017-03-26 21:23:49');
INSERT INTO `menus` VALUES ('14', '5', '4', '2017-03-26 21:23:49', '2017-03-26 21:23:49');
INSERT INTO `menus` VALUES ('15', '5', '6', '2017-03-26 21:23:49', '2017-03-26 21:23:49');
INSERT INTO `menus` VALUES ('16', '6', '2', '2017-03-26 21:24:54', '2017-03-26 21:24:54');
INSERT INTO `menus` VALUES ('17', '6', '4', '2017-03-26 21:24:54', '2017-03-26 21:24:54');
INSERT INTO `menus` VALUES ('18', '6', '6', '2017-03-26 21:24:54', '2017-03-26 21:24:54');
INSERT INTO `menus` VALUES ('19', '7', '2', '2017-03-26 21:29:14', '2017-03-26 21:29:14');
INSERT INTO `menus` VALUES ('20', '7', '4', '2017-03-26 21:29:14', '2017-03-26 21:29:14');
INSERT INTO `menus` VALUES ('21', '7', '6', '2017-03-26 21:29:14', '2017-03-26 21:29:14');
INSERT INTO `menus` VALUES ('22', '7', '11', '2017-03-26 21:29:14', '2017-03-26 21:29:14');
INSERT INTO `menus` VALUES ('23', '8', '2', '2017-03-26 21:37:42', '2017-03-26 21:37:42');
INSERT INTO `menus` VALUES ('24', '8', '4', '2017-03-26 21:37:42', '2017-03-26 21:37:42');
INSERT INTO `menus` VALUES ('25', '8', '6', '2017-03-26 21:37:42', '2017-03-26 21:37:42');
INSERT INTO `menus` VALUES ('26', '8', '10', '2017-03-26 21:37:42', '2017-03-26 21:37:42');
INSERT INTO `menus` VALUES ('27', '8', '11', '2017-03-26 21:37:42', '2017-03-26 21:37:42');
INSERT INTO `menus` VALUES ('28', '8', '12', '2017-03-26 21:37:42', '2017-03-26 21:37:42');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=88 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('79', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('80', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('81', '2017_03_07_211438_create_restaurants_table', '1');
INSERT INTO `migrations` VALUES ('82', '2017_03_07_213327_create_cuisines_table', '1');
INSERT INTO `migrations` VALUES ('83', '2017_03_07_215909_create_comments_table', '1');
INSERT INTO `migrations` VALUES ('84', '2017_03_18_183001_create_images_table', '1');
INSERT INTO `migrations` VALUES ('85', '2017_03_24_124524_create_points_table', '1');
INSERT INTO `migrations` VALUES ('86', '2017_03_26_135055_create_dishes_table', '1');
INSERT INTO `migrations` VALUES ('87', '2017_03_26_191644_create_menus_table', '1');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for points
-- ----------------------------
DROP TABLE IF EXISTS `points`;
CREATE TABLE `points` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `restaurant_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `point` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of points
-- ----------------------------
INSERT INTO `points` VALUES ('1', '1', '1', '4', '2017-03-26 20:01:07', '2017-03-26 20:01:07');
INSERT INTO `points` VALUES ('2', '3', '2', '4', '2017-03-26 20:11:36', '2017-03-26 20:11:36');
INSERT INTO `points` VALUES ('3', '4', '1', '4', '2017-03-26 21:07:41', '2017-03-26 21:07:41');
INSERT INTO `points` VALUES ('4', '5', '1', '4', '2017-03-26 21:24:13', '2017-03-26 21:24:13');
INSERT INTO `points` VALUES ('5', '6', '1', '5', '2017-03-26 21:25:17', '2017-03-26 21:25:17');
INSERT INTO `points` VALUES ('6', '7', '1', '2', '2017-03-26 21:29:27', '2017-03-26 21:29:27');
INSERT INTO `points` VALUES ('7', '1', '2', '1', '2017-03-26 21:34:39', '2017-03-26 21:34:39');
INSERT INTO `points` VALUES ('8', '4', '2', '3', '2017-03-26 21:34:57', '2017-03-26 21:34:57');

-- ----------------------------
-- Table structure for restaurants
-- ----------------------------
DROP TABLE IF EXISTS `restaurants`;
CREATE TABLE `restaurants` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `restaurant_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cuisine_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `restaurant_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `restaurant_seats` int(11) NOT NULL,
  `restaurant_owner` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` decimal(8,2) NOT NULL DEFAULT '0.00',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of restaurants
-- ----------------------------
INSERT INTO `restaurants` VALUES ('1', 'Bindi Indian Restaurant', '3', '1', 'Головна вулиця, 119, Чернівці', '25', 'Morpheus Pills', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2.50', '2017-03-26 19:33:19', '2017-03-26 21:34:39');
INSERT INTO `restaurants` VALUES ('4', 'BEST Family', '2', '1', 'Головна вулиця, 119, Чернівці', '25', 'Morpheus Pills', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '3.50', '2017-03-26 20:14:37', '2017-03-26 21:34:57');
INSERT INTO `restaurants` VALUES ('5', 'Маэстро', '1', '1', 'Головна вулиця, 119, Чернівці', '50', 'Aarav Aarush', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '4.00', '2017-03-26 21:23:49', '2017-03-26 21:24:13');
INSERT INTO `restaurants` VALUES ('6', 'Restaurant with many images', '3', '1', 'Головна вулиця, 119, Чернівці', '25', 'Morpheus Pills', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '5.00', '2017-03-26 21:24:54', '2017-03-26 21:25:17');
INSERT INTO `restaurants` VALUES ('7', 'The best restaurant', '2', '1', 'Заводська вулиця, 31, Чернівці', '25', 'Aarav Aarush', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2.00', '2017-03-26 21:29:14', '2017-03-26 21:29:27');
INSERT INTO `restaurants` VALUES ('8', 'Happy restaurant', '4', '1', 'Головна вулиця, 119, Чернівці', '20', 'Morpheus Pills', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '0.00', '2017-03-26 21:37:42', '2017-03-26 21:37:42');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'John Doe', 'john@example.com', '$2y$10$oak/JvfKD0TMXLSDRPF7u.pBcCm/J3CiLGKloOO2M8Y9IttJ0IUDa', '85NxuwHzG2b8wc24m416WGmpNgbwN4CKQKGYTxkBXpM5dOeojgeEZgLnCaFB', '2017-03-26 19:24:38', '2017-03-26 19:24:38');
INSERT INTO `users` VALUES ('2', 'Jane Doe', 'jane@example.com', '$2y$10$YDYNB5O8mJpo8boBZk8z.O7F0/re.PQ4NFBKZeHoGCX4Vuk8jMwLS', 'xpJvRRlaW8gKCPzJKzueh7c6gD8EnXngxTfQQGiugz26lamagFbA49BxpavN', '2017-03-26 20:09:05', '2017-03-26 20:09:05');
