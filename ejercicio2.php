<html>
 <head>
  <title>Prueba de PHP</title>
 </head>
 <body>

 <?php 
         $numero1 = rand(1, 1000);
         $numero2 = rand(1, 1000);
         $numero3 = rand(1, 1000);
         echo "Los numeros son: ".$numero1.", ".$numero2." y ".$numero3."<br>";
         if($numero1 > $numero2 && $numero1 > $numero3){
             echo "El numero mayor es: ".$numero1;
         }
            elseif($numero2 > $numero1 && $numero2){
                echo "El numero mayor es: ".$numero2;
            }
                else{
                    echo "El numero mayor es: ".$numero3;
                }
 ?>
 </body>
</html>