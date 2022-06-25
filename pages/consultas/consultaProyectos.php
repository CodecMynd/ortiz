<?php
	require '../components/query.php'; 
	if ($super == 1 OR $listProyecto == 1) {

	$query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.valorVenta, P.fecha_creacion, P.proyectoActivo, 
	P.registroSolicitud, P.altaProyecto, P.proyCodIdentificador, P.superCodIdentificador, P.estadoProyectoEliminado,
	V.placa, M.marca, Mo.modelo, A.anio, Co.color,
	U.nombres, U.aPaterno, U.aMaterno,
    C.nombres AS nomC, C.aPaternoCliente AS patC, C.aMaternoCliente AS matC,
    PE.proyExtraEli
	FROM proyectos P 
	INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
    INNER JOIN clientes C ON P.id_cliente = C.id_cliente
	INNER JOIN colores Co On V.id_color = Co.id_color
	INNER JOIN marcas M ON V.id_marca = M.id_marca 
	INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
	INNER JOIN anios A ON V.id_anio = A.id_anio 
	INNER JOIN usuarios U ON P.id_capC = U.id_usuario
    LEFT JOIN proyextras PE ON P.id_proyecto = PE.id_proyecto
    GROUP BY P.id_proyecto  ORDER BY PE.proyExtraEli DESC";
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
		$ValorVenta = "";
		$etapa = "";
		$a = "";

		$Eliminado = $row['estadoProyectoEliminado'];
		$idP = $row['id_proyecto'];
		$pActivo = $row['proyectoActivo'];
		$nP = $row['nProyecto'];
		$cliente = $row['nomC'].' '.$row['patC'].' '.$row['matC'];


		// Valor Venta Inicial
		$v = $row['valorVenta'];

		if ($v == 0.00) {
			$ValorVenta = "<h6><span class='badge badge-danger badge-pill'>No modificado 0.00</span></h6>";
		} else {
			$ValorVenta = "<h6><span class='badge badge-success badge-pill'>Actualizado</span></h6>";
		}
		 // Etapa del Proyecto
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

		// $idP = $row['id_proyecto'];
		// $cP = $row['comPlacas'];
		// $nP = $row['nProyecto'];
		// $cS = $row['comSuperPlaca'];
		// $Eliminado = $row['estadoProyectoEliminado'];
		// $nOrden = $row['nOrden'];

		// 2.3.3 Modificar Proyecto
        if ($super == 1 and $Eliminado == 1) {
            $outputBtns1 = "<a class='btn btn-secondary' href='../update/formUpdateProyecto.php?id={$row['id_proyecto']}'><i class='fas fa-edit'></i></a>";
        } else if ($super == 1 and $Eliminado == 0) {
            $outputBtns1 = "<a class='btn btn-outline-danger' id='noModProyecto'><i class='fas fa-edit'></i></a>";
        } else if ($modProyecto == 1 and $Eliminado == 1) {
            $outputBtns1 = "<a class='btn btn-secondary' href='../update/formUpdateProyecto.php?id={$row['id_proyecto']}'><i class='fas fa-edit'></i></a>";
         } else if ($modProyecto == 1 and $Eliminado == 0) {
			$outputBtns1 = "'<a class='btn btn-outline-danger' id='noModProyecto'><i class='fas fa-edit'></i></a>";
        } else {
            $outputBtns1 = "<a class='btn btn-outline-danger' id='modProyecto'><i class='fas fa-edit'></i></a>";
        }

	// 2.3.4 Eliminar Proyecto
	if ($Eliminado == 0) {
		$outputBtns2 = "<a class='btn btn-outline-danger' id='eliProyecto' data-toggle='tooltip'  title='Proyecto Base Eliminado'><i class='fas fa-trash-alt'></i></a>";
	} else if ($super == 1 and ($row['proyExtraEli'] == 1 or $row['proyExtraEli'] == '') and  $pActivo == 1) {
		$outputBtns2 = "<a href='#' onclick='abrirModal1(\"" . $idP . "\",\"" . $nP . "\")' class='btn btn-secondary'><i class='fas fa-trash-alt'></i></a>";
	} else if ($super == 1 && $pActivo == 0 and ($row['proyExtraEli'] == 0)) {
		$outputBtns2 = "<a class='btn btn-outline-danger' id='noEliProyecto'><i class='fas fa-trash-alt'></i></a>";
	} else if ($super == 1 && $pActivo == 1 and ($row['proyExtraEli'] == 0)) {
		$outputBtns2 = "<a class='btn btn-outline-danger' id='noEliProyecto' data-toggle='tooltip'  title='Esta en Proyecto Extra'><i class='fas fa-trash-alt'></i></a>";
	} else if ($eliProyecto == 1 and ($row['proyExtraEli'] == 1 or $row['proyExtraEli'] == '') and  $pActivo == 1) {
		$outputBtns2 = "<a href='#' onclick='abrirModal1(\"" . $idP . "\",\"" . $nP . "\")' class='btn btn-secondary'><i class='fas fa-trash-alt'></i></a>";
	} else if ($eliProyecto == 1 && $pActivo == 0 and ($row['proyExtraEli'] == 0)) {
		$outputBtns2 = "<a class='btn btn-outline-danger' id='noEliProyecto'><i class='fas fa-trash-alt'></i></a>";
	} else if ($eliProyecto == 1 && $pActivo == 1 and ($row['proyExtraEli'] == 0)) {
		$outputBtns2 = "<a class='btn btn-outline-danger' id='noEliProyecto' data-toggle='tooltip'  title='Esta en Proyecto Extra'><i class='fas fa-trash-alt'></i></a>";
	} else {
		$outputBtns2 = "<a class='btn btn-outline-danger' id='eliProyecto' data-toggle='tooltip'  title='Sin Permiso'><i class='fas fa-trash-alt'></i></a>";
	}







		// 2.3.5 Descarga PDF Proyecto
		if ($super == 1 OR $pdfProyecto == 1) { 
			 $outputBtns3 = "<a class='btn btn-secondary' href='../components/ordenTrabajo.php?id={$idP}'><i class='fa-solid fa-file-pdf'></i></a>";
		} else {
			$outputBtns3 = "<a class='btn btn-outline-danger' id='pdfProyecto'><i class='fa-solid fa-file-pdf'></i></a>";
		}
		
		// 2.3.6 Ver Generales Lista de Proyectos
		if ($super == 1 OR $verGralProy == 1) { 
			$outputBtns4 = "<a href='../consultas/tablaConsultaVerListProyectos.php?id={$idP}&&nP={$nP}' class='btn btn-secondary'><i class='fa-solid fa-eye'></i></a>";
		} else { 
			$outputBtns4 = "<a class='btn btn-outline-danger' id='verGralProy'><i class='fa-solid fa-comments'></i></a>";
		} 

		// Proyecto Extra
		if($row['proyExtraEli'] == 1){
			$a = '<h6><span class="badge badge-danger badge-pill">Eliminado</span></h6>';
		}else if($row['proyExtraEli'] == ''){
			$a = '<h6><span class="badge badge-danger badge-pill">N/A</span></h6>';
		}else if($row['proyExtraEli'] == 0){
			$a = '<h6><span class="badge badge-success badge-pill">Activo</span></h6>';
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
			"9" => $cliente,
			"10" => $ValorVenta,
			"11" => $row['valorVenta'],
			"12" => ($Eliminado == 0)? '<h6><span class="badge badge-danger badge-pill">Eliminado</span></h6>' : '<h6><span class="badge badge-success badge-pill">Activo</span></h6>',
			"13" => $etapa,
			"14" => $a,
			"15" => $row['fecha_creacion'],
			"16" => "<div class='input-group input-group-sm mb-3'>
						<div class='input-group-prepend'>
							<button type='button' class='btn btn-secondary dropdown-toggle' data-toggle='dropdown'><i class='fas fa-cog'></i><span data-toogle='tooltip' title='Botónes de administración  tabla Lista de Proyectos'> Acciones</span>
							</button>
							<ul class='dropdown-menu text-center' style='columns:2; min-width:2em;'>
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='2.3.3 Modificar Proyecto'>
										".$outputBtns1."
									</span>
								</li>
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='2.3.4 Eliminar Proyecto'>
										".$outputBtns2."
									</span>
								</li>	
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='2.3.5 Descarga PDF Proyecto'>
										".$outputBtns3."
									</span>
								</li>
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='2.3.6 Ver Generales Lista de Proyectos'>
										".$outputBtns4."
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
