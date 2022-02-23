<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}

conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$id_modelo = $_POST['id_modelo'];
$id_marca = $_POST['marca'];
$modelo = $_POST['modelo'];

if ($id_marca == '' || $modelo == '') {
    echo "<div class='alert alert-danger' role='role'>
          <p><strong>Error, todos los campos son requeridos</strong></p>
          </div>";
    exit;
} else {
    $query = "UPDATE modelos SET id_marca = '$id_marca', modelo = '$modelo', fecha_mod = '$date', id_capM= '$id' WHERE id_modelo = $id_modelo";

    $verificar_modeloMarca = mysqli_query($conexion, "SELECT * FROM modelos WHERE id_marca = '$id_marca' AND modelo = '$modelo' ");


    if (mysqli_num_rows($verificar_modeloMarca) > 0) {
        echo
        "<div class='alert alert-danger' role='role'>
        <p><strong>¡Error, este Modelo/Marca ya se encuentra  registrado, verifica por favor!</strong></p>
        </div>";
        exit;
    } else {

        $resultado = mysqli_query($conexion, $query);
        if ($resultado) {
            echo "<div class='alert alert-success' role='alert'>
             <p><strong>¡Modelo actualizado correctamente!</strong></p>
             </div>";
        } else {
            echo "<div class='alert alert-danger' role='role'>
         <p><strong>¡Error interno: vuelve a intentarlo!</strong></p>
         </div>";
        }
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
        }, 4000);
    });
</script>