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
            <a href="#inicio">INICIO</a>
            <a href="#nosotros">NOSOTROS</a>
            <a href="#portafolio">PORTAFOLIO</a>
            <a href="#contacto">CONTACTO</a>
            <a href="sesion.html">INICIAR SESIÓN</a>
        </nav>
        <section class="textos-header">
            <h1 id="inicio">Disfruta Atacama Smart</h1>
            <h2>Conoce las maravillas ocultas</h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150"
                preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98
                C150.00,150.00 394.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path></svg></div>
    </header>
        <main>
            <section class="contenedor sobre-nosotros">
                <h2 id="nosotros" class="titulo">NOSOTROS</h2>
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
            <section class="portafolio">
            <div class="contenedor">
                <h2 id="portafolio"class="titulo">PORTAFOLIO</h2>
                <div class="galeria-port">
                    <div class="imagen-port">
                        <img src="img/aplicacion1.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/aplicacion2.png" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/aplicacion3.png" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/aplicacion4.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/aplicacion4.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/aplicacion4.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/aplicacion4.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/aplicacion4.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>                    
                </div>
            </div>
        </section>
            <script>
            function alerta(){
            alert("¡Muchas gracias por contactarte con nosotros!, nos estaremos comunicando contigo en la brevedad posible");
            }
            </script>
            <section class="formulario">           
                <h2 id="contacto"class="titulo">CONTACTANOS PARA RESOLVER TUS DUDAS</h2>    
                <div class="contenedor-formulario">
                    <form action="enviar.php" method="post">
                        <h4>CONTACTO</h4>
                        <input type="text" name="nombre" placeholder="Nombre" required>
                        <input type="text" name="correo" placeholder="Correo" required>
                        <input type="text" name="telefono" placeholder="Teléfono" required>
                        <textarea name="mensaje" placeholder="Escriba aquí su mensaje" required></textarea>
                        <input type="submit" value="ENVIAR" id="boton" onclick="alerta()">
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
            <h2 class="titulo-final">&copy; AtacamaSmart | Raúl Leyton</h2>
        </footer>
</body>