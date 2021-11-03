<?php
include("db.php");
$nombre = '';
$paterno= '';
$materno= '';
$sexo='';
$fecha='';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM ALUMNO WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nombre = $row['nombre'];
    $paterno = $row['paterno'];
    $materno = $row['materno'];
    $sexo = $row['sexo'];
    $fecha = $row['fechaNacimiento'];
  }
}

if (isset($_POST['guardar'])) {
  $id = $_GET['id'];
  $nombre = $_POST['nombre'];
  $paterno = $_POST['paterno'];
  $materno = $_POST['materno'];
  $sexo = $_POST['sexo'];
  $fecha = $_POST['fecha'];

  $query = "UPDATE ALUMNO set nombre = '$nombre', paterno = '$paterno', materno = '$materno' ,sexo ='$sexo',fechaNacimiento='$fecha' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'subido satisfactoriamente';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');
}

?>
<?php include('incluye/cabeza.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="editar.php?id=<?php echo $_GET['id']; ?>" method="POST">
      <div class="form-group">
              <label>Nombre</label>
            <input type="text" name="nombre" class="form-control" value='<?php echo $nombre; ?>' placeholder="introduce su nombre" autofocus>
          </div>
          <div class="form-group">
            <label>Apellido paterno</label>
            <input type="text" name="paterno" class="form-control" value='<?php echo $paterno; ?>'placeholder="apellido paterno" autofocus>
          </div>
          <div class="form-group">
          <label>Apellido materno</label>
            <input type="text" name="materno" class="form-control" value='<?php echo $materno; ?>' placeholder="apellido materno" autofocus>
          </div>
          <div class="form-group">
            <label>sexo</label>
            <select name="sexo" id="sexo">
            <option value="F">MUJER</option>
            <option value="M">HOMBRE</option>
          </div>
          <div class="form-group">
          <label>fecha de nacimiento</label>
            <input type="date" name="fecha" class="form-control" value='<?php echo $fecha; ?>'placeholder="fecha" autofocus>
          </div>
        <button class="btn-success" name="guardar">guardar</button>
      </form>
      </div>
    </div>
  </div>
</div>
