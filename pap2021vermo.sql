/*
 Navicat Premium Data Transfer

 Source Server         : pap2021vermo
 Source Server Type    : MySQL
 Source Server Version : 50731
 Source Host           : localhost:3306
 Source Schema         : pap2021vermo

 Target Server Type    : MySQL
 Target Server Version : 50731
 File Encoding         : 65001

 Date: 21/07/2021 20:05:21
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
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

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
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

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
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

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
  `perfilId` int(11) NOT NULL,
  `perfilNome` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `perfilAvatar` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'images/noAvatar.jpg',
  `perfilBanner` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'images/h.jpg',
  `perfilEmail` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`perfilId`) USING BTREE,
  INDEX `fk_perfis_utilizadores1_idx`(`perfilId`) USING BTREE,
  CONSTRAINT `fk_perfis_utilizadores1` FOREIGN KEY (`perfilId`) REFERENCES `utilizadores` (`utilizadorId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of perfis
-- ----------------------------
INSERT INTO `perfis` VALUES (8, 'luis', 'images/boss.png', 'images/pic03.jpg', 'luis@email.com');
INSERT INTO `perfis` VALUES (42, 'Leandro', 'images/noAvatar.jpg', 'images/h.jpg', 'luis_dede@sapo.pt');
INSERT INTO `perfis` VALUES (43, 'P3dr0', 'images/noAvatar.jpg', 'images/h.jpg', 'pedrox@gmail.com');
INSERT INTO `perfis` VALUES (44, 'JoÃ£oGamer', 'images/noAvatar.jpg', 'images/h.jpg', 'jotag@email.pt');
INSERT INTO `perfis` VALUES (45, 'Simao', 'images/noAvatar.jpg', 'images/h.jpg', 'simao@gmail.com');

-- ----------------------------
-- Table structure for tops
-- ----------------------------
DROP TABLE IF EXISTS `tops`;
CREATE TABLE `tops`  (
  `topId` int(11) NOT NULL AUTO_INCREMENT,
  `topPontuacao` int(11) NOT NULL,
  `topUtilizadorId` int(11) NOT NULL,
  PRIMARY KEY (`topId`) USING BTREE,
  INDEX `fk_tops_utilizadores1_idx`(`topUtilizadorId`) USING BTREE,
  CONSTRAINT `fk_tops_utilizadores1` FOREIGN KEY (`topUtilizadorId`) REFERENCES `utilizadores` (`utilizadorId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 36 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tops
-- ----------------------------
INSERT INTO `tops` VALUES (24, 12, 8);
INSERT INTO `tops` VALUES (25, 9, 8);
INSERT INTO `tops` VALUES (26, 22, 8);
INSERT INTO `tops` VALUES (27, 18, 8);
INSERT INTO `tops` VALUES (28, 16, 8);
INSERT INTO `tops` VALUES (29, 17, 42);
INSERT INTO `tops` VALUES (30, 13, 43);
INSERT INTO `tops` VALUES (31, 22, 44);
INSERT INTO `tops` VALUES (32, 34, 44);
INSERT INTO `tops` VALUES (33, 19, 43);
INSERT INTO `tops` VALUES (34, 0, 8);
INSERT INTO `tops` VALUES (35, 0, 8);

-- ----------------------------
-- Table structure for utilizadores
-- ----------------------------
DROP TABLE IF EXISTS `utilizadores`;
CREATE TABLE `utilizadores`  (
  `utilizadorId` int(11) NOT NULL AUTO_INCREMENT,
  `utilizadorLogin` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `utilizadorEstado` enum('ativo','inativo') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'ativo',
  `utilizadorTipo` enum('utilizador','admin') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'utilizador',
  `utilizadorPassword` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`utilizadorId`) USING BTREE,
  UNIQUE INDEX `utilizadorLogin_UNIQUE`(`utilizadorLogin`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 46 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of utilizadores
-- ----------------------------
INSERT INTO `utilizadores` VALUES (8, 'luis', 'ativo', 'admin', '502ff82f7f1f8218dd41201fe4353687');
INSERT INTO `utilizadores` VALUES (10, 'pedro', 'ativo', 'utilizador', '12345');
INSERT INTO `utilizadores` VALUES (42, 'luis_dede@sapo.pt', 'ativo', 'utilizador', '827ccb0eea8a706c4c34a16891f84e7b');
INSERT INTO `utilizadores` VALUES (43, 'pedrox@gmail.com', 'ativo', 'utilizador', '827ccb0eea8a706c4c34a16891f84e7b');
INSERT INTO `utilizadores` VALUES (44, 'jotag@email.pt', 'ativo', 'utilizador', '827ccb0eea8a706c4c34a16891f84e7b');
INSERT INTO `utilizadores` VALUES (45, 'simao@gmail.com', 'ativo', 'utilizador', '827ccb0eea8a706c4c34a16891f84e7b');

SET FOREIGN_KEY_CHECKS = 1;
