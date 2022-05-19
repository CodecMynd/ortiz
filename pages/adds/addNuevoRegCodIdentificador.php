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
$query = "SELECT nProyecto, proyCodIdentificador FROM proyectos WHERE id_proyecto = $id_proyecto";
$respuesta = mysqli_query($conexion, $query);
$row = $respuesta->fetch_assoc();
$row['proyCodIdentificador'];
$row['nProyecto'];

$id_semanaCobro = (!empty($_POST['id_semanaCobro'])) ? $_POST['id_semanaCobro'] : 0;
$borrado = 0;
$status = 'Activo';
$etapa = 'Proyecto avanzó a 2.6 Proyectos con Código Identificador';
$folioCodID = $_POST['folioCodID'];

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

if($row['proyCodIdentificador'] == 1){
    echo "<div class='alert alert-danger' role='role'>
         <p><strong>Error, el Número de Proyecto: {$row['nProyecto']} ya fue registrado a Proyectos con Código Identificador, verifica en la Tabla 2.9 Bitacora de Proyectos</strong></p>
         </div>";
    exit;
}else if ($id_semanaCobro == 0) {
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
    
    $conexion->autocommit(FALSE);
    try {

        // Insertamos tabla registrocodidenti
        $query1 = "INSERT INTO registrocodidenti(folioCodID, id_proyecto, id_semanaCobro, borrado, status, fecha_creacion, id_capC) VALUES ('$folioCodID', '$id_proyecto', '$id_semanaCobro', $borrado, '$status', '$date', '$id')";

        $verificar_id = mysqli_query($conexion, "SELECT id_proyecto FROM registrocodidenti WHERE id_proyecto = '$id_proyecto'");
        if (mysqli_num_rows($verificar_id) > 0) {
            echo
            "<div class='alert alert-danger' role='role'>
                    <p><strong>¡Error, ID '$id_proyecto' ya se encuentra  registrado, Por favor tome captura de pantalla y repórtelo inmediatamente a el área de Soporte!</strong></p>
                    </div>";
            exit;
        } else {
            $resultado1 = mysqli_query($conexion, $query1);
            //   var_dump($queryR);
        }

        // Ingresamos id a tabla proyectos modificar registros
        $query2 = "UPDATE proyectos SET altaProyecto = 0, proyCodIdentificador = 1 WHERE id_proyecto = $id_proyecto";
        $resultado2 = mysqli_query($conexion, $query2);
        // var_dump($queryP);
        // echo '<br>';

        // Insertamos tabla registrocodidentibitacora
        $query3 = "INSERT INTO registrocodidentibitacora(folioCodID, id_proyecto, id_semanaCobro, borrado, status, fecha_creacion, id_capC) VALUES ('$folioCodID', '$id_proyecto', '$id_semanaCobro', $borrado, '$status', '$date', '$id')";
        $resultado3 = mysqli_query($conexion, $query3);
        //   var_dump($queryB);
        //   echo '<br>';

        $query4 = "INSERT INTO desglocecodid(id_proyecto, valCobProyBase, codIdProyBase, id_pagoProyBase, valCobProyExtra, codIdProyExtra, id_pagoProyExtra, valCobComBan, codIdComBan, id_pagoComBan, valCobPen, codIdPension, id_pagoPension, valCobOtros, codIdOtros, id_pagoOtros, fecha_creacion, id_capC) VALUES ('$id_proyecto', '$valCobProyBase', '$codIdProyBase', '$id_pagoProyBase', '$valCobProyExtra', '$codIdProyExtra', '$id_pagoProyExtra', '$valCobComBan', '$codIdComBan', '$id_pagoComBan', '$valCobPen', '$codIdPension', '$id_pagoPension', '$valCobOtros', '$codIdOtros', '$id_pagoOtros', '$date', '$id')";
        $resultado4 = mysqli_query($conexion, $query4);
        // var_dump($queryD);

        $query5 = "INSERT INTO desglocecodidbitacora(id_proyecto, valCobProyBase, codIdProyBase, id_pagoProyBase, valCobProyExtra, codIdProyExtra, id_pagoProyExtra, valCobComBan, codIdComBan, id_pagoComBan, valCobPen, codIdPension, id_pagoPension, valCobOtros, codIdOtros, id_pagoOtros, fecha_creacion, id_capC) VALUES ('$id_proyecto', '$valCobProyBase', '$codIdProyBase', '$id_pagoProyBase', '$valCobProyExtra', '$codIdProyExtra', '$id_pagoProyExtra', '$valCobComBan', '$codIdComBan', '$id_pagoComBan', '$valCobPen', '$codIdPension', '$id_pagoPension', '$valCobOtros', '$codIdOtros', '$id_pagoOtros', '$date', '$id')";
        $resultado5 = mysqli_query($conexion, $query5);
        // var_dump($queryD);


        // Bitacora
        $query6 = "INSERT INTO bitacora(id_proyecto, etapa, fecha_modificacion, id_capM) VALUES ('$id_proyecto', '$etapa', '$date', $id)";
        $resultado6 = mysqli_query($conexion, $query6);


        $conexion->commit();
        echo "<div class='alert alert-success' role='alert'>
        <p><strong>Registro de Código Identificador ingresado correctamente!</strong></p>
        </div>
        <div class='col-md-12 col-sm-12 align-self-center'>
            <a href='../components/regCodIdentificador.php?id={$id_proyecto}' class='btn btn-secondary btn-block' data-toggle='tooltip' data-placement='bottom' title='Descargar PDF'><i class='fa-solid fa-file-pdf'></i> Descargar PDF</a>
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
        }, 5000);
    });
</script>