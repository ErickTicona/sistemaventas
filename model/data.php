<?php

require_once "conexion.php";
require_once "producto.php";

class Data{
    private $con;

    public function __construct(){
        $this->con = new Conexion("localhost","smart","root","");
    }

    public function getProductos(){
        $productos = array();

        $query = "SELECT * FROM producto";
        $res = $this->con->ejecutar($query);

        while($reg = mysqli_fetch_array($res)){
            $producto = new Producto();
            $producto->prod_id_producto = $reg[0];
            $producto->prod_descripcion = $reg[1];
            $producto->prod_estado = $reg[2];
            $producto->prod_precio = $reg[3];
            $producto->prod_stock = $reg[4];

            array_push($productos,$producto);
        }
        return $productos;
    }
}
?>