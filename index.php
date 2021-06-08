<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>AtacamaSmart</title>
</head>
	<link rel="shortcut icon" href="img/icono.png" type="image/x-icon">
	<link rel="stylesheet" href="estilos.css">
<body>
	<header>
		<nav>
			<a href="#">INICIO</a>
			<a href="#">NOSOTROS</a>
			<a href="#">APLICACION</a>
			<a href="#">CONTACTO</a>
			<a href="#">INICIAR SESIÓN</a>
		</nav>
		<section class="textos-header">
			<h1>Disfruta Atacama Smart</h1>
			<h2>Conoce las maravillas ocultas</h2>
		</section>
		<div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150"
                preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98
                C150.00,150.00 394.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #08f;"></path></svg>/div>
        </header>
        <main>
            <section class="contenedor sobre-nosotros">
                <h2 class="titulo">NOSOTROS</h2>
                <div class="contenedor-sobre-nosotros">
                    <img src="img/equipo.jpg" alt="" class="imagen-about-us">
                    <div class="contenido-textos">
                        <h3><span>1</span>De la necesidad aparece la solucion</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro magnam, amet consequuntur omnis totam error commodi excepturi tenetur ipsum deserunt?</p>
                        <h3><span>2</span>Desarrollar Habilidades</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro magnam, amet consequuntur omnis totam error commodi excepturi tenetur ipsum deserunt?</p>
                    </div>
                </div>
            </section>
            <section class="aplicacion">
                <div class="contenedor">
                    <h2 class="titulo">Aplicacion</h2>
                    <div class="galeria-aplicacion"></div>
                        <div class="imagen-apli">
                            <img src="img/aplicacion1.jpg" alt="">
                            <p>Agrega lugares fuera del mapa</p>
                        </div>
                        <div class="imagen-apli">
                            <img src="img/aplicacion2.png" alt="">
                            <p>Agrega tus lugares propios</p>
                        </div>
                        <div class="imagen-apli">
                            <img src="img/aplicacion3.png" alt="">
                            <p>Agregar Lugar</p>
                        </div>
                        <div class="imagen-apli">
                            <img src="img/aplicacion4.jpg" alt="">
                            <p>Agregar Lugar</p>
                        </div>
                </div>
            </section>
            <section class="formulario">
                <h2 class="titulo">CONTACTANOS</h2>
            	<div class="contenedor formulario">
            		<form action="">
            			<h2>CONTACTO</h2>
            			<input type="text" name="Nombre" placeholder="Nombre">
            			<input type="text" name="Correo" placeholder="Correo">
            			<input type="text" name="Teléfono" placeholder="Teléfono">
            			<textarea name="mensaje" placeholder="Escriba aquí su mensaje"></textarea>
            			<input type="button" value="ENVIAR" id="boton">
            		</form>
            	</div>            	 
            </section>
            <section class="inicio">
                <h2 class="titulo">INICIA SESIÓN SI POSEES UNA CUENTA</h2>
                <div class="contenedor iniciosesion">
                    <form action="">
                        <h2>INICIA SESIÓN</h2>
                        <input type="text" name="Nombre de Usuario" placeholder="Ingresa tu Nombre de Usuario">
                        <input type="text" name="Contraseña" placeholder="Ingresa tu contraseña">
                        <input type="button" value="ENTRAR" id="boton">                        
                    </form>
                </div>
            </section>
        </main>
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
            <h2 class="titulo-final">&copy; Atacama Smart | Raúl Leyton</h2>
        </footer>
</body>