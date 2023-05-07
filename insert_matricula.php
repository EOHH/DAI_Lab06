<?php
require_once('conexion.php');

// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_curso = $_POST['id_curso'];
    $id_alumno = $_POST['id_alumno'];
    $fecha_inscripcion = $_POST['fecha_inscripcion'];
    
    // Insertar datos en la tabla "matricula"
    $sql = "INSERT INTO matricula (id_curso, id_alumno, fecha_inscripcion) VALUES ('$id_curso', '$id_alumno', '$fecha_inscripcion')";
    $res = mysqli_query(conectar(), $sql);

    // Redirigir a la lista de cursos
    header('Location: lista_matriculas.php');
    exit();

    if ($res) {
        echo "Matrícula creada exitosamente";
    } else {
        echo "Error al crear la matrícula";
    }
}
?>

