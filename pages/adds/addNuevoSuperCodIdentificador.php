<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}
conectar();

ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');


$id = $_SESSION['id_usuario'];
$id_proyecto = $_POST['id_proyecto'];
$id_regcodidenti = $_POST['id_regcodidenti'];
$borrado = 0;
$status = 'Supervisión Código Identificador';

    // Ingresamos id a tabla proyectos modificar registros
    $queryP = "UPDATE proyectos SET proyCodIdentificador = 0, superCodIdentificador = 1  WHERE id_proyecto = $id_proyecto";
    $resultado2 = mysqli_query($conexion, $queryP);
    //var_dump($queryP);

    // Insertamos tabla registrocodidenti
    $query = "UPDATE registrocodidenti SET status = '$status', supervisado = 1";
    $resultado = mysqli_query($conexion, $query);
    //var_dump($query);

    // Insertamos tabla registrocodidentibitacora
    $query = "UPDATE registrocodidentibitacora SET status = '$status', supervisado = 1";
    $resultado = mysqli_query($conexion, $query);
    //var_dump($query);

    // Insertamos registro en tabla supervisado
    $queryS = "INSERT INTO supervisados(id_regcodidenti, id_proyecto, supervisado, fecha_creacion, id_capC) VALUES ($id_regcodidenti, $id_proyecto, 1, '$date', $id)";
    $resultado = mysqli_query($conexion, $queryS);
    //var_dump($query);


    if ($resultado) {
        echo "<div class='alert alert-success' role='alert'>
              <p><strong>Supervisión de Registro Código Identificador ingresado correctamente!</strong></p>
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