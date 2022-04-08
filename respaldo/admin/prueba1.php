<?php
require '../components/query.php';

$query = "SELECT id_proyecto, nProyecto, nOrden, comPlacas, estadoProyectoEliminado, comSuperPlaca, nombres, aPaternoCliente, aMaternoCliente, placa, marca, modelo, anio, color
FROM test
ORDER BY nProyecto DESC";
$cont=0;
$resultado = mysqli_query($conexion, $query);

while ($row = $resultado->fetch_assoc()) {
$cont++;
    $datos[] = array(
        "0" => $cont,
        "1" => $row['nProyecto'],
        "2" => $row['nOrden'],
        "3" => $row['marca'],
        "4" => $row['modelo'],
        "5" => $row['anio'],
        "6" => $row['placa'],
        "7" => $row['color'],
        "8" => $row['nombres'] . ' ' . $row['aPaternoCliente'] . ' ' . $row['aMaternoCliente'],
        "9" => $row['id_proyecto'],
        "10" => $row['id_proyecto'],
        "11" => $row['id_proyecto'],
        "12" => $row['id_proyecto']
    );
}

$resultados = array(
    "sEcho"=>1, /* informacion para la herramienta datatables */
    "iTotalRecords"=>count($datos), /* envía el total de columnas a la datatable */
    "iTotalDisplayRecords"=>count($datos), /* envia el total de filas a visualizar */
    "aaData"=>$datos /* envía el arreglo completo que se llenó con el while */
);
echo json_encode($resultados);
?>