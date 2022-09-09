<!DOCTYPE html>
<html >
      <head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php
    $posicion ="arriba";
     switch ($posicion){
        case "arriba";//bloque1
        echo "la varialble contiene";
        echo " el valor arriba";
        break;
        case "abajo";//bloqye2
        echo "la variable contiene";
        echo"   el valor abajo";
        break;
        default: //bloque 3
        echo"la variable contiene otro valor";
        echo "distinto de arriba y abajo";
     }
    ?>
</body>
</html>