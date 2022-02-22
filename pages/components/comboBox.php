<?php  
require '../components/head-main.php';

// capturar ID de select Marcas y mostrar datos paea select Modelo
$id_marca = $_POST['id_marca'];
$queryM = "SELECT id_modelo, modelo FROM modelos WHERE id_marca = '$id_marca' ORDER BY modelo";
$resultadoM = $conexion->query($queryM);
$html= "<option selected disabled>Seleccionar Modelo</option>";
while($rowM = $resultadoM->fetch_assoc())
{
    $html.= "<option value='".$rowM['id_modelo']."'>".$rowM['modelo']."</option>";
}

echo $html;
?>
