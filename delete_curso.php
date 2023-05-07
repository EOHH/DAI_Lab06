<?php
require_once('conexion.php');
$conexion = conectar();

$id_curso = $_GET['id_curso'];

$sql = "SELECT * FROM curso WHERE id_curso = $id_curso";
$resultado = mysqli_query($conexion, $sql);

if (mysqli_num_rows($resultado) == 0) {
    $mensaje = "No se encontró ningún curso con el ID $id_curso.";
    $tipo_mensaje = "error";
} else {
    $sql = "DELETE FROM curso WHERE id_curso = $id_curso";

    if (mysqli_query($conexion, $sql)) {
        $mensaje = "El curso con ID $id_curso fue eliminado correctamente.";
        $tipo_mensaje = "success";
    } else {
        $mensaje = "Error al eliminar el curso: " . mysqli_error($conexion);
        $tipo_mensaje = "error";
    }
}

desconectar($conexion);

session_start();
$_SESSION['mensaje'] = $mensaje;
$_SESSION['tipo_mensaje'] = $tipo_mensaje;

header('Location: lista_cursos.php');
exit;
?>

