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
$query = "SELECT estadoProyectoEliminado FROM proyectos WHERE id_proyecto = $id_proyecto";
$respuesta = mysqli_query($conexion, $query);
$row = $respuesta->fetch_assoc();
$row['estadoProyectoEliminado'];



$nProyecto = $_POST['nProyecto'];
$folioPzAdicional = $_POST['folioPzAdicional'];
$motivo = $_POST['motivo'];
$descripcionpzadicional = $_POST['descripcionpzadicional'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];
$modalidadPago = (!empty($_POST['modalidadPago'])) ? $_POST['modalidadPago'] : '0';
$id_proveedor = (!empty($_POST['id_proveedor'])) ? $_POST['id_proveedor'] : '0';
$asesor = $_POST['asesor'];
$tecArmador = $_POST['tecArmador'];

$borrado = 0;
$pzadicionial = 1;
$etapa = 'Creación Solicitud de Pieza Adicional';

if ($row['estadoProyectoEliminado'] == 0) {
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>Error, El número de Proyecto acaba de ser eliminado, verifica en la Tabla 2.9 Bitacora de Proyectos </strong></p>
    </div>";
    exit;
} else if ($motivo == '') {
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>Error, el campo Motivo de Solicitud de Pieza Adicional es requerido</strong></p>
    </div>";
    exit;
} else if ($descripcionpzadicional == '') {
    echo "<div class='alert alert-danger' role='role'>
              <p><strong>Error, el campo Descripción de Pieza Adicional es requerido</strong></p>
              </div>";
    exit;
} else if ($cantidad == '') {
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>Error, el campo Cantidad Piezas Adicionales es requerido </strong></p>
    </div>";
    exit;
} else if ($precio == '') {
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>Error, el campo Precio es requerido</strong></p>
    </div>";
    exit;
} else if ($modalidadPago == 0) {
    echo "<div class='alert alert-danger' role='role'>
        <p><strong>Error, el campo Modalidad de Pago es requerido</strong></p>
        </div>";
    exit;
} else if ($id_proveedor == 0) {
    echo "<div class='alert alert-danger' role='role'>
            <p><strong>Error, el campo Proveedor es requerido </strong></p>
            </div>";
    exit;
} else {

    try {
        $conexion->autocommit(FALSE);

        $query1 = "INSERT INTO cotizandopzsadic(id_proyecto, nProyecto, pzadicionial, fecha_creacion, id_capC) VALUES ('$id_proyecto', '$nProyecto', '$pzadicionial', '$date', '$id')";
        $resultado1 = mysqli_query($conexion, $query1);
        // var_dump($query1);
        $id_cotizandoPzsAdic = mysqli_insert_id($conexion);

        $query2 = "INSERT INTO registrosolicitudpzsadicionales(id_cotizandoPzsAdic, folioPzAdicional, id_proyecto, cantidad, motivo, descripcionpzadicional, id_proveedor, precio, modalidadPago, asesor, tecArmador, borrado, fecha_creacion, id_capC) VALUES ('$id_cotizandoPzsAdic', '$folioPzAdicional', '$id_proyecto', '$cantidad', '$motivo', '$descripcionpzadicional', '$id_proveedor', '$precio', '$modalidadPago', '$asesor', '$tecArmador', '$borrado', '$date', '$id')";
        $resultado2 = mysqli_query($conexion, $query2);
        // var_dump($query1);
        $id_regSolpzadicional = mysqli_insert_id($conexion);


        $query3 = "INSERT INTO bitacorapiezasadicionales(id_cotizandoPzsAdic, id_regSolpzadicional, id_proyecto, nProyecto, folio_autorizPzsAdic, folioPzsSurtidaAdic, etapa, fecha_creacion, id_capC) VALUES ('$id_cotizandoPzsAdic', '$id_regSolpzadicional', '$id_proyecto', '$nProyecto', '--', '--', '$etapa', '$date', '$id')";
        $resultado3 = mysqli_query($conexion, $query3);
        // var_dump($query2);


        $conexion->commit();
        echo "<div class='alert alert-success' role='alert'>
               <p><strong>Solicitud de Pieza Adicional ingresada correctamente!</strong></p>
            </div>";
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