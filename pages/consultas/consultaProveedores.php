<?php
require '../components/query.php';
if ($super == 1 or $verTablaProvee == 1) {

	$query = "SELECT id_proveedor, nomProvee, calle, 
	colonia, ciudad, estado, cp, email, movil1, movil2, 
	tel1, tel2, servicio, borrado, fecha_creacion, id_capR
	FROM proveedores WHERE borrado = 0";
} else {
	$query = "SELECT id_proyecto
	FROM proyectos WHERE id_proyecto = 0";
}
$resultado = mysqli_query($conexion, $query);
$cont = 0;

while ($row = $resultado->fetch_assoc()) {
	$outputBtns1 = "";
	$outputBtns2 = "";




	// 1.12.2 Editar Proveedor
	if ($super == 1 or $modProvee == 1) {
		$outputBtns1 = "<a href='#' class='btn btn-secondary' onclick='modProveedor(\"" .$row['id_proveedor']."\")' ><i class='fas fa-edit'></i></a>";
	} else {
		$outputBtns1 = "<a class='btn btn-outline-danger' id='modProvee' data-toggle='tooltip' data-placement='bottom' title='Sin Permiso'><i class='fas fa-edit'></i></a>";
	} 

	// 1.12.3 Eliminar Proveedor
	 if ($super == 1 OR $eliProvee == 1 ) {
	 	$outputBtns2 = "<a href='#' onclick='abrirModal1(\"" .$row['id_proveedor'] . "\",\"".$row['nomProvee']."\")' class='btn btn-secondary'><i class='fas fa-trash-alt'></i></a>";
	 } else {
	 	$outputBtns2 = "<a class='btn btn-outline-danger' id='eliLinkRecPzsDanadas' data-toggle='tooltip' data-placement='bottom' title='Sin Permiso'><i class='fa-solid fa-trash-alt'></i></a>";
	 }


	$cont++;
	$datos[] = array(
		"0" => $cont,
		"1" => "<span class='badge badge-dark badge-pill'>{$row['id_proveedor']}</span>",
		"2" => $row['nomProvee'],
		"3" => $row['calle'],
		"4" => $row['colonia'],
		"5" => $row['ciudad'],
		"6" => $row['estado'],
		"7" => $row['cp'],
		"8" => $row['email'],
		"9" => $row['movil1'],
		"10" => $row['movil2'],
		"11" => $row['tel1'],
		"12" => $row['tel2'],
		"13" => $row['servicio'],
		"14" => "<div class='input-group input-group-sm mb-3'>
					<div class='input-group-prepend'>
						<button type='button' class='btn btn-secondary dropdown-toggle' data-toggle='dropdown'><i class='fas fa-cog'></i><span data-toogle='tooltip' title='Botónes de administración  tabla Recepción de Piezas Dañadas'> Acciones</span></button>
							<ul class='dropdown-menu text-center' style='columns:2; min-width:2em;'>
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='1.12.2 Editar Proveedor'>
										" . $outputBtns1 . "
									</span>
								</li>
								<li class='dropdown-item'>
									<span data-toggle='tooltip' title='1.12.3 Eliminar Proveedor'>
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

	