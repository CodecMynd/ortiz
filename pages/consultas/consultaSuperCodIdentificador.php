<?php
require '../components/query.php';
// if ($super == 1 OR $verTablaComPlacas == 1) {
	
if ($super == 1 OR $verTablaSuperCodIdentificador == 1) {
$query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.valorVenta, 
V.placa, Co.color, M.marca, Mo.modelo, A.anio, 
RS.valorVentaAlta, RC.id_regcodidenti,
SS.semana AS semSolAlta, S.semana, SC.semanaCobro, 
D.valCobProyBase, D.codIdProyBase, SU.compCodId, SU.folioSupervision
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
WHERE superCodIdentificador = 1 AND D.borrado = 0";
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


	// 2.7.2 Eliminar Supervisión de Registro Código Identificador
	if ($super == 1) {
		$outputBtns1 = "<a href='#' onclick='abrirModal1(\"" . $idP . "\",\"".$codIdProyBase."\", \"".$nP."\")' class='btn btn-secondary' ><i class='fas fa-trash-alt'></i></a>";
	} else if ($eliSuperCodIdentificador == 1) {
		$outputBtns1 = "<a href='#' onclick='abrirModal1(\"" . $idP . "\",\"".$codIdProyBase."\", \"".$nP."\")' class='btn btn-secondary' ><i class='fas fa-trash-alt'></i></a>";
	} else {
		$outputBtns1 = "<a class='btn btn-outline-danger' id='eliSuperCodIdentificador'><i class='fas fa-trash-alt'></i></a>";
	}

	//2.7.3 Ver Link de Video, Observaciones y Generales
	if ($super == 1) {
		$outputBtns2 = "<a href='../consultas/tablaConsultaSuperCodIdentificador.php?id={$idP}' target='_blank' class='btn btn-secondary'><i class='fa-solid fa-eye'></i></a>";
	} else if ($verLinkObsSuperIdentificador == 1) {
		$outputBtns2 = "<a href='../consultas/tablaConsultaSuperCodIdentificador.php?id={$idP}' target='_blank' class='btn btn-secondary'><i class='fa-solid fa-eye'></i></a>";
	} else {
		$outputBtns2 = "<a class='btn btn-outline-danger' id='verLinkObsSuperIdentificador'><i class='fa-fa-comments'></i></a>";
	}

	$cont++;
	$datos[] = array(
		"0" => $cont,
		"1" => "<span class='badge badge-dark badge-pill'>{$row['id_proyecto']}</span>",
		"2" => $row['folioSupervision'],
		"3" => $row['codIdProyBase'],
		"4" => $row['compCodId'],
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
