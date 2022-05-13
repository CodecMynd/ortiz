<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}
conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$nomProvee =  $_POST['nomProvee'];
$calle =  $_POST['calle'];
$colonia =  $_POST['colonia'];
$ciudad =  $_POST['ciudad'];
$estado =  $_POST['estado'];
$cp = $_POST['cp'];
$email = $_POST['email'];
$movil1 =  $_POST['movil1'];
$movil2 =  $_POST['movil2'];
$tel1 =  $_POST['tel1'];
$tel2 =  $_POST['tel2'];
$servicio = $_POST['servicio'];


if ($nomProvee == '' ) {
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>Error, el campo Nombre Proveedor es requerido</strong></p>
    </div>";
    exit;
} else if ($movil1 == '') {
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>Error, el campo Teléfono Movil 1 es requerido</strong></p>
    </div>";
    exit;
} else {

    $query = "INSERT INTO proveedores(nomProvee, calle, colonia, ciudad, estado, cp, email, movil1, movil2, tel1, tel2, servicio, fecha_creacion, id_capR) VALUES ('$nomProvee', '$calle', '$colonia', '$ciudad', '$estado', '$cp', '$email', '$movil1', '$movil2', '$tel1', '$tel2', '$servicio', '$date', '$id')";
    $resultado = mysqli_query($conexion, $query);

  
        // var_dump($querys);
    if ($resultado) {
        echo "<div class='alert alert-success' role='alert'> 
                <p><strong>¡Proveedor ingresado correctamente!</strong></p>
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





