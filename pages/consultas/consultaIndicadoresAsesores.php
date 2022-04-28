<?php
	require '../components/query.php'; 
	if ($super == 1 OR $indMensajes == 1) {
	$query = "SELECT asesor FROM asesores GROUP BY asesor";
}else{
	$query = "SELECT id_proyecto
	FROM proyectos WHERE id_proyecto = 0";
}
$resultado = mysqli_query($conexion, $query);
$cont = 0;

	while ($row = $resultado->fetch_assoc()) {

		$asesor = $row['asesor'];

		$query2 = "SELECT 
		(SELECT count(asesor)
		FROM verificacion
		WHERE FV = '$fecha_mensaje' AND asesor = '$asesor'
		) AS count_1, 
	   
		(SELECT count( asesor)
		FROM verificacion
		WHERE FV <> '$fecha_mensaje' AND asesor = '$asesor'
		) AS count_2,
	   
		(SELECT count(asesor)
		 FROM verificacion
		 WHERE FV IS NULL AND asesor = '$asesor'
		) AS count_3;";

		$resultado2 = mysqli_query($conexion, $query2);
		while ($row2 = $resultado2->fetch_assoc()) { 


		$cont++;
		$datos[] = array(
			"0" => $cont,
			"1" => "<span class='badge badge-dark badge-pill'>{$asesor}</span>",
			"2" => $row2['count_1'],
			"3" => $row2['count_2'],
			"4" => $row2['count_3'],
			"5" => $row2['count_2']+$row2['count_3'],
			"6" => $fecha_mensaje

		);
	}
}

	$resultados = array(
	"sEcho"=>1, /* informacion para la herramienta datatables */
	"iTotalRecords"=>count($datos), /* envía el total de columnas a la datatable */
	"iTotalDisplayRecords"=>count($datos), /* envia el total de filas a visualizar */
	"aaData"=>$datos /* envía el arreglo completo que se llenó con el while */
	);
	echo json_encode($resultados);
