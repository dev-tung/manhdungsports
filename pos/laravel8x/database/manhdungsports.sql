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

 Date: 07/07/2025 11:53:51
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
) ENGINE = InnoDB AUTO_INCREMENT = 62 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

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
INSERT INTO `customer` VALUES (43, 'Trường Phương', 4, NULL, NULL, NULL);
INSERT INTO `customer` VALUES (44, 'A Thanh', 6, NULL, NULL, NULL);
INSERT INTO `customer` VALUES (45, 'A Nhân', 6, NULL, NULL, NULL);
INSERT INTO `customer` VALUES (46, 'Vũ Hiếu', 3, NULL, NULL, NULL);
INSERT INTO `customer` VALUES (47, 'Trung 77 đỏ', 9, NULL, NULL, NULL);
INSERT INTO `customer` VALUES (48, 'A Thăng', 3, NULL, NULL, NULL);
INSERT INTO `customer` VALUES (49, 'Long a Thăng', 3, NULL, NULL, NULL);
INSERT INTO `customer` VALUES (50, 'A Nghị', 5, NULL, NULL, NULL);
INSERT INTO `customer` VALUES (51, 'A Trung', 5, NULL, NULL, NULL);
INSERT INTO `customer` VALUES (52, 'A Phú Dương', 5, NULL, NULL, NULL);
INSERT INTO `customer` VALUES (53, 'Doanh Nguyen Mobile', 1, NULL, NULL, NULL);
INSERT INTO `customer` VALUES (54, 'A Thuỳ', 5, NULL, NULL, NULL);
INSERT INTO `customer` VALUES (55, 'Q Anh', 7, NULL, NULL, NULL);
INSERT INTO `customer` VALUES (56, 'Hoàng Hùng', 1, NULL, NULL, 'Nhà cô Khoa');
INSERT INTO `customer` VALUES (57, 'Hoàng Xuân Thắng', 15, NULL, NULL, NULL);
INSERT INTO `customer` VALUES (58, 'A Sang BĐS', 12, NULL, NULL, 'Bạn a Công');
INSERT INTO `customer` VALUES (59, 'Lê Văn Hào', 8, NULL, NULL, NULL);
INSERT INTO `customer` VALUES (60, 'A Bảo Nam', 16, NULL, NULL, 'Chủ sân Nghĩa Trụ');
INSERT INTO `customer` VALUES (61, 'A Công', 12, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for customergroup
-- ----------------------------
DROP TABLE IF EXISTS `customergroup`;
CREATE TABLE `customergroup`  (
  `customergroup_id` int(11) NOT NULL AUTO_INCREMENT,
  `customergroup_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `customergroup_description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`customergroup_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

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
INSERT INTO `customergroup` VALUES (15, 'Bạn chị Hoàng Tùng', NULL);
INSERT INTO `customergroup` VALUES (16, 'Nghĩa Trụ', NULL);

-- ----------------------------
-- Table structure for expense
-- ----------------------------
DROP TABLE IF EXISTS `expense`;
CREATE TABLE `expense`  (
  `expense_id` int(11) NOT NULL AUTO_INCREMENT,
  `expense_description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `expense_ispayment` tinyint(1) NULL DEFAULT NULL,
  `expense_money` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `expense_created_at` datetime(0) NULL DEFAULT NULL,
  `expense_updated_at` datetime(0) NULL DEFAULT NULL,
  `expensetype_id` int(11) NULL DEFAULT NULL,
  `expense_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`expense_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 57 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of expense
-- ----------------------------
INSERT INTO `expense` VALUES (56, 'Bán Vợt cầu lông Lining Aeronaut 6000I', 1, '127273', '2025-07-07 03:22:08', '2025-07-07 03:32:24', 1, '[Cuộn] Yonex Nanogy 98 - Trắng');

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
) ENGINE = InnoDB AUTO_INCREMENT = 208 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

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
INSERT INTO `product` VALUES (141, 'Vợt cầu lông Yonex Astrox 77 Play', '699300', '1000000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20');
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
INSERT INTO `product` VALUES (160, 'Vợt Cầu Lông Kumpoo K520 Pro - Đen', '300000', '550000', NULL, '0', NULL, 'Cái', NULL, NULL, NULL, '20');
INSERT INTO `product` VALUES (161, 'Vợt cầu lông Fleet Professional 6000 IV', '1733000', '2100000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL);
INSERT INTO `product` VALUES (162, 'Vợt Cầu Lông Fleet Jupiter', '770000', '1400000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL);
INSERT INTO `product` VALUES (163, 'Vợt Cầu Lông Victor Brave Sword 12', '2800000', '3200000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL);
INSERT INTO `product` VALUES (164, 'Vợt Cầu Lông Victor TK-F Ultra', '3100000', '3400000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL);
INSERT INTO `product` VALUES (165, 'Vợt cầu lông Lining Calibar 300B', '1125000', '1600000', NULL, '0', NULL, 'Cái', NULL, NULL, NULL, '20');
INSERT INTO `product` VALUES (166, 'Vợt Cầu Lông Lining Calibar 600', '1885091', '2700000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, NULL);
INSERT INTO `product` VALUES (167, 'Quấn cán vợt cầu lông VS', '7000', '10000', NULL, '100', 'upload/product/1751601685.png', 'Cái', NULL, NULL, NULL, '23');
INSERT INTO `product` VALUES (168, 'Tất cầu lông trắng 22-25', '27000', '50000', NULL, '10', NULL, 'Đôi', NULL, NULL, NULL, '30');
INSERT INTO `product` VALUES (169, 'Vợt cầu lông Yonex Arcsaber 7 Tour', '1610000', '2250000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20');
INSERT INTO `product` VALUES (170, 'Hộp cầu Thành Công 77', '283000', '293000', NULL, '100', 'upload/product/1751601641.png', 'Hộp', NULL, NULL, NULL, '25');
INSERT INTO `product` VALUES (171, 'Vợt Cầu Lông Lining Calibar 600B', '1885091', '2550000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20');
INSERT INTO `product` VALUES (172, 'Vợt cầu lông Lining Windstorm 79S', '913091', '1450000', NULL, '4', NULL, 'Cái', NULL, NULL, NULL, '20');
INSERT INTO `product` VALUES (173, 'Vợt cầu lông Lining Windstorm 79H', '913091', '1450000', NULL, '2', NULL, 'Cái', NULL, NULL, NULL, '20');
INSERT INTO `product` VALUES (174, 'Vợt cầu lông Lining Tectonic 7C', '1968349', '2950000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20');
INSERT INTO `product` VALUES (175, 'Vợt cầu lông Lining Tectonic 3', '942545', '1450000', NULL, '2', NULL, 'Cái', NULL, NULL, NULL, '20');
INSERT INTO `product` VALUES (176, 'Vợt cầu lông Lining Axforce Cannon - trắng', '687000', '900000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20');
INSERT INTO `product` VALUES (177, 'Vợt Cầu Lông Lining Windstorm 72S', '1683819', '1900000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20');
INSERT INTO `product` VALUES (178, 'Vợt cầu lông Lining Aeronaut 4000C', '1415782', '1750000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20');
INSERT INTO `product` VALUES (179, 'Vợt Cầu Lông Lining Axforce 100', '3243927', '4200000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20');
INSERT INTO `product` VALUES (180, 'Vợt cầu lông Lining Calibar 300C', '942545', '1400000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20');
INSERT INTO `product` VALUES (181, 'Hộp cầu basao pro 2', '215000', '225000', NULL, '10', 'upload/product/1751601479.png', 'Hộp', NULL, NULL, NULL, '25');
INSERT INTO `product` VALUES (182, 'Vợt cầu lông Lining Axforce Cannon - Đen', '687000', '900000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20');
INSERT INTO `product` VALUES (183, 'Vợt Cầu Lông Lining Tectonic 1', '632281', '800000', NULL, '2', NULL, 'Cái', NULL, NULL, NULL, '20');
INSERT INTO `product` VALUES (184, 'Vợt cầu lông Lining Aeronaut 6000C', '1469000', '1900000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20');
INSERT INTO `product` VALUES (185, 'Vợt Cầu Lông Lining 3D Calibar 001C', '754036', '1150000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20');
INSERT INTO `product` VALUES (186, 'Vợt Cầu Lông Lining Halbertec 2000', '790000', '1149000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20');
INSERT INTO `product` VALUES (187, 'Vợt Cầu Lông Lining Axforce 10 - Trắng', '559636', '850000', NULL, '2', NULL, 'Cái', NULL, NULL, NULL, '20');
INSERT INTO `product` VALUES (188, 'Vợt Cầu Lông Lining Axforce Cannon Pro - Đỏ', '1336364', '1800000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20');
INSERT INTO `product` VALUES (189, 'Vợt Cầu Lông Lining Halbertec Motor', '791000', '1000000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20');
INSERT INTO `product` VALUES (196, 'Giày Cầu Lông Lining AYTS020 - SIZE 41', '642291', '1000000', NULL, '1', 'upload/product/1751595626.png', 'Đôi', NULL, NULL, NULL, '21');
INSERT INTO `product` VALUES (197, 'Vợt hàn Cao Xuân Quang', '100000', '150000', NULL, '1', NULL, 'Lần', NULL, NULL, NULL, '31');
INSERT INTO `product` VALUES (198, 'Dán đế giày Cao Xuân Quang', '200000', '250000', NULL, '1', NULL, 'Đôi', NULL, NULL, NULL, '32');
INSERT INTO `product` VALUES (199, 'Giày Cầu Lông Lining AYTS020 - SIZE 42', '642291', '1000000', NULL, '1', 'upload/product/1751595620.png', 'Đôi', NULL, NULL, NULL, '21');
INSERT INTO `product` VALUES (200, 'Vợt cầu lông IXE Godwar', '250000', '440000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20');
INSERT INTO `product` VALUES (201, 'Quả cầu lông ba sao prox', '24000', '25000', NULL, '1', NULL, 'Quả', NULL, NULL, NULL, '25');
INSERT INTO `product` VALUES (202, 'Vợt cầu lông Lining Aeronaut 6000I', '1490946', '1900000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20');
INSERT INTO `product` VALUES (203, 'Quấn cán yonex 1 in 1', '28000', '40000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '22');
INSERT INTO `product` VALUES (204, 'Vợt cầu lông yonex Fake loại 1', '250000', '500000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20');
INSERT INTO `product` VALUES (205, 'Hộp cầu Lining', '0', '260000', 'Khuyến mại', '1', NULL, 'Hộp', NULL, NULL, NULL, '33');
INSERT INTO `product` VALUES (206, 'Thùng cầu thành công 77', '14190000', '14650000', NULL, '1', NULL, 'Thùng', NULL, NULL, NULL, '34');
INSERT INTO `product` VALUES (207, 'Giày cầu lông 65z4 size 44', '2500000', '2650000', NULL, '1', NULL, '1', NULL, NULL, NULL, '21');

-- ----------------------------
-- Table structure for productorder
-- ----------------------------
DROP TABLE IF EXISTS `productorder`;
CREATE TABLE `productorder`  (
  `productorder_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NULL DEFAULT NULL,
  `productorder_description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `product_id` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `productorder_status` tinyint(1) UNSIGNED ZEROFILL NULL DEFAULT NULL,
  `productorder_timereturn` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `productorder_ispayment` int(11) NULL DEFAULT NULL,
  `productorder_discount` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `productorder_quantity` int(11) NULL DEFAULT NULL,
  `productorder_revenue` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `productorder_profit` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `productorder_created_at` datetime(0) NULL DEFAULT NULL,
  `productorder_updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`productorder_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 59 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of productorder
-- ----------------------------
INSERT INTO `productorder` VALUES (17, 19, NULL, '15', 1, 'chiều 26/6', 0, NULL, 1, NULL, NULL, '2025-06-23 03:09:36', '2025-06-26 03:07:44');
INSERT INTO `productorder` VALUES (18, 20, NULL, '25', 2, 'chiều 25/6', 0, NULL, 1, NULL, NULL, '2025-06-23 03:09:36', '2025-06-26 03:07:41');
INSERT INTO `productorder` VALUES (19, 21, NULL, '21', 0, 'chiều 26/6', 1, NULL, 1, NULL, NULL, '2025-06-23 03:09:36', '2025-06-26 03:08:44');
INSERT INTO `productorder` VALUES (20, 8, NULL, '13', 1, 'chiều 26/6', 0, '15000', 1, NULL, NULL, '2025-06-23 03:09:36', '2025-06-26 03:08:11');
INSERT INTO `productorder` VALUES (21, 8, NULL, '4', 0, 'chờ xác nhận', 0, NULL, 1, NULL, NULL, '2025-06-26 03:09:36', '2025-06-26 03:10:14');
INSERT INTO `productorder` VALUES (31, 19, NULL, NULL, NULL, 'Trực tiếp', 0, NULL, NULL, NULL, NULL, '2025-07-03 08:26:57', '2025-07-03 08:26:57');
INSERT INTO `productorder` VALUES (32, 29, NULL, NULL, NULL, 'Trực tiếp', 0, NULL, NULL, NULL, NULL, '2025-07-03 08:27:31', '2025-07-03 08:27:31');
INSERT INTO `productorder` VALUES (33, 19, NULL, NULL, NULL, 'Trực tiếp', 0, NULL, NULL, NULL, NULL, '2025-07-03 08:28:36', '2025-07-03 08:28:36');
INSERT INTO `productorder` VALUES (34, 19, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, '2025-07-03 08:31:54', '2025-07-03 08:31:54');
INSERT INTO `productorder` VALUES (35, 19, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, '2025-07-03 08:32:17', '2025-07-03 08:32:17');
INSERT INTO `productorder` VALUES (36, 19, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, '2025-07-03 08:33:40', '2025-07-03 08:33:40');
INSERT INTO `productorder` VALUES (38, 14, NULL, '196', 2, NULL, 0, NULL, 1, '1000000', '357709', '2025-07-04 01:42:07', '2025-07-05 10:31:59');
INSERT INTO `productorder` VALUES (39, 55, 'Vợt Lining', '197', 3, NULL, 0, NULL, 1, '150000', '50000', '2025-07-04 01:54:04', '2025-07-04 04:18:18');
INSERT INTO `productorder` VALUES (40, 56, '1 Victor đỏ, 1 Arus cam', '198', 1, NULL, 0, NULL, 2, '500000', '100000', '2025-07-04 02:14:51', '2025-07-04 02:16:32');
INSERT INTO `productorder` VALUES (41, 1, NULL, '181', 2, NULL, 1, NULL, 1, '225000', '10000', '2025-07-04 02:55:09', '2025-07-04 02:55:09');
INSERT INTO `productorder` VALUES (42, 57, NULL, '200', 2, NULL, 1, NULL, 1, '440000', '190000', '2025-07-04 03:29:54', '2025-07-05 08:48:31');
INSERT INTO `productorder` VALUES (43, 8, 'Arc 11 pro', '197', 0, NULL, 0, NULL, 1, '150000', '50000', '2025-07-04 04:16:38', '2025-07-04 04:16:38');
INSERT INTO `productorder` VALUES (44, 1, NULL, '201', 2, NULL, 1, NULL, 1, '25000', '1000', '2025-07-04 09:36:11', '2025-07-04 09:36:11');
INSERT INTO `productorder` VALUES (45, 58, NULL, '202', 1, NULL, 0, NULL, 1, '1900000', '409054', '2025-07-07 04:44:46', '2025-07-06 09:46:18');
INSERT INTO `productorder` VALUES (46, 14, NULL, '203', 1, NULL, 0, NULL, 5, '200000', '60000', '2025-07-05 08:55:09', '2025-07-05 08:55:09');
INSERT INTO `productorder` VALUES (47, 1, NULL, '204', 2, NULL, 1, NULL, 1, '500000', '250000', '2025-07-05 09:13:32', '2025-07-05 09:13:32');
INSERT INTO `productorder` VALUES (48, 1, NULL, '205', 2, NULL, 1, NULL, 1, '260000', '260000', '2025-07-05 09:24:20', '2025-07-05 09:24:20');
INSERT INTO `productorder` VALUES (49, 1, NULL, '181', 2, NULL, 1, NULL, 1, '225000', '10000', '2025-07-05 09:55:29', '2025-07-05 09:55:29');
INSERT INTO `productorder` VALUES (50, 1, NULL, '167', 2, NULL, 1, NULL, 1, '10000', '3000', '2025-07-05 09:55:52', '2025-07-05 09:55:52');
INSERT INTO `productorder` VALUES (51, 37, NULL, '170', 1, NULL, 0, NULL, 5, '1465000', '50000', '2025-07-05 09:57:01', '2025-07-05 09:57:01');
INSERT INTO `productorder` VALUES (52, 60, NULL, '206', 1, NULL, 0, '150000', 1, '14500000', '310000', '2025-07-05 10:37:48', '2025-07-05 10:38:05');
INSERT INTO `productorder` VALUES (53, 13, NULL, '207', 2, NULL, 1, '-18686', 1, '2668686', '168686', '2025-07-06 09:48:31', '2025-07-07 04:42:54');
INSERT INTO `productorder` VALUES (54, 61, NULL, '167', 2, NULL, 1, NULL, 2, '20000', '6000', '2025-07-06 10:28:32', '2025-07-06 10:28:32');
INSERT INTO `productorder` VALUES (58, 8, NULL, '198', 3, NULL, 0, NULL, 1, '250000', '50000', '2025-07-07 04:44:46', '2025-07-07 04:44:46');

-- ----------------------------
-- Table structure for productype
-- ----------------------------
DROP TABLE IF EXISTS `productype`;
CREATE TABLE `productype`  (
  `productype_id` int(11) NOT NULL AUTO_INCREMENT,
  `productype_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `productype_parent_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`productype_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 35 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

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
INSERT INTO `productype` VALUES (31, 'Vợt hàn', NULL);
INSERT INTO `productype` VALUES (32, 'Dán đế giày', NULL);
INSERT INTO `productype` VALUES (33, 'Hộp cầu lông', NULL);
INSERT INTO `productype` VALUES (34, 'Thùng cầu', NULL);

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
) ENGINE = InnoDB AUTO_INCREMENT = 2771 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

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
INSERT INTO `string` VALUES (10, 'Yonex BG 66 Ultimax', '', '2800000', '170000', '1', '5', '1');
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
INSERT INTO `string` VALUES (2770, 'Cước của khách', NULL, '0', '50000', '2', '0', NULL);

-- ----------------------------
-- Table structure for stringorder
-- ----------------------------
DROP TABLE IF EXISTS `stringorder`;
CREATE TABLE `stringorder`  (
  `stringorder_id` int(11) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `stringorder_description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `stringorder_kg` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `stringorder_status` int(255) NULL DEFAULT NULL,
  `stringorder_timereturn` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `stringorder_ispayment` int(11) NULL DEFAULT NULL,
  `stringorder_discount` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '0',
  `stringorder_gen` int(11) UNSIGNED ZEROFILL NOT NULL,
  `stringorder_created_at` datetime(0) NULL DEFAULT NULL,
  `stringorder_updated_at` datetime(0) NULL DEFAULT NULL,
  `stringorder_is_welding` int(1) UNSIGNED ZEROFILL NULL DEFAULT NULL,
  `customer_id` int(11) NULL DEFAULT NULL,
  `string_id` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `welding_id` int(11) NULL DEFAULT NULL,
  `stringorder_revenue` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `stringorder_profit` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`stringorder_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 73 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of stringorder
-- ----------------------------
INSERT INTO `stringorder` VALUES (00000000017, 'Trả thừa 20k', '10.5', 3, 'Trực tiếp', 1, '0', 00000000000, '2025-06-26 03:09:36', '2025-07-03 02:31:45', 0, 19, '15', NULL, '180000', '61818.181818182');
INSERT INTO `stringorder` VALUES (00000000018, NULL, '11', 3, 'Trực tiếp', 1, '0', 00000000000, '2025-06-26 03:09:36', '2025-07-03 02:31:48', 0, 20, '25', NULL, '140000', '56818.181818182');
INSERT INTO `stringorder` VALUES (00000000019, NULL, '10.6', 3, 'Trực tiếp', 1, '0', 00000000000, '2025-06-26 03:09:36', '2025-07-03 02:35:01', 0, 21, '21', NULL, '150000', '54545.454545455');
INSERT INTO `stringorder` VALUES (00000000020, NULL, '11.5', 3, 'Trực tiếp', 1, '15000', 00000000000, '2025-06-26 03:09:36', '2025-07-03 02:35:05', 0, 8, '13', NULL, '165000', '37727.272727273');
INSERT INTO `stringorder` VALUES (00000000021, NULL, '10', 3, 'Trực tiếp', 1, '0', 00000000000, '2025-06-26 03:09:36', '2025-07-03 02:31:41', 0, 8, '6', NULL, '140000', '28636.363636364');
INSERT INTO `stringorder` VALUES (00000000022, NULL, '10.8', 3, 'Trực tiếp', 1, '0', 00000000000, '2025-06-26 04:17:37', '2025-07-03 02:31:38', 0, 41, '15', NULL, '180000', '61818.181818182');
INSERT INTO `stringorder` VALUES (00000000023, NULL, '11.8', 3, 'Trực tiếp', 1, '0', 00000000000, '2025-06-26 08:06:10', '2025-07-03 02:31:33', 0, 36, '19', NULL, '140000', '58181.818181818');
INSERT INTO `stringorder` VALUES (00000000024, 'Thanh toán thêm tiền hàn', '11', 3, 'Trực tiếp', 1, '0', 00000000000, '2025-06-29 08:47:20', '2025-07-03 02:31:11', 0, 43, '4', NULL, '140000', '28636.363636364');
INSERT INTO `stringorder` VALUES (00000000025, NULL, '10', 3, 'Trực tiếp', 1, '15000', 00000000000, '2025-06-27 04:02:44', '2025-07-03 02:31:29', 0, 8, '11', NULL, '155000', '27727.272727273');
INSERT INTO `stringorder` VALUES (00000000026, NULL, '10.5', 3, 'Trực tiếp', 1, '0', 00000000000, '2025-06-27 04:04:01', '2025-07-03 02:31:26', 0, 44, '15', NULL, '180000', '61818.181818182');
INSERT INTO `stringorder` VALUES (00000000027, NULL, '10.2', 3, 'Trực tiếp', 1, '0', 00000000000, '2025-06-30 09:52:14', '2025-07-03 02:30:53', 0, 45, '4', NULL, '140000', '28636.363636364');
INSERT INTO `stringorder` VALUES (00000000028, NULL, '11', 3, 'Trực tiếp', 1, '0', 00000000000, '2025-06-27 09:02:59', '2025-07-03 02:31:22', 0, 9, '4', NULL, '140000', '28636.363636364');
INSERT INTO `stringorder` VALUES (00000000029, NULL, NULL, 0, 'Trực tiếp', 0, '0', 00000000000, '2025-06-27 09:19:20', '2025-07-03 02:31:22', 0, 2, NULL, NULL, NULL, NULL);
INSERT INTO `stringorder` VALUES (00000000030, NULL, NULL, 0, 'Trực tiếp', 0, '0', 00000000000, '2025-06-27 09:19:52', '2025-07-03 02:31:22', 0, 2, NULL, NULL, NULL, NULL);
INSERT INTO `stringorder` VALUES (00000000031, NULL, NULL, 0, 'Trực tiếp', 0, '0', 00000000000, '2025-06-27 09:20:01', '2025-07-03 02:31:22', 0, 2, NULL, NULL, NULL, NULL);
INSERT INTO `stringorder` VALUES (00000000032, NULL, NULL, 0, 'Trực tiếp', 0, '0', 00000000000, '2025-06-27 09:20:34', '2025-07-03 02:31:22', 0, 2, NULL, NULL, NULL, NULL);
INSERT INTO `stringorder` VALUES (00000000033, NULL, NULL, 0, 'Trực tiếp', 0, '0', 00000000000, '2025-06-27 09:20:38', '2025-07-03 02:31:22', 0, 2, NULL, NULL, NULL, NULL);
INSERT INTO `stringorder` VALUES (00000000035, NULL, '11', 3, 'Trực tiếp', 1, NULL, 00000000000, '2025-06-29 08:38:55', '2025-07-03 02:31:19', 0, 1, '25', NULL, '140000', '56818.181818182');
INSERT INTO `stringorder` VALUES (00000000036, NULL, '10.2', 3, 'Trực tiếp', 1, NULL, 00000000000, '2025-06-29 08:41:15', '2025-07-03 02:31:14', 0, 1, '25', NULL, '140000', '56818.181818182');
INSERT INTO `stringorder` VALUES (00000000037, 'Thanh toán thêm tiền hàn - gửi Long anh Thăng', '11', 3, 'Trực tiếp', 1, NULL, 00000000000, '2025-06-30 09:51:52', '2025-07-03 02:31:00', 0, 46, '13', NULL, '180000', '52727.272727273');
INSERT INTO `stringorder` VALUES (00000000038, '77 đỏ', '10.8', 3, 'Trực tiếp', 1, NULL, 00000000001, '2025-06-30 09:51:20', '2025-07-03 02:31:08', 0, 47, '19', NULL, '220000', '138181.81818182');
INSERT INTO `stringorder` VALUES (00000000039, NULL, '11.5', 3, 'Trực tiếp', 1, NULL, 00000000000, '2025-06-30 09:58:09', '2025-07-03 03:02:30', 0, 2, '16', NULL, '180000', '52727.272727273');
INSERT INTO `stringorder` VALUES (00000000040, NULL, '11.5', 3, 'Trực tiếp', 1, NULL, 00000000000, '2025-06-30 09:58:04', '2025-07-03 03:02:22', 0, 2, '16', NULL, '180000', '52727.272727273');
INSERT INTO `stringorder` VALUES (00000000041, NULL, '10.5', 3, 'Trực tiếp', 1, NULL, 00000000000, '2025-06-30 10:07:02', '2025-07-03 03:02:42', 0, 48, '13', NULL, '180000', '52727.272727273');
INSERT INTO `stringorder` VALUES (00000000042, NULL, '10.5', 3, 'Trực tiếp', 1, NULL, 00000000000, '2025-06-30 10:08:39', '2025-07-03 03:02:51', 0, 49, '10', NULL, '170000', '42727.272727273');
INSERT INTO `stringorder` VALUES (00000000043, NULL, '10.8', 3, 'Trực tiếp', 1, NULL, 00000000000, '2025-07-01 03:33:08', '2025-07-03 02:59:50', 0, 40, '11', NULL, '170000', '42727.272727273');
INSERT INTO `stringorder` VALUES (00000000044, NULL, '11', 3, 'Trực tiếp', 1, '15000', 00000000000, '2025-07-01 09:08:37', '2025-07-03 03:02:13', 0, 8, '15', NULL, '165000', '46818.181818182');
INSERT INTO `stringorder` VALUES (00000000045, NULL, '10', 3, 'Trực tiếp', 1, '15000', 00000000000, '2025-07-01 09:13:27', '2025-07-03 03:03:01', 0, 8, '16', NULL, '165000', '37727.272727273');
INSERT INTO `stringorder` VALUES (00000000046, NULL, '11', 3, 'Trực tiếp', 0, NULL, 00000000000, '2025-07-02 02:43:39', '2025-07-04 01:31:12', 0, 14, '9', NULL, '170000', '42727.272727273');
INSERT INTO `stringorder` VALUES (00000000047, NULL, '11', 2, 'Trực tiếp', 0, NULL, 00000000000, '2025-07-02 02:44:27', '2025-07-03 03:03:18', 0, 50, '9', NULL, '170000', '42727.272727273');
INSERT INTO `stringorder` VALUES (00000000048, NULL, '10.4', 2, 'Trực tiếp', 0, NULL, 00000000000, '2025-07-02 02:45:30', '2025-07-03 03:03:30', 0, 50, '14', NULL, '180000', '61818.181818182');
INSERT INTO `stringorder` VALUES (00000000049, NULL, NULL, 0, 'Trực tiếp', 0, NULL, 00000000000, '2025-07-02 04:45:10', '2025-07-02 04:45:10', 0, 19, NULL, NULL, NULL, NULL);
INSERT INTO `stringorder` VALUES (00000000051, NULL, '11.5', 3, 'Trực tiếp', 1, NULL, 00000000000, '2025-07-03 00:52:38', '2025-07-04 01:30:49', 0, 26, '11', NULL, '170000', '42727.272727273');
INSERT INTO `stringorder` VALUES (00000000052, NULL, '10.5', 3, 'Trực tiếp', 1, NULL, 00000000000, '2025-07-03 00:54:03', '2025-07-04 01:31:00', 0, 52, '4', NULL, '140000', '28636.363636364');
INSERT INTO `stringorder` VALUES (00000000057, 'Ngày 6/3', '11', 3, 'Trực tiếp', 1, '15000', 00000000000, '2025-07-03 03:07:49', '2025-07-04 01:31:28', 0, 8, '9', NULL, '155000', '27727.272727273');
INSERT INTO `stringorder` VALUES (00000000058, NULL, '11.2', 3, 'Trực tiếp', 1, NULL, 00000000000, '2025-07-03 03:09:56', '2025-07-04 01:31:38', 0, 53, '21', NULL, '150000', '54545.454545455');
INSERT INTO `stringorder` VALUES (00000000059, NULL, '10.6', 3, 'Trực tiếp', 1, NULL, 00000000000, '2025-07-03 08:57:45', '2025-07-03 08:57:45', 0, 20, '21', NULL, '150000', '54545.454545455');
INSERT INTO `stringorder` VALUES (00000000060, NULL, '10.5', 3, 'Trực tiếp', 1, '15000', 00000000000, '2025-07-03 10:31:21', '2025-07-04 01:30:33', 0, 8, '4', NULL, '125000', '13636.363636364');
INSERT INTO `stringorder` VALUES (00000000061, NULL, '11', 3, 'Trực tiếp', 1, '15000', 00000000000, '2025-07-03 10:31:38', '2025-07-04 01:30:28', 0, 8, '9', NULL, '155000', '27727.272727273');
INSERT INTO `stringorder` VALUES (00000000062, NULL, '10.8', 3, 'Trực tiếp', 1, NULL, 00000000000, '2025-07-04 01:32:28', '2025-07-05 08:55:59', 0, 13, '9', NULL, '170000', '42727.272727273');
INSERT INTO `stringorder` VALUES (00000000063, NULL, '10.8', 3, 'Trực tiếp', 1, NULL, 00000000000, '2025-07-04 01:33:26', '2025-07-05 10:31:30', 0, 54, '11', NULL, '170000', '42727.272727273');
INSERT INTO `stringorder` VALUES (00000000064, NULL, '11', 3, 'Trực tiếp', 1, '15000', 00000000000, '2025-07-05 08:57:54', '2025-07-06 03:29:28', 0, 8, '10', NULL, '155000', '27727.272727273');
INSERT INTO `stringorder` VALUES (00000000065, 'Căng 4 nút', '11', 3, 'Trực tiếp', 1, NULL, 00000000000, '2025-07-05 09:42:13', '2025-07-05 11:31:24', 0, 59, '14', NULL, '180000', '61818.181818182');
INSERT INTO `stringorder` VALUES (00000000066, NULL, '11', 3, 'Trực tiếp', 1, NULL, 00000000001, '2025-07-05 10:31:15', '2025-07-05 11:31:32', 0, 37, '14', NULL, '260000', '141818.18181818');
INSERT INTO `stringorder` VALUES (00000000067, NULL, '10.5', 1, 'Trực tiếp', 0, NULL, 00000000000, '2025-07-06 03:14:59', '2025-07-06 03:14:59', 0, 1, '21', NULL, '150000', '54545.454545455');
INSERT INTO `stringorder` VALUES (00000000068, NULL, '11', 0, 'Trực tiếp', 1, '15000', 00000000000, '2025-07-06 03:29:19', '2025-07-06 03:29:19', 0, 8, '9', NULL, '155000', '27727.272727273');
INSERT INTO `stringorder` VALUES (00000000069, NULL, '10.6', 0, 'Trực tiếp', 0, NULL, 00000000000, '2025-07-06 10:25:17', '2025-07-06 10:25:17', 0, 1, '2770', NULL, '50000', '50000');
INSERT INTO `stringorder` VALUES (00000000070, NULL, '10.6', 1, 'Trực tiếp', 0, NULL, 00000000000, '2025-07-06 10:26:27', '2025-07-06 10:26:27', 0, 7, '9', NULL, '170000', '42727.272727273');
INSERT INTO `stringorder` VALUES (00000000071, NULL, '11', 0, 'Trực tiếp', 0, '15000', 00000000001, '2025-07-07 02:59:17', '2025-07-07 02:59:27', 0, 8, '12', NULL, '245000', '120000');
INSERT INTO `stringorder` VALUES (00000000072, NULL, '11', 0, 'Trực tiếp', 0, '15000', 00000000000, '2025-07-07 02:59:59', '2025-07-07 02:59:59', 0, 8, '11', NULL, '155000', '27727.272727273');

SET FOREIGN_KEY_CHECKS = 1;
