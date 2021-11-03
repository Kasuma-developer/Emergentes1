<?php
$num=2;
$n = array(
array(1,2,3),
array("RAÚL SALMON","MACARIO SURCO","RICARDO FINOT"),
array("NOCHE DE ALMAS","ORO Y PLATA","EL ENCUENTRO"),
array(55,30,40));
echo'<table border="1" cellspacing="0">';
echo'<caption>RANKING DE AUTORES NACIONALES</caption>';
echo'<tr>';
    echo'<th>No</th><th>Autor</th><th>obra</th><th>precio</th>';
echo'</tr>';

for($i = 0; $i <= 2; $i++){
    echo '<tr>';
        for($j = 0; $j <= 3; $j++)
            echo'<td>'.$n[$j][$i ].'</td>';
    echo'</tr>';
}
echo'</table>';

function rotar($n){
	
    // Rotar el array a mano
    $primero = $numeros[0];
    $x;
?>