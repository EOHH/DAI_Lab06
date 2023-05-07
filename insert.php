<?php
require_once('conexion.php');
$xe = conectar();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Obtener datos del formulario
  $nombre = $_POST['nombre'];
  $descripcion = $_POST['descripcion'];
  $fecha_inicio = $_POST['fecha_inicio'];
  $fecha_fin = $_POST['fecha_fin'];

  // Insertar nuevo curso en la base de datos
  $sql = "INSERT INTO curso (nombre, descripcion, fecha_inicio, fecha_fin) VALUES ('$nombre', '$descripcion', '$fecha_inicio', '$fecha_fin')";
  $res = mysqli_query($xe, $sql);

  // Redirigir a la lista de cursos
  header('Location: lista_cursos.php');
  exit();
}

// Obtener cursos de la base de datos
$sql = "SELECT * FROM curso";
if ($res) {
  echo "El curso se ha agregado correctamente.";
} else {
  echo "Error al agregar el curso: " . mysqli_error($xe);
}

$res = mysqli_query($xe, $sql);

desconectar($xe);
?>
