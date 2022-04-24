<?php
	require '../components/query.php'; 
	if ($super == 1 OR $verTablaSolCambioPlacas == 1) {

	$query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.estadoProyectoEliminado, P.proyectoActivo, P.registroSolicitud, P.altaProyecto, P.proyCodIdentificador, P.superCodIdentificador,
	M.marca, Mo.modelo, A.anio, Co.color,
    CP.id_cambioPlaca, CP.folioCambioPlaca, CP.estatusEspera, CP.estatusAprobado, CP.placaActual, CP.placaAsignado
	FROM proyectos P 
	INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
	INNER JOIN colores Co On V.id_color = Co.id_color
	INNER JOIN marcas M ON V.id_marca = M.id_marca 
	INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
	INNER JOIN anios A ON V.id_anio = A.id_anio
    INNER JOIN cambioplacas CP ON P.id_proyecto = CP.id_proyecto
    ORDER BY CP.id_cambioPlaca DESC";
}else{
	$query = "SELECT id_proyecto
	FROM proyectos WHERE id_proyecto = 0";
}
$resultado = mysqli_query($conexion, $query);
$cont = 0;

	while ($row = $resultado->fetch_assoc()) {
		$outputBtns1 = "";
		$outputBtns2 = "";

		$estatusEspera = "";
		$supervisionPlaca = "";
		$nomAsesor = "";
		$etapa = "";

		$idP = $row['id_proyecto'];
		$nP = $row['nProyecto'];
		$id_cambioPlaca = $row['id_cambioPlaca'];
		$Eliminado = $row['estadoProyectoEliminado'];

		  if ($row['estatusEspera'] == 0) {
		  	$estatusEspera = "<h6><span class='badge badge-danger badge-pill'>NO Autorizado</span></h6>";
		  } else if ($row['estatusEspera'] == 1) {
		  	$estatusEspera = "<h6><span class='badge badge-warning badge-pill parpadea'>Por Autorizar</span></h6>";
		  } else{
			  $estatusEspera = "<h6><span class='badge badge-success badge-pill'>Autorizado</span></h6>";
		  }
		  // Etapa del proyecto
		  $PA = $row['proyectoActivo'];
		  $RS = $row['registroSolicitud'];
		  $AP = $row['altaProyecto'];
		  $CI = $row['proyCodIdentificador'];
		  $SU = $row['superCodIdentificador'];

		  if ($PA == 1) {
			$etapa = "<h6><span class='badge badge-success badge-pill'>Proyecto Activo</span></h6>";
		} else if ($RS == 1) {
			$etapa = "<h6><span class='badge badge-success badge-pill'>Solicitud Alta</span></h6>";
		} else if ($AP == 1) {
			$etapa = "<h6><span class='badge badge-success badge-pill'>Alta Proyecto</span></h6>";
		} else if ($CI == 1) {
			$etapa = "<h6><span class='badge badge-success badge-pill'>Código Identificador</span></h6>";
		} else if ($SU == 1) {
			$etapa = "<h6><span class='badge badge-success badge-pill'>Supervisión</span></h6>";
		} else {
			$etapa = "<h6><span class='badge badge-Warning badge-pill'>Sin Ubicación</span></h6>";
		}

		// Botones -----------------------------------------------------------------------------------------------

		// 2.3.15.2.2 Registrar Autorización Cambio de Asesor
		if ($Eliminado == 0) {
			$outputBtns1 = "<a class='btn btn-outline-danger' id='eliminado'><i class='fa-solid fa-ban'></i></a>";
		} else if ($super == 1 OR $cambioPlacasAutorizar == 1) { 
			$outputBtns1 = "<a href='../update/formUpdateCambioPlacaAutorizar.php?id=$id_cambioPlaca&&idP=$idP&&nP=$nP' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
		} else {
			$outputBtns1 = "<a class='btn btn-outline-danger' id='cambioPlacasAutorizar'><i class='fa-solid fa-pencil'></i></a>";
		}  

		// 2.3.15.2.3 Ver Generales Solicitud Cambio de Asesor
		 if ($super == 1 OR $verGralcambioPlacasAutorizar == 1) { 
		 	$outputBtns2 = "<a href='../consultas/tablaConsultaVerGralCambioPlacas.php?id=$id_cambioPlaca&&nP=$nP' class='btn btn-secondary'><i class='fa-solid fa-eye'></i></a>";
		 } else { 
		 	$outputBtns2 = "<a class='btn btn-outline-danger' id='verGralcambioPlacasAutorizar'><i class='fa-solid fa-comments'></i></a>";
		 } 

	
	
		$cont++;
		$datos[] = array(
			"0" => $cont,
			"1" => "<span class='badge badge-dark badge-pill'>{$row['id_proyecto']}</span>",
			"2" => ($Eliminado == 0)? '<h6><span class="badge badge-danger badge-pill">Eliminado</span></h6>' : '<h6><span class="badge badge-success badge-pill">Activo</span></h6>',
			"3" => $etapa,
			"4" => "<strong>{$row['folioCambioPlaca']}</strong>",
			"5" => $estatusEspera,
			"6" => "<strong>{$row['placaActual']}</strong>",
			"7" => "<strong>{$row['placaAsignado']}</strong>",
			"8" => $row['nProyecto'],
			"9" => $row['nOrden'],
		 	"10" => $row['marca'],
		 	"11" => $row['modelo'],	
		 	"12" => $row['anio'],
		 	"13" => $row['color'],
		 	"14" => "<div class='input-group input-group-sm mb-3'>
		 				<div class='input-group-prepend'>
		 					<button type='button' class='btn btn-secondary dropdown-toggle' data-toggle='dropdown'><i class='fas fa-cog'></i><span data-toogle='tooltip' title='Botónes de administración tabla Comprobación de Asignación  de Asesor'> Acciones</span>
		 					</button>
		 					<ul class='dropdown-menu text-center' style='columns:2; min-width:2em;'>
		 						<li class='dropdown-item'>
		 							<span data-toggle='tooltip' title='2.3.9.2.2 Registrar Autorización Cambio de Placas'>
		 								".$outputBtns1."
		 							</span>
		 						</li>
		 						<li class='dropdown-item'>
		 							<span data-toggle='tooltip' title='2.3.9.2.3 Ver Generales Solicitud Cambio de Placas'>
		 								".$outputBtns2."
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

