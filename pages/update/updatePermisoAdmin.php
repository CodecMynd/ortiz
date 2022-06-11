<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}
conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];


$admin = (isset($_POST['admin'])) ? $_POST['admin'] : 0;
$id_usuario = $_POST['usuario'];

if ($admin == 1) {
    $query = "UPDATE permisos SET indMensajes = 1, indCambioAsesor = 1, indCambioPlacas = 1, indSinComSupPlacas = 1, indCambioSemAlta = 1, indCambioSemSolAlta = 1, indVehSinAsignarAsesor = 1, verTablaUsuario = 1, editarUsu = 1, asignarCon = 1, eliminarUsu = 1, asignarPer = 1, nuevoUsu = 1, verTablaMarca = 1, regMarca = 1, modMarca = 1, eliminaMar = 1, verTablaModelo = 1, regModelo = 1, modModelo = 1, eliminarMod = 1, verTablaAnio = 1, regAnios = 1, modAnios = 1, eliminarAnio = 1, regColor = 1, modColor = 1, eliminarCol = 1, verTablaColor = 1, verTablaSemana = 1, regSemana = 1, eliSemana = 1, regSemanaCobro = 1, eliSemanaCobro = 1, verTablaSemanaCobro = 1, verTablaAgente = 1, regAgente = 1, eliAgente = 1, regFormaPago = 1, eliFormaPago = 1, verTablaFormaPago = 1, regPermiso = 1, modPermiso = 1, eliPermiso = 1, verTablaVeh = 1, regVehiculo = 1, modVehiculo = 1, eliVehiculo = 1, verTablaCli = 1, regCliente = 1, modCliente = 1, eliCliente = 1, regProyecto = 1, listProyecto = 1, modProyecto = 1, eliProyecto = 1, pdfProyecto = 1, verGralProy = 1, regCapValVenInicial = 1, verGralCapValVenInicial = 1, perRegCapValVenInicial = 1, verTablaCapValVenInicial = 1, verTablaProyAct = 1, verTablaRegSolAltProy = 1, regSolAltProy = 1, pdfRegSolAltProy = 1, eliRegSolAltProy = 1, verObsRegSolAltProy = 1, regAlta = 1, eliAlta = 1, pdfAlta = 1, verLinkObsAlta = 1, verTablaAlta = 1, regCodIdentificador = 1, eliCodIdentificador = 1, pdfCodIdentificador = 1, verLinkObsIdentificador = 1, verTablaCodIdentificador = 1, vertablaDadosAltaAsignarCodId = 1, verGralDadosAltaAsignarCodId = 1, regSuperCodIdentificador = 1, eliSuperCodIdentificador = 1, verLinkObsSuperIdentificador = 1, verTablaSuperCodIdentificador = 1, verTablaTecArmador = 1, regTecArmador = 1, modTecArmador = 1, eliTecArmador = 1, verTablaTecMontador = 1, regTecMontador = 1, modTecMontador = 1, eliTecMontador = 1, regAsesor = 1, modAsesor = 1, eliAsesor = 1, verTablaAsesor = 1, verPermisoUsuario = 1, verTablaPermisoUsuario = 1, pdfRepVVAvsVCodID = 1, verGralRepVVAvsVCodID = 1, verTablaRepVVAvsVCodID = 1, regMotivoSupVVAvsVCodID = 1, modMotivoSupVVAvsVCodID = 1, pdfRepVVIvsVVA = 1, verGralRepVVIvsVVA = 1, verTablaRepVVIvsVVA = 1, regMotivoSupVVIvsVVA = 1, modMotivoSupVVIvsVVA = 1, regComPlacas = 1, eliComPlacas = 1, regComPlacasSuper = 1, eliComPlacasSuper = 1, verGralComPlacas = 1, verTablaComPlacas = 1, regComKm = 1, eliComKm = 1, regComKmSuper = 1, eliComKmSuper = 1, verGralComKm = 1, verTablaComKm = 1, regComImg = 1, eliComImg = 1, regComImgSuper = 1, eliComImgSuper = 1, verGralComImg = 1, verTablaComImg = 1, regComCliente = 1, eliComCliente = 1, regComClienteSuper = 1, eliComClienteSuper = 1, verGralComCliente = 1, verTablaComCliente = 1, regComDocuFirm = 1, eliComDocuFirm = 1, regComDocuFirmSuper = 1, eliComDocuFirmSuper = 1, verGralComDocuFirm = 1, verTablaComDocuFirm = 1, regComGarantia = 1, eliComGarantia = 1, regComGarantiaSuper = 1, eliComGarantiaSuper = 1, verGralComGarantia = 1, verTablaComGarantia = 1, regComAsesor = 1, eliComAsesor = 1, regComAsesorSuper = 1, eliComAsesorSuper = 1, verGralComAsesor = 1, verTablaComAsesor = 1, regComVerifDiariaVeh = 1, eliComVerifDiariaVehv = 1, verGralComVerifDiariaVeh = 1, regComVerifDiariaVehSuper = 1, eliComVerifDiariaVehSuper = 1, verTablaComVerifDiariaVeh = 1, regComActMinDia = 1, regComSuperActMinDia = 1, eliComActMinDia = 1, eliComSuperActMinDia = 1, verGralActMinDia = 1, verTablaActMinDia = 1, consSolAltaProy = 1, consAltaProy = 1, consCodId = 1, solCambioAsesor = 1, cambioAsesorAutorizar = 1, verGralcambioAsesorAutorizar = 1, verTablaSolCambioAsesor = 1, solCambioPlacas = 1, cambioPlacasAutorizar = 1, verTablaSolCambioPlacas = 1, verGralcambioPlacasAutorizar = 1,  regComDiaAltasAsignarCodId = 1, regComDiaAltasAsignarCodIdSuper = 1, eliComDiaAltasAsignarCodId = 1, verGralComDiaAltasAsignarCodId = 1, eliComDiaAltasAsignarCodIdSuper = 1, vertablaComDiaAltasAsignarCodId = 1, regSeguimientoDiarioCobranza = 1, regSeguimientoDiarioCobranzaSuper = 1, verGralSeguimientoDiarioCobranza = 1, eliSeguimientoDiarioCobranza = 1, eliSeguimientoDiarioCobranzaSuper = 1, vertablaSeguimientoDiarioCobranza = 1, regAsignacionTop = 1, verGralAsignacionTop = 1, eliAsignacionTop = 1, vertablaAsignacionTop = 1, regAseTec = 1, eliAseTec = 1, verGralAseTec = 1, vertablaAseTec = 1, regComSegDiaAseTecnico = 1, regSuperSegDiaAseTecnico = 1, eliComSegDiaAseTecnico = 1, eliComSegDiaAseTecnicoSuper = 1, verGralSegDiaProAseTecnico = 1, verTablaSegDiaProAseTecnico = 1, regLinkRecPzsDanadas = 1, eliLinkRecPzsDanadas = 1, verGralRecPzsDanadas = 1, regSolRecPzsDanadas = 1, eliSolRecPzsDanadas = 1, verTablaRecPzsDanadas = 1, regComVerifDiaBat = 1, regSupComVerifDiaBat = 1, verGralIncidencias = 1, verGralVerDiaBat = 1, eliIncidencia = 1, eliComVerifDiaBat = 1, eliSupComVerifDiaBat = 1, verTablaVerifDiaBat = 1, verTablaBitacora = 1, regSemSolAlta = 1, eliSemSolAlta = 1, verTablaSemSolAlta = 1, nuevoProvee = 1, modProvee = 1, eliProvee = 1, verTablaProvee = 1, verTablaBitacoraSolPiezas = 1, perRegCompraInicial = 1, modRegCompraInicial = 1, eliRegCompraInicial = 1, solCamSemanaSolAltas = 1, cambioSolSemSolAltaAutorizar = 1, verGralcambioSolSemSolAltaAutorizar = 1, verTablaSolCamSemanaSolAltas = 1, solCamSemanaAltas = 1, cambioSolSemAltaAutorizar = 1, verGralcambioSemAltaAutorizar = 1, verTablaSolCamSemanaAltas = 1, regProyExtra = 1, eliProyExtra = 1, regSuperProyExtra = 1, eliSuperProyExtra = 1, verGralProyExtra = 1, verTablaRegProyExtra = 1, regEntregaPz = 1, regSuperEntragaPz = 1, eliRegEntregaPz = 1, eliRegSuperEntragaPz = 1, verGralEntregaPz = 1, verTablaCronoSurPzs = 1, enviarPreAuto = 1, regresarCotizando = 1, enviarAutoriz = 1, regresarPreAutizacion = 1, verTablaPreautorizacion = 1, verTablaAutorizado = 1, enviarAutoProceSurtPzs = 1, regresarAuto = 1, enviarPzEntregadas = 1, verGralProceSurtPzs = 1, verTablaAutoProceSurtPzs = 1, regresarAutoProceSurtPzs = 1, enviarPzsFirmaRecibidas= 1, pdfPzsEntregadas = 1, verGralPzsEntregadas = 1, verTablaPzsEntregadas = 1, regresarPzsEntregadas = 1, enviarSuperSurtPzs = 1 , verGralPzsFirmadasRec = 1, verTablaPzsFirmadasRec = 1, regresarPzsFirmadasRec = 1, VerGralSuperSurtPz = 1, verTablaSuperSurtPzs = 1, regSolPzsAdicionales = 1, agregarSolPzsAdicionales = 1, eliAgregadoSolpzsAdicionales = 1, eliSolPzsAdicionales = 1, verGralSolPzsAdicionales = 1, enviarPreAutoPzsAdic = 1, verTablaSolPzsAdicionales = 1, regresarCotizandoPzsAdic = 1, enviarAutorizPzsAdic = 1, verTablaPreautorizacionPzsAdic = 1, regresarPreAutoPzsAdic = 1, enviarAutoProceSurtPzsAdic = 1, verTablaAutorizadoPzsAdic = 1, regresarAutorizPzsAdic = 1, enviarPzsEntregadasAdic = 1, verGralProceSurtPzsAdic = 1, verTablaAutoProceSurtPzsAdic = 1, regresarPzsEntregadasAdic = 1, enviarPzsFirmRecAdic = 1, pdfPzsEntregadasAdic = 1, verGralPzsEntregadasAdic = 1, verTablaPzsEntregadasAdic = 1, regresarPzsEntregadasAdic2 = 1, enviarSuperSurtPzsAdic = 1, verGralPzsFirmaRecAdic = 1, verTablaPzsFirmadasRecAdic = 1, regresarPzsFirmRecAdic = 1, verGralSuperSurtPzsAdic = 1, verTablaSuperSurtPzsAdic = 1 WHERE id_usuario = '$id_usuario' ";
    $resultado = mysqli_query($conexion, $query);
    // var_dump($querys);
} else {
    $query = "UPDATE permisos SET indMensajes = 0, indCambioAsesor = 0, indCambioPlacas = 0, indSinComSupPlacas = 0, indCambioSemAlta = 0, indCambioSemSolAlta = 0, indVehSinAsignarAsesor = 0, verTablaUsuario = 0, editarUsu = 0, asignarCon = 0, eliminarUsu = 0, asignarPer = 0, nuevoUsu = 0, verTablaMarca = 0, regMarca = 0, modMarca = 0, eliminaMar = 0, verTablaModelo = 0, regModelo = 0, modModelo = 0, eliminarMod = 0, verTablaAnio = 0, regAnios = 0, modAnios = 0, eliminarAnio = 0, regColor = 0, modColor = 0, eliminarCol = 0, verTablaColor = 0, verTablaSemana = 0, regSemana = 0, eliSemana = 0, regSemanaCobro = 0, eliSemanaCobro = 0, verTablaSemanaCobro = 0, verTablaAgente = 0, regAgente = 0, eliAgente = 0, regFormaPago = 0, eliFormaPago = 0, verTablaFormaPago = 0, regPermiso = 0, modPermiso = 0, eliPermiso = 0, verTablaVeh = 0, regVehiculo = 0, modVehiculo = 0, eliVehiculo = 0, verTablaCli = 0, regCliente = 0, modCliente = 0, eliCliente = 0, regProyecto = 0, listProyecto = 0, modProyecto = 0, eliProyecto = 0, pdfProyecto = 0, verGralProy = 0, regCapValVenInicial = 0, verGralCapValVenInicial = 0, perRegCapValVenInicial = 0, verTablaCapValVenInicial = 0, verTablaProyAct = 0, verTablaRegSolAltProy = 0, regSolAltProy = 0, pdfRegSolAltProy = 0, eliRegSolAltProy = 0, verObsRegSolAltProy = 0, regAlta = 0, eliAlta = 0, pdfAlta = 0, verLinkObsAlta = 0, verTablaAlta = 0, regCodIdentificador = 0, eliCodIdentificador = 0, pdfCodIdentificador = 0, verLinkObsIdentificador = 0, verTablaCodIdentificador = 0,  vertablaDadosAltaAsignarCodId = 0, verGralDadosAltaAsignarCodId = 0, regSuperCodIdentificador = 0, eliSuperCodIdentificador = 0, verLinkObsSuperIdentificador = 0, verTablaSuperCodIdentificador = 0, verTablaTecArmador = 0, regTecArmador = 0, modTecArmador = 0, eliTecArmador = 0, verTablaTecMontador = 0, regTecMontador = 0, modTecMontador = 0, eliTecMontador = 0, regAsesor = 0, modAsesor = 0, eliAsesor = 0, verTablaAsesor = 0, verPermisoUsuario = 0, verTablaPermisoUsuario = 0, pdfRepVVAvsVCodID = 0, verGralRepVVAvsVCodID = 0, verTablaRepVVAvsVCodID = 0, regMotivoSupVVAvsVCodID = 0, modMotivoSupVVAvsVCodID = 0, pdfRepVVIvsVVA = 0, verGralRepVVIvsVVA = 0, verTablaRepVVIvsVVA = 0, regMotivoSupVVIvsVVA = 0, modMotivoSupVVIvsVVA = 0, regComPlacas = 0, eliComPlacas = 0, regComPlacasSuper = 0, eliComPlacasSuper = 0, verGralComPlacas = 0, verTablaComPlacas = 0, regComKm = 0, eliComKm = 0, regComKmSuper = 0, eliComKmSuper = 0, verGralComKm = 0, verTablaComKm = 0, regComImg = 0, eliComImg = 0, regComImgSuper = 0, eliComImgSuper = 0, verGralComImg = 0, verTablaComImg = 0, regComCliente = 0, eliComCliente = 0, regComClienteSuper = 0, eliComClienteSuper = 0, verGralComCliente = 0, verTablaComCliente = 0, regComDocuFirm = 0, eliComDocuFirm = 0, regComDocuFirmSuper = 0, eliComDocuFirmSuper = 0, verGralComDocuFirm = 0, verTablaComDocuFirm = 0, regComGarantia = 0, eliComGarantia = 0, regComGarantiaSuper = 0, eliComGarantiaSuper = 0, verGralComGarantia = 0, verTablaComGarantia = 0, regComAsesor = 0, eliComAsesor = 0, regComAsesorSuper = 0, eliComAsesorSuper = 0, verGralComAsesor = 0, verTablaComAsesor = 0, regComVerifDiariaVeh = 0, eliComVerifDiariaVehv = 0, verGralComVerifDiariaVeh = 0, regComVerifDiariaVehSuper = 0, eliComVerifDiariaVehSuper = 0, verTablaComVerifDiariaVeh = 0, regComActMinDia = 0, regComSuperActMinDia = 0, eliComActMinDia = 0, eliComSuperActMinDia = 0, verGralActMinDia = 0, verTablaActMinDia = 0, consSolAltaProy = 0, consAltaProy = 0, consCodId = 0, solCambioAsesor = 0, cambioAsesorAutorizar = 0, verGralcambioAsesorAutorizar = 0, verTablaSolCambioAsesor = 0, solCambioPlacas = 0, cambioPlacasAutorizar = 0, verTablaSolCambioPlacas = 0, verGralcambioPlacasAutorizar = 0, regComDiaAltasAsignarCodId = 0, regComDiaAltasAsignarCodIdSuper = 0, eliComDiaAltasAsignarCodId = 0, verGralComDiaAltasAsignarCodId = 0, eliComDiaAltasAsignarCodIdSuper = 0, vertablaComDiaAltasAsignarCodId = 0, regSeguimientoDiarioCobranza = 0, regSeguimientoDiarioCobranzaSuper = 0, verGralSeguimientoDiarioCobranza = 0, eliSeguimientoDiarioCobranza = 0, eliSeguimientoDiarioCobranzaSuper = 0, vertablaSeguimientoDiarioCobranza = 0, regAsignacionTop = 0, verGralAsignacionTop = 0, eliAsignacionTop = 0, vertablaAsignacionTop = 0, regAseTec = 0, eliAseTec = 0, verGralAseTec = 0, vertablaAseTec = 0, regComSegDiaAseTecnico = 0, regSuperSegDiaAseTecnico = 0, eliComSegDiaAseTecnico = 0, eliComSegDiaAseTecnicoSuper = 0, verGralSegDiaProAseTecnico = 0, verTablaSegDiaProAseTecnico = 0,regLinkRecPzsDanadas = 0, eliLinkRecPzsDanadas = 0, verGralRecPzsDanadas = 0, regSolRecPzsDanadas = 0, eliSolRecPzsDanadas = 0, verTablaRecPzsDanadas = 0, regComVerifDiaBat = 0, regSupComVerifDiaBat = 0, verGralIncidencias = 0, verGralVerDiaBat = 0, eliIncidencia = 0, eliComVerifDiaBat = 0, eliSupComVerifDiaBat = 0, verTablaVerifDiaBat = 0, verTablaBitacora = 0, regSemSolAlta = 0, eliSemSolAlta = 0, verTablaSemSolAlta = 0, nuevoProvee = 0, modProvee = 0, eliProvee = 0, verTablaProvee = 0, verTablaBitacoraSolPiezas = 0, perRegCompraInicial = 0, modRegCompraInicial = 0, eliRegCompraInicial = 0, solCamSemanaSolAltas = 0, cambioSolSemSolAltaAutorizar = 0, verGralcambioSolSemSolAltaAutorizar = 0, verTablaSolCamSemanaSolAltas = 0, solCamSemanaAltas = 0, cambioSolSemAltaAutorizar = 0, verGralcambioSemAltaAutorizar = 0, verTablaSolCamSemanaAltas = 0, regProyExtra = 0, eliProyExtra = 0, regSuperProyExtra = 0, eliSuperProyExtra = 0, verGralProyExtra = 0, verTablaRegProyExtra = 0, regEntregaPz = 0, regSuperEntragaPz = 0, eliRegEntregaPz = 0, eliRegSuperEntragaPz = 0, verGralEntregaPz = 0, verTablaCronoSurPzs = 0, enviarPreAuto = 0, regresarCotizando = 0, enviarAutoriz = 0, regresarPreAutizacion = 0, verTablaPreautorizacion = 0, verTablaAutorizado = 0, enviarAutoProceSurtPzs = 0, regresarAuto = 0, enviarPzEntregadas = 0, verGralProceSurtPzs = 0, verTablaAutoProceSurtPzs = 0, regresarAutoProceSurtPzs = 0, enviarPzsFirmaRecibidas= 0, pdfPzsEntregadas = 0, verGralPzsEntregadas = 0, verTablaPzsEntregadas = 0, regresarPzsEntregadas = 0, enviarSuperSurtPzs = 0 , verGralPzsFirmadasRec = 0, verTablaPzsFirmadasRec = 0, regresarPzsFirmadasRec = 0, VerGralSuperSurtPz = 0, verTablaSuperSurtPzs = 0, regSolPzsAdicionales = 0, agregarSolPzsAdicionales = 0, eliAgregadoSolpzsAdicionales = 0, eliSolPzsAdicionales = 0, verGralSolPzsAdicionales = 0, enviarPreAutoPzsAdic = 0, verTablaSolPzsAdicionales = 0, regresarCotizandoPzsAdic = 0, enviarAutorizPzsAdic = 0, verTablaPreautorizacionPzsAdic = 0, regresarPreAutoPzsAdic = 0, enviarAutoProceSurtPzsAdic = 0, verTablaAutorizadoPzsAdic = 0, regresarAutorizPzsAdic = 0, enviarPzsEntregadasAdic = 0, verGralProceSurtPzsAdic = 0, verTablaAutoProceSurtPzsAdic = 0, regresarPzsEntregadasAdic = 0, enviarPzsFirmRecAdic = 0, pdfPzsEntregadasAdic = 0, verGralPzsEntregadasAdic = 0, verTablaPzsEntregadasAdic = 0, regresarPzsEntregadasAdic2 = 0, enviarSuperSurtPzsAdic = 0, verGralPzsFirmaRecAdic = 0, verTablaPzsFirmadasRecAdic = 0, regresarPzsFirmRecAdic = 0, verGralSuperSurtPzsAdic = 0, verTablaSuperSurtPzsAdic = 0 WHERE id_usuario = '$id_usuario' ";
    $resultado = mysqli_query($conexion, $query);
    // var_dump($querys);


}
$resultado = mysqli_query($conexion, $query);
if ($resultado) {
    echo "<div class='alert alert-success' role='alert'>
                <p><strong>¡Los permisos se actualizaron correctamente!</strong></p>
                </div>";
} else {
    echo 'Error detectado: ',  $e->getMessage(), "\n";
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>¡Error interno! Por favor tome captura de pantalla y repórtelo inmediatamente a el área de Soporte</strong></p>
    <a href='https://jsolautomotriz.workplace.com/groups/504053034641133'  target='_blank' class='btn btn-secondary btn-inline' data-toggle='tooltip' data-placement='bottom' title='Area de Soporte'>¡Reporta aqui! <i class='fa-solid fa-triangle-exclamation parpadea'></i></a>
    </div>";
}
desconectar();
?>
<script type="text/javascript">
    $(document).ready(function() {
        setTimeout(function() {
            $(".alert-success").fadeOut(1500);
        }, 3000)
        setTimeout(function() {
            $(".alert-danger").fadeIn(1500);
        }, 5000);
    });
</script>

