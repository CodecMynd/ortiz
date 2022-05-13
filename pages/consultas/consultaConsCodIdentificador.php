<?php
require '../components/query.php';
if ($super == 1 OR $consCodId == 1) {
$query = "SELECT  RC.id_regcodidenti, RC.folioCodID, RC.fecha_creacion, RC.borrado,
P.id_proyecto, P.nProyecto, P.nOrden, P.valorVenta,
V.placa, Co.color, M.marca, Mo.modelo, A.anio,
RS.valorVentaAlta, RS.folioRegSolicitud, 
RA.folioRegAlta, SS.semana AS semSolAlta,
S.semana, SC.semanaCobro, D.valCobProyBase, D.codIdProyBase
FROM registrocodidentibitacora RC 
LEFT JOIN proyectos P ON RC.id_proyecto = P.id_proyecto
LEFT JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
LEFT JOIN colores Co ON V.id_color = Co.id_color
LEFT JOIN marcas M ON V.id_marca = M.id_marca 
LEFT JOIN modelos Mo ON V.id_modelo = Mo.id_modelo 
LEFT JOIN anios A ON V.id_anio = A.id_anio
LEFT JOIN registrosolicitudbitacora RS ON P.id_proyecto = RS.id_proyecto  
LEFT JOIN registroaltabitacora RA ON P.id_proyecto = RA.id_proyecto
LEFT JOIN semanascobro SC ON RC.id_semanaCobro = SC.id_semanaCobro
LEFT JOIN semanas S ON RS.id_semana = S.id_semana
LEFT JOIN semanasolalta SS ON RS.id_semana = SS.id_semSolAlta
LEFT JOIN desglocecodidbitacora D ON P.id_proyecto = D.id_proyecto  
GROUP BY RC.id_regcodidenti DESC";
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
	$Eliminado = $row['borrado'];

	$idP = $row['id_proyecto'];
	$nProyecto = $row['nProyecto'];
	$id_regcodidenti = $row['id_regcodidenti'];
	$codIdProyBase = $row['codIdProyBase'];




	$cont++;
	$datos[] = array(
		"0" => $cont,
		"1" => (empty($row['id_proyecto'])) ? "<span class='badge badge-danger badge-pill'>N/A</span>" : "<span class='badge badge-dark badge-pill'>{$row['id_proyecto']}</span>",
		"2" => ($Eliminado == 1)? '<h6><span class="badge badge-danger badge-pill">Eliminado</span></h6>' : '<h6><span class="badge badge-success badge-pill">Activo</span></h6>',
		"3" => (empty($row['fecha_creacion'])) ? "<span class='badge badge-danger badge-pill'>N/A</span" : $row['fecha_creacion'],
		"4" =>  (empty($row['codIdProyBase'])) ? "<span class='badge badge-danger badge-pill'>N/A</span>" : $row['codIdProyBase'],
		"5" =>  (empty($row['folioCodID'])) ? "<span class='badge badge-danger badge-pill'>N/A</span>" : "<strong>{$row['folioCodID']}</strong>",
		"6" =>  (empty($row['nProyecto'])) ? "<span class='badge badge-danger badge-pill'>N/A</span>" : $row['nProyecto'],
		"7" =>  (empty($row['marca'])) ? "<span class='badge badge-danger badge-pill'>N/A</span>" : $row['marca'],
		"8" =>  (empty($row['modelo'])) ? "<span class='badge badge-danger badge-pill'>N/A</span>" : $row['modelo'],
		"9" =>  (empty($row['anio'])) ? "<span class='badge badge-danger badge-pill'>N/A</span>" : $row['anio'],
		"10" => (empty($row['placa'])) ? "<span class='badge badge-danger badge-pill'>N/A</span>" : $row['placa'],
		"11" => (empty($row['color'])) ? "<span class='badge badge-danger badge-pill'>N/A</span>" : $row['color'],
		"12" => (empty($row['valorVenta'])) ? 0.00 : $row['valorVenta'],
		"13" => (empty($row['valorVentaAlta'])) ? 0.00 : $row['valorVentaAlta'],
		"14" => (empty($row['valCobProyBase'])) ? 0.00 : $row['valCobProyBase'],
		"15" => (empty($row['semSolAlta'])) ? "<span class='badge badge-danger badge-pill'>N/A</span>" : $row['semSolAlta'],
		"16" => (empty($row['semana'])) ? "<span class='badge badge-danger badge-pill'>N/A</span>" : $row['semana'],
		"17" => (empty($row['semanaCobro'])) ? "<span class='badge badge-danger badge-pill'>N/A</span>" : $row['semanaCobro'],
		"18" => (empty($row['folioRegSolicitud'])) ? "<span class='badge badge-danger badge-pill'>N/A</span>" : $row['folioRegSolicitud'],
		"19" => (empty($row['folioRegAlta'])) ? "<span class='badge badge-danger badge-pill'>N/A</span>" : $row['folioRegAlta'],

	);
}

$resultados = array(
	"sEcho" => 1, /* informacion para la herramienta datatables */
	"iTotalRecords" => count($datos), /* envía el total de columnas a la datatable */
	"iTotalDisplayRecords" => count($datos), /* envia el total de filas a visualizar */
	"aaData" => $datos /* envía el arreglo completo que se llenó con el while */
);
echo json_encode($resultados);
