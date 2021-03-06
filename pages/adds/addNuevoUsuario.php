<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}
conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$nombres =  $_POST['nombres'];
$aPaterno =  $_POST['aPaterno'];
$aMaterno =  $_POST['aMaterno'];
$usuario =  $_POST['usuario'];
$email =  $_POST['email'];
$tel =  $_POST['tel'];
$admin = (isset($_POST['admin'])) ? $_POST['admin'] : 0;
$estatus = 'offline';
$super = 0;


if ($nombres == '' || $aPaterno == '' || $aMaterno == '' || $usuario == '' || $tel == '' || $email == '') {
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>Error, todos los campos son requerido</strong></p>
    </div>";
    exit;
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>Formato de email invalido </p>
    </div>";
    exit;
} else if ($tel == 14) {
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>Formato de telefono es de 10 dígitos</p>
    </div>";
    exit;
} else {

    $query = "INSERT INTO usuarios(nombres, aPaterno, aMaterno, usuario, email, tel, admin, fecha_creacion, id_captC, estatus, super) 
    VALUES ('$nombres', '$aPaterno', '$aMaterno', '$usuario', '$email', '$tel', $admin, '$date', $id, '$estatus', '$super')";
    // var_dump($query);

    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE nombres = '$nombres' AND aPaterno = '$aPaterno' AND aMaterno = '$aMaterno' ");


    if (mysqli_num_rows($verificar_usuario) > 0) {
        echo
        "<div class='alert alert-danger' role='role'>
        <p><strong>¡Error, este usuario ya se encuentra  registrado, verifica por favor!</strong></p>
        </div>";
        exit;
    } else {

        $resultado = mysqli_query($conexion, $query);
        $id_id_usuario = mysqli_insert_id($conexion);

        // Asignamos permisos existentes
        if ($admin == 1) {
            $querys = "INSERT INTO permisos(indMensajes, indCambioPlacas, indCambioAsesor, indSinComSupPlacas, indCambioSemAlta, indCambioSemSolAlta, indVehSinAsignarAsesor, indIncidencias, verTablaUsuario, editarUsu, asignarCon, eliminarUsu, asignarPer, nuevoUsu, verTablaMarca, regMarca, modMarca, eliminaMar, verTablaModelo, regModelo, modModelo, eliminarMod, verTablaAnio, regAnios, modAnios, eliminarAnio, regColor, modColor, eliminarCol, verTablaColor, verTablaSemana, regSemana, eliSemana, regSemanaCobro, eliSemanaCobro, verTablaSemanaCobro, verTablaAgente, regAgente, eliAgente, regFormaPago, eliFormaPago, verTablaFormaPago, regPermiso, modPermiso, eliPermiso, verTablaVeh, regVehiculo, modVehiculo, eliVehiculo, verTablaCli, regCliente, modCliente, eliCliente, regProyecto, listProyecto, modProyecto, eliProyecto, pdfProyecto, verGralProy, regCapValVenInicial, verGralCapValVenInicial, perRegCapValVenInicial, verTablaCapValVenInicial, verTablaProyAct, verTablaRegSolAltProy, regSolAltProy, pdfRegSolAltProy, eliRegSolAltProy, verObsRegSolAltProy, regAlta, eliAlta, pdfAlta, verLinkObsAlta, verTablaAlta, regCodIdentificador, eliCodIdentificador, pdfCodIdentificador, verLinkObsIdentificador, verTablaCodIdentificador, vertablaDadosAltaAsignarCodId, verGralDadosAltaAsignarCodId, regSuperCodIdentificador, eliSuperCodIdentificador, verLinkObsSuperIdentificador, verTablaSuperCodIdentificador, verTablaTecArmador, regTecArmador, modTecArmador, eliTecArmador, verTablaTecMontador, regTecMontador, modTecMontador, eliTecMontador, regAsesor, modAsesor, eliAsesor, verTablaAsesor, verPermisoUsuario, verTablaPermisoUsuario, pdfRepVVAvsVCodID, verGralRepVVAvsVCodID, verTablaRepVVAvsVCodID, regMotivoSupVVAvsVCodID, modMotivoSupVVAvsVCodID, pdfRepVVIvsVVA, verGralRepVVIvsVVA, verTablaRepVVIvsVVA, regMotivoSupVVIvsVVA, modMotivoSupVVIvsVVA, regComPlacas, eliComPlacas, regComPlacasSuper, eliComPlacasSuper, verGralComPlacas, verTablaComPlacas, regComKm, eliComKm, regComKmSuper, eliComKmSuper, verGralComKm, verTablaComKm, regComImg, eliComImg, regComImgSuper, eliComImgSuper, verGralComImg, verTablaComImg, regComCliente, eliComCliente, regComClienteSuper, eliComClienteSuper, verGralComCliente, verTablaComCliente, regComDocuFirm, eliComDocuFirm, regComDocuFirmSuper, eliComDocuFirmSuper, verGralComDocuFirm, verTablaComDocuFirm, regComGarantia, eliComGarantia, regComGarantiaSuper, eliComGarantiaSuper, verGralComGarantia, verTablaComGarantia, regComAsesor, eliComAsesor, regComAsesorSuper, eliComAsesorSuper, verGralComAsesor, verTablaComAsesor, regComVerifDiariaVeh, regComVerifDiariaVehSuper, verGralComVerifDiariaVeh, eliComVerifDiariaVehv, eliComVerifDiariaVehSuper, verTablaComVerifDiariaVeh, regComActMinDia, regComSuperActMinDia, eliComActMinDia, eliComSuperActMinDia, verGralActMinDia, verTablaActMinDia, consSolAltaProy, consAltaProy, consCodId, solCambioAsesor, cambioAsesorAutorizar, verGralcambioAsesorAutorizar, verTablaSolCambioAsesor, solCambioPlacas, cambioPlacasAutorizar, verTablaSolCambioPlacas, verGralcambioPlacasAutorizar, regComDiaAltasAsignarCodId, regComDiaAltasAsignarCodIdSuper, eliComDiaAltasAsignarCodId, verGralComDiaAltasAsignarCodId, eliComDiaAltasAsignarCodIdSuper, vertablaComDiaAltasAsignarCodId, regSeguimientoDiarioCobranza, regSeguimientoDiarioCobranzaSuper, verGralSeguimientoDiarioCobranza, eliSeguimientoDiarioCobranza, eliSeguimientoDiarioCobranzaSuper, vertablaSeguimientoDiarioCobranza, regAsignacionTop, eliAsignacionTop, verGralAsignacionTop, vertablaAsignacionTop, regAseTec, eliAseTec, verGralAseTec, vertablaAseTec, regComSegDiaAseTecnico, regSuperSegDiaAseTecnico, eliComSegDiaAseTecnico, eliComSegDiaAseTecnicoSuper, verGralSegDiaProAseTecnico, verTablaSegDiaProAseTecnico, regLinkRecPzsDanadas, eliLinkRecPzsDanadas, verGralRecPzsDanadas, regSolRecPzsDanadas, eliSolRecPzsDanadas, verTablaRecPzsDanadas, regComVerifDiaBat, regSupComVerifDiaBat, verGralIncidencias, verGralVerDiaBat, eliIncidencia, eliComVerifDiaBat, eliSupComVerifDiaBat, verTablaVerifDiaBat, verTablaBitacora, regSemSolAlta, eliSemSolAlta, verTablaSemSolAlta, nuevoProvee, modProvee, eliProvee, verTablaProvee, verTablaBitacoraSolPiezas, perRegCompraInicial, modRegCompraInicial, eliRegCompraInicial, solCamSemanaSolAltas, cambioSolSemSolAltaAutorizar, verGralcambioSolSemSolAltaAutorizar, verTablaSolCamSemanaSolAltas, solCamSemanaAltas, cambioSolSemAltaAutorizar, verGralcambioSemAltaAutorizar, verTablaSolCamSemanaAltas, regProyExtra, eliProyExtra, regSuperProyExtra, eliSuperProyExtra, verGralProyExtra, verTablaRegProyExtra, regEntregaPz, regSuperEntragaPz, eliRegEntregaPz, eliRegSuperEntragaPz, verGralEntregaPz, verTablaCronoSurPzs, enviarPreAuto, regresarCotizando, enviarAutoriz, regresarPreAutizacion, verTablaPreautorizacion, verTablaAutorizado, enviarAutoProceSurtPzs, regresarAuto, enviarPzEntregadas, verGralProceSurtPzs, verTablaAutoProceSurtPzs, regresarAutoProceSurtPzs, enviarPzsFirmaRecibidas, pdfPzsEntregadas, verGralPzsEntregadas, verTablaPzsEntregadas, regresarPzsEntregadas, enviarSuperSurtPzs , verGralPzsFirmadasRec, verTablaPzsFirmadasRec, regresarPzsFirmadasRec, VerGralSuperSurtPzs, verTablaSuperSurtPzs, regSolPzsAdicionales, agregarSolPzsAdicionales, eliAgregadoSolpzsAdicionales, eliSolPzsAdicionales, verGralSolPzsAdicionales, enviarPreAutoPzsAdic, verTablaSolPzsAdicionales, regresarCotizandoPzsAdic, enviarAutorizPzsAdic, verTablaPreautorizacionPzsAdic, regresarPreAutoPzsAdic, enviarAutoProceSurtPzsAdic, verTablaAutorizadoPzsAdic, regresarAutorizPzsAdic, enviarPzsEntregadasAdic, verGralProceSurtPzsAdic, verTablaAutoProceSurtPzsAdic, validarSolPzsAdicionales, regresarPzsEntregadasAdic, enviarPzsFirmRecAdic, pdfPzsEntregadasAdic , verGralPzsEntregadasAdic, verTablaPzsEntregadasAdic, regresarPzsEntregadasAdic2, enviarSuperSurtPzsAdic, verGralPzsFirmaRecAdic, verTablaPzsFirmadasRecAdic, regresarPzsFirmRecAdic,  verGralSuperSurtPzsAdic,  verTablaSuperSurtPzsAdic, enviarProyUtil, solAutorizDescuento, autorizarSolDesc, verGralSolAutorizDesc, verTablaSolAutorizDescuento, verTablaSelectProyCodId, verTablasDesarmadosAutoAlta, regresarCotizando2, enviarAutoriz2, verGralRecPzsDanadas2, verTablaPreautorizacion2, regresarCotizandoPzsAdic2, enviarAutorizPzsAdic2, verGralSolPzsAdicionales2, verTablaPreautorizacionPzsAdic2, verGralProyExtraUtil, verGralProyExtraEli, verTablaRegProyExtraEli,verTablaRegProyExtraUtil, regEnvioTransmision, eliEnvioTransmision, regRecTransmision, eliRecTransmision, verGralEnvioRecTransmision, verTablaEnvioRecTransm, eliPreautoPzsAdic, eliAutorizadoPzsAdic, eliProceSurtPzsAdic, eliPzsEntregadasAdic, eliPzsFirmadasAdic, eliSuperSurtPzsAdic, id_usuario) VALUES (1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,$id_id_usuario)";
            $resultadoPermiso = mysqli_query($conexion, $querys);
        } else {

            $querys = "INSERT INTO permisos(indMensajes, indCambioPlacas, indCambioAsesor, indSinComSupPlacas, indCambioSemAlta, indCambioSemSolAlta, indVehSinAsignarAsesor, indIncidencias, verTablaUsuario, editarUsu, asignarCon, eliminarUsu, asignarPer, nuevoUsu, verTablaMarca, regMarca, modMarca, eliminaMar, verTablaModelo, regModelo, modModelo, eliminarMod, verTablaAnio, regAnios, modAnios, eliminarAnio, regColor, modColor, eliminarCol, verTablaColor, verTablaSemana, regSemana, eliSemana, regSemanaCobro, eliSemanaCobro, verTablaSemanaCobro, verTablaAgente, regAgente, eliAgente, regFormaPago, eliFormaPago, verTablaFormaPago, regPermiso, modPermiso, eliPermiso, verTablaVeh, regVehiculo, modVehiculo, eliVehiculo, verTablaCli, regCliente, modCliente, eliCliente, regProyecto, listProyecto, modProyecto, eliProyecto, pdfProyecto, verGralProy, regCapValVenInicial, verGralCapValVenInicial, perRegCapValVenInicial, verTablaCapValVenInicial, verTablaProyAct, verTablaRegSolAltProy, regSolAltProy, pdfRegSolAltProy, eliRegSolAltProy, verObsRegSolAltProy, regAlta, eliAlta, pdfAlta, verLinkObsAlta, verTablaAlta, regCodIdentificador, eliCodIdentificador, pdfCodIdentificador, verLinkObsIdentificador, verTablaCodIdentificador, vertablaDadosAltaAsignarCodId, verGralDadosAltaAsignarCodId, regSuperCodIdentificador, eliSuperCodIdentificador, verLinkObsSuperIdentificador, verTablaSuperCodIdentificador, verTablaTecArmador, regTecArmador, modTecArmador, eliTecArmador, verTablaTecMontador, regTecMontador, modTecMontador, eliTecMontador, regAsesor, modAsesor, eliAsesor, verTablaAsesor, verPermisoUsuario, verTablaPermisoUsuario, pdfRepVVAvsVCodID, verGralRepVVAvsVCodID, verTablaRepVVAvsVCodID, regMotivoSupVVAvsVCodID, modMotivoSupVVAvsVCodID, pdfRepVVIvsVVA, verGralRepVVIvsVVA, verTablaRepVVIvsVVA, regMotivoSupVVIvsVVA, modMotivoSupVVIvsVVA, regComPlacas, eliComPlacas, regComPlacasSuper, eliComPlacasSuper, verGralComPlacas, verTablaComPlacas, regComKm, eliComKm, regComKmSuper, eliComKmSuper, verGralComKm, verTablaComKm, regComImg, eliComImg, regComImgSuper, eliComImgSuper, verGralComImg, verTablaComImg, regComCliente, eliComCliente, regComClienteSuper, eliComClienteSuper, verGralComCliente, verTablaComCliente, regComDocuFirm, eliComDocuFirm, regComDocuFirmSuper, eliComDocuFirmSuper, verGralComDocuFirm, verTablaComDocuFirm, regComGarantia, eliComGarantia, regComGarantiaSuper, eliComGarantiaSuper, verGralComGarantia, verTablaComGarantia, regComAsesor, eliComAsesor, regComAsesorSuper, eliComAsesorSuper, verGralComAsesor, verTablaComAsesor, regComVerifDiariaVeh, regComVerifDiariaVehSuper, verGralComVerifDiariaVeh, eliComVerifDiariaVehv, eliComVerifDiariaVehSuper, verTablaComVerifDiariaVeh, regComActMinDia, regComSuperActMinDia, eliComActMinDia, eliComSuperActMinDia, verGralActMinDia, verTablaActMinDia, consSolAltaProy, consAltaProy, consCodId, solCambioAsesor, cambioAsesorAutorizar, verGralcambioAsesorAutorizar, verTablaSolCambioAsesor, solCambioPlacas, cambioPlacasAutorizar, verTablaSolCambioPlacas, verGralcambioPlacasAutorizar, regComDiaAltasAsignarCodId, regComDiaAltasAsignarCodIdSuper, eliComDiaAltasAsignarCodId, verGralComDiaAltasAsignarCodId, eliComDiaAltasAsignarCodIdSuper, vertablaComDiaAltasAsignarCodId, regSeguimientoDiarioCobranza, regSeguimientoDiarioCobranzaSuper, verGralSeguimientoDiarioCobranza, eliSeguimientoDiarioCobranza, eliSeguimientoDiarioCobranzaSuper, vertablaSeguimientoDiarioCobranza, regAsignacionTop, eliAsignacionTop, verGralAsignacionTop, vertablaAsignacionTop, regAseTec, eliAseTec, verGralAseTec, vertablaAseTec, regComSegDiaAseTecnico, regSuperSegDiaAseTecnico, eliComSegDiaAseTecnico, eliComSegDiaAseTecnicoSuper, verGralSegDiaProAseTecnico, verTablaSegDiaProAseTecnico, regLinkRecPzsDanadas, eliLinkRecPzsDanadas, verGralRecPzsDanadas, regSolRecPzsDanadas, eliSolRecPzsDanadas, verTablaRecPzsDanadas, regComVerifDiaBat, regSupComVerifDiaBat, verGralIncidencias, verGralVerDiaBat, eliIncidencia, eliComVerifDiaBat, eliSupComVerifDiaBat, verTablaVerifDiaBat, verTablaBitacora, regSemSolAlta, eliSemSolAlta, verTablaSemSolAlta, nuevoProvee, modProvee, eliProvee, verTablaProvee, verTablaBitacoraSolPiezas, perRegCompraInicial, modRegCompraInicial, eliRegCompraInicial, solCamSemanaSolAltas, cambioSolSemSolAltaAutorizar, verGralcambioSolSemSolAltaAutorizar, verTablaSolCamSemanaSolAltas, solCamSemanaAltas, cambioSolSemAltaAutorizar, verGralcambioSemAltaAutorizar, verTablaSolCamSemanaAltas, regProyExtra, eliProyExtra, regSuperProyExtra, eliSuperProyExtra, verGralProyExtra, verTablaRegProyExtra, regEntregaPz, regSuperEntragaPz, eliRegEntregaPz, eliRegSuperEntragaPz, verGralEntregaPz, verTablaCronoSurPzs, enviarPreAuto, regresarCotizando, enviarAutoriz, regresarPreAutizacion, verTablaPreautorizacion, verTablaAutorizado, enviarAutoProceSurtPzs, regresarAuto, enviarPzEntregadas, verGralProceSurtPzs, verTablaAutoProceSurtPzs, regresarAutoProceSurtPzs, enviarPzsFirmaRecibidas, pdfPzsEntregadas, verGralPzsEntregadas, verTablaPzsEntregadas, regresarPzsEntregadas, enviarSuperSurtPzs , verGralPzsFirmadasRec, verTablaPzsFirmadasRec, regresarPzsFirmadasRec, VerGralSuperSurtPzs, verTablaSuperSurtPzs, regSolPzsAdicionales, agregarSolPzsAdicionales, eliAgregadoSolpzsAdicionales, eliSolPzsAdicionales, verGralSolPzsAdicionales, enviarPreAutoPzsAdic, verTablaSolPzsAdicionales, regresarCotizandoPzsAdic, enviarAutorizPzsAdic, verTablaPreautorizacionPzsAdic, regresarPreAutoPzsAdic, enviarAutoProceSurtPzsAdic, verTablaAutorizadoPzsAdic, regresarAutorizPzsAdic, enviarPzsEntregadasAdic, verGralProceSurtPzsAdic, verTablaAutoProceSurtPzsAdic, validarSolPzsAdicionales, regresarPzsEntregadasAdic, enviarPzsFirmRecAdic, pdfPzsEntregadasAdic , verGralPzsEntregadasAdic, verTablaPzsEntregadasAdic, regresarPzsEntregadasAdic2, enviarSuperSurtPzsAdic, verGralPzsFirmaRecAdic, verTablaPzsFirmadasRecAdic, regresarPzsFirmRecAdic,  verGralSuperSurtPzsAdic,  verTablaSuperSurtPzsAdic, enviarProyUtil, solAutorizDescuento, autorizarSolDesc, verGralSolAutorizDesc, verTablaSolAutorizDescuento, verTablaSelectProyCodId, verTablasDesarmadosAutoAlta, regresarCotizando2, enviarAutoriz2, verGralRecPzsDanadas2, verTablaPreautorizacion2, regresarCotizandoPzsAdic2, enviarAutorizPzsAdic2, verGralSolPzsAdicionales2, verTablaPreautorizacionPzsAdic2, verGralProyExtraUtil, verGralProyExtraEli, verTablaRegProyExtraEli,verTablaRegProyExtraUtil, regEnvioTransmision, eliEnvioTransmision, regRecTransmision, eliRecTransmision, verGralEnvioRecTransmision, verTablaEnvioRecTransm, eliPreautoPzsAdic, eliAutorizadoPzsAdic, eliProceSurtPzsAdic, eliPzsEntregadasAdic, eliPzsFirmadasAdic, eliSuperSurtPzsAdic, id_usuario) VALUES (0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,$id_id_usuario)";
            // var_dump($querys);
            $resultadoPermiso = mysqli_query($conexion, $querys);
        }
    }

    // var_dump($querys);
    if ($resultado) {
        echo "<div class='alert alert-success' role='alert'> 
                <p><strong>¡Usuario ingresado correctamente!</strong></p>
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
        }, 5000);
    });
</script>

