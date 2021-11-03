<?php 
	$liga = array(
		// 'UPEA' => array('CIUDAD' => 'EL ALTO','PTS.' => 21, 'PJ' => 12, 'PG' => 7, 'PE' => 0, 'PP' => 5, 'GF' => 30, 'GC' => 21, 'ASIS' => 500), 
		// 'SAN SIMÓN' => array('CIUDAD' => 'COCHABAMBA','PTS.' => 21, 'PJ' => 12, 'PG' => 7, 'PE' => 0, 'PP' => 5, 'GF' => 26, 'GC' => 17, 'ASIS' => 780), 
		'UNIFRANZ' => array('CIUDAD' => 'LA PAZ','PTS.' => 20, 'PJ' => 12, 'PG' => 6, 'PE' => 2, 'PP' => 4, 'GF' => 28, 'GC' => 17, 'ASIS' => 354), 
		'USFX' => array('CIUDAD' => 'CHUQUISACA','PTS.' => 20, 'PJ' => 12, 'PG' => 6, 'PE' => 2, 'PP' => 4, 'GF' => 20, 'GC' => 16, 'ASIS' => 480), 
		'UTO' => array('CIUDAD' => 'ORURO','PTS.' => 20, 'PJ' => 12, 'PG' => 6, 'PE' => 2, 'PP' => 4, 'GF' => 14, 'GC' => 11, 'ASIS' => 340), 
		'EMI' => array('CIUDAD' => 'SANTA CRUZ','PTS.' => 20, 'PJ' => 12, 'PG' => 6, 'PE' => 2, 'PP' => 4, 'GF' => 15, 'GC' => 15, 'ASIS' => 240),
	);

	$suma = array(0, 0, 0, 0, 0, 0, 0, 0);

	// visualizar estructura
	// echo "<pre>";
	// 	print_r($liga);
	// 	print_r($suma);
	// echo "</pre>";

	// hallar la sumas totales por columna
	foreach ($liga as $ind_fil => $val_fil) {
		$i = -1;
		foreach ($val_fil as $ind_col => $val_col) {
			if($i != -1)
				$suma[$i] = $suma[$i] + $val_col;
			$i++;
		}
	}

	// mostrar la tabla
	echo '<table border="1" cellspacing="0">';
		echo '<caption><b>TABLA DE POSICIONES - LIGA DE FÚTBOL UNIVERSITARIO - 2020</b></caption>';
	 	
		// encabezado
		echo '<tr>';
			echo '<th>Nº</th><th>EQUIPO</th>';
			foreach($liga as $fil){
				foreach ($fil as $ind_col => $val_col) {
					echo '<th>' . $ind_col .'</th>';
				}
				break;
			}
		echo '</tr>';
		
		// contenido
		$auxc = "";
		$et = "";
		$cit = "";
		$ast = 0;

		$num = 1;
		foreach ($liga as $ind_fil => $val_fil) {
			echo '<tr>';
				echo '<td>' . $num . '</td>';
				echo '<td>' . $ind_fil . '</td>';
				foreach ($val_fil as $ind_col => $val_col) {
					echo '<td>' . $val_col . '</td>';

					// averiguar taquillero
					if($ind_col == 'CIUDAD')
						$auxc = $val_col;

					if($ind_col == 'ASIS')
						if($val_col > $ast){
							$et = $ind_fil;
							$cit = $auxc;
							$ast = $val_col;
						}

				}
				$num++;
						}
			echo '</tr>';

		// mostrar el promedio
		$tam = count($liga);
		echo '<tr>';
			echo '<td></td><td></td><td align="right">Promedio</td>';
			for($i=0;$i<count($suma); $i++)
				echo '<td>' . round($suma[$i]/$tam,1) . '</td>';
		echo '</tr>';
	echo '</table>';

	echo "<br>";
	echo "El equipo mas taquillero es " . $et . " de la ciudad de " . $cit . " con " . $ast . " asistentes.";

 ?>