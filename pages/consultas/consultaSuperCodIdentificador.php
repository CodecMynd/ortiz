<?php
require '../components/query.php';
// if ($super == 1 OR $verTablaComPlacas == 1) {
	
if ($super == 1 OR $verTablaSuperCodIdentificador == 1) {
$query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.valorVenta, 
V.placa, Co.color, M.marca, Mo.modelo, A.anio, 
RS.valorVentaAlta, RC.id_regcodidenti,RC.folioCodID,
SS.semana AS semSolAlta, S.semana, SC.semanaCobro, 
D.valCobProyBase, D.codIdProyBase, SU.compCodId, SU.folioSupervision, SU.borrado, SU.id_supervisado,
PE.folioProyExtra, PE.valorProyExtra
FROM proyectos P 
INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
INNER JOIN colores Co ON V.id_color = Co.id_color
INNER JOIN marcas M ON V.id_marca = M.id_marca 
INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo 
INNER JOIN anios A ON V.id_anio = A.id_anio 
INNER JOIN registrosolicitud RS ON P.id_proyecto = RS.id_proyecto  
INNER JOIN registroalta RA ON P.id_proyecto = RA.id_proyecto
INNER JOIN registrocodidenti RC ON P.id_proyecto = RC.id_proyecto
INNER JOIN semanasolalta SS ON RS.id_semana = SS.id_semSolAlta
INNER JOIN semanascobro SC ON RC.id_semanaCobro = SC.id_semanaCobro
INNER JOIN semanas S ON RS.id_semana = S.id_semana
INNER JOIN desglocecodid D ON P.id_proyecto = D.id_proyecto 
INNER JOIN supervisado SU ON P.id_proyecto = SU.id_proyecto
LEFT JOIN proyextras PE ON P.id_proyecto = PE.id_proyecto
ORDER BY SU.id_supervisado DESC";
}else{
	$query = "SELECT id_proyecto
	FROM proyectos WHERE id_proyecto = 0";
}

$resultado = mysqli_query($conexion, $query);
$cont = 0;

while ($row = $resultado->fetch_assoc()) {
	$outputBtns1 = "";
	$outputBtns2 = "";

	$idP = $row['id_proyecto'];
	$codIdProyBase = $row['codIdProyBase'];
	$nP = $row['nProyecto'];
	$Eliminado = $row['borrado'];

	// validar columna estado del proyecto
	if ($Eliminado == 1) {
		$validaEstadoProyecto = "<h6><span class='badge badge-danger badge-pill'>Eliminado</span></h6>";
	} else {
		$validaEstadoProyecto = "<h6><span class='badge badge-success badge-pill'>Activo</span></h6>";
	}


	// 2.7.2 Eliminar Supervisión de Registro Código Identificador
	if($Eliminado == 1){
		$outputBtns1 = "<a class='btn btn-outline-danger' id='eliSuperCodIdentificador' data-toggle='tooltip' data-placement='left' title='Proyecto ya Eliminado'><i class='fas fa-trash-alt'></i></a>";
	}else if ($super == 1 OR $eliSuperCodIdentificador == 1) {
		$outputBtns1 = "<a href='#' onclick='abrirModal1(\"" . $idP . "\",\"".$codIdProyBase."\", \"".$nP."\",\"".$row['id_supervisado']."\")' class='btn btn-secondary' ><i class='fas fa-trash-alt'></i></a>";
	} else {
		$outputBtns1 = "<a class='btn btn-outline-danger' id='eliSuperCodIdentificador' data-toggle='tooltip' data-placement='left' title='Sin Permiso'><i class='fas fa-trash-alt'></i></a>";
	}

	//2.7.3 Ver Link de Video, Observaciones y Generales
	if ($super == 1) {
		$outputBtns2 = "<a href='../consultas/tablaConsultaSuperCodIdentificador.php?id={$idP}' target='_blank' class='btn btn-secondary'><i class='fa-solid fa-eye'></i></a>";
	} else if ($verLinkObsSuperIdentificador == 1) {
		$outputBtns2 = "<a href='../consultas/tablaConsultaSuperCodIdentificador.php?id={$idP}' target='_blank' class='btn btn-secondary'><i class='fa-solid fa-eye'></i></a>";
	} else {
		$outputBtns2 = "<a class='btn btn-outline-danger' id='verLinkObsSuperIdentificador' data-toggle='tooltip' data-placement='left' title='Sin Permiso'><i class='fa-fa-comments'></i></a>";
	}
	$folioProyExtra = (empty($row['folioProyExtra'])) ? "<h6><span class='badge badge-danger badge-pill'>N/A</span></h6>" : "<strong>{$row['folioProyExtra']}</strong>";
	$valorProyExtra = (empty($row['valorProyExtra'])) ? 0 : $row['valorProyExtra'];

	$cont++;
	$datos[] = array(
		"0" => $cont,
		"1" => "<span class='badge badge-dark badge-pill'>{$row['id_proyecto']}</span>",
		"2" => $row['folioSupervision'],
		"3" => $row['folioCodID'],
		"4" => $row['codIdProyBase'],
		"5" => $validaEstadoProyecto,
		"6" => $row['nProyecto'],
		"7" => $row['nOrden'],
		"8" => $row['marca'],
		"9" => $row['modelo'],
		"10" => $row['anio'],
		"11" => $row['placa'],
		"12" => $row['color'],
		"13" => $folioProyExtra,
		"14" => $valorProyExtra,
		"15" => $row['valorVenta'],
		"16" => $row['valorVentaAlta'],
		"17" => $row['valCobProyBase'],
		"18" => $row['semSolAlta'],
		"19" => $row['semana'],
		"20" => $row['semanaCobro'],
		"21" => "<div class='input-group input-group-sm mb-3'>
						<div class='input-group-prepend'>
							<button type='button' class='btn btn-secondary dropdown-toggle' data-toggle='dropdown'><i class='fas fa-cog'></i><span data-toogle='tooltip' title='Botónes de administración  tabla Supervisión Codigo Identificador'> Acciones</span>
							</button>
							<ul class='dropdown-menu' style='min-width: 2em'>
								<div class='btn-group'>
									<li class='dropdown-item'>
										<span data-toggle='tooltip' title='2.7.2 Eliminar Supervisión de Registro Código Identificador '>
											".$outputBtns1."
										</span>
									</li>
									<li class='dropdown-item'>
										<span data-toggle='tooltip' title='2.7.3 Ver Link de Video, Observaciones y Generales'>
											".$outputBtns2."
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
