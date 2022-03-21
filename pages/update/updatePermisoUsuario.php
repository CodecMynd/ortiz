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


$query = "UPDATE permisos SET verTablaUsuario = '$verTablaUsuario', editarUsu = '$editarUsu', asignarCon = '$asignarCon', eliminarUsu = '$eliminarUsu', asignarPer = '$asignarPer', nuevoUsu = '$nuevoUsu', verTablaMarca = '$verTablaMarca', regMarca = '$regMarca', modMarca = '$modMarca', eliminaMar = '$eliminaMar', verTablaModelo = '$verTablaModelo', regModelo = '$regModelo', modModelo = '$modModelo', eliminarMod = '$eliminarMod', verTablaAnio = '$verTablaAnio', regAnios = '$regAnios', modAnios = '$modAnios', eliminarAnio = '$eliminarAnio', regColor = '$regColor', modColor = '$modColor', eliminarCol = '$eliminarCol', verTablaColor = '$verTablaColor', verTablaSemana = '$verTablaSemana', regSemana = '$regSemana', eliSemana = '$eliSemana',  verTablaSemanaCobro = '$verTablaSemanaCobro', regSemanaCobro = '$regSemanaCobro', eliSemanaCobro = '$eliSemanaCobro', verTablaAgente = '$verTablaAgente', regAgente = '$regAgente', eliAgente = '$eliAgente', regFormaPago = '$regFormaPago', eliFormaPago = '$eliFormaPago', verTablaFormaPago = '$verTablaFormaPago', regPermiso = '$regPermiso', modPermiso = '$modPermiso', eliPermiso = '$eliPermiso', verTablaVeh = '$verTablaVeh', regVehiculo = '$regVehiculo', modVehiculo = '$modVehiculo', eliVehiculo = '$eliVehiculo', verTablaCli = '$verTablaCli', regCliente = '$regCliente', modCliente = '$modCliente', eliCliente = '$eliCliente', regProyecto = '$regProyecto', listProyecto = '$listProyecto', modProyecto = '$modProyecto', eliProyecto = '$eliProyecto', pdfProyecto = '$pdfProyecto', verGralProy = '$verGralProy', regCapValVenInicial = '$regCapValVenInicial', perRegCapValVenInicial = '$perRegCapValVenInicial', verGralCapValVenInicial = '$verGralCapValVenInicial', verTablaCapValVenInicial = '$verTablaCapValVenInicial', verTablaProyAct = '$verTablaProyAct', verTablaRegSolAltProy = '$verTablaRegSolAltProy', regSolAltProy = '$regSolAltProy', pdfRegSolAltProy = '$pdfRegSolAltProy', eliRegSolAltProy = '$eliRegSolAltProy', verObsRegSolAltProy = '$verObsRegSolAltProy', regAlta = '$regAlta', eliAlta = '$eliAlta', pdfAlta = '$pdfAlta', verLinkObsAlta = '$verLinkObsAlta', verTablaAlta = '$verTablaAlta', regCodIdentificador = '$regCodIdentificador', eliCodIdentificador = '$eliCodIdentificador', pdfCodIdentificador = '$pdfCodIdentificador', verLinkObsIdentificador = '$verLinkObsIdentificador', verTablaCodIdentificador = '$verTablaCodIdentificador', vertablaDadosAltaAsignarCodId = '$vertablaDadosAltaAsignarCodId', verGralDadosAltaAsignarCodId = '$verGralDadosAltaAsignarCodId',regSuperCodIdentificador = '$regSuperCodIdentificador', eliSuperCodIdentificador = '$eliSuperCodIdentificador', verLinkObsSuperIdentificador = '$verLinkObsSuperIdentificador', verTablaSuperCodIdentificador = '$verTablaSuperCodIdentificador', verTablaTecArmador = '$verTablaTecArmador', regTecArmador = '$regTecArmador', modTecArmador = '$modTecArmador', eliTecArmador = '$eliTecArmador', verTablaTecMontador = '$verTablaTecMontador',regTecMontador = '$regTecMontador', modTecMontador = '$modTecMontador', eliTecMontador = '$eliTecMontador' WHERE id_usuario = $id_usuario";
// var_dump($query);


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

