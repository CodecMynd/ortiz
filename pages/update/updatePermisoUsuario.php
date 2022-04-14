<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}

conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];
$id_usuario = $_POST['id_usuario'];

$indMensajes = (!empty($_POST['indMensajes'])) ? $_POST['indMensajes'] : 0;
$verTablaUsuario = (!empty($_POST['verTablaUsuario'])) ? $_POST['verTablaUsuario'] : 0;
$editarUsu = (!empty($_POST['editarUsu'])) ? $_POST['editarUsu'] : 0;
$asignarCon = (!empty($_POST['asignarCon'])) ? $_POST['asignarCon'] : 0;
$eliminarUsu = (!empty($_POST['eliminarUsu'])) ? $_POST['eliminarUsu'] : 0;
$asignarPer = (!empty($_POST['asignarPer'])) ? $_POST['asignarPer'] : 0;
$nuevoUsu = (!empty($_POST['nuevoUsu'])) ? $_POST['nuevoUsu'] : 0;
$verTablaMarca = (!empty($_POST['verTablaMarca'])) ? $_POST['verTablaMarca'] : 0;
$regMarca = (!empty($_POST['regMarca'])) ? $_POST['regMarca'] : 0;
$modMarca = (!empty($_POST['modMarca'])) ? $_POST['modMarca'] : 0;
$eliminaMar = (!empty($_POST['eliminaMar'])) ? $_POST['eliminaMar'] : 0;
$verTablaModelo = (!empty($_POST['verTablaModelo'])) ? $_POST['verTablaModelo'] : 0;
$regModelo = (!empty($_POST['regModelo'])) ? $_POST['regModelo'] : 0;
$modModelo = (!empty($_POST['modModelo'])) ? $_POST['modModelo'] : 0;
$eliminarMod = (!empty($_POST['eliminarMod'])) ? $_POST['eliminarMod'] : 0;
$verTablaAnio = (!empty($_POST['verTablaAnio'])) ? $_POST['verTablaAnio'] : 0;
$regAnios = (!empty($_POST['regAnios'])) ? $_POST['regAnios'] : 0;
$modAnios = (!empty($_POST['modAnios'])) ? $_POST['modAnios'] : 0;
$eliminarAnio = (!empty($_POST['eliminarAnio'])) ? $_POST['eliminarAnio'] : 0;
$regColor = (!empty($_POST['regColor'])) ? $_POST['regColor'] : 0;
$modColor = (!empty($_POST['modColor'])) ? $_POST['modColor'] : 0;
$eliminarCol = (!empty($_POST['eliminarCol'])) ? $_POST['eliminarCol'] : 0;
$verTablaColor = (!empty($_POST['verTablaColor'])) ? $_POST['verTablaColor'] : 0;
$verTablaSemana = (!empty($_POST['verTablaSemana'])) ? $_POST['verTablaSemana'] : 0;
$regSemana = (!empty($_POST['regSemana'])) ? $_POST['regSemana'] : 0;
$eliSemana = (!empty($_POST['eliSemana'])) ? $_POST['eliSemana'] : 0;
$verTablaSemanaCobro = (!empty($_POST['verTablaSemanaCobro'])) ? $_POST['verTablaSemanaCobro'] : 0;
$regSemanaCobro = (!empty($_POST['regSemanaCobro'])) ? $_POST['regSemanaCobro'] : 0;
$eliSemanaCobro = (!empty($_POST['eliSemanaCobro'])) ? $_POST['eliSemanaCobro'] : 0;
$verTablaAgente = (!empty($_POST['verTablaAgente'])) ? $_POST['verTablaAgente'] : 0;
$regAgente = (!empty($_POST['regAgente'])) ? $_POST['regAgente'] : 0;
$eliAgente = (!empty($_POST['eliAgente'])) ? $_POST['eliAgente'] : 0;
$regFormaPago = (!empty($_POST['regFormaPago'])) ? $_POST['regFormaPago'] : 0;
$eliFormaPago = (!empty($_POST['eliFormaPago'])) ? $_POST['eliFormaPago'] : 0;
$verTablaFormaPago = (!empty($_POST['verTablaFormaPago'])) ? $_POST['verTablaFormaPago'] : 0;
$regPermiso = (!empty($_POST['regPermiso'])) ? $_POST['regPermiso'] : 0;
$modPermiso = (!empty($_POST['modPermiso'])) ? $_POST['modPermiso'] : 0;
$eliPermiso = (!empty($_POST['eliPermiso'])) ? $_POST['eliPermiso'] : 0;
$verTablaVeh = (!empty($_POST['verTablaVeh'])) ? $_POST['verTablaVeh'] : 0;
$regVehiculo = (!empty($_POST['regVehiculo'])) ? $_POST['regVehiculo'] : 0;
$modVehiculo = (!empty($_POST['modVehiculo'])) ? $_POST['modVehiculo'] : 0;
$eliVehiculo = (!empty($_POST['eliVehiculo'])) ? $_POST['eliVehiculo'] : 0;
$verTablaCli = (!empty($_POST['verTablaCli'])) ? $_POST['verTablaCli'] : 0;
$regCliente = (!empty($_POST['regCliente'])) ? $_POST['regCliente'] : 0;
$modCliente = (!empty($_POST['modCliente'])) ? $_POST['modCliente'] : 0;
$eliCliente = (!empty($_POST['eliCliente'])) ? $_POST['eliCliente'] : 0;
$regProyecto = (!empty($_POST['regProyecto'])) ? $_POST['regProyecto'] : 0;
$listProyecto = (!empty($_POST['listProyecto'])) ? $_POST['listProyecto'] : 0;
$modProyecto = (!empty($_POST['modProyecto'])) ? $_POST['modProyecto'] : 0;
$eliProyecto = (!empty($_POST['eliProyecto'])) ? $_POST['eliProyecto'] : 0;
$pdfProyecto = (!empty($_POST['pdfProyecto'])) ? $_POST['pdfProyecto'] : 0;
$verGralProy = (!empty($_POST['verGralProy'])) ? $_POST['verGralProy'] : 0;
$regCapValVenInicial = (!empty($_POST['regCapValVenInicial'])) ? $_POST['regCapValVenInicial']  : 0;
$perRegCapValVenInicial = (!empty($_POST['perRegCapValVenInicial'])) ? $_POST['perRegCapValVenInicial']  : 0;
$verGralCapValVenInicial = (!empty($_POST['verGralCapValVenInicial'])) ? $_POST['verGralCapValVenInicial']  : 0;
$verTablaCapValVenInicial = (!empty($_POST['verTablaCapValVenInicial'])) ? $_POST['verTablaCapValVenInicial']  : 0;
$verTablaProyAct = (!empty($_POST['verTablaProyAct'])) ? $_POST['verTablaProyAct'] : 0;
$verTablaRegSolAltProy = (!empty($_POST['verTablaRegSolAltProy'])) ? $_POST['verTablaRegSolAltProy'] : 0;
$regSolAltProy = (!empty($_POST['regSolAltProy'])) ? $_POST['regSolAltProy'] : 0;
$pdfRegSolAltProy = (!empty($_POST['pdfRegSolAltProy'])) ? $_POST['pdfRegSolAltProy'] : 0;
$eliRegSolAltProy = (!empty($_POST['eliRegSolAltProy'])) ? $_POST['eliRegSolAltProy'] : 0;
$verObsRegSolAltProy = (!empty($_POST['verObsRegSolAltProy'])) ? $_POST['verObsRegSolAltProy'] : 0;
$regAlta = (!empty($_POST['regAlta'])) ? $_POST['regAlta'] : 0;
$eliAlta = (!empty($_POST['eliAlta'])) ? $_POST['eliAlta'] : 0;
$pdfAlta = (!empty($_POST['pdfAlta'])) ? $_POST['pdfAlta'] : 0;
$verLinkObsAlta = (!empty($_POST['verLinkObsAlta'])) ? $_POST['verLinkObsAlta'] : 0;
$verTablaAlta = (!empty($_POST['verTablaAlta'])) ? $_POST['verTablaAlta'] : 0;
$regCodIdentificador = (!empty($_POST['regCodIdentificador'])) ? $_POST['regCodIdentificador'] : 0;
$eliCodIdentificador = (!empty($_POST['eliCodIdentificador'])) ? $_POST['eliCodIdentificador'] : 0;
$pdfCodIdentificador = (!empty($_POST['pdfCodIdentificador'])) ? $_POST['pdfCodIdentificador'] : 0;
$verLinkObsIdentificador = (!empty($_POST['verLinkObsIdentificador'])) ? $_POST['verLinkObsIdentificador'] : 0;
$verTablaCodIdentificador = (!empty($_POST['verTablaCodIdentificador'])) ? $_POST['verTablaCodIdentificador'] : 0;
$vertablaDadosAltaAsignarCodId = (!empty($_POST['vertablaDadosAltaAsignarCodId'])) ? $_POST['vertablaDadosAltaAsignarCodId'] : 0;
$verGralDadosAltaAsignarCodId = (!empty($_POST['verGralDadosAltaAsignarCodId'])) ? $_POST['verGralDadosAltaAsignarCodId'] : 0;
$regSuperCodIdentificador = (!empty($_POST['regSuperCodIdentificador'])) ? $_POST['regSuperCodIdentificador'] : 0;
$eliSuperCodIdentificador = (!empty($_POST['eliSuperCodIdentificador'])) ? $_POST['eliSuperCodIdentificador'] : 0;
$verLinkObsSuperIdentificador = (!empty($_POST['verLinkObsSuperIdentificador'])) ? $_POST['verLinkObsSuperIdentificador'] : 0;
$verTablaSuperCodIdentificador = (!empty($_POST['verTablaSuperCodIdentificador'])) ? $_POST['verTablaSuperCodIdentificador'] : 0;
$verTablaTecArmador = (!empty($_POST['verTablaTecArmador'])) ? $_POST['verTablaTecArmador'] : 0;
$regTecArmador = (!empty($_POST['regTecArmador'])) ? $_POST['regTecArmador'] : 0;
$modTecArmador = (!empty($_POST['modTecArmador'])) ? $_POST['modTecArmador'] : 0;
$eliTecArmador = (!empty($_POST['eliTecArmador'])) ? $_POST['eliTecArmador'] : 0;
$verTablaTecMontador = (!empty($_POST['verTablaTecMontador'])) ? $_POST['verTablaTecMontador'] : 0;
$regTecMontador = (!empty($_POST['regTecMontador'])) ? $_POST['regTecMontador'] : 0;
$modTecMontador = (!empty($_POST['modTecMontador'])) ? $_POST['modTecMontador'] : 0;
$eliTecMontador = (!empty($_POST['eliTecMontador'])) ? $_POST['eliTecMontador'] : 0;
$regAsesor = (!empty($_POST['regAsesor'])) ? $_POST['regAsesor'] : 0;
$modAsesor = (!empty($_POST['modAsesor'])) ? $_POST['modAsesor'] : 0;
$eliAsesor = (!empty($_POST['eliAsesor'])) ? $_POST['eliAsesor'] : 0;
$verTablaAsesor = (!empty($_POST['verTablaAsesor'])) ? $_POST['verTablaAsesor'] : 0;
$verPermisoUsuario = (!empty($_POST['verPermisoUsuario'])) ? $_POST['verPermisoUsuario'] : 0;
$verTablaPermisoUsuario = (!empty($_POST['verTablaPermisoUsuario'])) ? $_POST['verTablaPermisoUsuario'] : 0;
$pdfRepVVAvsVCodID = (!empty($_POST['pdfRepVVAvsVCodID'])) ? $_POST['pdfRepVVAvsVCodID'] : 0;
$verGralRepVVAvsVCodID = (!empty($_POST['verGralRepVVAvsVCodID'])) ? $_POST['verGralRepVVAvsVCodID'] : 0;
$verTablaRepVVAvsVCodID = (!empty($_POST['verTablaRepVVAvsVCodID'])) ? $_POST['verTablaRepVVAvsVCodID'] : 0;
$regMotivoSupVVAvsVCodID = (!empty($_POST['regMotivoSupVVAvsVCodID'])) ? $_POST['regMotivoSupVVAvsVCodID'] : 0;
$modMotivoSupVVAvsVCodID = (!empty($_POST['modMotivoSupVVAvsVCodID'])) ? $_POST['modMotivoSupVVAvsVCodID'] : 0;
$pdfRepVVIvsVVA = (!empty($_POST['pdfRepVVIvsVVA'])) ? $_POST['pdfRepVVIvsVVA'] : 0;
$verGralRepVVIvsVVA = (!empty($_POST['verGralRepVVIvsVVA'])) ? $_POST['verGralRepVVIvsVVA'] : 0;
$verTablaRepVVIvsVVA = (!empty($_POST['verTablaRepVVIvsVVA'])) ? $_POST['verTablaRepVVIvsVVA'] : 0;
$regMotivoSupVVIvsVVA = (!empty($_POST['regMotivoSupVVIvsVVA'])) ? $_POST['regMotivoSupVVIvsVVA'] : 0;
$modMotivoSupVVIvsVVA = (!empty($_POST['modMotivoSupVVIvsVVA'])) ? $_POST['modMotivoSupVVIvsVVA'] : 0;
$regComPlacas = (!empty($_POST['regComPlacas'])) ? $_POST['regComPlacas'] : 0;
$eliComPlacas = (!empty($_POST['eliComPlacas'])) ? $_POST['eliComPlacas'] : 0;
$regComPlacasSuper = (!empty($_POST['regComPlacasSuper'])) ? $_POST['regComPlacasSuper'] : 0;
$eliComPlacasSuper = (!empty($_POST['eliComPlacasSuper'])) ? $_POST['eliComPlacasSuper'] : 0;
$verGralComPlacas = (!empty($_POST['verGralComPlacas'])) ? $_POST['verGralComPlacas'] : 0;
$verTablaComPlacas = (!empty($_POST['verTablaComPlacas'])) ? $_POST['verTablaComPlacas'] : 0;
$regComKm = (!empty($_POST['regComKm'])) ? $_POST['regComKm'] : 0;
$eliComKm = (!empty($_POST['eliComKm'])) ? $_POST['eliComKm'] : 0;
$regComKmSuper = (!empty($_POST['regComKmSuper'])) ? $_POST['regComKmSuper'] : 0;
$eliComKmSuper = (!empty($_POST['eliComKmSuper'])) ? $_POST['eliComKmSuper'] : 0;
$verGralComKm = (!empty($_POST['verGralComKm'])) ? $_POST['verGralComKm'] : 0;
$verTablaComKm = (!empty($_POST['verTablaComKm'])) ? $_POST['verTablaComKm'] : 0;
$regComImg = (!empty($_POST['regComImg'])) ? $_POST['regComImg'] : 0;
$eliComImg = (!empty($_POST['eliComImg'])) ? $_POST['eliComImg'] : 0;
$regComImgSuper = (!empty($_POST['regComImgSuper'])) ? $_POST['regComImgSuper'] : 0;
$eliComImgSuper = (!empty($_POST['eliComImgSuper'])) ? $_POST['eliComImgSuper'] : 0;
$verGralComImg = (!empty($_POST['verGralComImg'])) ? $_POST['verGralComImg'] : 0;
$verTablaComImg = (!empty($_POST['verTablaComImg'])) ? $_POST['verTablaComImg'] : 0;
$regComCliente = (!empty($_POST['regComCliente'])) ? $_POST['regComCliente'] : 0;
$eliComCliente = (!empty($_POST['eliComCliente'])) ? $_POST['eliComCliente'] : 0;
$regComClienteSuper = (!empty($_POST['regComClienteSuper'])) ? $_POST['regComClienteSuper'] : 0;
$eliComClienteSuper = (!empty($_POST['eliComClienteSuper'])) ? $_POST['eliComClienteSuper'] : 0;
$verGralComCliente = (!empty($_POST['verGralComCliente'])) ? $_POST['verGralComCliente'] : 0;
$verTablaComCliente = (!empty($_POST['verTablaComCliente'])) ? $_POST['verTablaComCliente'] : 0;
$regComDocuFirm = (!empty($_POST['regComDocuFirm'])) ? $_POST['regComDocuFirm'] : 0;
$eliComDocuFirm = (!empty($_POST['eliComDocuFirm'])) ? $_POST['eliComDocuFirm'] : 0;
$regComDocuFirmSuper = (!empty($_POST['regComDocuFirmSuper'])) ? $_POST['regComDocuFirmSuper'] : 0;
$eliComDocuFirmSuper = (!empty($_POST['eliComDocuFirmSuper'])) ? $_POST['eliComDocuFirmSuper'] : 0;
$verGralComDocuFirm = (!empty($_POST['verGralComDocuFirm'])) ? $_POST['verGralComDocuFirm'] : 0;
$verTablaComDocuFirm = (!empty($_POST['verTablaComDocuFirm'])) ? $_POST['verTablaComDocuFirm'] : 0;
$regComGarantia = (!empty($_POST['regComGarantia'])) ? $_POST['regComGarantia'] : 0;
$eliComGarantia = (!empty($_POST['eliComGarantia'])) ? $_POST['eliComGarantia'] : 0;
$regComGarantiaSuper = (!empty($_POST['regComGarantiaSuper'])) ? $_POST['regComGarantiaSuper'] : 0;
$eliComGarantiaSuper = (!empty($_POST['eliComGarantiaSuper'])) ? $_POST['eliComGarantiaSuper'] : 0;
$verGralComGarantia =  (!empty($_POST['verGralComGarantia'])) ? $_POST['verGralComGarantia'] : 0;
$verTablaComGarantia = (!empty($_POST['verTablaComGarantia'])) ? $_POST['verTablaComGarantia'] : 0;
$regComAsesor = (!empty($_POST['regComAsesor'])) ? $_POST['regComAsesor'] : 0;
$eliComAsesor = (!empty($_POST['eliComAsesor'])) ? $_POST['eliComAsesor'] : 0;
$regComAsesorSuper = (!empty($_POST['regComAsesorSuper'])) ? $_POST['regComAsesorSuper'] : 0;
$eliComAsesorSuper = (!empty($_POST['eliComAsesorSuper'])) ? $_POST['eliComAsesorSuper'] : 0;
$verGralComAsesor = (!empty($_POST['verGralComAsesor'])) ? $_POST['verGralComAsesor'] : 0;
$verTablaComAsesor = (!empty($_POST['verTablaComAsesor'])) ? $_POST['verTablaComAsesor'] : 0;
$regComVerifDiariaVeh = (!empty($_POST['regComVerifDiariaVeh'])) ? $_POST['regComVerifDiariaVeh'] : 0;
$eliComVerifDiariaVehv = (!empty($_POST['eliComVerifDiariaVehv'])) ? $_POST['eliComVerifDiariaVehv'] : 0;
$verGralComVerifDiariaVeh = (!empty($_POST['verGralComVerifDiariaVeh'])) ? $_POST['verGralComVerifDiariaVeh'] : 0;
$regComVerifDiariaVehSuper = (!empty($_POST['regComVerifDiariaVehSuper'])) ? $_POST['regComVerifDiariaVehSuper'] : 0;
$eliComVerifDiariaVehSuper = (!empty($_POST['eliComVerifDiariaVehSuper'])) ? $_POST['eliComVerifDiariaVehSuper'] : 0;
$verTablaComVerifDiariaVeh = (!empty($_POST['verTablaComVerifDiariaVeh'])) ? $_POST['verTablaComVerifDiariaVeh'] : 0;
$regComActMinDia = (!empty($_POST['regComActMinDia'])) ? $_POST['regComActMinDia'] : 0;
$regComSuperActMinDia = (!empty($_POST['regComSuperActMinDia'])) ? $_POST['regComSuperActMinDia'] : 0;
$eliComActMinDia = (!empty($_POST['eliComActMinDia'])) ? $_POST['eliComActMinDia'] : 0;
$eliComSuperActMinDia = (!empty($_POST['eliComSuperActMinDia'])) ? $_POST['eliComSuperActMinDia'] : 0;
$verGralActMinDia = (!empty($_POST['verGralActMinDia'])) ? $_POST['verGralActMinDia'] : 0;
$verTablaActMinDia = (!empty($_POST['verTablaActMinDia'])) ? $_POST['verTablaActMinDia'] : 0;
$consSolAltaProy = (!empty($_POST['consSolAltaProy'])) ? $_POST['consSolAltaProy'] : 0;
$consAltaProy = (!empty($_POST['consAltaProy'])) ? $_POST['consAltaProy'] : 0;
$consCodId = (!empty($_POST['consCodId'])) ? $_POST['consCodId'] : 0;



$query = "UPDATE permisos SET indMensajes = '$indMensajes', verTablaUsuario = '$verTablaUsuario', editarUsu = '$editarUsu', asignarCon = '$asignarCon', eliminarUsu = '$eliminarUsu', asignarPer = '$asignarPer', nuevoUsu = '$nuevoUsu', verTablaMarca = '$verTablaMarca', regMarca = '$regMarca', modMarca = '$modMarca', eliminaMar = '$eliminaMar', verTablaModelo = '$verTablaModelo', regModelo = '$regModelo', modModelo = '$modModelo', eliminarMod = '$eliminarMod', verTablaAnio = '$verTablaAnio', regAnios = '$regAnios', modAnios = '$modAnios', eliminarAnio = '$eliminarAnio', regColor = '$regColor', modColor = '$modColor', eliminarCol = '$eliminarCol', verTablaColor = '$verTablaColor', verTablaSemana = '$verTablaSemana', regSemana = '$regSemana', eliSemana = '$eliSemana',  verTablaSemanaCobro = '$verTablaSemanaCobro', regSemanaCobro = '$regSemanaCobro', eliSemanaCobro = '$eliSemanaCobro', verTablaAgente = '$verTablaAgente', regAgente = '$regAgente', eliAgente = '$eliAgente', regFormaPago = '$regFormaPago', eliFormaPago = '$eliFormaPago', verTablaFormaPago = '$verTablaFormaPago', regPermiso = '$regPermiso', modPermiso = '$modPermiso', eliPermiso = '$eliPermiso', verTablaVeh = '$verTablaVeh', regVehiculo = '$regVehiculo', modVehiculo = '$modVehiculo', eliVehiculo = '$eliVehiculo', verTablaCli = '$verTablaCli', regCliente = '$regCliente', modCliente = '$modCliente', eliCliente = '$eliCliente', regProyecto = '$regProyecto', listProyecto = '$listProyecto', modProyecto = '$modProyecto', eliProyecto = '$eliProyecto', pdfProyecto = '$pdfProyecto', verGralProy = '$verGralProy', regCapValVenInicial = '$regCapValVenInicial', perRegCapValVenInicial = '$perRegCapValVenInicial', verGralCapValVenInicial = '$verGralCapValVenInicial', verTablaCapValVenInicial = '$verTablaCapValVenInicial', verTablaProyAct = '$verTablaProyAct', verTablaRegSolAltProy = '$verTablaRegSolAltProy', regSolAltProy = '$regSolAltProy', pdfRegSolAltProy = '$pdfRegSolAltProy', eliRegSolAltProy = '$eliRegSolAltProy', verObsRegSolAltProy = '$verObsRegSolAltProy', regAlta = '$regAlta', eliAlta = '$eliAlta', pdfAlta = '$pdfAlta', verLinkObsAlta = '$verLinkObsAlta', verTablaAlta = '$verTablaAlta', regCodIdentificador = '$regCodIdentificador', eliCodIdentificador = '$eliCodIdentificador', pdfCodIdentificador = '$pdfCodIdentificador', verLinkObsIdentificador = '$verLinkObsIdentificador', verTablaCodIdentificador = '$verTablaCodIdentificador', vertablaDadosAltaAsignarCodId = '$vertablaDadosAltaAsignarCodId', verGralDadosAltaAsignarCodId = '$verGralDadosAltaAsignarCodId',regSuperCodIdentificador = '$regSuperCodIdentificador', eliSuperCodIdentificador = '$eliSuperCodIdentificador', verLinkObsSuperIdentificador = '$verLinkObsSuperIdentificador', verTablaSuperCodIdentificador = '$verTablaSuperCodIdentificador', verTablaTecArmador = '$verTablaTecArmador', regTecArmador = '$regTecArmador', modTecArmador = '$modTecArmador', eliTecArmador = '$eliTecArmador', verTablaTecMontador = '$verTablaTecMontador',regTecMontador = '$regTecMontador', modTecMontador = '$modTecMontador', eliTecMontador = '$eliTecMontador', regAsesor = '$regAsesor', modAsesor = '$modAsesor', eliAsesor = '$eliAsesor', verTablaAsesor = '$verTablaAsesor', verPermisoUsuario = '$verPermisoUsuario', verTablaPermisoUsuario = '$verTablaPermisoUsuario', pdfRepVVAvsVCodID = '$pdfRepVVAvsVCodID', verGralRepVVAvsVCodID = '$verGralRepVVAvsVCodID', verTablaRepVVAvsVCodID = '$verTablaRepVVAvsVCodID', regMotivoSupVVAvsVCodID = '$regMotivoSupVVAvsVCodID', modMotivoSupVVAvsVCodID = '$modMotivoSupVVAvsVCodID', pdfRepVVIvsVVA = '$pdfRepVVIvsVVA', verGralRepVVIvsVVA = '$verGralRepVVIvsVVA', verTablaRepVVIvsVVA = '$verTablaRepVVIvsVVA',regMotivoSupVVIvsVVA = '$regMotivoSupVVIvsVVA', modMotivoSupVVIvsVVA = '$modMotivoSupVVIvsVVA', regComPlacas = '$regComPlacas', eliComPlacas = '$eliComPlacas', regComPlacasSuper = '$regComPlacasSuper', eliComPlacasSuper = '$eliComPlacasSuper', verGralComPlacas = '$verGralComPlacas', verTablaComPlacas = '$verTablaComPlacas', regComKm = '$regComKm', eliComKm = '$eliComKm', regComKmSuper = '$regComKmSuper', eliComKmSuper = '$eliComKmSuper', verGralComKm = '$verGralComKm', verTablaComKm = '$verTablaComKm', regComImg = '$regComImg', eliComImg = '$eliComImg', regComImgSuper = '$regComImgSuper', eliComImgSuper = '$eliComImgSuper', verGralComImg = '$verGralComImg', verTablaComImg = '$verTablaComImg', regComCliente = '$regComCliente', eliComCliente = '$eliComCliente', regComClienteSuper = '$regComClienteSuper', eliComClienteSuper = '$eliComClienteSuper', verGralComCliente = '$verGralComCliente', verTablaComCliente = '$verTablaComCliente', regComDocuFirm = '$regComDocuFirm', eliComDocuFirm = '$eliComDocuFirm', regComDocuFirmSuper = '$regComDocuFirmSuper', eliComDocuFirmSuper = '$eliComDocuFirmSuper', verGralComDocuFirm = '$verGralComDocuFirm', verTablaComDocuFirm = '$verTablaComDocuFirm', regComGarantia = '$regComGarantia', eliComGarantia = '$eliComGarantia', regComGarantiaSuper = '$regComGarantiaSuper', eliComGarantiaSuper = '$eliComGarantiaSuper',verGralComGarantia = '$verGralComGarantia', verTablaComGarantia = '$verTablaComGarantia', regComAsesor = '$regComAsesor', eliComAsesor = '$eliComAsesor', regComAsesorSuper = '$regComAsesorSuper', eliComAsesorSuper = '$eliComAsesorSuper', verGralComAsesor = '$verGralComAsesor', verTablaComAsesor = '$verTablaComAsesor', regComVerifDiariaVeh = '$regComVerifDiariaVeh', eliComVerifDiariaVehv = '$eliComVerifDiariaVehv', verGralComVerifDiariaVeh = '$verGralComVerifDiariaVeh', regComVerifDiariaVehSuper = '$regComVerifDiariaVehSuper', eliComVerifDiariaVehSuper = '$eliComVerifDiariaVehSuper', verTablaComVerifDiariaVeh = '$verTablaComVerifDiariaVeh', regComActMinDia = '$regComActMinDia', regComSuperActMinDia = '$regComSuperActMinDia', eliComActMinDia = '$eliComActMinDia', eliComSuperActMinDia = '$eliComSuperActMinDia', verGralActMinDia = '$verGralActMinDia', verTablaActMinDia = '$verTablaActMinDia', consSolAltaProy = '$consSolAltaProy', consAltaProy = '$consAltaProy', consCodId = '$consCodId' WHERE id_usuario = $id_usuario";
// var_dump($query);

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
        }, 3000);
    });
</script>

