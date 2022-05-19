<?php
require '../components/query.php';
if ($super == 1 or $consSolAltaProy == 1) {

	$query = "SELECT R.folioRegSolicitud, R.id_regSolicitud, R.valorVentaAlta, R.fecha_creacion, R.borrado,
	P.id_proyecto, P.nProyecto, P.nOrden, P.valorVenta, 
	V.placa, Co.color, M.marca, Mo.modelo, A.anio, S.semana,
    RA.folioRegAlta
	FROM registrosolicitudbitacora R
	LEFT JOIN proyectos P ON R.id_proyecto = P.id_proyecto
	LEFT JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo
	LEFT JOIN colores Co ON V.id_color = Co.id_color
	LEFT JOIN marcas M ON V.id_marca = M.id_marca
	LEFT JOIN modelos Mo ON V.id_modelo = Mo.id_modelo 
	LEFT JOIN anios A ON V.id_anio = A.id_anio
	LEFT JOIN semanasolalta S ON R.id_semana = S.id_semSolAlta
    LEFT JOIN registroaltabitacora RA ON P.id_proyecto = RA.id_proyecto
	ORDER BY R.id_regSolicitud DESC";
} else {
	$query = "SELECT id_proyecto
	FROM proyectos WHERE id_proyecto = 0";
}
$resultado = mysqli_query($conexion, $query);
$cont = 0;

while ($row = $resultado->fetch_assoc()) {
	$outputBtns1 = "";
	$outputBtns2 = "";
	$outputBtns3 = "";


	$idP = $row['id_proyecto'];
	$nP = $row['nProyecto'];
	$Eliminado = $row['borrado'];
	$id_regSolicitud = $row['id_regSolicitud'];
	$fecha_creacion = $row['fecha_creacion'];
	$idP = $row['id_proyecto'];
	$nP = $row['nProyecto'];
	$fecha1 = new DateTime($date);
	$fecha2 = new DateTime($fecha_creacion);
	$diff = $fecha1->diff($fecha2);

	if (empty($idP)) {
		$outputBtns1 = "<span class='badge badge-danger badge-pill'>N/A</span>";
	} else if ($Eliminado == 1) {
		$outputBtns1 = "<h6><span class='badge badge-danger badge-pill'>Eliminado</span></h6>";
	} else {
		$outputBtns1 = "<h6><span class='badge badge-success badge-pill'>Activo</span></h6>";
	}

	if($Eliminado == 1 OR  (empty($row['folioRegAlta']))){
		$folioRegAlta = "<span class='badge badge-danger badge-pill'>N/A</span>";
	}else{
		$folioRegAlta = "<strong>{$row['folioRegAlta']}</strong>";
	}

	



	$cont++;
	$datos[] = array(
		"0" => $cont,
		"1" => (empty($idP)) ? "<span class='badge badge-danger badge-pill'>N/A</span>" : "<span class='badge badge-dark badge-pill'>{$idP}</span>",
		"2" => $outputBtns1,
		"3" => "<strong>{$row['folioRegSolicitud']}</strong>",
		"4" => $folioRegAlta,
		"5" => (empty($nP)) ? "<span class='badge badge-danger badge-pill'>N/A</span>" : $nP,
		"6" => (empty($row['nOrden'])) ? "<span class='badge badge-danger badge-pill'>N/A</span>" : $row['nOrden'],
		"7" => (empty($row['marca'])) ? "<span class='badge badge-danger badge-pill'>N/A</span>" : $row['marca'],
		"8" => (empty($row['modelo'])) ? "<span class='badge badge-danger badge-pill'>N/A</span>" : $row['modelo'],
		"9" => (empty($row['anio'])) ? "<span class='badge badge-danger badge-pill'>N/A</span>" : $row['anio'],
		"10" => (empty($row['placa'])) ? "<span class='badge badge-danger badge-pill'>N/A</span>"  : $row['placa'],
		"11" => (empty($row['color'])) ? "<span class='badge badge-danger badge-pill'>N/A</span>"  : $row['color'],
		"12" => (empty($row['semana'])) ? "<span class='badge badge-danger badge-pill'>N/A</span>"  : $row['semana'],
		"13" => (empty($row['valorVenta'])) ? 0.00 : $row['valorVenta'],
		"14" => (empty($row['valorVentaAlta'])) ? 0.00 : $row['valorVentaAlta'],
		"15" => (empty($fecha_creacion)) ? "<span class='badge badge-danger badge-pill'>N/A</span>" : $fecha_creacion,

	);
}

$resultados = array(
	"sEcho" => 1, /* informacion para la herramienta datatables */
	"iTotalRecords" => count($datos), /* envía el total de columnas a la datatable */
	"iTotalDisplayRecords" => count($datos), /* envia el total de filas a visualizar */
	"aaData" => $datos /* envía el arreglo completo que se llenó con el while */
);
echo json_encode($resultados);
