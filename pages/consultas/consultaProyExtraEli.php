<?php
require '../components/query.php';
if ($super == 1 or $verTablaRegProyExtraEli == 1) {

	$query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.estadoProyectoEliminado, P.proyectoActivo, P.valorVenta,
	P.registroSolicitud, P.altaProyecto, P.proyCodIdentificador, P.superCodIdentificador, P.proyExtra,
	V.placa, M.marca, Mo.modelo, A.anio, Co.color,
	PE.id_proyExtra, PE.folioProyExtra, PE.valorProyExtra, PE.linkAutorWhats, PE.borrado, PE.super AS supervision,
    SP.textSupervision, SP.id_comSuperProyExtra, SS.semana
	FROM proyectos P 
	INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
	INNER JOIN colores Co ON V.id_color = Co.id_color
	INNER JOIN marcas M ON V.id_marca = M.id_marca 
	INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo 
	INNER JOIN anios A ON V.id_anio = A.id_anio 
	INNER JOIN proyextras PE ON P.id_proyecto = PE.id_proyecto
    LEFT JOIN comsupervisionproyextra SP ON PE.id_proyExtra = SP.id_proyExtra
    INNER JOIN semanasolalta SS ON PE.id_semSolAlta = SS.id_semSolAlta
    WHERE PE.borrado = 1 AND PE.proyExtraCapt = 1 OR P.estadoProyectoEliminado = 0
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
	$supervision = $row['supervision'];


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

	//  5.3.1 Ver Generales Proyecto Extra Eliminado
	 if ($super == 1) {
		$outputBtns4 = "<a href='javascript:void(0)' class='btn btn-secondary' onclick='mostarDetalles3(\"" . $row['id_proyecto'] . "\",\"" . $id_proyExtra . "\")'><i class='fa-solid fa-eye'></i></a>";
	} else if ($verGralProyExtraEli  == 1) {
		$outputBtns4 = "<a href='javascript:void(0)' class='btn btn-secondary' onclick='mostarDetalles(\"" . $row['id_proyecto'] . "\",\"" . $id_proyExtra . "\")'><i class='fa-solid fa-eye'></i></a>";
	} else {
		$outputBtns4 = "<a href='#' class='btn btn-outline-danger' id='verGralProyExtraEli' data-toggle='tooltip' data-placement='left' title='Sin Permiso'><i class='fa-solid fa-eye'></i></a>";
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
		"9" => "<strong>{$row['semana']}</strong>",
		"10" => ($Eliminado == 0) ? '<h6><span class="badge badge-danger badge-pill">Eliminado</span></h6>' : '<h6><span class="badge badge-success badge-pill">Activo</span></h6>',
		"11" => $etapa,
		"12" => ($row['borrado'] == 1) ? '<h6><span class="badge badge-danger badge-pill">Eliminado</span></h6>' : '<h6><span class="badge badge-success badge-pill">Activo</span></h6>',
		"13" => $row['valorVenta'],
		"14" => "<strong>{$folioProyExtra}</strong>",
		"15" => $valorProyExtra,
		"16" => (empty($linkAutorWhats)) ? '<h6><span class="badge badge-danger badge-pill">N/A</span></h6>' : '<h6><span class="badge badge-success badge-pill">Registrado</span></h6>',
		"17" => ($row['textSupervision'] == 0) ? '<h6><span class="badge badge-danger badge-pill">No Supervisado</span></h6>' : '<h6><span class="badge badge-success badge-pill">Supervisado</span></h6>',
		"18" => "<div class='input-group input-group-sm mb-3'>
						<div class='input-group-prepend'>
							<button type='button' class='btn btn-secondary dropdown-toggle' data-toggle='dropdown'><i class='fas fa-cog'></i><span data-toogle='tooltip' title='Botónes de administración  tabla Solicitud Alta'> Acciones</span>
							</button>
							<ul class='dropdown-menu' style='columns:1; min-width:2em;'>
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='5.3.1 Ver Generales Proyecto Extra Eliminado'>
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
