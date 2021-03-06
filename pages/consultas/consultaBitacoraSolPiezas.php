<?php
require '../components/query.php';
if ($super == 1 or $verTablaBitacoraSolPiezas == 1) {

$query = "SELECT P.id_proyecto, P.nProyecto , P.estadoProyectoEliminado, P.nOrden,
P.proyectoActivo, P.registroSolicitud, P.altaProyecto, P.proyCodIdentificador, P.superCodIdentificador,
V.placa, M.marca, Mo.modelo, A.anio, Co.color,
SP.borrado,
RC.precio, RC.modalidadPago
FROM proyectos P
INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo
INNER JOIN colores Co On V.id_color = Co.id_color
INNER JOIN marcas M ON V.id_marca = M.id_marca
INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
INNER JOIN anios A ON V.id_anio = A.id_anio
INNER JOIN solpzsdanadas SP ON P.id_proyecto = SP.id_proyecto
LEFT JOIN regcomprainicial RC ON P.id_proyecto = RC.id_proyecto
LEFT JOIN proveedores PR ON RC.id_proveedor = PR.id_proveedor
INNER JOIN recpzsdanadas RP ON P.id_proyecto = RP.id_proyecto
GROUP BY P.id_proyecto ORDER BY P.id_proyecto  DESC";
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
	$etapa = "";
	$folio = "";
	$statusfolio = "";
	$idP = $row['id_proyecto'];


	if (empty($capturistaS)) {
		$capturistaSol = "<h6><span class='badge badge-danger badge-pill'>N/A</span></h6>";
	} else {
		$capturistaSol = $capturistaS;
	}

	if (empty($capturistaC)) {
		$capturistaCompra = "<h6><span class='badge badge-danger badge-pill'>N/A</span></h6>";
	} else {
		$capturistaCompra = $capturistaC;
	}

	if (empty($f_S)) {
		$fechaS = "<h6><span class='badge badge-danger badge-pill'>N/A</span></h6>";
	} else {
		$fechaS = $f_S;
	}

	if (empty($f_C)) {
		$fechaC = "<h6><span class='badge badge-danger badge-pill'>N/A</span></h6>";
	} else {
		$fechaC = $f_C;
	}

	$Eliminado = $row['estadoProyectoEliminado'];


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
		$etapa = "<h6><span class='badge badge-success badge-pill'>C??digo Identificador</span></h6>";
	} else if ($SU == 1) {
		$etapa = "<h6><span class='badge badge-success badge-pill'>Supervisi??n</span></h6>";
	} else {
		$etapa = "<h6><span class='badge badge-Warning badge-pill'>Sin Ubicaci??n</span></h6>";
	}


	// statusfolio
	if ($row['borrado'] == 0) {
		$statusfolio = "<h6><span class='badge badge-success badge-pill'>Activo</span></h6>";
	} else {
		$statusfolio = "<h6><span class='badge badge-danger badge-pill'>Eliminado</span></h6>";
	}



	// Bitacora Actividad
	if (!empty($f_r)) {
		$fechaBitacora = "<strong>$f_r</strong>";
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
	// if(!empty($capturistaR) AND  $row['borrado'] == 0){
	// 	$capturista = $capturistaR;
	// }else if(!empty($capturistaB) AND  $row['borrado'] == 1){
	// 		$capturista = $capturistaB;
	// }else if((empty($row['id_capC']) OR $row['id_capC'] == 0 ) and  (empty($row['id_capR']) OR $row['id_capR'] == 0 )){
	// 	$capturista = "<h6><span class='badge badge-danger badge-pill'>N/A</span></h6>";
	// }

	// costo Credito o contado
	if(empty($row['modalidadPago'])){
		$Credito = 0;
		$Contado = 0;
	}else if ($row['modalidadPago'] == 'Cr??dito') {
		$Credito = $row['precio'];
		$Contado = 0;
	} else if ($row['modalidadPago'] == 'Contado') {
		$Credito = 0;
		$Contado = $row['precio'];
	}

	// proveedor
	if (empty($row['modalidadPago'])) {
		$modalidadPago = "<h6><span class='badge badge-danger badge-pill'>N/A</span></h6>";
	} else {
		$modalidadPago = "<strong>{$row['modalidadPago']}</strong>";
	}
		// contador Credito/Contado
		$querySuma = "SELECT
		(SELECT SUM( precio)
		FROM regcomprainicial
		WHERE modalidadPago = 'Cr??dito' AND id_proyecto = $idP) AS precioCredito,
	
		(SELECT SUM( precio)
		FROM regcomprainicial
		WHERE modalidadPago = 'Contado' AND id_proyecto = $idP) AS precioContado;";
		$resultadoSuma = mysqli_query($conexion, $querySuma);
		$rowSuma = $resultadoSuma->fetch_assoc();
		$precioCredito = (empty($rowSuma['precioCredito'])) ? 0 : $rowSuma['precioCredito'];
		$precioContado = (empty($rowSuma['precioContado'])) ? 0 : $rowSuma['precioContado'];
		$total = $precioCredito + $precioContado;


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
		"11" => $precioCredito,
		"12" => $precioContado,
		"13" => $total
	);
	
}

$resultados = array(
	"sEcho" => 1, /* informacion para la herramienta datatables */
	"iTotalRecords" => count($datos), /* env??a el total de columnas a la datatable */
	"iTotalDisplayRecords" => count($datos), /* envia el total de filas a visualizar */
	"aaData" => $datos /* env??a el arreglo completo que se llen?? con el while */
);
echo json_encode($resultados);
