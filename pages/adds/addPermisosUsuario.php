<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}
conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

//name
$id_usuario = $_POST['id_usuario'];

// Limpio de ID la  taba permisos
$queryD = ("DELETE FROM permisos WHERE id_usuario = $id_usuario");
$resultadoD = mysqli_query($conexion, $queryD);


// Extraigo datos del id de la tabla permiso
 $queryE = "SELECT permiso FROM permiso WHERE id_usuario = $id_usuario";
 $resultadoE = mysqli_query($conexion, $queryE);
 while ($rowE = $resultadoE->fetch_assoc()) {
     //extraigo permisos
    echo  $permisos = $rowE['permiso'];
    // de este array mediante explode lo separo
     $separador = ",";
     $separada = explode($separador, $permisos);
     foreach ($separada as $permiso) {
         $query = "INSERT INTO permisos(permiso, id_usuario) VALUES('$permiso', $id_usuario)";
         $verificar_permiso = mysqli_query($conexion, "SELECT * FROM usuarios WHERE nombres = '$nombres' AND aPaterno = '$aPaterno' AND aMaterno = '$aMaterno' ");
        $resulta = mysqli_query($conexion, $query);
     }
 }



desconectar();
?>

<script type="text/javascript">
    $(document).ready(function() {
        setTimeout(function() {
            $(".alert-success").fadeOut(1500);
        }, 6000);

        setTimeout(function() {
            $(".alert-danger").fadeIn(1500);
        }, 6000);
    });
</script>