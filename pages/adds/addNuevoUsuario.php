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

$estado = 0;
$asignarPermisos = '';

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
    $query = "INSERT INTO usuarios (nombres, aPaterno, aMaterno, usuario, email, tel, admin, fecha_creacion, id_captC) 
    VALUES ('$nombres', '$aPaterno', '$aMaterno', '$usuario', '$email', '$tel', $admin, '$date', $id);";

    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE nombres = '$nombres' AND aPaterno = '$aPaterno' AND aMaterno = '$aMaterno' ");

    if (mysqli_num_rows($verificar_usuario) > 0) {
        echo
        "<div class='alert alert-danger' role='role'>
        <p><strong>¡Error, este usuario ya se encuentra  registrado, verifica por favor!</strong></p>
        </div>";
        exit;
    } else {

        $resultado = mysqli_query($conexion, $query);

// Asignamos permisos existentes
        $id_id_usuario = mysqli_insert_id($conexion);
        if($admin == 1){
            $querys = "INSERT INTO permisos(editarUsu, asignarCon, eliminarUsu, asignarPer, nuevoUsu, regMarca, modMarca, eliminaMar, regModelo, modModelo, eliminarMod, regAnios, modAnios, eliminarAnio, regPermiso, modPermiso, eliPermiso, regVehiculo, modVehiculo, eliVehiculo, regCliente, modCliente, eliCliente, regProyecto, listProyecto, modProyecto, eliProyecto, pdfProyecto, id_usuario) VALUES (1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, $id_id_usuario)"; 
            $resultado = mysqli_query($conexion, $querys);
        }else{
        $querys = "INSERT INTO permisos(editarUsu, asignarCon, eliminarUsu, asignarPer, nuevoUsu, regMarca, modMarca, eliminaMar, regModelo, modModelo, eliminarMod, regAnios, modAnios, eliminarAnio, regPermiso, modPermiso, eliPermiso, regVehiculo, modVehiculo, eliVehiculo, regCliente, modCliente, eliCliente, regProyecto, listProyecto, modProyecto, eliProyecto, pdfProyecto, id_usuario) VALUES (0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, $id_id_usuario)"; 
        // var_dump($querys);
        $resultado = mysqli_query($conexion, $querys);
        }

    }

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