<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="Segundo_Examen_Emergentes.php" method="get">
	Numero de  Equipos:
	<input type="text" name="n" size="5">
	<input type="submit" name="Aceptar">
</form>
<br>
<form action="Segundo_Examen_Emergentes.php" method="post">
<?php
if (isset($_GET['n']))
    $n = $_GET['n'];
    
else
 
    $n=3;
    for ($i=0; $i < $n; $i++) { 
        echo "<input type='text' name='vec[]' size='10' placeholder='nombre Equipo' > ";
        echo "<input type='text' name='vec1[]' size='10' placeholder='CIUDAD'>";
        echo "<input type='text' name='vec2[]' size='10' placeholder='PTS.' > ";
        echo "<input type='text' name='vec3[]' size='10' placeholder='PJ'>";
        echo "<input type='text' name='vec4[]' size='10' placeholder='PG' > ";
        echo "<input type='text' name='vec5[]' size='10' placeholder='PE'>";
        echo "<input type='text' name='vec6[]' size='10' placeholder='PP' > ";
        echo "<input type='text' name='vec7[]' size='10' placeholder='GF'>";
        echo "<input type='text' name='vec8[]' size='10' placeholder='GC' > ";
        echo "<input type='text' name='vec9[]' size='10' placeholder='ASIS'>";
        echo "<br>";
    } 

?>	
<input type="submit">
</form>
	
<?php

if (isset($_POST['vec'])) {
    $vector = $_POST['vec'];
    $vector1 = $_POST['vec1'];
    $vector2 = $_POST['vec2'];
    $vector3 = $_POST['vec3'];
    $vector4 = $_POST['vec4'];
    $vector5 = $_POST['vec5'];
    $vector6 = $_POST['vec6'];
    $vector7 = $_POST['vec7'];
    $vector8 = $_POST['vec8'];
    $vector9 = $_POST['vec9'];
	$n= count($vector);
for ($i=0; $i < $n; $i++){
       echo "$i = $vector[$i] <br>";
}
 }

?>



<hr>
<h1>TABLA DE POSISCIONES - LIGA DE FUTBOL UNIVERSITARIO - 2020</h1>
<table border="1" cellspacing="0">
	<tr>
		<th> EQUIPOS </th>
        <th> NOMBRE  </th>
	    <th> CIUDAD </th>
        <th> PTS </th>
        <th> PJ </th>
        <th> PG </th>
        <th> PE </th>
        <th> PP</th>
        <th> GF</th>
        <th> GC </th>
        <th> ASIS</th></th>
	</tr>
<?php 
$cont=1;
$a=0;$b=0;$c=0;$d=0;$e=0;$f=0;$g=0;$h=0;
for ($i=0; $i <=$n; $i++){
    ?>
	<tr>
		
		<?php
		  if($i==$n){
              $hh=$h/$n;
              $aa=$a/$n;
              $bb=$b/$n;
              $cc=$c/$n;
              $dd=$d/$n;
              $ee=$e/$n;
              $ff=$f/$n;
              $gg=$g/$n;
            print "<td>  </td>";
            print "<td> </td>";
            print '<td> promedio  </td>';
            print "<td>$hh</td>"; 
            print "<td>$aa</td>"; 
            print "<td>$bb</td>"; 
            print "<td>$cc</td>"; 
            print "<td>$dd</td>"; 
            print "<td>$ee</td>"; 
            print "<td>$ff</td>"; 
            print "<td>$gg</td>"; 
        }else {
            print "<td>$cont</td>"; 
            print "<td>$vector[$i] </td>";
            print "<td>$vector1[$i] </td>";
            print "<td>$vector2[$i] </td>";
            $h=$h+$vector2[$i];
            print "<td>$vector3[$i] </td>";
            $a=$a+$vector3[$i];
            print "<td>$vector4[$i] </td>";
            $b=$b+$vector4[$i];
            print "<td>$vector5[$i] </td>";
            $c=$c+$vector5[$i];
            print "<td>$vector6[$i] </td>";
            $d=$d+$vector6[$i];
            print "<td>$vector7[$i] </td>";
            $e=$e+$vector7[$i];
            print "<td>$vector8[$i] </td>";
            $f=$f+$vector8[$i];
            print "<td>$vector9[$i] </td>";
            $g=$g+$vector9[$i];
        }
		?>
	</tr>
<?php
$cont=$cont+1;
 }
 ?>
</table>
</body>
</html>