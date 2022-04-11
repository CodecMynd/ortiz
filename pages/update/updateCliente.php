<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}
conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$id_cliente = $_POST['id_cliente'];
$nombres =  $_POST['nombres'];
$aPaternoCliente =  $_POST['aPaternoCliente'];
$aMaternoCliente =  $_POST['aMaternoCliente'];
$calle =  $_POST['calle'];
$colonia =  $_POST['colonia'];
$ciudad =  $_POST['ciudad'];
$estado =  $_POST['estado'];
$tel1 =  $_POST['tel1'];
$tel2 =  $_POST['tel2'];
$cel =  $_POST['cel'];
$email =  $_POST['email'];
$observacion = $_POST['observacion'];

if ($nombres == '' || $aPaternoCliente == '' || $aMaternoCliente == '' || $calle == '' || $colonia == '' || $ciudad == '' || $estado == '' || $tel1 == '' || $tel2 == '' || $cel == '' ) {
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>Error, todos los campos son requerido</strong></p>
    </div>";
    exit;
} else if ($tel1 == 14) {
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>Formato de teléfono 1 es de 10 dígitos</p>
    </div>";
    exit;
} else if ($tel2 == 14) {
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>Formato de teléfono 2 es de 10 dígitos</p>
    </div>";
    exit;
} else if ($cel == 14) {
    echo "<div class='alert alert-danger' role='role'>
        <p><strong>Formato de Celular es de 10 dígitos</p>
        </div>";
    exit;
} else {

    $query = "UPDATE clientes SET nombres = '$nombres', aPaternoCliente = '$aPaternoCliente', aMaternoCliente = '$aMaternoCliente', calle = '$calle', colonia = '$colonia', ciudad = '$ciudad', estado = '$estado', tel1 = '$tel1', tel2 = '$tel2', cel = '$cel', observacion = '$observacion', fecha_mod = '$date', id_capM = $id, email='$email' WHERE id_cliente = $id_cliente";

    $resultado = mysqli_query($conexion, $query);

    if ($resultado) {
        echo "<div class='alert alert-success' role='alert'>
                <p><strong>Cliente Actualizado correctamente!</strong></p>
                </div>";
    } else {
        echo 'Error detectado: ',  $e->getMessage(), "\n";
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
        }, 3000);
    });
</script>