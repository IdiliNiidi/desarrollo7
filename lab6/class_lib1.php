<!DOCTYPE html>
<html lang="en">
<head>
    <title>classe/title>
</head>
<body>
    <?php
    class soporte{
        public $titulo;
        protected $numero;
        private $precio;
        function _construct($tit, $num, $precio){
            $this ->titulo = $tit;
            $this->numero = $num;
            $this->precio = $precio;
        }
        public function dame_precio_sin_itbm(){
            return $this->precio;
        }
        public function dame_precio_con_itbm(){
            return $this->precio*0.07;
        }
        public function dame_numero_identificacion(){
            return $this->numero;
        }
        public function imprime_caracteristica(){
            echo "<br>".$this->titulo;
            echo"<br>". $this->precio."(ITB no incluido)";
        }
    }
    ?>
</body>
</html>