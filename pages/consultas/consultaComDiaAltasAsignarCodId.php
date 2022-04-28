<?php
require '../components/query.php';
if ($super == 1 or $vertablaComDiaAltasAsignarCodId == 1) {

	$query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.altaProyecto, P.valorVenta,
	V.placa, M.marca, Mo.modelo, A.anio, 
	R.valorVentaAlta, RA.cronometro, RA.fecha_creacion AS regAltaFecha_creacion, Co.color, S.semana, 
	MAX(CDA.id_ComDiaAltasAsignarCodId) AS id_ComDiaAltasAsignarCodId, MAX(CDA.fecha_hoyV) AS FV, MAX(CDA.fecha_hoyS) AS FS
	FROM proyectos P 
	INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
    INNER JOIN colores Co ON V.id_color = Co.id_color
    INNER JOIN marcas M ON V.id_marca = M.id_marca 
    INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo 
    INNER JOIN anios A ON V.id_anio = A.id_anio 
	INNER JOIN registrosolicitud R ON P.id_proyecto = R.id_proyecto 
	INNER JOIN registroalta RA ON P.id_proyecto = RA.id_proyecto 
	INNER JOIN semanas S ON R.id_semana = S.id_semana
	LEFT JOIN comdiaaltasasignarcodid CDA ON P.id_proyecto = CDA.id_proyecto
	WHERE altaProyecto = 1 GROUP BY P.id_proyecto ORDER BY P.nProyecto DESC";
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
	// $folioRegAlta = $row['folioRegAlta'];
	// $id_regAlta = $row['id_regAlta'];
	// $regAltaCapturista = $row['regAltaNombre'] . ' ' . $row['regAltaPaterno'] . ' ' . $row['regAltaMaterno'];
	// $regAltaFecha_creacion = $row['regAltaFecha_creacion'];
	// $regSolCapturista = $row['regSolNombres'] . ' ' . $row['regSolPaterno'] . ' ' . $row['regSolMaterno'];
	// $regSolFecha_creacion = $row['regSolFecha_creacion'];

	$nP = $row['nProyecto'];
	$hoyV = $row['FV'];
	$fecha = new DateTime($hoyV);
	$fechaV = $fecha->format('d-m-Y');
	$hoyS = $row['FS'];
	$fecha = new DateTime($hoyS);
	$fechaS = $fecha->format('d-m-Y');
	$fecha_sistema;
	$id_ComDiaAltasAsignarCodId = $row['id_ComDiaAltasAsignarCodId'];


	// valida columna status comprobación
	if (!empty($hoyV)) {
		if ($fechaV == $fecha_sistema)
			$validaCom = "<h6><span class='badge badge-success badge-pill'>Comprobado</span></h6>";
	}
	if ($fechaV <> $fecha_sistema) {
		$validaCom = "<h6><span class='badge badge-warning badge-pill parpadea'>Sin Comprobación</span></h6>";
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
	// Boton 2.6.3.1 Registrar Comprobación Diaria de Altas Por Asignar Código ID
	if ($super == 1 and ($hoyV  == '')) {
		$outputBtns1 = "<a href='../adds/formAddComDiaAltasAsignarCodId.php?id={$idP}&nP={$nP}' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($super == 1 and ($fechaV <> $fecha_sistema)) {
		$outputBtns1 = "<a href='../adds/formAddComDiaAltasAsignarCodId.php?id={$idP}&nP={$nP}' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($super == 1 and ($fechaV ==  $fecha_sistema)) {
		$outputBtns1 = "<a class='btn btn-outline-danger' id='yaRegistrado'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($regComDiaAltasAsignarCodId == 1 and ($hoyV  == '')) {
		$outputBtns1 = "<a href='../adds/formAddComDiaAltasAsignarCodId.php?id={$idP}&nP={$nP}' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($regComDiaAltasAsignarCodId == 1 and ($fechaV <> $fecha_sistema)) {
		$outputBtns1 = "<a href='../adds/formAddComDiaAltasAsignarCodId.php?id={$idP}&nP={$nP}' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($regComDiaAltasAsignarCodId == 1 and ($fechaV ==  $fecha_sistema)) {
		$outputBtns1 = "<a class='btn btn-outline-danger' id='yaRegistrado'><i class='fa-solid fa-pencil'></i></a>";
	} else {
		$outputBtns1 = "<a class='btn btn-outline-danger' id='regComDiaAltasAsignarCodId'><i class='fa-solid fa-pencil'></i></a>";
	}

	// 2.6.3.3 Ver Generales Verificación y Supervisión
	if ($super == 1) {
		$outputBtns2 = "<a href='../update/formUpdateComDiaAltasAsignarCodId.php?id={$idP}' class='btn btn-secondary'><i class='fa-solid fa-eye'></i></a>";
	} else if ($verGralComDiaAltasAsignarCodId == 1) {
		$outputBtns2 = "<a href='../update/formUpdateComDiaAltasAsignarCodId.php?id={$idP}' class='btn btn-secondary'><i class='fa-solid fa-eye'></i></a>";
	} else {
		$outputBtns2 = "<a class='btn btn-outline-danger' id='verGralComDiaAltasAsignarCodId'><i class='fa-solid fa-comments'></i></a>";
	}

	// 2.6.3.2 Registrar Supervisión Diaria de Altas Por Asignar Código ID
	if ($super == 1 and ($hoyV  == '')) {
		$outputBtns3 = "<a class='btn btn-outline-danger' id='elimina'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($super == 1 and ($hoyS  == '')) {
		$outputBtns3 = "<a href='../adds/formAddSupComDiaAltasAsignarCodId.php?id={$id_ComDiaAltasAsignarCodId}&idP={$idP}&nP={$nP}' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($super == 1 and ($fechaS <> $fecha_sistema)) {
		$outputBtns3 = "<a href='../adds/formAddSupComDiaAltasAsignarCodId.php?id={$id_ComDiaAltasAsignarCodId}&idP={$idP}&nP={$nP}' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($super == 1 and ($fechaS ==  $fecha_sistema)) {
		$outputBtns3 = "<a class='btn btn-outline-danger' id='yaRegistrado'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($regComDiaAltasAsignarCodIdSuper == 1 and ($hoyV  == '')) {
		$outputBtns3 = "<a class='btn btn-outline-danger' id='elimina'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($regComDiaAltasAsignarCodIdSuper == 1 and ($hoyS  == '')) {
		$outputBtns3 = "<a href='../adds/formAddSupComDiaAltasAsignarCodId.php?id={$id_ComDiaAltasAsignarCodId}&idP={$idP}&nP={$nP}' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($regComDiaAltasAsignarCodIdSuper == 1 and ($fechaS <> $fecha_sistema)) {
		$outputBtns3 = "<a href='../adds/formAddSupComDiaAltasAsignarCodId.php?id={$id_ComDiaAltasAsignarCodId}&idP={$idP}&nP={$nP}' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($regComDiaAltasAsignarCodIdSuper == 1 and ($fechaS ==  $fecha_sistema)) {
		$outputBtns3 = "<a class='btn btn-outline-danger' id='yaRegistrado'><i class='fa-solid fa-pencil'></i></a>";
	} else {
		$outputBtns3 = "<a class='btn btn-outline-danger' id='regComDiaAltasAsignarCodIdSuper'><i class='fa-solid fa-spell-check'></i></a>";
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
		"9" => $row['semana'],
		"10" => "<strong>{$row['valorVenta']}</strong>",
		"11" => "<strong>{$row['valorVentaAlta']}</strong>",
		"12" => $validaCom,
		"13" => $validaSup,
		"14" => $validaUltReg,
		"15" => "<div class='input-group input-group-sm mb-3'>
					<div class='input-group-prepend'>
						<button type='button' class='btn btn-secondary dropdown-toggle'data-toggle='dropdown'><i class='fas fa-cog'></i><span data-toogle='tooltip'title='Botónes de administración tabla Comprobación de Placas'> Acciones</span>
						</button>
						<ul class='dropdown-menu text-center' style='columns:2; min-width:2em;'>
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='2.6.3.1 Registrar Comprobación Diaria de Altas Por Asignar Código ID'>
										" . $outputBtns1 . "
									</span>
								</li>
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='2.6.3.3 Ver Generales Verificación y Supervisión'>
										" . $outputBtns2 . "
									</span>
								</li>
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='2.6.3.2 Registrar Supervisión Diaria de Altas Por Asignar Código ID'>
										" . $outputBtns3 . "
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

// 	SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.altaProyecto, P.valorVenta,
// 	V.placa, M.marca, Mo.modelo, A.anio, 
// 	R.folioRegSolicitud, R.valorVentaAlta, R.inspecCalidad, R.observCliente, R.fecha_creacion AS 				   regSolFecha_creacion, RA.id_regAlta, RA.folioRegAlta, RA.observAudiFinal, RA.cronometro, LV.link, RA.     fecha_creacion AS regAltaFecha_creacion, Co.color, S.semana, U.nombres AS regAltaNombre, U.aPaterno AS    regAltaPaterno, U.aMaterno AS regAltaMaterno, Us.nombres AS regSolNombres, Us.aPaterno AS regSolPaterno, Us.   aMaterno AS regSolMaterno,
//    MAX(CDA.fecha_hoyV) AS FV, MAX(CDA.fecha_hoyS) AS FS, MAX(CDA.id_ComDiaAltasAsignarCodId ) AS id_ComDiaAltasAsignarCodId 
// 	   FROM proyectos P 
// 	   INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
// 	   INNER JOIN colores Co ON V.id_color = Co.id_color
// 	   INNER JOIN marcas M ON V.id_marca = M.id_marca 
// 	   INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo 
// 	   INNER JOIN anios A ON V.id_anio = A.id_anio 
// 	   INNER JOIN clientes C ON P.id_cliente = C.id_cliente 
// 	   INNER JOIN registrosolicitud R ON P.id_proyecto = R.id_proyecto 
// 	   INNER JOIN registroalta RA ON P.id_proyecto = RA.id_proyecto 
// 	   INNER JOIN semanas S ON R.id_semana = S.id_semana
// 	   INNER JOIN linkvideos LV ON RA.id_link = LV.id_linkVideo 
// 	   INNER JOIN usuarios U ON RA.id_capC = U.id_usuario
// 	   INNER JOIN usuarios Us ON R.id_capC = Us.id_usuario
// 	   LEFT JOIN comdiaaltasasignarcodid CDA ON P.id_proyecto = CDA.id_proyecto
// 	   WHERE altaProyecto = 1 ORDER BY nProyecto ASC