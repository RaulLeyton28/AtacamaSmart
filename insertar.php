<?php
include("conexion.php");
$con=conectar();

$id_producto=$_POST['id_producto'];
$id_negocio=$_POST['id_negocio'];
$nombre_producto=$_POST['nombre_producto'];
$cantidad_disponible_=$_POST['cantidad_disponible'];
$precio_unidad=$_POST['precio_unidad'];


$sql="INSERT INTO producto VALUES('$id_producto','$id_negocio','$nombre_producto','$cantidad_disponible','$precio_unidad')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: home.php");
    
}else {
}
?>