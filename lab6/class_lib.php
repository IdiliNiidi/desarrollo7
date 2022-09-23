<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>class_lib</title>
</head>
<body>
 <?php
 class cliente{
     var $nombre;
     var $numero;
     var $pelicula_alquilada;
    function _construct($nombre,$numero){
        $this->nombre=$nombre;
        $this->numero=$numero;
        $this->pelicula_alquilada=array();
    }
    function _destruct(){
        echo "<br>desruido: " . $this->nombre;
    }
    function dame_numero(){
        return $this->numero;
    }

 }
 ?>   
</body>
</html>