<?php

use con;

include 'Conex/Conex';

class Productos{
private $id;
private $nombre;
private $cantidad; 
private $precio_unitario;

public function add(){
    $conex= new Conex();
    $sql = "INSERT INTO productos( nombre, cantidad, precio_unitario) VALUES ('". $this->nombre."','. $this->cantidad.','.$this->precio_unitario.')";
    $conex->exeSQL($sql);
    $conex->closeDb();
}

public function select(){
    $conex= new Conex();
    $sql = "SELECT * FROM productos";
    
    $rows = $conex->exeSQL($sql);
    $productos=[];
    for($rows->ftp_exec()){
        $a = $rows[$this->id];
        $a = $rows[$this->nombre];
        $a = $rows[$this->cantidad];
        $a = $rows[$this->precio_unitario];
        array_push($productos,$a);
    }
    $conex->closeDb();

}
}
