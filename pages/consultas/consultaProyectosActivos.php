<?php
	require '../components/query.php'; 
	if ($super == 1 OR $verTablaProyAct == 1) {

	$query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.fecha_creacion, V.placa, M.marca, Mo.modelo, A.anio, 
	C.nombres AS nombreCliente, C.aPaternoCliente, C.aMaternoCliente, Co.color, 
	U.nombres, U.aPaterno, U.aMaterno
	FROM proyectos P 
	INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
	INNER JOIN marcas M ON V.id_marca = M.id_marca 
	INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo 
	INNER JOIN anios A ON V.id_anio = A.id_anio 
	INNER JOIN clientes C ON P.id_cliente = C.id_cliente 
	INNER JOIN colores Co ON V.id_color = Co.id_color
	INNER JOIN usuarios U ON P.id_capC = U.id_usuario
	WHERE P.proyectoActivo = 1 AND P.registroSolicitud = 0 AND P.estadoProyectoEliminado = 1 ORDER BY nProyecto DESC";

}else{
	$query = "SELECT id_proyecto
	FROM proyectos WHERE id_proyecto = 0";
}
$resultado = mysqli_query($conexion, $query);
$cont = 0;

// $originalDate = $row['fecha_creacion'];
// echo $newDate = date("d-m-Y H:i:s ", strtotime($originalDate));

	while ($row = $resultado->fetch_assoc()) {

	

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
			"9" => $row['nombreCliente'] . ' ' . $row['aPaternoCliente'] . ' ' . $row['aMaternoCliente'],
			"10" => $row['fecha_creacion'] ,
			"11" => $capturista = $row['nombres'] . ' ' . $row['aPaterno'] . ' ' . $row['aMaterno'],
		);
	}

	$resultados = array(
	"sEcho"=>1, /* informacion para la herramienta datatables */
	"iTotalRecords"=>count($datos), /* envía el total de columnas a la datatable */
	"iTotalDisplayRecords"=>count($datos), /* envia el total de filas a visualizar */
	"aaData"=>$datos /* envía el arreglo completo que se llenó con el while */
	);
	echo json_encode($resultados);




