<?php

include("db.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM ALUMNO WHERE id = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("fallo algo.");
  }

  $_SESSION['message'] = 'satisfactoriamente subido';
  $_SESSION['message_type'] = 'danger';
  header('Location: index.php');
}

?>