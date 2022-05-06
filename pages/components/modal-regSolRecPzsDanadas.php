
<div class="modal fade regSolRecPzsDanadas" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    Registrar Solicitud de Piezas de Número de Proyecto: <strong><span id="tituloModal"></span></strong>
                </h5>
            </div>
            <form id="formNuevoRegSolRecPzsDanadas">
                <input type="hidden" name="id_proyecto" id="id_proyecto" value="">
                <input type="hidden" name="id_recPzsDanadas" id="id_recPzsDanadas" value="">
                <input type="hidden" name="nProyecto" id="nProyecto" value="">
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <!-- <div class="col-md-3 col-sm-12 my-1">
                            <div class="input-group form-floating mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa-solid fa-file-lines"></i></span>
                                </div>
                                <input name="folio_solicitud" id="folio_solicitud" type="text" class="form-control" placeholder="Folio Solicitud" required maxlength="22" data-toggle="tooltip" data-placement="bottom" value="<?php echo $folio ?>" readonly>
                                <label for="floatingInput" class="pl-5">Numero de Folio</label>
                            </div>
                        </div> -->
                        <div class="col-md-3 col-sm-12 my-1">
                            <div class="input-group form-floating mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa-solid fa-user-group"></i></span>
                                </div>
                                <input name="cantidad" id="cantidad" type="number" class="form-control" placeholder="Cantidad Solicitada" required maxlength="3" data-toggle="tooltip" data-placement="bottom" title="Ingresa la Cantidad a Solicitar">
                                <label for="floatingInput" class="pl-5">Cantidad</label>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12 my-1">
                            <div class="input-group form-floating mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa-solid fa-clock"></i></span>
                                </div>
                                <input name="minVideo" id="minVideo" type="text" class="form-control" placeholder="Folio Solicitud" required maxlength="22" data-toggle="tooltip" data-placement="bottom" title="Hola">
                                <label for="floatingInput" class="pl-5">Minuto del Video</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <hr>
                        </div>
                        <div class='col-md-12 col-sm-12 my-1'>
                            <div class='form-group-input' style='border: 1px solid #CED4DA;'>
                                <label class='pl-2 mb-2'>Descripción de lo solicitado</label>
                                <span data-toggle='tooltip' title='max. 200 caracteres'>
                                    <div class='input-group'>
                                        <div class='input-group-prepend'>
                                            <span class='input-group-text'><i class="fa-solid fa-file-pen"></i></span>
                                        </div>
                                        <textarea name='descripcion' id='descripcion' class='form-control' rows='2' placeholder='Max. 200 caracteres'></textarea>
                                    </div>
                                </span>
                            </div>
                        </div>

                        <div class="col-12">
                            <hr>
                        </div>
                        <div class="col-md-6 col-sm-12 my-1">
                            <label class="ml-5 mb-2">Fecha Solicitud</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-calendar" aria-hidden="true"></i></span>
                                </div>
                                <input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Campo en automatico" value="<?php echo $dateFront ?>" disabled readonly>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 my-1">
                            <label class="ml-5 mb-2">Capturista Solicitante</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-user-pen" aria-hidden="true"></i></span>
                                </div>
                                <input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Campo en automatico" value="<?php echo $nomComp ?>" disabled readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer text-left">
                    <button type="button" id="btnNuevoRegSolRecPzsDanadas" class="btn btn-secondary"><i class="fa-solid fa-pencil"></i> Guardar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Salir</button>
                </div>
            </form>
            <div class="row justify-content-center">
                <div class="col-10">
                    <div id="respuestaRegSolRecPzsDanadas"></div>
                </div>
            </div>
            <div class="pie">
                <h5>4.1.2 Registrar Solicitud de Piezas</h5>
            </div>
        </div>
    </div>
</div>