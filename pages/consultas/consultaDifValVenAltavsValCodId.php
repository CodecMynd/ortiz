<?php
	require '../components/query.php'; 
	if ($super == 1 OR $verTablaRepVVAvsVCodID == 1) {

	$query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.valorVenta, P.proyectoActivo, P.registroSolicitud, P.altaProyecto, P.proyCodIdentificador, P.superCodIdentificador,
	V.placa, Co.color, M.marca, Mo.modelo, A.anio, RS.valorVentaAlta,
	RC.id_regcodidenti, RC.borrado, RC.folioCodID, RC.supervisionValores,
	S.semana, SC.semanaCobro, D.codIdProyBase, D.valCobProyBase, RE.id_repVVAvsVCI, RE.motivo
	FROM proyectos P 
	INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
	INNER JOIN colores Co ON V.id_color = Co.id_color
	INNER JOIN marcas M ON V.id_marca = M.id_marca 
	INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo 
	INNER JOIN anios A ON V.id_anio = A.id_anio 
	INNER JOIN registrosolicitud RS ON P.id_proyecto = RS.id_proyecto  
	INNER JOIN registrocodidenti RC ON P.id_proyecto = RC.id_proyecto
	INNER JOIN semanascobro SC ON RC.id_semanaCobro = SC.id_semanaCobro
	INNER JOIN semanas S ON RS.id_semana = S.id_semana
	INNER JOIN desglocecodid D ON P.id_proyecto = D.id_proyecto
    LEFT JOIN repvalvenaltavsvalcodid RE ON P.id_proyecto = RE.id_proyecto
	WHERE RC.borrado = 0 AND RS.valorVentaAlta <> D.valCobProyBase ORDER BY nProyecto ASC;";
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
		$statusSuper = "";
		$etapa = "";

		$idP = $row['id_proyecto'];
		$nP = $row['nProyecto'];
		$codIdProyBase = $row['codIdProyBase'];
		$id_regcodidenti = $row['id_regcodidenti'];
		$VVA = $row["valorVentaAlta"];
		$Sup = $row['supervisionValores'];
		$id_repVVAvsVCI = $row['id_repVVAvsVCI'];
		$motivo = $row['motivo'];

		if ($Sup == 0) {
			$statusSuper = "<h6><span class='badge badge-danger badge-pill'>Sin Supervisión</span></h6>";
		} else if ($Sup == 1) {
			$statusSuper = "<h6><span class='badge badge-success badge-pill'>Supervisado</span></h6>";
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
	
		// 3.1.1 Registrar Motivo Supervisión
         if ($super == 1 && $Sup == 0) {
             $outputBtns1 = "<a href='#' onclick='abrirModal1(".$idP.",".$nP.")' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
         } else if ($super == 1 && $Sup == 1) {
		 	$outputBtns1 = "<a class='btn btn-outline-danger' id='regMotivoSupVVAvsVCodID'><i class='fa-solid fa-pencil'></i></a>";
         } else if ($regMotivoSupVVAvsVCodID == 1 && $Sup == 0) { 
             $outputBtns1 = "<a href='#' onclick='abrirModal1(".$idP.",".$nP.")' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
         } else if ($regMotivoSupVVAvsVCodID == 1 && $Sup == 1) {
		 	$outputBtns1 = "<a class='btn btn-outline-danger' id='regMotivoSupVVAvsVCodID'><i class='fa-solid fa-pencil'></i></a>";
         } else {
		 	$outputBtns1 = "<a class='btn btn-outline-danger' id='regMotivoSupVVAvsVCodID'><i class='fa-solid fa-pencil'></i></a>";
         } 

		// 3.1.2 Modificar Motivo Supervisión
		 if ($super == 1 && $Sup == 1) { 
		 	$outputBtns2 = "<a href='../update/formUpdateMotivoSupVVAvsVCodID.php?id={$id_repVVAvsVCI}&nP={$nP}' class='btn btn-secondary'><i class='fa-solid fa-pen-to-square'></i></a>";
		 } else if ($modMotivoSupVVAvsVCodID == 1 && $Sup == 1) { 
		 	$outputBtns2 = "<a href='../update/formUpdateMotivoSupVVAvsVCodID.php?id={$id_repVVAvsVCI}&nP={$nP}' class='btn btn-secondary'><i class='fa-solid fa-pen-to-square'></i></a>";
		 } else { 
		 	$outputBtns2 = "<a class='btn btn-outline-danger' id='modMotivoSupVVAvsVCodID'><i class='fa-solid fa-pen-to-square'></i></a>";
		 } 

		// 3.1.3 Ver Link de Video, Observaciones y Generales
		 if ($super == 1) { 
		 	$outputBtns3 = "<a href='../components/verGralRepVVAvsVCodID.php?id={$idP}' class='btn btn-secondary'><i class='fa-solid fa-eye'></i></a>";
		 } else if ($verGralRepVVAvsVCodID == 1) { 
		 	$outputBtns3 = "<a href='../components/verGralRepVVAvsVCodID.php?id={$idP}' class='btn btn-secondary'><i class='fa-solid fa-eye'></i></a>";
		 } else { 
		 	$outputBtns3 = "<a class='btn btn-outline-danger' id='verGralRepVVAvsVCodID'><i class='fa-solid fa-comments'></i></a>";
		 }



		$cont++;
		$datos[] = array(
			"0" => $cont,
			"1" => "<span class='badge badge-dark badge-pill'>{$row['id_proyecto']}</span>",
			// "2" => $row['codIdProyBase'],
			// "3" => $row['folioCodID'],
			"2" => $row['nProyecto'],
			"3" => $row['nOrden'],
			"4" => $row['marca'],
			"5" => $row['modelo'],
			"6" => $row['anio'],
			"7" => $row['placa'],
			"8" => $row['color'],
			"9" => $row['semana'],
			"10" => $row['semanaCobro'],
			"11" => $row['valorVenta'],
			"12" => "<strong>{$row['valorVentaAlta']}</strong>",
			"13" => "<strong>{$row['valCobProyBase']}</strong>",
			"14" => $etapa,
			"15" => $statusSuper,
			"16" => "<div class='input-group input-group-sm mb-3'>
						<div class='input-group-prepend'>
							<button type='button' class='btn btn-secondary dropdown-toggle' data-toggle='dropdown'><i class='fas fa-cog'></i><span data-toogle='tooltip' title='Botónes de administración  Reporte Diferencia Valor Alta Vs. Valor Código Identificador'> Acciones</span>
							</button>
							<ul class='dropdown-menu text-center' style='columns:2; min-width:2em;'>
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='3.1.1 Registrar Motivo Supervisión'>
										".$outputBtns1."
									</span>
								</li>
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='3.1.2 Modificar Motivo Supervisión'>
										".$outputBtns2."
									</span>
								</li>	
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='3.1.3 Ver Link de Video, Observaciones y Generales'>
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
