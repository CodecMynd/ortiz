<?php
	require '../components/query.php'; 
	if ($super == 1 OR $vertablaDadosAltaAsignarCodId == 1) {

	$query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.altaProyecto, P.valorVenta, V.placa, M.marca, Mo.modelo, A.anio, R.folioRegSolicitud, R.valorVentaAlta, R.inspecCalidad, R.observCliente, R.fecha_creacion AS regSolFecha_creacion, RA.id_regAlta, RA.folioRegAlta, RA.observAudiFinal, RA.cronometro, LV.link, RA.fecha_creacion AS regAltaFecha_creacion, Co.color, S.semana, U.nombres AS regAltaNombre, U.aPaterno AS regAltaPaterno, U.aMaterno AS regAltaMaterno, Us.nombres AS regSolNombres, Us.aPaterno AS regSolPaterno, Us.aMaterno AS regSolMaterno
	FROM proyectos P 
	INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
	INNER JOIN colores Co ON V.id_color = Co.id_color
	INNER JOIN marcas M ON V.id_marca = M.id_marca 
	INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo 
	INNER JOIN anios A ON V.id_anio = A.id_anio 
	INNER JOIN clientes C ON P.id_cliente = C.id_cliente 
	INNER JOIN registrosolicitud R ON P.id_proyecto = R.id_proyecto 
	INNER JOIN registroalta RA ON P.id_proyecto = RA.id_proyecto 
	INNER JOIN semanas S ON R.id_semana = S.id_semana
	INNER JOIN linkvideos LV ON RA.id_link = LV.id_linkVideo 
	INNER JOIN usuarios U ON RA.id_capC = U.id_usuario
	INNER JOIN usuarios Us ON R.id_capC = Us.id_usuario
	WHERE altaProyecto = 1 ORDER BY nProyecto ASC";
}else{
	$query = "SELECT id_proyecto
	FROM proyectos WHERE id_proyecto = 0";
}
$resultado = mysqli_query($conexion, $query);
$cont = 0;

	while ($row = $resultado->fetch_assoc()) {
		$outputBtns1 = "";

		$idP = $row['id_proyecto'];
		$folioRegAlta = $row['folioRegAlta'];
		$id_regAlta = $row['id_regAlta'];
		$regAltaCapturista = $row['regAltaNombre']. ' '.$row['regAltaPaterno'].' '.$row['regAltaMaterno'];
		$regAltaFecha_creacion = $row['regAltaFecha_creacion'];
		$regSolCapturista = $row['regSolNombres']. ' '.$row['regSolPaterno'].' '.$row['regSolMaterno'];
		$regSolFecha_creacion = $row['regSolFecha_creacion'];
	
		// 2.6.1.1 Ver Generales
		if ($super == 1 OR $verGralDadosAltaAsignarCodId == 1) { 
			$outputBtns1 = "<a href='../consultas/tablaConsultaVerGralDadosAltaAsignarCodId.php?id={$idP}' class='btn btn-secondary'><i class='fa-solid fa-eye'></i></a>";
		} else { 
			$outputBtns1 = "<a class='btn btn-outline-danger' id='verGralDadosAltaAsignarCodId'><i class='fa-solid fa-comments'></i></a>";
		} 


		$cont++;
		$datos[] = array(
			"0" => $cont,
			"1" => "<span class='badge badge-dark badge-pill'>{$row['id_proyecto']}</span>",
			"2" => $row['cronometro'],
			"3" => $row['nProyecto'],
			"4" => $row['nOrden'],
			"5" => $row['marca'],
			"6" => $row['modelo'],
			"7" => $row['anio'],
			"8" => $row['placa'],
			"9" => $row['color'],
			"10" => $row['semana'],
			"11" => $row['valorVenta'],
			"12" => $row['valorVentaAlta'],
			"13" => "<div class='input-group input-group-sm mb-3'>
						<div class='input-group-prepend'>
							<button type='button' class='btn btn-secondary dropdown-toggle' data-toggle='dropdown'><i class='fas fa-cog'></i><span data-toogle='tooltip' title='Botónes de administración tabla Comprobación de Placas'> Acciones</span>
							</button>
							<ul class='dropdown-menu text-center' style='min-width:2em;'>
								<div class='btn-group'>  
									<li class='dropdown-item'>
										<span data-toggle='tooltip' title='2.6.2.1 Ver Generales'>
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
