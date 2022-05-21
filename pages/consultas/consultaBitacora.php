<?php
require '../components/query.php';
if ($super == 1 or $verTablaBitacora == 1) {

	$query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.estadoProyectoEliminado, P.proyectoActivo,
	P.registroSolicitud, P.altaProyecto, P.proyCodIdentificador, P.superCodIdentificador,
	V.placa, M.marca, Mo.modelo, A.anio, Co.color,           
	B.etapa, B.fechar_borrado, B.fecha_modificacion, B.fecha_registro,
	UR.nombres AS nomR, UR.aPaterno AS patR, UR.aMaterno AS matR,
	UM.nombres AS nomM, UM.aPaterno AS patM, UM.aMaterno AS matM,
	UB.nombres AS nomB, UB.aPaterno AS patB, UB.aMaterno AS matB,
	B.id_capB, B.id_capM, id_capR
	FROM proyectos P
	INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo
	INNER JOIN colores Co On V.id_color = Co.id_color
	INNER JOIN marcas M ON V.id_marca = M.id_marca
	INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
	INNER JOIN anios A ON V.id_anio = A.id_anio
	LEFT JOIN bitacora B ON P.id_proyecto = B.id_proyecto
	LEFT JOIN usuarios UR ON B.id_capR = UR.id_usuario    
	LEFT JOIN usuarios UM ON B.id_capM = UM.id_usuario
	LEFT JOIN usuarios UB ON B.id_capB = UB.id_usuario
	ORDER BY B.id_bitacora DESC;";
} else {
	$query = "SELECT id_proyecto FROM proyectos WHERE id_proyecto = 0";
}

$resultado = mysqli_query($conexion, $query);
$cont = 0;

while ($row = $resultado->fetch_assoc()) {
	$outputBtns1 = "";
	$outputBtns2 = "";
	$etapa = "";
	$fechaBitacora = "";
	$bitacora = "";
	$capturista = "";

	$capturistaR = $row['nomR'] . ' ' . $row['patR'] . ' ' . $row['matR'];
	$capturistaM = $row['nomM'] . ' ' . $row['patM'] . ' ' . $row['matM'];
	$capturistaB = $row['nomB'] . ' ' . $row['patB'] . ' ' . $row['matB'];

	$f_b = $row['fechar_borrado'];
	$f_m = $row['fecha_modificacion'];
	$f_r = $row['fecha_registro'];


	$Eliminado = $row['estadoProyectoEliminado'];
	$e = $row['etapa'];

	// Etapa del proyecto
	$PA = $row['proyectoActivo'];
	$RS = $row['registroSolicitud'];
	$AP = $row['altaProyecto'];
	$CI = $row['proyCodIdentificador'];
	$SU = $row['superCodIdentificador'];
	if ($PA == 1) {
		$etapa = "<h6><span class='badge badge-success badge-pill'>Proyecto Activo</span></h6>";
	} else if ($RS == 1) {
		$etapa = "<h6><span class='badge badge-success badge-pill'>Solicitud Alta</span></h6>";
	} else if ($AP == 1) {
		$etapa = "<h6><span class='badge badge-success badge-pill'>Alta Proyecto</span></h6>";
	} else if ($CI == 1) {
		$etapa = "<h6><span class='badge badge-success badge-pill'>Código Identificador</span></h6>";
	} else if ($SU == 1) {
		$etapa = "<h6><span class='badge badge-success badge-pill'>Supervisión</span></h6>";
	} else {
		$etapa = "<h6><span class='badge badge-Warning badge-pill'>Sin Ubicación</span></h6>";
	}

	// Bitacora Fecha
	if ($e != '') {
		$bitacora = "<strong>$e</strong>";
	} else {
		$bitacora = "<h6><span class='badge badge-danger badge-pill'>N/A</span></h6>";
	}


	// Bitacora Actividad
	if (!empty($f_r)) {
		$fechaBitacora = "<strong>$f_r</strong>";
	} else if (!empty($f_m)) {
		$fechaBitacora = "<strong>$f_m</strong>";
	} else if (!empty($f_b)) {
		$fechaBitacora = "<strong>$f_b</strong>";
	} else {
		$fechaBitacora = "<h6><span class='badge badge-danger badge-pill'>N/A</span></h6>";
	}

	// validar columna estado del proyecto
	if ($Eliminado == 0) {
		$validaEstadoProyecto = "<h6><span class='badge badge-danger badge-pill'>Eliminado</span></h6>";
	} else {
		$validaEstadoProyecto = "<h6><span class='badge badge-success badge-pill'>Activo</span></h6>";
	}

	// Capturista
	if (!empty($capturistaR) or !empty($capturistaM) or !empty($capturistaB)) {
		$capturista = $capturistaR . ' ' . $capturistaM . ' ' . $capturistaB;
	} else if ((empty($row['id_capB']) or $row['id_capB'] == 0) and (empty($row['id_capM']) or $row['id_capM'] == 0) and  (empty($row['id_capR']) or $row['id_capR'] == 0)) {
		$capturista = "<h6><span class='badge badge-danger badge-pill'>N/A</span></h6>";
	}
	// $btnLink = "<a href='javascript:void(0)' onclick='mostarLink(\"" . $row['id_proyecto'] . "\")'><button type='button' class='btn btn-sm btn-secondary' data-toggle='tooltip' data-placement='left' title='Ver Informcaión del Link de Desarmado'><span class='badge badge-light'></span>Ver Link</button></a>";

	$cont++;
	$datos[] = array(
		"0" => $cont,
		"1" => "<span class='badge badge-dark badge-pill'>{$row['id_proyecto']}</span>",
		"2" => $row['nProyecto'],
		"3" => $row['nOrden'],
		"4" => $row['marca'],
		"5" => $row['modelo'],
		"6" => $row['anio'],
		"7" => $row['placa'],
		"8" => $row['color'],
		"9" => $validaEstadoProyecto,
		"10" => $etapa,
		"11" => $bitacora,
		"12" => $fechaBitacora,
		"13" => "<strong>$capturista</strong>"
	);
}

$resultados = array(
	"sEcho" => 1, /* informacion para la herramienta datatables */
	"iTotalRecords" => count($datos), /* envía el total de columnas a la datatable */
	"iTotalDisplayRecords" => count($datos), /* envia el total de filas a visualizar */
	"aaData" => $datos /* envía el arreglo completo que se llenó con el while */
);
echo json_encode($resultados);
