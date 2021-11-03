<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Practica</title>
</head>
<body>
	<?php 
	$autor = array(
	'Alcides Arguedas' =>array('Obra' =>'RAZA DE BRONCE','Costo'=>5,'Genero'=>'Novela'),
	'Bartolomé Arzans de Orsúa' =>array('Obra' =>'RELATOS DE LA VILLA IMPERIAL DE POTOSÍ','Costo'=>8,'Genero'=>'Narracion'),
	'Oscar Cerruto' =>array('Obra' =>'ALUVIO DE FUEGO ','Costo'=>15,'Genero'=>'Cuento'),
	'Pedro Shimose' =>array('Obra' =>'QUIERO ESCRIBIR, PERO ME SALE ESPUMA','Costo'=>2,'Genero'=>'poesia')
);
	echo '<center>';
	echo'<table border="1" cellpadding="0" aling="center">';
	    echo'<caption><h1>Autores de Bolivia</h1></caption>';
	echo'<tr>';
	echo'<th>Nombre del Autor</th>';
	foreach ($autor as $ind_fil => $val_fil) {
	foreach ($val_fil as $ind_col => $val_col) {
	echo '<th>' . $ind_col . '</th>';
		}
	break; 
}

echo'</tr>';
	foreach ($autor as $ind_fil => $val_fil) {
	echo'<tr>';
	echo'<td>' . $ind_fil . '</td>';
	foreach ($val_fil as $ind_col => $val_col) {
	echo'<td>' . $val_col . '</td>';
	}
}
	echo'</tr>';
	echo'</table>';
	echo '</center>';
?>

</body>
</html>