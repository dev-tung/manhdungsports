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

 Date: 26/06/2025 17:13:39
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for customer
-- ----------------------------
DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer`  (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `customergroup_id` int(11) NULL DEFAULT NULL,
  `customer_phone` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `customer_address` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `customer_description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`customer_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 43 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of customer
-- ----------------------------
INSERT INTO `customer` VALUES (1, 'Khách vãng lai', 1, NULL, NULL, NULL);
INSERT INTO `customer` VALUES (2, 'A Tuấn Dược', 6, NULL, NULL, NULL);
INSERT INTO `customer` VALUES (6, 'A Tuấn Nhung', 12, NULL, NULL, NULL);
INSERT INTO `customer` VALUES (7, 'Chị Nhung Tuấn', 12, NULL, NULL, NULL);
INSERT INTO `customer` VALUES (8, 'Khoa', 8, NULL, NULL, 'Chủ sân Edison');
INSERT INTO `customer` VALUES (9, 'Thầy Hải', 13, NULL, NULL, NULL);
INSERT INTO `customer` VALUES (10, 'Hoàng Long', 13, NULL, NULL, NULL);
INSERT INTO `customer` VALUES (11, 'Đỗ Quân', 1, NULL, NULL, NULL);
INSERT INTO `customer` VALUES (12, 'A Ngọc', 5, NULL, NULL, 'Chủ tịch Công Viên Ánh Sáng');
INSERT INTO `customer` VALUES (13, 'A Diện', 5, NULL, NULL, NULL);
INSERT INTO `customer` VALUES (14, 'A Hoàng Mobile', 5, NULL, NULL, NULL);
INSERT INTO `customer` VALUES (16, 'A Chu Tiến', 12, NULL, NULL, NULL);
INSERT INTO `customer` VALUES (18, 'Cô Nhẫn', 12, NULL, NULL, NULL);
INSERT INTO `customer` VALUES (19, 'Chị Liên', 6, NULL, NULL, NULL);
INSERT INTO `customer` VALUES (20, 'A Nghĩa vui tính', 12, NULL, NULL, NULL);
INSERT INTO `customer` VALUES (21, 'Chú Văn', 6, NULL, NULL, NULL);
INSERT INTO `customer` VALUES (22, 'Đông Đô', 9, NULL, NULL, NULL);
INSERT INTO `customer` VALUES (23, 'A Lời', 2, NULL, NULL, NULL);
INSERT INTO `customer` VALUES (24, 'Tuấn Anh', 5, NULL, NULL, NULL);
INSERT INTO `customer` VALUES (25, 'A Bắc', 3, NULL, NULL, NULL);
INSERT INTO `customer` VALUES (26, 'A Trung', 5, NULL, NULL, NULL);
INSERT INTO `customer` VALUES (27, 'A Bảo', 5, NULL, NULL, NULL);
INSERT INTO `customer` VALUES (28, 'Nam Cikiu', 5, NULL, NULL, NULL);
INSERT INTO `customer` VALUES (29, 'Cô Khoa', 7, NULL, NULL, NULL);
INSERT INTO `customer` VALUES (30, 'Cô Ngọc', 7, NULL, NULL, NULL);
INSERT INTO `customer` VALUES (31, 'A Hiển CA', 7, NULL, NULL, NULL);
INSERT INTO `customer` VALUES (32, 'A Toàn CA', 7, NULL, NULL, NULL);
INSERT INTO `customer` VALUES (33, 'Hậu', 7, NULL, NULL, NULL);
INSERT INTO `customer` VALUES (34, 'A Hải', 12, NULL, NULL, NULL);
INSERT INTO `customer` VALUES (35, 'Cao Tuấn Anh', 12, NULL, NULL, NULL);
INSERT INTO `customer` VALUES (36, 'Cường Thuốc Nam', 8, NULL, NULL, NULL);
INSERT INTO `customer` VALUES (37, 'Dũng', 14, NULL, NULL, NULL);
INSERT INTO `customer` VALUES (38, 'Huy', 14, NULL, NULL, NULL);
INSERT INTO `customer` VALUES (39, 'A Quang Trung Mobile', 9, NULL, NULL, NULL);
INSERT INTO `customer` VALUES (40, 'A Hiện', 12, NULL, NULL, NULL);
INSERT INTO `customer` VALUES (41, 'A Thành Tóc Bạc', 6, NULL, NULL, NULL);
INSERT INTO `customer` VALUES (42, 'Ngọc', 8, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for customergroup
-- ----------------------------
DROP TABLE IF EXISTS `customergroup`;
CREATE TABLE `customergroup`  (
  `customergroup_id` int(11) NOT NULL AUTO_INCREMENT,
  `customergroup_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `customergroup_description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`customergroup_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of customergroup
-- ----------------------------
INSERT INTO `customergroup` VALUES (1, 'Vãng Lai', NULL);
INSERT INTO `customergroup` VALUES (2, 'Cửu Cao', NULL);
INSERT INTO `customergroup` VALUES (3, 'Vinhome Ocean Park 1', NULL);
INSERT INTO `customergroup` VALUES (4, 'Vinhome Ocean Park 2-3', NULL);
INSERT INTO `customergroup` VALUES (5, 'Công Viên Ánh Sáng', NULL);
INSERT INTO `customergroup` VALUES (6, 'Bệnh Viện Văn Giang', NULL);
INSERT INTO `customergroup` VALUES (7, 'Long Hưng - Sân Bên', NULL);
INSERT INTO `customergroup` VALUES (8, 'Ecopark', NULL);
INSERT INTO `customergroup` VALUES (9, 'Thị Trấn', NULL);
INSERT INTO `customergroup` VALUES (10, 'Dương Quảng Hàm', NULL);
INSERT INTO `customergroup` VALUES (11, 'Lại Ốc', NULL);
INSERT INTO `customergroup` VALUES (12, 'Long Hưng - Ve Sầu', NULL);
INSERT INTO `customergroup` VALUES (13, 'Long Hưng - Buổi Sáng', NULL);
INSERT INTO `customergroup` VALUES (14, 'Đông Dư', NULL);

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product`  (
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
  `productype_id` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`product_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 182 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES (127, 'Vợt cầu lông Yonex Astrox 88D Game', '1345000', '1800000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL);
INSERT INTO `product` VALUES (128, 'Vợt cầu lông Yonex Arcsaber 0 Ability', '375000', '550000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL);
INSERT INTO `product` VALUES (129, 'Vợt cầu lông Yonex Astrox 100 Game', '1500000', '2000000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL);
INSERT INTO `product` VALUES (130, 'Vợt cầu lông Yonex Astrox 100 tour', '2420000', '2900000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL);
INSERT INTO `product` VALUES (131, 'Vợt cầu lông Yonex Astrox 88 Play 2024', '880000', '1200000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL);
INSERT INTO `product` VALUES (132, 'Vợt cầu lông Yonex Astrox 99 Game', '1440000', '1950000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL);
INSERT INTO `product` VALUES (133, 'Vợt cầu lông Yonex Astrox 100ZZ Kurenai', '5500000', '6000000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL);
INSERT INTO `product` VALUES (134, 'Vợt Cầu Lông Yonex Nanoflare 1000 Game', '1440000', '1950000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL);
INSERT INTO `product` VALUES (136, 'Vợt Cầu Lông Yonex Nanoflare 1000 Tour', '2290000', '2900000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL);
INSERT INTO `product` VALUES (137, 'Vợt cầu lông Yonex Astrox Nextage', '1180000', '1380000', NULL, '4', NULL, 'Cái', NULL, NULL, NULL, NULL);
INSERT INTO `product` VALUES (138, 'Vợt cầu lông Yonex Duora Z-Strike', '4150000', '4500000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL);
INSERT INTO `product` VALUES (139, 'Vợt Cầu Lông Yonex Astrox 88D Tour', '2200000', '2500000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL);
INSERT INTO `product` VALUES (140, 'Vợt cầu lông Yonex Astrox 77 Pro', '3900000', '4350000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL);
INSERT INTO `product` VALUES (141, 'Vợt cầu lông Yonex Astrox 77 Play', '699300', '1000000', NULL, '2', NULL, 'Cái', NULL, NULL, NULL, NULL);
INSERT INTO `product` VALUES (142, 'Vợt cầu lông Yonex Astrox 77 Tour', '2010000', '2200000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL);
INSERT INTO `product` VALUES (143, 'Vợt cầu lông Yonex Astrox 88S Game', '1345000', '1700000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL);
INSERT INTO `product` VALUES (144, 'Vợt cầu lông Yonex Astrox 88S Tour', '2200000', '2500000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL);
INSERT INTO `product` VALUES (145, 'Vợt cầu lông Yonex Astrox 88D Pro', '4100000', '4600000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL);
INSERT INTO `product` VALUES (146, 'Vợt cầu lông Yonex Nanoflare 800 Tour', '2150000', '2700000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL);
INSERT INTO `product` VALUES (147, 'Vợt cầu lông Yonex Nanoflare 800 Pro', '4500000', '4900000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL);
INSERT INTO `product` VALUES (150, 'Vợt cầu lông Yonex Arcsaber 7 Pro', '3700000', '4300000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL);
INSERT INTO `product` VALUES (151, 'Vợt cầu lông Yonex Arcsaber 11 Play', '817000', '1250000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL);
INSERT INTO `product` VALUES (152, 'Vợt cầu lông Yonex Nanoflare 800 Play', '888300', '1200000', NULL, '2', NULL, 'Cái', NULL, NULL, NULL, NULL);
INSERT INTO `product` VALUES (153, 'Vợt cầu lông Yonex Astrox 99 Play', '1000000', '1450000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL);
INSERT INTO `product` VALUES (154, 'Vợt cầu lông Yonex Nanoflare 700 Play', '937300', '1200000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL);
INSERT INTO `product` VALUES (155, 'Vợt Cầu Lông VS Titan 6', '370000', '650000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL);
INSERT INTO `product` VALUES (156, 'Vợt Cầu Lông VS Titan 7', '370000', '650000', NULL, '2', NULL, 'Cái', NULL, NULL, NULL, NULL);
INSERT INTO `product` VALUES (157, 'Vợt Cầu Lông VS Titan 8', '370000', '650000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL);
INSERT INTO `product` VALUES (158, 'Vợt Cầu Lông VS Titan 9', '370000', '700000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL);
INSERT INTO `product` VALUES (159, 'Vợt Cầu Lông VS Titan 1000', '500000', '800000', NULL, '2', NULL, 'Cái', NULL, NULL, NULL, NULL);
INSERT INTO `product` VALUES (160, 'Vợt Cầu Lông Kumpoo K520 Pro - Đen', '300000', '550000', NULL, '2', NULL, 'Cái', NULL, NULL, NULL, '20');
INSERT INTO `product` VALUES (161, 'Vợt cầu lông Fleet Professional 6000 IV', '1733000', '2100000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL);
INSERT INTO `product` VALUES (162, 'Vợt Cầu Lông Fleet Jupiter', '770000', '1400000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL);
INSERT INTO `product` VALUES (163, 'Vợt Cầu Lông Victor Brave Sword 12', '2800000', '3200000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL);
INSERT INTO `product` VALUES (164, 'Vợt Cầu Lông Victor TK-F Ultra', '3100000', '3400000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL);
INSERT INTO `product` VALUES (165, 'Vợt cầu lông Lining Calibar 300B', '1125000', '1600000', NULL, '0', NULL, 'Cái', NULL, NULL, NULL, '20');
INSERT INTO `product` VALUES (166, 'Vợt Cầu Lông Lining Calibar 600', '1885091', '2700000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL);
INSERT INTO `product` VALUES (167, 'Quấn cán vợt cầu lông VS', '7000', '10000', NULL, '100', NULL, 'Cái', NULL, NULL, NULL, '23');
INSERT INTO `product` VALUES (168, 'Tất cầu lông trắng 22-25', '27000', '50000', NULL, '10', NULL, 'Đôi', NULL, NULL, NULL, '30');
INSERT INTO `product` VALUES (169, 'Vợt cầu lông Yonex Arcsaber 7 Tour', '1610000', '2250000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20');
INSERT INTO `product` VALUES (170, 'Hộp cầu Thành Công 77', '283000', '293000', NULL, '100', NULL, 'Hộp', NULL, NULL, NULL, '25');
INSERT INTO `product` VALUES (171, 'Vợt Cầu Lông Lining Calibar 600B', '1885091', '2550000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20');
INSERT INTO `product` VALUES (172, 'Vợt cầu lông Lining Windstorm 79S', '913091', '1450000', NULL, '4', NULL, 'Cái', NULL, NULL, NULL, '20');
INSERT INTO `product` VALUES (173, 'Vợt cầu lông Lining Windstorm 79H', '913091', '1450000', NULL, '2', NULL, 'Cái', NULL, NULL, NULL, '20');
INSERT INTO `product` VALUES (174, 'Vợt cầu lông Lining Tectonic 7C', '1968349', '2950000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20');
INSERT INTO `product` VALUES (175, 'Vợt cầu lông Lining Tectonic 3', '942545', '1450000', NULL, '2', NULL, 'Cái', NULL, NULL, NULL, '20');
INSERT INTO `product` VALUES (176, 'Vợt cầu lông Lining Axforce Cannon', '687000', '900000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20');
INSERT INTO `product` VALUES (177, 'Vợt Cầu Lông Lining Windstorm 72S', '1683819', '1900000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20');
INSERT INTO `product` VALUES (178, 'Vợt cầu lông Lining Aeronaut 4000C', '1415782', '1750000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20');
INSERT INTO `product` VALUES (179, 'Vợt Cầu Lông Lining Axforce 100', '3243927', '4200000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20');
INSERT INTO `product` VALUES (180, 'Vợt cầu lông Lining Calibar 300C', '942545', '1400000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20');
INSERT INTO `product` VALUES (181, 'Hộp cầu basao pro 2', '215000', '225000', NULL, '10', NULL, 'Hộp', NULL, NULL, NULL, '25');

-- ----------------------------
-- Table structure for productorder
-- ----------------------------
DROP TABLE IF EXISTS `productorder`;
CREATE TABLE `productorder`  (
  `productorder_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NULL DEFAULT NULL,
  `productorder_description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `product_id` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `productorder_status` int(255) NULL DEFAULT NULL,
  `productorder_timereturn` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `productorder_ispayment` int(11) NULL DEFAULT NULL,
  `productorder_discount` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `productorder_quantity` int(11) NULL DEFAULT NULL,
  `productorder_revenue` int(11) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`productorder_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 30 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of productorder
-- ----------------------------
INSERT INTO `productorder` VALUES (17, 19, NULL, '15', 1, 'chiều 26/6', 0, NULL, 1, NULL, '2025-06-23 03:09:36', '2025-06-26 03:07:44');
INSERT INTO `productorder` VALUES (18, 20, NULL, '25', 2, 'chiều 25/6', 0, NULL, 1, NULL, '2025-06-23 03:09:36', '2025-06-26 03:07:41');
INSERT INTO `productorder` VALUES (19, 21, NULL, '21', 0, 'chiều 26/6', 1, NULL, 1, NULL, '2025-06-23 03:09:36', '2025-06-26 03:08:44');
INSERT INTO `productorder` VALUES (20, 8, NULL, '13', 1, 'chiều 26/6', 0, '15000', 1, NULL, '2025-06-23 03:09:36', '2025-06-26 03:08:11');
INSERT INTO `productorder` VALUES (21, 8, NULL, '4', 0, 'chờ xác nhận', 0, NULL, 1, NULL, '2025-06-26 03:09:36', '2025-06-26 03:10:14');
INSERT INTO `productorder` VALUES (23, 1, NULL, '167', NULL, 'trực tiếp', 1, NULL, 2, NULL, '2025-06-26 03:48:32', '2025-06-26 09:28:39');
INSERT INTO `productorder` VALUES (24, 20, NULL, '168', NULL, 'trực tiếp', 1, NULL, 1, NULL, '2025-06-26 04:16:08', '2025-06-26 10:06:16');
INSERT INTO `productorder` VALUES (25, 16, 'Nợ 1 triệu', '169', NULL, 'chiều 23/6', 0, '90000', 1, NULL, '2025-06-23 04:43:29', '2025-06-26 10:01:40');
INSERT INTO `productorder` VALUES (26, 42, '10 hộp', '170', NULL, 'trực tiếp', 1, '30000', 10, NULL, '2025-06-26 04:47:10', '2025-06-26 10:06:57');
INSERT INTO `productorder` VALUES (27, 36, 'Cước rz65 + Tặng quấn yonex', '141', NULL, 'trực tiếp', 1, '120000', 1, NULL, '2025-06-26 09:25:25', '2025-06-26 09:50:29');
INSERT INTO `productorder` VALUES (28, 1, '1 quả cầu + 2 cước 65', '160', NULL, 'trực tiếp', 1, '200000', 2, NULL, '2025-06-26 09:27:05', '2025-06-26 10:00:20');
INSERT INTO `productorder` VALUES (29, 1, NULL, '181', NULL, 'trực tiếp', 1, NULL, 1, NULL, '2025-06-26 09:36:42', NULL);

-- ----------------------------
-- Table structure for productype
-- ----------------------------
DROP TABLE IF EXISTS `productype`;
CREATE TABLE `productype`  (
  `productype_id` int(11) NOT NULL AUTO_INCREMENT,
  `productype_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `productype_parent_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`productype_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 31 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of productype
-- ----------------------------
INSERT INTO `productype` VALUES (20, 'Vợt cầu lông', NULL);
INSERT INTO `productype` VALUES (21, 'Giày cầu lông', NULL);
INSERT INTO `productype` VALUES (22, 'Quần cầu lông', NULL);
INSERT INTO `productype` VALUES (23, 'Quấn cán vợt cầu lông', NULL);
INSERT INTO `productype` VALUES (24, 'Quấn cốt vợt cầu lông', NULL);
INSERT INTO `productype` VALUES (25, 'Quả cầu lông', NULL);
INSERT INTO `productype` VALUES (26, 'Áo cầu lông', NULL);
INSERT INTO `productype` VALUES (27, 'Balo cầu lông', NULL);
INSERT INTO `productype` VALUES (28, 'Bao vợt cầu lông', NULL);
INSERT INTO `productype` VALUES (29, 'Phụ kiện cầu lông', NULL);
INSERT INTO `productype` VALUES (30, 'Tất cầu lông', NULL);

-- ----------------------------
-- Table structure for string
-- ----------------------------
DROP TABLE IF EXISTS `string`;
CREATE TABLE `string`  (
  `string_id` int(11) NOT NULL AUTO_INCREMENT,
  `string_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `string_description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `string_price_input` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `string_price_output` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `string_type` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `string_color` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `string_quantity` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`string_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2768 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of string
-- ----------------------------
INSERT INTO `string` VALUES (1, 'Yonex BG 5', NULL, '0', '130000', '2', '0', '3');
INSERT INTO `string` VALUES (2, 'Yonex BG 65', NULL, '100000', '140000', '2', '0', '2');
INSERT INTO `string` VALUES (3, 'Yonex BG 65', NULL, '1850000', '130000', '1', '6', '1');
INSERT INTO `string` VALUES (4, 'Yonex BG 65 Ti', 'JP', '2450000', '140000', '1', '1', '2');
INSERT INTO `string` VALUES (5, 'Yonex BG 65 Ti', '', '2450000', '140000', '1', '4', '1');
INSERT INTO `string` VALUES (6, 'Yonex BG 65 Ti', '', '2450000', '140000', '1', '7', '1');
INSERT INTO `string` VALUES (7, 'Yonex BG 66 Force', NULL, '151200', '190000', '2', '0', '1');
INSERT INTO `string` VALUES (8, 'Yonex BG 66 Ultimax', NULL, '133000', '180000', '2', '0', '1');
INSERT INTO `string` VALUES (9, 'Yonex BG 66 Ultimax', '', '2800000', '170000', '1', '1', '1');
INSERT INTO `string` VALUES (10, 'Yonex BG 66 Ultimax', '', '2800000', '170000', '1', '1', '1');
INSERT INTO `string` VALUES (11, 'Yonex BG 66 Ultimax', '', '2800000', '170000', '1', '4', '1');
INSERT INTO `string` VALUES (12, 'Yonex BG Exbolt 63', '', '2750000', '180000', '1', '1', '1');
INSERT INTO `string` VALUES (13, 'Yonex BG Exbolt 65', '', '2800000', '180000', '1', '6', '1');
INSERT INTO `string` VALUES (14, 'Yonex BG Exbolt 68', '', '2600000', '180000', '1', '5', '1');
INSERT INTO `string` VALUES (15, 'Yonex Nanogy 95', '', '2600000', '180000', '1', '4', '1');
INSERT INTO `string` VALUES (16, 'Yonex Nanogy 98', 'JP', '2800000', '180000', '1', '1', '1');
INSERT INTO `string` VALUES (17, 'Yonex BG 80 Power', '', '2850000', '180000', '1', '1', '1');
INSERT INTO `string` VALUES (18, 'Gosen Ryzonic 58', '', '2000000', '140000', '1', '4', '1');
INSERT INTO `string` VALUES (19, 'Gosen Ryzonic 65', '', '1800000', '140000', '1', '1', '1');
INSERT INTO `string` VALUES (20, 'Kizuna Z58', NULL, '155000', '190000', '2', '0', '2');
INSERT INTO `string` VALUES (21, 'Kizuna Z61S', '', '2100000', '150000', '1', '9', '1');
INSERT INTO `string` VALUES (22, 'Kizuna Z63', NULL, '155000', '190000', '2', '0', '0');
INSERT INTO `string` VALUES (23, 'Kizuna Z66', NULL, '155000', '190000', '2', '0', '1');
INSERT INTO `string` VALUES (24, 'Kizuna Z69', NULL, '0', '130000', '2', '0', '4');
INSERT INTO `string` VALUES (25, 'Kizuna Z69 Ti', NULL, '1830000', '140000', '1', '4', '1');
INSERT INTO `string` VALUES (26, 'Cước học sinh', NULL, '15000', '80000', '2', '0', '10');

-- ----------------------------
-- Table structure for stringorder
-- ----------------------------
DROP TABLE IF EXISTS `stringorder`;
CREATE TABLE `stringorder`  (
  `stringorder_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NULL DEFAULT NULL,
  `stringorder_description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `string_id` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `stringorder_kg` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `stringorder_status` int(255) NULL DEFAULT NULL,
  `stringorder_timereturn` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `stringorder_ispayment` int(11) NULL DEFAULT NULL,
  `stringorder_discount` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`stringorder_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 24 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of stringorder
-- ----------------------------
INSERT INTO `stringorder` VALUES (17, 19, NULL, '15', '10.5', 2, 'chiều 26/6', 0, NULL, NULL, '2025-06-26 09:22:53');
INSERT INTO `stringorder` VALUES (18, 20, NULL, '25', '11', 3, 'chiều 25/6', 1, NULL, NULL, '2025-06-26 09:23:54');
INSERT INTO `stringorder` VALUES (19, 21, NULL, '21', '10.6', 2, 'chiều 26/6', 1, NULL, NULL, '2025-06-26 09:23:02');
INSERT INTO `stringorder` VALUES (20, 8, NULL, '13', '11.5', 2, 'chiều 26/6', 0, '15000', NULL, '2025-06-26 09:23:10');
INSERT INTO `stringorder` VALUES (21, 8, NULL, '4', NULL, 0, 'chờ xác nhận', 0, NULL, '2025-06-26 03:09:36', '2025-06-26 09:22:30');
INSERT INTO `stringorder` VALUES (22, 41, NULL, '15', '10.8', 3, 'chiều 22/6', 0, NULL, '2025-06-26 04:17:37', '2025-06-26 09:24:04');
INSERT INTO `stringorder` VALUES (23, 36, NULL, '19', '11.8', 3, 'trực tiếp', 1, NULL, '2025-06-26 08:06:10', '2025-06-26 09:23:43');

SET FOREIGN_KEY_CHECKS = 1;
