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
$valorCobro = $_POST['valorCobro'];
$codIdentificador = $_POST['codIdentificador'];
$borrado = 0;
$status = 'Activo';

if (empty($valorCobro)) {
    echo "<div class='alert alert-danger' role='role'>
         <p><strong>Error, ingresa una cantidad en campo Valor Cobro</strong></p>
         </div>";
    exit;
} else if ($codIdentificador == '') {
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>Error, el campo Código Identificador es requerido</strong></p>
    </div>";
    exit;
} else {


    // Ingresamos id a tabla proyectos modificar registros
    $queryP = "UPDATE `proyectos` SET altaProyecto = 0, proyCodIdentificador = 1 WHERE id_proyecto = $id_proyecto";
    $resultado2 = mysqli_query($conexion, $queryP);
    //var_dump($queryP);

    // Insertamos tabla registrocodidenti
    $query = "INSERT INTO registrocodidenti(id_proyecto, valorCobro, codIdentificador, borrado, status, fecha_creacion, id_capC) VALUES ( '$id_proyecto', '$valorCobro', '$codIdentificador', $borrado, '$status', '$date', '$id')";
    $resultado = mysqli_query($conexion, $query);
    //var_dump($query);

    // Insertamos tabla registrocodidentibitacora
    $query = "INSERT INTO registrocodidentibitacora(id_proyecto, valorCobro, codIdentificador, borrado, status, fecha_creacion, id_capC) VALUES ( '$id_proyecto', '$valorCobro', '$codIdentificador', $borrado, '$status', '$date', '$id')";
    $resultado = mysqli_query($conexion, $query);
    //var_dump($query);


    if ($resultado) {
        echo "<div class='alert alert-success' role='alert'>
              <p><strong>Registro de Código Identificador ingresado correctamente!</strong></p>
          </div>
          <div class='col-md-12 col-sm-12 align-self-center'>
              <a href='../components/regCodIdentificador.php?id={$id_proyecto}' class='btn btn-secondary btn-block' data-toggle='tooltip' data-placement='bottom' title='Descargar PDF'><i class='fa-solid fa-file-pdf'></i> Descargar PDF</a>
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