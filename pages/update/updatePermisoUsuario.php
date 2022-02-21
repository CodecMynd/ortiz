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

$editarUsu = (!empty($_POST['editarUsu'])) ? $_POST['editarUsu'] : 0;
$asignarCon = (!empty($_POST['asignarCon'])) ? $_POST['asignarCon'] : 0;
$eliminarUsu = (!empty($_POST['eliminarUsu'])) ? $_POST['eliminarUsu'] : 0;
$asignarPer = (!empty($_POST['asignarPer'])) ? $_POST['asignarPer'] : 0;
$nuevoUsu = (!empty($_POST['nuevoUsu'])) ? $_POST['nuevoUsu'] : 0;
$regMarca = (!empty($_POST['regMarca'])) ? $_POST['regMarca'] : 0;
$modMarca = (!empty($_POST['modMarca'])) ? $_POST['modMarca'] : 0;
$eliminaMar = (!empty($_POST['eliminaMar'])) ? $_POST['eliminaMar'] : 0;
$regModelo = (!empty($_POST['regModelo'])) ? $_POST['regModelo'] : 0;
$modModelo = (!empty($_POST['modModelo'])) ? $_POST['modModelo'] : 0;
$eliminarMod = (!empty($_POST['eliminarMod'])) ? $_POST['eliminarMod'] : 0;
$regAnios = (!empty($_POST['regAnios'])) ? $_POST['regAnios'] : 0;
$modAnios = (!empty($_POST['modAnios'])) ? $_POST['modAnios'] : 0;
$eliminarAnio = (!empty($_POST['eliminarAnio'])) ? $_POST['eliminarAnio'] : 0;
$regPermiso = (!empty($_POST['regPermiso'])) ? $_POST['regPermiso'] : 0;
$modPermiso = (!empty($_POST['modPermiso'])) ? $_POST['modPermiso'] : 0;
$eliPermiso = (!empty($_POST['eliPermiso'])) ? $_POST['eliPermiso'] : 0;
$regVehiculo = (!empty($_POST['regVehiculo'])) ? $_POST['regVehiculo'] : 0;
$modVehiculo = (!empty($_POST['modVehiculo'])) ? $_POST['modVehiculo'] : 0;
$eliVehiculo = (!empty($_POST['eliVehiculo'])) ? $_POST['eliVehiculo'] : 0;
$regCliente = (!empty($_POST['regCliente'])) ? $_POST['regCliente'] : 0;
$modCliente = (!empty($_POST['modCliente'])) ? $_POST['modCliente'] : 0;
$eliCliente = (!empty($_POST['eliCliente'])) ? $_POST['eliCliente'] : 0;
$regProyecto = (!empty($_POST['regProyecto'])) ? $_POST['regProyecto'] : 0;
$listProyecto = (!empty($_POST['listProyecto'])) ? $_POST['listProyecto'] : 0;
$modProyecto = (!empty($_POST['modProyecto'])) ? $_POST['modProyecto'] : 0;
$eliProyecto = (!empty($_POST['eliProyecto'])) ? $_POST['eliProyecto'] : 0;
$pdfProyecto = (!empty($_POST['pdfProyecto'])) ? $_POST['pdfProyecto'] : 0;


$query = "UPDATE permisos SET editarUsu ='$editarUsu', asignarCon = '$asignarCon', eliminarUsu = '$eliminarUsu', asignarPer = '$asignarPer', nuevoUsu = '$nuevoUsu', regMarca = '$regMarca', modMarca = '$modMarca', eliminaMar = '$eliminaMar', regModelo = '$regModelo', modModelo = '$modModelo', eliminarMod = '$eliminarMod', regAnios = '$regAnios', modAnios = '$modAnios', eliminarAnio = '$eliminarAnio', regPermiso = '$regPermiso', modPermiso = '$modPermiso', eliPermiso = '$eliPermiso', regVehiculo = '$regVehiculo', modVehiculo = '$modVehiculo', eliVehiculo = '$eliVehiculo', regCliente = '$regCliente', modCliente = '$modCliente', eliCliente = '$eliCliente', regProyecto = '$regProyecto', listProyecto = '$listProyecto', modProyecto = '$modProyecto', eliProyecto = '$eliProyecto', pdfProyecto = '$pdfProyecto' WHERE id_usuario = $id_usuario";
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
        }, 3000);

        setTimeout(function() {
            $(".alert-danger").fadeIn(1500);
        }, 3000);
    });
</script>





