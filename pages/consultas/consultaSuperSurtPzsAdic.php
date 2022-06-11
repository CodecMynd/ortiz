<?php
require '../components/query.php';
if ($super == 1 or $verTablaSuperSurtPzsAdic == 1) {

	$query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.estadoProyectoEliminado,
	V.placa, M.marca, Mo.modelo, A.anio, Co.color,
	R.id_regSolpzadicional, R.folioPzAdicional, R.id_regSolpzadicional AS id_regSolPzs,
    R.precio, R.modalidadPago, R.enUso AS MAXenUso, R.enUso, R.fecha_creacion, R.estatusEspera, R.estatusAprobado,
    R.tecArmador, R.asesor,
    CT.id_cotizandoPzsAdic, CT.borrado AS cotizandoBorrado,
    PR.cronoPreAuto, PR.id_preAutorizadoPzsAdic,
    AP.id_autorizadoPzsAdic, AP.folio_autorizPzsAdic, AP.cronoAutorizadoPzAdic,
    APS.id_AutoProceSurtPzAdic,
    PE.id_pzsEntregadasAdic, PE.folioPzsSurtidaAdic,
    PF.id_pzsFirmadasRecAdic, PF.cronoPzsFirmadasRecAdic,
    S.id_superSurtPzsAdic, S.cronoSuperSurtPzsAdic
	FROM proyectos P
	INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo
	INNER JOIN colores Co On V.id_color = Co.id_color
	INNER JOIN marcas M ON V.id_marca = M.id_marca
	INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
	INNER JOIN anios A ON V.id_anio = A.id_anio
    LEFT JOIN registrosolicitudpzsadicionales R ON P.id_proyecto = R.id_proyecto
    INNER JOIN cotizandopzsadic CT ON R.id_cotizandoPzsAdic = CT.id_cotizandoPzsAdic
    INNER JOIN preautorizadospzsadic PR ON R.id_regSolpzadicional = PR.id_regSolpzadicional
    INNER JOIN autorizadospzsadic AP ON PR.id_preAutorizadoPzsAdic = AP.id_preAutorizadoPzsAdic
    INNER JOIN autoprocesurtpzsadic APS ON AP.id_autorizadoPzsAdic = APS.id_autorizadoPzsAdic
    INNER JOIN pzstregadasadic PE ON APS.id_AutoProceSurtPzAdic = PE.id_AutoProceSurtPzAdic
    INNER JOIN pzsfirmadasrecadic PF ON PE.id_pzsEntregadasAdic = PF.id_pzsEntregadasAdic
    INNER JOIN supersurtpzsadic S ON PF.id_pzsFirmadasRecAdic = S.id_pzsFirmadasRecAdic
	WHERE P.estadoProyectoEliminado = 1 AND P.proyectoActivo = 1 AND CT.superSurtPzsAdic = 1 AND S.borrado = 0 ORDER BY S.id_superSurtPzsAdic DESC";
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

	$idP = $row['id_proyecto'];
	$nP = $row['nProyecto'];
	$Eliminado = $row['estadoProyectoEliminado'];
	$id_regSolpzadicional = $row['id_regSolpzadicional'];
	$folioPzAdicional = $row['folioPzAdicional'];
	$MAXenUso = $row['MAXenUso'];
	$fecha_creacion = $row['fecha_creacion'];
	$id_regSolPzs = $row['id_regSolPzs'];
	$id_cotizandoPzsAdic = $row['id_cotizandoPzsAdic'];

	$precioCredito = ($row['modalidadPago'] == 'Crédito') ? $row['precio'] : 0;
	$precioContado = ($row['modalidadPago'] == 'Contado') ? $row['precio'] : 0;

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
	FROM registrosolicitudpzsadicionales 
	WHERE enUso = 1 AND id_proyecto = $idP GROUP BY id_proyecto ) AS solicitudes";
	$resultadoSoli = mysqli_query($conexion, $querySoli);
	$rowSoli = $resultadoSoli->fetch_assoc();
	$soli = $rowSoli['solicitudes'];

	if ($row['estatusEspera'] == 0) {
		$estatusEspera = "<h6><span class='badge badge-danger badge-pill'>NO Autorizado</span></h6>";
	} else if ($row['estatusEspera'] == 1) {
		$estatusEspera = "<h6><span class='badge badge-warning badge-pill parpadea'>Por Autorizar</span></h6>";
	} else {
		$estatusEspera = "<h6><span class='badge badge-success badge-pill'>Autorizado</span></h6>";
	}

	// 4.2.7.1 Regresar de Supervisión de Surtido de Piezas: Piezas Adicionales a Piezas Firmadas de Recibido: Piezas Adicionales
	if ($super == 1 or $regresarPzsFirmRecAdic == 1) {
		$outputBtns1 = "<a href='#' class='btn btn-secondary' onclick='abrirModal14(\"" . $idP . "\",\"" . $nP . "\",\"" . $row['id_regSolpzadicional'] . "\",\"" . $row['id_cotizandoPzsAdic'] . "\",\"" . $row['id_preAutorizadoPzsAdic'] . "\", \"".$row['id_autorizadoPzsAdic']."\",\"".$row['id_AutoProceSurtPzAdic']."\",\"".$row['id_pzsEntregadasAdic']."\",\"".$row['id_pzsFirmadasRecAdic']."\",\"".$row['id_superSurtPzsAdic']."\")'><i class='fa-solid fa-reply'></i></a>";
	} else {
		$outputBtns1 = "<a class='btn btn-outline-danger' id='regresarPzsEntregadasAdic2' data-toggle='tooltip' data-placement='left' title='Sin Permiso'><i class='fa-solid fa-reply'></i></a>";
	}

	// 4.2.7.2 Ver Generales Supervisión de Surtido de Piezas: Piezas Adicionales
	if ($super == 1 or $verGralSuperSurtPzsAdic == 1) {
		$outputBtns2 = "<a href='javascript:void(0)' class='btn btn-secondary' onclick='mostarDetalles6(\"" . $row['id_proyecto'] . "\",\"".$row['id_pzsFirmadasRecAdic']."\",\"".$row['id_superSurtPzsAdic']."\")'><i class='fa-solid fa-eye'></i></a>";
	} else {
		$outputBtns2 = "<a class='btn btn-outline-danger' id='verGralSuperSurtPzsAdic' data-toggle='tooltip'  title='Sin Permiso'><i class='fa-solid fa-eye'></i></a>";
	}

	// 4.2.5 Ver Generales Solicitud de Piezas Adicionales
	if ($super == 1 or $verGralSolPzsAdicionales == 1) {
		$outputBtns3 = "<a href='javascript:void(0)' class='btn btn-info' onclick='mostarDetalles(\"" . $row['id_proyecto'] . "\",\"".$row['id_cotizandoPzsAdic']."\")'><i class='fa-solid fa-circle-info'></i></a>";
	} else {
		$outputBtns3 = "<a class='btn btn-outline-danger' id='verGralSolPzsAdicionales' data-toggle='tooltip'  title='Sin Permiso'><i class='fa-solid fa-circle-info'></i></a>";
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
		"9" => "<strong>{$row['folioPzsSurtidaAdic']}</strong>",
		"10" => "<strong>{$row['folio_autorizPzsAdic']}</strong>",
		"11" => "<strong>{$row['folioPzAdicional']}</strong>",
		"12" => "<strong>{$row['modalidadPago']}</strong>",
		"13" => $precioCredito,
		"14" => $precioContado,
		"15" => "<strong>{$row['cronoSuperSurtPzsAdic']}</strong>",
		"16" => "<strong>{$row['cronoPzsFirmadasRecAdic']}</strong>",
		"17" => "<strong>{$row['cronoAutorizadoPzAdic']}</strong>",
		"18" => "<strong>{$row['cronoPreAuto']}</strong>",
		"19" => (empty($row['asesor'])) ? "<h6><span class='badge badge-danger badge-pill'>Sin Asesor</span></h6>" : "<h6><span class='badge badge-success badge-pill'>{$row['asesor']}</span></h6>",
		"20" => (empty($row['tecArmador'])) ? "<h6><span class='badge badge-danger badge-pill'>Sin Técnico</span></h6>" : "<h6><span class='badge badge-success badge-pill'>{$row['tecArmador']}</span></h6>",
		"21" => $fecha_creacion,
		"22" => "<div class='input-group input-group-sm mb-3'>
					<div class='input-group-prepend'>
						<button type='button' class='btn btn-secondary dropdown-toggle' data-toggle='dropdown'><i class='fas fa-cog'></i><span data-toogle='tooltip' title='Botónes de administración  tabla Recepción de Piezas Dañadas'> Acciones</span></button>
							<ul class='dropdown-menu text-center' style='columns:2; min-width:2em;'>
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='4.2.7.1 Regresar de Supervisión de Surtido de Piezas: Piezas Adicionales a Piezas Firmadas de Recibido: Piezas Adicionales'>
										" . $outputBtns1 . "
									</span>
								</li>
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='4.2.7.2 Ver Generales Supervisión de Surtido de Piezas: Piezas Adicionales'>
										" . $outputBtns2 . "
									</span>
								</li>
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='4.1.3 Ver Generales Recepción de Piezas Dañadas (Consulta Rapida)'>
										" . $outputBtns3 . "
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
