<?php
require 'head-main.php';
conectar();

$id_proyecto = $_POST['idProyecto'];

// Query principal
$query = 'SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.tipoReparacion, P.km, P.valorVenta, P.diagnostico, P.descripServ1, P.descripServ2, 
V.placa, M.marca, Mo.modelo, A.anio, Co.color,
RE.id_regSolicitud, RE.folioRegSolicitud, RE.valorVentaAlta, RE.inspecCalidad, RE.observCliente, RE.descripcionFinal,
SS.semana, TA.tecArmador, TM1.tecMontador AS tecMontador1, TM2.tecMontador AS tecMontador2, TM3.id_tecMontador AS tecMontador3, TM4.tecMontador AS tecMontador4
FROM proyectos P 
INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
INNER JOIN marcas M ON V.id_marca = M.id_marca 
INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
INNER JOIN anios A ON V.id_anio = A.id_anio 
INNER JOIN colores Co ON V.id_color = Co.id_color 
INNER JOIN registrosolicitud RE ON P.id_proyecto = RE.id_proyecto
LEFT JOIN semanasolalta SS ON RE.id_semana = SS.id_semSolAlta
LEFT JOIN tecarmadores TA ON RE.tecArmador = TA.id_tecArmador
LEFT JOIN tecmontadores TM1 ON RE.tecMontador1 = TM1.id_tecMontador
LEFT JOIN tecmontadores TM2 ON RE.tecMontador2 = TM2.id_tecMontador
LEFT JOIN tecmontadores TM3 ON RE.tecMontador3 = TM3.tecMontador
LEFT JOIN tecmontadores TM4 ON RE.tecMontador4 = TM4.tecMontador
WHERE P.id_proyecto = ' . $id_proyecto . ' ';
$respuesta = mysqli_query($conexion, $query);
$row  = $respuesta->fetch_assoc();

// // Query semanas
// $queryS = "SELECT id_semana, semana, borrado FROM semanas WHERE borrado = 0 ORDER BY semana DESC";
// $resultSemanas = mysqli_query($conexion, $queryS) or die(mysqli_error($conexion));

// Query semanas
$queryS = "SELECT id_semSolAlta , semana, borrado FROM semanasolalta ORDER BY id_semSolAlta DESC";
$resultSemanas = mysqli_query($conexion, $queryS) or die(mysqli_error($conexion));

// Query Tecnico Armador
// $queryTA = "SELECT id_tecArmador, tecArmador FROM tecarmadores  ORDER BY id_tecArmador ASC";
// $resultTecArmador = mysqli_query($conexion, $queryTA) or die(mysqli_error($conexion));

// // Query Tecnico Montador 1
// $queryTM1 = "SELECT id_tecMontador, tecMontador FROM tecmontadores  ORDER BY id_tecMontador ASC";
// $resultTM1 = mysqli_query($conexion, $queryTM1) or die(mysqli_error($conexion));

// // Query Tecnico Montador 2
// $queryTM2 = "SELECT id_tecMontador, tecMontador FROM tecmontadores  ORDER BY id_tecMontador ASC";
// $resultTM2 = mysqli_query($conexion, $queryTM2) or die(mysqli_error($conexion));

// // Query Tecnico Montador 3
// $queryTM3 = "SELECT id_tecMontador, tecMontador FROM tecmontadores  ORDER BY id_tecMontador ASC";
// $resultTM3 = mysqli_query($conexion, $queryTM3) or die(mysqli_error($conexion));

// // Query Tecnico Montador 4
// $queryTM4 = "SELECT id_tecMontador, tecMontador FROM tecmontadores  ORDER BY id_tecMontador ASC";
// $resultTM4 = mysqli_query($conexion, $queryTM4) or die(mysqli_error($conexion));


// // Query Registro de folio registrosolicitud
// $queryP = 'SELECT MAX(id_regSolicitud) + 1 FROM registrosolicitudbitacora';
// $result = mysqli_query($conexion,  $queryP);
// $rowp = mysqli_fetch_row($result);

// // Prefijo folio
// $text = "Solicitud_Alta-00";
// $folio = $text . '' . $rowp[0];


$id_regSolicitud = $row['id_regSolicitud'];
$folioRegSolicitud = $row['folioRegSolicitud'];
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
$semanaSolAlta = $row['semana'];
// $diagnostico = $row['diagnostico'];
// $descripServ1 = $row['descripServ1'];
// $descripServ2 = $row['descripServ2'];
$inspecCalidad = $row['inspecCalidad'];
$observCliente = $row['observCliente'];
$descripcionFinal = $row['descripcionFinal'];
$tecArmador =   (empty($row['tecArmador'])) ? 'N/A' : $row['tecArmador'];
$tecMontador1 = (empty($row['tecMontador1'])) ? 'N/A' : $row['tecMontador1'];
$tecMontador2 = (empty($row['tecMontador2'])) ? 'N/A' : $row['tecMontador2'];
$tecMontador3 = (empty($row['tecMontador3'])) ? 'N/A' : $row['tecMontador3'];
$tecMontador4 = (empty($row['tecMontador4'])) ? 'N/A' : $row['tecMontador4'];

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
                    <input name='id_regSolicitud' id='id_regSolicitud' type='hidden' value='{$id_regSolicitud}'>
                    <input name='folioRegSolicitud' id='folioRegSolicitud' type='hidden' value='{$folioRegSolicitud}'>
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
        <div class='card card-secondary card-outline '>
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
                <div class='col-md-3 col-sm-12 my-1 form-group'>
                    <div class='input-group form-floating mb-3'>
                        <div class='input-group-prepend'>
                            <span class='input-group-text'><i class='fa-solid fa-list-ol'></i></span>
                        </div>
                        <input name='tipoReparacion' id='tipoReparacion' type='text' class='form-control' placeholder='Tipo de reparación a realizar' maxlength='15' data-toggle='tooltip' data-placement='bottom' title='Tipo de reparación' value='{$tipoReparacion}' readonly>
                        <label for='floatingInput' class='pl-5'>*Tipo de Reparación</label>
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
                <div class='col-md-12 col-sm-12 my-1'>
                    <div class='row justify-content-center'>
                        <div class='col-md-3 col-sm-12 my-1'>
                            <div class='input-group form-floating mb-3'>
                                <div class='input-group-prepend'>
                                    <span class='input-group-text mt-2'>
                                        <i class='fa-solid fa-money-bill-1-wave'></i>
                                    </span>
                                </div>
                                <input name='valorVenta' id='valorVenta' type='text' class='form-control' placeholder='Valor Venta Inicial' required maxlength='12' data-toggle='tooltip' data-placement='bottom' title='Ingresa Valor Venta Inicial' value='{$valorVenta}' readonly>
                                <label for='floatingInput' class='pl-5'>*Valor Venta Inicial </label>
                            </div>
                        </div>
                        <div class='col-md-2 col-sm-12 my-1'>
                            <div class='input-group form-floating mb-3'>
                                <div class='input-group-prepend'>
                                    <span class='input-group-text mt-2'>
                                        <i class='fa-solid fa-money-bill-1-wave'></i>
                                    </span>
                                </div>
                                <input name='valorVentaAlta' id='currency1' type='text' class='form-control' placeholder='Ingresa Valor Venta Alta' required maxlength='12' data-toggle='tooltip' data-placement='bottom' title='Ingresa Valor Venta Alta' autofocus value='{$valorVentaAlta}' readonly>
                                <label for='floatingInput' class='pl-5'>*Valor Venta Alta</label>
                            </div>
                        </div>
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
                                        <textarea name='inspecCalidad' id='inspecCalidad' class='form-control' rows='5' placeholder='Agrega alguna breve Observación de Inspección de Control Calidad' maxlength='300' readonly>{$inspecCalidad}</textarea>
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
                                        <textarea name='observCliente' id='observCliente' class='form-control' rows='5' placeholder='Agrega alguna breve Observación para nuestro Cliente' maxlength='300' readonly>{$observCliente}</textarea>
                                    </div>
                                </span>
                            </div>
                        </div>
                        <div class='col-md-4 col-sm-12 my-1'>
                            <div class='form-group-input' style='border: 1px solid #CED4DA;'>
                                <label class='ml-5 mb-2'>*Descripción Final de Servicio Realizado al Vehículo</label>
                                <span data-toggle='tooltip' title='max. 300 caracteres'>
                                    <div class='input-group'>
                                        <div class='input-group-prepend'>
                                            <span class='input-group-text'><i class='fa-solid fa-comment'></i></span>
                                        </div>
                                        <textarea name='descripcionFinal' id='descripcionFinal' class='form-control' rows='4' placeholder='Agrega Descripción Final de (los) Servicio(s) Realizado(s) al Vehículo' maxlength='300' readonly>{$descripcionFinal}</textarea>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-md-12 col-sm-12 my-2 py-1' style='border: 2px solid #CED4DA;'>
                    <div class='row justify-content-center'>
                        <div class='col-md-12 col-sm-12 text-center py-3'>
                            <h5> <strong> Técnicos Seleccionados</strong></h5>
                        </div>
                        <div class='col-md-3 col-sm-12 my-1'>
                            <div class='input-group form-floating mb-3'>
                                <div class='input-group-prepend'>
                                    <span class='input-group-text mt-2'>
                                        <i class='fa-solid fa-calendar-days'></i>
                                    </span>
                                </div>
                                <input name='valorVentaAlta' id='currency1' type='text' class='form-control' placeholder='Ingresa Valor Venta Alta' required maxlength='12' data-toggle='tooltip' data-placement='bottom' title='Ingresa Valor Venta Alta' autofocus value='{$tecArmador}' readonly>
                                <label for='floatingInput' class='pl-5'>Técnico Armador</label>
                            </div>
                        </div>
                        <div class='col-md-3 col-sm-12 my-1'>
                            <div class='input-group form-floating mb-3'>
                                <div class='input-group-prepend'>
                                    <span class='input-group-text mt-2'>
                                        <i class='fa-solid fa-calendar-days'></i>
                                    </span>
                                </div>
                                <input name='valorVentaAlta' id='currency1' type='text' class='form-control' placeholder='Ingresa Valor Venta Alta' required maxlength='12' data-toggle='tooltip' data-placement='bottom' title='Ingresa Valor Venta Alta' autofocus value='{$tecMontador1}' readonly>
                                <label for='floatingInput' class='pl-5'>Técnico Montador 1</label>
                            </div>
                        </div>
                        <div class='col-md-3 col-sm-12 my-1'>
                            <div class='input-group form-floating mb-3'>
                                <div class='input-group-prepend'>
                                    <span class='input-group-text mt-2'>
                                        <i class='fa-solid fa-calendar-days'></i>
                                    </span>
                                </div>
                                <input name='valorVentaAlta' id='currency1' type='text' class='form-control' placeholder='Ingresa Valor Venta Alta' required maxlength='12' data-toggle='tooltip' data-placement='bottom' title='Ingresa Valor Venta Alta' autofocus value='{$tecMontador2}' readonly>
                                <label for='floatingInput' class='pl-5'>Técnico Montador 2</label>
                            </div>
                        </div>
                        <div class='col-md-3 col-sm-12 my-1'>
                            <div class='input-group form-floating mb-3'>
                                <div class='input-group-prepend'>
                                    <span class='input-group-text mt-2'>
                                        <i class='fa-solid fa-calendar-days'></i>
                                    </span>
                                </div>
                                <input name='valorVentaAlta' id='currency1' type='text' class='form-control' placeholder='Ingresa Valor Venta Alta' required maxlength='12' data-toggle='tooltip' data-placement='bottom' title='Ingresa Valor Venta Alta' autofocus value='{$tecMontador3}' readonly>
                                <label for='floatingInput' class='pl-5'>Técnico Montador 3</label>
                            </div>
                        </div>
                        <div class='col-md-3 col-sm-12 my-1'>
                            <div class='input-group form-floating mb-3'>
                                <div class='input-group-prepend'>
                                    <span class='input-group-text mt-2'>
                                        <i class='fa-solid fa-calendar-days'></i>
                                    </span>
                                </div>
                                <input name='valorVentaAlta' id='currency1' type='text' class='form-control' placeholder='Ingresa Valor Venta Alta' required maxlength='12' data-toggle='tooltip' data-placement='bottom' title='Ingresa Valor Venta Alta' autofocus value='{$tecMontador4}' readonly>
                                <label for='floatingInput' class='pl-5'>Técnico Montador 4</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class='col-md-12 col-sm-12 my-2 py-1' style='border: 2px solid #CED4DA;'>
                    <div class='row justify-content-center'>
                        <div class='col-md-12 col-sm-12 text-center py-3'>
                            <h5> <strong> Registro Para Solicitar Cambio Semana Solicitud de Alta</strong></h5>
                        </div>
                        <div class='col-md-4 col-sm-12 my-1'>
                            <div class='input-group form-floating mb-3'>
                                <div class='input-group-prepend'>
                                    <span class='input-group-text mt-2'>
                                        <i class='fa-solid fa-calendar-days'></i>
                                    </span>
                                </div>
                                <input name='semanaActual' id='semanaActual' type='text' class='form-control' placeholder='Ingresa Valor Venta Alta' required maxlength='12' data-toggle='tooltip' data-placement='bottom' title='Ingresa Valor Venta Alta' autofocus value='{$semanaSolAlta}' readonly>
                                <label for='floatingInput' class='pl-5 parpadea'>Semana de Solicitud de Alta (Actual)</label>
                            </div>
                        </div>

                        <div class='col-md-4 col-sm-12 mb-2 form-group'>
                            <div class='input-group'>
                                <label for='color' class='pl-5 parpadea'>Semana de Solicitud de Alta (Por Asignar)</label>
                                <select name='id_semSolAlta' id='id_semSolAlta' class='form-control' data-toggle='tooltip' data-placement='bottom' title='Selecciona una Semana de la lista' style='width: 100%;' required>
                                    <option selected disabled>Selecciona</option>";

                                    while ($rowSemanas = $resultSemanas->fetch_assoc()) {
                                    $id_semSolAlta = $rowSemanas['id_semSolAlta'];
                                    $semana = $rowSemanas['semana'];
                                    $output .= " <option value=$id_semSolAlta> $semana </option>";
                                    }
                                    $output .= "
                                </select>
                            </div>
                        </div>
                        <div class='col-md-12 col-sm-12 my-1'>
                            <div class='form-group-input' style='border: 1px solid #CED4DA;'>
                                <label class='ml-5 mb-2 parpadea'>¿Motivo del Cambio?</label>
                                <span data-toggle='tooltip' title='max. 200 caracteres'>
                                    <div class='input-group'>
                                        <div class='input-group-prepend'>
                                            <span class='input-group-text'><i class='fa-solid fa-comment'></i></span>
                                        </div>
                                        <textarea name='motivo' id='motivo' class='form-control' rows='2' placeholder='Agrega alguna breve Descripción del motivo del cambio' maxlength='200'> </textarea>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class='col-12'>
                    <hr>
                </div>
                <div class='col-md-5 col-sm-12 my-1'>
                    <label class='ml-5 mb-2'>Fecha<small> *Llenado en automatico</small></label>
                    <div class='input-group'>
                        <div class='input-group-prepend'>
                            <span class='input-group-text'> <i class='fa fa-calendar' aria-hidden='true'></i></span>
                        </div>
                        <input type='text' class='form-control' data-toggle='tooltip' data-placement='bottom' title='Campo en automatico' value='{$dateFront}' disabled readonly>
                    </div>
                </div>
                <div class='col-md-5 col-sm-12 my-1'>
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
                    <buttom type='button' id='btnNuevoSolCamSemanaSolAltas' class='btn btn-secondary btn-block btnNuevoUsuario' data-toggle='tooltip' data-placement='bottom' title='Guardar '><i class='fas fa-pen'></i>Guardar</buttom>
                </div>
                <div class='col-md-2 col-sm-12 align-self-center'>
                    <a href='javascript:history.go(-1)' class='btn btn-secondary btn-block' data-toggle='tooltip' data-placement='bottom' title='Regresar página anterior'><i class='fa-solid fa-arrow-left'></i>
                        Regresar</a>
                </div>

                <a href='javascript:location.reload()' class='btn btn-secondary btn-inline' data-toggle='tooltip' data-placement='bottom' title='Actualizar página'><i class='fa-solid fa-arrows-rotate'></i></a>
                <br>
                <div class='col-md-12 col-sm-12 align-self-center mt-2'>
                    <div id='respuestaSolCamSemanaSolAltas'></div>
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
        $('#btnNuevoSolCamSemanaSolAltas').click(function() {
            $.ajax({
                    url: 'addNuevaSolCamSemanaSolAltas.php',
                    type: 'POST',
                    data: $('#formNuevoSolCamSemanaSolAltas').serialize(),

                })
                .done(function(res) {
                    $('#respuestaSolCamSemanaSolAltas').html(res)
                })
        });
    });
    //Ocultar boton por 5 minutos para evitar el doble submit
    $("#btnNuevoSolCamSemanaSolAltas").on('click', function() {
        $("#btnNuevoSolCamSemanaSolAltas").css('visibility', 'hidden');
        setTimeout(function() {
            $("#btnNuevoSolCamSemanaSolAltas").css('visibility', 'visible');
        }, 180000);
    });

    $(document).ready(function() {
        $("#currency1").inputmask({
            alias: "currency",
            prefix: ''
        });
        $("#currency2").inputmask({
            alias: "currency",
            prefix: '₱ '
        });
        $("#currency3").inputmask({
            alias: "pesos"
        });
    });

    //  iniciar inputMask 
    $(document).ready(function() {
        $(":input").inputmask();
        $('#semana').mask("9999-59");
    });
</script>