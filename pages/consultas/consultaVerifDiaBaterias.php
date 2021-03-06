<?php
require '../components/query.php';
if ($super == 1 or $verTablaVerifDiaBat == 1) {

	$query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.estadoProyectoEliminado, 
	P.proyectoActivo, P.registroSolicitud, P.altaProyecto,
	V.placa, M.marca, Mo.modelo, A.anio, Co.color,                                    
	MAX(VD.fecha_hoyV) AS FV, MAX(VD.fecha_hoyS) AS FS, MAX(VD.id_verifDiaBat) AS id_verifDiaBat,
	MAX(VD.com) AS com, MAX(VD.sup) AS sup,
	ASE.asesor,
	MAX(I.com) AS comInc, MAX(I.sup) AS supInc, I.borrado, MAX(I.borrado) AS IncidenciaEli
	FROM proyectos P
	INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo
	INNER JOIN colores Co On V.id_color = Co.id_color
	INNER JOIN marcas M ON V.id_marca = M.id_marca
	INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
	INNER JOIN anios A ON V.id_anio = A.id_anio
	LEFT JOIN verificaciondiariabaterias VD ON P.id_proyecto = VD.id_proyecto
	LEFT JOIN comasesor CA ON P.id_proyecto = CA.id_proyecto
	LEFT JOIN asesores ASE ON CA.id_asesor = ASE.id_asesor
	LEFT JOIN incidencias I ON VD.id_verifDiaBat = I.id_verifDiaBat
	WHERE P.estadoProyectoEliminado = 1 AND P.proyectoActivo = 1 OR P.registroSolicitud = 1 OR P.altaProyecto = 1 GROUP BY P.id_proyecto  
ORDER BY P.nProyecto DESC";
} else {
	$query = "SELECT id_proyecto FROM proyectos WHERE id_proyecto = 0";
}

$resultado = mysqli_query($conexion, $query);
$cont = 0;



while ($row = $resultado->fetch_assoc()) {
	$outputBtns1 = "";
	$outputBtns2 = "";
	$outputBtns3 = "";
	$outputBtns4 = "";
	$outputBtns5 = "";
	$etapa = "";
	$validaEstadoProyecto = "";
	$incidencia = "";


	$idP = $row['id_proyecto'];
	$nP = $row['nProyecto'];
	$Eliminado = $row['estadoProyectoEliminado'];
	$asesor = $row['asesor'];
	$hoyV = $row['FV'];
	$fecha = new DateTime($hoyV);
	$fechaV = $fecha->format('d-m-Y');
	$hoyS = $row['FS'];
	$fecha = new DateTime($hoyS);
	$fechaS = $fecha->format('d-m-Y');
	$fecha_sistema;
	$id_verifDiaBat = $row['id_verifDiaBat'];

	// contador
	$querySumInc = "SELECT
	(SELECT COUNT(com) 
	FROM incidencias 
	WHERE com = 1  AND id_proyecto = $idP AND borrado = 0 ) AS sumaCom,
	(SELECT COUNT(sup)
	FROM incidencias
	WHERE sup = 1  AND id_proyecto = $idP AND borrado = 0) AS sumaSup";
	$resultadoInc = mysqli_query($conexion, $querySumInc);
	$rowSInc = $resultadoInc->fetch_assoc();
	$totalInc = $rowSInc['sumaCom'] + $rowSInc['sumaSup'];

	// Comprobacion
	$com = $row['com'];
	$sup = $row['sup'];
	// incidencias
	$comI = $row['comInc'];
	$supI = $row['supInc'];

	// Validar columna asesor 
	if ($asesor == '') {
		$validaAsesor = "<h6><span class='badge badge-danger badge-pill'>Sin Asesor</span></h6>";
	} else {
		$validaAsesor = "<h6><span class='badge badge-success badge-pill'>{$row['asesor']}</span></h6>";
	}

	// validar columna estado del proyecto
	if ($Eliminado == 0) {
		$validaEstadoProyecto = "<h6><span class='badge badge-danger badge-pill'>Eliminado</span></h6>";
	} else {
		$validaEstadoProyecto = "<h6><span class='badge badge-success badge-pill'>Activo</span></h6>";
	}

	// Etapa del proyecto
	$PA = $row['proyectoActivo'];
	$RS = $row['registroSolicitud'];
	$AP = $row['altaProyecto'];

	if ($PA == 1) {
		$etapa = "<h6><span class='badge badge-success badge-pill'>Proyecto Activo</span></h6>";
	} else if ($RS == 1) {
		$etapa = "<h6><span class='badge badge-success badge-pill'>Solicitud Alta</span></h6>";
	} else if ($AP == 1) {
		$etapa = "<h6><span class='badge badge-success badge-pill'>Alta Proyecto</span></h6>";
	} else {
		$etapa = "<h6><span class='badge badge-Warning badge-pill'>Sin Ubicaci??n</span></h6>";
	}

	// valida columna status comprobaci??n
	if (!empty($hoyV)) {
		if ($fechaV == $fecha_sistema)
			$validaCom = "<h6><span class='badge badge-success badge-pill'>Comprobado</span></h6>";
	}
	if ($fechaV <> $fecha_sistema) {
		$validaCom = "<h6><span class='badge badge-warning badge-pill parpadea'>Sin Comprobar</span></h6>";
	}
	if (empty($hoyV)) {
		$validaCom = "<h6><span class='badge badge-danger badge-pill'>Sin registro</span></h6>";
	}

	// valida columna status Supervision
	if (!empty($hoyS)) {
		if ($fechaS == $fecha_sistema)
			$validaSup = "<h6><span class='badge badge-success badge-pill'>Supervisado</span></h6>";
	}
	if ($fechaS <> $fecha_sistema) {
		$validaSup = "<h6><span class='badge badge-warning badge-pill parpadea'>Sin Supervisi??n</span></h6>";
	}
	if (empty($hoyS)) {
		$validaSup = "<h6><span class='badge badge-danger badge-pill'>Sin registro</span></h6>";
	}




	// Acciones ----------------------------------------------------------------------------------------- 
	// 2.3.3.1 Registro Comprobaci??n Verificaci??n Diaria Bater??as
	if ($Eliminado == 0) {
		$outputBtns1 = "<a class='btn btn-outline-danger' id='eliminado'><i class='fa-solid fa-ban'></i></a>";
	} else if ($super == 1 and ($hoyV  == '')) {
		$outputBtns1 = "<a href='#' onclick='abrirModal1(\"" . $idP . "\",\"" . $nP . "\")' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($super == 1 and ($fechaV <> $fecha_sistema)) {
		$outputBtns1 = "<a href='#' onclick='abrirModal1(\"" . $idP . "\",\"" . $nP . "\")' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($super == 1 and ($fechaV ==  $fecha_sistema)) {
		$outputBtns1 = "<a class='btn btn-outline-danger' id='yaRegistrado'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($regComVerifDiaBat == 1 and ($hoyV  == '')) {
		$outputBtns1 = "<a href='#' onclick='abrirModal1(\"" . $idP . "\",\"" . $nP . "\")' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($regComVerifDiaBat == 1 and ($fechaV <> $fecha_sistema)) {
		$outputBtns1 = "<a href='#' onclick='abrirModal1(\"" . $idP . "\",\"" . $nP . "\")' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($regComVerifDiaBat == 1 and ($fechaV ==  $fecha_sistema)) {
		$outputBtns1 = "<a class='btn btn-outline-danger' id='yaRegistrado'><i class='fa-solid fa-pencil'></i></a>";
	} else {
		$outputBtns1 = "<a class='btn btn-outline-danger' data-toggle='tooltip' data-placement='bottom' title='Sin Permiso' id='regComVerifDiaBat' style='cursor:no-drop'><i class='fa-solid fa-pencil'></i></a>";
	}


	// 2.3.3.2 Registro Supervisi??n de Comprobaci??n Diaria Bater??as 
	if ($Eliminado == 0) {
		$outputBtns2 = "<a class='btn btn-outline-danger' id='eliminado'><i class='fa-solid fa-ban'></i></a>";
	} else if ($super == 1 and ($hoyV  == '')) {
		$outputBtns2 = "<a class='btn btn-outline-danger' id='elimina'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($super == 1 and ($fechaV <> $fecha_sistema)) {
		$outputBtns2 = "<a class='btn btn-outline-danger' id='elimina'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($super == 1 and ($hoyS  == '')) {
		$outputBtns2 = "<a href='#' onclick='abrirModal2(\"" . $idP . "\",\"" . $nP . "\", \"" . $id_verifDiaBat . "\")' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($super == 1 and  ($fechaS <> $fecha_sistema)) {
		$outputBtns2 = "<a href='#' onclick='abrirModal2(\"" . $idP . "\",\"" . $nP . "\", \"" . $id_verifDiaBat . "\")' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($super == 1 and ($fechaS ==  $fecha_sistema)) {
		$outputBtns2 = "<a class='btn btn-outline-danger' id='yaRegistrado'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($regSupComVerifDiaBat == 1 and ($hoyV  == '')) {
		$outputBtns2 = "<a class='btn btn-outline-danger' id='elimina'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($regSupComVerifDiaBat == 1 and ($fechaV <> $fecha_sistema)) {
		$outputBtns2 = "<a class='btn btn-outline-danger' id='elimina'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($regSupComVerifDiaBat == 1 and ($hoyS  == '')) {
		$outputBtns2 = "<a href='#' onclick='abrirModal2(\"" . $idP . "\",\"" . $nP . "\", \"" . $id_verifDiaBat . "\")' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($regSupComVerifDiaBat == 1 and  ($fechaS <> $fecha_sistema)) {
		$outputBtns2 = "<a href='#' onclick='abrirModal2(\"" . $idP . "\",\"" . $nP . "\", \"" . $id_verifDiaBat . "\")' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($regSupComVerifDiaBat == 1 and ($fechaS ==  $fecha_sistema)) {
		$outputBtns2 = "<a class='btn btn-outline-danger' id='yaRegistrado'><i class='fa-solid fa-pencil'></i></a>";
	} else {
		$outputBtns2 = "<a class='btn btn-outline-danger' data-toggle='tooltip' data-placement='bottom' title='Sin Permiso' id='regSupComVerifDiaBat'><i class='fa-solid fa-pencil' style='cursor:no-drop'></i></a>";
	}

	// 2.3.3.3 Ver Incidencias 
	if (empty($comI) and empty($supI)) {
		$incidencia = "<button class='btn btn-sm btn-secondary' data-toggle='tooltip' data-placement='left' title='??Este N??mero de Proyecto no cuenta con Incidencias!' style='cursor:no-drop'><span class='badge badge-success'></span>Sin Incidencias</button>";
	} else if ($totalInc >= 1) {
		$incidencia = "<a href='javascript:void(0)' onclick='mostarIncidencias(\"" . $row['id_proyecto'] . "\")'><button type='button' class='btn btn-sm btn-danger' data-toggle='tooltip' data-placement='left' title='??Este N??mero de Proyecto Si cuenta con Incidencias, da un clic para ver informaci??n!'><span class='badge badge-light parpadea'></span>Incidencias</button></a>";

	} else if ($super == 1 or $verGralIncidencias == 1 and $totalInc <= 0) {
		$incidencia = "<a href='javascript:void(0)' onclick='mostarIncidencias(\"" . $row['id_proyecto'] . "\")'><button type='button' class='btn btn-sm btn-secondary' data-toggle='tooltip' data-placement='left' title='??Este N??mero de Proyecto cuenta con Incidencias Eliminadas, da un clic para ver informaci??n!'><span class='badge badge-light parpadea'></span>Sin Incidencias</button></a>";

	} else if ($super == 1 or $verGralIncidencias == 1 and ($comI == 1 or $supI == 1 and $row['borrado'] == 0)) {
		$incidencia = "<a href='javascript:void(0)' onclick='mostarIncidencias(\"" . $row['id_proyecto'] . "\")'><button type='button' class='btn btn-sm btn-danger' data-toggle='tooltip' data-placement='left' title='??Este N??mero de Proyecto Si cuenta con Incidencias, da un clic para ver informaci??n!'><span class='badge badge-light parpadea'></span>3Incidencias</button></a>";

	} else {
		$incidencia = "<a href='javascript:void(0)'><button type='button' class='btn btn-sm btn-danger' data-toggle='tooltip' data-placement='left' title='??Este N??mero de Proyecto Si cuenta con Incidencias, da un clic para ver informaci??n! Sin permiso' style='cursor:no-drop'><span class='badge badge-light parpadea'></span>Con Incidencias</button></a>";
	}


	// 2.3.3.4 Ver Generales Verificaci??n Diaria de Bater??as
	if ($super == 1) {
		$outputBtns3 = "<a href='../update/formUpdateVerifDiaBat.php?id={$idP}' target='_blank' class='btn btn-secondary'><i class='fa-solid fa-eye'></i></a>";
	} else if ($verGralVerDiaBat == 1) {
		$outputBtns3 = "<a href='../update/formUpdateVerifDiaBat.php?id={$idP}' target='_blank' class='btn btn-secondary'><i class='fa-solid fa-eye'></i></a>";
	} else {
		$outputBtns3 = "<a class='btn btn-outline-danger' id='verGralVerDiaBat' data-toggle='tooltip' data-placement='left' data-placement='left' title='Sin permiso' style='cursor:no-drop'><i class='fa-solid fa-eye'></i></a>";
	}

	// 2.3.3.4 Ver Generales Verificaci??n Diaria de Bater??as
	if ($super == 1) {
		$outputBtns4 = "<a href='javascript:void(0)' class='btn btn-info' onclick='mostrarVerGralVerDiaBat(\"" . $row['id_proyecto'] . "\")'><i class='fa-solid fa-circle-info'></i></a>";
	} else if ($verGralVerDiaBat == 1) {
		$outputBtns4 = "<a href='javascript:void(0)' class='btn btn-info' onclick='mostrarVerGralVerDiaBat(\"" . $row['id_proyecto'] . "\")'><i class='fa-solid fa-circle-info'></i></a>";
	} else {
		$outputBtns4 = "<a class='btn btn-outline-danger' id='verGralVerDiaBat' data-toggle='tooltip' data-placement='left' data-placement='left' title='Sin permiso' style='cursor:no-drop'><i class='fa-solid fa-circle-info'></i></a>";
	}

	$numInci = ($totalInc == 0) ? "<h6><span class='badge badge-success badge-pill'>0 Incidencias</span></h6>" : "<h6><span class='badge badge-danger badge-pill'>{$totalInc} Incidencias</span></h6>";


	$cont++;
	$datos[] = array(
		"0" => $cont,
		"1" => "<span class='badge badge-dark badge-pill'>{$row['id_proyecto']}</span>",
		"2" => $validaCom,
		"3" => $validaSup,
		"4" => $validaAsesor,
		"5" => $row['nProyecto'],
		"6" => $row['nOrden'],
		"7" => $row['marca'],
		"8" => $row['modelo'],
		"9" => $row['anio'],
		"10" => $row['placa'],
		"11" => $row['color'],
		"12" => $validaEstadoProyecto,
		"13" => $etapa,
		"14" => $incidencia,
		"15" => $numInci,
		"16" => "<div class='input-group input-group-sm mb-3'>
		<div class='input-group-prepend'>
			<button type='button' class='btn btn-secondary dropdown-toggle' data-toggle='dropdown'><i class='fas fa-cog'></i><span data-toogle='tooltip' title='Bot??nes de administraci??n  tabla Verificaci??n Diaria Veh??culos Activos'> Acciones</span>
			</button>
			<ul class='dropdown-menu text-center' style='columns: 2; min-width:2em;'>
				<li class='dropdown-item'>
					<span data-toggle='tooltip' title='2.3.3.1 Registro Comprobaci??n Verificaci??n Diaria Bater??as'>
						" . $outputBtns1 . "
					</span>
				</li>
				<li class='dropdown-item'>
					<span data-toggle='tooltip' title='2.3.3.2 Registro Supervisi??n de Comprobaci??n Diaria Bater??as'>
						" . $outputBtns2 . "
					</span>
				</li>
				<li class='dropdown-item'>
					<span data-toggle='tooltip' title='2.3.3.4 Ver Generales Verificaci??n Diaria de Bater??as'>
					" . $outputBtns3 . "
					</span>
				</li>
				<li class='dropdown-item'>
					<span data-toggle='tooltip' title='2.3.3.4 Ver Generales Verificaci??n Diaria de Bater??as (consulta Rapida)'>
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
	"iTotalRecords" => count($datos), /* env??a el total de columnas a la datatable */
	"iTotalDisplayRecords" => count($datos), /* envia el total de filas a visualizar */
	"aaData" => $datos /* env??a el arreglo completo que se llen?? con el while */
);
echo json_encode($resultados);
