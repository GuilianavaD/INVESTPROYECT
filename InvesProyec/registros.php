<?php 
   $conexion = new mysqli('localhost', 'root','', 'proyecinves',3310);
    if ($conexion->connect_error) die ("Fatal error");

    if(isset($_POST['username']) && isset($_POST['password']))
    {
        $nombre = mysql_entities_fix_string($conexion, $_POST['nombre']);
        $apellido = mysql_entities_fix_string($conexion, $_POST['apellido']);
        $username = mysql_entities_fix_string($conexion, $_POST['username']);
        $pw_temp = mysql_entities_fix_string($conexion, $_POST['password']);

        $password = password_hash($pw_temp, PASSWORD_DEFAULT);

        $query = "INSERT INTO usuarios VALUES('$nombre','$apellido','$username', '$password')";

        $query;
        $result = $conexion->query($query);
        if (!$result) die ("Falló registro");

        echo "Registro exitoso <a href='ingreso.php'>Ingresar</a>";
        
    }
    else
    {
        echo <<<_END
        <head>
        <title>LENGUAJE DE SEÑAS</title>
        </head>
        <center>
        <h1>  Regístrate</h1> <body style=background-image:url('vocales/paisaje.jpg width=100% height=100vh ')>
        <form action="registros.php" method="post"><pre>
        Nombre    <input type="text" name="nombre"placeholder="Nombre">
        Apellido  <input type="text" name="apellido"placeholder="Apellido">
        Usuario   <input type="text" name="username"placeholder="Usuario">
        Password  <input type="text" name="password"placeholder="password">
                  <input type="hidden" name="reg" value="yes">
                  <input type="submit" value="REGISTRAR">
                  <img src="image/gracias.jfif" width="450" height="280" "aling="right">
        </form> </body>
        _END;
    }
    function mysql_entities_fix_string($conexion, $string)
    {
        return htmlentities(mysql_fix_string($conexion, $string));
      }
    function mysql_fix_string($conexion, $string)
    {
        if (get_magic_quotes_gpc()) $string = stripslashes($string);
        return $conexion->real_escape_string($string);
      }   
?>