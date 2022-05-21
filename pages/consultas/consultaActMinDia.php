<?php
require '../components/query.php';
if($super == 1 OR $verTablaActMinDia == 1){

$query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.comActMinDia, P.estadoProyectoEliminado, P.comSuperActMinDia,
V.placa, M.marca, Mo.modelo, A.anio, Co.color,                                    
MAX(AM.fecha_hoyV) AS FV, MAX(AM.fecha_hoyS) AS FS, MAX(AM.id_ActMinDiaria) AS id_ActMinDiaria,
ASE.asesor, T.top,
AST.id_aseTec, AST.aseTec
FROM proyectos P
INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo
INNER JOIN colores Co On V.id_color = Co.id_color
INNER JOIN marcas M ON V.id_marca = M.id_marca
INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
INNER JOIN anios A ON V.id_anio = A.id_anio
LEFT JOIN actmindiaria AM ON P.id_proyecto = AM.id_proyecto
LEFT JOIN comasesor CA ON P.id_proyecto = CA.id_proyecto
LEFT JOIN asesores ASE ON CA.id_asesor = ASE.id_asesor
LEFT JOIN tops T ON P.id_proyecto = T.id_proyecto
LEFT JOIN asesoramientostecnicos AST ON P.id_proyecto = AST.id_proyecto
WHERE P.proyectoActivo = 1 AND P.estadoProyectoEliminado = 1 OR P.registroSolicitud = 1 GROUP BY P.id_proyecto  
ORDER BY nProyecto  DESC";
}else{
	$query = "SELECT id_proyecto FROM proyectos WHERE id_proyecto = 0";
}

$resultado = mysqli_query($conexion, $query);
$cont = 0;

while ($row = $resultado->fetch_assoc()) {
	$validaAsesor = "";
	$validaEstadoProyecto = "";
	$validaCom = "";
	$validaSup = "";
	$validaUltReg = "";
	$outputBtns1 = "";
	$outputBtns2 = "";
	$outputBtns3 = "";
	$outputBtns4 = "";
	$outputBtns5 = "";

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
	$id_ActMinDiaria = $row['id_ActMinDiaria'];
	$top = $row['top'];
	$id_aseTec = $row['id_aseTec'];
	$aseTec = $row['aseTec'];


	// Validar columna asesor 
	if ($asesor == '') {
		$validaAsesor = "<h6><span class='badge badge-danger badge-pill'>Sin Asesor</span></h6>";
	} else {
		$validaAsesor = "<h6><span class='badge badge-success badge-pill'>{$row['asesor']}</span></h6>";
	}

	// valida columna Top
	// if ($top == 0) {
	// 	$validaTop = "<h6><span class='badge badge-ligth badge-pill top' data-toggle='tooltip' data-placement='bottom' title='Este Proyecto no es Top'><i class='fa-solid fa-star fa-2x' style='color:#CCCCCC'></i></span></h6>";
	// } else if($top == 1){
	// 	$validaTop = "<h6><a href='../admin/crudAsignacionTop.php' data-toggle='tooltip' data-placement='bottom' title='ir a: Tabla 2.3.5 Asignación de Top'><span class='badge badge-ligth badge-pill top'><i class='fa-solid fa-star fa-2x' style='color:#28A745'></i></span></a></h6>";
	// }

		// valida columna Top
		if ($top == 0) {
			$validaTop = "<h6><span class='badge badge-danger badge-pill top' data-toggle='tooltip' data-placement='bottom' title='Este Proyecto no es Top'>No es Top</span></h6>";
		} else {
			$validaTop = "<h6><span class='badge badge-success badge-pill top' data-toggle='tooltip' data-placement='bottom' title='Este Proyecto es Top'>Es Top</span></h6>";
		}

	// valida columna aseTec
	if ($aseTec == 0) {
		$validaAseTec = "<h6><span class='badge badge-danger badge-pill' data-placement='bottom'>Sin Registro</span></h6>";
	} else {
		$validaAseTec = "<h6><a href='../admin/crudAsesoramientoTecnico.php' data-toggle='tooltip' data-placement='bottom' title='ir a: Tabla 2.3.6 Programa de Asesoramiento Técnico'><span class='badge badge-success badge-pill' data-placement='bottom' >Con Asesoramiento</span></a></h6>";
	}

	// validar columna estado del proyecto
	if ($Eliminado == 0) {
		$validaEstadoProyecto = "<h6><span class='badge badge-danger badge-pill'>Eliminado</span></h6>";
	} else {
		$validaEstadoProyecto = "<h6><span class='badge badge-success badge-pill'>Activo</span></h6>";
	}

	// valida columna status comprobación
	if (!empty($hoyV)) {
		if ($fechaV == $fecha_sistema)
			$validaCom = "<h6><span class='badge badge-success badge-pill'>Comprobado</span></h6>";
	}
	if ($fechaV <> $fecha_sistema) {
		$validaCom = "<h6><span class='badge badge-warning badge-pill parpadea'>Sin Comprobación del dia</span></h6>";
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
		$validaSup = "<h6><span class='badge badge-warning badge-pill parpadea'>Sin Supervisión</span></h6>";
	}
	if (empty($hoyS)) {
		$validaSup = "<h6><span class='badge badge-danger badge-pill'>Sin registro</span></h6>";
	}

	// validar columna ultimo registro
	if (!empty($hoyS) and !empty($hoyV)) {
		if ($fechaS == $fecha_sistema and $fechaV == $fecha_sistema)
			$validaUltReg = "<h6><span class='badge badge-success badge-pill'>{$hoyV}</span></h6>";
		if ($fechaS != $fecha_sistema)
			$validaUltReg = "<h6><span class='badge badge-warning badge-pill parpadea'>Sin Registro del dia</span></h6>";
	} else if (empty($hoyS) and empty($hoyV)) {
		$validaUltReg = "<h6><span class='badge badge-danger badge-pill parpadea'>Sin Ningún Registro</span></h6>";
	} else if (empty($hoyS)) {
		$validaUltReg = "<h6><span class='badge badge-danger badge-pill'>Sin Supervisión</span></h6>";
	} else if (empty($hoyV)) {
		$validaUltReg = "<h6><span class='badge badge-danger badge-pill'>Sin Verificación</span></h6>";
	}

	// Acciones ----------------------------------------------------------------------------------------- 
	// Boton 2.3.4.1 Registro Comprobación de Actividad Mínima Diaria
	if ($Eliminado == 0) {
		$outputBtns1 = "<a class='btn btn-outline-danger' id='eliminado'><i class='fa-solid fa-ban'></i></a>";
	} else if ($super == 1 and ($hoyV  == '')) {
		$outputBtns1 = "<a href='../adds/formAddActMinDia.php?id={$idP}' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($super == 1 and ($fechaV <> $fecha_sistema)) {
		$outputBtns1 = "<a href='../adds/formAddActMinDia.php?id={$idP}' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($super == 1 and ($fechaV ==  $fecha_sistema)) {
		$outputBtns1 = "<a class='btn btn-outline-danger' id='yaRegistrado'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($regComActMinDia == 1 and ($hoyV  == '')) {
		$outputBtns1 = "<a href='../adds/formAddActMinDia.php?id={$idP}' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($regComActMinDia == 1 and ($fechaV <> $fecha_sistema)) {
		$outputBtns1 = "<a href='../adds/formAddActMinDia.php?id={$idP}' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($regComActMinDia == 1 and ($fechaV ==  $fecha_sistema)) {
		$outputBtns1 = "<a class='btn btn-outline-danger' id='yaRegistrado'><i class='fa-solid fa-pencil'></i></a>";
	} else {
		$outputBtns1 = "<a class='btn btn-outline-danger' id='regComActMinDia'><i class='fa-solid fa-spell-check'></i></a>";
	}

	// 2.3.4.3 Ver Generales Actividad Mínima Diaria
	if ($Eliminado == 0) {
		$outputBtns2 = "<a class='btn btn-outline-danger' id='eliminado'><i class='fa-solid fa-ban'></i></a>";
	} else if ($super == 1) {
		$outputBtns2 = "<a href='../update/formUpdateActMinDiaria.php?id={$idP}' target='_blank' class='btn btn-secondary'><i class='fa-solid fa-eye'></i></a>";
	} else if ($verGralActMinDia == 1) {
		$outputBtns2 = "<a href='../update/formUpdateActMinDiaria.php?id={$idP}' target='_blank' class='btn btn-secondary'><i class='fa-solid fa-eye'></i></a>";
	} else {
		$outputBtns2 = "<a class='btn btn-outline-danger' id='verGralActMinDia'><i class='fa-solid fa-comments'></i></a>";
	}


	// 2.3.4.2 Registro Supervisión de Comprobación de Actividad Mínima Diaria
	if ($Eliminado == 0) {
		$outputBtns3 = "<a class='btn btn-outline-danger' id='eliminado'><i class='fa-solid fa-ban'></i></a>";
	} else if ($super == 1 and ($hoyV  == '')) {
		$outputBtns3 = "<a class='btn btn-outline-danger' id='elimina'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($super == 1 and ($fechaV <> $fecha_sistema)) {
		$outputBtns3 = "<a class='btn btn-outline-danger' id='elimina'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($super == 1 and ($hoyS  == '')) {
		$outputBtns3 = "<a href='../adds/formAddSupervisionActMinDia.php?id={$id_ActMinDiaria}' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($super == 1 and  ($fechaS <> $fecha_sistema)) {
		$outputBtns3 = "<a href='../adds/formAddSupervisionActMinDia.php?id={$id_ActMinDiaria}' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($super == 1 and ($fechaS ==  $fecha_sistema)) {
		$outputBtns3 = "<a class='btn btn-outline-danger' id='yaRegistrado'><i class='fa-solid fa-pencil'></i></a>";
		
	} else if ($regComSuperActMinDia == 1 and ($hoyV  == '')) {
		$outputBtns3 = "<a class='btn btn-outline-danger' id='elimina'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($regComSuperActMinDia == 1 and ($fechaV <> $fecha_sistema)) {
		$outputBtns3 = "<a class='btn btn-outline-danger' id='elimina'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($regComSuperActMinDia == 1 and ($hoyS  == '')) {
		$outputBtns3 = "<a href='../adds/formAddSupervisionActMinDia.php?id={$id_ActMinDiaria}' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($regComSuperActMinDia == 1 and ($fechaS <> $fecha_sistema)) {
		$outputBtns3 = "<a href='../adds/formAddSupervisionActMinDia.php?id={$id_ActMinDiaria}' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($regComSuperActMinDia == 1 and ($fechaS ==  $fecha_sistema)) {
		$outputBtns3 = "<a class='btn btn-outline-danger' id='yaRegistrado'><i class='fa-solid fa-pencil'></i></a>";
	} else {
		$outputBtns3 = "<a class='btn btn-outline-danger' id='regComSuperActMinDia'><i class='fa-solid fa-pencil'></i></a>";
	}

	if($super == 1){
		$outputBtns4 = "<a href='javascript:void(0)' class='btn btn-info' onclick='mostarDetalles(\"".$row['id_proyecto']."\")'><i class='fa-solid fa-circle-info'></i></a>";
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
		"10" => $validaTop,
		"11" => $validaAseTec,
		"12" => $validaEstadoProyecto,
		"13" => $validaCom,
		"14" => $validaSup,
		"15" => $validaUltReg,
		"16" => "<div class='input-group input-group-sm mb-3'>
		<div class='input-group-prepend'>
			<button type='button' class='btn btn-secondary dropdown-toggle' data-toggle='dropdown'><i class='fas fa-cog'></i><span data-toogle='tooltip' title='Botónes de administración  tabla Verificación Diaria Vehículos Activos'> Acciones</span>
			</button>
			<ul class='dropdown-menu text-center' style='columns: 2; min-width:2em;'>
				<li class='dropdown-item'>
					<span data-toggle='tooltip' title='2.3.4.1 Registro Comprobación de Actividad Mínima Diaria'>
						" . $outputBtns1 . "
					</span>
				</li>

				<li class='dropdown-item'>
					<span data-toggle='tooltip' title='2.3.4.2 Registro Supervisión de Comprobación de Actividad Mínima Diaria'>
						" . $outputBtns3 . "
					</span>
				</li>

				<li class='dropdown-item'>
					<span data-toggle='tooltip' title='2.3.4.3 Ver Generales Actividad Mínima Diaria'>
					" . $outputBtns2 . "
					</span>
				</li>
				<li class='dropdown-item'>
					<span data-toggle='tooltip' title='Desplegar Detalles'>
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
