<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}
conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id'];

$id_semanaCobro = $_POST['id'];
$query = ("DELETE FROM semanascobro WHERE id_semanaCobro = $id_semanaCobro");
// var_dump($query);

 $resultado = mysqli_query($conexion, $query);
 if ($resultado) {
     echo "<div class='alert alert-success' role='alert'>
         <p><strong>Semana Cobro borrada correctamente!</strong></p>
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