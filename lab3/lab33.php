<html>
<head>
    <title>laboratorio 3.3</title>
</head>
<body>
    <?php
    if (array_key_exists('enviar',$_POST)){
        if ($_REQUEST['APELLIDO'] !="")
        {
            echo "El apellido ingresado es";
        }
        else
        {
            echo "Favor coloque el apellido";
        }
        echo "<BR>";
        if ($_REQUEST['Nombre'] != "")
        {
            echo "El nombre ingresado es : $_REQUEST [nombre]";
        }
        else
        {
            echo "Favor coloque el nombre";
        }
    }
    else {

        ?>
        <FORM ACTION = "Lab33.php" METHOD = "POST">
        Nombre: <INPUT TYPE = "TEXT" NAME = "Nombre"><br>
        Apellido:<INPUT TYPE = "TEXT" NAME "APELLIDO"><br>
        <INPUT TYPE = "SUBMIT" NAME="enviar" VALUE="Enviar datos">
    </FORM>
    <?php
    }
</body>
</html>