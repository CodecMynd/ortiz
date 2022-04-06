<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}

conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$id_comverifdiariaveh = $_POST['id_comverifdiariaveh'];
$linkComVerifDiariaVeh = $_POST['linkComVerifDiariaVeh'];
$fechaV = $_POST['fechaV'];



if ($linkComVerifDiariaVeh == '') {
    echo "<div class='alert alert-danger' role='role'>
     <p><strong>Error, Link de Video en Vivo es un campo requerido</strong></p>
     </div>";
    exit;
} else {
    $query = "UPDATE comverifdiariaveh SET linkComVerifDiariaVeh = '$linkComVerifDiariaVeh', fecha_hoy = '$fechaV', fecha_mod = '$date', id_capM = '$id' WHERE id_comverifdiariaveh = $id_comverifdiariaveh ";
    //var_dump($query);
 $resultado = mysqli_query($conexion, $query);

     if ($resultado) {
         echo "<div class='alert alert-success' role='alert'>
                  <p>Registro verificación modificado correctamente</p>
                  </div>";
     } else {
        echo "<div class='alert alert-danger' role='role'>
        <p><strong>¡Error interno! Por favor tome captura de pantalla y repórtelo inmediatamente a el área de Soporte</strong></p>
        <a href='https://jsolautomotriz.workplace.com/groups/504053034641133'  target='_blank' class='btn btn-secondary btn-inline' data-toggle='tooltip' data-placement='bottom' title='Area de Soporte'>¡Reporta aqui! <i class='fa-solid fa-triangle-exclamation parpadea'></i></a>
        </div>";
     }
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
        }, 5000);
    });
</script>