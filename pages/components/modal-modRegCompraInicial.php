<?php
require '../components/head-main.php';
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<div class="modal fade" id="modal-modRegCompraInicial" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    4.1.6 Modificar Registro de Compra Inicial
                </h5>
            </div>
            <?php
            $id_regCompraInicial = $_REQUEST['id_regCompraInicial'];
            $query = "SELECT R.precio, R.modalidadPago, R.id_solPzsDanadas, P.id_proveedor, P.nomProvee
                FROM regcomprainicial R
                INNER JOIN proveedores P ON R.id_proveedor = P.id_proveedor
                WHERE id_regCompraInicial = '$id_regCompraInicial'";
            $respuesta = mysqli_query($conexion, $query);
            $row1 = $respuesta->fetch_assoc();

            ?>
            <form id="formModRegCompraInicial">
                <input type="hidden" id="id_regCompraInicial" name="id_regCompraInicial" value="<?php echo $id_regCompraInicial ?>">
                <input type="hidden" id="id_solPzsDanadas" name="id_solPzsDanadas" value="<?php echo $row1['id_solPzsDanadas'] ?>">
                <div class="modal-body">
                    <div class='row justify-content-center'>
                        <div class="col-12 text-center">
                            Número de Folio: <strong><span id="folio_solicitud3"></span></strong>
                            <hr>
                        </div>

                        <?php
                        $query = "SELECT id_proveedor, nomProvee FROM proveedores WHERE borrado = 0 ORDER BY nomProvee DESC";
                        $resultado = mysqli_query($conexion, $query) or die(mysqli_error($conexion));

                        ?>
                        <div class='col-md-4 col-sm-12 mb-2 form-group'>
                            <div class='input-group'>
                                <label for='color' class='pl-5 '>*Proveedor</label>
                                <select name='id_proveedor' id='id_proveedor' class='form-control' data-toggle='tooltip' data-placement='bottom' title='Proveedor Seleccionado' style='width: 100%;' required>
                                    <option value="<?php echo $row1['id_proveedor'] ?>"><?php echo $row1['nomProvee'] ?></option>";
                                    <option disabled>___________________________</option>
                                    <?php
                                    while ($row = $resultado->fetch_assoc()) {
                                        $id_proveedor = $row['id_proveedor'];
                                        $nomProvee = $row['nomProvee']; ?>
                                        <option value="<?php echo $id_proveedor ?>"> <?php echo $nomProvee ?> </option>";
                                    <?php   } ?>
                                </select>
                            </div>
                        </div>
                        <div class='col-md-4 col-sm-12 my-1'>
                            <div class='input-group form-floating mb-3'>
                                <div class='input-group-prepend'>
                                    <span class='input-group-text mt-2'>
                                        <i class='fa-solid fa-money-bill-1-wave '></i>
                                    </span>
                                </div>
                                <input name='precio' id='currency1' type='text' class='form-control' placeholder='Precio Ingresado' required maxlength='12' data-toggle='tooltip' data-placement='bottom' title='Precio Ingresado' value="<?php echo $row1['precio'] ?>">
                                <label for='floatingInput' class='pl-5'>*Precio</label>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="input-group">
                                <label for='color' class='pl-5 '>*Modalidad de Pago</label>
                                <div class="input-group"></div>
                                <span data-toggle="tooltip" title="Estado">
                                    <select name="modalidadPago" id="modalidadPago" class="form-control" style="width: 100%;">
                                        <option value="<?php echo $row1['modalidadPago'] ?>"><?php echo $row1['modalidadPago'] ?></option>
                                        <option disabled>___________________________</option>
                                        <option Value="Crédito">Crédito</Option>
                                        <option Value="Contado">Contado</Option>
                                    </select>
                                </span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer text-left">
                    <button type="button" id="btnModRegCompraInicial" class="btn btn-secondary"><i class="fa-solid fa-pencil"></i> Guardar</button>
                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Salir</button> -->
                    <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Salir"><i class="fa-solid fa-circle-xmark"></i> Salir</a>
                </div>
            </form>
            <div class="row justify-content-center">
                <div class="col-10">
                    <div id="respuestaModRegCompraInicial"></div>
                </div>
            </div>
            <div class="pie">
                <h5>4.1.6 Modificar Registro de Compra Inicial</h5>
            </div>
        </div>
    </div>
</div>
<script>

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


    //4.1.6 Modificar Registro de Compra Inicial
    $('#btnModRegCompraInicial').click(function() {
        var param = $('#formModRegCompraInicial').serialize();
        $.ajax({
                url: '../update/updateRegCompraInicial.php',
                cache: false,
                type: 'POST',
                data: param,

                success: function(vs) {
                    // $('#formModRegCompraInicial')[0].reset();
                    $("#table_refresh").load(" #table_refresh");
                    setTimeout(function() {
                        $('#modal-modRegCompraInicial').modal('hide');
                    }, 2000);
                }
            })
            .done(function(res) {
                $('#respuestaModRegCompraInicial').html(res)
            })
    });
    //Ocultar boton por 3 minutos para evitar el doble submit
    $("#btnModRegCompraInicial").on('click', function() {
        $("#btnModRegCompraInicial").css('visibility', 'hidden');
        setTimeout(function() {
            $("#btnModRegCompraInicial").css('visibility', 'visible');
        }, 3000);
    });
</script>