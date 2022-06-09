<?php
require '../components/query.php';
if ($super == 1 or $verTablaRecPzsDanadas == 1) {

	$query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.estadoProyectoEliminado,
	V.placa, M.marca, Mo.modelo, A.anio, Co.color,
    MAX(R.id_recPzsDanadas) AS id_recPzsDanadas, R.linkRecPzsDanadas, MIN(R.borrado) AS linkBorrado, MAX(R.enUso) AS linkEnUso, 
    R.fecha_creacion AS fechaRegLink, R.fecha_borrado AS fechaEliLink, R.enUso,
	SP.folio_solicitud, MIN(SP.borrado) AS solBorrado, MAX(SP.enUso) AS solEnUso, SP.folio_solicitud, SP.id_solPzsDanadas,
    RC.precio, RC.modalidadPago, RC.id_regCompraInicial, 
    ASE.asesor, TAR.tecArmador
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
	WHERE P.estadoProyectoEliminado = 1 AND P.proyectoActivo = 1 AND P.cotizando = 1 GROUP BY P.id_proyecto ORDER BY R.id_recPzsDanadas DESC";
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
	$outputBtns4 = "";
	$outputBtns5 = "";
	$link = "";
	$solicitud = "";

	$idP = $row['id_proyecto'];
	$nP = $row['nProyecto'];
	$Eliminado = $row['estadoProyectoEliminado'];
	$id_recPzsDanadas = $row['id_recPzsDanadas'];
	$id_solPzsDanadas = $row['id_solPzsDanadas'];
	$id_regCompraInicial = $row['id_regCompraInicial'];
	$linkRecPzsDanadas = $row['linkRecPzsDanadas'];
	$solPz = $row['folio_solicitud'];
	$linkBorrado = $row['linkBorrado'];
	$linkEnUso = $row['linkEnUso'];
	$solBorrado = $row['solBorrado'];
	$solEnUso = $row['solEnUso'];
	$folio_solicitud = $row['folio_solicitud'];
	$enUso = $row['enUso'];
	$fechaRegLink = $row['fechaRegLink'];

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
		$link = "<h6><span class='badge badge-danger badge-pill'>Sin Registro</span></h6>";
	}

	// Solicitud Piezas
	if ($solBorrado == 0 and $solEnUso == 1) {
		$solicitud = "<h6><span class='badge badge-success badge-pill'>Solicitud(es)  {$soli}</span></h6>";
	} else if ($solBorrado == 1 and $solEnUso == 0) {
		$solicitud = "<h6><span class='badge badge-danger badge-pill'>Sin Solicitud</span></h6>";
	} else if (empty($folio_solicitud)) {
		$solicitud = "<h6><span class='badge badge-danger badge-pill'>Sin Registro</span></h6>";
	}


	// 4.1.1 Registrar Link de Desarmado
	if ($Eliminado == 0) {
		$outputBtns1 = "<a class='btn btn-outline-danger' id='noComImg'><i class='fa-solid fa-ban'></i></a>";
	} else if ($super == 1 && (empty($linkRecPzsDanadas)) or $linkBorrado == 1) {
		$outputBtns1 = "<a href='#' onclick='abrirModal1(\"" . $idP . "\",\"" . $nP . "\")' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($super == 1 && (!empty($linkRecPzsDanadas))) {
		$outputBtns1 = "<a class='btn btn-outline-danger' id='siRegComImg'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($regLinkRecPzsDanadas == 1 && (empty($linkRecPzsDanadas))) {
		$outputBtns1 = "<a href='#' onclick='abrirModal1(\"" . $idP . "\",\"" . $nP . "\")' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($regLinkRecPzsDanadas == 1 && (!empty($linkRecPzsDanadas))) {
		$outputBtns1 = "<a class='btn btn-outline-danger' id='siRegComImg'><i class='fa-solid fa-pencil'></i></a>";
	} else {
		$outputBtns1 = "<a class='btn btn-outline-danger' id='regLinkRecPzsDanadas' data-toggle='tooltip'  title='Sin Permiso'><i class='fa-solid fa-pencil'></i></a>";
	}

	// 4.1.2 Eliminar Link de Desarmado
	if ($Eliminado == 0) {
		$outputBtns = "<a class='btn btn-outline-danger' id='noComImg'><i class='fa-solid fa-ban'></i></a>";
	} else if ($super == 1  && (!empty($solPz)) and (empty($linkRecPzsDanadas))) {
		$outputBtns2 = "<a class='btn btn-outline-danger' id='noEliComImg'><i class='fa-solid fa-trash-alt'></i></a>";
	} else if ($super == 1  && $linkBorrado == 1 and $linkEnUso == 0) {
		$outputBtns2 = "<a class='btn btn-outline-danger' id='noEliComImg'><i class='fa-solid fa-trash-alt'></i></a>";
	} else if ($super == 1  && $linkEnUso == 1 and $solEnUso == 0) {
		$outputBtns2 = "<a href='#' onclick='abrirModal3(\"" . $idP . "\",\"" . $nP . "\",\"" . $row['id_recPzsDanadas'] . "\")' class='btn btn-secondary'><i class='fas fa-trash-alt'></i></a>";
	} else if ($eliLinkRecPzsDanadas == 1  && (!empty($solPz)) and (empty($linkRecPzsDanadas))) {
		$outputBtns2 = "<a class='btn btn-outline-danger' id='noEliComImg'><i class='fa-solid fa-trash-alt'></i></a>";
	} else if ($eliLinkRecPzsDanadas == 1  && $linkBorrado == 1 and $linkEnUso == 0) {
		$outputBtns2 = "<a class='btn btn-outline-danger' id='noEliComImg'><i class='fa-solid fa-trash-alt'></i></a>";
	} else if ($eliLinkRecPzsDanadas == 1  && $linkEnUso == 1 and $solEnUso == 0) {
		$outputBtns2 = "<a href='#' onclick='abrirModal3(\"" . $idP . "\",\"" . $nP . "\",\"" . $row['id_recPzsDanadas'] . "\")' class='btn btn-secondary'><i class='fas fa-trash-alt'></i></a>";
	} else {
		$outputBtns2 = "<a class='btn btn-outline-danger' id='eliLinkRecPzsDanadas' data-toggle='tooltip'  title='Sin Permiso'><i class='fa-solid fa-trash-alt'></i></a>";
	}

	// 4.1.3 Ver Generales Recepción de Piezas Dañadas
	if ($Eliminado == 0) {
		$outputBtns3 = "<a class='btn btn-outline-danger' id='eliminado'><i class='fa-solid fa-ban'></i></a>";
	} else if ($super == 1) {
		$outputBtns3 = "<a href='../update/formUpdateRecPzsDanadas.php?id={$idP}' target='_blank' class='btn btn-secondary'><i class='fa-solid fa-eye'></i></a>";
	} else if ($verGralRecPzsDanadas == 1) {
		$outputBtns3 = "<a href='../update/formUpdateRecPzsDanadas.php?id={$idP}' target='_blank' class='btn btn-secondary'><i class='fa-solid fa-eye'></i></a>";
	} else {
		$outputBtns3 = "<a class='btn btn-outline-danger' id='verGralRecPzsDanadas' data-toggle='tooltip'  title='Sin Permiso'><i class='fa-solid fa-eye'></i></a>";
	}

	// 4.1.3 Ver Generales Recepción de Piezas Dañadas (Consulta Rapida)
	if ($super == 1 or $verGralRecPzsDanadas == 1) {
		$outputBtns4 = "<a href='javascript:void(0)' class='btn btn-info' onclick='mostarDetalles(\"" . $row['id_proyecto'] . "\")'><i class='fa-solid fa-circle-info'></i></a>";
	} else {
		$outputBtns4 = "<a class='btn btn-outline-danger' id='verGralRecPzsDanadas' data-toggle='tooltip'  title='Sin Permiso'><i class='fa-solid fa-circle-info'></i></a>";
	}

	// 4.1.2.1 Enviar de Cotizando a Pre-Autorización 
	 if ($enUso == 0) {
	 	$outputBtns5 = "<a class='btn btn-outline-danger' id='enviarPreAuto' data-toggle='tooltip'  title='No Contiene Link de Desarmado'><i class='fa-solid fa-paper-plane'></i></a>";
	} else if ($super == 1 and $enUso == 1 AND empty($rowCompra['compra']) AND empty($soli))  {
		$outputBtns5 = "<a class='btn btn-outline-danger' id='enviarPreAuto' data-toggle='tooltip'  title='No Hay Solicitudes ni Registro de Compras'><i class='fa-solid fa-paper-plane'></i></a>";
	 } else if ($super == 1 and $enUso == 1 AND ($rowCompra['compra'] == $soli )) {
	 	$outputBtns5 = "<a href='#' class='btn btn-secondary' onclick='abrirModal4(\"" . $idP . "\",\"" . $nP . "\",\"" . $row['id_recPzsDanadas'] . "\",\"" . $id_solPzsDanadas . "\",\"" . $id_regCompraInicial . "\",\"".$fechaRegLink."\")'><i class='fa-solid fa-paper-plane'></i></a>";
	} else if ($super == 1 and $enUso == 1 AND ($rowCompra['compra'] <> $soli )) {
		$outputBtns5 = "<a class='btn btn-outline-danger' id='enviarPreAuto' data-toggle='tooltip'  title='Hay Solicitudes sin Registro de Compras'><i class='fa-solid fa-paper-plane'></i></a>";
	} else if ($enviarPreAuto == 1 and $enUso == 1 AND empty($rowCompra['compra']) OR empty($soli))  {
		$outputBtns5 = "<a class='btn btn-outline-danger' id='enviarPreAuto' data-toggle='tooltip'  title='No Hay Solicitudes ni Registro de Compras'><i class='fa-solid fa-paper-plane'></i></a>";
	} else if ($enviarPreAuto == 1 and $enUso == 1 AND ($rowCompra['compra'] == $soli )) {
		$outputBtns5 = "<a href='#' class='btn btn-secondary' onclick='abrirModal4(\"" . $idP . "\",\"" . $nP . "\",\"" . $row['id_recPzsDanadas'] . "\",\"" . $id_solPzsDanadas . "\",\"" . $id_regCompraInicial . "\",\"".$fechaRegLink."\")'><i class='fa-solid fa-paper-plane'></i></a>";
   } else if ($enviarPreAuto == 1 and $enUso == 1 AND ($rowCompra['compra'] <> $soli )) {
	   $outputBtns5 = "<a class='btn btn-outline-danger' id='enviarPreAuto' data-toggle='tooltip'  title='Hay Solicitudes sin Registro de Compras'><i class='fa-solid fa-paper-plane'></i></a>";
	 } else {
	 	$outputBtns5 = "<a class='btn btn-outline-danger' id='enviarPreAuto' data-toggle='tooltip'  title='Sin Permiso'><i class='fa-solid fa-paper-plane'></i></a>";
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
		"16" => (empty($row['asesor'])) ? "<h6><span class='badge badge-danger badge-pill'>Sin Asesor</span></h6>" : "<h6><span class='badge badge-success badge-pill'>{$row['asesor']}</span></h6>",
		"17" => (empty($row['tecArmador'])) ? "<h6><span class='badge badge-danger badge-pill'>Sin Técnico</span></h6>" : "<h6><span class='badge badge-success badge-pill'>{$row['tecArmador']}</span></h6>",
		"18" => $fechaRegLink,
		"19" => $fechaEliLink,
		"20" => "<div class='input-group input-group-sm mb-3'>
					<div class='input-group-prepend'>
						<button type='button' class='btn btn-secondary dropdown-toggle' data-toggle='dropdown'><i class='fas fa-cog'></i><span data-toogle='tooltip' title='Botónes de administración  tabla Recepción de Piezas Dañadas'> Acciones</span></button>
							<ul class='dropdown-menu text-center' style='columns:2; min-width:2em;'>
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='4.1.1 Registrar Link de Desarmado'>
										" . $outputBtns1 . "
									</span>
								</li>
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='4.1.2 Eliminar Link de Desarmado'>
										" . $outputBtns2 . "
									</span>
								</li>
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='4.1.3 Ver Generales Recepción de Piezas Dañadas'>
										" . $outputBtns3 . "
									</span>
								</li>
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='4.1.3 Ver Generales Recepción de Piezas Dañadas (Consulta Rapida)'>
										" . $outputBtns4 . "
									</span>
								</li>
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='4.1.2.1 Enviar de Cotizando a Pre-Autorización '>
										" . $outputBtns5 . "
									</span>
								</li>
							</ul>
						</div>
					</div>"

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
