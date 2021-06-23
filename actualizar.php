<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM producto WHERE id_producto='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="id_producto" value="<?php echo $row['id_producto']  ?>">

                                <input type="hidden" name="id_negocio" value="<?php echo $row['id_negocio']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="nombre_producto" placeholder="Nombre" value="<?php echo $row['nombre_producto']  ?>">
                                <input type="text" class="form-control mb-3" name="cantidad_disponible" placeholder="cantidad_disponible" value="<?php echo $row['cantidad_disponible']  ?>">
                                <input type="text" class="form-control mb-3" name="precio_unidad" placeholder="Precio Unidad" value="<?php echo $row['precio_unidad']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>