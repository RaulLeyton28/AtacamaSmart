<?php
include("conexion.php");
include("conexion2.php");
include("conexion1.php");
// $con=conectar();


    session_start();

  
$num_ruts=$_SESSION['num_rut'];



    $ret=mysqli_query($con,"select * from negocio where usuario_rut='$num_ruts'");
    while($row1=mysqli_fetch_array($ret)){
    
        $idnegocio=$row1['idnegocio'];

    }






  $stmt = $conexion->prepare("INSERT INTO producto ( nombre, cantidad, precio, negocio_idnegocio)
    VALUE (:nombre, :cantidad, :precio, :negocio_idnegocio)");
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':cantidad', $cantidad);
    $stmt->bindParam(':precio', $precio);
    $stmt->bindParam(':negocio_idnegocio', $negocio_idnegocio);  
    //insertar filas
    $nombre= $_POST["nombre"];
    $cantidad=$_POST["cantidad"];
    $precio= $_POST["precio"];
    $negocio_idnegocio= $idnegocio;
    $stmt->execute();

 Header("Location: home.php");
// $sql="INSERT INTO producto VALUES('$nombre','$cantidad','$precio','$idnegocio')";
// $query= mysqli_query($con,$sql);

// if($query){
//     Header("Location: home.php");
    
// }else {
// }
?>