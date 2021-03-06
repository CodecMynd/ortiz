<?php
require '../components/query.php';
// if ($super == 1 OR $verTablaComPlacas == 1) {
if ($super == 1 OR $verTablaCodIdentificador == 1) {
$query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.valorVenta, 
V.placa, Co.color, M.marca, Mo.modelo, A.anio, 
RS.valorVentaAlta, RC.id_regcodidenti, RC.borrado, RC.folioCodID, RC.fecha_creacion,
SS.semana AS semSolAlta, S.semana, SC.semanaCobro, D.valCobProyBase, D.codIdProyBase
FROM proyectos P 
INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
INNER JOIN colores Co ON V.id_color = Co.id_color
INNER JOIN marcas M ON V.id_marca = M.id_marca 
INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo 
INNER JOIN anios A ON V.id_anio = A.id_anio 
INNER JOIN registrosolicitud RS ON P.id_proyecto = RS.id_proyecto  
INNER JOIN registrocodidenti RC ON P.id_proyecto = RC.id_proyecto
INNER JOIN registroalta RA ON P.id_proyecto = RA.id_proyecto
INNER JOIN semanasolalta SS ON RA.id_semana = SS.id_semSolAlta
INNER JOIN semanascobro SC ON RC.id_semanaCobro = SC.id_semanaCobro
INNER JOIN semanas S ON RS.id_semana = S.id_semana
INNER JOIN desglocecodid D ON P.id_proyecto = D.id_proyecto
WHERE proyCodIdentificador = 1 AND RC.borrado = 0
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
	$nProyecto = $row['nProyecto'];
	$id_regcodidenti = $row['id_regcodidenti'];
	$codIdProyBase = $row['codIdProyBase'];
	$folioCodID = $row['folioCodID'];

	// 2.6.2 Eliminar Registro Código Identificador
	 if ($super == 1) { 
		$outputBtns1 = "<a href='#'  onclick='abrirModal1(\"" . $idP . "\",\"".$nProyecto."\", \"".$id_regcodidenti."\", \"".$codIdProyBase."\",\"".$folioCodID."\")' class='btn btn-secondary'><i class='fas fa-trash-alt'></i></a>";
	  } else if ($eliCodIdentificador == 1) { 
		$outputBtns1 = "<a href='#'  onclick='abrirModal1(\"" . $idP . "\",\"".$nProyecto."\", \"".$id_regcodidenti."\", \"".$codIdProyBase."\",\"".$folioCodID."\")' class='btn btn-secondary'><i class='fas fa-trash-alt'></i></a>";
	 } else { 
		$outputBtns1 = "<a class='btn btn-outline-danger' id='eliCodIdentificador'><i class='fas fa-trash-alt'></i></a>";
	 } 

	 // 2.6.3 Descarga PDF Registro Código Identificador
	 if ($super == 1) {
		$outputBtns2 = "<a class='btn btn-secondary' href='../components/regCodIdentificador.php?id={$row['id_proyecto']}'><i class='fa-solid fa-file-pdf'></i></a>";
	 } else if ($pdfCodIdentificador == 1) { 
		$outputBtns2 = "<a class='btn btn-secondary' href='../components/regCodIdentificador.php?id={$row['id_proyecto']}'><i class='fa-solid fa-file-pdf'></i></a>";
	 } else {
		$outputBtns2 = "<a class='btn btn-outline-danger' id='pdfCodIdentificador'><i class='fa-solid fa-file-pdf'></i></a>";
	 }

	 // 2.6.4 Ver Link de Video, Observaciones y Generales
	 if ($super == 1) { 
		 $outputBtns3 = "<a href='../consultas/tablaConsultaCodIdentificador.php?id={$row['id_proyecto']}' target='_blank' class='btn btn-secondary'><i class='fa-solid fa-eye'></i></a>";
	 } else if ($verLinkObsIdentificador == 1) { 
		  $outputBtns3 = "<a href='../consultas/tablaConsultaCodIdentificador.php?id={$row['id_proyecto']}' target='_blank' class='btn btn-secondary'><i class='fa-solid fa-eye'></i></a>";
	 } else {
		  $outputBtns3 = "<a class='btn btn-outline-danger' id='verLinkObsIdentificador'><i class='fa-solid fa-comments'></i></a>";
	 } 



	$cont++;
	$datos[] = array(
		"0" => $cont,
		"1" => "<span class='badge badge-dark badge-pill'>{$row['id_proyecto']}</span>",
		"2" => $row['fecha_creacion'],
		"3" => $row['codIdProyBase'],
		"4" => $row['folioCodID'],
		"5" => $row['nProyecto'],
		"6" => $row['nOrden'],
		"7" => $row['marca'],
		"8" => $row['modelo'],
		"9" => $row['anio'],
		"10" => $row['placa'],
		"11" => $row['color'],
		"12" => $row['valorVenta'],
		"13" => $row['valorVentaAlta'],
		"14" => $row['valCobProyBase'],
		"15" => $row['semSolAlta'],
		"16" => $row['semana'],
		"17" => $row['semanaCobro'],
		"18" => "<div class='input-group input-group-sm mb-3'>
						<div class='input-group-prepend'>
							<button type='button' class='btn btn-secondary dropdown-toggle' data-toggle='dropdown'><i class='fas fa-cog'></i><span data-toogle='tooltip' title='Botónes de administración  tabla Codigo Identificador'> Acciones</span>
							</button>
							<ul class='dropdown-menu text-center' style='columns:2; min-width:2em;'>
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='2.6.1.2 Eliminar Registro Código Identificador'>
									".$outputBtns1."
									</span>
								</li>
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='2.6.1.3 Descarga PDF Registro Código Identificador'>
									".$outputBtns2."
									</span>
								</li>
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='2.6.1.4 Ver Link de Video, Observaciones y Generales'>
									".$outputBtns3."
									</span>
								</li>
							</ul>
						</div>
					</div>"
	);
}

$resultados = array(
	"sEcho" => 1, /* informacion para la herramienta datatables */
	"iTotalRecords" => count($datos), /* envía el total de columnas a la datatable */
	"iTotalDisplayRecords" => count($datos), /* envia el total de filas a visualizar */
	"aaData" => $datos /* envía el arreglo completo que se llenó con el while */
);
echo json_encode($resultados);
