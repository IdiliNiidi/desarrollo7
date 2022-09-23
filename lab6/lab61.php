<?php
class cliente{
    //atributo de la clase
     var $nombre;
     var $numero;
     var $pelicula_alquiladas;
     function _construct($nombre,$numero)
     {
        $this->nombre=$nombre;
        $this->numero=$numero;
        $this->pelicula_alquiladas=array();
     }
     function _destruct() {
        echo "<br>destruido:".$this->nombre;
     }
     function dame_numero() {
        return $this->numero;
     }
}
//instanciamos un para de objetos cliente
$cliente1= new cliente("Pepe", 1 );
$cliente2= new cliente("Roberto", 564 );

//mostramos el numero de cada cliente creado
echo"<br> El identificado del cliente 1 es: "   . $cliente1->dame_numero();
echo "<br> El identificador del cliente 2 es: " . $cliente2->dame_numero();
?>