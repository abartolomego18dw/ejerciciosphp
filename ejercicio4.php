<html>
 <head>
  <title>Prueba de PHP</title>
 </head>
 <body>

 <?php

    $cadena = "Somos o no somos";
    //explode Devuelve un array de string
    // srtolower Convertimos la frase a minuscula
    $separar = explode(" ", strtolower($cadena));

    foreach($separar as $palabra)
    {
        trim($palabra);//Eliminamos los espacios en blanco
        $nuevo .= $palabra; 
    }
    // Le da la vuelta a la frase y lo compara 
    if($nuevo == strrev($nuevo))
    {
        echo "Es palindromo";
    }
    else {
        echo "No es palindromo";
    }

?>
 </body>
</html>
