<?php
    require_once "conexion.php";
    require_once "functions.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>CRUD</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1 class="titulo">🛍  LISTA DE COMPRAS  🛍</h1>
<div class="container">
<div>
<table>
    <thead>
    <tr>
        <th>Producto</th><th>Categoria</th><th>Cantidad</th><th>Marca</th><th>Comprado</th><th>Editar</th><th>Eliminar</th>
    </tr>
    </thead>
    <?php
    $obj=new Metodo();
    $sql="SELECT Id_producto,Producto,Categoria,Cantidad,Marca,Comprado from lista_compras";
    $datos=$obj->read($sql);
    foreach ($datos as $fila){
    ?>
    <tr>
        <td><?php print $fila['Producto']?></td>
        <td><?php print $fila['Categoria']?></td>
        <td><?php print $fila['Cantidad']?></td>
        <td><?php print $fila['Marca']?></td>
        <td><?php print $fila['Comprado']?></td>
        <td>
            <a href="edit.php?id=<?php print $fila['Id_producto'];?>" style="text-decoration:none">✏️
            </a>
        </td>
        <td>
            <a href="Procesos/delete.php?id=<?php print $fila['Id_producto'];?>" style="text-decoration:none">❌
            </a>
        </td>
    </tr>
    <?php
    }
    ?>
</table>
</div>
<div>

<form action="Procesos/create.php" method="post" class="Insertar">
    <label>Producto: </label><p></p>
    <label>
        <input type="text" name="txtnombre">
    </label>
    <p></p>
    <label>Categoria: </label><p></p>
    <label>
        <input type="text" name="txtcategoria">
    </label>
    <p></p>
    <label>Cantidad: </label><p></p>
    <label>
        <input type="number" name="txtcantidad" min="0">
    </label>
    <p></p>
    <label>Marca: </label><p></p>
    <label>
        <input type="text" name="txtmarca">
    </label>
    <p></p>
    <label>Comprado: </label><p></p>
    <label>
        <input type="text" name="txtcomprado" maxlength="11">
    </label>
    <p></p>
    <button>Agregar</button>
</form>
</div>
</div>
</body>

</html>