<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
  header('Location: ../../../index.php');
}
conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$id_recPzsDanadas = $_POST['id_recPzsDanadas3'];
$borrado = '1';
$enUso = '0';

  $query = "DELETE FROM recpzsdanadas WHERE id_recPzsDanadas = $id_recPzsDanadas";
  $resultado = mysqli_query($conexion, $query);
  // var_dump($query);

  $quer1 = "DELETE solpzsdanadas SET regCompraInicial = 0, borrado = 1, enUso = 0, fecha_borrado = '$date', id_capB = '$id'  WHERE id_recPzsDanadas = $id_recPzsDanadas";
  $resultado1 = mysqli_query($conexion, $querY1);
  // var_dump($query);

   if($resultado){
     echo "<div class='alert alert-success' role='alert'>
      <p><strong>Link de Piezas Dañadas Eliminado correctamente!</strong></p>
      </div>";
   }else{
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
  