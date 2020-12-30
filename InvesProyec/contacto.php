<?php
echo <<<_END
<html>
	<head>
       
		<title>Lenguaje de Señas</title>
		<style type="text/css"><! -- CODIGO DE ESTILO -->
			
			* {
				margin:0px;
				padding:0px;
			}
			
			#header {
				margin:auto;
				width:500px;
				font-family:Arial, Helvetica, sans-serif;
			}
			
			ul, ol {
				list-style:none;
			}
			
			.nav > li {
				float:left;
			}
			
			.nav li a {
				background-color:#000;
				color:#fff;
				text-decoration:none;
				padding:10px 12px;
				display:block;
			}
			
			.nav li a:hover {
				background-color:#434343;
			}
			
			.nav li ul {
				display:none;
				position:absolute;
				min-width:140px;
			}
			
			.nav li:hover > ul {
				display:block;
			}
			
			.nav li ul li {
				position:relative;
			}
			
			.nav li ul li ul {
				right:-140px;
				top:0px;
			}
			
		</style>
	</head>
		<body style=background-image:url('imagen/fondo1.png width=100% height=100%')>
		<div id="header">
			<ul class="nav">
				<li><a href="Inicio.php">INICIO</a>
					<ul>
                        <li><a href="Informe.php">INFORMACIÓN</a>
                    
                        </li>
                        <li><a href="contacto.php">CONTACTOS</a>
                        
                        </li>
                        <li><a href="misivisi.php">MISIÓN Y VISIÓN</a>
					
					</ul>
				</li>
                <li><a href="vocal.php">5VOCALES</a>
					<ul>
					<li><a href="masvocales.php">APRENDIENDO VOCALES</a>
                    
					</li>
					</ul>
				</li>

                <li><a href="Abecedario.php">ABECEDARIO</a>
					<ul>
					</ul>
					<li><a href="tutoriales.php">TUTORIALES</a>
					</li>
					</li>
        </div><br>
        <p>
	</body>
</html>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Lenguaje de Señas</title>
	</head>
    <body>
    <html>
    <head>
        <title>Lenguaje de señas</title>
    </head>
    <body><br><! -- CREACIÓN DEL FORMULARIO -->
    <br><center><h2 style="color:white">FORMULARIO</h2>
    <form method="post" action="mailto:contacto@lineadecodigo.com">
  
    <h3 style="color:white">Nombre:     <br> <input type="text" size=35 name="nombre" ><p>
    <h3 style="color:white"> Telefóno:  <br> <input type="text" size=35 name="telefono"></p>
    <h3 style="color:white"> Correo:    <br> <input type="email"size=35  name="fecha"><p> 
    <h3 style="color:white">Que consulta desea ser respondida?<br/><textarea id="opinion" name="contenido"onkeyup="actualizaInfo(100)" rows="15" cols="40" placeholder="EMPIEZA"></textarea><br />
    <input type="submit"> 
    </form>
    </body>
</html>
_END
?>