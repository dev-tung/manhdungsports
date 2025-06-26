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

 Date: 26/06/2025 10:11:52
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for productorder
-- ----------------------------
DROP TABLE IF EXISTS `productorder`;
CREATE TABLE `productorder`  (
  `productorder_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NULL DEFAULT NULL,
  `productorder_description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `string_id` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `productorder_kg` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `productorder_status` int(255) NULL DEFAULT NULL,
  `productorder_timereturn` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `productorder_ispayment` int(11) NULL DEFAULT NULL,
  `productorder_discount` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`productorder_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 22 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of productorder
-- ----------------------------
INSERT INTO `productorder` VALUES (17, 19, NULL, '15', '10.5', 1, 'chiều 26/6', 0, NULL, NULL, '2025-06-26 03:07:44');
INSERT INTO `productorder` VALUES (18, 20, NULL, '25', '11', 2, 'chiều 25/6', 0, NULL, NULL, '2025-06-26 03:07:41');
INSERT INTO `productorder` VALUES (19, 21, NULL, '21', '10.6', 0, 'chiều 26/6', 1, NULL, NULL, '2025-06-26 03:08:44');
INSERT INTO `productorder` VALUES (20, 8, NULL, '13', '11.5', 1, 'chiều 26/6', 0, '15000', NULL, '2025-06-26 03:08:11');
INSERT INTO `productorder` VALUES (21, 8, NULL, '4', NULL, 0, 'chờ xác nhận', 0, NULL, '2025-06-26 03:09:36', '2025-06-26 03:10:14');

SET FOREIGN_KEY_CHECKS = 1;
