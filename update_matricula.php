<?php
require_once('conexion.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $id = $_POST['id'];
  $id_curso = $_POST['id_curso'];
  $id_alumno = $_POST['id_alumno'];
  $fecha_inscripcion = $_POST['fecha_inscripcion'];

  $xe = conectar();

  $sql = "UPDATE matricula SET id_curso = '$id_curso', id_alumno = '$id_alumno', fecha_inscripcion = '$fecha_inscripcion' WHERE id_matricula = '$id'";

  if (mysqli_query($xe, $sql)) {
    desconectar($xe);
    header('Location: lista_matriculas.php');
    exit();
  } else {
    echo "Error al actualizar la matrícula: " . mysqli_error($xe);
  }

  desconectar($xe);
}
?>

