<?php
require '../components/query.php';
if ($super == 1 OR $verTablaComVerifDiariaVeh == 1) {
$query = "SELECT * FROM verificacion
ORDER BY nProyecto  DESC";

}else{
	$query = "SELECT id_proyecto
	FROM proyectos WHERE id_proyecto = 0";
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
	$Eliminado = $row['estadoProyectoEliminado'];
	$asesor = $row['asesor'];
	$hoyV = $row['FV'];
	$fecha = new DateTime($hoyV);
	$fechaV = $fecha->format('d-m-Y');
	$hoyS = $row['FS'];
	$fecha = new DateTime($hoyS);
	$fechaS = $fecha->format('d-m-Y');
	$fecha_sistema;
	$id_comverifdiariaveh = $row['id_comverifdiariaveh'];


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

	// valida columna status comprobación
	if (!empty($hoyV)) {
		if ($fechaV == $fecha_sistema)
			$validaCom = "<h6><span class='badge badge-success badge-pill'>Comprobado</span></h6>";
	}
	if ($fechaV <> $fecha_sistema) {
		$validaCom = "<h6><span class='badge badge-warning badge-pill parpadea'>Sin Comprobación</span></h6>";
	}
	if (empty($hoyV)) {
		$validaCom = "<h6><span class='badge badge-danger badge-pill'>Sin registro</span></h6>";
	}

	// valida columna status Supervision
	if (!empty($hoyS)) {
		if ($fechaS == $fecha_sistema)
			$validaSup = "<h6><span class='badge badge-success badge-pill'>Supervisado</span></h6>";
	}
	if ($fechaS <> $fecha_sistema) {
		$validaSup = "<h6><span class='badge badge-warning badge-pill parpadea'>Sin Supervisión</span></h6>";
	}
	if (empty($hoyS)) {
		$validaSup = "<h6><span class='badge badge-danger badge-pill'>Sin registro</span></h6>";
	}

	// validar columna ultimo registro
	if (!empty($hoyS) and !empty($hoyV)) {
		if ($fechaS == $fecha_sistema and $fechaV == $fecha_sistema)
			$validaUltReg = "<h6><span class='badge badge-success badge-pill'>{$hoyV}</span></h6>";
		if ($fechaS != $fecha_sistema)
			$validaUltReg = "<h6><span class='badge badge-warning badge-pill parpadea'>Sin Registro del dia</span></h6>";
	} else if (empty($hoyS) and empty($hoyV)) {
		$validaUltReg = "<h6><span class='badge badge-danger badge-pill parpadea'>Sin Ningún Registro</span></h6>";
	} else if (empty($hoyS)) {
		$validaUltReg = "<h6><span class='badge badge-danger badge-pill'>Sin Supervisión</span></h6>";
	} else if (empty($hoyV)) {
		$validaUltReg = "<h6><span class='badge badge-danger badge-pill'>Sin Verificación</span></h6>";
	}

	// Acciones ----------------------------------------------------------------------------------------- 
	// Boton 2.3.2.2.1 Registrar Comprobación Link de Video en Vivo
	if ($Eliminado == 0) {
		$outputBtns1 = "<a class='btn btn-outline-danger' id='eliminado'><i class='fa-solid fa-ban'></i></a>";
	} else if ($super == 1 and ($hoyV  == '')) {
		$outputBtns1 = "<a href='../adds/formAddVerificacionDiaria.php?id={$idP}' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($super == 1 and ($fechaV <> $fecha_sistema)) {
		$outputBtns1 = "<a href='../adds/formAddVerificacionDiaria.php?id={$idP}' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($super == 1 and ($fechaV ==  $fecha_sistema)) {
		$outputBtns1 = "<a class='btn btn-outline-danger' id='yaRegistrado'><i class='fa-solid fa-pencil'></i></a>";

	} else if ($regComVerifDiariaVeh == 1 and ($hoyV  == '')) {
		$outputBtns1 = "<a href='../adds/formAddVerificacionDiaria.php?id={$idP}' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($regComVerifDiariaVeh == 1 and ($fechaV <> $fecha_sistema)) {
		$outputBtns1 = "<a href='../adds/formAddVerificacionDiaria.php?id={$idP}' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($regComVerifDiariaVeh == 1 and ($fechaV ==  $fecha_sistema)) {
		$outputBtns1 = "<a class='btn btn-outline-danger' id='yaRegistrado'><i class='fa-solid fa-pencil'></i></a>";
	} else {
		$outputBtns1 = "<a class='btn btn-outline-danger' id='regComVerifDiariaVeh'><i class='fa-solid fa-pencil'></i></a>";
	}


	// 2.3.2.2.3 Ver Generales Link de Video en Vivo
	if ($Eliminado == 0) {
		$outputBtns2 = "<a class='btn btn-outline-danger' id='eliminado'><i class='fa-solid fa-ban'></i></a>";
	} else if ($super == 1) {
		$outputBtns2 = "<a href='../update/formUpdateVerifDiariaVeh.php?id={$idP}' class='btn btn-secondary'><i class='fa-solid fa-eye'></i></a>";
	} else if ($verGralComVerifDiariaVeh == 1) {
		$outputBtns2 = "<a href='../update/formUpdateVerifDiariaVeh.php?id={$idP}' class='btn btn-secondary'><i class='fa-solid fa-eye'></i></a>";
	} else {
		$outputBtns2 = "<a class='btn btn-outline-danger' id='verGralComVerifDiariaVeh'><i class='fa-solid fa-comments'></i></a>";
	}

	// 2.3.2.2.2 Registrar Supervisión Link de Video en Vivo
	if ($Eliminado == 0) {
		$outputBtns3 = "<a class='btn btn-outline-danger' id='eliminado'><i class='fa-solid fa-ban'></i></a>";
	} else if ($super == 1 and ($hoyV  == '')) {
		$outputBtns3 = "<a class='btn btn-outline-danger' id='elimina'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($super == 1 and ($hoyS  == '')) {
		$outputBtns3 = "<a href='../adds/formAddSupervisionDiaria.php?id={$id_comverifdiariaveh}' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($super == 1 and ($fechaS <> $fecha_sistema)) {
		$outputBtns3 = "<a href='../adds/formAddSupervisionDiaria.php?id={$id_comverifdiariaveh}' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($super == 1 and ($fechaS ==  $fecha_sistema)) {
		$outputBtns3 = "<a class='btn btn-outline-danger' id='yaRegistrado'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($regComVerifDiariaVehSuper == 1 and ($hoyV  == '')) {
		$outputBtns3 = "<a class='btn btn-outline-danger' id='elimina'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($regComVerifDiariaVehSuper == 1 and ($hoyS  == '')) {
		$outputBtns3 = "<a href='../adds/formAddSupervisionDiaria.php?id={$id_comverifdiariaveh}' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($regComVerifDiariaVehSuper == 1 and ($fechaS <> $fecha_sistema)) {
		$outputBtns3 = "<a href='../adds/formAddSupervisionDiaria.php?id={$id_comverifdiariaveh}' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($regComVerifDiariaVehSuper == 1 and ($fechaS ==  $fecha_sistema)) {
		$outputBtns3 = "<a class='btn btn-outline-danger' id='yaRegistrado'><i class='fa-solid fa-pencil'></i></a>";
	} else {
		$outputBtns3 = "<a class='btn btn-outline-danger' id='regComSuperActMinDia'><i class='fa-solid fa-spell-check'></i></a>";
	}


	$cont++;
	$datos[] = array(
		"0" => $cont,
		"1" => $row['nProyecto'],
		"2" => $row['nOrden'],
		"3" => $row['marca'],
		"4" => $row['modelo'],
		"5" => $row['anio'],
		"6" => $row['placa'],
		"7" => $row['color'],
		"8" => $validaAsesor,
		"9" => $validaEstadoProyecto,
		"10" => $validaCom,
		"11" => $validaSup,
		"12" => $validaUltReg,
		"13" => "<div class='input-group input-group-sm mb-3'>
		<div class='input-group-prepend'>
			<button type='button' class='btn btn-secondary dropdown-toggle' data-toggle='dropdown'><i class='fas fa-cog'></i><span data-toogle='tooltip' title='Botónes de administración tabla Verificación Diaria Vehículos Activos'> Acciones</span>
			</button>
			<ul class='dropdown-menu' style=' columns: 2; min-width:2em;'>
				<li class='dropdown-item'>
					<span data-toggle='tooltip' title='2.3.2.2.1 Registrar Comprobación Link de Video en Vivo'>
						" . $outputBtns1 . "
					</span>
				</li>

				<li class='dropdown-item'>
					<span data-toggle='tooltip' title='2.3.2.2.2 Registrar Supervisión Link de Video en Vivo'>
						" . $outputBtns3 . "
					</span>
				</li>

				<li class='dropdown-item'>
					<span data-toggle='tooltip' title='2.3.2.2.3 Ver Generales Link de Video en Vivo'>
					" . $outputBtns2 . "
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
