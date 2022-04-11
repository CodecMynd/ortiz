<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}
conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$id_proyecto = $_POST['id_proyecto'];
$valorVenta = $_POST['valorVenta'];
$capValVenta_permiso = 1;

if ($valorVenta == 0.00) {
    echo "<div class='alert alert-danger' role='role'>
          <p><strong>Error, Debes de agregar un valor al campo  Valor Venta Inicial </strong></p>
          </div>";
    exit;
} else {

    // se modifica en tabla proyectos
    $query = "UPDATE proyectos SET valorVenta = '$valorVenta' WHERE id_proyecto = $id_proyecto";
    $resultado = mysqli_query($conexion, $query);

    // se modifica en tabla capvalorventas
    $query = "UPDATE capvalorventas SET capValVenta = $id, capValVenta_permiso = $capValVenta_permiso, capValVenta_fecha = '$date' WHERE id_proyecto = $id_proyecto";
    $resultado = mysqli_query($conexion, $query);

    if ($resultado) {
        echo "<div class='alert alert-success' role='alert'>
                <p><strong>Valor Venta Inicial ingresado correctamente</strong></p>
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