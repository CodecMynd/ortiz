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
$query = "SELECT estadoProyectoEliminado FROM proyectos WHERE id_proyecto = $id_proyecto";
$respuesta = mysqli_query($conexion, $query);
$row = $respuesta->fetch_assoc();
$row['estadoProyectoEliminado'];



// $proyectoActivo = $_POST['proyectoActivo'];
$folioProyExtra = $_POST['folioProyExtra'];
$nProyecto = $_POST['nProyecto'];
$valorProyExtra = $_POST['valorProyExtra'];
$descVentaProyExtra = $_POST['descVentaProyExtra'];
$linkAutorWhats = $_POST['linkAutorWhats'];

$borrado = 0;
$status = 'Activo';
$etapa = 'Creación de nuevo proyecto Extra';
$super = 0;

if ($row['estadoProyectoEliminado'] == 0) {
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>Error, El número de Proyecto acaba de ser eliminado, verifica en la Tabla 2.9 Bitacora de Proyectos </strong></p>
    </div>";
    exit;
} else if (empty($valorProyExtra)) {
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>Error, Ingresa una cantidad en campo Valor Proyecto Extra</strong></p>
    </div>";
    exit;
} else if ($descVentaProyExtra == '') {
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>Error, Ingresa en campo Descripción de Venta Proyecto Extra</strong></p>
    </div>";
    exit;
} else if ($linkAutorWhats == '') {
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>Error, Ingresa en campo Link Autorización Whatsapp</strong></p>
    </div>";
    exit;
} else {

     try {
         $conexion->autocommit(FALSE);
        // Insertamos tabla proyectos extras
        $query = "INSERT INTO proyextras(folioProyExtra, id_proyecto, nProyecto, valorProyExtra, descVentaProyExtra, linkAutorWhats, borrado, super, fecha_creacion, id_capC) 
        VALUES ('$folioProyExtra', '$id_proyecto', '$nProyecto', '$valorProyExtra', '$descVentaProyExtra', '$linkAutorWhats', '$borrado', '$super', '$date', '$id')";

        // $verificar_id = mysqli_query($conexion, "SELECT folioProyExtra FROM proyextras WHERE valorProyExtra = '$valorProyExtra' ");
        // if (mysqli_num_rows($verificar_id) > 0) {
        //     echo "<div class='alert alert-danger' role='role'>
        //     <p><strong>¡Error, Folio ya se encuentra  registrado en Proyecto Extra, Por favor tome captura de pantalla y repórtelo inmediatamente a el área de Soporte!</strong></p>
        //     </div>";
        //     exit;
        // } else {

            $resultado = mysqli_query($conexion, $query);
            // var_dump($query);
        

        // // Ingresamos id a tabla proyectos modificar registros
        $query2 = "UPDATE proyectos SET proyExtra = 1 WHERE id_proyecto = $id_proyecto";
        $resultado2 = mysqli_query($conexion, $query2);
        // var_dump($query2);

        
         $conexion->commit();
         echo "<div class='alert alert-success' role='alert'>
                <p><strong>Proyecto Extra ingresado correctamente!</strong></p>
             </div>";
     } catch (Exception $e) {
         $conexion->rollback();
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
        }, 3000);
    });
</script>