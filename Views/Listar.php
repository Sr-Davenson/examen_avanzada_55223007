<?php

use ProductosController;

include 'App/Model/Conex/Conex.php';
include 'App/Model/Productos.php';
include 'App/Contoller/ProductoController.php';

$controller = new ProductosController();
$controller->listar();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Style.css">

    <title>Listar</title>
</head>

<body>
    <a href="index.php">Volver</a>

</body>

</html>