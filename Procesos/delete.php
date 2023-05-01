<?php
require_once "../Conexion.php";
require_once "../functions.php";

$id=$_GET['id'];

$obj=new Metodo();
if($obj->delete($id)==1){
    header("location:../index.php");
}else{
    print "Fallo al agregar";
}