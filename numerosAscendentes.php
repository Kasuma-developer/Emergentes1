<?php
$F_a = $_POST['a'];
echo "valor insertado:$F_a";
$d1 = intval ($F_a / 100);
$d2 = intval ($F_a / 10) % 10;
$d3 = $F_a % 10;
echo "<br>valor separado para la funcion: <br> d1=$d1<br>d2=$d2<br>d3=$d3";
echo "<br>Ascender los valores:<br>";
if ($d1<$d2){
    if ($d2<$d3){
        echo "$d1, $d2, $d3<BR>";
    }else{
        if ($d1<$d3){
          echo "$d1, $d3, $d2<BR>";
        }else{
           echo "$d3, $d1, $d2<BR>";
        }
    }
} else {
    if ($d1<$d3){
        echo "$d2, $d1, $d3<BR>";
    }else{
        if ($d2<$d3){
           echo "$d2, $d3, $d1<BR>";
        }else{
           echo "$d3, $d2, $d1<BR>";
        }
    }
}
 ?>
