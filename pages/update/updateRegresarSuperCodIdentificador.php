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
$status = 'Borrado de 2.7 Supervisión Código Identificador';
$etapa = 'Proyecto regresado a 2.6 Proyectos con Código Identificador';


$conexion->autocommit(FALSE);
try {

//   Regresar Registro de Registro Codigo Identificador a Alta de proyecto para realizar Solicitud
$query1 = ("UPDATE proyectos SET proyectoActivo = 0, registroSolicitud = 0, altaProyecto = 0, proyCodIdentificador= 1, superCodIdentificador = 0 WHERE id_proyecto = $id_proyecto ");
$resultado1 = mysqli_query($conexion, $query1);
// var_dump($query1);
// echo '<br>';

$query2 = ("UPDATE registrocodidenti SET supervisado = 0, status = '$status' WHERE id_proyecto = $id_proyecto ");
$resultado2 = mysqli_query($conexion, $query2);
// var_dump($query2);
// echo '<br>';

$query3 = ("UPDATE registrocodidentibitacora SET supervisado = 0, borrado = 1, status = '$status', fecha_borrado = '$date', id_capB = $id WHERE id_proyecto = $id_proyecto ");
$resultado3 = mysqli_query($conexion, $query3);
// var_dump($query3);
// echo '<br>';

$query4 = ("DELETE FROM supervisado  WHERE id_proyecto = $id_proyecto ");
$resultado4 = mysqli_query($conexion, $query4);
// var_dump($query4);
// echo '<br>';

$query5 = ("UPDATE supervisadobitacora SET supervisado = 0, borradoFechaSupervisado = '$date', id_capB = $id WHERE id_proyecto = $id_proyecto ");
$resultado5 = mysqli_query($conexion, $query5);
// var_dump($query5);
// echo '<br>';

//Bitacora
$query6 = "INSERT INTO bitacora(id_proyecto, etapa, fecha_modificacion, id_capM) VALUES ('$id_proyecto', '$etapa', '$date', $id)";
$resultado6 = mysqli_query($conexion, $query6);
// var_dump($query6);
  
$conexion->commit();
    
echo "<div class='alert alert-success' role='alert'>
<p><strong>Registro de Supervisión de Código Identificador Eliminado correctamente!</strong></p>
</div>";


} catch (Exception $e) {
$conexion->rollback();
echo 'Error detectado: ',  $e->getMessage(), "\n";
echo "<div class='alert alert-danger' role='role'>
            <p><strong>¡Error interno! Por favor tome captura de pantalla y repórtelo inmediatamente a el área de Soporte</strong></p>
            <a href='https://jsolautomotriz.workplace.com/groups/504053034641133'  target='_blank' class='btn btn-secondary btn-inline' data-toggle='tooltip' data-placement='bottom' title='Area de Soporte'>¡Reporta aqui! <i class='fa-solid fa-triangle-exclamation parpadea'></i></a>
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