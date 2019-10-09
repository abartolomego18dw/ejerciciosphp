<!DOCTYPE html>
<html>
<head>
  <title>UD2 - Suscripción boletín</title>
</head>
    <body>
        <?php
        echo "El nombre introducido es: ".$_POST["nombre"];
        echo "<br>El aellido introducido es: ".$_POST["apellidos"];
        echo "<br>El email introducido es: ".$_POST["email"];
        echo "<br>La fecha es: ".$_POST["bdaytime"];
        echo "<br>La contraseña es: ".$_POST["contras"];
        echo "<br>El archivo enviado es : <img src='".$_POST["myFile"]."' height='50px' width='50px'>";
        echo "<br>El ciclo es: ".$_POST["ciclo"];
        echo "<br>Los lenguajes selecionados: ";
        foreach($_POST['lenguaje'] as $selected){
            echo "<ul><li>".$selected."</li> </ul>";
            }
        echo "<br>El dia es: ".$_POST["dia"];
        echo "<br>El color es: <div style= 'display:inline-block;width:20px; height:20px; background-color:".$_POST["color"].";'></div>";
        echo "<br>El comentario es: ".$_POST["comentario"];
        ?>
    </body>
</html>