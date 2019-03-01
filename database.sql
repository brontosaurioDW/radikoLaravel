/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : radiko_laravel

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-02-28 15:28:22
*/

SET FOREIGN_KEY_CHECKS=0;

-- -----------------------------------------------------
-- Schema DW6_RADIKO
-- -----------------------------------------------------
DROP DATABASE IF EXISTS `radiko_laravel`;
CREATE SCHEMA IF NOT EXISTS `radiko_laravel` DEFAULT CHARACTER SET utf8mb4 ;
USE `radiko_laravel` ;

-- ----------------------------
-- Table structure for `categorias`
-- ----------------------------
DROP TABLE IF EXISTS `categorias`;
CREATE TABLE `categorias` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `categoria` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci,
  `icono` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of categorias
-- ----------------------------
INSERT INTO `categorias` VALUES ('1', 'Frutas', null, 'frutas.png', '2019-02-28 13:51:55', '2019-02-28 13:51:55');
INSERT INTO `categorias` VALUES ('2', 'Verduras', null, 'verduras.png', '2019-02-28 13:51:55', '2019-02-28 13:51:55');
INSERT INTO `categorias` VALUES ('3', 'Harinas', null, 'harinas.png', '2019-02-28 13:51:55', '2019-02-28 13:51:55');
INSERT INTO `categorias` VALUES ('4', 'Granja', null, 'granjas.png', '2019-02-28 13:51:56', '2019-02-28 13:51:56');
INSERT INTO `categorias` VALUES ('5', 'Lácteos', null, 'lacteos.png', '2019-02-28 13:51:56', '2019-02-28 13:51:56');
INSERT INTO `categorias` VALUES ('6', 'Carnes', null, 'carnes.png', '2019-02-28 13:51:56', '2019-02-28 13:51:56');
INSERT INTO `categorias` VALUES ('7', 'Especias', null, 'especias.png', '2019-02-28 13:51:56', '2019-02-28 13:51:56');
INSERT INTO `categorias` VALUES ('8', 'Semillas', null, 'semillas.png', '2019-02-28 13:51:56', '2019-02-28 13:51:56');
INSERT INTO `categorias` VALUES ('9', 'Envasados', null, 'envasados.png', '2019-02-28 13:51:56', '2019-02-28 13:51:56');

-- ----------------------------
-- Table structure for `costo_zona`
-- ----------------------------
DROP TABLE IF EXISTS `costo_zona`;
CREATE TABLE `costo_zona` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `precio` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of costo_zona
-- ----------------------------

-- ----------------------------
-- Table structure for `direcciones`
-- ----------------------------
DROP TABLE IF EXISTS `direcciones`;
CREATE TABLE `direcciones` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `referencia` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `calle` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `piso` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `departamento` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aclaracion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usuario_id` int(10) unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of direcciones
-- ----------------------------
INSERT INTO `direcciones` VALUES ('1', 'Mi casa', 'Sarmiento', '1200', '1', 'D', '(011) 3054-7862', 'Puerta negra', '5', null, '2019-02-28 13:52:01', '2019-02-28 13:52:01');
INSERT INTO `direcciones` VALUES ('2', 'Lo del tío', 'Ayacucho', '1571', '2', '1', '(011) 6547-8254', null, '5', null, '2019-02-28 13:52:01', '2019-02-28 13:52:01');
INSERT INTO `direcciones` VALUES ('3', 'Casa de mamá', 'Godoy Cruz', '3008', null, null, '(011) 2547-6875', 'No funciona el timbre, pegar un grito', '6', null, '2019-02-28 13:52:02', '2019-02-28 13:52:02');
INSERT INTO `direcciones` VALUES ('4', 'Lo de Moni', 'Belgrano', '955', '5', 'A', '(011) 5647-8963', null, '7', null, '2019-02-28 13:52:02', '2019-02-28 13:52:02');
INSERT INTO `direcciones` VALUES ('5', 'Oficina', 'Pavón', '2500', '9', 'A', '(011) 5647-8963', 'Dejar al Sr. de Seguridad', '7', null, '2019-02-28 13:52:02', '2019-02-28 13:52:02');
INSERT INTO `direcciones` VALUES ('6', 'Casa', 'Moreno', '854', '2', 'B', '(011) 3054-7862', 'no funciona el timbre, golpear fuerte', '8', null, '2019-02-28 13:52:02', '2019-02-28 13:52:02');
INSERT INTO `direcciones` VALUES ('7', 'Lo de mamá', 'Salguero', '1254', null, null, '(011) 4300-2580', 'Puerta verde', '8', null, '2019-02-28 13:52:02', '2019-02-28 13:52:02');

-- ----------------------------
-- Table structure for `disponibilidades`
-- ----------------------------
DROP TABLE IF EXISTS `disponibilidades`;
CREATE TABLE `disponibilidades` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dias` enum('lunes','martes','miercoles','jueves','viernes','sábado','domingo') COLLATE utf8mb4_unicode_ci NOT NULL,
  `inicio` time NOT NULL,
  `final` time NOT NULL,
  `activo` tinyint(4) NOT NULL,
  `huerta_id` int(10) unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of disponibilidades
-- ----------------------------
INSERT INTO `disponibilidades` VALUES ('1', 'lunes', '09:00:00', '18:00:00', '1', '1', null, '2019-02-28 13:52:03', '2019-02-28 13:52:03');
INSERT INTO `disponibilidades` VALUES ('2', 'martes', '09:00:00', '18:00:00', '1', '1', null, '2019-02-28 13:52:03', '2019-02-28 13:52:03');
INSERT INTO `disponibilidades` VALUES ('3', 'jueves', '08:00:00', '17:00:00', '1', '1', null, '2019-02-28 13:52:03', '2019-02-28 13:52:03');
INSERT INTO `disponibilidades` VALUES ('4', 'viernes', '10:00:00', '19:00:00', '1', '1', null, '2019-02-28 13:52:03', '2019-02-28 13:52:03');
INSERT INTO `disponibilidades` VALUES ('5', 'martes', '08:00:00', '20:00:00', '1', '2', null, '2019-02-28 13:52:03', '2019-02-28 13:52:03');
INSERT INTO `disponibilidades` VALUES ('6', 'jueves', '08:00:00', '20:00:00', '1', '2', null, '2019-02-28 13:52:03', '2019-02-28 13:52:03');
INSERT INTO `disponibilidades` VALUES ('7', 'sábado', '08:00:00', '20:00:00', '1', '2', null, '2019-02-28 13:52:03', '2019-02-28 13:52:03');
INSERT INTO `disponibilidades` VALUES ('8', 'martes', '07:00:00', '12:00:00', '1', '3', null, '2019-02-28 13:52:03', '2019-02-28 13:52:03');
INSERT INTO `disponibilidades` VALUES ('9', 'miercoles', '08:00:00', '18:00:00', '1', '3', null, '2019-02-28 13:52:03', '2019-02-28 13:52:03');
INSERT INTO `disponibilidades` VALUES ('10', 'sábado', '08:00:00', '18:00:00', '1', '3', null, '2019-02-28 13:52:03', '2019-02-28 13:52:03');
INSERT INTO `disponibilidades` VALUES ('11', 'jueves', '10:00:00', '20:00:00', '1', '4', null, '2019-02-28 13:52:03', '2019-02-28 13:52:03');
INSERT INTO `disponibilidades` VALUES ('12', 'viernes', '10:00:00', '20:00:00', '1', '4', null, '2019-02-28 13:52:03', '2019-02-28 13:52:03');
INSERT INTO `disponibilidades` VALUES ('13', 'sábado', '10:00:00', '20:00:00', '1', '4', null, '2019-02-28 13:52:03', '2019-02-28 13:52:03');
INSERT INTO `disponibilidades` VALUES ('14', 'domingo', '10:00:00', '14:00:00', '1', '4', null, '2019-02-28 13:52:03', '2019-02-28 13:52:03');
INSERT INTO `disponibilidades` VALUES ('15', 'lunes', '10:00:00', '16:00:00', '1', '5', null, '2019-02-28 13:52:03', '2019-02-28 13:52:03');
INSERT INTO `disponibilidades` VALUES ('16', 'martes', '10:00:00', '18:00:00', '1', '5', null, '2019-02-28 13:52:03', '2019-02-28 13:52:03');
INSERT INTO `disponibilidades` VALUES ('17', 'jueves', '10:00:00', '18:00:00', '1', '5', null, '2019-02-28 13:52:03', '2019-02-28 13:52:03');
INSERT INTO `disponibilidades` VALUES ('18', 'viernes', '10:00:00', '20:00:00', '1', '5', null, '2019-02-28 13:52:03', '2019-02-28 13:52:03');
INSERT INTO `disponibilidades` VALUES ('19', 'lunes', '11:00:00', '19:00:00', '1', '6', null, '2019-02-28 13:52:04', '2019-02-28 13:52:04');
INSERT INTO `disponibilidades` VALUES ('20', 'martes', '11:00:00', '19:00:00', '1', '6', null, '2019-02-28 13:52:04', '2019-02-28 13:52:04');
INSERT INTO `disponibilidades` VALUES ('21', 'miercoles', '11:00:00', '19:00:00', '1', '6', null, '2019-02-28 13:52:04', '2019-02-28 13:52:04');
INSERT INTO `disponibilidades` VALUES ('22', 'sábado', '10:00:00', '14:00:00', '1', '6', null, '2019-02-28 13:52:04', '2019-02-28 13:52:04');
INSERT INTO `disponibilidades` VALUES ('23', 'martes', '08:00:00', '19:00:00', '1', '7', null, '2019-02-28 13:52:04', '2019-02-28 13:52:04');
INSERT INTO `disponibilidades` VALUES ('24', 'jueves', '08:00:00', '19:00:00', '1', '7', null, '2019-02-28 13:52:04', '2019-02-28 13:52:04');
INSERT INTO `disponibilidades` VALUES ('25', 'viernes', '08:00:00', '19:00:00', '1', '7', null, '2019-02-28 13:52:04', '2019-02-28 13:52:04');
INSERT INTO `disponibilidades` VALUES ('26', 'sábado', '10:00:00', '14:00:00', '1', '7', null, '2019-02-28 13:52:04', '2019-02-28 13:52:04');

-- ----------------------------
-- Table structure for `envios`
-- ----------------------------
DROP TABLE IF EXISTS `envios`;
CREATE TABLE `envios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of envios
-- ----------------------------

-- ----------------------------
-- Table structure for `estados_pedidos`
-- ----------------------------
DROP TABLE IF EXISTS `estados_pedidos`;
CREATE TABLE `estados_pedidos` (
  `id_estado_pedido` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `estado` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_estado_pedido`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of estados_pedidos
-- ----------------------------
INSERT INTO `estados_pedidos` VALUES ('1', 'Pendiente de pago', '2019-02-28 13:52:04', '2019-02-28 13:52:04');
INSERT INTO `estados_pedidos` VALUES ('2', 'Pendiente de entrega', '2019-02-28 13:52:04', '2019-02-28 13:52:04');
INSERT INTO `estados_pedidos` VALUES ('3', 'Entregado', '2019-02-28 13:52:04', '2019-02-28 13:52:04');
INSERT INTO `estados_pedidos` VALUES ('4', 'Cancelado por el cliente', '2019-02-28 13:52:04', '2019-02-28 13:52:04');
INSERT INTO `estados_pedidos` VALUES ('5', 'Cancelado por la huerta', '2019-02-28 13:52:04', '2019-02-28 13:52:04');
INSERT INTO `estados_pedidos` VALUES ('6', 'Cancelado por el administrador', '2019-02-28 13:52:04', '2019-02-28 13:52:04');

-- ----------------------------
-- Table structure for `huertas`
-- ----------------------------
DROP TABLE IF EXISTS `huertas`;
CREATE TABLE `huertas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `huerta` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cuit` bigint(20) NOT NULL,
  `razon_social` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad_max_envios` tinyint(4) DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `destacado` tinyint(1) NOT NULL,
  `tipo_huerta_id` int(10) unsigned NOT NULL,
  `producto_id` int(10) unsigned NOT NULL,
  `usuario_id` int(10) unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `huertas_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of huertas
-- ----------------------------
INSERT INTO `huertas` VALUES ('1', 'Jardín Orgánico', '30354568459', 'Huerta S.A.', 'Sáenz Peña 419, B1823 Remedios de Escalada, Buenos Aires', '0-800-88-JARDIN (82556)', 'info@jardinorganico.com.ar', '15', 'h-1.jpg', '1', '1', '1', '9', null, '2019-02-28 13:52:01', '2019-02-28 13:52:01');
INSERT INTO `huertas` VALUES ('2', 'Orgánica Urbana', '33214569528', 'Gonzales y Perez S.R.L', 'Av. Estado de Israel 4799', '15-3358-2456', 'hola@huertaorganica.com.ar', '20', 'h-2.jpg', '0', '1', '1', '10', null, '2019-02-28 13:52:01', '2019-02-28 13:52:01');
INSERT INTO `huertas` VALUES ('3', 'Tallo Verde', '34245632145', 'Tallo S.A.', 'Ruta 192 Km. 8 - Open Door - Luján', '0-800-88-TALLO (85612)', 'huerta@talloverde.com', '10', 'h-3.jpg', '1', '2', '1', '11', null, '2019-02-28 13:52:01', '2019-02-28 13:52:01');
INSERT INTO `huertas` VALUES ('4', 'Estilo Orgánico', '30457896529', 'Gatofer y Asociados', 'Sta Magdalena 1998-1900, B1839BWB 9 de Abril, Buenos Aires', '011-5468-2136', 'info@estilorganico.com', '25', 'h-5.jpg', '0', '2', '1', '12', null, '2019-02-28 13:52:01', '2019-02-28 13:52:01');
INSERT INTO `huertas` VALUES ('5', 'El Jardín', '30457237829', 'El Jardín', '3 de Febrero 940, San Isidro, Buenos Aires', '011-2456-7583', 'info@eljardin.com', '25', 'h-6.jpg', '1', '1', '1', '13', null, '2019-02-28 13:52:01', '2019-02-28 13:52:01');
INSERT INTO `huertas` VALUES ('6', 'La Huerta de Pedro', '30478236529', 'Pedro and Company', 'Don Bosco 8798-8600, B1740DTP Cuartel V, Buenos Aires', '0-800-88-PEDRO (85478)', 'info@huertadepedro.com', '25', 'h-7.jpg', '1', '1', '1', '14', null, '2019-02-28 13:52:01', '2019-02-28 13:52:01');
INSERT INTO `huertas` VALUES ('7', 'El Brote Urbano', '30457893229', 'Brote y Asociados', 'Av. Córdoba 4706, C1414BAS CABA', '3000-4568', 'huerta@broteurbano.com', '25', 'h-4.jpg', '1', '2', '1', '15', null, '2019-02-28 13:52:01', '2019-02-28 13:52:01');

-- ----------------------------
-- Table structure for `log`
-- ----------------------------
DROP TABLE IF EXISTS `log`;
CREATE TABLE `log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `accion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of log
-- ----------------------------

-- ----------------------------
-- Table structure for `migrations`
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('3', '2018_11_03_194019_crear_tabla_tipo_huerta', '1');
INSERT INTO `migrations` VALUES ('4', '2018_11_03_201809_crear_tabla_unidades_de_medida', '1');
INSERT INTO `migrations` VALUES ('5', '2018_11_03_202220_crear_tabla_productos', '1');
INSERT INTO `migrations` VALUES ('6', '2018_11_03_215851_crear_tabla_huertas', '1');
INSERT INTO `migrations` VALUES ('7', '2018_11_03_225534_crear_tabla_categorias', '1');
INSERT INTO `migrations` VALUES ('8', '2018_11_03_230203_crear_tabla_envios', '1');
INSERT INTO `migrations` VALUES ('9', '2018_11_03_230417_crear_tabla_pedidos', '1');
INSERT INTO `migrations` VALUES ('10', '2018_11_03_230725_crear_tabla_tipos_pagos', '1');
INSERT INTO `migrations` VALUES ('11', '2018_11_03_230934_crear_tabla_estado_pedido', '1');
INSERT INTO `migrations` VALUES ('12', '2018_11_03_231113_crear_tabla_direcciones', '1');
INSERT INTO `migrations` VALUES ('13', '2018_11_03_231549_crear_tabla_zonas', '1');
INSERT INTO `migrations` VALUES ('14', '2018_11_03_231715_crear_tabla_costo_zona', '1');
INSERT INTO `migrations` VALUES ('15', '2018_11_03_231923_crear_tabla_disponibilidades', '1');
INSERT INTO `migrations` VALUES ('16', '2018_11_03_232513_crear_tabla_log', '1');
INSERT INTO `migrations` VALUES ('17', '2018_11_07_190326_crear_tabla_reviews', '1');
INSERT INTO `migrations` VALUES ('18', '2019_02_06_125203_agregar_id_estado_pedido_a_tabla_pedidos', '1');
INSERT INTO `migrations` VALUES ('19', '2019_02_06_160944_agregar_id_tipo_pago_a_tabla_pedidos', '1');
INSERT INTO `migrations` VALUES ('20', '2019_02_07_230006_create_shoppingcart_table', '1');
INSERT INTO `migrations` VALUES ('21', '2019_02_17_233709_agregar_id_direccion_a_tabla_pedidos', '1');
INSERT INTO `migrations` VALUES ('22', '2019_02_23_190400_crear_tabla_rel_pedidos_productos', '1');

-- ----------------------------
-- Table structure for `password_resets`
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for `pedidos`
-- ----------------------------
DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE `pedidos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fecha_pedido` datetime NOT NULL,
  `subtotal` decimal(8,2) NOT NULL,
  `costo_envio` decimal(8,2) NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `observaciones` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `usuario_id` int(10) unsigned NOT NULL,
  `huerta_id` int(10) unsigned NOT NULL,
  `id_estado_pedido` int(10) unsigned NOT NULL,
  `id_tipo_pago` int(10) unsigned NOT NULL,
  `direccion_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `pedidos_id_estado_pedido_foreign` (`id_estado_pedido`),
  KEY `pedidos_id_tipo_pago_foreign` (`id_tipo_pago`),
  CONSTRAINT `pedidos_id_estado_pedido_foreign` FOREIGN KEY (`id_estado_pedido`) REFERENCES `estados_pedidos` (`id_estado_pedido`),
  CONSTRAINT `pedidos_id_tipo_pago_foreign` FOREIGN KEY (`id_tipo_pago`) REFERENCES `tipos_pagos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of pedidos
-- ----------------------------
INSERT INTO `pedidos` VALUES ('1', '2018-08-05 16:30:00', '922.89', '130.00', '922.89', 'pedido numero #1', '2019-02-28 13:52:05', '2019-02-28 13:52:05', '5', '1', '2', '1', '1');
INSERT INTO `pedidos` VALUES ('2', '2018-08-30 13:25:00', '820.50', '130.00', '820.50', 'pedido numero #2', '2019-02-28 13:52:05', '2019-02-28 13:52:05', '6', '3', '1', '1', '3');
INSERT INTO `pedidos` VALUES ('3', '2018-09-01 19:00:00', '363.80', '130.00', '363.80', 'pedido numero #3', '2019-02-28 13:52:05', '2019-02-28 13:52:05', '7', '2', '3', '1', '5');
INSERT INTO `pedidos` VALUES ('4', '2018-09-03 16:50:00', '105.80', '130.00', '105.80', 'pedido numero #4', '2019-02-28 13:52:05', '2019-02-28 13:52:05', '8', '2', '2', '1', '6');
INSERT INTO `pedidos` VALUES ('5', '2018-10-03 16:50:00', '640.30', '130.00', '640.30', 'pedido numero #5', '2019-02-28 13:52:05', '2019-02-28 13:52:05', '8', '1', '1', '1', '7');
INSERT INTO `pedidos` VALUES ('6', '2018-10-08 06:30:00', '154.00', '130.00', '154.00', 'pedido numero #6', '2019-02-28 13:52:05', '2019-02-28 13:52:05', '5', '1', '2', '1', '2');
INSERT INTO `pedidos` VALUES ('7', '2018-10-12 15:50:00', '911.90', '130.00', '911.90', 'pedido numero #7', '2019-02-28 13:52:05', '2019-02-28 13:52:05', '7', '1', '2', '1', '4');
INSERT INTO `pedidos` VALUES ('8', '2018-10-15 16:50:00', '92.90', '130.00', '92.90', 'pedido numero #8', '2019-02-28 13:52:05', '2019-02-28 13:52:05', '6', '1', '1', '1', '3');
INSERT INTO `pedidos` VALUES ('9', '2018-10-20 08:30:00', '226.50', '130.00', '226.50', 'pedido numero #9', '2019-02-28 13:52:05', '2019-02-28 13:52:05', '8', '3', '3', '1', '6');
INSERT INTO `pedidos` VALUES ('10', '2019-02-28 13:52:52', '780.00', '130.00', '780.00', null, '2019-02-28 13:52:52', '2019-02-28 13:52:52', '7', '1', '1', '1', '5');
INSERT INTO `pedidos` VALUES ('11', '2019-02-28 13:53:46', '377.70', '130.00', '377.70', null, '2019-02-28 13:53:46', '2019-02-28 13:53:46', '7', '1', '1', '1', '4');
INSERT INTO `pedidos` VALUES ('12', '2019-02-28 16:55:01', '45.00', '130.00', '45.00', null, '2019-02-28 16:55:01', '2019-02-28 16:55:01', '7', '1', '1', '1', '4');
INSERT INTO `pedidos` VALUES ('13', '2019-02-28 10:56:53', '428.50', '130.00', '428.50', null, '2019-02-28 10:56:53', '2019-02-28 10:56:53', '7', '1', '1', '1', '4');

-- ----------------------------
-- Table structure for `productos`
-- ----------------------------
DROP TABLE IF EXISTS `productos`;
CREATE TABLE `productos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `producto` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `marca` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` decimal(6,2) NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` tinyint(4) NOT NULL,
  `huerta_id` int(10) unsigned NOT NULL,
  `unidad_de_medida_id` int(10) unsigned NOT NULL,
  `categoria_id` int(10) unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of productos
-- ----------------------------
INSERT INTO `productos` VALUES ('1', 'Manzana roja', 'Son ricas en pectina (buen aliada contra el colesterol y la diabetes), aminoácidos, ácidos, azúcares, fibras. Popularmente se le asignan propiedades antiinflamatoria del aparato digestivo, gracias a la pectina es a la vez laxante suave y astringente en caso de diarréas o colitis, diurético y depurativa, incluso anticatarral e hipotensora.', 'Jardín Orgánico', '78.00', 'man01.jpg', '1', '1', '1', '1', null, '2019-02-28 13:51:56', '2019-02-28 13:51:56');
INSERT INTO `productos` VALUES ('2', 'Naranja', 'Las naranjas tienen un alto contenido de vitamina C, así como niveles de potasio, fibra, vitamina B, ácido fólico y antioxidantes.', 'Jardín Orgánico', '45.00', 'nar01.jpg', '1', '1', '1', '1', null, '2019-02-28 13:51:56', '2019-02-28 13:51:56');
INSERT INTO `productos` VALUES ('3', 'Frutilla', 'Aumenta las defensas del organismo por el aporte de vitamina C, un efecto que es mayor cuando las frutillas son maduras. Ideal para prevenir resfríos y enfermedades respiratorias.', 'Jardín Orgánico', '25.50', 'fru01.jpg', '1', '1', '1', '1', null, '2019-02-28 13:51:56', '2019-02-28 13:51:56');
INSERT INTO `productos` VALUES ('4', 'Kiwi', 'Es una de las pocas frutas que contiene ácido fólico, una sustancia necesaria para que las embarazadas desarrollen el feto en buenas condiciones. Además, el kiwi ayuda a luchar contra el cáncer de esófago y el de pulmón.', 'Jardín Orgánico', '70.90', 'kiw01.jpg', '1', '1', '1', '1', null, '2019-02-28 13:51:56', '2019-02-28 13:51:56');
INSERT INTO `productos` VALUES ('5', 'Durazno', 'Aportan vitaminas, entre las que destaca la vitamina C y de minerales, y proporciones moderadas de carotenoides con actividad provitamínica A como alfa-caroteno, beta-caroteno y criptoxantina, así como de otros carotenoides sin esta actividad como luteína y zeaxantina.', 'Jardín Orgánico', '125.90', 'dur01.jpg', '1', '1', '1', '1', null, '2019-02-28 13:51:56', '2019-02-28 13:51:56');
INSERT INTO `productos` VALUES ('6', 'Tomate redondo', 'Tomates deliciosos de estación. Es un alimento con escasa cantidad de calorías. El tomate es una fuente importante de ciertos minerales (como el potasio y el magnesio).', 'Mitden', '36.00', 'tom01.jpg', '1', '1', '1', '2', null, '2019-02-28 13:51:56', '2019-02-28 13:51:56');
INSERT INTO `productos` VALUES ('7', 'Lechuga mantecosa', 'La lechuga, desde el punto de vista alimentario, es especialmente apreciada por su frescura, gran digestibilidad y contenido de agua.', 'Mitden', '75.50', 'lec01.jpg', '1', '1', '1', '2', null, '2019-02-28 13:51:56', '2019-02-28 13:51:56');
INSERT INTO `productos` VALUES ('8', 'Morrón amarillo', 'Los morrones amarillos son ricos en fibra, lo que ayuda a producir sensación de saciedad, al mismo tiempo que combate el estreñimiento. En este aspecto también resulta beneficioso la gran cantidad de agua que poseen.', 'Jardín Orgánico', '44.00', 'mor01.jpg', '1', '1', '1', '2', null, '2019-02-28 13:51:56', '2019-02-28 13:51:56');
INSERT INTO `productos` VALUES ('9', 'Zanahoria', 'Ideal para hacer jugos de zanahoria.', 'Mitden', '29.99', 'zan01.jpg', '1', '1', '1', '2', null, '2019-02-28 13:51:56', '2019-02-28 13:51:56');
INSERT INTO `productos` VALUES ('10', 'Palta', 'La palta es una de las frutas más comunes en Latinoamérica.  Contiene una grasa parecida a la de la aceituna que es muy recomendable para el corazón.', 'Jardín Orgánico', '39.00', 'pal01.jpg', '1', '1', '1', '1', null, '2019-02-28 13:51:57', '2019-02-28 13:51:57');
INSERT INTO `productos` VALUES ('11', 'Pepino', 'Cien gramos de pepino aportan aproximadamente un 10% de la ingesta diaria recomendada de Vitamina C.\r\n		Además, el pepino no contiene grasa, es bajo en calorías y colesterol y es muy utilizado en la medicina, por sus cualidades emolientes, calmantes y refrescantes y sobretodo alcalinizantes.', 'marca test', '115.00', 'pep01.jpg', '1', '1', '1', '2', null, '2019-02-28 13:51:57', '2019-02-28 13:51:57');
INSERT INTO `productos` VALUES ('12', 'Baguettin saborizado', 'Sin conservantes ni aditivos químicos.', 'Ecoville', '122.00', 'pan01.jpg', '1', '1', '1', '3', null, '2019-02-28 13:51:57', '2019-02-28 13:51:57');
INSERT INTO `productos` VALUES ('13', 'Pan lactal mediano', 'Sin conservantes ni aditivos químicos.', 'Ecoville', '99.90', 'pan02.jpg', '1', '1', '1', '3', null, '2019-02-28 13:51:57', '2019-02-28 13:51:57');
INSERT INTO `productos` VALUES ('14', 'Nuggets de pollo', 'Pata muslo coeco + rebozador + sal + harina de trigo + proteina de soja + huevo coeco', 'Coeco', '299.99', 'gra01.jpg', '1', '1', '1', '4', null, '2019-02-28 13:51:57', '2019-02-28 13:51:57');
INSERT INTO `productos` VALUES ('15', 'Pollo pastoril', 'Es alimentado exclusivamente con nutrientes de origen vegetal provistos por pasturas y granos y por minerales de origen marino que complementan su dieta animal.', 'Coeco', '453.80', 'gra02.jpg', '1', '1', '1', '4', null, '2019-02-28 13:51:57', '2019-02-28 13:51:57');
INSERT INTO `productos` VALUES ('16', 'Queso de cabra sabor provenzal', 'Ingredientes: Leche de cabra, sal, cuajos, fermentos lácticos.', 'Cabras de Cafayate', '170.50', 'lac01.jpg', '1', '1', '1', '5', null, '2019-02-28 13:51:57', '2019-02-28 13:51:57');
INSERT INTO `productos` VALUES ('17', 'Tofu', 'La incorporación del tofu en la dieta aporta varios beneficios para la salud. Por su versatilidad es fácil de ser incorporado en las preparaciones diarias, en forma práctica y accesible.', 'Soyana', '138.90', 'lac05.jpg', '1', '1', '1', '5', null, '2019-02-28 13:51:57', '2019-02-28 13:51:57');
INSERT INTO `productos` VALUES ('18', 'Colita de cuadril', 'Linar Group es la primera empresa en argentina en desarrollar carne vacuna orgánica, desde el productor hasta la mesa del consumidor. Don Edgardo se constituye así en un nuevo producto en el mercado argentino: Carne Vacuna Certificada Orgánica.', 'Don Edgardo', '595.50', 'car01.jpg', '1', '1', '5', '6', null, '2019-02-28 13:51:57', '2019-02-28 13:51:57');
INSERT INTO `productos` VALUES ('19', 'Peceto orgánico', 'Linar Group es la primera empresa en argentina en desarrollar carne vacuna orgánica, desde el productor hasta la mesa del consumidor. Don Edgardo se constituye así en un nuevo producto en el mercado argentino: Carne Vacuna Certificada Orgánica.', 'Don Edgardo', '441.50', 'car02.jpg', '1', '1', '5', '6', null, '2019-02-28 13:51:57', '2019-02-28 13:51:57');
INSERT INTO `productos` VALUES ('20', 'Hamburguesa orgánica', 'Linar Group es la primera empresa en argentina en desarrollar carne vacuna orgánica, desde el productor hasta la mesa del consumidor. Don Edgardo se constituye así en un nuevo producto en el mercado argentino: Carne Vacuna Certificada Orgánica.', 'Don Edgardo', '22.00', 'car03.jpg', '1', '1', '5', '6', null, '2019-02-28 13:51:57', '2019-02-28 13:51:57');
INSERT INTO `productos` VALUES ('21', 'Pimentón ahumado', 'Producto sin conservantes ni aditivos. 100 % natural, ápto para celíacos y con certificación Kosher - parve.\r\n		Este producto es rico en vitamina K, vitamina B5 y vitamina B6.\r\n		Su alto contenido de hierro ayuda a prevenir la anemia. Favorece a la buena circulación y mejora la presión arterial.', 'Arytza', '98.90', 'esp01.jpg', '1', '1', '5', '7', null, '2019-02-28 13:51:57', '2019-02-28 13:51:57');
INSERT INTO `productos` VALUES ('22', 'Mix dulce - Sabor Toffee', 'Para saborizar bebidas frías, calientes y pastelería. Contiene Cacao, sabor caramelo y crema.', 'Saros', '127.90', 'esp02.jpg', '1', '1', '5', '7', null, '2019-02-28 13:51:57', '2019-02-28 13:51:57');
INSERT INTO `productos` VALUES ('23', 'Mix dulce - Sabor marroqui', 'Con canela, jengibre, nuez moscada, cardamomo y clavo de olor\r\n		Un aroma irresistible, donde el dulzor de la canela y el distintivo sabor del jengibre se mezclan con notas de finas especias dulces como la nuez moscada y el cardamomo, mas una pizca de clavo de olor.', 'Saros', '127.90', 'esp03.jpg', '1', '1', '5', '7', null, '2019-02-28 13:51:57', '2019-02-28 13:51:57');
INSERT INTO `productos` VALUES ('24', 'Arroz Blanco', 'Producto sin conservantes ni aditivos. 100 % natural, ápto para celíacos.', 'Terrasana - Sabores de la tierra', '70.90', 'sem01.jpg', '1', '1', '5', '8', null, '2019-02-28 13:51:57', '2019-02-28 13:51:57');
INSERT INTO `productos` VALUES ('25', 'Arroz integral', 'Producto sin conservantes ni aditivos. 100 % natural, ápto para celíacos.', 'Terrasana - Sabores de la tierra', '73.50', 'sem02.jpg', '1', '1', '5', '8', null, '2019-02-28 13:51:57', '2019-02-28 13:51:57');
INSERT INTO `productos` VALUES ('26', 'Arroz Yamaní', 'Producto sin conservantes ni aditivos. 100 % natural, ápto para celíacos.', 'Terrasana - Sabores de la tierra', '85.70', 'sem03.jpg', '1', '1', '5', '8', null, '2019-02-28 13:51:57', '2019-02-28 13:51:57');
INSERT INTO `productos` VALUES ('27', 'Aceto balsámico', 'Elaborado en barricas de roble en forma artesanal. Ingredientes: vino orgánico, mosto de uva orgánico. Libre de gluten.', 'Terrasana - Sabores de la tierra', '175.90', 'emb01.jpg', '1', '1', '5', '9', null, '2019-02-28 13:51:57', '2019-02-28 13:51:57');
INSERT INTO `productos` VALUES ('28', 'Aceite de oliva extra virgen', 'Aceite de Oliva, Extra Virgen, prensado en frío.', 'Esencias de la Tierra', '296.90', 'emb02.jpg', '1', '1', '5', '9', null, '2019-02-28 13:51:57', '2019-02-28 13:51:57');
INSERT INTO `productos` VALUES ('29', 'Vinagre de uva blanco', 'Vino orgánico..', 'Terrasana - Sabores de la tierra', '121.90', 'emb03.jpg', '1', '1', '5', '9', null, '2019-02-28 13:51:57', '2019-02-28 13:51:57');
INSERT INTO `productos` VALUES ('30', 'Manzana roja', 'Sabrosas y super frescas. Ideales para preparar tartas de manzana.', 'Riol', '65.00', 'man02.jpg', '1', '2', '1', '1', null, '2019-02-28 13:51:57', '2019-02-28 13:51:57');
INSERT INTO `productos` VALUES ('31', 'Naranaja', 'Realmente ricas en vitamina C y B. Imperdibles para realizar sabrosos jugos.', 'Riol', '47.00', 'nar02.jpg', '1', '2', '1', '1', null, '2019-02-28 13:51:58', '2019-02-28 13:51:58');
INSERT INTO `productos` VALUES ('32', 'Frutilla', 'Ideales para comer con crema y poder realizar tartas exquisitas.', 'Riol', '30.50', 'fru02.jpg', '1', '2', '1', '1', null, '2019-02-28 13:51:58', '2019-02-28 13:51:58');
INSERT INTO `productos` VALUES ('33', 'Ajo', 'Mejora la circulación: El ajo tiene efectos positivos sobre la actividad cardiovascular. Su consumo reduce los niveles de colesterol y de triglicéridos. Además, desacelera la velocidad de la coagulación y tiene propiedades antioxidantes.', 'Riol', '38.00', 'ajo01.jpg', '1', '2', '1', '2', null, '2019-02-28 13:51:58', '2019-02-28 13:51:58');
INSERT INTO `productos` VALUES ('34', 'Tomate perita', 'Este fruto, alberga vitaminas C, B5, B2 y B1 y varios minerales.', 'Riol', '37.30', 'tom02.jpg', '1', '2', '1', '2', null, '2019-02-28 13:51:58', '2019-02-28 13:51:58');
INSERT INTO `productos` VALUES ('35', 'Lechuga criolla', 'Con un verde que irradia esta lechuga es super fresca y con un sabor muy delicado, ideal para acompañar las ensaladas', 'Riol', '83.00', 'lec02.jpg', '1', '2', '1', '2', null, '2019-02-28 13:51:58', '2019-02-28 13:51:58');
INSERT INTO `productos` VALUES ('36', 'Pan lacteado', 'Sin conservantes ni aditivos químicos.', 'Locta', '95.00', 'pan03.jpg', '1', '2', '1', '3', null, '2019-02-28 13:51:58', '2019-02-28 13:51:58');
INSERT INTO `productos` VALUES ('37', 'Pechugas de pollo', 'Pechugas sin piel muy magras', 'Tenus', '260.30', 'gra03.jpg', '1', '2', '1', '4', null, '2019-02-28 13:51:58', '2019-02-28 13:51:58');
INSERT INTO `productos` VALUES ('38', 'Queso de cabra', 'Queso fresco a base de leche de cabra.', 'Tenus', '136.00', 'lac02.jpg', '1', '2', '1', '5', null, '2019-02-28 13:51:58', '2019-02-28 13:51:58');
INSERT INTO `productos` VALUES ('39', 'Carne picada orgánica', 'Producto: Refrigerado y envasado al vacío por unidad.', 'Carlitos', '595.50', 'car04.jpg', '1', '2', '5', '6', null, '2019-02-28 13:51:58', '2019-02-28 13:51:58');
INSERT INTO `productos` VALUES ('40', 'Mix de vegetales deshidratados pesto', 'Blend de hierbas y especias: Sabores regionales Condimentos 100% naturales, SIN SAL SIN GMS (las aromáticas que se utilizan son orgánicas).', 'Saros', '107.50', 'esp04.jpg', '1', '2', '5', '7', null, '2019-02-28 13:51:58', '2019-02-28 13:51:58');
INSERT INTO `productos` VALUES ('41', 'Manzana', 'Las mejores manzanas orgánicas. Cosechadas sin ningún producto químico.', 'Tallo Verde', '75.00', 'man03.jpg', '1', '3', '1', '1', null, '2019-02-28 13:51:58', '2019-02-28 13:51:58');
INSERT INTO `productos` VALUES ('42', 'Tomate', 'Tomates deliciosos de estación. Es un alimento con escasa cantidad de calorías. El tomate es una fuente importante de ciertos minerales (como el potasio y el magnesio).', 'Tallo Verde', '38.00', 'tom03.jpg', '1', '3', '1', '2', null, '2019-02-28 13:51:58', '2019-02-28 13:51:58');
INSERT INTO `productos` VALUES ('43', 'Lechuga criolla', 'La lechuga, desde el punto de vista alimentario, es especialmente apreciada por su frescura, gran digestibilidad y contenido de agua.', 'Tallo Verde', '46.50', 'lec03.jpg', '1', '3', '1', '2', null, '2019-02-28 13:51:58', '2019-02-28 13:51:58');
INSERT INTO `productos` VALUES ('44', 'Pera', 'Muy beneficiosa. Entre las vitaminas que contiene la palta podemos resaltar la A, C, folato o B9, E, niacina o B3, piridoxxina o B6, riboflavina o B2 y tiamina o B1.', 'Tallo Verde', '150.00', 'pal02.jpg', '1', '3', '1', '2', null, '2019-02-28 13:51:58', '2019-02-28 13:51:58');
INSERT INTO `productos` VALUES ('45', 'Pan de campo', 'Muy delicioso, sin conservantes ni aditivos químicos.', 'Carolu', '105.00', 'pan04.jpg', '1', '3', '1', '3', null, '2019-02-28 13:51:58', '2019-02-28 13:51:58');
INSERT INTO `productos` VALUES ('46', 'Salchichas de pollo', 'Salchicha elaborada con patamuslo Pastoríl y tocino.', 'Carolu', '300.80', 'gra04.jpg', '1', '3', '1', '4', null, '2019-02-28 13:51:58', '2019-02-28 13:51:58');
INSERT INTO `productos` VALUES ('47', 'Queso de cabra', 'Queso estacionado fresco realizado con cabras de primera calidad.', 'Carolu', '154.00', 'lac03.jpg', '1', '3', '1', '5', null, '2019-02-28 13:51:58', '2019-02-28 13:51:58');
INSERT INTO `productos` VALUES ('48', 'Milanesas de peceto sin rebozar', 'Carne de novillos criados y alimentados sobre pasturas de campos orgánicos certificados, únicos en el país.', 'Carolu', '595.50', 'car05.jpg', '1', '3', '5', '6', null, '2019-02-28 13:51:58', '2019-02-28 13:51:58');
INSERT INTO `productos` VALUES ('49', 'Manzana', 'Manzanas deliciosas que sirven para jugos y tartas.', 'Gatofer', '68.00', 'man04.jpg', '1', '4', '1', '1', null, '2019-02-28 13:51:58', '2019-02-28 13:51:58');
INSERT INTO `productos` VALUES ('50', 'Durazno', 'Aportan vitaminas, entre las que destaca la vitamina C y de minerales, y proporciones moderadas de carotenoides con actividad provitamínica A como alfa-caroteno, beta-caroteno y criptoxantina, así como de otros carotenoides sin esta actividad como luteína y zeaxantina.', 'Gatofer', '68.00', 'dur02.jpg', '1', '4', '1', '1', null, '2019-02-28 13:51:58', '2019-02-28 13:51:58');
INSERT INTO `productos` VALUES ('51', 'Tomate redondo', 'Tomates deliciosos de estación. Es un alimento con escasa cantidad de calorías. El tomate es una fuente importante de ciertos minerales (como el potasio y el magnesio).', 'Gatofer', '39.30', 'tom04.jpg', '1', '4', '1', '2', null, '2019-02-28 13:51:58', '2019-02-28 13:51:58');
INSERT INTO `productos` VALUES ('52', 'Lechuga criolla', 'La lechuga, desde el punto de vista alimentario, es especialmente apreciada por su frescura, gran digestibilidad y contenido de agua.', 'Gatofer', '70.50', 'lec04.jpg', '1', '4', '1', '2', null, '2019-02-28 13:51:58', '2019-02-28 13:51:58');
INSERT INTO `productos` VALUES ('53', 'Pan Baguet', 'Sin conservantes ni aditivos químicos.', 'Gatofer', '80.00', 'pan05.jpg', '1', '4', '1', '3', null, '2019-02-28 13:51:59', '2019-02-28 13:51:59');
INSERT INTO `productos` VALUES ('54', 'Suprema deshuesada', 'Se entrega en bolsas térmicas para mantener la temperatura -2 y - 8 grados. La temperatura de frezado es de -18 grados. Una vez recibido puede frezarlo.', 'Gatofer', '125.00', 'gra05.jpg', '1', '4', '1', '4', null, '2019-02-28 13:51:59', '2019-02-28 13:51:59');
INSERT INTO `productos` VALUES ('55', 'Queso pategrás', 'Quesos 100% orgánicos de Tandil.\r\n		Elaborados desde la aplicación de métodos no contaminantes en la producción, sin aditivos químicos ni sustancias de origen sintético, pero además, representan una producción en sintonía con el cuidado del medio ambiente y el desarrollo sustentable.', 'Gatofer', '189.50', 'lac06.jpg', '1', '4', '5', '5', null, '2019-02-28 13:51:59', '2019-02-28 13:51:59');
INSERT INTO `productos` VALUES ('56', 'Mix especias Parisino', 'Un aromático y delicado sabor para todas tus comidas.', 'Gatofer', '140.90', 'esp05.jpg', '1', '4', '5', '7', null, '2019-02-28 13:51:59', '2019-02-28 13:51:59');
INSERT INTO `productos` VALUES ('57', 'Quinoa roja', 'Contiene más contenido de fibra dietética que la Quinua Blanca.\r\n		La quinua es el único grano que contiene todos los nueve aminoácidos esenciales para la nutrición humana.', 'Gatofer', '160.90', 'sem04.jpg', '1', '4', '5', '8', null, '2019-02-28 13:52:00', '2019-02-28 13:52:00');
INSERT INTO `productos` VALUES ('58', 'Quinoa Blanca', 'Rica en fibra dietética; mejora el control del azúcar en la sangre.\r\n		La quinua es el único grano que contiene todos los nueve aminoácidos esenciales para la nutrición humana.', 'Gatofer', '155.90', 'sem05.jpg', '1', '4', '5', '8', null, '2019-02-28 13:52:00', '2019-02-28 13:52:00');
INSERT INTO `productos` VALUES ('59', 'Manzana', 'Manzanas deliciosas que sirven para jugos y tartas.', 'El Jardín', '68.00', 'man05.jpg', '1', '5', '1', '1', null, '2019-02-28 13:52:00', '2019-02-28 13:52:00');
INSERT INTO `productos` VALUES ('60', 'Durazno', 'Aportan vitaminas, entre las que destaca la vitamina C y de minerales, y proporciones moderadas de carotenoides con actividad provitamínica A como alfa-caroteno, beta-caroteno y criptoxantina, así como de otros carotenoides sin esta actividad como luteína y zeaxantina.', 'El Jardín', '115.00', 'dur03.jpg', '1', '5', '1', '1', null, '2019-02-28 13:52:00', '2019-02-28 13:52:00');
INSERT INTO `productos` VALUES ('61', 'Tomate', 'Tomates deliciosos de estación. Es un alimento con escasa cantidad de calorías. El tomate es una fuente importante de ciertos minerales (como el potasio y el magnesio).', 'El Jardín', '30.00', 'tom05.jpg', '1', '5', '1', '2', null, '2019-02-28 13:52:00', '2019-02-28 13:52:00');
INSERT INTO `productos` VALUES ('62', 'Morrón rojo', 'Los morrones rojos son ricos en fibra, lo que ayuda a producir sensación de saciedad, al mismo tiempo que combate el estreñimiento. En este aspecto también resulta beneficioso la gran cantidad de agua que poseen.', 'El Jardín', '40.00', 'mor02.jpg', '1', '5', '1', '2', null, '2019-02-28 13:52:00', '2019-02-28 13:52:00');
INSERT INTO `productos` VALUES ('63', 'Pan saborizado', 'Sin conservantes ni aditivos químicos.', 'El Jardín', '85.00', 'pan06.jpg', '1', '5', '1', '3', null, '2019-02-28 13:52:00', '2019-02-28 13:52:00');
INSERT INTO `productos` VALUES ('64', 'Pollo entero orgánico', 'Pollo fresco sin aditivos ni conservantes', 'El Jardín', '156.99', 'gra06.jpg', '1', '5', '1', '4', null, '2019-02-28 13:52:00', '2019-02-28 13:52:00');
INSERT INTO `productos` VALUES ('65', 'Copos de maíz ', 'Producto sin certificación orgánica.\r\n		Los productos garantizados libres de TACC, sin gluten, sólo son provistos en paquetes individuales de 100 gr cada uno y cuentan en su frente con la identificación del logo.', 'El Jardín', '85.90', 'sem06.jpg', '1', '5', '5', '8', null, '2019-02-28 13:52:00', '2019-02-28 13:52:00');
INSERT INTO `productos` VALUES ('66', 'Naranja', 'Naranjas deliciosas ideales para jugos y batidos.', 'Company', '65.00', 'man03.jpg', '1', '6', '1', '1', null, '2019-02-28 13:52:00', '2019-02-28 13:52:00');
INSERT INTO `productos` VALUES ('67', 'Durazno', 'Duraznos frescos y de estación super deliciosos.', 'Company', '65.00', 'dur04.jpg', '1', '6', '1', '1', null, '2019-02-28 13:52:00', '2019-02-28 13:52:00');
INSERT INTO `productos` VALUES ('68', 'Pan de campo', 'Sin conservantes ni aditivos químicos.', 'Company', '68.00', 'pan07.jpg', '1', '6', '1', '3', null, '2019-02-28 13:52:00', '2019-02-28 13:52:00');
INSERT INTO `productos` VALUES ('69', 'Pan baguete', 'Sin conservantes ni aditivos químicos.', 'Company', '85.90', 'pan08.jpg', '1', '6', '1', '3', null, '2019-02-28 13:52:01', '2019-02-28 13:52:01');
INSERT INTO `productos` VALUES ('70', 'Queso de cabra', 'Ingredientes: Leche de cabra, sal, cuajos, fermentos lácticos.', 'Company', '120.00', 'lac04.jpg', '1', '6', '1', '5', null, '2019-02-28 13:52:01', '2019-02-28 13:52:01');
INSERT INTO `productos` VALUES ('71', 'Queso de cabra sabor ají', 'Ingredientes: Leche de cabra, sal, cuajos, fermentos lácticos..', 'Company', '170.90', 'lac07.jpg', '1', '6', '1', '5', null, '2019-02-28 13:52:01', '2019-02-28 13:52:01');
INSERT INTO `productos` VALUES ('72', 'Kiwi', 'El kiwi también tiene potasio, sodio, pocas calorías, hidratos de carbono, calcio o hierro.', 'Brote', '85.00', 'kiw02.jpg', '1', '7', '1', '1', null, '2019-02-28 13:52:01', '2019-02-28 13:52:01');
INSERT INTO `productos` VALUES ('73', 'Frutilla', 'La fresa es una fruta del bosque adecuada en regímenes dietéticos.', 'Brote', '85.00', 'fru03.jpg', '1', '7', '1', '1', null, '2019-02-28 13:52:01', '2019-02-28 13:52:01');
INSERT INTO `productos` VALUES ('74', 'Morrón', 'Beneficiosos por la gran cantidad de agua que poseen', 'Brote', '44.00', 'mor03.jpg', '1', '7', '1', '2', null, '2019-02-28 13:52:01', '2019-02-28 13:52:01');
INSERT INTO `productos` VALUES ('75', 'Zanahoria', 'Ideal para hacer jugos de zanahoria.', 'Brote', '29.99', 'zan02.jpg', '1', '7', '1', '2', null, '2019-02-28 13:52:01', '2019-02-28 13:52:01');
INSERT INTO `productos` VALUES ('76', 'Pimentón', 'Producto sin agro-químicos y pesticidas.', 'De Mi Campo', '85.90', 'esp06.jpg', '1', '7', '5', '7', null, '2019-02-28 13:52:01', '2019-02-28 13:52:01');
INSERT INTO `productos` VALUES ('77', 'Ají molido', 'Producto Natural, sin conservantes ni aditivos.', 'De Mi Campo', '44.50', 'esp07.jpg', '1', '7', '5', '7', null, '2019-02-28 13:52:01', '2019-02-28 13:52:01');
INSERT INTO `productos` VALUES ('78', 'Aceite de coco', 'Es muy bueno para frituras y salteados por su resistencia al calor. Disminuye el nivel de colesterol en sangre. Posee propiedades antioxidantes, anticancerígenas, antivirales, antifúngicas y antibacterianas. Se recomienda 3 cucharadas diarias.', 'Napus', '200.50', 'emb04.jpg', '1', '7', '5', '9', null, '2019-02-28 13:52:01', '2019-02-28 13:52:01');
INSERT INTO `productos` VALUES ('79', 'Aceite de coco virgen', 'Proveniente de plantaciones Filipinas de cocos frescos recién recolectados y prensados en frío se explime la pulpa blanca carnosa de este fruto, logrando un aceite intenso y delicioso de excelente calidad, conservando el 100% de sus propiedades.', 'Napus', '258.50', 'emb05.jpg', '1', '7', '5', '9', null, '2019-02-28 13:52:01', '2019-02-28 13:52:01');

-- ----------------------------
-- Table structure for `rel_pedidos_productos`
-- ----------------------------
DROP TABLE IF EXISTS `rel_pedidos_productos`;
CREATE TABLE `rel_pedidos_productos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `producto_id` int(10) unsigned NOT NULL,
  `pedido_id` int(10) unsigned NOT NULL,
  `cantidad` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of rel_pedidos_productos
-- ----------------------------
INSERT INTO `rel_pedidos_productos` VALUES ('1', '1', '1', '1.00', '2019-02-28 13:52:05', '2019-02-28 13:52:05');
INSERT INTO `rel_pedidos_productos` VALUES ('2', '2', '1', '1.00', '2019-02-28 13:52:05', '2019-02-28 13:52:05');
INSERT INTO `rel_pedidos_productos` VALUES ('3', '7', '1', '1.00', '2019-02-28 13:52:06', '2019-02-28 13:52:06');
INSERT INTO `rel_pedidos_productos` VALUES ('4', '9', '1', '1.00', '2019-02-28 13:52:06', '2019-02-28 13:52:06');
INSERT INTO `rel_pedidos_productos` VALUES ('5', '18', '1', '1.00', '2019-02-28 13:52:06', '2019-02-28 13:52:06');
INSERT INTO `rel_pedidos_productos` VALUES ('6', '21', '1', '1.00', '2019-02-28 13:52:06', '2019-02-28 13:52:06');
INSERT INTO `rel_pedidos_productos` VALUES ('7', '41', '2', '1.00', '2019-02-28 13:52:06', '2019-02-28 13:52:06');
INSERT INTO `rel_pedidos_productos` VALUES ('8', '44', '2', '1.00', '2019-02-28 13:52:06', '2019-02-28 13:52:06');
INSERT INTO `rel_pedidos_productos` VALUES ('9', '48', '2', '1.00', '2019-02-28 13:52:06', '2019-02-28 13:52:06');
INSERT INTO `rel_pedidos_productos` VALUES ('10', '30', '3', '1.00', '2019-02-28 13:52:06', '2019-02-28 13:52:06');
INSERT INTO `rel_pedidos_productos` VALUES ('11', '32', '3', '1.00', '2019-02-28 13:52:06', '2019-02-28 13:52:06');
INSERT INTO `rel_pedidos_productos` VALUES ('12', '34', '3', '1.00', '2019-02-28 13:52:06', '2019-02-28 13:52:06');
INSERT INTO `rel_pedidos_productos` VALUES ('13', '36', '3', '1.00', '2019-02-28 13:52:06', '2019-02-28 13:52:06');
INSERT INTO `rel_pedidos_productos` VALUES ('14', '38', '3', '1.00', '2019-02-28 13:52:06', '2019-02-28 13:52:06');
INSERT INTO `rel_pedidos_productos` VALUES ('15', '32', '4', '1.00', '2019-02-28 13:52:06', '2019-02-28 13:52:06');
INSERT INTO `rel_pedidos_productos` VALUES ('16', '33', '4', '1.00', '2019-02-28 13:52:06', '2019-02-28 13:52:06');
INSERT INTO `rel_pedidos_productos` VALUES ('17', '34', '4', '1.00', '2019-02-28 13:52:06', '2019-02-28 13:52:06');
INSERT INTO `rel_pedidos_productos` VALUES ('18', '19', '5', '1.00', '2019-02-28 13:52:06', '2019-02-28 13:52:06');
INSERT INTO `rel_pedidos_productos` VALUES ('19', '22', '5', '1.00', '2019-02-28 13:52:06', '2019-02-28 13:52:06');
INSERT INTO `rel_pedidos_productos` VALUES ('20', '24', '5', '1.00', '2019-02-28 13:52:06', '2019-02-28 13:52:06');
INSERT INTO `rel_pedidos_productos` VALUES ('21', '10', '6', '1.00', '2019-02-28 13:52:06', '2019-02-28 13:52:06');
INSERT INTO `rel_pedidos_productos` VALUES ('22', '11', '6', '1.00', '2019-02-28 13:52:07', '2019-02-28 13:52:07');
INSERT INTO `rel_pedidos_productos` VALUES ('23', '5', '7', '1.00', '2019-02-28 13:52:07', '2019-02-28 13:52:07');
INSERT INTO `rel_pedidos_productos` VALUES ('24', '7', '7', '1.00', '2019-02-28 13:52:07', '2019-02-28 13:52:07');
INSERT INTO `rel_pedidos_productos` VALUES ('25', '11', '7', '1.00', '2019-02-28 13:52:07', '2019-02-28 13:52:07');
INSERT INTO `rel_pedidos_productos` VALUES ('26', '18', '7', '1.00', '2019-02-28 13:52:07', '2019-02-28 13:52:07');
INSERT INTO `rel_pedidos_productos` VALUES ('27', '20', '8', '1.00', '2019-02-28 13:52:07', '2019-02-28 13:52:07');
INSERT INTO `rel_pedidos_productos` VALUES ('28', '24', '8', '1.00', '2019-02-28 13:52:07', '2019-02-28 13:52:07');
INSERT INTO `rel_pedidos_productos` VALUES ('29', '41', '9', '1.00', '2019-02-28 13:52:07', '2019-02-28 13:52:07');
INSERT INTO `rel_pedidos_productos` VALUES ('30', '43', '9', '1.00', '2019-02-28 13:52:07', '2019-02-28 13:52:07');
INSERT INTO `rel_pedidos_productos` VALUES ('31', '45', '9', '1.00', '2019-02-28 13:52:07', '2019-02-28 13:52:07');
INSERT INTO `rel_pedidos_productos` VALUES ('32', '1', '10', '10.00', '2019-02-28 13:52:52', '2019-02-28 13:52:52');
INSERT INTO `rel_pedidos_productos` VALUES ('33', '5', '11', '3.00', '2019-02-28 13:53:46', '2019-02-28 13:53:46');
INSERT INTO `rel_pedidos_productos` VALUES ('34', '2', '12', '1.00', '2019-02-28 16:55:01', '2019-02-28 16:55:01');
INSERT INTO `rel_pedidos_productos` VALUES ('35', '26', '13', '5.00', '2019-02-28 10:56:53', '2019-02-28 10:56:53');

-- ----------------------------
-- Table structure for `reviews`
-- ----------------------------
DROP TABLE IF EXISTS `reviews`;
CREATE TABLE `reviews` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `comentario` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `stars` tinyint(3) unsigned NOT NULL,
  `huerta_id` int(10) unsigned NOT NULL,
  `usuario_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of reviews
-- ----------------------------
INSERT INTO `reviews` VALUES ('1', 'Todo genial! Los productos llegaron en tiempo y forma.', '5', '1', '1', '2019-02-28 13:52:02', '2019-02-28 13:52:02');
INSERT INTO `reviews` VALUES ('2', 'Lamentablemente no tenian dos productos que pedí. Igualmente me los descontaron del pedido. Todo bien.', '4', '2', '2', '2019-02-28 13:52:02', '2019-02-28 13:52:02');
INSERT INTO `reviews` VALUES ('3', 'No me gustaron mucho los productos. Se notaba que a las frutas le faltaba mucho para madurar', '3', '3', '3', '2019-02-28 13:52:02', '2019-02-28 13:52:02');
INSERT INTO `reviews` VALUES ('4', 'Pido siempre! me encantan!', '5', '4', '4', '2019-02-28 13:52:02', '2019-02-28 13:52:02');
INSERT INTO `reviews` VALUES ('5', 'Pedi ayer y hoy ya recibi los productos, genioss', '5', '5', '5', '2019-02-28 13:52:02', '2019-02-28 13:52:02');
INSERT INTO `reviews` VALUES ('6', 'La primera vez que pido a esta granja. Todo bien aunque se demoraron en contactarme', '3', '6', '6', '2019-02-28 13:52:02', '2019-02-28 13:52:02');
INSERT INTO `reviews` VALUES ('7', 'Que bueno que ofrezcan tantos productos de manera orgánica. Muy recomendables.', '4', '7', '7', '2019-02-28 13:52:02', '2019-02-28 13:52:02');
INSERT INTO `reviews` VALUES ('8', 'Me parecio que tenia buenos precios, pude hacer muchas comidas con los productos que compre. Buena relacion precio calidad.', '3', '8', '8', '2019-02-28 13:52:02', '2019-02-28 13:52:02');
INSERT INTO `reviews` VALUES ('9', 'No me gustó mucho. Medios desprolijos en el proceso de entrega.', '2', '1', '9', '2019-02-28 13:52:02', '2019-02-28 13:52:02');
INSERT INTO `reviews` VALUES ('10', 'Muy buena onda los chicos. Resolvieron mis dudas y entregaron el pedido como lo habiamos pactado.', '4', '2', '10', '2019-02-28 13:52:02', '2019-02-28 13:52:02');
INSERT INTO `reviews` VALUES ('11', 'Un 10!', '5', '3', '11', '2019-02-28 13:52:02', '2019-02-28 13:52:02');
INSERT INTO `reviews` VALUES ('12', 'Se olvidaron de un producto pero lo trajeron al otro dia sin problema.', '3', '4', '12', '2019-02-28 13:52:02', '2019-02-28 13:52:02');
INSERT INTO `reviews` VALUES ('13', 'Hace mucho queria pedir en esta huerta y la verdad que no me defraudó', '4', '5', '13', '2019-02-28 13:52:02', '2019-02-28 13:52:02');
INSERT INTO `reviews` VALUES ('14', 'Los recomiendo en cuanto a calidad, los precios me parecieron super caro por la cantidad que ofrecen.', '3', '6', '14', '2019-02-28 13:52:02', '2019-02-28 13:52:02');
INSERT INTO `reviews` VALUES ('15', 'No los recomiendo, Lamentablemente llegaron en un horario que no habiamos acordado y no pude recibir el pedido.', '1', '7', '1', '2019-02-28 13:52:02', '2019-02-28 13:52:02');
INSERT INTO `reviews` VALUES ('16', 'Súper!', '4', '8', '15', '2019-02-28 13:52:02', '2019-02-28 13:52:02');

-- ----------------------------
-- Table structure for `shoppingcart`
-- ----------------------------
DROP TABLE IF EXISTS `shoppingcart`;
CREATE TABLE `shoppingcart` (
  `identifier` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instance` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`identifier`,`instance`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of shoppingcart
-- ----------------------------

-- ----------------------------
-- Table structure for `tipos_pagos`
-- ----------------------------
DROP TABLE IF EXISTS `tipos_pagos`;
CREATE TABLE `tipos_pagos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of tipos_pagos
-- ----------------------------
INSERT INTO `tipos_pagos` VALUES ('1', 'Efectivo', '2019-02-28 13:52:04', '2019-02-28 13:52:04');

-- ----------------------------
-- Table structure for `tipo_huerta`
-- ----------------------------
DROP TABLE IF EXISTS `tipo_huerta`;
CREATE TABLE `tipo_huerta` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipo` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of tipo_huerta
-- ----------------------------
INSERT INTO `tipo_huerta` VALUES ('1', 'básica', '2019-02-28 13:51:55', '2019-02-28 13:51:55');
INSERT INTO `tipo_huerta` VALUES ('2', 'premium', '2019-02-28 13:51:55', '2019-02-28 13:51:55');

-- ----------------------------
-- Table structure for `unidades_de_medida`
-- ----------------------------
DROP TABLE IF EXISTS `unidades_de_medida`;
CREATE TABLE `unidades_de_medida` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `unidad` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of unidades_de_medida
-- ----------------------------
INSERT INTO `unidades_de_medida` VALUES ('1', 'kg', '2019-02-28 13:51:56', '2019-02-28 13:51:56');
INSERT INTO `unidades_de_medida` VALUES ('2', 'g', '2019-02-28 13:51:56', '2019-02-28 13:51:56');
INSERT INTO `unidades_de_medida` VALUES ('3', 'l', '2019-02-28 13:51:56', '2019-02-28 13:51:56');
INSERT INTO `unidades_de_medida` VALUES ('4', 'ml', '2019-02-28 13:51:56', '2019-02-28 13:51:56');
INSERT INTO `unidades_de_medida` VALUES ('5', 'u', '2019-02-28 13:51:56', '2019-02-28 13:51:56');
INSERT INTO `unidades_de_medida` VALUES ('6', 'cc', '2019-02-28 13:51:56', '2019-02-28 13:51:56');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Laura', 'Mitono', 'lau@mail.com', '$2y$10$xYfFhE0H2fo/wnEWN/i0vug0o2sHtC8IdTKxO/1R0DpxtnNxeC1uC', '15-3039-8007', 'lau.jpg', 'activo', 'admin', null, null, '2019-02-28 13:51:53', '2019-02-28 13:51:53');
INSERT INTO `users` VALUES ('2', 'Florencia', 'Ederli', 'fespi@mail.com', '$2y$10$ZnMqaVEL21hHfa25vxu4H.6.6Q6C3biCi88Mid8piD2TOzQN4W.9G', null, null, 'activo', 'admin', null, null, '2019-02-28 13:51:53', '2019-02-28 13:51:53');
INSERT INTO `users` VALUES ('3', 'Florencia', 'Sepúlveda', 'flor@mail.com', '$2y$10$1i.J9jarRBhnI5aniCyrqOiHEaWuSxCnH7DvlYZDBW4wwB3r6CmqO', '2365-4578', 'flors.jpg', 'activo', 'admin', null, null, '2019-02-28 13:51:53', '2019-02-28 13:51:53');
INSERT INTO `users` VALUES ('4', 'Emiliano', 'Hotes', 'emi@mail.com', '$2y$10$q5c/KKqUgPIDdVqU4a8wR.48jMrsmectFnlv3me/DchM77aGVGRqe', '23544568', 'emi.jpg', 'activo', 'admin', null, null, '2019-02-28 13:51:53', '2019-02-28 13:51:53');
INSERT INTO `users` VALUES ('5', 'Ignacio', 'Holus', 'ignacio@mail.com', '$2y$10$.Wvd.d/L7N13NUnF9w/3K.cFJg8YYYsM.RFf97F7gfD89xQzEhTey', '15-8475-3654', null, 'activo', 'cliente', null, null, '2019-02-28 13:51:54', '2019-02-28 13:51:54');
INSERT INTO `users` VALUES ('6', 'Horacio', 'Sangusto', 'horacio@mail.com', '$2y$10$y7yAC8.4Fn5qCDDXwaviA.fetqXEOCrEmq21g/5u09mW2OUw1hKA6', '15-3039-8007', 'horacio.jpg', 'suspendido', 'cliente', null, null, '2019-02-28 13:51:54', '2019-02-28 13:51:54');
INSERT INTO `users` VALUES ('7', 'Agustín', 'Salgado', 'agustin@mail.com', '$2y$10$0CuG4xPoXkiaSLgNd7J95ODOa29y.cQqh9rerjHpeqw8W5GkbASHO', '25484569', null, 'activo', 'cliente', 'jGY8XAwwjMsiK9xpKHrZ1Ra0XK71TfEwu10VmZC2F6DKz3F4M2NAkzw7lVa0', null, '2019-02-28 13:51:54', '2019-02-28 13:51:54');
INSERT INTO `users` VALUES ('8', 'Camila', 'Rojas', 'camila@mail.com', '$2y$10$qf9TXfjl/cnB.ItQXlyYkuA/1pN/hGbBIP4QTQN7NpOJ6n5jP2xHW', '15-2136-5478', null, 'activo', 'cliente', null, null, '2019-02-28 13:51:54', '2019-02-28 13:51:54');
INSERT INTO `users` VALUES ('9', 'Carlos', 'Gomez', 'carlos@mail.com.ar', '$2y$10$szNHBPZCSrPmqaffkJQLeOl00NALo8aAPwASr4f4ubK4.DUKRJYq6', '11 4568-1223', 'carlos.jpg', 'activo', 'huerta', null, null, '2019-02-28 13:51:54', '2019-02-28 13:51:54');
INSERT INTO `users` VALUES ('10', 'Pedro', 'Martinez', 'pedro@mail.com.ar', '$2y$10$a5bRnUnCrjEF1GkyagPGQeAy2l8Wx39ihd9W2uoRrTKtTrTP/tQii', '11-6547-8542', 'pedro.png', 'suspendido', 'huerta', null, null, '2019-02-28 13:51:54', '2019-02-28 13:51:54');
INSERT INTO `users` VALUES ('11', 'Oscar', 'Lopez', 'oscar@mail.com.ar', '$2y$10$L7JkntOnBeCibzrdAAUNVezIgEWGqzPCV4vUVgk.6ohzyf0pxn8Ie', '0-800-88-8256', 'oscar.png', 'pendiente de pago', 'huerta', 'MD62kkhvaIqRO3jfhLJLLyt5ll8qbJZ3pYEVvhlKKWUnOrMV0U4jYjhjGYRH', null, '2019-02-28 13:51:55', '2019-02-28 13:51:55');
INSERT INTO `users` VALUES ('12', 'Mariano', 'Pedraza', 'mariano@mail.com.ar', '$2y$10$QvQbCAv7bIu7MGRLXDAI6OUxK3DEgeDGKiA9oWNnt6n7EZlzZ/X9a', '15-2839-8358', 'mariano.jpg', 'dado de baja', 'huerta', null, null, '2019-02-28 13:51:55', '2019-02-28 13:51:55');
INSERT INTO `users` VALUES ('13', 'Clara', 'Diaz', 'clara@mail.com.ar', '$2y$10$FqbO1BzBzVCuF9OyPs0WBeqEqrVqk3yklAVqzKEKu.dHHVVG3OOj6', '15-2025-1564', 'clara.jpg', 'activo', 'huerta', null, null, '2019-02-28 13:51:55', '2019-02-28 13:51:55');
INSERT INTO `users` VALUES ('14', 'Pedro', 'Mendoza', 'pedrom@mail.com.ar', '$2y$10$P8Rzcib.YsEWM6gsuLKmBu7RMixHFBY4IsQOaiLa8yorsOk32qfZq', '15-8974-6325', 'pedro.jpg', 'activo', 'huerta', null, null, '2019-02-28 13:51:55', '2019-02-28 13:51:55');
INSERT INTO `users` VALUES ('15', 'Lara', 'Mugas', 'lara@mail.com.ar', '$2y$10$rErfg6D0/nKZIheFi0Fryelg0TEV1ObxXnkIjiVuETd9ugGE2/eHm', '15-6548-3214', 'lara.jpg', 'activo', 'huerta', null, null, '2019-02-28 13:51:55', '2019-02-28 13:51:55');
INSERT INTO `users` VALUES ('16', 'Tomás', 'Laucier', 'tomas@mail.com.ar', '$2y$10$lftzi/oT0OBplhgwXnJHzOj3serV3A/2NUwHwcINBviIVXRYK110W', '15-8745-9632', 'tomas.jpg', 'activo', 'huerta', null, null, '2019-02-28 13:51:55', '2019-02-28 13:51:55');

-- ----------------------------
-- Table structure for `zonas`
-- ----------------------------
DROP TABLE IF EXISTS `zonas`;
CREATE TABLE `zonas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `zona` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of zonas
-- ----------------------------
