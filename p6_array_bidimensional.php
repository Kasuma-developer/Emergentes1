<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
   <title>Tablas de multiplicar.</title> 
</head>
<body>
<h1>Tablas de multiplicar</h1>
<!--<h3>Escribe un número del 1 al 10 y yo te diré la tabla de multiplicar.</h3>
<form action="#" method="post">
   <p>Escribe aquí el número: <input type="text" name="num" maxlength="2" size="2" /></p>
   <p><input type="submit" value="Ver tabla de multiplicar." /></p>
</form>-->
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