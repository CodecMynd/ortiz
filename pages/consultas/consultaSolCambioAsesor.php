<?php
	require '../components/query.php'; 
	if ($super == 1 OR $verTablaComAsesor == 1) {

	$query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.comAsesor, P.estadoProyectoEliminado, P.comSuperAsesor,
	V.placa, M.marca, Mo.modelo, A.anio, Co.color, Ase.asesor, CA.id_comAsesor, CS.id_comSupervision
	FROM proyectos P 
	INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
	INNER JOIN colores Co On V.id_color = Co.id_color
	INNER JOIN marcas M ON V.id_marca = M.id_marca 
	INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
	INNER JOIN anios A ON V.id_anio = A.id_anio 
    LEFT JOIN comasesor CA ON P.id_proyecto = CA.id_proyecto
	LEFT JOIN asesores Ase ON CA.id_asesor = Ase.id_asesor
    LEFT JOIN comsupervision CS ON P.id_proyecto = CS.id_proyecto
	WHERE P.proyectoActivo = 1 AND P.estadoProyectoEliminado = 1 OR P.registroSolicitud = 1 OR P.altaProyecto = 1
	GROUP BY P.id_proyecto
	ORDER BY nProyecto DESC";
}else{
	$query = "SELECT id_proyecto
	FROM proyectos WHERE id_proyecto = 0";
}
$resultado = mysqli_query($conexion, $query);
$cont = 0;

	while ($row = $resultado->fetch_assoc()) {
		$outputBtns1 = "";

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
		$id_comSupervision = $row['id_comSupervision'];

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

		$outputBtns1 = "<button class='btn btn-secondary btn-sm cargarSolCambioAsesor' data-dismiss='modal' data-id_proyecto='{$row['id_proyecto']}'><i class='fa-solid fa-download'></i></button>";
		

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
		 	"9" => ($Eliminado == 0)? '<h6><span class="badge badge-danger badge-pill">Eliminado</span></h6>' : '<h6><span class="badge badge-success badge-pill">Activo</span></h6>',
		 	"10" => $nomAsesor,
		 	"11" => $outputBtns1

		);
	}

	$resultados = array(
	"sEcho"=>1, /* informacion para la herramienta datatables */
	"iTotalRecords"=>count($datos), /* envía el total de columnas a la datatable */
	"iTotalDisplayRecords"=>count($datos), /* envia el total de filas a visualizar */
	"aaData"=>$datos /* envía el arreglo completo que se llenó con el while */
	);
	echo json_encode($resultados);

