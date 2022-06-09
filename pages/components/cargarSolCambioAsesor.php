<?php
require 'head-main.php';
conectar();

$id_proyecto = $_POST['idProyecto'];

// Query principal
$query = 'SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.comAsesor, P.estadoProyectoEliminado, P.comSuperAsesor,
C.nombres, C.aPaternoCliente, C.aMaternoCliente,
V.placa, M.marca, Mo.modelo, A.anio, Co.color,Ase.id_asesor, Ase.asesor, CA.id_comAsesor, CS.id_comSupervision
FROM proyectos P 
INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
INNER JOIN colores Co On V.id_color = Co.id_color
INNER JOIN marcas M ON V.id_marca = M.id_marca 
INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
INNER JOIN anios A ON V.id_anio = A.id_anio 
INNER JOIN clientes C on P.id_cliente = C.id_cliente
LEFT JOIN comasesor CA ON P.id_proyecto = CA.id_proyecto
LEFT JOIN asesores Ase ON CA.id_asesor = Ase.id_asesor
LEFT JOIN comsupervision CS ON P.id_proyecto = CS.id_proyecto
WHERE  P.id_proyecto = ' . $id_proyecto . ' ';
$respuesta = mysqli_query($conexion, $query);
$row  = $respuesta->fetch_assoc();

// Query Asesor
$queryA = "SELECT id_asesor, asesor FROM asesores ORDER BY asesor DESC";
$resultAsesor = mysqli_query($conexion, $queryA) or die(mysqli_error($conexion));


// Query Registro de folio Alta
$queryP = 'SELECT MAX(id_cambioAsesor) + 1 FROM cambioasesores';
$result = mysqli_query($conexion,  $queryP);
$rowA = mysqli_fetch_row($result);

 //Prefijo folio
 $text = "Cambio_Asesor-00";
 $folioCambioAsesor = $text . '' . $rowA[0];


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
                            <input name='marca' id='marca' type='text' class='form-control' value='{$row['marca']}' disabled readonly>
                            <label for='floatingInput' class='pl-5'>Marca</label>
                        </div>
                    </div>
                    <div class='col-md-3 col-sm-12 form-group'>
                        <div class='input-group form-floating'>
                            <div class='input-group-prepend'>
                                <span class='input-group-text'><i class='fa-solid fa-car-side'></i></span>
                            </div>
                            <input name='modelo' id='modelo' type='text' class='form-control' value='{$row['modelo']}' disabled readonly>
                            <label for='floatingInput' class='pl-5'>Modelo</label>
                        </div>
                    </div>
                    <div class='col-md-2 col-sm-12 form-group'>
                        <div class='input-group form-floating'>
                            <div class='input-group-prepend'>
                                <span class='input-group-text'><i class='fa-solid fa-calendar'></i></span>
                            </div>
                            <input type='text' id='anio' name='anio' class='form-control' value='{$row['anio']}' disabled readonly>
                            <label for='floatingInput' class='pl-5'>Año</label>
                        </div>
                    </div>
                    <div class='col-md-2 col-sm-12 form-group'>
                        <div class='input-group form-floating '>
                            <div class='input-group-prepend'>
                                <span class='input-group-text'><i class='fa-solid fa-hashtag'></i></span>
                            </div>
                            <input name='placa' id='placa' type='text' class='form-control' value='{$row['placa']}' disabled readonly>
                            <label for='floatingInput' class='pl-5'>Placa </label>
                        </div>
                    </div>
                    <div class='col-md-2 col-sm-12 form-group'>
                        <div class='input-group form-floating'>
                            <div class='input-group-prepend'>
                                <span class='input-group-text'><i class='fa-solid fa-brush'></i></span>
                            </div>
                            <input name='color' id='color' type='text' class='form-control' value='{$row['color']}' disabled readonly>
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
                        <input name='folioCambioAsesor' id='folioCambioAsesor' type='text' class='form-control' placeholder='Número Folio de Cambio de Asesor' required data-toggle='tooltip' data-placement='bottom' title='Número de  Folio Cambio de Asesor' value='{$folioCambioAsesor}' readonly>
                        <label for='floatingInput' class='pl-5'>*Núm. de Folio Cambio Asesor</label>
                    </div>
                </div>
                <div class='col-md-3 col-sm-12 my-1'>
                    <div class='input-group form-floating mb-3'>
                        <div class='input-group-prepend'>
                            <span class='input-group-text'><i class='fa-solid fa-arrow-down-1-9'></i></span>
                        </div>
                        <input name='folioCodID' id='folioCodID' type='text' class='form-control' placeholder='Número de proyecto ' required maxlength='15' data-toggle='tooltip' data-placement='bottom' title='Número de Folio Código Identificador' value='{$row['nProyecto']}' readonly>
                        <label for='floatingInput' class='pl-5'>*Núm. de Proyecto</label>
                    </div>
                </div>
                <div class='col-md-2 col-sm-12 my-1'>
                    <div class='input-group form-floating mb-3'>
                        <div class='input-group-prepend'>
                            <span class='input-group-text'><i class='fa-solid fa-arrow-down-1-9'></i></span>
                        </div>
                        <input name='folioCodID' id='folioCodID' type='text' class='form-control' placeholder='Número de Orden ' required maxlength='15' data-toggle='tooltip' data-placement='bottom' title='Número de Folio Código Identificador' value='{$row['nOrden']}' readonly>
                        <label for='floatingInput' class='pl-5'>*Núm. de Orden</label>
                    </div>
                </div>
                <div class='col-md-4 col-sm-12 my-1'>
                    <div class='input-group form-floating mb-3'>
                        <div class='input-group-prepend'>
                            <span class='input-group-text'><i class='fa-solid fa-arrow-down-1-9'></i></span>
                        </div>
                        <input name='id_asesor' id='id_asesor' type='hidden' value='{$row['id_asesor']}'>
                        <input name='asesorActual' id='asesorActual' type='text' class='form-control' placeholder='Asesor Actual' required data-toggle='tooltip' data-placement='bottom' title='Número de  Folio' value='{$row['asesor']}' readonly>
                        <label for='floatingInput' class='pl-5'>*Asesor Actual</label>
                    </div>
                </div>

                <div class='col-md-10 col-sm-12 my-1'>
                    <div class='form-group-input' style='border: 1px solid #CED4DA;'>
                        <label class='ml-5 mb-2 parpadea'>*Motivo del Cambio</label>
                        <span data-toggle='tooltip' title='max. 200 caracteres'>
                            <div class='input-group'>
                                <div class='input-group-prepend'>
                                    <span class='input-group-text'><i class='fa-solid fa-comment'></i></span>
                                </div>
                                <textarea name='motivo' id='motivo' class='form-control' rows='2' placeholder='Agregar el motivo del cambio de Asesor' required maxlength='200'></textarea>
                            </div>
                        </span>
                    </div>
                </div>
                <br>
                <div class='col-md-12'>
                <hr>
                    <div class='row justify-content-center'>
                        <div class='col-md-4 col-sm-12 my-2'>
                            <div class='input-group'>
                                <label for='color' class='pl-5 parpadea'>*Asesor por Asignar <small>*Ingresa un Asesor Diferente</small></label>
                                <select name='asesorAsignado' id='asesorAsignado' class='form-control' data-toggle='tooltip' data-placement='bottom' title='Selecciona un Asesor de la lista' style='width: 100%;' required>
                                    <option selected disabled>Selecciona</option>";

                                    while ($rowAsesor = $resultAsesor->fetch_assoc()) {
                                        $asesor = $rowAsesor['asesor'];
                                        $id_asesor = $rowAsesor['id_asesor'];
                                        $output .= " <option value={$id_asesor}> $asesor </option>";
                                    }
                                    $output .= "
                                </select>
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
                    <label class='ml-5 mb-2'>Capturista Solicitante</label>
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
                    <buttom type='submit' id='btnNuevoSolCambioAsesor' class='btn btn-secondary btn-block btnNuevoUsuario' data-toggle='tooltip' data-placement='bottom' title='Guardar '><i class='fas fa-pen'></i> Guardar</buttom>
                </div>
                <div class='col-md-2 col-sm-12 align-self-center'>
                    <a href='javascript:history.go(-1)' class='btn btn-secondary btn-block' data-toggle='tooltip' data-placement='bottom' title='Regresar página anterior'><i class='fa-solid fa-arrow-left'></i> Regresar</a>
                </div>
                <a href='javascript:location.reload()' class='btn btn-secondary btn-inline' data-toggle='tooltip' data-placement='bottom' title='Actualizar página'><i class='fa-solid fa-arrows-rotate'></i></a>
                <br>
                <div class='col-md-12 col-sm-12 align-self-center mt-2'>
                    <div id='respuestaSolCambioAsesor'></div>
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
        $('#btnNuevoSolCambioAsesor').click(function() {
            $.ajax({
                    url: 'addNuevaSolCambioAsesor.php',
                    type: 'POST',
                    data: $('#formNuevoSolCambioAsesor').serialize(),

                })
                .done(function(res) {
                    $('#respuestaSolCambioAsesor').html(res)
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
        $("#currency1").inputmask({
            alias: "currency",
            prefix: ''
        });
        $("#currency2").inputmask({
            alias: "currency",
            prefix: ''
        });
        $("#currency3").inputmask({
            alias: "currency",
            prefix: ''
        });
        $("#currency4").inputmask({
            alias: "currency",
            prefix: ''
        });
        $("#currency5").inputmask({
            alias: "currency",
            prefix: ''
        });

    });
</script>