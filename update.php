<?php

include("conexion.php");
$con=conectar();

$id=$_GET['ids'];

$nombre_producto=$_POST['nombre_producto'];
$cantidad_disponible=$_POST['cantidad_disponible'];
$precio_unidad=$_POST['precio_unidad'];

$sql="UPDATE producto SET  nombre='$nombre_producto',cantidad='$cantidad_disponible',precio='$precio_unidad' WHERE idproducto='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: home.php");
    }
?>

