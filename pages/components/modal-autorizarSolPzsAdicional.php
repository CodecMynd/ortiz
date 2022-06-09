<?php
require '../components/queryDomPdf.php';
require '../components/fechaEs.php';
?>
<!-- Modal  style="max-width: 1250px!important;"  -->
<div class="modal fade autorizarSolPzsAdicional" id="modal-autorizarSolPzsAdicional" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">4.2.7 Autorizar Piezas Adicional</h5>
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Salir</button>
            </div>
            <!-- consulta sql -->
            <div class="modal-body">
                <h5 class="text-center"><strong> Consulta: Autorización de Solicitud de Pieza Adicional</strong></h5>
                <?php
                $id_proyecto = $_REQUEST['id_proyecto'];
                $id_regSolpzadicional = $_REQUEST['id_regSolpzadicional'];

                $query = "SELECT R.folioPzAdicional, R.cantidad, R.motivo, R.descripcionpzadicional, 
                R.precio, R.modalidadPago, R.verificado, R.estatusAprobado,
                P.nomProvee, A.asesor, T.tecArmador,
                U.nombres, U.aPaterno, U.aMaterno,
                C.fecha_creacion
                FROM registrosolicitudpzsadicionales R
                INNER JOIN proveedores P ON R.id_proveedor = P.id_proveedor
                LEFT JOIN asesores A ON R.id_asesor = A.id_asesor
                LEFT JOIN tecarmadores T ON R.id_tecArmador = T.id_tecArmador
                INNER JOIN usuarios U ON R.id_capC = U.id_usuario
                INNER JOIN cotizandopzsadic C ON R.id_cotizandoPzsAdic
                WHERE id_regSolpzadicional =$id_regSolpzadicional";
                $respuesta = mysqli_query($conexion, $query);
                $row = $respuesta->fetch_assoc();
                $solicitante = $row['nombres'].' '.$row['aPaterno'].' '.$row['aMaterno'];
                $estatusAprobado = $row['estatusAprobado'];

                ?>
                <form id="formAutoPzsAdicional" autocomplete="off">
                    <input type="hidden" name="id_regSolpzadicional" id="id_regSolpzadicional" value="<?php echo $id_regSolpzadicional?>">
                    <input type="hidden" name="id_proyecto" id="id_proyecto" value="<?php echo $id_proyecto?>">
                    <div class="card-body">
                        <div class="row justify-content-center">
                        <div class="col-md-3 col-sm-12 my-1">
                                <label class="ml-5 mb-2">Número de Folio</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa-solid fa-hashtag"></i></span>
                                    </div>
                                    <input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Campo en automatico" value="<?php echo $row['folioPzAdicional'] ?>" readonly>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 my-1">
                                <label class="ml-5 mb-2">Cantidad Solicitada</small></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa-solid fa-hashtag"></i></span>
                                    </div>
                                    <input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Campo en automatico" value="<?php echo $row['cantidad'] ?>" disabled readonly>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 my-1">
                                <label class="ml-5 mb-2">Precio</small></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa-solid fa-money-bill-1"></i></span>
                                    </div>
                                    <input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Campo en automatico" value="<?php echo $row['precio'] ?>" disabled readonly>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 my-1">
                                <label class="ml-5 mb-2">Metodo de Pago</small></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa-solid fa-hand-holding-dollar"></i></span>
                                    </div>
                                    <input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Campo en automatico" value="<?php echo $row['modalidadPago'] ?>" disabled readonly>
                                </div>
                            </div>

                            <div class="col-12">
                                <hr>
                            </div>
                            <div class="col-md-6 col-sm-12 my-1">
                                <label class="ml-5 mb-2">Solicitante Pieza Adicional</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa-solid fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Campo en automatico" value="<?php echo $solicitante ?>" disabled readonly>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 my-1">
                                <label class="ml-5 mb-2">Fecha Solicitud Pieza Adicional</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-calendar" aria-hidden="true"></i></span>
                                    </div>
                                    <input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="<?php echo $row['fecha_creacion'] ?>" value="<?php echo fechaEs($row['fecha_creacion']) ?>" disabled readonly>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <br>
                            </div>
                            <div class='col-md-6 col-sm-12 my-1'>
                                <div class='form-group-input' style='border: 1px solid #CED4DA;'>
                                    <label class='pl-2 mb-2'>Descripción de la Pieza Adicional</label>
                                    <span data-toggle='tooltip' title='max. 200 caracteres'>
                                        <div class='input-group'>
                                            <div class='input-group-prepend'>
                                                <span class='input-group-text'><i class='fa-solid fa-comments'></i></span>
                                            </div>
                                            <textarea name='motivo' id='motivo' class='form-control' rows='4' placeholder='Max. 200 caracteres' disabled readonly><?php echo $row['descripcionpzadicional'] ?></textarea>
                                        </div>
                                    </span>
                                </div>
                            </div>
                            <div class='col-md-6 col-sm-12 my-1'>
                                <div class='form-group-input' style='border: 1px solid #CED4DA;'>
                                    <label class='pl-2 mb-2'>¿Motivo?</label>
                                    <span data-toggle='tooltip' title='max. 200 caracteres'>
                                        <div class='input-group'>
                                            <div class='input-group-prepend'>
                                                <span class='input-group-text'><i class='fa-solid fa-comments'></i></span>
                                            </div>
                                            <textarea name='motivo' id='motivo' class='form-control' rows='4' placeholder='Max. 200 caracteres' disabled readonly><?php echo $row['motivo']?></textarea>
                                        </div>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <button type="button" class="btn btn-permisos">
                                    <div class="info-box">
                                        <span class="info-box-icon bg-secondary"><i class="fa-solid fa-check"></i></span>
                                        <div class="info-box-content">
                                            <?php if ($row['verificado'] == 0) { ?>
                                                <h6><strong>¿Autorizar Cambio?</strong></h4>
                                                    <span class="info-box-text"> <input type="checkbox" name="estatusAprobado" id="estatusAprobado" data-toggle="toggle" data-on="Autorizado" data-off="No Autorizado" data-width="150" data-height="10" data-onstyle="success" data-offstyle="danger" value="1" <?php if ($row['estatusAprobado'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                <?php } else if ($row['verificado'] == 1) {
                                                echo "<h6><strong>Ya fue validado</strong></h4>";
                                                $aviso = ($estatusAprobado == 0) ? 'No fue Aprobado' : 'Aprobado';
                                                echo 'Estatus:' . ' ' . "<h5><strong>$aviso</strong></h5>";
                                            } ?>
                                        </div>
                                    </div>
                                </button>
                            </div>

                            <div class="col-12">
                                <hr>
                            </div>
                            <div class="col-md-6 col-sm-12 my-1">
                                <label class="ml-5 mb-2">Fecha<small> *Llenado en automatico</small></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-calendar" aria-hidden="true"></i></span>
                                    </div>
                                    <input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Campo en automatico" value="<?php echo $dateFront ?>" disabled readonly>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 my-1">
                                <label class="ml-5 mb-2">Capturista editor<small> *El que modifica</small></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-user-pen" aria-hidden="true"></i></span>
                                    </div>
                                    <input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Campo en automatico" value="<?php echo $nomComp ?>" disabled readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer border-footer">
                        <div class="row">
                            <div class="col-md-3 col-sm-12 align-self-center">
                                <buttom type="button" id="btnAutoPzsAdicional" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Guardar "><i class="fas fa-pen"></i> Guardar</buttom>
                            </div>
                            <div class="col-md-3 col-sm-12 align-self-center">
                                <a href="javascript:history.go(-1)" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar página anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                            </div>
                            <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                            <br>
                            <div class="col-md-12 col-sm-12 align-self-center mt-2">
                                <div id="respuestaAutoPzsAdicional"></div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
            <div class="modal-footer text-left">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Salir</button>
            </div>
            <?php
            desconectar();
            ?>
        </div>
    </div>
</div>
<script>
    // 4.2.7 Autorizar Piezas Adicional --------------------------------------------------------------------------------------------------------------------------------------------------

$('#btnAutoPzsAdicional').click(function () {
    var param = $('#formAutoPzsAdicional').serialize();
    $.ajax({
            url: '../update/updateAutoPzsAdicional.php',
            type: 'POST',
            data: param,

            success: function (vs) {
                $('#formAutoPzsAdicional')[0].reset();
                setTimeout(function () {
                    $('.autorizarSolPzsAdicional').modal('hide');
                }, 1000);
                tableSolPzsAdicionales.ajax.reload(null, false)
            }
        })
        .done(function (res) {
            $('#respuestaAutoPzsAdicional').html(res)
        })
});

//Ocultar boton por 3 minutos para evitar el doble submit
$("#btnAutoPzsAdicional").on('click', function () {
    $("#btnAutoPzsAdicional").css('visibility', 'hidden');
    setTimeout(function () {
        $("#btnAutoPzsAdicional").css('visibility', 'visible');
    }, 3000);
});
</script>
