<?php 	
	$coneccion = mysqli_connect("localhost", "root","","prueba_fopp");

	$modificar ="UPDATE empleados SET telefono ='76543234' WHERE  id=4";

	$resultado= mysqli_query ($coneccion, $modificar);

		if(!$resultado)
		echo " se detecto un erro al modificar la base de datos ";
		else 
		echo "la modificacion se hizo correctamente  ";
		
	mysqli_close ($coneccion);
?>