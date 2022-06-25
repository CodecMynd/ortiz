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
echo $valCobProyBase = $_POST['valCobProyBaseA1'];
echo $codIdProyBase = $_POST['codIdProyBaseA1'];
echo $id_pagoProyBase = (!empty($_POST['id_pagoProyBaseA1'])) ? $_POST['id_pagoProyBaseA1'] : 0;

echo $valCobProyBase2 = $_POST['valCobProyBaseA2'];
echo $codIdProyBase2= $_POST['codIdProyBaseA2'];
echo $id_pagoProyBase2 = (!empty($_POST['id_pagoProyBaseA2'])) ? $_POST['id_pagoProyBaseA2'] : 0;

echo $valCobProyBase3 = $_POST['valCobProyBaseA3'];
echo $codIdProyBase3 = $_POST['codIdProyBaseA3'];
echo $id_pagoProyBase3 = (!empty($_POST['id_pagoProyBaseA3'])) ? $_POST['id_pagoProyBaseA3'] : 0;

// -----------------------------------------------------------------------------------------------------

// Proyecto Extra
echo $valCobProyExtra = (!empty($_POST['valCobProyExtraB1'])) ? $_POST['valCobProyExtraB1'] : 0.00;
echo $codIdProyExtra = (!empty($_POST['codIdProyExtraB1'])) ? $_POST['codIdProyExtraB1'] : 'N/A';
echo $id_pagoProyExtra = (!empty($_POST['id_pagoProyExtraB1'])) ? $_POST['id_pagoProyExtraB1'] : 1;
 
echo $valCobProyExtra2 = (!empty($_POST['valCobProyExtraB2'])) ? $_POST['valCobProyExtraB2'] : 0.00;
echo $codIdProyExtra2 = (!empty($_POST['codIdProyExtraB2'])) ? $_POST['codIdProyExtraB2'] : 'N/A';
echo $id_pagoProyExtra2 = (!empty($_POST['id_pagoProyExtraB2'])) ? $_POST['id_pagoProyExtraB2'] : 1;
 
echo $valCobProyExtra3 = (!empty($_POST['valCobProyExtraB3'])) ? $_POST['valCobProyExtraB3'] : 0.00;
echo $codIdProyExtra3 = (!empty($_POST['codIdProyExtraB3'])) ? $_POST['codIdProyExtraB3'] : 'N/A';
echo $id_pagoProyExtra3 = (!empty($_POST['id_pagoProyExtraB3'])) ? $_POST['id_pagoProyExtraB3'] : 1;
// -----------------------------------------------------------------------------------------------------

// Comisión Bancaria
echo $valCobComBan = (!empty($_POST['valCobComBanC1'])) ? $_POST['valCobComBanC1'] : 0.00;
echo $codIdComBan = (!empty($_POST['codIdComBanC1'])) ? $_POST['codIdComBanC1'] : 'N/A';
echo $id_pagoComBan = (!empty($_POST['id_pagoComBanC1'])) ? $_POST['id_pagoComBanC1'] : 1;
 
echo $valCobComBan2 = (!empty($_POST['valCobComBanC2'])) ? $_POST['valCobComBanC2'] : 0.00;
echo $codIdComBan2 = (!empty($_POST['codIdComBanC2'])) ? $_POST['codIdComBanC2'] : 'N/A';
echo $id_pagoComBan2 = (!empty($_POST['id_pagoComBanC2'])) ? $_POST['id_pagoComBanC2'] : 1;
 
echo $valCobComBan3 = (!empty($_POST['valCobComBanC3'])) ? $_POST['valCobComBanC3'] : 0.00;
echo $codIdComBan3 = (!empty($_POST['codIdComBanC3'])) ? $_POST['codIdComBanC3'] : 'N/A';
echo $id_pagoComBan3 = (!empty($_POST['id_pagoComBanC3'])) ? $_POST['id_pagoComBanC3'] : 1;
// -----------------------------------------------------------------------------------------------------

// Pensión
echo $valCobPen = (!empty($_POST['valCobPenD1'])) ? $_POST['valCobPenD1'] : 0.00;
echo $codIdPension = (!empty($_POST['codIdPensionD1'])) ? $_POST['codIdPensionD1'] : 'N/A';
echo $id_pagoPension = (!empty($_POST['id_pagoPensionD1'])) ? $_POST['id_pagoPensionD1'] : 1;
 
echo $valCobPen2 = (!empty($_POST['valCobPenD2'])) ? $_POST['valCobPenD2'] : 0.00;
echo $codIdPension2 = (!empty($_POST['codIdPensionD2'])) ? $_POST['codIdPensionD2'] : 'N/A';
echo $id_pagoPension2 = (!empty($_POST['id_pagoPensionD2'])) ? $_POST['id_pagoPensionD2'] : 1;
 
echo $valCobPen3 = (!empty($_POST['valCobPenD3'])) ? $_POST['valCobPenD3'] : 0.00;
echo $codIdPension3 = (!empty($_POST['codIdPensionD3'])) ? $_POST['codIdPensionD3'] : 'N/A';
echo $id_pagoPension3 = (!empty($_POST['id_pagoPensionD3'])) ? $_POST['id_pagoPensionD3'] : 1;
// -----------------------------------------------------------------------------------------------------

// Otros
echo $valCobOtros = (!empty($_POST['valCobOtrosE1'])) ? $_POST['valCobOtrosE1'] : 0.00;
echo $codIdOtros = (!empty($_POST['codIdOtrosE1'])) ? $_POST['codIdOtrosE1'] : 'N/A';
echo $id_pagoOtros = (!empty($_POST['id_pagoOtrosE1'])) ? $_POST['id_pagoOtrosE1'] : 1;
 
echo $valCobOtros2 = (!empty($_POST['valCobOtrosE2'])) ? $_POST['valCobOtrosE2'] : 0.00;
echo $codIdOtros2 = (!empty($_POST['codIdOtrosE2'])) ? $_POST['codIdOtrosE2'] : 'N/A';
echo $id_pagoOtros2 = (!empty($_POST['id_pagoOtrosE2'])) ? $_POST['id_pagoOtrosE2'] : 1;
 
echo $valCobOtros3 = (!empty($_POST['valCobOtrosE3'])) ? $_POST['valCobOtrosE3'] : 0.00;
echo $codIdOtros3 = (!empty($_POST['codIdOtrosE3'])) ? $_POST['codIdOtrosE3'] : 'N/A';
echo $id_pagoOtros3 = (!empty($_POST['id_pagoOtrosE3'])) ? $_POST['id_pagoOtrosE3'] : 1;

// -----------------------------------------------------------------------------------------------------


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
            // $resultado1 = mysqli_query($conexion, $query1);
            var_dump($query1);
        }

        // Ingresamos id a tabla proyectos modificar registros
        $query2 = "UPDATE proyectos SET altaProyecto = 0, proyCodIdentificador = 1 WHERE id_proyecto = $id_proyecto";
        // $resultado2 = mysqli_query($conexion, $query2);
        var_dump($query2);
        echo '<br>';

        // Insertamos tabla registrocodidentibitacora
        $query3 = "INSERT INTO registrocodidentibitacora(folioCodID, id_proyecto, id_semanaCobro, borrado, status, fecha_creacion, id_capC) VALUES ('$folioCodID', '$id_proyecto', '$id_semanaCobro', $borrado, '$status', '$date', '$id')";
        // $resultado3 = mysqli_query($conexion, $query3);
        var_dump($query3);
        echo '<br>';

        $query4 = "INSERT INTO desglocecodid(id_proyecto, valCobProyBase, valCobProyBase2, valCobProyBase3, codIdProyBase, codIdProyBase2, codIdProyBase3, id_pagoProyBase, id_pagoProyBase2, id_pagoProyBase3, valCobProyExtra, valCobProyExtra2, valCobProyExtra3, codIdProyExtra, codIdProyExtra2, codIdProyExtra3, id_pagoProyExtra, id_pagoProyExtra2, id_pagoProyExtra3, valCobComBan, valCobComBan2, valCobComBan3, codIdComBan, codIdComBan2, codIdComBan3, id_pagoComBan, id_pagoComBan2, id_pagoComBan3, valCobPen, valCobPen2, valCobPen3, codIdPension, codIdPension2, codIdPension3, id_pagoPension, id_pagoPension2, id_pagoPension3, valCobOtros, valCobOtros2, valCobOtros3, codIdOtros, codIdOtros2, codIdOtros3, id_pagoOtros, id_pagoOtros2, id_pagoOtros3, borrado, fecha_creacion, id_capC) 
        VALUES ('$id_proyecto', '$valCobProyBase', '$valCobProyBase2', '$valCobProyBas3', '$codIdProyBase', '$codIdProyBase2', '$codIdProyBase3', '$id_pagoProyBase', '$id_pagoProyBase2', '$id_pagoProyBase3', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31', '32', '33', '34', '35', '36', '37', '38', '39', '40', '41', '42', '43', '44', '45', '46', '47', '48', '49', '50')";
        // $resultado4 = mysqli_query($conexion, $query4);
        var_dump($query4);

        $query5 = "INSERT INTO desglocecodidbitacora(id_proyecto, valCobProyBase, codIdProyBase, id_pagoProyBase, valCobProyExtra, codIdProyExtra, id_pagoProyExtra, valCobComBan, codIdComBan, id_pagoComBan, valCobPen, codIdPension, id_pagoPension, valCobOtros, codIdOtros, id_pagoOtros, fecha_creacion, id_capC) VALUES ('$id_proyecto', '$valCobProyBase', '$codIdProyBase', '$id_pagoProyBase', '$valCobProyExtra', '$codIdProyExtra', '$id_pagoProyExtra', '$valCobComBan', '$codIdComBan', '$id_pagoComBan', '$valCobPen', '$codIdPension', '$id_pagoPension', '$valCobOtros', '$codIdOtros', '$id_pagoOtros', '$date', '$id')";
        // $resultado5 = mysqli_query($conexion, $query5);
        var_dump($query5);


        // Bitacora
        $query6 = "INSERT INTO bitacora(id_proyecto, etapa, fecha_modificacion, id_capM) VALUES ('$id_proyecto', '$etapa', '$date', $id)";
        // $resultado6 = mysqli_query($conexion, $query6);
        var_dump($query6);


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