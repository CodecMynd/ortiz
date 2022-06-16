<?php
	require '../components/query.php'; 

	$query = "SELECT P.id_proyecto,     
	A.asesor, COUNT(I.folio) AS N
		FROM proyectos P
		INNER JOIN comasesor C ON P.id_proyecto = C.id_proyecto
		INNER JOIN asesores A ON C.id_asesor = A.id_asesor
		LEFT JOIN incidencias I ON C.id_proyecto = I.id_proyecto
		WHERE  P.estadoProyectoEliminado = 1 AND P.proyectoActivo = 1 OR P.registroSolicitud = 1 OR P.altaProyecto = 1 AND I.borrado = 0 GROUP BY A.asesor";

$resultado = mysqli_query($conexion, $query);
$cont = 0;

	while ($row = $resultado->fetch_assoc()) {


		$cont++;
		$datos[] = array(
			"0" => $cont,
			"1" => "<span class='badge badge-dark badge-pill'>{$row['asesor']}</span>",
			"2" => $row['N'],

		);
	}

	$resultados = array(
	"sEcho"=>1, /* informacion para la herramienta datatables */
	"iTotalRecords"=>count($datos), /* envía el total de columnas a la datatable */
	"iTotalDisplayRecords"=>count($datos), /* envia el total de filas a visualizar */
	"aaData"=>$datos /* envía el arreglo completo que se llenó con el while */
	);
	echo json_encode($resultados);
