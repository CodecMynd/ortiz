<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<div class="modal fade regCompraInicial" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    Registro de Compra Inicial de Número de Proyecto: <strong><span id="tituloModal3"></span></strong>
                </h5>
            </div>
            <form id="formNuevoRegCompraInicial">
                <div class="modal-body">
                    <div class='row justify-content-center'>
                        <div class="col-12 text-center">
                            Número de Folio: <strong><span id="folio_solicitudText"></span></strong>
                            <hr>
                        </div>
                        <input type="hidden" name="id_proyecto3" id="id_proyecto3" value="">
                        <input type="hidden" name="id_solPzsDanadas3" id="id_solPzsDanadas3" value="">
                        <input type="hidden" name="folio_solicitud3" id="folio_solicitud3" value="">


                        <?php
                        $query = "SELECT id_proveedor, nomProvee FROM proveedores WHERE borrado = 0 ORDER BY nomProvee DESC";
                        $resultado = mysqli_query($conexion, $query) or die(mysqli_error($conexion));

                        ?>
                        <div class='col-md-4 col-sm-12 mb-2 form-group'>
                            <div class='input-group'>
                                <label for='color' class='pl-5 '>*Proveedor</label>
                                <select name='id_proveedor' id='id_proveedor' class='form-control' data-toggle='tooltip' data-placement='bottom' title='Selecciona un Proveedor de la lista' style='width: 100%;' required>
                                    <option selected disabled>Selecciona una Opción</option>";
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
                                <input name='precio' id='precio' type='number' class='form-control' placeholder='Ingresa Valor Precio' required maxlength='12' data-toggle='tooltip' data-placement='bottom' title='Ingresa Valor Venta Alta' autofocus>
                                <label for='floatingInput' class='pl-5'>*Precio</label>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="input-group">
                                <label for='color' class='pl-5 '>*Modalidad de Pago</label>
                                <div class="input-group"></div>
                                <span data-toggle="tooltip" title="Estado">
                                    <select name="modalidadPago" id="modalidadPago" class="form-control" style="width: 100%;">
                                        <option selected disabled>Seleccione una opción</option>
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
                    <button type="button" id="btnNuevoRegCompraInicial" class="btn btn-secondary"><i class="fa-solid fa-pencil"></i> Guardar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Salir</button>
                </div>
            </form>
            <div class="row justify-content-center">
                <div class="col-10">
                    <div id="respuestaRegCompraInicial"></div>
                </div>
            </div>
            <div class="pie">
                <h5>4.1.6 Registro de Compra Inicial</h5>
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
</script>

