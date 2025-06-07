<?php
 namespace conex;

 use mysqli;

 class Conex{
    private $host ='localhost';
    private $user = 'root';
    private $password ='';
    private $dataBase = 'inventario_db';
    private $conex = null;

    public function __construct(){
        $this->conex = new mysqli;
        $this->$host;
        $this->$user;
        $this->password;
        $this->dataBase;
        $this->conex;
    }

    public function closeDb(){
        $this->conex->close();
    }

    public function exeSQL($data){
        $this->conex->query($data);
    }
 }