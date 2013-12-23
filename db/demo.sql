/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50615
 Source Host           : localhost
 Source Database       : demo

 Target Server Type    : MySQL
 Target Server Version : 50615
 File Encoding         : utf-8

 Date: 12/23/2013 13:46:44 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `uid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL DEFAULT '',
  `password` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `users`
-- ----------------------------
BEGIN;
INSERT INTO `users` VALUES ('1', 'demo', 'demo'), ('2', 'demo2', 'demo2'), ('3', 'demo3', 'demo3'), ('4', 'demo4', 'demo4');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
