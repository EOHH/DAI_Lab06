<?php
require_once('conexion.php');
$xe = conectar();
$sql = "SELECT * FROM curso";
$res = mysqli_query($xe, $sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Lista de cursos</title>
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
  <h1>Lista de cursos</h1>
  <table>
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Descripción</th>
      <th>Fecha_inicio</th>
      <th>Fecha_fin</th>
    </tr>
    <?php while ($filas = mysqli_fetch_array($res)): ?>
    <tr>
      <td><?php echo $filas['id_curso']; ?></td>
      <td><?php echo $filas['nombre']; ?></td>
      <td><?php echo $filas['descripcion']; ?></td>
      <td><?php echo $filas['fecha_inicio']; ?></td>
      <td><?php echo $filas['fecha_fin']; ?></td>
    </tr>
    <?php endwhile; ?>
  </table>
  <div class="btn-container">
    <a class='btn btn-success' href='/insert.html'>Insertar/Crear</a>
    <a class='btn btn-success' href='/update_curso.html'>Actualizar</a>
    <a class='btn btn-danger' href='/delete_curso.html'>Eliminar</a>
  </div>
  <?php desconectar($xe); ?>
</body>
</html>