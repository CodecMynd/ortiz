<?php
require '../components/query.php';
if ($super == 1 or $vertablaAsignacionTop == 1) {

	$query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.estadoProyectoEliminado,
V.placa, M.marca, Mo.modelo, A.anio, Co.color,                                    
T.id_top, T.top, ASE.asesor
FROM proyectos P
INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo
INNER JOIN colores Co On V.id_color = Co.id_color
INNER JOIN marcas M ON V.id_marca = M.id_marca
INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
INNER JOIN anios A ON V.id_anio = A.id_anio
LEFT JOIN tops T ON P.id_proyecto = T.id_proyecto
LEFT JOIN comasesor CA ON P.id_proyecto = CA.id_proyecto
LEFT JOIN asesores ASE ON CA.id_asesor = ASE.id_asesor
WHERE P.proyectoActivo = 1 AND P.estadoProyectoEliminado = 1 OR P.registroSolicitud = 1 GROUP BY P.id_proyecto
ORDER BY nProyecto  DESC;";
} else {
	$query = "SELECT id_proyecto FROM proyectos WHERE id_proyecto = 0";
}

$resultado = mysqli_query($conexion, $query);
$cont = 0;

while ($row = $resultado->fetch_assoc()) {
	$validaAsesor = "";
	$validaEstadoProyecto = "";
	$validaTop = "";
	$outputBtns1 = "";
	$outputBtns2 = "";
	$outputBtns3 = "";
	// $outputBtns4 = "";
	// $outputBtns5 = "";

	$idP = $row['id_proyecto'];
	$nP = $row['nProyecto'];
	$Eliminado = $row['estadoProyectoEliminado'];
	$asesor = $row['asesor'];
	$id_top = $row['id_top'];
	$top = $row['top'];

	// Validar columna asesor 
	if ($asesor == '') {
		$validaAsesor = "<h6><span class='badge badge-danger badge-pill'>Sin Asesor</span></h6>";
	} else {
		$validaAsesor = "<h6><span class='badge badge-success badge-pill'>{$row['asesor']}</span></h6>";
	}

	// validar columna estado del proyecto
	if ($Eliminado == 0) {
		$validaEstadoProyecto = "<h6><span class='badge badge-danger badge-pill'>Eliminado</span></h6>";
	} else {
		$validaEstadoProyecto = "<h6><span class='badge badge-success badge-pill'>Activo</span></h6>";
	}

	// valida columna Top
	if ($top == 0) {
		$validaTop = "<h6><span class='badge badge-danger badge-pill top' data-toggle='tooltip' data-placement='bottom' title='Este Proyecto no es Top'>No es Top</span></h6>";
	} else {
		$validaTop = "<h6><span class='badge badge-success badge-pill top' data-toggle='tooltip' data-placement='bottom' title='Este Proyecto es Top'>Es Top</span></h6>";
	}

	// Acciones ----------------------------------------------------------------------------------------- 
	// Boton 2.3.5.1 Registro Motivo Asignación de Top
	if ($Eliminado == 0) {
		$outputBtns1 = "<a class='btn btn-outline-danger' id='eliminado'><i class='fa-solid fa-ban'></i></a>";
	} else if ($super == 1 and $top == 1 ) {
		$outputBtns1 = "<a class='btn btn-outline-danger' id='yaRegistrado'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($super == 1 and $top == '') {
		$outputBtns1 = "<a href='../adds/formAddAsignacionTop.php?id={$idP}&nP={$nP}' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($regAsignacionTop == 1 and $top == 1 ) {
		$outputBtns1 = "<a class='btn btn-outline-danger' id='yaRegistrado'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($regAsignacionTop == 1 and $top == '') {
		$outputBtns1 = "<a href='../adds/formAddAsignacionTop.php?id={$idP}&nP={$nP}' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else {
		$outputBtns1 = "<a class='btn btn-outline-danger' id='regAsignacionTop'><i class='fa-solid fa-spell-check'></i></a>";
	}

	// 2.3.5.2 Eliminar Motivo Asignación de Top
	if ($Eliminado == 0) {
		$outputBtns2 = "<a class='btn btn-outline-danger' id='eliminado'><i class='fa-solid fa-ban'></i></a>";
	} else if ($super == 1 AND $top == 1) {
		$outputBtns2 = "<a href='#' onclick='abrirModal1(\"" . $idP . "\",\"" . $nP . "\",\"" . $id_top . "\")' class='btn btn-secondary'><i class='fas fa-trash-alt'></i></a>";
	} else if ($super == 1 and $top == '' ) {
		$outputBtns2 = "<a class='btn btn-outline-danger' id='yaRegistrado'><i class='fas fa-trash-alt'></i></a>";
	} else if ($eliAsignacionTop == 1 AND $top == 1) {
		$outputBtns2 = "<a href='#' onclick='abrirModal1(\"" . $idP . "\",\"" . $nP . "\",\"" . $id_top . "\")' class='btn btn-secondary'><i class='fas fa-trash-alt'></i></a>";
	} else if ($eliAsignacionTop == 1 and $top == '' ) {
		$outputBtns2 = "<a class='btn btn-outline-danger' id='yaRegistrado'><i class='fas fa-trash-alt'></i></a>";
	} else {
		$outputBtns2 = "<a class='btn btn-outline-danger' id='eliAsignacionTop'><i class='fa-solid fa-comments'></i></a>";
	}

	// Boton 2.3.5.3 Ver Generales Asignación de Top
	if ($super == 1 or $verGralAsignacionTop == 1) {
		$outputBtns3 = "<a href='../consultas/tablaConsultaVerGralAsignacionTop.php?id={$idP}&nP={$nP}' class='btn btn-secondary'><i class='fa-solid fa-eye'></i></a>";
	} else {
		$outputBtns3 = "<a class='btn btn-outline-danger' id='verGralAsignacionTop'><i class='fa-solid fa-spell-check'></i></a>";
	}

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
		"9" => $validaAsesor,
		"10" => $validaEstadoProyecto,
		"11" => $validaTop,
		"12" => "<div class='input-group input-group-sm mb-3'>
		<div class='input-group-prepend'>
			<button type='button' class='btn btn-secondary dropdown-toggle' data-toggle='dropdown'><i class='fas fa-cog'></i><span data-toogle='tooltip' title='Botónes de administración  tabla Verificación Diaria Vehículos Activos'> Acciones</span>
			</button>
			<ul class='dropdown-menu' style=' columns: 2; min-width:2em;'>
				<li class='dropdown-item'>
					<span data-toggle='tooltip' title='2.3.5.1 Registro Motivo Asignación de Top'>
						" . $outputBtns1 . "
					</span>
				</li>

				<li class='dropdown-item'>
					<span data-toggle='tooltip' title='2.3.5.2 Eliminar Motivo Asignación de Top'>
						" . $outputBtns2 . "
					</span>
				</li>
				<li class='dropdown-item'>
					<span data-toggle='tooltip' title='2.3.5.3 Ver Generales Asignación de Top'>
					" . $outputBtns3 . "
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
