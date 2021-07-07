/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 50731
 Source Host           : localhost:3306
 Source Schema         : pap2021vermo

 Target Server Type    : MySQL
 Target Server Version : 50731
 File Encoding         : 65001

 Date: 07/07/2021 16:10:42
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for dicionarios
-- ----------------------------
DROP TABLE IF EXISTS `dicionarios`;
CREATE TABLE `dicionarios`  (
  `dicionarioId` int(11) NOT NULL AUTO_INCREMENT,
  `dicionarioNome` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `dicionarioNivel` enum('baixo','medio','alto') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'baixo',
  `dicionarioLinguaId` int(11) NOT NULL,
  `dicionarioFicheiroURL` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`dicionarioId`) USING BTREE,
  INDEX `fk_dicionarios_linguas_idx`(`dicionarioLinguaId`) USING BTREE,
  CONSTRAINT `fk_dicionarios_linguas` FOREIGN KEY (`dicionarioLinguaId`) REFERENCES `linguas` (`linguaId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of dicionarios
-- ----------------------------

-- ----------------------------
-- Table structure for jogos
-- ----------------------------
DROP TABLE IF EXISTS `jogos`;
CREATE TABLE `jogos`  (
  `jogoId` int(11) NOT NULL AUTO_INCREMENT,
  `jogoData` date NOT NULL,
  `jogoUtilizadorId` int(11) NOT NULL,
  `jogoDicionarioId` int(11) NOT NULL,
  `jogoPontuacao` decimal(10, 2) NOT NULL,
  PRIMARY KEY (`jogoId`) USING BTREE,
  INDEX `fk_jogos_utilizadores1_idx`(`jogoUtilizadorId`) USING BTREE,
  INDEX `fk_jogos_dicionarios1_idx`(`jogoDicionarioId`) USING BTREE,
  CONSTRAINT `fk_jogos_dicionarios1` FOREIGN KEY (`jogoDicionarioId`) REFERENCES `dicionarios` (`dicionarioId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_jogos_utilizadores1` FOREIGN KEY (`jogoUtilizadorId`) REFERENCES `utilizadores` (`utilizadorId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jogos
-- ----------------------------

-- ----------------------------
-- Table structure for linguas
-- ----------------------------
DROP TABLE IF EXISTS `linguas`;
CREATE TABLE `linguas`  (
  `linguaId` int(11) NOT NULL AUTO_INCREMENT,
  `linguaNome` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `linguaBandeiraURL` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`linguaId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of linguas
-- ----------------------------
INSERT INTO `linguas` VALUES (2, 'england', '../images/eng.png');
INSERT INTO `linguas` VALUES (6, 'portugal', '../images/pt.png');

-- ----------------------------
-- Table structure for perfis
-- ----------------------------
DROP TABLE IF EXISTS `perfis`;
CREATE TABLE `perfis`  (
  `perfilId` int(11) NOT NULL AUTO_INCREMENT,
  `perfilNome` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `perfilAvatar` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'images/noAvatar.jpg',
  `perfilBanner` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'images/h.jpg',
  `perfilEmail` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `perfilUtilizadorId` int(11) NOT NULL,
  PRIMARY KEY (`perfilId`) USING BTREE,
  INDEX `fk_perfis_utilizadores1_idx`(`perfilUtilizadorId`) USING BTREE,
  CONSTRAINT `fk_perfis_utilizadores1` FOREIGN KEY (`perfilUtilizadorId`) REFERENCES `utilizadores` (`utilizadorId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of perfis
-- ----------------------------
INSERT INTO `perfis` VALUES (1, 'Luis', 'images/noAvatar.jpg', 'images/h.jpg', 'luis@gmail.com', 1);
INSERT INTO `perfis` VALUES (2, '', 'images/noAvatar.jpg', 'images/h.jpg', '', 3);
INSERT INTO `perfis` VALUES (3, '', 'images/noAvatar.jpg', 'images/h.jpg', '', 4);
INSERT INTO `perfis` VALUES (4, '', 'images/noAvatar.jpg', 'images/h.jpg', '', 5);

-- ----------------------------
-- Table structure for utilizadores
-- ----------------------------
DROP TABLE IF EXISTS `utilizadores`;
CREATE TABLE `utilizadores`  (
  `utilizadorId` int(11) NOT NULL AUTO_INCREMENT,
  `utilizadorNome` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `utilizadorEstado` enum('ativo','inativo') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'ativo',
  `utilizadorTipo` enum('utilizador','admin') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'utilizador',
  `utilizadorPassword` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`utilizadorId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of utilizadores
-- ----------------------------
INSERT INTO `utilizadores` VALUES (1, 'Luis', 'ativo', 'utilizador', '123');
INSERT INTO `utilizadores` VALUES (2, '', 'ativo', 'utilizador', 'd41d8cd98f00b204e9800998ecf8427e');
INSERT INTO `utilizadores` VALUES (3, '', 'ativo', 'utilizador', 'd41d8cd98f00b204e9800998ecf8427e');
INSERT INTO `utilizadores` VALUES (4, '', 'ativo', 'utilizador', 'd41d8cd98f00b204e9800998ecf8427e');
INSERT INTO `utilizadores` VALUES (5, '', 'ativo', 'utilizador', 'd41d8cd98f00b204e9800998ecf8427e');

SET FOREIGN_KEY_CHECKS = 1;
