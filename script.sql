CREATE DATABASE smart;
USE smart

CREATE TABLE producto(
    prod_id_producto INT auto_increment,
    prod_descripcion VARCHAR(100),
    prod_estado VARCHAR(100),
    prod_precio INT,
    prod_stock INT,
    PRIMARY KEY (prod_id_producto)
);

INSERT INTO producto (`prod_id_producto`,`prod_descripcion`,`prod_estado`,`prod_precio`,`prod_stock`) VALUES
 (null, 'CASE IPHONE X', 'DISPONIBLE','20','10');
INSERT INTO producto (`prod_id_producto`,`prod_descripcion`,`prod_estado`,`prod_precio`,`prod_stock`) VALUES
 (null, 'CASE IPHONE XR', 'DISPONIBLE','30','15');
INSERT INTO producto (`prod_id_producto`,`prod_descripcion`,`prod_estado`,`prod_precio`,`prod_stock`) VALUES
 (null, 'CASE IPHONE 11', 'DISPONIBLE','40','20');
INSERT INTO producto (`prod_id_producto`,`prod_descripcion`,`prod_estado`,`prod_precio`,`prod_stock`) VALUES
 (null, 'CASE IPHONE 11 PRO', 'DISPONIBLE','50','25');
INSERT INTO producto (`prod_id_producto`,`prod_descripcion`,`prod_estado`,`prod_precio`,`prod_stock`) VALUES
 (null, 'CASE IPHONE 11 PRO MAX', 'DISPONIBLE','60','30');

CREATE TABLE venta(
    venta_id_venta INT auto_increment,
    venta_fecha DATETIME,
    total INT,
    PRIMARY KEY (venta_id_venta)
);

CREATE  TABLE detalle_venta(
    dv_id_detalle_venta INT auto_increment,
    venta INT,
    producto INT,
    cantidad INT,
    subtotal INT,
    PRIMARY KEY (dv_id_detalle_venta)
);

select * from producto;
select * from venta;
select * from detalle_venta;