<?php
require_once('conexion.php');
$xe = conectar();
$sql = "SELECT * FROM matricula";
$res = mysqli_query($xe, $sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Lista de matriculas</title>
  <style>
  table {
    border-collapse: collapse;
    width: 50%;
    margin: 0 auto; /* para centrar la tabla */
    font-family: Arial, Helvetica, sans-serif;
    font-size: 14px;
  }

  h1 {
    text-align: center;
  }

  th {
    background-color: #eee;
    border: 1px solid #ccc;
    padding: 8px;
    text-align: left;
  }

  td {
    border: 1px solid #ccc;
    padding: 8px;
  }

  .btn-container {
    display: flex;
    justify-content: center;
    margin-top: 20px; /* para separar los botones de la tabla */
  }

  .btn {
    padding: 6px 12px;
    border-radius: 4px;
    text-decoration: none;
    font-weight: bold;
    color: #fff;
    margin-right: 10px; /* para separar los botones */
  }

  .btn-success {
    background-color: #28a745;
    border-color: #28a745;
  }

  .btn-danger {
    background-color: #dc3545;
    border-color: #dc3545;
  }

  .btn:hover {
    opacity: 0.8;
  }
</style>
</head>

<body>
  <h1>Lista de matriculas</h1>
  <table>
    <tr>
      <th>ID_MATRICULA</th>
      <th>ID_CURSO</th>
      <th>ID_ALUMNO</th>
      <th>FECHA_INSCRIPCIÓN</th>
    </tr>
    <?php while ($filas = mysqli_fetch_array($res)): ?>
    <tr>
      <td><?php echo $filas['id_matricula']; ?></td>
      <td><?php echo $filas['id_curso']; ?></td>
      <td><?php echo $filas['id_alumno']; ?></td>
      <td><?php echo $filas['fecha_inscripcion']; ?></td>
    </tr>
    <?php endwhile; ?>
  </table>
  <div class="btn-container">
    <a class='btn btn-success' href='/insert_matricula.html'>Insertar/Crear</a>
    <a class='btn btn-success' href='/update_matricula.html'>Actualizar</a>
    <a class='btn btn-danger' href='/delete_matricula.html'>Eliminar</a>
  </div>
  <?php desconectar($xe); ?>
</body>
</html>