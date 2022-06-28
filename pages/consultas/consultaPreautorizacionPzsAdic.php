<?php
require '../components/query.php';
if ($super == 1 OR $verTablaPreautorizacionPzsAdic == 1) {

	$query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.estadoProyectoEliminado,
	V.placa, M.marca, Mo.modelo, A.anio, Co.color,
	R.id_regSolpzadicional, R.folioPzAdicional, R.id_regSolpzadicional AS id_regSolPzs,
    R.precio, R.modalidadPago, R.enUso AS MAXenUso, R.enUso, R.fecha_creacion, R.estatusEspera, R.estatusAprobado,
    R.tecArmador, R.asesor,
    CT.id_cotizandoPzsAdic, CT.borrado AS cotizandoBorrado,
    PR.cronoPreAuto, PR.id_preAutorizadoPzsAdic
	FROM proyectos P
	INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo
	INNER JOIN colores Co On V.id_color = Co.id_color
	INNER JOIN marcas M ON V.id_marca = M.id_marca
	INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
	INNER JOIN anios A ON V.id_anio = A.id_anio
    LEFT JOIN registrosolicitudpzsadicionales R ON P.id_proyecto = R.id_proyecto
    INNER JOIN cotizandopzsadic CT ON R.id_cotizandoPzsAdic = CT.id_cotizandoPzsAdic
    INNER JOIN preautorizadospzsadic PR ON R.id_regSolpzadicional = PR.id_regSolpzadicional
	WHERE P.estadoProyectoEliminado = 1 AND P.proyectoActivo = 1 AND CT.preAutorizPzsAdic = 1 AND PR.borrado = 0  ORDER BY PR.id_preAutorizadoPzsAdic DESC";
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
	$eliminar1 = "";

	$idP = $row['id_proyecto'];
	$nP = $row['nProyecto'];
	$Eliminado = $row['estadoProyectoEliminado'];
	$id_regSolpzadicional = $row['id_regSolpzadicional'];
	$folioPzAdicional = $row['folioPzAdicional'];
	$MAXenUso = $row['MAXenUso'];
	$fecha_creacion = $row['fecha_creacion'];
	$id_regSolPzs = $row['id_regSolPzs'];
	$id_cotizandoPzsAdic = $row['id_cotizandoPzsAdic'];

	// contador Credito/Contado
	// $querySuma = "SELECT
	// (SELECT SUM( precio)
	// FROM registrosolicitudpzsadicionales
	// WHERE modalidadPago = 'Crédito' AND borrado = 0 AND id_proyecto = $idP) AS precioCredito,

	// (SELECT SUM( precio)
	// FROM registrosolicitudpzsadicionales
	// WHERE modalidadPago = 'Contado' AND borrado = 0 AND id_proyecto = $idP) AS precioContado;";
	// $resultadoSuma = mysqli_query($conexion, $querySuma);
	// $rowSuma = $resultadoSuma->fetch_assoc();
	// $precioCredito = (empty($rowSuma['precioCredito'])) ? 0 : $rowSuma['precioCredito'];
	// $precioContado = (empty($rowSuma['precioContado'])) ? 0 : $rowSuma['precioContado'];
	// $total = $precioCredito + $precioContado;

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


	// 4.2.5 Ver Generales Solicitud de Piezas Adicionales
	if ($super == 1 or $verGralSolPzsAdicionales == 1) {
		$outputBtns3 = "<a href='javascript:void(0)' class='btn btn-info' onclick='mostarDetalles(\"" . $row['id_proyecto'] . "\",\"".$row['id_cotizandoPzsAdic']."\")'><i class='fa-solid fa-circle-info'></i></a>";
	} else {
		$outputBtns3 = "<a class='btn btn-outline-danger' id='verGralSolPzsAdicionales' data-toggle='tooltip'  title='Sin Permiso'><i class='fa-solid fa-circle-info'></i></a>";
	}

	// 4.2.2.1 Regresar de Pre-Autorización: Piezas Adicionales a Cotizando: Piezas Adicionales
	if ($super == 1 or $regresarCotizandoPzsAdic == 1) {
		$outputBtns1 = "<a href='#' class='btn btn-secondary' onclick='abrirModal4(\"" . $idP . "\",\"" . $nP . "\",\"" . $row['id_regSolpzadicional'] . "\",\"" . $row['id_cotizandoPzsAdic'] . "\",\"" . $row['id_preAutorizadoPzsAdic'] . "\")'><i class='fa-solid fa-reply'></i></a>";
	} else {
		$outputBtns1 = "<a class='btn btn-outline-danger' id='regresarCotizandoPzsAdic' data-toggle='tooltip' data-placement='left' title='Sin Permiso'><i class='fa-solid fa-reply'></i></a>";
	}

	// 4.2.2.2 Enviar de Pre-Autorización: Piezas Adionales a Autorizado: Piezas Adicionales
	if ($super == 1 or $enviarAutorizPzsAdic == 1) {
		$outputBtns2 = "<a href='#' class='btn btn-secondary' onclick='abrirModal5(\"" . $idP . "\",\"" . $nP . "\",\"" . $row['id_regSolpzadicional'] . "\",\"" . $row['id_cotizandoPzsAdic'] . "\",\"" . $row['id_preAutorizadoPzsAdic'] . "\")'><i class='fa-solid fa-paper-plane'></i></a>";
	} else {
		$outputBtns2 = "<a class='btn btn-outline-danger' id='enviarAutorizPzsAdic' data-toggle='tooltip' data-placement='left' title='Sin Permiso'><i class='fa-solid fa-paper-plane'></i></a>";
	}

	// 4.2.2.3 Eliminar Proyecto en Pre-Autorización: Piezas Adicionales 
	if ($super == 1 or $eliPreautoPzsAdic == 1) {
	 	$eliminar1 = "<a href='#' class='btn btn-secondary' onclick='eliminar1(\"" . $idP . "\",\"" . $nP . "\",\"" . $row['id_regSolpzadicional'] . "\",\"" . $row['id_cotizandoPzsAdic'] . "\",\"" . $row['id_preAutorizadoPzsAdic'] . "\")'><i class='fa-solid fa-trash'></i></a>";
	 } else {
	 	$eliminar1 = "<a class='btn btn-outline-danger' id='eliPreautoPzsAdic' data-toggle='tooltip'  title='Sin Permiso'><i class='fa-solid fa-trash'></i></a>";
	 }


	$dateFC = date("Y-m-d", strtotime($fecha_mensaje . "- 2 days"));
	$fecha = ($dateFC < $fecha_creacion) ? 0 : 1;

	$cont++;
	$datos[] = array(
		"0" =>  $fecha,
		"1" => $cont,
		"2" => "<strong>{$row['folioPzAdicional']}</strong>",
		"3" => "<span class='badge badge-dark badge-pill'>{$row['id_proyecto']}</span>",
		"4" => $row['nProyecto'],
		"5" => $row['nOrden'],
		"6" => $row['marca'],
		"7" => $row['modelo'],
		"8" => $row['anio'],
		"9" => $row['placa'],
		"10" => $row['color'],
		"11" => "<strong>{$row['modalidadPago']}</strong>",
		"12" => $precioCredito,
		"13" => $precioContado,
		"14" => "<strong>{$row['cronoPreAuto']}</strong>",
		"15" => (empty($row['asesor'])) ? "<h6><span class='badge badge-danger badge-pill'>Sin Asesor</span></h6>" : "<h6><span class='badge badge-success badge-pill'>{$row['asesor']}</span></h6>",
		"16" => (empty($row['tecArmador'])) ? "<h6><span class='badge badge-danger badge-pill'>Sin Técnico</span></h6>" : "<h6><span class='badge badge-success badge-pill'>{$row['tecArmador']}</span></h6>",
		"17" => $fecha_creacion,
		"18" => "<div class='input-group input-group-sm mb-3'>
					<div class='input-group-prepend'>
						<button type='button' class='btn btn-secondary dropdown-toggle' data-toggle='dropdown'><i class='fas fa-cog'></i><span data-toogle='tooltip' title='Botónes de administración  tabla Recepción de Piezas Dañadas'> Acciones</span></button>
							<ul class='dropdown-menu text-center' style='columns:2; min-width:2em;'>
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='4.2.2.1 Regresar de Pre-Autorización: Piezas Adicionales a Cotizando: Piezas Adicionales'>
										" . $outputBtns1 . "
									</span>
								</li>
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='4.2.2.2 Enviar de Pre-Autorización: Piezas Adionales a Autorizado: Piezas Adicionales'>
										" . $outputBtns2 . "
									</span>
								</li>
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='4.2.5 Ver Generales Solicitud de Piezas Adicionales'>
									" . $outputBtns3 . "
									</span>
								</li>
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='4.2.2.3 Eliminar Proyecto en Pre-Autorización: Piezas Adicionales '>
									" . $eliminar1 . "
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
