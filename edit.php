<?php
require_once "conexion.php";
require_once "functions.php";

$obj=new Conexion();
$ejem = $obj->conectar();
$Id_producto=$_GET['id'];
$sql="SELECT Producto,Categoria,Cantidad,Marca,Comprado from lista_compras where Id_producto='$Id_producto'";
$result=mysqli_query($ejem,$sql);
$ver=mysqli_fetch_row($result);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>
        EDITAR
    </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1>✏️  EDITAR PRODUCTO  ✏️</h1>
<form action="Procesos/update.php" method="post" class="EDITAR">
    <input type="text" hidden="" value="<?php print $Id_producto?>" name="id">
    <label>Producto: </label><p></p>
    <input type="text" name="txtnombre" value="<?php print $ver[0]?>"><p></p>
    <label>Categoria: </label><p></p>
    <input type="text" name="txtcategoria" value="<?php print $ver[1]?>"><p></p>
    <label>Cantidad: </label><p></p>
    <input type="number" name="txtcantidad" min="0" value="<?php print $ver[2]?>"><p></p>
    <label>Marca: </label><p></p>
    <input type="text" name="txtmarca" value="<?php print $ver[3]?>"><p></p>
    <label>Comprado: </label><p></p>
    <input type="text" name="txtcomprado" maxlength="11" value="<?php print $ver[4]?>"><p></p>
    <button>Editar</button>
</form>
</body>
</html>