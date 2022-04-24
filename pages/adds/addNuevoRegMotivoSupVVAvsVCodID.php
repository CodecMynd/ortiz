<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}

conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];


$id_proyecto =  $_POST['id_proyecto1'];
$motivo =  $_POST['motivo'];
$supervisado = 1;
$capMotivo = 1;

try {
    $conexion->autocommit(FALSE);
    // Registrar motivo de supervision
    $query = "INSERT INTO repvalvenaltavsvalcodid(id_proyecto, motivo, capMotivo, fecha_registro, id_capC) VALUES ('$id_proyecto', '$motivo', '$capMotivo', '$date', '$id')";

    $verificar_id = mysqli_query($conexion, "SELECT id_proyecto FROM repvalvenaltavsvalcodid WHERE id_proyecto = '$id_proyecto' ");
    if (mysqli_num_rows($verificar_id) > 0) {
        echo
        "<div class='alert alert-danger' role='role'>
    <p><strong>¡Error, ID '$id_proyecto' ya se encuentra  registrado, Por favor tome captura de pantalla y repórtelo inmediatamente a el área de Soporte!</strong></p>
    </div>";
        exit;
    } else {
        $resultado = mysqli_query($conexion, $query);
        // var_dump($query);
    }


    // Actualizar supervision valores
    $queryR = "UPDATE registrocodidenti SET supervisionValores = 1 WHERE id_proyecto = '$id_proyecto'";
    $resultadoR = mysqli_query($conexion, $queryR);
    // var_dump($queryR);

    // Actualizar supervision valores
    $queryRB = "UPDATE registrocodidentibitacora SET supervisionValores = 1 WHERE id_proyecto = '$id_proyecto'";
    $resultadoRB = mysqli_query($conexion, $queryRB);
    // var_dump($queryR);

    $conexion->commit();
    echo '<script>
         alert("Registro de Supervisión Valor Alta Vs. Valor Código Identificador ingresado correctamente");
         window.location.href = "../components/reporteDifValVenAltavsValCodId.php";
         </script>';
} catch (Exception $e) {
    $conexion->rollback();
    echo '<script>
       alert("¡Error interno! Por favor tome captura de pantalla y repórtelo inmediatamente a el área de Soporte, Error detectado: ' . $e->getMessage() . '")
       window.history.go(-1);
 </script>';
}
desconectar();
