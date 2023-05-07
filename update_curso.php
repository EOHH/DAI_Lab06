<?php
require_once('conexion.php');
$xe = conectar();

if(isset($_POST['submit'])) {
    $id_curso = $_POST['id_curso'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $fecha_inicio = $_POST['fecha_inicio'];
    $fecha_fin = $_POST['fecha_fin'];

    $sql = "UPDATE curso SET nombre='$nombre', descripcion='$descripcion', fecha_inicio='$fecha_inicio', fecha_fin='$fecha_fin' WHERE id_curso='$id_curso'";
    $query = mysqli_query($xe, $sql);

    if($query){
        header("Location: lista_cursos.php");
        exit();
    } else {
        echo "Error al actualizar los datos.";
    }
} else {
    echo "No se ha enviado ningún formulario.";
}

desconectar($xe);
?>

