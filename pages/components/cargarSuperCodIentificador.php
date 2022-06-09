<?php
require 'head-main.php';
conectar();

$id_proyecto = $_POST['idProyecto'];

// Query principal
$query = 'SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.tipoReparacion, P.km, P.valorVenta, P.diagnostico, P.descripServ1, P.descripServ2, 
V.placa, M.marca, Mo.modelo, A.anio, Co.color, 
R.folioRegSolicitud, R.valorVentaAlta, R.inspecCalidad, R.observCliente, R.descripcionFinal,
S.semana, RA.observAudiFinal, RA.folioRegAlta, LV.link, RI.id_regcodidenti, RI.folioCodID, SC.semanaCobro,
D.valCobProyBase, D.codIdProyBase, D.valCobProyExtra, D.codIdProyExtra, D.valCobComBan, D.codIdComBan, D.valCobPen, D.codIdPension, D.valCobOtros, D.codIdOtros,
FB.formaPago AS formaProyBase, FE.formaPago AS formaExtra, FC.formaPago AS formaComision, FP.formaPago AS formaPension, FO.formaPago AS formaOtros
FROM proyectos P 
INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
INNER JOIN marcas M ON V.id_marca = M.id_marca 
INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo 
INNER JOIN anios A ON V.id_anio = A.id_anio 
INNER JOIN colores Co ON V.id_color = Co.id_color 
INNER JOIN registrosolicitud R ON P.id_proyecto = R.id_proyecto 
INNER JOIN registroalta RA ON P.id_proyecto = RA.id_proyecto
INNER JOIN linkvideos LV ON RA.id_link = LV.id_linkVideo
INNER JOIN semanas S ON R.id_semana = S.id_semana 
INNER JOIN registrocodidenti RI ON P.id_proyecto = RI.id_proyecto
INNER JOIN semanascobro SC ON RI.id_semanaCobro = SC.id_SemanaCobro
INNER JOIN desglocecodid D ON P.id_proyecto = D.id_proyecto
INNER JOIN formapagos FB ON D.id_pagoProyBase = FB.id_formaPago
INNER JOIN formapagos FE ON D.id_pagoProyExtra = FE.id_formaPago
INNER JOIN formapagos FC ON D.id_pagoComBan = FC.id_formaPago
INNER JOIN formapagos FP ON D.id_pagoPension = FP.id_formaPago
INNER JOIN formapagos FO ON D.id_pagoOtros = FO.id_formaPago
WHERE P.id_proyecto = ' . $id_proyecto . ' AND P.proyCodIdentificador = 1  ORDER BY nProyecto ASC';
$respuesta = mysqli_query($conexion, $query);
$row  = $respuesta->fetch_assoc();

// Query semanas proyCodIdentificador
$queryS = "SELECT id_semana, semana FROM semanas  ORDER BY semana ASC";
$resultSemanas = mysqli_query($conexion, $queryS) or die(mysqli_error($conexion));

// Query Registro de folio Supervision
 $queryP = 'SELECT MAX(id_supervisado) + 1 FROM supervisadobitacora';
 $result = mysqli_query($conexion,  $queryP);
 $rowA = mysqli_fetch_row($result);

// Prefijo folio
$text = "Supervisión-00";
$folioSupervision = $text . '' . $rowA[0];


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
$id_regcodidenti = $row['id_regcodidenti'];
$semanaCobro = $row['semanaCobro'];
$folioCodID = $row['folioCodID'];
$folioRegAlta = $row['folioRegAlta'];

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
                    <input name='id_regcodidenti' id='id_regcodidenti' type='hidden' value='{$id_regcodidenti}'>
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
                    <input name='folioSupervision' id='folioSupervision' type='text' class='form-control' placeholder='Número de proyecto '  maxlength='15' data-toggle='tooltip' data-placement='bottom' title='Número de  Folio' value='{$folioSupervision}' readonly>
                    <label for='floatingInput' class='pl-5'>*Núm. de Folio Supervisión</label>
                </div>
            </div>
            <div class='col-md-3 col-sm-12 my-1'>
                <div class='input-group form-floating mb-3'>
                    <div class='input-group-prepend'>
                        <span class='input-group-text'><i class='fa-solid fa-arrow-down-1-9'></i></span>
                    </div>
                    <input name='folioRegAlta' id='folioRegAlta' type='text' class='form-control' placeholder='Número de proyecto '  maxlength='15' data-toggle='tooltip' data-placement='bottom' title='Número de  Folio' value='{$folioCodID}' readonly>
                    <label for='floatingInput' class='pl-5'>*Núm. de Folio Código ID</label>
                </div>
            </div>
            <div class='col-md-3 col-sm-12 my-1'>
                <div class='input-group form-floating mb-3'>
                    <div class='input-group-prepend'>
                        <span class='input-group-text'><i class='fa-solid fa-arrow-down-1-9'></i></span>
                    </div>
                    <input name='folioRegAlta' id='folioRegAlta' type='text' class='form-control' placeholder='Número de proyecto '  maxlength='15' data-toggle='tooltip' data-placement='bottom' title='Número de  Folio' value='{$folioRegAlta}' readonly>
                    <label for='floatingInput' class='pl-5'>*Núm. de Folio Alta</label>
                </div>
            </div>
            <div class='col-md-3 col-sm-12 my-1'>
                <div class='input-group form-floating mb-3'>
                    <div class='input-group-prepend'>
                        <span class='input-group-text'><i class='fa-solid fa-arrow-down-1-9'></i></span>
                    </div>
                    <input name='folioRegSolicitud' id='folioRegSolicitud' type='text' class='form-control' placeholder='Número de proyecto '  maxlength='15' data-toggle='tooltip' data-placement='bottom'     title='Número de Folio' value='{$folioRegSolicitud}' readonly>
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
                    <input name='nOrden' id='nOrden' type='number' class='form-control' placeholder='Número de orden' maxlength='15' data-toggle='tooltip' data-placement='bottom' title='Número de orden' value='{$nOrden}'    readonly>
                    <label for='floatingInput' class='pl-5'>*Núm. de Orden</label>
                </div>
            </div>
            <div class='col-md-2 col-sm-12 my-1'>
                <div class='input-group form-floating mb-3'>
                    <div class='input-group-prepend'>
                        <span class='input-group-text'><i class='fa-solid fa-gauge-high'></i></span>
                    </div>
                    <input name='km' id='km' type='text' class='form-control' placeholder='Kilometraje'  maxlength='12' data-toggle='tooltip' data-placement='bottom' title='Redondea Kilometraje actual'   data-inputmask='' alias': 'numeric' , 'groupSeparator' : ',' , 'autoGroup' : true, 'digits' : 0, 'digitsOptional' : false, 'suffix' : ' km' , 'placeholder' : '0'' value=' {$km}' readonly>
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
                    <input name='valorVenta' id='valorVenta' type='text' class='form-control' placeholder='Valor Venta Inicial'  maxlength='12' data-toggle='tooltip' data-placement='bottom' title='Ingresa Valor  Venta Inicial' value='{$valorVenta}' readonly>
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
                    <input name='valorVentaAlta' id='valorVentaAlta' type='text' class='form-control' placeholder='Ingresa Valor Venta Alta'  maxlength='12' data-toggle='tooltip' data-placement='bottom'  title='Ingresa Valor Venta Alta' value='{$valorVentaAlta}' readonly>
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
                    <input name='id_semana' id='id_semana' type='text' class='form-control' placeholder='Ingresa semana'  data-toggle='tooltip' data-placement='bottom' title='Ingresa Semana' value='{$semana}'    readonly>
                    <label for='floatingInput' class='pl-5'>*Semana Alta</label>
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
                            <label class='ml-5 mb-2'>*Descripción Final de Servicio Realizado al Vehículo</label>
                            <span data-toggle='tooltip' title='max. 300 caracteres'>
                                <div class='input-group'>
                                    <div class='input-group-prepend'>
                                        <span class='input-group-text'><i class='fa-solid fa-comment'></i></span>
                                    </div>
                                    <textarea name='descripcionFinal' id='descripcionFinal' class='form-control' rows='5' placeholder='Agrega Descripción Final de (los) Servicio(s) Realizado(s) al Vehículo'  maxlength='300' readonly>{$descripcionFinal}</textarea>
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
                    <input name='link' id='link' type='text' class='form-control' placeholder='Ingresa Valor Venta Alta' data-toggle='tooltip' data-placement='bottom' title='Ingresa Link de Video en Vivo' value='{$link}'readonly>
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
            <div class='col-md-12 col-sm-12 my-1'>
                <div class='row justify-content-center'>
                    <div class='col-md-3 col-sm-12 my-1'>
                        <div class='input-group form-floating mb-3'>
                            <div class='input-group-prepend'>
                                <span class='input-group-text  mt-2'>
                                <i class='fa fa-calendar' aria-hidden='true'></i>
                                </span>
                            </div>
                            <input name='valorCobro' id='currency1' type='text' class='form-control' placeholder='Ingresa Cobro' data-toggle='tooltip' data-placement='bottom'  title='Semana Cobro' value='{$semanaCobro}' readonly>
                            <label for='floatingInput' class='pl-5'>*Semana de Cobro</label>
                        </div>
                    </div> 
                </div>
            </div>
            <div class='col-md-12 col-sm-12 my-2 py-1' style='border: 2px solid #CED4DA;'>
            <div class='row justify-content-center'>
                <div class='col-md-3 col-sm-12 my-1'>
                    <div class='input-group form-floating mb-3'>
                        <div class='input-group-prepend'>
                            <span class='input-group-text'>
                                <i class='fa-solid fa-money-bill-1-wave '></i>
                            </span>
                        </div>
                        <input name='valCobProyBase' id='currency1' type='text' class='form-control' placeholder='Ingresa Cobro' data-toggle='tooltip' data-placement='bottom' title='Valor Cobro Proyecto Base' value='{$row['valCobProyBase']}' readonly>
                        <label for='floatingInput' class='pl-5'>*Valor Cobro Proyecto Base</label>
                    </div>
                </div>
                <div class='col-md-6 col-sm-12 my-1'>
                    <div class='input-group form-floating mb-3'>
                        <div class='input-group-prepend'>
                            <span class='input-group-text '><i class='fa-solid fa-arrow-down-1-9'></i></span>
                        </div>
                        <input name='codIdProyBase' id='codIdProyBase' type='text' class='form-control' placeholder='Ingresa el Código Identificador '   data-toggle='tooltip' data-placement='bottom' title='Código Identificador Valor Cobro Proyecto Base' value='{$row['codIdProyBase']}' readonly>
                        <label for='floatingInput' class='pl-5'>*Código Identificador Valor Cobro Proyecto Base</label>
                    </div>
                </div>
                <div class='col-md-3 col-sm-12 my-1'>
                    <div class='input-group form-floating mb-3'>
                        <div class='input-group-prepend'>
                            <span class='input-group-text'>
                                <i class='fa-solid fa-hand-holding-dollar'></i>
                            </span>
                        </div>
                        <input name='valCobProyBase' id='currency1' type='text' class='form-control' placeholder='Forma de Pago Proyecto'  data-toggle='tooltip' data-placement='bottom'  title='Forma de Pago Proyecto Base' value='{$row['formaProyBase']}' readonly>
                        <label for='floatingInput' class='pl-5'>Forma Pago Proyecto Base</label>
                    </div>
                </div>
            </div>
        </div>

        <div class='col-md-12 col-sm-12 my-2 py-1' style='border: 2px solid #CED4DA;'>
            <div class='row justify-content-center'>
                <div class='col-md-3 col-sm-12 my-1'>
                    <div class='input-group form-floating mb-3'>
                        <div class='input-group-prepend'>
                            <span class='input-group-text  mt-2'>
                                <i class='fa-solid fa-money-bill-1-wave '></i>
                            </span>
                        </div>
                        <input name='valCobProyExtra' id='currency2' type='text' class='form-control' placeholder='Ingresa Cobro' data-toggle='tooltip' data-placement='bottom' title='Valor Cobro Proyecto Extra' value='{$row['valCobProyExtra']}' readonly>
                        <label for='floatingInput' class='pl-5'>Valor Cobro Proyecto Extra</label>
                    </div>
                </div>
                <div class='col-md-6 col-sm-12 my-1'>
                    <div class='input-group form-floating mb-3'>
                        <div class='input-group-prepend'>
                            <span class='input-group-text '><i class='fa-solid fa-arrow-down-1-9'></i></span>
                        </div>
                        <input name='codIdProyExtra' id='codIdProyExtra' type='text' class='form-control' placeholder='Ingresa el Código Identificador '  data-toggle='tooltip' data-placement='bottom' title='Código Identificador Proyecto Extra' value='{$row['codIdProyExtra']}'readonly>
                        <label for='floatingInput' class='pl-5'>Código Identificador Proyecto Extra</label>
                    </div>
                </div>
                <div class='col-md-3 col-sm-12 my-1'>
                    <div class='input-group form-floating mb-3'>
                        <div class='input-group-prepend'>
                            <span class='input-group-text'>
                                <i class='fa-solid fa-hand-holding-dollar'></i>
                            </span>
                        </div>
                        <input name='valCobProyBase' id='currency1' type='text' class='form-control' placeholder='Forma de Pago Proyecto'  data-toggle='tooltip' data-placement='bottom'  title='Forma de Pago Proyecto Extra' value='{$row['formaExtra']}' readonly>
                        <label for='floatingInput' class='pl-5'>Forma Pago Proyecto Extra</label>
                    </div>
                </div>
            </div>
        </div>

        <div class='col-md-12 col-sm-12 my-2 py-1' style='border: 2px solid #CED4DA;'>
            <div class='row justify-content-center'>
                <div class='col-md-3 col-sm-12 my-1'>
                    <div class='input-group form-floating mb-3'>
                        <div class='input-group-prepend'>
                            <span class='input-group-text  mt-2'>
                                <i class='fa-solid fa-money-bill-1-wave '></i>
                            </span>
                        </div>
                        <input name='valCobComBan' id='currency3' type='text' class='form-control' placeholder='Ingresa Cobro'  data-toggle='tooltip' data-placement='bottom' title='Valor Cobro Comisión Bancaria' value='{$row['valCobComBan']}' readonly>
                        <label for='floatingInput' class='pl-5'>Valor Cobro Comisión Bancaria</label>
                    </div>
                </div>
                <div class='col-md-6 col-sm-12 my-1'>
                    <div class='input-group form-floating mb-3'>
                        <div class='input-group-prepend'>
                            <span class='input-group-text '><i class='fa-solid fa-arrow-down-1-9'></i></span>
                        </div>
                        <input name='codIdComBan' id='codIdComBan' type='text' class='form-control' placeholder='Ingresa el Código Identificador ' data-toggle='tooltip' data-placement='bottom' title='Código Identificador Comisión Bancaria' value='{$row['codIdComBan']}' readonly>
                        <label for='floatingInput' class='pl-5'>Código Identificador Comisión Bancaria</label>
                    </div>
                </div>
                <div class='col-md-3 col-sm-12 my-1'>
                    <div class='input-group form-floating mb-3'>
                        <div class='input-group-prepend'>
                            <span class='input-group-text'>
                                <i class='fa-solid fa-hand-holding-dollar'></i>
                            </span>
                        </div>
                        <input name='valCobProyBase' id='currency1' type='text' class='form-control' placeholder='Forma de Pago Proyecto'  data-toggle='tooltip' data-placement='bottom'  title='Forma de Pago Comisión Bancaria' value='{$row['formaComision']}' readonly>
                        <label for='floatingInput' class='pl-5'>Forma Pago Comisión Bancaria</label>
                    </div>
                </div>
            </div>
        </div>

        <div class='col-md-12 col-sm-12 my-2 py-1' style='border: 2px solid #CED4DA;'>
            <div class='row justify-content-center'>
                <div class='col-md-3 col-sm-12 my-1'>
                    <div class='input-group form-floating mb-3'>
                        <div class='input-group-prepend'>
                            <span class='input-group-text  mt-2'>
                                <i class='fa-solid fa-money-bill-1-wave '></i>
                            </span>
                        </div>
                        <input name='valCobPen' id='currency4' type='text' class='form-control' placeholder='Ingresa Cobro' data-toggle='tooltip' data-placement='bottom' title='Valor Cobro Pensión' value='{$row['valCobPen']}' readonly>
                        <label for='floatingInput' class='pl-5'>Valor Cobro Pensión</label>
                    </div> 
                </div>
                <div class='col-md-6 col-sm-12 my-1'>
                    <div class='input-group form-floating mb-3'>
                        <div class='input-group-prepend'>
                            <span class='input-group-text '><i class='fa-solid fa-arrow-down-1-9'></i></span>
                        </div>
                        <input name='codIdPension' id='codIdPension' type='text' class='form-control' placeholder='Ingresa el Código Identificador ' data-toggle='tooltip' data-placement='bottom' title='Código Identificador Pensión' value='{$row['codIdPension']}' readonly>
                        <label for='floatingInput' class='pl-5'>Código Identificador Pensión</label>
                    </div>
                </div>
                <div class='col-md-3 col-sm-12 my-'>
                    <div class='input-group form-floating mb-3'>
                        <div class='input-group-prepend'>
                            <span class='input-group-text'>
                                <i class='fa-solid fa-hand-holding-dollar'></i>
                            </span>
                        </div>
                        <input name='valCobProyBase' id='currency1' type='text' class='form-control' placeholder='Forma de Pago Proyecto'  data-toggle='tooltip' data-placement='bottom'  title='Forma Pago Pensión' value='{$row['formaComision']}' readonly>
                        <label for='floatingInput' class='pl-5'>Forma Pago Pensión</label>
                    </div>
                </div>
            </div>
        </div>

        <div class='col-md-12 col-sm-12 my-2 py-1' style='border: 2px solid #CED4DA;'>
            <div class='row justify-content-center'>
                <div class='col-md-3 col-sm-12 my-1'>
                    <div class='input-group form-floating mb-3'>
                        <div class='input-group-prepend'>
                            <span class='input-group-text  mt-2'>
                                <i class='fa-solid fa-money-bill-1-wave '></i>
                            </span>
                        </div>
                        <input name='valCobOtros' id='currency5' type='text' class='form-control' placeholder='Ingresa Cobro' data-toggle='tooltip' data-placement='bottom' title='Valor Cobro Otros' value='{$row['valCobOtros']}' readonly>
                        <label for='floatingInput' class='pl-5'>Valor Cobro Otros</label>
                    </div>
                </div>
                <div class='col-md-6 col-sm-12 my-1'>
                    <div class='input-group form-floating mb-3'>
                        <div class='input-group-prepend'>
                            <span class='input-group-text '><i class='fa-solid fa-arrow-down-1-9'></i></span>
                        </div>
                        <input name='codIdOtros' id='codIdOtros' type='text' class='form-control' placeholder='Ingresa el Código Identificador ' data-toggle='tooltip' data-placement='bottom' title='Código Identificador Otros' value='{$row['codIdOtros']}' readonly>
                        <label for='floatingInput' class='pl-5'>Código Identificador Otros</label>
                    </div>
                </div>
                <div class='col-md-3 col-sm-12 '>
                    <div class='input-group form-floating mb-3'>
                        <div class='input-group-prepend'>
                            <span class='input-group-text'>
                                <i class='fa-solid fa-hand-holding-dollar'></i>
                            </span>
                        </div>
                        <input name='valCobProyBase' id='currency1' type='text' class='form-control' placeholder='Forma de Pago Proyecto'  data-toggle='tooltip' data-placement='bottom'  title='Forma de Pago Otros' value='{$row['formaOtros']}' readonly>
                        <label for='floatingInput' class='pl-5'>Forma Pago Otros</label>
                    </div>
                </div>
            </div>
        </div>
        <div class='col-md-10 col-sm-12 my-1'>
            <div class='input-group form-floating mb-3'>
                <div class='input-group-prepend'>
                    <span class='input-group-text mt-2 parpadea'>
                        <i class='fa-solid fa-clipboard-check'></i>
                    </span>
                </div>
                <input name='compCodId' id='compCodId' type='text' class='form-control' placeholder='Ingresa Valor Venta Alta' data-toggle='tooltip' data-placement='bottom' title='Max. 50 caracteres'>
                <label for='floatingInput' class='pl-5'>*Comprobación Código Identificador</label>
            </div>
        </div>
            <div class='col-12'>
                <hr>
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
                    <buttom type='submit' id='btnNuevoSuperCodIdentificador' class='btn btn-secondary btn-block btnNuevoUsuario' data-toggle='tooltip' data-placement='bottom' title='Guardar '><i class='fas fa-pen'></i>
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
        $('#btnNuevoSuperCodIdentificador').click(function() {
            $.ajax({
                    url: 'addNuevoSuperCodIdentificador.php',
                    type: 'POST',
                    data: $('#formNuevoSuperCodIdentificador').serialize(),

                })
                .done(function(res) {
                    $('#respuestaRegAltaProyecto').html(res)
                })
        });
    });
    //Ocultar boton por 5 minutos para evitar el doble submit
    $("#btnNuevoSuperCodIdentificador").on('click', function() {
        $("#btnNuevoSuperCodIdentificador").css('visibility', 'hidden');
        setTimeout(function() {
            $("#btnNuevoSuperCodIdentificador").css('visibility', 'visible');
        }, 180000);
    });

    // $(document).ready(function() {
    //     $("#currency1").inputmask({
    //         alias: "currency",
    //         prefix: ''
    //     });
    //     $("#currency2").inputmask({
    //         alias: "currency",
    //         prefix: '₱ '
    //     });
    //     $("#currency3").inputmask({
    //         alias: "pesos"
    //     });
    // });
</script>