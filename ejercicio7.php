<html>
 <head>
  <title>Prueba de PHP</title>
 </head>
 <body>
 <?php 
    $numero = rand(1,25);
    echo "<h1>El numero ".$numero."</h1>";
    do{
        if($numero%2==1){
            $numero =(($numero*3)+1);
            echo "Lo multiplicamos por 3 y sumamos 1: ";
        }
        else{
            $numero = $numero/2;
            echo "Lo dividimos por 2: ";
        }
        echo $numero."<br>";
    }while($numero!=1);
 ?>
 </body>
</html>