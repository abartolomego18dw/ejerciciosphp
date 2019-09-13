<html>
 <head>
  <title>Prueba de PHP</title>
 </head>
 <body>

 <?php 
 		$pisos = 5;
 		$puertas = 4;

 		for ($i=1; $i <= $pisos; $i =$i +1) {
 			for ($e=1; $e <= $puertas ; $e = $e+1) { 
 				echo "Piso ". $i . " puerta ". $e . "<br>";
 			}
 		} 		

 ?>
 </body>
</html>