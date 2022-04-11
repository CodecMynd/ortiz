<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<div class="modal fade regComPlacas" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" >
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    Registrar Comprobacion de Placa de Número de Proyecto: <span id="tituloModal1"></span>
                </h5>
            </div>
            <form id="formNuevoRegComPlaca" action="../adds/addNuevoRegComPlaca.php" method="POST"> 
                <div class="modal-body">
                    <div class='row justify-content-center'>
                        <input type="hidden" name="id_proyecto" id="id_proyecto" value="">
                        <input type="hidden" name="nProyecto" id="nProyecto" value="">
                        <div class='col-md-10 col-sm-12 my-1'>
                            <div class='input-group form-floating mb-3'>
                                <div class='input-group-prepend'>
                                    <span class='input-group-text mt-2'>
                                        <i class="fa-solid fa-link"></i>
                                    </span>
                                </div>
                                <input name='linkComPlaca' id='linkComPlaca' type='text' class='form-control' placeholder='Link de Comprobación de Placa' data-toggle='tooltip' data-placement='bottom' title='Ingresa Link Comprobacion de Placa'>
                                <label for='floatingInput' class='pl-5'>*Link de Comprobación de Placa</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer text-left">
                    <button type="submit" class="btn btn-secondary" ><i class="fas fa-pen"></i> Guardar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Salir</button>
                </div>
            </form>
            <div class="pie">
                <h5>2.3.9.1 Registrar Comprobación de Placa</h5>
            </div>
        </div>
    </div>
</div>
