<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}
conectar();

ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');


$id = $_SESSION['id_usuario'];
$id_regSolicitud = $_POST['id_regSolicitud'];
$folioRegSolicitud = $_POST['folioRegSolicitud'];
$id_semSolAlta = (empty($_POST['id_semSolAlta'])) ? 0 : $_POST['id_semSolAlta'];
$motivo = $_POST['motivo'];
$semanaActual = $_POST['semanaActual'];
$id_proyecto = $_POST['id_proyecto'];
$estatusEspera = 1;
$estatusAprobado = 0;
$semanaAsignada = $id_semSolAlta;


// Query Registro de folio registrosolicitud
$queryP = 'SELECT MAX(id_cambioSemSolAlta ) + 1 FROM cambiosemsolalta';
$result = mysqli_query($conexion,  $queryP);
$rowp = mysqli_fetch_row($result);

// Prefijo folio
$text = "Cambio-Semana-SolicitudAlta-00";
$folio = $text . '' . $rowp[0];

if ($motivo == ' ') {
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>Error, el campo '*Motivo del Cambio' es requerido</strong></p>
    </div>";
    exit;
} else if ($id_semSolAlta == 0) {

        echo "<div class='alert alert-danger' role='role'>
        <p><strong>Error, Debes ingresar una opcion de la lista desplegable Semana de Solicitud de Alta, es requerido</strong></p>
        </div>";
        exit;
} else {
         try {
             $conexion->autocommit(FALSE);

            $query = "INSERT INTO cambiosemsolalta(id_proyecto, id_regSolicitud, folioRegSolicitud, folioCambioSemSolAlta, semanaActual, semanaAsignado, motivo, estatusEspera, estatusAprobado, fecha_creacion, id_capC) VALUES ('$id_proyecto', '$id_regSolicitud', '$folioRegSolicitud', '$folio', '$semanaActual', '$semanaAsignada', '$motivo', '$estatusEspera', '$estatusAprobado', '$date', $id)";
            $resultado = mysqli_query($conexion, $query);
            // var_dump($query);

             $conexion->commit(TRUE);
             echo "<div class='alert alert-success' role='alert'>
            <p><strong>Solicitud de Cambio de 'Semana Solicitud de Alta' ingresado correctamente!</strong></p></div>";
         } catch (Exception $e) {
             $conexion->rollback();
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