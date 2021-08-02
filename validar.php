<?php
	include('conexion.php');
	include('conexion1.php');
	$conexion=mysqli_connect("localhost","root","","bd_atacama");
	$rut=$_POST['rut'];
	$clave=$_POST['clave'];
	session_start();


	$consulta="SELECT*FROM usuario where rut='$rut' and clave='$clave'";
	$resultado=mysqli_query($conexion,$consulta);

	$filas=mysqli_num_rows($resultado);

	if($filas){
		

		$_SESSION['num_rut'] = $rut;

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
