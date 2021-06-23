<?php

include("conexion.php");
$con=conectar();

$id_producto=$_POST['id_producto'];
$id_negocio=$_POST['id_negocio'];
$nombre_producto=$_POST['nombre_producto'];
$cantidad_disponible=$_POST['cantidad_disponible'];
$precio_unidad=$_POST['precio_unidad'];

$sql="UPDATE producto SET  id_producto='$id_producto',id_negocio='$id_negocio',nombre_producto='$nombre_producto',cantidad_disponible='$cantidad_disponible' WHERE id_producto='$id_producto'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: home.php");
    }
?>