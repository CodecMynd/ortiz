<?php
require '../components/query.php';
if ($super == 1 or $verTablaBitacoraSolPiezas == 1) {

$query = "SELECT P.id_proyecto, P.nProyecto , P.estadoProyectoEliminado, P.nOrden,
P.proyectoActivo, P.registroSolicitud, P.altaProyecto, P.proyCodIdentificador, P.superCodIdentificador,
V.placa, M.marca, Mo.modelo, A.anio, Co.color,       
R.id_recPzsDanadas AS linkId,
S.id_solPzsDanadas, S.folio_solicitud, S.cantidad, S.descripcion, S.minVideo, S.fecha_creacion,
S.borrado, S.enUso, S.regCompraInicial,
U.nombres AS nomS, U.aPaterno AS patS, U.aMaterno AS matS,
RC.id_regCompraInicial,RC.precio, RC.modalidadPago, RC.borrado AS borradoRegComInicial,
RC.fecha_creacion AS fechaCompra, PR.nomProvee,
UCI.nombres AS nomC, UCI.aPaterno AS patC, UCI.aMaterno as matC
from proyectos P 
INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo
INNER JOIN colores Co On V.id_color = Co.id_color
INNER JOIN marcas M ON V.id_marca = M.id_marca
INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
INNER JOIN anios A ON V.id_anio = A.id_anio
LEFT JOIN recpzsdanadas R ON P.id_proyecto = R.id_proyecto
LEFT JOIN solpzsdanadas S ON R.id_recPzsDanadas = S.id_recPzsDanadas
LEFT JOIN usuarios U ON S.id_capC = U.id_usuario
INNER JOIN regcomprainicial RC ON S.id_solPzsDanadas = RC.id_solPzsDanadas
LEFT JOIN usuarios UCI ON RC.id_capC = UCI.id_usuario
LEFT JOIN proveedores PR ON RC.id_proveedor = PR.id_proveedor
ORDER BY S.folio_solicitud DESC";
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
	$capturistaS = $row['nomS'].' '. $row['patS'].' '. $row['matS'];
	$capturistaC = $row['nomC'].' '. $row['patC'].' '. $row['matC'];
	$f_S = $row['fecha_creacion'];
	$f_C= $row['fechaCompra'];


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
	$nomProvee = $row['nomProvee'];
	// $e = $row['etapa'];

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

	// Folio
	if ($row['borrado'] == 0) {
		$folio = "<h6><span class='badge badge-success badge-pill'>{$row['folio_solicitud']}</span></h6>";
	} else {
		$folio = "<h6><span class='badge badge-danger badge-pill'>{$row['folio_solicitud']}</span></h6>";
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
	// proveedor
	if (empty($row['nomProvee'])) {
		$proveedor = "<h6><span class='badge badge-danger badge-pill'>N/A</span></h6>";
	} else {
		$proveedor = $row['nomProvee'];
	}

	// costo Credito o contado
	if ($row['modalidadPago'] == 'Crédito') {
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
		$modalidadPago = $row['modalidadPago'];
	}


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
		"11" => $statusfolio,
		"12" => $folio,
		"13" => $row['cantidad'],
		"14" => $row['descripcion'],
		"15" => $row['minVideo'],
		"16" => $proveedor,
		"17" => $modalidadPago,
		"18" => $Credito,
		"19" => $Contado,
		"20" => $capturistaSol,
		"21" => $fechaS,
		"22" => $capturistaCompra,
		"23" => $fechaC

	);
	
}

$resultados = array(
	"sEcho" => 1, /* informacion para la herramienta datatables */
	"iTotalRecords" => count($datos), /* envía el total de columnas a la datatable */
	"iTotalDisplayRecords" => count($datos), /* envia el total de filas a visualizar */
	"aaData" => $datos /* envía el arreglo completo que se llenó con el while */
);
echo json_encode($resultados);
