<?php 
	
	// array con nombres de los empleados
	$emp = array( "Roberto", "Ana1", "Julio", "Teresa1", "Vicente", "Elizabeth1", "Sofía1", "Eduardo", "Macario");

	// array con el sexo de los empleados
	$sexo = array("H", "H", "H", "H", "H", "H", "H", "H", "H");

	// array con días
	$dias = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes");

	// preparar el título y elegir el personal a rotar
	$titulo = "ROTACIÓN SEMANAL DEL PERSONAL ";
	$rp = "H";
	if($rp == "H")
		$titulo .= "MASCULINO";
	else
		$titulo .= "FEMENINO";

	
	// buscar el primer hombre o la primera mujer
	$pos = 0;
	while($pos < count($sexo)){
		if($sexo[$pos] == $rp)
			break;
		else
			$pos++;
	}
	
	// verificar si existe personal elegido
	if($pos == count($sexo)){
		echo "No hay personal elegido";
	}	

	else{
		// imprimir la tabla
	 	echo '<table border="1" cellspacing="0">';
	 		echo '<caption>' . $titulo . '</caption>';
	 		
	 		// encabezado
	 		echo '<tr>';
	 			echo '<th>DÍA</th>';
	 			for($i=0; $i<count($emp); $i++)
	 				echo '<th>' . 'EMP ' . ($i+1) . '</th>';
	 		echo '</tr>';

	 		// Mostrar contenido de emp
	 		for($i=0; $i<count($dias); $i++){
		 		echo '<tr>';
		 			// mostrar el día
		 			echo '<th>' . $dias[$i] . '</th>';

		 			// mostrar los empleados
		 			for($k=0; $k<count($emp); $k++)
		 				echo '<td>' . $emp[$k] . '</td>';
		 		echo '</tr>';

		 		// buscar el primer hombre o mujer
		 		$pos = 0;
		 		while($sexo[$pos] != $rp)
		 				$pos++;
		 		
		 		// guardar el primer empleado
		 		$aux_t = $emp[$pos];

		 		// rotar hombres o mujeres
		 		for($j=$pos+1; $j<count($sexo); $j++){
		 			if($sexo[$j] == $rp){
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
