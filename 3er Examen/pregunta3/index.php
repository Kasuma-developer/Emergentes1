<?php include("db.php"); ?>

<?php include('incluye/cabeza.php'); ?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <div class="card card-body">
        <form action="guardar.php" method="POST">
          <div class="form-group">
              <label>Nombre</label>
            <input type="text" name="nombre" class="form-control" placeholder="introduce su nombre" autofocus>
          </div>
          <div class="form-group">
            <label>Apellido paterno</label>
            <input type="text" name="paterno" class="form-control" placeholder="apellido paterno" autofocus>
          </div>
          <div class="form-group">
          <label>Apellido materno</label>
            <input type="text" name="materno" class="form-control" placeholder="apellido materno" autofocus>
          </div>
          <div class="form-group">
            <label>sexo</label>
            <select name="sexo" id="sexo">
            <option value="F">MUJER</option>
            <option value="M">HOMBRE</option>
          </div>
          <div class="form-group">
          <label>fecha de nacimiento</label>
            <input type="date" name="fecha" class="form-control" placeholder="fecha" autofocus>
          </div>
          <input type="submit" name="guardar" class="btn btn-success btn-block" value="guardar">
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Paterno</th>
            <th>Materno</th>
            <th>Sexo</th>
            <th>Fecha de nacimiento</th>
            <th>Accion</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM ALUMNO";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['paterno']; ?></td>
            <td><?php echo $row['materno']; ?></td>
            <td><?php echo $row['sexo']; ?></td>
            <td><?php echo $row['fechaNacimiento']; ?></td>
            <td>
              <a href="editar.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker">Editar</i>
              </a>
              <a href="eliminar.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt">Borrar</i>
              </a>
            </td>
          </tr>
          <?php }?>
        </tbody>
      </table>
    </div>
  </div>
</main>
