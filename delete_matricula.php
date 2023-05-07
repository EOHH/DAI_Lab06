<?php
require_once('conexion.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $id = $_POST['id'];

  $xe = conectar();

  $sql = "DELETE FROM matricula WHERE id_matricula = '$id'";

  if (mysqli_query($xe, $sql)) {
    echo "Matrícula eliminada correctamente.";
    header("Location: lista_matriculas.php");
  } else {
    echo "Error al eliminar la matrícula: " . mysqli_error($xe);
  }

  desconectar($xe);
}
?>
