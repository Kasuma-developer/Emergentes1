<?php 
	// Conectar a una base de datos en PHP
	// $variable_conexion = mysqli_connect("servidor", "usuario", "contraseña", "base_de_datos");

	$coneccion = mysqli_connect("localhost", "root", "", "prueba_emer");

	if(!$coneccion)
		die("Error al conectar con la Base de Datos" . mysqli_connect_error());
	else
		echo "La conexión ha sido exitosa";


	// Insertar un registro a la tabla empleados

	// consulta para insertar un registro
	$insertar = "INSERT INTO empleados VALUES(null, 'Roberto', 'Mamani', 'Soto', '5912452365')";

	// ejecutar la consulta
	$resultado = mysqli_query($coneccion, $insertar);

	// verificar si la consulta fue exitosa
	if(!$resultado)
		echo "Error al insertar el registro";
	else
		echo "Datos registrados correctamente";

	// cerrar la conexión con la Base de Datos
	mysqli_close($coneccion);

?>