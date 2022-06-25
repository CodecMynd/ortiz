<style>
            .btn-circle.btn-sm {
            width: 30px;
            height: 30px;
            padding: 6px 0px;
            border-radius: 15px;
            font-size: 8px;
            text-align: center;
        }
</style>
<?php
require 'head-main.php';
conectar();

$id_proyecto = $_POST['idProyecto'];

// Query principal
$query = 'SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.tipoReparacion, 
P.km, P.valorVenta, P.diagnostico, P.descripServ1, P.descripServ2, 
V.placa, M.marca, Mo.modelo, A.anio, 
C.nombres, C.aPaternoCliente, C.aMaternoCliente, 
Co.color, 
R.folioRegSolicitud, R.valorVentaAlta, R.inspecCalidad, R.observCliente, R.descripcionFinal,
S.semana, RA.observAudiFinal, RA.folioRegAlta, LV.link, PE.valorProyExtra, PE.folioProyExtra
FROM proyectos P 
INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
INNER JOIN marcas M ON V.id_marca = M.id_marca 
INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo 
INNER JOIN anios A ON V.id_anio = A.id_anio 
INNER JOIN colores Co ON V.id_color = Co.id_color 
INNER JOIN clientes C ON P.id_cliente = C.id_cliente
INNER JOIN registrosolicitud R ON P.id_proyecto = R.id_proyecto 
INNER JOIN registroalta RA ON P.id_proyecto = RA.id_proyecto
INNER JOIN linkvideos LV ON RA.id_link = LV.id_linkVideo
INNER JOIN semanas S ON R.id_semana = S.id_semana 
LEFT JOIN proyextras PE ON P.id_proyecto = PE.id_proyecto
WHERE P.id_proyecto = ' . $id_proyecto . ' AND P.altaProyecto = 1 ORDER BY nProyecto ASC';
$respuesta = mysqli_query($conexion, $query);
$row  = $respuesta->fetch_assoc();

// Query semanas
$queryS = "SELECT id_semanaCobro, semanaCobro, borrado FROM semanascobro WHERE borrado = 0 ORDER BY semanaCobro DESC";
$resultSemanasCobro = mysqli_query($conexion, $queryS) or die(mysqli_error($conexion));

// Query Forma de Pago A
$queryS = "SELECT id_formaPago, formaPago FROM formapagos WHERE formaPago <> 'N/A' ORDER BY formaPago ASC";
$resultFormaCobroA1 = mysqli_query($conexion, $queryS) or die(mysqli_error($conexion));

$queryS = "SELECT id_formaPago, formaPago FROM formapagos WHERE formaPago <> 'N/A' ORDER BY formaPago ASC";
$resultFormaCobroA2 = mysqli_query($conexion, $queryS) or die(mysqli_error($conexion));

$queryS = "SELECT id_formaPago, formaPago FROM formapagos WHERE formaPago <> 'N/A' ORDER BY formaPago ASC";
$resultFormaCobroA3 = mysqli_query($conexion, $queryS) or die(mysqli_error($conexion));
// ---------------------------------------------------------------------------------------------------------------------

// Query Forma de Pago 2
$queryS = "SELECT id_formaPago, formaPago FROM formapagos WHERE formaPago <> 'N/A' ORDER BY formaPago ASC";
$resultFormaCobroB1 = mysqli_query($conexion, $queryS) or die(mysqli_error($conexion));

$queryS = "SELECT id_formaPago, formaPago FROM formapagos WHERE formaPago <> 'N/A' ORDER BY formaPago ASC";
$resultFormaCobroB2 = mysqli_query($conexion, $queryS) or die(mysqli_error($conexion));

$queryS = "SELECT id_formaPago, formaPago FROM formapagos WHERE formaPago <> 'N/A' ORDER BY formaPago ASC";
$resultFormaCobroB3 = mysqli_query($conexion, $queryS) or die(mysqli_error($conexion));
// ---------------------------------------------------------------------------------------------------------------------

// Query Forma de Pago 3
$queryS = "SELECT id_formaPago, formaPago FROM formapagos WHERE formaPago <> 'N/A'  ORDER BY formaPago ASC";
$resultFormaCobroC1 = mysqli_query($conexion, $queryS) or die(mysqli_error($conexion));

$queryS = "SELECT id_formaPago, formaPago FROM formapagos WHERE formaPago <> 'N/A'  ORDER BY formaPago ASC";
$resultFormaCobroC2 = mysqli_query($conexion, $queryS) or die(mysqli_error($conexion));

$queryS = "SELECT id_formaPago, formaPago FROM formapagos WHERE formaPago <> 'N/A'  ORDER BY formaPago ASC";
$resultFormaCobroC3 = mysqli_query($conexion, $queryS) or die(mysqli_error($conexion));
// ---------------------------------------------------------------------------------------------------------------------

// Query Forma de Pago 4
$queryS = "SELECT id_formaPago, formaPago FROM formapagos WHERE formaPago <> 'N/A' ORDER BY formaPago ASC";
$resultFormaCobroD1 = mysqli_query($conexion, $queryS) or die(mysqli_error($conexion));

$queryS = "SELECT id_formaPago, formaPago FROM formapagos WHERE formaPago <> 'N/A' ORDER BY formaPago ASC";
$resultFormaCobroD2 = mysqli_query($conexion, $queryS) or die(mysqli_error($conexion));

$queryS = "SELECT id_formaPago, formaPago FROM formapagos WHERE formaPago <> 'N/A' ORDER BY formaPago ASC";
$resultFormaCobroD3 = mysqli_query($conexion, $queryS) or die(mysqli_error($conexion));
// ---------------------------------------------------------------------------------------------------------------------

// Query Forma de Pago 5
$queryS = "SELECT id_formaPago, formaPago FROM formapagos WHERE formaPago <> 'N/A' ORDER BY formaPago ASC";
$resultFormaCobroE1 = mysqli_query($conexion, $queryS) or die(mysqli_error($conexion));

$queryS = "SELECT id_formaPago, formaPago FROM formapagos WHERE formaPago <> 'N/A' ORDER BY formaPago ASC";
$resultFormaCobroE2 = mysqli_query($conexion, $queryS) or die(mysqli_error($conexion));

$queryS = "SELECT id_formaPago, formaPago FROM formapagos WHERE formaPago <> 'N/A' ORDER BY formaPago ASC";
$resultFormaCobroE3 = mysqli_query($conexion, $queryS) or die(mysqli_error($conexion));
// ---------------------------------------------------------------------------------------------------------------------

// Query Registro de folio Alta
$queryP = 'SELECT MAX(id_regcodidenti) + 1 FROM registrocodidentibitacora';
$result = mysqli_query($conexion,  $queryP);
$rowA = mysqli_fetch_row($result);

//Prefijo folio
$text = "CodID-00";
$folioCodID = $text . '' . $rowA[0];


$marca = $row['marca'];
$modelo = $row['modelo'];
$anio = $row['anio'];
$placa = $row['placa'];
$color = $row['color'];
$nProyecto = $row['nProyecto'];
$nOrden = $row['nOrden'];
$tipoReparacion = $row['tipoReparacion'];
$km = $row['km'];
$valorVenta = $row['valorVenta'];
$valorVentaAlta = $row['valorVentaAlta'];
$folioRegSolicitud = $row['folioRegSolicitud'];
$semana = $row['semana'];
$inspecCalidad = $row['inspecCalidad'];
$observCliente = $row['observCliente'];
$observAudiFinal = $row['observAudiFinal'];
$descripcionFinal = $row['descripcionFinal'];
$link = $row['link'];
$folioRegAlta = $row['folioRegAlta'];
$valorProyExtra = (empty($row['valorProyExtra'])) ? '0.00' : $row['valorProyExtra'];
$folioProyExtra = (empty($row['folioProyExtra'])) ? 'Sin Registro' : $row['folioProyExtra'];

if ($respuesta->num_rows  > 0) {
    $output = '';
    $output .= "
<div class='row justify-content-center'>
    <div class='col-md-12 col-sm-12 my-4'>
        <div class='card card-secondary card-outline' style='height: 90%;'>
            <div class='card-header'>
                <h3 class='card-title'>Datos del Proyecto (Vehículo)</h3>
            </div>
            <div class='card-body'>
                <div class='row justify-content-center'>
                    <input name='id_proyecto' id='id_proyecto' type='hidden' value='{$id_proyecto}'>
                    <div class='col-md-3 col-sm-12  form-group'>
                        <div class='input-group form-floating '>
                            <div class='input-group-prepend'>
                                <span class='input-group-text'><i class='fa-solid fa-car'></i></span>
                            </div>
                            <input name='marca' id='marca' type='text' class='form-control' value='{$marca}' disabled readonly>
                            <label for='floatingInput' class='pl-5'>Marca</label>
                        </div>
                    </div>
                    <div class='col-md-3 col-sm-12 form-group'>
                        <div class='input-group form-floating'>
                            <div class='input-group-prepend'>
                                <span class='input-group-text'><i class='fa-solid fa-car-side'></i></span>
                            </div>
                            <input name='modelo' id='modelo' type='text' class='form-control' value='{$modelo}' disabled readonly>
                            <label for='floatingInput' class='pl-5'>Modelo</label>
                        </div>
                    </div>
                    <div class='col-md-2 col-sm-12 form-group'>
                        <div class='input-group form-floating'>
                            <div class='input-group-prepend'>
                                <span class='input-group-text'><i class='fa-solid fa-calendar'></i></span>
                            </div>
                            <input type='text' id='anio' name='anio' class='form-control' value='{$anio}' disabled readonly>
                            <label for='floatingInput' class='pl-5'>Año</label>
                        </div>
                    </div>
                    <div class='col-md-2 col-sm-12 form-group'>
                        <div class='input-group form-floating '>
                            <div class='input-group-prepend'>
                                <span class='input-group-text'><i class='fa-solid fa-hashtag'></i></span>
                            </div>
                            <input name='placa' id='placa' type='text' class='form-control' value='{$placa}' disabled readonly>
                            <label for='floatingInput' class='pl-5'>Placa </label>
                        </div>
                    </div>
                    <div class='col-md-2 col-sm-12 form-group'>
                        <div class='input-group form-floating'>
                            <div class='input-group-prepend'>
                                <span class='input-group-text'><i class='fa-solid fa-brush'></i></span>
                            </div>
                            <input name='color' id='color' type='text' class='form-control' value='{$color}' disabled readonly>
                            <label for='floatingInput' class='pl-5'>Color </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class='row justify-content-center'>
    <div class='col-md-12 col-sm-4 my-4'>
        <div class='card card-secondary card-outline'>
            <div class='card-header'>
                <h3 class='card-title'>Datos del Proyecto (Generales)</h3>
                <div class='card-tools'>
                    *Campos requeridos
                </div>
            </div>
        </div>
        <div class='card-body'>
            <div class='row justify-content-center'>
                <div class='col-md-3 col-sm-12 my-1'>
                    <div class='input-group form-floating mb-3'>
                        <div class='input-group-prepend'>
                            <span class='input-group-text'><i class='fa-solid fa-arrow-down-1-9'></i></span>
                        </div>
                        <input name='folioCodID' id='folioCodID' type='text' class='form-control' placeholder='Número de proyecto ' required maxlength='15' data-toggle='tooltip' data-placement='bottom' title='Número de Folio Código Identificador' value='{$folioCodID}' readonly>
                        <label for='floatingInput' class='pl-5'>*Núm. de Folio Código ID</label>
                    </div>
                </div>
                <div class='col-md-3 col-sm-12 my-1'>
                    <div class='input-group form-floating mb-3'>
                        <div class='input-group-prepend'>
                            <span class='input-group-text'><i class='fa-solid fa-arrow-down-1-9'></i></span>
                        </div>
                        <input name='folioRegAlta' id='folioRegAlta' type='text' class='form-control' placeholder='Número de proyecto ' required maxlength='15' data-toggle='tooltip' data-placement='bottom' title='Número de  Folio' value='{$folioRegAlta}' readonly>
                        <label for='floatingInput' class='pl-5'>*Núm. de Folio Alta</label>
                    </div>
                </div>
                <div class='col-md-3 col-sm-12 my-1'>
                    <div class='input-group form-floating mb-3'>
                        <div class='input-group-prepend'>
                            <span class='input-group-text'><i class='fa-solid fa-arrow-down-1-9'></i></span>
                        </div>
                        <input name='folioRegSolicitud' id='folioRegSolicitud' type='text' class='form-control' placeholder='Número de proyecto ' required maxlength='15' data-toggle='tooltip' data-placement='bottom' title='Número de Folio' value='{$folioRegSolicitud}' readonly>
                        <label for='floatingInput' class='pl-5'>*Núm. de Folio Solicitud Alta</label>
                    </div>
                </div>
                <div class='col-md-2 col-sm-12 form-group'>
                    <div class='input-group form-floating'>
                        <div class='input-group-prepend'>
                            <span class='input-group-text'><i class='fa-solid fa-arrow-down-9-1'></i></span>
                        </div>
                        <input name='nProyecto' id='nProyecto' type='text' class='form-control' value='{$nProyecto}' disabled readonly>
                        <label for='floatingInput' class='pl-5'>*Núm. Proyecto </label>
                    </div>
                </div>
                <div class='col-md-2 col-sm-12 my-1 form-group'>
                    <div class='input-group form-floating mb-3'>
                        <div class='input-group-prepend'>
                            <span class='input-group-text'><i class='fa-solid fa-list-ol'></i></span>
                        </div>
                        <input name='nOrden' id='nOrden' type='number' class='form-control' placeholder='Número de orden' maxlength='15' data-toggle='tooltip' data-placement='bottom' title='Número de orden' value='{$nOrden}' readonly>
                        <label for='floatingInput' class='pl-5'>*Núm. de Orden</label>
                    </div>
                </div>
                <div class='col-md-2 col-sm-12 my-1'>
                    <div class='input-group form-floating mb-3'>
                        <div class='input-group-prepend'>
                            <span class='input-group-text'><i class='fa-solid fa-gauge-high'></i></span>
                        </div>
                        <input name='km' id='km' type='text' class='form-control' placeholder='Kilometraje' required maxlength='12' data-toggle='tooltip' data-placement='bottom' title='Redondea Kilometraje actual' data-inputmask='' alias': 'numeric' , 'groupSeparator' : ',' , 'autoGroup' : true, 'digits' : 0, 'digitsOptional' : false, 'suffix' : ' km' , 'placeholder' : '0'' value=' {$km}' readonly>
                        <label for='floatingInput' class='pl-5'>*Kilometraje </label>
                    </div>
                </div>
                <div class='col-md-3 col-sm-12 my-1 form-group'>
                    <div class='input-group form-floating mb-3'>
                        <div class='input-group-prepend'>
                            <span class='input-group-text'><i class='fa-solid fa-list-ol'></i></span>
                        </div>
                        <input name='tipoReparacion' id='tipoReparacion' type='text' class='form-control' placeholder='Tipo de reparación a realizar' maxlength='15' data-toggle='tooltip' data-placement='bottom' title='Tipo de   reparación' value='{$tipoReparacion}' readonly>
                        <label for='floatingInput' class='pl-5'>*Tipo de Reparación</label>
                    </div>
                </div>
                <div class='col-md-3 col-sm-12 my-1'>
                    <div class='input-group form-floating mb-3'>
                        <div class='input-group-prepend'>
                            <span class='input-group-text mt-2'>
                                <i class='fa-solid fa-money-bill-1-wave'></i>
                            </span>
                        </div>
                        <input name='valorVenta' id='valorVenta' type='text' class='form-control' placeholder='Valor Venta Inicial' required maxlength='12' data-toggle='tooltip' data-placement='bottom' title='Ingresa Valor  Venta Inicial' value='{$valorVenta}' readonly>
                        <label for='floatingInput' class='pl-5'>*Valor Venta Inicial </label>
                    </div>
                </div>
                <div class='col-md-2 col-sm-12 my-1'>
                    <div class='input-group form-floating mb-3'>
                        <div class='input-group-prepend'>
                            <span class='input-group-text mt-2'>
                                <i class='fa-solid fa-money-bill-1-wave '></i>
                            </span>
                        </div>
                        <input name='valorVentaAlta' id='valorVentaAlta' type='text' class='form-control' placeholder='Ingresa Valor Venta Alta' required maxlength='12' data-toggle='tooltip' data-placement='bottom' title='Ingresa Valor Venta Alta' value='{$valorVentaAlta}' readonly>
                        <label for='floatingInput' class='pl-5'>*Valor Venta Alta</label>
                    </div>
                </div>
                <div class='col-md-2 col-sm-12 my-1'>
                    <div class='input-group form-floating mb-3'>
                        <div class='input-group-prepend'>
                            <span class='input-group-text mt-2'>
                                <i class='fa-solid fa-calendar-day'></i>
                            </span>
                        </div>
                        <input name='id_semana' id='id_semana' type='text' class='form-control' placeholder='Ingresa semana' required data-toggle='tooltip' data-placement='bottom' title='Ingresa Semana' value='{$semana}' readonly>
                        <label for='floatingInput' class='pl-5'>*Semana de Alta</label>
                    </div>
                </div>
                <div class='col-md-12 col-sm-12 my-1'>
                    <div class='row justify-content-center'>
                        <div class='col-md-4 col-sm-12 my-1'>
                            <div class='form-group-input' style='border: 1px solid #CED4DA;'>
                                <label class='ml-5 mb-2'>*Observación Inspección de Control de Calidad</label>
                                <span data-toggle='tooltip' title='max. 300 caracteres'>
                                    <div class='input-group'>
                                        <div class='input-group-prepend'>
                                            <span class='input-group-text'><i class='fa-solid fa-comments'></i></span>
                                        </div>
                                        <textarea name='inspecCalidad' id='inspecCalidad' class='form-control' rows='5' placeholder='Agrega alguna breve Observación de Inspección de Control Calidad' readonly>{$inspecCalidad}</textarea>
                                    </div>
                                </span>
                            </div>
                        </div>
                        <div class='col-md-4 col-sm-12 my-1'>
                            <div class='form-group-input' style='border: 1px solid #CED4DA;'>
                                <label class='ml-5 mb-2'>*Observaciones Para el Cliente</label>
                                <span data-toggle='tooltip' title='max. 300 caracteres'>
                                    <div class='input-group'>
                                        <div class='input-group-prepend'>
                                            <span class='input-group-text'><i class='fa-solid fa-comment'></i></span>
                                        </div>
                                        <textarea name='observCliente' id='observCliente' class='form-control' rows='5' placeholder='Agrega alguna breve Observación para nuestro Cliente' readonly>{$observCliente}</textarea>
                                    </div>
                                </span>
                            </div>
                        </div>
                        <div class='col-md-4 col-sm-12 my-1'>
                            <div class='form-group-input' style='border: 1px solid #CED4DA;'>
                                <label class='ml-5 mb-2'>*Descripción Final de Servicio Realizado </label>
                                <span data-toggle='tooltip' title='max. 300 caracteres'>
                                    <div class='input-group'>
                                        <div class='input-group-prepend'>
                                            <span class='input-group-text'><i class='fa-solid fa-comment'></i></span>
                                        </div>
                                        <textarea name='descripcionFinal' id='descripcionFinal' class='form-control' rows='5' placeholder='Agrega Descripción Final de (los) Servicio(s) Realizado(s) al Vehículo' maxlength='300' readonly>{$descripcionFinal}</textarea>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-md-10 col-sm-12 my-1'>
                    <div class='input-group form-floating mb-3'>
                        <div class='input-group-prepend'>
                            <span class='input-group-text mt-2'>
                                <i class='fa-solid fa-photo-film'></i>
                            </span>
                        </div>
                        <input name='link' id='link' type='text' class='form-control' placeholder='Ingresa Valor Venta Alta' data-toggle='tooltip' data-placement='bottom' title='Ingresa Link de Video en Vivo' value='{$link}' readonly>
                        <label for='floatingInput' class='pl-5'>*Link de Video en Vivo Alta</label>
                    </div>
                </div>
                <div class='col-md-10 col-sm-12 my-1'>
                    <div class='form-group-input' style='border: 1px solid #CED4DA;'>
                        <label class='ml-5 mb-2'>*Observaciones Prueba de Auditoria Final</label>
                        <span data-toggle='tooltip' title='max. 300 caracteres'>
                            <div class='input-group'>
                                <div class='input-group-prepend'>
                                    <span class='input-group-text'><i class='fa-solid fa-comment'></i></span>
                                </div>
                                <textarea name='observAudiFinal' id='observAudiFinal' class='form-control' rows='2' placeholder='Agrega alguna breve Observación por parte de Auditoria Final' readonly>{$observAudiFinal}</textarea>
                            </div>
                        </span>
                    </div>
                </div>
                <br>
                <div class='col-md-12'>
                    <hr>
                    <div class='row justify-content-center'>
                        <div class='col-md-2 col-sm-12 my-2'>
                            <div class='input-group'>
                                <label for='color' class='pl-5 parpadea'>Semana de Cobro</label>
                                <select name='id_semanaCobro' id='id_semanaCobro' class='form-control' data-toggle='tooltip' data-placement='bottom' title='Selecciona una Semana de la lista' style='width: 100%;' required>
                                    <option selected disabled>Selecciona</option>";
                                    while ($rowSemanasCobro = $resultSemanasCobro->fetch_assoc()) {
                                    $id_semanaCobro = $rowSemanasCobro['id_semanaCobro'];
                                    $semanaCobro = $rowSemanasCobro['semanaCobro'];
                                    $output .= " <option value=$id_semanaCobro> $semanaCobro </option>";
                                    }
                                    $output .= "
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class='col-md-12 col-sm-12 my-2 py-1' style='border: 2px solid #CED4DA;'>
                    <div class='row justify-content-center'>
                        <div class='col-md-3 col-sm-12 my-1'>
                            <div class='row'>
                                <div class='col-md-12 col-sm-12 my-1'>
                                    <div class='input-group form-floating mb-3'>
                                        <div class='input-group-prepend'>
                                            <span class='input-group-text parpadea mt-2'>
                                                <i class='fa-solid fa-money-bill-1-wave '></i>
                                            </span>
                                        </div>
                                        <input name='valCobProyBaseA1' id='currencyA1' type='text' class='form-control' placeholder='Ingresa Cobro' required maxlength='12' data-toggle='tooltip' data-placement='bottom' title='Ingresa Cobro'>
                                        <label for='floatingInput' class='pl-5'>*Valor Cobro Proyecto Base</label>
                                    </div>
                                </div>
                                <div class='col-md-12 col-sm-12'>
                                    <div class='row justify-content-center'>
                                        <label class=''>Valor Venta Alta: <i class='fa-solid fa-dollar-sign'></i> {$valorVentaAlta}</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='col-md-6 col-sm-12 my-1'>
                            <div class='input-group form-floating mb-3'>
                                <div class='input-group-prepend'>
                                    <span class='input-group-text parpadea'><i class='fa-solid fa-arrow-down-1-9'></i></span>
                                </div>
                                <input name='codIdProyBaseA1' id='codIdProyBaseA1' type='text' class='form-control' placeholder='Ingresa el Código Identificador ' required maxlength='50' data-toggle='tooltip' data-placement='bottom' title='Código Identificador max. 50 Caracteres'>
                                <label for='floatingInput' class='pl-5'>*Código Identificador Valor Cobro Proyecto Base</label>
                            </div>
                        </div>
                        <div class='col-md-3 col-sm-12 '>
                            <div class='input-group'>
                                <label for='color' class='pl-5 parpadea'>Forma de Pago Proyecto Base</label>
                                <select name='id_pagoProyBaseA1' id='id_pagoProyBaseA1' class='form-control' data-toggle='tooltip' data-placement='bottom' title='Selecciona una Forma de Pago de la lista' style='width:100%;'>
                                    <option selected disabled>Selecciona</option>";
                                    while ($rowFormaCobro = $resultFormaCobroA1->fetch_assoc()) {
                                    $id_formaPago = $rowFormaCobro['id_formaPago'];
                                    $formaPago = $rowFormaCobro['formaPago'];
                                    $output .= " <option value=$id_formaPago> $formaPago </option>";
                                    }
                                    $output .= "
                                </select>
                            </div>
                        </div>
                        <div class='col-md-12'>
                            <hr>
                        </div>
                        <p><a class='btn btn-secondary btn-circle btn-sm' href='#' id='showA2' data-toggle='tooltip' data-placement='bottom' title='Generar campos adicionales'><i class='fa-solid fa-plus'></i>&nbsp;<i class='fa-solid fa-1'></i></a></p>
                        <div id='content' class='col-lg-12'>
                            <div id='elementA2' class='col-lg-12' style='display: none;'> 
                                <div id='close'>
                                    <a class='btn btn-secondary btn-circle btn-sm' href='#' id='hideA2' data-toggle='tooltip' data-placement='bottom' title='Cerrar campos adicionales'><i class='fa fa-close'></i></a>
                                </div>
                                <div class='row justify-content-center'>
                                    <div class='col-md-3 col-sm-12 my-1'>
                                        <div class='input-group form-floating mb-3'>
                                            <div class='input-group-prepend'>
                                                <span class='input-group-text parpadea mt-2'>
                                                    <i class='fa-solid fa-money-bill-1-wave '></i>
                                                </span>
                                            </div>
                                            <input name='valCobProyBaseA2' id='currencyA2' type='text' class='form-control' placeholder='Ingresa Cobro' required maxlength='12' data-toggle='tooltip' data-placement='bottom' title='Ingresa Cobro'>
                                            <label for='floatingInput' class='pl-5'>*Valor Cobro Proyecto Base</label>
                                        </div>
                                    </div>
                                    <div class='col-md-6 col-sm-12 my-1'>
                                        <div class='input-group form-floating mb-3'>
                                            <div class='input-group-prepend'>
                                                <span class='input-group-text parpadea'><i class='fa-solid fa-arrow-down-1-9'></i></span>
                                            </div>
                                            <input name='codIdProyBaseA2' id='codIdProyBaseA2' type='text' class='form-control' placeholder='Ingresa el Código Identificador ' required maxlength='50' data-toggle='tooltip' data-placement='bottom' title='Código Identificador max. 50 Caracteres'>
                                            <label for='floatingInput' class='pl-5'>*Código Identificador Valor Cobro Proyecto Base</label>
                                        </div>
                                    </div>
                                    <div class='col-md-3 col-sm-12 '>
                                        <div class='input-group'>
                                            <label for='color' class='pl-5 parpadea'>Forma de Pago Proyecto Base</label>
                                            <select name='id_pagoProyBaseA2' id='id_pagoProyBaseA2' class='form-control' data-toggle='tooltip' data-placement='bottom' title='Selecciona una Forma de Pago de la lista' style='width:100%;'>
                                                <option selected disabled>Selecciona</option>";
                                                while ($rowFormaCobro = $resultFormaCobroA2->fetch_assoc()) {
                                                $id_formaPago = $rowFormaCobro['id_formaPago'];
                                                $formaPago = $rowFormaCobro['formaPago'];
                                                $output .= " <option value=$id_formaPago> $formaPago </option>";
                                                }
                                                $output .= "
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class='row justify-content-center'>
                                    <a class='btn btn-secondary btn-circle btn-sm' href='#' id='showA3' data-toggle='tooltip' data-placement='bottom' title='Generar campos adicionales'><i class='fa-solid fa-plus'></i>&nbsp;<i class='fa-solid fa-2'></i></a>
                                </div>
                            </div>
                        </div>
                        <div id='content' class='col-lg-12'>
                            <div id='elementA3' class='col-lg-12' style='display: none;'> 
                                <div id='close2'>
                                    <a class='btn btn-secondary btn-circle btn-sm' href='#' id='hideA3' title='Cerrar'><i class='fa fa-close'></i></a>
                                </div>
                                <div class='row justify-content-center'>
                                    <div class='col-md-3 col-sm-12 my-1'>
                                        <div class='input-group form-floating mb-3'>
                                            <div class='input-group-prepend'>
                                                <span class='input-group-text parpadea mt-2'>
                                                    <i class='fa-solid fa-money-bill-1-wave '></i>
                                                </span>
                                            </div>
                                            <input name='valCobProyBaseA3' id='currencyA3' type='text' class='form-control' placeholder='Ingresa Cobro' required maxlength='12' data-toggle='tooltip' data-placement='bottom' title='Ingresa Cobro'>
                                            <label for='floatingInput' class='pl-5'>*Valor Cobro Proyecto Base</label>
                                        </div>
                                    </div>
                                    <div class='col-md-6 col-sm-12 my-1'>
                                        <div class='input-group form-floating mb-3'>
                                            <div class='input-group-prepend'>
                                                <span class='input-group-text parpadea'><i class='fa-solid fa-arrow-down-1-9'></i></span>
                                            </div>
                                            <input name='codIdProyBaseA3' id='codIdProyBaseA3' type='text' class='form-control' placeholder='Ingresa el Código Identificador ' required maxlength='50' data-toggle='tooltip' data-placement='bottom' title='Código Identificador max. 50 Caracteres'>
                                            <label for='floatingInput' class='pl-5'>*Código Identificador Valor Cobro Proyecto Base</label>
                                        </div>
                                    </div>
                                    <div class='col-md-3 col-sm-12 '>
                                        <div class='input-group'>
                                            <label for='color' class='pl-5 parpadea'>Forma de Pago Proyecto Base</label>
                                            <select name='id_pagoProyBaseA3' id='id_pagoProyBaseA3' class='form-control' data-toggle='tooltip' data-placement='bottom' title='Selecciona una Forma de Pago de la lista' style='width:100%;'>
                                                <option selected disabled>Selecciona</option>";
                                                while ($rowFormaCobro = $resultFormaCobroA3->fetch_assoc()) {
                                                $id_formaPago = $rowFormaCobro['id_formaPago'];
                                                $formaPago = $rowFormaCobro['formaPago'];
                                                $output .= " <option value=$id_formaPago> $formaPago </option>";
                                                }
                                                $output .= "
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class='col-md-12 col-sm-12 my-2 py-1' style='border: 2px solid #CED4DA;'>
                    <div class='row justify-content-center'>
                        <div class='col-md-3 col-sm-12 my-1'>
                            <div class='row'>
                                <div class='col-md-12'>
                                    <div class='input-group form-floating mb-3'>
                                        <div class='input-group-prepend'>
                                            <span class='input-group-text parpadea mt-2'>
                                                <i class='fa-solid fa-money-bill-1-wave '></i>
                                            </span>
                                        </div>
                                        <input name='valCobProyExtraB1' id='currencyB1' type='text' class='form-control' placeholder='Ingresa Cobro' required maxlength='12' data-toggle='tooltip' data-placement='bottom' title='Ingresa Cobro'>
                                        <label for='floatingInput' class='pl-5'>Valor Cobro Proyecto Extra</label>
                                    </div>
                                </div>
                                <div class='col-md-12'>
                                    <div class='row justify-content-center'>
                                        <label class=''>Valor Proyecto Extra: <i class='fa-solid fa-dollar-sign'></i> {$valorProyExtra}</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='col-md-6 col-sm-12 my-1'>
                            <div class='row'>
                                <div class='col-md-12'>
                                    <div class='input-group form-floating mb-3'>
                                        <div class='input-group-prepend'>
                                            <span class='input-group-text parpadea'><i class='fa-solid fa-arrow-down-1-9'></i></span>
                                        </div>
                                        <input name='codIdProyExtraB1' id='codIdProyExtraB1' type='text' class='form-control' placeholder='Ingresa el Código Identificador ' required maxlength='50' data-toggle='tooltip' data-placement='bottom' title='Código Identificador max. 50 Caracteres'>
                                        <label for='floatingInput' class='pl-5'>Código Identificador Proyecto Extra</label>
                                    </div>
                                </div>
                                <div class='col-md-12'>
                                    <div class='row justify-content-left ml-5'>
                                        <label class=''>Núm. Folio Proyecto Extra: {$folioProyExtra}</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='col-md-3 col-sm-12 '>
                            <div class='input-group'>
                                <label for='color' class='pl-5 parpadea'>Forma de Pago Proyecto Extra</label>
                                <select name='id_pagoProyExtraB1' id='id_pagoProyExtraB1' class='form-control' data-toggle='tooltip' data-placement='bottom' title='Selecciona una Forma de Pago de la lista' style='width:100%;'>
                                    <option selected disabled>Selecciona</option>";
                                    while ($rowFormaCobro = $resultFormaCobroB1->fetch_assoc()) {
                                    $id_formaPago = $rowFormaCobro['id_formaPago'];
                                    $formaPago = $rowFormaCobro['formaPago'];
                                    $output .= " <option value=$id_formaPago> $formaPago </option>";
                                    }
                                    $output .= "
                                </select>
                            </div>
                        </div>
                        <div class='col-md-12'>
                            <hr>
                        </div>
                        <p><a class='btn btn-secondary btn-circle btn-sm' href='#' id='showB2' data-toggle='tooltip' data-placement='bottom' title='Generar campos adicionales'><i class='fa-solid fa-plus'></i>&nbsp;<i class='fa-solid fa-1'></i></a></p>
                        <div id='content' class='col-lg-12'>
                            <div id='elementB2' class='col-lg-12' style='display: none;'> 
                                <div id='close'>
                                    <a class='btn btn-secondary btn-circle btn-sm' href='#' id='hideB2' data-toggle='tooltip' data-placement='bottom' title='Cerrar campos adicionales'><i class='fa fa-close'></i></a>
                                </div>
                                <div class='row justify-content-center'>
                                    <div class='col-md-3 col-sm-12 my-1'>
                                        <div class='input-group form-floating mb-3'>
                                            <div class='input-group-prepend'>
                                                <span class='input-group-text parpadea mt-2'>
                                                    <i class='fa-solid fa-money-bill-1-wave '></i>
                                                </span>
                                            </div>
                                            <input name='valCobProyExtraB2' id='currencyB2' type='text' class='form-control' placeholder='Ingresa Cobro' required maxlength='12' data-toggle='tooltip'  data-placement='bottom' title='Ingresa Cobro'>
                                            <label for='floatingInput' class='pl-5'>Valor Cobro Proyecto Extra</label>
                                        </div>
                                    </div>
                                    <div class='col-md-6 col-sm-12 my-1'>
                                        <div class='input-group form-floating mb-3'>
                                            <div class='input-group-prepend'>
                                                <span class='input-group-text parpadea'><i class='fa-solid fa-arrow-down-1-9'></i></span>
                                            </div>
                                            <input name='codIdProyExtraB2' id='codIdProyExtraB2' type='text' class='form-control' placeholder='Ingresa el Código Identificador ' required maxlength='50'    data-toggle='tooltip' data-placement='bottom' title='Código Identificador max. 50 Caracteres'>
                                            <label for='floatingInput' class='pl-5'>Código Identificador Proyecto Extra</label>
                                        </div>
                                    </div>
                                    <div class='col-md-3 col-sm-12 '>
                                        <div class='input-group'>
                                            <label for='color' class='pl-5 parpadea'>Forma de Pago Proyecto Extra</label>
                                            <select name='id_pagoProyExtraB2' id='id_pagoProyExtraB2' class='form-control' data-toggle='tooltip' data-placement='bottom' title='Selecciona una Forma de Pago de la lista'   style='width:100%;'>
                                                <option selected disabled>Selecciona</option>";
                                                while ($rowFormaCobro = $resultFormaCobroB2->fetch_assoc()) {
                                                $id_formaPago = $rowFormaCobro['id_formaPago'];
                                                $formaPago = $rowFormaCobro['formaPago'];
                                                $output .= " <option value=$id_formaPago> $formaPago </option>";
                                                }
                                                $output .= "
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class='row justify-content-center'>
                                    <a class='btn btn-secondary btn-circle btn-sm' href='#' id='showB3' data-toggle='tooltip' data-placement='bottom' title='Generar campos adicionales'><i class='fa-solid fa-plus'></i>&nbsp;<i class='fa-solid fa-2'></i></a>
                                </div>
                            </div>
                        </div>
                        <div id='content' class='col-lg-12'>
                            <div id='elementB3' class='col-lg-12' style='display: none;'> 
                                <div id='close3'>
                                    <a class='btn btn-secondary btn-circle btn-sm' href='#' id='hideB3' title='Cerrar'><i class='fa fa-close'></i></a>
                                </div>
                                <div class='row justify-content-center'>
                                    <div class='col-md-3 col-sm-12 my-1'>
                                        <div class='input-group form-floating mb-3'>
                                            <div class='input-group-prepend'>
                                                <span class='input-group-text parpadea mt-2'>
                                                    <i class='fa-solid fa-money-bill-1-wave '></i>
                                                </span>
                                            </div>
                                        <input name='valCobProyExtraB3' id='currencyB3' type='text' class='form-control' placeholder='Ingresa Cobro' required maxlength='12' data-toggle='tooltip'  data-placement='bottom' title='Ingresa Cobro'>
                                        <label for='floatingInput' class='pl-5'>Valor Cobro Proyecto Extra</label>
                                        </div>
                                    </div>
                                    <div class='col-md-6 col-sm-12 my-1'>
                                        <div class='input-group form-floating mb-3'>
                                            <div class='input-group-prepend'>
                                                <span class='input-group-text parpadea'><i class='fa-solid fa-arrow-down-1-9'></i></span>
                                            </div>
                                            <input name='codIdProyExtraB3' id='codIdProyExtraB3' type='text' class='form-control' placeholder='Ingresa el Código Identificador ' required maxlength='50'        data-toggle='tooltip'   data-placement='bottom' title='Código Identificador max. 50 Caracteres'>
                                            <label for='floatingInput' class='pl-5'>Código Identificador Proyecto Extra</label>
                                        </div>
                                    </div>
                                    <div class='col-md-3 col-sm-12 '>
                                        <div class='input-group'>
                                            <label for='color' class='pl-5 parpadea'>Forma de Pago Proyecto Extra</label>
                                            <select name='id_pagoProyExtraB3' id='id_pagoProyExtraB3' class='form-control' data-toggle='tooltip' data-placement='bottom' title='Selecciona una Forma de Pago de la  lista'  style='width:100%;'>
                                            <option selected disabled>Selecciona</option>";
                                            while ($rowFormaCobro = $resultFormaCobroB3->fetch_assoc()) {
                                            $id_formaPago = $rowFormaCobro['id_formaPago'];
                                            $formaPago = $rowFormaCobro['formaPago'];
                                            $output .= " <option value=$id_formaPago> $formaPago </option>";
                                            }
                                            $output .= "
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class='col-md-12 col-sm-12 my-2 py-1' style='border: 2px solid #CED4DA;'>
                    <div class='row justify-content-center'>
                        <div class='col-md-3 col-sm-12 my-1'>
                            <div class='input-group form-floating mb-3'>
                                <div class='input-group-prepend'>
                                    <span class='input-group-text parpadea mt-2'>
                                        <i class='fa-solid fa-money-bill-1-wave '></i>
                                    </span>
                                </div>
                                <input name='valCobComBanC1' id='currencyC1' type='text' class='form-control' placeholder='Ingresa Cobro' required maxlength='12' data-toggle='tooltip' data-placement='bottom' title='Ingresa Cobro'>
                                <label for='floatingInput' class='pl-5'>Valor Cobro Comisión Bancaria</label>
                            </div>
                        </div>
                        <div class='col-md-6 col-sm-12 my-1'>
                            <div class='input-group form-floating mb-3'>
                                <div class='input-group-prepend'>
                                    <span class='input-group-text parpadea'><i class='fa-solid fa-arrow-down-1-9'></i></span>
                                </div>
                                <input name='codIdComBanC1' id='codIdComBanC1' type='text' class='form-control' placeholder='Ingresa el Código Identificador ' required maxlength='50' data-toggle='tooltip' data-placement='bottom' title='Código Identificador max. 50 Caracteres'>
                                <label for='floatingInput' class='pl-5'>Código Identificador Comisión Bancaria</label>
                            </div>
                        </div>
                        <div class='col-md-3 col-sm-12 '>
                            <div class='input-group'>
                                <label for='color' class='pl-5 parpadea'>Forma de Pago Comisión Bancaria</label>
                                <select name='id_pagoComBanC1' id='id_pagoComBanC1' class='form-control' data-toggle='tooltip' data-placement='bottom' title='Selecciona una Forma de Pago de la lista' style='width:100%;'>
                                    <option selected disabled>Selecciona</option>";
                                    while ($rowFormaCobro = $resultFormaCobroC1->fetch_assoc()) {
                                    $id_formaPago = $rowFormaCobro['id_formaPago'];
                                    $formaPago = $rowFormaCobro['formaPago'];
                                    $output .= " <option value=$id_formaPago> $formaPago </option>";
                                    }
                                    $output .= "
                                </select>
                            </div>
                        </div>
                        <div class='col-md-12'>
                            <hr>
                        </div>
                        <p><a class='btn btn-secondary btn-circle btn-sm' href='#' id='showC2' data-toggle='tooltip' data-placement='bottom' title='Generar campos adicionales'><i class='fa-solid fa-plus'></i>&nbsp;<i class='fa-solid fa-1'></i></a></p>
                        <div id='content' class='col-lg-12'>
                            <div id='elementC2' class='col-lg-12' style='display: none;'> 
                                <div id='close'>
                                    <a class='btn btn-secondary btn-circle btn-sm' href='#' id='hideC2' data-toggle='tooltip' data-placement='bottom' title='Cerrar campos adicionales'><i class='fa fa-close'></i></a>
                                </div>
                                <div class='row justify-content-center'>
                                    <div class='col-md-3 col-sm-12 my-1'>
                                        <div class='input-group form-floating mb-3'>
                                            <div class='input-group-prepend'>
                                                <span class='input-group-text parpadea mt-2'>
                                                    <i class='fa-solid fa-money-bill-1-wave '></i>
                                                </span>
                                            </div>
                                            <input name='valCobComBanC2' id='currencyC2' type='text' class='form-control' placeholder='Ingresa Cobro' required maxlength='12' data-toggle='tooltip' data-placement='bottom' title='Ingresa Cobro'>
                                            <label for='floatingInput' class='pl-5'>Valor Cobro Comisión Bancaria</label>
                                        </div>
                                    </div>
                                    <div class='col-md-6 col-sm-12 my-1'>
                                        <div class='input-group form-floating mb-3'>
                                            <div class='input-group-prepend'>
                                                <span class='input-group-text parpadea'><i class='fa-solid fa-arrow-down-1-9'></i></span>
                                            </div>
                                            <input name='codIdComBanC2' id='codIdComBanC2' type='text' class='form-control' placeholder='Ingresa el Código Identificador ' required maxlength='50' data-toggle='tooltip' data-placement='bottom' title='Código Identificador max. 50 Caracteres'>
                                            <label for='floatingInput' class='pl-5'>Código Identificador Comisión Bancaria</label>
                                        </div>
                                    </div>
                                    <div class='col-md-3 col-sm-12 '>
                                        <div class='input-group'>
                                            <label for='color' class='pl-5 parpadea'>Forma de Pago Comisión Bancaria</label>
                                            <select name='id_pagoComBanC2' id='id_pagoComBanC2' class='form-control' data-toggle='tooltip' data-placement='bottom' title='Selecciona una Forma de Pago de la lista' style='width:100%;'>
                                                <option selected disabled>Selecciona</option>";
                                                while ($rowFormaCobro = $resultFormaCobroC2->fetch_assoc()) {
                                                $id_formaPago = $rowFormaCobro['id_formaPago'];
                                                $formaPago = $rowFormaCobro['formaPago'];
                                                $output .= " <option value=$id_formaPago> $formaPago </option>";
                                                }
                                                $output .= "
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class='row justify-content-center'>
                                    <a class='btn btn-secondary btn-circle btn-sm' href='#' id='showC3' data-toggle='tooltip' data-placement='bottom' title='Generar campos adicionales'><i class='fa-solid fa-plus'></i>&nbsp;<i class='fa-solid fa-2'></i></a>
                                </div>
                            </div>
                        </div>
                        <div id='content' class='col-lg-12'>
                            <div id='elementC3' class='col-lg-12' style='display: none;'> 
                                <div id='close3'>
                                    <a class='btn btn-secondary btn-circle btn-sm' href='#' id='hideC3' title='Cerrar'><i class='fa fa-close'></i></a>
                                </div>
                                <div class='row justify-content-center'>
                                    <div class='col-md-3 col-sm-12 my-1'>
                                        <div class='input-group form-floating mb-3'>
                                            <div class='input-group-prepend'>
                                                <span class='input-group-text parpadea mt-2'>
                                                    <i class='fa-solid fa-money-bill-1-wave '></i>
                                                </span>
                                            </div>
                                            <input name='valCobComBanC3' id='currencyC3' type='text' class='form-control' placeholder='Ingresa Cobro' required maxlength='12' data-toggle='tooltip' data-placement='bottom' title='Ingresa Cobro'>
                                            <label for='floatingInput' class='pl-5'>Valor Cobro Comisión Bancaria</label>
                                        </div>
                                    </div>
                                    <div class='col-md-6 col-sm-12 my-1'>
                                        <div class='input-group form-floating mb-3'>
                                            <div class='input-group-prepend'>
                                                <span class='input-group-text parpadea'><i class='fa-solid fa-arrow-down-1-9'></i></span>
                                            </div>
                                            <input name='codIdComBanC3' id='codIdComBanC3' type='text' class='form-control' placeholder='Ingresa el Código Identificador ' required maxlength='50' data-toggle='tooltip' data-placement='bottom' title='Código Identificador max. 50 Caracteres'>
                                            <label for='floatingInput' class='pl-5'>Código Identificador Comisión Bancaria</label>
                                        </div>
                                    </div>
                                    <div class='col-md-3 col-sm-12 '>
                                        <div class='input-group'>
                                            <label for='color' class='pl-5 parpadea'>Forma de Pago Comisión Bancaria</label>
                                            <select name='id_pagoComBanC3' id='id_pagoComBanC3' class='form-control' data-toggle='tooltip' data-placement='bottom' title='Selecciona una Forma de Pago de la lista' style='width:100%;'>
                                                <option selected disabled>Selecciona</option>";
                                                while ($rowFormaCobro = $resultFormaCobroC3->fetch_assoc()) {
                                                $id_formaPago = $rowFormaCobro['id_formaPago'];
                                                $formaPago = $rowFormaCobro['formaPago'];
                                                $output .= " <option value=$id_formaPago> $formaPago </option>";
                                                }
                                                $output .= "
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class='col-md-12 col-sm-12 my-2 py-1' style='border: 2px solid #CED4DA;'>
                    <div class='row justify-content-center'>
                        <div class='col-md-3 col-sm-12 my-1'>
                            <div class='input-group form-floating mb-3'>
                                <div class='input-group-prepend'>
                                    <span class='input-group-text parpadea mt-2'>
                                        <i class='fa-solid fa-money-bill-1-wave '></i>
                                    </span>
                                </div>
                                <input name='valCobPenD1' id='currencyD1' type='text' class='form-control' placeholder='Ingresa Cobro' required maxlength='12' data-toggle='tooltip' data-placement='bottom' title='Ingresa Cobro'>
                                <label for='floatingInput' class='pl-5'>Valor Cobro Pensión</label>
                            </div>
                        </div>
                        <div class='col-md-6 col-sm-12 my-1'>
                            <div class='input-group form-floating mb-3'>
                                <div class='input-group-prepend'>
                                    <span class='input-group-text parpadea'><i class='fa-solid fa-arrow-down-1-9'></i></span>
                                </div>
                                <input name='codIdPensionD1' id='codIdPensionD1' type='text' class='form-control' placeholder='Ingresa el Código Identificador ' required maxlength='50' data-toggle='tooltip' data-placement='bottom' title='Código Identificador max. 50 Caracteres'>
                                <label for='floatingInput' class='pl-5'>Código Identificador Pensión</label>
                            </div>
                        </div>
                        <div class='col-md-3 col-sm-12 '>
                            <div class='input-group'>
                                <label for='color' class='pl-5 parpadea'>Forma de Pago Pensión</label>
                                <select name='id_pagoPensionD1' id='id_pagoPensionD1' class='form-control' data-toggle='tooltip' data-placement='bottom' title='Selecciona una Forma de Pago de la lista' style='width:100%;'>
                                    <option selected disabled>Selecciona</option>";
                                    while ($rowFormaCobro = $resultFormaCobroD1->fetch_assoc()) {
                                    $id_formaPago = $rowFormaCobro['id_formaPago'];
                                    $formaPago = $rowFormaCobro['formaPago'];
                                    $output .= " <option value=$id_formaPago> $formaPago </option>";
                                    }
                                    $output .= "
                                </select>
                            </div>
                        </div>
                        <div class='col-md-12'>
                            <hr>
                        </div>
                        <p><a class='btn btn-secondary btn-circle btn-sm' href='#' id='showD2' data-toggle='tooltip' data-placement='bottom' title='Generar campos adicionales'><i class='fa-solid fa-plus'></i>&nbsp;<i class='fa-solid fa-1'></i></a></p>
                        <div id='content' class='col-lg-12'>
                            <div id='elementD2' class='col-lg-12' style='display: none;'> 
                                <div id='close'>
                                    <a class='btn btn-secondary btn-circle btn-sm' href='#' id='hideD2' data-toggle='tooltip' data-placement='bottom' title='Cerrar campos adicionales'><i class='fa fa-close'></i></a>
                                </div>
                                <div class='row justify-content-center'>
                                    <div class='col-md-3 col-sm-12 my-1'>
                                        <div class='input-group form-floating mb-3'>
                                            <div class='input-group-prepend'>
                                                <span class='input-group-text parpadea mt-2'>
                                                    <i class='fa-solid fa-money-bill-1-wave '></i>
                                                </span>
                                            </div>
                                            <input name='valCobPenD2' id='currencyD2' type='text' class='form-control' placeholder='Ingresa Cobro' required maxlength='12' data-toggle='tooltip' data-placement='bottom' title='Ingresa Cobro'>
                                            <label for='floatingInput' class='pl-5'>Valor Cobro Pensión</label>
                                        </div>
                                    </div>
                                    <div class='col-md-6 col-sm-12 my-1'>
                                        <div class='input-group form-floating mb-3'>
                                            <div class='input-group-prepend'>
                                                <span class='input-group-text parpadea'><i class='fa-solid fa-arrow-down-1-9'></i></span>
                                            </div>
                                            <input name='codIdPensionD2' id='codIdPensionD2' type='text' class='form-control' placeholder='Ingresa el Código Identificador ' required maxlength='50' data-toggle='tooltip' data-placement='bottom' title='Código Identificador max. 50 Caracteres'>
                                            <label for='floatingInput' class='pl-5'>Código Identificador Pensión</label>
                                        </div>
                                    </div>
                                    <div class='col-md-3 col-sm-12 '>
                                        <div class='input-group'>
                                            <label for='color' class='pl-5 parpadea'>Forma de Pago Pensión</label>
                                            <select name='id_pagoPensionD2' id='id_pagoPensionD2' class='form-control' data-toggle='tooltip' data-placement='bottom' title='Selecciona una Forma de Pago de la lista' style='width:100%;'>
                                                <option selected disabled>Selecciona</option>";
                                                while ($rowFormaCobro = $resultFormaCobroD2->fetch_assoc()) {
                                                $id_formaPago = $rowFormaCobro['id_formaPago'];
                                                $formaPago = $rowFormaCobro['formaPago'];
                                                $output .= " <option value=$id_formaPago> $formaPago </option>";
                                                }
                                                $output .= "
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class='row justify-content-center'>
                                    <a class='btn btn-secondary btn-circle btn-sm' href='#' id='showD3' data-toggle='tooltip' data-placement='bottom' title='Generar campos adicionales'><i class='fa-solid fa-plus'></i>&nbsp;<i class='fa-solid fa-2'></i></a>
                                </div>
                            </div>
                        </div>
                        <div id='content' class='col-lg-12'>
                            <div id='elementD3' class='col-lg-12' style='display: none;'> 
                                <div id='close3'>
                                    <a class='btn btn-secondary btn-circle btn-sm' href='#' id='hideD3' title='Cerrar'><i class='fa fa-close'></i></a>
                                </div>
                                <div class='row justify-content-center'>
                                    <div class='col-md-3 col-sm-12 my-1'>
                                        <div class='input-group form-floating mb-3'>
                                            <div class='input-group-prepend'>
                                                <span class='input-group-text parpadea mt-2'>
                                                    <i class='fa-solid fa-money-bill-1-wave '></i>
                                                </span>
                                            </div>
                                            <input name='valCobPenD3' id='currencyD3' type='text' class='form-control' placeholder='Ingresa Cobro' required maxlength='12' data-toggle='tooltip' data-placement='bottom' title='Ingresa Cobro'>
                                            <label for='floatingInput' class='pl-5'>Valor Cobro Pensión</label>
                                        </div>
                                    </div>
                                    <div class='col-md-6 col-sm-12 my-1'>
                                        <div class='input-group form-floating mb-3'>
                                            <div class='input-group-prepend'>
                                                <span class='input-group-text parpadea'><i class='fa-solid fa-arrow-down-1-9'></i></span>
                                            </div>
                                            <input name='codIdPensionD3' id='codIdPensionD3' type='text' class='form-control' placeholder='Ingresa el Código Identificador ' required maxlength='50' data-toggle='tooltip' data-placement='bottom' title='Código Identificador max. 50 Caracteres'>
                                            <label for='floatingInput' class='pl-5'>Código Identificador Pensión</label>
                                        </div>
                                    </div>
                                    <div class='col-md-3 col-sm-12 '>
                                        <div class='input-group'>
                                            <label for='color' class='pl-5 parpadea'>Forma de Pago Pensión</label>
                                            <select name='id_pagoPensionD3' id='id_pagoPensionD3' class='form-control' data-toggle='tooltip' data-placement='bottom' title='Selecciona una Forma de Pago de la lista' style='width:100%;'>
                                                <option selected disabled>Selecciona</option>";
                                                while ($rowFormaCobro = $resultFormaCobroD3->fetch_assoc()) {
                                                $id_formaPago = $rowFormaCobro['id_formaPago'];
                                                $formaPago = $rowFormaCobro['formaPago'];
                                                $output .= " <option value=$id_formaPago> $formaPago </option>";
                                                }
                                                $output .= "
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class='col-md-12 col-sm-12 my-2 py-1' style='border: 2px solid #CED4DA;'>
                    <div class='row justify-content-center'>
                        <div class='col-md-3 col-sm-12 my-1'>
                            <div class='input-group form-floating mb-3'>
                                <div class='input-group-prepend'>
                                    <span class='input-group-text parpadea mt-2'>
                                        <i class='fa-solid fa-money-bill-1-wave '></i>
                                    </span>
                                </div>
                                <input name='valCobOtrosE1' id='currencyE1' type='text' class='form-control' placeholder='Ingresa Cobro' required maxlength='12' data-toggle='tooltip' data-placement='bottom' title='Ingresa Cobro'>
                                <label for='floatingInput' class='pl-5'>Valor Cobro Otros</label>
                            </div>
                        </div>
                        <div class='col-md-6 col-sm-12 my-1'>
                            <div class='input-group form-floating mb-3'>
                                <div class='input-group-prepend'>
                                    <span class='input-group-text parpadea'><i class='fa-solid fa-arrow-down-1-9'></i></span>
                                </div>
                                <input name='codIdOtrosE1' id='codIdOtrosE1' type='text' class='form-control' placeholder='Ingresa el Código Identificador ' required maxlength='50' data-toggle='tooltip' data-placement='bottom' title='Código Identificador max. 50 Caracteres'>
                                <label for='floatingInput' class='pl-5'>Código Identificador Otros</label>
                            </div>
                        </div>
                        <div class='col-md-3 col-sm-12 '>
                            <div class='input-group'>
                                <label for='color' class='pl-5 parpadea'>Forma de Pago Otros</label>
                                <select name='id_pagoOtrosE1' id='id_pagoOtrosE1' class='form-control' data-toggle='tooltip' data-placement='bottom' title='Selecciona una Forma de Pago de la lista' style='width:100%;'>
                                    <option selected disabled>Selecciona</option>";
                                    while ($rowFormaCobro = $resultFormaCobroE1->fetch_assoc()) {
                                    $id_formaPago = $rowFormaCobro['id_formaPago'];
                                    $formaPago = $rowFormaCobro['formaPago'];
                                    $output .= " <option value=$id_formaPago> $formaPago </option>";
                                    }
                                    $output .= "
                                </select>
                            </div>
                        </div>
                        <div class='col-md-12'>
                            <hr>
                        </div>
                        <p><a class='btn btn-secondary btn-circle btn-sm' href='#' id='showE2' data-toggle='tooltip' data-placement='bottom' title='Generar campos adicionales'><i class='fa-solid fa-plus'></i>&nbsp;<i class='fa-solid fa-1'></i></a></p>
                        <div id='content' class='col-lg-12'>
                            <div id='elementE2' class='col-lg-12' style='display: none;'> 
                                <div id='close'>
                                    <a class='btn btn-secondary btn-circle btn-sm' href='#' id='hideE2' data-toggle='tooltip' data-placement='bottom' title='Cerrar campos adicionales'><i class='fa fa-close'></i></a>
                                </div>
                                <div class='row justify-content-center'>
                                    <div class='col-md-3 col-sm-12 my-1'>
                                        <div class='input-group form-floating mb-3'>
                                            <div class='input-group-prepend'>
                                                <span class='input-group-text parpadea mt-2'>
                                                    <i class='fa-solid fa-money-bill-1-wave '></i>
                                                </span>
                                            </div>
                                            <input name='valCobOtrosE2' id='currencyE2' type='text' class='form-control' placeholder='Ingresa Cobro' required maxlength='12' data-toggle='tooltip' data-placement='bottom' title='Ingresa Cobro'>
                                            <label for='floatingInput' class='pl-5'>Valor Cobro Otros</label>
                                        </div>
                                    </div>
                                    <div class='col-md-6 col-sm-12 my-1'>
                                        <div class='input-group form-floating mb-3'>
                                            <div class='input-group-prepend'>
                                                <span class='input-group-text parpadea'><i class='fa-solid fa-arrow-down-1-9'></i></span>
                                            </div>
                                            <input name='codIdOtrosE2' id='codIdOtrosE2' type='text' class='form-control' placeholder='Ingresa el Código Identificador ' required maxlength='50' data-toggle='tooltip' data-placement='bottom' title='Código Identificador max. 50 Caracteres'>
                                            <label for='floatingInput' class='pl-5'>Código Identificador Otros</label>
                                        </div>
                                    </div>
                                    <div class='col-md-3 col-sm-12 '>
                                        <div class='input-group'>
                                            <label for='color' class='pl-5 parpadea'>Forma de Pago Otros</label>
                                            <select name='id_pagoOtrosE2' id='id_pagoOtrosE2' class='form-control' data-toggle='tooltip' data-placement='bottom' title='Selecciona una Forma de Pago de la lista' style='width:100%;'>
                                                <option selected disabled>Selecciona</option>";
                                                while ($rowFormaCobro = $resultFormaCobroE2->fetch_assoc()) {
                                                $id_formaPago = $rowFormaCobro['id_formaPago'];
                                                $formaPago = $rowFormaCobro['formaPago'];
                                                $output .= " <option value=$id_formaPago> $formaPago </option>";
                                                }
                                                $output .= "
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class='row justify-content-center'>
                                    <a class='btn btn-secondary btn-circle btn-sm' href='#' id='showE3' data-toggle='tooltip' data-placement='bottom' title='Generar campos adicionales'><i class='fa-solid fa-plus'></i>&nbsp;<i class='fa-solid fa-2'></i></a>
                                </div>
                            </div>
                        </div>
                        <div id='content' class='col-lg-12'>
                            <div id='elementE3' class='col-lg-12' style='display: none;'> 
                                <div id='close3'>
                                    <a class='btn btn-secondary btn-circle btn-sm' href='#' id='hideE3' title='Cerrar'><i class='fa fa-close'></i></a>
                                </div>
                                <div class='row justify-content-center'>
                                    <div class='col-md-3 col-sm-12 my-1'>
                                        <div class='input-group form-floating mb-3'>
                                            <div class='input-group-prepend'>
                                                <span class='input-group-text parpadea mt-2'>
                                                    <i class='fa-solid fa-money-bill-1-wave '></i>
                                                </span>
                                            </div>
                                            <input name='valCobOtrosE3' id='currencyE3' type='text' class='form-control' placeholder='Ingresa Cobro' required maxlength='12' data-toggle='tooltip' data-placement='bottom' title='Ingresa Cobro'>
                                            <label for='floatingInput' class='pl-5'>Valor Cobro Otros</label>
                                        </div>
                                    </div>
                                    <div class='col-md-6 col-sm-12 my-1'>
                                        <div class='input-group form-floating mb-3'>
                                            <div class='input-group-prepend'>
                                                <span class='input-group-text parpadea'><i class='fa-solid fa-arrow-down-1-9'></i></span>
                                            </div>
                                            <input name='codIdOtrosE3' id='codIdOtrosE3' type='text' class='form-control' placeholder='Ingresa el Código Identificador ' required maxlength='50' data-toggle='tooltip' data-placement='bottom' title='Código Identificador max. 50 Caracteres'>
                                            <label for='floatingInput' class='pl-5'>Código Identificador Otros</label>
                                        </div>
                                    </div>
                                    <div class='col-md-3 col-sm-12 '>
                                        <div class='input-group'>
                                            <label for='color' class='pl-5 parpadea'>Forma de Pago Otros</label>
                                            <select name='id_pagoOtrosE3' id='id_pagoOtrosE3' class='form-control' data-toggle='tooltip' data-placement='bottom' title='Selecciona una Forma de Pago de la lista' style='width:100%;'>
                                                <option selected disabled>Selecciona</option>";
                                                while ($rowFormaCobro = $resultFormaCobroE3->fetch_assoc()) {
                                                $id_formaPago = $rowFormaCobro['id_formaPago'];
                                                $formaPago = $rowFormaCobro['formaPago'];
                                                $output .= " <option value=$id_formaPago> $formaPago </option>";
                                                }
                                                $output .= "
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class='col-md-4 col-sm-12 my-1'>
                    <label class='ml-5 mb-2'>Fecha<small> *Llenado en automatico</small></label>
                    <div class='input-group'>
                        <div class='input-group-prepend'>
                            <span class='input-group-text'> <i class='fa fa-calendar' aria-hidden='true'></i></span>
                        </div>
                        <input type='text' class='form-control' data-toggle='tooltip' data-placement='bottom' title='Campo en automatico' value='{$dateFront}' disabled readonly>
                    </div>
                </div>
                <div class='col-md-4 col-sm-12 my-1'>
                    <label class='ml-5 mb-2'>Capturista<small> *El que registra</small></label>
                    <div class='input-group'>
                        <div class='input-group-prepend'>
                            <span class='input-group-text'><i class='fa fa-user-pen' aria-hidden='true'></i></span>
                        </div>
                        <input type='text' class='form-control' data-toggle='tooltip' data-placement='bottom' title='Campo en automatico' value='{$nomComp}' disabled readonly>
                    </div>
                </div>
            </div>
        </div>
        <div class='card-footer border-footer'>
            <div class='row'>
                <div class='col-md-2 col-sm-12 align-self-center'>
                    <buttom type='submit' id='btnNuevoRegCodIdentificador' class='btn btn-secondary btn-block btnNuevoUsuario' data-toggle='tooltip' data-placement='bottom' title='Guardar '><i class='fas fa-pen'></i>
                        Guardar</buttom>
                </div>
                <div class='col-md-2 col-sm-12 align-self-center'>
                    <a href='javascript:history.go(-1)' class='btn btn-secondary btn-block' data-toggle='tooltip' data-placement='bottom' title='Regresar página anterior'><i class='fa-solid fa-arrow-left'></i>
                        Regresar</a>
                </div>

                <a href='javascript:location.reload()' class='btn btn-secondary btn-inline' data-toggle='tooltip' data-placement='bottom' title='Actualizar página'><i class='fa-solid fa-arrows-rotate'></i></a>
                <br>
                <div class='col-md-12 col-sm-12 align-self-center mt-2'>
                    <div id='respuestaRegAltaProyecto'></div>
                </div>
            </div>
        </div>
    </div>
</div>


";
    echo $output;
} else {
    echo '<h5>Ningún registro fue encontrado</h5>';
}

?>
<script>
    $(document).ready(function() {
        $('#btnNuevoRegCodIdentificador').click(function() {
            $.ajax({
                    url: 'addNuevoRegCodIdentificador.php',
                    type: 'POST',
                    data: $('#formNuevoRegCodIdentificador').serialize(),

                })
                .done(function(res) {
                    $('#respuestaRegAltaProyecto').html(res)
                })
        });
    });
    //Ocultar boton por 5 minutos para evitar el doble submit
    $("#btnNuevoRegCodIdentificador").on('click', function() {
        $("#btnNuevoRegCodIdentificador").css('visibility', 'hidden');
        setTimeout(function() {
            $("#btnNuevoRegCodIdentificador").css('visibility', 'visible');
        }, 180000);
    });

    $(document).ready(function() {
        $("#currencyA1").inputmask({
            alias: "currency",
            prefix: ''
        });
        $("#currencyA2").inputmask({
            alias: "currency",
            prefix: ''
        });
        $("#currencyA3").inputmask({
            alias: "currency",
            prefix: ''
        });
        $("#currencyB1").inputmask({
            alias: "currency",
            prefix: ''
        });
        $("#currencyB2").inputmask({
            alias: "currency",
            prefix: ''
        });
        $("#currencyB3").inputmask({
            alias: "currency",
            prefix: ''
        });
        $("#currencyC1").inputmask({
            alias: "currency",
            prefix: ''
        });
        $("#currencyC2").inputmask({
            alias: "currency",
            prefix: ''
        });
        $("#currencyC3").inputmask({
            alias: "currency",
            prefix: ''
        });
        $("#currencyD1").inputmask({
            alias: "currency",
            prefix: ''
        });
        $("#currencyD2").inputmask({
            alias: "currency",
            prefix: ''
        });
        $("#currencyD3").inputmask({
            alias: "currency",
            prefix: ''
        });
        $("#currencyE1").inputmask({
            alias: "currency",
            prefix: ''
        });
        $("#currencyE2").inputmask({
            alias: "currency",
            prefix: ''
        });
        $("#currencyE3").inputmask({
            alias: "currency",
            prefix: ''
        });

    });
</script>

<script>
    $(document).ready(function() {
        $("#hideA2").on('click', function() {
            $("#elementA2").hide();
            return false;
        });

        $("#showA2").on('click', function() {
            $("#elementA2").show();
            return false;
        });

        $("#hideA3").on('click', function(){
            $("#elementA3").hide();
            return false;
        });

        $("#showA3").on('click', function(){
            $("#elementA3").show();
            return false;
        })

        $("#hideB2").on('click', function() {
            $("#elementB2").hide();
            return false;
        });

        $("#showB2").on('click', function() {
            $("#elementB2").show();
            return false;
        });

        $("#hideB3").on('click', function(){
            $("#elementB3").hide();
            return false;
        });

        $("#showB3").on('click', function(){
            $("#elementB3").show();
            return false;
        })

        $("#hideC2").on('click', function() {
            $("#elementC2").hide();
            return false;
        });

        $("#showC2").on('click', function() {
            $("#elementC2").show();
            return false;
        });

        $("#hideC3").on('click', function(){
            $("#elementC3").hide();
            return false;
        });

        $("#showC3").on('click', function(){
            $("#elementC3").show();
            return false;
        })

        $("#hideD2").on('click', function() {
            $("#elementD2").hide();
            return false;
        });

        $("#showD2").on('click', function() {
            $("#elementD2").show();
            return false;
        });

        $("#hideD3").on('click', function(){
            $("#elementD3").hide();
            return false;
        });

        $("#showD3").on('click', function(){
            $("#elementD3").show();
            return false;
        })

        $("#hideE2").on('click', function() {
            $("#elementE2").hide();
            return false;
        });

        $("#showE2").on('click', function() {
            $("#elementE2").show();
            return false;
        });

        $("#hideE3").on('click', function(){
            $("#elementE3").hide();
            return false;
        });

        $("#showE3").on('click', function(){
            $("#elementE3").show();
            return false;
        })
    });
</script>