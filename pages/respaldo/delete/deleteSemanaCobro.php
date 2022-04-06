<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}
conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$id_semanaCobro = $_POST['id'];
$query = ("UPDATE semanascobro SET borrado = 1, fecha_borrado = '$date', id_capB = '$id' WHERE id_semanaCobro = $id_semanaCobro");
// var_dump($query);

 $resultado = mysqli_query($conexion, $query);
 if ($resultado) {
     echo "<div class='alert alert-success' role='alert'>
         <p><strong>Semana Cobro borrada correctamente!</strong></p>
         </div>";
 } else {
     echo "<div class='alert alert-danger' role='role'>
     <p><strong>¡Error interno:! Por favor tome captura de pantalla y repórtelo inmediatamente a el área de Soporte</strong></p>
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
