<?php
require '../components/query.php';
if ($super == 1 or $vertablaSeguimientoDiarioCobranza == 1) {

	$query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.altaProyecto, P.valorVenta,
	V.placa, M.marca, Mo.modelo, A.anio, 
	R.valorVentaAlta, RA.cronometro, RA.fecha_creacion AS regAltaFecha_creacion, Co.color, S.semana, 
	MAX(CSA.id_ComSegDiaCobranza) AS id_ComSegDiaCobranza, MAX(CSA.fecha_hoyV) AS FV, MAX(CSA.fecha_hoyS) AS FS
	FROM proyectos P 
	INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
    INNER JOIN colores Co ON V.id_color = Co.id_color
    INNER JOIN marcas M ON V.id_marca = M.id_marca 
    INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo 
    INNER JOIN anios A ON V.id_anio = A.id_anio 
	INNER JOIN registrosolicitud R ON P.id_proyecto = R.id_proyecto 
	INNER JOIN registroalta RA ON P.id_proyecto = RA.id_proyecto 
	INNER JOIN semanas S ON R.id_semana = S.id_semana
	LEFT JOIN comsegdiacobranza CSA ON P.id_proyecto = CSA.id_proyecto
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

	$nP = $row['nProyecto'];
	$hoyV = $row['FV'];
	$fecha = new DateTime($hoyV);
	$fechaV = $fecha->format('d-m-Y');
	$hoyS = $row['FS'];
	$fecha = new DateTime($hoyS);
	$fechaS = $fecha->format('d-m-Y');
	$fecha_sistema;
	$id_ComSegDiaCobranza = $row['id_ComSegDiaCobranza'];


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
	// Boton 2.6.4.1 Registrar Seguimiento Diario de Cobranza
	if ($super == 1 and ($hoyV  == '')) {
		$outputBtns1 = "<a href='../adds/formAddComSegDiaCobranza.php?id={$idP}&nP={$nP}' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($super == 1 and ($fechaV <> $fecha_sistema)) {
		$outputBtns1 = "<a href='../adds/formAddComSegDiaCobranza.php?id={$idP}&nP={$nP}' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($super == 1 and ($fechaV ==  $fecha_sistema)) {
		$outputBtns1 = "<a class='btn btn-outline-danger' id='yaRegistrado'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($regSeguimientoDiarioCobranza == 1 and ($hoyV  == '')) {
		$outputBtns1 = "<a href='../adds/formAddComSegDiaCobranza.php?id={$idP}&nP={$nP}' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($regSeguimientoDiarioCobranza == 1 and ($fechaV <> $fecha_sistema)) {
		$outputBtns1 = "<a href='../adds/formAddComSegDiaCobranza.php?id={$idP}&nP={$nP}' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($regSeguimientoDiarioCobranza == 1 and ($fechaV ==  $fecha_sistema)) {
		$outputBtns1 = "<a class='btn btn-outline-danger' id='yaRegistrado'><i class='fa-solid fa-pencil'></i></a>";
	} else {
		$outputBtns1 = "<a class='btn btn-outline-danger' id='regSeguimientoDiarioCobranza'><i class='fa-solid fa-pencil'></i></a>";
	}

	// 2.6.4.3 Ver Generales Verificación y Supervisión Seguimiento Diario de Cobranza
	if ($super == 1) {
		$outputBtns2 = "<a href='../update/formUpdateComSegDiaCobranza.php?id={$idP}' target='_blank' class='btn btn-secondary'><i class='fa-solid fa-eye'></i></a>";
	} else if ($verGralComDiaAltasAsignarCodId == 1) {
		$outputBtns2 = "<a href='../update/formUpdateComSegDiaCobranza.php?id={$idP}' target='_blank' class='btn btn-secondary'><i class='fa-solid fa-eye'></i></a>";
	} else {
		$outputBtns2 = "<a class='btn btn-outline-danger' id='verGralComDiaAltasAsignarCodId'><i class='fa-solid fa-comments'></i></a>";
	}

	// 2.6.4.2 Registrar Supervisión Seguimiento Diario de Cobranza
	if ($super == 1 and ($hoyV  == '')) {
		$outputBtns3 = "<a class='btn btn-outline-danger' id='elimina'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($super == 1 and ($hoyS  == '')) {
		$outputBtns3 = "<a href='../adds/formAddSupComSegDiaCobranza.php?id={$id_ComSegDiaCobranza}&idP={$idP}&nP={$nP}' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($super == 1 and ($fechaS <> $fecha_sistema)) {
		$outputBtns3 = "<a href='../adds/formAddSupComSegDiaCobranza.php?id={$id_ComSegDiaCobranza}&idP={$idP}&nP={$nP}' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($super == 1 and ($fechaS ==  $fecha_sistema)) {
		$outputBtns3 = "<a class='btn btn-outline-danger' id='yaRegistrado'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($regSeguimientoDiarioCobranzaSuper == 1 and ($hoyV  == '')) {
		$outputBtns3 = "<a class='btn btn-outline-danger' id='elimina'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($regSeguimientoDiarioCobranzaSuper == 1 and ($hoyS  == '')) {
		$outputBtns3 = "<a href='../adds/formAddSupComSegDiaCobranza.php?id={$id_ComSegDiaCobranza}&idP={$idP}&nP={$nP}' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($regSeguimientoDiarioCobranzaSuper == 1 and ($fechaS <> $fecha_sistema)) {
		$outputBtns3 = "<a href='../adds/formAddSupComSegDiaCobranza.php?id={$id_ComSegDiaCobranza}&idP={$idP}&nP={$nP}' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($regSeguimientoDiarioCobranzaSuper == 1 and ($fechaS ==  $fecha_sistema)) {
		$outputBtns3 = "<a class='btn btn-outline-danger' id='yaRegistrado'><i class='fa-solid fa-pencil'></i></a>";
	} else {
		$outputBtns3 = "<a class='btn btn-outline-danger' id='regSeguimientoDiarioCobranzaSuper'><i class='fa-solid fa-spell-check'></i></a>";
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
						<button type='button' class='btn btn-secondary dropdown-toggle'data-toggle='dropdown'><i class='fas fa-cog'></i><span data-toogle='tooltip'title='Botónes de administración  tabla Comprobación de Placas'> Acciones</span>
						</button>
						<ul class='dropdown-menu text-center' style='columns:2; min-width:2em;'>
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='2.6.4.1 Registrar Comprobación de Seguimiento Diario de Cobranza'>
										" . $outputBtns1 . "
									</span>
								</li>
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='2.6.4.3 Ver Generales Seguimiento Diario de Cobranza'>
										" . $outputBtns2 . "
									</span>
								</li>
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='2.6.4.2 Registrar Supervisión de Seguimiento Diario de Cobranza'>
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

