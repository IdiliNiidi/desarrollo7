<?php
$precio1 = $_POST['precio1'];
$precio2 = $_POST['precio2'];
$precio3 = $_POST['precioi3'];
$media = ($precio1+$precio2+$precio3)/3;
echo "<br/>    DATOS RECIBIDOS";
echo "<br/>     Precio producto establecimiento 1:". $precio1."dolares";
echo "<br/>      Precio producto establecimiento2:". $precio2. "dolares";
echo "<br/>      Precio producto establecimiento3:". $precio3. "precio3";
echo "<br/>       Precio medio del producto es de ". $media. "dolares";
?>     