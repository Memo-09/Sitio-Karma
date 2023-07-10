/*
 Navicat Premium Data Transfer

 Source Server         : CONEXION_GENEARL
 Source Server Type    : MySQL
 Source Server Version : 50733
 Source Host           : localhost:3306
 Source Schema         : tienda_ropa

 Target Server Type    : MySQL
 Target Server Version : 50733
 File Encoding         : 65001

 Date: 22/06/2023 15:12:21
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for categorias
-- ----------------------------
DROP TABLE IF EXISTS `categorias`;
CREATE TABLE `categorias`  (
  `ID_Categoria` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`ID_Categoria`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categorias
-- ----------------------------
INSERT INTO `categorias` VALUES (1, 'ZAPATOS');
INSERT INTO `categorias` VALUES (3, 'SUDADERAS/PLAYERAS');
INSERT INTO `categorias` VALUES (5, 'VESTIDOS');
INSERT INTO `categorias` VALUES (11, 'PERFUMES');

-- ----------------------------
-- Table structure for compra
-- ----------------------------
DROP TABLE IF EXISTS `compra`;
CREATE TABLE `compra`  (
  `ID_Compra` int(11) NOT NULL AUTO_INCREMENT,
  `Fecha` date NOT NULL,
  `Total` decimal(10, 2) NOT NULL,
  `ID_Proveedor` int(11) NOT NULL,
  PRIMARY KEY (`ID_Compra`) USING BTREE,
  INDEX `fk_proveedor`(`ID_Proveedor`) USING BTREE,
  CONSTRAINT `fk_proveedor` FOREIGN KEY (`ID_Proveedor`) REFERENCES `proveedores` (`ID_Proveedor`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of compra
-- ----------------------------

-- ----------------------------
-- Table structure for detalle_compra
-- ----------------------------
DROP TABLE IF EXISTS `detalle_compra`;
CREATE TABLE `detalle_compra`  (
  `ID_Detalle` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Compra` int(11) NOT NULL,
  `ID_Producto` int(11) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Precio_Unitario` decimal(10, 2) NOT NULL,
  PRIMARY KEY (`ID_Detalle`) USING BTREE,
  INDEX `fk_compra`(`ID_Compra`) USING BTREE,
  INDEX `fk_producto`(`ID_Producto`) USING BTREE,
  CONSTRAINT `fk_compra` FOREIGN KEY (`ID_Compra`) REFERENCES `compra` (`ID_Compra`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_producto` FOREIGN KEY (`ID_Producto`) REFERENCES `productos` (`ID_Producto`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of detalle_compra
-- ----------------------------

-- ----------------------------
-- Table structure for detalles_venta
-- ----------------------------
DROP TABLE IF EXISTS `detalles_venta`;
CREATE TABLE `detalles_venta`  (
  `ID_Venta` int(11) NOT NULL,
  `ID_Producto` int(11) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Precio` decimal(10, 2) NOT NULL,
  PRIMARY KEY (`ID_Venta`, `ID_Producto`) USING BTREE,
  INDEX `fk_producto`(`ID_Producto`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic PARTITION BY KEY (`ID_Venta`)
PARTITIONS 5
(PARTITION `p0` MAX_ROWS = 0 MIN_ROWS = 0 ,
PARTITION `p1` MAX_ROWS = 0 MIN_ROWS = 0 ,
PARTITION `p2` MAX_ROWS = 0 MIN_ROWS = 0 ,
PARTITION `p3` MAX_ROWS = 0 MIN_ROWS = 0 ,
PARTITION `p4` MAX_ROWS = 0 MIN_ROWS = 0 )
;

-- ----------------------------
-- Records of detalles_venta
-- ----------------------------
INSERT INTO `detalles_venta` VALUES (103, 87, 3, 2300.00);
INSERT INTO `detalles_venta` VALUES (103, 90, 2, 1400.00);
INSERT INTO `detalles_venta` VALUES (104, 88, 3, 2300.00);
INSERT INTO `detalles_venta` VALUES (105, 87, 2, 2300.00);
INSERT INTO `detalles_venta` VALUES (105, 89, 2, 1300.00);
INSERT INTO `detalles_venta` VALUES (102, 88, 2, 2300.00);
INSERT INTO `detalles_venta` VALUES (102, 97, 2, 1200.00);
INSERT INTO `detalles_venta` VALUES (102, 99, 3, 1000.00);
INSERT INTO `detalles_venta` VALUES (106, 95, 5, 3400.00);
INSERT INTO `detalles_venta` VALUES (106, 100, 2, 1400.00);

-- ----------------------------
-- Table structure for marcas
-- ----------------------------
DROP TABLE IF EXISTS `marcas`;
CREATE TABLE `marcas`  (
  `ID_Marca` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`ID_Marca`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of marcas
-- ----------------------------
INSERT INTO `marcas` VALUES (1, 'GAP');
INSERT INTO `marcas` VALUES (2, 'HOLLISTER');
INSERT INTO `marcas` VALUES (3, 'ABERCROMBIE');
INSERT INTO `marcas` VALUES (4, 'TOMMY');
INSERT INTO `marcas` VALUES (5, 'PUMA');
INSERT INTO `marcas` VALUES (6, 'ADIDAS');
INSERT INTO `marcas` VALUES (7, 'LACOSTE');

-- ----------------------------
-- Table structure for productos
-- ----------------------------
DROP TABLE IF EXISTS `productos`;
CREATE TABLE `productos`  (
  `ID_Producto` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Tipo` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Precio` decimal(10, 2) NOT NULL,
  `id_macra` int(11) NOT NULL,
  `foto` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` bit(1) NOT NULL,
  PRIMARY KEY (`ID_Producto`) USING BTREE,
  INDEX `fk_marca`(`id_macra`) USING BTREE,
  CONSTRAINT `fk_marca` FOREIGN KEY (`id_macra`) REFERENCES `marcas` (`ID_Marca`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 101 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of productos
-- ----------------------------
INSERT INTO `productos` VALUES (87, 'Zapatos Displesy Flax Epp', 'Zapato', 2300.00, 2, '31mZG70T3XL._AC_.jpg', b'1');
INSERT INTO `productos` VALUES (88, 'Zapatos Black Full', 'Zapato', 2300.00, 2, '71s4T0aUMuL._AC_SL1500_.jpg', b'1');
INSERT INTO `productos` VALUES (89, 'Zapatos Steeck Coool', 'Zapato', 1300.00, 4, 'images.jpg', b'1');
INSERT INTO `productos` VALUES (90, 'Zapatos Sceell Rock', 'Zapato', 1400.00, 7, '71jQ4t7o4HL._AC_SY395_.jpg', b'0');
INSERT INTO `productos` VALUES (91, 'Zapatillas Coool Rock', 'Zapatos', 1500.00, 3, 'descargar - 2023-06-22T130453.598.jpg', b'1');
INSERT INTO `productos` VALUES (92, 'Vestido Steep Cool One', 'Vestido', 2300.00, 7, '41k0zptwt4L._AC_.jpg', b'1');
INSERT INTO `productos` VALUES (93, 'Vestidos Coll Scam Ver', 'Vestidos', 1300.00, 3, 'vestidos-de-gala-disenos-franceses-europeos-mejor-calidad-caracas-distrito-capital-venezuela-evening-dress-ball-gown.jpg', b'1');
INSERT INTO `productos` VALUES (94, 'Vestidos Cool Rock one', 'Vestido', 3400.00, 2, 'f5da00bcda614000a9635114cb721890UR_w1000_q90.jpg', b'1');
INSERT INTO `productos` VALUES (95, 'Vetsidos Steec Mall', 'Vestidos', 3400.00, 4, 'be52ba9190a403047c0e0b3d0f79ebae.jpg', b'1');
INSERT INTO `productos` VALUES (96, 'Perfume Puma Scooll', 'Perfume', 1200.00, 6, '896683-800-800.jpg', b'1');
INSERT INTO `productos` VALUES (97, 'Perfume Dell Scremm', 'Perfume', 1200.00, 7, 'Perfumes-Mujer-Irresistible-Givenchy.jpg', b'1');
INSERT INTO `productos` VALUES (98, 'Perfume Coll Student', 'Perfume', 2400.00, 5, '892147-800-800.jpg', b'1');
INSERT INTO `productos` VALUES (99, 'Sudadera ADIDAS Screem', 'Sudadera', 1000.00, 6, 'sudadera-thrasher-x-alien-workshop-believe.jpg', b'1');
INSERT INTO `productos` VALUES (100, '7 Machos', 'SIN TIPO', 1400.00, 1, '896683-800-800.jpg', b'1');

-- ----------------------------
-- Table structure for productos_categorias
-- ----------------------------
DROP TABLE IF EXISTS `productos_categorias`;
CREATE TABLE `productos_categorias`  (
  `ID_Producto` int(11) NOT NULL,
  `ID_Categoria` int(11) NOT NULL,
  PRIMARY KEY (`ID_Producto`, `ID_Categoria`) USING BTREE,
  INDEX `ID_Categoria`(`ID_Categoria`) USING BTREE,
  CONSTRAINT `productos_categorias_ibfk_1` FOREIGN KEY (`ID_Producto`) REFERENCES `productos` (`ID_Producto`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `productos_categorias_ibfk_2` FOREIGN KEY (`ID_Categoria`) REFERENCES `categorias` (`ID_Categoria`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of productos_categorias
-- ----------------------------
INSERT INTO `productos_categorias` VALUES (87, 1);
INSERT INTO `productos_categorias` VALUES (88, 1);
INSERT INTO `productos_categorias` VALUES (89, 1);
INSERT INTO `productos_categorias` VALUES (90, 1);
INSERT INTO `productos_categorias` VALUES (91, 1);
INSERT INTO `productos_categorias` VALUES (99, 3);
INSERT INTO `productos_categorias` VALUES (92, 5);
INSERT INTO `productos_categorias` VALUES (93, 5);
INSERT INTO `productos_categorias` VALUES (94, 5);
INSERT INTO `productos_categorias` VALUES (95, 5);
INSERT INTO `productos_categorias` VALUES (96, 11);
INSERT INTO `productos_categorias` VALUES (97, 11);
INSERT INTO `productos_categorias` VALUES (98, 11);
INSERT INTO `productos_categorias` VALUES (100, 11);

-- ----------------------------
-- Table structure for proveedores
-- ----------------------------
DROP TABLE IF EXISTS `proveedores`;
CREATE TABLE `proveedores`  (
  `ID_Proveedor` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Direccion` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Telefono` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Foto_Proveedor` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` bit(1) NOT NULL,
  PRIMARY KEY (`ID_Proveedor`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of proveedores
-- ----------------------------
INSERT INTO `proveedores` VALUES (7, 'Puma Direct Mexico', 'Jilotepeec de Molina, Mexico', '5562250825', 'sudadera-thrasher-x-alien-workshop-believe.jpg', b'1');

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles`  (
  `id_roles` int(11) NOT NULL AUTO_INCREMENT,
  `roles` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_roles`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES (1, 'ADMINISTRADOR');
INSERT INTO `roles` VALUES (2, 'CLIENTE');

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios`  (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `contrasena` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_rol` int(11) NOT NULL,
  `correo` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_usuario`) USING BTREE,
  INDEX `fk_roles`(`id_rol`) USING BTREE,
  CONSTRAINT `fk_roles` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_roles`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES (3, 'admin', '123456', 1, 'admin01@gmail.com');
INSERT INTO `usuarios` VALUES (4, 'memo', 'Memocras', 2, 'memo@gmail.com');

-- ----------------------------
-- Table structure for ventas
-- ----------------------------
DROP TABLE IF EXISTS `ventas`;
CREATE TABLE `ventas`  (
  `ID_Venta` int(11) NOT NULL AUTO_INCREMENT,
  `Fecha` date NOT NULL,
  `Total` decimal(10, 2) NOT NULL,
  `id_usuario` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`ID_Venta`) USING BTREE,
  INDEX `fk__usuario`(`id_usuario`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 107 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ventas
-- ----------------------------
INSERT INTO `ventas` VALUES (102, '2023-06-22', 10000.00, 4);
INSERT INTO `ventas` VALUES (103, '2023-06-22', 9700.00, 4);
INSERT INTO `ventas` VALUES (104, '2023-06-22', 6900.00, 4);
INSERT INTO `ventas` VALUES (105, '2023-06-22', 7200.00, 4);
INSERT INTO `ventas` VALUES (106, '2023-06-22', 19800.00, 4);

-- ----------------------------
-- Procedure structure for Acceder
-- ----------------------------
DROP PROCEDURE IF EXISTS `Acceder`;
delimiter ;;
CREATE PROCEDURE `Acceder`(IN p_usuario VARCHAR(255), 
    IN p_contrasenia VARCHAR(8))
BEGIN    
    SELECT u.usuario, u.correo, u.`contrasena`, r.roles FROM usuarios u JOIN roles r ON u.id_rol = r.id_roles WHERE u.correo = p_usuario AND u.contrasena = p_contrasenia;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for ActualizarCantidadApartado
-- ----------------------------
DROP PROCEDURE IF EXISTS `ActualizarCantidadApartado`;
delimiter ;;
CREATE PROCEDURE `ActualizarCantidadApartado`(IN p_ID_Apartado INT,
    IN p_NuevaCantidad INT)
BEGIN
    UPDATE apartados
    SET Cantidad = p_NuevaCantidad
    WHERE ID_Apartado = p_ID_Apartado;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for ActualizarCantidadInventario
-- ----------------------------
DROP PROCEDURE IF EXISTS `ActualizarCantidadInventario`;
delimiter ;;
CREATE PROCEDURE `ActualizarCantidadInventario`(IN p_ID_Producto INT,
    IN p_NuevaCantidad INT)
BEGIN
    UPDATE inventario
    SET Cantidad = p_NuevaCantidad
    WHERE ID_Producto = p_ID_Producto;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for ActualizarCategoria
-- ----------------------------
DROP PROCEDURE IF EXISTS `ActualizarCategoria`;
delimiter ;;
CREATE PROCEDURE `ActualizarCategoria`(IN p_ID_Categoria INT,
    IN p_NuevoNombre VARCHAR(50))
BEGIN
    UPDATE categorias
    SET Nombre = p_NuevoNombre
    WHERE ID_Categoria = p_ID_Categoria;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for ActualizarCategoriaProducto
-- ----------------------------
DROP PROCEDURE IF EXISTS `ActualizarCategoriaProducto`;
delimiter ;;
CREATE PROCEDURE `ActualizarCategoriaProducto`(IN p_ID_Producto INT,
    IN p_ID_CategoriaNueva INT)
BEGIN
    UPDATE productos_categorias
    SET ID_Categoria = p_ID_CategoriaNueva
    WHERE ID_Producto = p_ID_Producto;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for ActualizarCliente
-- ----------------------------
DROP PROCEDURE IF EXISTS `ActualizarCliente`;
delimiter ;;
CREATE PROCEDURE `ActualizarCliente`(IN p_ID_Cliente INT,
    IN p_NuevoNombre VARCHAR(100),
    IN p_NuevaDireccion VARCHAR(200),
    IN p_NuevoTelefono VARCHAR(20))
BEGIN
    UPDATE clientes
    SET Nombre = p_NuevoNombre,
        Direccion = p_NuevaDireccion,
        Telefono = p_NuevoTelefono
    WHERE ID_Cliente = p_ID_Cliente;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for ActualizarDistribucionProveedor
-- ----------------------------
DROP PROCEDURE IF EXISTS `ActualizarDistribucionProveedor`;
delimiter ;;
CREATE PROCEDURE `ActualizarDistribucionProveedor`(IN p_ID_Proveedor INT,
    IN p_ID_ProductoAnterior INT,
    IN p_ID_ProductoNuevo INT)
BEGIN
    UPDATE distribucion_proveedor
    SET ID_Producto = p_ID_ProductoNuevo
    WHERE ID_Proveedor = p_ID_Proveedor AND ID_Producto = p_ID_ProductoAnterior;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for ActualizarIncidenteCliente
-- ----------------------------
DROP PROCEDURE IF EXISTS `ActualizarIncidenteCliente`;
delimiter ;;
CREATE PROCEDURE `ActualizarIncidenteCliente`(IN p_ID_Incidente INT,
    IN p_Descripcion VARCHAR(200),
    IN p_ID_Venta INT)
BEGIN
    UPDATE incidentes_cliente
    SET Descripcion = p_Descripcion,
        ID_Venta = p_ID_Venta
    WHERE ID_Incidente = p_ID_Incidente;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for ActualizarMarca
-- ----------------------------
DROP PROCEDURE IF EXISTS `ActualizarMarca`;
delimiter ;;
CREATE PROCEDURE `ActualizarMarca`(IN p_ID_Marca INT,
    IN p_NuevoNombre VARCHAR(50))
BEGIN
    UPDATE marcas
    SET Nombre = p_NuevoNombre
    WHERE ID_Marca = p_ID_Marca;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for ActualizarProducto
-- ----------------------------
DROP PROCEDURE IF EXISTS `ActualizarProducto`;
delimiter ;;
CREATE PROCEDURE `ActualizarProducto`(IN p_ID_Producto INT,
    IN p_NuevoNombre VARCHAR(100),
    IN p_NuevoTipo VARCHAR(50),
    IN p_NuevoPrecio DECIMAL(10, 2),
    IN p_NuevaMarca INT)
BEGIN
    UPDATE productos
    SET Nombre = p_NuevoNombre,
        Tipo = p_NuevoTipo,
        Precio = p_NuevoPrecio,
        id_macra = p_NuevaMarca
    WHERE ID_Producto = p_ID_Producto;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for ActualizarPromocion
-- ----------------------------
DROP PROCEDURE IF EXISTS `ActualizarPromocion`;
delimiter ;;
CREATE PROCEDURE `ActualizarPromocion`(IN p_ID_Promocion INT,
    IN p_Descuento DECIMAL(5, 2),
    IN p_FechaInicio DATE,
    IN p_FechaFin DATE)
BEGIN
    UPDATE promociones
    SET Descuento = p_Descuento,
        FechaInicio = p_FechaInicio,
        FechaFin = p_FechaFin
    WHERE ID_Promocion = p_ID_Promocion;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for ActualizarProveedor
-- ----------------------------
DROP PROCEDURE IF EXISTS `ActualizarProveedor`;
delimiter ;;
CREATE PROCEDURE `ActualizarProveedor`(IN p_ID_Proveedor INT,
    IN p_NuevoNombre VARCHAR(100),
    IN p_NuevaDireccion VARCHAR(200),
    IN p_NuevoTelefono VARCHAR(20))
BEGIN
    UPDATE proveedores
    SET Nombre = p_NuevoNombre,
        Direccion = p_NuevaDireccion,
        Telefono = p_NuevoTelefono
    WHERE ID_Proveedor = p_ID_Proveedor;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for ActualizarVenta
-- ----------------------------
DROP PROCEDURE IF EXISTS `ActualizarVenta`;
delimiter ;;
CREATE PROCEDURE `ActualizarVenta`(IN p_ID_Venta INT,
    IN p_NuevoID_Cliente INT,
    IN p_NuevaFecha DATE,
    IN p_NuevoTotal DECIMAL(10, 2),
    IN p_NuevoMetodoPago VARCHAR(50))
BEGIN
    UPDATE ventas
    SET ID_Cliente = p_NuevoID_Cliente,
        Fecha = p_NuevaFecha,
        Total = p_NuevoTotal,
        MetodoPago = p_NuevoMetodoPago
    WHERE ID_Venta = p_ID_Venta;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for EditarCategoriaPro
-- ----------------------------
DROP PROCEDURE IF EXISTS `EditarCategoriaPro`;
delimiter ;;
CREATE PROCEDURE `EditarCategoriaPro`(p_id_categoria INT,
	p_id_producto INT)
BEGIN
	UPDATE productos_categorias SET ID_Categoria=p_id_categoria WHERE ID_Producto=p_id_producto;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for EditarProducto
-- ----------------------------
DROP PROCEDURE IF EXISTS `EditarProducto`;
delimiter ;;
CREATE PROCEDURE `EditarProducto`(IN p_ID_Producto INT,
  IN p_Nombre VARCHAR(100),
  IN p_Tipo VARCHAR(50),
  IN p_ID_Marca INT,
  IN p_Precio DECIMAL(10, 2),
  OUT p_Message VARCHAR(255))
BEGIN
  DECLARE v_Count INT;
  
  -- Verificar si existe un registro con el mismo nombre y tipo, excluyendo el registro actual
  SELECT COUNT(*) INTO v_Count FROM productos WHERE Nombre = p_Nombre AND Tipo = p_Tipo AND ID_Producto != p_ID_Producto;
  
  IF v_Count = 0 THEN
    -- No existe un registro con el mismo nombre y tipo (excluyendo el registro actual), realizar la actualización
    UPDATE productos SET
      Nombre = p_Nombre,
      Tipo = p_Tipo,
      id_macra = p_ID_Marca,
      Precio = p_Precio
    WHERE ID_Producto = p_ID_Producto;
    
    SET p_Message = 'Registro actualizado correctamente';
  ELSE
    -- Ya existe un registro con el mismo nombre y tipo, mostrar mensaje de error
    SET p_Message = 'Error: Ya existe un registro con el mismo nombre y tipo';
  END IF;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for EditarProveedor
-- ----------------------------
DROP PROCEDURE IF EXISTS `EditarProveedor`;
delimiter ;;
CREATE PROCEDURE `EditarProveedor`(IN p_ID_Proveedor INT,
  IN p_Nombre VARCHAR(100),
  IN p_Direccion VARCHAR(200),
  IN p_Telefono VARCHAR(20),
  OUT p_Message VARCHAR(255))
BEGIN
  DECLARE v_Count INT;
  
  -- Verificar si existe un registro con el mismo nombre, excluyendo el registro actual
  SELECT COUNT(*) INTO v_Count FROM proveedores WHERE Nombre = p_Nombre AND ID_Proveedor != p_ID_Proveedor;
  
  IF v_Count = 0 THEN
    -- No existe un registro con el mismo nombre (excluyendo el registro actual), realizar la actualización
    UPDATE proveedores SET Nombre = p_Nombre, Direccion = p_Direccion, Telefono = p_Telefono WHERE ID_Proveedor = p_ID_Proveedor;
    
    SET p_Message = 'Registro actualizado correctamente';
  ELSE
    -- Ya existe un registro con el mismo nombre, mostrar mensaje de error
    SET p_Message = 'Error: Ya existe un registro con el mismo nombre';
  END IF;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for EliminarCategoria
-- ----------------------------
DROP PROCEDURE IF EXISTS `EliminarCategoria`;
delimiter ;;
CREATE PROCEDURE `EliminarCategoria`(IN p_ID_Categoria INT)
BEGIN
    DELETE FROM categorias
    WHERE ID_Categoria = p_ID_Categoria;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for EliminarCliente
-- ----------------------------
DROP PROCEDURE IF EXISTS `EliminarCliente`;
delimiter ;;
CREATE PROCEDURE `EliminarCliente`(IN p_ID_Cliente INT)
BEGIN
    DELETE FROM clientes
    WHERE ID_Cliente = p_ID_Cliente;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for EliminarColor
-- ----------------------------
DROP PROCEDURE IF EXISTS `EliminarColor`;
delimiter ;;
CREATE PROCEDURE `EliminarColor`(IN p_ID_Color INT)
BEGIN
    DELETE FROM colores
    WHERE ID_Color = p_ID_Color;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for EliminarInventario
-- ----------------------------
DROP PROCEDURE IF EXISTS `EliminarInventario`;
delimiter ;;
CREATE PROCEDURE `EliminarInventario`(IN p_ID_Producto INT)
BEGIN
    DELETE FROM inventario
    WHERE ID_Producto = p_ID_Producto;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for EliminarMarca
-- ----------------------------
DROP PROCEDURE IF EXISTS `EliminarMarca`;
delimiter ;;
CREATE PROCEDURE `EliminarMarca`(IN p_ID_Marca INT)
BEGIN
    DELETE FROM marcas
    WHERE ID_Marca = p_ID_Marca;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for EliminarProducto
-- ----------------------------
DROP PROCEDURE IF EXISTS `EliminarProducto`;
delimiter ;;
CREATE PROCEDURE `EliminarProducto`(IN p_ID_Producto INT)
BEGIN
    DELETE FROM productos
    WHERE ID_Producto = p_ID_Producto;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for EliminarPromocion
-- ----------------------------
DROP PROCEDURE IF EXISTS `EliminarPromocion`;
delimiter ;;
CREATE PROCEDURE `EliminarPromocion`(IN p_ID_Promocion INT)
BEGIN
    DELETE FROM promociones
    WHERE ID_Promocion = p_ID_Promocion;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for EliminarProveedor
-- ----------------------------
DROP PROCEDURE IF EXISTS `EliminarProveedor`;
delimiter ;;
CREATE PROCEDURE `EliminarProveedor`(IN p_ID_Proveedor INT)
BEGIN
    DELETE FROM proveedores
    WHERE ID_Proveedor = p_ID_Proveedor;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for InsertarApartado
-- ----------------------------
DROP PROCEDURE IF EXISTS `InsertarApartado`;
delimiter ;;
CREATE PROCEDURE `InsertarApartado`(IN p_ID_Cliente INT,
  IN p_ID_Producto INT,
  IN p_Cantidad INT,
  IN p_FechaApartado DATE,
  IN p_Total DECIMAL(10, 2),
  IN p_Pagado DECIMAL(10, 2))
BEGIN
  INSERT apartados VALUES (p_ID_Cliente, p_ID_Producto, p_Cantidad, p_FechaApartado, p_Total, p_Pagado);
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for InsertarCategoria
-- ----------------------------
DROP PROCEDURE IF EXISTS `InsertarCategoria`;
delimiter ;;
CREATE PROCEDURE `InsertarCategoria`(IN p_Nombre VARCHAR(50))
BEGIN
  INSERT categorias VALUES (p_Nombre);
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for InsertarCliente
-- ----------------------------
DROP PROCEDURE IF EXISTS `InsertarCliente`;
delimiter ;;
CREATE PROCEDURE `InsertarCliente`(IN p_Nombre VARCHAR(100),
  IN p_Direccion VARCHAR(200),
  IN p_Telefono VARCHAR(20))
BEGIN
  INSERT clientes VALUES (p_Nombre, p_Direccion, p_Telefono);
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for InsertarColor
-- ----------------------------
DROP PROCEDURE IF EXISTS `InsertarColor`;
delimiter ;;
CREATE PROCEDURE `InsertarColor`(IN p_Descripcion VARCHAR(255))
BEGIN
  INSERT colores VALUES (p_Descripcion);
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for InsertarCompra
-- ----------------------------
DROP PROCEDURE IF EXISTS `InsertarCompra`;
delimiter ;;
CREATE PROCEDURE `InsertarCompra`(IN p_ID_Proveedor INT,
  IN p_Fecha DATE,
  IN p_Total DECIMAL(10, 2))
BEGIN
  INSERT compras VALUES (p_ID_Proveedor, p_Fecha, p_Total);
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for InsertarDet
-- ----------------------------
DROP PROCEDURE IF EXISTS `InsertarDet`;
delimiter ;;
CREATE PROCEDURE `InsertarDet`(IN p_Nombre VARCHAR(100),
    IN p_id_categoria INT)
BEGIN
    DECLARE v_ID_Producto INT;

    SELECT ID_Producto INTO v_ID_Producto FROM productos WHERE Nombre = p_Nombre LIMIT 1;

    IF v_ID_Producto IS NOT NULL THEN
        INSERT INTO productos_categorias VALUES (v_ID_Producto, p_id_categoria);
    END IF;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for InsertarDetalleColor
-- ----------------------------
DROP PROCEDURE IF EXISTS `InsertarDetalleColor`;
delimiter ;;
CREATE PROCEDURE `InsertarDetalleColor`(IN p_ID_Color INT,
  IN p_ID_Producto INT)
BEGIN
  INSERT detalle_color VALUES (p_ID_Color, p_ID_Producto);
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for InsertarDetalleCompra
-- ----------------------------
DROP PROCEDURE IF EXISTS `InsertarDetalleCompra`;
delimiter ;;
CREATE PROCEDURE `InsertarDetalleCompra`(IN p_ID_Compra INT,
  IN p_ID_Producto INT,
  IN p_Cantidad INT,
  IN p_Precio DECIMAL(10, 2))
BEGIN
  INSERT detalles_compra VALUES (p_ID_Compra, p_ID_Producto, p_Cantidad, p_Precio);
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for InsertarDetalleVenta
-- ----------------------------
DROP PROCEDURE IF EXISTS `InsertarDetalleVenta`;
delimiter ;;
CREATE PROCEDURE `InsertarDetalleVenta`(IN p_ID_Venta INT,
  IN p_ID_Producto INT,
  IN p_Cantidad INT,
  IN p_Precio DECIMAL(10, 2))
BEGIN
  INSERT detalles_venta VALUES (p_ID_Venta, p_ID_Producto, p_Cantidad, p_Precio);
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for InsertarDistribucionProveedor
-- ----------------------------
DROP PROCEDURE IF EXISTS `InsertarDistribucionProveedor`;
delimiter ;;
CREATE PROCEDURE `InsertarDistribucionProveedor`(IN p_ID_Proveedor INT,
  IN p_ID_Producto INT)
BEGIN
  INSERT distribucion_proveedor VALUES (p_ID_Proveedor, p_ID_Producto);
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for InsertarIncidenteCliente
-- ----------------------------
DROP PROCEDURE IF EXISTS `InsertarIncidenteCliente`;
delimiter ;;
CREATE PROCEDURE `InsertarIncidenteCliente`(IN p_ID_Cliente INT,
  IN p_Descripcion VARCHAR(200),
  IN p_ID_Venta INT)
BEGIN
  INSERT INTO incidentes_cliente VALUES (p_ID_Cliente, p_Descripcion, p_ID_Venta);
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for InsertarInventario
-- ----------------------------
DROP PROCEDURE IF EXISTS `InsertarInventario`;
delimiter ;;
CREATE PROCEDURE `InsertarInventario`(IN p_ID_Producto INT,
  IN p_Cantidad INT)
BEGIN
  INSERT inventario VALUES (p_ID_Producto, p_Cantidad);
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for InsertarMarca
-- ----------------------------
DROP PROCEDURE IF EXISTS `InsertarMarca`;
delimiter ;;
CREATE PROCEDURE `InsertarMarca`(IN p_Nombre VARCHAR(50))
BEGIN
  INSERT INTO marcas (Nombre)
  VALUES (p_Nombre);
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for InsertarProducto
-- ----------------------------
DROP PROCEDURE IF EXISTS `InsertarProducto`;
delimiter ;;
CREATE PROCEDURE `InsertarProducto`(IN p_Nombre VARCHAR(100),
  IN p_Tipo VARCHAR(50),
  IN p_Precio DECIMAL(10, 2),
  IN p_ID_Marca INT,
  IN p_foto VARCHAR(255),
	OUT p_Mensaje VARCHAR(100))
BEGIN
  DECLARE v_Count INT;
  
  -- Verificar si ya existe un registro con el mismo nombre y tipo
  SELECT COUNT(*) INTO v_Count FROM productos WHERE Nombre = p_Nombre;
  
  IF v_Count = 0 THEN
    -- No existe un registro con el mismo nombre y tipo, realizar la inserción
    INSERT INTO productos VALUES (DEFAULT, p_Nombre, p_Tipo, p_Precio, p_ID_Marca, p_foto, 1);
    SET p_Mensaje = 'Se registró con éxito.';
  ELSE
    -- Ya existe un registro con el mismo nombre y tipo, mostrar mensaje de error
    SET p_Mensaje = 'Ya existe un registro con el mismo nombre.';
  END IF;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for InsertarProductoCategoria
-- ----------------------------
DROP PROCEDURE IF EXISTS `InsertarProductoCategoria`;
delimiter ;;
CREATE PROCEDURE `InsertarProductoCategoria`(IN p_ID_Producto INT,
  IN p_ID_Categoria INT)
BEGIN
  INSERT productos_categorias VALUES (p_ID_Producto, p_ID_Categoria);
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for InsertarProveedor
-- ----------------------------
DROP PROCEDURE IF EXISTS `InsertarProveedor`;
delimiter ;;
CREATE PROCEDURE `InsertarProveedor`(IN p_Nombre VARCHAR(100),
    IN p_Direccion VARCHAR(200),
    IN p_Telefono VARCHAR(20),
    IN p_Foto_Proveedor VARCHAR(255),
    OUT p_Mensaje VARCHAR(255))
BEGIN
    DECLARE v_Count INT;

    -- Verificar si el proveedor ya existe
    SELECT COUNT(*) INTO v_Count
    FROM proveedores
    WHERE Nombre = p_Nombre;

    IF v_Count > 0 THEN
        -- El proveedor ya existe, asignar el mensaje de error a la variable
        SET p_Mensaje = 'Error: El proveedor ya existe.';
    ELSE
        -- Insertar el nuevo proveedor
        INSERT proveedores VALUES (DEFAULT,p_Nombre, p_Direccion, p_Telefono, p_Foto_Proveedor,1);
        SET p_Mensaje = 'Proveedor insertado correctamente.';
    END IF;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for InsertarVenta
-- ----------------------------
DROP PROCEDURE IF EXISTS `InsertarVenta`;
delimiter ;;
CREATE PROCEDURE `InsertarVenta`(IN p_ID_Cliente INT,
  IN p_Fecha DATE,
  IN p_Total DECIMAL(10, 2),
  IN p_MetodoPago VARCHAR(50))
BEGIN
  INSERT ventas VALUES (p_ID_Cliente, p_Fecha, p_Total, p_MetodoPago);
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for insertar_detalle_venta
-- ----------------------------
DROP PROCEDURE IF EXISTS `insertar_detalle_venta`;
delimiter ;;
CREATE PROCEDURE `insertar_detalle_venta`(IN P_nombre VARCHAR(100),
    IN P_cantidad INT,
    IN P_precio DECIMAL(10, 2))
BEGIN
    -- Obtener el último ID de venta insertado
    SET @id_venta = (SELECT MAX(ID_Venta) FROM ventas);
    
    -- Insertar detalle de venta
    INSERT detalles_venta VALUES(@id_venta,(SELECT ID_Producto FROM productos WHERE Nombre=P_nombre),P_cantidad,P_precio);

    SELECT 'Detalle de venta almacenado correctamente.';
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for insertar_venta
-- ----------------------------
DROP PROCEDURE IF EXISTS `insertar_venta`;
delimiter ;;
CREATE PROCEDURE `insertar_venta`(IN P_fecha DATE,
    IN P_total DECIMAL(10, 2),
    IN P_id_usuario INT)
BEGIN
    -- Verificar si el usuario existe
    SET @usuario_count = (SELECT COUNT(*) FROM usuarios WHERE id_usuario = P_id_usuario);
    
    -- Insertar venta si el usuario existe
    IF @usuario_count = 1 THEN
        -- Insertar venta
        INSERT INTO ventas VALUES (DEFAULT, P_fecha, P_total, P_id_usuario);

        SELECT 'Venta almacenada correctamente.';
    ELSE
        SELECT 'Error: Usuario no encontrado.';
    END IF;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for MostrarCategorias
-- ----------------------------
DROP PROCEDURE IF EXISTS `MostrarCategorias`;
delimiter ;;
CREATE PROCEDURE `MostrarCategorias`()
BEGIN
    SELECT * FROM categorias;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for MostrarColores
-- ----------------------------
DROP PROCEDURE IF EXISTS `MostrarColores`;
delimiter ;;
CREATE PROCEDURE `MostrarColores`()
BEGIN
    SELECT * FROM colores;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for MostrarMarcas
-- ----------------------------
DROP PROCEDURE IF EXISTS `MostrarMarcas`;
delimiter ;;
CREATE PROCEDURE `MostrarMarcas`()
BEGIN
    SELECT ID_Marca, Nombre FROM marcas;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for MostrarProductos
-- ----------------------------
DROP PROCEDURE IF EXISTS `MostrarProductos`;
delimiter ;;
CREATE PROCEDURE `MostrarProductos`(P_Nombre VARCHAR(50))
BEGIN
    SELECT
	productos.Nombre, 
	productos.Tipo, 
	marcas.Nombre, 
	productos.Precio, 
	productos.foto, 
	categorias.Nombre
FROM
	productos
	INNER JOIN
	productos_categorias
	ON 
		productos.ID_Producto = productos_categorias.ID_Producto
	INNER JOIN
	categorias
	ON 
		productos_categorias.ID_Categoria = categorias.ID_Categoria
	INNER JOIN
	marcas
	ON 
		productos.id_macra = marcas.ID_Marca
		
	WHERE categorias.Nombre = P_Nombre;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for MostrarProductosGeneral
-- ----------------------------
DROP PROCEDURE IF EXISTS `MostrarProductosGeneral`;
delimiter ;;
CREATE PROCEDURE `MostrarProductosGeneral`(p_nombre_categoria VARCHAR(50))
BEGIN
SELECT
	productos.ID_Producto, 
	productos.Nombre, 
	productos.foto, 
	productos.Precio, 
	marcas.Nombre, 
	categorias.Nombre
FROM
	productos
	INNER JOIN
	marcas
	ON 
		productos.id_macra = marcas.ID_Marca
	INNER JOIN
	categorias
	INNER JOIN
	productos_categorias
	ON 
		categorias.ID_Categoria = productos_categorias.ID_Categoria AND
		productos.ID_Producto = productos_categorias.ID_Producto WHERE productos.`status`=1 AND categorias.Nombre=p_nombre_categoria;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for MostrarProductosGeneral2
-- ----------------------------
DROP PROCEDURE IF EXISTS `MostrarProductosGeneral2`;
delimiter ;;
CREATE PROCEDURE `MostrarProductosGeneral2`()
BEGIN
SELECT
	productos.ID_Producto, 
	productos.Nombre, 
	productos.foto, 
	productos.Precio, 
	marcas.Nombre
FROM
	productos
	INNER JOIN
	marcas
	ON 
		productos.id_macra = marcas.ID_Marca WHERE productos.status = 1;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for SeleccionProducto
-- ----------------------------
DROP PROCEDURE IF EXISTS `SeleccionProducto`;
delimiter ;;
CREATE PROCEDURE `SeleccionProducto`(p_Id_producto INT)
BEGIN
	SELECT
		productos.Nombre, 
		productos.Tipo, 
		productos.id_macra, 
		productos.Precio
	FROM
		productos
		WHERE productos.ID_Producto = p_Id_producto;
END
;;
delimiter ;

SET FOREIGN_KEY_CHECKS = 1;
