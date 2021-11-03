<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Array Asociativo</title>
</head>
<body>
	<?php 
		// declarar un array asociativo
		$persona = array("Nombre" => "Juan",
						"Paterno" => "Flores",
						"Edad" => 25,
						"Sexo" => "Varón"
						);

		// echo "<pre>";
		// 	print_r($persona);
		// echo "</pre>";


		// Mostrar el contenido del array 
		echo 'Mi nombre es ' . $persona['Nombre'] . ' ' . $persona['Paterno'] . ', tengo ' . $persona['Edad'] . ' años y soy ' . $persona['Sexo'];

		// mostrar el índice y el contenido del array
		echo "<br><br>Datos personales <br>";
		foreach ($persona as $ind => $valor) {
			echo $ind . ": " . $valor . "<br>";
		}

	?>
</body>
</html>