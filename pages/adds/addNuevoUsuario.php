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
            $querys = "INSERT INTO permisos(verTablaUsuario, editarUsu, asignarCon, eliminarUsu, asignarPer, nuevoUsu, verTablaMarca, regMarca, modMarca, eliminaMar, verTablaModelo, regModelo, modModelo, eliminarMod, verTablaAnio, regAnios, modAnios, eliminarAnio, regColor, modColor, eliminarCol, verTablaColor, verTablaSemana, regSemana, eliSemana, verTablaSemanaCobro, regSemanaCobro, eliSemanaCobro, verTablaAgente, regAgente, eliAgente, regPermiso, modPermiso, eliPermiso, verTablaVeh, regVehiculo, modVehiculo, eliVehiculo, verTablaCli, regCliente, modCliente, eliCliente, regProyecto, listProyecto, modProyecto, eliProyecto, pdfProyecto, verGralProy, verTablaProyAct, verTablaRegSolAltProy, regSolAltProy, pdfRegSolAltProy, eliRegSolAltProy, verObsRegSolAltProy, regAlta, eliAlta, pdfAlta, verLinkObsAlta, verTablaAlta, regCodIdentificador, eliCodIdentificador, pdfCodIdentificador, verLinkObsIdentificador, verTablaCodIdentificador, regSuperCodIdentificador, eliSuperCodIdentificador, verLinkObsSuperIdentificador, verTablaSuperCodIdentificador,id_usuario) VALUES (1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,$id_id_usuario)";
            $resultadoPermiso = mysqli_query($conexion, $querys);
        } else {
            $querys = "INSERT INTO permisos(verTablaUsuario, editarUsu, asignarCon, eliminarUsu, asignarPer, nuevoUsu, verTablaMarca, regMarca, modMarca, eliminaMar, verTablaModelo, regModelo, modModelo, eliminarMod, verTablaAnio, regAnios, modAnios, eliminarAnio, regColor, modColor, eliminarCol, verTablaColor, verTablaSemana, regSemana, eliSemana, verTablaSemanaCobro, regSemanaCobro, eliSemanaCobro, verTablaAgente, regAgente, eliAgente, regPermiso, modPermiso, eliPermiso, verTablaVeh, regVehiculo, modVehiculo, eliVehiculo, verTablaCli, regCliente, modCliente, eliCliente, regProyecto, listProyecto, modProyecto, eliProyecto, pdfProyecto, verGralProy, verTablaProyAct, verTablaRegSolAltProy, regSolAltProy, pdfRegSolAltProy, eliRegSolAltProy, verObsRegSolAltProy, regAlta, eliAlta, pdfAlta, verLinkObsAlta, verTablaAlta, regCodIdentificador, eliCodIdentificador, pdfCodIdentificador, verLinkObsIdentificador, verTablaCodIdentificador, regSuperCodIdentificador, eliSuperCodIdentificador, verLinkObsSuperIdentificador, verTablaSuperCodIdentificador, id_usuario) VALUES (0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,$id_id_usuario)";
            // var_dump($querys);
            $resultadoPermiso = mysqli_query($conexion, $querys);
        }
    }
        // var_dump($resultadoPermiso);


    if ($resultado) {
        echo "<div class='alert alert-success' role='alert'>
                <p><strong>¡Usuario ingresado correctamente!</strong></p>
                </div>";
    } else {
        echo "<div class='alert alert-danger' role='role'>
            <p><strong>¡Error interno: vuelve a intentarlo!</strong></p>
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
        }, 3000);
    });
</script>