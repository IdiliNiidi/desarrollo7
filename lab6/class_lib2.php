<!DOCTYPE html>
<html lang="en">
<head>
    <title>lib2</title>
</head>
<body>
    <?php
class video extends soporte{
    protected $duration;

    function _construct($tit,$num,$precio,$precio,$duracion){
        parent::_construct($tit,$num,$precio)
        $this->duracion = $duracion;
    }
    public function imprime_caracteristicas(){
        echo "<br> Pelicula en Blu-Ray:";
        parent::imprime_caracteristica();
        echo "<br>Duracion: ". $this->duracion;
    }
} 
?>  
</body>
</html>