<?php

class Conexion{
    
    public function __construct($server, $nameBD, $user, $password){
        $connection = mysqli_connect($server, $user, $password, $nameBD);
        if(!$connection){
            die("Error al conectar: ".mysql_error());
        }else{
            $this->db=$connection;
        }
    }

    public function ejecutar($query){
        return mysqli_query($this->db, $query); 
    }
}

?>