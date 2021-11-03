<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones php para arrays</title>
</head>
<body>
    <?php
    $semana = array("Lunes", "Martes", "Miercoles","Jueves","Viernes","Sabado","Domingo");
    $empleados = array("Gerente" => "Wilmer","Diercto"=>"Ricardo","Asesora" => "Celia",
    "Promotor"=>"Gaston","Secretaria"=>"Sandra");
    echo "<pre>";
    print_r($semana);
    print_r($empleados);
    echo"</pre>";

    echo "<h3>Tamano de un array </h3>";
    echo "semana = " . count($semana);
    echo "<br> empleados = " . count($empleados);

    echo "<h3>mostrar los elementos de un arrays</h3>";
    echo "semana = (" . join(", ", $semana).")";
    echo "<br>Empleados = (" . join("-", $empleados).")";

    // ordenar los elementos de un arrays ascendentemente
    // 
    echo "<h3>Ordenar los elementos d eun array ascendentemente</h3>";
    sort($semana);
    echo "<pre>";
    print_r($semana);
    echo"</pre>";
    // invertir un array
    // array_reverse($nom_array)
    $edades = array(24, 45,27,32,53,39);
    echo "<h3>Invertir los elementos de un array </h3>";

    echo "<pre>";
        print_r($edades);
    echo "</pre>";

    $edades=array_reverse($edades);
    echo "<pre>";
        print_r($edades);
    echo "</pre>";

    // separar los indices de un array asociativo en variables
    //extract($nom_array)
    $datosPersonales = array("Nombre" => "Juan carlos" , "Paterno" => "Mendoza", "Edad"=> 23);
    echo "<pre>";
        print_r($datosPersonales);
    echo "</pre>";


    echo $datosPersonales["Nombre"] ."<br>";
    echo $datosPersonales["Paterno"]."<br>" ;
    echo $datosPersonales["Edad"];
    extract($datosPersonales);
    echo $Nombre . ",".$Paterno."," .$Edad;
    ?>
</body>
</html>