<?php
require '../components/query.php';
if ($super == 1 or $verTablaCapValVenInicial == 1) {

	$query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.valorVenta, P.fecha_creacion, P.estadoProyectoEliminado,
	 P.proyectoActivo, P.registroSolicitud, P.altaProyecto, P.proyCodIdentificador, P.superCodIdentificador,
	V.placa, M.marca, Mo.modelo, A.anio, Co.color
	FROM proyectos P 
	INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
	INNER JOIN colores Co On V.id_color = Co.id_color
	INNER JOIN marcas M ON V.id_marca = M.id_marca 
	INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
	INNER JOIN anios A ON V.id_anio = A.id_anio 
	ORDER BY nProyecto DESC";
} else {
	$query = "SELECT id_proyecto
	FROM proyectos WHERE id_proyecto = 0";
}
$resultado = mysqli_query($conexion, $query);
$cont = 0;

while ($row = $resultado->fetch_assoc()) {
	$outputBtns1 = "";
	$outputBtns2 = "";
	$valorVenta = "";
	$estado = "";
	$valorV = "";

	$idP = $row['id_proyecto'];
	$EP = $row['estadoProyectoEliminado'];

	$v = $row['valorVenta'];
	if ($v == 0.00) {
		$valorVenta = "<h6><span class='badge badge-danger badge-pill'>No modificado 0.00</span></h6>";
	} else {
		$valorVenta = "<h6><span class='badge badge-success badge-pill'>Actualizado</span></h6>";
	}

	$S = $row['estadoProyectoEliminado'];
	if ($S == 0) {
		$estado = "<h6><span class='badge badge-danger badge-pill'>Eliminado</span></h6>";
	} else {
		$estado = "<h6><span class='badge badge-success badge-pill'>Activo</span></h6>";
	}

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

	// Botones -----------------------------------------------------------------------------------------------

	// 2.3.7.1 Capturar Valor Venta Inicial
	if ($super == 1 and $EP == 1) {
		$outputBtns1 = "<a class='btn btn-secondary' href='../update/formUpdateCapValVentInicial.php?id={$idP}'><i class='fas fa-edit'></i></a>";
	} else if ($super == 1 && $EP == 0) {
		$outputBtns1 = "<a class='btn btn-outline-danger' id='noRegCapValVenInicial'><i class='fas fa-edit'></i></a>";
	} else if ($regCapValVenInicial == 1 and $EP == 1) {
		$outputBtns1 = "<a class='btn btn-secondary' href='../update/formUpdateCapValVentInicial.php?id={$idP}'><i class='fas fa-edit'></i></a>";
	} else if ($regCapValVenInicial == 0 && $EP == 0) {
		$outputBtns1 = "<a class='btn btn-outline-danger' id='noRegCapValVenInicial'><i class='fas fa-edit'></i></a>";
	} else {
		$outputBtns1 = "<a class='btn btn-outline-danger' id='regCapValVenInicial'><i class='fas fa-edit'></i></a>";
	}

	// 2.3.7.3 Ver Generales Captura de Valor Venta Inicial
	if ($super == 1 OR $verGralCapValVenInicial == 1) { 
		$outputBtns2 = "<a href='javascript:void(0)' onclick='mostrarDetalles(\"".$row['id_proyecto']."\")' class='btn btn-secondary'><i class='fa-solid fa-eye'></i></a>";
	} else {
		$outputBtns2 = "<a href='#' class='btn btn-outline-danger' id='verGralCapValVenInicial'><i class='fa-solid fa-eye'></i></a>";
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
		"9" => $valorVenta,
		"10" => "<strong>{$row['valorVenta']}</strong>",
		"11" => $estado,
		"12" => $etapa,
		"13" => "<div class='input-group input-group-sm mb-3'>
		 				<div class='input-group-prepend'>
		 					<button type='button' class='btn btn-secondary dropdown-toggle' data-toggle='dropdown'><i class='fas fa-cog'></i><span data-toogle='tooltip' title='Botónes de administración  tabla Comprobación de Asignación  de Asesor'> Acciones</span>
		 					</button>
		 					<ul class='dropdown-menu text-center' style='columns:2; min-width:2em;'>
		 						<li class='dropdown-item'>
		 							<span data-toggle='tooltip' title='2.3.7.1 Capturar Valor Venta Inicial'>
		 								" . $outputBtns1 . "
		 							</span>
		 						</li>
		 						<li class='dropdown-item'>
		 							<span data-toggle='tooltip' title='2.3.7.3 Ver Generales Captura de Valor Venta Inicial'>
		 								" . $outputBtns2 . "
		 							</span>
		 						</li>	
		 					</ul>
		 				</div>
				</div>"

	);
}

$resultados = array(
	"sEcho" => 1, /* informacion para la herramienta datatables */
	"iTotalRecords" => count($datos), /* envía el total de columnas a la datatable */
	"iTotalDisplayRecords" => count($datos), /* envia el total de filas a visualizar */
	"aaData" => $datos /* envía el arreglo completo que se llenó con el while */
);
echo json_encode($resultados);
