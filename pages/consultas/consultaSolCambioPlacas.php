<?php
	require '../components/query.php'; 
	if ($super == 1 OR $verTablaComAsesor == 1) {

	$query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.estadoProyectoEliminado,
	V.placa, M.marca, Mo.modelo, A.anio, Co.color
	FROM proyectos P 
	INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
	INNER JOIN colores Co On V.id_color = Co.id_color
	INNER JOIN marcas M ON V.id_marca = M.id_marca 
	INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
	INNER JOIN anios A ON V.id_anio = A.id_anio 
	WHERE P.estadoProyectoEliminado = 1 
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

		$Eliminado = $row['estadoProyectoEliminado'];
		
		// Botones -----------------------------------------------------------------------------------------------
		$outputBtns1 = "<button class='btn btn-secondary btn-sm cargarSolCambioPlacas' data-dismiss='modal' data-id_proyecto='{$row['id_proyecto']}'><i class='fa-solid fa-download'></i></button>";
		
		$cont++;
		$datos[] = array(
			"0" => $cont,
			"1" => "<span class='badge badge-dark badge-pill'>{$row['id_proyecto']}</span>",
			"2" => $row['nProyecto'],
			"3" => $row['nOrden'],
			"4" => $row['marca'],
			"5" => $row['modelo'],
			"6" => $row['anio'],
			"7" => $row['color'],
			"8" => "<h6><span class='badge badge-success badge-pill'>{$row['placa']} </span></h6>",
		 	"9" => ($Eliminado == 0)? '<h6><span class="badge badge-danger badge-pill">Eliminado</span></h6>' : '<h6><span class="badge badge-success badge-pill">Activo</span></h6>',
		 	"10" => $outputBtns1

		);
	}

	$resultados = array(
	"sEcho"=>1, /* informacion para la herramienta datatables */
	"iTotalRecords"=>count($datos), /* envía el total de columnas a la datatable */
	"iTotalDisplayRecords"=>count($datos), /* envia el total de filas a visualizar */
	"aaData"=>$datos /* envía el arreglo completo que se llenó con el while */
	);
	echo json_encode($resultados);

