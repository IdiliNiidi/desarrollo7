<!DOCTYPE html>
<html lang="en">
<body>   
<?php
include("class_lib.php");
//instanciamos un para de objeto cliente
$cliente1=new cliente("Pepe", 1);
$cliente2=new cliente("Roberto", 564);
//mostramo el numero de cada cliente creado
echo"<br>el identificador del cliente 1 es : " . $cliente1->dame_numero();
echo"<br>el identificador del cliente 2 es : ". $cliente2->dame_numero();
?>
</body>
</html>