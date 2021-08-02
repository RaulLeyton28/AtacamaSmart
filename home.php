<?php 
    include("conexion2.php");
    include("conexion1.php");
 session_start();

    if(!isset($_SESSION['num_rut'])){

        header("location: sesion.html");
    }



   

    // $con=conectar();
  
$num_ruts=$_SESSION['num_rut'];

    $ret1=mysqli_query($con,"select * from usuario where rut='$num_ruts'");
    while($row2=mysqli_fetch_array($ret1)){
    
        $nombre=$row2['nombre'];
        $apellido=$row2['apellido'];
    }


    $ret=mysqli_query($con,"select * from negocio where usuario_rut='$num_ruts'");
    while($row1=mysqli_fetch_array($ret)){
    
        $idnegocio=$row1['idnegocio'];

        $name_neg=$row1['nombre'];

    }


    // $sql02=mysqli_query($conexion1,"select * from negocio where usuario_rut='$num_ruts'");

    // while($row=mysqli_fetch_array($sql02))
    //                         {
    //                             $idnegocio=$row['idnegocio'];
    //                         }


    // $sql1="select * from negocio where usuario_rut='$num_ruts'";
    // $query=mysqli_query($conexion,$sql1);
    // $row1=mysqli_fetch_array($query);


    // $sql="SELECT * FROM producto WHERE negocio_idnegocio='$idnegocio'";
    // $query=mysqli_query($conexion1,$sql);
    // $row=mysqli_fetch_array($query);

$eventosHistoricos=$conexion->query("SELECT * FROM producto where negocio_idnegocio='$idnegocio'");
                            

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ADMINISTRAR</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="estilos.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
        <header>
            <nav>
                <a href="cerrarSesion.php">Cerrar Sesión</a>
            </nav>
        <section class="textos-header">
            <h1>Bienvenido Usuario : <?php echo $nombre; ?> <?php echo $apellido; ?></h1>   
            <h2>Administra tu negocio : <?php echo $name_neg; ?></h2>        
        </section>
            <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150"
                preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98
                C150.00,150.00 394.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path></svg></div>
        </header>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-5">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                   
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre Producto" required>
                                    <input type="text" class="form-control mb-3" name="cantidad" placeholder="Cantidad Disponible" required>
                                    <input type="text" class="form-control mb-3" name="precio" placeholder="Precio Unitario" required>
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-7">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>#</th>
                                        
                                        
                                        <th>NOMBRE</th>
                                        <th>CANTIDAD</th>
                                        <th>PRECIO</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <?php
$cont=1;
                                            while($row = $eventosHistoricos->fetch(PDO::FETCH_ASSOC)){

                                        
                                            // while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $cont; ?></th>
                                                
                                                
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['cantidad']?></th>
                                                <th><?php  echo $row['precio']?></th>    
                                                <th><a href="actualizar.php?id=<?php echo $row['idproducto'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['idproducto'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                           $cont++; }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
            <footer>
            <div class="contenedor-footer">
                <div class="content-foo">
                    <h4>Telefono</h4>
                    <p>522-2556626</p>
                </div>
                <div class="content-foo">
                    <h4>Email</h4>
                    <p>atencion@atacamasmart.cl</p>
                </div>
                <div class="content-foo">
                    <h4>Localización</h4>
                    <p>A la vueta de la esquina #1562</p>
                </div>
            </div>
            <h2 class="titulo-final">&copy; AtacamaSmart | Raúl Leyton</h2>
        </footer> 
    </body>
</html>