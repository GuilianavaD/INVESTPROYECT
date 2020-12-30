<?php 
echo <<<_END
<html>
    <head>
        <title>DIARIO PERSONA</title>
    </head>
    <body bgcolor="orange">
    <div class="box_form">
    <center>
    <h1>BIENVENIDO APRENDIENDO LENGUAJE DE SEÑAS<H1>
    <form method="post" action="contenido.php">
        <img src="image/gracias.jfif" width="450" height="380" "aling="right">
    </form>
    <div>
    
    </body style=background-image:url('vocales/paisaje.jpg width=100% height=100vh ')>
</html>
_END;
    session_start();

    if (isset($_SESSION['nombre']))
    {
        $nombre = $_SESSION['nombre'];
        $apellido = $_SESSION['apellido'];

        destroy_session_and_data();

        echo "Sesión terminada <a href='ingreso.php'>Ingresar</a>.<br>";
    }
    else echo "Por favor <a href='ingreso.php'>Click aqui</a>
                para ingresar";

    function destroy_session_and_data()
    {
        //session_start();
        $_SESSION = array();
        setcookie(session_name(), '', time()-2592000, '/');
        session_destroy();
    }
?>