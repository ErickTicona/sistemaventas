<?php
    require_once "../model/producto.php";
    $cantidad = $_POST["txtprod_cantidad"];
    $producto = new Producto();

    $producto->prod_id_producto = $_POST["txtprod_id_producto"];
    $producto->prod_descripcion = $_POST["txtprod_descripcion"];
    $producto->prod_estado = $_POST["txtprod_prod_estado"];
    $producto->prod_precio = $_POST["txtprod_prod_precio"];
    $producto->prod_stock = $_POST["txtprod_prod_stock"];

    // AÑADIR EL PRODUCTO AL CARRITO
    session_start();

    if(isset($_SESSION["carrito"])){
        $carrito = $_SESSION["carrito"];
    }else{
        $carrito = array();
    }

    array_push($carrito, $producto);
    $_SESSION["carrito"] = $carrito;

    header("location: ../index.php");
?>