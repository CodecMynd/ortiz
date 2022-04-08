<?php
	require '../components/query.php'; 
	if ($super == 1 OR $verTablaComPlacas == 1) {

	$query = "SELECT id_proyecto, nProyecto, nOrden, comPlacas, estadoProyectoEliminado, comSuperPlaca,
	nombres, aPaternoCliente, aMaternoCliente,
	placa, marca, modelo, anio, color,
	linkComPlaca, fecha_creacion,
	UPN, UPP, UPM,
	textSupervision, CSF,
	UCSN, UCSP, UCSM
	FROM vplacas
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

		$idP = $row['id_proyecto'];
		$cP = $row['comPlacas'];
		$nP = $row['nProyecto'];
		$cS = $row['comSuperPlaca'];
		$Eliminado = $row['estadoProyectoEliminado'];
		$nOrden = $row['nOrden'];
	

		// 2.3.9.1 Registrar Comprobación de Placa
		if ($Eliminado == 0) {
			$outputBtns1 = "<a class='btn btn-outline-danger' id='eliminado'><i class='fa-solid fa-ban'></i></a>";
		} else if ($super == 1 && $cP == 0) { 
			$outputBtns1 = "<a href='#' onclick='abrirModal1(".$idP.",".$nP.")' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
		} else if ($super == 1 && $cP == 1) {
			$outputBtns1 = "<a class='btn btn-outline-danger' id='yaRegistrado'><i class='fa-solid fa-pencil'></i></a>";
		} else if ($regComPlacas == 1 && $cP == 0) { 
			$outputBtns1 = "<a href='#' onclick='abrirModal1(".$idP.",".$nP.")' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
		} else if ($regComPlacas == 1 && $cP == 1) {
			$outputBtns1 = "<a class='btn btn-outline-danger' id='yaRegistrado'><i class='fa-solid fa-pencil'></i></a>";
		} else {
			$outputBtns1 = "<a class='btn btn-outline-danger' id='regComPlacas'><i class='fa-solid fa-pencil'></i></a>";
		}

		// 2.3.9.3 Registrar Supervisión Comprobación de Placa
		if ($cP == 0) {
			$outputBtns2 = "<a class='btn btn-outline-danger' id='comprobar'><i class='fa-solid fa-spell-check'></i></a>";
		} else if ($Eliminado == 0) {
			$outputBtns2 = "<a class='btn btn-outline-danger' id='eliminado'><i class='fa-solid fa-ban'></i></a>";
		} else if ($super == 1 && $cS == 0) { 
			$outputBtns2 = "<a href='#' onclick='abrirModal2(".$idP.",".$nP.")' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
		} else if ($super == 1 && $cS == 1) {
			$outputBtns2 = "<a class='btn btn-outline-danger' id='yaRegistrado'><i class='fa-solid fa-spell-check'></i></a>";
		} else if ($regComPlacasSuper == 1 && $cS == 0) { 
			$outputBtns2 = "<a href='#' onclick='abrirModal2(".$idP.",".$nP.")' class='btn btn-secondary'><i class='fa-solid fa-spell-check'></i></a>";
		} else if ($regComPlacasSuper == 1 && $cS == 1) {
			$outputBtns2 = "<a class='btn btn-outline-danger' id='regComPlacas'><i class='fa-solid fa-spell-check'></i></a>";
		} else {
			$outputBtns2 = "<a class='btn btn-outline-danger' id='regComPlacasSuper'><i class='fa-solid fa-spell-check'></i></a>";
		} 

		// 2.3.9.5 Ver Generales Comprobación de Placas
		if ($super == 1) {
			$outputBtns4 = "<a href='../consultas/tablaConsultaComPlacas.php?id={$idP}' class='btn btn-secondary'><i class='fa-solid fa-eye'></i></a>";
		} else if ($verGralComPlacas == 1) { 
			// $outputBtns4 = "<a href='#' onclick='abrirModal5(\"".$idP."\",\"".$nP."\",\"".$nOrden."\",\"".$linkComPlaca."\",\"".$UPN."\",\"".$UPP."\",\"".$UPM."\",\"".$fecha_creacion."\",\"".$textSupervision."\",\"".$UCSN."\",\"".$UCSP."\",\"".$UCSM."\",\"".$CSF."\")' class='btn btn-outline-danger' id='verGralComPlacas'><i class='fa-solid fa-comments'></i></a>";
			$outputBtns4 = "<a href='../consultas/tablaConsultaComPlacas.php?id={$idP}' class='btn btn-secondary'><i class='fa-solid fa-eye'></i></a>";
		} else {
			$outputBtns4 = "<a class='btn btn-secondary'><i class='fa-solid fa-eye'></i></a>";
		}

		// 2.3.9.3 Eliminar Comprobación de Placa
		if ($cS == 1) {
			$outputBtns3 = "<a class='btn btn-outline-danger' id='elimina'><i class='fas fa-trash-alt'></i></a>";
		} else if ($Eliminado == 0) {
			$outputBtns3 = "<a class='btn btn-outline-danger' id='eliminado'><i class='fa-solid fa-ban'></i></a>";
		} else if ($super == 1 && $cP == 1) { 
			$outputBtns3 = "<a href='#' onclick='abrirModal3(".$idP.",".$nP.")' class='btn btn-secondary'><i class='fas fa-trash-alt'></i></a>";
		} else if ($super == 1 && $cP == 0) {
			$outputBtns3 = "<a class='btn btn-outline-danger' id='resgistra'><i class='fas fa-trash-alt'></i></a>";
		} else if ($eliComPlacas == 1 && $cP == 1) {
			$outputBtns3 = "<a href='#' onclick='abrirModal3(".$idP.",".$nP.")' class='btn btn-secondary'><i class='fas fa-trash-alt'></i></a>";
		} else if ($eliComPlacas == 1 && $cP == 0) {
			$outputBtns3 = "<a class='btn btn-outline-danger' id='noeliComPlacas'><i class='fas fa-trash-alt'></i></a>";
		} else {
			$outputBtns3 = "<a class='btn btn-outline-danger' id='eliComPlacas'><i class='fas fa-trash-alt'></i></a>";
		}

		// 2.3.9.4 Eliminar Supervisión Comprobación de Placa
		if ($Eliminado == 0) {
			$outputBtns5 = "<a class='btn btn-outline-danger' id='eliminado'><i class='fa-solid fa-ban'></i></a>";
		} else if ($super == 1 && $cS == 1) { 
			$outputBtns5 = "<a  href='#' onclick='abrirModal4(".$idP.",".$nP.")' class='btn btn-secondary'><i class='fas fa-trash-alt'></i></a>";
		} else if ($super == 1 && $cS == 0) {
			$outputBtns5 = "<a class='btn btn-outline-danger' id='resgistra'><i class='fa-solid fa-eraser'></i></a>";
		} else if ($eliComPlacasSuper == 1 && $cS == 1) { 
			$outputBtns5 = "<a  href='#' onclick='abrirModal4(".$idP.",".$nP.")' class='btn btn-secondary'><i class='fas fa-trash-alt'></i></a>";
		} else if ($eliComPlacasSuper == 1 && $cS == 0) {
			$outputBtns5 = "<a class='btn btn-outline-danger' id='noeliComPlacas'><i class='fa-solid fa-eraser'></i></a>";
		} else {
			$outputBtns5 = "<a class='btn btn-outline-danger' id='eliComPlacasSuper'><i class='fa-solid fa-eraser'></i></a>";
		}


		$cont++;
		$datos[] = array(
			"0" => $cont,
			"1" => $row['nProyecto'],
			"2" => $row['nOrden'],
			"3" => $row['marca'],
			"4" => $row['modelo'],
			"5" => $row['anio'],
			"6" => $row['placa'],
			"7" => $row['color'],
			"8" => $row['nombres'] . ' ' . $row['aPaternoCliente'] . ' ' . $row['aMaternoCliente'],
			"9" => ($Eliminado == 0)? '<h6><span class="badge badge-danger badge-pill">Eliminado</span></h6>' : '<h6><span class="badge badge-success badge-pill">Activo</span></h6>',

			"10" => ($cP == 0)? '<h6><span class="badge badge-danger badge-pill">Sin Comprobar Placas</span></h6>' : '<h6><span class="badge badge-success badge-pill">Placa Comprobada</span></h6>',

			"11" => ($cS == 0)? '<h6><span class="badge badge-danger badge-pill">No Supervisado</span></h6>' : '<h6><span class="badge badge-success badge-pill">Supervisado</span></h6>',
			
			"12" => "<div class='input-group input-group-sm mb-3'>
						<div class='input-group-prepend'>
							<button type='button' class='btn btn-secondary dropdown-toggle' data-toggle='dropdown'><i class='fas fa-cog'></i><span data-toogle='tooltip' title='Botónes de administración tabla Comprobación de Placas'> Acciones</span>
							</button>
							<ul class='dropdown-menu text-center' style='columns:2; min-width:2em;'>
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='2.3.9.1 Registrar Comprobación de Placa'>
										".$outputBtns1."
									</span>
								</li>
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='2.3.9.3 Registrar Supervisión Comprobación de Placa'>
										".$outputBtns2."
									</span>
								</li>	
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='2.3.9.2 Eliminar Comprobación de Placa'>
										".$outputBtns3."
									</span>
								</li>
								<li class='dropdown-item?>
									<span data-toggle='tooltip' title='2.3.9.4 Eliminar Supervisión Comprobación de Placa'>
										".$outputBtns5."
									</span>
								</li>
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='2.3.9.5 Ver Generales Comprobación de Placas'>
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
