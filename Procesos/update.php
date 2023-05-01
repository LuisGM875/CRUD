<?php
require_once "../Conexion.php";
require_once "../functions.php";
$obj=new Metodo();
$producto=$_POST['txtnombre'];
$categoria=$_POST['txtcategoria'];
$cantidad=$_POST['txtcantidad'];
$marca=$_POST['txtmarca'];
$comprado=$_POST['txtcomprado'];
$Id_producto=$_POST['id'];

$datos=array($producto,
    $categoria,
    $cantidad,
    $marca,
    $comprado,
    $Id_producto);
if($obj->update($datos)==1){
    header("location:../index.php");
}else{
    echo "Fallo al agregar";
}