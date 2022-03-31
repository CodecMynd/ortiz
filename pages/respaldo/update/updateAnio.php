<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}

conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$id_anio = $_POST['id_anio'];
$anio =  $_POST['anio'];

$query = "UPDATE anios SET anio = '$anio' WHERE id_anio = $id_anio";

     $resultado = mysqli_query($conexion, $query);
     if ($resultado) {
         echo
         "<div class='alert alert-success' role='alert'>
                              <p>Año ingresado correctamente</p>
                              </div>";
     } else {
         echo
         "<div class='alert alert-danger' role='role'>
                          <p><strong>Error interno: vuelve a intentarlo</strong></p>
                          </div>";
     }
   

desconectar();
?>
<script type="text/javascript">
    $(document).ready(function() {
        setTimeout(function() {
            $(".alert-success").fadeOut(1500);
        }, 3000);

        setTimeout(function() {
            $(".alert-danger").fadeIn(1500);
        }, 4000);
    });
</script>