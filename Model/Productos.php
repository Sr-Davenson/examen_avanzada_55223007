<?php
namespace producto;

include Conex/conex;

class Productos{
private $id;
private $nombre;
private $cantidad; 
private $precio_unitario;

public function add(){
    $conex= new Conex();
    $sql = "INSERT INTO productos( nombre, cantidad, precio_unitario) VALUES ('". $nombre."','. $cantidad.','.$precio_unitario.')";
    $sql->$conex->exeSQL();
    $conex->closeDb();
}
}

