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
    $query = "UPDATE permisos SET verTablaUsuario = 1, editarUsu = 1, asignarCon = 1, eliminarUsu = 1, asignarPer = 1, nuevoUsu = 1, verTablaMarca = 1, regMarca = 1, modMarca = 1, eliminaMar = 1, verTablaModelo = 1, regModelo = 1, modModelo = 1, eliminarMod = 1, verTablaAnio = 1, regAnios = 1, modAnios = 1, eliminarAnio = 1, regColor = 1, modColor = 1, eliminarCol = 1, verTablaColor = 1, verTablaSemana = 1, regSemana = 1, eliSemana = 1, regSemanaCobro = 1, eliSemanaCobro = 1, verTablaSemanaCobro = 1, verTablaAgente = 1, regAgente = 1, eliAgente = 1, regFormaPago = 1, eliFormaPago = 1, verTablaFormaPago = 1, regPermiso = 1, modPermiso = 1, eliPermiso = 1, verTablaVeh = 1, regVehiculo = 1, modVehiculo = 1, eliVehiculo = 1, verTablaCli = 1, regCliente = 1, modCliente = 1, eliCliente = 1, regProyecto = 1, listProyecto = 1, modProyecto = 1, eliProyecto = 1, pdfProyecto = 1, verGralProy = 1, regCapValVenInicial = 1, verGralCapValVenInicial = 1, perRegCapValVenInicial = 1, verTablaCapValVenInicial = 1, verTablaProyAct = 1, verTablaRegSolAltProy = 1, regSolAltProy = 1, pdfRegSolAltProy = 1, eliRegSolAltProy = 1, verObsRegSolAltProy = 1, regAlta = 1, eliAlta = 1, pdfAlta = 1, verLinkObsAlta = 1, verTablaAlta = 1, regCodIdentificador = 1, eliCodIdentificador = 1, pdfCodIdentificador = 1, verLinkObsIdentificador = 1, verTablaCodIdentificador = 1, vertablaDadosAltaAsignarCodId = 1, verGralDadosAltaAsignarCodId = 1, regSuperCodIdentificador = 1, eliSuperCodIdentificador = 1, verLinkObsSuperIdentificador = 1, verTablaSuperCodIdentificador = 1, verTablaTecArmador = 1, regTecArmador = 1, modTecArmador = 1, eliTecArmador = 1, verTablaTecMontador = 1, regTecMontador = 1, modTecMontador = 1, eliTecMontador = 1, pdfRepVVAvsVCodID = 1, verGralRepVVAvsVCodID = 1, verTablaRepVVAvsVCodID = 1, regMotivoSupVVAvsVCodID = 1, modMotivoSupVVAvsVCodID = 1, pdfRepVVIvsVVA = 1, verGralRepVVIvsVVA = 1, verTablaRepVVIvsVVA = 1, regMotivoSupVVIvsVVA = 1, modMotivoSupVVIvsVVA = 1, regComPlacas = 1, eliComPlacas = 1, regComPlacasSuper = 1, eliComPlacasSuper = 1, verGralComPlacas = 1, verTablaComPlacas = 1, regComKm = 1, eliComKm = 1, regComKmSuper = 1, eliComKmSuper = 1, verGralComKm = 1, verTablaComKm = 1, regComImg = 1, eliComImg = 1, regComImgSuper = 1, eliComImgSuper = 1, verGralComImg = 1, verTablaComImg = 1, regComCliente = 1, eliComCliente = 1, regComClienteSuper = 1, eliComClienteSuper = 1, verGralComCliente = 1, verTablaComCliente = 1, regComDocuFirm = 1, eliComDocuFirm = 1, regComDocuFirmSuper = 1, eliComDocuFirmSuper = 1, verGralComDocuFirm = 1, verTablaComDocuFirm = 1, regComGarantia = 1, eliComGarantia = 1, regComGarantiaSuper = 1, eliComGarantiaSuper = 1, verGralComGarantia = 1, verTablaComGarantia = 1, regComAsesor = 1, eliComAsesor = 1, regComAsesorSuper = 1, eliComAsesorSuper = 1, verGralComAsesor = 1, verTablaComAsesor = 1 WHERE id_usuario = '$id_usuario' ";
    $resultado = mysqli_query($conexion, $query);
    // var_dump($querys);
} else {
    $query = "UPDATE permisos SET verTablaUsuario = 0, editarUsu = 0, asignarCon = 0, eliminarUsu = 0, asignarPer = 0, nuevoUsu = 0, verTablaMarca = 0, regMarca = 0, modMarca = 0, eliminaMar = 0, verTablaModelo = 0, regModelo = 0, modModelo = 0, eliminarMod = 0, verTablaAnio = 0, regAnios = 0, modAnios = 0, eliminarAnio = 0, regColor = 0, modColor = 0, eliminarCol = 0, verTablaColor = 0, verTablaSemana = 0, regSemana = 0, eliSemana = 0, regSemanaCobro = 0, eliSemanaCobro = 0, verTablaSemanaCobro = 0, verTablaAgente = 0, regAgente = 0, eliAgente = 0, regFormaPago = 0, eliFormaPago = 0, verTablaFormaPago = 0, regPermiso = 0, modPermiso = 0, eliPermiso = 0, verTablaVeh = 0, regVehiculo = 0, modVehiculo = 0, eliVehiculo = 0, verTablaCli = 0, regCliente = 0, modCliente = 0, eliCliente = 0, regProyecto = 0, listProyecto = 0, modProyecto = 0, eliProyecto = 0, pdfProyecto = 0, verGralProy = 0, regCapValVenInicial = 0, verGralCapValVenInicial = 0, perRegCapValVenInicial = 0, verTablaCapValVenInicial = 0, verTablaProyAct = 0, verTablaRegSolAltProy = 0, regSolAltProy = 0, pdfRegSolAltProy = 0, eliRegSolAltProy = 0, verObsRegSolAltProy = 0, regAlta = 0, eliAlta = 0, pdfAlta = 0, verLinkObsAlta = 0, verTablaAlta = 0, regCodIdentificador = 0, eliCodIdentificador = 0, pdfCodIdentificador = 0, verLinkObsIdentificador = 0, verTablaCodIdentificador = 0, vertablaDadosAltaAsignarCodId = 0, verGralDadosAltaAsignarCodId = 0, regSuperCodIdentificador = 0, eliSuperCodIdentificador = 0, verLinkObsSuperIdentificador = 0, verTablaSuperCodIdentificador = 0, verTablaTecArmador = 0, regTecArmador = 0, modTecArmador = 0, eliTecArmador = 0, verTablaTecMontador = 0, regTecMontador = 0, modTecMontador = 0, eliTecMontador = 0, pdfRepVVAvsVCodID = 0, verGralRepVVAvsVCodID = 0, verTablaRepVVAvsVCodID = 0, regMotivoSupVVAvsVCodID = 0, modMotivoSupVVAvsVCodID = 0, pdfRepVVIvsVVA = 0, verGralRepVVIvsVVA = 0, verTablaRepVVIvsVVA = 0, regMotivoSupVVIvsVVA = 0, modMotivoSupVVIvsVVA = 0, regComPlacas = 0, eliComPlacas = 0, regComPlacasSuper = 0, eliComPlacasSuper = 0, verGralComPlacas = 0, verTablaComPlacas = 0, regComKm = 0, eliComKm = 0, regComKmSuper = 0, eliComKmSuper = 0, verGralComKm = 0, verTablaComKm = 0, regComImg = 0, eliComImg = 0, regComImgSuper = 0, eliComImgSuper = 0, verGralComImg = 0, verTablaComImg = 0, regComCliente = 0, eliComCliente = 0, regComClienteSuper = 0, eliComClienteSuper = 0, verGralComCliente = 0, verTablaComCliente = 0, regComDocuFirm = 0, eliComDocuFirm = 0, regComDocuFirmSuper = 0, eliComDocuFirmSuper = 0, verGralComDocuFirm = 0, verTablaComDocuFirm = 0, regComGarantia = 0, eliComGarantia = 0, regComGarantiaSuper = 0, eliComGarantiaSuper = 0, verGralComGarantia = 0, verTablaComGarantia = 0, regComAsesor = 0, eliComAsesor = 0, regComAsesorSuper = 0, eliComAsesorSuper = 0, verGralComAsesor = 0, verTablaComAsesor = 0 WHERE id_usuario = '$id_usuario' ";    
    $resultado = mysqli_query($conexion, $query);
    // var_dump($querys);

}
$resultado = mysqli_query($conexion, $query);
if ($resultado) {
    echo "<div class='alert alert-success' role='alert'>
                <p><strong>¡Los permisos se actualizaron correctamente!</strong></p>
                </div>";
} else {
    echo "<div class='alert alert-danger' role='role'>
            <p><strong>¡Error interno: vuelve a intentarlo!</strong></p>
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
