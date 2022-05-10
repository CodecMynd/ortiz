<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<div class="modal fade regVerifDiaBatSuper" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    Registrar Supervisión de Comprobación Diaria del Número de Proyecto: <strong><span id="tituloModal2"></span></strong>
                </h5>
            </div>
            <form id="formNuevoRegVerifDiaBatSuper">
                <div class="modal-body">
                    <div class='row justify-content-center'>
                        <input type="hidden" name="id_proyecto2" id="id_proyecto2" value="">
                        <input type="hidden" name="nProyecto2" id="nProyecto2" value="">
                        <input type="hidden" name="id_verifDiaBat2" id="id_verifDiaBat2" value="">
                        <div class='col-md-12 col-sm-12 my-1'>
                            <div class='form-group-input' style='border: 1px solid #CED4DA;'>
                                <label class='pl-2 mb-2'>*Supervisión Link de Video en Vivo</label>
                                <span data-toggle='tooltip' title='max. 200 caracteres'>
                                    <div class='input-group'>
                                        <div class='input-group-prepend'>
                                            <span class='input-group-text'><i class='fa-solid fa-comments'></i></span>
                                        </div>
                                        <textarea name='textSupervision' id='textSupervision' class='form-control' rows='2' placeholder='Max. 200 caracteres'></textarea>
                                    </div>
                                </span>
                            </div>
                        </div>
                        <div class="col-12">
                            <hr>
                        </div>
                        <div class="col-12" style='border: 1px solid #CED4DA'>
                            <div class="col-12">
                                <h5 class="text-center font-weight-bold">Incidencias Baterias</h5>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-4 col-sm-6 col-12">
                                    <button type="button" class="btn btn-permisos">
                                        <div class="info-box">
                                            <span class="info-box-icon bg-secondary"><i class="fa-solid fa-check"></i></span>
                                            <div class="info-box-content">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" name="sup" id="sup" value="1">
                                                    <label class="form-check-label" for="flexSwitchCheckDefault">
                                                        <h6><strong>¿Reportar Incidencia?</strong></h4>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </button>
                                </div>
                                <div class="col-12">
                                    <h5 class="text-red text-center parpadea">Al habilitar esta opción, deberá Comentar la Incidencia en el siguiente campo </h5>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class='col-md-12 col-sm-12 my-1'>
                            <div class='form-group-input' style='border: 1px solid #CED4DA;'>
                                <label class='pl-2 mb-2'>Comentar Incidencia (Supervisión)</label>
                                <span data-toggle='tooltip' title='max. 200 caracteres'>
                                    <div class='input-group'>
                                        <div class='input-group-prepend'>
                                            <span class='input-group-text'><i class='fa-solid fa-comments'></i></span>
                                        </div>
                                        <textarea name='incidencia' id='incidencia' class='form-control' rows='2' placeholder='Max. 200 caracteres' maxlength="200"></textarea>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer text-left">
                    <button type="button" id="btnNuevoRegVerifDiaBatSuper" class="btn btn-secondary"><i class="fa-solid fa-pencil"></i> Guardar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Salir</button>
                </div>
            </form>
            <div class="row justify-content-center">
                <div class="col-10">
                    <div id="respuestaNuevoRegVerifDiaBatSuper"></div>
                </div>
            </div>
            <div class="pie">
                <h5>2.3.3.2 Registro Supervisión de Comprobación Diaria Baterías</h5>
            </div>
        </div>
    </div>
</div>
