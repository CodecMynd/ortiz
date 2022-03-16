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
$id_semanaCobro = (!empty($_POST['id_semanaCobro'])) ? $_POST['id_semanaCobro'] : 0;
$borrado = 0;
$status = 'Activo';

// Proyecto Base
$valCobProyBase = $_POST['valCobProyBase'];
$codIdProyBase = $_POST['codIdProyBase'];
$id_pagoProyBase = (!empty($_POST['id_pagoProyBase'])) ? $_POST['id_pagoProyBase'] : 0;

// Proyecto Extra
$valCobProyExtra = (!empty($_POST['valCobProyExtra'])) ? $_POST['valCobProyExtra'] : 0.00;
$codIdProyExtra = (!empty($_POST['codIdProyExtra'])) ? $_POST['codIdProyExtra'] : 'N/A';
$id_pagoProyExtra = (!empty($_POST['id_pagoProyExtra'])) ? $_POST['id_pagoProyExtra'] : 1;

// Comisión Bancaria
$valCobComBan = (!empty($_POST['valCobComBan'])) ? $_POST['valCobComBan'] : 0.00;
$codIdComBan = (!empty($_POST['codIdComBan'])) ? $_POST['codIdComBan'] : 'N/A';
$id_pagoComBan = (!empty($_POST['id_pagoComBan'])) ? $_POST['id_pagoComBan'] : 1;

// Pensión
$valCobPen = (!empty($_POST['valCobPen'])) ? $_POST['valCobPen'] : 0.00;
$codIdPension = (!empty($_POST['codIdPension'])) ? $_POST['codIdPension'] : 'N/A';
$id_pagoPension = (!empty($_POST['id_pagoPension'])) ? $_POST['id_pagoPension'] : 1;

// Otros
$valCobOtros = (!empty($_POST['valCobOtros'])) ? $_POST['valCobOtros'] : 0.00;
$codIdOtros = (!empty($_POST['codIdOtros'])) ? $_POST['codIdOtros'] : 'N/A';
$id_pagoOtros = (!empty($_POST['id_pagoOtros'])) ? $_POST['id_pagoOtros'] : 1;


if ($id_semanaCobro == 0) {
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>Error, el campo Semana Cobro es requerido</strong></p>
    </div>";
    exit;
} else if (empty($valCobProyBase)) {
    echo "<div class='alert alert-danger' role='role'>
         <p><strong>Error, ingresa una cantidad en campo Valor Cobro Proyecto Base</strong></p>
         </div>";
    exit;
} else if ($codIdProyBase == '') {
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>Error, el campo Código Identificador Valor Cobro Proyecto Base es requerido</strong></p>
    </div>";
    exit;
} else if ($id_pagoProyBase == 0) {
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>Error, el campo Forma de Pago Proyecto Base es requerido</strong></p>
    </div>";
    exit;
} else {


    // Ingresamos id a tabla proyectos modificar registros
    $queryP = "UPDATE proyectos SET altaProyecto = 0, proyCodIdentificador = 1 WHERE id_proyecto = $id_proyecto";
    $resultadoP = mysqli_query($conexion, $queryP);
    // var_dump($queryP);
    // echo '<br>';

    // Insertamos tabla registrocodidenti
    $queryR = "INSERT INTO registrocodidenti(id_proyecto, id_semanaCobro, borrado, status, fecha_creacion, id_capC) VALUES ( '$id_proyecto', '$id_semanaCobro', $borrado, '$status', '$date', '$id')";
    $resultadoR = mysqli_query($conexion, $queryR);
    //   var_dump($queryR);
    //   echo '<br>';

    // Insertamos tabla registrocodidentibitacora
    $queryB = "INSERT INTO registrocodidentibitacora(id_proyecto, id_semanaCobro, borrado, status, fecha_creacion, id_capC) VALUES ( '$id_proyecto', '$id_semanaCobro', $borrado, '$status', '$date', '$id')";
    $resultadoB = mysqli_query($conexion, $queryB);
    //   var_dump($queryB);
    //   echo '<br>';

    $queryD = "INSERT INTO desglocecodid(id_proyecto, valCobProyBase, codIdProyBase, id_pagoProyBase, valCobProyExtra, codIdProyExtra, id_pagoProyExtra, valCobComBan, codIdComBan, id_pagoComBan, valCobPen, codIdPension, id_pagoPension, valCobOtros, codIdOtros, id_pagoOtros, fecha_creacion, id_capC) VALUES ('$id_proyecto', '$valCobProyBase', '$codIdProyBase', '$id_pagoProyBase', '$valCobProyExtra', '$codIdProyExtra', '$id_pagoProyExtra', '$valCobComBan', '$codIdComBan', '$id_pagoComBan', '$valCobPen', '$codIdPension', '$id_pagoPension', '$valCobOtros', '$codIdOtros', '$id_pagoOtros', '$date', '$id')";
    $resultadoD = mysqli_query($conexion, $queryD);
    // var_dump($queryD);

    if ($resultadoD) {
        echo "<div class='alert alert-success' role='alert'>
                 <p><strong>Registro de Código Identificador ingresado correctamente!</strong></p>
             </div>
             <div class='col-md-12 col-sm-12 align-self-center'>
                 <a href='../components/regCodIdentificador.php?id={$id_proyecto}' class='btn btn-secondary btn-block' data-toggle='tooltip' data-placement='bottom' title='Descargar PDF'><i class='fa-solid fa-file-pdf'></i> Descargar PDF</a>
             </div>";
    } else {
        echo "<div class='alert alert-danger' role='role'>
             <p><strong>¡Error interno: vuelve a intentarlo!</strong></p>
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