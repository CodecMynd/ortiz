<?php
require '../components/query.php';
if ($super == 1 or $verTablaSolPzsAdicionales == 1) {

	$query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.estadoProyectoEliminado, P.pzadicionial,
	V.placa, M.marca, Mo.modelo, A.anio, Co.color,
	id_regSolpzadicional, R.folioPzAdicional, R.id_regSolpzadicional AS id_regSolPzs,
    R.precio, R.modalidadPago, R.enUso AS MAXenUso, R.enUso, R.fecha_creacion, R.estatusEspera, R.estatusAprobado, R.asesor, R.tecArmador,
    CT.id_cotizandoPzsAdic, CT.borrado AS cotizandoBorrado
	FROM proyectos P
	INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo
	INNER JOIN colores Co On V.id_color = Co.id_color
	INNER JOIN marcas M ON V.id_marca = M.id_marca
	INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
	INNER JOIN anios A ON V.id_anio = A.id_anio
    LEFT JOIN registrosolicitudpzsadicionales R ON P.id_proyecto = R.id_proyecto
    INNER JOIN cotizandopzsadic CT ON R.id_cotizandoPzsAdic = CT.id_cotizandoPzsAdic
	WHERE P.estadoProyectoEliminado = 1 AND P.proyectoActivo = 1 AND CT.pzadicionial = 1 AND CT.borrado = 0  ORDER BY CT.id_cotizandoPzsAdic DESC";
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
	$pzadicional = $row['pzadicionial'];
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


	// Solicitud Piezas
	// if ($MAXenUso == 1) {
	// 	$solicitud = "<h6><span class='badge badge-success badge-pill'>Solicitud(es)  {$soli}</span></h6>";
	// } else if ($MAXenUso == 0) {
	// 	$solicitud = "<h6><span class='badge badge-danger badge-pill'>Sin Solicitud</span></h6>";
	// }

	if ($row['estatusEspera'] == 0) {
		$estatusEspera = "<h6><span class='badge badge-danger badge-pill'>NO Autorizado</span></h6>";
	} else if ($row['estatusEspera'] == 1) {
		$estatusEspera = "<h6><span class='badge badge-warning badge-pill parpadea'>Por Autorizar</span></h6>";
	} else {
		$estatusEspera = "<h6><span class='badge badge-success badge-pill'>Autorizado</span></h6>";
	}

	// 4.2.2 Agregar Solicitud de Piezas Adicionales
	if ($Eliminado == 0) {
		$outputBtns1 = "<a class='btn btn-outline-danger' data-toggle='tooltip'  title='Proyecto Eliminado'><i class='fa-solid fa-ban'></i></a>";
	} else if ($super == 1 and $row['cotizandoBorrado'] == 0) {
		$outputBtns1 = "<a href='#' onclick='abrirModal1(\"" . $idP . "\",\"" . $nP . "\",\"" . $id_regSolPzs . "\", \"".$id_cotizandoPzsAdic."\")' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($super == 1 and $row['cotizandoBorrado'] == 1) {
		$outputBtns1 = "<a class='btn btn-outline-danger' id='siRegComImg'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($agregarSolPzsAdicionales == 1 AND $row['cotizandoBorrado'] == 0) {
		$outputBtns1 = "<a href='#' onclick='abrirModal1(\"" . $idP . "\",\"" . $nP . "\",\"" . $id_regSolPzs . "\", \"".$id_cotizandoPzsAdic."\")' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($agregarSolPzsAdicionales == 1 AND  $row['cotizandoBorrado'] == 1) {
		$outputBtns1 = "<a class='btn btn-outline-danger' id='siRegComImg'><i class='fa-solid fa-pencil'></i></a>";
	} else {
		$outputBtns1 = "<a class='btn btn-outline-danger' id='agregarSolPzsAdicionales' data-toggle='tooltip'  title='Sin Permiso'><i class='fa-solid fa-pencil'></i></a>";
	}

	//4.2.4 Eliminar Solicitud de Piezas Adicionales
	if ($Eliminado == 0) {
		$outputBtns = "<a class='btn btn-outline-danger' id='noComImg'><i class='fa-solid fa-ban'></i></a>";
	} else if ($super == 1 and $MAXenUso == 1 AND $row['cotizandoBorrado'] == 1) {
		$outputBtns2 = "<a class='btn btn-outline-danger' id='noEliComImg'><i class='fa-solid fa-trash-alt'></i></a>";
	}else if ($super == 1 AND $row['estatusAprobado'] == 0){
		$outputBtns2 = "<a href='#' onclick='abrirModal2(\"" . $idP . "\",\"" . $nP . "\",\"".$id_cotizandoPzsAdic."\")' class='btn btn-secondary'><i class='fas fa-trash-alt'></i></a>";
	} else if ($super == 1  and $MAXenUso == 0 AND $row['cotizandoBorrado'] == 0) {
		$outputBtns2 = "<a href='#' onclick='abrirModal2(\"" . $idP . "\",\"" . $nP . "\",\"".$id_cotizandoPzsAdic."\")' class='btn btn-secondary'><i class='fas fa-trash-alt'></i></a>";
	 } else if ($eliSolPzsAdicionales == 1 and $MAXenUso == 1 AND $row['cotizandoBorrado'] == 1) {
	 	$outputBtns2 = "<a class='btn btn-outline-danger' id='noEliComImg'><i class='fa-solid fa-trash-alt'></i></a>";
	}else if ($eliSolPzsAdicionales == 1 AND $row['estatusAprobado'] == 0){
		$outputBtns2 = "<a href='#' onclick='abrirModal2(\"" . $idP . "\",\"" . $nP . "\",\"".$id_cotizandoPzsAdic."\")' class='btn btn-secondary'><i class='fas fa-trash-alt'></i></a>";
	 } else if ($eliSolPzsAdicionales == 1  and $MAXenUso == 0 AND $row['cotizandoBorrado'] == 0) {
	 	$outputBtns2 = "<a href='#' onclick='abrirModal2(\"" . $idP . "\",\"" . $nP . "\",\"".$id_cotizandoPzsAdic."\")' class='btn btn-secondary'><i class='fas fa-trash-alt'></i></a>";
	} else {
		$outputBtns2 = "<a class='btn btn-outline-danger' id='eliSolPzsAdicionales' data-toggle='tooltip'  title='Sin Permiso'><i class='fa-solid fa-trash-alt'></i></a>";
	}

	// 4.2.5 Ver Generales Solicitud de Piezas Adicionales
	if ($super == 1 or $verGralSolPzsAdicionales == 1) {
		$outputBtns3 = "<a href='javascript:void(0)' class='btn btn-info' onclick='mostarDetalles(\"" . $row['id_proyecto'] . "\",\"".$row['id_cotizandoPzsAdic']."\")'><i class='fa-solid fa-circle-info'></i></a>";
	} else {
		$outputBtns3 = "<a class='btn btn-outline-danger' id='verGralSolPzsAdicionales' data-toggle='tooltip'  title='Sin Permiso'><i class='fa-solid fa-circle-info'></i></a>";
	}


	//4.2.6 Enviar de Cotizando: : Piezas Adicionales a Pre-Autorización : Piezas Adicionales
	if ($MAXenUso == 0) {
		$outputBtns4 = "<a class='btn btn-outline-danger' id='enviarPreAutoPzsAdic' data-toggle='tooltip'  title='Aún no ha sido Verificado'><i class='fa-solid fa-paper-plane'></i></a>";
	} else if ($super == 1 AND $row['estatusEspera'] == 0) {
		$outputBtns4 = "<a class='btn btn-outline-danger' id='enviarPreAutoPzsAdic' data-toggle='tooltip'  title='No fue Autorizado'><i class='fa-solid fa-paper-plane'></i></a>";
	} else if ($super == 1 AND $row['estatusEspera'] == 2) {
		$outputBtns4 = "<a href='#' class='btn btn-secondary' onclick='abrirModal3(\"" . $idP . "\",\"" . $nP . "\",\"".$id_cotizandoPzsAdic."\",\"".$id_regSolpzadicional."\")'><i class='fa-solid fa-paper-plane'></i></a>";
   } else if ($super == 1 AND $row['estatusEspera'] == 1) {
	   $outputBtns4 = "<a class='btn btn-outline-danger' id='enviarPreAutoPzsAdic' data-toggle='tooltip'  title='Aún no ha sido Verificado'><i class='fa-solid fa-paper-plane'></i></a>";
	} else if ($enviarPreAutoPzsAdic == 1 AND $row['estatusEspera'] == 0) {
		$outputBtns4 = "<a class='btn btn-outline-danger' id='enviarPreAutoPzsAdic' data-toggle='tooltip'  title='No fue Autorizado'><i class='fa-solid fa-paper-plane'></i></a>";
	} else if ($enviarPreAutoPzsAdic == 1 AND $row['estatusEspera'] == 2) {
		$outputBtns4 = "<a href='#' class='btn btn-secondary' onclick='abrirModal3(\"" . $idP . "\",\"" . $nP . "\",\"".$id_cotizandoPzsAdic."\",\"".$id_regSolpzadicional."\")'><i class='fa-solid fa-paper-plane'></i></a>";
   } else if ($enviarPreAutoPzsAdic == 1 AND $row['estatusEspera'] == 1) {
	   $outputBtns4 = "<a class='btn btn-outline-danger' id='enviarPreAutoPzsAdic' data-toggle='tooltip'  title='Aún no ha sido Verificado'><i class='fa-solid fa-paper-plane'></i></a>";
	} else {
		$outputBtns4 = "<a class='btn btn-outline-danger' id='enviarPreAutoPzsAdic' data-toggle='tooltip'  title='Sin Permiso'><i class='fa-solid fa-paper-plane'></i></a>";
	}

	// 4.2.7 Autorizar Piezas Adicional
	if ($super == 1 or $validarSolPzsAdicionales == 1) {
		$outputBtns5 = "<a href='javascript:void(0)' class='btn btn-secondary' onclick='mostarDetalles2(\"" . $row['id_proyecto'] . "\",\"".$id_regSolpzadicional."\")'><i class='fa-solid fa-thumbs-up'></i></a>";
	} else {
		$outputBtns5 = "<a class='btn btn-outline-danger' id='validarSolPzsAdicionales' data-toggle='tooltip'  title='Sin Permiso'><i class='fa-solid fa-thumbs-up'></i></a>";
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
		"9" => $estatusEspera,
		"10" => ($row['cotizandoBorrado'] == 1) ? '<h6><span class="badge badge-danger badge-pill">Eliminado</span></h6>' : '<h6><span class="badge badge-success badge-pill">Activo</span></h6>',
		"11" => "<strong>{$row['folioPzAdicional']}</strong>",
		"12" => "<strong>{$row['modalidadPago']}</strong>",
		"13" => $precioCredito,
		"14" => $precioContado,
		"15" => (empty($row['asesor'])) ? "<h6><span class='badge badge-danger badge-pill'>Sin Asesor</span></h6>" : "<h6><span class='badge badge-success badge-pill'>{$row['asesor']}</span></h6>",
		"16" => (empty($row['tecArmador'])) ? "<h6><span class='badge badge-danger badge-pill'>Sin Técnico</span></h6>" : "<h6><span class='badge badge-success badge-pill'>{$row['tecArmador']}</span></h6>",
		"17" => $fecha_creacion,
		"18" => "<div class='input-group input-group-sm mb-3'>
					<div class='input-group-prepend'>
						<button type='button' class='btn btn-secondary dropdown-toggle' data-toggle='dropdown'><i class='fas fa-cog'></i><span data-toogle='tooltip' title='Botónes de administración  tabla Recepción de Piezas Dañadas'> Acciones</span></button>
							<ul class='dropdown-menu text-center' style='columns:2; min-width:2em;'>
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='4.2.4 Eliminar Solicitud de Piezas Adicionales'>
										" . $outputBtns2 . "
									</span>
								</li>
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='4.2.5 Ver Generales Solicitud de Piezas Adicionales'>
										" . $outputBtns3 . "
									</span>
								</li>
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='4.2.6 Enviar de Cotizando: : Piezas Adicionales a Pre-Autorización : Piezas Adicionales'>
										" . $outputBtns4 . "
									</span>
								</li>
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='4.2.2 Autorizar Pieza Adicional'>
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
