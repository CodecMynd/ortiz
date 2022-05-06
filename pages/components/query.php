<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../index.php');
}

conectar();
$id = $_SESSION['id_usuario'];
ini_set('date.timezone', 'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$dateFront = date('d-m-Y H:i:s');
$fecha_sistema = date('d-m-Y');
$fecha_mensaje = date('Y-m-d');

//query usuarios ------------------------------------------------------------------------------------------
$query = mysqli_query($conexion, "SELECT * FROM usuarios WHERE id_usuario = $id");
while ($row = mysqli_fetch_array($query)) {
    $nombres = $row['nombres'];
    $aPaterno = $row['aPaterno'];
    $aMaterno = $row['aMaterno'];
    $usuario = $row['usuario'];
    $email = $row['email'];
    $tel = $row['tel'];
    $passUser = $row['pass'];
    $admin = $row['admin'];
    $super = $row['super'];
    $tel = $row['tel'];

    $nomComp = $nombres . ' ' . $aPaterno . ' ' . $aMaterno;
}

// comboBox formAddVehiculos
$sql = "SELECT id_marca, marca FROM marcas  ORDER BY marca ASC";
$resultMarca = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));

$sql = "SELECT * FROM anios  ORDER BY anio DESC";
$resultAnio = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));

$sql = "SELECT id_color, color FROM colores  ORDER BY color ASC";
$resultColor = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));


// query Permisos ------------------------------------------------------------------------------------------
$query = mysqli_query($conexion, "SELECT * FROM permisos WHERE id_usuario = $id");
while ($row = mysqli_fetch_array($query)) {
    $indMensajes = $row['indMensajes'];
    $indCambioAsesor = $row['indCambioAsesor'];
    $indCambioPlacas = $row['indCambioPlacas'];
    $verTablaUsuario = $row['verTablaUsuario'];
    $indSinComSupPlacas = $row['indSinComSupPlacas'];
    $editarUsu = $row['editarUsu'];
    $asignarCon = $row['asignarCon'];
    $eliminarUsu = $row['eliminarUsu'];
    $asignarPer = $row['asignarPer'];
    $nuevoUsu = $row['nuevoUsu'];
    $verTablaMarca = $row['verTablaMarca'];
    $regMarca = $row['regMarca'];
    $modMarca = $row['modMarca'];
    $eliminaMar = $row['eliminaMar'];
    $verTablaModelo = $row['verTablaModelo'];
    $regModelo = $row['regModelo'];
    $modModelo = $row['modModelo'];
    $eliminarMod = $row['eliminarMod'];
    $verTablaAnio = $row['verTablaAnio'];
    $regAnios = $row['regAnios'];
    $modAnios = $row['modAnios'];
    $eliminarAnio = $row['eliminarAnio'];
    $regColor = $row['regColor'];
    $modColor = $row['modColor'];
    $eliminarCol = $row['eliminarCol'];
    $verTablaColor = $row['verTablaColor'];
    $verTablaSemana = $row['verTablaSemana'];
    $regSemana = $row['regSemana'];
    $eliSemana = $row['eliSemana'];
    $verTablaSemanaCobro = $row['verTablaSemanaCobro'];
    $regSemanaCobro = $row['regSemanaCobro'];
    $eliSemanaCobro = $row['eliSemanaCobro'];
    $verTablaAgente = $row['verTablaAgente'];
    $regAgente = $row['regAgente'];
    $eliAgente = $row['eliAgente'];
    $regFormaPago = $row['regFormaPago'];
    $eliFormaPago = $row['eliFormaPago'];
    $verTablaFormaPago = $row['verTablaFormaPago'];
    $regPermiso = $row['regPermiso'];
    $modPermiso = $row['modPermiso'];
    $eliPermiso = $row['eliPermiso'];
    $verTablaVeh = $row['verTablaVeh'];
    $regVehiculo = $row['regVehiculo'];
    $modVehiculo = $row['modVehiculo'];
    $eliVehiculo = $row['eliVehiculo'];
    $verTablaCli = $row['verTablaCli'];
    $regCliente = $row['regCliente'];
    $modCliente = $row['modCliente'];
    $eliCliente = $row['eliCliente'];
    $regProyecto = $row['regProyecto'];
    $listProyecto = $row['listProyecto'];
    $modProyecto = $row['modProyecto'];
    $eliProyecto = $row['eliProyecto'];
    $pdfProyecto = $row['pdfProyecto'];
    $verGralProy = $row['verGralProy'];
    $regCapValVenInicial = $row['regCapValVenInicial'];
    $perRegCapValVenInicial = $row['perRegCapValVenInicial'];
    $verGralCapValVenInicial = $row['verGralCapValVenInicial'];
    $verTablaCapValVenInicial = $row['verTablaCapValVenInicial'];
    $verTablaProyAct = $row['verTablaProyAct'];
    $verTablaRegSolAltProy = $row['verTablaRegSolAltProy'];
    $regSolAltProy = $row['regSolAltProy'];
    $pdfRegSolAltProy = $row['pdfRegSolAltProy'];
    $eliRegSolAltProy = $row['eliRegSolAltProy'];
    $verObsRegSolAltProy = $row['verObsRegSolAltProy'];
    $regAlta = $row['regAlta'];
    $eliAlta = $row['eliAlta'];
    $pdfAlta = $row['pdfAlta'];
    $verLinkObsAlta = $row['verLinkObsAlta'];
    $verTablaAlta = $row['verTablaAlta'];
    $regCodIdentificador = $row['regCodIdentificador'];
    $eliCodIdentificador = $row['eliCodIdentificador'];
    $pdfCodIdentificador = $row['pdfCodIdentificador'];
    $verLinkObsIdentificador = $row['verLinkObsIdentificador'];
    $verTablaCodIdentificador = $row['verTablaCodIdentificador'];
    $vertablaDadosAltaAsignarCodId = $row['vertablaDadosAltaAsignarCodId'];
    $verGralDadosAltaAsignarCodId = $row['verGralDadosAltaAsignarCodId'];
    $regSuperCodIdentificador = $row['regSuperCodIdentificador'];
    $eliSuperCodIdentificador = $row['eliSuperCodIdentificador'];
    $verLinkObsSuperIdentificador = $row['verLinkObsSuperIdentificador'];
    $verTablaSuperCodIdentificador = $row['verTablaSuperCodIdentificador'];
    $verTablaTecArmador = $row['verTablaTecArmador'];
    $regTecArmador = $row['regTecArmador'];
    $modTecArmador = $row['modTecArmador'];
    $eliTecArmador = $row['eliTecArmador'];
    $verTablaTecMontador = $row['verTablaTecMontador'];
    $regTecMontador = $row['regTecMontador'];
    $modTecMontador = $row['modTecMontador'];
    $eliTecMontador = $row['eliTecMontador'];
    $regAsesor = $row['regAsesor'];
    $modAsesor = $row['modAsesor'];
    $eliAsesor = $row['eliAsesor'];
    $verTablaAsesor = $row['verTablaAsesor'];
    $verPermisoUsuario = $row['verPermisoUsuario'];
    $verTablaPermisoUsuario = $row['verTablaPermisoUsuario'];
    $pdfRepVVAvsVCodID = $row['pdfRepVVAvsVCodID'];
    $verGralRepVVAvsVCodID = $row['verGralRepVVAvsVCodID'];
    $verTablaRepVVAvsVCodID = $row['verTablaRepVVAvsVCodID'];
    $regMotivoSupVVAvsVCodID = $row['regMotivoSupVVAvsVCodID'];
    $modMotivoSupVVAvsVCodID = $row['modMotivoSupVVAvsVCodID'];
    $pdfRepVVIvsVVA = $row['pdfRepVVIvsVVA'];
    $verGralRepVVIvsVVA = $row['verGralRepVVIvsVVA'];
    $verTablaRepVVIvsVVA = $row['verTablaRepVVIvsVVA'];
    $regMotivoSupVVIvsVVA = $row['regMotivoSupVVIvsVVA'];
    $modMotivoSupVVIvsVVA = $row['modMotivoSupVVIvsVVA'];
    $regComPlacas = $row['regComPlacas'];
    $eliComPlacas = $row['eliComPlacas'];
    $regComPlacasSuper = $row['regComPlacasSuper'];
    $eliComPlacasSuper = $row['eliComPlacasSuper'];
    $verGralComPlacas = $row['verGralComPlacas'];
    $verTablaComPlacas = $row['verTablaComPlacas'];
    $regComKm = $row['regComKm'];
    $regComKmSuper = $row['regComKmSuper'];
    $eliComKm = $row['eliComKm'];
    $eliComKmSuper = $row['eliComKmSuper'];
    $regComKmSuper = $row['regComKmSuper'];
    $eliComKmSuper = $row['eliComKmSuper'];
    $verGralComKm = $row['verGralComKm'];
    $verTablaComKm = $row['verTablaComKm'];
    $regComImg = $row['regComImg'];
    $eliComImg = $row['eliComImg'];
    $regComImgSuper = $row['regComImgSuper'];
    $eliComImgSuper = $row['eliComImgSuper'];
    $verGralComImg = $row['verGralComImg'];
    $verTablaComImg = $row['verTablaComImg'];
    $regComCliente = $row['regComCliente'];
    $eliComCliente = $row['eliComCliente'];
    $regComClienteSuper = $row['regComClienteSuper'];
    $eliComClienteSuper = $row['eliComClienteSuper'];
    $verGralComCliente = $row['verGralComCliente'];
    $verTablaComCliente = $row['verTablaComCliente'];
    $regComDocuFirm = $row['regComDocuFirm'];
    $eliComDocuFirm = $row['eliComDocuFirm'];
    $regComDocuFirmSuper = $row['regComDocuFirmSuper'];
    $eliComDocuFirmSuper = $row['eliComDocuFirmSuper'];
    $verGralComDocuFirm = $row['verGralComDocuFirm'];
    $verTablaComDocuFirm = $row['verTablaComDocuFirm'];
    $regComGarantia = $row['regComGarantia'];
    $eliComGarantia = $row['eliComGarantia'];
    $regComGarantiaSuper = $row['regComGarantiaSuper'];
    $eliComGarantiaSuper = $row['eliComGarantiaSuper'];
    $verGralComGarantia = $row['verGralComGarantia'];
    $verTablaComGarantia = $row['verTablaComGarantia'];
    $regComAsesor = $row['regComAsesor'];
    $eliComAsesor = $row['eliComAsesor'];
    $regComAsesorSuper = $row['regComAsesorSuper'];
    $eliComAsesorSuper = $row['eliComAsesorSuper'];
    $verGralComAsesor = $row['verGralComAsesor'];
    $verTablaComAsesor = $row['verTablaComAsesor'];
    $regComVerifDiariaVeh = $row['regComVerifDiariaVeh'];
    $eliComVerifDiariaVehv = $row['eliComVerifDiariaVehv'];
    $verGralComVerifDiariaVeh = $row['verGralComVerifDiariaVeh'];
    $regComVerifDiariaVehSuper = $row['regComVerifDiariaVehSuper'];
    $eliComVerifDiariaVehSuper = $row['eliComVerifDiariaVehSuper'];
    $verTablaComVerifDiariaVeh = $row['verTablaComVerifDiariaVeh'];
    $regComActMinDia = $row['regComActMinDia'];
    $regComSuperActMinDia = $row['regComSuperActMinDia'];
    $eliComActMinDia = $row['eliComActMinDia'];
    $eliComSuperActMinDia = $row['eliComSuperActMinDia'];
    $verGralActMinDia = $row['verGralActMinDia'];
    $verTablaActMinDia = $row['verTablaActMinDia'];
    $consSolAltaProy = $row['consSolAltaProy'];
    $consAltaProy = $row['consAltaProy'];
    $consCodId = $row['consCodId'];
    $solCambioAsesor = $row['solCambioAsesor'];
    $cambioAsesorAutorizar = $row['cambioAsesorAutorizar'];
    $verGralcambioAsesorAutorizar = $row['verGralcambioAsesorAutorizar'];
    $verTablaSolCambioAsesor = $row['verTablaSolCambioAsesor'];
    $solCambioPlacas = $row['solCambioPlacas'];
    $cambioPlacasAutorizar = $row['cambioPlacasAutorizar'];
    $verTablaSolCambioPlacas = $row['verTablaSolCambioPlacas'];
    $verGralcambioPlacasAutorizar = $row['verGralcambioPlacasAutorizar'];
    $regComDiaAltasAsignarCodId = $row['regComDiaAltasAsignarCodId'];
    $regComDiaAltasAsignarCodIdSuper = $row['regComDiaAltasAsignarCodIdSuper'];
    $eliComDiaAltasAsignarCodId = $row['eliComDiaAltasAsignarCodId'];
    $verGralComDiaAltasAsignarCodId = $row['verGralComDiaAltasAsignarCodId'];
    $eliComDiaAltasAsignarCodIdSuper = $row['eliComDiaAltasAsignarCodIdSuper'];
    $vertablaComDiaAltasAsignarCodId = $row['vertablaComDiaAltasAsignarCodId'];
    $regSeguimientoDiarioCobranza = $row['regSeguimientoDiarioCobranza'];
    $regSeguimientoDiarioCobranzaSuper = $row['regSeguimientoDiarioCobranzaSuper'];
    $verGralSeguimientoDiarioCobranza = $row['verGralSeguimientoDiarioCobranza'];
    $eliSeguimientoDiarioCobranza = $row['eliSeguimientoDiarioCobranza'];
    $eliSeguimientoDiarioCobranzaSuper = $row['eliSeguimientoDiarioCobranzaSuper'];
    $vertablaSeguimientoDiarioCobranza = $row['vertablaSeguimientoDiarioCobranza'];
    $regAsignacionTop = $row['regAsignacionTop'];
    $verGralAsignacionTop = $row['verGralAsignacionTop'];
    $eliAsignacionTop = $row['eliAsignacionTop'];
    $vertablaAsignacionTop = $row['vertablaAsignacionTop'];
    $regAseTec = $row['regAseTec'];
    $eliAseTec = $row['eliAseTec'];
    $verGralAseTec = $row['verGralAseTec'];
    $vertablaAseTec = $row['vertablaAseTec'];
    $regComSegDiaAseTecnico = $row['regComSegDiaAseTecnico'];
    $regSuperSegDiaAseTecnico = $row['regSuperSegDiaAseTecnico'];
    $eliComSegDiaAseTecnico = $row['eliComSegDiaAseTecnico'];
    $eliComSegDiaAseTecnicoSuper = $row['eliComSegDiaAseTecnicoSuper'];
    $verGralSegDiaProAseTecnico = $row['verGralSegDiaProAseTecnico'];
    $verTablaSegDiaProAseTecnico = $row['verTablaSegDiaProAseTecnico'];
    $regLinkRecPzsDanadas = $row['regLinkRecPzsDanadas'];
    $eliLinkRecPzsDanadas = $row['eliLinkRecPzsDanadas'];
    $verGralRecPzsDanadas = $row['verGralRecPzsDanadas'];
    $regSolRecPzsDanadas = $row['regSolRecPzsDanadas'];
    $eliSolRecPzsDanadas = $row['eliSolRecPzsDanadas'];
    $verTablaRecPzsDanadas = $row['verTablaRecPzsDanadas'];

    // Mostar Modal al recargar pagína en panelAdmin ------------------------------------------------------------------------------------------
    if ($passUser === 'SIN_PASSWORD') {
        echo '<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script>
    $(document).ready(function() {
        $(".sin_contraseña").modal("toggle")
    });
</script>';
    }
}
