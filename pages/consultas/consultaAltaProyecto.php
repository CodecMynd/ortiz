<?php
	require '../components/query.php'; 
	if ($super == 1 OR $verTablaAlta  == 1) {

	$query = "SELECT id_proyecto, nProyecto, nOrden, altaProyecto, valorVenta, placa, marca, modelo, anio, 
	folioRegSolicitud, valorVentaAlta, inspecCalidad, observCliente, regSolFecha_creacion, 
	id_regAlta, folioRegAlta, observAudiFinal, cronometro, link, regAltaFecha_creacion, 
	color, semana, 
	regAltaNombre, regAltaPaterno, regAltaMaterno, regSolNombres, regSolPaterno, regSolMaterno
	FROM valtaproyecto  
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

		$idP = $row['id_proyecto'];
		$nP = $row['nProyecto'];
		$folioRegAlta = $row['folioRegAlta'];
		$id_regAlta = $row['id_regAlta'];


		// 2.5.2 Eliminar Registro Alta Proyecto
		if ($super == 1) { 
			$outputBtns1 = "<a href='#' onclick='abrirModal1(\"".$idP."\",\"".$nP."\",\"".$id_regAlta."\")' class='btn btn-secondary'><i class='fas fa-trash-alt'></i></a>";
		} else if ($eliAlta == 1) { 
			$outputBtns1 = "<a href='#' onclick='abrirModal1(\"".$idP."\",\"".$nP."\",\"".$id_regAlta."\")' class='btn btn-secondary'><i class='fas fa-trash-alt'></i></a>";
		} else { 
			$outputBtns1 = "<a class='btn btn-outline-danger' id='eliAlta'><i class='fas fa-trash-alt'></i></a>";
		} 
	
		// 2.5.3 Descarga PDF Registro Alta Proyecto
		if ($super == 1) {
			$outputBtns2 = "<a class='btn btn-secondary' href='../components/altaProyecto.php?id={$row['id_proyecto']}'><i class='fa-solid fa-file-pdf'></i></a>";
	    } else if ($pdfAlta == 1) { 
			$outputBtns2 = "<a class='btn btn-secondary' href='../components/altaProyecto.php?id={$row['id_proyecto']}'><i class='fa-solid fa-file-pdf'></i></a>";
		} else { 
			$outputBtns2 = "<a class='btn btn-outline-danger' id='pdfAlta'><i class='fa-solid fa-file-pdf'></i></a>";
		}

// 2.5.4 Ver Link de Video, Observaciones y Generales
		if ($super == 1) { 
			$outputBtns3 = "<a class='btn btn-secondary' href='../consultas/tablaConsultaAltaProyecto.php?id={$row['id_proyecto']}'><i class='fa-solid fa-eye'></i></a>";
		} else if ($verLinkObsAlta == 1) { 
			$outputBtns3 = "<a class='btn btn-secondary' href='../consultas/tablaConsultaAltaProyecto.php?id={$row['id_proyecto']}'><i class='fa-solid fa-eye'></i></a>";
		} else { 
			$outputBtns3 = "<a class='btn btn-outline-danger' id='verLinkObsAlta'><i class='fa-solid fa-comments'></i></a>";
		 } 


	
		$cont++;
		$datos[] = array(
			"0" => $cont,
			"1" => "<span class='badge badge-dark badge-pill'>{$row['id_proyecto']}</span>",
			"2" => $row['regAltaFecha_creacion'],
			"3" => $row['cronometro'],
			"4" => $row['nProyecto'],
			"5" => $row['nOrden'],
			"6" => $row['marca'],
			"7" => $row['modelo'],
			"8" => $row['anio'],
			"9" => $row['placa'],
			"10" =>$row['color'],
			"11" => $row['semana'],
			"12" => $row['valorVenta'],
			"13" => $row['valorVentaAlta'],
			
			"14" => "<div class='input-group input-group-sm mb-3'>
						<div class='input-group-prepend'>
							<button type='button' class='btn btn-secondary dropdown-toggle' data-toggle='dropdown'><i class='fas fa-cog'></i><span data-toogle='tooltip' title='Botónes de administración tabla Comprobación de Placas'> Acciones</span>
							</button>
							<ul class='dropdown-menu text-center' style='columns:2; min-width:2em;'>
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='2.5.2 Eliminar Registro Alta Proyecto'>
									 ".$outputBtns1."
									</span>
								</li>
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='2.5.3 Descarga PDF Registro Alta Proyecto'>
									".$outputBtns2."
									</span>
								</li>	
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='2.5.4 Ver Link de Video, Observaciones y Generales'>
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
