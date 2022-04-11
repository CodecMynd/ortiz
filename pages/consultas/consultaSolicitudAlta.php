<?php
	require '../components/query.php'; 
	if ($super == 1 OR $verTablaRegSolAltProy == 1) {

	$query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.valorVenta, V.placa, M.marca, Mo.modelo, A.anio, 
	R.id_regSolicitud, R.folioRegSolicitud, R.valorVentaAlta, R.inspecCalidad, R.observCliente, R.borrado, R.fecha_creacion, 
	Co.color, S.semana, U.nombres, U.aPaterno, U.aMaterno,
	TA.tecArmador, TM1.tecMontador AS TM1, TM2.tecMontador AS TM2, TM3.tecMontador AS TM3, TM4.tecMontador AS TM4
	FROM proyectos P 
	INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
	INNER JOIN colores Co ON V.id_color = Co.id_color
	INNER JOIN marcas M ON V.id_marca = M.id_marca 
	INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo 
	INNER JOIN anios A ON V.id_anio = A.id_anio 
	INNER JOIN clientes C ON P.id_cliente = C.id_cliente 
	INNER JOIN registrosolicitud R ON P.id_proyecto = R.id_proyecto
	INNER JOIN semanas S ON R.id_semana = S.id_semana
	INNER JOIN usuarios U ON R.id_capC = U.id_usuario
	INNER JOIN tecarmadores TA ON R.tecArmador = TA.id_tecArmador
	INNER JOIN tecmontadores TM1 ON R.tecMontador1 = TM1.id_tecMontador
	INNER JOIN tecmontadores TM2 ON R.tecMontador2 = TM2.id_tecMontador
	INNER JOIN tecmontadores TM3 ON R.tecMontador3 = TM3.id_tecMontador
	INNER JOIN tecmontadores TM4 ON R.tecMontador4 = TM4.id_tecMontador
	WHERE P.registroSolicitud = 1 AND R.borrado = 0 ORDER BY fecha_creacion DESC";
}else{
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
		$inspecCalidad = $row['inspecCalidad'];
		$observCliente = $row['observCliente'];
		$id_regSolicitud = $row['id_regSolicitud'];
		$capturista = $row['nombres'] . ' ' . $row['aPaterno'] . ' ' . $row['aMaterno'];
		$fecha_creacion = $row['fecha_creacion'];
		$tecArmador = $row['tecArmador']; 
		$TM1 = $row['TM1']; 
		$TM2 = $row['TM2']; 
		$TM3 = $row['TM3']; 
		$TM4 = $row['TM4'];

		$fecha1 = new DateTime($date);
		$fecha2 = new DateTime($fecha_creacion);
		$diff = $fecha1->diff($fecha2);

		// 	2.4.4 Descarga PDF Registro de Solicitud Alta Proyecto">
 		if ($super == 1) { 
			$outputBtns1 = "<a class='btn btn-secondary' href='../components/solicitudAlta.php?id={$row['id_proyecto']}'><i class='fa-solid fa-file-pdf'></i></a>";
 		} else if ($pdfRegSolAltProy == 1) { 
			$outputBtns1 = "<a class='btn btn-secondary' href='../components/solicitudAlta.php?id={$row['id_proyecto']}'><i class='fa-solid fa-file-pdf'></i></a>";
 		} else { 
			$outputBtns1 = "<a class='btn btn-outline-danger' id='pdfRegSolAltProy'><i class='fa-solid fa-file-pdf'></i></a>";
 		} 

		 // 2.4.5 Eliminar Registro de Solicitud Alta Proyecto
 		if ($super == 1) { 
			$outputBtns2 = "<a href='#' onclick='abrirModal1(\"".$idP."\",\"".$nP."\",\"".$id_regSolicitud."\")' class='btn btn-secondary'><i class='fas fa-trash-alt'></i></a>";
 		} else if ($eliRegSolAltProy == 1) {
			$outputBtns2 = "<a href='#' onclick='abrirModal1(\"".$idP."\",\"".$nP."\",\"".$id_regSolicitud."\")' class='btn btn-secondary'><i class='fas fa-trash-alt'></i></a>";
 		} else { 
			$outputBtns2 = "<a class='btn btn-outline-danger' id='eliRegSolAltProy'><i class='fas fa-trash-alt'></i></a>";
 		} 

		//  2.4.6 Ver Observaciones Registro de Solicitud Alta Proyecto
		if ($super == 1) { 
		$outputBtns3 = "<a href='../consultas/tablaConsultaSolicitudAlta.php?id={$idP}' class='btn btn-secondary'><i class='fa-solid fa-comments'></i></a>";
		} else if ($eliProyecto == 1) { 
		$outputBtns3 = "<a href='../consultas/tablaConsultaSolicitudAlta.php?id={$idP}' class='btn btn-secondary'><i class='fa-solid fa-comments'></i></a>";
		} else {
		$outputBtns3 = "<a href='#' class='btn btn-outline-danger' id='verComentRegSolAltProy'><i class='fa-solid fa-comments'></i></a>";
		}


		$cont++;
		$datos[] = array(
			"0" => $cont,
			"1" => "<span class='badge badge-dark badge-pill'>{$row['id_proyecto']}</span>",
			"2" => $fecha_creacion,
			"3" => $cronometro = $diff->days . " Dia(s), " . $diff->h . ' h. ' . $diff->i . " m. " . $diff->s . ' s.',
			"4" => $row['folioRegSolicitud'],
			"5" => $row['nProyecto'],
			"6" => $row['nOrden'],
			"7" => $row['marca'],
			"8" => $row['modelo'],
			"9" => $row['anio'],
			"10" => $row['placa'] ,
			"11" => $row['color'] ,
			"12" => $row['semana'] ,
			"13" => $row['valorVenta'] ,
			"14" => $row['valorVentaAlta'] ,
			"15" => "<div class='input-group input-group-sm mb-3'>
						<div class='input-group-prepend'>
							<button type='button' class='btn btn-secondary dropdown-toggle' data-toggle='dropdown'><i class='fas fa-cog'></i><span data-toogle='tooltip' title='Botónes de administración tabla Solicitud Alta'> Acciones</span>
							</button>
							<ul class='dropdown-menu text-center' style='columns:2; min-width:2em;'>
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='2.4.4 Descarga PDF Registro de Solicitud Alta Proyecto'>
										".$outputBtns1."
									</span>
								</li>
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='2.4.5 Eliminar Registro de Solicitud Alta Proyecto'>
										".$outputBtns2."
									</span>
								</li>	
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='2.4.6 Ver Observaciones Registro de Solicitud Alta Proyecto'>
										".$outputBtns3."
									</span>
								</li>
							</ul>
						</div>
					</div>"

		);
	}

	$resultados = array(
	"sEcho"=>1, /* informacion para la herramienta datatables */
	"iTotalRecords"=>count($datos), /* envía el total de columnas a la datatable */
	"iTotalDisplayRecords"=>count($datos), /* envia el total de filas a visualizar */
	"aaData"=>$datos /* envía el arreglo completo que se llenó con el while */
	);
	echo json_encode($resultados);


						