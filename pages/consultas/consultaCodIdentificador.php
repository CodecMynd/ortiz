<?php
require '../components/query.php';
// if ($super == 1 OR $verTablaComPlacas == 1) {
if ($super == 1 OR $verTablaSuperCodIdentificador == 1) {
$query = "SELECT id_proyecto, nProyecto, nOrden, valorVenta, id_regcodidenti,codIdProyBase,
placa, color, marca, modelo, anio, 
valorVentaAlta, id_regcodidenti, borrado, folioCodID, fecha_creacion,
semana, semanaCobro, valCobProyBase, codIdProyBase FROM vcodidenti
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

	// 2.6.2 Eliminar Registro Código Identificador
	 if ($super == 1) { 
		$outputBtns1 = "<a href='#'  onclick='abrirModal1(\"" . $idP . "\",\"".$nProyecto."\", \"".$id_regcodidenti."\", \"".$codIdProyBase."\")' class='btn btn-secondary'><i class='fas fa-trash-alt'></i></a>";
	  } else if ($eliCodIdentificador == 1) { 
		$outputBtns1 = "<a href='#'  onclick='abrirModal1(\"" . $idP . "\",\"".$nProyecto."\", \"".$id_regcodidenti."\", \"".$codIdProyBase."\")' class='btn btn-secondary'><i class='fas fa-trash-alt'></i></a>";
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
		 $outputBtns3 = "<a href='../consultas/tablaConsultaCodIdentificador.php?id={$row['id_proyecto']}' class='btn btn-secondary'><i class='fa-solid fa-eye'></i></a>";
	 } else if ($verLinkObsIdentificador == 1) { 
		  $outputBtns3 = "<a href='../consultas/tablaConsultaCodIdentificador.php?id={$row['id_proyecto']}' class='btn btn-secondary'><i class='fa-solid fa-eye'></i></a>";
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
		"12" => $row['semana'],
		"13" => $row['semanaCobro'],
		"14" => $row['valorVenta'],
		"15" => $row['valorVentaAlta'],
		"16" => $row['valCobProyBase'],

		"17" => "<div class='input-group input-group-sm mb-3'>
						<div class='input-group-prepend'>
							<button type='button' class='btn btn-secondary dropdown-toggle' data-toggle='dropdown'><i class='fas fa-cog'></i><span data-toogle='tooltip' title='Botónes de administración tabla Marcas'> Acciones</span>
							</button>
							<ul class='dropdown-menu' style='min-width: 2em'>
								<div class='btn-group'>
									<li class='dropdown-item'>
										<span data-toggle='tooltip' title='2.6.2 Eliminar Registro Código Identificador'>
										".$outputBtns1."
										</span>
									</li>
									<li class='dropdown-item'>
										<span data-toggle='tooltip' title='2.6.3 Descarga PDF Registro Código Identificador'>
										".$outputBtns2."
										</span>
									</li>
									<li class='dropdown-item'>
										<span data-toggle='tooltip' title='2.6.4 Ver Link de Video, Observaciones y Generales'>
										".$outputBtns3."
										</span>
									</li>
								</div>
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
