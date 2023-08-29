CREATE DATABASE VENTAS_LINEA;
USE VENTAS_LINEA;

drop database VENTAS_LINEA;

CREATE TABLE USUARIO
(
idUsuario INT PRIMARY KEY ,
correoUsuario VARCHAR(50) NOT NULL,
contrasenaUsuario VARCHAR(20) NOT NULL,
estadoUsuario VARCHAR(20) NOT NULL,
idRolFK INT NOT NULL,
FOREIGN KEY (idROLFK)
REFERENCES ROL (idRol)
);

CREATE TABLE ROL
(
idRol INT PRIMARY KEY,
descripcionRol VARCHAR(200) NOT NULL,
estadoRol VARCHAR(20) NOT NULL
);




CREATE TABLE PRODUCTO
(
codigoProducto INT AUTO_INCREMENT PRIMARY KEY,
nombreProducto VARCHAR(50) NOT NULL,
precioVentaProducto FLOAT NOT NULL,
descripcionProducto TEXT NULL
);





INSERT INTO USUARIO (idUsuario,correoUsuario,contrasenaUsuario,estadoUsuario,idRolFK) VALUES
(1,'juan@gmail.com','12345','activo',1),
(2,'alex@gmail.com','678987','activo',1),
(3,'beba002ht@gmail.com','2006','activo',1);


INSERT INTO ROL (idRol,descripcionRol,estadoRol ) VALUES
(1,'administrador','activo');



DELETE FROM ROL WHERE idRol = 1;

DELETE FROM PRODUCTO 
WHERE codigoProducto = 3;

Drop  table PRODUCTO;

SELECT * FROM USUARIO;
SELECT * FROM ROL;
SELECT * FROM PRODUCTO;

#INSERTAR
INSERT INTO PRODUCTO (codigoProducto,nombreProducto,precioVentaProducto,descripcionProducto)VALUES
(1,'papa',10000,'tuverculo');

















 