<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<div class="modal fade regSolPzsAdicionales" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    4.2.2 Agregar Solicitud de Piezas Adicionales del Número de Proyecto: <strong><span id="tituloModal1"></span></strong>
                </h5>
            </div>
            <form id="formNuevoRegSolPzsAdicionales">
                <?php
                // // Query proveedores
                $queryP = "SELECT id_proveedor , nomProvee, borrado FROM proveedores WHERE borrado = 0 ORDER BY nomProvee DESC";
                $resultProveedor = mysqli_query($conexion, $queryP) or die(mysqli_error($conexion));


                // Query Registro de folio registrosolicitudpzsadicionales
                $queryR = 'SELECT MAX(id_regSolpzadicional) + 1 FROM registrosolicitudpzsadicionales';
                $result = mysqli_query($conexion,  $queryR);
                $rowp = mysqli_fetch_row($result);

                // Prefijo folio
                $text = "Pieza_Adicional-00";
                $folioPzAdicional = $text . '' . $rowp[0];
                ?>
                <div class="modal-body">
                    <div class='row justify-content-center'>
                        <input type="hidden" name="id_proyecto1" id="id_proyecto1" value="">
                        <input type="hidden" name="nProyecto1" id="nProyecto1" value="">
                        <input type="hidden" name="id_regSolpzadicional1" id="id_regSolpzadicional1" value="">
                        <input type="hidden" name="id_cotizandoPzsAdic1" id="id_cotizandoPzsAdic1" value="">

                        <div class='col-md-4 col-sm-12 my-1'>
                            <div class='input-group form-floating mb-3'>
                                <div class='input-group-prepend'>
                                    <span class='input-group-text parpadea'><i class='fa-solid fa-arrow-down-1-9'></i></span>
                                </div>
                                <input name='folioPzAdicional' id='folioPzAdicional' type='text' class='form-control' placeholder='Número de proyecto ' required maxlength='15' data-toggle='tooltip' data-placement='bottom' title='Número de Folio' value='<?php echo $folioPzAdicional ?>' readonly>
                                <label for='floatingInput' class='pl-5'>*Folio Solicitud Pieza Adicional</label>
                            </div>
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
                                <div class='col-md-4 col-sm-12 my-1'>
                                    <div class='input-group form-floating mb-3'>
                                        <div class='input-group-prepend'>
                                            <span class='input-group-text mt-2'>
                                                <i class='fa-solid fa-hashtag parpadea'></i>
                                            </span>
                                        </div>
                                        <input name='cantidad' id='cantidad' type='number' class='form-control' placeholder='Ingresa Cantidad de Piezas Adicionales' required maxlength='11' data-toggle='tooltip' data-placement='bottom' title='Ingresa Cantidad de Piezas Adicionales' autofocus>
                                        <label for='floatingInput' class='pl-5'>*Cantidad Piezas Adicionales</label>
                                    </div>
                                </div>
                                <div class='col-md-4 col-sm-12 my-1'>
                                    <div class='input-group form-floating mb-3'>
                                        <div class='input-group-prepend'>
                                            <span class='input-group-text mt-2'>
                                                <i class='fa-solid fa-money-bill-1-wave parpadea'></i>
                                            </span>
                                        </div>
                                        <input name='precio' id='precio' type='number' class='form-control' placeholder='Ingresa Valor Precio' required maxlength='12' data-toggle='tooltip' data-placement='bottom' title='Ingresa Valor Venta Alta' autofocus>
                                        <label for='floatingInput' class='pl-5'>*Precio</label>
                                    </div>
                                </div>
                                <div class='col-md-4 col-sm-12 mb-2'>
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
                                <div class='col-md-4 col-sm-12 mb-2'>
                                    <div class='input-group'>
                                        <label for='color' class='parpadea'>Proveedor</label>
                                        <select name='id_proveedor' id='id_proveedor' class='form-control' data-toggle='tooltip' data-placement='bottom' title='Selecciona un Proveedor de la lista' style='width: 100%;' required>
                                            <option selected disabled>Selecciona</option>
                                            <?php
                                            while ($rowP = $resultProveedor->fetch_assoc()) {
                                                $id_proveedor = $rowP['id_proveedor'];
                                                $nomProvee = $rowP['nomProvee'];
                                            ?>
                                                <option value="<?php echo $id_proveedor ?>"> <?php echo $nomProvee ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer text-left">
                    <button type="button" id="btnNuevoRegSolPzsAdicionales" class="btn btn-secondary"><i class="fa-solid fa-pencil"></i> Guardar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Salir</button>
                </div>
            </form>
            <div class="row justify-content-center">
                <div class="col-10">
                    <div id="respuestaRegSolPzsAdicionales"></div>
                </div>
            </div>
            <div class="pie">
                <h5>4.2.2 Agregar Solicitud de Piezas Adicionales</h5>
            </div>
        </div>
    </div>
</div>