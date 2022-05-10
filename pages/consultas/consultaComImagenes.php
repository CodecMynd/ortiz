<?php
require '../components/query.php';
if ($super == 1 or $verTablaComImg == 1) {

	$query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.comImg, P.estadoProyectoEliminado, P.comSuperImg,
	C.nombres, C.aPaternoCliente, C.aMaternoCliente,
	V.placa, M.marca, Mo.modelo, A.anio, Co.color,
    CI.id_comImagenes, CI.comImg AS comp, CSI.comSuperImg AS sup, CSI.id_comSupervisionImagenes
	FROM proyectos P
	INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo
	INNER JOIN colores Co On V.id_color = Co.id_color
	INNER JOIN marcas M ON V.id_marca = M.id_marca
	INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
	INNER JOIN anios A ON V.id_anio = A.id_anio
	INNER JOIN clientes C ON P.id_cliente = C.id_cliente
    LEFT JOIN comimagenes CI ON P.id_proyecto = CI.id_proyecto
    LEFT JOIN comsupervisionimagenes CSI ON P.id_proyecto = CSI.id_proyecto  
	WHERE P.estadoProyectoEliminado = 1
	ORDER BY P.nProyecto  DESC";
} else {
	$query = "SELECT id_proyecto
	FROM proyectos WHERE id_proyecto = 0";
}
$resultado = mysqli_query($conexion, $query);
$cont = 0;

while ($row = $resultado->fetch_assoc()) {
	$outputBtns1 = "";
	$outputBtns2 = "";
	$outputBtns3 = "";
	$outputBtns4 = "";
	$outputBtns5 = "";
	$comprobacion = "";
	$supervision = "";

	$idP = $row['id_proyecto'];
	$cI = $row['comImg'];
	$nP = $row['nProyecto'];
	$cSI = $row['comSuperImg'];
	$comp = $row['comp'];
	$sup = $row['sup'];
	$Eliminado = $row['estadoProyectoEliminado'];
	$nOrden = $row['nOrden'];
	$id_comI = $row['id_comImagenes'];
	$id_sup = $row['id_comSupervisionImagenes'];

	// status Comprobación
	if ($cI == 0) {
		$comprobacion = "<h6><span class='badge badge-danger badge-pill'>Sin Comprobar Imagenes</span></h6>";
	} else if ($cI == 1) {
		$comprobacion = "<h6><span class='badge badge-success badge-pill'>Imagenes Comprobadas</span></h6>";
	}

	// status Supervisión
	if ($cSI == 0) {
		$supervision = "<h6><span class='badge badge-danger badge-pill'>No Supervisado</span></h6>";
	} else if ($cSI == 1) {
		$supervision = "<h6><span class='badge badge-success badge-pill'>Supervisado</span></h6>";
	}

	// 2.3.11.1 Registrar Comprobación de 7 Imagenes
	if ($Eliminado == 0) {
		$outputBtns1 = "<a class='btn btn-outline-danger' id='noComImg'><i class='fa-solid fa-ban'></i></a>";
	} else if ($super == 1 OR $regComImg == 1 && $comp == 0) {
		$outputBtns1 = "<a href='#' onclick='abrirModal1(\"" . $idP . "\",\"" . $nP . "\")' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else if ($super == 1 OR $regComImg == 1 && $comp == 1) {
		$outputBtns1 = "<a class='btn btn-outline-danger' id='siRegComImg'><i class='fa-solid fa-pencil'></i></a>";
	} else {
		$outputBtns1 = "<a class='btn btn-outline-danger' id='regComImg'><i class='fa-solid fa-pencil'></i></a>";
	}

	// 2.3.11.3 Registrar Supervisión Comprobación de 7 Imagenes
	if ($Eliminado == 0) {
		$outputBtns2 = "<a class='btn btn-outline-danger' id='noComImg'><i class='fa-solid fa-ban'></i></a>";
	} else if ($super == 1 OR $regComImg == 1 && $comp == 0  && $sup == 0) {
		$outputBtns2 = "<a class='btn btn-outline-danger' id='siRegComSuperImg'><i class='fa-solid fa-pencil'></i><a>";
	} else if ($super == 1 OR $regComImg == 1 && $comp == 1  && $sup == 0) {
		$outputBtns2 = "<a href='#' onclick='abrirModal2(\"" . $idP . "\",\"" . $nP . "\")' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
	} else {
		$outputBtns2 = "<a class='btn btn-outline-danger' id='regComImg'><i class='fa-solid fa-pencil'></i></a>";
	}

	// 2.3.11.2 Eliminar Comprobación de 7 Imagenes
                                                                       
	if ($Eliminado == 0) {
		$outputBtns3 = "<a class='btn btn-outline-danger' id='noComImg'><i class='fa-solid fa-ban'></i></a>";
	} else if ($super == 1 OR $eliComImg == 1 && $comp == 0  && $sup == 0) {
		$outputBtns3 = "<a class='btn btn-outline-danger' id='noEliComImg'><i class='fas fa-trash-alt'></i></a>";
	} else if ($super == 1 OR $eliComImg == 1 && $comp == 1  && $sup == 0) {
		$outputBtns3 = "<a href='#' onclick='abrirModal3(\"" . $idP . "\",\"" . $nP . "\",\"".$id_comI."\")' class='btn btn-secondary'><i class='fas fa-trash-alt'></i></a>";
	} else if ($super == 1 OR $eliComImg == 1 && $comp == 0  && $sup == 1) {
		$outputBtns3 = "<a class='btn btn-outline-danger' id='noEliComImg'><i class='fas fa-trash-alt'></i></a>";
	} else {
	 	$outputBtns3 = "<a class='btn btn-outline-danger' id='eliComImg'><i class='fas fa-trash-alt'></i></a>";
	}

	// 2.3.11.4 Eliminar Supervisión Comprobación de 7 Imagenes
     if ($Eliminado == 0) {
        $outputBtns = "<a class='btn btn-outline-danger' id='noComImg'><i class='fa-solid fa-ban'></i></a>";
    } else if ($super == 1 OR $eliComImgSuper == 1 && $comp == 0  && $sup == 0) { 
        $outputBtns4 = "<a class='btn btn-outline-danger' id='noEliComImg'><i class='fa-solid fa-trash-alt'></i></a>";
    } else if ($super == 1 OR $eliComImgSuper == 1 && $comp == 1  && $sup == 0) {
        $outputBtns4 = "<a class='btn btn-outline-danger' id='noEliComImg'><i class='fa-solid fa-trash-alt'></i></a>";
    } else if ($super == 1 OR $eliComImgSuper == 1 && $comp == 1  && $sup == 1) {
		$outputBtns4 = "<a href='#' onclick='abrirModal4(\"" . $idP . "\",\"" . $nP . "\",\"".$id_sup."\")' class='btn btn-secondary'><i class='fas fa-trash-alt'></i></a>";
    } else {
		$outputBtns4 = "<a class='btn btn-outline-danger' id='eliComImgSuper'><i class='fa-solid fa-trash-alt'></i></a>";
    }

	// 2.3.11.5 Ver Generales Comprobación de 7 Imagenes
	if ($super == 1 OR $verGralComImg == 1) {
		$outputBtns5 = "<a href='../consultas/tablaConsultaComImagenes.php?id={$idP}' class='btn btn-secondary'><i class='fa-solid fa-eye'></i></a>";
	} else {
		$outputBtns5 = "<a class='btn btn-outline-danger' id='verGralComImg'><i class='fa-solid fa-comments'></i></a>";
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
		"9" => $row['nombres'] . ' ' . $row['aPaternoCliente'] . ' ' . $row['aMaternoCliente'],
		"10" => ($Eliminado == 0) ? '<h6><span class="badge badge-danger badge-pill">Eliminado</span></h6>' : '<h6><span class="badge badge-success badge-pill">Activo</span></h6>',
		"11" => $comprobacion,
		"12" => $supervision,
		"13" => "<div class='input-group input-group-sm mb-3'>
						<div class='input-group-prepend'>
							<button type='button' class='btn btn-secondary dropdown-toggle' data-toggle='dropdown'><i class='fas fa-cog'></i><span data-toogle='tooltip' title='Botónes de administración  tabla Comprobación de Placas'> Acciones</span>
							</button>
							<ul class='dropdown-menu text-center' style='columns:2; min-width:2em;'>
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='2.3.11.1 Registrar Comprobación de 7 Imagenes'>
										" . $outputBtns1 . "
									</span>
								</li>
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='2.3.11.3 Registrar Supervisión Comprobación de 7 Imagenes'>
										" . $outputBtns2 . "
									</span>
								</li>
								<li class='dropdown-item'>
								<span data-toggle='tooltip' title='2.3.11.2 Eliminar Comprobación de 7 Imagenes'>
									" . $outputBtns3 . "
								</span>
								</li>
								<li class='dropdown-item?>
									<span data-toggle='tooltip' title='2.3.11.4 Eliminar Supervisión de 7 Imagenes'>
										" . $outputBtns4 . "
									</span>
								</li>
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='2.3.11.5 Ver Generales Comprobación de 7 Imagenes'>
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
	"iTotalRecords" => count($datos), /* envía el total de columnas a la datatable */
	"iTotalDisplayRecords" => count($datos), /* envia el total de filas a visualizar */
	"aaData" => $datos /* envía el arreglo completo que se llenó con el while */
);
echo json_encode($resultados);
