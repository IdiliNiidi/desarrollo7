<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" Content="text/html;charse-UTF-8">
</head>
<body>
<?php
$persona = array (
    array("nombre" => "Rosa","Estatura" =>168,"sexo" => "F"),
    array("nombre"=>"Ignacio","Estatura"=>175,"sexo"=>"M"),
    array("nombre"=>"Daniel","Estatura"=>172,"sexo"=>"M"),
    array("nombre"=>"Ruben","Estatura"=>182,"sexo"=>"M"),
);

echo"<b>DATOS SOBRE EL PERSONAL<b><br>";

$numPersonas = Count($persona);

for ($i=0; $i<$numPersonas; $i++)
{
    echo "nombre:<b>", $persona[$i]['nombre'],"</b><br>";
    echo "Estatura:<b>",$persona[$i]['Estatura'],"cm</b><br>";
    echo "Sexo: <b>", $persona[$i]['sexo'],"</b><br><hr>";
}
?>
</body>
</html>