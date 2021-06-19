<?php
	include('db.php');
	$usuario=$_POST['usuario'];
	$contraseña=$_POST['contraseña'];
	session_start();
	$_SESSION['usuario']=$usuario;

	$conexion=mysqli_connect("localhost","root","","db.php");

	$consulta="SELECT*FROM usuario where usuario='$usuario' and contraseña='$contraseña'";
	$resultado=mysqli_query($conexion,$consulta);

	$filas=mysqli_num_rows($resultado);

	if($filas){
		header("location:home.php");
	}else{
		?>
		<?php
		include("sesion.html");
		?>
		<h1 class="bad">ERROR EN LA AUTENTIFICACIÓN</h1>
		<?php 
	} 
	mysqli_free_result($resultado);
	mysqli_close($conexion);
