<?php 	
	$coneccion = mysqli_connect("localhost", "root","","prueba_fopp");

	$eliminar ="DELETE FROM empleados WHERE id=3";

	$resultado= mysqli_query ($coneccion, $eliminar);

	if(!$resultado)
		echo " se detecto un error al eliminar un empleado ";
		else 
		echo " se logro eliminar al empleado ";
		

	mysqli_close ($coneccion);
?>