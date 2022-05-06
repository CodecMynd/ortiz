<?php
require '../components/query.php';
if ($super == 1 or $verTablaSegDiaProAseTecnico == 1) {

	$query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.comActMinDia, P.estadoProyectoEliminado, P.comSuperActMinDia,
	V.placa, M.marca, Mo.modelo, A.anio, Co.color,      
	AST.id_aseTec, AST.aseTec, ASE.asesor,                             
	SD.fecha_creacionV, 
	SDS.sup, MAX(SDS.id_SegDiaProAseTecnicoSuper) AS id_SegDiaProAseTecnicoSuper, 	
    SD.com, MAX(SD.id_SegDiaProAseTecnico) AS id_SegDiaProAseTecnico,
	MAX(SDS.id_segDiaProAseTecnico) as id_segDiaProAseTecnico2,
	SDS.fecha_creacionS,
	ASE.asesor, T.top
	FROM proyectos P
	INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo
	INNER JOIN colores Co On V.id_color = Co.id_color
	INNER JOIN marcas M ON V.id_marca = M.id_marca
	INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
	INNER JOIN anios A ON V.id_anio = A.id_anio
	INNER JOIN asesoramientostecnicos AST ON P.id_proyecto = AST.id_proyecto
	LEFT JOIN segdiaproasetecnico SD ON P.id_proyecto = SD.id_proyecto
	LEFT JOIN segdiaproasetecnicosuper SDS ON P.id_proyecto = SDS.id_proyecto
	LEFT JOIN comasesor CA ON P.id_proyecto = CA.id_proyecto
	LEFT JOIN asesores ASE ON CA.id_asesor = ASE.id_asesor
	LEFT JOIN tops T ON P.id_proyecto = T.id_proyecto
	WHERE P.proyectoActivo = 1 AND P.estadoProyectoEliminado = 1 OR P.registroSolicitud = 1       GROUP BY P.id_proyecto
	ORDER BY nProyecto DESC";
} else {
	$query = "SELECT id_proyecto FROM proyectos WHERE id_proyecto = 0";
}

$resultado = mysqli_query($conexion, $query);
$cont = 0;

while ($row = $resultado->fetch_assoc()) {
	$validaAsesor = "";
	$validaEstadoProyecto = "";
	$validaCom = "";
	$validaSup = "";
	$validaUltRegCom = "";
	$validaUltRegSup = "";
	$outputBtns1 = "";
	$outputBtns2 = "";
	$outputBtns3 = "";

	$idP = $row['id_proyecto'];
	$nP = $row['nProyecto'];
	$Eliminado = $row['estadoProyectoEliminado'];
	$asesor = $row['asesor'];
	$id_SegDiaProAseTecnico = $row['id_SegDiaProAseTecnico'];
	$id_SegDiaProAseTecnicoSuper = $row['id_SegDiaProAseTecnicoSuper'];
	$top = $row['top'];
	$com = $row['com'];
	$sup = $row['sup'];

	$c = $row['id_SegDiaProAseTecnico'];
	$s = $row['id_segDiaProAseTecnico2'];

	// Validar columna asesor 
	if ($asesor == '') {
		$validaAsesor = "<h6><span class='badge badge-danger badge-pill'>Sin Asesor</span></h6>";
	} else {
		$validaAsesor = "<h6><span class='badge badge-success badge-pill'>{$row['asesor']}</span></h6>";
	}

	// valida columna Top
	if ($top == 0) {
		$validaTop = "<h6><span class='badge badge-ligth badge-pill top' data-toggle='tooltip' data-placement='bottom' title='Este Proyecto no es Top'><i class='fa-solid fa-star fa-2x' style='color:#CCCCCC'></i></span></h6>";
	} else {
		$validaTop = "<h6><span class='badge badge-ligth badge-pill top' data-toggle='tooltip' data-placement='bottom' title='Este Proyecto es Top'><i class='fa-solid fa-star fa-2x' style='color:#28A745'></i></span></h6>";
	}

	// validar columna estado del proyecto
	if ($Eliminado == 0) {
		$validaEstadoProyecto = "<h6><span class='badge badge-danger badge-pill'>Eliminado</span></h6>";
	} else {
		$validaEstadoProyecto = "<h6><span class='badge badge-success badge-pill'>Activo</span></h6>";
	}

	// valida columna status comprobación
	if (empty($c)) {
		$validaCom = "<h6><span class='badge badge-danger badge-pill'>Sin Ningún Registro</span></h6>";
	} else if ($c != $s) {
		$validaCom = "<h6><span class='badge badge-success badge-pill'>Comprobado</span></h6>";
	} else if ($c == $s) {
		$validaCom = "<h6><span class='badge badge-warning badge-pill'>Sin Comprobación</span></h6>";
	} else {
		$validaCom = "<h6><span class='badge badge-warning badge-pill'>Sin Comprobación0</span></h6>";
	}


	// valida columna status Supervision
	if (empty($s)) {
		$validaSup = "<h6><span class='badge badge-danger badge-pill'>Sin Ningún Registro</span></h6>";
	} else if ($c == $s) {
		$validaSup = "<h6><span class='badge badge-success badge-pill'>Supervisado</span></h6>";
	} else if ($c != $s) {
		$validaSup = "<h6><span class='badge badge-warning badge-pill'>Sin Supervisión</span></h6>";
	} else {
		$validaSup = "<h6><span class='badge badge-warning badge-pill'>Sin Supervisión3</span></h6>";
	}

	// validar columna ultimo registro comprobacion
	if (empty($row['fecha_creacionV'])) {
		$validaUltRegCom = "<h6><span class='badge badge-danger badge-pill'>Sin Ningún Registro</span></h6>";
	} else {
		$validaUltRegCom = "<h6><span class='badge badge-success badge-pill'>{$row['fecha_creacionV']}</span></h6>";
	}

	// validar columna ultimo registro supervision
	if (empty($row['fecha_creacionS'])) {
		$validaUltRegSup = "<h6><span class='badge badge-danger badge-pill'>Sin Ningún Registro</span></h6>";
	} else {
		$validaUltRegSup = "<h6><span class='badge badge-success badge-pill'>{$row['fecha_creacionS']}</span></h6>";
	}

	// Acciones ----------------------------------------------------------------------------------------- 
	// Boton 2.3.6.1.1 Registro Comprobación de Seguimiento Diario Programa de Asesoramiento Técnico
	if ($Eliminado == 0) {
		$outputBtns1 = "<a class='btn btn-outline-danger' id='eliminado'><i class='fa-solid fa-ban'></i></a>";
	} else if ($super == 1 and (empty($c)) ){
		$outputBtns1 = "<a href='../adds/formAddSegDiaAseTecnico.php?id={$idP}' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($super == 1 and ($c > 0 AND empty($s))){
		$outputBtns1 = "<a class='btn btn-outline-danger' id='yaRegistrado'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($super == 1 and ($c != $s)) {
		$outputBtns1 = "<a class='btn btn-outline-danger' id='elimina'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($super == 1 and ($c == $s)) {
		$outputBtns1 = "<a href='../adds/formAddSegDiaAseTecnico.php?id={$idP}' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($regComSegDiaAseTecnico == 1 and (empty($c)) ){
		$outputBtns1 = "<a href='../adds/formAddSegDiaAseTecnico.php?id={$idP}' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($regComSegDiaAseTecnico == 1 and ($c > 0 AND empty($s))){
		$outputBtns1 = "<a class='btn btn-outline-danger' id='yaRegistrado'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($regComSegDiaAseTecnico == 1 and ($c != $s)) {
		$outputBtns1 = "<a class='btn btn-outline-danger' id='elimina'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($regComSegDiaAseTecnico == 1 and ($c == $s)) {
		$outputBtns1 = "<a href='../adds/formAddSegDiaAseTecnico.php?id={$idP}' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else {
		$outputBtns1 = "<a class='btn btn-outline-danger' id='regComSegDiaAseTecnico'><i class='fa-solid fa-pencil'></i></a>";
	}

	// 2.3.6.1.2 Registro Supervisión de Seguimiento Diario Programa de Asesoramiento Técnico
	if ($Eliminado == 0) {
		$outputBtns2 = "<a class='btn btn-outline-danger' id='eliminado'><i class='fa-solid fa-ban'></i></a>";
	} else if ($super == 1 and (empty($c) and empty($s))) {
		$outputBtns2 = "<a class='btn btn-outline-danger' id='elimina'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($super == 1 and ($c > 0 AND empty($s))){
		$outputBtns2 = "<a href='../adds/formAddSupervisionSegDiaAseTecnico.php?idP={$idP}&id={$id_SegDiaProAseTecnico}' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($super == 1 and ($c == $s)) {
		$outputBtns2 = "<a class='btn btn-outline-danger' id='elimina'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($super == 1 and ($c != $s)) {
		$outputBtns2 = "<a href='../adds/formAddSupervisionSegDiaAseTecnico.php?idP={$idP}&id={$id_SegDiaProAseTecnico}' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($regSuperSegDiaAseTecnico == 1 and (empty($c) and empty($s))) {
		$outputBtns2 = "<a class='btn btn-outline-danger' id='elimina'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($regSuperSegDiaAseTecnico == 1 and ($c > 0 AND empty($s))){
		$outputBtns2 = "<a href='../adds/formAddSupervisionSegDiaAseTecnico.php?idP={$idP}&id={$id_SegDiaProAseTecnico}' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($regSuperSegDiaAseTecnico == 1 and ($c == $s)) {
		$outputBtns2 = "<a class='btn btn-outline-danger' id='elimina'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($regSuperSegDiaAseTecnico == 1 and ($c != $s)) {
		$outputBtns2 = "<a href='../adds/formAddSupervisionSegDiaAseTecnico.php?idP={$idP}&id={$id_SegDiaProAseTecnico}' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else {
		$outputBtns2 = "<a class='btn btn-outline-danger' id='regSuperSegDiaAseTecnico'><i class='fa-solid fa-pencil'></i>4</a>";
	}

	// 2.3.6.1.3 Ver Generales Seguimiento Diario Programa de Asesoramiento Técnico
	if ($Eliminado == 0) {
		$outputBtns3 = "<a class='btn btn-outline-danger' id='eliminado'><i class='fa-solid fa-ban'></i></a>";
	} else if ($super == 1) {
		$outputBtns3 = "<a href='../components/verGralSegDiaProAseTecnico.php?id={$idP}' target='_blank' class='btn btn-secondary'><i class='fa-solid fa-eye'></i></a>";
	} else if ($verGralSegDiaProAseTecnico == 1) {
		$outputBtns3 = "<a href='../components/verGralSegDiaProAseTecnico.php?id={$idP}' target='_blank' class='btn btn-secondary'><i class='fa-solid fa-eye'></i></a>";
	} else {
		$outputBtns3 = "<a class='btn btn-outline-danger' id='verGralSegDiaProAseTecnico'><i class='fa-solid fa-comments'></i></a>";
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
		"10" => $validaTop,
		"11" => $validaEstadoProyecto,
		"12" => $validaCom,
		"13" => $validaSup,
		"14" => $validaUltRegCom,
		"15" => $validaUltRegSup,
		"16" => "<div class='input-group input-group-sm mb-3'>
		<div class='input-group-prepend'>
			<button type='button' class='btn btn-secondary dropdown-toggle' data-toggle='dropdown'><i class='fas fa-cog'></i><span data-toogle='tooltip' title='Botónes de administración tabla Verificación Diaria Vehículos Activos'> Acciones</span>
			</button>
			<ul class='dropdown-menu text-center' style=' columns: 2; min-width:2em;'>
				<li class='dropdown-item'>
					<span data-toggle='tooltip' title='2.3.6.1.1 Registro Comprobación de Seguimiento Diario Programa de Asesoramiento Técnico'>
						" . $outputBtns1 . "
					</span>
				</li>

				<li class='dropdown-item'>
					<span data-toggle='tooltip' title='2.3.6.1.2 Registro Supervisión de Seguimiento Diario Programa de Asesoramiento Técnico'>
						" . $outputBtns2 . "
					</span>
				</li>

				<li class='dropdown-item'>
					<span data-toggle='tooltip' title='2.3.6.1.3 Ver Generales Seguimiento Diario Programa de Asesoramiento Técnico'>
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
