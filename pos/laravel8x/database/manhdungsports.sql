/*
 Navicat Premium Data Transfer

 Source Server         : Localhost
 Source Server Type    : MySQL
 Source Server Version : 100411
 Source Host           : localhost:3306
 Source Schema         : manhdungsports

 Target Server Type    : MySQL
 Target Server Version : 100411
 File Encoding         : 65001

 Date: 23/06/2025 11:37:49
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories`  (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `category_parent_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`category_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 23 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES (20, 'Vợt cầu lông', NULL);
INSERT INTO `categories` VALUES (21, 'Giày cầu lông', NULL);
INSERT INTO `categories` VALUES (22, 'Quần cầu lông', NULL);

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products`  (
  `product_id` bigint(255) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `product_price_input` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `product_price_output` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `product_description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `product_quantity` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `product_thumbnail` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `product_unit` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `product_created_at` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `product_updated_at` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `product_source` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `product_category` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `category_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`product_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 167 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES (127, 'Vợt cầu lông Yonex Astrox 88D Game', '1345000', '1800000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL, NULL, 20);
INSERT INTO `products` VALUES (128, 'Vợt cầu lông Yonex Arcsaber 0 Ability', '375000', '550000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL, NULL, 20);
INSERT INTO `products` VALUES (129, 'Vợt cầu lông Yonex Astrox 100 Game', '1500000', '2000000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL, NULL, 20);
INSERT INTO `products` VALUES (130, 'Vợt cầu lông Yonex Astrox 100 tour', '2420000', '2900000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL, NULL, 20);
INSERT INTO `products` VALUES (131, 'Vợt cầu lông Yonex Astrox 88 Play 2024', '880000', '1200000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL, NULL, 20);
INSERT INTO `products` VALUES (132, 'Vợt cầu lông Yonex Astrox 99 Game', '1440000', '1950000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL, NULL, 20);
INSERT INTO `products` VALUES (133, 'Vợt cầu lông Yonex Astrox 100ZZ Kurenai', '5500000', '6000000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL, NULL, 20);
INSERT INTO `products` VALUES (134, 'Vợt Cầu Lông Yonex Nanoflare 1000 Game', '1440000', '1950000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL, NULL, 20);
INSERT INTO `products` VALUES (136, 'Vợt Cầu Lông Yonex Nanoflare 1000 Tour', '2290000', '2900000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL, NULL, 20);
INSERT INTO `products` VALUES (137, 'Vợt cầu lông Yonex Astrox Nextage', '1180000', '1380000', NULL, '4', NULL, 'Cái', NULL, NULL, NULL, NULL, NULL, 20);
INSERT INTO `products` VALUES (138, 'Vợt cầu lông Yonex Duora Z-Strike', '4150000', '4500000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL, NULL, 20);
INSERT INTO `products` VALUES (139, 'Vợt Cầu Lông Yonex Astrox 88D Tour', '2200000', '2500000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL, NULL, 20);
INSERT INTO `products` VALUES (140, 'Vợt cầu lông Yonex Astrox 77 Pro', '3900000', '4350000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL, NULL, 20);
INSERT INTO `products` VALUES (141, 'Vợt cầu lông Yonex Astrox 77 Play', '699300', '1000000', NULL, '2', NULL, 'Cái', NULL, NULL, NULL, NULL, NULL, 20);
INSERT INTO `products` VALUES (142, 'Vợt cầu lông Yonex Astrox 77 Tour', '2010000', '2200000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL, NULL, 20);
INSERT INTO `products` VALUES (143, 'Vợt cầu lông Yonex Astrox 88S Game', '1345000', '1700000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL, NULL, 20);
INSERT INTO `products` VALUES (144, 'Vợt cầu lông Yonex Astrox 88S Tour', '2200000', '2500000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL, NULL, 20);
INSERT INTO `products` VALUES (145, 'Vợt cầu lông Yonex Astrox 88D Pro', '4100000', '4600000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL, NULL, 20);
INSERT INTO `products` VALUES (146, 'Vợt cầu lông Yonex Nanoflare 800 Tour', '2150000', '2700000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL, NULL, 20);
INSERT INTO `products` VALUES (147, 'Vợt cầu lông Yonex Nanoflare 800 Pro', '4500000', '4900000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL, NULL, 20);
INSERT INTO `products` VALUES (150, 'Vợt cầu lông Yonex Arcsaber 7 Pro', '3700000', '4300000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL, NULL, 20);
INSERT INTO `products` VALUES (151, 'Vợt cầu lông Yonex Arcsaber 11 Play', '817000', '1250000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL, NULL, 20);
INSERT INTO `products` VALUES (152, 'Vợt cầu lông Yonex Nanoflare 800 Play', '888300', '1200000', NULL, '2', NULL, 'Cái', NULL, NULL, NULL, NULL, NULL, 20);
INSERT INTO `products` VALUES (153, 'Vợt cầu lông Yonex Astrox 99 Play', '1000000', '1450000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL, NULL, 20);
INSERT INTO `products` VALUES (154, 'Vợt cầu lông Yonex Nanoflare 700 Play', '937300', '1200000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL, NULL, 20);
INSERT INTO `products` VALUES (155, 'Vợt Cầu Lông VS Titan 6', '370000', '650000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL, NULL, 20);
INSERT INTO `products` VALUES (156, 'Vợt Cầu Lông VS Titan 7', '370000', '650000', NULL, '2', NULL, 'Cái', NULL, NULL, NULL, NULL, NULL, 20);
INSERT INTO `products` VALUES (157, 'Vợt Cầu Lông VS Titan 8', '370000', '650000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL, NULL, 20);
INSERT INTO `products` VALUES (158, 'Vợt Cầu Lông VS Titan 9', '370000', '700000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL, NULL, 20);
INSERT INTO `products` VALUES (159, 'Vợt Cầu Lông VS Titan 1000', '500000', '800000', NULL, '2', NULL, 'Cái', NULL, NULL, NULL, NULL, NULL, 20);
INSERT INTO `products` VALUES (160, 'Vợt Cầu Lông Kumpoo K520 Pro', '300000', '550000', NULL, '2', NULL, 'Cái', NULL, NULL, NULL, NULL, NULL, 20);
INSERT INTO `products` VALUES (161, 'Vợt cầu lông Fleet Professional 6000 IV', '1733000', '2100000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL, NULL, 20);
INSERT INTO `products` VALUES (162, 'Vợt Cầu Lông Fleet Jupiter', '770000', '1400000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL, NULL, 20);
INSERT INTO `products` VALUES (163, 'Vợt Cầu Lông Victor Brave Sword 12', '2800000', '3200000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL, NULL, 20);
INSERT INTO `products` VALUES (164, 'Vợt Cầu Lông Victor TK-F Ultra', '3100000', '3400000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL, NULL, 20);
INSERT INTO `products` VALUES (165, 'Vợt cầu lông Lining Calibar 300B', '1125000', '1600000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL, NULL, 20);
INSERT INTO `products` VALUES (166, 'Vợt Cầu Lông Lining Calibar 600', '1885091', '2700000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL, NULL, 20);

SET FOREIGN_KEY_CHECKS = 1;
