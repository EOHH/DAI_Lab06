<?php
require_once('conexion.php');
$xe = conectar();
$sql = "SELECT * FROM alumno";
$res = mysqli_query($xe, $sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Lista de alumnos</title>
	<style>
		table {
  border-collapse: collapse;
  width: 50%;
  margin: 0 auto; /* para centrar la tabla */
  font-family: Arial, Helvetica, sans-serif;
  font-size: 14px;
  }
  
  h1{
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

  .btn {
    padding: 6px 12px;
    border-radius: 4px;
    text-decoration: none;
    font-weight: bold;
    color: #fff;
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
  .btn {
    padding: 6px 12px;
    border-radius: 4px;
    text-decoration: none;
    font-weight: bold;
    color: #fff;
    margin-right: 10px; /* separación entre los botones */
  }

  .btn-container {
    text-align: center;
    margin-top: 20px; /* separación entre la tabla y los botones */
  }
	</style>
</head>
<body>
	<h1>Lista de alumnos</h1>
	<table>
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Apellido</th>
		</tr>
		<?php while ($filas = mysqli_fetch_array($res)): ?>
			<tr>
				<td><?php echo $filas['id_alumno']; ?></td>
				<td><?php echo $filas['nombre']; ?></td>
				<td><?php echo $filas['apellido']; ?></td>
			</tr>
		<?php endwhile; ?>
	</table>
  <div class="btn-container">
    <a class='btn btn-success' href='/editaralumno.php?id=<?php echo $filas['id']; ?>'>Editar</a>
		<a class='btn btn-danger' href='/eliminaralumno.php?id=<?php echo $filas['id']; ?>'>Eliminar</a>
  </div>
	<?php desconectar($xe); ?>
</body>
</html>

