<?php
require '../components/query.php';
if ($super == 1 or $verTablaEnvioRecTransm == 1) {

	$query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.comActMinDia, P.estadoProyectoEliminado, P.comSuperActMinDia,P.valorVenta,
V.placa, M.marca, Mo.modelo, A.anio, Co.color,   
E.id_envioRecTransm, E.envio, E.rec,
ASE.asesor
FROM proyectos P
INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo
INNER JOIN colores Co On V.id_color = Co.id_color
INNER JOIN marcas M ON V.id_marca = M.id_marca
INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
INNER JOIN anios A ON V.id_anio = A.id_anio
LEFT JOIN enviorectransm E ON P.id_proyecto = E.id_proyecto
LEFT JOIN comasesor CA ON P.id_proyecto = CA.id_proyecto
LEFT JOIN asesores ASE ON CA.id_asesor = ASE.id_asesor
WHERE P.proyectoActivo = 1 AND P.estadoProyectoEliminado = 1 GROUP BY P.id_proyecto  
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
	$validaUltReg = "";
	$outputBtns1 = "";
	$outputBtns2 = "";
	$outputBtns3 = "";
	$outputBtns4 = "";
	$outputBtns5 = "";

	$idP = $row['id_proyecto'];
	$nP = $row['nProyecto'];
	$id_envioRecTransm = $row['id_envioRecTransm'];
	$Eliminado = $row['estadoProyectoEliminado'];
	$asesor = $row['asesor'];
	$envio = $row['envio'];
	$rec = $row['rec'];

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

	// // valida columna status Env??o de Transmisi??n
	if (empty($envio)) {
		$validaEnvio = "<h6><span class='badge badge-danger badge-pill'>Sin Registro</span></h6>";
	} else if ($envio == 1) {
		$validaEnvio = "<h6><span class='badge badge-success badge-pill'>Comprobado</span></h6>";
	}

	// // valida columna status Recepci??n de Transmisi??n
	if (empty($rec)) {
		$validaRec = "<h6><span class='badge badge-danger badge-pill'>Sin Registro</span></h6>";
	} else if ($rec == 1) {
		$validaRec = "<h6><span class='badge badge-success badge-pill'>Comprobado</span></h6>";
	}

	// Acciones ----------------------------------------------------------------------------------------- 
	// 6.1.1 Registro Env??o de Transmisi??n
	if ($Eliminado == 0) {
		$outputBtns1 = "<a class='btn btn-outline-danger'  data-toggle='tooltip'  title='Proyecto Base Eliminado'><i class='fa-solid fa-ban'></i></a>";
	} else if ($super == 1 and ($envio == 1)) {
		$outputBtns1 = "<a class='btn btn-outline-danger' data-toggle='tooltip'  title='Ya hay registro' ><i class='fa-solid fa-pencil'></i></a>";
	} else if ($super == 1 and $envio = 0 or empty($envio)) {
		$outputBtns1 = "<a href='#' onclick='abrirModal1(\"" . $idP . "\",\"" . $nP . "\")' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($regEnvioTransmision == 1 and ($envio == 1)) {
		$outputBtns1 = "<a class='btn btn-outline-danger' data-toggle='tooltip'  title='Ya hay registro' ><i class='fa-solid fa-pencil'></i></a>";
	} else if ($regEnvioTransmision == 1 and $envio = 0 or empty($envio)) {
		$outputBtns1 = "<a href='#' onclick='abrirModal1(\"" . $idP . "\",\"" . $nP . "\")' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else {
		$outputBtns1 = "<a class='btn btn-outline-danger' id='regEnvioTransmision' data-toggle='tooltip'  title='Sin Permiso' ><i class='fa-solid fa-spell-check'></i></a>";
	}

	// 6.1.2 Eliminar Registro Env??o de Transmisi??n 
	if ($Eliminado == 0) {
		$outputBtns2 = "<a class='btn btn-outline-danger'  data-toggle='tooltip'  title='Proyecto Base Eliminado'><i class='fa-solid fa-ban'></i></a>";
	} else if ($super == 1 and ($envio == 0)) {
		$outputBtns2 = "<a class='btn btn-outline-danger' data-toggle='tooltip'  title='No hay registro'><i class='fa-solid fa-trash'></i></a>";
	} else if ($super == 1 and ($rec == 1)) {
		$outputBtns2 = "<a class='btn btn-outline-danger' data-toggle='tooltip'  title='Elimina Recepci??n de Transmisi??n'><i class='fa-solid fa-trash'></i></a>";
	} else if ($super == 1 and ($envio == 1)) {
		$outputBtns2 = "<a href='#' onclick='abrirModal2(\"" . $idP . "\",\"" . $nP . "\",\"".$id_envioRecTransm."\")' class='btn btn-secondary'><i class='fa-solid fa-trash'></i></a>";
	} else if ($eliEnvioTransmision == 1 and ($envio == 0)) {
		$outputBtns2 = "<a class='btn btn-outline-danger' data-toggle='tooltip'  title='No hay registro'><i class='fa-solid fa-trash'></i></a>";
	} else if ($eliEnvioTransmision == 1 and ($rec == 1)) {
		$outputBtns2 = "<a class='btn btn-outline-danger' data-toggle='tooltip'  title='Elimina Recepci??n de Transmisi??n'><i class='fa-solid fa-trash'></i></a>";
	} else if ($eliEnvioTransmision == 1 and ($envio == 1)) {
		$outputBtns2 = "<a href='#' onclick='abrirModal2(\"" . $idP . "\",\"" . $nP . "\",\"".$id_envioRecTransm."\")' class='btn btn-secondary'><i class='fa-solid fa-trash'></i></a>";
	} else {
		$outputBtns2 = "<a class='btn btn-outline-danger' id='eliEnvioTransmision' data-toggle='tooltip'  title='Sin Permiso' ><i class='fa-solid fa-trash'></i></a>";
	}

	// 6.1.3 Registro Recepci??n de Transmisi??n
	if ($Eliminado == 0) {
		$outputBtns3 = "<a class='btn btn-outline-danger'  data-toggle='tooltip'  title='Proyecto Base Eliminado'><i class='fa-solid fa-ban'></i></a>";
	} else if ($super == 1 and ($envio == 0 or $rec == 1)) {
		$outputBtns3 = "<a class='btn btn-outline-danger' data-toggle='tooltip'  title='Ya hay registro' ><i class='fa-solid fa-pencil'></i></a>";
	} else if ($super == 1 AND $rec = 0 OR empty($rec) OR $rec == 0) {
		$outputBtns3 = "<a href='#' onclick='abrirModal3(\"" . $idP . "\",\"" . $nP . "\",\"".$id_envioRecTransm."\")' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($regRecTransmision == 1 and ($envio == 0 or $rec == 1)) {
		$outputBtns3 = "<a class='btn btn-outline-danger' data-toggle='tooltip'  title='Ya hay registro' ><i class='fa-solid fa-pencil'></i></a>";
	} else if ($regRecTransmision == 1 AND $rec = 0 OR empty($rec) OR $rec == 0) {
		$outputBtns3 = "<a href='#' onclick='abrirModal3(\"" . $idP . "\",\"" . $nP . "\",\"".$id_envioRecTransm."\")' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else {
		$outputBtns3 = "<a class='btn btn-outline-danger' id='regRecTransmision' data-toggle='tooltip'  title='Sin Permiso' ><i class='fa-solid fa-spell-check'></i></a>";
	}

	// 6.1.4 Eliminar Registro Recepci??n de Transmisi??n 
	if ($Eliminado == 0) {
		$outputBtns4 = "<a class='btn btn-outline-danger'  data-toggle='tooltip'  title='Proyecto Base Eliminado'><i class='fa-solid fa-ban'></i></a>";
	} else if ($super == 1 and ($envio == 0)) {
		$outputBtns4 = "<a class='btn btn-outline-danger' data-toggle='tooltip'  title='Ya hay registro' ><i class='fa-solid fa-trash'></i></a>";
	} else if ($super == 1 and ($rec == 0)) {
		$outputBtns4 = "<a class='btn btn-outline-danger' data-toggle='tooltip'  title='Ya hay registro' ><i class='fa-solid fa-trash'></i></a>";
	} else if ($super == 1 and ($envio == 1)) {
		$outputBtns4 = "<a href='#' onclick='abrirModal4(\"" . $idP . "\",\"" . $nP . "\",\"" . $id_envioRecTransm . "\")' class='btn btn-secondary'><i class='fa-solid fa-trash'></i></a>";
	} else if ($eliRecTransmision == 1 and ($envio == 0)) {
		$outputBtns4 = "<a class='btn btn-outline-danger' data-toggle='tooltip'  title='Ya hay registro' ><i class='fa-solid fa-trash'></i></a>";
	} else if ($eliRecTransmision == 1 and ($rec == 0)) {
		$outputBtns4 = "<a class='btn btn-outline-danger' data-toggle='tooltip'  title='Ya hay registro' ><i class='fa-solid fa-trash'></i></a>";
	} else if ($eliRecTransmision == 1 and ($envio == 1)) {
		$outputBtns4 = "<a href='#' onclick='abrirModal4(\"" . $idP . "\",\"" . $nP . "\",\"" . $id_envioRecTransm . "\")' class='btn btn-secondary'><i class='fa-solid fa-trash'></i></a>";
	} else {
		$outputBtns4 = "<a class='btn btn-outline-danger' id='eliRecTransmision' data-toggle='tooltip'  title='Sin Permiso' ><i class='fa-solid fa-trash'></i></a>";
	}

	// 6.1.5 Ver Generales Env??o y Recepci??n de Transmisi??n
	if (!empty($id_envioRecTransm)) {
		if ($super == 1 or $verGralEnvioRecTransmision == 1) {
			$outputBtns5 = "<a href='javascript:void(0)' class='btn btn-secondary' onclick='mostrarDetalles(\"" . $id_envioRecTransm . "\")'><i class='fa-solid fa-eye'></i></a>";
		}
	}else{
		$outputBtns5 = "<a href='' class='btn btn-outline-danger' data-toggle='tooltip'  title='Sin Permiso / Sin Registros'><i class='fa-solid fa-eye'></i></a>";
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
		"10" => "<strong>{$row['valorVenta']}</strong>",
		"11" => $validaEstadoProyecto,
		"12" => $validaEnvio,
		"13" => $validaRec,
		"14" => "<div class='input-group input-group-sm mb-3'>
					<div class='input-group-prepend'>
						<button type='button' class='btn btn-secondary dropdown-toggle' data-toggle='dropdown'><i class='fas fa-cog'></i><span data-toogle='tooltip' title='Bot??nes de administraci??n  tabla Verificaci??n Diaria Veh??culos Activos'> Acciones</span>
						</button>
						<ul class='dropdown-menu text-center' style='columns: 2; min-width:2em;'>
							<li class='dropdown-item'>
								<span data-toggle='tooltip' title='6.1.1 Registro Env??o de Transmisi??n '>
									" . $outputBtns1 . "
								</span>
							</li>

							<li class='dropdown-item'>
								<span data-toggle='tooltip' title='6.1.2 Eliminar Registro Env??o de Transmisi??n'>
									" . $outputBtns2 . "
								</span>
							</li>
							<li class='dropdown-item'>
								<span data-toggle='tooltip' title='6.1.3 Registro Recepci??n de Transmisi??n'>
									" . $outputBtns3 . "
								</span>
							</li>
							<li class='dropdown-item'>
								<span data-toggle='tooltip' title='6.1.4 Eliminar Registro Recepci??n de Transmisi??n'>
									" . $outputBtns4 . "
								</span>
							</li>
							<li class='dropdown-item'>
								<span data-toggle='tooltip' title='6.1.5 Ver Generales Env??o y Recepci??n de Transmisi??n'>
									" . $outputBtns5 . "
								</span>
							</li>
						</ul>
					</div>
				</div>"
	);
}

$resultados = array(
	"sEcho" => 1, /* informacion para la herramienta datatables */
	"iTotalRecords" => count($datos), /* env??a el total de columnas a la datatable */
	"iTotalDisplayRecords" => count($datos), /* envia el total de filas a visualizar */
	"aaData" => $datos /* env??a el arreglo completo que se llen?? con el while */
);
echo json_encode($resultados);
