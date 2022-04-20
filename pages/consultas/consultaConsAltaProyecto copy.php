<?php
	require '../components/query.php'; 
	if ($super == 1 OR $consAltaProy  == 1) {

	$query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.valorVenta, V.placa, M.marca, Mo.modelo, A.anio, 
	R.valorVentaAlta, R.id_regSolicitud, R.folioRegSolicitud, R.fecha_creacion AS Fsol,
		RA.id_regAlta, RA.folioRegAlta, RA.observAudiFinal, RA.cronometro, RA.fecha_creacion AS Falta,
        RA.borrado,
		Co.color, S.semana
		FROM proyectos P 
		INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
		INNER JOIN colores Co ON V.id_color = Co.id_color
		INNER JOIN marcas M ON V.id_marca = M.id_marca 
		INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo 
		INNER JOIN anios A ON V.id_anio = A.id_anio 
		INNER JOIN registrosolicitudbitacora R ON P.id_proyecto = R.id_proyecto 
		INNER JOIN registroaltabitacora RA ON P.id_proyecto = RA.id_proyecto 
		INNER JOIN semanas S ON R.id_semana = S.id_semana
		GROUP BY P.nProyecto ";

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
		$cronometro = "";


		$idP = $row['id_proyecto'];
		$nP = $row['nProyecto'];
		$folioRegAlta = $row['folioRegAlta'];
		$id_regAlta = $row['id_regAlta'];
		$Eliminado = $row['borrado'];

		if(empty($row['cronometro'])){
			$cronometro = "Sin Registro";
		}else{
			$cronometro = $row['cronometro'];
		}


		// 2.5.2 Eliminar Registro Alta Proyecto
		// if ($super == 1) { 
		// 	$outputBtns1 = "<a href='#' onclick='abrirModal1(\"".$idP."\",\"".$nP."\",\"".$id_regAlta."\")' class='btn btn-secondary'><i class='fas fa-trash-alt'></i></a>";
		// } else if ($eliAlta == 1) { 
		// 	$outputBtns1 = "<a href='#' onclick='abrirModal1(\"".$idP."\",\"".$nP."\",\"".$id_regAlta."\")' class='btn btn-secondary'><i class='fas fa-trash-alt'></i></a>";
		// } else { 
		// 	$outputBtns1 = "<a class='btn btn-outline-danger' id='eliAlta'><i class='fas fa-trash-alt'></i></a>";
		// } 
	
		// 2.5.3 Descarga PDF Registro Alta Proyecto
		// if ($super == 1) {
		// 	$outputBtns2 = "<a class='btn btn-secondary' href='../components/altaProyecto.php?id={$row['id_proyecto']}'><i class='fa-solid fa-file-pdf'></i></a>";
	    // } else if ($pdfAlta == 1) { 
		// 	$outputBtns2 = "<a class='btn btn-secondary' href='../components/altaProyecto.php?id={$row['id_proyecto']}'><i class='fa-solid fa-file-pdf'></i></a>";
		// } else { 
		// 	$outputBtns2 = "<a class='btn btn-outline-danger' id='pdfAlta'><i class='fa-solid fa-file-pdf'></i></a>";
		// }

// 2.5.4 Ver Link de Video, Observaciones y Generales
		// if ($super == 1) { 
		// 	$outputBtns3 = "<a class='btn btn-secondary' href='../consultas/tablaConsultaAltaProyecto.php?id={$row['id_proyecto']}'><i class='fa-solid fa-eye'></i></a>";
		// } else if ($verLinkObsAlta == 1) { 
		// 	$outputBtns3 = "<a class='btn btn-secondary' href='../consultas/tablaConsultaAltaProyecto.php?id={$row['id_proyecto']}'><i class='fa-solid fa-eye'></i></a>";
		// } else { 
		// 	$outputBtns3 = "<a class='btn btn-outline-danger' id='verLinkObsAlta'><i class='fa-solid fa-comments'></i></a>";
		//  } 


	
		$cont++;
		$datos[] = array(
			"0" => $cont,
			"1" => "<span class='badge badge-dark badge-pill'>{$row['id_proyecto']}</span>",
			"2" => $row['folioRegSolicitud'],
			"3" => $row['folioRegAlta'],
			"4" => $cronometro,
			"5" => $row['nProyecto'],
			"6" => $row['nOrden'],
			"7" => $row['marca'],
			"8" => $row['modelo'],
			"9" => $row['anio'],
			"10" => $row['placa'],
			"11" => $row['color'],
			"12" => $row['semana'],
			"13" => $row['valorVenta'],
			"14" => $row['valorVentaAlta'],
			"15" => $row['Falta'],
			"16" => $row['Fsol'],
			// "17" => ($Eliminado == 1)? '<h6><span class="badge badge-danger badge-pill">Eliminado</span></h6>' : '<h6><span class="badge badge-success badge-pill">Activo</span></h6>',

			
			// "14" => "<div class='input-group input-group-sm mb-3'>
			// 			<div class='input-group-prepend'>
			// 				<button type='button' class='btn btn-secondary dropdown-toggle' data-toggle='dropdown'><i class='fas fa-cog'></i><span data-toogle='tooltip' title='Botónes de administración tabla Alta Proyecto'> Acciones</span>
			// 				</button>
			// 				<ul class='dropdown-menu text-center' style='columns:2; min-width:2em;'>
			// 					<li class='dropdown-item'>
			// 						<span data-toggle='tooltip' title='2.5.2 Eliminar Registro Alta Proyecto'>
			// 						 ".$outputBtns1."
			// 						</span>
			// 					</li>
			// 					<li class='dropdown-item'>
			// 						<span data-toggle='tooltip' title='2.5.3 Descarga PDF Registro Alta Proyecto'>
			// 						".$outputBtns2."
			// 						</span>
			// 					</li>	
			// 					<li class='dropdown-item'>
			// 						<span data-toggle='tooltip' title='2.5.4 Ver Link de Video, Observaciones y Generales'>
			// 						".$outputBtns3."
			// 						</span>
			// 					</li>
			// 				</ul>
			// 			</div>
			// 		</div>"

		);
	}

	$resultados = array(
	"sEcho"=>1, /* informacion para la herramienta datatables */
	"iTotalRecords"=>count($datos), /* envía el total de columnas a la datatable */
	"iTotalDisplayRecords"=>count($datos), /* envia el total de filas a visualizar */
	"aaData"=>$datos /* envía el arreglo completo que se llenó con el while */
	);
	echo json_encode($resultados);
