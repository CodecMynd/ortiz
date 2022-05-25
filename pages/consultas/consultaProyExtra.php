<?php
require '../components/query.php';
if ($super == 1 or $verTablaRegProyExtra == 1) {

	$query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.estadoProyectoEliminado, P.proyectoActivo, P.registroSolicitud, P.altaProyecto, P.proyCodIdentificador, P.superCodIdentificador, P.proyExtra,
	V.placa, M.marca, Mo.modelo, A.anio, Co.color,
	PE.id_proyExtra, PE.folioProyExtra, PE.valorProyExtra, PE.linkAutorWhats, PE.borrado, PE.super AS supervision,
    SP.textSupervision, SP.id_comSuperProyExtra
	FROM proyectos P 
	INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
	INNER JOIN colores Co ON V.id_color = Co.id_color
	INNER JOIN marcas M ON V.id_marca = M.id_marca 
	INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo 
	INNER JOIN anios A ON V.id_anio = A.id_anio 
	INNER JOIN proyextras PE ON P.id_proyecto = PE.id_proyecto
    LEFT JOIN comsupervisionproyextra SP ON PE.id_proyExtra = SP.id_proyExtra
	ORDER BY PE.id_proyExtra DESC";
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
	$id_proyExtra = $row['id_proyExtra'];
	$folioProyExtra = $row['folioProyExtra'];
	$valorProyExtra = $row['valorProyExtra'];
	$linkAutorWhats = $row['linkAutorWhats'];
	$Eliminado = $row['estadoProyectoEliminado'];
	$id_comSuperProyExtra = $row['id_comSuperProyExtra'];
	$borrado = $row['borrado'];
	$textSupervision = $row['textSupervision'];
	$row['supervision'];


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

	// 5.1.2 Eliminar Registro Proyecto Extra
	if ($Eliminado == 0) {
		$outputBtns1 = "<a class='btn btn-outline-danger' id='noComImg' data-toggle='tooltip' data-placement='left' title='Proyecto Eliminado'><i class='fa-solid fa-ban'></i></a>";
	}else if ($super == 1 AND $row['borrado'] == 0 ) {
		$outputBtns1 = "<a href='#' onclick='abrirModal1(\"" . $idP . "\",\"" . $nP . "\",\"" . $id_proyExtra . "\",\"" . $folioProyExtra . "\")' class='btn btn-secondary'><i class='fas fa-trash-alt'></i></a>";
	} else if($super == 1 AND $row['borrado'] == 1){
		$outputBtns1 = "<a class='btn btn-outline-danger' id='eliRegSolAltProy' data-toggle='tooltip' data-placement='left' title='Ya Fue Eliminado'><i class='fas fa-trash-alt'></i></a>";

	} else if ($eliProyExtra == 1 AND $row['borrado'] == 0) {
		$outputBtns1 = "<a href='#' onclick='abrirModal1(\"" . $idP . "\",\"" . $nP . "\",\"" . $id_proyExtra . "\",\"" . $folioProyExtra . "\")' class='btn btn-secondary'><i class='fas fa-trash-alt'></i></a>";
	} else if($eliProyExtra == 1 AND $row['borrado'] == 1){
		$outputBtns1 = "<a class='btn btn-outline-danger' id='eliRegSolAltProy' data-toggle='tooltip' data-placement='left' title='Ya Fue Eliminado'><i class='fas fa-trash-alt'></i></a>";
	}else{
		$outputBtns1 = "<a class='btn btn-outline-danger' id='eliRegSolAltProy' data-toggle='tooltip' data-placement='left' title='Sin Permiso'><i class='fas fa-trash-alt'></i></a>";
	}

	//  5.1.3 Registrar Supervisión Proyecto Extra
	if ($Eliminado == 0) {
		$outputBtns2 = "<a class='btn btn-outline-danger' id='noComImg' data-toggle='tooltip' data-placement='left' title='Proyecto Eliminado'><i class='fa-solid fa-ban'></i></a>";
	} else if($super == 1 AND $row['borrado'] == 1){
		$outputBtns2 = "<a class='btn btn-outline-danger' id='eliRegSolAltProy' data-toggle='tooltip' data-placement='left' title='Ya Fue Eliminado'><i class='fa-solid fa-pencil'></i></a>";	
	}else if ($super == 1 AND $row['supervision'] == 1) {
		$outputBtns2 = "<a href='#' class='btn btn-outline-danger' data-toggle='tooltip' data-placement='left' title='Ya tiene Registro'><i class='fa-solid fa-pencil'></i></a>";
	}else if ($super == 1 AND $row['supervision'] == 0) {
		$outputBtns2 = "<a href='#' class='btn btn-secondary' onclick='abrirModal2(\"" . $idP . "\",\"" . $nP . "\", \"".$folioProyExtra."\",\"".$id_proyExtra."\")'><i class='fa-solid fa-pencil'></i></a>";

	} else if($regSuperProyExtra == 1 AND $row['borrado'] == 1){
		$outputBtns2 = "<a class='btn btn-outline-danger' id='eliRegSolAltProy' data-toggle='tooltip' data-placement='left' title='Ya Fue Eliminado'><i class='fa-solid fa-pencil'></i></a>";
	}else if ($regSuperProyExtra == 1 AND $row['supervision'] == 1) {
		$outputBtns2 = "<a href='#' class='btn btn-outline-danger' data-toggle='tooltip' data-placement='left' title='Ya tiene Registro'><i class='fa-solid fa-pencil'></i></a>";
	}else if ($regSuperProyExtra == 1 AND $row['supervision'] == 0) {
		$outputBtns2 = "<a href='#' class='btn btn-secondary' onclick='abrirModal2(\"" . $idP . "\",\"" . $nP . "\", \"".$folioProyExtra."\",\"".$id_proyExtra."\")'><i class='fa-solid fa-pencil'></i></a>";
	} else {
		$outputBtns2 = "<a href='#' class='btn btn-outline-danger' id='verGralProyExtra' data-toggle='tooltip' data-placement='left' title='Sin Permiso'><i class='fa-solid fa-pencil'></i></a>";
	}

	//  5.1.4 Elimnar Supervisión Proyecto Extra
	if ($Eliminado == 0) {
		$outputBtns3 = "<a class='btn btn-outline-danger' id='noComImg' data-toggle='tooltip' data-placement='left' title='Proyecto Eliminado'><i class='fa-solid fa-ban'></i></a>";
	} else if($super == 1 AND $row['borrado'] == 1){
		$outputBtns3 = "<a class='btn btn-outline-danger' id='eliRegSolAltProy' data-toggle='tooltip' data-placement='left' title='Ya Fue Eliminado'><i class='fas fa-trash-alt'></i></a>";	
	}else if ($super == 1 AND $row['supervision'] == 1) {
		$outputBtns3 = "<a href='javascript:void(0)' class='btn btn-secondary' onclick='abrirModal3(\"" . $id_proyExtra . "\",\"".$textSupervision."\",\"" . $id_comSuperProyExtra . "\",\"" . $nP . "\")'><i class='fas fa-trash-alt'></i></a>";
	}else if ($super == 1 AND $row['supervision'] == 0){
		$outputBtns3 = "<a href='#' class='btn btn-outline-danger' id='verGralProyExtra' data-toggle='tooltip' data-placement='left' title='Sin Supervisar'><i class='fas fa-trash-alt'></i></a>";
		
	} else if($eliSuperProyExtra == 1 AND $row['borrado'] == 1){
		$outputBtns3 = "<a class='btn btn-outline-danger' id='eliRegSolAltProy' data-toggle='tooltip' data-placement='left' title='Ya Fue Eliminado'><i class='fas fa-trash-alt'></i></a>";	
	}else if ($eliSuperProyExtra == 1 AND $row['supervision'] == 0){
		$outputBtns3 = "<a href='#' class='btn btn-outline-danger' id='verGralProyExtra' data-toggle='tooltip' data-placement='left' title='Sin Supervisar'><i class='fas fa-trash-alt'></i></a>";
	}else if ($eliSuperProyExtra == 1 AND $row['supervision'] == 1) {
		$outputBtns3 = "<a href='javascript:void(0)' class='btn btn-secondary' onclick='abrirModal3(\"" . $id_proyExtra . "\",\"".$textSupervision."\",\"" . $id_comSuperProyExtra . "\",\"" . $nP . "\")'><i class='fas fa-trash-alt'></i></a>";
	} else {
		$outputBtns3 = "<a href='#' class='btn btn-outline-danger' id='eliSuperProyExtra' data-toggle='tooltip' data-placement='left' title='Sin Permiso'><i class='fas fa-trash-alt'></i></a>";
	}

	//  5.1.5 Ver Generales Proyecto Extra
	if ($Eliminado == 0) {
		$outputBtns3 = "<a class='btn btn-outline-danger' id='noComImg' data-toggle='tooltip' data-placement='left' title='Proyecto Eliminado'><i class='fa-solid fa-ban'></i></a>";
	}else if ($super == 1) {
		$outputBtns4 = "<a href='javascript:void(0)' class='btn btn-secondary' onclick='mostarDetalles(\"" . $row['id_proyecto'] . "\",\"" . $id_proyExtra . "\")'><i class='fa-solid fa-eye'></i></a>";
	} else if ($verGralProyExtra  == 1) {
		$outputBtns4 = "<a href='javascript:void(0)' class='btn btn-secondary' onclick='mostarDetalles(\"" . $row['id_proyecto'] . "\",\"" . $id_proyExtra . "\")'><i class='fa-solid fa-eye'></i></a>";
	} else {
		$outputBtns4 = "<a href='#' class='btn btn-outline-danger' id='verGralProyExtra' data-toggle='tooltip' data-placement='left' title='Sin Permiso'><i class='fa-solid fa-eye'></i></a>";
	}
	
// Supervisado
if($row['textSupervision'] == 0)

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
		"10" => $etapa,
		"11" => ($row['borrado'] == 1) ? '<h6><span class="badge badge-danger badge-pill">Eliminado</span></h6>' : '<h6><span class="badge badge-success badge-pill">Activo</span></h6>',
		"12" => "<strong>{$folioProyExtra}</strong>",
		"13" => $valorProyExtra,
		"14" => (empty($linkAutorWhats)) ? '<h6><span class="badge badge-danger badge-pill">N/A</span></h6>' : '<h6><span class="badge badge-success badge-pill">Registrado</span></h6>',
		"15" => ($row['textSupervision'] == 0) ? '<h6><span class="badge badge-danger badge-pill">No Supervisado</span></h6>' : '<h6><span class="badge badge-success badge-pill">Supervisado</span></h6>',
		"16" => "<div class='input-group input-group-sm mb-3'>
						<div class='input-group-prepend'>
							<button type='button' class='btn btn-secondary dropdown-toggle' data-toggle='dropdown'><i class='fas fa-cog'></i><span data-toogle='tooltip' title='Botónes de administración  tabla Solicitud Alta'> Acciones</span>
							</button>
							<ul class='dropdown-menu text-center' style='columns:2; min-width:2em;'>
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='5.1.2 Elimniar Registro Proyecto Extra'>
										" . $outputBtns1 . "
									</span>
								</li>
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='5.1.3 Registrar Supervisión Proyecto Extra'>
										" . $outputBtns2 . "
									</span>
								</li>
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='5.1.4 Eliminar Supervisión Proyecto Extra'>
										" . $outputBtns3 . "
									</span>
								</li>
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='5.1.5 Ver Generales Proyecto Extra'>
										" . $outputBtns4 . "
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
