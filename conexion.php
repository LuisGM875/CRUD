<?php
class Conexion{
    private $servidor="127.0.0.1";
    private $user="root";
    private $bd="compras_listado";
    private $pass="Lolitos76170604!";
    public function conectar(){
        $conectar=mysqli_connect($this->servidor,$this->user,$this->pass,$this->bd);
        return $conectar;
    }
}
