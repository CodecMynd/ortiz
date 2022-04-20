<?php
	require '../components/query.php'; 
	if ($super == 1 OR $consAltaProy  == 1) {

	$query = "SELECT  RA.id_regAlta, RA.folioRegAlta, RA.cronometro, RA.fecha_creacion AS Falta, RA.borrado,
	P.id_proyecto, P.nProyecto, P.nOrden, P.valorVenta,
	V.placa, M.marca, Mo.modelo, A.anio,
	Co.color, 
	R.valorVentaAlta, R.id_regSolicitud, R.folioRegSolicitud, R.fecha_creacion AS Fsol,
	S.semana
	FROM registroaltabitacora RA
	LEFT JOIN proyectos P ON RA.id_proyecto = P.id_proyecto
	LEFT JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo
	LEFT JOIN colores Co ON V.id_color = Co.id_color
	LEFT JOIN marcas M ON V.id_marca = M.id_marca 
	LEFT JOIN modelos Mo ON V.id_modelo = Mo.id_modelo 
	LEFT JOIN anios A ON V.id_anio = A.id_anio
	LEFT JOIN registrosolicitudbitacora R ON P.id_proyecto = R.id_proyecto 
	LEFT JOIN semanas S ON R.id_semana = S.id_semana 
    GROUP BY RA.folioRegAlta
	ORDER BY RA.id_regAlta DESC";

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


	
		$cont++;
		$datos[] = array(
			"0" => $cont,
			"1" => (empty($row['id_proyecto'])) ? "<span class='badge badge-danger badge-pill'>N/A</span>" : "<span class='badge badge-dark badge-pill'>{$row['id_proyecto']}</span>",
			"2" => (empty($row['folioRegSolicitud'])) ? "<span class='badge badge-danger badge-pill'>N/A</span>" : $row['folioRegSolicitud'],
			"3" => "<strong>{$row['folioRegAlta']}</strong>",
			"4" => $cronometro,
			"5" => (empty($row['nProyecto'])) ? "<span class='badge badge-danger badge-pill'>N/A</span>" : $row['nProyecto'],
			"6" => (empty($row['nOrden'])) ? "<span class='badge badge-danger badge-pill'>N/A</span>" : $row['nOrden'],
			"7" => (empty($row['marca'])) ? "<span class='badge badge-danger badge-pill'>N/A</span>" : $row['marca'],
			"8" => (empty($row['modelo'])) ? "<span class='badge badge-danger badge-pill'>N/A</span>" : $row['modelo'],
			"9" => (empty($row['anio'])) ? "<span class='badge badge-danger badge-pill'>N/A</span>" : $row['anio'],
			"10" => (empty($row['placa'])) ? "<span class='badge badge-danger badge-pill'>N/A</span>" : $row['placa'],
			"11" => (empty($row['color'])) ? "<span class='badge badge-danger badge-pill'>N/A</span>" : $row['color'],
			"12" => (empty($row['semana'])) ? "<span class='badge badge-danger badge-pill'>N/A</span" : $row['semana'],
			"13" => (empty($row['valorVenta'])) ? 0.00 : $row['valorVenta'],
			"14" => (empty($row['valorVentaAlta'])) ? 0.00 : $row['valorVentaAlta'],
			"15" => (empty($row['Falta'])) ? "<span class='badge badge-danger badge-pill'>N/A</span" : $row['Falta'],
			"16" => (empty($row['Fsol'])) ? "<span class='badge badge-danger badge-pill'>N/A</span" : $row['Fsol'],
			// "17" => ($Eliminado == 1)? '<h6><span class="badge badge-danger badge-pill">Eliminado</span></h6>' : '<h6><span class="badge badge-success badge-pill">Activo</span></h6>',


		);
	}

	$resultados = array(
	"sEcho"=>1, /* informacion para la herramienta datatables */
	"iTotalRecords"=>count($datos), /* envía el total de columnas a la datatable */
	"iTotalDisplayRecords"=>count($datos), /* envia el total de filas a visualizar */
	"aaData"=>$datos /* envía el arreglo completo que se llenó con el while */
	);
	echo json_encode($resultados);
