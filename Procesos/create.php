<?php
require_once "../Conexion.php";
require_once "../functions.php";
$obj=new Metodo();
$producto=$_POST['txtnombre'];
$categoria=$_POST['txtcategoria'];
$cantidad=$_POST['txtcantidad'];
$marca=$_POST['txtmarca'];
$comprado=$_POST['txtcomprado'];

$datos=array($producto,
    $categoria,
    $cantidad,
    $marca,
    $comprado);

if (! $_POST
    || trim($_POST['txtnombre'])   === ''
    || trim($_POST['txtcategoria'])     === ''
    || trim($_POST['txtcantidad'])     === ''
    || trim($_POST['txtmarca']) === ''
    || trim($_POST['txtcomprado']) === ''
) {
    header("location:../index.php");
}
if($obj->create($datos)==1){
    header("location:../index.php");
}else{
    echo "Fallo al agregar";
}


