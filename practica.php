<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 1</title>
</head>
<body>
<center><h1>TABLAS DE MULTIPLICAR</h1></center>
<table border="1" align="center">
<?php
echo "<tr>";
for ($cabecera="1";$cabecera<=10;$cabecera++){
            echo "<th>";
            print "tabla del " .$cabecera;
            echo "</th>";
}
echo "</tr>";
for ($x = 1; $x <=10; $x++){
           echo "<tr>";
                for ($y=1;$y<=10;$y++){                      
                        $multiplicacion=$x*$y;                    
                        echo "<td>";                      
                        print $x." * ".$y." = ".$multiplicacion;                      
                        echo "</td>";              
                }              
        echo "</tr>";          
        }   
?>

</table>
</body>
</html>