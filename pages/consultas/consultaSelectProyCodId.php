<?php
	require '../components/query.php'; 
	if ($super == 1 OR $verTablaSelectProyCodId == 1) {
	$query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, 
	V.placa, M.marca, Mo.modelo, A.anio, Co.color,
	R.folioRegSolicitud, R.valorVentaAlta, RA.folioRegAlta, D.valCobProyBase, D.codIdProyBase, RC.folioCodID, RC.id_regcodidenti
	FROM proyectos P 
	INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
	INNER JOIN colores Co ON V.id_color = Co.id_color
	INNER JOIN marcas M ON V.id_marca = M.id_marca 
	INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo 
	INNER JOIN anios A ON V.id_anio = A.id_anio 
	INNER JOIN registrosolicitud R ON P.id_proyecto = R.id_proyecto 
	INNER JOIN registroalta RA ON P.id_proyecto = RA.id_proyecto 
	INNER JOIN desglocecodid D ON P.id_proyecto = D.id_proyecto
	INNER JOIN registrocodidenti RC ON P.id_proyecto = RC.id_proyecto
	WHERE proyCodIdentificador = 1 ORDER BY nProyecto ASC";
	}else{
		$query = "SELECT id_proyecto
		FROM proyectos WHERE id_proyecto = 0";
	}

$resultado = mysqli_query($conexion, $query);
$cont = 0;

	while ($row = $resultado->fetch_assoc()) {
		$outputBtns1 = "";
		$outputBtns2 = "";
		$idP = $row['id_proyecto'];
		$nP = $row['nProyecto'];
		$folioRegAlta = $row['folioRegAlta'];

	// 2.7.1 Generar Supervisión de Registro con Código Identificador 
	if ($super == 1 or $regSuperCodIdentificador == 1) {
		$outputBtns1 = "<a href='#' class='btn btn-secondary' onclick='abrirModal2(\"" . $idP . "\",\"" . $nP . "\",\"" . $row['id_regcodidenti'] . "\")'><i class='fa-solid fa-pencil'></i></a>";
	} else {
		$outputBtns1 = "<a class='btn btn-outline-danger' id='enviarPzEntregadas' data-toggle='tooltip' data-placement='left' title='Sin Permiso'><i class='fa-solid fa-pencil'></i></a>";
	}

		$cont++;
		$datos[] = array(
			"0" => $cont,
			"1" => "<span class='badge badge-dark badge-pill'>{$row['id_proyecto']}</span>",
			"2" => $row['codIdProyBase'],
			"3" => $row['folioCodID'],
			"4" => $row['folioRegAlta'],
			"5" => $row['folioRegSolicitud'],
			"6" => $row['nProyecto'],
			"7" => $row['nOrden'],
			"8" => $row['marca'],
			"9" => $row['modelo'],
			"10" => $row['anio'],
			"11" => $row['placa'],
			"12" => $row['color'],
			"13" => $row['valorVentaAlta'],
			"14" => $row['valCobProyBase'],
			"15" => "<div class='input-group input-group-sm mb-3'>
						<div class='input-group-prepend'>
							<button type='button' class='btn btn-secondary dropdown-toggle' data-toggle='dropdown'><i class='fas fa-cog'></i><span data-toogle='tooltip' title='Botónes de administración'> Acciones</span>
								</button>
								<ul class='dropdown-menu' style='min-width: 2em'>
									<div class='btn-group'>
										<li class='dropdown-item'>
											<span data-toggle='tooltip' title='2.7.1 Generar Supervisión de Registro con Código Identificador '>
												".$outputBtns1."
											</span>
										</li>
									</div>
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
