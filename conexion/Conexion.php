<?php 

class Conexion{

    private $usuario;
    private $password;
    private $servidor;
    private $basededatos;

    public function __construct(){
        $this->usuario = "root";
        $this->password = "111";
        $this->servidor = "localhost";
        $this->basededatos = "dbpersona";
    }

    private function getUsuario(){
        return $this->usuario;
    }

    private function getPassword(){
        return $this->password;
    }

    private function getServidor(){
        return $this->servidor;
    }

    private function getBasededatos(){
        return $this->basededatos;
    }

    public function getConexion(){
        $conexion = new mysqli("localhost", "root", "111", "dbpersona");
        $conexion->query("SET NAMES 'UTF8'");
        return $conexion;
    }

    

}

?>