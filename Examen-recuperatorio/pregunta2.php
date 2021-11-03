<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pregunta2</title>
</head>

<body>

<form action=# METHOD=POST>
            Genero:
            <select name="sexo" id="sexo">
                <option value="null"></option>
                <option value="A">Hombre</option>
                <option value="D">Mujer</option>
            </select><br><br>
            <br>
        <input name=Enviar type=submit reset value="Enviar">
        </form> 
	<?php

	// array con nombres de los empleados
	$emp = array("Wilson", "Roberto", "Ana", "Julio", "Teresa", "Vicente", "Elizabeth", "Sofía", "Eduardo", "Macario");

	// array con el sexo de los empleados
	$sexo = array("H", "H", "M", "H", "M", "H", "M", "M", "H", "H");

	// array con la edad de los empleados
	$edad = array(34, 26, 41, 54, 28, 36, 56, 42, 60, 29);


	// array con días
	$dias = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "sabado");

	// Verificar la edad si esta en el rango de 50 años no se tomara en cuenta
	if ($edad > 50)



		// preparar el título y elegir el personal a rotar
		$titulo = "ROTACIÓN SEMANAL DEL PERSONAL ";
	$rp = "M";
	if ($rp == "H")
		$titulo .= "MASCULINO";
	else
		$titulo .= "FEMENINO";


	// buscar el primer hombre o la primera mujer
	$pos = 0;
	while ($pos < sizeof($sexo)) {
		if ($sexo[$pos] == $rp)
			break;
		else
			$pos++;
	}

	// verificar si existe personal elegido
	if ($pos == sizeof($sexo)) {
		echo "No hay personal elegido";
	} else {
		// imprimir la tabla
		echo '<table border="1" cellspacing="0">';
		echo '<caption>' . $titulo . '</caption>';

		// encabezado
		echo '<tr>';
		echo '<th>DÍA</th>';
		for ($i = 0; $i < count($emp); $i++)
			echo '<th>' . 'EMP ' . ($i + 1) . '</th>';
		echo '</tr>';

		// Mostrar contenido de emp
		for ($i = 0; $i < sizeof($dias); $i++) {
			echo '<tr>';
			// mostrar el día
			echo '<th>' . $dias[$i] . '</th>';

			// mostrar los empleados
			for ($k = 0; $k < count($emp); $k++)
				if ($edad[$k] > 50 && $sexo[$k] == $rp) {
					$k++;
				}else{
					echo '<td>' . $emp[$k] . '</td>';
				}
			echo '</tr>';

			// buscar el primer hombre o mujer
			$pos = 0;
			while ($sexo[$pos] != $rp)
				$pos++;

			// guardar el primer empleado
			$aux_t = $emp[$pos];

			// rotar hombres o mujeres
			for ($j = $pos + 1; $j < sizeof($sexo); $j++) {
				if ($sexo[$j] == $rp) {
					$emp[$pos] = $emp[$j];
					$pos = $j;
				}
			}

			// Colocar el 1er. empleado en el lugar del último
			$emp[$pos] = $aux_t;
		}
	}
	echo '</table>';

	?>
</body>

</html>