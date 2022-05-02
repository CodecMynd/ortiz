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
            $querys = "INSERT INTO permisos(indMensajes, indCambioAsesor, indCambioPlacas, indSinComSupPlacas, verTablaUsuario, editarUsu, asignarCon, eliminarUsu, asignarPer, nuevoUsu, verTablaMarca, regMarca, modMarca, eliminaMar, verTablaModelo, regModelo, modModelo, eliminarMod, verTablaAnio, regAnios, modAnios, eliminarAnio, regColor, modColor, eliminarCol, verTablaColor, verTablaSemana, regSemana, eliSemana, regSemanaCobro, eliSemanaCobro, verTablaSemanaCobro, verTablaAgente, regAgente, eliAgente, regFormaPago, eliFormaPago, verTablaFormaPago, regPermiso, modPermiso, eliPermiso, verTablaVeh, regVehiculo, modVehiculo, eliVehiculo, verTablaCli, regCliente, modCliente, eliCliente, regProyecto, listProyecto, modProyecto, eliProyecto, pdfProyecto, verGralProy, regCapValVenInicial, verGralCapValVenInicial, perRegCapValVenInicial, verTablaCapValVenInicial, verTablaProyAct, verTablaRegSolAltProy, regSolAltProy, pdfRegSolAltProy, eliRegSolAltProy, verObsRegSolAltProy, regAlta, eliAlta, pdfAlta, verLinkObsAlta, verTablaAlta, regCodIdentificador, eliCodIdentificador, pdfCodIdentificador, verLinkObsIdentificador, verTablaCodIdentificador,  vertablaDadosAltaAsignarCodId, verGralDadosAltaAsignarCodId, regSuperCodIdentificador, eliSuperCodIdentificador, verLinkObsSuperIdentificador, verTablaSuperCodIdentificador, verTablaTecArmador, regTecArmador, modTecArmador, eliTecArmador, verTablaTecMontador, regTecMontador, modTecMontador, eliTecMontador, regAsesor, modAsesor, eliAsesor, verTablaAsesor, verPermisoUsuario, verTablaPermisoUsuario, pdfRepVVAvsVCodID, verGralRepVVAvsVCodID, verTablaRepVVAvsVCodID, regMotivoSupVVAvsVCodID, modMotivoSupVVAvsVCodID, pdfRepVVIvsVVA, verGralRepVVIvsVVA, verTablaRepVVIvsVVA, regMotivoSupVVIvsVVA, modMotivoSupVVIvsVVA, regComPlacas, eliComPlacas, regComPlacasSuper, eliComPlacasSuper, verGralComPlacas, verTablaComPlacas, regComKm, eliComKm, regComKmSuper, eliComKmSuper, verGralComKm, verTablaComKm, regComImg, eliComImg, regComImgSuper, eliComImgSuper, verGralComImg, verTablaComImg, regComCliente, eliComCliente, regComClienteSuper, eliComClienteSuper, verGralComCliente, verTablaComCliente, regComDocuFirm, eliComDocuFirm, regComDocuFirmSuper, eliComDocuFirmSuper, verGralComDocuFirm, verTablaComDocuFirm, regComGarantia, eliComGarantia, regComGarantiaSuper, eliComGarantiaSuper, verGralComGarantia, verTablaComGarantia, regComAsesor, eliComAsesor, regComAsesorSuper, eliComAsesorSuper, verGralComAsesor, verTablaComAsesor, regComVerifDiariaVeh, eliComVerifDiariaVehv, verGralComVerifDiariaVeh, regComVerifDiariaVehSuper, eliComVerifDiariaVehSuper, verTablaComVerifDiariaVeh, regComActMinDia, regComSuperActMinDia, eliComActMinDia, eliComSuperActMinDia, verGralActMinDia, verTablaActMinDia, consSolAltaProy, consAltaProy, consCodId, solCambioAsesor, cambioAsesorAutorizar, verGralcambioAsesorAutorizar, verTablaSolCambioAsesor, solCambioPlacas, cambioPlacasAutorizar, verTablaSolCambioPlacas, verGralcambioPlacasAutorizar, regComDiaAltasAsignarCodId, regComDiaAltasAsignarCodIdSuper, eliComDiaAltasAsignarCodId, verGralComDiaAltasAsignarCodId, eliComDiaAltasAsignarCodIdSuper, vertablaComDiaAltasAsignarCodId, regSeguimientoDiarioCobranza, regSeguimientoDiarioCobranzaSuper, verGralSeguimientoDiarioCobranza, eliSeguimientoDiarioCobranza, eliSeguimientoDiarioCobranzaSuper, vertablaSeguimientoDiarioCobranza, regAsignacionTop, verGralAsignacionTop, eliAsignacionTop, vertablaAsignacionTop, regAseTec, eliAseTec, verGralAseTec, vertablaAseTec, regComSegDiaAseTecnico, regSuperSegDiaAseTecnico, eliComSegDiaAseTecnico, eliComSegDiaAseTecnicoSuper, verGralSegDiaProAseTecnico, verTablaSegDiaProAseTecnico, id_usuario) VALUES (1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,$id_id_usuario)";
            $resultadoPermiso = mysqli_query($conexion, $querys); 
        } else {
 
            $querys = "INSERT INTO permisos(indMensajes, indCambioAsesor, indCambioPlacas, indSinComSupPlacas, verTablaUsuario, editarUsu, asignarCon, eliminarUsu, asignarPer, nuevoUsu, verTablaMarca, regMarca, modMarca, eliminaMar, verTablaModelo, regModelo, modModelo, eliminarMod, verTablaAnio, regAnios, modAnios, eliminarAnio, regColor, modColor, eliminarCol, verTablaColor, verTablaSemana, regSemana, eliSemana, regSemanaCobro, eliSemanaCobro, verTablaSemanaCobro, verTablaAgente, regAgente, eliAgente, regFormaPago, eliFormaPago, verTablaFormaPago, regPermiso, modPermiso, eliPermiso, verTablaVeh, regVehiculo, modVehiculo, eliVehiculo, verTablaCli, regCliente, modCliente, eliCliente, regProyecto, listProyecto, modProyecto, eliProyecto, pdfProyecto, verGralProy, regCapValVenInicial, verGralCapValVenInicial, perRegCapValVenInicial, verTablaCapValVenInicial, verTablaProyAct, verTablaRegSolAltProy, regSolAltProy, pdfRegSolAltProy, eliRegSolAltProy, verObsRegSolAltProy, regAlta, eliAlta, pdfAlta, verLinkObsAlta, verTablaAlta, regCodIdentificador, eliCodIdentificador, pdfCodIdentificador, verLinkObsIdentificador, verTablaCodIdentificador,  vertablaDadosAltaAsignarCodId, verGralDadosAltaAsignarCodId, regSuperCodIdentificador, eliSuperCodIdentificador, verLinkObsSuperIdentificador, verTablaSuperCodIdentificador, verTablaTecArmador, regTecArmador, modTecArmador, eliTecArmador, verTablaTecMontador, regTecMontador, modTecMontador, eliTecMontador, regAsesor, modAsesor, eliAsesor, verTablaAsesor, verPermisoUsuario, verTablaPermisoUsuario, pdfRepVVAvsVCodID, verGralRepVVAvsVCodID, verTablaRepVVAvsVCodID, regMotivoSupVVAvsVCodID, modMotivoSupVVAvsVCodID, pdfRepVVIvsVVA, verGralRepVVIvsVVA, verTablaRepVVIvsVVA, regMotivoSupVVIvsVVA, modMotivoSupVVIvsVVA, regComPlacas, eliComPlacas, regComPlacasSuper, eliComPlacasSuper, verGralComPlacas, verTablaComPlacas, regComKm, eliComKm, regComKmSuper, eliComKmSuper, verGralComKm, verTablaComKm, regComImg, eliComImg, regComImgSuper, eliComImgSuper, verGralComImg, verTablaComImg, regComCliente, eliComCliente, regComClienteSuper, eliComClienteSuper, verGralComCliente, verTablaComCliente, regComDocuFirm, eliComDocuFirm, regComDocuFirmSuper, eliComDocuFirmSuper, verGralComDocuFirm, verTablaComDocuFirm, regComGarantia, eliComGarantia, regComGarantiaSuper, eliComGarantiaSuper, verGralComGarantia, verTablaComGarantia, regComAsesor, eliComAsesor, regComAsesorSuper, eliComAsesorSuper, verGralComAsesor, verTablaComAsesor, regComVerifDiariaVeh, eliComVerifDiariaVehv, verGralComVerifDiariaVeh, regComVerifDiariaVehSuper, eliComVerifDiariaVehSuper, verTablaComVerifDiariaVeh, regComActMinDia, regComSuperActMinDia, eliComActMinDia, eliComSuperActMinDia, verGralActMinDia, verTablaActMinDia, consSolAltaProy, consAltaProy, consCodId, solCambioAsesor, cambioAsesorAutorizar, verGralcambioAsesorAutorizar, verTablaSolCambioAsesor, solCambioPlacas, cambioPlacasAutorizar, verTablaSolCambioPlacas, verGralcambioPlacasAutorizar, regComDiaAltasAsignarCodId, regComDiaAltasAsignarCodIdSuper, eliComDiaAltasAsignarCodId, verGralComDiaAltasAsignarCodId, eliComDiaAltasAsignarCodIdSuper, vertablaComDiaAltasAsignarCodId, regSeguimientoDiarioCobranza, regSeguimientoDiarioCobranzaSuper, verGralSeguimientoDiarioCobranza, eliSeguimientoDiarioCobranza, eliSeguimientoDiarioCobranzaSuper, vertablaSeguimientoDiarioCobranza, regAsignacionTop, verGralAsignacionTop, eliAsignacionTop, vertablaAsignacionTop, regAseTec, eliAseTec, verGralAseTec, vertablaAseTec, regComSegDiaAseTecnico, regSuperSegDiaAseTecnico, eliComSegDiaAseTecnico, eliComSegDiaAseTecnicoSuper, verGralSegDiaProAseTecnico, verTablaSegDiaProAseTecnico, id_usuario) VALUES (0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0, 0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,$id_id_usuario)";
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





