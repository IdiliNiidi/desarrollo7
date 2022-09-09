<?php
$diametro = $_POST['diam'];
$altura = $_POST['altu'];
$radio = $diametro/2;
$Pi = 3.14159;
$volumen = $Pi*$radio*$radio*$altura;
echo "<br/> el volumen del cilindro es".$volumen."metros cubicos";
?>