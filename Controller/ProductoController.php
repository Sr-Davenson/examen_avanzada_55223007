<?php
namespace productoController;

use Productos;

include 'App/Model/Conex/Conex.php';
include 'App/Model/Productos.php';

class ProductosController{


public function registrar($requst){
    $model = new Productos();
    $prod = $requst['nombre'];
    $prod = $requst['cantidad'];
    $prod = $requst['Precio_Unitario'];
    $prod = $model->add();
    if($prod== true){
        return true;
    }
    return false;
}
}

