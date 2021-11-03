<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pregunta1</title>
</head>
<body> 
    
        <h1> PROGRAMA PARA MULTIPLICAR EN TABLAS. </h1>
        <form action=multiplicartabla.php METHOD=POST>
            <p>Tabla: <input type="text" name="num" maxlength="2" size="2" /></p>
            formato:
            <select name="formato" id="formato">
                <option value="null"></option>
                <option value="1">1</option>
                <option value="2">2</option>
            </select><br>
            sentido:
            <select name="sentido" id="sentido">
                <option value="null"></option>
                <option value="A">A</option>
                <option value="D">D</option>
            </select><br><br>
            <br>
        <input name=Enviar type=submit reset value="Enviar">
        </form> 
<table border="1" align="center">
<?php 
$n=$_POST['num'];
$f=$_POST['formato'];
$s=$_POST['sentido'];
if($f == 1){
    if ($s == 'A'){
        echo "La tabla esta Ascendentemente";
echo "<tr>";
for ($cabecera="1";$cabecera<=$n;$cabecera++){
        echo "<th>";
        print "tabla del " .$cabecera;
        echo "</th>";
}
echo "</tr>";
for ($x = 1; $x <=10; $x++){
        echo "<tr>";
                for ($y=1;$y<=$n;$y++){                      
                        $multiplicacion=$x*$y;                    
                        echo "<td>";                      
                        print $y." * ".$x." = ".$multiplicacion;                      
                        echo "</td>";              
                }              
        echo "</tr>";          
        }   
echo "<tr>";
    }else {
        echo "LA tabla esta descendente";
        echo "<tr>";
        for ($cabecera="1";$cabecera<=$n;$cabecera++){
                echo "<th>";
                print "tabla del " .$cabecera;
                echo "</th>";
        }
        echo "</tr>";
        for ($x = 10; $x > 0; $x--){
                echo "<tr>";
                        for ($y=1;$y<=$n;$y++){                      
                                $multiplicacion=$x*$y;                    
                                echo "<td>";                      
                                print $y." * ".$x." = ".$multiplicacion;                      
                                echo "</td>";              
                        }              
                echo "</tr>";          
                }   
        echo "<tr>";

    }    
}else{
    if($s == 'A'){
        echo "La tabla esta Ascendentemente";
if ($n<1 or $n>10) {
    echo "<br>";
    echo "no has escrito un nůmero entre el 1 y el 10.";
    }
else {
    echo "<h4>Tabla del $n:</h4>";
    $i=1;
    while ($i<=10) {
        echo "$n x $i = ".$n*$i."<br/>";
        $i++;
        } 
    }  
    echo "</tr>";}else{
        echo "LA tabla esta descendente";
        echo "<br>";
        if ($n<1 or $n>10) {
            echo "no has escrito un nůmero entre el 1 y el 10.";
            }
        else {
            echo "<h4>Tabla del $n:</h4>";
            $i=10;
            while ($i>0) {
                echo "$n x $i = ".$n*$i."<br/>";
                $i--;
                } 
            }  
        }
}
?>
</table>
</body>
</html>