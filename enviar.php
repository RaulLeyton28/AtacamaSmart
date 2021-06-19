<?php
	$destino="chocoleytonYT@gmail.com"; /*Creamos una variable ($) llamada (destino) y guardamos el correo en la variable*/
	$nombre= $_POST['nombre'];  /*Creamos una variable ($) llamada (nombre), la variable recibira mediante el metodo (-POST) el dato que hayamos ingresado en ['']*/
	$correo= $_POST['correo'];
	$telefono= $_POST['telefono'];
	$mensaje= $_POST['mensaje'];
	$contenido="Nombre:". $nombre . "\nCorreo:" . $correo . "\nTeléfono:" . $telefono . "\nMensaje:" . $mensaje; 
	/*Concadenamos los datos, "Nombre del dato:" . $nombre de la variable que corresponde . "\nNombre del dato:" . $Nombre de la variable que corresponde         (\n) es para hacer un salto de linea entre los datos*/
	mail($destino, "Contacto", $contenido); /*Con la funcion mail enviamos el mensaje, ingresamos la variable contenedora del correo de destino ($destino), luego el nombre del asunto ("Contacto"), y despues indicamos la variable contenedora del mensaje ($contenido)*/
	header("Location:index.html");
?>