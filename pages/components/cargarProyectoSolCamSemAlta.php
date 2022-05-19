<?php
require 'head-main.php';
conectar();

$id_proyecto = $_POST['idProyecto'];

// Query principal
$query = 'SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.tipoReparacion, P.km, 
P.valorVenta, P.diagnostico, P.descripServ1, P.descripServ2, 
V.placa, M.marca, Mo.modelo, A.anio, C.nombres, C.aPaternoCliente, 
C.aMaternoCliente, Co.color, R.folioRegSolicitud, R.valorVentaAlta, 
R.inspecCalidad, R.observCliente, R.fecha_creacion, S.semana,
RA.id_regAlta, RA.id_link, RA.observAudiFinal, RA.folioRegAlta, LV.link
FROM proyectos P 
INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
INNER JOIN marcas M ON V.id_marca = M.id_marca 
INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo 
INNER JOIN anios A ON V.id_anio = A.id_anio 
INNER JOIN colores Co ON V.id_color = Co.id_color 
INNER JOIN clientes C ON P.id_cliente = C.id_cliente
INNER JOIN registrosolicitud R ON P.id_proyecto = R.id_proyecto 
INNER JOIN registroalta RA ON P.id_proyecto = RA.id_proyecto
INNER JOIN semanas S ON RA.id_semana = S.id_semana
INNER JOIN linkvideos LV ON RA.id_link = LV.id_linkVideo
WHERE P.id_proyecto ='.$id_proyecto.' ';
$respuesta = mysqli_query($conexion, $query);
$row  = $respuesta->fetch_assoc();

// Query semanas
$queryS = "SELECT id_semana , semana, borrado FROM semanas ORDER BY id_semana DESC";
$resultSemanas = mysqli_query($conexion, $queryS) or die(mysqli_error($conexion));


// // Query Registro de folio Alta
// $queryP = 'SELECT MAX(id_regAlta) + 1 FROM registroaltabitacora';
// $result = mysqli_query($conexion,  $queryP);
// $rowA = mysqli_fetch_row($result);

// // Prefijo folio
// $text = "Alta-00";
// $folioAlta = $text . '' . $rowA[0];

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
$fecha_creacion = $row['fecha_creacion'];
$link = $row['link'];
$folioRegAlta = $row['folioRegAlta'];
$id_regAlta = $row['id_regAlta'];
$semana = $row['semana'];
$observAudiFinal = $row['observAudiFinal'];

//Cronometro 
$fecha1 = new DateTime($date);
$fecha2 = new DateTime($fecha_creacion);

$diff = $fecha1->diff($fecha2);

$cronometro = $diff->days." Dia(s), ". $diff->h . ' h. '.$diff->i." m. ".$diff->s . ' s.';

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
            <input name='id_regAlta' id='id_regAlta' type='hidden' value='{$id_regAlta}'>
            <input name='folioRegAlta' id='folioRegAlta' type='hidden' value='{$folioRegAlta}'>
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
                <input name='folioRegAlta' id='folioRegAlta' type='text' class='form-control' placeholder='Número de proyecto ' required maxlength='15' data-toggle='tooltip' data-placement='bottom' title='Número de Folio' value='{$folioRegAlta}' readonly>
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
                <input name='tipoReparacion' id='tipoReparacion' type='text' class='form-control' placeholder='Tipo de reparación a realizar' maxlength='15' data-toggle='tooltip' data-placement='bottom' title='Tipo de reparación' value='{$tipoReparacion}' readonly>
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
                <input name='valorVenta' id='valorVenta' type='text' class='form-control' placeholder='Valor Venta Inicial' required maxlength='12' data-toggle='tooltip' data-placement='bottom' title='Ingresa Valor Venta Inicial' value='{$valorVenta}' readonly>
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
                <input name='valorVentaAlta' id='currency1' type='text' class='form-control' placeholder='Ingresa Valor Venta Alta' required maxlength='12' data-toggle='tooltip' data-placement='bottom' title='Ingresa Valor Venta Alta' value='{$valorVentaAlta}' readonly>
                <label for='floatingInput' class='pl-5'>*Valor Venta Alta</label>
            </div>
        </div>
        <div class='col-md-3 col-sm-12 my-1'>
            <div class='input-group form-floating mb-3'>
                <div class='input-group-prepend'>
                    <span class='input-group-text mt-2'>
                        <i class='fa-solid fa-calendar-day'></i>
                    </span>
                </div>
                <input type='text' class='form-control' placeholder='Ingresa semana' required data-toggle='tooltip' data-placement='bottom' title='Semana de Solicitud de Alta' value='{$semana}' readonly>
                <label for='floatingInput' class='pl-5'>*Semana Solicitud de Alta</label>
            </div>
        </div>
        <div class='col-md-12 col-sm-12 my-1'>
            <div class='row justify-content-center'>
                <div class='col-md-5 col-sm-12 my-1'>
                    <div class='form-group-input' style='border: 1px solid #CED4DA;'>
                        <label class='ml-5 mb-2'>*Observación Inspección de Control de Calidad</label>
                        <span data-toggle='tooltip' title='max. 300 caracteres'>
                            <div class='input-group'>
                                <div class='input-group-prepend'>
                                    <span class='input-group-text'><i class='fa-solid fa-comments'></i></span>
                                </div>
                                <textarea name='inspecCalidad' id='inspecCalidad' class='form-control' rows='4' placeholder='Agrega alguna breve Observación de Inspección de Control Calidad' readonly>{$inspecCalidad}</textarea>
                            </div>
                        </span>
                    </div>
                </div>
                <div class='col-md-5 col-sm-12 my-1'>
                    <div class='form-group-input' style='border: 1px solid #CED4DA;'>
                        <label class='ml-5 mb-2'>*Observaciones Para el Cliente</label>
                        <span data-toggle='tooltip' title='max. 300 caracteres'>
                            <div class='input-group'>
                                <div class='input-group-prepend'>
                                    <span class='input-group-text'><i class='fa-solid fa-comment'></i></span>
                                </div>
                                <textarea name='observCliente' id='observCliente' class='form-control' rows='4' placeholder='Agrega alguna breve Observación para nuestro Cliente' readonly>{$observCliente}</textarea>
                            </div>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class='col-md-10 col-sm-12 my-1'>
            <div class='input-group form-floating mb-3'>
                <div class='input-group-prepend'>
                    <span class='input-group-text parpadea mt-2'>
                        <i class='fa-solid fa-photo-film'></i>
                    </span>
                </div>
                <input name='link' id='link' type='text' class='form-control' placeholder='Ingresa Valor Venta Alta' required data-toggle='tooltip' data-placement='bottom' title='Ingresa Link de Video en Vivo' value='{$row['link']}' readonly>
                <label for='floatingInput' class='pl-5'>*Link de Video en Vivo Alta</label>
            </div>
        </div>
        <div class='col-md-10 col-sm-12 my-1'>
            <div class='form-group-input' style='border: 1px solid #CED4DA;'>
                <label class='ml-5 mb-2'>*Observaciones Prueba de Auditoria Final</label>
                <span data-toggle='tooltip' title='max. 300 caracteres'>
                    <div class='input-group'>
                        <div class='input-group-prepend parpadea'>
                            <span class='input-group-text'><i class='fa-solid fa-comment'></i></span>
                        </div>
                    <textarea name='observAudiFinal' id='observAudiFinal' class='form-control' rows='2' placeholder='Agrega alguna breve Observación por parte de Auditoria Final' maxlength='300' readonly>{$observAudiFinal}</textarea>
                    </div>
                </span>
            </div>
        </div>

        <div class='col-md-12 col-sm-12 my-1' style='border: 1px solid #CED4DA;'>

        <h5 class='text-center text-dark'>Cronometro de respuesta a la Solicitud de Alta de Proyecto</h5>

            <div class='row justify-content-center'>
                <div class='col-md-4 col-sm-12 my-1'>
                    <div class='input-group form-floating mb-3'>
                        <div class='input-group-prepend'>
                            <span class='input-group-text mt-2'>
                                <i class='fa-solid fa-calendar-day'></i>
                            </span>
                        </div>
                        <input name='fecha_creacion' id='fecha_creacion' type='text' class='form-control' placeholder='Valor Venta Inicial' required maxlength='12' data-toggle='tooltip' data-placement='bottom' title='Ingresa Valor Venta Inicial' value='{$fecha_creacion}' readonly>
                        <label for='floatingInput' class='pl-5'>*Fecha Registro de Solicitud Alta Proyecto</label>
                    </div>
                </div>
                <div class='col-md-4 col-sm-12 my-1'>
                    <div class='input-group form-floating mb-3'>
                        <div class='input-group-prepend'>
                            <span class='input-group-text mt-2'>
                                <i class='fa-solid fa-calendar-day'></i>
                            </span>
                        </div>
                        <input name='valorVenta' id='valorVenta' type='text' class='form-control' placeholder='Valor Venta Inicial' required maxlength='12' data-toggle='tooltip' data-placement='bottom' title='Ingresa Valor Venta Inicial' value='{$date}' readonly>
                        <label for='floatingInput' class='pl-5'>*Fecha Actual Registro de Alta Proyecto</label>
                    </div>
                </div>
                <div class='col-md-4 col-sm-12 my-1'>
                    <div class='input-group form-floating mb-3'>
                        <div class='input-group-prepend'>
                            <span class='input-group-text parpadea mt-2'>
                                <i class='fa-solid fa-stopwatch'></i>
                            </span>
                        </div>
                        <input name='valorVenta' id='valorVenta' type='text' class='form-control' placeholder='Valor Venta Inicial' required maxlength='12' data-toggle='tooltip' data-placement='bottom' title='Ingresa Valor Venta Inicial' value='{$cronometro}' readonly>
                        <label for='floatingInput' class='pl-5'>*Tiempo de Respuesta a la Solicitud de Alta</label>
                    </div>
                </div>
            </div>
        </div>

        <div class='col-md-12 col-sm-12 my-2 py-1' style='border: 2px solid #CED4DA;'>
        <div class='row justify-content-center'>
            <div class='col-md-12 col-sm-12 text-center py-3'>
                <h5> <strong> Registro Para Solicitar Cambio Semana de Alta</strong></h5>
            </div>
            <div class='col-md-4 col-sm-12 my-1'>
                <div class='input-group form-floating mb-3'>
                    <div class='input-group-prepend'>
                        <span class='input-group-text mt-2'>
                            <i class='fa-solid fa-calendar-days'></i>
                        </span>
                    </div>
                    <input name='semanaActual' id='semanaActual' type='text' class='form-control' placeholder='Ingresa Valor Venta Alta' required maxlength='12' data-toggle='tooltip' data-placement='bottom' title='Ingresa Valor Venta Alta' autofocus value='{$semana}' readonly>
                    <label for='floatingInput' class='pl-5 parpadea'>Semana de Alta (Actual)</label>
                </div>
            </div>

            <div class='col-md-4 col-sm-12 mb-2 form-group'>
                <div class='input-group'>
                    <label for='color' class='pl-5 parpadea'>Semana de Alta (Por Asignar)</label>
                    <select name='id_semana' id='id_semana' class='form-control' data-toggle='tooltip' data-placement='bottom' title='Selecciona una Semana de la lista' style='width: 100%;' required>
                        <option selected disabled>Selecciona</option>";

                        while ($rowSemanas = $resultSemanas->fetch_assoc()) {
                        $id_semana = $rowSemanas['id_semana'];
                        $semana = $rowSemanas['semana'];
                        $output .= " <option value=$id_semana> $semana </option>";
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
                <buttom type='submit' id='btnNuevoSolCamSemanaAltas' class='btn btn-secondary btn-block btnNuevoUsuario' data-toggle='tooltip' data-placement='bottom' title='Guardar '><i class='fas fa-pen'></i>
                    Guardar</buttom>
            </div>
            <div class='col-md-2 col-sm-12 align-self-center'>
                <a href='javascript:history.go(-1)' class='btn btn-secondary btn-block' data-toggle='tooltip' data-placement='bottom' title='Regresar página anterior'><i class='fa-solid fa-arrow-left'></i>
                    Regresar</a>
            </div>

            <a href='javascript:location.reload()' class='btn btn-secondary btn-inline' data-toggle='tooltip' data-placement='bottom' title='Actualizar página'><i class='fa-solid fa-arrows-rotate'></i></a>
            <br>
            <div class='col-md-12 col-sm-12 align-self-center mt-2'>
                <div id='respuestaSolCamSemanaAltas'></div>
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
        $('#btnNuevoSolCamSemanaAltas').click(function() {
            $.ajax({
                    url: 'addNuevaSolCamSemanaAltas.php',
                    type: 'POST',
                    data: $('#formNuevoSolCamSemanaAltas').serialize(),

                })
                .done(function(res) {
                    $('#respuestaSolCamSemanaAltas').html(res)
                })
        });
    });
    //Ocultar boton por 5 minutos para evitar el doble submit
    $("#btnNuevoSolCamSemanaAltas").on('click', function() {
        $("#btnNuevoSolCamSemanaAltas").css('visibility', 'hidden');
        setTimeout(function() {
            $("#btnNuevoSolCamSemanaAltas").css('visibility', 'visible');
        }, 300000);
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
</script>
