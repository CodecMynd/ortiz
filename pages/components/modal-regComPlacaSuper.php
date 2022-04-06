<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<div class="modal fade regComPlacasSuper" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    Registrar Supervisión de Comprobacion de Placa de Número de Proyecto: <span id="tituloModal"></span>
                </h5>
            </div>
            <form id="formNuevoRegComPlacaSuper" action="../adds/addNuevoRegComPlacasSuper.php" method="POST">
            <!-- <form id="formNuevoRegComPlacaSuper">  -->
                <div class="modal-body">
                    <div class='row justify-content-center'>
                        <input type="hidden" name="id_proyecto2" id="id_proyecto2" value="">
                        <div class='col-md-12 col-sm-12 my-1'>
                            <div class='form-group-input' style='border: 1px solid #CED4DA;'>
                                <label class='pl-2 mb-2'>Supervisión</label>
                                <span data-toggle='tooltip' title='max. 200 caracteres'>
                                    <div class='input-group'>
                                        <div class='input-group-prepend'>
                                            <span class='input-group-text'><i class='fa-solid fa-comments'></i></span>
                                        </div>
                                        <textarea name='textSupervision' id='textSupervision' class='form-control' rows='4' placeholder='Max. 200 caracteres'></textarea>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer text-left">
                    <button type="submit"  class="btn btn-secondary"><i class="fa-solid fa-pencil"></i> Guardar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Salir</button>
                </div>
            </form>
            <div class="pie">
                <h5>2.3.9.3 Registrar Supervisión Comprobación de Placa</h5>
            </div>
        </div>
    </div>
</div>
