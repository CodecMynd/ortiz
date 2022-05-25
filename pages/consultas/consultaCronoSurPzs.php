<?php
require '../components/query.php';
if ($super == 1 or $verTablaCronoSurPzs == 1) {

	$query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.estadoProyectoEliminado,
	V.placa, M.marca, Mo.modelo, A.anio, Co.color,
    ASE.asesor,
    R.fecha_creacion AS fechaRegLink,
    SP.folio_solicitud, SP.id_solPzsDanadas,
    EP.id_entregaPz, EP.com, EP.sup, EP.fecha_regCom, EP.fecha_regSup, EP.folioEntregaPz, EP.borrado
	FROM proyectos P
	INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo
	INNER JOIN colores Co On V.id_color = Co.id_color
	INNER JOIN marcas M ON V.id_marca = M.id_marca
	INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
	INNER JOIN anios A ON V.id_anio = A.id_anio
	LEFT JOIN comasesor CA ON P.id_proyecto = CA.id_proyecto
	LEFT JOIN asesores ASE ON CA.id_asesor = ASE.id_asesor
    INNER JOIN recpzsdanadas R ON P.id_proyecto = R.id_proyecto
    INNER JOIN solpzsdanadas SP ON P.id_proyecto = SP.id_proyecto
    LEFT JOIN entregapzs EP ON sp.id_solPzsDanadas = EP.id_solPzsDanadas
	WHERE P.estadoProyectoEliminado = 1 AND P.proyectoActivo = 1
	ORDER BY P.nProyecto AND EP.id_entregaPz DESC";
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
	$id_solPzsDanadas = $row['id_solPzsDanadas'];
	$Eliminado = $row['estadoProyectoEliminado'];
	$asesor = $row['asesor'];
	$com = $row['com'];
	$sup = $row['sup'];
	$id_entregaPz = $row['id_entregaPz'];

	// Validar columna asesor 
	if ($asesor == '') {
		$validaAsesor = "<h6><span class='badge badge-danger badge-pill'>Sin Asesor</span></h6>";
	} else {
		$validaAsesor = "<h6><span class='badge badge-success badge-pill'>{$row['asesor']}</span></h6>";
	}

	// Registro de Entrega
	if ($com == 1) {
		$entregaPz = "<h6><span class='badge badge-success badge-pill'>Registrado</span></h6>";
	} else {
		$entregaPz = "<h6><span class='badge badge-danger badge-pill'>Sin Registro</span></h6>";
	}

	// Supervisión Registro de Entrega
	if ($sup == 1) {
		$superEntregaPz = "<h6><span class='badge badge-success badge-pill'>Registrado</span></h6>";
	} else {
		$superEntregaPz = "<h6><span class='badge badge-danger badge-pill'>Sin Registro</span></h6>";
	}

	// fecha reg
	if (empty($row['fecha_regCom'])) {
		$fecha_regCom = 'Sin Registro';
	} else if ($row['fecha_regCom'] == '0000-00-00 00:00:00') {
		$fecha_regCom = 'Sin Registro';
	} else {
		$fecha_regCom = "<strong>{$row['fecha_regCom']}</strong>";
	}

	// fecha reg
	if (empty($row['fecha_regSup'])) {
		$fecha_regSup = 'Sin Registro';
	} else if ($row['fecha_regSup'] == '0000-00-00 00:00:00') {
		$fecha_regSup = 'Sin Registro';
	} else {
		$fecha_regSup = "<strong>{$row['fecha_regSup']}</strong>";
	}

	// 4.3.1 Registro Entrega de Pieza
	if ($Eliminado == 0) {
		$outputBtns1 = "<a class='btn btn-outline-danger' data-toggle='tooltip' data-placement='top' title='Proyecto Eliminado'><i class='fa-solid fa-ban'></i></a>";
	} else if ($super == 1 and $com == 0) {
		$outputBtns1 = "<a href='#' onclick='abrirModal1(\"" . $idP . "\",\"" . $nP . "\",\"" . $id_solPzsDanadas . "\")' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($super == 1 and $com == 1) {
		$outputBtns1 = "<a class='btn btn-outline-danger' data-toggle='tooltip' data-placement='top' title='Entrega de Pieza ya Registrada'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($regEntregaPz == 1 and $com == 0) {
		$outputBtns1 = "<a href='#' onclick='abrirModal1(\"" . $idP . "\",\"" . $nP . "\",\"" . $id_solPzsDanadas . "\")' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($regEntregaPz == 1 and $com == 1) {
		$outputBtns1 = "<a class='btn btn-outline-danger' data-toggle='tooltip' data-placement='top' title='Entrega de Pieza ya Registrada'><i class='fa-solid fa-pencil'></i></a>";
	} else {
		$outputBtns1 = "<a class='btn btn-outline-danger' data-toggle='tooltip' data-placement='top' title='Sin Permisos'><i class='fa-solid fa-pencil'></i></a>";
	}

	// 4.3.2 Supervisión Registro Entrega de Pieza
	if ($Eliminado == 0) {
		$outputBtns2 = "<a class='btn btn-outline-danger' data-toggle='tooltip' data-placement='top' title='Proyecto Eliminado'><i class='fa-solid fa-ban'></i></a>";
	} else if ($super == 1 and $com == 0 and $sup = 1 or $sup == 1) {
		$outputBtns2 = "<a class='btn btn-outline-danger' data-toggle='tooltip' data-placement='top' title=' 4.3.2 Supervisión Registro Entrega de Pieza'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($super == 1 and $com == 1 and $sup == 0) {
		$outputBtns2 = "<a href='#' onclick='abrirModal2(\"" . $idP . "\",\"" . $nP . "\",\"" . $id_solPzsDanadas . "\",\"" . $id_entregaPz . "\")' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($regSuperEntragaPz == 1 and $com == 0) {
		$outputBtns2 = "<a href='#' onclick='abrirModal2(\"" . $idP . "\",\"" . $nP . "\",\"" . $id_solPzsDanadas . "\",\"" . $id_entregaPz . "\")' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($regSuperEntragaPz == 1 and $com == 1) {
		$outputBtns2 = "<a class='btn btn-outline-danger' data-toggle='tooltip' data-placement='top' title=' 4.3.2 Supervisión Registro Entrega de Pieza'><i class='fa-solid fa-pencil'></i></a>";
	} else {
		$outputBtns2 = "<a class='btn btn-outline-danger' data-toggle='tooltip' data-placement='top' title='Sin Permisos'><i class='fa-solid fa-pencil'></i></a>";
	}

	//4.3.3 Eliminar Registro Entrega de Pieza
	if ($Eliminado == 0) {
		$outputBtns = "<a class='btn btn-outline-danger' id='noComImg'><i class='fa-solid fa-ban'></i></a>";
	} else if ($super == 1  and $com == 0) {
		$outputBtns3 = "<a class='btn btn-outline-danger' id='noEliComImg'><i class='fa-solid fa-trash-alt'></i></a>";
	} else if ($super == 1  and $com == 1 and $sup == 1) {
		$outputBtns3 = "<a class='btn btn-outline-danger' id='noEliComImg'><i class='fa-solid fa-trash-alt'></i></a>";
	} else if ($super == 1  and $com == 1 and $sup == 0) {
		$outputBtns3 = "<a href='#' onclick='abrirModal3(\"" . $idP . "\",\"" . $nP . "\",\"" . $id_entregaPz . "\")' class='btn btn-secondary'><i class='fas fa-trash-alt'></i></a>";
	} else if ($eliRegEntregaPz == 1  and $com == 0) {
		$outputBtns3 = "<a class='btn btn-outline-danger' id='noEliComImg'><i class='fa-solid fa-trash-alt'></i></a>";
	} else if ($eliRegEntregaPz == 1  and $com == 1 and $sup == 1) {
		$outputBtns3 = "<a class='btn btn-outline-danger' id='noEliComImg'><i class='fa-solid fa-trash-alt'></i></a>";
	} else if ($eliRegEntregaPz == 1  and $com == 1 and $sup == 0) {
		$outputBtns3 = "<a href='#' onclick='abrirModal3(\"" . $idP . "\",\"" . $nP . "\",\"" . $id_entregaPz . "\")' class='btn btn-secondary'><i class='fas fa-trash-alt'></i></a>";
	} else {
		$outputBtns3 = "<a class='btn btn-outline-danger' id='eliRegEntregaPz' data-toggle='tooltip' data-placement='top' title='Sin Permisos'><i class='fa-solid fa-trash-alt'></i>4</a>";
	}

	// 4.3.4 Eliminar Supervisión Registro Entrega de Pieza
	if ($Eliminado == 0) {
		$outputBtns = "<a class='btn btn-outline-danger' id='noComImg'><i class='fa-solid fa-ban'></i></a>";
	} else if ($super == 1  and $com == 0) {
		$outputBtns4 = "<a class='btn btn-outline-danger' id='noEliComImg'><i class='fa-solid fa-trash-alt'></i></a>";
	} else if ($super == 1  and $com == 1 and $sup == 0) {
		$outputBtns4 = "<a class='btn btn-outline-danger' id='noEliComImg'><i class='fa-solid fa-trash-alt'></i></a>";
	} else if ($super == 1  and $com == 1 and $sup == 1) {
		$outputBtns4 = "<a href='#' onclick='abrirModal4(\"" . $idP . "\",\"" . $nP . "\",\"" . $id_entregaPz . "\")' class='btn btn-secondary'><i class='fas fa-trash-alt'></i></a>";
	} else if ($eliRegSuperEntragaPz == 1  and $com == 0) {
		$outputBtns4 = "<a class='btn btn-outline-danger' id='noEliComImg'><i class='fa-solid fa-trash-alt'></i></a>";
	} else if ($eliRegSuperEntragaPz == 1  and $com == 1 and $sup == 0) {
		$outputBtns4 = "<a class='btn btn-outline-danger' id='noEliComImg'><i class='fa-solid fa-trash-alt'></i></a>";
	} else if ($eliRegSuperEntragaPz == 1  and $com == 1 and $sup == 1) {
		$outputBtns4 = "<a href='#' onclick='abrirModal4(\"" . $idP . "\",\"" . $nP . "\",\"" . $id_entregaPz . "\")' class='btn btn-secondary'><i class='fas fa-trash-alt'></i></a>";
	} else {
		$outputBtns4 = "<a class='btn btn-outline-danger' id='eliRegSuperEntragaPz' data-toggle='tooltip' data-placement='top' title='Sin Permisos'><i class='fa-solid fa-trash-alt'></i>4</a>";
	}

	// 4.3.5 Ver Generales Registro Entrega de Pieza
	if ($Eliminado == 0) {
		$outputBtns5 = "<a class='btn btn-outline-danger' id='noComImg' data-toggle='tooltip' data-placement='left' title='Proyecto Eliminado'><i class='fa-solid fa-ban'></i></a>";
	}else if ($super == 1) {
		$outputBtns5 = "<a href='javascript:void(0)' class='btn btn-secondary' onclick='mostarDetalles(\"" . $id_entregaPz . "\")'><i class='fa-solid fa-eye'></i></a>";
	} else if ($verGralEntregaPz  == 1) {
		$outputBtns5 = "<a href='javascript:void(0)' class='btn btn-secondary' onclick='mostarDetalles(\"" . $id_entregaPz . "\")'><i class='fa-solid fa-eye'></i></a>";
	} else {
		$outputBtns5 = "<a href='#' class='btn btn-outline-danger' id='verGralEntregaPz' data-toggle='tooltip' data-placement='left' title='Sin Permiso'><i class='fa-solid fa-eye'></i></a>";
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
		"9" => $validaAsesor,
		"10" => ($Eliminado == 0) ? '<h6><span class="badge badge-danger badge-pill">Eliminado</span></h6>' : '<h6><span class="badge badge-success badge-pill">Activo</span></h6>',
		"11" => "<strong>{$row['folio_solicitud']}</strong>",
		"12" => $entregaPz,
		"13" => $superEntregaPz,
		"14" => "<strong>{$row['fechaRegLink']}</strong>",
		"15" => $fecha_regCom,
		"16" => $fecha_regSup,
		"17" => (empty($row['folioEntregaPz'])) ? 'Sin Registro' : "<strong>{$row['folioEntregaPz']}</strong>",
		"18" => "<div class='input-group input-group-sm mb-3'>
					<div class='input-group-prepend'>
						<button type='button' class='btn btn-secondary dropdown-toggle' data-toggle='dropdown'><i class='fas fa-cog'></i><span data-toogle='tooltip' title='Botónes de administración  tabla Recepción de Piezas Dañadas'> Acciones</span></button>
							<ul class='dropdown-menu text-center' style='columns:2; min-width:2em;'>
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='4.3.1 Registro Entrega de Pieza'>
										" . $outputBtns1 . "
									</span>
								</li>
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='4.3.2 Supervisión Registro Entrega de Pieza'>
										" . $outputBtns2 . "
									</span>
								</li>
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='4.3.3 Eliminar Registro Entrega de Pieza'>
										" . $outputBtns3 . "
									</span>
								</li>
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='4.3.4 Eliminar Supervisión Registro Entrega de Pieza'>
										" . $outputBtns4 . "
									</span>
								</li>
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='4.3.5 Ver Generales Registro Entrega de Pieza'>
										" . $outputBtns5 . "
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
