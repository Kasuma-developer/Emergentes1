<?php

include('db.php');

if (isset($_POST['guardar'])) {
  $nombre = $_POST['nombre'];
  $paterno = $_POST['paterno'];
  $materno = $_POST['materno'];
  $sexo = $_POST['sexo'];
  $fecha = $_POST['fecha'];
  $query = "INSERT INTO ALUMNO(nombre,paterno,materno,sexo,fechaNacimiento) VALUES ('$nombre', '$paterno','$materno','$sexo','$fecha')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("fallo la insersion");
  }

  $_SESSION['message'] = 'Tarea guardada satisfactoriamente';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>