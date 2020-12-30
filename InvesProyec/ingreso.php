<?php 
     $conexion = new mysqli('localhost', 'root','', 'proyecinves',3310);

    if($conexion->connect_error) die("Error fatal");

    if (isset($_POST['username'])&&
        isset($_POST['password']))
    {
        $un_temp = mysql_entities_fix_string($conexion, $_POST['username']);
        $pw_temp = mysql_entities_fix_string($conexion, $_POST['password']);
        $query   = "SELECT * FROM usuarios WHERE username='$un_temp'";
        $result  = $conexion->query($query);
        
        if (!$result) die ("Usuario no encontrado");
        elseif ($result->num_rows)
        {
            $row = $result->fetch_array(MYSQLI_NUM);
            $result->close();

            if (password_verify($pw_temp, $row[3])) 
            {
                session_start();
                $_SESSION['nombre']=$row[0];
                $_SESSION['apellido']=$row[1];
               htmlspecialchars("$row[0] $row[1]:
                    hola $row[0], has ingresado como '$row[0]'");
                die ("<p><center><body style=background-image:url('vocales/paisaje.jpg width=100% height=100vh ')><a href='Inicio.php'>
              <br><br><br><h1>Click para Ingresar</a></p>");
            }

            else {
                echo "<h1>Usuario/password incorrecto <p><center><body style=background-image:url('image/gracias.jfif width width=100% height=100vh')><a href='registros.php'>
           <h1> Registrarse</a></p>";
            }
        }
        else {
          echo "<h1>Usuario/password incorrecto <p><body style=background-image:url('image/diaii.jpg width=100% height=100vh')><a href='registros.php'>
      <h1><center>Registrarse</a></p>";
      }

        
    }
    else
    {
      echo <<<_END
      <head>
      <title>LENGUAJE DE SEÑAS</title>
       </head>
      <center><h1>Ingrese</h1>
      <body bgcolor="orange">
      <form action="ingreso.php" method="post"><pre>
      Usuario  <input type="text" name="username" placeholder="Usuario">
      Password <input type="password" name="password" placeholder="password">
               <input type="submit" value="INGRESAR">
                <img src="image/gracias.jfif" width="450" height="380" "aling="right">
      </form>
      <body>
      _END;
    }
    session_start();

    if (isset($_SESSION['initiated']))
    {
        session_regenerate_id();
        $_SESSION['initiated'] = 1;
    }

    if (!isset($_SESSION['count']))
        $_SESSION['count']=0;
    else
        ++$_SESSION['count'];

    echo $_SESSION['count'];
    $conexion->close();

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