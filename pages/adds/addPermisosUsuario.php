<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}
conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$id_permiso = $_POST['id_usuario'];

$extraer = "SELECT city FROM permiso WHERE id_usuario = $id_permiso";
$respuesta = mysqli_query($conexion, $extraer);
$row = $respuesta->fetch_assoc();


$city = $row['city'];
$separador = ",";
$separada = explode($separador, $city);
foreach ($separada as $sep) {

$query = "INSERT INTO permisos(permiso, id_usuario) VALUES('$sep', $id_permiso)";

 $resulta = mysqli_query($conexion, $query);
 }
 if ($resulta) {
     echo "<div class = 'alert alert-success' role = 'alert'>
        <p>Los permisos fueron asignados correctamente</p>
                 </div>";
 } else {
     echo "<div class = 'alert alert-danger' role = 'alert'>
         <p>¡<strong>Algo sucedio, vuelve a intentarlo!</p>
             </div>";
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