<?php
	require '../components/query.php'; 

	$query = "SELECT A.id_acceso, A.fecha_acceso, A.fecha_cierre, 
	U.nombres, U.aPaterno, U.aMaterno
	FROM acceso A
	INNER JOIN usuarios U ON A.id_usuario = U.id_usuario ORDER BY id_acceso DESC";

$resultado = mysqli_query($conexion, $query);
$cont = 0;

	while ($row = $resultado->fetch_assoc()) {
		$outputBtns1 = "";
		$outputBtns2 = "";


		$cont++;
		$datos[] = array(
			"0" => $cont,
			"1" => $row['nombres'].' '.$row['aPaterno'].' '.$row['aMaterno'],
			"2" => $row['fecha_acceso'],
			"3" => $row['fecha_cierre'],

		);
	}

	$resultados = array(
	"sEcho"=>1, /* informacion para la herramienta datatables */
	"iTotalRecords"=>count($datos), /* envía el total de columnas a la datatable */
	"iTotalDisplayRecords"=>count($datos), /* envia el total de filas a visualizar */
	"aaData"=>$datos /* envía el arreglo completo que se llenó con el while */
	);
	echo json_encode($resultados);
