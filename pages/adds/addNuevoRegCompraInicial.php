<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}
conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$id_proyecto =  $_POST['id_proyecto3'];
$id_solPzsDanadas =  $_POST['id_solPzsDanadas3'];
$id_proveedor =  (empty($_POST['id_proveedor'])) ? 0 : $_POST['id_proveedor'];
$precio =  (empty($_POST['precio'])) ? 0 : $_POST['precio'];
$modalidadPago =  (empty($_POST['modalidadPago'])) ? 0 : $_POST['modalidadPago'];
$folio_solicitud = $_POST['folio_solicitud3'];


if ($id_proveedor == 0 ) {
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>Error, el campo Proveedor es requerido</strong></p>
    </div>";
    exit;
} else if ($precio == 0) {
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>Error, el campo Precio es requerido</strong></p>
    </div>";
    exit;
} else if ($modalidadPago == '') {
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>Error, el campo Modalidad de Pago es requerido</strong></p>
    </div>";
    exit;
} else {
    // try {
    //     $conexion->autocommit(FALSE);

    $query = "INSERT INTO regcomprainicial(id_proyecto, id_solPzsDanadas, id_proveedor, precio, modalidadPago, fecha_creacion, id_capC) VALUES 
    ('$id_proyecto', '$id_solPzsDanadas', '$id_proveedor', '$precio','$modalidadPago', '$date', '$id')"; 
    $resultado = mysqli_query($conexion, $query);
    var_dump($query);

    $query2 = "UPDATE solpzsdanadas SET regCompraInicial = '1' WHERE folio_solicitud = '$folio_solicitud' ";
    $resultado2 = mysqli_query($conexion, $query2);
    var_dump($query2);

//     $conexion->commit(TRUE);
//     echo "<div class='alert alert-success' role='alert'>
//            <p><strong>Registro de Compra Inicial ingresado correctamente!</strong></p>
//         </div>";
// } catch (Exception $e) {
//     $conexion->rollback();
//     echo 'Error detectado: ',  $e->getMessage(), "\n";
//     echo "<div class='alert alert-danger' role='role'>
//                 <p><strong>¡Error interno! Por favor tome captura de pantalla y repórtelo inmediatamente a el área de Soporte</strong></p>
//                 <a href='https://jsolautomotriz.workplace.com/groups/504053034641133'  target='_blank' class='btn btn-secondary btn-inline' data-toggle='tooltip' data-placement='bottom' title='Area de Soporte'>¡Reporta aqui! <i class='fa-solid fa-triangle-exclamation parpadea'></i></a>
//          </div>";
// }
}
// desconectar();

// ?>
// <script type="text/javascript">
// $(document).ready(function() {
//     setTimeout(function() {
//         $(".alert-success").fadeOut(1500);
//     }, 3000);

//     setTimeout(function() {
//         $(".alert-danger").fadeIn(1500);
//     }, 3000);
// });
// </script>