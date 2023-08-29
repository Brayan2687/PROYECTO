CREATE DATABASE VENTAS_LINEA;
USE VENTAS_LINEA;



CREATE TABLE PRODUCTO
(
codigoProducto INT AUTO_INCREMENT PRIMARY KEY,
nombreProducto VARCHAR(50) NOT NULL,
precioVentaProducto FLOAT NOT NULL,
descripcionProducto TEXT NULL
);


DELETE FROM Producto WHERE codigoProducto = 2;

SELECT * FROM PRODUCTO;


INSERT INTO PRODUCTO (codigoProducto,nombreProducto,precioVentaProducto,descripcionProducto)VALUES
(2,'arveja',8000,'fresca');

SELECT * FROM PRODUCTO;

Drop Table Producto;
Drop Database ventas_linea;

 