<?php
require '../components/query.php';
if ($super == 1 or $verTablaAutoProceSurtPzs == 1) {

	$query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.estadoProyectoEliminado,
	V.placa, M.marca, Mo.modelo, A.anio, Co.color,
    MAX(R.id_recPzsDanadas) AS id_recPzsDanadas, R.linkRecPzsDanadas, MIN(R.borrado) AS linkBorrado, MAX(R.enUso) AS linkEnUso, 
    R.fecha_creacion AS fechaRegLink, R.fecha_borrado AS fechaEliLink, R.enUso,
	SP.folio_solicitud, MIN(SP.borrado) AS solBorrado, MAX(SP.enUso) AS solEnUso, SP.folio_solicitud, SP.id_solPzsDanadas,
    RC.precio, RC.modalidadPago, RC.id_regCompraInicial,
	ASE.asesor, TAR.tecArmador,
    PA.cronoPreAuto, PA.fecha_creacion AS fechaRegPreAuto,
    AU.folio_autoriz, AU.id_autorizado, AU.cronoAutorizado,
    PE.id_pzsEntregadas
	FROM proyectos P
	INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo
	INNER JOIN colores Co On V.id_color = Co.id_color
	INNER JOIN marcas M ON V.id_marca = M.id_marca
	INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
	INNER JOIN anios A ON V.id_anio = A.id_anio
    LEFT JOIN recpzsdanadas R ON P.id_proyecto = R.id_proyecto
	LEFT JOIN tecarmadores TAR ON R.id_tecArmador = TAR.id_tecArmador
    LEFT JOIN solpzsdanadas SP ON R.id_recPzsDanadas = SP.id_recPzsDanadas
    LEFT JOIN regcomprainicial RC ON P.id_proyecto = RC.id_proyecto
	LEFT JOIN comasesor CA ON P.id_proyecto = CA.id_proyecto
	LEFT JOIN asesores ASE ON CA.id_asesor = ASE.id_asesor
    INNER JOIN preautorizados PA ON P.id_proyecto = PA.id_proyecto
    INNER JOIN autorizados AU ON P.id_proyecto = AU.id_proyecto
    LEFT JOIN pzstregadas PE ON P.id_proyecto = PE.id_proyecto
	WHERE P.estadoProyectoEliminado = 1 AND P.proyectoActivo = 1 AND P.autoProceSurtPz = 1 AND PA.borrado = 0  GROUP BY P.id_proyecto ORDER BY RC.id_regCompraInicial DESC";
} else {
	$query = "SELECT id_proyecto
	FROM proyectos WHERE id_proyecto = 0";
}
$resultado = mysqli_query($conexion, $query);
$cont = 0;

while ($row = $resultado->fetch_assoc()) {
	$outputBtns7 = "";

	$link = "";
	$solicitud = "";

	$idP = $row['id_proyecto'];
	$nP = $row['nProyecto'];
	$Eliminado = $row['estadoProyectoEliminado'];
	$id_recPzsDanadas = $row['id_recPzsDanadas'];
	$id_solPzsDanadas = $row['id_solPzsDanadas'];
	$id_regCompraInicial = $row['id_regCompraInicial'];
	$linkRecPzsDanadas = $row['linkRecPzsDanadas'];
	$id_autorizado = $row['id_autorizado'];
	$id_pzsEntregadas = $row['id_pzsEntregadas'];
	$solPz = $row['folio_solicitud'];
	$linkBorrado = $row['linkBorrado'];
	$linkEnUso = $row['linkEnUso'];
	$solBorrado = $row['solBorrado'];
	$solEnUso = $row['solEnUso'];
	$folio_solicitud = $row['folio_solicitud'];
	

	// contador Credito/Contado
	$querySuma = "SELECT
	(SELECT SUM( precio)
	FROM regcomprainicial
	WHERE modalidadPago = 'Crédito' AND borrado = 0 AND id_proyecto = $idP) AS precioCredito,

	(SELECT SUM( precio)
	FROM regcomprainicial
	WHERE modalidadPago = 'Contado' AND borrado = 0 AND id_proyecto = $idP) AS precioContado;";
	$resultadoSuma = mysqli_query($conexion, $querySuma);
	$rowSuma = $resultadoSuma->fetch_assoc();
	$precioCredito = (empty($rowSuma['precioCredito'])) ? 0 : $rowSuma['precioCredito'];
	$precioContado = (empty($rowSuma['precioContado'])) ? 0 : $rowSuma['precioContado'];
	$total = $precioCredito + $precioContado;

	// Compras
	$queryCompra = "SELECT
		(SELECT COUNT(enUso) 
		FROM regcomprainicial 
		WHERE enUso = 1 AND id_proyecto = $idP GROUP BY id_proyecto ) AS compra;";
	$resultadoCompra = mysqli_query($conexion, $queryCompra);
	$rowCompra = $resultadoCompra->fetch_assoc();
	$rowCompra['compra'];


	// Solicitudes
	$querySoli = "SELECT
		(SELECT COUNT(enUso) 
		FROM solpzsdanadas 
		WHERE enUso = 1 AND id_proyecto = $idP GROUP BY id_proyecto ) AS solicitudes";
	$resultadoSoli = mysqli_query($conexion, $querySoli);
	$rowSoli = $resultadoSoli->fetch_assoc();
	$soli = $rowSoli['solicitudes'];

	// Link de Desarmado
	if ($linkBorrado == 0 and $linkEnUso == 1) {
		$link = "<h6><span class='badge badge-success badge-pill'>Registrado</span></h6>";
	} else if ($linkBorrado == 1 and $linkEnUso == 0) {
		$link = "<h6><span class='badge badge-danger badge-pill'>Sin Registro</span></h6>";
	} else if (empty($linkRecPzsDanadas)) {
		$link = "<h6><span class='badge badge-danger badge-pill'>Sin Ningún Registro</span></h6>";
	}

	// Solicitud Piezas
	if ($solBorrado == 0 and $solEnUso == 1) {
		$solicitud = "<h6><span class='badge badge-success badge-pill'>Solicitud(es)  {$soli}</span></h6>";
	} else if ($solBorrado == 1 and $solEnUso == 0) {
		$solicitud = "<h6><span class='badge badge-danger badge-pill'>Sin Solicitud</span></h6>";
	} else if (empty($folio_solicitud)) {
		$solicitud = "<h6><span class='badge badge-danger badge-pill'>Sin Registro</span></h6>";
	}

	// 4.1.3 Ver Generales Recepción de Piezas Dañadas (Consulta Rapida)
	if ($super == 1 or $verGralRecPzsDanadas == 1) {
		$outputBtns4 = "<a href='javascript:void(0)' class='btn btn-info' onclick='mostarDetalles(\"" . $row['id_proyecto'] . "\")'><i class='fa-solid fa-circle-info'></i></a>";
	} else {
		$outputBtns4 = "<a class='btn btn-outline-danger' id='verGralRecPzsDanadas' data-toggle='tooltip'  title='Sin Permiso'><i class='fa-solid fa-circle-info'></i></a>";
	}

	//4.1.5.1 Regresar de Proceso de Surtido de Piezas a Autorizado
	if ($super == 1 or $regresarAuto == 1) {
		$outputBtns9 = "<a href='#' class='btn btn-secondary' onclick='abrirModal9(\"" . $idP . "\",\"" . $nP . "\",\"" . $row['id_recPzsDanadas'] . "\",\"" . $id_solPzsDanadas . "\",\"" . $id_regCompraInicial . "\",\"" . $id_autorizado . "\", \"".$id_pzsEntregadas."\")'><i class='fa-solid fa-reply'></i></a>";
	} else {
		$outputBtns9 = "<a class='btn btn-outline-danger' id='regresarAuto' data-toggle='tooltip' data-placement='left' title='Sin Permiso'><i class='fa-solid fa-reply'></i></a>";
	}

	// 4.1.5.2 Enviar de Proceso de Surtido de Piezas a Piezas Entregadas
	if ($super == 1 or $enviarPzEntregadas == 1) {
		$outputBtns10 = "<a href='#' class='btn btn-secondary' onclick='abrirModal10(\"" . $idP . "\",\"" . $nP . "\",\"" . $row['id_recPzsDanadas'] . "\",\"" . $id_solPzsDanadas . "\",\"" . $id_regCompraInicial . "\", \"" . $id_autorizado . "\")'><i class='fa-solid fa-paper-plane'></i></a>";
	} else {
		$outputBtns10 = "<a class='btn btn-outline-danger' id='enviarPzEntregadas' data-toggle='tooltip' data-placement='left' title='Sin Permiso'><i class='fa-solid fa-paper-plane'></i></a>";
	}

	// 4.1.2.8 Ver Generales Proceso de Surtido de Piezas
	if ($super == 1 or $verGralProceSurtPzs == 1) {
		$outputBtns11 = "<a href='javascript:void(0)' class='btn btn-secondary' onclick='mostarDetalles3(\"" . $row['id_proyecto'] . "\")'><i class='fa-solid fa-eye'></i></a>";
	} else {
		$outputBtns11 = "<a class='btn btn-outline-danger' id='verGralProceSurtPzs' data-toggle='tooltip'  title='Sin Permiso'><i class='fa-solid fa-eye'></i></a>";
	}

	// Fecha Registro Link
	$fechaRegLink = (empty($row['fechaRegLink'])) ? 'Sin Registro' : "<strong>{$row['fechaRegLink']}</strong>";
	// Fecha Elimnación Link
	$fechaEliLink = (empty($row['fechaEliLink'])) ? 'Sin Registro' : "<strong>{$row['fechaEliLink']}</strong>";

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
		"9" => ($Eliminado == 0) ? '<h6><span class="badge badge-danger badge-pill">Eliminado</span></h6>' : '<h6><span class="badge badge-success badge-pill">Activo</span></h6>',
		"10" => $link,
		"11" => $solicitud,
		"12" => (empty($rowCompra['compra'])) ? "<h6><span class='badge badge-danger badge-pill'>Registros 0</span></h6>" : "<h6><span class='badge badge-success badge-pill'>Registro(s)  {$rowCompra['compra']}</span></h6>",
		"13" => $precioCredito,
		"14" => $precioContado,
		"15" => $total,
		"16" => "<strong>{$row['folio_autoriz']}</strong>",
		"16" => "<strong>{$row['folio_autoriz']}</strong>",
		"17" => "<strong>{$row['cronoPreAuto']}</strong>",
		"18" => "<strong>{$row['cronoAutorizado']}</strong>",
		"19" => (empty($row['asesor'])) ? "<h6><span class='badge badge-danger badge-pill'>Sin Asesor</span></h6>" : "<h6><span class='badge badge-success badge-pill'>{$row['asesor']}</span></h6>",
		"20" => (empty($row['tecArmador'])) ? "<h6><span class='badge badge-danger badge-pill'>Sin Técnico</span></h6>" : "<h6><span class='badge badge-success badge-pill'>{$row['tecArmador']}</span></h6>",
		"21" => $fechaRegLink,
		"22" => "<div class='input-group input-group-sm mb-3'>
					<div class='input-group-prepend'>
						<button type='button' class='btn btn-secondary dropdown-toggle' data-toggle='dropdown'><i class='fas fa-cog'></i><span data-toogle='tooltip' title='Botónes de administración  tabla Recepción de Piezas Dañadas'> Acciones</span></button>
							<ul class='dropdown-menu text-center' style='columns:2; min-width:2em;'>
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='4.1.5.1 Regresar de Proceso de Surtido de Piezas a Autorizado'>
										" . $outputBtns9 . "
									</span>
								</li>
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='4.1.5.2 Enviar de Proceso de Surtido de Piezas a Piezas Entregadas'>
										" . $outputBtns10 . "
									</span>
								</li>
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='4.1.5.3 Ver Generales Proceso de Surtido de Piezas'>
										" . $outputBtns11 . "
									</span>
								</li>
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='4.1.3 Ver Generales Recepción de Piezas Dañadas (Consulta Rapida)'>
										" . $outputBtns4 . "
									</span>
								</li>
							</ul>
						</div>
					</div>",

	);
}
$resultado->close();
$resultados = array(
	"sEcho" => 1, /* informacion para la herramienta datatables */
	"iTotalRecords" => count($datos), /* envía el total de columnas a la datatable */
	"iTotalDisplayRecords" => count($datos), /* envia el total de filas a visualizar */
	"aaData" => $datos /* envía el arreglo completo que se llenó con el while */
);
echo json_encode($resultados);
