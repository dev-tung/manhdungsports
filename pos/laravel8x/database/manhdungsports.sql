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

 Date: 16/07/2025 11:54:18
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
) ENGINE = InnoDB AUTO_INCREMENT = 68 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

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
INSERT INTO `customer` VALUES (62, 'Chú Biên', 6, NULL, NULL, NULL);
INSERT INTO `customer` VALUES (63, 'Vũ Hiếu', 5, NULL, NULL, NULL);
INSERT INTO `customer` VALUES (64, 'Tuấn Anh BĐS', 17, NULL, NULL, NULL);
INSERT INTO `customer` VALUES (65, 'A Huấn', 5, NULL, NULL, NULL);
INSERT INTO `customer` VALUES (66, 'A Tú', 18, NULL, NULL, NULL);
INSERT INTO `customer` VALUES (67, 'A Minh Nhật', 16, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for customergroup
-- ----------------------------
DROP TABLE IF EXISTS `customergroup`;
CREATE TABLE `customergroup`  (
  `customergroup_id` int(11) NOT NULL AUTO_INCREMENT,
  `customergroup_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `customergroup_description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`customergroup_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 19 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

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
INSERT INTO `customergroup` VALUES (17, 'Hoàn Long', NULL);
INSERT INTO `customergroup` VALUES (18, 'Kiêu Kị', NULL);

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
) ENGINE = InnoDB AUTO_INCREMENT = 85 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of expense
-- ----------------------------
INSERT INTO `expense` VALUES (60, NULL, 1, '100000', '2025-07-08 07:43:53', '2025-07-08 07:43:53', 5, 'Ăn trưa nhân viên');
INSERT INTO `expense` VALUES (61, NULL, 1, '125000', '2025-07-08 08:16:23', '2025-07-08 08:21:15', 7, 'Yonex BG Exbolt 65');
INSERT INTO `expense` VALUES (62, NULL, 1, '950000', '2025-07-08 13:51:05', '2025-07-08 13:51:05', 6, 'Thay màn hình điện thoại cho nhân viên');
INSERT INTO `expense` VALUES (63, NULL, 1, '31500', '2025-07-12 10:49:29', '2025-07-12 10:49:29', 1, 'Tặng tất kèm giày');
INSERT INTO `expense` VALUES (64, NULL, 1, '31000', '2025-07-12 11:01:15', '2025-07-12 11:01:21', 1, 'Tặng tất kèm giày');
INSERT INTO `expense` VALUES (65, NULL, 1, '30000', '2025-07-13 10:05:05', '2025-07-13 10:08:17', 8, 'Ánh Sáng');
INSERT INTO `expense` VALUES (66, NULL, 1, '160000', '2025-07-13 10:05:47', '2025-07-13 10:05:55', 5, 'Ăn trưa cho nhân viên');
INSERT INTO `expense` VALUES (67, NULL, 1, '100000', '2025-07-13 10:07:20', '2025-07-13 10:08:03', 8, 'Dương Xá');
INSERT INTO `expense` VALUES (68, NULL, 1, '100000', '2025-07-13 00:00:00', '2025-07-14 01:07:09', 8, 'Dương Xá');
INSERT INTO `expense` VALUES (69, NULL, 1, '180000', '2025-07-13 00:00:00', '2025-07-14 01:07:29', 5, 'Ăn tối');
INSERT INTO `expense` VALUES (71, NULL, 1, '60000', '2025-07-14 00:00:00', '2025-07-14 01:08:05', 8, 'Long Hưng buổi sáng');
INSERT INTO `expense` VALUES (73, NULL, 1, '374000', '2025-07-14 00:00:00', '2025-07-14 09:22:30', 5, 'Ăn trưa cho nhân viên');
INSERT INTO `expense` VALUES (80, NULL, 1, '80000', '2025-07-15 00:00:00', '2025-07-15 03:14:26', 8, 'Đánh cầu Ánh Sáng');
INSERT INTO `expense` VALUES (81, NULL, 1, '20000', '2025-07-15 00:00:00', '2025-07-15 03:14:58', 5, 'Chè đỗ đen');
INSERT INTO `expense` VALUES (82, NULL, 1, '80000', '2025-07-15 00:00:00', '2025-07-15 14:59:25', 5, 'Mua quần xịt');
INSERT INTO `expense` VALUES (83, NULL, 1, '120000', '2025-07-15 00:00:00', '2025-07-15 15:00:05', 5, 'mua đồ ăn tối');
INSERT INTO `expense` VALUES (84, NULL, 0, '55000', '2025-07-16 00:00:00', '2025-07-16 01:29:55', 8, 'Ánh Sáng');

-- ----------------------------
-- Table structure for invoice
-- ----------------------------
DROP TABLE IF EXISTS `invoice`;
CREATE TABLE `invoice`  (
  `invoice_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NULL DEFAULT NULL,
  `invoice_description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `product_id` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `invoice_status` tinyint(1) UNSIGNED ZEROFILL NULL DEFAULT NULL,
  `invoice_timereturn` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `invoice_ispayment` int(11) NULL DEFAULT NULL,
  `invoice_discount` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `invoice_quantity` int(11) NULL DEFAULT NULL,
  `invoice_revenue` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `invoice_profit` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `invoice_created_at` datetime(0) NULL DEFAULT NULL,
  `invoice_updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`invoice_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 161 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of invoice
-- ----------------------------
INSERT INTO `invoice` VALUES (38, 14, NULL, '196', 2, NULL, 1, NULL, 1, '1000000', '357709', '2025-07-04 01:42:07', '2025-07-08 01:53:33');
INSERT INTO `invoice` VALUES (39, 55, 'Vợt Lining', '197', 1, NULL, 0, NULL, 1, '150000', '50000', '2025-07-04 01:54:04', '2025-07-11 20:38:47');
INSERT INTO `invoice` VALUES (40, 56, '1 Victor đỏ, 1 Arus cam', '198', 2, NULL, 1, NULL, 2, '500000', '100000', '2025-07-04 02:14:51', '2025-07-13 03:26:43');
INSERT INTO `invoice` VALUES (41, 1, NULL, '181', 2, NULL, 1, NULL, 1, '225000', '10000', '2025-07-04 02:55:09', '2025-07-04 02:55:09');
INSERT INTO `invoice` VALUES (42, 57, NULL, '200', 2, NULL, 1, NULL, 1, '440000', '190000', '2025-07-04 03:29:54', '2025-07-05 08:48:31');
INSERT INTO `invoice` VALUES (43, 8, 'Arc 11 pro', '197', 0, NULL, 0, NULL, 1, '150000', '50000', '2025-07-04 04:16:38', '2025-07-04 04:16:38');
INSERT INTO `invoice` VALUES (44, 1, NULL, '201', 2, NULL, 1, NULL, 1, '25000', '1000', '2025-07-04 09:36:11', '2025-07-04 09:36:11');
INSERT INTO `invoice` VALUES (45, 58, NULL, '202', 2, NULL, 1, NULL, 1, '1900000', '409054', '2025-07-07 04:44:46', '2025-07-08 13:48:14');
INSERT INTO `invoice` VALUES (46, 14, NULL, '203', 2, NULL, 1, NULL, 5, '200000', '60000', '2025-07-05 08:55:09', '2025-07-08 01:53:22');
INSERT INTO `invoice` VALUES (47, 1, NULL, '204', 2, NULL, 1, NULL, 1, '500000', '250000', '2025-07-05 09:13:32', '2025-07-05 09:13:32');
INSERT INTO `invoice` VALUES (48, 1, NULL, '205', 2, NULL, 1, NULL, 1, '260000', '260000', '2025-07-05 09:24:20', '2025-07-05 09:24:20');
INSERT INTO `invoice` VALUES (49, 1, NULL, '181', 2, NULL, 1, NULL, 1, '225000', '10000', '2025-07-05 09:55:29', '2025-07-05 09:55:29');
INSERT INTO `invoice` VALUES (50, 1, NULL, '167', 2, NULL, 1, NULL, 1, '10000', '3000', '2025-07-05 09:55:52', '2025-07-05 09:55:52');
INSERT INTO `invoice` VALUES (51, 37, NULL, '170', 2, NULL, 1, NULL, 5, '1465000', '50000', '2025-07-05 09:57:01', '2025-07-08 01:43:11');
INSERT INTO `invoice` VALUES (52, 60, NULL, '206', 2, NULL, 1, '150000', 1, '14500000', '310000', '2025-07-05 10:37:48', '2025-07-08 01:42:50');
INSERT INTO `invoice` VALUES (53, 13, NULL, '207', 2, NULL, 1, '-18686', 1, '2668686', '168686', '2025-07-06 09:48:31', '2025-07-07 04:42:54');
INSERT INTO `invoice` VALUES (54, 61, NULL, '167', 2, NULL, 1, NULL, 2, '20000', '6000', '2025-07-06 10:28:32', '2025-07-06 10:28:32');
INSERT INTO `invoice` VALUES (58, 8, NULL, '198', 2, NULL, 1, NULL, 1, '250000', '50000', '2025-07-07 04:44:46', '2025-07-11 20:38:19');
INSERT INTO `invoice` VALUES (59, 1, NULL, '209', 2, NULL, 1, NULL, 1, '150000', '38000', '2025-07-07 13:21:09', '2025-07-07 13:21:09');
INSERT INTO `invoice` VALUES (60, 1, NULL, '208', 2, NULL, 1, NULL, 1, '120000', '45000', '2025-07-07 13:21:28', '2025-07-13 10:53:35');
INSERT INTO `invoice` VALUES (61, 48, NULL, '170', 2, NULL, 1, NULL, 20, '5860000', '200000', '2025-07-07 13:33:01', '2025-07-08 01:44:25');
INSERT INTO `invoice` VALUES (62, 62, 'lấy cho chú Biên', '178', 2, NULL, 0, NULL, 1, '1750000', '334218', '2025-07-07 14:14:20', '2025-07-10 05:11:20');
INSERT INTO `invoice` VALUES (64, 7, '10.5KG', '218', 2, NULL, 0, NULL, 1, '180000', '47000', '2025-07-08 06:58:34', '2025-07-08 07:10:55');
INSERT INTO `invoice` VALUES (65, 8, 'Astrox 88D', '223', 2, NULL, 1, '15000', 1, '165000', '37727', '2025-07-08 08:19:30', '2025-07-11 20:37:53');
INSERT INTO `invoice` VALUES (66, 42, NULL, '170', 2, NULL, 1, '30000', 10, '2900000', '70000', '2025-07-08 08:20:29', '2025-07-11 20:37:43');
INSERT INTO `invoice` VALUES (67, 1, '11.5 KG - Lining 4000C', '224', 2, NULL, 1, NULL, 1, '180000', '61818', '2025-07-08 09:01:04', '2025-07-11 20:37:33');
INSERT INTO `invoice` VALUES (68, 63, 'Mizuno Trắng', '197', 3, NULL, 0, NULL, 1, '150000', '50000', '2025-07-08 09:03:52', '2025-07-13 03:27:06');
INSERT INTO `invoice` VALUES (78, 57, NULL, '127', 0, NULL, 0, NULL, 1, '1800000', '455000', '2025-07-10 03:11:55', '2025-07-10 03:11:55');
INSERT INTO `invoice` VALUES (79, 57, NULL, '127', 0, NULL, 0, NULL, 1, '1800000', '455000', '2025-07-10 03:13:30', '2025-07-10 03:13:30');
INSERT INTO `invoice` VALUES (80, 57, NULL, '127', 0, NULL, 0, NULL, 1, '1800000', '455000', '2025-07-10 03:14:03', '2025-07-10 03:14:03');
INSERT INTO `invoice` VALUES (81, 57, NULL, '127', 0, NULL, 0, NULL, 1, '1800000', '455000', '2025-07-10 03:14:57', '2025-07-10 03:14:57');
INSERT INTO `invoice` VALUES (82, 57, NULL, '127', 0, NULL, 0, NULL, 1, '1800000', '455000', '2025-07-10 03:16:15', '2025-07-10 03:16:15');
INSERT INTO `invoice` VALUES (83, 57, NULL, '127', 0, NULL, 0, NULL, 1, '1800000', '455000', '2025-07-10 03:16:46', '2025-07-10 03:16:46');
INSERT INTO `invoice` VALUES (84, 57, NULL, '128', 0, NULL, 0, NULL, 1, '550000', '175000', '2025-07-10 03:17:22', '2025-07-10 03:17:22');
INSERT INTO `invoice` VALUES (93, 55, NULL, '214', 1, NULL, 0, NULL, 1, '150000', '38636', '2025-07-11 20:39:53', '2025-07-11 20:39:53');
INSERT INTO `invoice` VALUES (94, 64, NULL, '263', 2, NULL, 1, NULL, 1, '1800000', '230000', '2025-07-12 10:43:33', '2025-07-12 10:45:38');
INSERT INTO `invoice` VALUES (95, 64, NULL, '246', 2, NULL, 1, NULL, 2, '530000', '10000', '2025-07-12 10:46:21', '2025-07-12 10:46:21');
INSERT INTO `invoice` VALUES (96, 64, NULL, '264', 2, NULL, 1, NULL, 1, '170000', '55000', '2025-07-12 10:48:21', '2025-07-12 10:48:21');
INSERT INTO `invoice` VALUES (97, 8, NULL, '224', 2, NULL, 1, '15000', 1, '165000', '46818', '2025-07-12 10:50:03', '2025-07-13 03:27:23');
INSERT INTO `invoice` VALUES (98, 8, NULL, '218', 2, NULL, 1, '15000', 1, '165000', '32000', '2025-07-12 10:50:26', '2025-07-13 03:27:41');
INSERT INTO `invoice` VALUES (99, 18, NULL, '219', 2, NULL, 1, NULL, 1, '170000', '42727', '2025-07-12 00:00:00', '2025-07-14 01:09:26');
INSERT INTO `invoice` VALUES (100, 37, NULL, '253', 2, NULL, 1, NULL, 1, '2650000', '370800', '2025-07-12 10:59:08', '2025-07-13 03:27:50');
INSERT INTO `invoice` VALUES (101, 1, NULL, '245', 2, NULL, 1, NULL, 1, '225000', '9000', '2025-07-12 11:08:53', '2025-07-13 10:00:13');
INSERT INTO `invoice` VALUES (103, 62, NULL, '239', 2, NULL, 0, NULL, 1, '1600000', '100000', '2025-07-13 03:49:26', '2025-07-13 03:54:48');
INSERT INTO `invoice` VALUES (105, 8, NULL, '223', 2, NULL, 1, '15000', 1, '165000', '37727', '2025-07-13 00:00:00', '2025-07-14 01:09:59');
INSERT INTO `invoice` VALUES (106, 10, NULL, '244', 2, NULL, 1, NULL, 8, '2280000', '32000', '2025-07-13 04:26:00', '2025-07-13 04:44:29');
INSERT INTO `invoice` VALUES (108, 10, NULL, '201', 2, NULL, 1, '15000', 6, '165000', '21000', '2025-07-13 04:27:41', '2025-07-13 04:44:22');
INSERT INTO `invoice` VALUES (109, 10, NULL, '244', 2, NULL, 1, NULL, 1, '285000', '4000', '2025-07-13 04:35:04', '2025-07-13 04:35:04');
INSERT INTO `invoice` VALUES (110, 24, NULL, '214', 2, NULL, 1, '10000', 1, '140000', '28636', '2025-07-13 04:38:11', '2025-07-15 00:00:00');
INSERT INTO `invoice` VALUES (111, 65, NULL, '218', 2, NULL, 1, '10000', 1, '170000', '37000', '2025-07-13 04:39:14', '2025-07-15 00:00:00');
INSERT INTO `invoice` VALUES (112, 9, NULL, '214', 2, NULL, 1, '10000', 1, '140000', '28636', '2025-07-13 00:00:00', '2025-07-14 01:04:08');
INSERT INTO `invoice` VALUES (121, 1, NULL, '187', 2, NULL, 1, NULL, 1, '850000', '290364', '2025-07-14 00:00:00', '2025-07-14 00:00:00');
INSERT INTO `invoice` VALUES (122, 1, NULL, '240', 2, NULL, 1, NULL, 1, '1250000', '1250000', '2025-07-14 00:00:00', '2025-07-14 09:54:30');
INSERT INTO `invoice` VALUES (123, 8, NULL, '222', 2, NULL, 1, '15000', 1, '165000', '40000', '2025-07-14 00:00:00', '2025-07-15 00:00:00');
INSERT INTO `invoice` VALUES (124, 8, NULL, '224', 2, NULL, 1, '15000', 1, '165000', '46818', '2025-07-14 00:00:00', '2025-07-15 00:00:00');
INSERT INTO `invoice` VALUES (125, 8, NULL, '218', 2, NULL, 1, '15000', 1, '165000', '32000', '2025-07-14 00:00:00', '2025-07-15 00:00:00');
INSERT INTO `invoice` VALUES (126, 8, NULL, '213', 2, NULL, 1, '15000', 1, '125000', '40909', '2025-07-14 00:00:00', '2025-07-15 00:00:00');
INSERT INTO `invoice` VALUES (138, 1, NULL, '213', 5, NULL, 1, '280000', 2, '280000', '-168182', '2025-07-14 00:00:00', '2025-07-15 00:00:00');
INSERT INTO `invoice` VALUES (139, 1, NULL, '167', 5, NULL, 1, '20000', 2, '20000', '-14000', '2025-07-14 00:00:00', '2025-07-14 00:00:00');
INSERT INTO `invoice` VALUES (144, 66, NULL, '215', 2, NULL, 0, NULL, 2, '300000', '77272', '2025-07-15 00:00:00', '2025-07-16 00:00:00');
INSERT INTO `invoice` VALUES (145, 8, NULL, '224', 2, NULL, 1, '15000', 1, '165000', '46818', '2025-07-15 00:00:00', '2025-07-15 00:00:00');
INSERT INTO `invoice` VALUES (146, 57, NULL, '200', 1, NULL, 1, NULL, 1, '440000', '190000', '2025-07-15 00:00:00', '2025-07-15 00:00:00');
INSERT INTO `invoice` VALUES (147, 57, NULL, '219', 0, NULL, 1, '120000', 1, '50000', '-77273', '2025-07-15 00:00:00', '2025-07-15 00:00:00');
INSERT INTO `invoice` VALUES (148, 50, NULL, '251', 2, NULL, 0, NULL, 1, '2650000', '370800', '2025-07-15 00:00:00', '2025-07-16 00:00:00');
INSERT INTO `invoice` VALUES (149, 50, NULL, '168', 5, NULL, 1, '50000', 1, '50000', '-27000', '2025-07-15 00:00:00', '2025-07-15 00:00:00');
INSERT INTO `invoice` VALUES (150, 9, NULL, '197', 2, NULL, 1, NULL, 1, '150000', '50000', '2025-07-15 00:00:00', '2025-07-16 00:00:00');
INSERT INTO `invoice` VALUES (151, 9, NULL, '215', 2, NULL, 1, '10000', 1, '140000', '28636', '2025-07-15 00:00:00', '2025-07-16 00:00:00');
INSERT INTO `invoice` VALUES (152, 42, NULL, '170', 2, NULL, 1, '9000', 3, '870000', '21000', '2025-07-15 00:00:00', '2025-07-15 00:00:00');
INSERT INTO `invoice` VALUES (153, 9, NULL, '225', 2, NULL, 1, NULL, 1, '180000', '61818', '2025-07-15 00:00:00', '2025-07-16 00:00:00');
INSERT INTO `invoice` VALUES (154, 40, NULL, '322', 2, NULL, 1, NULL, 1, '80000', '32000', '2025-07-15 00:00:00', '2025-07-15 00:00:00');
INSERT INTO `invoice` VALUES (155, 42, NULL, '170', 2, NULL, 1, '3000', 1, '290000', '7000', '2025-07-15 00:00:00', '2025-07-15 00:00:00');
INSERT INTO `invoice` VALUES (156, 19, NULL, '215', 1, NULL, 0, NULL, 1, '150000', '38636', '2025-07-15 00:00:00', '2025-07-15 00:00:00');
INSERT INTO `invoice` VALUES (157, 57, NULL, '219', 0, NULL, 0, NULL, 1, '170000', '42727', '2025-07-16 00:00:00', '2025-07-16 00:00:00');
INSERT INTO `invoice` VALUES (158, 8, NULL, '219', 0, NULL, 0, NULL, 1, '170000', '42727', '2025-07-16 00:00:00', '2025-07-16 00:00:00');
INSERT INTO `invoice` VALUES (159, 30, NULL, '244', 2, NULL, 1, NULL, 10, '2850000', '40000', '2025-07-16 00:00:00', '2025-07-16 00:00:00');
INSERT INTO `invoice` VALUES (160, 67, NULL, '226', 0, NULL, 1, NULL, 2, '360000', '105454', '2025-07-16 00:00:00', '2025-07-16 00:00:00');

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
  `product_color` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0',
  `product_size` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `product_gender` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`product_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 399 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES (129, 'Vợt cầu lông Yonex Astrox 100 Game', '1500000', '2000000', NULL, '1', NULL, '0', NULL, NULL, '0', '20', '0', '0', '0');
INSERT INTO `product` VALUES (130, 'Vợt cầu lông Yonex Astrox 100 tour', '2420000', '2900000', NULL, '1', NULL, '0', NULL, NULL, '0', '20', '0', '0', '0');
INSERT INTO `product` VALUES (131, 'Vợt cầu lông Yonex Astrox 88 Play 2024', '880000', '1200000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20', '0', NULL, NULL);
INSERT INTO `product` VALUES (132, 'Vợt cầu lông Yonex Astrox 99 Game', '1440000', '1950000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20', '0', NULL, NULL);
INSERT INTO `product` VALUES (133, 'Vợt cầu lông Yonex Astrox 100ZZ Kurenai', '5500000', '6000000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20', '0', NULL, NULL);
INSERT INTO `product` VALUES (134, 'Vợt Cầu Lông Yonex Nanoflare 1000 Game', '1440000', '1950000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20', '0', NULL, NULL);
INSERT INTO `product` VALUES (136, 'Vợt Cầu Lông Yonex Nanoflare 1000 Tour', '2290000', '2900000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20', '0', NULL, NULL);
INSERT INTO `product` VALUES (137, 'Vợt cầu lông Yonex Astrox Nextage', '1180000', '1380000', NULL, '3', NULL, 'Cái', NULL, NULL, NULL, '20', '0', NULL, NULL);
INSERT INTO `product` VALUES (138, 'Vợt cầu lông Yonex Duora Z-Strike', '4150000', '4500000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20', '0', NULL, NULL);
INSERT INTO `product` VALUES (139, 'Vợt Cầu Lông Yonex Astrox 88D Tour', '2200000', '2500000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20', '0', NULL, NULL);
INSERT INTO `product` VALUES (140, 'Vợt cầu lông Yonex Astrox 77 Pro', '3900000', '4350000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20', '0', NULL, NULL);
INSERT INTO `product` VALUES (141, 'Vợt cầu lông Yonex Astrox 77 Play', '699300', '1000000', NULL, '0', NULL, 'Cái', NULL, NULL, NULL, '20', '0', NULL, NULL);
INSERT INTO `product` VALUES (142, 'Vợt cầu lông Yonex Astrox 77 Tour', '2010000', '2200000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20', '0', NULL, NULL);
INSERT INTO `product` VALUES (143, 'Vợt cầu lông Yonex Astrox 88S Game', '1345000', '1700000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20', '0', NULL, NULL);
INSERT INTO `product` VALUES (144, 'Vợt cầu lông Yonex Astrox 88S Tour', '2200000', '2500000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20', '0', NULL, NULL);
INSERT INTO `product` VALUES (145, 'Vợt cầu lông Yonex Astrox 88D Pro', '4100000', '4600000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20', '0', NULL, NULL);
INSERT INTO `product` VALUES (146, 'Vợt cầu lông Yonex Nanoflare 800 Tour', '2150000', '2700000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20', '0', NULL, NULL);
INSERT INTO `product` VALUES (147, 'Vợt cầu lông Yonex Nanoflare 800 Pro', '4500000', '4900000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20', '0', NULL, NULL);
INSERT INTO `product` VALUES (150, 'Vợt cầu lông Yonex Arcsaber 7 Pro', '3700000', '4300000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20', '0', NULL, NULL);
INSERT INTO `product` VALUES (151, 'Vợt cầu lông Yonex Arcsaber 11 Play', '817000', '1250000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20', '0', NULL, NULL);
INSERT INTO `product` VALUES (152, 'Vợt cầu lông Yonex Nanoflare 800 Play', '888300', '1200000', NULL, '2', NULL, 'Cái', NULL, NULL, NULL, '20', '0', NULL, NULL);
INSERT INTO `product` VALUES (153, 'Vợt cầu lông Yonex Astrox 99 Play', '1000000', '1450000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20', '0', NULL, NULL);
INSERT INTO `product` VALUES (154, 'Vợt cầu lông Yonex Nanoflare 700 Play', '937300', '1200000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20', '0', NULL, NULL);
INSERT INTO `product` VALUES (155, 'Vợt Cầu Lông VS Titan 6', '370000', '650000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20', '0', NULL, NULL);
INSERT INTO `product` VALUES (156, 'Vợt Cầu Lông VS Titan 7', '370000', '650000', NULL, '2', NULL, 'Cái', NULL, NULL, NULL, '20', '0', NULL, NULL);
INSERT INTO `product` VALUES (157, 'Vợt Cầu Lông VS Titan 8', '370000', '650000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20', '0', NULL, NULL);
INSERT INTO `product` VALUES (158, 'Vợt Cầu Lông VS Titan 9', '370000', '700000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20', '0', NULL, NULL);
INSERT INTO `product` VALUES (159, 'Vợt Cầu Lông VS Titan 1000', '500000', '800000', NULL, '2', NULL, 'Cái', NULL, NULL, NULL, '20', '0', NULL, NULL);
INSERT INTO `product` VALUES (160, 'Vợt Cầu Lông Kumpoo K520 Pro', '300000', '550000', NULL, '0', NULL, '0', NULL, NULL, '0', '20', '2', '0', '0');
INSERT INTO `product` VALUES (161, 'Vợt cầu lông Fleet Professional 6000 IV', '1733000', '2100000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20', '0', NULL, NULL);
INSERT INTO `product` VALUES (162, 'Vợt Cầu Lông Fleet Jupiter', '770000', '1400000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20', '0', NULL, NULL);
INSERT INTO `product` VALUES (163, 'Vợt Cầu Lông Victor Brave Sword 12', '2800000', '3200000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20', '0', NULL, NULL);
INSERT INTO `product` VALUES (164, 'Vợt Cầu Lông Victor TK-F Ultra', '3100000', '3400000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20', '0', NULL, NULL);
INSERT INTO `product` VALUES (165, 'Vợt cầu lông Lining Calibar 300B', '1099636', '1600000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20', '0', NULL, NULL);
INSERT INTO `product` VALUES (166, 'Vợt Cầu Lông Lining Calibar 600', '1885091', '2700000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20', '0', NULL, NULL);
INSERT INTO `product` VALUES (167, 'Quấn cán vợt cầu lông VS', '7000', '10000', NULL, '98', 'upload/product/1751601685.png', 'Cái', NULL, NULL, NULL, '23', '0', NULL, NULL);
INSERT INTO `product` VALUES (168, 'Tất cầu lông Yonex 22-25', '27000', '50000', NULL, '10', NULL, '0', NULL, NULL, '0', '30', '1', '0', '0');
INSERT INTO `product` VALUES (169, 'Vợt cầu lông Yonex Arcsaber 7 Tour', '1610000', '2250000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20', '0', NULL, NULL);
INSERT INTO `product` VALUES (170, 'Hộp cầu Thành Công 77', '283000', '293000', NULL, '23', 'upload/product/1751601641.png', 'Hộp', NULL, NULL, NULL, '33', '0', NULL, NULL);
INSERT INTO `product` VALUES (171, 'Vợt Cầu Lông Lining Calibar 600B', '1885091', '2550000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20', '0', NULL, NULL);
INSERT INTO `product` VALUES (172, 'Vợt cầu lông Lining Windstorm 79S', '913091', '1450000', NULL, '4', NULL, 'Cái', NULL, NULL, NULL, '20', '0', NULL, NULL);
INSERT INTO `product` VALUES (173, 'Vợt cầu lông Lining Windstorm 79H', '913091', '1450000', NULL, '2', NULL, 'Cái', NULL, NULL, NULL, '20', '0', NULL, NULL);
INSERT INTO `product` VALUES (174, 'Vợt cầu lông Lining Tectonic 7C', '1968349', '2950000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20', '0', NULL, NULL);
INSERT INTO `product` VALUES (175, 'Vợt cầu lông Lining Tectonic 3', '942545', '1450000', NULL, '2', NULL, 'Cái', NULL, NULL, NULL, '20', '0', NULL, NULL);
INSERT INTO `product` VALUES (176, 'Vợt cầu lông Lining Axforce Cannon', '687000', '900000', NULL, '1', NULL, '0', NULL, NULL, '0', '20', '1', '0', '0');
INSERT INTO `product` VALUES (177, 'Vợt Cầu Lông Lining Windstorm 72S', '1683819', '1900000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20', '0', NULL, NULL);
INSERT INTO `product` VALUES (178, 'Vợt cầu lông Lining Aeronaut 4000C', '1415782', '1750000', NULL, '0', NULL, 'Cái', NULL, NULL, NULL, '20', '0', NULL, NULL);
INSERT INTO `product` VALUES (179, 'Vợt Cầu Lông Lining Axforce 100', '3243927', '4200000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20', '0', NULL, NULL);
INSERT INTO `product` VALUES (180, 'Vợt cầu lông Lining Calibar 300C', '942545', '1400000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20', '0', NULL, NULL);
INSERT INTO `product` VALUES (181, 'Quả cầu lông Basao pro2', '215000', '225000', NULL, '9', 'upload/product/1751601479.png', 'Hộp', NULL, NULL, NULL, '25', '0', NULL, NULL);
INSERT INTO `product` VALUES (182, 'Vợt cầu lông Lining Axforce Cannon', '687000', '900000', NULL, '1', NULL, '0', NULL, NULL, '0', '20', '2', '0', '0');
INSERT INTO `product` VALUES (183, 'Vợt Cầu Lông Lining Tectonic 1', '632281', '800000', NULL, '2', NULL, 'Cái', NULL, NULL, NULL, '20', '0', NULL, NULL);
INSERT INTO `product` VALUES (184, 'Vợt cầu lông Lining Aeronaut 6000C', '1469000', '1900000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20', '0', NULL, NULL);
INSERT INTO `product` VALUES (185, 'Vợt Cầu Lông Lining 3D Calibar 001C', '754036', '1150000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20', '0', NULL, NULL);
INSERT INTO `product` VALUES (186, 'Vợt Cầu Lông Lining Halbertec 2000', '790000', '1149000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20', '0', NULL, NULL);
INSERT INTO `product` VALUES (187, 'Vợt Cầu Lông Lining Axforce 10', '559636', '850000', NULL, '1', NULL, '0', NULL, NULL, '0', '20', '1', '0', '0');
INSERT INTO `product` VALUES (188, 'Vợt Cầu Lông Lining Axforce Cannon Pro', '1336364', '1800000', NULL, '1', NULL, '0', NULL, NULL, '0', '20', '3', '0', '0');
INSERT INTO `product` VALUES (189, 'Vợt Cầu Lông Lining Halbertec Motor', '791000', '1000000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20', '0', NULL, NULL);
INSERT INTO `product` VALUES (196, 'Giày Cầu Lông Lining AYTS020', '642291', '1000000', NULL, '1', 'upload/product/1751595626.png', '0', NULL, NULL, '0', '21', '0', '11', '0');
INSERT INTO `product` VALUES (197, 'Vợt hàn Cao Xuân Quang', '100000', '150000', NULL, '0', NULL, 'Lần', NULL, NULL, NULL, '31', '0', NULL, NULL);
INSERT INTO `product` VALUES (198, 'Dán đế giày Cao Xuân Quang', '200000', '250000', NULL, '1', NULL, 'Đôi', NULL, NULL, NULL, '32', '0', NULL, NULL);
INSERT INTO `product` VALUES (199, 'Giày Cầu Lông Lining AYTS020', '642291', '1000000', NULL, '0', 'upload/product/1751595620.png', '0', NULL, NULL, '0', '21', '0', '12', '0');
INSERT INTO `product` VALUES (200, 'Vợt cầu lông IXE Godwar', '250000', '440000', NULL, '0', NULL, '0', NULL, NULL, '0', '20', '0', '0', '0');
INSERT INTO `product` VALUES (201, 'Quả cầu lông Basao prox', '24000', '30000', NULL, '3', NULL, '0', NULL, NULL, '0', '25', '0', '0', '0');
INSERT INTO `product` VALUES (202, 'Vợt cầu lông Lining Aeronaut 6000I', '1490946', '1900000', NULL, '0', NULL, 'Cái', NULL, NULL, NULL, '20', '0', NULL, NULL);
INSERT INTO `product` VALUES (203, 'Quấn cán yonex 1 in 1', '28000', '40000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '23', '0', NULL, NULL);
INSERT INTO `product` VALUES (204, 'Vợt cầu lông yonex Fake loại 1', '250000', '500000', NULL, '5', NULL, 'Cái', NULL, NULL, NULL, '20', '0', NULL, NULL);
INSERT INTO `product` VALUES (205, 'Hộp cầu Lining', '0', '260000', 'Khuyến mại', '3', NULL, 'Hộp', NULL, NULL, NULL, '33', '0', NULL, NULL);
INSERT INTO `product` VALUES (206, 'Thùng cầu thành công 77', '14190000', '14650000', NULL, '1', NULL, 'Thùng', NULL, NULL, NULL, '34', '0', NULL, NULL);
INSERT INTO `product` VALUES (208, 'Áo cầu lông Yonex Paris 2024', '75000', '120000', NULL, '1', NULL, '1', NULL, NULL, '10', '26', '1', '4', '1');
INSERT INTO `product` VALUES (209, 'Áo cầu lông Kamito', '112000', '150000', NULL, '0', 'upload/product/1752639654.jpg', '6', NULL, NULL, '11', '26', '3', '4', '0');
INSERT INTO `product` VALUES (211, 'Yonex BG 5', '0', '130000', NULL, '0', NULL, 'Sợi', NULL, NULL, NULL, '36', '0', NULL, NULL);
INSERT INTO `product` VALUES (212, 'Yonex BG 65', '100000', '130000', NULL, '0', NULL, 'Sợi', NULL, NULL, NULL, '36', '0', NULL, NULL);
INSERT INTO `product` VALUES (213, 'Yonex BG 65', '84091', '130000', NULL, '14', NULL, '0', NULL, NULL, '0', '35', '6', '0', '0');
INSERT INTO `product` VALUES (214, 'Yonex BG 65 Ti', '111364', '150000', NULL, '0', NULL, '0', NULL, NULL, '0', '35', '1', '0', '0');
INSERT INTO `product` VALUES (215, 'Yonex BG 65 Ti', '111364', '150000', NULL, '17', NULL, 'Sợi', NULL, NULL, NULL, '35', '4', NULL, NULL);
INSERT INTO `product` VALUES (216, 'Yonex BG 65 Ti', '111364', '150000', NULL, '22', NULL, 'Sợi', NULL, NULL, NULL, '35', '7', NULL, NULL);
INSERT INTO `product` VALUES (217, 'Yonex BG 66 Force', '151200', '190000', NULL, '1', NULL, 'Sợi', NULL, NULL, NULL, '36', '0', NULL, NULL);
INSERT INTO `product` VALUES (218, 'Yonex BG 66 Ultimax', '133000', '180000', NULL, '1', NULL, '0', NULL, NULL, '0', '36', '0', '0', '0');
INSERT INTO `product` VALUES (219, 'Yonex BG 66 Ultimax', '127273', '170000', NULL, '18', NULL, 'Sợi', NULL, NULL, NULL, '35', '1', NULL, NULL);
INSERT INTO `product` VALUES (220, 'Yonex BG 66 Ultimax', '127273', '170000', NULL, '22', NULL, 'Sợi', NULL, NULL, NULL, '35', '5', NULL, NULL);
INSERT INTO `product` VALUES (221, 'Yonex BG 66 Ultimax', '127273', '170000', NULL, '22', NULL, 'Sợi', NULL, NULL, NULL, '35', '4', NULL, NULL);
INSERT INTO `product` VALUES (222, 'Yonex BG Exbolt 63', '125000', '180000', NULL, '21', NULL, 'Sợi', NULL, NULL, NULL, '35', '1', NULL, NULL);
INSERT INTO `product` VALUES (223, 'Yonex BG Exbolt 65', '127273', '180000', NULL, '0', NULL, '0', NULL, NULL, '0', '35', '6', '0', '0');
INSERT INTO `product` VALUES (224, 'Yonex BG Exbolt 68', '118182', '180000', NULL, '19', NULL, 'Sợi', NULL, NULL, NULL, '35', '5', NULL, NULL);
INSERT INTO `product` VALUES (225, 'Yonex Nanogy 95', '118182', '180000', NULL, '21', NULL, 'Sợi', NULL, NULL, NULL, '35', '4', NULL, NULL);
INSERT INTO `product` VALUES (226, 'Yonex Nanogy 98', '127273', '180000', NULL, '20', NULL, 'Sợi', NULL, NULL, NULL, '35', '1', NULL, NULL);
INSERT INTO `product` VALUES (227, 'Yonex BG 80 Power', '129545', '180000', NULL, '22', NULL, 'Sợi', NULL, NULL, NULL, '35', '1', NULL, NULL);
INSERT INTO `product` VALUES (228, 'Gosen Ryzonic 58', '90909', '140000', NULL, '22', NULL, 'Sợi', NULL, NULL, NULL, '35', '4', NULL, NULL);
INSERT INTO `product` VALUES (229, 'Gosen Ryzonic 65', '81818', '140000', NULL, '22', NULL, 'Sợi', NULL, NULL, NULL, '35', '1', NULL, NULL);
INSERT INTO `product` VALUES (230, 'Kizuna Z58', '155000', '190000', NULL, '1', NULL, 'Sợi', NULL, NULL, NULL, '36', '0', NULL, NULL);
INSERT INTO `product` VALUES (231, 'Kizuna Z61S', '95455', '150000', NULL, '22', NULL, 'Sợi', NULL, NULL, NULL, '35', '9', NULL, NULL);
INSERT INTO `product` VALUES (232, 'Kizuna Z63', '155000', '190000', NULL, '1', NULL, 'Sợi', NULL, NULL, NULL, '36', '0', NULL, NULL);
INSERT INTO `product` VALUES (233, 'Kizuna Z66', '155000', '190000', NULL, '1', NULL, 'Sợi', NULL, NULL, NULL, '36', '0', NULL, NULL);
INSERT INTO `product` VALUES (234, 'Kizuna Z69', '0', '130000', NULL, '1', NULL, 'Sợi', NULL, NULL, NULL, '36', '0', NULL, NULL);
INSERT INTO `product` VALUES (235, 'Kizuna Z69 Ti', '83182', '140000', NULL, '22', NULL, 'Sợi', NULL, NULL, NULL, '35', '4', NULL, NULL);
INSERT INTO `product` VALUES (236, 'học sinh', '15000', '80000', NULL, '1', NULL, 'Sợi', NULL, NULL, NULL, '36', '0', NULL, NULL);
INSERT INTO `product` VALUES (237, 'của khách', '0', '50000', NULL, '1', NULL, 'Sợi', NULL, NULL, NULL, '36', '0', NULL, NULL);
INSERT INTO `product` VALUES (239, 'Vợt Cầu Lông Lining Axforce 60', '1500000', '1600000', NULL, '0', NULL, '0', NULL, NULL, '0', '37', '0', '0', '0');
INSERT INTO `product` VALUES (240, 'Vợt Cầu Lông Lining Bladex 200 (3u)', '0', '1250000', NULL, '0', NULL, 'Cái', NULL, NULL, NULL, '20', '0', NULL, NULL);
INSERT INTO `product` VALUES (241, 'Vợt cầu lông Yonex Arcsaber 0 Ability', '375000', '550000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20', '0', NULL, NULL);
INSERT INTO `product` VALUES (242, 'Vợt Cầu Lông Lining Halbertec 5000', '1582691', '2100000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '20', '0', NULL, NULL);
INSERT INTO `product` VALUES (243, 'Vợt tập điểm ngọt', '225000', '320000', NULL, '3', NULL, 'Cái', NULL, NULL, NULL, '20', '0', NULL, NULL);
INSERT INTO `product` VALUES (244, 'Hộp cầu Basao Prox 77', '281000', '285000', NULL, '58', NULL, '0', NULL, NULL, '0', '33', '3', '0', '0');
INSERT INTO `product` VALUES (245, 'Hộp cầu Basao Pro2', '216000', '225000', NULL, '28', NULL, 'Hộp', NULL, NULL, NULL, '33', '0', NULL, NULL);
INSERT INTO `product` VALUES (246, 'Hộp cầu sao mai', '260000', '265000', NULL, '11', NULL, 'Hộp', NULL, NULL, NULL, '33', '0', NULL, NULL);
INSERT INTO `product` VALUES (247, 'Quả cầu lông Thành Công 77', '24000', '30000', NULL, '7', NULL, 'Quả', NULL, NULL, NULL, '25', '0', NULL, NULL);
INSERT INTO `product` VALUES (248, 'Giày cầu lông Yonex SHB 65Z4 Wide 2025', '2279200', '2650000', NULL, '1', NULL, '0', NULL, NULL, '0', '21', '0', '7', '0');
INSERT INTO `product` VALUES (249, 'Giày cầu lông Yonex SHB 65Z4 Wide 2025', '2279200', '2650000', NULL, '1', NULL, '0', NULL, NULL, '0', '21', '0', '8', '0');
INSERT INTO `product` VALUES (250, 'Giày cầu lông Yonex SHB 65Z4 Wide 2025', '2279200', '2650000', NULL, '1', NULL, '0', NULL, NULL, '0', '21', '0', '9', '0');
INSERT INTO `product` VALUES (251, 'Giày cầu lông Yonex SHB 65Z4 Wide 2025', '2279200', '2650000', NULL, '0', NULL, '0', NULL, NULL, '0', '21', '0', '10', '0');
INSERT INTO `product` VALUES (252, 'Giày cầu lông Yonex SHB 65Z4 Wide 2025', '2279200', '2650000', NULL, '1', NULL, '0', NULL, NULL, '0', '21', '0', '11', '0');
INSERT INTO `product` VALUES (253, 'Giày cầu lông Yonex SHB 65Z4 Wide 2025', '2279200', '2650000', NULL, '0', NULL, '0', NULL, NULL, '0', '21', '0', '12', '0');
INSERT INTO `product` VALUES (254, 'Giày cầu lông Yonex SHB 65Z4 Wide 2025', '2279200', '2650000', NULL, '1', NULL, '0', NULL, NULL, '0', '21', '0', '13', '0');
INSERT INTO `product` VALUES (255, 'Giày cầu lông Yonex SHB 65Z4 Wide 2025', '2336000', '2650000', NULL, '1', NULL, '0', NULL, NULL, '0', '21', '0', '8', '0');
INSERT INTO `product` VALUES (257, 'Balo vợt cầu lông', '380000', '500000', NULL, '1', 'upload/product/1752264496.jpg', 'Cái', NULL, NULL, NULL, '27', '2', NULL, NULL);
INSERT INTO `product` VALUES (258, 'Balo vợt cầu lông', '450000', '600000', NULL, '1', 'upload/product/1752264535.png', 'Cái', NULL, NULL, NULL, '27', '1', NULL, NULL);
INSERT INTO `product` VALUES (259, 'Balo vợt cầu lông', '380000', '500000', NULL, '1', 'upload/product/1752264496.jpg', 'Cái', NULL, NULL, NULL, '27', '2', NULL, NULL);
INSERT INTO `product` VALUES (260, 'Túi hở cán vợt cầu lông', '398000', '500000', NULL, '3', NULL, 'Cái', NULL, NULL, NULL, '28', '0', NULL, NULL);
INSERT INTO `product` VALUES (261, 'Bao vợt cầu lông da', '570000', '700000', NULL, '1', NULL, '0', NULL, NULL, '0', '28', '2', '0', '0');
INSERT INTO `product` VALUES (262, 'Bao vợt cầu lông china', '580000', '700000', NULL, '1', NULL, '0', NULL, NULL, '0', '28', '4', '0', '0');
INSERT INTO `product` VALUES (263, 'Giày cầu lông Yonex Cascade Accel Wide', '1570000', '1800000', NULL, '0', NULL, 'Đôi', NULL, NULL, NULL, '21', '0', NULL, NULL);
INSERT INTO `product` VALUES (264, 'Lưới cầu lông Yonex 188', '115000', '170000', NULL, '1', NULL, 'Cái', NULL, NULL, NULL, '38', '0', NULL, NULL);
INSERT INTO `product` VALUES (266, 'Tất cầu lông Yonex 25-28', '27000', '50000', NULL, '6', NULL, '0', NULL, NULL, '0', '30', '2', '0', '0');
INSERT INTO `product` VALUES (267, 'Tất cầu lông Yonex 25-28', '31500', '50000', NULL, '3', NULL, '0', NULL, NULL, '0', '30', '1', '0', '0');
INSERT INTO `product` VALUES (268, 'Tất cầu lông Yonex cổ ngắn', '29000', '50000', NULL, '4', NULL, '0', NULL, NULL, '0', '30', '1', '0', '0');
INSERT INTO `product` VALUES (269, 'Tất cầu lông Yonex cổ ngắn', '29000', '50000', NULL, '7', NULL, '0', NULL, NULL, '0', '30', '2', '0', '0');
INSERT INTO `product` VALUES (273, 'Giày Eclipson Z3M - Trắng vàng - 39', '0', '2520000', NULL, '1', NULL, '2', NULL, NULL, '7', '21', '0', '9', '0');
INSERT INTO `product` VALUES (274, 'Giày Eclipson Z3M - Trắng vàng - 40', '0', '2520000', NULL, '1', NULL, '2', NULL, NULL, '7', '21', '0', '10', '0');
INSERT INTO `product` VALUES (275, 'Giày Cascade Accel Wide - Xanh đen - 40', '1570000', '1850000', NULL, '1', NULL, '2', NULL, NULL, '7', '21', '0', '10', '0');
INSERT INTO `product` VALUES (276, 'Giày Cascade Accel Wide - Trắng xanh - 39', '1570000', '1850000', NULL, '1', NULL, '2', NULL, NULL, '7', '21', '0', '9', '0');
INSERT INTO `product` VALUES (277, 'giày lining almighty V2.0 - 43', '770000', '1030000', NULL, '1', NULL, '2', NULL, NULL, '0', '21', '1', '13', '0');
INSERT INTO `product` VALUES (278, 'giày lining almighty V2.0 - 41', '770000', '1030000', NULL, '1', NULL, '2', NULL, NULL, '0', '21', '1', '11', '0');
INSERT INTO `product` VALUES (279, 'Giày lining almighty mẫu 2025 - 39', '0', '1050000', NULL, '1', NULL, '2', NULL, NULL, '0', '21', '1', '9', '0');
INSERT INTO `product` VALUES (280, 'Giày lining almighty mẫu 2025 - 40', '0', '1050000', NULL, '1', NULL, '2', NULL, NULL, '0', '21', '1', '10', '0');
INSERT INTO `product` VALUES (281, 'Giày lining almighty mẫu 2025 - 42', '0', '1050000', NULL, '1', NULL, '2', NULL, NULL, '0', '21', '1', '12', '0');
INSERT INTO `product` VALUES (282, 'Giày 65z3 - Xanh trắng - 40', '2200000', '2500000', NULL, '1', NULL, '2', NULL, NULL, '0', '21', '0', '10', '0');
INSERT INTO `product` VALUES (283, 'Giày Yonex Mach-2 Xám trắng - 39', '455000', '650000', NULL, '1', NULL, '0', NULL, NULL, '0', '21', '0', '9', '0');
INSERT INTO `product` VALUES (284, 'Giày  Yonex Strike X - Đen xám - 41', '853000', '1050000', NULL, '1', NULL, '2', NULL, NULL, '0', '21', '2', '11', '0');
INSERT INTO `product` VALUES (285, 'Giày Confort Z - Đỏ - 43', '0', '2750000', NULL, '1', NULL, '2', NULL, NULL, '0', '21', '3', '13', '0');
INSERT INTO `product` VALUES (286, 'Giày Lefus L018 - Đen trắng - 42', '350000', '600000', NULL, '1', NULL, '2', NULL, NULL, '8', '21', '0', '12', '0');
INSERT INTO `product` VALUES (287, 'Giày Lefus L018 - Đen trắng - 43', '350000', '600000', NULL, '1', NULL, '2', NULL, NULL, '8', '21', '0', '13', '0');
INSERT INTO `product` VALUES (288, 'Giày Lefus L018 - Xanh trắng - 42', '350000', '600000', NULL, '1', NULL, '2', NULL, NULL, '8', '21', '0', '12', '0');
INSERT INTO `product` VALUES (289, 'Giày Kawasaki', '500000', '700000', NULL, '1', NULL, '2', NULL, NULL, '0', '21', '3', '10', '0');
INSERT INTO `product` VALUES (290, 'Giày Kawasaki - Trắng cam - 38', '500000', '700000', NULL, '1', NULL, '2', NULL, NULL, '0', '21', '0', '8', '0');
INSERT INTO `product` VALUES (291, 'Giày Wika Maru - 39', '235000', '450000', NULL, '1', NULL, '2', NULL, NULL, '0', '21', '2', '9', '0');
INSERT INTO `product` VALUES (292, 'Giày CL Victor VG - 40', '880000', '1080000', NULL, '1', NULL, '2', NULL, NULL, '0', '21', '2', '10', '0');
INSERT INTO `product` VALUES (293, 'Giày Yonex Velo  200 - 41', '450000', '650000', NULL, '1', NULL, '2', NULL, NULL, '0', '21', '2', '11', '0');
INSERT INTO `product` VALUES (294, 'Giày Strider Flow - 37', '0', '1259000', NULL, '1', NULL, '2', NULL, NULL, '7', '21', '1', '7', '2');
INSERT INTO `product` VALUES (295, 'Giày CL Yonex 65z4 - 37', '0', '2650000', NULL, '1', NULL, '2', NULL, NULL, '0', '21', '1', '7', '0');
INSERT INTO `product` VALUES (296, 'Giày CL Yonex 65z4 - 38', '0', '2650000', NULL, '2', NULL, '2', NULL, NULL, '0', '21', '1', '8', '0');
INSERT INTO `product` VALUES (297, 'Giày CL Yonex 65z4 - 39', '0', '2650000', NULL, '2', NULL, '2', NULL, NULL, '0', '21', '1', '9', '0');
INSERT INTO `product` VALUES (298, 'Giày CL Yonex 65z4 - 40', '0', '2650000', NULL, '1', NULL, '2', NULL, NULL, '0', '21', '1', '10', '0');
INSERT INTO `product` VALUES (299, 'Giày CL Yonex 65z4 - 41', '0', '2650000', NULL, '1', NULL, '2', NULL, NULL, '0', '21', '1', '11', '0');
INSERT INTO `product` VALUES (300, 'Giày CL Yonex 65z4 - 42', '0', '2650000', NULL, '1', NULL, '2', NULL, NULL, '0', '21', '1', '12', '0');
INSERT INTO `product` VALUES (301, 'Giày CL Yonex 65z4 - 43', '0', '2650000', NULL, '1', NULL, '2', NULL, NULL, '0', '21', '1', '13', '0');
INSERT INTO `product` VALUES (302, 'Áo Yonex chính hãng - Xanh ngọc - M', '90000', '130000', NULL, '2', NULL, '6', NULL, NULL, '7', '26', '5', '2', '1');
INSERT INTO `product` VALUES (303, 'Áo Yonex chính hãng có cổ - Trắng - L', '118000', '150000', NULL, '1', NULL, '6', NULL, NULL, '7', '26', '1', '3', '1');
INSERT INTO `product` VALUES (304, 'Áo Kamito Galaxy 2 - Navy - S', '125000', '199000', NULL, '1', NULL, '6', NULL, NULL, '11', '26', '6', '1', '1');
INSERT INTO `product` VALUES (305, 'Áo Kamito Galaxy 2 - Navy - XXL', '125000', '199000', NULL, '1', 'upload/product/1752639502.jpg', '6', NULL, NULL, '11', '26', '6', '5', '1');
INSERT INTO `product` VALUES (306, 'Áo Kamito Galaxy 2 - Tím - S', '125000', '199000', NULL, '1', 'upload/product/1752639548.jpg', '6', NULL, NULL, '11', '26', '0', '1', '1');
INSERT INTO `product` VALUES (307, 'Áo Kamito Galaxy 2 - Xanh bích - S', '125000', '199000', NULL, '1', NULL, '6', NULL, NULL, '11', '26', '6', '1', '1');
INSERT INTO `product` VALUES (308, 'Áo Kamito Galaxy 2 - Xanh bích - XXL', '125000', '199000', NULL, '1', NULL, '6', NULL, NULL, '11', '26', '6', '5', '1');
INSERT INTO `product` VALUES (309, 'Balo Yonex 001U - kẻ hồng', '600000', '750000', NULL, '1', NULL, '6', NULL, NULL, '10', '28', '0', '0', '0');
INSERT INTO `product` VALUES (310, 'Balo Yonex 001U - Đen trắng', '600000', '750000', NULL, '1', NULL, '6', NULL, NULL, '10', '28', '0', '0', '0');
INSERT INTO `product` VALUES (311, 'Bao CL Yonex 2211S - Đen', '430000', '550000', NULL, '1', NULL, '6', NULL, NULL, '10', '28', '2', '0', '0');
INSERT INTO `product` VALUES (312, 'Bao Cl Yonex - Đen Trắng', '510000', '650000', NULL, '1', NULL, '6', NULL, NULL, '10', '28', '0', '0', '0');
INSERT INTO `product` VALUES (315, 'Quần Yonex YN.QY.2910 - L', '104300', '130000', NULL, '1', NULL, '6', NULL, NULL, '7', '22', '0', '3', '1');
INSERT INTO `product` VALUES (316, 'Quần thể thao Yonex', '60000', '90000', NULL, '2', NULL, '6', NULL, NULL, '10', '22', '2', '2', '0');
INSERT INTO `product` VALUES (317, 'Quần thể thao Yonex', '60000', '90000', NULL, '3', NULL, '6', NULL, NULL, '10', '22', '2', '3', '0');
INSERT INTO `product` VALUES (318, 'Quần thể thao Yonex', '60000', '90000', NULL, '4', NULL, '6', NULL, NULL, '10', '22', '3', '3', '0');
INSERT INTO `product` VALUES (319, 'Quần thể thao Yonex', '60000', '90000', NULL, '2', NULL, '6', NULL, NULL, '10', '22', '3', '4', '0');
INSERT INTO `product` VALUES (320, 'Quần thể thao Yonex', '60000', '90000', NULL, '3', NULL, '6', NULL, NULL, '10', '22', '1', '3', '0');
INSERT INTO `product` VALUES (321, 'Quần thể thao Yonex', '60000', '90000', NULL, '2', NULL, '6', NULL, NULL, '10', '22', '1', '4', '0');
INSERT INTO `product` VALUES (322, 'Bình xịt lạnh giảm đau Apavi', '48000', '80000', NULL, '3', NULL, '1', NULL, NULL, '8', '29', '0', '0', '0');
INSERT INTO `product` VALUES (323, 'Phấn chống trơn Apavi', '25000', '45000', NULL, '10', NULL, '1', NULL, NULL, '8', '29', '0', '0', '0');
INSERT INTO `product` VALUES (324, 'Quần thể thao Yonex', '60000', '90000', NULL, '4', NULL, '6', NULL, NULL, '10', '22', '6', '3', '0');
INSERT INTO `product` VALUES (325, 'Quần thể thao Yonex', '60000', '90000', NULL, '4', NULL, '6', NULL, NULL, '10', '22', '6', '4', '0');
INSERT INTO `product` VALUES (326, 'Quần thể thao Yonex chữ dọc', '65000', '95000', NULL, '1', NULL, '6', NULL, NULL, '10', '22', '2', '2', '1');
INSERT INTO `product` VALUES (327, 'Quần thể thao Yonex chữ dọc', '65000', '95000', NULL, '2', NULL, '6', NULL, NULL, '10', '22', '2', '3', '1');
INSERT INTO `product` VALUES (328, 'Quần thể thao Yonex chữ dọc', '65000', '95000', NULL, '1', NULL, '6', NULL, NULL, '10', '22', '2', '4', '1');
INSERT INTO `product` VALUES (329, 'Quần thể thao Donex', '150570', '200000', NULL, '1', NULL, '6', NULL, NULL, '11', '22', '2', '5', '2');
INSERT INTO `product` VALUES (330, 'Quần thể thao Donex', '150570', '200000', NULL, '1', NULL, '6', NULL, NULL, '11', '22', '2', '3', '2');
INSERT INTO `product` VALUES (331, 'Quần thể thao Proning kẻ vạt', '109450', '169000', NULL, '4', NULL, '6', NULL, NULL, '11', '22', '2', '3', '1');
INSERT INTO `product` VALUES (332, 'Quần thể thao Proning kẻ vạt', '109450', '169000', NULL, '1', NULL, '6', NULL, NULL, '11', '22', '2', '4', '1');
INSERT INTO `product` VALUES (333, 'Quần thể thao Proning trơn', '109450', '169000', NULL, '1', NULL, '6', NULL, NULL, '11', '22', '2', '2', '1');
INSERT INTO `product` VALUES (334, 'Quần thể thao Proning trơn', '109450', '169000', NULL, '1', NULL, '6', NULL, NULL, '11', '22', '2', '4', '1');
INSERT INTO `product` VALUES (335, 'Quần thể thao Proning trơn', '109450', '169000', NULL, '1', NULL, '6', NULL, NULL, '11', '22', '2', '3', '1');
INSERT INTO `product` VALUES (336, 'Quần thể thao Proning trơn', '109450', '169000', NULL, '1', NULL, '6', NULL, NULL, '11', '22', '2', '4', '2');
INSERT INTO `product` VALUES (337, 'Quần thể thao Proning trơn', '109450', '169000', NULL, '1', NULL, '6', NULL, NULL, '11', '22', '2', '2', '2');
INSERT INTO `product` VALUES (338, 'Quần thể thao Yonex chính hãng', '104300', '150000', 'Xám', '1', NULL, '6', NULL, NULL, '7', '22', '0', '3', '1');
INSERT INTO `product` VALUES (339, 'Áo Kamito T-shirt Spero 2', '112770', '150000', NULL, '1', NULL, '6', NULL, NULL, '11', '26', '5', '2', '1');
INSERT INTO `product` VALUES (340, 'Áo Kamito T-shirt Spero 2', '112770', '150000', NULL, '1', NULL, '6', NULL, NULL, '11', '26', '5', '3', '1');
INSERT INTO `product` VALUES (341, 'Áo Kamito T-shirt Spero 2', '112770', '150000', NULL, '1', NULL, '6', NULL, NULL, '11', '26', '5', '4', '1');
INSERT INTO `product` VALUES (342, 'Áo Kamito T-shirt Spero 2', '112770', '150000', NULL, '1', NULL, '6', NULL, NULL, '11', '26', '5', '5', '1');
INSERT INTO `product` VALUES (343, 'Áo Kamito T-shirt Spero 2', '112770', '150000', NULL, '1', NULL, '6', NULL, NULL, '11', '26', '5', '3', '2');
INSERT INTO `product` VALUES (344, 'Áo Kamito T-shirt Spero 2', '112770', '150000', NULL, '1', NULL, '6', NULL, NULL, '11', '26', '5', '4', '2');
INSERT INTO `product` VALUES (345, 'Áo Kamito T-shirt Spero 2', '112770', '150000', NULL, '1', NULL, '6', NULL, NULL, '11', '26', '5', '5', '2');
INSERT INTO `product` VALUES (346, 'Áo Kamito T-shirt Spero 2', '112770', '150000', NULL, '1', NULL, '6', NULL, NULL, '11', '26', '10', '2', '1');
INSERT INTO `product` VALUES (347, 'Áo Kamito T-shirt Spero 2', '112770', '150000', NULL, '1', NULL, '6', NULL, NULL, '11', '26', '10', '5', '1');
INSERT INTO `product` VALUES (348, 'Áo Kamito T-shirt Spero 2', '112770', '150000', NULL, '1', NULL, '6', NULL, NULL, '11', '26', '10', '3', '2');
INSERT INTO `product` VALUES (349, 'Áo Kamito T-shirt Spero 2', '112770', '150000', NULL, '1', NULL, '6', NULL, NULL, '11', '26', '10', '2', '2');
INSERT INTO `product` VALUES (350, 'Áo Kamito T-shirt Spero 2', '112770', '150000', NULL, '1', NULL, '6', NULL, NULL, '11', '26', '10', '5', '2');
INSERT INTO `product` VALUES (351, 'Áo Kamito T-shirt Spero 2', '112770', '150000', NULL, '1', NULL, '6', NULL, NULL, '11', '26', '4', '4', '1');
INSERT INTO `product` VALUES (352, 'Áo Kamito T-shirt Spero 2', '112770', '150000', NULL, '1', NULL, '6', NULL, NULL, '11', '26', '4', '5', '1');
INSERT INTO `product` VALUES (353, 'Áo Kamito T-shirt Spero 2', '112770', '150000', NULL, '1', NULL, '6', NULL, NULL, '11', '26', '4', '2', '2');
INSERT INTO `product` VALUES (354, 'Áo Kamito T-shirt Spero 2', '112770', '150000', NULL, '1', NULL, '6', NULL, NULL, '11', '26', '4', '3', '2');
INSERT INTO `product` VALUES (355, 'Áo Kamito T-shirt Spero 2', '112770', '150000', NULL, '1', NULL, '6', NULL, NULL, '11', '26', '4', '4', '2');
INSERT INTO `product` VALUES (356, 'Áo Kamito T-shirt Spero 2', '112770', '150000', NULL, '1', NULL, '6', NULL, NULL, '11', '26', '4', '5', '2');
INSERT INTO `product` VALUES (357, 'Quần thể thao Yonex', '60000', '90000', NULL, '1', NULL, '6', NULL, NULL, '10', '22', '10', '3', '0');
INSERT INTO `product` VALUES (358, 'Quần thể thao Yonex', '60000', '90000', NULL, '1', NULL, '6', NULL, NULL, '10', '22', '10', '4', '0');
INSERT INTO `product` VALUES (359, 'Quần thể thao Yonex', '60000', '90000', NULL, '3', NULL, '6', NULL, NULL, '10', '22', '11', '3', '0');
INSERT INTO `product` VALUES (361, 'Áo thể thao Yonex', '75000', '120000', NULL, '1', 'upload/product/1752639639.jpg', '6', NULL, NULL, '10', '26', '2', '3', '2');
INSERT INTO `product` VALUES (362, 'Áo thể thao Yonex', '75000', '120000', NULL, '1', 'upload/product/1752639670.jpg', '6', NULL, NULL, '10', '26', '2', '2', '1');
INSERT INTO `product` VALUES (363, 'Áo thể thao Yonex', '75000', '120000', NULL, '2', 'upload/product/1752639679.jpg', '6', NULL, NULL, '10', '26', '2', '3', '1');
INSERT INTO `product` VALUES (364, 'Áo thể thao Yonex', '75000', '120000', NULL, '1', NULL, '6', NULL, NULL, '10', '26', '1', '2', '2');
INSERT INTO `product` VALUES (365, 'Áo thể thao Yonex', '75000', '120000', NULL, '1', 'upload/product/1752639779.jpg', '6', NULL, NULL, '10', '26', '1', '3', '1');
INSERT INTO `product` VALUES (366, 'Áo thể thao Yonex', '75000', '120000', NULL, '1', 'upload/product/1752639789.jpg', '6', NULL, NULL, '10', '26', '11', '4', '2');
INSERT INTO `product` VALUES (367, 'Áo thể thao Yonex', '75000', '120000', NULL, '1', 'upload/product/1752639830.jpg', '6', NULL, NULL, '10', '26', '11', '5', '2');
INSERT INTO `product` VALUES (368, 'Áo thể thao Yonex', '75000', '120000', NULL, '1', 'upload/product/1752639843.jpg', '6', NULL, NULL, '10', '26', '6', '2', '2');
INSERT INTO `product` VALUES (369, 'Áo thể thao Yonex', '75000', '120000', NULL, '1', 'upload/product/1752639857.jpg', '6', NULL, NULL, '10', '26', '6', '4', '2');
INSERT INTO `product` VALUES (370, 'Áo thể thao Yonex', '75000', '120000', NULL, '1', 'upload/product/1752639869.jpg', '6', NULL, NULL, '10', '26', '6', '5', '2');
INSERT INTO `product` VALUES (371, 'Áo thể thao Yonex', '75000', '120000', NULL, '1', NULL, '6', NULL, NULL, '10', '26', '6', '3', '1');
INSERT INTO `product` VALUES (372, 'Áo thể thao Yonex', '75000', '120000', NULL, '1', NULL, '6', NULL, NULL, '10', '26', '6', '4', '1');
INSERT INTO `product` VALUES (373, 'Áo thể thao Yonex', '75000', '120000', NULL, '2', NULL, '6', NULL, NULL, '10', '26', '6', '3', '1');
INSERT INTO `product` VALUES (374, 'Áo thể thao Yonex', '75000', '120000', NULL, '1', NULL, '6', NULL, NULL, '10', '26', '12', '2', '2');
INSERT INTO `product` VALUES (375, 'Áo thể thao Yonex', '75000', '120000', NULL, '1', NULL, '6', NULL, NULL, '10', '26', '12', '3', '2');
INSERT INTO `product` VALUES (376, 'Áo thể thao Yonex', '75000', '120000', NULL, '1', NULL, '6', NULL, NULL, '10', '26', '12', '4', '2');
INSERT INTO `product` VALUES (377, 'Áo thể thao Yonex', '75000', '120000', NULL, '1', NULL, '6', NULL, NULL, '10', '26', '7', '5', '2');
INSERT INTO `product` VALUES (378, 'Áo thể thao Yonex', '75000', '120000', NULL, '1', NULL, '6', NULL, NULL, '10', '26', '7', '2', '1');
INSERT INTO `product` VALUES (379, 'Áo thể thao Yonex', '75000', '120000', NULL, '1', NULL, '6', NULL, NULL, '10', '26', '7', '3', '1');
INSERT INTO `product` VALUES (380, 'Áo thể thao Yonex', '75000', '120000', NULL, '1', NULL, '6', NULL, NULL, '10', '26', '7', '4', '1');
INSERT INTO `product` VALUES (381, 'Áo thể thao ba lỗ Yonex', '75000', '120000', NULL, '1', NULL, '6', NULL, NULL, '10', '26', '1', '3', '1');
INSERT INTO `product` VALUES (382, 'Bó gối PJ - Dán to', '95000', '120000', NULL, '9', NULL, '6', NULL, NULL, '12', '29', '2', '15', '0');
INSERT INTO `product` VALUES (383, 'Bó gối PJ - Dán nhỏ', '30000', '70000', NULL, '4', NULL, '6', NULL, NULL, '12', '29', '2', '15', '0');
INSERT INTO `product` VALUES (384, 'Bó gối PJ - Chui', '45300', '75000', NULL, '9', NULL, '0', NULL, NULL, '12', '29', '2', '15', '0');
INSERT INTO `product` VALUES (385, 'Bó gối PJ - Chui', '45300', '75000', NULL, '10', NULL, '6', NULL, NULL, '12', '29', '13', '2', '0');
INSERT INTO `product` VALUES (386, 'Bó gối PJ - Chui', '45300', '75000', NULL, '8', NULL, '6', NULL, NULL, '12', '29', '13', '3', '0');
INSERT INTO `product` VALUES (387, 'Bó gối PJ - Chui', '45300', '75000', NULL, '6', NULL, '6', NULL, NULL, '12', '29', '2', '3', '0');
INSERT INTO `product` VALUES (388, 'Bó gối PJ - Chui', '45300', '75000', NULL, '4', NULL, '6', NULL, NULL, '12', '29', '12', '3', '0');
INSERT INTO `product` VALUES (389, 'Kéo cắt cước', '29000', '50000', NULL, '2', NULL, '6', NULL, NULL, '12', '29', '0', '0', '0');
INSERT INTO `product` VALUES (390, 'Miếng dán đầu vợt', '4000', '10000', NULL, '10', NULL, '6', NULL, NULL, '0', '29', '0', '0', '0');
INSERT INTO `product` VALUES (391, 'Băng trán Yasu', '25000', '50000', NULL, '9', NULL, '6', NULL, NULL, '0', '29', '11', '0', '0');
INSERT INTO `product` VALUES (392, 'Tất cầu lông Yonex cổ ngắn', '29000', '50000', NULL, '1', NULL, '2', NULL, NULL, '0', '30', '11', '0', '0');
INSERT INTO `product` VALUES (393, 'Tất cầu lông Kamito', '35279', '55000', NULL, '8', NULL, '2', NULL, NULL, '11', '30', '1', '15', '0');
INSERT INTO `product` VALUES (394, 'Quấn cốt', '19000', '40000', NULL, '3', NULL, '6', NULL, NULL, '0', '29', '0', '0', '0');
INSERT INTO `product` VALUES (395, 'Băng chặn mồ hôi - Đơn', '27000', '50000', NULL, '1', NULL, '6', NULL, NULL, '0', '29', '5', '0', '0');
INSERT INTO `product` VALUES (396, 'Băng chặn mồ hôi - Đôi', '80000', '110000', NULL, '2', NULL, '2', NULL, NULL, '0', '29', '14', '0', '0');
INSERT INTO `product` VALUES (397, 'Yonex BG Aerobite', '146000', '200000', NULL, '22', NULL, '5', NULL, NULL, '0', '35', '0', '0', '0');

-- ----------------------------
-- Table structure for productype
-- ----------------------------
DROP TABLE IF EXISTS `productype`;
CREATE TABLE `productype`  (
  `productype_id` int(11) NOT NULL AUTO_INCREMENT,
  `productype_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `productype_parent_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`productype_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 39 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

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
INSERT INTO `productype` VALUES (27, 'Balo vợt cầu lông', NULL);
INSERT INTO `productype` VALUES (28, 'Bao vợt cầu lông', NULL);
INSERT INTO `productype` VALUES (29, 'Phụ kiện cầu lông', NULL);
INSERT INTO `productype` VALUES (30, 'Tất cầu lông', 30);
INSERT INTO `productype` VALUES (31, 'Vợt hàn', NULL);
INSERT INTO `productype` VALUES (32, 'Dán đế giày', NULL);
INSERT INTO `productype` VALUES (33, 'Hộp cầu lông', NULL);
INSERT INTO `productype` VALUES (34, 'Thùng cầu', NULL);
INSERT INTO `productype` VALUES (35, 'Cước cuộn', NULL);
INSERT INTO `productype` VALUES (36, 'Cước vỉ', NULL);
INSERT INTO `productype` VALUES (37, 'Vợt cầu lông cũ', NULL);
INSERT INTO `productype` VALUES (38, 'Lưới cầu lông', NULL);

SET FOREIGN_KEY_CHECKS = 1;
