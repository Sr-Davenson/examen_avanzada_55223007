<?php

include 'Conex/con';

class Productos{
private $id;
private $nombre;
private $cantidad; 
private $precio_unitario;

public function add(){
    $conex= new con();
    $sql = "INSERT INTO productos( nombre, cantidad, precio_unitario) VALUES ('". $this->nombre."','. $this->cantidad.','.$this->precio_unitario.')";
    $sql->$conex->exeSQL();
    $conex->closeDb();
    return true;
}
}
