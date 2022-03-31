<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}

conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$id_marca = (isset($_POST['marca'])) ? $_POST['marca']: '';
$modelo = $_POST['modelo'];

if ($id_marca == '' || $modelo == '') {
    echo "<div class='alert alert-danger' role='role'>
         <p><strong>Error, todos los campos son requeridos</strong></p>
         </div>";
    exit;
} else {
    $query = "INSERT INTO modelos(id_marca, modelo, fecha_creacion, id_capC) VALUES ($id_marca, '$modelo', '$date', $id)";
// var_dump($query);
    $verificar_modeloMarca = mysqli_query($conexion, "SELECT * FROM modelos WHERE id_marca = '$id_marca' AND modelo = '$modelo' ");

    if (mysqli_num_rows($verificar_modeloMarca) > 0) {
        echo
        "<div class='alert alert-danger' role='role'>
    <p><strong>¡Error, este Modelo y Marca ya se encuentran  registrados, verifica por favor!</strong></p>
    </div>";
        exit;
    } else {
        $resultado = mysqli_query($conexion, $query);
        if ($resultado) {
            echo "<div class='alert alert-success' role='alert'>
            <p><strong>¡Modelo ingresado correctamente!</strong></p>
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