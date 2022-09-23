<!DOCTYPE html>
<html lang="en">
<head>
    <title>clase2</title>
</head>
<body>
    <?php
    class juego extends soporte{
        protected $consola; // consola del juego ej: DS Lite
        protected $min_num_jugadores;
        protected $max_num_jugadores;
        Function __construct($tit,$num,$precio,$consola,$min_j,$max_j){
        parent::__construct($tit,$num,$precio);
        $this->consola = $consola;
        $this->min_num_jugadores = $min_j;
        $this->max_num_jugadores = $max_j;
        }
        public function imprime_caracteristicas(){
        echo "<br>Juego para: " . $this->consola;
        parent::imprime_caracteristicas();
        echo "<br>" . $this->imprime_jugadores_posibles();
        }
        public function imprime_jugadores_posibles() {
        if ($this->min_num_jugadores == $this->max_num_jugadores){
        if ($this->min_num_jugadores==1)
        echo "<br>Para un jugador";
        else
        echo "<br>Para " . $this->min_num_jugadores . " jugadores";
        }
        else {
        echo "<br>De " . $this->min_num_jugadores . " a " . $this->max_num_jugadores . " jugadores.";
        }
        }
        }
    ?>
</body>
</html>