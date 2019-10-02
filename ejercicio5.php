<html>
 <head>
  <title>Prueba de PHP</title>
 </head>
 <body>

 <?php 
         $edad = rand(1,120);
         $altura = rand(20,220);
         $compania = rand(0,1) == 1;

         if($edad>10 || $altura>120){
                 echo "La persona con ".$edad." años y con la altura ".$altura."cm pueden subir a la atraccion";
         }
         else if($edad<6 && $compania==1){
                 echo "La persona con ".$edad." años y con la altura ".$altura."cm pueden subir a la atraccion acompañado";
         }
         else{
                 echo "No puede subir a la atraccion ya que tiene ".$edad."años y ".$altura."cm y no va acompañado";
         }
 ?>
 </body>
</html>