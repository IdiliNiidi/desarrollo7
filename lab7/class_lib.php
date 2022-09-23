<?php
class MiClase{
    const constante = 'vlor contante';
    function mostrarConstante(){
        echo self::constante . "\n";
    }
}
//laboratorio 7.2: Abstraccion de objetos
abstract class ClaseAbstracta{
    //sse fuerza la herenci de la clase para definir estos metodos
    abstract protected function tomarValor();
    abstract protected function prefixValor($prefix);
    //metodo comun
    public function printOut(){
        print $this->tomarValor() . "<br>";
    }
}
class ClaseConcreta1 extends ClaseAbstracta{
    protected function tomarValor()
    {
        return "ClaseConcreta";
    }
    public function prefixValor($prefix){
        return "{$prefix}ClaseConcreta";
    }
}
class ClaseConcreta2 extends ClaseAbstracta{
    protected function tomarValor(){
        return "ClaseConcreta2";
        }
        public function prefixValor($prefix){
            return "{$prefix}ClaseConcreta2";
        }
}
//Laboratorio  7.3:interfaces
interface iTemplate{
    public function ponerVariable($nombre, $var);
    public function verHTML($template);
}
class Template implements iTemplate{
    private $vars = array();
    public function ponerVariable($nombre, $var)
    {
        $this->vars[$nombre] = $var;
    }
    public function verHTML($template)
    {
        foreach($this->vars as $nombre =>$value){
            $template = str_replace('{' . $nombre.'}', $value,template);
        }
        return $template
    }
}
?>
//Laboratorio 7.4 Auto carga de clase( no incluidas en tiempo de diseño)

<?php
class miclase {
public function __construct() {
echo “Mi Clase ha sido agregada!!! <br>";
     }
}
?>

//Nota: Guardar miclase.php en la sub carpeta llamada clases

<?php
class miotraclase {
public function __construct() {
echo “Mi segunda Clase ha sido agregada!!! <br>";
}
}   
?>
//Nota: Guardar miotraclase.php en la sub carpeta llamada clases
<?php

spl_autoload_register(function ($nombre_clase) {
$archivo = "clases/". $nombre_clase .".php";
if(file_exists($archivo)) include_once($archivo);
});
$obj = new miclase();
$obj2 = new miotraclase();
?>

//Lab7.5.php clonacion de objeto
<?php 
class SubObject
{
static $instances = 0;
public $instance;
public function __construct() {
$this->instance = ++self::$instances;
}
public function __clone() {
$this->instance = ++self::$instances;
}
}
class MyCloneable
{
public $object1;
public $object2;
function __clone()
{
// Forzar una copia de this->object
$this->object1 = clone $this->object1;
}
}
?>
<?php
// class_lib.php
class Cilindro
{
protected $pi;
protected $diametro;
protected $altura;
protected $radio;
function __construct($d, $a){
$this->diametro = $d;
$this->altura = $a;
$this->pi = 3.141593;
$this->radio=$d/2;
}
function obtener_radio(){
return $radio;
}
function calc_volumen(){
return $this->pi*$this->radio*$this->radio*$this->altura;
}
function calc_area(){
return 2*$this->pi*$this->radio*($this->radio+$this->altura);
}
}
?>