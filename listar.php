<?php 
	$coneccion = mysqli_connect("localhost", "root", "", "prueba_emer");

	// consulta de los registros de la tabla empleados
	$lista = "SELECT * FROM empleados";

	// ejecutar la consulta
	$resultado = mysqli_query($coneccion, $lista);

	// mostrar los valores de la consulta
	echo "<br>";
	foreach ($resultado as $val) {
		echo $val['id'] . " " . $val['nombre'] . " " . $val['paterno'] . " " . $val['materno'] . " " . $val['telefono'] . "<br>";
	}

	// cerrar la coneción
	mysqli_close($coneccion);




?>