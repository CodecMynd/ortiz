<?php
	require '../components/query.php'; 
	if ($super == 1 OR $verTablaComAsesor == 1) {

	$query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.comAsesor, P.estadoProyectoEliminado, P.comSuperAsesor, P.fecha_creacion, P.valorVenta,
	V.placa, M.marca, Mo.modelo, A.anio, Co.color, Ase.asesor, CA.id_comAsesor, CS.id_comSupervisionAsesor
	FROM proyectos P 
	INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
	INNER JOIN colores Co On V.id_color = Co.id_color
	INNER JOIN marcas M ON V.id_marca = M.id_marca 
	INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
	INNER JOIN anios A ON V.id_anio = A.id_anio 
    LEFT JOIN comasesor CA ON P.id_proyecto = CA.id_proyecto
	LEFT JOIN asesores Ase ON CA.id_asesor = Ase.id_asesor
    LEFT JOIN comsupervisionasesor CS ON P.id_proyecto = CS.id_proyecto
	WHERE P.proyectoActivo = 1 AND P.estadoProyectoEliminado = 1 OR P.registroSolicitud = 1 OR P.altaProyecto = 1
	ORDER BY nProyecto DESC";
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
		$outputBtns4 = "";
		$outputBtns5 = "";

		$comprobarAsesor = "";
		$supervisionAsesor = "";
		$nomAsesor = "";

		$idP = $row['id_proyecto'];
		$cA = $row['comAsesor'];
		$nP = $row['nProyecto'];
		$cSA = $row['comSuperAsesor'];
		$Eliminado = $row['estadoProyectoEliminado'];
		$asesor = $row['asesor'];
		$id_comAsesor = $row['id_comAsesor'];
		$id_comSupervision = $row['id_comSupervisionAsesor'];

		if ($cA == 0) {
			$comprobarAsesor = "<h6><span class='badge badge-danger badge-pill'>Sin Comprobar Asesor</span></h6>";
		} else if ($cA == 1) {
			$comprobarAsesor = "<h6><span class='badge badge-success badge-pill'>Asesor Comprobado</span></h6>";
		}

		if ($cSA == 0) {
			$supervisionAsesor = "<h6><span class='badge badge-danger badge-pill'>No Supervisado</span></h6>";
		} else if ($cSA == 1) {
			$supervisionAsesor = "<h6><span class='badge badge-success badge-pill'>Supervisado</span></h6>";
		}

		if ($asesor == '') {
			$nomAsesor = "<h6><span class='badge badge-danger badge-pill'>Sin Asesor</span></h6>";
		} else{
			$nomAsesor = "<h6><span class='badge badge-success badge-pill'>{$asesor} </span></h6>";
		}

		// Botones -----------------------------------------------------------------------------------------------

		// 2.3.15.1 Registro Comprobaci??n de Asesor
		if ($Eliminado == 0) {
			$outputBtns1 = "<a class='btn btn-outline-danger' id='eliminado'><i class='fa-solid fa-ban'></i></a>";
		} else if ($super == 1 && $cA == 0) { 
			$outputBtns1 = "<a href='#' onclick='abrirModal1(\"".$idP."\",\"".$nP."\")' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
		} else if ($super == 1 && $cA == 1) {
			$outputBtns1 = "<a class='btn btn-outline-danger' id='yaRegistrado'><i class='fa-solid fa-pencil'></i></a>";
		} else if ($regComAsesor == 1 && $cA == 0) { 
			$outputBtns1 = "<a href='#' onclick='abrirModal1(\"".$idP."\",\"".$nP."\")' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
		} else if ($regComAsesor == 1 && $cA == 1) {
			$outputBtns1 = "<a class='btn btn-outline-danger' id='yaRegistrado'><i class='fa-solid fa-pencil'></i></a>";
		} else {
			$outputBtns1 = "<a class='btn btn-outline-danger' id='regComAsesor'><i class='fa-solid fa-pencil'></i></a>";
		} 

		// 2.3.15.3 Registro Supervisi??n de Comprobaci??n de Asesor
		if ($cA == 0) {
			$outputBtns2 = "<a class='btn btn-outline-danger' id='comprobar'><i class='fa-solid fa-pencil'></i></a>";
		} else if ($Eliminado == 0) {
			$outputBtns2 = "<a class='btn btn-outline-danger' id='eliminado'><i class='fa-solid fa-ban'></i></a>";
		} else if ($super == 1 && $cSA == 0) { 
			$outputBtns2 = "<a href='#' onclick='abrirModal2(\"".$idP."\",\"".$nP."\")' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
		} else if ($super == 1 && $cSA == 1) {
			$outputBtns2 = "<a class='btn btn-outline-danger' id='yaRegistrado'><i class='fa-solid fa-pencil'></i></a>";
		} else if ($regComAsesorSuper == 1 && $cSA == 0) {
			$outputBtns2 = "<a href='#' onclick='abrirModal2(\"".$idP."\",\"".$nP."\")' class='btn btn-secondary'><i class='fa-solid fa-pencil></i></a>";
		} else if ($regComAsesorSuper == 1 && $cSA == 1) {
			$outputBtns2 = "<a class='btn btn-outline-danger' id='regComAsesor'><i class='fa-solid fa-pencil'></i></a>";
		} else {
			$outputBtns2 = "<a class='btn btn-outline-danger' id='regComAsesorSuper'><i class='fa-solid fa-pencil'></i></a>";
		} 

		// 2.3.15.5 Ver Generales Comprobaci??n de Asesor
		if ($super == 1) { 
			$outputBtns3 = "<a href='../consultas/tablaConsultaAsignarAsesor.php?id={$row['id_proyecto']}' class='btn btn-secondary'><i class='fa-solid fa-eye'></i></a>";
		} else if ($verGralComAsesor == 1) { 
			$outputBtns3 = "<a href='../consultas/tablaConsultaAsignarAsesor.php?id={$row['id_proyecto']}' class='btn btn-secondary'><i class='fa-solid fa-eye'></i></a>";
		} else { 
			$outputBtns3 = "<a class='btn btn-outline-danger' id='verGralComAsesor'><i class='fa-solid fa-comments'></i></a>";
		} 

		// 2.3.15.2 Eliminar Comprobaci??n de Asesor
		// $outputBtns4 = "<a href='#' onclick='abrirModal4(\"".$idP."\",\"".$nP."\",\"".$id_comAsesor."\")' class='btn btn-secondary'><i class='fas fa-trash-alt'></i></a>";
		 if ($cSA == 1) {
		 	$outputBtns4 = "<a class='btn btn-outline-danger' id='elimina'><i class='fas fa-trash-alt'></i></a>";
		 } else if ($Eliminado == 0) {
		 	$outputBtns4 = "<a class='btn btn-outline-danger' id='eliminado'><i class='fa-solid fa-ban'></i></a>";
		 } else if ($super == 1 && $cA == 1) { 
		 	$outputBtns4 = "<a href='#' onclick='abrirModal4(\"".$idP."\",\"".$nP."\",\"".$id_comAsesor."\")' class='btn btn-secondary'><i class='fas fa-trash-alt'></i></a>";
		 } else if ($super == 1 && $cA == 0) {
		 	$outputBtns4 = "<a class='btn btn-outline-danger' id='resgistra'><i class='fas fa-trash-alt'></i></a>";
		 } else if ($eliComAsesor == 1 && $cA == 1) { 
		 	$outputBtns4 = "<a href='#' onclick='abrirModal4(\"".$idP."\",\"".$nP."\",\"".$id_comAsesor."\")' class='btn btn-secondary'><i class='fas fa-trash-alt'></i></a>";
		 } else if ($eliComAsesor == 1 && $cA == 0) {
		 	$outputBtns4 = "<a class='btn btn-outline-danger' id='noeliComAsesor'><i class='fas fa-trash-alt'></i></a>";
		 } else {
		 	$outputBtns4 = "<a class='btn btn-outline-danger' id='eliComAsesor'><i class='fas fa-trash-alt'></i></a>";
		 }

		// 2.3.15.4 Eliminar Supervisi??n de Comprobaci??n de Asesor
        if ($Eliminado == 0) {
			$outputBtns5 = "<a class='btn btn-outline-danger' id='eliminado'><i class='fa-solid fa-ban'></i></a>";
        } else if ($super == 1 && $cSA == 1) {
            $outputBtns5 = "<a href='#' onclick='abrirModal5(\"".$idP."\",\"".$nP."\",\"".$id_comSupervision."\")' class='btn btn-secondary'><i class='fas fa-trash-alt'></i></a>";
        } else if ($super == 1 && $cSA == 0) {
			$outputBtns5 = "<a class='btn btn-outline-danger' id='resgistra'><i class='fas fa-trash-alt'></i></a>";
        } else if ($eliComAsesorSuper == 1 && $cSA == 1) { 
            $outputBtns5 = "<a href='#' onclick='abrirModal5(\"".$idP."\",\"".$nP."\",\"".$id_comSupervision."\")' class='btn btn-secondary'<i class='fas fa-trash-alt'></i></a>";
        } else if ($eliComAsesorSuper == 1 && $cSA == 0) {
            $outputBtns5 = "<a class='btn btn-outline-danger' id='noeliComAsesor'><i class='fas fa-trash-alt'></i></a>";
        } else {
            $outputBtns5 = "<a class='btn btn-outline-danger' id='eliComAsesorSuper'><i class='fas fa-trash-alt'></i></a>";
        }

	
	
		$cont++;
		$datos[] = array(
			"0" => $cont,
			"1" => "<span class='badge badge-dark badge-pill'>{$row['id_proyecto']}</span>",
			"2" => $row['fecha_creacion'],
			"3" => $row['nProyecto'],
			"4" => $row['nOrden'],
			"5" => $row['marca'],
			"6" => $row['modelo'],
			"7" => $row['anio'],
			"8" => $row['placa'],
			"9" => $row['color'],
			"10" => "<strong>{$row['valorVenta']}</strong>",
		 	"11" => ($Eliminado == 0)? '<h6><span class="badge badge-danger badge-pill">Eliminado</span></h6>' : '<h6><span class="badge badge-success badge-pill">Activo</span></h6>',
		 	"12" => $comprobarAsesor,	
		 	"13" => $supervisionAsesor,
		 	"14" => ($row['asesor'] == 0)? "<h6><span class='badge badge-danger badge-pill'>Sin Asesor</span></h6>" : "<h6><span class='badge badge-success badge-pill'>{$row['asesor']} </span></h6>",
		 	"15" => "<div class='input-group input-group-sm mb-3'>
		 				<div class='input-group-prepend'>
		 					<button type='button' class='btn btn-secondary dropdown-toggle' data-toggle='dropdown'><i class='fas fa-cog'></i><span data-toogle='tooltip' title='Bot??nes de administraci??n  tabla Comprobaci??n de Asignaci??n  de Asesor'> Acciones</span>
		 					</button>
		 					<ul class='dropdown-menu text-center' style='columns:2; min-width:2em;'>
		 						<li class='dropdown-item'>
		 							<span data-toggle='tooltip' title='2.3.15.1.1 Registrar Comprobaci??n de Asesor'>
		 								".$outputBtns1."
		 							</span>
		 						</li>
		 						<li class='dropdown-item'>
		 							<span data-toggle='tooltip' title='2.3.15.1.3 Registrar Supervisi??n Comprobaci??n de Asesor'>
		 								".$outputBtns2."
		 							</span>
		 						</li>	
		 						<li class='dropdown-item'>
		 							<span data-toggle='tooltip' title='2.3.15.1.5 Ver Comprobaci??n y Supervisi??n de Asesor'>
		 								".$outputBtns3."
		 							</span>
		 						</li>
		 						<li class='dropdown-item'>
		 							<span data-toggle='tooltip' title='2.3.15.1.2 Eliminar Comprobaci??n de Asesor'>
		 								".$outputBtns4."
		 							</span>
		 						</li>
		 						<li class='dropdown-item'>
		 							<span data-toggle='tooltip' title='2.3.15.1.4 Eliminar Supervisi??n Comprobaci??n de Asesor'>
		 								".$outputBtns5."
		 							</span>
		 						</li>
		 					</ul>
		 				</div>
				</div>"

		);
	}

	$resultados = array(
	"sEcho"=>1, /* informacion para la herramienta datatables */
	"iTotalRecords"=>count($datos), /* env??a el total de columnas a la datatable */
	"iTotalDisplayRecords"=>count($datos), /* envia el total de filas a visualizar */
	"aaData"=>$datos /* env??a el arreglo completo que se llen?? con el while */
	);
	echo json_encode($resultados);

