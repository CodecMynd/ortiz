<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}
conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$newDate = date("d/m/Y", strtotime($date));
$id = $_SESSION['id_usuario'];

$id_cliente = $_POST['id_cliente'];
$id_vehiculo = $_POST['id_vehiculo'];

$nOrden = $_POST['nOrden'];
$nProyecto = $_POST['nProyecto'];
$tipoReparacion = $_POST['tipoReparacion'];
$color = $_POST['color'];
$km = $_POST['km'];
$valorVenta = $_POST['valorVenta'];
$diagnostico = $_POST['diagnostico'];
$descripServ1 = $_POST['descripServ1'];
$descripServ2 = $_POST['descripServ2'];

if($id_cliente == '' || $id_vehiculo == '' || $nOrden = '' || $nProyecto == '' || $tipoReparacion == '' || $color == '' || $km == '' || $valorVenta == '' || $diagnostico == '' || $descripServ1 
== '' ) {
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>Error, todos los campos marcados con * son requeridos</strong></p>
    </div>";
    exit;
}else{
    $query = "INSERT INTO proyectos(id_cliente, id_vehiculo, nOrden, nProyecto, tipoReparacion, color, km, valorVenta, diagnostico, descripServ1, descripServ2, fecha, fecha_creacion, fecha_mod, id_capC, id_capM) VALUES ( ' 1, ' 2, ' 3, ' 4, ' 5, ' 6, ' 7, ' 8, ' 9, ' 10, ' 11, ' 12, ' 13, ' 14, ' 15, ' 16, ' 17)";
}


