<?php
require 'head-main.php';
conectar();

$id_proyecto = $_POST['idProyecto'];

// Query principal
$query = 'SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.tipoReparacion, P.km, 
P.valorVenta, P.diagnostico, P.descripServ1, P.descripServ2, 
V.placa, M.marca, Mo.modelo, A.anio, C.nombres, C.aPaternoCliente, C.aMaternoCliente, Co.color,
ASE.asesor, TA.tecArmador
FROM proyectos P 
INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
INNER JOIN marcas M ON V.id_marca = M.id_marca 
INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
INNER JOIN anios A ON V.id_anio = A.id_anio 
INNER JOIN colores Co ON V.id_color = Co.id_color 
INNER JOIN clientes C ON P.id_cliente = C.id_cliente 
LEFT JOIN comasesor CA ON P.id_proyecto = CA.id_proyecto
LEFT JOIN asesores ASE ON CA.id_asesor = ASE.id_asesor
LEFT JOIN registrosolicitud RS ON P.id_proyecto = RS.id_proyecto
LEFT JOIN tecarmadores TA ON RS.tecArmador = TA.id_tecArmador
WHERE P.id_proyecto = '.$id_proyecto.' AND P.proyectoActivo = 1 AND P.registroSolicitud = 0 ORDER BY nProyecto ASC';
$respuesta = mysqli_query($conexion, $query);
$row  = $respuesta->fetch_assoc();

// // Query proveedores
$queryP = "SELECT id_proveedor , nomProvee, borrado FROM proveedores WHERE borrado = 0 ORDER BY nomProvee DESC";
$resultProveedor = mysqli_query($conexion, $queryP) or die(mysqli_error($conexion));

// Query semanas
// $queryA = "SELECT id_asesor , asesor, borrado FROM asesores WHERE borrado = 0 ORDER BY asesor DESC";
// $resultAsesor = mysqli_query($conexion, $queryA) or die(mysqli_error($conexion));

// // // Query Tecnico Armador
//  $queryTA = "SELECT id_tecArmador, tecArmador FROM tecarmadores WHERE borrado = 0  ORDER BY id_tecArmador ASC";
//  $resultTecArmador = mysqli_query($conexion, $queryTA) or die(mysqli_error($conexion));


// Query Registro de folio registrosolicitudpzsadicionales
$queryR = 'SELECT MAX(id_regSolpzadicional) + 1 FROM registrosolicitudpzsadicionales';
$result = mysqli_query($conexion,  $queryR);
$rowp = mysqli_fetch_row($result);

// Prefijo folio
$text = "Pieza_Adicional-00";
$folioPzAdicional = $text . '' . $rowp[0];

$asesor = (empty($row['asesor'])) ? 'Sin Asesor' : $row['asesor'];
$tecArmador = (empty($row['tecArmador'])) ? 'Sin Técnico Armador' : $row['tecArmador'];

$marca = $row['marca'];
$modelo = $row['modelo'];
$anio = $row['anio'];
$placa = $row['placa'];
$color = $row['color'];
$nProyecto = $row['nProyecto'];
$nOrden = $row['nOrden'];
$tipoReparacion = $row['tipoReparacion'];
$km = $row['km'];


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
        <div class='card card-secondary card-outline '>
            <div class='card-header'>
                <h3 class='card-title'>Datos del Proyecto (Generales)</h3>
                <div class='card-tools'>
                    <span class='parpadea font-weight-bold'>*Campos obligatorios</span>
                </div>
            </div>
        </div>
        <div class='card-body'>
            <div class='row justify-content-center'>
                <div class='col-md-3 col-sm-12 my-1'>
                    <div class='input-group form-floating mb-3'>
                        <div class='input-group-prepend'>
                            <span class='input-group-text parpadea'><i class='fa-solid fa-arrow-down-1-9'></i></span>
                        </div>
                        <input name='folioPzAdicional' id='folioPzAdicional' type='text' class='form-control' placeholder='Número de proyecto ' required maxlength='15' data-toggle='tooltip' data-placement='bottom' title='Número de Folio' value='{$folioPzAdicional}' readonly>
                        <label for='floatingInput' class='pl-5'>*Folio Solicitud Pieza Adicional</label>
                    </div>
                </div>
                <div class='col-md-2 col-sm-12 form-group'>
                    <div class='input-group form-floating'>
                        <div class='input-group-prepend'>
                            <span class='input-group-text'><i class='fa-solid fa-arrow-down-9-1'></i></span>
                        </div>
                        <input name='nProyecto' id='nProyecto' type='text' class='form-control' value='{$nProyecto}' readonly>
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
                <div class='col-md-4 col-sm-12 my-1'>
                    <div class='input-group form-floating mb-3'>
                        <div class='input-group-prepend'>
                            <span class='input-group-text'><i class='fa-solid fa-user'></i></span>
                        </div>
                        <input name='asesor' id='asesor' type='text' class='form-control' placeholder='Asesor' required maxlength='12' data-toggle='tooltip' data-placement='bottom' title='Asesor' value=' {$asesor}' readonly>
                        <label for='floatingInput' class='pl-5'>Asesor </label>
                    </div>
                </div>
                <div class='col-md-4 col-sm-12 my-1'>
                    <div class='input-group form-floating mb-3'>
                        <div class='input-group-prepend'>
                            <span class='input-group-text'><i class='fa-solid fa-user'></i></span>
                        </div>
                        <input name='tecArmador' id='tecArmador' type='text' class='form-control' placeholder='Kilometraje' required maxlength='12' data-toggle='tooltip' data-placement='bottom' title='Técnico Armador' value=' {$tecArmador}' readonly>
                        <label for='floatingInput' class='pl-5'>Técnico Armador</label>
                    </div>
                </div>

                <div class='col-12'>
                <hr>
                </div>
                <div class='col-md-12 col-sm-12 my-1'>
                    <div class='row justify-content-center'>
                        <div class='col-md-6 col-sm-12 my-1'>
                            <div class='form-group-input' style='border: 1px solid #CED4DA;'>
                                <label class='ml-5 mb-2'>*Motivo de la solicitud de la Pieza Adicional</label>
                                <span data-toggle='tooltip' title='max. 200 caracteres'>
                                    <div class='input-group'>
                                        <div class='input-group-prepend parpadea'>
                                            <span class='input-group-text'><i class='fa-solid fa-comment'></i></span>
                                        </div>
                                        <textarea name='motivo' id='motivo' class='form-control' rows='5' placeholder='Agrega el Motivo de la solicitud de la Pieza Adicional' maxlength='200' required></textarea>
                                    </div>
                                </span>
                            </div>
                        </div>
                        <div class='col-md-6 col-sm-12 my-1'>
                            <div class='form-group-input' style='border: 1px solid #CED4DA;'>
                                <label class='ml-5 mb-2'>*Descripción de la Pieza Adicional</label>
                                <span data-toggle='tooltip' title='max. 200 caracteres'>
                                    <div class='input-group'>
                                        <div class='input-group-prepend parpadea'>
                                            <span class='input-group-text'><i class='fa-solid fa-comment'></i></span>
                                        </div>
                                        <textarea name='descripcionpzadicional' id='descripcionpzadicional' class='form-control' rows='5' placeholder='Agrega Descripción de la Pieza Adicional' maxlength='200' required></textarea>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-md-12 col-sm-12 my-1'>
                    <div class='row justify-content-center'>
                        <div class='col-md-3 col-sm-12 my-1'>
                            <div class='input-group form-floating mb-3'>
                                <div class='input-group-prepend'>
                                    <span class='input-group-text mt-2'>
                                        <i class='fa-solid fa-hashtag parpadea'></i>
                                    </span>
                                </div>
                                <input name='cantidad' id='cantidad' type='number' class='form-control' placeholder='Ingresa Cantidad de Piezas Adicionales' required maxlength='11' data-toggle='tooltip'  data-placement='bottom' title='Ingresa Cantidad de Piezas Adicionales' autofocus>
                                <label for='floatingInput' class='pl-5'>*Cantidad Piezas Adicionales</label>
                            </div>
                        </div>
                        <div class='col-md-3 col-sm-12 my-1'>
                            <div class='input-group form-floating mb-3'>
                                <div class='input-group-prepend'>
                                    <span class='input-group-text mt-2'>
                                        <i class='fa-solid fa-money-bill-1-wave parpadea'></i>
                                    </span>
                                </div>
                                <input name='precio' id='precio' type='number' class='form-control' placeholder='Ingresa Valor Precio' required maxlength='12' data-toggle='tooltip' data-placement='bottom'        title='Ingresa Valor Venta Alta' autofocus>
                                <label for='floatingInput' class='pl-5'>*Precio</label>
                            </div>
                        </div>
                        <div class='col-md-3 col-sm-12 mb-2'>
                            <div class='input-group'>
                                <label for='color' class='parpadea'>*Modalidad de Pago</label>
                                <span data-toggle='tooltip' title='Modalidad de Pago'>
                                    <select name='modalidadPago' id='modalidadPago' class='form-control' style='width: 100%;'>
                                        <option selected disabled>Selecciona</option>
                                        <option disabled>___________________________</option>
                                        <option Value='Crédito'>Crédito</Option>
                                        <option Value='Contado'>Contado</Option>
                                    </select>
                                </span>
                            </div>
                        </div>
                        <div class='col-md-3 col-sm-12 mb-2'>
                            <div class='input-group'>
                                <label for='color' class='parpadea'>Proveedor</label>
                                <select name='id_proveedor' id='id_proveedor' class='form-control' data-toggle='tooltip' data-placement='bottom' title='Selecciona un Proveedor de la lista' style='width: 100%;'   required>
                                    <option selected disabled>Selecciona</option>";

                                    while ($rowP = $resultProveedor->fetch_assoc()) {
                                    $id_proveedor = $rowP['id_proveedor'];
                                    $nomProvee = $rowP['nomProvee'];
                                    $output .= " <option value=$id_proveedor> $nomProvee </option>";
                                    }
                                    $output .= "
                                </select>
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
                    <buttom type='submit' id='btnNuevoRegSolPzsAdicionales' class='btn btn-secondary btn-block btnNuevoUsuario' data-toggle='tooltip' data-placement='bottom' title='Guardar '><i class='fas fa-pen'></i>Guardar</buttom>
                </div>
                <div class='col-md-2 col-sm-12 align-self-center'>
                    <a href='javascript:history.go(-1)' class='btn btn-secondary btn-block' data-toggle='tooltip' data-placement='bottom' title='Regresar página anterior'><i class='fa-solid fa-arrow-left'></i>Regresar</a>
                </div>

                <a href='javascript:location.reload()' class='btn btn-secondary btn-inline' data-toggle='tooltip' data-placement='bottom' title='Actualizar página'><i class='fa-solid fa-arrows-rotate'></i></a>
                <br>
                <div class='col-md-12 col-sm-12 align-self-center mt-2'>
                    <div id='respuestaRegSolPzsAdicionales'></div>
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
        $('#btnNuevoRegSolPzsAdicionales').click(function() {
            $.ajax({
                    url: 'addNuevoRegSolPzsAdicionales.php',
                    type: 'POST',
                    data: $('#formNuevoRegSolPzsAdicionales').serialize(),

                })
                .done(function(res) {
                    $('#respuestaRegSolPzsAdicionales').html(res)
                })
        });
    });
    //Ocultar boton por 5 minutos para evitar el doble submit
    $("#btnNuevoRegSolPzsAdicionales").on('click', function() {
        $("#btnNuevoRegSolPzsAdicionales").css('visibility', 'hidden');
        setTimeout(function() {
            $("#btnNuevoRegSolPzsAdicionales").css('visibility', 'visible');
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
</script>