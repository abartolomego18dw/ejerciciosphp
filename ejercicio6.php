<html>
 <head>
  <title>Prueba de PHP</title>
 </head>
 <body>

 <?php 
         $potencia = 4;
         $cantidad = 200;
         $i=1;
         do {
             $resultado=pow($i,$potencia);
             echo $i."-".$resultado."<br>";
             $i++;
         } while ($resultado<$cantidad);
 ?>
 </body>
</html>