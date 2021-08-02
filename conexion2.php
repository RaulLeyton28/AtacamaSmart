<?php
// $servidor = "localhost";
// $nombreBD = "bd_atacama";
// $usuario = "root";
// $password = "";
// $a;
// try{ 
//     $conexion1 = new PDO("mysql:host=$servidor;dbname=$nombreBD"
//     , $usuario, $password);
//           //mensaje de error
//           $conexion1->setAttribute(PDO::ATTR_ERRMODE
//           ,PDO::ERRMODE_EXCEPTION);
            
//          } catch(PDOException $e){
//             echo "error";
//         }
        
    ?>

    <?php
$servidor = "localhost";
$nombreBD = "bd_atacama";
$usuario = "root";
$password = "";
$a;
try{ 
    $conexion = new PDO("mysql:host=$servidor;dbname=$nombreBD"
    , $usuario, $password);
          //mensaje de error
          $conexion->setAttribute(PDO::ATTR_ERRMODE
          ,PDO::ERRMODE_EXCEPTION);
            
         } catch(PDOException $e){
            echo "error";
        }
        
    ?>

    