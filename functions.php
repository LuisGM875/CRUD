<?php
include_once "Conexion.php";
class Metodo{
    //CRUD
    //CREATE
    public function create($datos){
        $c= new Conexion();
        $ejem = $c->conectar();
        $sql="INSERT INTO lista_compras (Producto,Categoria,Cantidad,Marca,Comprado) 
                VALUES ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]')";
        return $result=mysqli_query($ejem,$sql);
    }
    // READ
    public function read($sql){
        $c= new Conexion();
        $ejem = $c->conectar();
        $result=mysqli_query($ejem,$sql);
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }

    // UPDATE
    public function update($datos){
        $c= new Conexion();
        $ejem = $c->conectar();
        $sql="UPDATE lista_compras SET Producto='$datos[0]',Categoria='$datos[1]',Cantidad='$datos[2]',Marca='$datos[3]',Comprado='$datos[4]' where Id_producto='$datos[5]'";
        return $result=mysqli_query($ejem,$sql);
    }
    //DELETE
    public function delete($id){
        $c= new Conexion();
        $ejem = $c->conectar();
        $sql="DELETE from lista_compras WHERE Id_producto='$id'";
        return $result=mysqli_query($ejem,$sql);
    }
}