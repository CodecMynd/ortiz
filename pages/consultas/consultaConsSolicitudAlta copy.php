<?php
	require '../components/query.php'; 
	if ($super == 1 OR $consSolAltaProy == 1) {

	$query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.valorVenta, V.placa, M.marca, Mo.modelo, A.anio, 
	R.id_regSolicitud, R.folioRegSolicitud, R.valorVentaAlta, R.fecha_creacion, R.borrado,
	Co.color, S.semana
	FROM proyectos P 
	INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
	INNER JOIN colores Co ON V.id_color = Co.id_color
	INNER JOIN marcas M ON V.id_marca = M.id_marca 
	INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo 
	INNER JOIN anios A ON V.id_anio = A.id_anio 
	INNER JOIN clientes C ON P.id_cliente = C.id_cliente 
	LEFT JOIN registrosolicitudbitacora R ON P.id_proyecto = R.id_proyecto
	INNER JOIN semanas S ON R.id_semana = S.id_semana";
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
		$Eliminado = $row['borrado'];
		$id_regSolicitud = $row['id_regSolicitud'];
		$fecha_creacion = $row['fecha_creacion'];


		$fecha1 = new DateTime($date);
		$fecha2 = new DateTime($fecha_creacion);
		$diff = $fecha1->diff($fecha2);


		$cont++;
		$datos[] = array(
			"0" => $cont,
			"1" => "<span class='badge badge-dark badge-pill'>{$row['id_proyecto']}</span>",
			"2" => $fecha_creacion,
			"3" => $row['folioRegSolicitud'],
			"4" => $row['nProyecto'],
			"5" => $row['nOrden'],
			"6" => $row['marca'],
			"7" => $row['modelo'],
			"8" => $row['anio'],
			"9" => $row['placa'] ,
			"10" => $row['color'] ,
			"11" => $row['semana'] ,
			"12" => $row['valorVenta'] ,
			"13" => $row['valorVentaAlta'],
			"14" => ($Eliminado == 1)? '<h6><span class="badge badge-danger badge-pill">Eliminado</span></h6>' : '<h6><span class="badge badge-success badge-pill">Activo</span></h6>',


		);
	}

	$resultados = array(
	"sEcho"=>1, /* informacion para la herramienta datatables */
	"iTotalRecords"=>count($datos), /* envía el total de columnas a la datatable */
	"iTotalDisplayRecords"=>count($datos), /* envia el total de filas a visualizar */
	"aaData"=>$datos /* envía el arreglo completo que se llenó con el while */
	);
	echo json_encode($resultados);


						