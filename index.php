<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

    <title>Document</title>
</head>
<body>
    <div class="content">
        <div class="container">
        <h2 class="mb-5">Listado de Productos</h2>
        

        <div class="table-responsive custom-table-responsive">

            <table class="table custom-table">
            <thead>
                <tr>  

                <th scope="col">
                    <label class="control control--checkbox">
                    <input type="checkbox"  class="js-check-all"/>
                    <div class="control__indicator"></div>
                    </label>
                </th>
                
                <th scope="col">ID</th>
                <th scope="col">Descripción</th>
                <th scope="col">Estado</th>
                <th scope="col">Precio</th>
                <th scope="col">Stock</th>
                <th scope="col">Añadir a la Venta</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require_once "model/Data.php";
                    $data = new Data();
                    $productos = $data->getProductos();
                    foreach ($productos as $producto){
                        ?>
                        <tr scope="row">
                            <th scope="row">
                                <label class="control control--checkbox">
                                <input type="checkbox"/>
                                <div class="control__indicator"></div>
                                </label>
                            </th>
                            <td><?php echo $producto->prod_id_producto ?></td>
                            <td>
                                <a href="#"><?php echo $producto->prod_descripcion ?></a>
                            </td>
                            <td>
                                <small class="d-block"><?php echo $producto->prod_estado ?></small> 
                            </td>
                            <td><?php echo $producto->prod_precio ?></td>
                            <td><?php echo $producto->prod_stock ?></td>
                            <td>
                                <form action = 'controller/agregarproducto.php' method = 'post'>
                                    <input type = 'hidden' name='txtprod_id_producto' value='<?php echo $producto->prod_id_producto ?>'>
                                    <input type = 'hidden' name='txtprod_descripcion' value='<?php echo $producto->prod_descripcion ?>'>
                                    <input type = 'hidden' name='txtprod_prod_estado' value='<?php echo $producto->prod_estado ?>'>
                                    <input type = 'hidden' name='txtprod_prod_precio' value='<?php echo $producto->prod_precio ?>'>
                                    <input type = 'hidden' name='txtprod_prod_stock' value='<?php echo $producto->prod_stock ?>'>
                                    <input type = 'number' name='txtprod_cantidad'>
                                    <input type = 'submit' name='btnAñadir'>
                                </form>
                            </td>
                        </tr>
                        <tr class="spacer"><td colspan="100"></td></tr>
                        <?php } ?>
            </tbody>
            </table>
        </div>


        </div>
    </div>
</body> 
</html>