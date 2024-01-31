/*
 Navicat Premium Data Transfer

 Source Server         : LOCALHOST
 Source Server Type    : MySQL
 Source Server Version : 80030
 Source Host           : localhost:3306
 Source Schema         : santanalomboktour

 Target Server Type    : MySQL
 Target Server Version : 80030
 File Encoding         : 65001

 Date: 31/01/2024 10:29:24
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for blogs
-- ----------------------------
DROP TABLE IF EXISTS `blogs`;
CREATE TABLE `blogs`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL,
  `file` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL,
  `highlight` bit(1) NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of blogs
-- ----------------------------
INSERT INTO `blogs` VALUES (3, 'Title12', 'Description', 'public/blogs/Title12', b'1', '2024-01-30 06:00:09', '2024-01-30 06:34:03');
INSERT INTO `blogs` VALUES (4, 'Title', 'Description', 'public/blogs/Title', b'1', '2024-01-30 06:28:17', '2024-01-30 06:28:17');

-- ----------------------------
-- Table structure for pages
-- ----------------------------
DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL,
  `detail` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `file` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pages
-- ----------------------------
INSERT INTO `pages` VALUES (1, 'We create & craft projects that ooze creativity in every aspect.', 'We try to create a benchmark in everything we do. Take a moment to browse through some of our recent completed work.', NULL, 'about', NULL, '2024-01-30 06:45:50', '2024-01-30 06:45:50');
INSERT INTO `pages` VALUES (5, NULL, 'We enjoy working on the Services & Products we provide as much as you need them. This help us in delivering your Goals easily. Browse through the wide range of services we provide.', NULL, 'service', 'public/pages/service', '2024-01-31 01:41:28', '2024-01-31 01:41:28');
INSERT INTO `pages` VALUES (23, 'Our Office', '<p><strong>Address:</strong></p><p>Gaharu Street 25 BTN Pepabri, West Pagesangan, Mataram City, &nbsp;West Nusa Tenggara</p><p><strong>Phone : </strong>+6281907304777</p><p><strong>E-Mail : </strong>saptasanasantana@gmail.com</p>', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3944.893526458562!2d116.0940274750139!3d-8.606220491439185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zOMKwMzYnMjIuNCJTIDExNsKwMDUnNDcuOCJF!5e0!3m2!1sid!2sid!4v1706667062904!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'contact', NULL, '2024-01-31 02:19:03', '2024-01-31 02:19:03');

-- ----------------------------
-- Table structure for services
-- ----------------------------
DROP TABLE IF EXISTS `services`;
CREATE TABLE `services`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `icon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of services
-- ----------------------------
INSERT INTO `services` VALUES (1, 'fa-solid fa-plane', 'Airport Transfer services', '2024-01-31 01:02:19', '2024-01-31 01:12:45');
INSERT INTO `services` VALUES (2, 'fa-solid fa-sailboat', 'Private boat to Gili Trawangan, Meno and Air', '2024-01-31 01:02:51', '2024-01-31 01:13:29');
INSERT INTO `services` VALUES (3, 'uil uil-swimmer', 'Snorkling on Gili Nanggu explore', '2024-01-31 01:03:18', '2024-01-31 01:14:20');
INSERT INTO `services` VALUES (4, 'bi-building', 'Official Trip', '2024-01-31 01:03:30', '2024-01-31 01:03:30');
INSERT INTO `services` VALUES (5, 'fa-solid fa-car-alt', 'Car rental with driver', '2024-01-31 01:04:22', '2024-01-31 01:12:17');
INSERT INTO `services` VALUES (6, 'fa-solid fa-car-side', 'Optional Lombok Tour', '2024-01-31 01:05:18', '2024-01-31 01:13:50');
INSERT INTO `services` VALUES (7, 'fa-solid fa-person-swimming', 'Snorkling on 3 Gili tour', '2024-01-31 01:14:03', '2024-01-31 01:14:03');

SET FOREIGN_KEY_CHECKS = 1;
